<?php

/* UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig */
class __TwigTemplate_4c5c8b7d6dec60bc956f78573cf186ae7a8fed0aa74a174e9624bc5940d01689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciProfesorBundle::base.html.twig", "UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciProfesorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e06ef8a3fd25f6d192b03059ec63b100ccc1cda0db64d7c4624ad301516b737c = $this->env->getExtension("native_profiler");
        $__internal_e06ef8a3fd25f6d192b03059ec63b100ccc1cda0db64d7c4624ad301516b737c->enter($__internal_e06ef8a3fd25f6d192b03059ec63b100ccc1cda0db64d7c4624ad301516b737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e06ef8a3fd25f6d192b03059ec63b100ccc1cda0db64d7c4624ad301516b737c->leave($__internal_e06ef8a3fd25f6d192b03059ec63b100ccc1cda0db64d7c4624ad301516b737c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ed7a6de1c808983b0ed36014b63a43addada8cbae11d04327ec1a424abf6d3fa = $this->env->getExtension("native_profiler");
        $__internal_ed7a6de1c808983b0ed36014b63a43addada8cbae11d04327ec1a424abf6d3fa->enter($__internal_ed7a6de1c808983b0ed36014b63a43addada8cbae11d04327ec1a424abf6d3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_ed7a6de1c808983b0ed36014b63a43addada8cbae11d04327ec1a424abf6d3fa->leave($__internal_ed7a6de1c808983b0ed36014b63a43addada8cbae11d04327ec1a424abf6d3fa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_98a667209a1852d9d0c70289508f7eaa05d72e60afdab929cc5afabf243f10eb = $this->env->getExtension("native_profiler");
        $__internal_98a667209a1852d9d0c70289508f7eaa05d72e60afdab929cc5afabf243f10eb->enter($__internal_98a667209a1852d9d0c70289508f7eaa05d72e60afdab929cc5afabf243f10eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_profesor_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
        echo "\">Listado de Cuestionarios</a></li>
            <li class=\"active\">Ver Cuestionario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig", "UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Ver cuestionario</h1>
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
                    </tr>
                </thead>
                <tbody> 
                    ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntasComentario"]) ? $context["preguntasComentario"] : $this->getContext($context, "preguntasComentario")));
        foreach ($context['_seq'] as $context["_key"] => $context["preguntaComentario"]) {
            // line 70
            echo "                        <tr>
                            <td style=\"border-right:0;\" class=\"primera-columna\"><b>Pregunta ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "id", array()), "html", null, true);
            echo ": </b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "titulo", array()), "html", null, true);
            echo " </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                ";
            // line 75
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "respuesta", array()))) {
                // line 76
                echo "                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "respuesta", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
                    // line 77
                    echo "                                        ";
                    if ( !twig_test_empty($this->getAttribute($context["respuesta"], "textoRespuesta", array()))) {
                        // line 78
                        echo "                                            <div class=\"alert alert-info\">
                                                <br><b>Respuesta: </b>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRespuesta", array()), "html", null, true);
                        echo "<br>
                                            </div>
                                            ";
                        // line 81
                        if ( !twig_test_empty($this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()))) {
                            // line 82
                            echo "                                                <div class=\"alert alert-warning\">
                                                    <b>Retroalimentación: </b>";
                            // line 83
                            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()), "html", null, true);
                            echo "<br>
                                                </div>
                                            ";
                        }
                        // line 86
                        echo "                                        ";
                    } else {
                        // line 87
                        echo "                                            ";
                        if (($this->getAttribute($context["respuesta"], "correcta", array()) == 0)) {
                            // line 88
                            echo "                                                <div class=\"alert alert-info\">
                                                    <b>Respuesta: </b>Falso<br>
                                                </div>
                                            ";
                        } else {
                            // line 92
                            echo "                                                <div class=\"alert alert-info\">
                                                    <b>Respuesta: </b>Verdadero<br>
                                                </div>
                                            ";
                        }
                        // line 96
                        echo "                                            ";
                        if ( !twig_test_empty($this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()))) {
                            // line 97
                            echo "                                                <div class=\"alert alert-warning\">
                                                    <b>Retroalimentación: </b>";
                            // line 98
                            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRetroalimentacion", array()), "html", null, true);
                            echo "<br>
                                                </div>
                                            ";
                        }
                        // line 101
                        echo "                                        ";
                    }
                    // line 102
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                                ";
            } else {
                // line 104
                echo "                                    <div class=\"alert alert-danger\">
                                        Este tipo de preguntas no tiene opciones de respuestas
                                    </div>
                                    <br>
                                ";
            }
            // line 109
            echo "                                <br><br>
                                <input type=\"text\" id=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preguntaComentario"], "pregunta", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["preguntaComentario"], "comentario", array()), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"Comentario para la asistente\" rows=\"3\">
                                <br><br>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preguntaComentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </tbody>
            </table>
            <br><br>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">                     
            </div>
            <div class=\"col-lg-1 text-right\"></div>
            <div class=\"col-lg-2 col-sm-4 text-right\">
                <button class=\"btn btn-action\" id=\"enviarObs\" type=\"button\">Enviar Observación</button> 
            </div>
        </div>
    </form>
</div>\t<!-- /container -->

";
        
        $__internal_98a667209a1852d9d0c70289508f7eaa05d72e60afdab929cc5afabf243f10eb->leave($__internal_98a667209a1852d9d0c70289508f7eaa05d72e60afdab929cc5afabf243f10eb_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5980e8dac3558bf19f7862e4014551d01c60be1e0075284acccce805fe8e0095 = $this->env->getExtension("native_profiler");
        $__internal_5980e8dac3558bf19f7862e4014551d01c60be1e0075284acccce805fe8e0095->enter($__internal_5980e8dac3558bf19f7862e4014551d01c60be1e0075284acccce805fe8e0095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
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

            \$('#enviarObs').click(function (e) {
                var idCuest
                = ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo ";
                        var commentArray = [];
                \$(\"input:text\").each(function () {
                    if (\$(this).val()) {
                        var comentario = {id: \$(this).attr('id'), texto: \$(this).val()};
                        commentArray.push(comentario);
                    }
                });
                if (commentArray.length > 0) {
                    \$.ajax({
                        url: \"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("uci_profesor_agregarComentarios");
        echo "\",
                        type: \"POST\",
                        data: {comentarios: commentArray, idCuestionario: idCuest},
                        success: function (data) {
                            if (data.resultado == 1) {
                                alert('Sus observaciones se enviaron correctamente.');
                            } else {
                                alert('Ocurrio un error');
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(JSON.stringify(thrownError));
                            alert('Ocurrio un error');
                        }
                    });
                }
            });

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
        
        $__internal_5980e8dac3558bf19f7862e4014551d01c60be1e0075284acccce805fe8e0095->leave($__internal_5980e8dac3558bf19f7862e4014551d01c60be1e0075284acccce805fe8e0095_prof);

    }

    public function getTemplateName()
    {
        return "UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 156,  295 => 146,  278 => 133,  272 => 132,  250 => 115,  237 => 110,  234 => 109,  227 => 104,  224 => 103,  218 => 102,  215 => 101,  209 => 98,  206 => 97,  203 => 96,  197 => 92,  191 => 88,  188 => 87,  185 => 86,  179 => 83,  176 => 82,  174 => 81,  169 => 79,  166 => 78,  163 => 77,  158 => 76,  156 => 75,  147 => 71,  144 => 70,  140 => 69,  132 => 64,  109 => 44,  100 => 38,  91 => 32,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
