<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_5a3bf39cc9e158cb5aa65755f403a177ff844a89fd7189d8858c1c5cf06f4881 extends Twig_Template
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
        $__internal_4976cc68b9c134ff419fa80b6cfbfbd150e3e6adeb428cec8a563fdc2e80655f = $this->env->getExtension("native_profiler");
        $__internal_4976cc68b9c134ff419fa80b6cfbfbd150e3e6adeb428cec8a563fdc2e80655f->enter($__internal_4976cc68b9c134ff419fa80b6cfbfbd150e3e6adeb428cec8a563fdc2e80655f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_4976cc68b9c134ff419fa80b6cfbfbd150e3e6adeb428cec8a563fdc2e80655f->leave($__internal_4976cc68b9c134ff419fa80b6cfbfbd150e3e6adeb428cec8a563fdc2e80655f_prof);

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
