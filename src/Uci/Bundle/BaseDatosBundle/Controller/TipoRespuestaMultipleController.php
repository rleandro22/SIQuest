<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\TipoRespuestaMultiple;
use Uci\Bundle\BaseDatosBundle\Form\TipoRespuestaMultipleType;

/**
 * TipoRespuestaMultiple controller.
 *
 */
class TipoRespuestaMultipleController extends Controller
{

    /**
     * Lists all TipoRespuestaMultiple entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:TipoRespuestaMultiple')->findAll();

        return $this->render('UciBaseDatosBundle:TipoRespuestaMultiple:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoRespuestaMultiple entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoRespuestaMultiple();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiporespuestamultiple_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:TipoRespuestaMultiple:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoRespuestaMultiple entity.
     *
     * @param TipoRespuestaMultiple $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoRespuestaMultiple $entity)
    {
        $form = $this->createForm(new TipoRespuestaMultipleType(), $entity, array(
            'action' => $this->generateUrl('tiporespuestamultiple_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoRespuestaMultiple entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoRespuestaMultiple();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:TipoRespuestaMultiple:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoRespuestaMultiple entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoRespuestaMultiple')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoRespuestaMultiple entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoRespuestaMultiple:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoRespuestaMultiple entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoRespuestaMultiple')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoRespuestaMultiple entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoRespuestaMultiple:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoRespuestaMultiple entity.
    *
    * @param TipoRespuestaMultiple $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoRespuestaMultiple $entity)
    {
        $form = $this->createForm(new TipoRespuestaMultipleType(), $entity, array(
            'action' => $this->generateUrl('tiporespuestamultiple_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoRespuestaMultiple entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoRespuestaMultiple')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoRespuestaMultiple entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiporespuestamultiple_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:TipoRespuestaMultiple:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoRespuestaMultiple entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:TipoRespuestaMultiple')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoRespuestaMultiple entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiporespuestamultiple'));
    }

    /**
     * Creates a form to delete a TipoRespuestaMultiple entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiporespuestamultiple_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
