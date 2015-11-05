<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_f021a017e2b6c2ceba3be359873af274fe61ba105091e7cf6f21c826e9e9c79d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/f/0/f021a017e2b6c2ceba3be359873af274fe61ba105091e7cf6f21c826e9e9c79d.php
        $__internal_202925f368365c6e6ea2589ce9ef373e7df14b47242b149a3a1a88c2693efedd = $this->env->getExtension("native_profiler");
        $__internal_202925f368365c6e6ea2589ce9ef373e7df14b47242b149a3a1a88c2693efedd->enter($__internal_202925f368365c6e6ea2589ce9ef373e7df14b47242b149a3a1a88c2693efedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_item.html.twig"));
=======
        $__internal_da77bdb49fe9c6637d432cd7f3e01ed1d673dc8c8a662d9c8c96fd7749e9bf9c = $this->env->getExtension("native_profiler");
        $__internal_da77bdb49fe9c6637d432cd7f3e01ed1d673dc8c8a662d9c8c96fd7749e9bf9c->enter($__internal_da77bdb49fe9c6637d432cd7f3e01ed1d673dc8c8a662d9c8c96fd7749e9bf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_item.html.twig"));
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/d/3/d3d98f2500f7846823cf8d20523ae8639606da13cb9d76223a253a9e34e41b0a.php

        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD:app/cache/dev/twig/f/0/f021a017e2b6c2ceba3be359873af274fe61ba105091e7cf6f21c826e9e9c79d.php
        $__internal_202925f368365c6e6ea2589ce9ef373e7df14b47242b149a3a1a88c2693efedd->leave($__internal_202925f368365c6e6ea2589ce9ef373e7df14b47242b149a3a1a88c2693efedd_prof);
=======
        $__internal_da77bdb49fe9c6637d432cd7f3e01ed1d673dc8c8a662d9c8c96fd7749e9bf9c->leave($__internal_da77bdb49fe9c6637d432cd7f3e01ed1d673dc8c8a662d9c8c96fd7749e9bf9c_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/d/3/d3d98f2500f7846823cf8d20523ae8639606da13cb9d76223a253a9e34e41b0a.php

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
