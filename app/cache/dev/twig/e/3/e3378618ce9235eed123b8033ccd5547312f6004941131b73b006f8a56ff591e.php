<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e3378618ce9235eed123b8033ccd5547312f6004941131b73b006f8a56ff591e extends Twig_Template
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
        $__internal_11a16917e2c10cd7095571aa7136896f838da41d07e2b18da1f8e7c58bb8396d = $this->env->getExtension("native_profiler");
        $__internal_11a16917e2c10cd7095571aa7136896f838da41d07e2b18da1f8e7c58bb8396d->enter($__internal_11a16917e2c10cd7095571aa7136896f838da41d07e2b18da1f8e7c58bb8396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_11a16917e2c10cd7095571aa7136896f838da41d07e2b18da1f8e7c58bb8396d->leave($__internal_11a16917e2c10cd7095571aa7136896f838da41d07e2b18da1f8e7c58bb8396d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
