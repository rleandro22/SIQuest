<?php

/* UciAdministradorBundle:VistaLibro:indiceLibro.html.twig */
class __TwigTemplate_fbdc73fad4a84fb23ffbd9549bac22ffe0fdf3d4ee45c02e950654690613e434 extends Twig_Template
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
        $__internal_edd1b598e19abf7c733c9ce97a3301262e1e41e3498a22ac8eda78dded7f97f8 = $this->env->getExtension("native_profiler");
        $__internal_edd1b598e19abf7c733c9ce97a3301262e1e41e3498a22ac8eda78dded7f97f8->enter($__internal_edd1b598e19abf7c733c9ce97a3301262e1e41e3498a22ac8eda78dded7f97f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd1b598e19abf7c733c9ce97a3301262e1e41e3498a22ac8eda78dded7f97f8->leave($__internal_edd1b598e19abf7c733c9ce97a3301262e1e41e3498a22ac8eda78dded7f97f8_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c95604a53b9722141ce607ba4aa88784c85fffe4003078d8941d8ae4f8220635 = $this->env->getExtension("native_profiler");
        $__internal_c95604a53b9722141ce607ba4aa88784c85fffe4003078d8941d8ae4f8220635->enter($__internal_c95604a53b9722141ce607ba4aa88784c85fffe4003078d8941d8ae4f8220635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_c95604a53b9722141ce607ba4aa88784c85fffe4003078d8941d8ae4f8220635->leave($__internal_c95604a53b9722141ce607ba4aa88784c85fffe4003078d8941d8ae4f8220635_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1655fc0ec9fc6674019c2d3696d098265f894c26037ed18cd5dd59b3137c570 = $this->env->getExtension("native_profiler");
        $__internal_d1655fc0ec9fc6674019c2d3696d098265f894c26037ed18cd5dd59b3137c570->enter($__internal_d1655fc0ec9fc6674019c2d3696d098265f894c26037ed18cd5dd59b3137c570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</td>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editarlibro", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletelibro", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
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
        
        $__internal_d1655fc0ec9fc6674019c2d3696d098265f894c26037ed18cd5dd59b3137c570->leave($__internal_d1655fc0ec9fc6674019c2d3696d098265f894c26037ed18cd5dd59b3137c570_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8ef9f9d2903d7eaf8eb9bbb5986ec8fe61a6352f3f689dfb9f6fe72f764e951 = $this->env->getExtension("native_profiler");
        $__internal_d8ef9f9d2903d7eaf8eb9bbb5986ec8fe61a6352f3f689dfb9f6fe72f764e951->enter($__internal_d8ef9f9d2903d7eaf8eb9bbb5986ec8fe61a6352f3f689dfb9f6fe72f764e951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d8ef9f9d2903d7eaf8eb9bbb5986ec8fe61a6352f3f689dfb9f6fe72f764e951->leave($__internal_d8ef9f9d2903d7eaf8eb9bbb5986ec8fe61a6352f3f689dfb9f6fe72f764e951_prof);

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
        return array (  176 => 81,  170 => 80,  155 => 70,  145 => 66,  140 => 65,  136 => 63,  132 => 61,  130 => 60,  126 => 59,  122 => 58,  118 => 57,  115 => 56,  111 => 55,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
