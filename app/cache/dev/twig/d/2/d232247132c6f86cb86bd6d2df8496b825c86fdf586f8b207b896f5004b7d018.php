<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d232247132c6f86cb86bd6d2df8496b825c86fdf586f8b207b896f5004b7d018 extends Twig_Template
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
        $__internal_30fa0967dd22eda6feb796de5ba4b5bdbca29a1c6b3519bc9114fd69bca156f3 = $this->env->getExtension("native_profiler");
        $__internal_30fa0967dd22eda6feb796de5ba4b5bdbca29a1c6b3519bc9114fd69bca156f3->enter($__internal_30fa0967dd22eda6feb796de5ba4b5bdbca29a1c6b3519bc9114fd69bca156f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30fa0967dd22eda6feb796de5ba4b5bdbca29a1c6b3519bc9114fd69bca156f3->leave($__internal_30fa0967dd22eda6feb796de5ba4b5bdbca29a1c6b3519bc9114fd69bca156f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_769800d6715b48e3f405f22101eeaa8c332423b952358fe4f255233ffcf82f29 = $this->env->getExtension("native_profiler");
        $__internal_769800d6715b48e3f405f22101eeaa8c332423b952358fe4f255233ffcf82f29->enter($__internal_769800d6715b48e3f405f22101eeaa8c332423b952358fe4f255233ffcf82f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_769800d6715b48e3f405f22101eeaa8c332423b952358fe4f255233ffcf82f29->leave($__internal_769800d6715b48e3f405f22101eeaa8c332423b952358fe4f255233ffcf82f29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64079e0fb7ba0b1425c66456c6472c3a79d2a9e5500468b5d142f131260717b0 = $this->env->getExtension("native_profiler");
        $__internal_64079e0fb7ba0b1425c66456c6472c3a79d2a9e5500468b5d142f131260717b0->enter($__internal_64079e0fb7ba0b1425c66456c6472c3a79d2a9e5500468b5d142f131260717b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64079e0fb7ba0b1425c66456c6472c3a79d2a9e5500468b5d142f131260717b0->leave($__internal_64079e0fb7ba0b1425c66456c6472c3a79d2a9e5500468b5d142f131260717b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f645f054e33ddfefa70410e5c5b2c04dfbfb627b9d1d129f2865682d838117a8 = $this->env->getExtension("native_profiler");
        $__internal_f645f054e33ddfefa70410e5c5b2c04dfbfb627b9d1d129f2865682d838117a8->enter($__internal_f645f054e33ddfefa70410e5c5b2c04dfbfb627b9d1d129f2865682d838117a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f645f054e33ddfefa70410e5c5b2c04dfbfb627b9d1d129f2865682d838117a8->leave($__internal_f645f054e33ddfefa70410e5c5b2c04dfbfb627b9d1d129f2865682d838117a8_prof);

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
