<?php

/* UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig */
class __TwigTemplate_fe47199c13ace6e2305c8fbeaa81a3b5c0dbc782759eea44e61bb4d1afae9f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig", 1);
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
        $__internal_7f741e2829e92d6949264f1f3c172c648fcbe3c48f59b544004ac250be91840c = $this->env->getExtension("native_profiler");
        $__internal_7f741e2829e92d6949264f1f3c172c648fcbe3c48f59b544004ac250be91840c->enter($__internal_7f741e2829e92d6949264f1f3c172c648fcbe3c48f59b544004ac250be91840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f741e2829e92d6949264f1f3c172c648fcbe3c48f59b544004ac250be91840c->leave($__internal_7f741e2829e92d6949264f1f3c172c648fcbe3c48f59b544004ac250be91840c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_772709dad4c438133d4c1dce84ff6e3478dbf15056b365c7d465c4c1958b6c8b = $this->env->getExtension("native_profiler");
        $__internal_772709dad4c438133d4c1dce84ff6e3478dbf15056b365c7d465c4c1958b6c8b->enter($__internal_772709dad4c438133d4c1dce84ff6e3478dbf15056b365c7d465c4c1958b6c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_772709dad4c438133d4c1dce84ff6e3478dbf15056b365c7d465c4c1958b6c8b->leave($__internal_772709dad4c438133d4c1dce84ff6e3478dbf15056b365c7d465c4c1958b6c8b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_de5e1bb5d1f8956efd8320fcbd65235b890ca5cc24bf75d90559d0b77868f406 = $this->env->getExtension("native_profiler");
        $__internal_de5e1bb5d1f8956efd8320fcbd65235b890ca5cc24bf75d90559d0b77868f406->enter($__internal_de5e1bb5d1f8956efd8320fcbd65235b890ca5cc24bf75d90559d0b77868f406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Preguntas</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Criterios de preguntas</h1>
                </header>
                <br>

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"col-sm-6\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    <p class=\"text-center text-muted\">Criterios de libro</p>
                                    <form action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                        <div class=\"row top-margin\">
                                            <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'label');
        echo "
                                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'errors');
        echo "
                                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row top-margin\">
                                            <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'label');
        echo "
                                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'errors');
        echo "
                                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                    </form>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 56
        if (((isset($context["espmbok"]) ? $context["espmbok"] : $this->getContext($context, "espmbok")) == 1)) {
            // line 57
            echo "                                <div class=\"panel panel-default\">
                                    <div class=\"panel-body\">
                                        <p class=\"text-center text-muted\">Criterios de PMBok</p>

                                        <br><br>
                                    </div>
                                </div>
                            ";
        }
        // line 65
        echo "                        </div>
                    </div>
                </div>

            </article>
            <!-- /Article -->
        </div>
        </br></br>
        <div class=\"row\">

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br><br>
            <div class=\"aleta\">
                <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                    <thead>
                        <tr>
                            <th style=\"border-right:0;\" data-toggle=\"true\">
                                Titulo
                            </th>
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody> 
                        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 93
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo " </td>
                                <td><a href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"#\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                    </tbody>
                </table>
            </div>
            </br></br>

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_de5e1bb5d1f8956efd8320fcbd65235b890ca5cc24bf75d90559d0b77868f406->leave($__internal_de5e1bb5d1f8956efd8320fcbd65235b890ca5cc24bf75d90559d0b77868f406_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b509ac7e7afb51afd9a0337b45530c7c3910d097d262042022df3f622ead0cca = $this->env->getExtension("native_profiler");
        $__internal_b509ac7e7afb51afd9a0337b45530c7c3910d097d262042022df3f622ead0cca->enter($__internal_b509ac7e7afb51afd9a0337b45530c7c3910d097d262042022df3f622ead0cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">


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
        
        $__internal_b509ac7e7afb51afd9a0337b45530c7c3910d097d262042022df3f622ead0cca->leave($__internal_b509ac7e7afb51afd9a0337b45530c7c3910d097d262042022df3f622ead0cca_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  212 => 111,  196 => 100,  184 => 94,  181 => 93,  177 => 92,  148 => 65,  138 => 57,  136 => 56,  126 => 49,  120 => 46,  116 => 45,  112 => 44,  104 => 39,  100 => 38,  96 => 37,  90 => 34,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
