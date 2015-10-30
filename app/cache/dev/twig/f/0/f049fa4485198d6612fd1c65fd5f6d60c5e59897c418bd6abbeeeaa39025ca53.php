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
        $__internal_f33880546bdca987b71241f2b79cda11ba4a8318be12c9886cd17b124a06c6cb = $this->env->getExtension("native_profiler");
        $__internal_f33880546bdca987b71241f2b79cda11ba4a8318be12c9886cd17b124a06c6cb->enter($__internal_f33880546bdca987b71241f2b79cda11ba4a8318be12c9886cd17b124a06c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33880546bdca987b71241f2b79cda11ba4a8318be12c9886cd17b124a06c6cb->leave($__internal_f33880546bdca987b71241f2b79cda11ba4a8318be12c9886cd17b124a06c6cb_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0aa710c13d2003c4ad17021afb9681ee4003c01dc92d295a80770605f06965e5 = $this->env->getExtension("native_profiler");
        $__internal_0aa710c13d2003c4ad17021afb9681ee4003c01dc92d295a80770605f06965e5->enter($__internal_0aa710c13d2003c4ad17021afb9681ee4003c01dc92d295a80770605f06965e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_0aa710c13d2003c4ad17021afb9681ee4003c01dc92d295a80770605f06965e5->leave($__internal_0aa710c13d2003c4ad17021afb9681ee4003c01dc92d295a80770605f06965e5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c7507f546c81c170d90e45746a72a40b4a2f0a10a47a11c424cc182476fa44 = $this->env->getExtension("native_profiler");
        $__internal_23c7507f546c81c170d90e45746a72a40b4a2f0a10a47a11c424cc182476fa44->enter($__internal_23c7507f546c81c170d90e45746a72a40b4a2f0a10a47a11c424cc182476fa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <form id=\"formularioPrincipal\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_registrarPregunta", array("idTipoRespuesta" => $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "id", array()))), "html", null, true);
        echo "\" name=\"formulario\" method=\"POST\" enctype=\"multipart/form-data\">             

            <div class=\"row\">
                <!-- Sidebar -->
                <aside class=\"col-md-4 sidebar sidebar-left\">
                    ";
        // line 21
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig", 21)->display($context);
        // line 22
        echo "                </aside>
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
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "nombre", array()), "html", null, true);
        echo "</h3>
                                <p class=\"text-center text-muted\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "explicacion", array()), "html", null, true);
        echo "</p>
                                <hr>

                                ";
        // line 38
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 39
            echo "                                    <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                                ";
        }
        // line 41
        echo "
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPagina", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <br>
                                <hr>

                            </div>
                        </div>
                    </div>
                    <!-- /Aquí acaba el contenido --> 
                </article>
                <!-- /Article -->
            </div>

            <div class=\"row\">
                <h3>Respuestas</h3><br>
                <ul id=\"respuestas\" data-prototype=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 97
            echo "                        <li> ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["respuesta"], 'row');
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                </ul>
                <br><br>
                <a href=\"#\" id=\"respuesta_link\">Añadir respuesta</a>
                <br><br>

            </div>
            <div class=\"row\" id=\"areaSalida\">
                <div class=\"col-lg-8\">                     
                </div>
                <div class=\"col-lg-4 text-right\">
                    <button class=\"btn btn-action\" id=\"enviar\" type=\"submit\">Registrar</button>
                </div>
            </div>
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>

        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_23c7507f546c81c170d90e45746a72a40b4a2f0a10a47a11c424cc182476fa44->leave($__internal_23c7507f546c81c170d90e45746a72a40b4a2f0a10a47a11c424cc182476fa44_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b1329a2e912d52d708b9e8060b4a3d693c53e22311815634066e9fdbb5ef0c3 = $this->env->getExtension("native_profiler");
        $__internal_4b1329a2e912d52d708b9e8060b4a3d693c53e22311815634066e9fdbb5ef0c3->enter($__internal_4b1329a2e912d52d708b9e8060b4a3d693c53e22311815634066e9fdbb5ef0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var area1;
        var areaPrevia;

        function addRespuesta() {
            var collectionHolder = \$('#respuestas');
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
            var removeFormA = \$('<a href=\"#\" onclick=\"addTagFormDeleteLink(event, this);\">Borrar</a>');
            var newLi = \$('<li></li>');
            newLi.append(form);
            newLi.append(removeFormA);
            collectionHolder.append(newLi);
            siSaleEsGuaba();
            return prototype;
        }

        function addTagFormDeleteLink(e, elemento) {
            e.preventDefault();
            var removeFormA = elemento.parentNode;
            removeFormA.remove();
        }

        function quitarAnterior() {
            if (area1) {
                area1.removeInstance(areaPrevia);
                area1 = null;
            }
        }

        function siSaleEsGuaba() {

            \$(\":input[type=text], textarea\").mouseenter(function () {
                quitarAnterior();
                var nombre = \$(this).attr(\"name\").replace(/\\[/g, '_');
                nombre = nombre.replace(/\\]/g, '');
                areaPrevia = nombre;
                area1 = new nicEditor({fullPanel: true}).panelInstance(nombre, {hasPanel: true});
                \$(\".nicEdit-main\").focus();
            });

            \$(\":input:not(input[type=text], textarea):not(:button)\").focus(function () {
                quitarAnterior();
            });

        }

        document.ready = function () {

            siSaleEsGuaba();

            \$(\"#areaSalida\").mouseenter(function (e) {
                e.preventDefault();
                quitarAnterior();
            });


            \$(\"#uci_bundle_basedatosbundle_pregunta_libro\").change(function () {
                var data = {
                    idTipoRespuesta: \$(this).val()
                };

                \$.ajax({
                    type: \$(\"#formularioPrincipal\").attr('method'),
                    url: \$(\"#formularioPrincipal\").attr('action'),
                    data: \$(\"#formularioPrincipal\").serialize()
                })
                        .done(function (data) {
                            if (typeof data.capitulos !== 'undefined') {
                                alert(data.capitulos);
                            }
                        })
                        .fail(function (jqXHR, textStatus, errorThrown) {
                            if (typeof jqXHR.responseJSON !== 'undefined') {
                                if (jqXHR.responseJSON.hasOwnProperty('form')) {
                                    \$('#form_body').html(jqXHR.responseJSON.form);
                                }

                                \$('.form_error').html(jqXHR.responseJSON.message);

                            } else {
                                alert(errorThrown);
                            }

                        });
            });



            \$('#respuesta_link').on('click', function (e) {
                e.preventDefault();
                addRespuesta();

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
        
        $__internal_4b1329a2e912d52d708b9e8060b4a3d693c53e22311815634066e9fdbb5ef0c3->leave($__internal_4b1329a2e912d52d708b9e8060b4a3d693c53e22311815634066e9fdbb5ef0c3_prof);

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
        return array (  248 => 123,  242 => 122,  226 => 112,  211 => 99,  202 => 97,  198 => 96,  194 => 95,  175 => 79,  167 => 74,  159 => 69,  151 => 64,  143 => 59,  135 => 54,  127 => 49,  119 => 44,  114 => 41,  108 => 39,  106 => 38,  100 => 35,  96 => 34,  82 => 22,  80 => 21,  72 => 16,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
