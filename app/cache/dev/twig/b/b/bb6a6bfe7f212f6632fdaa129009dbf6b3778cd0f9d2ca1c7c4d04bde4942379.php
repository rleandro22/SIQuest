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
            '__internal_3825f740824354100a66183e1cc2190d4fd04b0904226598d5d722e2d94dbc0c' => array($this, 'block___internal_3825f740824354100a66183e1cc2190d4fd04b0904226598d5d722e2d94dbc0c'),
            '__internal_4a20eb5c75623153bae8d88d1eed02f17a4e17ca1061bc11158fcc90b6159715' => array($this, 'block___internal_4a20eb5c75623153bae8d88d1eed02f17a4e17ca1061bc11158fcc90b6159715'),
            '__internal_edc95d46101af0598ba1023cc95bb378698dd0be9d80caff0143f7d50b480f80' => array($this, 'block___internal_edc95d46101af0598ba1023cc95bb378698dd0be9d80caff0143f7d50b480f80'),
            '__internal_524d6297c7e45444df403069626622e190b2ed7ac86746f5726144c10f0efa8b' => array($this, 'block___internal_524d6297c7e45444df403069626622e190b2ed7ac86746f5726144c10f0efa8b'),
            '__internal_0de2605d5bab0a38b5cb570ead8c79755dfaa97224d1c45be880455534e09a29' => array($this, 'block___internal_0de2605d5bab0a38b5cb570ead8c79755dfaa97224d1c45be880455534e09a29'),
            '__internal_a07b599ba48b5880b526718fe296c2bb409685147856c00b71839261a154e8f2' => array($this, 'block___internal_a07b599ba48b5880b526718fe296c2bb409685147856c00b71839261a154e8f2'),
            '__internal_9240ad75cba6bb2ef041f6111f1513485004792ffd44c451c3fdfdcdcad359f8' => array($this, 'block___internal_9240ad75cba6bb2ef041f6111f1513485004792ffd44c451c3fdfdcdcad359f8'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d28677925436679621927ddf30f2a796d61c709045fcb0ccd96bbcd09e371f3d = $this->env->getExtension("native_profiler");
        $__internal_d28677925436679621927ddf30f2a796d61c709045fcb0ccd96bbcd09e371f3d->enter($__internal_d28677925436679621927ddf30f2a796d61c709045fcb0ccd96bbcd09e371f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28677925436679621927ddf30f2a796d61c709045fcb0ccd96bbcd09e371f3d->leave($__internal_d28677925436679621927ddf30f2a796d61c709045fcb0ccd96bbcd09e371f3d_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_6f8f3ab917a672f596182b5ecd3a40b029ba01b1890fc6f111037e53044e2a3d = $this->env->getExtension("native_profiler");
        $__internal_6f8f3ab917a672f596182b5ecd3a40b029ba01b1890fc6f111037e53044e2a3d->enter($__internal_6f8f3ab917a672f596182b5ecd3a40b029ba01b1890fc6f111037e53044e2a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_6f8f3ab917a672f596182b5ecd3a40b029ba01b1890fc6f111037e53044e2a3d->leave($__internal_6f8f3ab917a672f596182b5ecd3a40b029ba01b1890fc6f111037e53044e2a3d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_392ee8f9c2c5365efeca858874ee672d8c5f778473729d07203197bd15a426f0 = $this->env->getExtension("native_profiler");
        $__internal_392ee8f9c2c5365efeca858874ee672d8c5f778473729d07203197bd15a426f0->enter($__internal_392ee8f9c2c5365efeca858874ee672d8c5f778473729d07203197bd15a426f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_3825f740824354100a66183e1cc2190d4fd04b0904226598d5d722e2d94dbc0c", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_4a20eb5c75623153bae8d88d1eed02f17a4e17ca1061bc11158fcc90b6159715", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_edc95d46101af0598ba1023cc95bb378698dd0be9d80caff0143f7d50b480f80", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_524d6297c7e45444df403069626622e190b2ed7ac86746f5726144c10f0efa8b", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0de2605d5bab0a38b5cb570ead8c79755dfaa97224d1c45be880455534e09a29", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a07b599ba48b5880b526718fe296c2bb409685147856c00b71839261a154e8f2", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9240ad75cba6bb2ef041f6111f1513485004792ffd44c451c3fdfdcdcad359f8", $context, $blocks));
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
                    <div class=\"row\">
                        <div class=\"col-lg-8\">                     
                        </div>
                        <div class=\"col-lg-4 text-right\">
                            <button class=\"btn btn-action\" id=\"enviar\" type=\"submit\">Generar</button>
                        </div>
                    </div>
                    ";
        // line 94
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
        
        $__internal_392ee8f9c2c5365efeca858874ee672d8c5f778473729d07203197bd15a426f0->leave($__internal_392ee8f9c2c5365efeca858874ee672d8c5f778473729d07203197bd15a426f0_prof);

    }

    // line 40
    public function block___internal_3825f740824354100a66183e1cc2190d4fd04b0904226598d5d722e2d94dbc0c($context, array $blocks = array())
    {
        $__internal_fd7711df5826beb1852d65d3cb3ac69c2e981760d6ab157972b2a24d84d1f677 = $this->env->getExtension("native_profiler");
        $__internal_fd7711df5826beb1852d65d3cb3ac69c2e981760d6ab157972b2a24d84d1f677->enter($__internal_fd7711df5826beb1852d65d3cb3ac69c2e981760d6ab157972b2a24d84d1f677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_3825f740824354100a66183e1cc2190d4fd04b0904226598d5d722e2d94dbc0c"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_fd7711df5826beb1852d65d3cb3ac69c2e981760d6ab157972b2a24d84d1f677->leave($__internal_fd7711df5826beb1852d65d3cb3ac69c2e981760d6ab157972b2a24d84d1f677_prof);

    }

    // line 45
    public function block___internal_4a20eb5c75623153bae8d88d1eed02f17a4e17ca1061bc11158fcc90b6159715($context, array $blocks = array())
    {
        $__internal_ac8cae97fa2cfda68adba8e6cff1148d843af809ef6c76db751952d9bfd429ea = $this->env->getExtension("native_profiler");
        $__internal_ac8cae97fa2cfda68adba8e6cff1148d843af809ef6c76db751952d9bfd429ea->enter($__internal_ac8cae97fa2cfda68adba8e6cff1148d843af809ef6c76db751952d9bfd429ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_4a20eb5c75623153bae8d88d1eed02f17a4e17ca1061bc11158fcc90b6159715"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_ac8cae97fa2cfda68adba8e6cff1148d843af809ef6c76db751952d9bfd429ea->leave($__internal_ac8cae97fa2cfda68adba8e6cff1148d843af809ef6c76db751952d9bfd429ea_prof);

    }

    // line 50
    public function block___internal_edc95d46101af0598ba1023cc95bb378698dd0be9d80caff0143f7d50b480f80($context, array $blocks = array())
    {
        $__internal_b4f7c58abc7b62829060bf21cd7ce6e0fa695109c3a1b48d47fe60d784c2c252 = $this->env->getExtension("native_profiler");
        $__internal_b4f7c58abc7b62829060bf21cd7ce6e0fa695109c3a1b48d47fe60d784c2c252->enter($__internal_b4f7c58abc7b62829060bf21cd7ce6e0fa695109c3a1b48d47fe60d784c2c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_edc95d46101af0598ba1023cc95bb378698dd0be9d80caff0143f7d50b480f80"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_b4f7c58abc7b62829060bf21cd7ce6e0fa695109c3a1b48d47fe60d784c2c252->leave($__internal_b4f7c58abc7b62829060bf21cd7ce6e0fa695109c3a1b48d47fe60d784c2c252_prof);

    }

    // line 55
    public function block___internal_524d6297c7e45444df403069626622e190b2ed7ac86746f5726144c10f0efa8b($context, array $blocks = array())
    {
        $__internal_9c8fba10cc6adf24cbc2870de664ffea5006fa53d1cba51e3107e9c6f683f5bc = $this->env->getExtension("native_profiler");
        $__internal_9c8fba10cc6adf24cbc2870de664ffea5006fa53d1cba51e3107e9c6f683f5bc->enter($__internal_9c8fba10cc6adf24cbc2870de664ffea5006fa53d1cba51e3107e9c6f683f5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_524d6297c7e45444df403069626622e190b2ed7ac86746f5726144c10f0efa8b"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_9c8fba10cc6adf24cbc2870de664ffea5006fa53d1cba51e3107e9c6f683f5bc->leave($__internal_9c8fba10cc6adf24cbc2870de664ffea5006fa53d1cba51e3107e9c6f683f5bc_prof);

    }

    // line 60
    public function block___internal_0de2605d5bab0a38b5cb570ead8c79755dfaa97224d1c45be880455534e09a29($context, array $blocks = array())
    {
        $__internal_44e1e327c8508922ad56859c0b83e39ae79ae2b9ec62e052bd1e6ff6cfaa4680 = $this->env->getExtension("native_profiler");
        $__internal_44e1e327c8508922ad56859c0b83e39ae79ae2b9ec62e052bd1e6ff6cfaa4680->enter($__internal_44e1e327c8508922ad56859c0b83e39ae79ae2b9ec62e052bd1e6ff6cfaa4680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0de2605d5bab0a38b5cb570ead8c79755dfaa97224d1c45be880455534e09a29"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_44e1e327c8508922ad56859c0b83e39ae79ae2b9ec62e052bd1e6ff6cfaa4680->leave($__internal_44e1e327c8508922ad56859c0b83e39ae79ae2b9ec62e052bd1e6ff6cfaa4680_prof);

    }

    // line 65
    public function block___internal_a07b599ba48b5880b526718fe296c2bb409685147856c00b71839261a154e8f2($context, array $blocks = array())
    {
        $__internal_ad0669b6778bb7dccff8abe9f6fa60d78e8d466ff0b20485d92bad58b2b46f3a = $this->env->getExtension("native_profiler");
        $__internal_ad0669b6778bb7dccff8abe9f6fa60d78e8d466ff0b20485d92bad58b2b46f3a->enter($__internal_ad0669b6778bb7dccff8abe9f6fa60d78e8d466ff0b20485d92bad58b2b46f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a07b599ba48b5880b526718fe296c2bb409685147856c00b71839261a154e8f2"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_ad0669b6778bb7dccff8abe9f6fa60d78e8d466ff0b20485d92bad58b2b46f3a->leave($__internal_ad0669b6778bb7dccff8abe9f6fa60d78e8d466ff0b20485d92bad58b2b46f3a_prof);

    }

    // line 70
    public function block___internal_9240ad75cba6bb2ef041f6111f1513485004792ffd44c451c3fdfdcdcad359f8($context, array $blocks = array())
    {
        $__internal_847bdbbb8dc41bc84d835f1d29794dbb8e684b64fceaec7f873fc4463a1370ad = $this->env->getExtension("native_profiler");
        $__internal_847bdbbb8dc41bc84d835f1d29794dbb8e684b64fceaec7f873fc4463a1370ad->enter($__internal_847bdbbb8dc41bc84d835f1d29794dbb8e684b64fceaec7f873fc4463a1370ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9240ad75cba6bb2ef041f6111f1513485004792ffd44c451c3fdfdcdcad359f8"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_847bdbbb8dc41bc84d835f1d29794dbb8e684b64fceaec7f873fc4463a1370ad->leave($__internal_847bdbbb8dc41bc84d835f1d29794dbb8e684b64fceaec7f873fc4463a1370ad_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9340a441a9925e9f171c91b5e45edf135a932b2cd8f5364d0aba414be23e3711 = $this->env->getExtension("native_profiler");
        $__internal_9340a441a9925e9f171c91b5e45edf135a932b2cd8f5364d0aba414be23e3711->enter($__internal_9340a441a9925e9f171c91b5e45edf135a932b2cd8f5364d0aba414be23e3711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
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
        
        function eventoSelectLibro(){
            \$(\"select[id\$='libro']\").change(function () {
                \$(this).closest(\"form\").hide();
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
        
        $__internal_9340a441a9925e9f171c91b5e45edf135a932b2cd8f5364d0aba414be23e3711->leave($__internal_9340a441a9925e9f171c91b5e45edf135a932b2cd8f5364d0aba414be23e3711_prof);

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
        return array (  332 => 123,  326 => 122,  316 => 71,  310 => 70,  300 => 66,  294 => 65,  284 => 61,  278 => 60,  268 => 56,  262 => 55,  252 => 51,  246 => 50,  236 => 46,  230 => 45,  220 => 41,  214 => 40,  180 => 94,  156 => 72,  154 => 70,  149 => 67,  147 => 65,  142 => 62,  140 => 60,  135 => 57,  133 => 55,  128 => 52,  126 => 50,  121 => 47,  119 => 45,  114 => 42,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
