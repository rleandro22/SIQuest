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
            '__internal_c09e40e0efe3e5212767708159b57d09c4f336e98ac057dc20218d625802aeae' => array($this, 'block___internal_c09e40e0efe3e5212767708159b57d09c4f336e98ac057dc20218d625802aeae'),
            '__internal_225df7470eb3c1830c866e0c012441af5fd9acfd350b3935e27eb39825a79df4' => array($this, 'block___internal_225df7470eb3c1830c866e0c012441af5fd9acfd350b3935e27eb39825a79df4'),
            '__internal_59fdf3aa0d7ae3059ab781b00345bddc8eb8f3991239ac128784b13e0bf630ea' => array($this, 'block___internal_59fdf3aa0d7ae3059ab781b00345bddc8eb8f3991239ac128784b13e0bf630ea'),
            '__internal_af4a3c47e38ceead88f898fd139fe600e7e599b8ed23f6b6c02450d0ba7a2d8f' => array($this, 'block___internal_af4a3c47e38ceead88f898fd139fe600e7e599b8ed23f6b6c02450d0ba7a2d8f'),
            '__internal_b69a9a936ecde2418000096b5c3ac6d575c988d0354e888603e1c7b9c1a64146' => array($this, 'block___internal_b69a9a936ecde2418000096b5c3ac6d575c988d0354e888603e1c7b9c1a64146'),
            '__internal_d0fd605b3b3f414d1a69cd0694e58c013811724379d98efb0274eedf1023a182' => array($this, 'block___internal_d0fd605b3b3f414d1a69cd0694e58c013811724379d98efb0274eedf1023a182'),
            '__internal_93ecc656c4863286e9c6a7cd79f4a930e5d8596f30ad47997b77716eb6dd4f6b' => array($this, 'block___internal_93ecc656c4863286e9c6a7cd79f4a930e5d8596f30ad47997b77716eb6dd4f6b'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6501442dfb051c0525376c863ad98fcb08f05f841968dab2cdc2a8218a14df35 = $this->env->getExtension("native_profiler");
        $__internal_6501442dfb051c0525376c863ad98fcb08f05f841968dab2cdc2a8218a14df35->enter($__internal_6501442dfb051c0525376c863ad98fcb08f05f841968dab2cdc2a8218a14df35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6501442dfb051c0525376c863ad98fcb08f05f841968dab2cdc2a8218a14df35->leave($__internal_6501442dfb051c0525376c863ad98fcb08f05f841968dab2cdc2a8218a14df35_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_23baeb431ce1a95d9bbe6f5ff04f5666f71367562580ca5128c3a7f51cd3628b = $this->env->getExtension("native_profiler");
        $__internal_23baeb431ce1a95d9bbe6f5ff04f5666f71367562580ca5128c3a7f51cd3628b->enter($__internal_23baeb431ce1a95d9bbe6f5ff04f5666f71367562580ca5128c3a7f51cd3628b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_23baeb431ce1a95d9bbe6f5ff04f5666f71367562580ca5128c3a7f51cd3628b->leave($__internal_23baeb431ce1a95d9bbe6f5ff04f5666f71367562580ca5128c3a7f51cd3628b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7feb30aff62d059218dc8aa10273819880ce007fafc055c541709b862a0b36d = $this->env->getExtension("native_profiler");
        $__internal_a7feb30aff62d059218dc8aa10273819880ce007fafc055c541709b862a0b36d->enter($__internal_a7feb30aff62d059218dc8aa10273819880ce007fafc055c541709b862a0b36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c09e40e0efe3e5212767708159b57d09c4f336e98ac057dc20218d625802aeae", $context, $blocks));
        // line 43
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 46
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_225df7470eb3c1830c866e0c012441af5fd9acfd350b3935e27eb39825a79df4", $context, $blocks));
        // line 48
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 51
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_59fdf3aa0d7ae3059ab781b00345bddc8eb8f3991239ac128784b13e0bf630ea", $context, $blocks));
        // line 53
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 56
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_af4a3c47e38ceead88f898fd139fe600e7e599b8ed23f6b6c02450d0ba7a2d8f", $context, $blocks));
        // line 58
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 61
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_b69a9a936ecde2418000096b5c3ac6d575c988d0354e888603e1c7b9c1a64146", $context, $blocks));
        // line 63
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 66
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d0fd605b3b3f414d1a69cd0694e58c013811724379d98efb0274eedf1023a182", $context, $blocks));
        // line 68
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 71
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_93ecc656c4863286e9c6a7cd79f4a930e5d8596f30ad47997b77716eb6dd4f6b", $context, $blocks));
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

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br><br>
            <div class=\"aleta\">
                <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">

                </table>
            </div>
            </br></br>

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_a7feb30aff62d059218dc8aa10273819880ce007fafc055c541709b862a0b36d->leave($__internal_a7feb30aff62d059218dc8aa10273819880ce007fafc055c541709b862a0b36d_prof);

    }

    // line 41
    public function block___internal_c09e40e0efe3e5212767708159b57d09c4f336e98ac057dc20218d625802aeae($context, array $blocks = array())
    {
        $__internal_469077a4e4a7b18596fd171e844cc43b0cdc2c838c566e556c66d989ad7a9f11 = $this->env->getExtension("native_profiler");
        $__internal_469077a4e4a7b18596fd171e844cc43b0cdc2c838c566e556c66d989ad7a9f11->enter($__internal_469077a4e4a7b18596fd171e844cc43b0cdc2c838c566e556c66d989ad7a9f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c09e40e0efe3e5212767708159b57d09c4f336e98ac057dc20218d625802aeae"));

        // line 42
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_469077a4e4a7b18596fd171e844cc43b0cdc2c838c566e556c66d989ad7a9f11->leave($__internal_469077a4e4a7b18596fd171e844cc43b0cdc2c838c566e556c66d989ad7a9f11_prof);

    }

    // line 46
    public function block___internal_225df7470eb3c1830c866e0c012441af5fd9acfd350b3935e27eb39825a79df4($context, array $blocks = array())
    {
        $__internal_b27697e11fec390d07548e15d2432f7a3a1714c016ea3f6d32aa9058c3140eca = $this->env->getExtension("native_profiler");
        $__internal_b27697e11fec390d07548e15d2432f7a3a1714c016ea3f6d32aa9058c3140eca->enter($__internal_b27697e11fec390d07548e15d2432f7a3a1714c016ea3f6d32aa9058c3140eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_225df7470eb3c1830c866e0c012441af5fd9acfd350b3935e27eb39825a79df4"));

        // line 47
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_b27697e11fec390d07548e15d2432f7a3a1714c016ea3f6d32aa9058c3140eca->leave($__internal_b27697e11fec390d07548e15d2432f7a3a1714c016ea3f6d32aa9058c3140eca_prof);

    }

    // line 51
    public function block___internal_59fdf3aa0d7ae3059ab781b00345bddc8eb8f3991239ac128784b13e0bf630ea($context, array $blocks = array())
    {
        $__internal_43a952cacc5663ae25ad0a2fbb79f9e62e730ffd1a3a017f146c0f831f612991 = $this->env->getExtension("native_profiler");
        $__internal_43a952cacc5663ae25ad0a2fbb79f9e62e730ffd1a3a017f146c0f831f612991->enter($__internal_43a952cacc5663ae25ad0a2fbb79f9e62e730ffd1a3a017f146c0f831f612991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_59fdf3aa0d7ae3059ab781b00345bddc8eb8f3991239ac128784b13e0bf630ea"));

        // line 52
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_43a952cacc5663ae25ad0a2fbb79f9e62e730ffd1a3a017f146c0f831f612991->leave($__internal_43a952cacc5663ae25ad0a2fbb79f9e62e730ffd1a3a017f146c0f831f612991_prof);

    }

    // line 56
    public function block___internal_af4a3c47e38ceead88f898fd139fe600e7e599b8ed23f6b6c02450d0ba7a2d8f($context, array $blocks = array())
    {
        $__internal_4af5ed321afcbc1645cc7e2c74f1c76788c3f1d9ab4573df3916049627c08bc2 = $this->env->getExtension("native_profiler");
        $__internal_4af5ed321afcbc1645cc7e2c74f1c76788c3f1d9ab4573df3916049627c08bc2->enter($__internal_4af5ed321afcbc1645cc7e2c74f1c76788c3f1d9ab4573df3916049627c08bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_af4a3c47e38ceead88f898fd139fe600e7e599b8ed23f6b6c02450d0ba7a2d8f"));

        // line 57
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_4af5ed321afcbc1645cc7e2c74f1c76788c3f1d9ab4573df3916049627c08bc2->leave($__internal_4af5ed321afcbc1645cc7e2c74f1c76788c3f1d9ab4573df3916049627c08bc2_prof);

    }

    // line 61
    public function block___internal_b69a9a936ecde2418000096b5c3ac6d575c988d0354e888603e1c7b9c1a64146($context, array $blocks = array())
    {
        $__internal_ef01c8aa31b1f91aa7e90ca506c4e63dce51e34b4da9742195e48cb93cd2e336 = $this->env->getExtension("native_profiler");
        $__internal_ef01c8aa31b1f91aa7e90ca506c4e63dce51e34b4da9742195e48cb93cd2e336->enter($__internal_ef01c8aa31b1f91aa7e90ca506c4e63dce51e34b4da9742195e48cb93cd2e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_b69a9a936ecde2418000096b5c3ac6d575c988d0354e888603e1c7b9c1a64146"));

        // line 62
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_ef01c8aa31b1f91aa7e90ca506c4e63dce51e34b4da9742195e48cb93cd2e336->leave($__internal_ef01c8aa31b1f91aa7e90ca506c4e63dce51e34b4da9742195e48cb93cd2e336_prof);

    }

    // line 66
    public function block___internal_d0fd605b3b3f414d1a69cd0694e58c013811724379d98efb0274eedf1023a182($context, array $blocks = array())
    {
        $__internal_0fec6c29b480c1c821ebf1f0e28813b15be4d0ee0b8d4ea0466556ab4f9265ad = $this->env->getExtension("native_profiler");
        $__internal_0fec6c29b480c1c821ebf1f0e28813b15be4d0ee0b8d4ea0466556ab4f9265ad->enter($__internal_0fec6c29b480c1c821ebf1f0e28813b15be4d0ee0b8d4ea0466556ab4f9265ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d0fd605b3b3f414d1a69cd0694e58c013811724379d98efb0274eedf1023a182"));

        // line 67
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0fec6c29b480c1c821ebf1f0e28813b15be4d0ee0b8d4ea0466556ab4f9265ad->leave($__internal_0fec6c29b480c1c821ebf1f0e28813b15be4d0ee0b8d4ea0466556ab4f9265ad_prof);

    }

    // line 71
    public function block___internal_93ecc656c4863286e9c6a7cd79f4a930e5d8596f30ad47997b77716eb6dd4f6b($context, array $blocks = array())
    {
        $__internal_98664c6f8c3b991ab42563e7ecffedc7b0dcc05edbcf8328a2021244a836ae12 = $this->env->getExtension("native_profiler");
        $__internal_98664c6f8c3b991ab42563e7ecffedc7b0dcc05edbcf8328a2021244a836ae12->enter($__internal_98664c6f8c3b991ab42563e7ecffedc7b0dcc05edbcf8328a2021244a836ae12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_93ecc656c4863286e9c6a7cd79f4a930e5d8596f30ad47997b77716eb6dd4f6b"));

        // line 72
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_98664c6f8c3b991ab42563e7ecffedc7b0dcc05edbcf8328a2021244a836ae12->leave($__internal_98664c6f8c3b991ab42563e7ecffedc7b0dcc05edbcf8328a2021244a836ae12_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96765e2858b61ab77c76d466c8612154f790f989cca16fcd7926eeca2909c92f = $this->env->getExtension("native_profiler");
        $__internal_96765e2858b61ab77c76d466c8612154f790f989cca16fcd7926eeca2909c92f->enter($__internal_96765e2858b61ab77c76d466c8612154f790f989cca16fcd7926eeca2909c92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

        document.ready = function () {

            \$('#enviar').click(function (e) {
                if (\$(\"input[id\$='porcentaje']\").val() && \$(\"input[id\$='cantidad']\").val() && \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_']\").val() && \$(\"input[id\$='cantidad']\").val() > 0) {
                    \$.ajax({
                        type: \$(\"#formularioCuestionario\").attr('method'),
                        url: \$(\"#formularioCuestionario\").attr('action'),
                        data: \$(\"#formularioCuestionario\").serialize(),
                        dataType: \"json\",
                        success: function (data) {

                        },
                        error: function () {
                            alert(\"Ocurrio un error.\");
                        }
                    });
                } else {

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
        
        $__internal_96765e2858b61ab77c76d466c8612154f790f989cca16fcd7926eeca2909c92f->leave($__internal_96765e2858b61ab77c76d466c8612154f790f989cca16fcd7926eeca2909c92f_prof);

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
