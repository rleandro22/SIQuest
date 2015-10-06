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
        $__internal_002f952d364d694d6f1c715cfdcc3aa96895c648728e96dfdf1f09e912c0b3e2 = $this->env->getExtension("native_profiler");
        $__internal_002f952d364d694d6f1c715cfdcc3aa96895c648728e96dfdf1f09e912c0b3e2->enter($__internal_002f952d364d694d6f1c715cfdcc3aa96895c648728e96dfdf1f09e912c0b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_002f952d364d694d6f1c715cfdcc3aa96895c648728e96dfdf1f09e912c0b3e2->leave($__internal_002f952d364d694d6f1c715cfdcc3aa96895c648728e96dfdf1f09e912c0b3e2_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ee4da5c3494a2cb9d38f7b082e882273189bc30f289c9f573ef47f57f4947b1b = $this->env->getExtension("native_profiler");
        $__internal_ee4da5c3494a2cb9d38f7b082e882273189bc30f289c9f573ef47f57f4947b1b->enter($__internal_ee4da5c3494a2cb9d38f7b082e882273189bc30f289c9f573ef47f57f4947b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_ee4da5c3494a2cb9d38f7b082e882273189bc30f289c9f573ef47f57f4947b1b->leave($__internal_ee4da5c3494a2cb9d38f7b082e882273189bc30f289c9f573ef47f57f4947b1b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee80420dcdbf7fba388ffbf8cbb427b5ecaff0b4e00a227b1dcab027de856b0 = $this->env->getExtension("native_profiler");
        $__internal_1ee80420dcdbf7fba388ffbf8cbb427b5ecaff0b4e00a227b1dcab027de856b0->enter($__internal_1ee80420dcdbf7fba388ffbf8cbb427b5ecaff0b4e00a227b1dcab027de856b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "                    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                        <div class=\"thumbnail\">
                            <div class=\"row\">
                                <div class=\"col-md-6\"><a data-toggle=\"modal\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
                                        <p>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrecurso", array()), "html", null, true);
            echo "</p>
                                    </a></div>
                                <div class=\"col-md-6\"><a data-toggle=\"modal\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
                            </div>

                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categoria.png"), "html", null, true);
            echo "\" alt=\"\">
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_1ee80420dcdbf7fba388ffbf8cbb427b5ecaff0b4e00a227b1dcab027de856b0->leave($__internal_1ee80420dcdbf7fba388ffbf8cbb427b5ecaff0b4e00a227b1dcab027de856b0_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66808676063b60aecc8f324b26485998f606f210617b84452ee02bca9875f504 = $this->env->getExtension("native_profiler");
        $__internal_66808676063b60aecc8f324b26485998f606f210617b84452ee02bca9875f504->enter($__internal_66808676063b60aecc8f324b26485998f606f210617b84452ee02bca9875f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
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
        
        $__internal_66808676063b60aecc8f324b26485998f606f210617b84452ee02bca9875f504->leave($__internal_66808676063b60aecc8f324b26485998f606f210617b84452ee02bca9875f504_prof);

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
        return array (  172 => 67,  166 => 66,  146 => 51,  135 => 46,  128 => 42,  124 => 41,  119 => 39,  115 => 38,  110 => 35,  106 => 34,  102 => 32,  96 => 30,  94 => 29,  87 => 25,  80 => 20,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
