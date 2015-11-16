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
            '__internal_9d109a3859370143b949929a70e14d3d21e84b4c5e19014d92664e7670f62362' => array($this, 'block___internal_9d109a3859370143b949929a70e14d3d21e84b4c5e19014d92664e7670f62362'),
            '__internal_fca24934055219913c4ee1d7f6626fe642289001417d13e81bbc6f855b2af485' => array($this, 'block___internal_fca24934055219913c4ee1d7f6626fe642289001417d13e81bbc6f855b2af485'),
            '__internal_0f0e7e020ef338c8892732f79a11fe292b53aa271d3d7506a6c9c08f07401150' => array($this, 'block___internal_0f0e7e020ef338c8892732f79a11fe292b53aa271d3d7506a6c9c08f07401150'),
            '__internal_1a9cb928180f3cf0d12babb46fa0d00a7d0a2d8387143fc12ea65a5651d3fced' => array($this, 'block___internal_1a9cb928180f3cf0d12babb46fa0d00a7d0a2d8387143fc12ea65a5651d3fced'),
            '__internal_d06fb9abd9c9e99a7f902cd1ef8cd98a4cdae876fc85f72426cd065e50cbc9e7' => array($this, 'block___internal_d06fb9abd9c9e99a7f902cd1ef8cd98a4cdae876fc85f72426cd065e50cbc9e7'),
            '__internal_8ea65133adc63d27aef4f655dc240d1db3c5004d3d775d1d5e35201b1a56bb0a' => array($this, 'block___internal_8ea65133adc63d27aef4f655dc240d1db3c5004d3d775d1d5e35201b1a56bb0a'),
            '__internal_47889c8828fd1992e21af7fb643b0dd6da4368e014a80d59a5136eb36ad7f5ee' => array($this, 'block___internal_47889c8828fd1992e21af7fb643b0dd6da4368e014a80d59a5136eb36ad7f5ee'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8093e61b970a893cd03265386dab4fa2bffb0addb699e394a30f4cee3129702f = $this->env->getExtension("native_profiler");
        $__internal_8093e61b970a893cd03265386dab4fa2bffb0addb699e394a30f4cee3129702f->enter($__internal_8093e61b970a893cd03265386dab4fa2bffb0addb699e394a30f4cee3129702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8093e61b970a893cd03265386dab4fa2bffb0addb699e394a30f4cee3129702f->leave($__internal_8093e61b970a893cd03265386dab4fa2bffb0addb699e394a30f4cee3129702f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_89c2d929a6b9d96f807a6cdbad77bd594669cd4a24d62ea3fee6e0f3a0c99a65 = $this->env->getExtension("native_profiler");
        $__internal_89c2d929a6b9d96f807a6cdbad77bd594669cd4a24d62ea3fee6e0f3a0c99a65->enter($__internal_89c2d929a6b9d96f807a6cdbad77bd594669cd4a24d62ea3fee6e0f3a0c99a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_89c2d929a6b9d96f807a6cdbad77bd594669cd4a24d62ea3fee6e0f3a0c99a65->leave($__internal_89c2d929a6b9d96f807a6cdbad77bd594669cd4a24d62ea3fee6e0f3a0c99a65_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad76bbbec8891347213f6506c1b1ff38319876b9a10e73dc61f4a76b6bc20201 = $this->env->getExtension("native_profiler");
        $__internal_ad76bbbec8891347213f6506c1b1ff38319876b9a10e73dc61f4a76b6bc20201->enter($__internal_ad76bbbec8891347213f6506c1b1ff38319876b9a10e73dc61f4a76b6bc20201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h1 class=\"page-title\">Filtrar cuestionarios</h1>
                </header>
                <br>
                <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9d109a3859370143b949929a70e14d3d21e84b4c5e19014d92664e7670f62362", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_fca24934055219913c4ee1d7f6626fe642289001417d13e81bbc6f855b2af485", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0f0e7e020ef338c8892732f79a11fe292b53aa271d3d7506a6c9c08f07401150", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_1a9cb928180f3cf0d12babb46fa0d00a7d0a2d8387143fc12ea65a5651d3fced", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d06fb9abd9c9e99a7f902cd1ef8cd98a4cdae876fc85f72426cd065e50cbc9e7", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8ea65133adc63d27aef4f655dc240d1db3c5004d3d775d1d5e35201b1a56bb0a", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_47889c8828fd1992e21af7fb643b0dd6da4368e014a80d59a5136eb36ad7f5ee", $context, $blocks));
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
                    <br>
                    <div class=\"row\">
                        <div class=\"col-lg-8\">                     
                        </div>
                        <div class=\"col-lg-4 text-right\">
                            <button class=\"btn btn-action\" id=\"enviar\" type=\"submit\">Generar</button>
                        </div>
                    </div>
                    ";
        // line 95
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
        
        $__internal_ad76bbbec8891347213f6506c1b1ff38319876b9a10e73dc61f4a76b6bc20201->leave($__internal_ad76bbbec8891347213f6506c1b1ff38319876b9a10e73dc61f4a76b6bc20201_prof);

    }

    // line 40
    public function block___internal_9d109a3859370143b949929a70e14d3d21e84b4c5e19014d92664e7670f62362($context, array $blocks = array())
    {
        $__internal_7fa95d0c5a47a39a042396119c699123eb154801af8cdfcf30d40610057120d1 = $this->env->getExtension("native_profiler");
        $__internal_7fa95d0c5a47a39a042396119c699123eb154801af8cdfcf30d40610057120d1->enter($__internal_7fa95d0c5a47a39a042396119c699123eb154801af8cdfcf30d40610057120d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9d109a3859370143b949929a70e14d3d21e84b4c5e19014d92664e7670f62362"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_7fa95d0c5a47a39a042396119c699123eb154801af8cdfcf30d40610057120d1->leave($__internal_7fa95d0c5a47a39a042396119c699123eb154801af8cdfcf30d40610057120d1_prof);

    }

    // line 45
    public function block___internal_fca24934055219913c4ee1d7f6626fe642289001417d13e81bbc6f855b2af485($context, array $blocks = array())
    {
        $__internal_9da38961a06918f49b5532252826d4b2f086f59573a746637000b8ce86d302da = $this->env->getExtension("native_profiler");
        $__internal_9da38961a06918f49b5532252826d4b2f086f59573a746637000b8ce86d302da->enter($__internal_9da38961a06918f49b5532252826d4b2f086f59573a746637000b8ce86d302da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_fca24934055219913c4ee1d7f6626fe642289001417d13e81bbc6f855b2af485"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_9da38961a06918f49b5532252826d4b2f086f59573a746637000b8ce86d302da->leave($__internal_9da38961a06918f49b5532252826d4b2f086f59573a746637000b8ce86d302da_prof);

    }

    // line 50
    public function block___internal_0f0e7e020ef338c8892732f79a11fe292b53aa271d3d7506a6c9c08f07401150($context, array $blocks = array())
    {
        $__internal_3085a0287f335cda261443be57bbddba6d9c9d92d67e13e369d559880c854aa0 = $this->env->getExtension("native_profiler");
        $__internal_3085a0287f335cda261443be57bbddba6d9c9d92d67e13e369d559880c854aa0->enter($__internal_3085a0287f335cda261443be57bbddba6d9c9d92d67e13e369d559880c854aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0f0e7e020ef338c8892732f79a11fe292b53aa271d3d7506a6c9c08f07401150"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_3085a0287f335cda261443be57bbddba6d9c9d92d67e13e369d559880c854aa0->leave($__internal_3085a0287f335cda261443be57bbddba6d9c9d92d67e13e369d559880c854aa0_prof);

    }

    // line 55
    public function block___internal_1a9cb928180f3cf0d12babb46fa0d00a7d0a2d8387143fc12ea65a5651d3fced($context, array $blocks = array())
    {
        $__internal_b8d0c11b0bc375457ca27d8acd4bf0c7fdb88add215fa95d2a7e43bff974c045 = $this->env->getExtension("native_profiler");
        $__internal_b8d0c11b0bc375457ca27d8acd4bf0c7fdb88add215fa95d2a7e43bff974c045->enter($__internal_b8d0c11b0bc375457ca27d8acd4bf0c7fdb88add215fa95d2a7e43bff974c045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_1a9cb928180f3cf0d12babb46fa0d00a7d0a2d8387143fc12ea65a5651d3fced"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_b8d0c11b0bc375457ca27d8acd4bf0c7fdb88add215fa95d2a7e43bff974c045->leave($__internal_b8d0c11b0bc375457ca27d8acd4bf0c7fdb88add215fa95d2a7e43bff974c045_prof);

    }

    // line 60
    public function block___internal_d06fb9abd9c9e99a7f902cd1ef8cd98a4cdae876fc85f72426cd065e50cbc9e7($context, array $blocks = array())
    {
        $__internal_39d10eed6c6249ad53c430703a2186d7293a57499d750a7a71d01cab6990e971 = $this->env->getExtension("native_profiler");
        $__internal_39d10eed6c6249ad53c430703a2186d7293a57499d750a7a71d01cab6990e971->enter($__internal_39d10eed6c6249ad53c430703a2186d7293a57499d750a7a71d01cab6990e971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d06fb9abd9c9e99a7f902cd1ef8cd98a4cdae876fc85f72426cd065e50cbc9e7"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_39d10eed6c6249ad53c430703a2186d7293a57499d750a7a71d01cab6990e971->leave($__internal_39d10eed6c6249ad53c430703a2186d7293a57499d750a7a71d01cab6990e971_prof);

    }

    // line 65
    public function block___internal_8ea65133adc63d27aef4f655dc240d1db3c5004d3d775d1d5e35201b1a56bb0a($context, array $blocks = array())
    {
        $__internal_20342f3d13e0991fa634dead7bc6e03a2e9ec06a65d47b6c7cff0f1e75361226 = $this->env->getExtension("native_profiler");
        $__internal_20342f3d13e0991fa634dead7bc6e03a2e9ec06a65d47b6c7cff0f1e75361226->enter($__internal_20342f3d13e0991fa634dead7bc6e03a2e9ec06a65d47b6c7cff0f1e75361226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_8ea65133adc63d27aef4f655dc240d1db3c5004d3d775d1d5e35201b1a56bb0a"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_20342f3d13e0991fa634dead7bc6e03a2e9ec06a65d47b6c7cff0f1e75361226->leave($__internal_20342f3d13e0991fa634dead7bc6e03a2e9ec06a65d47b6c7cff0f1e75361226_prof);

    }

    // line 70
    public function block___internal_47889c8828fd1992e21af7fb643b0dd6da4368e014a80d59a5136eb36ad7f5ee($context, array $blocks = array())
    {
        $__internal_b810f7ff4b3fe396438e4c64a0b6e76a59dd4e16ebcc1635a773e45ae8bf10b8 = $this->env->getExtension("native_profiler");
        $__internal_b810f7ff4b3fe396438e4c64a0b6e76a59dd4e16ebcc1635a773e45ae8bf10b8->enter($__internal_b810f7ff4b3fe396438e4c64a0b6e76a59dd4e16ebcc1635a773e45ae8bf10b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_47889c8828fd1992e21af7fb643b0dd6da4368e014a80d59a5136eb36ad7f5ee"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_b810f7ff4b3fe396438e4c64a0b6e76a59dd4e16ebcc1635a773e45ae8bf10b8->leave($__internal_b810f7ff4b3fe396438e4c64a0b6e76a59dd4e16ebcc1635a773e45ae8bf10b8_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b20ae742086160326de68e01e38daee265f3caa3530771e120ffafb2b2d2dfc2 = $this->env->getExtension("native_profiler");
        $__internal_b20ae742086160326de68e01e38daee265f3caa3530771e120ffafb2b2d2dfc2->enter($__internal_b20ae742086160326de68e01e38daee265f3caa3530771e120ffafb2b2d2dfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
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
        }

        function eventoSelectLibro() {
            \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_parametroConjunto_'][id \$='libro']\").change(function () {
                var numeroForm = \$(this).attr('id').substring(58, 59);
                var \$capitulo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_'+numeroForm+'_capitulo');
                var \$area_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_'+numeroForm+'_areaConocimiento');
                var \$grupo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_'+numeroForm+'_grupoProcesos');
                var \$triangulo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_'+numeroForm+'_trianguloTalento');
                \$capitulo_selector.html('<option></option>');
                \$area_selector.html('<option></option>');
                \$grupo_selector.html('<option></option>');
                \$triangulo_selector.html('<option></option>');
                //var idLibro = \$(this).val();
                var idLibro = (\$(this).val()) ? \$(this).val() : 0;
  
                    \$.ajax({
                        url: \"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("uci_administrador_setearlibroscuestionario");
        echo "\",
                        type: \"POST\",
                        data: {idLibro: idLibro},
                        success: function (data) {
                            //alert(JSON.stringify(data));
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
        document.ready = function () {
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
        
        $__internal_b20ae742086160326de68e01e38daee265f3caa3530771e120ffafb2b2d2dfc2->leave($__internal_b20ae742086160326de68e01e38daee265f3caa3530771e120ffafb2b2d2dfc2_prof);

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
        return array (  399 => 186,  333 => 124,  327 => 123,  317 => 71,  311 => 70,  301 => 66,  295 => 65,  285 => 61,  279 => 60,  269 => 56,  263 => 55,  253 => 51,  247 => 50,  237 => 46,  231 => 45,  221 => 41,  215 => 40,  181 => 95,  156 => 72,  154 => 70,  149 => 67,  147 => 65,  142 => 62,  140 => 60,  135 => 57,  133 => 55,  128 => 52,  126 => 50,  121 => 47,  119 => 45,  114 => 42,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
