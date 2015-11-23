<?php

/* UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_bb6a6bfe7f212f6632fdaa129009dbf6b3778cd0f9d2ca1c7c4d04bde4942379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_a203e764babb8ec983e520201b2be14b4ed35eef19b56ad814e929e91a8baf93' => array($this, 'block___internal_a203e764babb8ec983e520201b2be14b4ed35eef19b56ad814e929e91a8baf93'),
            '__internal_5c7d6a79b4276e6ef7fd370f3b9cef8b56854cdb42b5b402ac1b7be7c5b123ff' => array($this, 'block___internal_5c7d6a79b4276e6ef7fd370f3b9cef8b56854cdb42b5b402ac1b7be7c5b123ff'),
            '__internal_32b00947552f1fdcd22efa9d85103f6cbc28cce337a4ff8c688bb5ac16422031' => array($this, 'block___internal_32b00947552f1fdcd22efa9d85103f6cbc28cce337a4ff8c688bb5ac16422031'),
            '__internal_797581e21a59bd948d2cd80281d32096e5863b2851acc5210c48c49e6808bbf4' => array($this, 'block___internal_797581e21a59bd948d2cd80281d32096e5863b2851acc5210c48c49e6808bbf4'),
            '__internal_988a5ac88b9422f051da9de1c54e10f02eaa1d5cda51d7be2e9e4ce97b8290e8' => array($this, 'block___internal_988a5ac88b9422f051da9de1c54e10f02eaa1d5cda51d7be2e9e4ce97b8290e8'),
            '__internal_6168a75b51159795cf81e1b43d487fa730ff69b8a2ab7e2ccef49ac026097d31' => array($this, 'block___internal_6168a75b51159795cf81e1b43d487fa730ff69b8a2ab7e2ccef49ac026097d31'),
            '__internal_088cfcacaaa6acebd4e782a3927e94bb574259ad038d96476b4706ed5d958c7d' => array($this, 'block___internal_088cfcacaaa6acebd4e782a3927e94bb574259ad038d96476b4706ed5d958c7d'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ca5fdff71ae6c78725ceee72dd8e98de81ac4c9c554bb1e1fd308ec77330a4c = $this->env->getExtension("native_profiler");
        $__internal_2ca5fdff71ae6c78725ceee72dd8e98de81ac4c9c554bb1e1fd308ec77330a4c->enter($__internal_2ca5fdff71ae6c78725ceee72dd8e98de81ac4c9c554bb1e1fd308ec77330a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca5fdff71ae6c78725ceee72dd8e98de81ac4c9c554bb1e1fd308ec77330a4c->leave($__internal_2ca5fdff71ae6c78725ceee72dd8e98de81ac4c9c554bb1e1fd308ec77330a4c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d1209764fefcf930060bd7ddc52499858943384dcc1641c3b00b5c88ebe58f99 = $this->env->getExtension("native_profiler");
        $__internal_d1209764fefcf930060bd7ddc52499858943384dcc1641c3b00b5c88ebe58f99->enter($__internal_d1209764fefcf930060bd7ddc52499858943384dcc1641c3b00b5c88ebe58f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_d1209764fefcf930060bd7ddc52499858943384dcc1641c3b00b5c88ebe58f99->leave($__internal_d1209764fefcf930060bd7ddc52499858943384dcc1641c3b00b5c88ebe58f99_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8025f42a3d9630ac3cf920d088e807d10d46e4fbd7048653638cc681ce2f1d0d = $this->env->getExtension("native_profiler");
        $__internal_8025f42a3d9630ac3cf920d088e807d10d46e4fbd7048653638cc681ce2f1d0d->enter($__internal_8025f42a3d9630ac3cf920d088e807d10d46e4fbd7048653638cc681ce2f1d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Cuestionarios</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Generar cuestionarios</h1>
                </header>
                <br>
                <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\" id=\"formularioCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuestionarioname", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadPreguntas", array()), 'row');
        echo "
                        </div>
                    </div>
                    <h3>Parámetros</h3>
                    <div id=\"libros\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 40
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a203e764babb8ec983e520201b2be14b4ed35eef19b56ad814e929e91a8baf93", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_5c7d6a79b4276e6ef7fd370f3b9cef8b56854cdb42b5b402ac1b7be7c5b123ff", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_32b00947552f1fdcd22efa9d85103f6cbc28cce337a4ff8c688bb5ac16422031", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_797581e21a59bd948d2cd80281d32096e5863b2851acc5210c48c49e6808bbf4", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_988a5ac88b9422f051da9de1c54e10f02eaa1d5cda51d7be2e9e4ce97b8290e8", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6168a75b51159795cf81e1b43d487fa730ff69b8a2ab7e2ccef49ac026097d31", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_088cfcacaaa6acebd4e782a3927e94bb574259ad038d96476b4706ed5d958c7d", $context, $blocks));
        // line 72
        echo "\">
                    </div>
                    <br>
                    <div class=\"dropdown\">
                        <a data-toggle=\"dropdown\" href=\"#\" id=\"area_link\">Añadir parámetro</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 5);\">Libro</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 0);\">A. Conocimiento</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 1);\">G. Procesos</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 2);\">T. Talento</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 3);\">T. Prueba</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 4);\">T. Respuesta</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 6);\">P. Conjunto</a></li>
                        </ul>
                    </div>   
                    <br><br><br>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">                     
                        </div>
                        <div class=\"col-lg-2 text-right\">
                            <button class=\"btn btn-bg\" type=\"button\" onclick=\"verificarParametros();\">Verificar</button>
                        </div>
                        <div class=\"col-lg-1 text-right\"></div>
                        <div class=\"col-lg-2 text-right\">
                            <button class=\"btn btn-action\" id=\"enviar\" type=\"submit\">Generar</button>
                        </div>
                    </div>
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>





            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row top-space\">

            <br><br>




            <br><br>
        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_8025f42a3d9630ac3cf920d088e807d10d46e4fbd7048653638cc681ce2f1d0d->leave($__internal_8025f42a3d9630ac3cf920d088e807d10d46e4fbd7048653638cc681ce2f1d0d_prof);

    }

    // line 40
    public function block___internal_a203e764babb8ec983e520201b2be14b4ed35eef19b56ad814e929e91a8baf93($context, array $blocks = array())
    {
        $__internal_262bf2e4f4ba2ea1fa34cf51f8f7fe178f1418f81f77d7718dd0a04cc271c9f9 = $this->env->getExtension("native_profiler");
        $__internal_262bf2e4f4ba2ea1fa34cf51f8f7fe178f1418f81f77d7718dd0a04cc271c9f9->enter($__internal_262bf2e4f4ba2ea1fa34cf51f8f7fe178f1418f81f77d7718dd0a04cc271c9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a203e764babb8ec983e520201b2be14b4ed35eef19b56ad814e929e91a8baf93"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_262bf2e4f4ba2ea1fa34cf51f8f7fe178f1418f81f77d7718dd0a04cc271c9f9->leave($__internal_262bf2e4f4ba2ea1fa34cf51f8f7fe178f1418f81f77d7718dd0a04cc271c9f9_prof);

    }

    // line 45
    public function block___internal_5c7d6a79b4276e6ef7fd370f3b9cef8b56854cdb42b5b402ac1b7be7c5b123ff($context, array $blocks = array())
    {
        $__internal_3bd7c4698a85f23437a0fc19f1718724d53663bac952595a04ebcd2bbcccf537 = $this->env->getExtension("native_profiler");
        $__internal_3bd7c4698a85f23437a0fc19f1718724d53663bac952595a04ebcd2bbcccf537->enter($__internal_3bd7c4698a85f23437a0fc19f1718724d53663bac952595a04ebcd2bbcccf537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_5c7d6a79b4276e6ef7fd370f3b9cef8b56854cdb42b5b402ac1b7be7c5b123ff"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_3bd7c4698a85f23437a0fc19f1718724d53663bac952595a04ebcd2bbcccf537->leave($__internal_3bd7c4698a85f23437a0fc19f1718724d53663bac952595a04ebcd2bbcccf537_prof);

    }

    // line 50
    public function block___internal_32b00947552f1fdcd22efa9d85103f6cbc28cce337a4ff8c688bb5ac16422031($context, array $blocks = array())
    {
        $__internal_2e39db11b6af3e5d7add9615ff15ce3dd2d8f1051f827b7358eb5e4f10e892d0 = $this->env->getExtension("native_profiler");
        $__internal_2e39db11b6af3e5d7add9615ff15ce3dd2d8f1051f827b7358eb5e4f10e892d0->enter($__internal_2e39db11b6af3e5d7add9615ff15ce3dd2d8f1051f827b7358eb5e4f10e892d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_32b00947552f1fdcd22efa9d85103f6cbc28cce337a4ff8c688bb5ac16422031"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_2e39db11b6af3e5d7add9615ff15ce3dd2d8f1051f827b7358eb5e4f10e892d0->leave($__internal_2e39db11b6af3e5d7add9615ff15ce3dd2d8f1051f827b7358eb5e4f10e892d0_prof);

    }

    // line 55
    public function block___internal_797581e21a59bd948d2cd80281d32096e5863b2851acc5210c48c49e6808bbf4($context, array $blocks = array())
    {
        $__internal_aba0d5f24230f8d4b6788c1bf8b3d83e4248ab5e6b0a66087f3d4786ff5503c9 = $this->env->getExtension("native_profiler");
        $__internal_aba0d5f24230f8d4b6788c1bf8b3d83e4248ab5e6b0a66087f3d4786ff5503c9->enter($__internal_aba0d5f24230f8d4b6788c1bf8b3d83e4248ab5e6b0a66087f3d4786ff5503c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_797581e21a59bd948d2cd80281d32096e5863b2851acc5210c48c49e6808bbf4"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_aba0d5f24230f8d4b6788c1bf8b3d83e4248ab5e6b0a66087f3d4786ff5503c9->leave($__internal_aba0d5f24230f8d4b6788c1bf8b3d83e4248ab5e6b0a66087f3d4786ff5503c9_prof);

    }

    // line 60
    public function block___internal_988a5ac88b9422f051da9de1c54e10f02eaa1d5cda51d7be2e9e4ce97b8290e8($context, array $blocks = array())
    {
        $__internal_0271d828c804c5788176915fa33c0aeb802d34436895de18f211e273c15e896c = $this->env->getExtension("native_profiler");
        $__internal_0271d828c804c5788176915fa33c0aeb802d34436895de18f211e273c15e896c->enter($__internal_0271d828c804c5788176915fa33c0aeb802d34436895de18f211e273c15e896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_988a5ac88b9422f051da9de1c54e10f02eaa1d5cda51d7be2e9e4ce97b8290e8"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_0271d828c804c5788176915fa33c0aeb802d34436895de18f211e273c15e896c->leave($__internal_0271d828c804c5788176915fa33c0aeb802d34436895de18f211e273c15e896c_prof);

    }

    // line 65
    public function block___internal_6168a75b51159795cf81e1b43d487fa730ff69b8a2ab7e2ccef49ac026097d31($context, array $blocks = array())
    {
        $__internal_39e30a90ef3eff39b94bb174eb44e52efb1cdf751b6430b7e11c7255f77fae43 = $this->env->getExtension("native_profiler");
        $__internal_39e30a90ef3eff39b94bb174eb44e52efb1cdf751b6430b7e11c7255f77fae43->enter($__internal_39e30a90ef3eff39b94bb174eb44e52efb1cdf751b6430b7e11c7255f77fae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6168a75b51159795cf81e1b43d487fa730ff69b8a2ab7e2ccef49ac026097d31"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_39e30a90ef3eff39b94bb174eb44e52efb1cdf751b6430b7e11c7255f77fae43->leave($__internal_39e30a90ef3eff39b94bb174eb44e52efb1cdf751b6430b7e11c7255f77fae43_prof);

    }

    // line 70
    public function block___internal_088cfcacaaa6acebd4e782a3927e94bb574259ad038d96476b4706ed5d958c7d($context, array $blocks = array())
    {
        $__internal_464aad078ba1a7221ccb709ee4190e84e32b2d5093ba86d0383396ae7cc0c32d = $this->env->getExtension("native_profiler");
        $__internal_464aad078ba1a7221ccb709ee4190e84e32b2d5093ba86d0383396ae7cc0c32d->enter($__internal_464aad078ba1a7221ccb709ee4190e84e32b2d5093ba86d0383396ae7cc0c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_088cfcacaaa6acebd4e782a3927e94bb574259ad038d96476b4706ed5d958c7d"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_464aad078ba1a7221ccb709ee4190e84e32b2d5093ba86d0383396ae7cc0c32d->leave($__internal_464aad078ba1a7221ccb709ee4190e84e32b2d5093ba86d0383396ae7cc0c32d_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6daf7eeaf48454efa1fac04421dc2fb04b05beb8519de7cdda4536b30d2d97d = $this->env->getExtension("native_profiler");
        $__internal_f6daf7eeaf48454efa1fac04421dc2fb04b05beb8519de7cdda4536b30d2d97d->enter($__internal_f6daf7eeaf48454efa1fac04421dc2fb04b05beb8519de7cdda4536b30d2d97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function autollenado() {

        }

        function addParametro(tipo) {
            var collectionHolder;
            switch (tipo) {
                case 0:
                    collectionHolder = \$('#areas');
                    break;
                case 1:
                    collectionHolder = \$('#grupos');
                    break;
                case 2:
                    collectionHolder = \$('#triangulos');
                    break;
                case 3:
                    collectionHolder = \$('#tipospruebas');
                    break;
                case 4:
                    collectionHolder = \$('#tiposrespuestas');
                    break;
                case 5:
                    collectionHolder = \$('#libros');
                    break;
                case 6:
                    collectionHolder = \$('#conjuntos');
                    break;
            }
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
            var removeFormA = \$('<a href=\"#\" onclick=\"addTagFormDeleteLink(event, this); \"><span class=\"navigationSpace glyphicon glyphicon-remove\" style=\"color: red; font-size:180%\" ></span></a>');
            var newTr = \$('<div class=\"row top-margin\"></div>');
            newTr.append(form);
            newTr.append(removeFormA);
            collectionHolder.append(newTr);
            return prototype;
        }
        function addTagFormDeleteLink(e, elemento) {
            e.preventDefault();
            var removeFormA = elemento.parentNode;
            removeFormA.remove();
        }
        function agregarFormParametro(e, tipo) {
            e.preventDefault();
            addParametro(tipo);
            eventoSelectLibro();
            deshabilitarNumericos();
            configurarCamposNumericos();
        }

        function eventoSelectLibro() {
            \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_parametroConjunto_'][id \$='libro']\").change(function () {
                var numeroForm = \$(this).attr('id').substring(58, 59);
                var \$capitulo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_capitulo');
                var \$area_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_areaConocimiento');
                var \$grupo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_grupoProcesos');
                var \$triangulo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_trianguloTalento');
                \$capitulo_selector.html('<option></option>');
                \$area_selector.html('<option></option>');
                \$grupo_selector.html('<option></option>');
                \$triangulo_selector.html('<option></option>');
                var idLibro = (\$(this).val()) ? \$(this).val() : 0;
                \$.ajax({
                    url: \"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("uci_administrador_setearlibroscuestionario");
        echo "\",
                    type: \"POST\",
                    data: {idLibro: idLibro},
                    success: function (data) {
                        \$capitulo_selector.html('<option></option>');
                        if (data.capitulos.id != \"0\") {
                            for (var i = 0, total = data.capitulos.length; i < total; i++) {
                                \$capitulo_selector.append('<option value=\"' + data.capitulos[i].id + '\">' + data.capitulos[i].nombreCapitulo + '</option>');
                            }
                        }
                        \$area_selector.html('<option></option>');
                        if (data.areas.id != \"0\") {
                            for (var i = 0, total = data.areas.length; i < total; i++) {
                                \$area_selector.append('<option value=\"' + data.areas[i].id + '\">' + data.areas[i].nombreArea + '</option>');
                            }
                        }
                        \$grupo_selector.html('<option></option>');
                        if (data.grupos.id != \"0\") {
                            for (var i = 0, total = data.grupos.length; i < total; i++) {
                                \$grupo_selector.append('<option value=\"' + data.grupos[i].id + '\">' + data.grupos[i].nombreGrupo + '</option>');
                            }
                        }
                        \$triangulo_selector.html('<option></option>');
                        if (data.triangulos.id != \"0\") {
                            for (var i = 0, total = data.triangulos.length; i < total; i++) {
                                \$triangulo_selector.append('<option value=\"' + data.triangulos[i].id + '\">' + data.triangulos[i].nombreTalento + '</option>');
                            }
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert('Ocurrio un error');
                    }
                });

            });
        }

        function configurarCamposNumericos() {
            \$(\"input[id\$='porcentaje']\").numeric();
            \$(\"input[id\$='porcentaje']\").keyup(function (e) {
                if (\$(this).val() != '' && \$(this).val() > 0) {
                    var campoCantidad = \$(this).attr('id').substring(0, \$(this).attr('id').length - 11) + '_cantidad';
                    var porcentaje = (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() * \$(this).val()) / 100;
                    \$(\"#\" + campoCantidad).val(porcentaje);
                    if (Math.round(porcentaje) != porcentaje) {
                        \$(\"#\" + campoCantidad).addClass('inputColoreado');
                    } else {
                        \$(\"#\" + campoCantidad).removeClass('inputColoreado');
                    }
                    if (\$(this).val() > 100) {
                        \$(this).addClass('inputColoreado');
                    } else {
                        \$(this).removeClass('inputColoreado');
                    }
                } else {
                    \$(this).removeClass('inputColoreado');
                    var campoCantidad = \$(this).attr('id').substring(0, \$(this).attr('id').length - 11) + '_cantidad';
                    \$(\"#\" + campoCantidad).val(0);
                    \$(\"#\" + campoCantidad).removeClass('inputColoreado');
                }
            });
            \$(\"input[id\$='cantidad']\").bind('click keyup', function () {
                if (\$(this).val() != '' && \$(this).val() > 0) {
                    var campoPorcentaje = \$(this).attr('id').substring(0, \$(this).attr('id').length - 9) + '_porcentaje';
                    var porcentaje = (100 * \$(this).val()) / \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val();
                    \$(\"#\" + campoPorcentaje).val(porcentaje);
                    if (porcentaje > 100) {
                        \$(\"#\" + campoPorcentaje).addClass('inputColoreado');
                    } else {
                        \$(\"#\" + campoPorcentaje).removeClass('inputColoreado');
                    }
                    if (Math.round(\$(this).val()) != \$(this).val()) {
                        \$(this).addClass('inputColoreado');
                    } else {
                        \$(this).removeClass('inputColoreado');
                    }
                } else {
                    var campoPorcentaje = \$(this).attr('id').substring(0, \$(this).attr('id').length - 9) + '_porcentaje';
                    \$(\"#\" + campoPorcentaje).val(0);
                    \$(\"#\" + campoPorcentaje).removeClass('inputColoreado');
                    \$(this).removeClass('inputColoreado');
                }
            });
        }

        function deshabilitarNumericos() {
            if (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() == '' || \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() < 1) {
                \$(\"input[id\$='porcentaje']\").attr('readonly', true);
                \$(\"input[id\$='cantidad']\").attr('readonly', true);
            } else {
                \$(\"input[id\$='porcentaje']\").attr('readonly', false);
                \$(\"input[id\$='cantidad']\").attr('readonly', false);
            }
        }

        document.ready = function () {

            \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').bind('click keyup', function () {
                deshabilitarNumericos();
            });

            \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').keydown(function (e) {
                if (e.which != '8' && e.which != '46') {
                    str = \$(this).val();
                    str = str.replace(/\\s/g, '');
                    \$(this).val(str);
                }
            });
            \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').bind('input', function (e) {
                var \$valor = \$(this).val();
                \$valor = \$valor.replace(/\\s/g, \"\");
                \$(this).val(\$valor);
            });
            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            }
            );
            var handleSpeedBump = function (e) {
                e.preventDefault();
                var href = this.getAttribute(\"data-href\");
                var sure = confirm(\"¿Esta seguro que desea realizar el borrado?\\n (Esta operación no es reversible)\");
                if (!sure)
                    return;
                document.location = href;
            };
            \$(\"a.speedbump\")
                    .click(handleSpeedBump)
                    .bind(\"contextmenu\", handleSpeedBump)
                    .dblclick(handleSpeedBump)
                    .each(function () {
                        var href = this.href;
                        this.setAttribute(\"data-href\", href);
                        this.href = \"javascript:void('Navigate to \" + href.replace(\"'\", \"\") + \"')\";
                    });
        };
    </script>
";
        
        $__internal_f6daf7eeaf48454efa1fac04421dc2fb04b05beb8519de7cdda4536b30d2d97d->leave($__internal_f6daf7eeaf48454efa1fac04421dc2fb04b05beb8519de7cdda4536b30d2d97d_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 195,  337 => 128,  331 => 127,  321 => 71,  315 => 70,  305 => 66,  299 => 65,  289 => 61,  283 => 60,  273 => 56,  267 => 55,  257 => 51,  251 => 50,  241 => 46,  235 => 45,  225 => 41,  219 => 40,  185 => 99,  156 => 72,  154 => 70,  149 => 67,  147 => 65,  142 => 62,  140 => 60,  135 => 57,  133 => 55,  128 => 52,  126 => 50,  121 => 47,  119 => 45,  114 => 42,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
