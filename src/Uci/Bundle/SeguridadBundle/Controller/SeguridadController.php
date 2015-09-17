<?php

namespace Uci\Bundle\SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SeguridadController extends Controller {

    public function indexAction() {
        return $this->render('UciSeguridadBundle:VistaIdentificacion:index.html.twig');
    }

    public function loginAction(Request $request) {
        if($request->getMethod()=="POST")
          {
            $usuario=$request->get("_username");
            $clave=$request->get("_password");
            //$user= Usuario();
            //los parametros que se la pasan son nombres de los campos de la entidad
            $user=$this->getDoctrine()->getRepository('UciBaseDatosBundle:Usuario')->findOneBy(array("usuario"=>$usuario,"clave"=>$clave));
            if($user)
            {
               $session=$request->getSession();
               $session->set("id",$user->getId());
               $session->set("usuario",$user->getUsuario());
               //echo $session->get("nombre");exit;
//               if(strcasecmp($user->getNombreUsuario(),"administrador")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
//               return $this->redirect($this->generateUrl('aInicio'));}
//               if(strcasecmp($user->getNombreUsuario(),"medicos asistentes")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
//               return $this->redirect($this->generateUrl('dInicio'));}
//               if(strcasecmp($user->getNombreUsuario(),"medicos residentes")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
//               return $this->redirect($this->generateUrl('rInicio'));}
//              
//               if(strcasecmp($user->getNombreUsuario(),"asociacion")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
//               return $this->redirect($this->generateUrl('AsInicio'));}
               if(strcasecmp($user->getUsuario(),"rleandro")==0 && strcasecmp($user->getClave(),$clave)==0){
               return $this->redirect($this->generateUrl('uci_principal_homepage'));}
            }//end if user
            else
            {
                 $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Los datos ingresados no son válidos'
                            );
                    return $this->redirect($this->generateUrl('login'));
            }
          }//endif request
        return $this->render('UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig');
    }

}
