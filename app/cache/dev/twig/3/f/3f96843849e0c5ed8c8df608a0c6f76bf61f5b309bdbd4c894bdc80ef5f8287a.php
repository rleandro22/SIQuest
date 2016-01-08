<?php

/* UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig */
class __TwigTemplate_3f96843849e0c5ed8c8df608a0c6f76bf61f5b309bdbd4c894bdc80ef5f8287a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig", 1);
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
        $__internal_51850b0dd63c974757affb7fdd660aad3cc4bbf07b89ab3355d75b61db64d3de = $this->env->getExtension("native_profiler");
        $__internal_51850b0dd63c974757affb7fdd660aad3cc4bbf07b89ab3355d75b61db64d3de->enter($__internal_51850b0dd63c974757affb7fdd660aad3cc4bbf07b89ab3355d75b61db64d3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51850b0dd63c974757affb7fdd660aad3cc4bbf07b89ab3355d75b61db64d3de->leave($__internal_51850b0dd63c974757affb7fdd660aad3cc4bbf07b89ab3355d75b61db64d3de_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2bed9bc05b9086be6a234b59108ae83d83ef4449c88efe492dc585bedb9176f2 = $this->env->getExtension("native_profiler");
        $__internal_2bed9bc05b9086be6a234b59108ae83d83ef4449c88efe492dc585bedb9176f2->enter($__internal_2bed9bc05b9086be6a234b59108ae83d83ef4449c88efe492dc585bedb9176f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_2bed9bc05b9086be6a234b59108ae83d83ef4449c88efe492dc585bedb9176f2->leave($__internal_2bed9bc05b9086be6a234b59108ae83d83ef4449c88efe492dc585bedb9176f2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b727b6841e95ab5abed3db55ae5f658a3fc38ce50f6d41d2cbb363d621c14e8 = $this->env->getExtension("native_profiler");
        $__internal_5b727b6841e95ab5abed3db55ae5f658a3fc38ce50f6d41d2cbb363d621c14e8->enter($__internal_5b727b6841e95ab5abed3db55ae5f658a3fc38ce50f6d41d2cbb363d621c14e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig", "UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig", 18)->display($context);
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
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deleteuser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
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
        
        $__internal_5b727b6841e95ab5abed3db55ae5f658a3fc38ce50f6d41d2cbb363d621c14e8->leave($__internal_5b727b6841e95ab5abed3db55ae5f658a3fc38ce50f6d41d2cbb363d621c14e8_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3654cfcc05663ced94ec21c580203cecac0eeebd792ff2a567883248250e22a = $this->env->getExtension("native_profiler");
        $__internal_a3654cfcc05663ced94ec21c580203cecac0eeebd792ff2a567883248250e22a->enter($__internal_a3654cfcc05663ced94ec21c580203cecac0eeebd792ff2a567883248250e22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
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
        
        $__internal_a3654cfcc05663ced94ec21c580203cecac0eeebd792ff2a567883248250e22a->leave($__internal_a3654cfcc05663ced94ec21c580203cecac0eeebd792ff2a567883248250e22a_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 80,  169 => 79,  154 => 69,  144 => 65,  140 => 64,  136 => 63,  132 => 62,  128 => 61,  124 => 60,  120 => 59,  117 => 58,  113 => 57,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
