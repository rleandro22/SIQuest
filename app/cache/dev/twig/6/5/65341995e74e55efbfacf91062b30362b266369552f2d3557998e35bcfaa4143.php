<?php

/* UciBaseDatosBundle:AsistenteAcademica:edit.html.twig */
class __TwigTemplate_65341995e74e55efbfacf91062b30362b266369552f2d3557998e35bcfaa4143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AsistenteAcademica:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f80ca418155ae1c693a0459ff23b1e5ea9fd02a662fa1368bd187834a14e6f7a = $this->env->getExtension("native_profiler");
        $__internal_f80ca418155ae1c693a0459ff23b1e5ea9fd02a662fa1368bd187834a14e6f7a->enter($__internal_f80ca418155ae1c693a0459ff23b1e5ea9fd02a662fa1368bd187834a14e6f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AsistenteAcademica:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80ca418155ae1c693a0459ff23b1e5ea9fd02a662fa1368bd187834a14e6f7a->leave($__internal_f80ca418155ae1c693a0459ff23b1e5ea9fd02a662fa1368bd187834a14e6f7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a34f122e196e086e903adea38104f409d6177ae088db340c25a0750fc4f5192b = $this->env->getExtension("native_profiler");
        $__internal_a34f122e196e086e903adea38104f409d6177ae088db340c25a0750fc4f5192b->enter($__internal_a34f122e196e086e903adea38104f409d6177ae088db340c25a0750fc4f5192b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AsistenteAcademica edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("asistenteacademica");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_a34f122e196e086e903adea38104f409d6177ae088db340c25a0750fc4f5192b->leave($__internal_a34f122e196e086e903adea38104f409d6177ae088db340c25a0750fc4f5192b_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AsistenteAcademica:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
