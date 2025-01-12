<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Group;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName',null,[
                'attr' => ['class' => 'form-control',
                    'id' => 'contact_firstName',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'contact_firstName',
                ],
            ])
            ->add('lastName', null,[
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'contact_lastName',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'contact_lastName',
                ],
            ])
            ->add('phoneNumber', null, [
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'contact_phoneNumber',
                    'type' => 'number',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'contact_phoneNumber',
                ],
            ])
            ->add('email', null, [
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'contact_email',
                    'type' => 'email',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'contact_email',
                ],
            ])
            ->add('photo', FileType::class, [
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'contact_photo',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'contact_photo',
                ],
            ])
            // ->add('customFields', TextareaType::class, [
            //     'required' => false,
            //     'attr' => [
            //         'class' => 'form-control',
            //         'id' => 'contact_customFields',
            //         'rows' => 4,
            //         'placeholder' => 'JSON format for additional fields',
            //     ],
            //     'label_attr' => [
            //         'class' => 'form-label',
            //         'for' => 'contact_customFields',
            //     ],
            // ])
            ->add('groupName', EntityType::class, [
                'class' => Group::class,
                'choice_label' => 'name',
                'required' => false,
                'placeholder' => 'Sélectionnez un groupe...',
                'attr' => ['class' => 'form-control', 'id' => 'contact_groupName'],
                'label_attr' => ['class' => 'form-label', 'for' => 'contact_groupName'],
            ])
            ->add('newGroup', TextType::class, [
                'mapped' => false, // Champ non mappé directement à l'entité
                'required' => false,
                'attr' => ['class' => 'form-control', 'id' => 'contact_newGroup', 'placeholder' => 'Ajouter un nouveau groupe'],
                'label' => 'Ajouter un nouveau groupe',
                'label_attr' => ['class' => 'form-label', 'for' => 'contact_newGroup'],
            ]);
        // Gestion dynamique pour assigner le nouveau groupe s'il est saisi
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            // Récupération du champ 'newGroup'
            $newGroup = $form->get('newGroup')->getData();
            if (!empty($newGroup)) {
                // Créez un nouveau groupe et assignez-le (le gestionnaire EntityManager est nécessaire ici)
                $group = new Group();
                $group->setName($newGroup);

                // Associez le contact au nouveau groupe
                $data->setGroupName($group);
            }
        });
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
