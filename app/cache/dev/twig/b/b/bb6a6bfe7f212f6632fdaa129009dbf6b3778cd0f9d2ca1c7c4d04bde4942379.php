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
            '__internal_05271937b19e67bd851e727f1a34f20348077833e058b5f1ac0cdc0562f5ff9f' => array($this, 'block___internal_05271937b19e67bd851e727f1a34f20348077833e058b5f1ac0cdc0562f5ff9f'),
            '__internal_ced7e4d84f6905c45ce7eac53d79d7cd6d947357bc4dd750f4c447f237ecd38f' => array($this, 'block___internal_ced7e4d84f6905c45ce7eac53d79d7cd6d947357bc4dd750f4c447f237ecd38f'),
            '__internal_f9c4c47b6c39ffd64e6e178bee1c5dc135a99d95a0c2367ea38bbf4c19aa2206' => array($this, 'block___internal_f9c4c47b6c39ffd64e6e178bee1c5dc135a99d95a0c2367ea38bbf4c19aa2206'),
            '__internal_0228874d987e07351ff652dceb3aee4ac88faee1fa77bb67f38d7ed1edf88506' => array($this, 'block___internal_0228874d987e07351ff652dceb3aee4ac88faee1fa77bb67f38d7ed1edf88506'),
            '__internal_936f5f3aa8d650a8caaa88b348cf921f60e1a67d59a945f076f7b3e64120b569' => array($this, 'block___internal_936f5f3aa8d650a8caaa88b348cf921f60e1a67d59a945f076f7b3e64120b569'),
            '__internal_e460db1aa094bb7f845e6924ca17214d47181f8ac50430bcb6599b5d4003242e' => array($this, 'block___internal_e460db1aa094bb7f845e6924ca17214d47181f8ac50430bcb6599b5d4003242e'),
            '__internal_22baf2f899f8f67a0242cc954a61ce7fd82d0f8669e345ec01f195836bdad88e' => array($this, 'block___internal_22baf2f899f8f67a0242cc954a61ce7fd82d0f8669e345ec01f195836bdad88e'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_866de8586fc10a94387fdf023988623c69bbc7203f0cc42e44d7e7d8a94fe292 = $this->env->getExtension("native_profiler");
        $__internal_866de8586fc10a94387fdf023988623c69bbc7203f0cc42e44d7e7d8a94fe292->enter($__internal_866de8586fc10a94387fdf023988623c69bbc7203f0cc42e44d7e7d8a94fe292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_866de8586fc10a94387fdf023988623c69bbc7203f0cc42e44d7e7d8a94fe292->leave($__internal_866de8586fc10a94387fdf023988623c69bbc7203f0cc42e44d7e7d8a94fe292_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_02d2884b3a58589220205ca869d88c482337b8bd667440ccbd77ac72d804c789 = $this->env->getExtension("native_profiler");
        $__internal_02d2884b3a58589220205ca869d88c482337b8bd667440ccbd77ac72d804c789->enter($__internal_02d2884b3a58589220205ca869d88c482337b8bd667440ccbd77ac72d804c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_02d2884b3a58589220205ca869d88c482337b8bd667440ccbd77ac72d804c789->leave($__internal_02d2884b3a58589220205ca869d88c482337b8bd667440ccbd77ac72d804c789_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2bc6faea6913e3299ce05e1e817516e868994b685bcf4a5b1f995007443e996 = $this->env->getExtension("native_profiler");
        $__internal_c2bc6faea6913e3299ce05e1e817516e868994b685bcf4a5b1f995007443e996->enter($__internal_c2bc6faea6913e3299ce05e1e817516e868994b685bcf4a5b1f995007443e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_05271937b19e67bd851e727f1a34f20348077833e058b5f1ac0cdc0562f5ff9f", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ced7e4d84f6905c45ce7eac53d79d7cd6d947357bc4dd750f4c447f237ecd38f", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f9c4c47b6c39ffd64e6e178bee1c5dc135a99d95a0c2367ea38bbf4c19aa2206", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0228874d987e07351ff652dceb3aee4ac88faee1fa77bb67f38d7ed1edf88506", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_936f5f3aa8d650a8caaa88b348cf921f60e1a67d59a945f076f7b3e64120b569", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_e460db1aa094bb7f845e6924ca17214d47181f8ac50430bcb6599b5d4003242e", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_22baf2f899f8f67a0242cc954a61ce7fd82d0f8669e345ec01f195836bdad88e", $context, $blocks));
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
        
        $__internal_c2bc6faea6913e3299ce05e1e817516e868994b685bcf4a5b1f995007443e996->leave($__internal_c2bc6faea6913e3299ce05e1e817516e868994b685bcf4a5b1f995007443e996_prof);

    }

    // line 40
    public function block___internal_05271937b19e67bd851e727f1a34f20348077833e058b5f1ac0cdc0562f5ff9f($context, array $blocks = array())
    {
        $__internal_36c225e49c806d823531ab310c35b4bf624e958b12fe9be7a49cb33f09a393d4 = $this->env->getExtension("native_profiler");
        $__internal_36c225e49c806d823531ab310c35b4bf624e958b12fe9be7a49cb33f09a393d4->enter($__internal_36c225e49c806d823531ab310c35b4bf624e958b12fe9be7a49cb33f09a393d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_05271937b19e67bd851e727f1a34f20348077833e058b5f1ac0cdc0562f5ff9f"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_36c225e49c806d823531ab310c35b4bf624e958b12fe9be7a49cb33f09a393d4->leave($__internal_36c225e49c806d823531ab310c35b4bf624e958b12fe9be7a49cb33f09a393d4_prof);

    }

    // line 45
    public function block___internal_ced7e4d84f6905c45ce7eac53d79d7cd6d947357bc4dd750f4c447f237ecd38f($context, array $blocks = array())
    {
        $__internal_bae220e18b58b9662f6911579a6a30edfc9f43fbc44e53799eaddeb5e52549fc = $this->env->getExtension("native_profiler");
        $__internal_bae220e18b58b9662f6911579a6a30edfc9f43fbc44e53799eaddeb5e52549fc->enter($__internal_bae220e18b58b9662f6911579a6a30edfc9f43fbc44e53799eaddeb5e52549fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_ced7e4d84f6905c45ce7eac53d79d7cd6d947357bc4dd750f4c447f237ecd38f"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_bae220e18b58b9662f6911579a6a30edfc9f43fbc44e53799eaddeb5e52549fc->leave($__internal_bae220e18b58b9662f6911579a6a30edfc9f43fbc44e53799eaddeb5e52549fc_prof);

    }

    // line 50
    public function block___internal_f9c4c47b6c39ffd64e6e178bee1c5dc135a99d95a0c2367ea38bbf4c19aa2206($context, array $blocks = array())
    {
        $__internal_aeb1478ca791be48403c59758561d0a7515d64bbde7135d6279f5460ab07d423 = $this->env->getExtension("native_profiler");
        $__internal_aeb1478ca791be48403c59758561d0a7515d64bbde7135d6279f5460ab07d423->enter($__internal_aeb1478ca791be48403c59758561d0a7515d64bbde7135d6279f5460ab07d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f9c4c47b6c39ffd64e6e178bee1c5dc135a99d95a0c2367ea38bbf4c19aa2206"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_aeb1478ca791be48403c59758561d0a7515d64bbde7135d6279f5460ab07d423->leave($__internal_aeb1478ca791be48403c59758561d0a7515d64bbde7135d6279f5460ab07d423_prof);

    }

    // line 55
    public function block___internal_0228874d987e07351ff652dceb3aee4ac88faee1fa77bb67f38d7ed1edf88506($context, array $blocks = array())
    {
        $__internal_1ffcd4ee605daa005395adc502f5aed7e5571e0a789d8e5183f0760bcbfdd07e = $this->env->getExtension("native_profiler");
        $__internal_1ffcd4ee605daa005395adc502f5aed7e5571e0a789d8e5183f0760bcbfdd07e->enter($__internal_1ffcd4ee605daa005395adc502f5aed7e5571e0a789d8e5183f0760bcbfdd07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0228874d987e07351ff652dceb3aee4ac88faee1fa77bb67f38d7ed1edf88506"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_1ffcd4ee605daa005395adc502f5aed7e5571e0a789d8e5183f0760bcbfdd07e->leave($__internal_1ffcd4ee605daa005395adc502f5aed7e5571e0a789d8e5183f0760bcbfdd07e_prof);

    }

    // line 60
    public function block___internal_936f5f3aa8d650a8caaa88b348cf921f60e1a67d59a945f076f7b3e64120b569($context, array $blocks = array())
    {
        $__internal_4c689ad3de81b2f96e602ffdfa733e541168a69a1a300f81faafad709a12c82b = $this->env->getExtension("native_profiler");
        $__internal_4c689ad3de81b2f96e602ffdfa733e541168a69a1a300f81faafad709a12c82b->enter($__internal_4c689ad3de81b2f96e602ffdfa733e541168a69a1a300f81faafad709a12c82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_936f5f3aa8d650a8caaa88b348cf921f60e1a67d59a945f076f7b3e64120b569"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_4c689ad3de81b2f96e602ffdfa733e541168a69a1a300f81faafad709a12c82b->leave($__internal_4c689ad3de81b2f96e602ffdfa733e541168a69a1a300f81faafad709a12c82b_prof);

    }

    // line 65
    public function block___internal_e460db1aa094bb7f845e6924ca17214d47181f8ac50430bcb6599b5d4003242e($context, array $blocks = array())
    {
        $__internal_26bb826d6377ac4c7d8a06a43ccbec7abe48c875fa3ff3724818fd292ff1d029 = $this->env->getExtension("native_profiler");
        $__internal_26bb826d6377ac4c7d8a06a43ccbec7abe48c875fa3ff3724818fd292ff1d029->enter($__internal_26bb826d6377ac4c7d8a06a43ccbec7abe48c875fa3ff3724818fd292ff1d029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_e460db1aa094bb7f845e6924ca17214d47181f8ac50430bcb6599b5d4003242e"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_26bb826d6377ac4c7d8a06a43ccbec7abe48c875fa3ff3724818fd292ff1d029->leave($__internal_26bb826d6377ac4c7d8a06a43ccbec7abe48c875fa3ff3724818fd292ff1d029_prof);

    }

    // line 70
    public function block___internal_22baf2f899f8f67a0242cc954a61ce7fd82d0f8669e345ec01f195836bdad88e($context, array $blocks = array())
    {
        $__internal_976ae3a937948f313a084927feb8d47117293e2b29831fb09aed25b1a8186a13 = $this->env->getExtension("native_profiler");
        $__internal_976ae3a937948f313a084927feb8d47117293e2b29831fb09aed25b1a8186a13->enter($__internal_976ae3a937948f313a084927feb8d47117293e2b29831fb09aed25b1a8186a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_22baf2f899f8f67a0242cc954a61ce7fd82d0f8669e345ec01f195836bdad88e"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_976ae3a937948f313a084927feb8d47117293e2b29831fb09aed25b1a8186a13->leave($__internal_976ae3a937948f313a084927feb8d47117293e2b29831fb09aed25b1a8186a13_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2960af665e6765528e852a8c8c8166e40d0f9a9c40fdea5008da5a48bc5e1fb0 = $this->env->getExtension("native_profiler");
        $__internal_2960af665e6765528e852a8c8c8166e40d0f9a9c40fdea5008da5a48bc5e1fb0->enter($__internal_2960af665e6765528e852a8c8c8166e40d0f9a9c40fdea5008da5a48bc5e1fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 185
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
        
        $__internal_2960af665e6765528e852a8c8c8166e40d0f9a9c40fdea5008da5a48bc5e1fb0->leave($__internal_2960af665e6765528e852a8c8c8166e40d0f9a9c40fdea5008da5a48bc5e1fb0_prof);

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
        return array (  398 => 185,  333 => 124,  327 => 123,  317 => 71,  311 => 70,  301 => 66,  295 => 65,  285 => 61,  279 => 60,  269 => 56,  263 => 55,  253 => 51,  247 => 50,  237 => 46,  231 => 45,  221 => 41,  215 => 40,  181 => 95,  156 => 72,  154 => 70,  149 => 67,  147 => 65,  142 => 62,  140 => 60,  135 => 57,  133 => 55,  128 => 52,  126 => 50,  121 => 47,  119 => 45,  114 => 42,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
