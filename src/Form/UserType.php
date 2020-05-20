<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Username')
            ->add('Username_cononice')
            ->add('Email')
            ->add('Email_canonical')
            ->add('Enabled')
            ->add('Salt')
            ->add('Password')
            ->add('Last_login')
            ->add('Confirmation_token')
            ->add('Password_requestes')
            ->add('Roles')
            ->add('Last_activity')
            ->add('Tel_nr')
            ->add('Mobile_nr')
            ->add('First_name')
            ->add('Insertion_name')
            ->add('Last_name')
            ->add('Adress')
            ->add('Zip')
            ->add('City')
            ->add('Country')
            ->add('Function')
            ->add('Organisation_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
