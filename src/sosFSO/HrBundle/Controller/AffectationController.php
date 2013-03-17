<?php

namespace sosFSO\HrBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sosFSO\HrBundle\Entity\Affectation;
use sosFSO\HrBundle\Form\AffectationType;

/**
 * Affectation controller.
 *
 * @Route("/affectation")
 */
class AffectationController extends Controller
{
    /**
     * Lists all Affectation entities.
     *
     * @Route("/", name="affectation")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sosFSOHrBundle:Affectation')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Affectation entity.
     *
     * @Route("/", name="affectation_create")
     * @Method("POST")
     * @Template("sosFSOHrBundle:Affectation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Affectation();
        $form = $this->createForm(new AffectationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Affectation entity.
     *
     * @Route("/new", name="affectation_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Affectation();
        $form   = $this->createForm(new AffectationType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Affectation entity.
     *
     * @Route("/{id}", name="affectation_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sosFSOHrBundle:Affectation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Affectation entity.
     *
     * @Route("/{id}/edit", name="affectation_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sosFSOHrBundle:Affectation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectation entity.');
        }

        $editForm = $this->createForm(new AffectationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Affectation entity.
     *
     * @Route("/{id}", name="affectation_update")
     * @Method("PUT")
     * @Template("sosFSOHrBundle:Affectation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sosFSOHrBundle:Affectation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AffectationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectation_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Affectation entity.
     *
     * @Route("/{id}", name="affectation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sosFSOHrBundle:Affectation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Affectation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('affectation'));
    }

    /**
     * Creates a form to delete a Affectation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
