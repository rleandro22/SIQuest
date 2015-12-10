<?php

/* UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig */
class __TwigTemplate_25b279e83402ad7e84396df08f6ecb91823ab653948f8349e7b29fc3fe438a0b extends Twig_Template
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
        $__internal_bf5e0dd09b9159280e970ffc2f36a5055035c92bc9a542dfd2858ca2709d6ceb = $this->env->getExtension("native_profiler");
        $__internal_bf5e0dd09b9159280e970ffc2f36a5055035c92bc9a542dfd2858ca2709d6ceb->enter($__internal_bf5e0dd09b9159280e970ffc2f36a5055035c92bc9a542dfd2858ca2709d6ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf5e0dd09b9159280e970ffc2f36a5055035c92bc9a542dfd2858ca2709d6ceb->leave($__internal_bf5e0dd09b9159280e970ffc2f36a5055035c92bc9a542dfd2858ca2709d6ceb_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0cf0385fb841ffdf3d47a8f4efcd248721a3159cd0f8419ab26c1ff04a73adfe = $this->env->getExtension("native_profiler");
        $__internal_0cf0385fb841ffdf3d47a8f4efcd248721a3159cd0f8419ab26c1ff04a73adfe->enter($__internal_0cf0385fb841ffdf3d47a8f4efcd248721a3159cd0f8419ab26c1ff04a73adfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_0cf0385fb841ffdf3d47a8f4efcd248721a3159cd0f8419ab26c1ff04a73adfe->leave($__internal_0cf0385fb841ffdf3d47a8f4efcd248721a3159cd0f8419ab26c1ff04a73adfe_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbbc0546cdb722bea7d864f6206852dea3a77ceb0cbe549fbfcf1b0ee4526874 = $this->env->getExtension("native_profiler");
        $__internal_bbbc0546cdb722bea7d864f6206852dea3a77ceb0cbe549fbfcf1b0ee4526874->enter($__internal_bbbc0546cdb722bea7d864f6206852dea3a77ceb0cbe549fbfcf1b0ee4526874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" id=\"datosCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">
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
                    <div id=\"alert_placeholder\"> </div>
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
                    <div class=\"col-lg-8\"></div>
                    <div class=\"col-lg-2\">
                        <button class=\"btn btn-action\" id=\"actualizarDatCuest\" type=\"button\">Actualizar</button>
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
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 74
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 75
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["pregunta"], "titulo", array())), "html", null, true);
            echo " </td>
                                <td>&nbsp;&nbsp;<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editarPregunta", array("idPregunta" => $this->getAttribute($context["pregunta"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-pencil\"></span></a>&nbsp;&nbsp;&nbsp;
                                    <a href=\"\" class=\"speedbump\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pregunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
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
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>\t<!-- /container -->

";
        
        $__internal_bbbc0546cdb722bea7d864f6206852dea3a77ceb0cbe549fbfcf1b0ee4526874->leave($__internal_bbbc0546cdb722bea7d864f6206852dea3a77ceb0cbe549fbfcf1b0ee4526874_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_045932cc4e5cfbff9716dc6537489706693c1eaf3e92c0593ae03660a45d195d = $this->env->getExtension("native_profiler");
        $__internal_045932cc4e5cfbff9716dc6537489706693c1eaf3e92c0593ae03660a45d195d->enter($__internal_045932cc4e5cfbff9716dc6537489706693c1eaf3e92c0593ae03660a45d195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
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

            \$('#actualizarDatCuest').click(function (e) {
                var sure = confirm(\"¿Esta seguro que desea actualizar?\\n (Esta operación no es reversible)\");
                if (sure) {
                    \$.ajax({
                        type: \$(\"#datosCuestionario\").attr('method'),
                        url: \$(\"#datosCuestionario\").attr('action'),
                        data: \$(\"#datosCuestionario\").serialize(),
                        dataType: \"json\",
                        success: function (data) {
                            if (data.resultado == \"1\") {
                                \$('#alert_placeholder').append('<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>Actualización exitosa</div>');
                                alertTimeout(4000);
                            }else{
                                \$('#alert_placeholder').append('<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' + data.resultado + '</div>');
                                alertTimeout(4000);
                            }
                        },
                        error: function (data) {
                            \$('#alert_placeholder').append('<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' + data.resultado + '</div>');
                            alertTimeout(4000);
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
        
        $__internal_045932cc4e5cfbff9716dc6537489706693c1eaf3e92c0593ae03660a45d195d->leave($__internal_045932cc4e5cfbff9716dc6537489706693c1eaf3e92c0593ae03660a45d195d_prof);

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
        return array (  199 => 101,  193 => 100,  181 => 94,  166 => 81,  155 => 76,  151 => 75,  148 => 74,  144 => 73,  110 => 42,  102 => 37,  94 => 32,  81 => 21,  79 => 20,  72 => 16,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
