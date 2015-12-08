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

        if (0 === strpos($pathinfo, '/usuario')) {
            if (0 === strpos($pathinfo, '/usuariocorrigepregunta')) {
                // usuariocorrigepregunta
                if (rtrim($pathinfo, '/') === '/usuariocorrigepregunta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuariocorrigepregunta');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioCorrigePreguntaController::indexAction',  '_route' => 'usuariocorrigepregunta',);
                }

                // usuariocorrigepregunta_show
                if (preg_match('#^/usuariocorrigepregunta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariocorrigepregunta_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioCorrigePreguntaController::showAction',));
                }

                // usuariocorrigepregunta_new
                if ($pathinfo === '/usuariocorrigepregunta/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioCorrigePreguntaController::newAction',  '_route' => 'usuariocorrigepregunta_new',);
                }

                // usuariocorrigepregunta_create
                if ($pathinfo === '/usuariocorrigepregunta/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuariocorrigepregunta_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioCorrigePreguntaController::createAction',  '_route' => 'usuariocorrigepregunta_create',);
                }
                not_usuariocorrigepregunta_create:

                // usuariocorrigepregunta_edit
                if (preg_match('#^/usuariocorrigepregunta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariocorrigepregunta_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioCorrigePreguntaController::editAction',));
                }

                // usuariocorrigepregunta_update
                if (preg_match('#^/usuariocorrigepregunta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usuariocorrigepregunta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariocorrigepregunta_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioCorrigePreguntaController::updateAction',));
                }
                not_usuariocorrigepregunta_update:

                // usuariocorrigepregunta_delete
                if (preg_match('#^/usuariocorrigepregunta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_usuariocorrigepregunta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariocorrigepregunta_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioCorrigePreguntaController::deleteAction',));
                }
                not_usuariocorrigepregunta_delete:

            }

            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/tipo')) {
            if (0 === strpos($pathinfo, '/tiporespuesta')) {
                // tiporespuesta
                if (rtrim($pathinfo, '/') === '/tiporespuesta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tiporespuesta');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoRespuestaController::indexAction',  '_route' => 'tiporespuesta',);
                }

                // tiporespuesta_show
                if (preg_match('#^/tiporespuesta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiporespuesta_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoRespuestaController::showAction',));
                }

                // tiporespuesta_new
                if ($pathinfo === '/tiporespuesta/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoRespuestaController::newAction',  '_route' => 'tiporespuesta_new',);
                }

                // tiporespuesta_create
                if ($pathinfo === '/tiporespuesta/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tiporespuesta_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoRespuestaController::createAction',  '_route' => 'tiporespuesta_create',);
                }
                not_tiporespuesta_create:

                // tiporespuesta_edit
                if (preg_match('#^/tiporespuesta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiporespuesta_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoRespuestaController::editAction',));
                }

                // tiporespuesta_update
                if (preg_match('#^/tiporespuesta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tiporespuesta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiporespuesta_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoRespuestaController::updateAction',));
                }
                not_tiporespuesta_update:

                // tiporespuesta_delete
                if (preg_match('#^/tiporespuesta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tiporespuesta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiporespuesta_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoRespuestaController::deleteAction',));
                }
                not_tiporespuesta_delete:

            }

            if (0 === strpos($pathinfo, '/tipoprueba')) {
                // tipoprueba
                if (rtrim($pathinfo, '/') === '/tipoprueba') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipoprueba');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPruebaController::indexAction',  '_route' => 'tipoprueba',);
                }

                // tipoprueba_show
                if (preg_match('#^/tipoprueba/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprueba_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPruebaController::showAction',));
                }

                // tipoprueba_new
                if ($pathinfo === '/tipoprueba/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPruebaController::newAction',  '_route' => 'tipoprueba_new',);
                }

                // tipoprueba_create
                if ($pathinfo === '/tipoprueba/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipoprueba_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPruebaController::createAction',  '_route' => 'tipoprueba_create',);
                }
                not_tipoprueba_create:

                // tipoprueba_edit
                if (preg_match('#^/tipoprueba/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprueba_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPruebaController::editAction',));
                }

                // tipoprueba_update
                if (preg_match('#^/tipoprueba/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipoprueba_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprueba_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPruebaController::updateAction',));
                }
                not_tipoprueba_update:

                // tipoprueba_delete
                if (preg_match('#^/tipoprueba/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipoprueba_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprueba_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPruebaController::deleteAction',));
                }
                not_tipoprueba_delete:

            }

        }

        if (0 === strpos($pathinfo, '/solicitud')) {
            // solicitud
            if (rtrim($pathinfo, '/') === '/solicitud') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'solicitud');
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\SolicitudController::indexAction',  '_route' => 'solicitud',);
            }

            // solicitud_show
            if (preg_match('#^/solicitud/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\SolicitudController::showAction',));
            }

            // solicitud_new
            if ($pathinfo === '/solicitud/new') {
                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\SolicitudController::newAction',  '_route' => 'solicitud_new',);
            }

            // solicitud_create
            if ($pathinfo === '/solicitud/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_solicitud_create;
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\SolicitudController::createAction',  '_route' => 'solicitud_create',);
            }
            not_solicitud_create:

            // solicitud_edit
            if (preg_match('#^/solicitud/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\SolicitudController::editAction',));
            }

            // solicitud_update
            if (preg_match('#^/solicitud/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_solicitud_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\SolicitudController::updateAction',));
            }
            not_solicitud_update:

            // solicitud_delete
            if (preg_match('#^/solicitud/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_solicitud_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\SolicitudController::deleteAction',));
            }
            not_solicitud_delete:

        }

        if (0 === strpos($pathinfo, '/bitacora')) {
            // rol
            if (rtrim($pathinfo, '/') === '/bitacora') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rol');
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::indexAction',  '_route' => 'rol',);
            }

            // rol_show
            if (preg_match('#^/bitacora/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::showAction',));
            }

            // rol_new
            if ($pathinfo === '/bitacora/new') {
                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::newAction',  '_route' => 'rol_new',);
            }

            // rol_create
            if ($pathinfo === '/bitacora/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_create;
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::createAction',  '_route' => 'rol_create',);
            }
            not_rol_create:

            // rol_edit
            if (preg_match('#^/bitacora/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::editAction',));
            }

            // rol_update
            if (preg_match('#^/bitacora/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_rol_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::updateAction',));
            }
            not_rol_update:

            // rol_delete
            if (preg_match('#^/bitacora/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_rol_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::deleteAction',));
            }
            not_rol_delete:

        }

        if (0 === strpos($pathinfo, '/respuesta')) {
            // respuesta
            if (rtrim($pathinfo, '/') === '/respuesta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'respuesta');
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RespuestaController::indexAction',  '_route' => 'respuesta',);
            }

            // respuesta_show
            if (preg_match('#^/respuesta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RespuestaController::showAction',));
            }

            // respuesta_new
            if ($pathinfo === '/respuesta/new') {
                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RespuestaController::newAction',  '_route' => 'respuesta_new',);
            }

            // respuesta_create
            if ($pathinfo === '/respuesta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_respuesta_create;
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RespuestaController::createAction',  '_route' => 'respuesta_create',);
            }
            not_respuesta_create:

            // respuesta_edit
            if (preg_match('#^/respuesta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RespuestaController::editAction',));
            }

            // respuesta_update
            if (preg_match('#^/respuesta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_respuesta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RespuestaController::updateAction',));
            }
            not_respuesta_update:

            // respuesta_delete
            if (preg_match('#^/respuesta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_respuesta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RespuestaController::deleteAction',));
            }
            not_respuesta_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pr')) {
                if (0 === strpos($pathinfo, '/profesor')) {
                    // profesor
                    if (rtrim($pathinfo, '/') === '/profesor') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'profesor');
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\ProfesorController::indexAction',  '_route' => 'profesor',);
                    }

                    // profesor_show
                    if (preg_match('#^/profesor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesor_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\ProfesorController::showAction',));
                    }

                    // profesor_new
                    if ($pathinfo === '/profesor/new') {
                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\ProfesorController::newAction',  '_route' => 'profesor_new',);
                    }

                    // profesor_create
                    if ($pathinfo === '/profesor/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_profesor_create;
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\ProfesorController::createAction',  '_route' => 'profesor_create',);
                    }
                    not_profesor_create:

                    // profesor_edit
                    if (preg_match('#^/profesor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesor_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\ProfesorController::editAction',));
                    }

                    // profesor_update
                    if (preg_match('#^/profesor/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_profesor_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesor_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\ProfesorController::updateAction',));
                    }
                    not_profesor_update:

                    // profesor_delete
                    if (preg_match('#^/profesor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_profesor_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesor_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\ProfesorController::deleteAction',));
                    }
                    not_profesor_delete:

                }

                if (0 === strpos($pathinfo, '/pregunta')) {
                    // pregunta
                    if (rtrim($pathinfo, '/') === '/pregunta') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pregunta');
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PreguntaController::indexAction',  '_route' => 'pregunta',);
                    }

                    // pregunta_show
                    if (preg_match('#^/pregunta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pregunta_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PreguntaController::showAction',));
                    }

                    // pregunta_new
                    if ($pathinfo === '/pregunta/new') {
                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PreguntaController::newAction',  '_route' => 'pregunta_new',);
                    }

                    // pregunta_create
                    if ($pathinfo === '/pregunta/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pregunta_create;
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PreguntaController::createAction',  '_route' => 'pregunta_create',);
                    }
                    not_pregunta_create:

                    // pregunta_edit
                    if (preg_match('#^/pregunta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pregunta_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PreguntaController::editAction',));
                    }

                    // pregunta_update
                    if (preg_match('#^/pregunta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_pregunta_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pregunta_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PreguntaController::updateAction',));
                    }
                    not_pregunta_update:

                    // pregunta_delete
                    if (preg_match('#^/pregunta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_pregunta_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pregunta_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PreguntaController::deleteAction',));
                    }
                    not_pregunta_delete:

                }

            }

            if (0 === strpos($pathinfo, '/pmbok')) {
                // pmbok
                if (rtrim($pathinfo, '/') === '/pmbok') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pmbok');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PmbokController::indexAction',  '_route' => 'pmbok',);
                }

                // pmbok_show
                if (preg_match('#^/pmbok/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pmbok_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PmbokController::showAction',));
                }

                // pmbok_new
                if ($pathinfo === '/pmbok/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PmbokController::newAction',  '_route' => 'pmbok_new',);
                }

                // pmbok_create
                if ($pathinfo === '/pmbok/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pmbok_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PmbokController::createAction',  '_route' => 'pmbok_create',);
                }
                not_pmbok_create:

                // pmbok_edit
                if (preg_match('#^/pmbok/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pmbok_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PmbokController::editAction',));
                }

                // pmbok_update
                if (preg_match('#^/pmbok/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pmbok_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pmbok_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PmbokController::updateAction',));
                }
                not_pmbok_update:

                // pmbok_delete
                if (preg_match('#^/pmbok/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_pmbok_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pmbok_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\PmbokController::deleteAction',));
                }
                not_pmbok_delete:

            }

        }

        if (0 === strpos($pathinfo, '/libro')) {
            // libro
            if (rtrim($pathinfo, '/') === '/libro') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'libro');
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\LibroController::indexAction',  '_route' => 'libro',);
            }

            // libro_show
            if (preg_match('#^/libro/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libro_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\LibroController::showAction',));
            }

            // libro_new
            if ($pathinfo === '/libro/new') {
                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\LibroController::newAction',  '_route' => 'libro_new',);
            }

            // libro_create
            if ($pathinfo === '/libro/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_libro_create;
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\LibroController::createAction',  '_route' => 'libro_create',);
            }
            not_libro_create:

            // libro_edit
            if (preg_match('#^/libro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libro_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\LibroController::editAction',));
            }

            // libro_update
            if (preg_match('#^/libro/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_libro_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libro_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\LibroController::updateAction',));
            }
            not_libro_update:

            // libro_delete
            if (preg_match('#^/libro/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_libro_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libro_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\LibroController::deleteAction',));
            }
            not_libro_delete:

        }

        if (0 === strpos($pathinfo, '/idiomas')) {
            // idiomas
            if (rtrim($pathinfo, '/') === '/idiomas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'idiomas');
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\IdiomasController::indexAction',  '_route' => 'idiomas',);
            }

            // idiomas_show
            if (preg_match('#^/idiomas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'idiomas_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\IdiomasController::showAction',));
            }

            // idiomas_new
            if ($pathinfo === '/idiomas/new') {
                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\IdiomasController::newAction',  '_route' => 'idiomas_new',);
            }

            // idiomas_create
            if ($pathinfo === '/idiomas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_idiomas_create;
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\IdiomasController::createAction',  '_route' => 'idiomas_create',);
            }
            not_idiomas_create:

            // idiomas_edit
            if (preg_match('#^/idiomas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'idiomas_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\IdiomasController::editAction',));
            }

            // idiomas_update
            if (preg_match('#^/idiomas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_idiomas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'idiomas_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\IdiomasController::updateAction',));
            }
            not_idiomas_update:

            // idiomas_delete
            if (preg_match('#^/idiomas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_idiomas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'idiomas_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\IdiomasController::deleteAction',));
            }
            not_idiomas_delete:

        }

        if (0 === strpos($pathinfo, '/g')) {
            if (0 === strpos($pathinfo, '/grupoprocesos')) {
                // grupoprocesos
                if (rtrim($pathinfo, '/') === '/grupoprocesos') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'grupoprocesos');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GrupoProcesosController::indexAction',  '_route' => 'grupoprocesos',);
                }

                // grupoprocesos_show
                if (preg_match('#^/grupoprocesos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupoprocesos_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GrupoProcesosController::showAction',));
                }

                // grupoprocesos_new
                if ($pathinfo === '/grupoprocesos/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GrupoProcesosController::newAction',  '_route' => 'grupoprocesos_new',);
                }

                // grupoprocesos_create
                if ($pathinfo === '/grupoprocesos/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_grupoprocesos_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GrupoProcesosController::createAction',  '_route' => 'grupoprocesos_create',);
                }
                not_grupoprocesos_create:

                // grupoprocesos_edit
                if (preg_match('#^/grupoprocesos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupoprocesos_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GrupoProcesosController::editAction',));
                }

                // grupoprocesos_update
                if (preg_match('#^/grupoprocesos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_grupoprocesos_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupoprocesos_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GrupoProcesosController::updateAction',));
                }
                not_grupoprocesos_update:

                // grupoprocesos_delete
                if (preg_match('#^/grupoprocesos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_grupoprocesos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupoprocesos_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GrupoProcesosController::deleteAction',));
                }
                not_grupoprocesos_delete:

            }

            if (0 === strpos($pathinfo, '/generacion')) {
                // generacion
                if (rtrim($pathinfo, '/') === '/generacion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'generacion');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GeneracionController::indexAction',  '_route' => 'generacion',);
                }

                // generacion_show
                if (preg_match('#^/generacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generacion_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GeneracionController::showAction',));
                }

                // generacion_new
                if ($pathinfo === '/generacion/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GeneracionController::newAction',  '_route' => 'generacion_new',);
                }

                // generacion_create
                if ($pathinfo === '/generacion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_generacion_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GeneracionController::createAction',  '_route' => 'generacion_create',);
                }
                not_generacion_create:

                // generacion_edit
                if (preg_match('#^/generacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generacion_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GeneracionController::editAction',));
                }

                // generacion_update
                if (preg_match('#^/generacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_generacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generacion_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GeneracionController::updateAction',));
                }
                not_generacion_update:

                // generacion_delete
                if (preg_match('#^/generacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_generacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generacion_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\GeneracionController::deleteAction',));
                }
                not_generacion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/decano')) {
            // decano
            if (rtrim($pathinfo, '/') === '/decano') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'decano');
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DecanoController::indexAction',  '_route' => 'decano',);
            }

            // decano_show
            if (preg_match('#^/decano/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'decano_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DecanoController::showAction',));
            }

            // decano_new
            if ($pathinfo === '/decano/new') {
                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DecanoController::newAction',  '_route' => 'decano_new',);
            }

            // decano_create
            if ($pathinfo === '/decano/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_decano_create;
                }

                return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DecanoController::createAction',  '_route' => 'decano_create',);
            }
            not_decano_create:

            // decano_edit
            if (preg_match('#^/decano/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'decano_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DecanoController::editAction',));
            }

            // decano_update
            if (preg_match('#^/decano/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_decano_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'decano_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DecanoController::updateAction',));
            }
            not_decano_update:

            // decano_delete
            if (preg_match('#^/decano/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_decano_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'decano_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DecanoController::deleteAction',));
            }
            not_decano_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cu')) {
                if (0 === strpos($pathinfo, '/curso')) {
                    // curso
                    if (rtrim($pathinfo, '/') === '/curso') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'curso');
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CursoController::indexAction',  '_route' => 'curso',);
                    }

                    // curso_show
                    if (preg_match('#^/curso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CursoController::showAction',));
                    }

                    // curso_new
                    if ($pathinfo === '/curso/new') {
                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CursoController::newAction',  '_route' => 'curso_new',);
                    }

                    // curso_create
                    if ($pathinfo === '/curso/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_curso_create;
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CursoController::createAction',  '_route' => 'curso_create',);
                    }
                    not_curso_create:

                    // curso_edit
                    if (preg_match('#^/curso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CursoController::editAction',));
                    }

                    // curso_update
                    if (preg_match('#^/curso/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_curso_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CursoController::updateAction',));
                    }
                    not_curso_update:

                    // curso_delete
                    if (preg_match('#^/curso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_curso_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CursoController::deleteAction',));
                    }
                    not_curso_delete:

                }

                if (0 === strpos($pathinfo, '/cuestionario')) {
                    if (0 === strpos($pathinfo, '/cuestionarioasignadoausuario')) {
                        // cuestionarioasignadoausuario
                        if (rtrim($pathinfo, '/') === '/cuestionarioasignadoausuario') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'cuestionarioasignadoausuario');
                            }

                            return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioAsignadoAUsuarioController::indexAction',  '_route' => 'cuestionarioasignadoausuario',);
                        }

                        // cuestionarioasignadoausuario_show
                        if (preg_match('#^/cuestionarioasignadoausuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionarioasignadoausuario_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioAsignadoAUsuarioController::showAction',));
                        }

                        // cuestionarioasignadoausuario_new
                        if ($pathinfo === '/cuestionarioasignadoausuario/new') {
                            return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioAsignadoAUsuarioController::newAction',  '_route' => 'cuestionarioasignadoausuario_new',);
                        }

                        // cuestionarioasignadoausuario_create
                        if ($pathinfo === '/cuestionarioasignadoausuario/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_cuestionarioasignadoausuario_create;
                            }

                            return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioAsignadoAUsuarioController::createAction',  '_route' => 'cuestionarioasignadoausuario_create',);
                        }
                        not_cuestionarioasignadoausuario_create:

                        // cuestionarioasignadoausuario_edit
                        if (preg_match('#^/cuestionarioasignadoausuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionarioasignadoausuario_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioAsignadoAUsuarioController::editAction',));
                        }

                        // cuestionarioasignadoausuario_update
                        if (preg_match('#^/cuestionarioasignadoausuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_cuestionarioasignadoausuario_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionarioasignadoausuario_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioAsignadoAUsuarioController::updateAction',));
                        }
                        not_cuestionarioasignadoausuario_update:

                        // cuestionarioasignadoausuario_delete
                        if (preg_match('#^/cuestionarioasignadoausuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_cuestionarioasignadoausuario_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionarioasignadoausuario_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioAsignadoAUsuarioController::deleteAction',));
                        }
                        not_cuestionarioasignadoausuario_delete:

                    }

                    // cuestionario
                    if (rtrim($pathinfo, '/') === '/cuestionario') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cuestionario');
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioController::indexAction',  '_route' => 'cuestionario',);
                    }

                    // cuestionario_show
                    if (preg_match('#^/cuestionario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionario_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioController::showAction',));
                    }

                    // cuestionario_new
                    if ($pathinfo === '/cuestionario/new') {
                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioController::newAction',  '_route' => 'cuestionario_new',);
                    }

                    // cuestionario_create
                    if ($pathinfo === '/cuestionario/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_cuestionario_create;
                        }

                        return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioController::createAction',  '_route' => 'cuestionario_create',);
                    }
                    not_cuestionario_create:

                    // cuestionario_edit
                    if (preg_match('#^/cuestionario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionario_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioController::editAction',));
                    }

                    // cuestionario_update
                    if (preg_match('#^/cuestionario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_cuestionario_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionario_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioController::updateAction',));
                    }
                    not_cuestionario_update:

                    // cuestionario_delete
                    if (preg_match('#^/cuestionario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_cuestionario_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionario_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioController::deleteAction',));
                    }
                    not_cuestionario_delete:

                }

            }

            if (0 === strpos($pathinfo, '/capitulo')) {
                // capitulo
                if (rtrim($pathinfo, '/') === '/capitulo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'capitulo');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CapituloController::indexAction',  '_route' => 'capitulo',);
                }

                // capitulo_show
                if (preg_match('#^/capitulo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'capitulo_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CapituloController::showAction',));
                }

                // capitulo_new
                if ($pathinfo === '/capitulo/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CapituloController::newAction',  '_route' => 'capitulo_new',);
                }

                // capitulo_create
                if ($pathinfo === '/capitulo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_capitulo_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CapituloController::createAction',  '_route' => 'capitulo_create',);
                }
                not_capitulo_create:

                // capitulo_edit
                if (preg_match('#^/capitulo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'capitulo_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CapituloController::editAction',));
                }

                // capitulo_update
                if (preg_match('#^/capitulo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_capitulo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'capitulo_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CapituloController::updateAction',));
                }
                not_capitulo_update:

                // capitulo_delete
                if (preg_match('#^/capitulo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_capitulo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'capitulo_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CapituloController::deleteAction',));
                }
                not_capitulo_delete:

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/asistenteacademica')) {
                // asistenteacademica
                if (rtrim($pathinfo, '/') === '/asistenteacademica') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'asistenteacademica');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AsistenteAcademicaController::indexAction',  '_route' => 'asistenteacademica',);
                }

                // asistenteacademica_show
                if (preg_match('#^/asistenteacademica/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asistenteacademica_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AsistenteAcademicaController::showAction',));
                }

                // asistenteacademica_new
                if ($pathinfo === '/asistenteacademica/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AsistenteAcademicaController::newAction',  '_route' => 'asistenteacademica_new',);
                }

                // asistenteacademica_create
                if ($pathinfo === '/asistenteacademica/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_asistenteacademica_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AsistenteAcademicaController::createAction',  '_route' => 'asistenteacademica_create',);
                }
                not_asistenteacademica_create:

                // asistenteacademica_edit
                if (preg_match('#^/asistenteacademica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asistenteacademica_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AsistenteAcademicaController::editAction',));
                }

                // asistenteacademica_update
                if (preg_match('#^/asistenteacademica/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_asistenteacademica_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asistenteacademica_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AsistenteAcademicaController::updateAction',));
                }
                not_asistenteacademica_update:

                // asistenteacademica_delete
                if (preg_match('#^/asistenteacademica/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_asistenteacademica_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asistenteacademica_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AsistenteAcademicaController::deleteAction',));
                }
                not_asistenteacademica_delete:

            }

            if (0 === strpos($pathinfo, '/areaconocimiento')) {
                // areaconocimiento
                if (rtrim($pathinfo, '/') === '/areaconocimiento') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'areaconocimiento');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AreaConocimientoController::indexAction',  '_route' => 'areaconocimiento',);
                }

                // areaconocimiento_show
                if (preg_match('#^/areaconocimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaconocimiento_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AreaConocimientoController::showAction',));
                }

                // areaconocimiento_new
                if ($pathinfo === '/areaconocimiento/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AreaConocimientoController::newAction',  '_route' => 'areaconocimiento_new',);
                }

                // areaconocimiento_create
                if ($pathinfo === '/areaconocimiento/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_areaconocimiento_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AreaConocimientoController::createAction',  '_route' => 'areaconocimiento_create',);
                }
                not_areaconocimiento_create:

                // areaconocimiento_edit
                if (preg_match('#^/areaconocimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaconocimiento_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AreaConocimientoController::editAction',));
                }

                // areaconocimiento_update
                if (preg_match('#^/areaconocimiento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_areaconocimiento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaconocimiento_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AreaConocimientoController::updateAction',));
                }
                not_areaconocimiento_update:

                // areaconocimiento_delete
                if (preg_match('#^/areaconocimiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_areaconocimiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaconocimiento_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\AreaConocimientoController::deleteAction',));
                }
                not_areaconocimiento_delete:

            }

        }

        if (0 === strpos($pathinfo, '/triangulotalento')) {
            // triangulotalento
            if (rtrim($pathinfo, '/') === '/triangulotalento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'triangulotalento');
                }

                return array (  '_controller' => 'UciBaseDatosBundle:TrianguloTalento:index',  '_route' => 'triangulotalento',);
            }

            // triangulotalento_show
            if (preg_match('#^/triangulotalento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'triangulotalento_show')), array (  '_controller' => 'UciBaseDatosBundle:TrianguloTalento:show',));
            }

            // triangulotalento_new
            if ($pathinfo === '/triangulotalento/new') {
                return array (  '_controller' => 'UciBaseDatosBundle:TrianguloTalento:new',  '_route' => 'triangulotalento_new',);
            }

            // triangulotalento_create
            if ($pathinfo === '/triangulotalento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_triangulotalento_create;
                }

                return array (  '_controller' => 'UciBaseDatosBundle:TrianguloTalento:create',  '_route' => 'triangulotalento_create',);
            }
            not_triangulotalento_create:

            // triangulotalento_edit
            if (preg_match('#^/triangulotalento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'triangulotalento_edit')), array (  '_controller' => 'UciBaseDatosBundle:TrianguloTalento:edit',));
            }

            // triangulotalento_update
            if (preg_match('#^/triangulotalento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_triangulotalento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'triangulotalento_update')), array (  '_controller' => 'UciBaseDatosBundle:TrianguloTalento:update',));
            }
            not_triangulotalento_update:

            // triangulotalento_delete
            if (preg_match('#^/triangulotalento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_triangulotalento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'triangulotalento_delete')), array (  '_controller' => 'UciBaseDatosBundle:TrianguloTalento:delete',));
            }
            not_triangulotalento_delete:

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // uci_base_datos_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_base_datos_homepage')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DefaultController::indexAction',));
            }

            // uci_asistente_academica_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_asistente_academica_homepage')), array (  '_controller' => 'Uci\\Bundle\\AsistenteAcademicaBundle\\Controller\\DefaultController::indexAction',));
            }

            // uci_profesor_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_profesor_homepage')), array (  '_controller' => 'Uci\\Bundle\\ProfesorBundle\\Controller\\DefaultController::indexAction',));
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

            // uci_administrador_ver_cuestionario
            if (preg_match('#^/admin/(?P<id>[^/]++)/ver_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_ver_cuestionario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aVerCuestionarioAction',));
            }

            // uci_administrador_borrarCuestionario
            if (preg_match('#^/admin/(?P<idCuestionario>[^/]++)/borrar_cuestionario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_borrarCuestionario')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\CuestionarioController::aBorrarCuestionarioAction',));
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
            if (preg_match('#^/admin/(?P<idPregunta>[^/]++)/datos_libro$#s', $pathinfo, $matches)) {
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

            if (0 === strpos($pathinfo, '/admin/libro')) {
                // uci_administrador_indicelibro
                if ($pathinfo === '/admin/libro/lista_libros') {
                    return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aIndiceLibroAction',  '_route' => 'uci_administrador_indicelibro',);
                }

                // uci_administrador_nuevolibro
                if ($pathinfo === '/admin/libro/registrar_libro') {
                    return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aRegistrarLibroAction',  '_route' => 'uci_administrador_nuevolibro',);
                }

                // uci_administrador_editarlibro
                if ($pathinfo === '/admin/libro/editat_libro') {
                    return array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aEditarLibroAction',  '_route' => 'uci_administrador_editarlibro',);
                }

                // uci_administrador_deletelibro
                if (0 === strpos($pathinfo, '/admin/libro/admin') && preg_match('#^/admin/libro/admin/(?P<id>[^/]++)/borrar_libro$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_administrador_deletelibro')), array (  '_controller' => 'Uci\\Bundle\\AdministradorBundle\\Controller\\LibroController::aBorrarLibroAction',));
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
