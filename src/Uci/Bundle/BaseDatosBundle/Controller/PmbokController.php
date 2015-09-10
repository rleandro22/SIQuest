<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\Pmbok;
use Uci\Bundle\BaseDatosBundle\Form\PmbokType;

/**
 * Pmbok controller.
 *
 */
class PmbokController extends Controller
{

    /**
     * Lists all Pmbok entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:Pmbok')->findAll();

        return $this->render('UciBaseDatosBundle:Pmbok:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Pmbok entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pmbok();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pmbok_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:Pmbok:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Pmbok entity.
     *
     * @param Pmbok $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pmbok $entity)
    {
        $form = $this->createForm(new PmbokType(), $entity, array(
            'action' => $this->generateUrl('pmbok_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pmbok entity.
     *
     */
    public function newAction()
    {
        $entity = new Pmbok();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:Pmbok:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pmbok entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Pmbok')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pmbok entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Pmbok:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pmbok entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Pmbok')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pmbok entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Pmbok:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Pmbok entity.
    *
    * @param Pmbok $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pmbok $entity)
    {
        $form = $this->createForm(new PmbokType(), $entity, array(
            'action' => $this->generateUrl('pmbok_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Pmbok entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Pmbok')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pmbok entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pmbok_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:Pmbok:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Pmbok entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:Pmbok')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pmbok entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pmbok'));
    }

    /**
     * Creates a form to delete a Pmbok entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pmbok_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
