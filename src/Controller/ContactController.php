<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Group;
use App\Form\ContactType;
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
        // Récupération des groupes depuis la base de données
        $groups = $entityManager->getRepository(Group::class)->findAll();

        // Si un groupe est déjà sélectionné, récupérez-le, sinon laissez-le vide
        $group = $request->get('contact')['groupName'] ?? null;

        if ($group) {
            $group = $entityManager->getRepository(Group::class)->find($group);
            if ($group) {
                $contact->setGroupName($group);
            }
        }

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si le contact est le premier dans un groupe, vérifiez si le groupe existe
            $group = $contact->getGroupName();
            if ($group && !$group->getContacts()->count()) {
                // Si aucun autre contact n'est associé à ce groupe, supprimez-le
                $entityManager->remove($group);
            }
            // Sauvegarde du contact
            //dd($contact);
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_contact_index');
        }
        //dd($contact);
        return $this->render('contact/new.html.twig', [
            'form' => $form->createView(),
            'groups' => $groups,  
        ]);
    }

    #[Route('/{id}', name: 'app_contact_show', methods: ['GET'])]
    public function show(Contact $contact): Response
    {
        return $this->render('contact/show.html.twig', [
            'contact' => $contact,
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

    #[Route('/{id}', name: 'app_contact_delete', methods: ['POST'])]
    public function delete(Request $request, Contact $contact, EntityManagerInterface $entityManager): Response
    {
        // Récupérer le groupe avant de supprimer le contact
        $group = $contact->getGroupName();

        if ($this->isCsrfTokenValid('delete'.$contact->getId(), $request->request->get('_token'))) {
            // Supprimer le contact
            $entityManager->remove($contact);
            $entityManager->flush();

            // Si le groupe est maintenant vide, le supprimer
            if ($group && $group->getContacts()->isEmpty()) {
                $entityManager->remove($group);
                $entityManager->flush();
            }
        }

        return $this->redirectToRoute('app_contact_index', [], Response::HTTP_SEE_OTHER);
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
