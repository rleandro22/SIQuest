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
        $__internal_61e4a52523bc1edb3b336c0d209b68e40dee07febcd19fa8be4dc007879b19a1 = $this->env->getExtension("native_profiler");
        $__internal_61e4a52523bc1edb3b336c0d209b68e40dee07febcd19fa8be4dc007879b19a1->enter($__internal_61e4a52523bc1edb3b336c0d209b68e40dee07febcd19fa8be4dc007879b19a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AreaConocimiento:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e4a52523bc1edb3b336c0d209b68e40dee07febcd19fa8be4dc007879b19a1->leave($__internal_61e4a52523bc1edb3b336c0d209b68e40dee07febcd19fa8be4dc007879b19a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7344a153c99d3e9334678d6bcbd3a7846354f4b691584a7c498f5d137cb76aa = $this->env->getExtension("native_profiler");
        $__internal_f7344a153c99d3e9334678d6bcbd3a7846354f4b691584a7c498f5d137cb76aa->enter($__internal_f7344a153c99d3e9334678d6bcbd3a7846354f4b691584a7c498f5d137cb76aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7344a153c99d3e9334678d6bcbd3a7846354f4b691584a7c498f5d137cb76aa->leave($__internal_f7344a153c99d3e9334678d6bcbd3a7846354f4b691584a7c498f5d137cb76aa_prof);

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
