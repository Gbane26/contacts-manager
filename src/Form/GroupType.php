<?php

namespace App\Form;

use App\Entity\Group;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',null,[
                'attr' => ['class' => 'form-control',
                    'id' => 'group_name',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                    'for' => 'group_name',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Group::class,
        ]);
    }

    #[ORM\PostRemove]
    public function checkEmpty(EntityManagerInterface $em): void
    {
        if ($this->contacts->isEmpty()) {
            $em->remove($this);
            $em->flush();
        }
    }
}
