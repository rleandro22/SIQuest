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
        $__internal_a7b397d077d37d652037ed739d7686bf7a2d860bcc21f220c15ce9f4cbc3a329 = $this->env->getExtension("native_profiler");
        $__internal_a7b397d077d37d652037ed739d7686bf7a2d860bcc21f220c15ce9f4cbc3a329->enter($__internal_a7b397d077d37d652037ed739d7686bf7a2d860bcc21f220c15ce9f4cbc3a329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b397d077d37d652037ed739d7686bf7a2d860bcc21f220c15ce9f4cbc3a329->leave($__internal_a7b397d077d37d652037ed739d7686bf7a2d860bcc21f220c15ce9f4cbc3a329_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_75812c8bc0e7a0b872694e43b665f0f013b223caf921bdd650a641d58b2a8674 = $this->env->getExtension("native_profiler");
        $__internal_75812c8bc0e7a0b872694e43b665f0f013b223caf921bdd650a641d58b2a8674->enter($__internal_75812c8bc0e7a0b872694e43b665f0f013b223caf921bdd650a641d58b2a8674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_75812c8bc0e7a0b872694e43b665f0f013b223caf921bdd650a641d58b2a8674->leave($__internal_75812c8bc0e7a0b872694e43b665f0f013b223caf921bdd650a641d58b2a8674_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ee6a4721f30e3d3190f09ff974a9881c62404ee4ae6c04d97841871f84eb82 = $this->env->getExtension("native_profiler");
        $__internal_04ee6a4721f30e3d3190f09ff974a9881c62404ee4ae6c04d97841871f84eb82->enter($__internal_04ee6a4721f30e3d3190f09ff974a9881c62404ee4ae6c04d97841871f84eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_ver_cuestionario", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" id=\"formularioCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"row\">
                <!-- Sidebar -->
                <aside class=\"col-md-4 sidebar sidebar-left\">
                    ";
        // line 20
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig", 20)->display($context);
        // line 21
        echo "                </aside>
                <!-- /Sidebar -->
                <!-- Article main content -->
                <article class=\"col-sm-8 maincontent\">
                    <header class=\"page-header\">
                        <h1 class=\"page-title\">Generar cuestionarios</h1>
                    </header>
                    <br>

                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuestionarioname", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadPreguntas", array()), 'row');
        echo "
                        </div>
                    </div>
                    <br><br><br>
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
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 69
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 70
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["pregunta"], "titulo", array())), "html", null, true);
            echo " </td>
                                <td>&nbsp;&nbsp;<a href=\"";
            // line 71
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
        // line 76
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
                    <button class=\"btn btn-action\" id=\"generar\" type=\"submit\">Generar</button>
                </div>
            </div>
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>\t<!-- /container -->

";
        
        $__internal_04ee6a4721f30e3d3190f09ff974a9881c62404ee4ae6c04d97841871f84eb82->leave($__internal_04ee6a4721f30e3d3190f09ff974a9881c62404ee4ae6c04d97841871f84eb82_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a691c3f8f00dd70b6d81686a9fe53cbfb20058f00498b36f67cdb4b1b07b216 = $this->env->getExtension("native_profiler");
        $__internal_1a691c3f8f00dd70b6d81686a9fe53cbfb20058f00498b36f67cdb4b1b07b216->enter($__internal_1a691c3f8f00dd70b6d81686a9fe53cbfb20058f00498b36f67cdb4b1b07b216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
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
        
        $__internal_1a691c3f8f00dd70b6d81686a9fe53cbfb20058f00498b36f67cdb4b1b07b216->leave($__internal_1a691c3f8f00dd70b6d81686a9fe53cbfb20058f00498b36f67cdb4b1b07b216_prof);

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
        return array (  194 => 96,  188 => 95,  176 => 89,  161 => 76,  150 => 71,  146 => 70,  143 => 69,  139 => 68,  110 => 42,  102 => 37,  94 => 32,  81 => 21,  79 => 20,  72 => 16,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
