<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Group;
use App\Entity\CustomFields;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomFieldsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',null,[
                'attr' => ['class' => 'form-control',
                    'id' => 'contact_name',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'contact_name',
                ],
            ])
            ->add('description', null,[
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'contact_description',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'contact_description',
                ],
            ]);
    
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CustomFields::class,
        ]);
    }
}
