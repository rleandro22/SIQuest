<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c08623844fc76951f4adb4ef11dbc2191344ba9d2e6c30e516ec8148963fa945 extends Twig_Template
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
        $__internal_543df7a35d72ccdffe8644eebe86b07fbcc3a6b76017289dc62bb889f423df4f = $this->env->getExtension("native_profiler");
        $__internal_543df7a35d72ccdffe8644eebe86b07fbcc3a6b76017289dc62bb889f423df4f->enter($__internal_543df7a35d72ccdffe8644eebe86b07fbcc3a6b76017289dc62bb889f423df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_543df7a35d72ccdffe8644eebe86b07fbcc3a6b76017289dc62bb889f423df4f->leave($__internal_543df7a35d72ccdffe8644eebe86b07fbcc3a6b76017289dc62bb889f423df4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c333e1a2e651cec7386048f076bb50d9fd68104ac2151f4f42cb6d33393ac734 = $this->env->getExtension("native_profiler");
        $__internal_c333e1a2e651cec7386048f076bb50d9fd68104ac2151f4f42cb6d33393ac734->enter($__internal_c333e1a2e651cec7386048f076bb50d9fd68104ac2151f4f42cb6d33393ac734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c333e1a2e651cec7386048f076bb50d9fd68104ac2151f4f42cb6d33393ac734->leave($__internal_c333e1a2e651cec7386048f076bb50d9fd68104ac2151f4f42cb6d33393ac734_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87b798e187af434af8c7bff6bf0cb5b318b4e6329f575f6b85561d98d81f8135 = $this->env->getExtension("native_profiler");
        $__internal_87b798e187af434af8c7bff6bf0cb5b318b4e6329f575f6b85561d98d81f8135->enter($__internal_87b798e187af434af8c7bff6bf0cb5b318b4e6329f575f6b85561d98d81f8135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87b798e187af434af8c7bff6bf0cb5b318b4e6329f575f6b85561d98d81f8135->leave($__internal_87b798e187af434af8c7bff6bf0cb5b318b4e6329f575f6b85561d98d81f8135_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_790d1cf67e878d959c3ff02f016e559a44d3ed8222ef5196a6fd7de623f690b8 = $this->env->getExtension("native_profiler");
        $__internal_790d1cf67e878d959c3ff02f016e559a44d3ed8222ef5196a6fd7de623f690b8->enter($__internal_790d1cf67e878d959c3ff02f016e559a44d3ed8222ef5196a6fd7de623f690b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_790d1cf67e878d959c3ff02f016e559a44d3ed8222ef5196a6fd7de623f690b8->leave($__internal_790d1cf67e878d959c3ff02f016e559a44d3ed8222ef5196a6fd7de623f690b8_prof);

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
