<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaIndiceType;
use Symfony\Component\HttpFoundation\Request;
use \Uci\Bundle\BaseDatosBundle\Entity\Pregunta;

class PreguntaController extends Controller {

    public function aIndicePreguntaAction(Request $request) {
        $idLibro = '';
        $idCapitulo = '';
        $idGrupoProcesos = '';
        $idAreaConocimiento = '';
        $esPmbok = 0;
        $pregunta = new Pregunta();
        if ($request->getMethod() == 'POST') {
            $idLibro = $request->request->get('PreguntaIndiceType')['libro'];
            $idCapitulo = $request->request->get('PreguntaIndiceType')['capitulo'];
            $idGrupoProcesos = isset($request->request->get('PreguntaIndiceType')['grupoProcesos']) ? $request->request->get('PreguntaIndiceType')['grupoProcesos'] : '';
            $idAreaConocimiento = isset($request->request->get('PreguntaIndiceType')['areaConocimiento']) ? $request->request->get('PreguntaIndiceType')['areaConocimiento'] : '';
            $this->setearPregunta($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento, $pregunta);
            if ($pregunta->getLibro()) {
                $esPmbok = $pregunta->getLibro()->getEsPmbok();
            }
        }
        $preguntas = $this->aSortearPreguntas($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento);
        $form = $this->createForm(new PreguntaIndiceType(), $pregunta);
        return $this->render('UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig', array(
                    'entities' => $preguntas,
                    'form' => $form->createView(),
                    'espmbok' => $esPmbok
        ));
    }

    /*
     * Este metodo contruye la entidad pregunta a partir de los id de sus componentes
     */

    private function setearPregunta($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento, &$pregunta) {
        $em = $this->getDoctrine()->getManager();
        $libro = $em->getRepository('UciBaseDatosBundle:Libro')->find($idLibro);
        $capitulo = $em->getRepository('UciBaseDatosBundle:Capitulo')->find($idCapitulo);
        $grupo = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($idGrupoProcesos);
        $area = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($idAreaConocimiento);
        $pregunta->setLibro($libro);
        $pregunta->setAreaConocimiento($area);
        $pregunta->setCapitulo($capitulo);
        $pregunta->setGrupoProcesos($grupo);
    }

    /*
     * Este metodo devuelve la lista de preguntas que se muestran en la tabla.
     * Si ninguno de los parametro esta establecido, devuelve toda la lista
     */

    private function aSortearPreguntas($idLibro = '', $idCapitulo = '', $idGrupoProcesos = '', $idAreaConocimiento = '') {
        $em = $this->getDoctrine()->getManager();
        if (empty($idLibro) && empty($idCapitulo) && empty($idGrupoProcesos) && empty($idAreaConocimiento)) {
            $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->findBy(array(), array('titulo' => 'ASC'));
        } else {
            $repository = $this->getDoctrine()
                    ->getRepository('UciBaseDatosBundle:Pregunta');
            $qb = $repository->createQueryBuilder('p');
            $qb->innerJoin('p.libro', 'l');
            $qb->innerJoin('p.capitulo', 'c');
            $qb->innerJoin('p.areaConocimiento', 'a');
            $qb->innerJoin('p.grupoProcesos', 'g');
            if (!empty($idLibro)) {
                $qb->where('l.id= :idLibro')
                        ->setParameter('idLibro', $idLibro);
            }
            if (!empty($idCapitulo)) {
                $qb->andWhere('c.id= :idCapitulo')
                        ->setParameter('idCapitulo', $idCapitulo);
            }
            if (!empty($idGrupoProcesos)) {
                $qb->andWhere('g.id= :idGrupoProcesos')
                        ->setParameter('idGrupoProcesos', $idGrupoProcesos);
            }
            if (!empty($idAreaConocimiento)) {
                $qb->andWhere('a.id= :idAreaConocimiento')
                        ->setParameter('idAreaConocimiento', $idAreaConocimiento);
            }
            $preguntas = $qb->getQuery()->getResult();
        }
        return $preguntas;
    }

}
