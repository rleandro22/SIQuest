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
        $__internal_20f2dcc5a5c4510e22adf2e736ba36e6cce1272621ad05e118f6b4556b6dfb6d = $this->env->getExtension("native_profiler");
        $__internal_20f2dcc5a5c4510e22adf2e736ba36e6cce1272621ad05e118f6b4556b6dfb6d->enter($__internal_20f2dcc5a5c4510e22adf2e736ba36e6cce1272621ad05e118f6b4556b6dfb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20f2dcc5a5c4510e22adf2e736ba36e6cce1272621ad05e118f6b4556b6dfb6d->leave($__internal_20f2dcc5a5c4510e22adf2e736ba36e6cce1272621ad05e118f6b4556b6dfb6d_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_69942df764ccce3d1a3793f95e6b6c881343fb97181996dec9bc06aaf7fe6330 = $this->env->getExtension("native_profiler");
        $__internal_69942df764ccce3d1a3793f95e6b6c881343fb97181996dec9bc06aaf7fe6330->enter($__internal_69942df764ccce3d1a3793f95e6b6c881343fb97181996dec9bc06aaf7fe6330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_69942df764ccce3d1a3793f95e6b6c881343fb97181996dec9bc06aaf7fe6330->leave($__internal_69942df764ccce3d1a3793f95e6b6c881343fb97181996dec9bc06aaf7fe6330_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2dcfe0b9c9253da6a546655276177aa059d26f2ba87796a932e8c490e3f5980 = $this->env->getExtension("native_profiler");
        $__internal_d2dcfe0b9c9253da6a546655276177aa059d26f2ba87796a932e8c490e3f5980->enter($__internal_d2dcfe0b9c9253da6a546655276177aa059d26f2ba87796a932e8c490e3f5980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                <br><br>
                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                        <a class=\"thumbnail\" data-toggle=\"modal\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
                            <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "generacion", array()), "html", null, true);
            echo "</p>
                            <img class=\"img-responsive\" src=\"http://placehold.it/400x300\" alt=\"\">
                        </a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deleteuser", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_d2dcfe0b9c9253da6a546655276177aa059d26f2ba87796a932e8c490e3f5980->leave($__internal_d2dcfe0b9c9253da6a546655276177aa059d26f2ba87796a932e8c490e3f5980_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3371ff69f1d01db0995bfed6ba4f28f9b4d6f83db0b984c6dd5a4913e90fdad = $this->env->getExtension("native_profiler");
        $__internal_c3371ff69f1d01db0995bfed6ba4f28f9b4d6f83db0b984c6dd5a4913e90fdad->enter($__internal_c3371ff69f1d01db0995bfed6ba4f28f9b4d6f83db0b984c6dd5a4913e90fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {
  
            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            }
            );
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
        
        $__internal_c3371ff69f1d01db0995bfed6ba4f28f9b4d6f83db0b984c6dd5a4913e90fdad->leave($__internal_c3371ff69f1d01db0995bfed6ba4f28f9b4d6f83db0b984c6dd5a4913e90fdad_prof);

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
        return array (  141 => 55,  135 => 54,  115 => 39,  106 => 36,  102 => 35,  96 => 32,  92 => 31,  89 => 30,  85 => 29,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
