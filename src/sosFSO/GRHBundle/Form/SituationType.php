<?php

namespace sosFSO\GRHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SituationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('echelon')
            ->add('numeroIndicatif')
            ->add('dateEffet')
            ->add('salaireEstimatif')
            ->add('remarques')
            ->add('cadres')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\GRHBundle\Entity\Situation'
        ));
    }

    public function getName()
    {
        return 'sosfso_grhbundle_situationtype';
    }
}
