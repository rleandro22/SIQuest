<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\TipoPalabraFaltante;
use Uci\Bundle\BaseDatosBundle\Form\TipoPalabraFaltanteType;

/**
 * TipoPalabraFaltante controller.
 *
 */
class TipoPalabraFaltanteController extends Controller
{

    /**
     * Lists all TipoPalabraFaltante entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:TipoPalabraFaltante')->findAll();

        return $this->render('UciBaseDatosBundle:TipoPalabraFaltante:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoPalabraFaltante entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoPalabraFaltante();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipopalabrafaltante_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:TipoPalabraFaltante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoPalabraFaltante entity.
     *
     * @param TipoPalabraFaltante $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoPalabraFaltante $entity)
    {
        $form = $this->createForm(new TipoPalabraFaltanteType(), $entity, array(
            'action' => $this->generateUrl('tipopalabrafaltante_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoPalabraFaltante entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoPalabraFaltante();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:TipoPalabraFaltante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoPalabraFaltante entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPalabraFaltante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPalabraFaltante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPalabraFaltante:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoPalabraFaltante entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPalabraFaltante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPalabraFaltante entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPalabraFaltante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoPalabraFaltante entity.
    *
    * @param TipoPalabraFaltante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoPalabraFaltante $entity)
    {
        $form = $this->createForm(new TipoPalabraFaltanteType(), $entity, array(
            'action' => $this->generateUrl('tipopalabrafaltante_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoPalabraFaltante entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPalabraFaltante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPalabraFaltante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipopalabrafaltante_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:TipoPalabraFaltante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoPalabraFaltante entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:TipoPalabraFaltante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoPalabraFaltante entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipopalabrafaltante'));
    }

    /**
     * Creates a form to delete a TipoPalabraFaltante entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipopalabrafaltante_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}