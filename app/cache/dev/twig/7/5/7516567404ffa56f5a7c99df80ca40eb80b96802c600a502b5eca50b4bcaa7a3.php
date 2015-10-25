<?php

/* UciBaseDatosBundle:AsistenteAcademica:new.html.twig */
class __TwigTemplate_7516567404ffa56f5a7c99df80ca40eb80b96802c600a502b5eca50b4bcaa7a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AsistenteAcademica:new.html.twig", 1);
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
        $__internal_9c2a492a4e1e54881a7867cad6969d8550118f24ea1887275b9bb5b887e35a45 = $this->env->getExtension("native_profiler");
        $__internal_9c2a492a4e1e54881a7867cad6969d8550118f24ea1887275b9bb5b887e35a45->enter($__internal_9c2a492a4e1e54881a7867cad6969d8550118f24ea1887275b9bb5b887e35a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AsistenteAcademica:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2a492a4e1e54881a7867cad6969d8550118f24ea1887275b9bb5b887e35a45->leave($__internal_9c2a492a4e1e54881a7867cad6969d8550118f24ea1887275b9bb5b887e35a45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77f1b3e1fe702f104ae957af53e5d8818d5846879a6ed397facf788f3c01c178 = $this->env->getExtension("native_profiler");
        $__internal_77f1b3e1fe702f104ae957af53e5d8818d5846879a6ed397facf788f3c01c178->enter($__internal_77f1b3e1fe702f104ae957af53e5d8818d5846879a6ed397facf788f3c01c178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AsistenteAcademica creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_77f1b3e1fe702f104ae957af53e5d8818d5846879a6ed397facf788f3c01c178->leave($__internal_77f1b3e1fe702f104ae957af53e5d8818d5846879a6ed397facf788f3c01c178_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AsistenteAcademica:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
