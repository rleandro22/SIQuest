<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_396752001a02dba23462c9ab3c2dd959d24ff9034f5f443d4bdb3f5da1d16364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fb98c4eed23d52bdf21f000b93b2e65c440b4392cd777d6e474179a170ed793 = $this->env->getExtension("native_profiler");
        $__internal_3fb98c4eed23d52bdf21f000b93b2e65c440b4392cd777d6e474179a170ed793->enter($__internal_3fb98c4eed23d52bdf21f000b93b2e65c440b4392cd777d6e474179a170ed793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb98c4eed23d52bdf21f000b93b2e65c440b4392cd777d6e474179a170ed793->leave($__internal_3fb98c4eed23d52bdf21f000b93b2e65c440b4392cd777d6e474179a170ed793_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da4c71829cd5d6283d2545b7563232ed580aafc5a7a2daa72ac9c72a898c12cb = $this->env->getExtension("native_profiler");
        $__internal_da4c71829cd5d6283d2545b7563232ed580aafc5a7a2daa72ac9c72a898c12cb->enter($__internal_da4c71829cd5d6283d2545b7563232ed580aafc5a7a2daa72ac9c72a898c12cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da4c71829cd5d6283d2545b7563232ed580aafc5a7a2daa72ac9c72a898c12cb->leave($__internal_da4c71829cd5d6283d2545b7563232ed580aafc5a7a2daa72ac9c72a898c12cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df8082404ae98427884c40aa821affc5bb3fbf430ddad7b1acb6b6267d4c907d = $this->env->getExtension("native_profiler");
        $__internal_df8082404ae98427884c40aa821affc5bb3fbf430ddad7b1acb6b6267d4c907d->enter($__internal_df8082404ae98427884c40aa821affc5bb3fbf430ddad7b1acb6b6267d4c907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_df8082404ae98427884c40aa821affc5bb3fbf430ddad7b1acb6b6267d4c907d->leave($__internal_df8082404ae98427884c40aa821affc5bb3fbf430ddad7b1acb6b6267d4c907d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a61ac78382e9957ff83f50b66b2aa74e52ee14e32247d49cd99c1d734a98b378 = $this->env->getExtension("native_profiler");
        $__internal_a61ac78382e9957ff83f50b66b2aa74e52ee14e32247d49cd99c1d734a98b378->enter($__internal_a61ac78382e9957ff83f50b66b2aa74e52ee14e32247d49cd99c1d734a98b378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a61ac78382e9957ff83f50b66b2aa74e52ee14e32247d49cd99c1d734a98b378->leave($__internal_a61ac78382e9957ff83f50b66b2aa74e52ee14e32247d49cd99c1d734a98b378_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
