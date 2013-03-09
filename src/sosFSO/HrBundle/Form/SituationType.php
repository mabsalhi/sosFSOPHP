<?php

namespace sosFSO\HrBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SituationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('echelon')
            ->add('numeroInference')
            ->add('dateEffets')
            ->add('anciennete')
            ->add('personne')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\HrBundle\Entity\Situation'
        ));
    }

    public function getName()
    {
        return 'sosfso_hrbundle_situationtype';
    }
}
