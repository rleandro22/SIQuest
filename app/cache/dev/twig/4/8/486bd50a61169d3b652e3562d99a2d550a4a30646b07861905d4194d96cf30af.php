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
        $__internal_bc14d180d0348b62315b5e5c14d829941a778e26909792ead46e2ed455bb36c8 = $this->env->getExtension("native_profiler");
        $__internal_bc14d180d0348b62315b5e5c14d829941a778e26909792ead46e2ed455bb36c8->enter($__internal_bc14d180d0348b62315b5e5c14d829941a778e26909792ead46e2ed455bb36c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:indiceUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc14d180d0348b62315b5e5c14d829941a778e26909792ead46e2ed455bb36c8->leave($__internal_bc14d180d0348b62315b5e5c14d829941a778e26909792ead46e2ed455bb36c8_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_99c2f4c210a8e2b04a80c41f1289784a2b527df770d743e58a40d77fd40675d4 = $this->env->getExtension("native_profiler");
        $__internal_99c2f4c210a8e2b04a80c41f1289784a2b527df770d743e58a40d77fd40675d4->enter($__internal_99c2f4c210a8e2b04a80c41f1289784a2b527df770d743e58a40d77fd40675d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_99c2f4c210a8e2b04a80c41f1289784a2b527df770d743e58a40d77fd40675d4->leave($__internal_99c2f4c210a8e2b04a80c41f1289784a2b527df770d743e58a40d77fd40675d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f68b8b813756198fddfffb72a2713b8138e7f83f781438f3257c3abe7ac00109 = $this->env->getExtension("native_profiler");
        $__internal_f68b8b813756198fddfffb72a2713b8138e7f83f781438f3257c3abe7ac00109->enter($__internal_f68b8b813756198fddfffb72a2713b8138e7f83f781438f3257c3abe7ac00109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Inicio</a></li>
            <li class=\"active\">Mantenimiento de usuario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Menu de mantenimiento</h4>
                    </div>
                </div>
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <div id='cssmenu'>
                            <ul>
                                <li><a href='#'><span>Actualizar</span></a></li>
                                <li class='active has-sub'><a href='#'><span>Ingresar</span></a>
                                    <ul>
                                        <li><a href='#'><span>PMBok</span></a>
                                        </li>
                                        <li><a href='#'><span>Otro</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href='#'><span>Borrar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
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
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 84
            echo "                            <tr>
                                <td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                                <td><span class=\"status-metro status-active\" title=\"Active\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "nombre", array()), "html", null, true);
            echo "</span></td>
                                <td><a class=\"row-delete\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a class=\"row-delete\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
                    </tbody>
                </table>


                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_f68b8b813756198fddfffb72a2713b8138e7f83f781438f3257c3abe7ac00109->leave($__internal_f68b8b813756198fddfffb72a2713b8138e7f83f781438f3257c3abe7ac00109_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d04f94acf53a5d918e6e859495f8463adf9c43b243f8c5f169fccbb93d26be4 = $this->env->getExtension("native_profiler");
        $__internal_6d04f94acf53a5d918e6e859495f8463adf9c43b243f8c5f169fccbb93d26be4->enter($__internal_6d04f94acf53a5d918e6e859495f8463adf9c43b243f8c5f169fccbb93d26be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
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
        
        $__internal_6d04f94acf53a5d918e6e859495f8463adf9c43b243f8c5f169fccbb93d26be4->leave($__internal_6d04f94acf53a5d918e6e859495f8463adf9c43b243f8c5f169fccbb93d26be4_prof);

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
        return array (  203 => 109,  197 => 108,  179 => 95,  169 => 91,  165 => 90,  161 => 89,  157 => 88,  153 => 87,  149 => 86,  143 => 85,  140 => 84,  136 => 83,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
