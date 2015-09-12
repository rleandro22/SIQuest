<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\CuestionarioAsignadoAUsuario;
use Uci\Bundle\BaseDatosBundle\Form\CuestionarioAsignadoAUsuarioType;

/**
 * CuestionarioAsignadoAUsuario controller.
 *
 */
class CuestionarioAsignadoAUsuarioController extends Controller
{

    /**
     * Lists all CuestionarioAsignadoAUsuario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:CuestionarioAsignadoAUsuario')->findAll();

        return $this->render('UciBaseDatosBundle:CuestionarioAsignadoAUsuario:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CuestionarioAsignadoAUsuario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CuestionarioAsignadoAUsuario();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cuestionarioasignadoausuario_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:CuestionarioAsignadoAUsuario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CuestionarioAsignadoAUsuario entity.
     *
     * @param CuestionarioAsignadoAUsuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CuestionarioAsignadoAUsuario $entity)
    {
        $form = $this->createForm(new CuestionarioAsignadoAUsuarioType(), $entity, array(
            'action' => $this->generateUrl('cuestionarioasignadoausuario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CuestionarioAsignadoAUsuario entity.
     *
     */
    public function newAction()
    {
        $entity = new CuestionarioAsignadoAUsuario();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:CuestionarioAsignadoAUsuario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CuestionarioAsignadoAUsuario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioAsignadoAUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuestionarioAsignadoAUsuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:CuestionarioAsignadoAUsuario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CuestionarioAsignadoAUsuario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioAsignadoAUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuestionarioAsignadoAUsuario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:CuestionarioAsignadoAUsuario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CuestionarioAsignadoAUsuario entity.
    *
    * @param CuestionarioAsignadoAUsuario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CuestionarioAsignadoAUsuario $entity)
    {
        $form = $this->createForm(new CuestionarioAsignadoAUsuarioType(), $entity, array(
            'action' => $this->generateUrl('cuestionarioasignadoausuario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CuestionarioAsignadoAUsuario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioAsignadoAUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuestionarioAsignadoAUsuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cuestionarioasignadoausuario_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:CuestionarioAsignadoAUsuario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CuestionarioAsignadoAUsuario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioAsignadoAUsuario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CuestionarioAsignadoAUsuario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cuestionarioasignadoausuario'));
    }

    /**
     * Creates a form to delete a CuestionarioAsignadoAUsuario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuestionarioasignadoausuario_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
