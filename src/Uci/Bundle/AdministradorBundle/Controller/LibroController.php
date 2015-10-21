<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Libro;
use Uci\Bundle\BaseDatosBundle\Form\LibroType;
use Uci\Bundle\BaseDatosBundle\Entity\Capitulo;


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
    
    public function obtenerCapitulosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery
        (
            'SELECT p.nombreCapitulo,p.numeroCapitulo,c.id as libro,c.titulo as titulo
               FROM UciBaseDatosBundle:Capitulo p
               JOIN UciBaseDatosBundle:Libro c WITH c.id =p.libro
               '
        );
         
        $datos = $query->getResult();
        //print_r($datos);exit;
        return $this->render('UciAdministradorBundle:VistaLibro:index.html.twig',compact("datos"));
    }
    
    public function aRegistrarLibroAction(Request $request) {
        $entity = new Libro();
        $capitulo = new Capitulo();
        //$emc = $this->getDoctrine()->getManager();
        //$capitulo = $emc->getRepository('UciBaseDatosBundle:Capitulo')->find(1);
        $entity->addCapitulo($capitulo);
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
