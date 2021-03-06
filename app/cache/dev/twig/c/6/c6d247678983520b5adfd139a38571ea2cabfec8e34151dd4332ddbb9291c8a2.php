<?php

/* UciAdministradorBundle:VistaPregunta:editarPregunta.html.twig */
class __TwigTemplate_c6d247678983520b5adfd139a38571ea2cabfec8e34151dd4332ddbb9291c8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaPregunta:editarPregunta.html.twig", 1);
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
        $__internal_f23e82cda8c6e6afc3b3677edd2533d7ca9bf9fdf33a3038e3e0bf157b603b91 = $this->env->getExtension("native_profiler");
        $__internal_f23e82cda8c6e6afc3b3677edd2533d7ca9bf9fdf33a3038e3e0bf157b603b91->enter($__internal_f23e82cda8c6e6afc3b3677edd2533d7ca9bf9fdf33a3038e3e0bf157b603b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:editarPregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23e82cda8c6e6afc3b3677edd2533d7ca9bf9fdf33a3038e3e0bf157b603b91->leave($__internal_f23e82cda8c6e6afc3b3677edd2533d7ca9bf9fdf33a3038e3e0bf157b603b91_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_874b9a170b6ef87512bd27bdc5d9f2647933b009757dd37d555e2c982f2d9db1 = $this->env->getExtension("native_profiler");
        $__internal_874b9a170b6ef87512bd27bdc5d9f2647933b009757dd37d555e2c982f2d9db1->enter($__internal_874b9a170b6ef87512bd27bdc5d9f2647933b009757dd37d555e2c982f2d9db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_874b9a170b6ef87512bd27bdc5d9f2647933b009757dd37d555e2c982f2d9db1->leave($__internal_874b9a170b6ef87512bd27bdc5d9f2647933b009757dd37d555e2c982f2d9db1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d85d942f4f869a76dce684b62704d1cc565d15b37d8c2dca14b259ceea1bff48 = $this->env->getExtension("native_profiler");
        $__internal_d85d942f4f869a76dce684b62704d1cc565d15b37d8c2dca14b259ceea1bff48->enter($__internal_d85d942f4f869a76dce684b62704d1cc565d15b37d8c2dca14b259ceea1bff48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li class=\"active\">Editar pregunta</li>
        </ol>
        <form id=\"formularioPrincipal\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editarPregunta", array("idPregunta" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" name=\"formulario\" method=\"POST\" enctype=\"multipart/form-data\">             

            <div class=\"row\">
                <!-- Sidebar -->
                <aside class=\"col-md-4 sidebar sidebar-left\">
                    ";
        // line 21
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig", "UciAdministradorBundle:VistaPregunta:editarPregunta.html.twig", 21)->display($context);
        // line 22
        echo "                </aside>
                <!-- /Sidebar -->
                <!-- Article main content -->
                <article class=\"col-sm-8 maincontent\">
                    <header class=\"page-header\">
                        <h1 class=\"page-title\">Editar pregunta</h1>
                    </header>
                    <br>
                    <!-- /Aquí va el contenido -->
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <h3 class=\"thin text-center\">Editar una pregunta ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "nombre", array()), "html", null, true);
        echo "</h3>
                                <hr>

                                ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "                                    <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                                ";
        }
        // line 40
        echo "
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'row');
        echo "
                                    </div><div class=\"imagenCargando\"></div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPagina", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 78
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

            <div class=\"row\" id=\"panelRespuestas\">
                <h3><a id=\"linkTextoResp\" href=\"#\" style=\"text-decoration: none;\">Respuestas</a></h3><hr>
                <div id=\"explicacionRespuesta\" style=\"display: none;\"><p class=\"text-warning\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "explicacion", array()), "html", null, true);
        echo "</p><hr></div>
                <ul id=\"respuestas\" data-prototype=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 96
        ob_start();
        // line 97
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 98
            echo "                            <li> ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["respuesta"], 'row');
            echo "
                                <a href=\"#\" onclick=\"addTagFormDeleteLink(event, this, ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["respuesta"], "vars", array()), "value", array()), "id", array()), "html", null, true);
            echo ");\">Borrar</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 103
        echo "                </ul>
                <br><br><br><br>
                <a href=\"#\" id=\"respuesta_link\">Añadir respuesta</a>
                <br>

            </div>
            <br>
            <div class=\"row\" id=\"areaSalida\">
                <div class=\"col-lg-8\">                     
                </div>
                <div class=\"col-lg-4 text-right\">
                    <button class=\"btn btn-action\" id=\"enviar\" type=\"submit\">Actualizar</button>
                </div>
            </div>
            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>

        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_d85d942f4f869a76dce684b62704d1cc565d15b37d8c2dca14b259ceea1bff48->leave($__internal_d85d942f4f869a76dce684b62704d1cc565d15b37d8c2dca14b259ceea1bff48_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7caf08717682053f37b351ee34201096adebca4927e34cee92ef2254e6d6604e = $this->env->getExtension("native_profiler");
        $__internal_7caf08717682053f37b351ee34201096adebca4927e34cee92ef2254e6d6604e->enter($__internal_7caf08717682053f37b351ee34201096adebca4927e34cee92ef2254e6d6604e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

                var area1;
                var areaPrevia;
                var \$capitulo_selector = \$('#uci_bundle_basedatosbundle_pregunta_capitulo');
                var \$area_selector = \$('#uci_bundle_basedatosbundle_pregunta_areaConocimiento');
                var \$grupo_selector = \$('#uci_bundle_basedatosbundle_pregunta_grupoProcesos');
                var \$triangulo_selector = \$('#uci_bundle_basedatosbundle_pregunta_trianguloTalento');
                function addRespuesta() {
                var idTipoRespuesta = ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "id", array()), "html", null, true);
        echo ";
                        if (idTipoRespuesta == 2 || idTipoRespuesta == 4) {
                if (\$(\"#respuestas li\").length < 1){
                agregarPrototipo();
                } else{
                alert('Esta tipo de preguntas solo tiene una respuesta');
                }
                } else{
                agregarPrototipo();
                }
                }

        function agregarPrototipo(){
            var collectionHolder = \$('#respuestas');
                var prototype = collectionHolder.attr('data-prototype');
                var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
                var removeFormA = \$('<a href=\"#\" onclick=\"addTagFormDeleteLink(event, this, 0);\">Borrar</a>');
                var newLi = \$('<li></li>');
                newLi.append(form);
                newLi.append(removeFormA);
                collectionHolder.append(newLi);
                ponerPaneles();
                if (";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "id", array()), "html", null, true);
        echo " != 4 && ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "id", array()), "html", null, true);
        echo "!= 6){
                agregarExlusores();
                }
                return prototype;
        }

        function addTagFormDeleteLink(e, elemento, idRespuesta) {
                e.preventDefault();
                var idRespuesta=idRespuesta;
                var idPregunta=";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo ";
                if(idRespuesta!=0){
                    \$.ajax({
                            url: \"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("uci_administrador_borrarRespuesta");
        echo "\",
                            type: \"POST\",
                            data: {idRespuesta: idRespuesta, idPregunta: idPregunta},
                            success: function( data ) {
                            var removeFormA = elemento.parentNode;
                            removeFormA.remove();
                            alert(data.mensaje);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('Ocurrio un error');
                        }
                    });
                }else{
                    var removeFormA = elemento.parentNode;
                    removeFormA.remove();
                }
                
        }

        function quitarAnterior() {
                if (area1) {
                area1.removeInstance(areaPrevia);
                        area1 = null;
                }
        }

        function ponerPaneles() {

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
        }

        function mostrarAtrPmbok(esPmbok) {
                if (esPmbok == 1) {
                esPmbok = true;
                        \$(\"#filaArea\").removeClass('hidden');
                        \$(\"#filaGrupo\").removeClass('hidden');
                        \$(\"#filaTriangulo\").removeClass('hidden');
                } else {
                \$(\"#filaArea\").addClass('hidden');
                        \$(\"#filaGrupo\").addClass('hidden');
                        \$(\"#filaTriangulo\").addClass('hidden');
                }
        }

        //Este metodo hace que no haya 2 o más respuestas correctas
        function agregarExlusores() {
                \$(\"select[id\$='correcta']\").change(function () {
                if (\$(this).val() == 1) {
                var id = \$(this).attr(\"id\");
                        \$(\"select[id\$='correcta']\").not(\"#\" + id).val(0);
                }
                });
        }

        document.ready = function () {  
            
            agregarExlusores();

        if ((";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "id", array()), "html", null, true);
        echo " == 5) || (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "id", array()), "html", null, true);
        echo " == 7)) {
                \$('#panelRespuestas').hide();
        }

        ponerPaneles();
                \$(\"#areaSalida\").mouseenter(function (e) {
                     e.preventDefault();
                     quitarAnterior();
                });
                
                \$(\"#uci_bundle_basedatosbundle_pregunta_libro\").change(function () {
                \$('.imagenCargando').html('<img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ajax-loader.gif"), "html", null, true);
        echo "\"/>');
                \$capitulo_selector.html('<option></option>');
                \$area_selector.html('<option></option>');
                \$grupo_selector.html('<option></option>');
                \$triangulo_selector.html('<option></option>');
                \$.ajax({
                type: \$(\"#formularioPrincipal\").attr('method'),
                        url: \$(\"#formularioPrincipal\").attr('action'),
                        data: \$(\"#formularioPrincipal\").serialize(),
                        dataType: \"json\",
                        success: function (data) {
                        
                        \$capitulo_selector.html('<option></option>');
                         if (data.capitulos.id != \"0\") {
                for (var i = 0, total = data.capitulos.length; i < total; i++) {
                    \$capitulo_selector.append('<option value=\"' + data.capitulos[i].id + '\">' + data.capitulos[i].nombreCapitulo + '</option>');
                }
            }
            \$area_selector.html('<option></option>');
            if (data.areas.id != \"0\") {
                for (var i = 0, total = data.areas.length; i < total; i++) {
                    \$area_selector.append('<option value=\"' + data.areas[i].id + '\">' + data.areas[i].nombreArea + '</option>');
                }
            }
            \$grupo_selector.html('<option></option>');
            if (data.grupos.id != \"0\") {
                for (var i = 0, total = data.grupos.length; i < total; i++) {
                    \$grupo_selector.append('<option value=\"' + data.grupos[i].id + '\">' + data.grupos[i].nombreGrupo + '</option>');
                }
            }
            \$triangulo_selector.html('<option></option>');
            if (data.triangulos.id != \"0\") {
                for (var i = 0, total = data.triangulos.length; i < total; i++) {
                    \$triangulo_selector.append('<option value=\"' + data.triangulos[i].id + '\">' + data.triangulos[i].nombreTalento + '</option>');
                }
            }
                        
                        },
                        error: function () {
                            alert(\"Ocurrio un error.\");
                        }
                });
                \$('.imagenCargando').html('');
        });
                \$('#respuesta_link').on('click', function (e) {
        e.preventDefault();
                addRespuesta();
        });
                \$('#linkTextoResp').on('click', function (e) {
        e.preventDefault();
                \$('#explicacionRespuesta').toggle(\"fast\");
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
        
        $__internal_7caf08717682053f37b351ee34201096adebca4927e34cee92ef2254e6d6604e->leave($__internal_7caf08717682053f37b351ee34201096adebca4927e34cee92ef2254e6d6604e_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaPregunta:editarPregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 250,  389 => 239,  319 => 172,  313 => 169,  299 => 160,  274 => 138,  260 => 128,  254 => 127,  238 => 117,  222 => 103,  219 => 102,  210 => 99,  205 => 98,  200 => 97,  198 => 96,  194 => 95,  190 => 94,  171 => 78,  163 => 73,  155 => 68,  147 => 63,  139 => 58,  131 => 53,  123 => 48,  115 => 43,  110 => 40,  104 => 38,  102 => 37,  96 => 34,  82 => 22,  80 => 21,  72 => 16,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
