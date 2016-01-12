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
        $__internal_b485292af4275413d9a30a47a0a9ddf695be0cfa77450d4cbce7787b431e7620 = $this->env->getExtension("native_profiler");
        $__internal_b485292af4275413d9a30a47a0a9ddf695be0cfa77450d4cbce7787b431e7620->enter($__internal_b485292af4275413d9a30a47a0a9ddf695be0cfa77450d4cbce7787b431e7620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b485292af4275413d9a30a47a0a9ddf695be0cfa77450d4cbce7787b431e7620->leave($__internal_b485292af4275413d9a30a47a0a9ddf695be0cfa77450d4cbce7787b431e7620_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a93ac5afd7ee0588d577f3ef09cc8b72aaec98e5c80823aa1797065ef1e31241 = $this->env->getExtension("native_profiler");
        $__internal_a93ac5afd7ee0588d577f3ef09cc8b72aaec98e5c80823aa1797065ef1e31241->enter($__internal_a93ac5afd7ee0588d577f3ef09cc8b72aaec98e5c80823aa1797065ef1e31241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_a93ac5afd7ee0588d577f3ef09cc8b72aaec98e5c80823aa1797065ef1e31241->leave($__internal_a93ac5afd7ee0588d577f3ef09cc8b72aaec98e5c80823aa1797065ef1e31241_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c23f3a165849c4fa0c72d51daedade6fba7b9cdacbeeb655770e9aedcc9a928 = $this->env->getExtension("native_profiler");
        $__internal_0c23f3a165849c4fa0c72d51daedade6fba7b9cdacbeeb655770e9aedcc9a928->enter($__internal_0c23f3a165849c4fa0c72d51daedade6fba7b9cdacbeeb655770e9aedcc9a928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 71
            echo "                        <tr>
                            <td style=\"border-right:0;\" class=\"primera-columna\"><b>Pregunta: </b>";
            // line 72
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["pregunta"], "titulo", array())), "html", null, true);
            echo " </td>
                            <td>&nbsp;&nbsp;<a href=\"\" ><span class=\"glyphicon glyphicon-pencil\"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href=\"\" class=\"speedbump\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                ";
            // line 79
            if ( !twig_test_empty($this->getAttribute($context["pregunta"], "respuesta", array()))) {
                // line 80
                echo "                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pregunta"], "respuesta", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
                    // line 81
                    echo "                                        ";
                    if ( !twig_test_empty($this->getAttribute($context["respuesta"], "textoRespuesta", array()))) {
                        // line 82
                        echo "                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                        echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["respuesta"], "textoRespuesta", array())), "html", null, true);
                        echo "<br>
                                        ";
                    } else {
                        // line 84
                        echo "                                            ";
                        if (($this->getAttribute($context["respuesta"], "correcta", array()) == 0)) {
                            // line 85
                            echo "                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbspFalso<br>
                                            ";
                        } else {
                            // line 87
                            echo "                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbspVerdadero<br>
                                            ";
                        }
                        // line 89
                        echo "                                        ";
                    }
                    // line 90
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                                ";
            } else {
                // line 92
                echo "                                    <div class=\"alert alert-warning\">
                                        Este tipo de preguntas no tiene respuestas
                                    </div>
                                    <br>
                                ";
            }
            // line 97
            echo "                                <br><br>
                                <input type=\"text\" id=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"Comentario para la asistente\" rows=\"3\">
                                <br><br>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pregunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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
        
        $__internal_0c23f3a165849c4fa0c72d51daedade6fba7b9cdacbeeb655770e9aedcc9a928->leave($__internal_0c23f3a165849c4fa0c72d51daedade6fba7b9cdacbeeb655770e9aedcc9a928_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfec8cf8cee72e51f681a12738b8515d0d471d73d8698cd553e2e0ea304d279c = $this->env->getExtension("native_profiler");
        $__internal_bfec8cf8cee72e51f681a12738b8515d0d471d73d8698cd553e2e0ea304d279c->enter($__internal_bfec8cf8cee72e51f681a12738b8515d0d471d73d8698cd553e2e0ea304d279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
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
        // line 134
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
        // line 144
        echo $this->env->getExtension('routing')->getPath("uci_profesor_agregarComentarios");
        echo "\",
                        type: \"POST\",
                        data: {comentarios: commentArray, idCuestionario: idCuest},
                        success: function (data) {
                            if (data.resultado == 1) {
                                alert('Funciona');
                                /*window.opener.location.reload(false);
                                window.location.href = \"{ path('uci_administrador_ver_cuestionario', { 'id': entity.id }) }}\";
                                closeWindows();*/
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
        
        $__internal_bfec8cf8cee72e51f681a12738b8515d0d471d73d8698cd553e2e0ea304d279c->leave($__internal_bfec8cf8cee72e51f681a12738b8515d0d471d73d8698cd553e2e0ea304d279c_prof);

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
        return array (  276 => 144,  263 => 134,  246 => 121,  240 => 120,  218 => 103,  207 => 98,  204 => 97,  197 => 92,  194 => 91,  188 => 90,  185 => 89,  181 => 87,  177 => 85,  174 => 84,  168 => 82,  165 => 81,  160 => 80,  158 => 79,  148 => 72,  145 => 71,  141 => 70,  132 => 64,  109 => 44,  100 => 38,  91 => 32,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
