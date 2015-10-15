<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Libro;
use Uci\Bundle\BaseDatosBundle\Form\LibroType;
use Symfony\Component\Form\FormError;


/**
 * Libro controller.
 *
 */
class LibroController extends Controller
{
    public function aIndiceLibroAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:Libro')->findBy(array(), array('titulo' => 'ASC'));
        return $this->render('UciAdministradorBundle:VistaLibro:indiceLibro.html.twig', array(
                    'entities' => $entities,
        ));
    }
    
    public function aRegistrarLibroAction(Request $request) {
        $entity = new Libro();
        $form = $this->createForm(new LibroType(0), $entity);
        $form->handleRequest($request);
        $error = '';
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return $this->redirectToRoute('uci_administrador_indicelibro');
            }
        }
        return $this->render('UciAdministradorBundle:VistaLibro:registrarLibro.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
        ));
    }
    
   
}
