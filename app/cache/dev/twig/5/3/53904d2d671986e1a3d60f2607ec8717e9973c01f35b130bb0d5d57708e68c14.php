<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_53904d2d671986e1a3d60f2607ec8717e9973c01f35b130bb0d5d57708e68c14 extends Twig_Template
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
        $__internal_11c8dc03a0c30a77f580d48a35400e7a2cb2990d1d169471c06bf5f535a5008c = $this->env->getExtension("native_profiler");
        $__internal_11c8dc03a0c30a77f580d48a35400e7a2cb2990d1d169471c06bf5f535a5008c->enter($__internal_11c8dc03a0c30a77f580d48a35400e7a2cb2990d1d169471c06bf5f535a5008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_11c8dc03a0c30a77f580d48a35400e7a2cb2990d1d169471c06bf5f535a5008c->leave($__internal_11c8dc03a0c30a77f580d48a35400e7a2cb2990d1d169471c06bf5f535a5008c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
