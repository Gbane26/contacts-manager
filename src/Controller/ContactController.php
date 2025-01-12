<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Group;
use App\Entity\CustomFields;
use App\Form\ContactType;
use App\Form\CustomFieldsType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contact')]
final class ContactController extends AbstractController
{
    #[Route('/', name: 'app_contact_index', methods: ['GET'])]
    public function index(ContactRepository $contactRepository): Response
    {
        return $this->render('contact/index.html.twig', [
            'contacts' => $contactRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_contact_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du champ "newGroup"
            $newGroup = $form->get('newGroup')->getData();
            if (!empty($newGroup)) {
                $group = new Group();
                $group->setName($newGroup);
                // Persist le nouveau groupe
                $entityManager->persist($group);
                // Associe le groupe au contact
                $contact->setGroupName($group);
            }

            // Gestion de l'upload de la photo
            $photo = $form->get('photo')->getData();
            if ($photo) {
                try {
                    $filename = uniqid() . '.' . $photo->guessExtension();
                    $photo->move($this->getParameter('photos_directory'), $filename);
                    $contact->setPhoto($filename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de la photo.');
                    return $this->redirectToRoute('app_contact_new');
                }
            }

            // Persiste le contact
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_contact_index');
        }

        return $this->render('contact/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}', name: 'app_contact_show', methods: ['GET', 'POST'])]
    public function show(Request $request, EntityManagerInterface $entityManager, Contact $contact): Response
    {
        $customFields = new CustomFields();
        $form = $this->createForm(CustomFieldsType::class, $customFields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $customFields->setContact($contact);
            $entityManager->persist($customFields);
            $entityManager->flush();

            return $this->redirectToRoute('app_contact_show', [
                'id' => $contact->getId(),
            ]);
        }

        return $this->render('contact/show.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}/edit', name: 'app_contact_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contact $contact, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_contact_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contact/edit.html.twig', [
            'contact' => $contact,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_contact_delete', methods: ['POST'])]
    public function delete(Request $request, Contact $contact, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $contact->getId(), $request->request->get('_token'))) {
            // Supprimer les enregistrements dans custom_fields associés au contact
            $customFields = $entityManager->getRepository(CustomFields::class)->findBy(['contact' => $contact]);
            foreach ($customFields as $field) {
                $entityManager->remove($field);
            }
    
            // Supprimer le contact
            $entityManager->remove($contact);
            $entityManager->flush();
    
            // Si nécessaire, supprimer le groupe associé si ce dernier est vide
            $group = $contact->getGroupName();
            if ($group) {
                $isGroupEmpty = $entityManager->getRepository(Contact::class)
                    ->createQueryBuilder('c')
                    ->select('COUNT(c.id)')
                    ->where('c.groupName = :group')
                    ->setParameter('group', $group)
                    ->getQuery()
                    ->getSingleScalarResult();
    
                if ($isGroupEmpty == 0) {
                    $entityManager->remove($group);
                    $entityManager->flush();
                }
            }
        }
    
        return $this->redirectToRoute('app_contact_index');
    }
    


    #[Route('/contact/search', name: 'contact_search')]
    public function search(Request $request, EntityManagerInterface $entityManager)
    {
        $query = $request->query->get('q', '');

        $contacts = $entityManager->getRepository(Contact::class)->createQueryBuilder('c')
            ->where('c.firstName LIKE :query')
            ->orWhere('c.lastName LIKE :query')
            ->orWhere('c.phoneNumber LIKE :query')
            ->orWhere('JSON_CONTAINS(c.customFields, :query) = 1')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();

        return $this->render('contact/search.html.twig', [
            'contacts' => $contacts,
            'query' => $query,
        ]);
    }
}
