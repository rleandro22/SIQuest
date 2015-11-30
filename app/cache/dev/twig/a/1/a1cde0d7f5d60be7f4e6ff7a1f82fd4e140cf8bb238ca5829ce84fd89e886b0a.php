<?php

/* UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig */
class __TwigTemplate_a1cde0d7f5d60be7f4e6ff7a1f82fd4e140cf8bb238ca5829ce84fd89e886b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig", 1);
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
        $__internal_6dce8dd3867d9b0bc721cad404330aae515503007053c1db43b48370e8ae828a = $this->env->getExtension("native_profiler");
        $__internal_6dce8dd3867d9b0bc721cad404330aae515503007053c1db43b48370e8ae828a->enter($__internal_6dce8dd3867d9b0bc721cad404330aae515503007053c1db43b48370e8ae828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dce8dd3867d9b0bc721cad404330aae515503007053c1db43b48370e8ae828a->leave($__internal_6dce8dd3867d9b0bc721cad404330aae515503007053c1db43b48370e8ae828a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7526479db2810d09bd0dfeeb9e592ead000647f53961f0f00d1275c606247dce = $this->env->getExtension("native_profiler");
        $__internal_7526479db2810d09bd0dfeeb9e592ead000647f53961f0f00d1275c606247dce->enter($__internal_7526479db2810d09bd0dfeeb9e592ead000647f53961f0f00d1275c606247dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_7526479db2810d09bd0dfeeb9e592ead000647f53961f0f00d1275c606247dce->leave($__internal_7526479db2810d09bd0dfeeb9e592ead000647f53961f0f00d1275c606247dce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e4fc1b835eaf5528b1e1574da092022b0d200ba3069395b465f2c3fc8bdc49 = $this->env->getExtension("native_profiler");
        $__internal_97e4fc1b835eaf5528b1e1574da092022b0d200ba3069395b465f2c3fc8bdc49->enter($__internal_97e4fc1b835eaf5528b1e1574da092022b0d200ba3069395b465f2c3fc8bdc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li class=\"active\">Ver Cuestionario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig", 19)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_ver_cuestionario", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        // line 53
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
            <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                <thead>
                    <tr>
                        <th style=\"border-right:0;\" data-toggle=\"true\">
                            Texto
                        </th>
                        <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                    </tr>
                </thead>
                <tbody> 
                    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 78
            echo "                        <tr>
                            <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 79
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["pregunta"], "titulo", array())), "html", null, true);
            echo " </td>
                            <td>&nbsp;&nbsp;<a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editarPregunta", array("idPregunta" => $this->getAttribute($context["pregunta"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href=\"\" class=\"speedbump\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pregunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
                </tbody>
            </table>
            <br><br>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8\">                     
            </div>
            <div class=\"col-lg-1 text-right\"></div>
            <div class=\"col-lg-2 text-right\">
                <button class=\"btn btn-action\" id=\"generar\" type=\"button\">Generar</button>
            </div>
        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_97e4fc1b835eaf5528b1e1574da092022b0d200ba3069395b465f2c3fc8bdc49->leave($__internal_97e4fc1b835eaf5528b1e1574da092022b0d200ba3069395b465f2c3fc8bdc49_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1aeb3d51cf4922e2c9f1de81d92c0ddd489640fe4c9d2edd8479b6435f27e496 = $this->env->getExtension("native_profiler");
        $__internal_1aeb3d51cf4922e2c9f1de81d92c0ddd489640fe4c9d2edd8479b6435f27e496->enter($__internal_1aeb3d51cf4922e2c9f1de81d92c0ddd489640fe4c9d2edd8479b6435f27e496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        document.ready = function () {

            \$('#generar').click(function (e) {
                var idCuestionario =";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "
                        ;
                        \$.ajax({
                            url: \"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("uci_administrador_generararchivocuestionario");
        echo "\",
                            type: \"POST\",
                            data: {idCuestionario: idCuestionario},
                            success: function (data) {
                                alert(JSON.stringify(data.resultado));
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert('Ocurrio un error');
                            }
                        });
            });
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
        
        $__internal_1aeb3d51cf4922e2c9f1de81d92c0ddd489640fe4c9d2edd8479b6435f27e496->leave($__internal_1aeb3d51cf4922e2c9f1de81d92c0ddd489640fe4c9d2edd8479b6435f27e496_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 113,  212 => 110,  202 => 104,  196 => 103,  173 => 85,  162 => 80,  158 => 79,  155 => 78,  151 => 77,  124 => 53,  109 => 41,  101 => 36,  93 => 31,  87 => 28,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
