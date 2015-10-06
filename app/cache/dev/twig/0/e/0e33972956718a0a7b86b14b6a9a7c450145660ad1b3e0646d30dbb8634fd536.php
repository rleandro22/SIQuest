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
        $__internal_357fc82f133c369db6edc31d51497712992a504cbc51ba65c19567b51e4ebd90 = $this->env->getExtension("native_profiler");
        $__internal_357fc82f133c369db6edc31d51497712992a504cbc51ba65c19567b51e4ebd90->enter($__internal_357fc82f133c369db6edc31d51497712992a504cbc51ba65c19567b51e4ebd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_357fc82f133c369db6edc31d51497712992a504cbc51ba65c19567b51e4ebd90->leave($__internal_357fc82f133c369db6edc31d51497712992a504cbc51ba65c19567b51e4ebd90_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2c7ba0f9a53e7877d3465c06c6c187c6860d34cf9ccc073e9713a617e87c0164 = $this->env->getExtension("native_profiler");
        $__internal_2c7ba0f9a53e7877d3465c06c6c187c6860d34cf9ccc073e9713a617e87c0164->enter($__internal_2c7ba0f9a53e7877d3465c06c6c187c6860d34cf9ccc073e9713a617e87c0164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_2c7ba0f9a53e7877d3465c06c6c187c6860d34cf9ccc073e9713a617e87c0164->leave($__internal_2c7ba0f9a53e7877d3465c06c6c187c6860d34cf9ccc073e9713a617e87c0164_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_87ed927828c5fc67ad8b825b8d50bfdfbbb120fc1a2e3ea18d0ea264a58ac3ea = $this->env->getExtension("native_profiler");
        $__internal_87ed927828c5fc67ad8b825b8d50bfdfbbb120fc1a2e3ea18d0ea264a58ac3ea->enter($__internal_87ed927828c5fc67ad8b825b8d50bfdfbbb120fc1a2e3ea18d0ea264a58ac3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "html", null, true);
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
        }
        // line 32
        echo "
                <br><br>
                 <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                    <thead>
                        <tr>
                            <th data-toggle=\"true\">
                                Curso
                            </th>
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody> 
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                            <tr>
                                <td width=\"90%\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrecurso", array()), "html", null, true);
            echo "</a></td>
                                <td><a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deleteuser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </tbody>
                </table>
                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_87ed927828c5fc67ad8b825b8d50bfdfbbb120fc1a2e3ea18d0ea264a58ac3ea->leave($__internal_87ed927828c5fc67ad8b825b8d50bfdfbbb120fc1a2e3ea18d0ea264a58ac3ea_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4015247c78d0e5c3d8309fcdffdf4027d715d45fb9b543fe5d92689b3cb558cb = $this->env->getExtension("native_profiler");
        $__internal_4015247c78d0e5c3d8309fcdffdf4027d715d45fb9b543fe5d92689b3cb558cb->enter($__internal_4015247c78d0e5c3d8309fcdffdf4027d715d45fb9b543fe5d92689b3cb558cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
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
        
        $__internal_4015247c78d0e5c3d8309fcdffdf4027d715d45fb9b543fe5d92689b3cb558cb->leave($__internal_4015247c78d0e5c3d8309fcdffdf4027d715d45fb9b543fe5d92689b3cb558cb_prof);

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
        return array (  171 => 70,  165 => 69,  143 => 52,  133 => 48,  129 => 47,  123 => 46,  120 => 45,  116 => 44,  102 => 32,  96 => 30,  94 => 29,  87 => 25,  80 => 20,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
