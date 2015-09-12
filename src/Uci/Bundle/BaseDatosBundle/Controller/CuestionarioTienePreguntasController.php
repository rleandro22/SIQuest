<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\CuestionarioTienePreguntas;
use Uci\Bundle\BaseDatosBundle\Form\CuestionarioTienePreguntasType;

/**
 * CuestionarioTienePreguntas controller.
 *
 */
class CuestionarioTienePreguntasController extends Controller
{

    /**
     * Lists all CuestionarioTienePreguntas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:CuestionarioTienePreguntas')->findAll();

        return $this->render('UciBaseDatosBundle:CuestionarioTienePreguntas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CuestionarioTienePreguntas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CuestionarioTienePreguntas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cuestionariotienepreguntas_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:CuestionarioTienePreguntas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CuestionarioTienePreguntas entity.
     *
     * @param CuestionarioTienePreguntas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CuestionarioTienePreguntas $entity)
    {
        $form = $this->createForm(new CuestionarioTienePreguntasType(), $entity, array(
            'action' => $this->generateUrl('cuestionariotienepreguntas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CuestionarioTienePreguntas entity.
     *
     */
    public function newAction()
    {
        $entity = new CuestionarioTienePreguntas();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:CuestionarioTienePreguntas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CuestionarioTienePreguntas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioTienePreguntas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuestionarioTienePreguntas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:CuestionarioTienePreguntas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CuestionarioTienePreguntas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioTienePreguntas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuestionarioTienePreguntas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:CuestionarioTienePreguntas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CuestionarioTienePreguntas entity.
    *
    * @param CuestionarioTienePreguntas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CuestionarioTienePreguntas $entity)
    {
        $form = $this->createForm(new CuestionarioTienePreguntasType(), $entity, array(
            'action' => $this->generateUrl('cuestionariotienepreguntas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CuestionarioTienePreguntas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioTienePreguntas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuestionarioTienePreguntas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cuestionariotienepreguntas_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:CuestionarioTienePreguntas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CuestionarioTienePreguntas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:CuestionarioTienePreguntas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CuestionarioTienePreguntas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cuestionariotienepreguntas'));
    }

    /**
     * Creates a form to delete a CuestionarioTienePreguntas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuestionariotienepreguntas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
