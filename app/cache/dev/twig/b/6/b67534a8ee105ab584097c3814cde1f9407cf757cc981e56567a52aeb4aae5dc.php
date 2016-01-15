<?php

/* UciAdministradorBundle:VistaObservacion:verObservacion.html.twig */
class __TwigTemplate_b67534a8ee105ab584097c3814cde1f9407cf757cc981e56567a52aeb4aae5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaObservacion:verObservacion.html.twig", 1);
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
        $__internal_9bc46bc2408ad77f98b845be7ff2693ce50257a6012ec4bb299b4f540a03913b = $this->env->getExtension("native_profiler");
        $__internal_9bc46bc2408ad77f98b845be7ff2693ce50257a6012ec4bb299b4f540a03913b->enter($__internal_9bc46bc2408ad77f98b845be7ff2693ce50257a6012ec4bb299b4f540a03913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaObservacion:verObservacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bc46bc2408ad77f98b845be7ff2693ce50257a6012ec4bb299b4f540a03913b->leave($__internal_9bc46bc2408ad77f98b845be7ff2693ce50257a6012ec4bb299b4f540a03913b_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ecd0ba1a43e7cc30a9cada5e0a83197574cbb2d7c68fae283ae800567b788224 = $this->env->getExtension("native_profiler");
        $__internal_ecd0ba1a43e7cc30a9cada5e0a83197574cbb2d7c68fae283ae800567b788224->enter($__internal_ecd0ba1a43e7cc30a9cada5e0a83197574cbb2d7c68fae283ae800567b788224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_ecd0ba1a43e7cc30a9cada5e0a83197574cbb2d7c68fae283ae800567b788224->leave($__internal_ecd0ba1a43e7cc30a9cada5e0a83197574cbb2d7c68fae283ae800567b788224_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3636076c5718ba6bd5acbfa91af919eabe4cac647db885d5b971187d8b852fc3 = $this->env->getExtension("native_profiler");
        $__internal_3636076c5718ba6bd5acbfa91af919eabe4cac647db885d5b971187d8b852fc3->enter($__internal_3636076c5718ba6bd5acbfa91af919eabe4cac647db885d5b971187d8b852fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceobservaciones");
        echo "\">Listado de Observaciones</a></li>
            <li class=\"active\">Ver Observación</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoObservacion.html.twig", "UciAdministradorBundle:VistaObservacion:verObservacion.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Ver observación</h1>
                </header>
                <br>
                <div id=\"alert_placeholder\"> </div>
                <div class=\"row\">
                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                        <h4><label>Cuestionario:  </label>
                            ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuestionarioname", array()), "html", null, true);
        echo "</h4>
                    </div>
                </div>
                <div class=\"row top-margin\">
                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                        <h4> <label>Curso:  </label>
                            ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "curso", array()), "html", null, true);
        echo "</h4>
                    </div>
                </div>
                <div class=\"row top-margin\">
                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                        <h4><label>Cant. de preguntas:  </label>
                            ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cantidadPreguntas", array()), "html", null, true);
        echo "</h4>
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
                            Preguntas del cuestionario ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuestionarioname", array()), "html", null, true);
        echo "
                        </th>
                        <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                    </tr>
                </thead>
                <tbody> 
                    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntasComentario"]) ? $context["preguntasComentario"] : $this->getContext($context, "preguntasComentario")));
        foreach ($context['_seq'] as $context["_key"] => $context["preguntaComentario"]) {
            // line 71
            echo "                        <tr>
                            <td style=\"border-right:0;\" class=\"primera-columna\"><b>Pregunta ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "id", array()), "html", null, true);
            echo ": </b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "titulo", array()), "html", null, true);
            echo " </td>
                            <td>&nbsp;&nbsp;<a href=\"\" ><span class=\"glyphicon glyphicon-pencil\"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_removerPreguntaObservacion", array("idPregunta" => $this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "id", array()), "idCuestionario" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                ";
            // line 79
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "respuesta", array()))) {
                // line 80
                echo "                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "respuesta", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
                    // line 81
                    echo "                                        ";
                    if ( !twig_test_empty($this->getAttribute($context["respuesta"], "textoRespuesta", array()))) {
                        // line 82
                        echo "                                            <div class=\"alert alert-info\">
                                                <br><b>Respuesta: </b>";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRespuesta", array()), "html", null, true);
                        echo "<br>
                                            </div>
                                            ";
                        // line 85
                        if ( !twig_test_empty($this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()))) {
                            // line 86
                            echo "                                                <div class=\"alert alert-warning\">
                                                    <b>Retroalimentación: </b>";
                            // line 87
                            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()), "html", null, true);
                            echo "<br>
                                                </div>
                                            ";
                        }
                        // line 90
                        echo "                                        ";
                    } else {
                        // line 91
                        echo "                                            ";
                        if (($this->getAttribute($context["respuesta"], "correcta", array()) == 0)) {
                            // line 92
                            echo "                                                <div class=\"alert alert-info\">
                                                    <b>Respuesta: </b>Falso<br>
                                                </div>
                                            ";
                        } else {
                            // line 96
                            echo "                                                <div class=\"alert alert-info\">
                                                    <b>Respuesta: </b>Verdadero<br>
                                                </div>
                                            ";
                        }
                        // line 100
                        echo "                                            ";
                        if ( !twig_test_empty($this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()))) {
                            // line 101
                            echo "                                                <div class=\"alert alert-warning\">
                                                    <b>Retroalimentación: </b>";
                            // line 102
                            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()), "html", null, true);
                            echo "<br>
                                                </div>
                                            ";
                        }
                        // line 105
                        echo "                                        ";
                    }
                    // line 106
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                                ";
            } else {
                // line 108
                echo "                                    <div class=\"alert alert-danger\">
                                        Este tipo de preguntas no tiene opciones de respuestas
                                    </div>
                                    <br>
                                ";
            }
            // line 113
            echo "                                <br><br>
                                ";
            // line 114
            if ( !twig_test_empty($this->getAttribute($context["preguntaComentario"], "comentario", array()))) {
                // line 115
                echo "                                    <input type=\"text\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["preguntaComentario"], "comentario", array()), "html", null, true);
                echo "\" class=\"form-control\" placeholder=\"Comentario para la asistente\" rows=\"3\" readonly>
                                    <br><br>
                                ";
            }
            // line 118
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preguntaComentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </tbody>
            </table>
            <br><br>
        </div>
    </form>
</div>\t<!-- /container -->

";
        
        $__internal_3636076c5718ba6bd5acbfa91af919eabe4cac647db885d5b971187d8b852fc3->leave($__internal_3636076c5718ba6bd5acbfa91af919eabe4cac647db885d5b971187d8b852fc3_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90eb5e566e588c80d8d962d8ebd67f5b0e91cd66351bb428fc0d4d8dea6405ae = $this->env->getExtension("native_profiler");
        $__internal_90eb5e566e588c80d8d962d8ebd67f5b0e91cd66351bb428fc0d4d8dea6405ae->enter($__internal_90eb5e566e588c80d8d962d8ebd67f5b0e91cd66351bb428fc0d4d8dea6405ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function alertTimeout(wait) {
            setTimeout(function () {
                \$('#alert_placeholder').children('.alert:first-child').remove();
            }, wait);
        }

        document.ready = function () {

            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            });
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
        
        $__internal_90eb5e566e588c80d8d962d8ebd67f5b0e91cd66351bb428fc0d4d8dea6405ae->leave($__internal_90eb5e566e588c80d8d962d8ebd67f5b0e91cd66351bb428fc0d4d8dea6405ae_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaObservacion:verObservacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 131,  277 => 130,  263 => 121,  255 => 118,  246 => 115,  244 => 114,  241 => 113,  234 => 108,  231 => 107,  225 => 106,  222 => 105,  216 => 102,  213 => 101,  210 => 100,  204 => 96,  198 => 92,  195 => 91,  192 => 90,  186 => 87,  183 => 86,  181 => 85,  176 => 83,  173 => 82,  170 => 81,  165 => 80,  163 => 79,  155 => 74,  148 => 72,  145 => 71,  141 => 70,  132 => 64,  109 => 44,  100 => 38,  91 => 32,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
