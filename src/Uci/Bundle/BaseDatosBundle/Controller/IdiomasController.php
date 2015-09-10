<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\Idiomas;
use Uci\Bundle\BaseDatosBundle\Form\IdiomasType;

/**
 * Idiomas controller.
 *
 */
class IdiomasController extends Controller
{

    /**
     * Lists all Idiomas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:Idiomas')->findAll();

        return $this->render('UciBaseDatosBundle:Idiomas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Idiomas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Idiomas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('idiomas_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:Idiomas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Idiomas entity.
     *
     * @param Idiomas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Idiomas $entity)
    {
        $form = $this->createForm(new IdiomasType(), $entity, array(
            'action' => $this->generateUrl('idiomas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Idiomas entity.
     *
     */
    public function newAction()
    {
        $entity = new Idiomas();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:Idiomas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Idiomas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Idiomas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Idiomas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Idiomas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Idiomas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Idiomas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Idiomas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Idiomas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Idiomas entity.
    *
    * @param Idiomas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Idiomas $entity)
    {
        $form = $this->createForm(new IdiomasType(), $entity, array(
            'action' => $this->generateUrl('idiomas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Idiomas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Idiomas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Idiomas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('idiomas_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:Idiomas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Idiomas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:Idiomas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Idiomas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('idiomas'));
    }

    /**
     * Creates a form to delete a Idiomas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('idiomas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
