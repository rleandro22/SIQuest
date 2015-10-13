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
        $__internal_101d9cbbb3e7eac2155a4705c87bdfed606ac506a8b092973288021f1e4fd8a5 = $this->env->getExtension("native_profiler");
        $__internal_101d9cbbb3e7eac2155a4705c87bdfed606ac506a8b092973288021f1e4fd8a5->enter($__internal_101d9cbbb3e7eac2155a4705c87bdfed606ac506a8b092973288021f1e4fd8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101d9cbbb3e7eac2155a4705c87bdfed606ac506a8b092973288021f1e4fd8a5->leave($__internal_101d9cbbb3e7eac2155a4705c87bdfed606ac506a8b092973288021f1e4fd8a5_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_95501e64fb2bb378b01e4d3ab4d4ac64609b19ee5e185d2eae1b37999cd46347 = $this->env->getExtension("native_profiler");
        $__internal_95501e64fb2bb378b01e4d3ab4d4ac64609b19ee5e185d2eae1b37999cd46347->enter($__internal_95501e64fb2bb378b01e4d3ab4d4ac64609b19ee5e185d2eae1b37999cd46347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_95501e64fb2bb378b01e4d3ab4d4ac64609b19ee5e185d2eae1b37999cd46347->leave($__internal_95501e64fb2bb378b01e4d3ab4d4ac64609b19ee5e185d2eae1b37999cd46347_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c7598f7e19f344483ed4e554318fa1d249ea2a294e008bd28a8c5c532222ceb = $this->env->getExtension("native_profiler");
        $__internal_1c7598f7e19f344483ed4e554318fa1d249ea2a294e008bd28a8c5c532222ceb->enter($__internal_1c7598f7e19f344483ed4e554318fa1d249ea2a294e008bd28a8c5c532222ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 67
            echo "                        <tr>
                            <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 68
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
        // line 74
        echo "
                </tbody>
            </table>
            </br></br>

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_1c7598f7e19f344483ed4e554318fa1d249ea2a294e008bd28a8c5c532222ceb->leave($__internal_1c7598f7e19f344483ed4e554318fa1d249ea2a294e008bd28a8c5c532222ceb_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ea729c0c8bc5ea38c0a9c434da61d950372f99ac4bd39da7978fec6674cbed9 = $this->env->getExtension("native_profiler");
        $__internal_4ea729c0c8bc5ea38c0a9c434da61d950372f99ac4bd39da7978fec6674cbed9->enter($__internal_4ea729c0c8bc5ea38c0a9c434da61d950372f99ac4bd39da7978fec6674cbed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
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
        
        $__internal_4ea729c0c8bc5ea38c0a9c434da61d950372f99ac4bd39da7978fec6674cbed9->leave($__internal_4ea729c0c8bc5ea38c0a9c434da61d950372f99ac4bd39da7978fec6674cbed9_prof);

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
        return array (  177 => 85,  171 => 84,  156 => 74,  144 => 68,  141 => 67,  137 => 66,  106 => 38,  100 => 35,  96 => 34,  92 => 33,  86 => 30,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
