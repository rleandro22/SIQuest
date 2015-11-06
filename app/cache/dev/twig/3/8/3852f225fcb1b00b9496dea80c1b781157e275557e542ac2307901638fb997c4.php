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
        $__internal_b429a5a7a2883363707eda3b6a20bab165f9f3ee9d937611432b5c4df2646b27 = $this->env->getExtension("native_profiler");
        $__internal_b429a5a7a2883363707eda3b6a20bab165f9f3ee9d937611432b5c4df2646b27->enter($__internal_b429a5a7a2883363707eda3b6a20bab165f9f3ee9d937611432b5c4df2646b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:listaCuestionarios.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "    <div class=\"col-lg-2 col-md-4 col-xs-6 thumb\">
        <div class=\"thumbnail\">
            <a data-toggle=\"modal\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
                <p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuestionarioname", array()), "html", null, true);
            echo "</p>
            </a>

            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_indicecurso", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <img class=\"img-responsive\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img_test_1.png"), "html", null, true);
            echo "\" alt=\"\">
            </a>
            <br>
            <div class=\"row\">
                <div class=\"col-md-6\"></div>
                <div class=\"col-md-6\"><span class=\"pull-right\"><a data-toggle=\"modal\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b429a5a7a2883363707eda3b6a20bab165f9f3ee9d937611432b5c4df2646b27->leave($__internal_b429a5a7a2883363707eda3b6a20bab165f9f3ee9d937611432b5c4df2646b27_prof);

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
        return array (  56 => 15,  52 => 14,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 2,  22 => 1,);
    }
}
