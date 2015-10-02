<?php

/* UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig */
class __TwigTemplate_9f962366d497f571464b69d92a4a707ac77bb5ddb51f08050a55cdba1734c77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig", 1);
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
        $__internal_f6e9544e2bb866d804c9c111cff954879c1177bfa8a59efd1fd49ba2a602aafa = $this->env->getExtension("native_profiler");
        $__internal_f6e9544e2bb866d804c9c111cff954879c1177bfa8a59efd1fd49ba2a602aafa->enter($__internal_f6e9544e2bb866d804c9c111cff954879c1177bfa8a59efd1fd49ba2a602aafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e9544e2bb866d804c9c111cff954879c1177bfa8a59efd1fd49ba2a602aafa->leave($__internal_f6e9544e2bb866d804c9c111cff954879c1177bfa8a59efd1fd49ba2a602aafa_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0aa8db0d889e8dd4e49819fe20014f44ca38da0c156824bdb50e28e2c806938f = $this->env->getExtension("native_profiler");
        $__internal_0aa8db0d889e8dd4e49819fe20014f44ca38da0c156824bdb50e28e2c806938f->enter($__internal_0aa8db0d889e8dd4e49819fe20014f44ca38da0c156824bdb50e28e2c806938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_0aa8db0d889e8dd4e49819fe20014f44ca38da0c156824bdb50e28e2c806938f->leave($__internal_0aa8db0d889e8dd4e49819fe20014f44ca38da0c156824bdb50e28e2c806938f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ac59852e175af423f1deff832b2727db865857dbb197129cd796b51a0e5ca5a = $this->env->getExtension("native_profiler");
        $__internal_4ac59852e175af423f1deff832b2727db865857dbb197129cd796b51a0e5ca5a->enter($__internal_4ac59852e175af423f1deff832b2727db865857dbb197129cd796b51a0e5ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Generaciones</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de categorias</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

    
                <br><br><br>
                        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                        <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                            <a class=\"thumbnail\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "generacion", array()), "html", null, true);
            echo "</p>
                                <img class=\"img-responsive\" src=\"http://placehold.it/400x300\" alt=\"\">
                            </a>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deleteuser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                <!-- /Aquí acaba el contenido --> 
    

            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_4ac59852e175af423f1deff832b2727db865857dbb197129cd796b51a0e5ca5a->leave($__internal_4ac59852e175af423f1deff832b2727db865857dbb197129cd796b51a0e5ca5a_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96c0b17d99feee3c17f7002462d7f79d4718db0ae1c29862b2b0661443df616a = $this->env->getExtension("native_profiler");
        $__internal_96c0b17d99feee3c17f7002462d7f79d4718db0ae1c29862b2b0661443df616a->enter($__internal_96c0b17d99feee3c17f7002462d7f79d4718db0ae1c29862b2b0661443df616a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {
            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
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
        
        $__internal_96c0b17d99feee3c17f7002462d7f79d4718db0ae1c29862b2b0661443df616a->leave($__internal_96c0b17d99feee3c17f7002462d7f79d4718db0ae1c29862b2b0661443df616a_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  132 => 51,  117 => 41,  108 => 38,  104 => 37,  98 => 34,  94 => 33,  91 => 32,  87 => 31,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
