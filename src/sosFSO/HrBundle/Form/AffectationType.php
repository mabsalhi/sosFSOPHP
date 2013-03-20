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
            ->add('dateAffectation','date',array(
	            'widget' => 'single_text',
	            'format' => 'dd-MM-yyyy',
	            'attr' => array('class' => 'date')
	        ))
            ->add('poste')
            ->add('dateDetachement','date',array(
	            'widget' => 'single_text',
	            'format' => 'dd-MM-yyyy',
	            'attr' => array('class' => 'date')
	        ))
            ->add('remarques')
            ->add('personne','genemu_jqueryautocomplete_text', array(
            'route_name' => 'ajax'
        ))
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
