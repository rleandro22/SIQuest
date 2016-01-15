<?php

/* UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig */
class __TwigTemplate_959372b766eb0e590b1c45ffb518c80c69248e807a64fdc551aaa6944479bff9 extends Twig_Template
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
        $__internal_01424115965eb7f070606b848efbbb0b8ccb33132ea80e087e20e77979ffbdd0 = $this->env->getExtension("native_profiler");
        $__internal_01424115965eb7f070606b848efbbb0b8ccb33132ea80e087e20e77979ffbdd0->enter($__internal_01424115965eb7f070606b848efbbb0b8ccb33132ea80e087e20e77979ffbdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01424115965eb7f070606b848efbbb0b8ccb33132ea80e087e20e77979ffbdd0->leave($__internal_01424115965eb7f070606b848efbbb0b8ccb33132ea80e087e20e77979ffbdd0_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_fcc01408015c11f041ac4c1e2d41fc192d14e08913144385e5f10b2c7493d161 = $this->env->getExtension("native_profiler");
        $__internal_fcc01408015c11f041ac4c1e2d41fc192d14e08913144385e5f10b2c7493d161->enter($__internal_fcc01408015c11f041ac4c1e2d41fc192d14e08913144385e5f10b2c7493d161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_fcc01408015c11f041ac4c1e2d41fc192d14e08913144385e5f10b2c7493d161->leave($__internal_fcc01408015c11f041ac4c1e2d41fc192d14e08913144385e5f10b2c7493d161_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_98f083674835b5e4fc9fb6dce653c933dee4bd586ef1a29527ae076992ed1529 = $this->env->getExtension("native_profiler");
        $__internal_98f083674835b5e4fc9fb6dce653c933dee4bd586ef1a29527ae076992ed1529->enter($__internal_98f083674835b5e4fc9fb6dce653c933dee4bd586ef1a29527ae076992ed1529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <a href=\"\" class=\"speedbump\"><span class=\"glyphicon glyphicon-remove\"></span></a>
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
                                <input type=\"text\" id=\"";
            // line 114
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
        // line 119
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
        
        $__internal_98f083674835b5e4fc9fb6dce653c933dee4bd586ef1a29527ae076992ed1529->leave($__internal_98f083674835b5e4fc9fb6dce653c933dee4bd586ef1a29527ae076992ed1529_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abd570672c18d604521a69029087217350f9e4e2500eaec80f6e950f58befbf9 = $this->env->getExtension("native_profiler");
        $__internal_abd570672c18d604521a69029087217350f9e4e2500eaec80f6e950f58befbf9->enter($__internal_abd570672c18d604521a69029087217350f9e4e2500eaec80f6e950f58befbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
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
        // line 150
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
        // line 160
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
        
        $__internal_abd570672c18d604521a69029087217350f9e4e2500eaec80f6e950f58befbf9->leave($__internal_abd570672c18d604521a69029087217350f9e4e2500eaec80f6e950f58befbf9_prof);

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
        return array (  312 => 160,  299 => 150,  282 => 137,  276 => 136,  254 => 119,  241 => 114,  238 => 113,  231 => 108,  228 => 107,  222 => 106,  219 => 105,  213 => 102,  210 => 101,  207 => 100,  201 => 96,  195 => 92,  192 => 91,  189 => 90,  183 => 87,  180 => 86,  178 => 85,  173 => 83,  170 => 82,  167 => 81,  162 => 80,  160 => 79,  148 => 72,  145 => 71,  141 => 70,  132 => 64,  109 => 44,  100 => 38,  91 => 32,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
