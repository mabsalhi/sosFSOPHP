<?php

namespace sosFSO\GRHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AffectationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateAffectation')
            ->add('poste')
            ->add('dateDetachement')
            ->add('remarques')
            ->add('service')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\GRHBundle\Entity\Affectation'
        ));
    }

    public function getName()
    {
        return 'sosfso_grhbundle_affectationtype';
    }
}
