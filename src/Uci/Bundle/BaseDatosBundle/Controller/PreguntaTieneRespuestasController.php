<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\PreguntaTieneRespuestas;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaTieneRespuestasType;

/**
 * PreguntaTieneRespuestas controller.
 *
 */
class PreguntaTieneRespuestasController extends Controller
{

    /**
     * Lists all PreguntaTieneRespuestas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:PreguntaTieneRespuestas')->findAll();

        return $this->render('UciBaseDatosBundle:PreguntaTieneRespuestas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PreguntaTieneRespuestas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PreguntaTieneRespuestas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('preguntatienerespuestas_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:PreguntaTieneRespuestas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PreguntaTieneRespuestas entity.
     *
     * @param PreguntaTieneRespuestas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PreguntaTieneRespuestas $entity)
    {
        $form = $this->createForm(new PreguntaTieneRespuestasType(), $entity, array(
            'action' => $this->generateUrl('preguntatienerespuestas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PreguntaTieneRespuestas entity.
     *
     */
    public function newAction()
    {
        $entity = new PreguntaTieneRespuestas();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:PreguntaTieneRespuestas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PreguntaTieneRespuestas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:PreguntaTieneRespuestas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PreguntaTieneRespuestas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:PreguntaTieneRespuestas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PreguntaTieneRespuestas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:PreguntaTieneRespuestas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PreguntaTieneRespuestas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:PreguntaTieneRespuestas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PreguntaTieneRespuestas entity.
    *
    * @param PreguntaTieneRespuestas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PreguntaTieneRespuestas $entity)
    {
        $form = $this->createForm(new PreguntaTieneRespuestasType(), $entity, array(
            'action' => $this->generateUrl('preguntatienerespuestas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PreguntaTieneRespuestas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:PreguntaTieneRespuestas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PreguntaTieneRespuestas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('preguntatienerespuestas_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:PreguntaTieneRespuestas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PreguntaTieneRespuestas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:PreguntaTieneRespuestas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PreguntaTieneRespuestas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('preguntatienerespuestas'));
    }

    /**
     * Creates a form to delete a PreguntaTieneRespuestas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('preguntatienerespuestas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
