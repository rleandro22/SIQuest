<?php

/* UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig */
class __TwigTemplate_ebd3912ca34d72abc278e9cdaa1d8ed1783ddbd627e68fef2bd0cccf54a7322a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig", 1);
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
        $__internal_71bd6f0f914682d5298256d30bc640a8e8c3bae7acae45085942d4e3f4fee8c1 = $this->env->getExtension("native_profiler");
        $__internal_71bd6f0f914682d5298256d30bc640a8e8c3bae7acae45085942d4e3f4fee8c1->enter($__internal_71bd6f0f914682d5298256d30bc640a8e8c3bae7acae45085942d4e3f4fee8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71bd6f0f914682d5298256d30bc640a8e8c3bae7acae45085942d4e3f4fee8c1->leave($__internal_71bd6f0f914682d5298256d30bc640a8e8c3bae7acae45085942d4e3f4fee8c1_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3fb1d77e9593730434542a1345631f5be89c15abe980b0f29b4b3fe6bdcf5e0c = $this->env->getExtension("native_profiler");
        $__internal_3fb1d77e9593730434542a1345631f5be89c15abe980b0f29b4b3fe6bdcf5e0c->enter($__internal_3fb1d77e9593730434542a1345631f5be89c15abe980b0f29b4b3fe6bdcf5e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_3fb1d77e9593730434542a1345631f5be89c15abe980b0f29b4b3fe6bdcf5e0c->leave($__internal_3fb1d77e9593730434542a1345631f5be89c15abe980b0f29b4b3fe6bdcf5e0c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_307625893d2011040d0f8d6d817542813b59bc4565bea03b70c070f5c0eddb7a = $this->env->getExtension("native_profiler");
        $__internal_307625893d2011040d0f8d6d817542813b59bc4565bea03b70c070f5c0eddb7a->enter($__internal_307625893d2011040d0f8d6d817542813b59bc4565bea03b70c070f5c0eddb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Cuestionarios</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de cuestionarios</h1>
                </header>
                <br>

                <br><br>
                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                        <div class=\"thumbnail\">
                            <a data-toggle=\"modal\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
                                <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuestionarioname", array()), "html", null, true);
            echo "</p>
                            </a>

                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_indicecurso", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <img class=\"img-responsive\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img_test_1.png"), "html", null, true);
            echo "\" alt=\"\">
                            </a>
                            <br>
                            <div class=\"row\">
                                <div class=\"col-md-6\"></div>
                                <div class=\"col-md-6\"><span class=\"pull-right\"><a data-toggle=\"modal\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
                            </div>
                            
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_307625893d2011040d0f8d6d817542813b59bc4565bea03b70c070f5c0eddb7a->leave($__internal_307625893d2011040d0f8d6d817542813b59bc4565bea03b70c070f5c0eddb7a_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b37abb3c8fdb970ec7d3741fd9626ab33fe941fb3ffdf33869367e0fc9dac7a = $this->env->getExtension("native_profiler");
        $__internal_0b37abb3c8fdb970ec7d3741fd9626ab33fe941fb3ffdf33869367e0fc9dac7a->enter($__internal_0b37abb3c8fdb970ec7d3741fd9626ab33fe941fb3ffdf33869367e0fc9dac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
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
        
        $__internal_0b37abb3c8fdb970ec7d3741fd9626ab33fe941fb3ffdf33869367e0fc9dac7a->leave($__internal_0b37abb3c8fdb970ec7d3741fd9626ab33fe941fb3ffdf33869367e0fc9dac7a_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  151 => 64,  131 => 49,  119 => 43,  115 => 42,  107 => 37,  103 => 36,  97 => 33,  93 => 32,  89 => 30,  85 => 29,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
