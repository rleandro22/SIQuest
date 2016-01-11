<?php

/* UciAdministradorBundle:VistaAreaConocimiento:indiceAreaConocimiento.html.twig */
class __TwigTemplate_2646a12d8729eb5257fcec38a4aa7321654d6c76b64b0d50114ceedf645fb111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaAreaConocimiento:indiceAreaConocimiento.html.twig", 1);
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
        $__internal_2dc6b31809e64851eabddb1bdf66aabc39c1acc986893648d4ce975ea3df3cba = $this->env->getExtension("native_profiler");
        $__internal_2dc6b31809e64851eabddb1bdf66aabc39c1acc986893648d4ce975ea3df3cba->enter($__internal_2dc6b31809e64851eabddb1bdf66aabc39c1acc986893648d4ce975ea3df3cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaAreaConocimiento:indiceAreaConocimiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc6b31809e64851eabddb1bdf66aabc39c1acc986893648d4ce975ea3df3cba->leave($__internal_2dc6b31809e64851eabddb1bdf66aabc39c1acc986893648d4ce975ea3df3cba_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_60bab021711614092dc6d3ccc3911d8f8c4e0491dd661fc5521cd51c7497e520 = $this->env->getExtension("native_profiler");
        $__internal_60bab021711614092dc6d3ccc3911d8f8c4e0491dd661fc5521cd51c7497e520->enter($__internal_60bab021711614092dc6d3ccc3911d8f8c4e0491dd661fc5521cd51c7497e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_60bab021711614092dc6d3ccc3911d8f8c4e0491dd661fc5521cd51c7497e520->leave($__internal_60bab021711614092dc6d3ccc3911d8f8c4e0491dd661fc5521cd51c7497e520_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_96d069964a1cc582c47c64ac1a7eb302038325c8bbd1c9abd5e2dfb2c8024fa9 = $this->env->getExtension("native_profiler");
        $__internal_96d069964a1cc582c47c64ac1a7eb302038325c8bbd1c9abd5e2dfb2c8024fa9->enter($__internal_96d069964a1cc582c47c64ac1a7eb302038325c8bbd1c9abd5e2dfb2c8024fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Areas de Conocimiento</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoAreaConocimiento.html.twig", "UciAdministradorBundle:VistaAreaConocimiento:indiceAreaConocimiento.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de generaciones</h1>
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
                            <div class=\"row\">
                                <div class=\"col-md-6\"><a data-toggle=\"modal\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
                                        <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "generacion", array()), "html", null, true);
            echo "</p>
                                    </a></div>
                                <div class=\"col-md-6\"><a data-toggle=\"modal\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
                            </div>

                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_indicecurso", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <img class=\"img-responsive\" src=\"";
            // line 41
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
        // line 46
        echo "                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_96d069964a1cc582c47c64ac1a7eb302038325c8bbd1c9abd5e2dfb2c8024fa9->leave($__internal_96d069964a1cc582c47c64ac1a7eb302038325c8bbd1c9abd5e2dfb2c8024fa9_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2b8572e25a5d6e7b50f3d6c5b8b422efe87fb135410ecc5c11d815e504f69bd = $this->env->getExtension("native_profiler");
        $__internal_f2b8572e25a5d6e7b50f3d6c5b8b422efe87fb135410ecc5c11d815e504f69bd->enter($__internal_f2b8572e25a5d6e7b50f3d6c5b8b422efe87fb135410ecc5c11d815e504f69bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
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
        
        $__internal_f2b8572e25a5d6e7b50f3d6c5b8b422efe87fb135410ecc5c11d815e504f69bd->leave($__internal_f2b8572e25a5d6e7b50f3d6c5b8b422efe87fb135410ecc5c11d815e504f69bd_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaAreaConocimiento:indiceAreaConocimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 62,  148 => 61,  128 => 46,  117 => 41,  113 => 40,  107 => 37,  103 => 36,  98 => 34,  94 => 33,  89 => 30,  85 => 29,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
