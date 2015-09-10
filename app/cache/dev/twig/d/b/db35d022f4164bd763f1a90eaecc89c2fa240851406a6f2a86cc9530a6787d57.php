<?php

/* UciBaseDatosBundle:AreaConocimiento:index.html.twig */
class __TwigTemplate_db35d022f4164bd763f1a90eaecc89c2fa240851406a6f2a86cc9530a6787d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AreaConocimiento:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_473e9fbf192cd65ae3a041ee8734a2124d4cf534c744266daadfe935846204fe = $this->env->getExtension("native_profiler");
        $__internal_473e9fbf192cd65ae3a041ee8734a2124d4cf534c744266daadfe935846204fe->enter($__internal_473e9fbf192cd65ae3a041ee8734a2124d4cf534c744266daadfe935846204fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AreaConocimiento:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_473e9fbf192cd65ae3a041ee8734a2124d4cf534c744266daadfe935846204fe->leave($__internal_473e9fbf192cd65ae3a041ee8734a2124d4cf534c744266daadfe935846204fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf9457d9be13c799222beec35ef114eced8b10c9d948cd4d64a2929a2285f6b = $this->env->getExtension("native_profiler");
        $__internal_2cf9457d9be13c799222beec35ef114eced8b10c9d948cd4d64a2929a2285f6b->enter($__internal_2cf9457d9be13c799222beec35ef114eced8b10c9d948cd4d64a2929a2285f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AreaConocimiento list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombrearea</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areaconocimiento_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreArea", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areaconocimiento_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areaconocimiento_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("areaconocimiento_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_2cf9457d9be13c799222beec35ef114eced8b10c9d948cd4d64a2929a2285f6b->leave($__internal_2cf9457d9be13c799222beec35ef114eced8b10c9d948cd4d64a2929a2285f6b_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AreaConocimiento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
