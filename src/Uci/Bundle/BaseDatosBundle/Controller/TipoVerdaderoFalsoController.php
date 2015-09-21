<?php

namespace Uci\Bundle\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uci\Bundle\BaseDatosBundle\Entity\TipoVerdaderoFalso;
use Uci\Bundle\BaseDatosBundle\Form\TipoVerdaderoFalsoType;

/**
 * TipoVerdaderoFalso controller.
 *
 */
class TipoVerdaderoFalsoController extends Controller
{

    /**
     * Lists all TipoVerdaderoFalso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:TipoVerdaderoFalso')->findAll();

        return $this->render('UciBaseDatosBundle:TipoVerdaderoFalso:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoVerdaderoFalso entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoVerdaderoFalso();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipoverdaderofalso_show', array('id' => $entity->getId())));
        }

        return $this->render('UciBaseDatosBundle:TipoVerdaderoFalso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoVerdaderoFalso entity.
     *
     * @param TipoVerdaderoFalso $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoVerdaderoFalso $entity)
    {
        $form = $this->createForm(new TipoVerdaderoFalsoType(), $entity, array(
            'action' => $this->generateUrl('tipoverdaderofalso_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoVerdaderoFalso entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoVerdaderoFalso();
        $form   = $this->createCreateForm($entity);

        return $this->render('UciBaseDatosBundle:TipoVerdaderoFalso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoVerdaderoFalso entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoVerdaderoFalso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoVerdaderoFalso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoVerdaderoFalso:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoVerdaderoFalso entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoVerdaderoFalso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoVerdaderoFalso entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UciBaseDatosBundle:TipoVerdaderoFalso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoVerdaderoFalso entity.
    *
    * @param TipoVerdaderoFalso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoVerdaderoFalso $entity)
    {
        $form = $this->createForm(new TipoVerdaderoFalsoType(), $entity, array(
            'action' => $this->generateUrl('tipoverdaderofalso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoVerdaderoFalso entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UciBaseDatosBundle:TipoVerdaderoFalso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoVerdaderoFalso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipoverdaderofalso_edit', array('id' => $id)));
        }

        return $this->render('UciBaseDatosBundle:TipoVerdaderoFalso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoVerdaderoFalso entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:TipoVerdaderoFalso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoVerdaderoFalso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipoverdaderofalso'));
    }

    /**
     * Creates a form to delete a TipoVerdaderoFalso entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoverdaderofalso_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
