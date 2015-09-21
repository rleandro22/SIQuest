<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\TipoPreguntaNumerica;
use Uci\Bundle\BaseDatosBundle\Form\TipoPreguntaNumericaType;

/**
 * TipoPreguntaNumerica controller.
 *
 */
class TipoPreguntaNumericaController extends Controller
{

    /**
     * Lists all TipoPreguntaNumerica entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:TipoPreguntaNumerica')->findAll();

        return $this->render('UciBaseDatosBundle:TipoPreguntaNumerica:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoPreguntaNumerica entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoPreguntaNumerica();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipopreguntanumerica_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:TipoPreguntaNumerica:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoPreguntaNumerica entity.
     *
     * @param TipoPreguntaNumerica $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoPreguntaNumerica $entity)
    {
        $form = $this->createForm(new TipoPreguntaNumericaType(), $entity, array(
            'action' => $this->generateUrl('tipopreguntanumerica_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoPreguntaNumerica entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoPreguntaNumerica();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:TipoPreguntaNumerica:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoPreguntaNumerica entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPreguntaNumerica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPreguntaNumerica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPreguntaNumerica:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoPreguntaNumerica entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPreguntaNumerica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPreguntaNumerica entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPreguntaNumerica:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoPreguntaNumerica entity.
    *
    * @param TipoPreguntaNumerica $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoPreguntaNumerica $entity)
    {
        $form = $this->createForm(new TipoPreguntaNumericaType(), $entity, array(
            'action' => $this->generateUrl('tipopreguntanumerica_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoPreguntaNumerica entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPreguntaNumerica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPreguntaNumerica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipopreguntanumerica_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:TipoPreguntaNumerica:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoPreguntaNumerica entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:TipoPreguntaNumerica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoPreguntaNumerica entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipopreguntanumerica'));
    }

    /**
     * Creates a form to delete a TipoPreguntaNumerica entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipopreguntanumerica_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
