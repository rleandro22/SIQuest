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
        $__internal_58988f11210ed3d50e8b04a93e2d2ddcad63d8823c2db19f8f885731646e0cc9 = $this->env->getExtension("native_profiler");
        $__internal_58988f11210ed3d50e8b04a93e2d2ddcad63d8823c2db19f8f885731646e0cc9->enter($__internal_58988f11210ed3d50e8b04a93e2d2ddcad63d8823c2db19f8f885731646e0cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58988f11210ed3d50e8b04a93e2d2ddcad63d8823c2db19f8f885731646e0cc9->leave($__internal_58988f11210ed3d50e8b04a93e2d2ddcad63d8823c2db19f8f885731646e0cc9_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_97e1ee9ed26e7d31c6c3efadbe2fe1e56769c0e93dc364f8d9a8aa7310016495 = $this->env->getExtension("native_profiler");
        $__internal_97e1ee9ed26e7d31c6c3efadbe2fe1e56769c0e93dc364f8d9a8aa7310016495->enter($__internal_97e1ee9ed26e7d31c6c3efadbe2fe1e56769c0e93dc364f8d9a8aa7310016495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_97e1ee9ed26e7d31c6c3efadbe2fe1e56769c0e93dc364f8d9a8aa7310016495->leave($__internal_97e1ee9ed26e7d31c6c3efadbe2fe1e56769c0e93dc364f8d9a8aa7310016495_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ce7e44f10585ee97ec68579943303e03a6312aa080cd3458147af3271a48e2c = $this->env->getExtension("native_profiler");
        $__internal_0ce7e44f10585ee97ec68579943303e03a6312aa080cd3458147af3271a48e2c->enter($__internal_0ce7e44f10585ee97ec68579943303e03a6312aa080cd3458147af3271a48e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"row top-margin\">
                                <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'label');
        echo "
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'errors');
        echo "
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                                </div>
                            </div>
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </form>
                        <br><br>
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
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 68
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 69
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
        // line 75
        echo "
                    </tbody>
                </table>
            </div>
            </br></br>

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_0ce7e44f10585ee97ec68579943303e03a6312aa080cd3458147af3271a48e2c->leave($__internal_0ce7e44f10585ee97ec68579943303e03a6312aa080cd3458147af3271a48e2c_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d74d265441497589727868d9272e2ceb5b8287bd07d7f7f1ab3f3493381be81 = $this->env->getExtension("native_profiler");
        $__internal_7d74d265441497589727868d9272e2ceb5b8287bd07d7f7f1ab3f3493381be81->enter($__internal_7d74d265441497589727868d9272e2ceb5b8287bd07d7f7f1ab3f3493381be81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
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
        
        $__internal_7d74d265441497589727868d9272e2ceb5b8287bd07d7f7f1ab3f3493381be81->leave($__internal_7d74d265441497589727868d9272e2ceb5b8287bd07d7f7f1ab3f3493381be81_prof);

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
        return array (  179 => 87,  173 => 86,  157 => 75,  145 => 69,  142 => 68,  138 => 67,  106 => 38,  100 => 35,  96 => 34,  92 => 33,  86 => 30,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
