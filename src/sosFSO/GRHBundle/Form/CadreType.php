<?php

namespace sosFSO\GRHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CadreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('echelle')
            ->add('description')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\GRHBundle\Entity\Cadre'
        ));
    }

    public function getName()
    {
        return 'sosfso_grhbundle_cadretype';
    }
}
