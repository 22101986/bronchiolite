<?php

namespace App\Form;

use App\Entity\Archiving;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArchivingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateNewYear')
            //->add('membershipYear')
            ->add('save', SubmitType::class, [
              'label' => 'Valider',
              'attr' => [
                  'class' => 'btn btn-success',
              ],
          ]);
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Archiving::class,
        ]);
    }
}
