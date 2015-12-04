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
        $__internal_467fae586cc8a599b9545573331733b4434a3f81fa893bb1fedfe45254a1f903 = $this->env->getExtension("native_profiler");
        $__internal_467fae586cc8a599b9545573331733b4434a3f81fa893bb1fedfe45254a1f903->enter($__internal_467fae586cc8a599b9545573331733b4434a3f81fa893bb1fedfe45254a1f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467fae586cc8a599b9545573331733b4434a3f81fa893bb1fedfe45254a1f903->leave($__internal_467fae586cc8a599b9545573331733b4434a3f81fa893bb1fedfe45254a1f903_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_bc7a076b1f06434e9071271a03912ec4cb0424812ba4bd3fa5b119e63a0ba4a4 = $this->env->getExtension("native_profiler");
        $__internal_bc7a076b1f06434e9071271a03912ec4cb0424812ba4bd3fa5b119e63a0ba4a4->enter($__internal_bc7a076b1f06434e9071271a03912ec4cb0424812ba4bd3fa5b119e63a0ba4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_bc7a076b1f06434e9071271a03912ec4cb0424812ba4bd3fa5b119e63a0ba4a4->leave($__internal_bc7a076b1f06434e9071271a03912ec4cb0424812ba4bd3fa5b119e63a0ba4a4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cced620ebd26c41b3a185bea01c58e027a97ad87a25eaf644399d1448d55dbe1 = $this->env->getExtension("native_profiler");
        $__internal_cced620ebd26c41b3a185bea01c58e027a97ad87a25eaf644399d1448d55dbe1->enter($__internal_cced620ebd26c41b3a185bea01c58e027a97ad87a25eaf644399d1448d55dbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h1 class=\"page-title\">Lista de solicitudes</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                    </div>
                </div>
                <br>
                <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                    <thead>
                        <tr>
                            <th data-toggle=\"true\">
                                Num.
                            </th>
                            <th data-hide=\"phone\">
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
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "                            <tr>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textosolicitud", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "activa", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </tbody>
                </table>
                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_cced620ebd26c41b3a185bea01c58e027a97ad87a25eaf644399d1448d55dbe1->leave($__internal_cced620ebd26c41b3a185bea01c58e027a97ad87a25eaf644399d1448d55dbe1_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afa471caa256fb9fd3364e64119a65e15e0614746f053b86c23d6b3aa1029091 = $this->env->getExtension("native_profiler");
        $__internal_afa471caa256fb9fd3364e64119a65e15e0614746f053b86c23d6b3aa1029091->enter($__internal_afa471caa256fb9fd3364e64119a65e15e0614746f053b86c23d6b3aa1029091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
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
        
        $__internal_afa471caa256fb9fd3364e64119a65e15e0614746f053b86c23d6b3aa1029091->leave($__internal_afa471caa256fb9fd3364e64119a65e15e0614746f053b86c23d6b3aa1029091_prof);

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
        return array (  155 => 72,  149 => 71,  134 => 61,  122 => 55,  118 => 54,  114 => 53,  111 => 52,  107 => 51,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
