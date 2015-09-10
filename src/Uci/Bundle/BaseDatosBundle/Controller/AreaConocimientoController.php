<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento;
use Uci\Bundle\BaseDatosBundle\Form\AreaConocimientoType;

/**
 * AreaConocimiento controller.
 *
 */
class AreaConocimientoController extends Controller
{

    /**
     * Lists all AreaConocimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->findAll();

        return $this->render('UciBaseDatosBundle:AreaConocimiento:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AreaConocimiento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AreaConocimiento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('areaconocimiento_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:AreaConocimiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AreaConocimiento entity.
     *
     * @param AreaConocimiento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AreaConocimiento $entity)
    {
        $form = $this->createForm(new AreaConocimientoType(), $entity, array(
            'action' => $this->generateUrl('areaconocimiento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AreaConocimiento entity.
     *
     */
    public function newAction()
    {
        $entity = new AreaConocimiento();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:AreaConocimiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AreaConocimiento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AreaConocimiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:AreaConocimiento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AreaConocimiento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AreaConocimiento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:AreaConocimiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AreaConocimiento entity.
    *
    * @param AreaConocimiento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AreaConocimiento $entity)
    {
        $form = $this->createForm(new AreaConocimientoType(), $entity, array(
            'action' => $this->generateUrl('areaconocimiento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AreaConocimiento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AreaConocimiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('areaconocimiento_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:AreaConocimiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AreaConocimiento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AreaConocimiento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('areaconocimiento'));
    }

    /**
     * Creates a form to delete a AreaConocimiento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('areaconocimiento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
