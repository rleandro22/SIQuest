<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_ae2cb3d5fd5cdfe95fbd7c56a53893d14a026f2154544dbe616a0e5736f3d7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAsistenteAcademicaBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_ef46e694e9787eba6695487d7369515a756e54979874bad5a1d9e462d6b4bd61' => array($this, 'block___internal_ef46e694e9787eba6695487d7369515a756e54979874bad5a1d9e462d6b4bd61'),
            '__internal_e8b32d2d10690cb30c2d2289034976c80bd7013f324513367d57d319877f7055' => array($this, 'block___internal_e8b32d2d10690cb30c2d2289034976c80bd7013f324513367d57d319877f7055'),
            '__internal_09fce1b7e428efcd653c0fe6d0d7608e03f6cdf17e7a35948a0e7dd435d84188' => array($this, 'block___internal_09fce1b7e428efcd653c0fe6d0d7608e03f6cdf17e7a35948a0e7dd435d84188'),
            '__internal_cefc0abfb3e6de583433a5ec624ce4bd9ca3a3bfe32de847645ed818eba092ef' => array($this, 'block___internal_cefc0abfb3e6de583433a5ec624ce4bd9ca3a3bfe32de847645ed818eba092ef'),
            '__internal_0f32ec568845e9b0f12f33ccd383efd0d1c7db4ea0cf4629d13084cf29f4b4a6' => array($this, 'block___internal_0f32ec568845e9b0f12f33ccd383efd0d1c7db4ea0cf4629d13084cf29f4b4a6'),
            '__internal_e62ed3c3a89102dc91367faca1da6e3241f8890c546a2c3c47ed2a43b8c32cec' => array($this, 'block___internal_e62ed3c3a89102dc91367faca1da6e3241f8890c546a2c3c47ed2a43b8c32cec'),
            '__internal_8aa0be74f218fc5e7a4b807b9e18dd7fb30247ec10a2f7775359c4cd75fb6ca0' => array($this, 'block___internal_8aa0be74f218fc5e7a4b807b9e18dd7fb30247ec10a2f7775359c4cd75fb6ca0'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61027f6eead9fb8cb8ebb69e7cb24e2095707af59bc6566f057bd8ffc8241d1a = $this->env->getExtension("native_profiler");
        $__internal_61027f6eead9fb8cb8ebb69e7cb24e2095707af59bc6566f057bd8ffc8241d1a->enter($__internal_61027f6eead9fb8cb8ebb69e7cb24e2095707af59bc6566f057bd8ffc8241d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61027f6eead9fb8cb8ebb69e7cb24e2095707af59bc6566f057bd8ffc8241d1a->leave($__internal_61027f6eead9fb8cb8ebb69e7cb24e2095707af59bc6566f057bd8ffc8241d1a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3ef10e0325ca1c5b7aaf571570dfe0edb4f1983d594093f12e99c4384a195ff8 = $this->env->getExtension("native_profiler");
        $__internal_3ef10e0325ca1c5b7aaf571570dfe0edb4f1983d594093f12e99c4384a195ff8->enter($__internal_3ef10e0325ca1c5b7aaf571570dfe0edb4f1983d594093f12e99c4384a195ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_3ef10e0325ca1c5b7aaf571570dfe0edb4f1983d594093f12e99c4384a195ff8->leave($__internal_3ef10e0325ca1c5b7aaf571570dfe0edb4f1983d594093f12e99c4384a195ff8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e381faa96c55fcd45fd627194c9c5d7980cd9d8fb92abea829a7697340e2899a = $this->env->getExtension("native_profiler");
        $__internal_e381faa96c55fcd45fd627194c9c5d7980cd9d8fb92abea829a7697340e2899a->enter($__internal_e381faa96c55fcd45fd627194c9c5d7980cd9d8fb92abea829a7697340e2899a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "\">Listado de Cuestionarios</a></li>
            <li class=\"active\">Nuevo Cuestionario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAsistenteAcademicaBundle:Menus:mantenimientoCuestionario.html.twig", "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig", 19)->display($context);
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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_registrarcuestionario");
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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ef46e694e9787eba6695487d7369515a756e54979874bad5a1d9e462d6b4bd61", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_e8b32d2d10690cb30c2d2289034976c80bd7013f324513367d57d319877f7055", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_09fce1b7e428efcd653c0fe6d0d7608e03f6cdf17e7a35948a0e7dd435d84188", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_cefc0abfb3e6de583433a5ec624ce4bd9ca3a3bfe32de847645ed818eba092ef", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0f32ec568845e9b0f12f33ccd383efd0d1c7db4ea0cf4629d13084cf29f4b4a6", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_e62ed3c3a89102dc91367faca1da6e3241f8890c546a2c3c47ed2a43b8c32cec", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8aa0be74f218fc5e7a4b807b9e18dd7fb30247ec10a2f7775359c4cd75fb6ca0", $context, $blocks));
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
        
        $__internal_e381faa96c55fcd45fd627194c9c5d7980cd9d8fb92abea829a7697340e2899a->leave($__internal_e381faa96c55fcd45fd627194c9c5d7980cd9d8fb92abea829a7697340e2899a_prof);

    }

    // line 47
    public function block___internal_ef46e694e9787eba6695487d7369515a756e54979874bad5a1d9e462d6b4bd61($context, array $blocks = array())
    {
        $__internal_6446cde571a814c15f50fca87cd67391aea25339d5c8418dc47512225fed70e2 = $this->env->getExtension("native_profiler");
        $__internal_6446cde571a814c15f50fca87cd67391aea25339d5c8418dc47512225fed70e2->enter($__internal_6446cde571a814c15f50fca87cd67391aea25339d5c8418dc47512225fed70e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_ef46e694e9787eba6695487d7369515a756e54979874bad5a1d9e462d6b4bd61"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_6446cde571a814c15f50fca87cd67391aea25339d5c8418dc47512225fed70e2->leave($__internal_6446cde571a814c15f50fca87cd67391aea25339d5c8418dc47512225fed70e2_prof);

    }

    // line 52
    public function block___internal_e8b32d2d10690cb30c2d2289034976c80bd7013f324513367d57d319877f7055($context, array $blocks = array())
    {
        $__internal_0787870fddcd11a47a593f9d9dac988f32b3b9ab1731598a34629d50c40ce112 = $this->env->getExtension("native_profiler");
        $__internal_0787870fddcd11a47a593f9d9dac988f32b3b9ab1731598a34629d50c40ce112->enter($__internal_0787870fddcd11a47a593f9d9dac988f32b3b9ab1731598a34629d50c40ce112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_e8b32d2d10690cb30c2d2289034976c80bd7013f324513367d57d319877f7055"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0787870fddcd11a47a593f9d9dac988f32b3b9ab1731598a34629d50c40ce112->leave($__internal_0787870fddcd11a47a593f9d9dac988f32b3b9ab1731598a34629d50c40ce112_prof);

    }

    // line 57
    public function block___internal_09fce1b7e428efcd653c0fe6d0d7608e03f6cdf17e7a35948a0e7dd435d84188($context, array $blocks = array())
    {
        $__internal_0dfac7c077daab24e3176e8a233c937a6df16663a3f6deeb9b07a415e548bea1 = $this->env->getExtension("native_profiler");
        $__internal_0dfac7c077daab24e3176e8a233c937a6df16663a3f6deeb9b07a415e548bea1->enter($__internal_0dfac7c077daab24e3176e8a233c937a6df16663a3f6deeb9b07a415e548bea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_09fce1b7e428efcd653c0fe6d0d7608e03f6cdf17e7a35948a0e7dd435d84188"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0dfac7c077daab24e3176e8a233c937a6df16663a3f6deeb9b07a415e548bea1->leave($__internal_0dfac7c077daab24e3176e8a233c937a6df16663a3f6deeb9b07a415e548bea1_prof);

    }

    // line 62
    public function block___internal_cefc0abfb3e6de583433a5ec624ce4bd9ca3a3bfe32de847645ed818eba092ef($context, array $blocks = array())
    {
        $__internal_b55065920d296b97453162d43aef7cc16c5c6f198c5d4a79b547c08b7be472e2 = $this->env->getExtension("native_profiler");
        $__internal_b55065920d296b97453162d43aef7cc16c5c6f198c5d4a79b547c08b7be472e2->enter($__internal_b55065920d296b97453162d43aef7cc16c5c6f198c5d4a79b547c08b7be472e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_cefc0abfb3e6de583433a5ec624ce4bd9ca3a3bfe32de847645ed818eba092ef"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_b55065920d296b97453162d43aef7cc16c5c6f198c5d4a79b547c08b7be472e2->leave($__internal_b55065920d296b97453162d43aef7cc16c5c6f198c5d4a79b547c08b7be472e2_prof);

    }

    // line 67
    public function block___internal_0f32ec568845e9b0f12f33ccd383efd0d1c7db4ea0cf4629d13084cf29f4b4a6($context, array $blocks = array())
    {
        $__internal_fb3fb7371ed536153c9a615ba1f228cef9e9c6cb0f7b7435918125c03e9bf221 = $this->env->getExtension("native_profiler");
        $__internal_fb3fb7371ed536153c9a615ba1f228cef9e9c6cb0f7b7435918125c03e9bf221->enter($__internal_fb3fb7371ed536153c9a615ba1f228cef9e9c6cb0f7b7435918125c03e9bf221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0f32ec568845e9b0f12f33ccd383efd0d1c7db4ea0cf4629d13084cf29f4b4a6"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_fb3fb7371ed536153c9a615ba1f228cef9e9c6cb0f7b7435918125c03e9bf221->leave($__internal_fb3fb7371ed536153c9a615ba1f228cef9e9c6cb0f7b7435918125c03e9bf221_prof);

    }

    // line 72
    public function block___internal_e62ed3c3a89102dc91367faca1da6e3241f8890c546a2c3c47ed2a43b8c32cec($context, array $blocks = array())
    {
        $__internal_bdc67dd55cc8f24a94d9e2350e9f98f07c322c4937f47b582802e3b724ac72d6 = $this->env->getExtension("native_profiler");
        $__internal_bdc67dd55cc8f24a94d9e2350e9f98f07c322c4937f47b582802e3b724ac72d6->enter($__internal_bdc67dd55cc8f24a94d9e2350e9f98f07c322c4937f47b582802e3b724ac72d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_e62ed3c3a89102dc91367faca1da6e3241f8890c546a2c3c47ed2a43b8c32cec"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_bdc67dd55cc8f24a94d9e2350e9f98f07c322c4937f47b582802e3b724ac72d6->leave($__internal_bdc67dd55cc8f24a94d9e2350e9f98f07c322c4937f47b582802e3b724ac72d6_prof);

    }

    // line 77
    public function block___internal_8aa0be74f218fc5e7a4b807b9e18dd7fb30247ec10a2f7775359c4cd75fb6ca0($context, array $blocks = array())
    {
        $__internal_173833cf61d1b4dc3f201037ff99f6c481c4ea012dda92aeb1fdd1a922ef262a = $this->env->getExtension("native_profiler");
        $__internal_173833cf61d1b4dc3f201037ff99f6c481c4ea012dda92aeb1fdd1a922ef262a->enter($__internal_173833cf61d1b4dc3f201037ff99f6c481c4ea012dda92aeb1fdd1a922ef262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_8aa0be74f218fc5e7a4b807b9e18dd7fb30247ec10a2f7775359c4cd75fb6ca0"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_173833cf61d1b4dc3f201037ff99f6c481c4ea012dda92aeb1fdd1a922ef262a->leave($__internal_173833cf61d1b4dc3f201037ff99f6c481c4ea012dda92aeb1fdd1a922ef262a_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5ad42b7d808d074694063d546c13743c57d31d20f14cf67666704f8c13b5a1b = $this->env->getExtension("native_profiler");
        $__internal_b5ad42b7d808d074694063d546c13743c57d31d20f14cf67666704f8c13b5a1b->enter($__internal_b5ad42b7d808d074694063d546c13743c57d31d20f14cf67666704f8c13b5a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_setearlibroscuestionario");
        echo "\",
                    type: \"POST\",
                    data: {idLibro: idLibro},
                    success: function (data) {
                        \$capitulo_selector.html('<option value=\"0\">Capitulos</option>');
                        if (data.capitulos.id != \"0\") {
                            for (var i = 0, total = data.capitulos.length; i < total; i++) {
                                \$capitulo_selector.append('<option value=\"' + data.capitulos[i].id + '\">' + data.capitulos[i].numeroCapitulo + '-' + data.capitulos[i].nombreCapitulo + '</option>');
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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_verPreguntaPop", array("idPregunta" => "idPreg"));
        echo "';
            url = url.replace(\"idPreg\", id);
            url = url.replace(\"idCuest\", '0');
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
                if (tbl.length > 0) {
                    if (\$(\"#uci_bundle_basedatosbundle_cuestionario_cuestionarioname\").val() && \$(\"#uci_bundle_basedatosbundle_cuestionario_curso\").val()) {
                        \$.ajax({
                            url: \"";
        // line 380
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_guardarcuestionario");
        echo "\",
                            type: \"POST\",
                            data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                            success: function (data) {
                                if (data.resultado == 1) {
                                    window.location.href = \"";
        // line 385
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
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
                } else {
                    alert('No se puede guardar un cuestionario vacío');
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
        
        $__internal_b5ad42b7d808d074694063d546c13743c57d31d20f14cf67666704f8c13b5a1b->leave($__internal_b5ad42b7d808d074694063d546c13743c57d31d20f14cf67666704f8c13b5a1b_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 385,  605 => 380,  525 => 303,  422 => 203,  355 => 140,  349 => 139,  339 => 78,  333 => 77,  323 => 73,  317 => 72,  307 => 68,  301 => 67,  291 => 63,  285 => 62,  275 => 58,  269 => 57,  259 => 53,  253 => 52,  243 => 48,  237 => 47,  196 => 104,  169 => 79,  167 => 77,  162 => 74,  160 => 72,  155 => 69,  153 => 67,  148 => 64,  146 => 62,  141 => 59,  139 => 57,  134 => 54,  132 => 52,  127 => 49,  125 => 47,  116 => 41,  108 => 36,  100 => 31,  94 => 28,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
