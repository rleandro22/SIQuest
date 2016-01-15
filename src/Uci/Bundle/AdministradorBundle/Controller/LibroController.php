<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Libro;
use Uci\Bundle\BaseDatosBundle\Form\LibroType;
use Uci\Bundle\BaseDatosBundle\Form\EditarLibroType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Libro controller.
 *
 */
class LibroController extends Controller {

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
//                if($entity->getEsPmbok()==1){
//                    $validator = $this->get('validator');
//                    $error = $validator->validate($entity, array('registration'));
//                    
//                }
                $em->getConnection()->beginTransaction();
                try {

                    $em->persist($entity);
                    $this->guardarCapitulos($em, $entity);
                    if ($entity->getEsPmbok() == 1) {
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

    public function aEditarLibroAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $libro = $em->getRepository('UciBaseDatosBundle:Libro')->find($id);
        $capitulos = $em->getRepository('UciBaseDatosBundle:Capitulo')->createQueryBuilder('u')
                        ->innerJoin('u.libro', 'g')
                        ->where('g.id = :id')
                        ->setParameter('id', $id)
                        ->orderBy('u.numeroCapitulo', 'ASC')
                        ->getQuery()->getResult();
        $libro->setCapitulos($capitulos);
        $error = '';
        if (!$libro) {
            throw $this->createNotFoundException('Unable to find Libro entity.');
        }
        $form = $this->createForm(new EditarLibroType($libro->getEsPmbok()), $libro);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em->getConnection()->beginTransaction();
                try {
                    $em->persist($libro);
                    $this->guardarCapitulos($em, $libro);
                    if ($libro->getEsPmbok() == 1) {
                        $this->eliminarPmbok($em, $libro);
                        $this->guardarPmbok($em, $libro);
                    }
                    $em->flush();
                    $em->commit();
                } catch (Exception $e) {
                    $em->getConnection()->rollback();
                    $error = $e;
                }
            }
            return $this->redirect($this->generateUrl("uci_administrador_editarlibro", array("id" => $id)));
        }

        return $this->render('UciAdministradorBundle:VistaLibro:editarLibro.html.twig', array(
                    'entity' => $libro,
                    'error' => $error,
                    'capitulos' => $capitulos,
                    'esPmbok' => $libro->getEsPmbok(),
                    'form' => $form->createView()
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

    private function eliminarPmbok($em, &$libro) {
        $pmbok = $libro->getPmbok();

        // $em->persist($pmbok);

        $areas = $pmbok->getAreaConocimiento();
        $grupos = $pmbok->getGrupoProcesos();
        $triangulos = $pmbok->getTrianguloTalento();

        foreach ($areas as $area) {
            $area->addPmbok($pmbok);
            $em->remove($area);
        }
        $em->clear($areas);
        foreach ($grupos as $grupo) {
            $grupo->addPmbok($pmbok);
            $em->remove($grupo);
        }
        $em->clear($grupos);
        foreach ($triangulos as $triangulo) {
            $triangulo->addPmbok($pmbok);
            $em->remove($triangulo);
        }
        $em->clear($triangulos);
    }

    private function guardarPmbok($em, &$libro) {
        $pmbok = $libro->getPmbok();

        $em->persist($pmbok);

        $areas = $pmbok->getAreaConocimiento();
        $grupos = $pmbok->getGrupoProcesos();
        $triangulos = $pmbok->getTrianguloTalento();

        foreach ($areas as $area) {
            $area->addPmbok($pmbok);
            $em->persist($area);
        }
        $em->clear($areas);
        foreach ($grupos as $grupo) {
            $grupo->addPmbok($pmbok);
            $em->persist($grupo);
        }
        $em->clear($grupos);
        foreach ($triangulos as $triangulo) {
            $triangulo->addPmbok($pmbok);
            $em->persist($triangulo);
        }
        $em->clear($triangulos);
    }

    public function aBorrarLibroAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Libro')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Libro entity.');
        }
        //se borran las preguntas relacionadas al libro

        $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->findBy(array('libro' => $entity->getId()));

        foreach ($preguntas as $pregunta) {

            //se borran usarioCorrige pregunta de cada una
            $correciones = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->findBy(array('pregunta' => $pregunta->getId()));

            foreach ($correciones as $correciones) {
                $em->remove($correciones);
                $em->flush();
            }

            $em->remove($pregunta);
            $em->flush();
        }


        $capitulos = $em->getRepository('UciBaseDatosBundle:Capitulo')->findBy(array('libro' => $entity->getId()));

        foreach ($capitulos as $capitulo) {
            $em->remove($capitulo);
            $em->flush();
        }

        $em->remove($entity);
        $em->clear($entity);
        if ($entity->getEsPmbok() == 1) {
            $pmbok = $entity->getPmbok();
            $em->remove($pmbok);
            $em->clear($pmbok);
        }
        $em->flush();
        return $this->redirectToRoute('uci_administrador_indicelibro');
    }

    public function aAgregarCapituloLibroAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $capitulos = $em->getRepository('UciBaseDatosBundle:Capitulo')->createQueryBuilder('u')
                        ->innerJoin('u.libro', 'g')
                        ->where('g.id = :id')
                        ->setParameter('id', $id)
                        ->orderBy('u.numeroCapitulo', 'ASC')
                        ->getQuery()->getResult();



        return $this->render('UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig', array(
                    'capitulos' => $capitulos,
                    'id' => $id
        ));
    }

    public function aBorrarCapituloAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $id = $request->get('idCap');
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:Capitulo')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Libro entity.');
            }
            //se borran las preguntas relacionadas al libro
            $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->findBy(array('capitulo' => $entity->getId()));
            $em->getConnection()->beginTransaction();
            try {
                foreach ($preguntas as $pregunta) {
                    //se borran usarioCorrige pregunta de cada una
                    $correciones = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->findBy(array('pregunta' => $pregunta->getId()));
                    foreach ($correciones as $correciones) {
                        $em->remove($correciones);
                        $em->flush();
                    }
                    $em->remove($pregunta);
                    //$em->flush();
                    $em->clear($pregunta);
                }
                $em->remove($entity);
                $em->flush();
                $em->commit();
                return new JsonResponse(array('resultado' => 1));
            } catch (\Exception $e) {
                $em->getConnection()->rollback();
                return new JsonResponse(array('resultado' => 0));
            }
        }
    }

}
