<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Formulaire de register
 *
 * @author Carlos Dartois <carlos@kinomap.com>
 */
class RegisterType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civility', ChoiceType::class, [
                'label' => 'Civilité',
                'required' => true,
                'attr' => [
                    'id' => 'civility',
                    'class' => 'form-control',
                ],
                'choices' => [
                    '-' => '',
                    'Mr' => 'Mr',
                    'Mme' => 'Mme',
                    'Mlle' => 'Mlle',
                ],
            ])
            ->add('username', TextType::class, [
                'label' => 'Identifiant de connexion*',
                'required' => true,
                'attr' => [
                    'id' => 'username',
                    'class' => 'form-control',
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse professionnelle*',
                'required' => true,
                'attr' => [
                    'id' => 'address',
                    'class' => 'form-control',
                ],
            ])
            ->add('postalCode', TextType::class, [
                'label' => 'Code postal*',
                'required' => true,
                'attr' => [
                    'id' => 'postalCode',
                    'class' => 'form-control',
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville*',
                'required' => true,
                'attr' => [
                    'id' => 'city',
                    'class' => 'form-control',
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe*',
                'required' => true,
                'attr' => [
                    'id' => 'password',
                    'class' => 'form-control',
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom*',
                'required' => true,
                'attr' => [
                    'id' => 'lastName',
                    'class' => 'form-control',
                ],
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'attr' => [
                    'id' => 'firstName',
                    'class' => 'form-control',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Courriel*',
                'required' => true,
                'attr' => [
                    'id' => 'email',
                    'class' => 'form-control',
                ],
            ])
            ->add('persoPhone', TextType::class, [
                'label' => 'Téléphone portable',
                'required' => true,
                'attr' => [
                    'id' => 'persoPhone',
                    'class' => 'form-control',
                ],
            ])
            ->add('proPhone', TextType::class, [
                'label' => 'Téléphone du cabinet',
                'required' => true,
                'attr' => [
                    'id' => 'proPhone',
                    'class' => 'form-control',
                ],
            ])
            ->add('ensure', CheckboxType::class, [
                'required' => false,
                'label' => 'Je souhaite faire assurer mon secrétariat par le Réseau',
                'attr' => [
                    'id' => 'ensure',
                    'class' => 'form-check-input ensure',
                ],
            ])

            ->add('notensure', CheckboxType::class, [
                'required' => false,
                'mapped' => false,
                'label' => 'Je souhaite gérer moi même mon secrétariat',
                'attr' => [
                    'id' => 'notensure',
                    'class' => 'form-check-input notensure',
                ],
            ])

            ->add('publicPhone', TextType::class, [
                'label' => 'N° tél. À communiquer aux patients :',
                'required' => false,
                'attr' => [
                    'id' => 'publicPhone',
                    'class' => 'form-control publicPhone',
                ],
            ])
            ->add('privatePhone', TextType::class, [
                'label' => 'N° tel. Personnel ou portable non communiqué aux patients :',
                'required' => false,
                'attr' => [
                    'id' => 'privatePhone',
                    'class' => 'form-control privatePhone',
                ],
            ])
            ->add('cabinetRepere', TextType::class, [
                'label' => 'Repère pour situer votre cabinet',
                'required' => false,
                'attr' => [
                    'id' => 'cabinetRepere',
                    'class' => 'form-control',
                ],
            ])
            ->add('canStagiaire', CheckboxType::class, [
                'required' => false,
                'label' => 'Je souhaite accueillir un stagiaire MK de 3ème année durant mes gardes',
                'attr' => [
                    'id' => 'canStagiaire',
                    'class' => 'form-check-input',
                ],
            ])
            ->add('rppsNumber', TextType::class, [
                'label' => 'Numéro RPPS (11 caractères)*',
                'required' => true,
                'attr' => [
                    'id' => 'rpps',
                    'placeholder' => 'ex: 10001234567',
                    'class' => 'form-control',
                ],
            ])
            ->add('iban', TextType::class, [
                'label' => 'IBAN*',
                'required' => true,
                'attr' => [
                    'id' => 'iban',
                    'class' => 'form-control',
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Adhérer',
                'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'border-radius:0; background-color: #0071BC; border-color: #0071BC;',
                ],
            ]);
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
