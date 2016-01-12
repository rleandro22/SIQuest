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
        $__internal_2f32b0ef58e79e585dad4c6fc701a9a739a032e3da921d2cf9d379c5b0516013 = $this->env->getExtension("native_profiler");
        $__internal_2f32b0ef58e79e585dad4c6fc701a9a739a032e3da921d2cf9d379c5b0516013->enter($__internal_2f32b0ef58e79e585dad4c6fc701a9a739a032e3da921d2cf9d379c5b0516013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f32b0ef58e79e585dad4c6fc701a9a739a032e3da921d2cf9d379c5b0516013->leave($__internal_2f32b0ef58e79e585dad4c6fc701a9a739a032e3da921d2cf9d379c5b0516013_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_64d77ee1b4550fe8d5e40c578e600255500b18639790e2ffa0b3ec8a8ff45c88 = $this->env->getExtension("native_profiler");
        $__internal_64d77ee1b4550fe8d5e40c578e600255500b18639790e2ffa0b3ec8a8ff45c88->enter($__internal_64d77ee1b4550fe8d5e40c578e600255500b18639790e2ffa0b3ec8a8ff45c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_64d77ee1b4550fe8d5e40c578e600255500b18639790e2ffa0b3ec8a8ff45c88->leave($__internal_64d77ee1b4550fe8d5e40c578e600255500b18639790e2ffa0b3ec8a8ff45c88_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_13c1b8b9abe138b80d6e054afba282b917fc9d0c127d1c833b9a74e2297395f5 = $this->env->getExtension("native_profiler");
        $__internal_13c1b8b9abe138b80d6e054afba282b917fc9d0c127d1c833b9a74e2297395f5->enter($__internal_13c1b8b9abe138b80d6e054afba282b917fc9d0c127d1c833b9a74e2297395f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13c1b8b9abe138b80d6e054afba282b917fc9d0c127d1c833b9a74e2297395f5->leave($__internal_13c1b8b9abe138b80d6e054afba282b917fc9d0c127d1c833b9a74e2297395f5_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7386f6a0a26376d515dedf12c2ad42760242bb24c28770b1f52450d009c96ba9 = $this->env->getExtension("native_profiler");
        $__internal_7386f6a0a26376d515dedf12c2ad42760242bb24c28770b1f52450d009c96ba9->enter($__internal_7386f6a0a26376d515dedf12c2ad42760242bb24c28770b1f52450d009c96ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7386f6a0a26376d515dedf12c2ad42760242bb24c28770b1f52450d009c96ba9->leave($__internal_7386f6a0a26376d515dedf12c2ad42760242bb24c28770b1f52450d009c96ba9_prof);

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
