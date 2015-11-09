<?php

/* UciAdministradorBundle:VistaLibro:indiceLibro.html.twig */
class __TwigTemplate_f6f2b6cee9c91e3afd0dc6e3b52ad3a7de2b1885132eb7b8d38060fb1bfd372c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig", 1);
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
        $__internal_eb183c129308473077aa9606a98a2a19aa48e81b3f66b43df76fc50bfbe7e4f4 = $this->env->getExtension("native_profiler");
        $__internal_eb183c129308473077aa9606a98a2a19aa48e81b3f66b43df76fc50bfbe7e4f4->enter($__internal_eb183c129308473077aa9606a98a2a19aa48e81b3f66b43df76fc50bfbe7e4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb183c129308473077aa9606a98a2a19aa48e81b3f66b43df76fc50bfbe7e4f4->leave($__internal_eb183c129308473077aa9606a98a2a19aa48e81b3f66b43df76fc50bfbe7e4f4_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3ebe6e6cf46a77c683a7a9cddadc52c5f0e8ccddeaa1b2c80ce7962e3de46b12 = $this->env->getExtension("native_profiler");
        $__internal_3ebe6e6cf46a77c683a7a9cddadc52c5f0e8ccddeaa1b2c80ce7962e3de46b12->enter($__internal_3ebe6e6cf46a77c683a7a9cddadc52c5f0e8ccddeaa1b2c80ce7962e3de46b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_3ebe6e6cf46a77c683a7a9cddadc52c5f0e8ccddeaa1b2c80ce7962e3de46b12->leave($__internal_3ebe6e6cf46a77c683a7a9cddadc52c5f0e8ccddeaa1b2c80ce7962e3de46b12_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_390659c78cfb3ec7de22c7f8b87c37a360e156aebbefc8c55f88f111f0c7c8b0 = $this->env->getExtension("native_profiler");
        $__internal_390659c78cfb3ec7de22c7f8b87c37a360e156aebbefc8c55f88f111f0c7c8b0->enter($__internal_390659c78cfb3ec7de22c7f8b87c37a360e156aebbefc8c55f88f111f0c7c8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Libros</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoLibro.html.twig", "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de Libros</h1>
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
                                Titulo
                            </th>
                            <th data-hide=\"phone\">
                                Año
                            </th>
                            <th data-hide=\"phone\">
                                Idioma
                            </th>
                            <th data-hide=\"phone\">
                                Pmbok
                            </th>
                            
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody> 
                        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 56
            echo "                            <tr>
                                <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anio", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idiomas", array()), "html", null, true);
            echo "</td>
                                ";
            // line 60
            if (($this->getAttribute($context["entity"], "esPmbok", array()) == 0)) {
                // line 61
                echo "                                <td><span class=\"status-metro status-disabled\" title=\"Active\">No</span></td>
                                ";
            } else {
                // line 63
                echo "                                 <td><span class=\"status-metro status-active\" title=\"Active\">Si</span></td>
                                ";
            }
            // line 65
            echo "                                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deleteuser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
                </table>
                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_390659c78cfb3ec7de22c7f8b87c37a360e156aebbefc8c55f88f111f0c7c8b0->leave($__internal_390659c78cfb3ec7de22c7f8b87c37a360e156aebbefc8c55f88f111f0c7c8b0_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1903296bfcacbd7b00e86d97e58b68f62e87e31ada4a1076e2b7a8ea1a1dc8ce = $this->env->getExtension("native_profiler");
        $__internal_1903296bfcacbd7b00e86d97e58b68f62e87e31ada4a1076e2b7a8ea1a1dc8ce->enter($__internal_1903296bfcacbd7b00e86d97e58b68f62e87e31ada4a1076e2b7a8ea1a1dc8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
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
        
        $__internal_1903296bfcacbd7b00e86d97e58b68f62e87e31ada4a1076e2b7a8ea1a1dc8ce->leave($__internal_1903296bfcacbd7b00e86d97e58b68f62e87e31ada4a1076e2b7a8ea1a1dc8ce_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 81,  172 => 80,  157 => 70,  147 => 66,  142 => 65,  138 => 63,  134 => 61,  132 => 60,  128 => 59,  124 => 58,  118 => 57,  115 => 56,  111 => 55,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
