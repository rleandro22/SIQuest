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
        $__internal_c2f2c588e3a115d0c66a54df980f20a22075348c68f5b1aadf4beab5c1cdfef3 = $this->env->getExtension("native_profiler");
        $__internal_c2f2c588e3a115d0c66a54df980f20a22075348c68f5b1aadf4beab5c1cdfef3->enter($__internal_c2f2c588e3a115d0c66a54df980f20a22075348c68f5b1aadf4beab5c1cdfef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f2c588e3a115d0c66a54df980f20a22075348c68f5b1aadf4beab5c1cdfef3->leave($__internal_c2f2c588e3a115d0c66a54df980f20a22075348c68f5b1aadf4beab5c1cdfef3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_dbc986c9b83decc90d48e2079177641690524314fcbb18b99e4572c0fc26716d = $this->env->getExtension("native_profiler");
        $__internal_dbc986c9b83decc90d48e2079177641690524314fcbb18b99e4572c0fc26716d->enter($__internal_dbc986c9b83decc90d48e2079177641690524314fcbb18b99e4572c0fc26716d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_dbc986c9b83decc90d48e2079177641690524314fcbb18b99e4572c0fc26716d->leave($__internal_dbc986c9b83decc90d48e2079177641690524314fcbb18b99e4572c0fc26716d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_60c8a5b5f5e17b1ddffe812766ad0934fda30cc2b7ffb9398bff6ceaf30fbf75 = $this->env->getExtension("native_profiler");
        $__internal_60c8a5b5f5e17b1ddffe812766ad0934fda30cc2b7ffb9398bff6ceaf30fbf75->enter($__internal_60c8a5b5f5e17b1ddffe812766ad0934fda30cc2b7ffb9398bff6ceaf30fbf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60c8a5b5f5e17b1ddffe812766ad0934fda30cc2b7ffb9398bff6ceaf30fbf75->leave($__internal_60c8a5b5f5e17b1ddffe812766ad0934fda30cc2b7ffb9398bff6ceaf30fbf75_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67d249e17c317f122c87dc5505fb392ce1dcb022fb0b40ef9347cfbc39383fe6 = $this->env->getExtension("native_profiler");
        $__internal_67d249e17c317f122c87dc5505fb392ce1dcb022fb0b40ef9347cfbc39383fe6->enter($__internal_67d249e17c317f122c87dc5505fb392ce1dcb022fb0b40ef9347cfbc39383fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_67d249e17c317f122c87dc5505fb392ce1dcb022fb0b40ef9347cfbc39383fe6->leave($__internal_67d249e17c317f122c87dc5505fb392ce1dcb022fb0b40ef9347cfbc39383fe6_prof);

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
        return array (  154 => 62,  148 => 61,  128 => 46,  117 => 41,  113 => 40,  107 => 37,  103 => 36,  98 => 34,  94 => 33,  89 => 30,  85 => 29,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
