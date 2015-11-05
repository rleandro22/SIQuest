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
        $__internal_3b9361e358dbf891db6dccf3ffa49f66f7e613a3a9ee3abe0c4cd7377bb9e071 = $this->env->getExtension("native_profiler");
        $__internal_3b9361e358dbf891db6dccf3ffa49f66f7e613a3a9ee3abe0c4cd7377bb9e071->enter($__internal_3b9361e358dbf891db6dccf3ffa49f66f7e613a3a9ee3abe0c4cd7377bb9e071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3b9361e358dbf891db6dccf3ffa49f66f7e613a3a9ee3abe0c4cd7377bb9e071->leave($__internal_3b9361e358dbf891db6dccf3ffa49f66f7e613a3a9ee3abe0c4cd7377bb9e071_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_676bf405453de612eb1a9e1c954cd9caba477f9f683ec770c59d43a1c47f99cc = $this->env->getExtension("native_profiler");
        $__internal_676bf405453de612eb1a9e1c954cd9caba477f9f683ec770c59d43a1c47f99cc->enter($__internal_676bf405453de612eb1a9e1c954cd9caba477f9f683ec770c59d43a1c47f99cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_676bf405453de612eb1a9e1c954cd9caba477f9f683ec770c59d43a1c47f99cc->leave($__internal_676bf405453de612eb1a9e1c954cd9caba477f9f683ec770c59d43a1c47f99cc_prof);

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
