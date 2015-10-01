<?php

/* UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig */
class __TwigTemplate_0c53b9258606805cbc349a62902323dccbd780f0a31fbdaa66fdedc7a392f288 extends Twig_Template
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
        $__internal_6cb9c0fed4b675dca7f54360a8eed8af970b148d2e3c4e03d1a2b25438b89039 = $this->env->getExtension("native_profiler");
        $__internal_6cb9c0fed4b675dca7f54360a8eed8af970b148d2e3c4e03d1a2b25438b89039->enter($__internal_6cb9c0fed4b675dca7f54360a8eed8af970b148d2e3c4e03d1a2b25438b89039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cb9c0fed4b675dca7f54360a8eed8af970b148d2e3c4e03d1a2b25438b89039->leave($__internal_6cb9c0fed4b675dca7f54360a8eed8af970b148d2e3c4e03d1a2b25438b89039_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f4d3e15fb43798b95876ad52ef08cbb733eff6741ba7b3d8f00a28f48e8e5dd4 = $this->env->getExtension("native_profiler");
        $__internal_f4d3e15fb43798b95876ad52ef08cbb733eff6741ba7b3d8f00a28f48e8e5dd4->enter($__internal_f4d3e15fb43798b95876ad52ef08cbb733eff6741ba7b3d8f00a28f48e8e5dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_f4d3e15fb43798b95876ad52ef08cbb733eff6741ba7b3d8f00a28f48e8e5dd4->leave($__internal_f4d3e15fb43798b95876ad52ef08cbb733eff6741ba7b3d8f00a28f48e8e5dd4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6d8cd7d54e398b8e813d8652129b4bd2bb705cddf3920ebac699afccd91a4ab = $this->env->getExtension("native_profiler");
        $__internal_a6d8cd7d54e398b8e813d8652129b4bd2bb705cddf3920ebac699afccd91a4ab->enter($__internal_a6d8cd7d54e398b8e813d8652129b4bd2bb705cddf3920ebac699afccd91a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6d8cd7d54e398b8e813d8652129b4bd2bb705cddf3920ebac699afccd91a4ab->leave($__internal_a6d8cd7d54e398b8e813d8652129b4bd2bb705cddf3920ebac699afccd91a4ab_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_190af4fb83aa796ceb9442c7b90fc88a0f42ad635927e71da8cd7a46f1eb23d8 = $this->env->getExtension("native_profiler");
        $__internal_190af4fb83aa796ceb9442c7b90fc88a0f42ad635927e71da8cd7a46f1eb23d8->enter($__internal_190af4fb83aa796ceb9442c7b90fc88a0f42ad635927e71da8cd7a46f1eb23d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_190af4fb83aa796ceb9442c7b90fc88a0f42ad635927e71da8cd7a46f1eb23d8->leave($__internal_190af4fb83aa796ceb9442c7b90fc88a0f42ad635927e71da8cd7a46f1eb23d8_prof);

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
        return array (  177 => 80,  171 => 79,  156 => 69,  146 => 65,  142 => 64,  138 => 63,  134 => 62,  130 => 61,  126 => 60,  120 => 59,  117 => 58,  113 => 57,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
