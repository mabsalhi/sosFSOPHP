<?php

namespace sosFSO\GRHBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sosFSO\GRHBundle\Entity\Personne;
use sosFSO\GRHBundle\Form\PersonneType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template("sosFSOGRHBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        return $this->render("sosFSOGRHBundle:Default:index.html.twig");
    }
    
     /**
     * @Route("/personne/", name="list_personne")
     * @Template("sosFSOGRHBundle:Personne:index.html.twig")
     */
    public function listAction(){
        $em = $this->getDoctrine()
                ->getEntityManager('grh');
        $personnel = $em->getRepository('sosFSOGRHBundle:Personne')->findAll();
        
        return array('entities' => $personnel);
    }
    
    /**
     * @Route("/personne/{/id}")
     * @Template("sosFSOGRHBundle:Personne:detail.html.twig")
     */
    public function showAction($id){
        $em = $this->getDoctrine()
                ->getEntityManager('grh');
        $personne = $em->getRepository('sosFSOGRHBundle:Personne')->find($id);
        
        return array('entity' => $personne);
    }
    
     /**
     * @Route("/personne/ajouter", name="ajouter_personne")
     * @Template("sosFSOGRHBundle:Personne:ajouter.html.twig")
     */
    public function newAction(){
        
        $entity = new Personne();
        $form = $this->createForm(new PersonneType, $entity);
        
        return array('entity' => $entity, 'form' => $form->createView());
    }
    
    /**
     * @Route("/personne/")
     * @Method({"POST"})
     * @Template("sosFSOGRHBundle:Personne:ajouter.html.twig")
     */
    public function createAction(Request $request){
        
        $entity = new Personne();
        $form = $this->createForm(new PersonneType, $entity);
        $form->bind($request);
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager('grh');
            $em->persist($entity);
            $em->flush();
            
            return $this->redirect($this->generateUrl('list_personne'));
        }
        
        return array('entity' => $personne, 'form' => $form->createView());
    }
    
    
}
