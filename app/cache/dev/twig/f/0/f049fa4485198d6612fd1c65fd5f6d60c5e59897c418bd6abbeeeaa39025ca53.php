<?php

/* UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig */
class __TwigTemplate_f049fa4485198d6612fd1c65fd5f6d60c5e59897c418bd6abbeeeaa39025ca53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e95e56d5bdb388f1cafe230828734bbdc27a5e2f5066f2ac9a85bb00890467f3 = $this->env->getExtension("native_profiler");
        $__internal_e95e56d5bdb388f1cafe230828734bbdc27a5e2f5066f2ac9a85bb00890467f3->enter($__internal_e95e56d5bdb388f1cafe230828734bbdc27a5e2f5066f2ac9a85bb00890467f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e95e56d5bdb388f1cafe230828734bbdc27a5e2f5066f2ac9a85bb00890467f3->leave($__internal_e95e56d5bdb388f1cafe230828734bbdc27a5e2f5066f2ac9a85bb00890467f3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ccdc60b63e5bce8b2e352e2b95e10fcdf711b136dcc23066aefaad0d6d7423e2 = $this->env->getExtension("native_profiler");
        $__internal_ccdc60b63e5bce8b2e352e2b95e10fcdf711b136dcc23066aefaad0d6d7423e2->enter($__internal_ccdc60b63e5bce8b2e352e2b95e10fcdf711b136dcc23066aefaad0d6d7423e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_ccdc60b63e5bce8b2e352e2b95e10fcdf711b136dcc23066aefaad0d6d7423e2->leave($__internal_ccdc60b63e5bce8b2e352e2b95e10fcdf711b136dcc23066aefaad0d6d7423e2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f34c817f379d9f28b8b3ee223c6a7d5219a1e0ef8368576b6ae1546309572e2 = $this->env->getExtension("native_profiler");
        $__internal_0f34c817f379d9f28b8b3ee223c6a7d5219a1e0ef8368576b6ae1546309572e2->enter($__internal_0f34c817f379d9f28b8b3ee223c6a7d5219a1e0ef8368576b6ae1546309572e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Listado de Preguntas</a></li>
            <li class=\"active\">Registrar pregunta</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Nueva pregunta</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h3 class=\"thin text-center\">Registrar una nueva pregunta ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "nombre", array()), "html", null, true);
        echo "</h3>
                            <p class=\"text-center text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "explicacion", array()), "html", null, true);
        echo "</p>
                            <hr>

                            ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "                                <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                            ";
        }
        // line 40
        echo "
                            <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_registrarPregunta", array("idTipoRespuesta" => $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'label');
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "<br>
                                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'label');
        echo "
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'errors');
        echo "
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'label');
        echo "
                                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'errors');
        echo "
                                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'label');
        echo "
                                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'errors');
        echo "
                                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'label');
        echo "
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'errors');
        echo "
                                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'label');
        echo "
                                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'errors');
        echo "
                                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <br>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), 'label');
        echo "
                                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), 'errors');
        echo "
                                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        <a href=\"#\" onclick=\"add();\">Agregar pregunta</a>
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">                     
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Registrar</button>
                                    </div>
                                </div>
                                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </form>

                        </div>
                    </div>

                </div>


                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_0f34c817f379d9f28b8b3ee223c6a7d5219a1e0ef8368576b6ae1546309572e2->leave($__internal_0f34c817f379d9f28b8b3ee223c6a7d5219a1e0ef8368576b6ae1546309572e2_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f11b4129b44cf220a31a96ba53e93c3cbe6579e0d222d244deae59683346f9e9 = $this->env->getExtension("native_profiler");
        $__internal_f11b4129b44cf220a31a96ba53e93c3cbe6579e0d222d244deae59683346f9e9->enter($__internal_f11b4129b44cf220a31a96ba53e93c3cbe6579e0d222d244deae59683346f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function add() {
            var collectionHolder = \$('#uci_bundle_basedatosbundle_pregunta_respuesta');
            var prototype = collectionHolder.attr('data-prototype');
            form = prototype.replace(/__name__label__/g, 'Pregunta '+collectionHolder.children().length+1);
            collectionHolder.append(form);
        }

        document.ready = function () {

            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            }
            );

            \$('body').on('hidden.bs.modal', '.modal', function () {
                \$('.modal-content', this).empty();
                \$(this).removeData('bs.modal');
            });

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
        
        $__internal_f11b4129b44cf220a31a96ba53e93c3cbe6579e0d222d244deae59683346f9e9->leave($__internal_f11b4129b44cf220a31a96ba53e93c3cbe6579e0d222d244deae59683346f9e9_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 123,  266 => 122,  243 => 105,  224 => 89,  220 => 88,  216 => 87,  207 => 81,  203 => 80,  199 => 79,  191 => 74,  187 => 73,  183 => 72,  175 => 67,  171 => 66,  167 => 65,  159 => 60,  155 => 59,  151 => 58,  143 => 53,  139 => 52,  135 => 51,  127 => 46,  123 => 45,  119 => 44,  113 => 41,  110 => 40,  104 => 38,  102 => 37,  96 => 34,  92 => 33,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
