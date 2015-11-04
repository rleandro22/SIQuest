<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Libro;
use Uci\Bundle\BaseDatosBundle\Form\LibroType;
use Uci\Bundle\BaseDatosBundle\Entity\Capitulo;
use Symfony\Component\HttpFoundation\JsonResponse;


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
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new LibroType(0), $entity);
        $form->handleRequest($request);
        $error = '';
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em->getConnection()->beginTransaction();
                try {
                    
                    $em->persist($entity);
                    $this->guardarCapitulos($em, $entity);
                    if($entity->getEsPmbok()==1){
                        $this->guardarPmbok($em, $entity);
                    }
                    $em->flush();
                    $em->commit();
                    return $this->redirectToRoute('uci_administrador_indicelibro');
                } catch (Exception $e) {
                    $em->getConnection()->rollback();
                    $error = $e;
                }
            }
        }
        return $this->render('UciAdministradorBundle:VistaLibro:registrarLibro.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
        ));
    }
    
     private function guardarCapitulos($em, &$libro) {
        $capitulos = $libro->getCapitulos();
        foreach ($capitulos as $capitulo) {
            $capitulo->setLibro($libro);
            $em->persist($capitulo);
            $em->clear($capitulo);
        }
    }
    
    private function guardarPmbok($em, &$libro) {
        $pmbok =$libro->getPmbok();
        
        $em->persist($pmbok);
        
        $areas = $pmbok->getAreaConocimiento();
        $grupos = $pmbok->getGrupoProcesos();
        $triangulos = $pmbok->getTrianguloTalento();
        
        foreach ($areas as $area) {
            $area->addPmbok($pmbok);
            $em->persist($area);
            $em->clear($area);
        }
        
        foreach ($grupos as $grupo) {
            $grupo->addPmbok($pmbok);
            $em->persist($grupo);
            $em->clear($grupo);
        }
        
        foreach ($triangulos as $triangulo) {
            $triangulo->addPmbok($pmbok);
            $em->persist($triangulo);
            $em->clear($triangulo);
        }
    }
    
   
}
