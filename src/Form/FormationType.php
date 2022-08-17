<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Formulaire de création de formation
 *
 * @author Carlos Dartois <carlos@kinomap.com>
 */
class FormationType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Nom de la formation',
                'required' => true,
                'attr' => [
                    'id'    => 'title',
                    'class' => 'form-control'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'id'    => 'description',
                    'class' => 'form-control',
                    'style' => 'max-width:100%'
                ]
            ])
            ->add('intervenant', TextType::class, [
                'label' => 'Intervenant',
                'required' => true,
                'attr' => [
                    'id'    => 'intervenant',
                    'class' => 'form-control'
                ]
            ])
            ->add('date', TextType::class, [
                'label' => 'Date de la formation',
                'required' => true,
                'attr' => [
                    'id'    => 'date',
                    'class' => 'form-control formationDate'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn btn-success',
                ],
            ]);

        $builder->get('date')->addModelTransformer(new DateTimeToStringTransformer());
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formation::class
        ]);
    }
}
