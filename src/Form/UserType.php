<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Formulaire pour edit les infos d'un user
 *
 * @author Carlos Dartois <carlos@kinomap.com>
 */
class UserType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civility', ChoiceType::class, [
                'label'   => 'Civilité',
                'required' => true,
                'attr' => [
                    'id' => 'civility',
                    'class' => 'form-control'
                ],
                'choices' => [
                    '-'    => '',
                    'Mr'   => 'Mr',
                    'Mme'  => 'Mme',
                    'Mlle' => 'Mlle'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse professionnelle*',
                'required' => true,
                'attr' => [
                    'id' => 'address',
                    'class' => 'form-control'
                ]
            ])
            ->add('postalCode', TextType::class, [
                'label' => 'Code postal*',
                'required' => true,
                'attr' => [
                    'id' => 'postalCode',
                    'class' => 'form-control'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville*',
                'required' => true,
                'attr' => [
                    'id' => 'city',
                    'class' => 'form-control'
                ]
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom*',
                'required' => true,
                'attr' => [
                    'id' => 'lastName',
                    'class' => 'form-control'
                ]
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'attr' => [
                    'id' => 'firstName',
                    'class' => 'form-control'
                ]
            ])
            ->add('persoPhone', TextType::class, [
                'label' => 'Téléphone portable',
                'required' => true,
                'attr' => [
                    'id' => 'persoPhone',
                    'class' => 'form-control'
                ]
            ])
            ->add('proPhone', TextType::class, [
                'label' => 'Téléphone du cabinet',
                'required' => true,
                'attr' => [
                    'id' => 'proPhone',
                    'class' => 'form-control'
                ]
            ])
            ->add('cabinetRepere', TextType::class, [
                'label' => 'Repère pour situer votre cabinet',
                'required' => false,
                'attr' => [
                    'id' => 'cabinetRepere',
                    'class' => 'form-control'
                ]
            ])
            ->add('canStagiaire', CheckboxType::class, [
                'required' => false,
                'label' => 'Je souhaite accueillir un stagiaire MK de 3ème année durant mes gardes',
                'attr' => [
                    'id' => 'canStagiaire',
                    'class' => 'form-check-input'
                ]
            ])
            ->add('iban', TextType::class, [
                'label' => 'IBAN*',
                'required' => true,
                'attr' => [
                    'id' => 'iban',
                    'class' => 'form-control'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Modifier mes informations',
                'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'border-radius:0; background-color: #0071BC; border-color: #0071BC;'
                ],
            ]);
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}
