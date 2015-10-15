<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_25c938e9e4134d3f7dce4b6c0ebee3f5ab8e8336638f6e2a5ccf1a1c2cb07e9c extends Twig_Template
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
        $__internal_b0e0be6a43f6823cea5e9f73d840fe9cb3d5cb0d25ff71194d5c34e0c336f8f2 = $this->env->getExtension("native_profiler");
        $__internal_b0e0be6a43f6823cea5e9f73d840fe9cb3d5cb0d25ff71194d5c34e0c336f8f2->enter($__internal_b0e0be6a43f6823cea5e9f73d840fe9cb3d5cb0d25ff71194d5c34e0c336f8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_b0e0be6a43f6823cea5e9f73d840fe9cb3d5cb0d25ff71194d5c34e0c336f8f2->leave($__internal_b0e0be6a43f6823cea5e9f73d840fe9cb3d5cb0d25ff71194d5c34e0c336f8f2_prof);

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
