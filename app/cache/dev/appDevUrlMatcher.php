<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/asistente')) {
            // uci_asistente_academica_homepage
            if ($pathinfo === '/asistente') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\DefaultController::aAInicioAction',  '_route' => 'uci_asistente_academica_homepage',);
            }

            // uci_asistente_academica_edituser
            if (preg_match('#^/asistente/(?P<id>[^/]++)/editar_usuario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_edituser')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\UsuarioController::aEditarUsuarioAction',));
            }

            // uci_asistente_academica_indiceobservaciones
            if ($pathinfo === '/asistente/indices_observaciones') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\ObservacionesController::aAIndiceCuestionarioObservadosAction',  '_route' => 'uci_asistente_academica_indiceobservaciones',);
            }

            // uci_asistente_academica_verObservacion
            if (preg_match('#^/asistente/(?P<id>[^/]++)/ver_observacion$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_verObservacion')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\ObservacionesController::aAVerCuestionarioObservadoAction',));
            }

            // uci_asistente_academica_borrarObservacion
            if (preg_match('#^/asistente/(?P<id>[^/]++)/borrar_observaciones$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_borrarObservacion')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\ObservacionesController::aABorrarCuestionarioObservadoAction',));
            }

            // uci_asistente_academica_removerPreguntaObservacion
            if (preg_match('#^/asistente/(?P<idPregunta>[^/]++)/(?P<idCuestionario>[^/]++)/remover_pregunta_observacion$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_removerPreguntaObservacion')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\ObservacionesController::aARemoverPreguntaObservacionAction',));
            }

            // uci_asistente_academica_indicecuestionario
            if ($pathinfo === '/asistente/indice_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aAIndiceCuestionarioAction',  '_route' => 'uci_asistente_academica_indicecuestionario',);
            }

            // uci_asistente_academica_registrarcuestionario
            if ($pathinfo === '/asistente/construir_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aAConstruirCuestionarioAction',  '_route' => 'uci_asistente_academica_registrarcuestionario',);
            }

            // uci_asistente_academica_setearlibroscuestionario
            if ($pathinfo === '/asistente/setear_libro_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aASetearLibrosCuestionarioAction',  '_route' => 'uci_asistente_academica_setearlibroscuestionario',);
            }

            // uci_asistente_academica_guardarcuestionario
            if ($pathinfo === '/asistente/guardar_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aAGuardarCuestionarioAction',  '_route' => 'uci_asistente_academica_guardarcuestionario',);
            }

            // uci_asistente_academica_agregarPreguntaCuestionario
            if (preg_match('#^/asistente/(?P<idCuestionario>[^/]++)/agregar_pregunta_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_agregarPreguntaCuestionario')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aAAgregarPreguntaCuestionarioAction',));
            }

            // uci_asistente_academica_ver_cuestionario
            if (preg_match('#^/asistente/(?P<id>[^/]++)/ver_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_ver_cuestionario')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aAVerCuestionarioAction',));
            }

            // uci_asistente_academica_borrarCuestionario
            if (preg_match('#^/asistente/(?P<idCuestionario>[^/]++)/borrar_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_borrarCuestionario')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aABorrarCuestionarioAction',));
            }

            // uci_asistente_academica_removerPreguntaCuestionario
            if (preg_match('#^/asistente/(?P<idPregunta>[^/]++)/(?P<idCuestionario>[^/]++)/remover_pregunta_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_removerPreguntaCuestionario')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\CuestionarioController::aARemoverPreguntaCuestionarioAction',));
            }

            // uci_asistente_academica_verPregunta
            if (preg_match('#^/asistente/(?P<idPregunta>[^/]++)/(?P<idCuestionario>[^/]++)/ver_pregunta$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_verPregunta')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\PreguntaController::aAVerPreguntaAction',));
            }

            // uci_asistente_academica_verPreguntaPop
            if (preg_match('#^/asistente/(?P<idPregunta>[^/]++)/ver_pregunta$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_verPreguntaPop')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\PreguntaController::aAVerPreguntaPopAction',));
            }

            // uci_asistente_academica_contarSolicitudes
            if ($pathinfo === '/asistente/contar_solicitudes') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\DefaultController::aASolicitudesActivasAction',  '_route' => 'uci_asistente_academica_contarSolicitudes',);
            }

            // uci_asistente_academica_indicesolicitudes
            if ($pathinfo === '/asistente/indice_solicitudes') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\SolicitudController::aAIndiceSolicitudAction',  '_route' => 'uci_asistente_academica_indicesolicitudes',);
            }

            // uci_asistente_academica_editsolicitud
            if ($pathinfo === '/asistente/editar_solicitud') {
                return array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\SolicitudController::aAEditarSolicitudAction',  '_route' => 'uci_asistente_academica_editsolicitud',);
            }

        }

        if (0 === strpos($pathinfo, '/profesor')) {
            // uci_profesor_homepage
            if ($pathinfo === '/profesor') {
                return array (  '_controller' => 'Uci\\Bundle\\ProfesorBundle\\Controller\\DefaultController::pInicioAction',  '_route' => 'uci_profesor_homepage',);
            }

            // uci_profesor_edituser
            if (preg_match('#^/profesor/(?P<id>[^/]++)/editar_usuario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_profesor_edituser')), array (  '_controller' => 'Uci\\Bundle\\ProfesorBundle\\Controller\\UsuarioController::pEditarUsuarioAction',));
            }

            // uci_profesor_indicecuestionario
            if ($pathinfo === '/profesor/indice_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\ProfesorBundle\\Controller\\CuestionarioController::pIndiceCuestionarioAction',  '_route' => 'uci_profesor_indicecuestionario',);
            }

            // uci_profesor_ver_cuestionario
            if (preg_match('#^/profesor/(?P<id>[^/]++)/ver_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_profesor_ver_cuestionario')), array (  '_controller' => 'Uci\\Bundle\\ProfesorBundle\\Controller\\CuestionarioController::pVerCuestionarioAction',));
            }

            // uci_profesor_agregarComentarios
            if ($pathinfo === '/profesor/agregar_comentario') {
                return array (  '_controller' => 'Uci\\Bundle\\ProfesorBundle\\Controller\\CuestionarioController::pAgregarComentarioCuestionarioAction',  '_route' => 'uci_profesor_agregarComentarios',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // uci_administrador_homepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\DefaultController::aInicioAction',  '_route' => 'uci_administrador_homepage',);
            }

            // uci_administrador_indiceuser
            if ($pathinfo === '/admin/lista_usuarios') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\UsuarioController::aIndiceUsuarioAction',  '_route' => 'uci_administrador_indiceuser',);
            }

            // uci_administrador_adduser
            if ($pathinfo === '/admin/registrar_usuario') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\UsuarioController::aRegistrarUsuarioAction',  '_route' => 'uci_administrador_adduser',);
            }

            // uci_administrador_edituser
            if (preg_match('#^/admin/(?P<id>[^/]++)/editar_usuario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_edituser')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\UsuarioController::aEditarUsuarioAction',));
            }

            // uci_administrador_deleteuser
            if (preg_match('#^/admin/(?P<id>[^/]++)/borrar_usuario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deleteuser')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\UsuarioController::aBorrarUsuarioAction',));
            }

            // uci_administrador_indiceobservaciones
            if ($pathinfo === '/admin/indices_observaciones') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\ObservacionesController::aIndiceCuestionarioObservadosAction',  '_route' => 'uci_administrador_indiceobservaciones',);
            }

            // uci_administrador_verObservacion
            if (preg_match('#^/admin/(?P<id>[^/]++)/ver_observacion$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_verObservacion')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\ObservacionesController::aVerCuestionarioObservadoAction',));
            }

            // uci_administrador_borrarObservacion
            if (preg_match('#^/admin/(?P<id>[^/]++)/borrar_observaciones$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_borrarObservacion')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\ObservacionesController::aBorrarCuestionarioObservadoAction',));
            }

            // uci_administrador_removerPreguntaObservacion
            if (preg_match('#^/admin/(?P<idPregunta>[^/]++)/(?P<idCuestionario>[^/]++)/remover_pregunta_observacion$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_removerPreguntaObservacion')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\ObservacionesController::aRemoverPreguntaObservacionAction',));
            }

            // uci_administrador_indiceatrpmbok
            if ($pathinfo === '/admin/lista_atrpmbok') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aIndiceAtributosPmbokAction',  '_route' => 'uci_administrador_indiceatrpmbok',);
            }

            // uci_administrador_addarea
            if ($pathinfo === '/admin/ingresar_area') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aIngresarAreaAction',  '_route' => 'uci_administrador_addarea',);
            }

            // uci_administrador_editarea
            if (preg_match('#^/admin/(?P<id>[^/]++)/editar_area$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_editarea')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aEditarAreaAction',));
            }

            // uci_administrador_deletearea
            if (preg_match('#^/admin/(?P<id>[^/]++)/borrar_area$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deletearea')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aBorrarAreaAction',));
            }

            // uci_administrador_addgrupo
            if ($pathinfo === '/admin/ingresar_grupo') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aIngresarGrupoAction',  '_route' => 'uci_administrador_addgrupo',);
            }

            // uci_administrador_editgrupo
            if (preg_match('#^/admin/(?P<id>[^/]++)/editar_grupo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_editgrupo')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aEditarGrupoAction',));
            }

            // uci_administrador_deletegrupo
            if (preg_match('#^/admin/(?P<id>[^/]++)/borrar_grupo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deletegrupo')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aBorrarGrupoAction',));
            }

            // uci_administrador_addtriangulo
            if ($pathinfo === '/admin/ingresar_triangulo') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aIngresarTrianguloAction',  '_route' => 'uci_administrador_addtriangulo',);
            }

            // uci_administrador_edittriangulo
            if (preg_match('#^/admin/(?P<id>[^/]++)/editar_triangulo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_edittriangulo')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aEditarTrianguloAction',));
            }

            // uci_administrador_deletetriangulo
            if (preg_match('#^/admin/(?P<id>[^/]++)/borrar_triangulo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deletetriangulo')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\AtributosPmbokController::aBorrarTrianguloAction',));
            }

            // uci_administrador_indicecategoria
            if ($pathinfo === '/admin/lista_categorias') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aIndiceCategoriaAction',  '_route' => 'uci_administrador_indicecategoria',);
            }

            // uci_administrador_addcategoria
            if ($pathinfo === '/admin/ingresar_generacion') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aIngresarGeneracionAction',  '_route' => 'uci_administrador_addcategoria',);
            }

            // uci_administrador_editcategoria
            if (preg_match('#^/admin/(?P<id>[^/]++)/editar_categoria$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_editcategoria')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aEditarCategoriaAction',));
            }

            // uci_administrador_deletecategoria
            if (preg_match('#^/admin/(?P<id>[^/]++)/borrar_categoria$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deletecategoria')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aBorrarCategoriaAction',));
            }

            // uci_administrador_indicecurso
            if (preg_match('#^/admin/(?P<id>[^/]++)/cursos_categoria$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_indicecurso')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aIndiceCursosAction',));
            }

            // uci_administrador_addcurso
            if (preg_match('#^/admin/(?P<idGeneracion>[^/]++)/registrar_curso$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_addcurso')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aIngresarCursoAction',));
            }

            // uci_administrador_editcurso
            if (preg_match('#^/admin/(?P<idGeneracion>[^/]++)/editar_curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_editcurso')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aEditarCursoAction',));
            }

            // uci_administrador_deletecurso
            if (preg_match('#^/admin/(?P<idGeneracion>[^/]++)/borrar_curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deletecurso')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aBorrarCursoAction',));
            }

            // uci_administrador_indicecuestionario
            if ($pathinfo === '/admin/indice_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aIndiceCuestionarioAction',  '_route' => 'uci_administrador_indicecuestionario',);
            }

            // uci_administrador_registrarcuestionario
            if ($pathinfo === '/admin/construir_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aConstruirCuestionarioAction',  '_route' => 'uci_administrador_registrarcuestionario',);
            }

            // uci_administrador_setearlibroscuestionario
            if ($pathinfo === '/admin/setear_libro_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aSetearLibrosCuestionarioAction',  '_route' => 'uci_administrador_setearlibroscuestionario',);
            }

            // uci_administrador_guardarcuestionario
            if ($pathinfo === '/admin/guardar_cuestionario') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aGuardarCuestionarioAction',  '_route' => 'uci_administrador_guardarcuestionario',);
            }

            // uci_administrador_agregarPreguntaCuestionario
            if (preg_match('#^/admin/(?P<idCuestionario>[^/]++)/agregar_pregunta_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_agregarPreguntaCuestionario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aAgregarPreguntaCuestionarioAction',));
            }

            // uci_administrador_ver_cuestionario
            if (preg_match('#^/admin/(?P<id>[^/]++)/ver_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_ver_cuestionario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aVerCuestionarioAction',));
            }

            // uci_administrador_borrarCuestionario
            if (preg_match('#^/admin/(?P<idCuestionario>[^/]++)/borrar_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_borrarCuestionario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aBorrarCuestionarioAction',));
            }

            // uci_administrador_removerPreguntaCuestionario
            if (preg_match('#^/admin/(?P<idPregunta>[^/]++)/(?P<idCuestionario>[^/]++)/remover_pregunta_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_removerPreguntaCuestionario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aRemoverPreguntaCuestionarioAction',));
            }

            // uci_administrador_matricularusuario
            if (preg_match('#^/admin/(?P<idGeneracion>[^/]++)/(?P<idCurso>[^/]++)/matricular_usuario/(?P<tipoUsuario>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_matricularusuario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::matricularUsuarioAction',));
            }

            // uci_administrador_desmatricularusuario
            if (preg_match('#^/admin/(?P<idGeneracion>[^/]++)/(?P<idCurso>[^/]++)/desmatricular_usuario/(?P<tipoUsuario>[^/]++)/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_desmatricularusuario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CategoriaController::aDesmatricularUsuarioAction',));
            }

            // uci_administrador_indicepreguntas
            if ($pathinfo === '/admin/ver_preguntas') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\PreguntaController::aIndicePreguntaAction',  '_route' => 'uci_administrador_indicepreguntas',);
            }

            // uci_administrador_eligeTipoPregunta
            if ($pathinfo === '/admin/elegir_tipo') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\PreguntaController::aElegirTipoAction',  '_route' => 'uci_administrador_eligeTipoPregunta',);
            }

            // uci_administrador_registrarPregunta
            if (preg_match('#^/admin/(?P<idTipoRespuesta>[^/]++)/registrar_pregunta$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_registrarPregunta')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\PreguntaController::aRegistrarPreguntaAction',));
            }

            // uci_administrador_editarPregunta
            if (preg_match('#^/admin/(?P<idPregunta>[^/]++)/editar_pregunta$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_editarPregunta')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\PreguntaController::aEditarPreguntaAction',));
            }

            // uci_administrador_borrarRespuesta
            if ($pathinfo === '/admin/borrar_respuesta') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\PreguntaController::aBorrarRespuestaAction',  '_route' => 'uci_administrador_borrarRespuesta',);
            }

            // uci_administrador_borrarPregunta
            if (preg_match('#^/admin/(?P<idPregunta>[^/]++)/borrar_pregunta$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_borrarPregunta')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\PreguntaController::aBorrarPreguntaAction',));
            }

            if (0 === strpos($pathinfo, '/admin/i')) {
                // uci_administrador_importarPreguntas
                if ($pathinfo === '/admin/importar_preguntas') {
                    return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\PreguntaController::aImportarPreguntasAction',  '_route' => 'uci_administrador_importarPreguntas',);
                }

                // uci_administrador_indicesolicitudes
                if ($pathinfo === '/admin/indice_solicitudes') {
                    return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\SolicitudController::aIndiceSolicitudAction',  '_route' => 'uci_administrador_indicesolicitudes',);
                }

            }

            // uci_administrador_addsolicitud
            if ($pathinfo === '/admin/agregar_solicitud') {
                return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\SolicitudController::aIngresarSolicitudAction',  '_route' => 'uci_administrador_addsolicitud',);
            }

            // uci_administrador_editsolicitud
            if (preg_match('#^/admin/(?P<id>[^/]++)/editar_solicitud$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_editsolicitud')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\SolicitudController::aEditarSolicitudAction',));
            }

            // uci_administrador_borrarsolicitud
            if (preg_match('#^/admin/(?P<id>[^/]++)/borrar_solicitud$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_borrarsolicitud')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\SolicitudController::aBorrarSolicitudAction',));
            }

            if (0 === strpos($pathinfo, '/admin/libro')) {
                // uci_administrador_indicelibro
                if ($pathinfo === '/admin/libro/lista_libros') {
                    return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aIndiceLibroAction',  '_route' => 'uci_administrador_indicelibro',);
                }

                // uci_administrador_nuevolibro
                if ($pathinfo === '/admin/libro/registrar_libro') {
                    return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aRegistrarLibroAction',  '_route' => 'uci_administrador_nuevolibro',);
                }

                if (0 === strpos($pathinfo, '/admin/libro/admin')) {
                    // uci_administrador_editarlibro
                    if (preg_match('#^/admin/libro/admin/(?P<id>[^/]++)/editar_libro$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_editarlibro')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aEditarLibroAction',));
                    }

                    // uci_administrador_deletelibro
                    if (preg_match('#^/admin/libro/admin/(?P<id>[^/]++)/borrar_libro$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deletelibro')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aBorrarLibroAction',));
                    }

                    // uci_administrador_deletecapitulo
                    if ($pathinfo === '/admin/libro/admin/borrar_capitulo') {
                        return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aBorrarCapituloAction',  '_route' => 'uci_administrador_deletecapitulo',);
                    }

                }

            }

        }

        // uci_principal_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_uci_principal_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'uci_principal_homepage');
            }

            return array (  '_controller' => 'Uci\\Bundle\\SeguridadBundle\\Controller\\SeguridadController::indexAction',  '_route' => 'uci_principal_homepage',);
        }
        not_uci_principal_homepage:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Uci\\Bundle\\SeguridadBundle\\Controller\\SeguridadController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Uci\\Bundle\\SeguridadBundle\\Controller\\SeguridadController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
