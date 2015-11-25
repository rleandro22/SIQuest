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
            '__internal_c4be4b4387fb46d8d330ca8c661d1b9ec4522068ad056ed11da712669fcabb7e' => array($this, 'block___internal_c4be4b4387fb46d8d330ca8c661d1b9ec4522068ad056ed11da712669fcabb7e'),
            '__internal_0859264c68bbd464a4e47692105c9077f0981ce125d1f7d260c18bed0b6b3cf4' => array($this, 'block___internal_0859264c68bbd464a4e47692105c9077f0981ce125d1f7d260c18bed0b6b3cf4'),
            '__internal_a677b1e06cdd56d584a8192a8a87bd8aba45ab6240938538e511791463861e66' => array($this, 'block___internal_a677b1e06cdd56d584a8192a8a87bd8aba45ab6240938538e511791463861e66'),
            '__internal_11f56c823f5a699dcdff40d18a87f68aa089f0c1113a4d853609c2b85aadb6cc' => array($this, 'block___internal_11f56c823f5a699dcdff40d18a87f68aa089f0c1113a4d853609c2b85aadb6cc'),
            '__internal_29ff334456537d1e29595e45a61c032703b2ed11c05c56de738931125c127b91' => array($this, 'block___internal_29ff334456537d1e29595e45a61c032703b2ed11c05c56de738931125c127b91'),
            '__internal_959041caadfaccc0b3480e86a02050d89cba2c50be7551c794c2f56f877fe37d' => array($this, 'block___internal_959041caadfaccc0b3480e86a02050d89cba2c50be7551c794c2f56f877fe37d'),
            '__internal_f351dbe9ee252c4d85f2fe6d7f4923e83cab0ea045cfe6bc8afd95a09550a813' => array($this, 'block___internal_f351dbe9ee252c4d85f2fe6d7f4923e83cab0ea045cfe6bc8afd95a09550a813'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88b8c40ab2a9f7df1a933c910cb5e17c0b5502d6066c7ca664e22d13dae1368c = $this->env->getExtension("native_profiler");
        $__internal_88b8c40ab2a9f7df1a933c910cb5e17c0b5502d6066c7ca664e22d13dae1368c->enter($__internal_88b8c40ab2a9f7df1a933c910cb5e17c0b5502d6066c7ca664e22d13dae1368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b8c40ab2a9f7df1a933c910cb5e17c0b5502d6066c7ca664e22d13dae1368c->leave($__internal_88b8c40ab2a9f7df1a933c910cb5e17c0b5502d6066c7ca664e22d13dae1368c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b74f76a0c9133aa133d16bfa6390e041edc2c702c1604da8bbc9e7cf30baf8dd = $this->env->getExtension("native_profiler");
        $__internal_b74f76a0c9133aa133d16bfa6390e041edc2c702c1604da8bbc9e7cf30baf8dd->enter($__internal_b74f76a0c9133aa133d16bfa6390e041edc2c702c1604da8bbc9e7cf30baf8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_b74f76a0c9133aa133d16bfa6390e041edc2c702c1604da8bbc9e7cf30baf8dd->leave($__internal_b74f76a0c9133aa133d16bfa6390e041edc2c702c1604da8bbc9e7cf30baf8dd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_221cab51ca1004744255b3ee91a767f242e75eb0588e2c3f788235dfac1ecafe = $this->env->getExtension("native_profiler");
        $__internal_221cab51ca1004744255b3ee91a767f242e75eb0588e2c3f788235dfac1ecafe->enter($__internal_221cab51ca1004744255b3ee91a767f242e75eb0588e2c3f788235dfac1ecafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <div id=\"listaParametros\">
                        <div id=\"libros\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 41
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c4be4b4387fb46d8d330ca8c661d1b9ec4522068ad056ed11da712669fcabb7e", $context, $blocks));
        // line 43
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 46
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0859264c68bbd464a4e47692105c9077f0981ce125d1f7d260c18bed0b6b3cf4", $context, $blocks));
        // line 48
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 51
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a677b1e06cdd56d584a8192a8a87bd8aba45ab6240938538e511791463861e66", $context, $blocks));
        // line 53
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 56
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_11f56c823f5a699dcdff40d18a87f68aa089f0c1113a4d853609c2b85aadb6cc", $context, $blocks));
        // line 58
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 61
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_29ff334456537d1e29595e45a61c032703b2ed11c05c56de738931125c127b91", $context, $blocks));
        // line 63
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 66
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_959041caadfaccc0b3480e86a02050d89cba2c50be7551c794c2f56f877fe37d", $context, $blocks));
        // line 68
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 71
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f351dbe9ee252c4d85f2fe6d7f4923e83cab0ea045cfe6bc8afd95a09550a813", $context, $blocks));
        // line 73
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
                    </div> 
                    <br><br><br>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">                     
                        </div>
                        <div class=\"col-lg-1 text-right\"></div>
                        <div class=\"col-lg-2 text-right\">
                            <button class=\"btn btn-action\" id=\"enviar\" type=\"button\">Agregar preguntas</button>
                        </div>
                    </div>
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>





            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row\">
            <br><br>
            <table class=\"table demo table-bordered\" id=\"tablaPreguntas\">


            </table>  
            <br><br>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">                     
            </div>
            <div class=\"col-lg-1 text-right\"></div>
            <div class=\"col-lg-2 text-right\">
                <button class=\"btn btn-action\" id=\"guardar\" type=\"button\">Guardar preguntas</button>
            </div>
        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_221cab51ca1004744255b3ee91a767f242e75eb0588e2c3f788235dfac1ecafe->leave($__internal_221cab51ca1004744255b3ee91a767f242e75eb0588e2c3f788235dfac1ecafe_prof);

    }

    // line 41
    public function block___internal_c4be4b4387fb46d8d330ca8c661d1b9ec4522068ad056ed11da712669fcabb7e($context, array $blocks = array())
    {
        $__internal_c15532759b4a4651e57dd924b2c602c5a47c41daaa16be4ed149680037d0bfb8 = $this->env->getExtension("native_profiler");
        $__internal_c15532759b4a4651e57dd924b2c602c5a47c41daaa16be4ed149680037d0bfb8->enter($__internal_c15532759b4a4651e57dd924b2c602c5a47c41daaa16be4ed149680037d0bfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c4be4b4387fb46d8d330ca8c661d1b9ec4522068ad056ed11da712669fcabb7e"));

        // line 42
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_c15532759b4a4651e57dd924b2c602c5a47c41daaa16be4ed149680037d0bfb8->leave($__internal_c15532759b4a4651e57dd924b2c602c5a47c41daaa16be4ed149680037d0bfb8_prof);

    }

    // line 46
    public function block___internal_0859264c68bbd464a4e47692105c9077f0981ce125d1f7d260c18bed0b6b3cf4($context, array $blocks = array())
    {
        $__internal_7673c1428b5efcb7cb8eea61b5ff395d47807ad521b867ce89dde407344b20a2 = $this->env->getExtension("native_profiler");
        $__internal_7673c1428b5efcb7cb8eea61b5ff395d47807ad521b867ce89dde407344b20a2->enter($__internal_7673c1428b5efcb7cb8eea61b5ff395d47807ad521b867ce89dde407344b20a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0859264c68bbd464a4e47692105c9077f0981ce125d1f7d260c18bed0b6b3cf4"));

        // line 47
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_7673c1428b5efcb7cb8eea61b5ff395d47807ad521b867ce89dde407344b20a2->leave($__internal_7673c1428b5efcb7cb8eea61b5ff395d47807ad521b867ce89dde407344b20a2_prof);

    }

    // line 51
    public function block___internal_a677b1e06cdd56d584a8192a8a87bd8aba45ab6240938538e511791463861e66($context, array $blocks = array())
    {
        $__internal_0b095b8d37d51acec86b1e1ba57ed998e272607d607012ed22022842b7ab2569 = $this->env->getExtension("native_profiler");
        $__internal_0b095b8d37d51acec86b1e1ba57ed998e272607d607012ed22022842b7ab2569->enter($__internal_0b095b8d37d51acec86b1e1ba57ed998e272607d607012ed22022842b7ab2569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a677b1e06cdd56d584a8192a8a87bd8aba45ab6240938538e511791463861e66"));

        // line 52
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0b095b8d37d51acec86b1e1ba57ed998e272607d607012ed22022842b7ab2569->leave($__internal_0b095b8d37d51acec86b1e1ba57ed998e272607d607012ed22022842b7ab2569_prof);

    }

    // line 56
    public function block___internal_11f56c823f5a699dcdff40d18a87f68aa089f0c1113a4d853609c2b85aadb6cc($context, array $blocks = array())
    {
        $__internal_89f3fec1b35cafbadf67a02120fb51f3cee0c3b36d2f61b92705371c508443d4 = $this->env->getExtension("native_profiler");
        $__internal_89f3fec1b35cafbadf67a02120fb51f3cee0c3b36d2f61b92705371c508443d4->enter($__internal_89f3fec1b35cafbadf67a02120fb51f3cee0c3b36d2f61b92705371c508443d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_11f56c823f5a699dcdff40d18a87f68aa089f0c1113a4d853609c2b85aadb6cc"));

        // line 57
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_89f3fec1b35cafbadf67a02120fb51f3cee0c3b36d2f61b92705371c508443d4->leave($__internal_89f3fec1b35cafbadf67a02120fb51f3cee0c3b36d2f61b92705371c508443d4_prof);

    }

    // line 61
    public function block___internal_29ff334456537d1e29595e45a61c032703b2ed11c05c56de738931125c127b91($context, array $blocks = array())
    {
        $__internal_0b438c4a678cca03ec4a38671dcb98f881e84d4fa1c8970fbec652bb5c482e1c = $this->env->getExtension("native_profiler");
        $__internal_0b438c4a678cca03ec4a38671dcb98f881e84d4fa1c8970fbec652bb5c482e1c->enter($__internal_0b438c4a678cca03ec4a38671dcb98f881e84d4fa1c8970fbec652bb5c482e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_29ff334456537d1e29595e45a61c032703b2ed11c05c56de738931125c127b91"));

        // line 62
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0b438c4a678cca03ec4a38671dcb98f881e84d4fa1c8970fbec652bb5c482e1c->leave($__internal_0b438c4a678cca03ec4a38671dcb98f881e84d4fa1c8970fbec652bb5c482e1c_prof);

    }

    // line 66
    public function block___internal_959041caadfaccc0b3480e86a02050d89cba2c50be7551c794c2f56f877fe37d($context, array $blocks = array())
    {
        $__internal_807167ecfb2c9b0fe77cc19725ea3452c03456dc75ed4e9878ca6e7784bb3fe7 = $this->env->getExtension("native_profiler");
        $__internal_807167ecfb2c9b0fe77cc19725ea3452c03456dc75ed4e9878ca6e7784bb3fe7->enter($__internal_807167ecfb2c9b0fe77cc19725ea3452c03456dc75ed4e9878ca6e7784bb3fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_959041caadfaccc0b3480e86a02050d89cba2c50be7551c794c2f56f877fe37d"));

        // line 67
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_807167ecfb2c9b0fe77cc19725ea3452c03456dc75ed4e9878ca6e7784bb3fe7->leave($__internal_807167ecfb2c9b0fe77cc19725ea3452c03456dc75ed4e9878ca6e7784bb3fe7_prof);

    }

    // line 71
    public function block___internal_f351dbe9ee252c4d85f2fe6d7f4923e83cab0ea045cfe6bc8afd95a09550a813($context, array $blocks = array())
    {
        $__internal_4e56f8ccf6d610cfe39d281b181bb05096e65fab6ba93175aff516932287cbbd = $this->env->getExtension("native_profiler");
        $__internal_4e56f8ccf6d610cfe39d281b181bb05096e65fab6ba93175aff516932287cbbd->enter($__internal_4e56f8ccf6d610cfe39d281b181bb05096e65fab6ba93175aff516932287cbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f351dbe9ee252c4d85f2fe6d7f4923e83cab0ea045cfe6bc8afd95a09550a813"));

        // line 72
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_4e56f8ccf6d610cfe39d281b181bb05096e65fab6ba93175aff516932287cbbd->leave($__internal_4e56f8ccf6d610cfe39d281b181bb05096e65fab6ba93175aff516932287cbbd_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18c957ceaca6927d602663afcbc149e37c186a2d39d8fa842e5ce7564bd39ac6 = $this->env->getExtension("native_profiler");
        $__internal_18c957ceaca6927d602663afcbc149e37c186a2d39d8fa842e5ce7564bd39ac6->enter($__internal_18c957ceaca6927d602663afcbc149e37c186a2d39d8fa842e5ce7564bd39ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

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
        // line 197
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

        function editarPregunta(id) {
            /*var url = '{ path('uci_administrador_editarPregunta', { 'idPregunta': 'idPreg' }) }}';
             url = url.replace(\"idPreg\", id);
             window.open(url, '_blank', \"width=500%, height=500%\", 'toolbar=0,location=0,menubar=0');
             llenarTablaPreguntas();*/
        }

        function borrarPregunta(obj, e) {
            e.preventDefault();
            var sure = confirm(\"¿Esta seguro que desea realizar el borrado?\\n (Esta operación no es reversible)\");
            if (sure)
                \$(obj).parent().parent().remove();
        }

        function llenarTablaPreguntas() {
            \$.ajax({
                type: \$(\"#formularioCuestionario\").attr('method'),
                url: \$(\"#formularioCuestionario\").attr('action'),
                data: \$(\"#formularioCuestionario\").serialize(),
                dataType: \"json\",
                success: function (data) {
                    if (data.preguntas.id != \"0\") {
                        var trHTML = '';
                        for (var i = 0, total = data.preguntas.length; i < total; i++) {
                            trHTML += '<tr><td>' + data.preguntas[i].id + '</td><td>' + data.preguntas[i].titulo + '</td><td>&nbsp;&nbsp;&nbsp;<a onclick=\"editarPregunta(' + data.preguntas[i].id + ')\"><span class=\"glyphicon glyphicon-pencil\"></span></a>&nbsp;&nbsp;&nbsp;<a href=\"\" onclick=\"borrarPregunta(this, event);\"><span class=\"glyphicon glyphicon-remove\"></span></a></td></tr>';
                        }
                        \$(\"#tablaPreguntas tr\").remove();
                        \$('#tablaPreguntas').append(trHTML);
                    }
                },
                error: function () {
                    alert(\"Ocurrio un error.\");
                }
            });
        }

        document.ready = function () {

            \$('#enviar').click(function (e) {
                if (\$(\"input[id\$='porcentaje']\").val() && \$(\"input[id\$='cantidad']\").val() && \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_']\").val() && \$(\"input[id\$='cantidad']\").val() > 0) {
                    llenarTablaPreguntas();
                } else {
                    alert('Ingrese al menos 1 parametro para generar las preguntas.');
                }
            });

            \$('#guardar').click(function (e) {
                var array = [];
                \$('#tablaPreguntas tr').has('td').each(function () {
                    var arrayItem = {};
                    \$('td', \$(this)).each(function (index, item) {
                        arrayItem[index] = \$(item).html();
                    });
                    array.push(arrayItem);
                });
                alert(JSON.stringify(array));
            });

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
        
        $__internal_18c957ceaca6927d602663afcbc149e37c186a2d39d8fa842e5ce7564bd39ac6->leave($__internal_18c957ceaca6927d602663afcbc149e37c186a2d39d8fa842e5ce7564bd39ac6_prof);

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
        return array (  410 => 197,  343 => 134,  337 => 133,  327 => 72,  321 => 71,  311 => 67,  305 => 66,  295 => 62,  289 => 61,  279 => 57,  273 => 56,  263 => 52,  257 => 51,  247 => 47,  241 => 46,  231 => 42,  225 => 41,  184 => 98,  157 => 73,  155 => 71,  150 => 68,  148 => 66,  143 => 63,  141 => 61,  136 => 58,  134 => 56,  129 => 53,  127 => 51,  122 => 48,  120 => 46,  115 => 43,  113 => 41,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
