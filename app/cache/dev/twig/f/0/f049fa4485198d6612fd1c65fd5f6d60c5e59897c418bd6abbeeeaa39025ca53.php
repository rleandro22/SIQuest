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
        $__internal_9dcf40bc958937ca8deeb4e59039e6213b105881b8e8f56b81c7792d06dabd72 = $this->env->getExtension("native_profiler");
        $__internal_9dcf40bc958937ca8deeb4e59039e6213b105881b8e8f56b81c7792d06dabd72->enter($__internal_9dcf40bc958937ca8deeb4e59039e6213b105881b8e8f56b81c7792d06dabd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dcf40bc958937ca8deeb4e59039e6213b105881b8e8f56b81c7792d06dabd72->leave($__internal_9dcf40bc958937ca8deeb4e59039e6213b105881b8e8f56b81c7792d06dabd72_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_5f8fc8805600ae32158b92d29dc6f456638770f210788f19b930c88165843ff3 = $this->env->getExtension("native_profiler");
        $__internal_5f8fc8805600ae32158b92d29dc6f456638770f210788f19b930c88165843ff3->enter($__internal_5f8fc8805600ae32158b92d29dc6f456638770f210788f19b930c88165843ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_5f8fc8805600ae32158b92d29dc6f456638770f210788f19b930c88165843ff3->leave($__internal_5f8fc8805600ae32158b92d29dc6f456638770f210788f19b930c88165843ff3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_05d8b81c8870a61c9c82c48a096247a274c2055bb8242855af1c8cd72dffd447 = $this->env->getExtension("native_profiler");
        $__internal_05d8b81c8870a61c9c82c48a096247a274c2055bb8242855af1c8cd72dffd447->enter($__internal_05d8b81c8870a61c9c82c48a096247a274c2055bb8242855af1c8cd72dffd447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <form id=\"prueba\" action=\"";
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
                                <div id=\"myNicPanel\" style=\"width: 525px;\"></div>

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPagina", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'row');
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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 99
            echo "                        <li> ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["respuesta"], 'row');
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </ul>
                <br><br>
                <a href=\"#\" id=\"respuesta_link\">Añadir respuesta</a>
                <br><br>

            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">                     
                </div>
                <div class=\"col-lg-4 text-right\">
                    <button class=\"btn btn-action\" id=\"enviar\" type=\"submit\">Registrar</button>
                </div>
            </div>
            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>

        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_05d8b81c8870a61c9c82c48a096247a274c2055bb8242855af1c8cd72dffd447->leave($__internal_05d8b81c8870a61c9c82c48a096247a274c2055bb8242855af1c8cd72dffd447_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90211d25bc3fec185231b41295d67a93e08022f935ccd5bfceead9773bd16aa8 = $this->env->getExtension("native_profiler");
        $__internal_90211d25bc3fec185231b41295d67a93e08022f935ccd5bfceead9773bd16aa8->enter($__internal_90211d25bc3fec185231b41295d67a93e08022f935ccd5bfceead9773bd16aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
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
            });
            
            \$(\":input[type=text], textarea\").mouseenter(function () {
                quitarAnterior();
                var nombre = \$(this).attr(\"name\").replace(/\\[/g, '_');
                nombre = nombre.replace(/\\]/g, '');
                areaPrevia = nombre;
                area1 = new nicEditor({fullPanel: true}).panelInstance(nombre, {hasPanel: true});
            });

            \$(\":input:not(input[type=text], textarea):not(:button)\").focus(function () {
                quitarAnterior();
            });

            \$(\":input:not(input[type=text], textarea):not(:button)\").focus(function () {
                quitarAnterior();
            });

        }

        document.ready = function () {

            siSaleEsGuaba();

            \$(\"#respuestas\").mouseleave(function (e) {
                e.preventDefault();
                quitarAnterior();
            });

            \$('#prueba').submit(function () {
                area1.removeInstance('uci_bundle_basedatosbundle_pregunta_titulo');
                return true;
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
        
        $__internal_90211d25bc3fec185231b41295d67a93e08022f935ccd5bfceead9773bd16aa8->leave($__internal_90211d25bc3fec185231b41295d67a93e08022f935ccd5bfceead9773bd16aa8_prof);

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
        return array (  250 => 125,  244 => 124,  228 => 114,  213 => 101,  204 => 99,  200 => 98,  196 => 97,  177 => 81,  169 => 76,  161 => 71,  153 => 66,  145 => 61,  137 => 56,  129 => 51,  121 => 46,  114 => 41,  108 => 39,  106 => 38,  100 => 35,  96 => 34,  82 => 22,  80 => 21,  72 => 16,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
