<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos;
use Uci\Bundle\BaseDatosBundle\Form\GrupoProcesosType;

/**
 * GrupoProcesos controller.
 *
 */
class GrupoProcesosController extends Controller
{

    /**
     * Lists all GrupoProcesos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->findAll();

        return $this->render('UciBaseDatosBundle:GrupoProcesos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new GrupoProcesos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new GrupoProcesos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('grupoprocesos_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:GrupoProcesos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a GrupoProcesos entity.
     *
     * @param GrupoProcesos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(GrupoProcesos $entity)
    {
        $form = $this->createForm(new GrupoProcesosType(), $entity, array(
            'action' => $this->generateUrl('grupoprocesos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new GrupoProcesos entity.
     *
     */
    public function newAction()
    {
        $entity = new GrupoProcesos();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:GrupoProcesos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a GrupoProcesos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GrupoProcesos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:GrupoProcesos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing GrupoProcesos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GrupoProcesos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:GrupoProcesos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a GrupoProcesos entity.
    *
    * @param GrupoProcesos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(GrupoProcesos $entity)
    {
        $form = $this->createForm(new GrupoProcesosType(), $entity, array(
            'action' => $this->generateUrl('grupoprocesos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing GrupoProcesos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GrupoProcesos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('grupoprocesos_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:GrupoProcesos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a GrupoProcesos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find GrupoProcesos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('grupoprocesos'));
    }

    /**
     * Creates a form to delete a GrupoProcesos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('grupoprocesos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
