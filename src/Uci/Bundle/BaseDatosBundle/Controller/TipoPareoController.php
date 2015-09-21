<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\TipoPareo;
use Uci\Bundle\BaseDatosBundle\Form\TipoPareoType;

/**
 * TipoPareo controller.
 *
 */
class TipoPareoController extends Controller
{

    /**
     * Lists all TipoPareo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:TipoPareo')->findAll();

        return $this->render('UciBaseDatosBundle:TipoPareo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoPareo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoPareo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipopareo_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:TipoPareo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoPareo entity.
     *
     * @param TipoPareo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoPareo $entity)
    {
        $form = $this->createForm(new TipoPareoType(), $entity, array(
            'action' => $this->generateUrl('tipopareo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoPareo entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoPareo();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:TipoPareo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoPareo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPareo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPareo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPareo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoPareo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPareo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPareo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoPareo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoPareo entity.
    *
    * @param TipoPareo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoPareo $entity)
    {
        $form = $this->createForm(new TipoPareoType(), $entity, array(
            'action' => $this->generateUrl('tipopareo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoPareo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoPareo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPareo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipopareo_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:TipoPareo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoPareo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:TipoPareo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoPareo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipopareo'));
    }

    /**
     * Creates a form to delete a TipoPareo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipopareo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
