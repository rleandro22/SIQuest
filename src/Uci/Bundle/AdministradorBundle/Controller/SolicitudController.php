<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\SolicitudIndiceType;

class SolicitudController extends Controller {

    public function aIndiceSolicitudAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new SolicitudIndiceType());
        $form->handleRequest($request);
        $entities = $em->getRepository('UciBaseDatosBundle:Solicitud')->findBy(array(), array('textosolicitud' => 'ASC'));
        if ($request->getMethod() == 'POST') {
            $curso = $form['curso']->getData();
            $entities = $em->getRepository('UciBaseDatosBundle:Solicitud')->createQueryBuilder('u')
                            ->innerJoin('u.curso', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $curso->getId())
                            ->orderBy('u.textosolicitud', 'ASC')
                            ->getQuery()->getResult();
        }
        return $this->render('UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig', array(
                    'entities' => $entities,
                    'form' => $form->createView()
        ));
    }

}
