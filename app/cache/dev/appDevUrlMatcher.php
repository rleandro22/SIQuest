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

        // uci_principal_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_principal_homepage')), array (  '_controller' => 'Uci\\Bundle\\PrincipalBundle\\Controller\\DefaultController::indexAction',));
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

        if (0 === strpos($pathinfo, '/tipopr')) {
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

            if (0 === strpos($pathinfo, '/tipopregunta')) {
                // tipopregunta
                if (rtrim($pathinfo, '/') === '/tipopregunta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipopregunta');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPreguntaController::indexAction',  '_route' => 'tipopregunta',);
                }

                // tipopregunta_show
                if (preg_match('#^/tipopregunta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipopregunta_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPreguntaController::showAction',));
                }

                // tipopregunta_new
                if ($pathinfo === '/tipopregunta/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPreguntaController::newAction',  '_route' => 'tipopregunta_new',);
                }

                // tipopregunta_create
                if ($pathinfo === '/tipopregunta/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipopregunta_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPreguntaController::createAction',  '_route' => 'tipopregunta_create',);
                }
                not_tipopregunta_create:

                // tipopregunta_edit
                if (preg_match('#^/tipopregunta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipopregunta_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPreguntaController::editAction',));
                }

                // tipopregunta_update
                if (preg_match('#^/tipopregunta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipopregunta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipopregunta_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPreguntaController::updateAction',));
                }
                not_tipopregunta_update:

                // tipopregunta_delete
                if (preg_match('#^/tipopregunta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipopregunta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipopregunta_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\TipoPreguntaController::deleteAction',));
                }
                not_tipopregunta_delete:

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

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/rol')) {
                // rol
                if (rtrim($pathinfo, '/') === '/rol') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rol');
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::indexAction',  '_route' => 'rol',);
                }

                // rol_show
                if (preg_match('#^/rol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::showAction',));
                }

                // rol_new
                if ($pathinfo === '/rol/new') {
                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::newAction',  '_route' => 'rol_new',);
                }

                // rol_create
                if ($pathinfo === '/rol/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rol_create;
                    }

                    return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::createAction',  '_route' => 'rol_create',);
                }
                not_rol_create:

                // rol_edit
                if (preg_match('#^/rol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::editAction',));
                }

                // rol_update
                if (preg_match('#^/rol/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_rol_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\RolController::updateAction',));
                }
                not_rol_update:

                // rol_delete
                if (preg_match('#^/rol/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
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
                    if (0 === strpos($pathinfo, '/cuestionariotienepreguntas')) {
                        // cuestionariotienepreguntas
                        if (rtrim($pathinfo, '/') === '/cuestionariotienepreguntas') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'cuestionariotienepreguntas');
                            }

                            return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioTienePreguntasController::indexAction',  '_route' => 'cuestionariotienepreguntas',);
                        }

                        // cuestionariotienepreguntas_show
                        if (preg_match('#^/cuestionariotienepreguntas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionariotienepreguntas_show')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioTienePreguntasController::showAction',));
                        }

                        // cuestionariotienepreguntas_new
                        if ($pathinfo === '/cuestionariotienepreguntas/new') {
                            return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioTienePreguntasController::newAction',  '_route' => 'cuestionariotienepreguntas_new',);
                        }

                        // cuestionariotienepreguntas_create
                        if ($pathinfo === '/cuestionariotienepreguntas/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_cuestionariotienepreguntas_create;
                            }

                            return array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioTienePreguntasController::createAction',  '_route' => 'cuestionariotienepreguntas_create',);
                        }
                        not_cuestionariotienepreguntas_create:

                        // cuestionariotienepreguntas_edit
                        if (preg_match('#^/cuestionariotienepreguntas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionariotienepreguntas_edit')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioTienePreguntasController::editAction',));
                        }

                        // cuestionariotienepreguntas_update
                        if (preg_match('#^/cuestionariotienepreguntas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_cuestionariotienepreguntas_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionariotienepreguntas_update')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioTienePreguntasController::updateAction',));
                        }
                        not_cuestionariotienepreguntas_update:

                        // cuestionariotienepreguntas_delete
                        if (preg_match('#^/cuestionariotienepreguntas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_cuestionariotienepreguntas_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuestionariotienepreguntas_delete')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\CuestionarioTienePreguntasController::deleteAction',));
                        }
                        not_cuestionariotienepreguntas_delete:

                    }

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

        // uci_base_datos_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uci_base_datos_homepage')), array (  '_controller' => 'Uci\\Bundle\\BaseDatosBundle\\Controller\\DefaultController::indexAction',));
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
