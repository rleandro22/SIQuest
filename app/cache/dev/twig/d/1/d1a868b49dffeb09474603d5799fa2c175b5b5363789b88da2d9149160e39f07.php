<?php

/* UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig */
class __TwigTemplate_d1a868b49dffeb09474603d5799fa2c175b5b5363789b88da2d9149160e39f07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig", 1);
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
        $__internal_dce580aa6dbeaf886e6229f296ce42714e9dc5ba04627212e46db348ac407f82 = $this->env->getExtension("native_profiler");
        $__internal_dce580aa6dbeaf886e6229f296ce42714e9dc5ba04627212e46db348ac407f82->enter($__internal_dce580aa6dbeaf886e6229f296ce42714e9dc5ba04627212e46db348ac407f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce580aa6dbeaf886e6229f296ce42714e9dc5ba04627212e46db348ac407f82->leave($__internal_dce580aa6dbeaf886e6229f296ce42714e9dc5ba04627212e46db348ac407f82_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7300dd1c068825733d21a3058c45ece6eab42ff2c94020eea4ab27c3549fc496 = $this->env->getExtension("native_profiler");
        $__internal_7300dd1c068825733d21a3058c45ece6eab42ff2c94020eea4ab27c3549fc496->enter($__internal_7300dd1c068825733d21a3058c45ece6eab42ff2c94020eea4ab27c3549fc496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_7300dd1c068825733d21a3058c45ece6eab42ff2c94020eea4ab27c3549fc496->leave($__internal_7300dd1c068825733d21a3058c45ece6eab42ff2c94020eea4ab27c3549fc496_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_93f8fc4beb6ca464e62a9ece508570feb2bd02b4d572e2b4a2fad1231c155be8 = $this->env->getExtension("native_profiler");
        $__internal_93f8fc4beb6ca464e62a9ece508570feb2bd02b4d572e2b4a2fad1231c155be8->enter($__internal_93f8fc4beb6ca464e62a9ece508570feb2bd02b4d572e2b4a2fad1231c155be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Solicitudes</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig", "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Ver solicitudes</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"col-sm-12\">
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        <label>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
        echo "</label><br>
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
        echo "
                                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                                    </div>
                                </div>
                                <br><br>
                            </div>
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </form>
                    </div>
                </div>

                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
        <br><br><br><br>

        <div class=\"row\">

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br>
            <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                <thead>
                    <tr>
                        <th data-hide=\"phone\">
                            Num.
                        </th>
                        <th data-toggle=\"true\">
                            Texto
                        </th>
                        <th data-hide=\"phone\">
                            Activa
                        </th>
                        <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                    </tr>
                </thead>
                <tbody> 
                    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 78
            echo "                        <tr>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textosolicitud", array()), "html", null, true);
            echo "</td>
                            ";
            // line 81
            if (($this->getAttribute($context["entity"], "activa", array()) == "1")) {
                // line 82
                echo "                        <td><span class=\"status-metro status-active\" title=\"Active\">Si</span></td>
                    ";
            } else {
                // line 84
                echo "                        <td><span class=\"status-metro status-suspended\" title=\"Active\">No</span></td>
                    ";
            }
            // line 86
            echo "                    <td><a href=\"\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                        <a href=\"\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </tbody>
            </table>

            <br><br>

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_93f8fc4beb6ca464e62a9ece508570feb2bd02b4d572e2b4a2fad1231c155be8->leave($__internal_93f8fc4beb6ca464e62a9ece508570feb2bd02b4d572e2b4a2fad1231c155be8_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f48b24f029c889f1c4d20d77bc88a330d7564fb0e65b4e1fb7d3da87735c4c2 = $this->env->getExtension("native_profiler");
        $__internal_9f48b24f029c889f1c4d20d77bc88a330d7564fb0e65b4e1fb7d3da87735c4c2->enter($__internal_9f48b24f029c889f1c4d20d77bc88a330d7564fb0e65b4e1fb7d3da87735c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {
            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
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
        
        $__internal_9f48b24f029c889f1c4d20d77bc88a330d7564fb0e65b4e1fb7d3da87735c4c2->leave($__internal_9f48b24f029c889f1c4d20d77bc88a330d7564fb0e65b4e1fb7d3da87735c4c2_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 103,  199 => 102,  183 => 91,  173 => 86,  169 => 84,  165 => 82,  163 => 81,  159 => 80,  155 => 79,  152 => 78,  148 => 77,  110 => 42,  102 => 37,  98 => 36,  94 => 35,  87 => 31,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
