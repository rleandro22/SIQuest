<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a031013e5f1ff0e1ce3190f914810f5333e183560dd9bd7e04410d253209f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e515afbfcceef0f8d9fd23bbd4d7f6e15b810413809bc8405d278e16a67efe53 = $this->env->getExtension("native_profiler");
        $__internal_e515afbfcceef0f8d9fd23bbd4d7f6e15b810413809bc8405d278e16a67efe53->enter($__internal_e515afbfcceef0f8d9fd23bbd4d7f6e15b810413809bc8405d278e16a67efe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e515afbfcceef0f8d9fd23bbd4d7f6e15b810413809bc8405d278e16a67efe53->leave($__internal_e515afbfcceef0f8d9fd23bbd4d7f6e15b810413809bc8405d278e16a67efe53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_042e295efdb464a1e79c8f2c6974380bacbb34e909ed454b0724f0c508005f68 = $this->env->getExtension("native_profiler");
        $__internal_042e295efdb464a1e79c8f2c6974380bacbb34e909ed454b0724f0c508005f68->enter($__internal_042e295efdb464a1e79c8f2c6974380bacbb34e909ed454b0724f0c508005f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_042e295efdb464a1e79c8f2c6974380bacbb34e909ed454b0724f0c508005f68->leave($__internal_042e295efdb464a1e79c8f2c6974380bacbb34e909ed454b0724f0c508005f68_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c75b5baa2a53ee3ac68e0c025528b4f0392a54caa2039eefd9cbfbb1607229af = $this->env->getExtension("native_profiler");
        $__internal_c75b5baa2a53ee3ac68e0c025528b4f0392a54caa2039eefd9cbfbb1607229af->enter($__internal_c75b5baa2a53ee3ac68e0c025528b4f0392a54caa2039eefd9cbfbb1607229af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c75b5baa2a53ee3ac68e0c025528b4f0392a54caa2039eefd9cbfbb1607229af->leave($__internal_c75b5baa2a53ee3ac68e0c025528b4f0392a54caa2039eefd9cbfbb1607229af_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0f1655dce052ac1797100febd1b82d2f002479224eee376eb550b98063719a9 = $this->env->getExtension("native_profiler");
        $__internal_e0f1655dce052ac1797100febd1b82d2f002479224eee376eb550b98063719a9->enter($__internal_e0f1655dce052ac1797100febd1b82d2f002479224eee376eb550b98063719a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0f1655dce052ac1797100febd1b82d2f002479224eee376eb550b98063719a9->leave($__internal_e0f1655dce052ac1797100febd1b82d2f002479224eee376eb550b98063719a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
