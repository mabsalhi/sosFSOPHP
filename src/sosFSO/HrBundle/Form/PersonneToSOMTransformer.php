<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use sosFSO\HrBundle\Entity\Personne;


/**
 * Description of PersonneToSOMTransformer
 *
 * @author abdel
 */
class PersonneToSOMTransformer implements DataTransformerInterface {
    //put your code here
   
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    /**
     * Transforms an object (personne) to a string (som).
     *
     * @param  Personne|null $personne
     * @return string
     */
    public function transform($personne)
    {
        if (null === $personne) {
            return "";
        }

        return $personne->getSom();
    }

    /**
     * Transforms a string (SOM) to an object (Personne).
     *
     * @param  string $som
     *
     * @return Personne|null
     *
     * @throws TransformationFailedException if object (personne) is not found.
     */
    public function reverseTransform($som)
    {
        if (!$som) {
            return null;
        }

        $personne = $this->om
            ->getRepository('sosFSOHrBundle:Personne')
            ->findOneBy(array('som' => $som))
        ;

        if (null === $personne) {
            throw new TransformationFailedException(sprintf(
                'La Personne dont le numero de somme "%s" n existe pas!',
                $som
            ));
        }

        return $personne;
    }
    
}

?>
