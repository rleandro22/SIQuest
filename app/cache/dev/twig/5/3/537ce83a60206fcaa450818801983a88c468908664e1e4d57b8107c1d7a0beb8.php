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
            '__internal_d7833656b1de79dbbb8735605e225e540131ca2cb7fd4cb5f0fb614abadbbb00' => array($this, 'block___internal_d7833656b1de79dbbb8735605e225e540131ca2cb7fd4cb5f0fb614abadbbb00'),
            '__internal_6b737a8d5c6cb9887cfaf2ace3f8b92461e51b940c628e77389616dc16704240' => array($this, 'block___internal_6b737a8d5c6cb9887cfaf2ace3f8b92461e51b940c628e77389616dc16704240'),
            '__internal_0cf9fbb4635bae57a6e851c83c7a63ee602e3d2d1b845eb4b02acd4d3254fccb' => array($this, 'block___internal_0cf9fbb4635bae57a6e851c83c7a63ee602e3d2d1b845eb4b02acd4d3254fccb'),
            '__internal_a96b5025ad99e93b620e81b54e33cee720c59c6aceae8894fb61398d1473d66a' => array($this, 'block___internal_a96b5025ad99e93b620e81b54e33cee720c59c6aceae8894fb61398d1473d66a'),
            '__internal_2ac3285c9eda2d3312440886b5864a69af925f8b961ecefed16dd02fa827aa9e' => array($this, 'block___internal_2ac3285c9eda2d3312440886b5864a69af925f8b961ecefed16dd02fa827aa9e'),
            '__internal_f40977785f7af1d21f043067a447c70e74f3f39f0904765a273f80c9ac618ae3' => array($this, 'block___internal_f40977785f7af1d21f043067a447c70e74f3f39f0904765a273f80c9ac618ae3'),
            '__internal_302c6271b7dc0217ec7326aa19b4d88a9e8b0241eb7e3ccaa65c6699a58751f3' => array($this, 'block___internal_302c6271b7dc0217ec7326aa19b4d88a9e8b0241eb7e3ccaa65c6699a58751f3'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8567b54520942c839519d99914df69f0eae3deb28a588f7aa000b4b2111804ef = $this->env->getExtension("native_profiler");
        $__internal_8567b54520942c839519d99914df69f0eae3deb28a588f7aa000b4b2111804ef->enter($__internal_8567b54520942c839519d99914df69f0eae3deb28a588f7aa000b4b2111804ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8567b54520942c839519d99914df69f0eae3deb28a588f7aa000b4b2111804ef->leave($__internal_8567b54520942c839519d99914df69f0eae3deb28a588f7aa000b4b2111804ef_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a7be6ae76e22c67c5f4384c9d22e148901cfc93d1ad4c0ca14739c025b5cdecd = $this->env->getExtension("native_profiler");
        $__internal_a7be6ae76e22c67c5f4384c9d22e148901cfc93d1ad4c0ca14739c025b5cdecd->enter($__internal_a7be6ae76e22c67c5f4384c9d22e148901cfc93d1ad4c0ca14739c025b5cdecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_a7be6ae76e22c67c5f4384c9d22e148901cfc93d1ad4c0ca14739c025b5cdecd->leave($__internal_a7be6ae76e22c67c5f4384c9d22e148901cfc93d1ad4c0ca14739c025b5cdecd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_96c5d142d125fe7d6c780186a329b50d88ce7425fd2a98ee75f99333b54b875c = $this->env->getExtension("native_profiler");
        $__internal_96c5d142d125fe7d6c780186a329b50d88ce7425fd2a98ee75f99333b54b875c->enter($__internal_96c5d142d125fe7d6c780186a329b50d88ce7425fd2a98ee75f99333b54b875c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d7833656b1de79dbbb8735605e225e540131ca2cb7fd4cb5f0fb614abadbbb00", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6b737a8d5c6cb9887cfaf2ace3f8b92461e51b940c628e77389616dc16704240", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0cf9fbb4635bae57a6e851c83c7a63ee602e3d2d1b845eb4b02acd4d3254fccb", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a96b5025ad99e93b620e81b54e33cee720c59c6aceae8894fb61398d1473d66a", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_2ac3285c9eda2d3312440886b5864a69af925f8b961ecefed16dd02fa827aa9e", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f40977785f7af1d21f043067a447c70e74f3f39f0904765a273f80c9ac618ae3", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_302c6271b7dc0217ec7326aa19b4d88a9e8b0241eb7e3ccaa65c6699a58751f3", $context, $blocks));
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
        
        $__internal_96c5d142d125fe7d6c780186a329b50d88ce7425fd2a98ee75f99333b54b875c->leave($__internal_96c5d142d125fe7d6c780186a329b50d88ce7425fd2a98ee75f99333b54b875c_prof);

    }

    // line 47
    public function block___internal_d7833656b1de79dbbb8735605e225e540131ca2cb7fd4cb5f0fb614abadbbb00($context, array $blocks = array())
    {
        $__internal_2e5de3152fafa0f9556067319e806a5448c30da5c4de67665056a954ae412b46 = $this->env->getExtension("native_profiler");
        $__internal_2e5de3152fafa0f9556067319e806a5448c30da5c4de67665056a954ae412b46->enter($__internal_2e5de3152fafa0f9556067319e806a5448c30da5c4de67665056a954ae412b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d7833656b1de79dbbb8735605e225e540131ca2cb7fd4cb5f0fb614abadbbb00"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_2e5de3152fafa0f9556067319e806a5448c30da5c4de67665056a954ae412b46->leave($__internal_2e5de3152fafa0f9556067319e806a5448c30da5c4de67665056a954ae412b46_prof);

    }

    // line 52
    public function block___internal_6b737a8d5c6cb9887cfaf2ace3f8b92461e51b940c628e77389616dc16704240($context, array $blocks = array())
    {
        $__internal_bba39e0ebeaeb9b9bf6354edc2edb64acac92e382dc7ac07a1d7314e8a0441c8 = $this->env->getExtension("native_profiler");
        $__internal_bba39e0ebeaeb9b9bf6354edc2edb64acac92e382dc7ac07a1d7314e8a0441c8->enter($__internal_bba39e0ebeaeb9b9bf6354edc2edb64acac92e382dc7ac07a1d7314e8a0441c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6b737a8d5c6cb9887cfaf2ace3f8b92461e51b940c628e77389616dc16704240"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_bba39e0ebeaeb9b9bf6354edc2edb64acac92e382dc7ac07a1d7314e8a0441c8->leave($__internal_bba39e0ebeaeb9b9bf6354edc2edb64acac92e382dc7ac07a1d7314e8a0441c8_prof);

    }

    // line 57
    public function block___internal_0cf9fbb4635bae57a6e851c83c7a63ee602e3d2d1b845eb4b02acd4d3254fccb($context, array $blocks = array())
    {
        $__internal_1e2cfe4ef5be9d3c046d8591a18c16be532178a11a6afdd0b5e947f3a98761aa = $this->env->getExtension("native_profiler");
        $__internal_1e2cfe4ef5be9d3c046d8591a18c16be532178a11a6afdd0b5e947f3a98761aa->enter($__internal_1e2cfe4ef5be9d3c046d8591a18c16be532178a11a6afdd0b5e947f3a98761aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0cf9fbb4635bae57a6e851c83c7a63ee602e3d2d1b845eb4b02acd4d3254fccb"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_1e2cfe4ef5be9d3c046d8591a18c16be532178a11a6afdd0b5e947f3a98761aa->leave($__internal_1e2cfe4ef5be9d3c046d8591a18c16be532178a11a6afdd0b5e947f3a98761aa_prof);

    }

    // line 62
    public function block___internal_a96b5025ad99e93b620e81b54e33cee720c59c6aceae8894fb61398d1473d66a($context, array $blocks = array())
    {
        $__internal_e50ae0a315932190259745de087d4424096171391a823c968d8d2d8f81043cc3 = $this->env->getExtension("native_profiler");
        $__internal_e50ae0a315932190259745de087d4424096171391a823c968d8d2d8f81043cc3->enter($__internal_e50ae0a315932190259745de087d4424096171391a823c968d8d2d8f81043cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a96b5025ad99e93b620e81b54e33cee720c59c6aceae8894fb61398d1473d66a"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_e50ae0a315932190259745de087d4424096171391a823c968d8d2d8f81043cc3->leave($__internal_e50ae0a315932190259745de087d4424096171391a823c968d8d2d8f81043cc3_prof);

    }

    // line 67
    public function block___internal_2ac3285c9eda2d3312440886b5864a69af925f8b961ecefed16dd02fa827aa9e($context, array $blocks = array())
    {
        $__internal_f476d8975297c9df954f4a1e51bf37a30744d6b1c947544db63f0de1a9441ab8 = $this->env->getExtension("native_profiler");
        $__internal_f476d8975297c9df954f4a1e51bf37a30744d6b1c947544db63f0de1a9441ab8->enter($__internal_f476d8975297c9df954f4a1e51bf37a30744d6b1c947544db63f0de1a9441ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_2ac3285c9eda2d3312440886b5864a69af925f8b961ecefed16dd02fa827aa9e"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_f476d8975297c9df954f4a1e51bf37a30744d6b1c947544db63f0de1a9441ab8->leave($__internal_f476d8975297c9df954f4a1e51bf37a30744d6b1c947544db63f0de1a9441ab8_prof);

    }

    // line 72
    public function block___internal_f40977785f7af1d21f043067a447c70e74f3f39f0904765a273f80c9ac618ae3($context, array $blocks = array())
    {
        $__internal_679cc0207406c5ec3136c81a1663ecf9f67644e689d367ac6edc44ce585daf95 = $this->env->getExtension("native_profiler");
        $__internal_679cc0207406c5ec3136c81a1663ecf9f67644e689d367ac6edc44ce585daf95->enter($__internal_679cc0207406c5ec3136c81a1663ecf9f67644e689d367ac6edc44ce585daf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f40977785f7af1d21f043067a447c70e74f3f39f0904765a273f80c9ac618ae3"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_679cc0207406c5ec3136c81a1663ecf9f67644e689d367ac6edc44ce585daf95->leave($__internal_679cc0207406c5ec3136c81a1663ecf9f67644e689d367ac6edc44ce585daf95_prof);

    }

    // line 77
    public function block___internal_302c6271b7dc0217ec7326aa19b4d88a9e8b0241eb7e3ccaa65c6699a58751f3($context, array $blocks = array())
    {
        $__internal_2a9a328b474fb32f7bcc41dc9df3df6c6044441589c3f2d1a647da83bae60f2a = $this->env->getExtension("native_profiler");
        $__internal_2a9a328b474fb32f7bcc41dc9df3df6c6044441589c3f2d1a647da83bae60f2a->enter($__internal_2a9a328b474fb32f7bcc41dc9df3df6c6044441589c3f2d1a647da83bae60f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_302c6271b7dc0217ec7326aa19b4d88a9e8b0241eb7e3ccaa65c6699a58751f3"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_2a9a328b474fb32f7bcc41dc9df3df6c6044441589c3f2d1a647da83bae60f2a->leave($__internal_2a9a328b474fb32f7bcc41dc9df3df6c6044441589c3f2d1a647da83bae60f2a_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02e0e0c7cce6a3adcfc30698c21294a5694406e520783d942427f3abafcc1130 = $this->env->getExtension("native_profiler");
        $__internal_02e0e0c7cce6a3adcfc30698c21294a5694406e520783d942427f3abafcc1130->enter($__internal_02e0e0c7cce6a3adcfc30698c21294a5694406e520783d942427f3abafcc1130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_02e0e0c7cce6a3adcfc30698c21294a5694406e520783d942427f3abafcc1130->leave($__internal_02e0e0c7cce6a3adcfc30698c21294a5694406e520783d942427f3abafcc1130_prof);

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
