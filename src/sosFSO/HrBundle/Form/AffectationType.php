<?php

namespace sosFSO\HrBundle\Form;

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
            ->add('personne')
            ->add('service')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\HrBundle\Entity\Affectation'
        ));
    }

    public function getName()
    {
        return 'sosfso_hrbundle_affectationtype';
    }
}
