<?php

namespace sosFSO\HrBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sosFSO\HrBundle\Entity\Cadre;
use sosFSO\HrBundle\Form\CadreType;

/**
 * Cadre controller.
 *
 * @Route("/cadre")
 */
class CadreController extends Controller
{
    /**
     * Lists all Cadre entities.
     *
     * @Route("/", name="cadre")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sosFSOHrBundle:Cadre')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Cadre entity.
     *
     * @Route("/", name="cadre_create")
     * @Method("POST")
     * @Template("sosFSOHrBundle:Cadre:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Cadre();
        $form = $this->createForm(new CadreType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cadre_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Cadre entity.
     *
     * @Route("/new", name="cadre_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Cadre();
        $form   = $this->createForm(new CadreType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Cadre entity.
     *
     * @Route("/{id}", name="cadre_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sosFSOHrBundle:Cadre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cadre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cadre entity.
     *
     * @Route("/{id}/edit", name="cadre_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sosFSOHrBundle:Cadre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cadre entity.');
        }

        $editForm = $this->createForm(new CadreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Cadre entity.
     *
     * @Route("/{id}", name="cadre_update")
     * @Method("PUT")
     * @Template("sosFSOHrBundle:Cadre:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sosFSOHrBundle:Cadre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cadre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CadreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cadre_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Cadre entity.
     *
     * @Route("/{id}", name="cadre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sosFSOHrBundle:Cadre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cadre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cadre'));
    }

    /**
     * Creates a form to delete a Cadre entity by id.
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
