<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_fabdc7ee6dc1be783e009a8fc5838544d696b59264760083a6c9124b84d19d41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/f/a/fabdc7ee6dc1be783e009a8fc5838544d696b59264760083a6c9124b84d19d41.php
        $__internal_5f2f4c6a0343032605c5251787255a8a707b42c157ddcc963f626495de55c28c = $this->env->getExtension("native_profiler");
        $__internal_5f2f4c6a0343032605c5251787255a8a707b42c157ddcc963f626495de55c28c->enter($__internal_5f2f4c6a0343032605c5251787255a8a707b42c157ddcc963f626495de55c28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f2f4c6a0343032605c5251787255a8a707b42c157ddcc963f626495de55c28c->leave($__internal_5f2f4c6a0343032605c5251787255a8a707b42c157ddcc963f626495de55c28c_prof);
=======
        $__internal_c35ee24ae1d7703cc6f1470d106c6bc249aa46ec2fe8cde737d23d151e980e5d = $this->env->getExtension("native_profiler");
        $__internal_c35ee24ae1d7703cc6f1470d106c6bc249aa46ec2fe8cde737d23d151e980e5d->enter($__internal_c35ee24ae1d7703cc6f1470d106c6bc249aa46ec2fe8cde737d23d151e980e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35ee24ae1d7703cc6f1470d106c6bc249aa46ec2fe8cde737d23d151e980e5d->leave($__internal_c35ee24ae1d7703cc6f1470d106c6bc249aa46ec2fe8cde737d23d151e980e5d_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/7/6/76069f041df9d4e7971c5542d0025e2a62262fb27becb6a18c588a6c134a77ea.php

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/f/a/fabdc7ee6dc1be783e009a8fc5838544d696b59264760083a6c9124b84d19d41.php
        $__internal_3bfd2447b86b597a48e527759e1e4b3482427734e3e1a34e7f2a62195934245a = $this->env->getExtension("native_profiler");
        $__internal_3bfd2447b86b597a48e527759e1e4b3482427734e3e1a34e7f2a62195934245a->enter($__internal_3bfd2447b86b597a48e527759e1e4b3482427734e3e1a34e7f2a62195934245a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_4401616aa14aec44b8f5baffda3b4ee7c8406abe106f7d230b80cafd47afb374 = $this->env->getExtension("native_profiler");
        $__internal_4401616aa14aec44b8f5baffda3b4ee7c8406abe106f7d230b80cafd47afb374->enter($__internal_4401616aa14aec44b8f5baffda3b4ee7c8406abe106f7d230b80cafd47afb374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/7/6/76069f041df9d4e7971c5542d0025e2a62262fb27becb6a18c588a6c134a77ea.php

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <svg width=\"13\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 13 28\" enable-background=\"new 0 0 13 28\" xml:space=\"preserve\"><g><rect x=\"3\" y=\"11\" fill=\"#BCBCBB\" width=\"7\" height=\"9\"/></g><g><path fill=\"#3F3F3F\" d=\"M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z\"/></g></svg>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/memory.html.twig", 16)->display(array_merge($context, array("link" => false)));
        
<<<<<<< HEAD:app/cache/dev/twig/f/a/fabdc7ee6dc1be783e009a8fc5838544d696b59264760083a6c9124b84d19d41.php
        $__internal_3bfd2447b86b597a48e527759e1e4b3482427734e3e1a34e7f2a62195934245a->leave($__internal_3bfd2447b86b597a48e527759e1e4b3482427734e3e1a34e7f2a62195934245a_prof);
=======
        $__internal_4401616aa14aec44b8f5baffda3b4ee7c8406abe106f7d230b80cafd47afb374->leave($__internal_4401616aa14aec44b8f5baffda3b4ee7c8406abe106f7d230b80cafd47afb374_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/7/6/76069f041df9d4e7971c5542d0025e2a62262fb27becb6a18c588a6c134a77ea.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  60 => 13,  56 => 11,  53 => 10,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
