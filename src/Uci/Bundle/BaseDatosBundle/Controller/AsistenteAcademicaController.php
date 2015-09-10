<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica;
use Uci\Bundle\BaseDatosBundle\Form\AsistenteAcademicaType;

/**
 * AsistenteAcademica controller.
 *
 */
class AsistenteAcademicaController extends Controller
{

    /**
     * Lists all AsistenteAcademica entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findAll();

        return $this->render('UciBaseDatosBundle:AsistenteAcademica:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AsistenteAcademica entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AsistenteAcademica();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('asistenteacademica_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:AsistenteAcademica:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AsistenteAcademica entity.
     *
     * @param AsistenteAcademica $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AsistenteAcademica $entity)
    {
        $form = $this->createForm(new AsistenteAcademicaType(), $entity, array(
            'action' => $this->generateUrl('asistenteacademica_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AsistenteAcademica entity.
     *
     */
    public function newAction()
    {
        $entity = new AsistenteAcademica();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:AsistenteAcademica:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AsistenteAcademica entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AsistenteAcademica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:AsistenteAcademica:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AsistenteAcademica entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AsistenteAcademica entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:AsistenteAcademica:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AsistenteAcademica entity.
    *
    * @param AsistenteAcademica $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AsistenteAcademica $entity)
    {
        $form = $this->createForm(new AsistenteAcademicaType(), $entity, array(
            'action' => $this->generateUrl('asistenteacademica_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AsistenteAcademica entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AsistenteAcademica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('asistenteacademica_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:AsistenteAcademica:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AsistenteAcademica entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AsistenteAcademica entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('asistenteacademica'));
    }

    /**
     * Creates a form to delete a AsistenteAcademica entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('asistenteacademica_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
