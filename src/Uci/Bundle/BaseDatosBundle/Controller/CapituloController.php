<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\Capitulo;
use Uci\Bundle\BaseDatosBundle\Form\CapituloType;

/**
 * Capitulo controller.
 *
 */
class CapituloController extends Controller
{

    /**
     * Lists all Capitulo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:Capitulo')->findAll();

        return $this->render('UciBaseDatosBundle:Capitulo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Capitulo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Capitulo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('capitulo_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:Capitulo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Capitulo entity.
     *
     * @param Capitulo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Capitulo $entity)
    {
        $form = $this->createForm(new CapituloType(), $entity, array(
            'action' => $this->generateUrl('capitulo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Capitulo entity.
     *
     */
    public function newAction()
    {
        $entity = new Capitulo();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:Capitulo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Capitulo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Capitulo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capitulo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Capitulo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Capitulo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Capitulo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capitulo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:Capitulo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Capitulo entity.
    *
    * @param Capitulo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Capitulo $entity)
    {
        $form = $this->createForm(new CapituloType(), $entity, array(
            'action' => $this->generateUrl('capitulo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Capitulo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:Capitulo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capitulo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('capitulo_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:Capitulo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Capitulo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:Capitulo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Capitulo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('capitulo'));
    }

    /**
     * Creates a form to delete a Capitulo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('capitulo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
