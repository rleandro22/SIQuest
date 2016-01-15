<?php

/* UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_fc629861309a1a7939708249db5443897a8f1a8415b21d5e17b932aba062ddef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_a1eab52b031ff331e1a24e36a591d81a9a97ace027e4a68030991ff1f53d5351' => array($this, 'block___internal_a1eab52b031ff331e1a24e36a591d81a9a97ace027e4a68030991ff1f53d5351'),
            '__internal_41021be0775dc2b704320de0e4593ee341311b653fecf4f03bae506a691f6920' => array($this, 'block___internal_41021be0775dc2b704320de0e4593ee341311b653fecf4f03bae506a691f6920'),
            '__internal_6aba78d43312eecc5b38e1f6847e43d7d8977cf837b85ad77a7cf105775d2bea' => array($this, 'block___internal_6aba78d43312eecc5b38e1f6847e43d7d8977cf837b85ad77a7cf105775d2bea'),
            '__internal_97d8a95fd2a262d6e5a4d820093c9a3a528e272c27cf25ce42c22608d1e485f5' => array($this, 'block___internal_97d8a95fd2a262d6e5a4d820093c9a3a528e272c27cf25ce42c22608d1e485f5'),
            '__internal_f52effd913a7690aac7f93b69e6d133108d73ccbc3ef6aa83149ae148307c75c' => array($this, 'block___internal_f52effd913a7690aac7f93b69e6d133108d73ccbc3ef6aa83149ae148307c75c'),
            '__internal_a413d1938e715c397291836899fda03de8ccdfe9e3c9375b4d747025c73cc334' => array($this, 'block___internal_a413d1938e715c397291836899fda03de8ccdfe9e3c9375b4d747025c73cc334'),
            '__internal_78c0d2f0e112e88c1c2e4b25d6c1e46ffa6c2471ff71266408a445dc680808a5' => array($this, 'block___internal_78c0d2f0e112e88c1c2e4b25d6c1e46ffa6c2471ff71266408a445dc680808a5'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_860e2d07ebab4845c7727f80cbf3b421f89f79f9f2ea02f0d6ea0d5d6c80fae4 = $this->env->getExtension("native_profiler");
        $__internal_860e2d07ebab4845c7727f80cbf3b421f89f79f9f2ea02f0d6ea0d5d6c80fae4->enter($__internal_860e2d07ebab4845c7727f80cbf3b421f89f79f9f2ea02f0d6ea0d5d6c80fae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_860e2d07ebab4845c7727f80cbf3b421f89f79f9f2ea02f0d6ea0d5d6c80fae4->leave($__internal_860e2d07ebab4845c7727f80cbf3b421f89f79f9f2ea02f0d6ea0d5d6c80fae4_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_776ec5bc15ef4fe77f031a724b32b9eded5b3213e62a24a0d8af466f88605226 = $this->env->getExtension("native_profiler");
        $__internal_776ec5bc15ef4fe77f031a724b32b9eded5b3213e62a24a0d8af466f88605226->enter($__internal_776ec5bc15ef4fe77f031a724b32b9eded5b3213e62a24a0d8af466f88605226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_776ec5bc15ef4fe77f031a724b32b9eded5b3213e62a24a0d8af466f88605226->leave($__internal_776ec5bc15ef4fe77f031a724b32b9eded5b3213e62a24a0d8af466f88605226_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e903eb8c31473696624be6ca907cae4fcbaf662d38279cc15b6d1a8708c4497e = $this->env->getExtension("native_profiler");
        $__internal_e903eb8c31473696624be6ca907cae4fcbaf662d38279cc15b6d1a8708c4497e->enter($__internal_e903eb8c31473696624be6ca907cae4fcbaf662d38279cc15b6d1a8708c4497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a1eab52b031ff331e1a24e36a591d81a9a97ace027e4a68030991ff1f53d5351", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_41021be0775dc2b704320de0e4593ee341311b653fecf4f03bae506a691f6920", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6aba78d43312eecc5b38e1f6847e43d7d8977cf837b85ad77a7cf105775d2bea", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_97d8a95fd2a262d6e5a4d820093c9a3a528e272c27cf25ce42c22608d1e485f5", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f52effd913a7690aac7f93b69e6d133108d73ccbc3ef6aa83149ae148307c75c", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a413d1938e715c397291836899fda03de8ccdfe9e3c9375b4d747025c73cc334", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_78c0d2f0e112e88c1c2e4b25d6c1e46ffa6c2471ff71266408a445dc680808a5", $context, $blocks));
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
        
        $__internal_e903eb8c31473696624be6ca907cae4fcbaf662d38279cc15b6d1a8708c4497e->leave($__internal_e903eb8c31473696624be6ca907cae4fcbaf662d38279cc15b6d1a8708c4497e_prof);

    }

    // line 47
    public function block___internal_a1eab52b031ff331e1a24e36a591d81a9a97ace027e4a68030991ff1f53d5351($context, array $blocks = array())
    {
        $__internal_2490cad6d62b5cffdf9c27cfedbe60cc12cf4ffc25b87edb8399b61eace4f674 = $this->env->getExtension("native_profiler");
        $__internal_2490cad6d62b5cffdf9c27cfedbe60cc12cf4ffc25b87edb8399b61eace4f674->enter($__internal_2490cad6d62b5cffdf9c27cfedbe60cc12cf4ffc25b87edb8399b61eace4f674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a1eab52b031ff331e1a24e36a591d81a9a97ace027e4a68030991ff1f53d5351"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_2490cad6d62b5cffdf9c27cfedbe60cc12cf4ffc25b87edb8399b61eace4f674->leave($__internal_2490cad6d62b5cffdf9c27cfedbe60cc12cf4ffc25b87edb8399b61eace4f674_prof);

    }

    // line 52
    public function block___internal_41021be0775dc2b704320de0e4593ee341311b653fecf4f03bae506a691f6920($context, array $blocks = array())
    {
        $__internal_35f5783a9627ef308251e71fc00685f36c8dffbec43cbc6d128b698451a3d3fd = $this->env->getExtension("native_profiler");
        $__internal_35f5783a9627ef308251e71fc00685f36c8dffbec43cbc6d128b698451a3d3fd->enter($__internal_35f5783a9627ef308251e71fc00685f36c8dffbec43cbc6d128b698451a3d3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_41021be0775dc2b704320de0e4593ee341311b653fecf4f03bae506a691f6920"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_35f5783a9627ef308251e71fc00685f36c8dffbec43cbc6d128b698451a3d3fd->leave($__internal_35f5783a9627ef308251e71fc00685f36c8dffbec43cbc6d128b698451a3d3fd_prof);

    }

    // line 57
    public function block___internal_6aba78d43312eecc5b38e1f6847e43d7d8977cf837b85ad77a7cf105775d2bea($context, array $blocks = array())
    {
        $__internal_9594ad7dc213bdbf32a10335b1febe6667cdfd041b950050f78ba3939c06e336 = $this->env->getExtension("native_profiler");
        $__internal_9594ad7dc213bdbf32a10335b1febe6667cdfd041b950050f78ba3939c06e336->enter($__internal_9594ad7dc213bdbf32a10335b1febe6667cdfd041b950050f78ba3939c06e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6aba78d43312eecc5b38e1f6847e43d7d8977cf837b85ad77a7cf105775d2bea"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_9594ad7dc213bdbf32a10335b1febe6667cdfd041b950050f78ba3939c06e336->leave($__internal_9594ad7dc213bdbf32a10335b1febe6667cdfd041b950050f78ba3939c06e336_prof);

    }

    // line 62
    public function block___internal_97d8a95fd2a262d6e5a4d820093c9a3a528e272c27cf25ce42c22608d1e485f5($context, array $blocks = array())
    {
        $__internal_4df4e925bab9eddcde80a66a34a22026e421c71c4e86bc349d4ab113af04b3f4 = $this->env->getExtension("native_profiler");
        $__internal_4df4e925bab9eddcde80a66a34a22026e421c71c4e86bc349d4ab113af04b3f4->enter($__internal_4df4e925bab9eddcde80a66a34a22026e421c71c4e86bc349d4ab113af04b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_97d8a95fd2a262d6e5a4d820093c9a3a528e272c27cf25ce42c22608d1e485f5"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_4df4e925bab9eddcde80a66a34a22026e421c71c4e86bc349d4ab113af04b3f4->leave($__internal_4df4e925bab9eddcde80a66a34a22026e421c71c4e86bc349d4ab113af04b3f4_prof);

    }

    // line 67
    public function block___internal_f52effd913a7690aac7f93b69e6d133108d73ccbc3ef6aa83149ae148307c75c($context, array $blocks = array())
    {
        $__internal_a82a609dd3e983bfb645a6146d83a7942cf635b3641f081c6c1405065efd0f67 = $this->env->getExtension("native_profiler");
        $__internal_a82a609dd3e983bfb645a6146d83a7942cf635b3641f081c6c1405065efd0f67->enter($__internal_a82a609dd3e983bfb645a6146d83a7942cf635b3641f081c6c1405065efd0f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f52effd913a7690aac7f93b69e6d133108d73ccbc3ef6aa83149ae148307c75c"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_a82a609dd3e983bfb645a6146d83a7942cf635b3641f081c6c1405065efd0f67->leave($__internal_a82a609dd3e983bfb645a6146d83a7942cf635b3641f081c6c1405065efd0f67_prof);

    }

    // line 72
    public function block___internal_a413d1938e715c397291836899fda03de8ccdfe9e3c9375b4d747025c73cc334($context, array $blocks = array())
    {
        $__internal_5dd6bd8d20439f75cdc4e2503be41b088efb04c71ec55bd697593226522acc68 = $this->env->getExtension("native_profiler");
        $__internal_5dd6bd8d20439f75cdc4e2503be41b088efb04c71ec55bd697593226522acc68->enter($__internal_5dd6bd8d20439f75cdc4e2503be41b088efb04c71ec55bd697593226522acc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a413d1938e715c397291836899fda03de8ccdfe9e3c9375b4d747025c73cc334"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_5dd6bd8d20439f75cdc4e2503be41b088efb04c71ec55bd697593226522acc68->leave($__internal_5dd6bd8d20439f75cdc4e2503be41b088efb04c71ec55bd697593226522acc68_prof);

    }

    // line 77
    public function block___internal_78c0d2f0e112e88c1c2e4b25d6c1e46ffa6c2471ff71266408a445dc680808a5($context, array $blocks = array())
    {
        $__internal_cfbd21d7ffab2bdf159d3bdd284d39c797273aadad2ba6987474e1630b737d8a = $this->env->getExtension("native_profiler");
        $__internal_cfbd21d7ffab2bdf159d3bdd284d39c797273aadad2ba6987474e1630b737d8a->enter($__internal_cfbd21d7ffab2bdf159d3bdd284d39c797273aadad2ba6987474e1630b737d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_78c0d2f0e112e88c1c2e4b25d6c1e46ffa6c2471ff71266408a445dc680808a5"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_cfbd21d7ffab2bdf159d3bdd284d39c797273aadad2ba6987474e1630b737d8a->leave($__internal_cfbd21d7ffab2bdf159d3bdd284d39c797273aadad2ba6987474e1630b737d8a_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_182881e6f328c357746f65952774f0340227552395be41c7a4444d9eb68b6b00 = $this->env->getExtension("native_profiler");
        $__internal_182881e6f328c357746f65952774f0340227552395be41c7a4444d9eb68b6b00->enter($__internal_182881e6f328c357746f65952774f0340227552395be41c7a4444d9eb68b6b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                if (tbl.length > 0) {
                    if (\$(\"#uci_bundle_basedatosbundle_cuestionario_cuestionarioname\").val() && \$(\"#uci_bundle_basedatosbundle_cuestionario_curso\").val()) {
                        \$.ajax({
                            url: \"";
        // line 379
        echo $this->env->getExtension('routing')->getPath("uci_administrador_guardarcuestionario");
        echo "\",
                            type: \"POST\",
                            data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                            success: function (data) {
                                if (data.resultado == 1) {
                                    window.location.href = \"";
        // line 384
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
        
        $__internal_182881e6f328c357746f65952774f0340227552395be41c7a4444d9eb68b6b00->leave($__internal_182881e6f328c357746f65952774f0340227552395be41c7a4444d9eb68b6b00_prof);

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
        return array (  612 => 384,  604 => 379,  525 => 303,  422 => 203,  355 => 140,  349 => 139,  339 => 78,  333 => 77,  323 => 73,  317 => 72,  307 => 68,  301 => 67,  291 => 63,  285 => 62,  275 => 58,  269 => 57,  259 => 53,  253 => 52,  243 => 48,  237 => 47,  196 => 104,  169 => 79,  167 => 77,  162 => 74,  160 => 72,  155 => 69,  153 => 67,  148 => 64,  146 => 62,  141 => 59,  139 => 57,  134 => 54,  132 => 52,  127 => 49,  125 => 47,  116 => 41,  108 => 36,  100 => 31,  94 => 28,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
