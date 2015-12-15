<?php

/* UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig */
class __TwigTemplate_0f8de66542b598d6ef280656e029771e3a1bbe87ea84639811bf29339c1aa872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'barra' => array($this, 'block_barra'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbd0cfcc11f98c0ceff82d0866a7afbb40e3cdb471851207d1253ce32a321e23 = $this->env->getExtension("native_profiler");
        $__internal_dbd0cfcc11f98c0ceff82d0866a7afbb40e3cdb471851207d1253ce32a321e23->enter($__internal_dbd0cfcc11f98c0ceff82d0866a7afbb40e3cdb471851207d1253ce32a321e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd0cfcc11f98c0ceff82d0866a7afbb40e3cdb471851207d1253ce32a321e23->leave($__internal_dbd0cfcc11f98c0ceff82d0866a7afbb40e3cdb471851207d1253ce32a321e23_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a6fe514ec4b90b256bf92d489f368ad09b5408aa07eadd8ad00ff226dce6c01 = $this->env->getExtension("native_profiler");
        $__internal_6a6fe514ec4b90b256bf92d489f368ad09b5408aa07eadd8ad00ff226dce6c01->enter($__internal_6a6fe514ec4b90b256bf92d489f368ad09b5408aa07eadd8ad00ff226dce6c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_6a6fe514ec4b90b256bf92d489f368ad09b5408aa07eadd8ad00ff226dce6c01->leave($__internal_6a6fe514ec4b90b256bf92d489f368ad09b5408aa07eadd8ad00ff226dce6c01_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_3befd1c555004fbeb4e5d9ca489bce2db230bff1969f0fb3485d09d5d345b154 = $this->env->getExtension("native_profiler");
        $__internal_3befd1c555004fbeb4e5d9ca489bce2db230bff1969f0fb3485d09d5d345b154->enter($__internal_3befd1c555004fbeb4e5d9ca489bce2db230bff1969f0fb3485d09d5d345b154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_3befd1c555004fbeb4e5d9ca489bce2db230bff1969f0fb3485d09d5d345b154->leave($__internal_3befd1c555004fbeb4e5d9ca489bce2db230bff1969f0fb3485d09d5d345b154_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_677651e185ccc89b8c47b47a15416381501707ac34f5efa28b4ff58b241ed734 = $this->env->getExtension("native_profiler");
        $__internal_677651e185ccc89b8c47b47a15416381501707ac34f5efa28b4ff58b241ed734->enter($__internal_677651e185ccc89b8c47b47a15416381501707ac34f5efa28b4ff58b241ed734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_677651e185ccc89b8c47b47a15416381501707ac34f5efa28b4ff58b241ed734->leave($__internal_677651e185ccc89b8c47b47a15416381501707ac34f5efa28b4ff58b241ed734_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_83afd3f7a3adbd0225332de009b8226008b27919e33b541856b81e2b39679df6 = $this->env->getExtension("native_profiler");
        $__internal_83afd3f7a3adbd0225332de009b8226008b27919e33b541856b81e2b39679df6->enter($__internal_83afd3f7a3adbd0225332de009b8226008b27919e33b541856b81e2b39679df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- container -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">

            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Elija una pregunta</h1>
                </header>
                <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_agregarPreguntaCuestionario", array("idCuestionario" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row top-margin\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'label');
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'errors');
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'widget');
        echo "
                        </div>
                    </div>

                    <hr>
                    <div class=\"row\">
                        <div class=\"col-lg-8 text-right\">
                            <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cerrar</button>
                        </div>
                        <div class=\"col-lg-4 text-right\">
                            <button id=\"pruebaultima\" class=\"btn btn-action\" type=\"submit\">Registrar</button>
                        </div>
                    </div>
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br><br>
                <br><br>
            </article>
            <!-- /Article -->
        </div>
        <br><br>
    </div>\t<!-- /container -->

";
        
        $__internal_83afd3f7a3adbd0225332de009b8226008b27919e33b541856b81e2b39679df6->leave($__internal_83afd3f7a3adbd0225332de009b8226008b27919e33b541856b81e2b39679df6_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  114 => 29,  110 => 28,  106 => 27,  100 => 24,  85 => 11,  79 => 10,  68 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
