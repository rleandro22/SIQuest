<?php

/* UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_bb6a6bfe7f212f6632fdaa129009dbf6b3778cd0f9d2ca1c7c4d04bde4942379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
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
        $__internal_33f417ba5c936b0bf3256a759b821ec148d5fc0e3b29b7acdfc8b6c5de6325c8 = $this->env->getExtension("native_profiler");
        $__internal_33f417ba5c936b0bf3256a759b821ec148d5fc0e3b29b7acdfc8b6c5de6325c8->enter($__internal_33f417ba5c936b0bf3256a759b821ec148d5fc0e3b29b7acdfc8b6c5de6325c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f417ba5c936b0bf3256a759b821ec148d5fc0e3b29b7acdfc8b6c5de6325c8->leave($__internal_33f417ba5c936b0bf3256a759b821ec148d5fc0e3b29b7acdfc8b6c5de6325c8_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_af0d5d9099c246075e2296f9f3e255340baa29d15f809a9357534a05ef00f13a = $this->env->getExtension("native_profiler");
        $__internal_af0d5d9099c246075e2296f9f3e255340baa29d15f809a9357534a05ef00f13a->enter($__internal_af0d5d9099c246075e2296f9f3e255340baa29d15f809a9357534a05ef00f13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_af0d5d9099c246075e2296f9f3e255340baa29d15f809a9357534a05ef00f13a->leave($__internal_af0d5d9099c246075e2296f9f3e255340baa29d15f809a9357534a05ef00f13a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b75b27d04e8bbf0ffcf2802181712177b1713b881ca5eed27898d4d98a02646e = $this->env->getExtension("native_profiler");
        $__internal_b75b27d04e8bbf0ffcf2802181712177b1713b881ca5eed27898d4d98a02646e->enter($__internal_b75b27d04e8bbf0ffcf2802181712177b1713b881ca5eed27898d4d98a02646e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Filtrar cuestionarios</h1>
                </header>
                <br>
                <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuestionarioname", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadPreguntas", array()), 'row');
        echo "
                        </div>
                    </div>
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>





            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row top-space\">

            <br><br>




            <br><br>
        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_b75b27d04e8bbf0ffcf2802181712177b1713b881ca5eed27898d4d98a02646e->leave($__internal_b75b27d04e8bbf0ffcf2802181712177b1713b881ca5eed27898d4d98a02646e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcbb31d4817f3480d7ddc797c32a22d5e6c35912eba7a976e2429fae946c9f3c = $this->env->getExtension("native_profiler");
        $__internal_bcbb31d4817f3480d7ddc797c32a22d5e6c35912eba7a976e2429fae946c9f3c->enter($__internal_bcbb31d4817f3480d7ddc797c32a22d5e6c35912eba7a976e2429fae946c9f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {

            \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').keydown(function (e) {
                if (e.which != '8' && e.which != '46') {
                    str = \$(this).val();
                    str = str.replace(/\\s/g, '');
                    \$(this).val(str);
                }
            });

            \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').bind('input', function (e) {
                var \$valor = \$(this).val();
                \$valor = \$valor.replace(/\\s/g, \"\");
                \$(this).val(\$valor);
            });

            /*str = \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').val();
             str.replace(/\\s/g, \"\");
             \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').val(str);*/

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
        
        $__internal_bcbb31d4817f3480d7ddc797c32a22d5e6c35912eba7a976e2429fae946c9f3c->leave($__internal_bcbb31d4817f3480d7ddc797c32a22d5e6c35912eba7a976e2429fae946c9f3c_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 67,  137 => 66,  103 => 38,  97 => 35,  89 => 30,  83 => 27,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
