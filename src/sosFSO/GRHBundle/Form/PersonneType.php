<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sosFSO\GRHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of PersonneType
 *
 * @author abdel
 */
class PersonneType extends AbstractType {

    //put your code here

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('cin', 'text')
                ->add('som', 'integer')
                ->add('posteBudgetaire', 'integer')
                ->add('dateNaissance', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => array('class' => 'date')
                ))
                ->add('lieuNaissance', 'integer')
                ->add('etatMatrimonial', 'text')
                ->add('sexe', 'choice', array(
                    'choices' => array(
                        'true' => 'Male',
                        'false' => 'female'
                    ),
                    'required' => true,
                    'empty_value' => 'Choisir le sexe',
                    'empty_data' => null
                ))
                ->add('nbEnfants', 'integer')
                ->add('numTelephonne', 'integer')
                ->add('dateRecrutement', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => array('class' => 'date')
                ))
                ->add('photo', 'text')
                ->add('adresse', 'textarea');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\GRHBundle\Entity\Personne'
        ));
    }

    public function getName() {
        return 'sosfso_grhbundle_personnetype';
    }

}

?>
