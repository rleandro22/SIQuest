<?php

/* UciAdministradorBundle:VistaCuestionario:listaCuestionarios.html.twig */
class __TwigTemplate_3852f225fcb1b00b9496dea80c1b781157e275557e542ac2307901638fb997c4 extends Twig_Template
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
        $__internal_788acaa2b1553698e4275495a25d1ba466353182c20262c077b236c899f97b74 = $this->env->getExtension("native_profiler");
        $__internal_788acaa2b1553698e4275495a25d1ba466353182c20262c077b236c899f97b74->enter($__internal_788acaa2b1553698e4275495a25d1ba466353182c20262c077b236c899f97b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:listaCuestionarios.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "<div class=\"col-lg-2 col-md-4 col-xs-6 thumb\"><div class=\"thumbnail\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_indicecurso", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img_test_1.png"), "html", null, true);
            echo "\" alt=\"\"></a><br></div></div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_788acaa2b1553698e4275495a25d1ba466353182c20262c077b236c899f97b74->leave($__internal_788acaa2b1553698e4275495a25d1ba466353182c20262c077b236c899f97b74_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:listaCuestionarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
