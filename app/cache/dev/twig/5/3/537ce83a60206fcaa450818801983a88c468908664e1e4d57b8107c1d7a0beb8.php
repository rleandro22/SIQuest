<?php

/* UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_537ce83a60206fcaa450818801983a88c468908664e1e4d57b8107c1d7a0beb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_bc4ba7423aece6e686c974a68eeb4b5e19889bbcb8319629a1c6c3df94067508' => array($this, 'block___internal_bc4ba7423aece6e686c974a68eeb4b5e19889bbcb8319629a1c6c3df94067508'),
            '__internal_6a1ccb12f876396005927c78acd836dc0dbee310821e90471239efea10b07f7d' => array($this, 'block___internal_6a1ccb12f876396005927c78acd836dc0dbee310821e90471239efea10b07f7d'),
            '__internal_d07a3f562eb90025155d0c1365fa236622f678b824dfc8019464f5725717f053' => array($this, 'block___internal_d07a3f562eb90025155d0c1365fa236622f678b824dfc8019464f5725717f053'),
            '__internal_ef6eab3052af899cb3765a95fa56a06324db18b4988cccf04be676784fe360a8' => array($this, 'block___internal_ef6eab3052af899cb3765a95fa56a06324db18b4988cccf04be676784fe360a8'),
            '__internal_f04a366ac561de10f6c2594715fb3d790148d1ad2a4fb76a4aeb3a11c5c5496f' => array($this, 'block___internal_f04a366ac561de10f6c2594715fb3d790148d1ad2a4fb76a4aeb3a11c5c5496f'),
            '__internal_ceae0c9e0a3fd42a9fd9dde55d729ec9603d0fb739fb8f599d4fb060db27b1ca' => array($this, 'block___internal_ceae0c9e0a3fd42a9fd9dde55d729ec9603d0fb739fb8f599d4fb060db27b1ca'),
            '__internal_8cd660ab6aee1fa2e503e8405533017bea09ff2b84a8f155cab044ba317898bc' => array($this, 'block___internal_8cd660ab6aee1fa2e503e8405533017bea09ff2b84a8f155cab044ba317898bc'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af10aca7bb0c0b436441a5d6c9442b5e4a7156e9f3fdb64ac8eeedb36467c9cf = $this->env->getExtension("native_profiler");
        $__internal_af10aca7bb0c0b436441a5d6c9442b5e4a7156e9f3fdb64ac8eeedb36467c9cf->enter($__internal_af10aca7bb0c0b436441a5d6c9442b5e4a7156e9f3fdb64ac8eeedb36467c9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af10aca7bb0c0b436441a5d6c9442b5e4a7156e9f3fdb64ac8eeedb36467c9cf->leave($__internal_af10aca7bb0c0b436441a5d6c9442b5e4a7156e9f3fdb64ac8eeedb36467c9cf_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0a643b191e3b32b262e5a2502dff703b718378593aaa378f7de506d879f910e2 = $this->env->getExtension("native_profiler");
        $__internal_0a643b191e3b32b262e5a2502dff703b718378593aaa378f7de506d879f910e2->enter($__internal_0a643b191e3b32b262e5a2502dff703b718378593aaa378f7de506d879f910e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_0a643b191e3b32b262e5a2502dff703b718378593aaa378f7de506d879f910e2->leave($__internal_0a643b191e3b32b262e5a2502dff703b718378593aaa378f7de506d879f910e2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1e45ce730c66a1d471bffbaeef4b9786598c93a90bc01fe150db4c43cfc42d4 = $this->env->getExtension("native_profiler");
        $__internal_f1e45ce730c66a1d471bffbaeef4b9786598c93a90bc01fe150db4c43cfc42d4->enter($__internal_f1e45ce730c66a1d471bffbaeef4b9786598c93a90bc01fe150db4c43cfc42d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Listado de Cuestionarios</a></li>
            <li class=\"active\">Nuevo Cuestionario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Generar cuestionarios</h1>
                </header>
                <br>
                <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\" id=\"formularioCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuestionarioname", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadPreguntas", array()), 'row');
        echo "
                        </div>
                    </div>
                    <h3>Parámetros</h3>
                    <div id=\"listaParametros\">
                        <div id=\"libros\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 47
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_bc4ba7423aece6e686c974a68eeb4b5e19889bbcb8319629a1c6c3df94067508", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6a1ccb12f876396005927c78acd836dc0dbee310821e90471239efea10b07f7d", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d07a3f562eb90025155d0c1365fa236622f678b824dfc8019464f5725717f053", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ef6eab3052af899cb3765a95fa56a06324db18b4988cccf04be676784fe360a8", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f04a366ac561de10f6c2594715fb3d790148d1ad2a4fb76a4aeb3a11c5c5496f", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ceae0c9e0a3fd42a9fd9dde55d729ec9603d0fb739fb8f599d4fb060db27b1ca", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8cd660ab6aee1fa2e503e8405533017bea09ff2b84a8f155cab044ba317898bc", $context, $blocks));
        // line 79
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
        // line 104
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
            <div class=\"col-lg-8\">                     
            </div>
            <div class=\"col-lg-1 text-right\"></div>
            <div class=\"col-lg-2 text-right\">
                <button class=\"btn btn-action hidden\" id=\"guardar\" type=\"button\">Guardar preguntas</button>
            </div>
        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_f1e45ce730c66a1d471bffbaeef4b9786598c93a90bc01fe150db4c43cfc42d4->leave($__internal_f1e45ce730c66a1d471bffbaeef4b9786598c93a90bc01fe150db4c43cfc42d4_prof);

    }

    // line 47
    public function block___internal_bc4ba7423aece6e686c974a68eeb4b5e19889bbcb8319629a1c6c3df94067508($context, array $blocks = array())
    {
        $__internal_8f7a725b9686c04d1e2c1f8dd64d592ae208c6deb931eeb3ad06303debce12ae = $this->env->getExtension("native_profiler");
        $__internal_8f7a725b9686c04d1e2c1f8dd64d592ae208c6deb931eeb3ad06303debce12ae->enter($__internal_8f7a725b9686c04d1e2c1f8dd64d592ae208c6deb931eeb3ad06303debce12ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_bc4ba7423aece6e686c974a68eeb4b5e19889bbcb8319629a1c6c3df94067508"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_8f7a725b9686c04d1e2c1f8dd64d592ae208c6deb931eeb3ad06303debce12ae->leave($__internal_8f7a725b9686c04d1e2c1f8dd64d592ae208c6deb931eeb3ad06303debce12ae_prof);

    }

    // line 52
    public function block___internal_6a1ccb12f876396005927c78acd836dc0dbee310821e90471239efea10b07f7d($context, array $blocks = array())
    {
        $__internal_27f9bc37855a83a448e00e2e340ca54d0f275adea82f143c222ff8410f584bfe = $this->env->getExtension("native_profiler");
        $__internal_27f9bc37855a83a448e00e2e340ca54d0f275adea82f143c222ff8410f584bfe->enter($__internal_27f9bc37855a83a448e00e2e340ca54d0f275adea82f143c222ff8410f584bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6a1ccb12f876396005927c78acd836dc0dbee310821e90471239efea10b07f7d"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_27f9bc37855a83a448e00e2e340ca54d0f275adea82f143c222ff8410f584bfe->leave($__internal_27f9bc37855a83a448e00e2e340ca54d0f275adea82f143c222ff8410f584bfe_prof);

    }

    // line 57
    public function block___internal_d07a3f562eb90025155d0c1365fa236622f678b824dfc8019464f5725717f053($context, array $blocks = array())
    {
        $__internal_c9f5805ff0f2168fd90b8c5fb3c7e44e178c38b6f1aa44d641cc03770cd620b0 = $this->env->getExtension("native_profiler");
        $__internal_c9f5805ff0f2168fd90b8c5fb3c7e44e178c38b6f1aa44d641cc03770cd620b0->enter($__internal_c9f5805ff0f2168fd90b8c5fb3c7e44e178c38b6f1aa44d641cc03770cd620b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d07a3f562eb90025155d0c1365fa236622f678b824dfc8019464f5725717f053"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_c9f5805ff0f2168fd90b8c5fb3c7e44e178c38b6f1aa44d641cc03770cd620b0->leave($__internal_c9f5805ff0f2168fd90b8c5fb3c7e44e178c38b6f1aa44d641cc03770cd620b0_prof);

    }

    // line 62
    public function block___internal_ef6eab3052af899cb3765a95fa56a06324db18b4988cccf04be676784fe360a8($context, array $blocks = array())
    {
        $__internal_eda251bb28ad65bcbae83ed7764c3df5ae5cfd4304cca6f8400de75142952995 = $this->env->getExtension("native_profiler");
        $__internal_eda251bb28ad65bcbae83ed7764c3df5ae5cfd4304cca6f8400de75142952995->enter($__internal_eda251bb28ad65bcbae83ed7764c3df5ae5cfd4304cca6f8400de75142952995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_ef6eab3052af899cb3765a95fa56a06324db18b4988cccf04be676784fe360a8"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_eda251bb28ad65bcbae83ed7764c3df5ae5cfd4304cca6f8400de75142952995->leave($__internal_eda251bb28ad65bcbae83ed7764c3df5ae5cfd4304cca6f8400de75142952995_prof);

    }

    // line 67
    public function block___internal_f04a366ac561de10f6c2594715fb3d790148d1ad2a4fb76a4aeb3a11c5c5496f($context, array $blocks = array())
    {
        $__internal_ad2caec9cd31ff87377cccab6c3de44eed5072d48f5a1c314765b08fea58f97a = $this->env->getExtension("native_profiler");
        $__internal_ad2caec9cd31ff87377cccab6c3de44eed5072d48f5a1c314765b08fea58f97a->enter($__internal_ad2caec9cd31ff87377cccab6c3de44eed5072d48f5a1c314765b08fea58f97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f04a366ac561de10f6c2594715fb3d790148d1ad2a4fb76a4aeb3a11c5c5496f"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_ad2caec9cd31ff87377cccab6c3de44eed5072d48f5a1c314765b08fea58f97a->leave($__internal_ad2caec9cd31ff87377cccab6c3de44eed5072d48f5a1c314765b08fea58f97a_prof);

    }

    // line 72
    public function block___internal_ceae0c9e0a3fd42a9fd9dde55d729ec9603d0fb739fb8f599d4fb060db27b1ca($context, array $blocks = array())
    {
        $__internal_55b34c03e01673dd9d208f96b3e1ee185ba7329e3ae1a9d7717fb967640a4b70 = $this->env->getExtension("native_profiler");
        $__internal_55b34c03e01673dd9d208f96b3e1ee185ba7329e3ae1a9d7717fb967640a4b70->enter($__internal_55b34c03e01673dd9d208f96b3e1ee185ba7329e3ae1a9d7717fb967640a4b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_ceae0c9e0a3fd42a9fd9dde55d729ec9603d0fb739fb8f599d4fb060db27b1ca"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_55b34c03e01673dd9d208f96b3e1ee185ba7329e3ae1a9d7717fb967640a4b70->leave($__internal_55b34c03e01673dd9d208f96b3e1ee185ba7329e3ae1a9d7717fb967640a4b70_prof);

    }

    // line 77
    public function block___internal_8cd660ab6aee1fa2e503e8405533017bea09ff2b84a8f155cab044ba317898bc($context, array $blocks = array())
    {
        $__internal_b55542a193fbbcb5d1b14dbdadf19b23a0b00724dd7aa1cfd4149b56260bdcad = $this->env->getExtension("native_profiler");
        $__internal_b55542a193fbbcb5d1b14dbdadf19b23a0b00724dd7aa1cfd4149b56260bdcad->enter($__internal_b55542a193fbbcb5d1b14dbdadf19b23a0b00724dd7aa1cfd4149b56260bdcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_8cd660ab6aee1fa2e503e8405533017bea09ff2b84a8f155cab044ba317898bc"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_b55542a193fbbcb5d1b14dbdadf19b23a0b00724dd7aa1cfd4149b56260bdcad->leave($__internal_b55542a193fbbcb5d1b14dbdadf19b23a0b00724dd7aa1cfd4149b56260bdcad_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b8613ca4e1fe5163b1699434e2111c77d9029d7824a3a4da0272a39708a6843 = $this->env->getExtension("native_profiler");
        $__internal_2b8613ca4e1fe5163b1699434e2111c77d9029d7824a3a4da0272a39708a6843->enter($__internal_2b8613ca4e1fe5163b1699434e2111c77d9029d7824a3a4da0272a39708a6843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
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
        // line 203
        echo $this->env->getExtension('routing')->getPath("uci_administrador_setearlibroscuestionario");
        echo "\",
                    type: \"POST\",
                    data: {idLibro: idLibro},
                    success: function (data) {
                        \$capitulo_selector.html('<option value=\"0\">Capitulos</option>');
                        if (data.capitulos.id != \"0\") {
                            for (var i = 0, total = data.capitulos.length; i < total; i++) {
                                \$capitulo_selector.append('<option value=\"' + data.capitulos[i].id + '\">' + data.capitulos[i].numeroCapitulo+ '-' + data.capitulos[i].nombreCapitulo + '</option>');
                            }
                        }
                        \$area_selector.html('<option value=\"0\">A. Conocimiento</option>');
                        if (data.areas.id != \"0\") {
                            for (var i = 0, total = data.areas.length; i < total; i++) {
                                \$area_selector.append('<option value=\"' + data.areas[i].id + '\">' + data.areas[i].nombreArea + '</option>');
                            }
                        }
                        \$grupo_selector.html('<option value=\"0\">G. Procesos</option>');
                        if (data.grupos.id != \"0\") {
                            for (var i = 0, total = data.grupos.length; i < total; i++) {
                                \$grupo_selector.append('<option value=\"' + data.grupos[i].id + '\">' + data.grupos[i].nombreGrupo + '</option>');
                            }
                        }
                        \$triangulo_selector.html('<option value=\"0\">T. Talento</option>');
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
                    var sum = 0;
                    \$(\"input[id\$='cantidad']\").each(function () {
                        sum += parseFloat(\$(this).val());  //Or this.innerHTML, this.innerText
                        //SUM NO DEBE SER MAYOR A CANTIDAD, PONER UN AVISO
                    });
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
            var url = '";
        // line 303
        echo $this->env->getExtension('routing')->getPath("uci_administrador_editarPregunta", array("idPregunta" => "idPreg"));
        echo "';
            url = url.replace(\"idPreg\", id);
            window.open(url, '_blank', \"width=500%, height=500%\", 'toolbar=0,location=0,menubar=0');
            llenarTablaPreguntas();
        }

        function borrarPregunta(obj, e) {
            e.preventDefault();
            var sure = confirm(\"¿Esta seguro que desea realizar el borrado?\\n (Esta operación no es reversible)\");
            if (sure) {
                \$(obj).parent().parent().remove();
                if (\$('#tablaPreguntas tr').length > 0) {
                    \$('#guardar').removeClass('hidden');
                } else {
                    \$('#guardar').addClass('hidden');
                }
            }
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
                            trHTML += '<tr><td class=\"celdaId\">' + data.preguntas[i].id + '</td><td>' + data.preguntas[i].titulo + '</td><td>&nbsp;&nbsp;&nbsp;<a onclick=\"editarPregunta(' + data.preguntas[i].id + ')\"><span class=\"glyphicon glyphicon-pencil\"></span></a>&nbsp;&nbsp;&nbsp;<a href=\"\" onclick=\"borrarPregunta(this, event);\"><span class=\"glyphicon glyphicon-remove\"></span></a></td></tr>';
                        }
                        \$(\"#tablaPreguntas tr\").remove();
                        \$('#tablaPreguntas').append(trHTML);
                        if (\$('#tablaPreguntas tr').length > 0) {
                            \$('#guardar').removeClass('hidden');
                        } else {
                            \$('#guardar').addClass('hidden');
                        }
                    }
                },
                error: function () {
                    \$('#guardar').removeClass('hidden');
                    alert(\"Ocurrio un error.\");
                }
            });
        }

        document.ready = function () {

            \$('#enviar').click(function (e) {
                if (\$(\"input[id\$='porcentaje']\").length) {
                    if (\$(\"input[id\$='porcentaje']\").val() && \$(\"input[id\$='cantidad']\").val() && \$(\"input[id\$='cantidad']\").val() > 0) {
                        llenarTablaPreguntas();
                    } else {
                        alert('Ingrese al menos 1 parametro para generar las preguntas.');
                    }
                } else {
                    if (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() && \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() > 0) {
                        llenarTablaPreguntas();
                    } else {
                        alert('Cantidad de preguntas no aceptada.');
                    }
                }
            });
            \$('#guardar').click(function (e) {
                var nombreCuestionario = \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').val();
                var curso = \$('#uci_bundle_basedatosbundle_cuestionario_curso').val();
                var tbl = \$('#tablaPreguntas tr').map(function () {
                    return \$(this).find('.celdaId').map(function () {
                        return \$(this).text();
                    }).get();
                }).get();
                \$(\"#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas\").val(tbl.length);
                if (\$(\"#uci_bundle_basedatosbundle_cuestionario_cuestionarioname\").val() && \$(\"#uci_bundle_basedatosbundle_cuestionario_curso\").val()) {
                    \$.ajax({
                        url: \"";
        // line 378
        echo $this->env->getExtension('routing')->getPath("uci_administrador_guardarcuestionario");
        echo "\",
                        type: \"POST\",
                        data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                        success: function (data) {
                            if (data.resultado == 1) {
                                window.location.href = \"";
        // line 383
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\";
                            } else {
                                alert('Ocurrio un error');
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('Ocurrio un error');
                        }
                    });
                } else {
                    alert('Rellene todos los campos del formulario');
                }
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
        
        $__internal_2b8613ca4e1fe5163b1699434e2111c77d9029d7824a3a4da0272a39708a6843->leave($__internal_2b8613ca4e1fe5163b1699434e2111c77d9029d7824a3a4da0272a39708a6843_prof);

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
        return array (  611 => 383,  603 => 378,  525 => 303,  422 => 203,  355 => 140,  349 => 139,  339 => 78,  333 => 77,  323 => 73,  317 => 72,  307 => 68,  301 => 67,  291 => 63,  285 => 62,  275 => 58,  269 => 57,  259 => 53,  253 => 52,  243 => 48,  237 => 47,  196 => 104,  169 => 79,  167 => 77,  162 => 74,  160 => 72,  155 => 69,  153 => 67,  148 => 64,  146 => 62,  141 => 59,  139 => 57,  134 => 54,  132 => 52,  127 => 49,  125 => 47,  116 => 41,  108 => 36,  100 => 31,  94 => 28,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
