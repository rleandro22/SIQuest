<?php

/* UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig */
class __TwigTemplate_0e33972956718a0a7b86b14b6a9a7c450145660ad1b3e0646d30dbb8634fd536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig", 1);
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
        $__internal_20adf98303db99f09d1e3d1a6635704eeee5a9cf68be7793b2ee3372afcf8e7e = $this->env->getExtension("native_profiler");
        $__internal_20adf98303db99f09d1e3d1a6635704eeee5a9cf68be7793b2ee3372afcf8e7e->enter($__internal_20adf98303db99f09d1e3d1a6635704eeee5a9cf68be7793b2ee3372afcf8e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20adf98303db99f09d1e3d1a6635704eeee5a9cf68be7793b2ee3372afcf8e7e->leave($__internal_20adf98303db99f09d1e3d1a6635704eeee5a9cf68be7793b2ee3372afcf8e7e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3f2965a8831b6a8f2a81331a3c36d1609d5452ef856c711e951f935c02b57163 = $this->env->getExtension("native_profiler");
        $__internal_3f2965a8831b6a8f2a81331a3c36d1609d5452ef856c711e951f935c02b57163->enter($__internal_3f2965a8831b6a8f2a81331a3c36d1609d5452ef856c711e951f935c02b57163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_3f2965a8831b6a8f2a81331a3c36d1609d5452ef856c711e951f935c02b57163->leave($__internal_3f2965a8831b6a8f2a81331a3c36d1609d5452ef856c711e951f935c02b57163_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4ae6cc0d365f80b3e651b56dab4c8481efe3d36ef16bcfa124fee9bbb45ec84 = $this->env->getExtension("native_profiler");
        $__internal_b4ae6cc0d365f80b3e651b56dab4c8481efe3d36ef16bcfa124fee9bbb45ec84->enter($__internal_b4ae6cc0d365f80b3e651b56dab4c8481efe3d36ef16bcfa124fee9bbb45ec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Listado de Generaciones</a></li>
            <li class=\"active\">Listado de Cursos ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "html", null, true);
        echo "</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de Cursos de la ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "generacion", array()), "html", null, true);
        echo "</h1>
                </header>
                <br>

                ";
        // line 29
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 30
            echo "                    <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 32
            echo "                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                        </div>
                    </div>
                    <br><br>
                    <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                        <thead>
                            <tr>
                                <th data-toggle=\"true\">
                                    Curso
                                </th>
                                <th data-toggle=\"true\" data-hide=\"phone\">
                                    Profesores
                                </th>
                                <th data-toggle=\"true\" data-hide=\"phone\">
                                    Asistentes
                                </th>
                                <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                            </tr>
                        </thead>
                        <tbody> 
                            ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 55
                echo "                                <tr>
                                    <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrecurso", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 58
                if ( !twig_test_empty($this->getAttribute($context["entity"], "profesor", array()))) {
                    // line 59
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "profesor", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
                        // line 60
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profesor"], "usuario", array()), "nombre", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profesor"], "usuario", array()), "apellidos", array()), "html", null, true);
                        echo "
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                                        ";
                } else {
                    // line 63
                    echo "                                            <a href=\"#\">Agregar</a>
                                        ";
                }
                // line 65
                echo "                                    </td>
                                    <td>
                                        ";
                // line 67
                if ( !twig_test_empty($this->getAttribute($context["entity"], "asistenteAcademica", array()))) {
                    // line 68
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "asistenteAcademica", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["asistenteAcademica"]) {
                        // line 69
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asistenteAcademica"], "usuario", array()), "nombre", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asistenteAcademica"], "usuario", array()), "apellidos", array()), "html", null, true);
                        echo "<BR>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asistenteAcademica'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                                            <a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_matricularusuario", array("idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()), "idCurso" => $this->getAttribute($context["entity"], "id", array()), "tipoUsuario" => 2)), "html", null, true);
                    echo "\">Agregar</a>
                                        ";
                }
                // line 73
                echo "                                    </td>
                                    <td><a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcurso", array("id" => $this->getAttribute($context["entity"], "id", array()), "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                        <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecurso", array("id" => $this->getAttribute($context["entity"], "id", array()), "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
                echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
                        </tbody>
                    </table>
                    </br></br>
                ";
        }
        // line 84
        echo "                </br></br>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn btn-action\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_addcurso", array("id" => 0, "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
        echo "\">Agregar curso</button>
                    </div>
                </div>
                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>

            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_b4ae6cc0d365f80b3e651b56dab4c8481efe3d36ef16bcfa124fee9bbb45ec84->leave($__internal_b4ae6cc0d365f80b3e651b56dab4c8481efe3d36ef16bcfa124fee9bbb45ec84_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ed78a7e5a032cfdde9db410979045d2b369d6092611023feb63714e302cce37 = $this->env->getExtension("native_profiler");
        $__internal_0ed78a7e5a032cfdde9db410979045d2b369d6092611023feb63714e302cce37->enter($__internal_0ed78a7e5a032cfdde9db410979045d2b369d6092611023feb63714e302cce37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
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
        
        $__internal_0ed78a7e5a032cfdde9db410979045d2b369d6092611023feb63714e302cce37->leave($__internal_0ed78a7e5a032cfdde9db410979045d2b369d6092611023feb63714e302cce37_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 104,  242 => 103,  220 => 87,  215 => 84,  208 => 79,  198 => 75,  194 => 74,  191 => 73,  185 => 71,  174 => 69,  169 => 68,  167 => 67,  163 => 65,  159 => 63,  156 => 62,  145 => 60,  140 => 59,  138 => 58,  133 => 56,  130 => 55,  126 => 54,  102 => 32,  96 => 30,  94 => 29,  87 => 25,  80 => 20,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
