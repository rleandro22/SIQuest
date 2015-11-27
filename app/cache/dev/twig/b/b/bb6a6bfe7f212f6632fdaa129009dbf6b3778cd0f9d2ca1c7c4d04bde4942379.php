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
            '__internal_fa71a3529a25fb2deb989e7dbc271e2bfe5a71355d369e29d7b2362f8a159e28' => array($this, 'block___internal_fa71a3529a25fb2deb989e7dbc271e2bfe5a71355d369e29d7b2362f8a159e28'),
            '__internal_ed54024540332d7e896f1212ca19244e49995de0d77540e8cec39d2736baea38' => array($this, 'block___internal_ed54024540332d7e896f1212ca19244e49995de0d77540e8cec39d2736baea38'),
            '__internal_e8ca3f4244a3e47da3c27d82c6a2e3dfe427ca7c3ae616eebca8410f9c4470f6' => array($this, 'block___internal_e8ca3f4244a3e47da3c27d82c6a2e3dfe427ca7c3ae616eebca8410f9c4470f6'),
            '__internal_574574f4249c9d2559c895be8a587a55f137c0e8a00dc9cd6eb7056d5a9aa541' => array($this, 'block___internal_574574f4249c9d2559c895be8a587a55f137c0e8a00dc9cd6eb7056d5a9aa541'),
            '__internal_c7deb91f9911a1c3ac637750be4f8dfd133a65b9b86b00a5b6c4c7f2e8539184' => array($this, 'block___internal_c7deb91f9911a1c3ac637750be4f8dfd133a65b9b86b00a5b6c4c7f2e8539184'),
            '__internal_70e62c494140ab42bc167cd258a661c91346bc2f166101325d90b70aba2dcbc8' => array($this, 'block___internal_70e62c494140ab42bc167cd258a661c91346bc2f166101325d90b70aba2dcbc8'),
            '__internal_a6c0a0c8f98ede5985f697a3aec574854a034c8f2c04ca54bc88957bca6ef3ad' => array($this, 'block___internal_a6c0a0c8f98ede5985f697a3aec574854a034c8f2c04ca54bc88957bca6ef3ad'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddaade49135d78d2bb3aaea812376414bbdd377ef6d65c919cf40cfb577ff73e = $this->env->getExtension("native_profiler");
        $__internal_ddaade49135d78d2bb3aaea812376414bbdd377ef6d65c919cf40cfb577ff73e->enter($__internal_ddaade49135d78d2bb3aaea812376414bbdd377ef6d65c919cf40cfb577ff73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddaade49135d78d2bb3aaea812376414bbdd377ef6d65c919cf40cfb577ff73e->leave($__internal_ddaade49135d78d2bb3aaea812376414bbdd377ef6d65c919cf40cfb577ff73e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_1b769a5a5effcb2660f3387d05df363ff0e80c1ba59442db2b028400f01cc078 = $this->env->getExtension("native_profiler");
        $__internal_1b769a5a5effcb2660f3387d05df363ff0e80c1ba59442db2b028400f01cc078->enter($__internal_1b769a5a5effcb2660f3387d05df363ff0e80c1ba59442db2b028400f01cc078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_1b769a5a5effcb2660f3387d05df363ff0e80c1ba59442db2b028400f01cc078->leave($__internal_1b769a5a5effcb2660f3387d05df363ff0e80c1ba59442db2b028400f01cc078_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fad9b0acb6ba6c474225fa1685116aa5edb1f2a676af942f7543fe05f633d234 = $this->env->getExtension("native_profiler");
        $__internal_fad9b0acb6ba6c474225fa1685116aa5edb1f2a676af942f7543fe05f633d234->enter($__internal_fad9b0acb6ba6c474225fa1685116aa5edb1f2a676af942f7543fe05f633d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_fa71a3529a25fb2deb989e7dbc271e2bfe5a71355d369e29d7b2362f8a159e28", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ed54024540332d7e896f1212ca19244e49995de0d77540e8cec39d2736baea38", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_e8ca3f4244a3e47da3c27d82c6a2e3dfe427ca7c3ae616eebca8410f9c4470f6", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_574574f4249c9d2559c895be8a587a55f137c0e8a00dc9cd6eb7056d5a9aa541", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c7deb91f9911a1c3ac637750be4f8dfd133a65b9b86b00a5b6c4c7f2e8539184", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_70e62c494140ab42bc167cd258a661c91346bc2f166101325d90b70aba2dcbc8", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a6c0a0c8f98ede5985f697a3aec574854a034c8f2c04ca54bc88957bca6ef3ad", $context, $blocks));
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
        
        $__internal_fad9b0acb6ba6c474225fa1685116aa5edb1f2a676af942f7543fe05f633d234->leave($__internal_fad9b0acb6ba6c474225fa1685116aa5edb1f2a676af942f7543fe05f633d234_prof);

    }

    // line 47
    public function block___internal_fa71a3529a25fb2deb989e7dbc271e2bfe5a71355d369e29d7b2362f8a159e28($context, array $blocks = array())
    {
        $__internal_ce0c6b03bc95dacfc66027bc49cc39f25c7c5bc71c0a15e3641a7a4d482c61a4 = $this->env->getExtension("native_profiler");
        $__internal_ce0c6b03bc95dacfc66027bc49cc39f25c7c5bc71c0a15e3641a7a4d482c61a4->enter($__internal_ce0c6b03bc95dacfc66027bc49cc39f25c7c5bc71c0a15e3641a7a4d482c61a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_fa71a3529a25fb2deb989e7dbc271e2bfe5a71355d369e29d7b2362f8a159e28"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_ce0c6b03bc95dacfc66027bc49cc39f25c7c5bc71c0a15e3641a7a4d482c61a4->leave($__internal_ce0c6b03bc95dacfc66027bc49cc39f25c7c5bc71c0a15e3641a7a4d482c61a4_prof);

    }

    // line 52
    public function block___internal_ed54024540332d7e896f1212ca19244e49995de0d77540e8cec39d2736baea38($context, array $blocks = array())
    {
        $__internal_26440da6ea8c335ec06cf6fd65b0de6914c70d3ac8ddf61997a58ae360a68b3e = $this->env->getExtension("native_profiler");
        $__internal_26440da6ea8c335ec06cf6fd65b0de6914c70d3ac8ddf61997a58ae360a68b3e->enter($__internal_26440da6ea8c335ec06cf6fd65b0de6914c70d3ac8ddf61997a58ae360a68b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_ed54024540332d7e896f1212ca19244e49995de0d77540e8cec39d2736baea38"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_26440da6ea8c335ec06cf6fd65b0de6914c70d3ac8ddf61997a58ae360a68b3e->leave($__internal_26440da6ea8c335ec06cf6fd65b0de6914c70d3ac8ddf61997a58ae360a68b3e_prof);

    }

    // line 57
    public function block___internal_e8ca3f4244a3e47da3c27d82c6a2e3dfe427ca7c3ae616eebca8410f9c4470f6($context, array $blocks = array())
    {
        $__internal_97c76540a78b796af23a593aaedcfb9a59afae890e5a0ade793cde3abba79dff = $this->env->getExtension("native_profiler");
        $__internal_97c76540a78b796af23a593aaedcfb9a59afae890e5a0ade793cde3abba79dff->enter($__internal_97c76540a78b796af23a593aaedcfb9a59afae890e5a0ade793cde3abba79dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_e8ca3f4244a3e47da3c27d82c6a2e3dfe427ca7c3ae616eebca8410f9c4470f6"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_97c76540a78b796af23a593aaedcfb9a59afae890e5a0ade793cde3abba79dff->leave($__internal_97c76540a78b796af23a593aaedcfb9a59afae890e5a0ade793cde3abba79dff_prof);

    }

    // line 62
    public function block___internal_574574f4249c9d2559c895be8a587a55f137c0e8a00dc9cd6eb7056d5a9aa541($context, array $blocks = array())
    {
        $__internal_cb4e123385d62af135f58102ae76d9bd884b838938782b3c4e0dcd4b0c6ed12f = $this->env->getExtension("native_profiler");
        $__internal_cb4e123385d62af135f58102ae76d9bd884b838938782b3c4e0dcd4b0c6ed12f->enter($__internal_cb4e123385d62af135f58102ae76d9bd884b838938782b3c4e0dcd4b0c6ed12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_574574f4249c9d2559c895be8a587a55f137c0e8a00dc9cd6eb7056d5a9aa541"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_cb4e123385d62af135f58102ae76d9bd884b838938782b3c4e0dcd4b0c6ed12f->leave($__internal_cb4e123385d62af135f58102ae76d9bd884b838938782b3c4e0dcd4b0c6ed12f_prof);

    }

    // line 67
    public function block___internal_c7deb91f9911a1c3ac637750be4f8dfd133a65b9b86b00a5b6c4c7f2e8539184($context, array $blocks = array())
    {
        $__internal_a6b87fa3072a70c8be7a580fb95f0de7e8ecb8d9579643fd06be8ea3c8cbf361 = $this->env->getExtension("native_profiler");
        $__internal_a6b87fa3072a70c8be7a580fb95f0de7e8ecb8d9579643fd06be8ea3c8cbf361->enter($__internal_a6b87fa3072a70c8be7a580fb95f0de7e8ecb8d9579643fd06be8ea3c8cbf361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c7deb91f9911a1c3ac637750be4f8dfd133a65b9b86b00a5b6c4c7f2e8539184"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_a6b87fa3072a70c8be7a580fb95f0de7e8ecb8d9579643fd06be8ea3c8cbf361->leave($__internal_a6b87fa3072a70c8be7a580fb95f0de7e8ecb8d9579643fd06be8ea3c8cbf361_prof);

    }

    // line 72
    public function block___internal_70e62c494140ab42bc167cd258a661c91346bc2f166101325d90b70aba2dcbc8($context, array $blocks = array())
    {
        $__internal_ddd9c45afacbc721b4328b77dfed31c979934ac4951ab4c8b2fd07e883aa6f8f = $this->env->getExtension("native_profiler");
        $__internal_ddd9c45afacbc721b4328b77dfed31c979934ac4951ab4c8b2fd07e883aa6f8f->enter($__internal_ddd9c45afacbc721b4328b77dfed31c979934ac4951ab4c8b2fd07e883aa6f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_70e62c494140ab42bc167cd258a661c91346bc2f166101325d90b70aba2dcbc8"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_ddd9c45afacbc721b4328b77dfed31c979934ac4951ab4c8b2fd07e883aa6f8f->leave($__internal_ddd9c45afacbc721b4328b77dfed31c979934ac4951ab4c8b2fd07e883aa6f8f_prof);

    }

    // line 77
    public function block___internal_a6c0a0c8f98ede5985f697a3aec574854a034c8f2c04ca54bc88957bca6ef3ad($context, array $blocks = array())
    {
        $__internal_0b198f28005723216dc89e65e51bac0f9294bace80b5051372a174fe875cc1d6 = $this->env->getExtension("native_profiler");
        $__internal_0b198f28005723216dc89e65e51bac0f9294bace80b5051372a174fe875cc1d6->enter($__internal_0b198f28005723216dc89e65e51bac0f9294bace80b5051372a174fe875cc1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a6c0a0c8f98ede5985f697a3aec574854a034c8f2c04ca54bc88957bca6ef3ad"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0b198f28005723216dc89e65e51bac0f9294bace80b5051372a174fe875cc1d6->leave($__internal_0b198f28005723216dc89e65e51bac0f9294bace80b5051372a174fe875cc1d6_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ee6ef0f9252993d9e0cc2cb30f79784aa1fcf5bca703943b6a3be7a5938b713 = $this->env->getExtension("native_profiler");
        $__internal_9ee6ef0f9252993d9e0cc2cb30f79784aa1fcf5bca703943b6a3be7a5938b713->enter($__internal_9ee6ef0f9252993d9e0cc2cb30f79784aa1fcf5bca703943b6a3be7a5938b713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                if (\$(\"input[id\$='porcentaje']\").val() && \$(\"input[id\$='cantidad']\").val() && \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_']\").val() && \$(\"input[id\$='cantidad']\").val() > 0) {
                    llenarTablaPreguntas();
                } else {
                    alert('Ingrese al menos 1 parametro para generar las preguntas.');
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
                \$.ajax({
                    url: \"";
        // line 363
        echo $this->env->getExtension('routing')->getPath("uci_administrador_guardarcuestionario");
        echo "\",
                    type: \"POST\",
                    data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                    success: function (data) {
                        if (data.resultado == 1) {
                            window.location.href = \"";
        // line 368
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
        
        $__internal_9ee6ef0f9252993d9e0cc2cb30f79784aa1fcf5bca703943b6a3be7a5938b713->leave($__internal_9ee6ef0f9252993d9e0cc2cb30f79784aa1fcf5bca703943b6a3be7a5938b713_prof);

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
        return array (  593 => 368,  585 => 363,  422 => 203,  355 => 140,  349 => 139,  339 => 78,  333 => 77,  323 => 73,  317 => 72,  307 => 68,  301 => 67,  291 => 63,  285 => 62,  275 => 58,  269 => 57,  259 => 53,  253 => 52,  243 => 48,  237 => 47,  196 => 104,  169 => 79,  167 => 77,  162 => 74,  160 => 72,  155 => 69,  153 => 67,  148 => 64,  146 => 62,  141 => 59,  139 => 57,  134 => 54,  132 => 52,  127 => 49,  125 => 47,  116 => 41,  108 => 36,  100 => 31,  94 => 28,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
