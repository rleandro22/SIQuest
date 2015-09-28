<?php

/* UciAdministradorBundle:Vista:indiceUsuario.html.twig */
class __TwigTemplate_486bd50a61169d3b652e3562d99a2d550a4a30646b07861905d4194d96cf30af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:Vista:indiceUsuario.html.twig", 1);
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
        $__internal_f983201478b6cdd2b425424ad983284c054874252c17bb8ec529684b63722290 = $this->env->getExtension("native_profiler");
        $__internal_f983201478b6cdd2b425424ad983284c054874252c17bb8ec529684b63722290->enter($__internal_f983201478b6cdd2b425424ad983284c054874252c17bb8ec529684b63722290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:indiceUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f983201478b6cdd2b425424ad983284c054874252c17bb8ec529684b63722290->leave($__internal_f983201478b6cdd2b425424ad983284c054874252c17bb8ec529684b63722290_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_62b296a5da2650e3e299357a98e942e56e29bca09196751ee7e23924ea5b0e03 = $this->env->getExtension("native_profiler");
        $__internal_62b296a5da2650e3e299357a98e942e56e29bca09196751ee7e23924ea5b0e03->enter($__internal_62b296a5da2650e3e299357a98e942e56e29bca09196751ee7e23924ea5b0e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_62b296a5da2650e3e299357a98e942e56e29bca09196751ee7e23924ea5b0e03->leave($__internal_62b296a5da2650e3e299357a98e942e56e29bca09196751ee7e23924ea5b0e03_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3607e319e3f4d54004472f638d5bd8987287a9dea0a47d1c984763f96390327 = $this->env->getExtension("native_profiler");
        $__internal_d3607e319e3f4d54004472f638d5bd8987287a9dea0a47d1c984763f96390327->enter($__internal_d3607e319e3f4d54004472f638d5bd8987287a9dea0a47d1c984763f96390327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Usuarios</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig", "UciAdministradorBundle:Vista:indiceUsuario.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de usuarios</h1>
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
                                Nombre
                            </th>
                            <th data-hide=\"phone\">
                                Apellidos
                            </th>
                            <th data-hide=\"phone\">
                                Usuario
                            </th>
                            <th data-hide=\"phone\">
                                Email
                            </th>
                            <th data-hide=\"phone\">
                                Rol
                            </th>
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody> 
                        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "                            <tr>
                                <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                                <td><span class=\"status-metro status-active\" title=\"Active\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "nombre", array()), "html", null, true);
            echo "</span></td>
                                <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </tbody>
                </table>
                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_d3607e319e3f4d54004472f638d5bd8987287a9dea0a47d1c984763f96390327->leave($__internal_d3607e319e3f4d54004472f638d5bd8987287a9dea0a47d1c984763f96390327_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee4270da9818609b23aeabeb596c4ac527e8c0ad72200b7fdb0f94cb4041cfca = $this->env->getExtension("native_profiler");
        $__internal_ee4270da9818609b23aeabeb596c4ac527e8c0ad72200b7fdb0f94cb4041cfca->enter($__internal_ee4270da9818609b23aeabeb596c4ac527e8c0ad72200b7fdb0f94cb4041cfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(function () {
            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            });
        });
    </script>
";
        
        $__internal_ee4270da9818609b23aeabeb596c4ac527e8c0ad72200b7fdb0f94cb4041cfca->leave($__internal_ee4270da9818609b23aeabeb596c4ac527e8c0ad72200b7fdb0f94cb4041cfca_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Vista:indiceUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 80,  171 => 79,  156 => 69,  146 => 65,  142 => 64,  138 => 63,  134 => 62,  130 => 61,  126 => 60,  120 => 59,  117 => 58,  113 => 57,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
