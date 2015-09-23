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
        $__internal_98c6b2ce85e0939909c76dd4aac2fc4b6010563220e4962fe4469fcd5c840670 = $this->env->getExtension("native_profiler");
        $__internal_98c6b2ce85e0939909c76dd4aac2fc4b6010563220e4962fe4469fcd5c840670->enter($__internal_98c6b2ce85e0939909c76dd4aac2fc4b6010563220e4962fe4469fcd5c840670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:indiceUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c6b2ce85e0939909c76dd4aac2fc4b6010563220e4962fe4469fcd5c840670->leave($__internal_98c6b2ce85e0939909c76dd4aac2fc4b6010563220e4962fe4469fcd5c840670_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_cc6f76c8907bb31272344b1e94e82b90f68ffd41b92cdd8d7e91dc1275a3fb3b = $this->env->getExtension("native_profiler");
        $__internal_cc6f76c8907bb31272344b1e94e82b90f68ffd41b92cdd8d7e91dc1275a3fb3b->enter($__internal_cc6f76c8907bb31272344b1e94e82b90f68ffd41b92cdd8d7e91dc1275a3fb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_cc6f76c8907bb31272344b1e94e82b90f68ffd41b92cdd8d7e91dc1275a3fb3b->leave($__internal_cc6f76c8907bb31272344b1e94e82b90f68ffd41b92cdd8d7e91dc1275a3fb3b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dce84a0bef8cb035ce3a4f5830ea8ce88f244aa2702abb2b6c8800d2eef0f57 = $this->env->getExtension("native_profiler");
        $__internal_0dce84a0bef8cb035ce3a4f5830ea8ce88f244aa2702abb2b6c8800d2eef0f57->enter($__internal_0dce84a0bef8cb035ce3a4f5830ea8ce88f244aa2702abb2b6c8800d2eef0f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                Apellido
                            </th>
                            <th data-hide=\"phone\">
                                Job Title
                            </th>
                            <th data-hide=\"phone\">
                                DOB
                            </th>
                            <th data-hide=\"phone\">
                                Status
                            </th>
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Isidra</td>
                            <td><a href=\"#\">Boudreaux</a></td>
                            <td>Traffic Court Referee</td>
                            <td data-value=\"78025368997\">22 Jun 1972</td>
                            <td data-value=\"1\"><span class=\"status-metro status-active\" title=\"Active\">Active</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td><a href=\"#\">Airline Transport Pilot</a></td>
                            <td data-value=\"370961043292\">3 Oct 1981</td>
                            <td data-value=\"2\"><span class=\"status-metro status-disabled\" title=\"Disabled\">Disabled</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td data-value=\"-22133780420\">19 Apr 1969</td>
                            <td data-value=\"3\"><span class=\"status-metro status-suspended\" title=\"Suspended\">Suspended</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td data-value=\"250833505574\">13 Dec 1977</td>
                            <td data-value=\"1\"><span class=\"status-metro status-active\" title=\"Active\">Active</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td data-value=\"694116650726\">30 Dec 1991</td>
                            <td data-value=\"3\"><span class=\"status-metro status-suspended\" title=\"Suspended\">Suspended</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href=\"#\">Woldt</a></td>
                            <td><a href=\"#\">Business Services Sales Representative</a></td>
                            <td data-value=\"561440464855\">17 Oct 1987</td>
                            <td data-value=\"2\"><span class=\"status-metro status-disabled\" title=\"Disabled\">Disabled</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td data-value=\"437400551390\">11 Nov 1983</td>
                            <td data-value=\"2\"><span class=\"status-metro status-disabled\" title=\"Disabled\">Disabled</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href=\"#\">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td data-value=\"-257733999319\">1 Nov 1961</td>
                            <td data-value=\"3\"><span class=\"status-metro status-suspended\" title=\"Suspended\">Suspended</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td data-value=\"362134712000\">23 Jun 1981</td>
                            <td data-value=\"1\"><span class=\"status-metro status-active\" title=\"Active\">Active</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td data-value=\"500874333932\">15 Nov 1985</td>
                            <td data-value=\"3\"><span class=\"status-metro status-suspended\" title=\"Suspended\">Suspended</span></td>
                            <td><a class=\"row-delete\" href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"row-delete\" href=\"#\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                    </tbody>

                </table>


                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_0dce84a0bef8cb035ce3a4f5830ea8ce88f244aa2702abb2b6c8800d2eef0f57->leave($__internal_0dce84a0bef8cb035ce3a4f5830ea8ce88f244aa2702abb2b6c8800d2eef0f57_prof);

    }

    // line 194
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8df2ebc8546b00b97d323c5067c6b47ca4024e5f7a845062fca49f31c66f8950 = $this->env->getExtension("native_profiler");
        $__internal_8df2ebc8546b00b97d323c5067c6b47ca4024e5f7a845062fca49f31c66f8950->enter($__internal_8df2ebc8546b00b97d323c5067c6b47ca4024e5f7a845062fca49f31c66f8950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 195
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(function () {
\t\t\t\$('table').footable().on('click', '.row-delete', function(e) {
\t\t\t\te.preventDefault();
\t\t\t});
        });
    </script>
";
        
        $__internal_8df2ebc8546b00b97d323c5067c6b47ca4024e5f7a845062fca49f31c66f8950->leave($__internal_8df2ebc8546b00b97d323c5067c6b47ca4024e5f7a845062fca49f31c66f8950_prof);

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
        return array (  256 => 195,  250 => 194,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
