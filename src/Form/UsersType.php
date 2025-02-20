<?php

namespace App\Form;

use App\Entity\Commercial;
use App\Entity\Users;
use App\Entity\UserType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('adresse')
            ->add('codepostal')
            ->add('ville')
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'ROLE_ADMIN',
                    'User' => 'ROLE_USER',
                    'Commercial' => 'ROLE_COMMERCIAL',
                    'Client Particulier' => 'ROLE_CLIENT_PARTICULIER',
                    'Client Professionnel' => 'ROLE_CLIENT_PROFESSIONEL'
                ],
                'multiple' => true,
                'expanded' => false,
            ])
            ->add('created_at', null, [
                'widget' => 'single_text',
            ])
            ->add('usertype', EntityType::class, [
                'class' => UserType::class,
                'choice_label' => 'id',
            ])
          /*   ->add('commercial', EntityType::class, [
                'class' => Commercial::class,
                'choice_label' => 'id',
            ]) */
            ->add('Password', PasswordType::class);

        // Show `numeroSiret` only for ROLE_CLIENT_PROFESSIONNEL and ROLE_ADMIN
        if (in_array('ROLE_ADMIN', $options['user_role']) || in_array('ROLE_CLIENT_PROFESSIONEL', $options['user_role'])) {
            $builder->add('numeroSiret');
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
            'user_role' => [] // Default empty, must be passed from the controller
        ]);
    }
}
