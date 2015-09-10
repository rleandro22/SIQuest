<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\Profesor;
use Uci\Bundle\BaseDatosBundle\Form\ProfesorType;

/**
 * Profesor controller.
 *
 */
class ProfesorController extends Controller
{

    /**
     * Lists all Profesor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:Profesor')->findAll();

        return $this->render('UciBaseDatosBundle:Profesor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Profesor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Profesor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('profesor_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:Profesor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Profesor entity.
     *
     * @param Profesor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Profesor $entity)
    {
        $form = $this->createForm(new ProfesorType(), $entity, array(
            'action' => $this->generateUrl('profesor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Profesor entity.
     *
     */
    public function newAction()
    {
        $entity = new Profesor();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:Profesor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Profesor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Profesor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profesor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Profesor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Profesor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Profesor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profesor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Profesor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Profesor entity.
    *
    * @param Profesor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Profesor $entity)
    {
        $form = $this->createForm(new ProfesorType(), $entity, array(
            'action' => $this->generateUrl('profesor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Profesor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Profesor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profesor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('profesor_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:Profesor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Profesor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:Profesor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Profesor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('profesor'));
    }

    /**
     * Creates a form to delete a Profesor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profesor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
