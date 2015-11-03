<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_196b41530d837d45b339254bc84ef18cd65916f49f2d0a6e62a9d6f06114ca50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_493ee2854af1c6f6607c2bf09f2401ebddda0a0639bcba468a2c774e79e1b2ff = $this->env->getExtension("native_profiler");
        $__internal_493ee2854af1c6f6607c2bf09f2401ebddda0a0639bcba468a2c774e79e1b2ff->enter($__internal_493ee2854af1c6f6607c2bf09f2401ebddda0a0639bcba468a2c774e79e1b2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_493ee2854af1c6f6607c2bf09f2401ebddda0a0639bcba468a2c774e79e1b2ff->leave($__internal_493ee2854af1c6f6607c2bf09f2401ebddda0a0639bcba468a2c774e79e1b2ff_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7d8473eb18103609689288ecedb998835e8f24d8723e61ad6abd3c49f0d2ef24 = $this->env->getExtension("native_profiler");
        $__internal_7d8473eb18103609689288ecedb998835e8f24d8723e61ad6abd3c49f0d2ef24->enter($__internal_7d8473eb18103609689288ecedb998835e8f24d8723e61ad6abd3c49f0d2ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<td class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-3\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroCapitulo", array()), 'widget');
        echo "
</td>
<td>
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreCapitulo", array()), 'widget');
        echo "
</td>

";
        
        $__internal_7d8473eb18103609689288ecedb998835e8f24d8723e61ad6abd3c49f0d2ef24->leave($__internal_7d8473eb18103609689288ecedb998835e8f24d8723e61ad6abd3c49f0d2ef24_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  38 => 3,  35 => 2,  23 => 1,);
    }
}
