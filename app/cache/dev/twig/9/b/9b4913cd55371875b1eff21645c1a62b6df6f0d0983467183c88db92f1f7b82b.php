<?php

/* UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig */
class __TwigTemplate_9b4913cd55371875b1eff21645c1a62b6df6f0d0983467183c88db92f1f7b82b extends Twig_Template
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
        $__internal_036a35594a6f4130b1e2ddabc16bc3a89b1698163c60b3be2a3aa83ccb6c406f = $this->env->getExtension("native_profiler");
        $__internal_036a35594a6f4130b1e2ddabc16bc3a89b1698163c60b3be2a3aa83ccb6c406f->enter($__internal_036a35594a6f4130b1e2ddabc16bc3a89b1698163c60b3be2a3aa83ccb6c406f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:verCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036a35594a6f4130b1e2ddabc16bc3a89b1698163c60b3be2a3aa83ccb6c406f->leave($__internal_036a35594a6f4130b1e2ddabc16bc3a89b1698163c60b3be2a3aa83ccb6c406f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_bb28798459697b37b7e05c0362ecffc2564714a36e44adfa73c2d86647684bef = $this->env->getExtension("native_profiler");
        $__internal_bb28798459697b37b7e05c0362ecffc2564714a36e44adfa73c2d86647684bef->enter($__internal_bb28798459697b37b7e05c0362ecffc2564714a36e44adfa73c2d86647684bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_bb28798459697b37b7e05c0362ecffc2564714a36e44adfa73c2d86647684bef->leave($__internal_bb28798459697b37b7e05c0362ecffc2564714a36e44adfa73c2d86647684bef_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb97011a90ca98a869acf728b911b1cba64abd06c4f190ac851c43074fbabca4 = $this->env->getExtension("native_profiler");
        $__internal_eb97011a90ca98a869acf728b911b1cba64abd06c4f190ac851c43074fbabca4->enter($__internal_eb97011a90ca98a869acf728b911b1cba64abd06c4f190ac851c43074fbabca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_removerPreguntaCuestionario", array("idPregunta" => $this->getAttribute($context["pregunta"], "id", array()), "idCuestionario" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"glyphicon glyphicon-remove\"></span></a>
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
                <div class=\"col-lg-6\">                     
                </div>
                <div class=\"col-lg-2 col-sm-4 text-right\">
                    <button class=\"btn btn-action\" onclick=\"redirigirAgregarPregunta(";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo ");\" type=\"button\">Agregar pregunta</button>
                </div>
                <div class=\"col-lg-1 text-right\"></div>
                <div class=\"col-lg-2 col-sm-4 text-right\">
                    <button class=\"btn btn-action\" id=\"generar\" type=\"submit\">Generar</button>
                </div>
            </div>
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>\t<!-- /container -->

";
        
        $__internal_eb97011a90ca98a869acf728b911b1cba64abd06c4f190ac851c43074fbabca4->leave($__internal_eb97011a90ca98a869acf728b911b1cba64abd06c4f190ac851c43074fbabca4_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4807c0906042516a03bf597535b48bfb8bf9486f6e6d8c7fc9b033332d4a38e6 = $this->env->getExtension("native_profiler");
        $__internal_4807c0906042516a03bf597535b48bfb8bf9486f6e6d8c7fc9b033332d4a38e6->enter($__internal_4807c0906042516a03bf597535b48bfb8bf9486f6e6d8c7fc9b033332d4a38e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function alertTimeout(wait) {
            setTimeout(function () {
                \$('#alert_placeholder').children('.alert:first-child').remove();
            }, wait);
        }

        function redirigirAgregarPregunta(id) {
            var url = '";
        // line 114
        echo $this->env->getExtension('routing')->getPath("uci_administrador_agregarPreguntaCuestionario", array("idCuestionario" => "idCtnr"));
        echo "';
            url = url.replace(\"idCtnr\", id);
            window.open(url, '_blank', 'top=0,scrollbars=1,toolbar=0,location=0,menubar=0');
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
                            } else {
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
        
        $__internal_4807c0906042516a03bf597535b48bfb8bf9486f6e6d8c7fc9b033332d4a38e6->leave($__internal_4807c0906042516a03bf597535b48bfb8bf9486f6e6d8c7fc9b033332d4a38e6_prof);

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
        return array (  222 => 114,  208 => 104,  202 => 103,  190 => 97,  180 => 90,  169 => 81,  159 => 77,  155 => 76,  151 => 75,  148 => 74,  144 => 73,  110 => 42,  102 => 37,  94 => 32,  81 => 21,  79 => 20,  72 => 16,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}