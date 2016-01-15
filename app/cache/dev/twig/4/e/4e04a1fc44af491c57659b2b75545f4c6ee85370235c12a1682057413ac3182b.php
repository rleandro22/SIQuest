<?php

/* UciAdministradorBundle:VistaObservacion:indiceObservacion.html.twig */
class __TwigTemplate_4e04a1fc44af491c57659b2b75545f4c6ee85370235c12a1682057413ac3182b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaObservacion:indiceObservacion.html.twig", 1);
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
        $__internal_98cd6f70d784b1bc41b409a6f685d4af93e4929af23dfc500971ce0e4dc1ef9d = $this->env->getExtension("native_profiler");
        $__internal_98cd6f70d784b1bc41b409a6f685d4af93e4929af23dfc500971ce0e4dc1ef9d->enter($__internal_98cd6f70d784b1bc41b409a6f685d4af93e4929af23dfc500971ce0e4dc1ef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaObservacion:indiceObservacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98cd6f70d784b1bc41b409a6f685d4af93e4929af23dfc500971ce0e4dc1ef9d->leave($__internal_98cd6f70d784b1bc41b409a6f685d4af93e4929af23dfc500971ce0e4dc1ef9d_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2fe0592f19dd26113e7c1573832038f2385fcb6d22bada3925bd9df9c12e0500 = $this->env->getExtension("native_profiler");
        $__internal_2fe0592f19dd26113e7c1573832038f2385fcb6d22bada3925bd9df9c12e0500->enter($__internal_2fe0592f19dd26113e7c1573832038f2385fcb6d22bada3925bd9df9c12e0500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_2fe0592f19dd26113e7c1573832038f2385fcb6d22bada3925bd9df9c12e0500->leave($__internal_2fe0592f19dd26113e7c1573832038f2385fcb6d22bada3925bd9df9c12e0500_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7640593ac7f7a9926c91d59e73ee756006cb15fa240841283492de5f66bf5e99 = $this->env->getExtension("native_profiler");
        $__internal_7640593ac7f7a9926c91d59e73ee756006cb15fa240841283492de5f66bf5e99->enter($__internal_7640593ac7f7a9926c91d59e73ee756006cb15fa240841283492de5f66bf5e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Observaciones</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoObservacion.html.twig", "UciAdministradorBundle:VistaObservacion:indiceObservacion.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Filtrar observaciones</h1>
                </header>
                <br>
                <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceobservaciones");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row top-margin\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                        </div>
                    </div>
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>

                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row top-space\">

            <br><br>
            ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 57
            echo "                <div class=\"col-lg-2 col-md-4 col-xs-6 thumb\" id=\"";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "cuestionarioname", array()), array(" " => "")), "html", null, true);
            echo "\">
                    <div class=\"thumbnail\">
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_verObservacion", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuestionarioname", array()), "html", null, true);
            echo "</p>
                        </a>

                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_verObservacion", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <img class=\"img-responsive\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img_test_1.png"), "html", null, true);
            echo "\" alt=\"\">
                        </a>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-md-6\"></div>
                            <div class=\"col-md-6\"><span class=\"pull-right\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_borrarObservacion", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </br></br>

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_7640593ac7f7a9926c91d59e73ee756006cb15fa240841283492de5f66bf5e99->leave($__internal_7640593ac7f7a9926c91d59e73ee756006cb15fa240841283492de5f66bf5e99_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08a94c0c53a159b8721bbbd04a863a109dc1a7f2bc9a3cbb16f0836b304e60d4 = $this->env->getExtension("native_profiler");
        $__internal_08a94c0c53a159b8721bbbd04a863a109dc1a7f2bc9a3cbb16f0836b304e60d4->enter($__internal_08a94c0c53a159b8721bbbd04a863a109dc1a7f2bc9a3cbb16f0836b304e60d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
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
        
        $__internal_08a94c0c53a159b8721bbbd04a863a109dc1a7f2bc9a3cbb16f0836b304e60d4->leave($__internal_08a94c0c53a159b8721bbbd04a863a109dc1a7f2bc9a3cbb16f0836b304e60d4_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaObservacion:indiceObservacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  183 => 82,  170 => 74,  159 => 69,  151 => 64,  147 => 63,  141 => 60,  137 => 59,  131 => 57,  127 => 56,  103 => 35,  97 => 32,  93 => 31,  89 => 30,  83 => 27,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
