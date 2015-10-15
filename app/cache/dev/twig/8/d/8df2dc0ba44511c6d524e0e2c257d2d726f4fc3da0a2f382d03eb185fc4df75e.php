<?php

/* UciAdministradorBundle:VistaLibro:indiceLibro.html.twig */
class __TwigTemplate_8df2dc0ba44511c6d524e0e2c257d2d726f4fc3da0a2f382d03eb185fc4df75e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6783693c4d0be3fe202b998a9eac34e671174a091d0e8df35a0d341de27a2c32 = $this->env->getExtension("native_profiler");
        $__internal_6783693c4d0be3fe202b998a9eac34e671174a091d0e8df35a0d341de27a2c32->enter($__internal_6783693c4d0be3fe202b998a9eac34e671174a091d0e8df35a0d341de27a2c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:indiceLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6783693c4d0be3fe202b998a9eac34e671174a091d0e8df35a0d341de27a2c32->leave($__internal_6783693c4d0be3fe202b998a9eac34e671174a091d0e8df35a0d341de27a2c32_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_57553a3126df9fa31853c3c2669b03e3916415ad6ca327a82776ec70878a3ab9 = $this->env->getExtension("native_profiler");
        $__internal_57553a3126df9fa31853c3c2669b03e3916415ad6ca327a82776ec70878a3ab9->enter($__internal_57553a3126df9fa31853c3c2669b03e3916415ad6ca327a82776ec70878a3ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_57553a3126df9fa31853c3c2669b03e3916415ad6ca327a82776ec70878a3ab9->leave($__internal_57553a3126df9fa31853c3c2669b03e3916415ad6ca327a82776ec70878a3ab9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f90e3d99e2a5134bbe2785a5b021483fdbafabc155839918b247d80d1b668d57 = $this->env->getExtension("native_profiler");
        $__internal_f90e3d99e2a5134bbe2785a5b021483fdbafabc155839918b247d80d1b668d57->enter($__internal_f90e3d99e2a5134bbe2785a5b021483fdbafabc155839918b247d80d1b668d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f90e3d99e2a5134bbe2785a5b021483fdbafabc155839918b247d80d1b668d57->leave($__internal_f90e3d99e2a5134bbe2785a5b021483fdbafabc155839918b247d80d1b668d57_prof);

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
        return array (  156 => 70,  146 => 66,  141 => 65,  137 => 63,  133 => 61,  131 => 60,  127 => 59,  123 => 58,  117 => 57,  114 => 56,  110 => 55,  72 => 19,  70 => 18,  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
