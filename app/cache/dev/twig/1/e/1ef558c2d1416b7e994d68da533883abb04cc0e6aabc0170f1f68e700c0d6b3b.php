<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_1ef558c2d1416b7e994d68da533883abb04cc0e6aabc0170f1f68e700c0d6b3b extends Twig_Template
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
<<<<<<< HEAD:app/cache/dev/twig/1/e/1ef558c2d1416b7e994d68da533883abb04cc0e6aabc0170f1f68e700c0d6b3b.php
        $__internal_7685502f5e0b11b5d74f55d4d7de27f565ef8187417110426fdbf30f1bb5ac2a = $this->env->getExtension("native_profiler");
        $__internal_7685502f5e0b11b5d74f55d4d7de27f565ef8187417110426fdbf30f1bb5ac2a->enter($__internal_7685502f5e0b11b5d74f55d4d7de27f565ef8187417110426fdbf30f1bb5ac2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_99029df061b144e64748772cc0c55b0fd01688e00b48b6e32bab12b99c9cf634 = $this->env->getExtension("native_profiler");
        $__internal_99029df061b144e64748772cc0c55b0fd01688e00b48b6e32bab12b99c9cf634->enter($__internal_99029df061b144e64748772cc0c55b0fd01688e00b48b6e32bab12b99c9cf634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/b/1/b1585c646adc61f018c6075476cf8a04165bfb0f4fd2ea0fe3cb396cf863ed2e.php

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
        
<<<<<<< HEAD:app/cache/dev/twig/1/e/1ef558c2d1416b7e994d68da533883abb04cc0e6aabc0170f1f68e700c0d6b3b.php
        $__internal_7685502f5e0b11b5d74f55d4d7de27f565ef8187417110426fdbf30f1bb5ac2a->leave($__internal_7685502f5e0b11b5d74f55d4d7de27f565ef8187417110426fdbf30f1bb5ac2a_prof);
=======
        $__internal_99029df061b144e64748772cc0c55b0fd01688e00b48b6e32bab12b99c9cf634->leave($__internal_99029df061b144e64748772cc0c55b0fd01688e00b48b6e32bab12b99c9cf634_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/b/1/b1585c646adc61f018c6075476cf8a04165bfb0f4fd2ea0fe3cb396cf863ed2e.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
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
