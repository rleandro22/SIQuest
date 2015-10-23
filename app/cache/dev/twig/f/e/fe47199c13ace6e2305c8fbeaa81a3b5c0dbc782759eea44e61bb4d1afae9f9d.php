<?php

/* UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig */
class __TwigTemplate_fe47199c13ace6e2305c8fbeaa81a3b5c0dbc782759eea44e61bb4d1afae9f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig", 1);
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
        $__internal_b008fe577e9f2f9f0c6656fc18935bc239416b59096457de28d15ed6c383a36e = $this->env->getExtension("native_profiler");
        $__internal_b008fe577e9f2f9f0c6656fc18935bc239416b59096457de28d15ed6c383a36e->enter($__internal_b008fe577e9f2f9f0c6656fc18935bc239416b59096457de28d15ed6c383a36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b008fe577e9f2f9f0c6656fc18935bc239416b59096457de28d15ed6c383a36e->leave($__internal_b008fe577e9f2f9f0c6656fc18935bc239416b59096457de28d15ed6c383a36e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b943d7d09c6a3c7536a5f1f5232287e383db09bb0d9f89e38a1aca236e76f4ad = $this->env->getExtension("native_profiler");
        $__internal_b943d7d09c6a3c7536a5f1f5232287e383db09bb0d9f89e38a1aca236e76f4ad->enter($__internal_b943d7d09c6a3c7536a5f1f5232287e383db09bb0d9f89e38a1aca236e76f4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_b943d7d09c6a3c7536a5f1f5232287e383db09bb0d9f89e38a1aca236e76f4ad->leave($__internal_b943d7d09c6a3c7536a5f1f5232287e383db09bb0d9f89e38a1aca236e76f4ad_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_26ef373e8f10d76f513c082747b0be5f46140fea2da0893f203ce65e8eba3054 = $this->env->getExtension("native_profiler");
        $__internal_26ef373e8f10d76f513c082747b0be5f46140fea2da0893f203ce65e8eba3054->enter($__internal_26ef373e8f10d76f513c082747b0be5f46140fea2da0893f203ce65e8eba3054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Preguntas</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig", "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Criterios de preguntas</h1>
                </header>
                <br>

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-body\">
                                        <p class=\"text-center text-muted\">Criterios de libro</p>

                                        <div class=\"row top-margin\">
                                            <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                <label>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'label');
        echo "</label><br>
                                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'errors');
        echo "
                                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row top-margin\">
                                            <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                <label>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'label');
        echo "</label><br>
                                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'errors');
        echo "
                                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                                            </div>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                ";
        // line 55
        if (((isset($context["espmbok"]) ? $context["espmbok"] : $this->getContext($context, "espmbok")) == 1)) {
            // line 56
            echo "                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-body\">
                                            <p class=\"text-center text-muted\">Criterios de PMBok</p>
                                            <div class=\"row top-margin\">
                                                <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                    <label>";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'label');
            echo "</label><br>
                                                    ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'errors');
            echo "
                                                    ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row top-margin\">
                                                <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                    <label>";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'label');
            echo "</label><br>
                                                    ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'errors');
            echo "
                                                    ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row top-margin\">
                                                <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                    <label>";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'label');
            echo "</label><br>
                                                    ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'errors');
            echo "
                                                    ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
            echo "
                                                </div>
                                            </div>
                                            <br><br>
                                        </div>
                                    </div>
                                ";
        }
        // line 84
        echo "                            </div>
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </form>
                    </div>
                </div>

            </article>
            <!-- /Article -->
        </div>
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

        </div>
        </br></br>
        <div class=\"row\">

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br><br>
            <div class=\"aleta\">
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
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 117
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo " </td>
                                <td><a href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"#\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
                    </tbody>
                </table>
            </div>
            </br></br>

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_26ef373e8f10d76f513c082747b0be5f46140fea2da0893f203ce65e8eba3054->leave($__internal_26ef373e8f10d76f513c082747b0be5f46140fea2da0893f203ce65e8eba3054_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cda82458474e91221a052222433de40b9eab9ddb7f2cad643ed60e6f784f2bff = $this->env->getExtension("native_profiler");
        $__internal_cda82458474e91221a052222433de40b9eab9ddb7f2cad643ed60e6f784f2bff->enter($__internal_cda82458474e91221a052222433de40b9eab9ddb7f2cad643ed60e6f784f2bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">


        document.ready = function () {

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
        
        $__internal_cda82458474e91221a052222433de40b9eab9ddb7f2cad643ed60e6f784f2bff->leave($__internal_cda82458474e91221a052222433de40b9eab9ddb7f2cad643ed60e6f784f2bff_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 136,  263 => 135,  247 => 124,  235 => 118,  232 => 117,  228 => 116,  194 => 85,  191 => 84,  181 => 77,  177 => 76,  173 => 75,  165 => 70,  161 => 69,  157 => 68,  149 => 63,  145 => 62,  141 => 61,  134 => 56,  132 => 55,  121 => 47,  117 => 46,  113 => 45,  105 => 40,  101 => 39,  97 => 38,  86 => 30,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
