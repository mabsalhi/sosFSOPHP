<?php

namespace sosFSO\GRHBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sosFSO\GRHBundle\Entity\Situation;
use sosFSO\GRHBundle\Form\SituationType;

/**
 * Situation controller.
 *
 * @Route("/situation")
 */
class SituationController extends Controller
{
    /**
     * Lists all Situation entities.
     *
     * @Route("/", name="situation")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager('grh');

        $entities = $em->getRepository('sosFSOGRHBundle:Situation')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Situation entity.
     *
     * @Route("/", name="situation_create")
     * @Method("POST")
     * @Template("sosFSOGRHBundle:Situation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Situation();
        $form = $this->createForm(new SituationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager('grh');
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('situation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Situation entity.
     *
     * @Route("/new", name="situation_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Situation();
        $form   = $this->createForm(new SituationType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Situation entity.
     *
     * @Route("/{id}", name="situation_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager('grh');

        $entity = $em->getRepository('sosFSOGRHBundle:Situation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Situation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Situation entity.
     *
     * @Route("/{id}/edit", name="situation_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager('grh');

        $entity = $em->getRepository('sosFSOGRHBundle:Situation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Situation entity.');
        }

        $editForm = $this->createForm(new SituationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Situation entity.
     *
     * @Route("/{id}", name="situation_update")
     * @Method("PUT")
     * @Template("sosFSOGRHBundle:Situation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager('grh');

        $entity = $em->getRepository('sosFSOGRHBundle:Situation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Situation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SituationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('situation_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Situation entity.
     *
     * @Route("/{id}", name="situation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager('grh');
            $entity = $em->getRepository('sosFSOGRHBundle:Situation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Situation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('situation'));
    }

    /**
     * Creates a form to delete a Situation entity by id.
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
