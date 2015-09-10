<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba;
use Uci\Bundle\BaseDatosBundle\Form\TipoPruebaType;

/**
 * TipoPrueba controller.
 *
 */
class TipoPruebaController extends Controller
{

    /**
     * Lists all TipoPrueba entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:TipoPrueba')->findAll();

        return $this->render('UciBaseDatosBundle:TipoPrueba:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoPrueba entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoPrueba();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipoprueba_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:TipoPrueba:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoPrueba entity.
     *
     * @param TipoPrueba $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoPrueba $entity)
    {
        $form = $this->createForm(new TipoPruebaType(), $entity, array(
            'action' => $this->generateUrl('tipoprueba_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoPrueba entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoPrueba();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:TipoPrueba:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoPrueba entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPrueba')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPrueba entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPrueba:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoPrueba entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPrueba')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPrueba entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPrueba:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoPrueba entity.
    *
    * @param TipoPrueba $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoPrueba $entity)
    {
        $form = $this->createForm(new TipoPruebaType(), $entity, array(
            'action' => $this->generateUrl('tipoprueba_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoPrueba entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPrueba')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPrueba entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipoprueba_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:TipoPrueba:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoPrueba entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:TipoPrueba')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoPrueba entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipoprueba'));
    }

    /**
     * Creates a form to delete a TipoPrueba entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoprueba_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
