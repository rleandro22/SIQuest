<?php

/* UciAdministradorBundle:VistaLibro:registrarLibro.html.twig */
class __TwigTemplate_7eb9050808ba050ba0154876f05dd8aeaba903d3121414f546600d712b80ebab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_538ff69d58ac0251601caac64ff0e78e6596c9811f8fb2bfc698ddc865a622ba' => array($this, 'block___internal_538ff69d58ac0251601caac64ff0e78e6596c9811f8fb2bfc698ddc865a622ba'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca8d6afa5943e8c3557c1c63c9aa7947c3c09256457725810a96122fe335b0e2 = $this->env->getExtension("native_profiler");
        $__internal_ca8d6afa5943e8c3557c1c63c9aa7947c3c09256457725810a96122fe335b0e2->enter($__internal_ca8d6afa5943e8c3557c1c63c9aa7947c3c09256457725810a96122fe335b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca8d6afa5943e8c3557c1c63c9aa7947c3c09256457725810a96122fe335b0e2->leave($__internal_ca8d6afa5943e8c3557c1c63c9aa7947c3c09256457725810a96122fe335b0e2_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_167dae738117e1e38d0dc7f10c7c89f47a7f7b5dbc4695291fa45e116a222919 = $this->env->getExtension("native_profiler");
        $__internal_167dae738117e1e38d0dc7f10c7c89f47a7f7b5dbc4695291fa45e116a222919->enter($__internal_167dae738117e1e38d0dc7f10c7c89f47a7f7b5dbc4695291fa45e116a222919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_167dae738117e1e38d0dc7f10c7c89f47a7f7b5dbc4695291fa45e116a222919->leave($__internal_167dae738117e1e38d0dc7f10c7c89f47a7f7b5dbc4695291fa45e116a222919_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1168f302e1e385a49292da417e41ff60d1128991dd6a058a7b1148b7ca01be82 = $this->env->getExtension("native_profiler");
        $__internal_1168f302e1e385a49292da417e41ff60d1128991dd6a058a7b1148b7ca01be82->enter($__internal_1168f302e1e385a49292da417e41ff60d1128991dd6a058a7b1148b7ca01be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Listado de libros</a></li>
            <li class=\"active\">Registrar Libro</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 20
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoLibro.html.twig", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig", 20)->display($context);
        // line 21
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Nuevo libro</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h3 class=\"thin text-center\">Registrar un nuevo libro</h3>
                            <p class=\"text-center text-muted\">Todos los campos son requeridos. </p>
                            <hr>

                            ";
        // line 38
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 39
            echo "                                <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                            ";
        }
        // line 41
        echo "
                            <form action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("uci_administrador_nuevolibro");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'label');
        echo "
                                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginas", array()), 'label');
        echo "
                                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginas", array()), 'errors');
        echo "
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginas", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'label');
        echo "
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'errors');
        echo "
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'widget');
        echo "
                                    </div>
                                </div>


                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'label');
        echo "
                                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'errors');
        echo "
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <hr>
                                <!-- /Aquí inicia capitulo --> 

                              <h3>Capitulos</h3><br>
                                <!-- /Tabla capitulos -->

                                <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\" 
                                       data-prototype=\"
                                       ";
        // line 85
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_538ff69d58ac0251601caac64ff0e78e6596c9811f8fb2bfc698ddc865a622ba", $context, $blocks));
        // line 87
        echo "\">
                                    <thead>
                                        <tr>

                                            <th data-hide=\"phone\">
                                                Numero 
                                            </th>
                                            <th data-hide=\"phone\">
                                                Nombre
                                            </th>


                                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "capitulos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["capitulo"]) {
            // line 104
            echo "                                            <tr>

                                                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "numeroCapitulo", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "nombreCapitulo", array()), "html", null, true);
            echo "</td>
                                                <td></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capitulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                    </tbody>
                                </table>
                                    <a href=\"#\" id=\"capitulo_link\">Añadir capitulo</a>
                                <!-- /Aquí acaba el contenido de capitulo--> 
                                <hr>




                                <!-- /Aquí inicia si es pmbok --> 

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'label');
        echo "
                                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'errors');
        echo "
                                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">                     
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Registrar</button>
                                    </div>
                                </div>
                              
                            </form>
                        </div>
                    </div>

                </div>


                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_1168f302e1e385a49292da417e41ff60d1128991dd6a058a7b1148b7ca01be82->leave($__internal_1168f302e1e385a49292da417e41ff60d1128991dd6a058a7b1148b7ca01be82_prof);

    }

    // line 85
    public function block___internal_538ff69d58ac0251601caac64ff0e78e6596c9811f8fb2bfc698ddc865a622ba($context, array $blocks = array())
    {
        $__internal_c19b058683a55f0c05d0ff337cc72ea724c965284cba2da5729db924a780064e = $this->env->getExtension("native_profiler");
        $__internal_c19b058683a55f0c05d0ff337cc72ea724c965284cba2da5729db924a780064e->enter($__internal_c19b058683a55f0c05d0ff337cc72ea724c965284cba2da5729db924a780064e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_538ff69d58ac0251601caac64ff0e78e6596c9811f8fb2bfc698ddc865a622ba"));

        // line 86
        echo "                                           ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()), "vars", array()), "prototype", array())));
        echo "
                                       ";
        
        $__internal_c19b058683a55f0c05d0ff337cc72ea724c965284cba2da5729db924a780064e->leave($__internal_c19b058683a55f0c05d0ff337cc72ea724c965284cba2da5729db924a780064e_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b71dcd3b93cb58aa2f103f982059a2b4271f442f2ddf0e4f1a88bb599b42ca3b = $this->env->getExtension("native_profiler");
        $__internal_b71dcd3b93cb58aa2f103f982059a2b4271f442f2ddf0e4f1a88bb599b42ca3b->enter($__internal_b71dcd3b93cb58aa2f103f982059a2b4271f442f2ddf0e4f1a88bb599b42ca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var area1;
        var areaPrevia;

        function addCapitulo() {
            var collectionHolder = \$('#tabla');
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
            var removeFormA = \$('<td href=\"#\" onclick=\"addTagFormDeleteLink(event, this); \"><span class=\"navigationSpace glyphicon glyphicon-remove\" style=\"color: red; font-size:180%\" ></span></td>');
            var newTr = \$('<tr></tr>');
            newTr.append(form);
            newTr.append(removeFormA);
            collectionHolder.append(newTr);
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



            \$('#capitulo_link').on('click', function (e) {
                e.preventDefault();
                addCapitulo();

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
        
        $__internal_b71dcd3b93cb58aa2f103f982059a2b4271f442f2ddf0e4f1a88bb599b42ca3b->leave($__internal_b71dcd3b93cb58aa2f103f982059a2b4271f442f2ddf0e4f1a88bb599b42ca3b_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 155,  306 => 154,  296 => 86,  290 => 85,  257 => 126,  253 => 125,  249 => 124,  234 => 111,  224 => 107,  220 => 106,  216 => 104,  212 => 103,  194 => 87,  192 => 85,  177 => 73,  173 => 72,  169 => 71,  159 => 64,  155 => 63,  151 => 62,  142 => 56,  138 => 55,  134 => 54,  125 => 48,  121 => 47,  117 => 46,  108 => 42,  105 => 41,  99 => 39,  97 => 38,  78 => 21,  76 => 20,  67 => 14,  63 => 13,  57 => 9,  51 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
