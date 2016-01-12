<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_e958636b20b5d6f6d9847ae87a4ab578ecaf6272e3b8830185e9cd8d142088c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciSeguridadBundle::base.html.twig", 2);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_235e1ac0a4d72c1f6420a44e9cbabf6fadf3d4a3c9505dcf87396de2f4139dd6 = $this->env->getExtension("native_profiler");
        $__internal_235e1ac0a4d72c1f6420a44e9cbabf6fadf3d4a3c9505dcf87396de2f4139dd6->enter($__internal_235e1ac0a4d72c1f6420a44e9cbabf6fadf3d4a3c9505dcf87396de2f4139dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235e1ac0a4d72c1f6420a44e9cbabf6fadf3d4a3c9505dcf87396de2f4139dd6->leave($__internal_235e1ac0a4d72c1f6420a44e9cbabf6fadf3d4a3c9505dcf87396de2f4139dd6_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_628f4f7803c12d0c485b5d55ce46937620584989b62c4a9954c12b120d68270a = $this->env->getExtension("native_profiler");
        $__internal_628f4f7803c12d0c485b5d55ce46937620584989b62c4a9954c12b120d68270a->enter($__internal_628f4f7803c12d0c485b5d55ce46937620584989b62c4a9954c12b120d68270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <!-- Header -->
    <header id=\"head\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"lead\">UNIVERSIDAD PARA LA COOPERACIÓN INTERNACIONAL</h1>
                <p class=\"tagline\">Sistema de generación de cuestionarios para la GSPM</p>
                <p><a href=\"http://www.uci.ac.cr/\" class=\"btn btn-action btn-lg\" role=\"button\">Página UCI</a><a href=\"http://www.ucipfg.com/\" class=\"btn btn-default btn-lg\" role=\"button\">Campus virtual</a> </p>
            </div>
        </div>
    </header>
    <!-- /Header -->
";
        
        $__internal_628f4f7803c12d0c485b5d55ce46937620584989b62c4a9954c12b120d68270a->leave($__internal_628f4f7803c12d0c485b5d55ce46937620584989b62c4a9954c12b120d68270a_prof);

    }

    public function getTemplateName()
    {
        return "UciSeguridadBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 2,);
    }
}
