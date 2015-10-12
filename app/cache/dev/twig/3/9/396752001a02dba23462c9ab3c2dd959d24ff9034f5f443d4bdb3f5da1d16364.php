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
        $__internal_0be98dae9988cd61b66aabf9a8a958aadc8f1bbfa701115ffd3c2b7a5a2b1f6f = $this->env->getExtension("native_profiler");
        $__internal_0be98dae9988cd61b66aabf9a8a958aadc8f1bbfa701115ffd3c2b7a5a2b1f6f->enter($__internal_0be98dae9988cd61b66aabf9a8a958aadc8f1bbfa701115ffd3c2b7a5a2b1f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be98dae9988cd61b66aabf9a8a958aadc8f1bbfa701115ffd3c2b7a5a2b1f6f->leave($__internal_0be98dae9988cd61b66aabf9a8a958aadc8f1bbfa701115ffd3c2b7a5a2b1f6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74b41d0eb2866fba52b6f2633a50d60f359e6bbdb98066ba325b6404da34712a = $this->env->getExtension("native_profiler");
        $__internal_74b41d0eb2866fba52b6f2633a50d60f359e6bbdb98066ba325b6404da34712a->enter($__internal_74b41d0eb2866fba52b6f2633a50d60f359e6bbdb98066ba325b6404da34712a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_74b41d0eb2866fba52b6f2633a50d60f359e6bbdb98066ba325b6404da34712a->leave($__internal_74b41d0eb2866fba52b6f2633a50d60f359e6bbdb98066ba325b6404da34712a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e688242bf3351f59df833480832fe57e2812bbe2388376bdcf451bdd7343e073 = $this->env->getExtension("native_profiler");
        $__internal_e688242bf3351f59df833480832fe57e2812bbe2388376bdcf451bdd7343e073->enter($__internal_e688242bf3351f59df833480832fe57e2812bbe2388376bdcf451bdd7343e073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e688242bf3351f59df833480832fe57e2812bbe2388376bdcf451bdd7343e073->leave($__internal_e688242bf3351f59df833480832fe57e2812bbe2388376bdcf451bdd7343e073_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76f07de6f86966ff9cfbf54601506b0ec4c7fa048e47e8a651c4c8fde4ee554d = $this->env->getExtension("native_profiler");
        $__internal_76f07de6f86966ff9cfbf54601506b0ec4c7fa048e47e8a651c4c8fde4ee554d->enter($__internal_76f07de6f86966ff9cfbf54601506b0ec4c7fa048e47e8a651c4c8fde4ee554d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_76f07de6f86966ff9cfbf54601506b0ec4c7fa048e47e8a651c4c8fde4ee554d->leave($__internal_76f07de6f86966ff9cfbf54601506b0ec4c7fa048e47e8a651c4c8fde4ee554d_prof);

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
