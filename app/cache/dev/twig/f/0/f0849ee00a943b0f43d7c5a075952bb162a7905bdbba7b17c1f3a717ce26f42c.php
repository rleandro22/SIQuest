<?php

/* UciBaseDatosBundle:Profesor:index.html.twig */
class __TwigTemplate_f0849ee00a943b0f43d7c5a075952bb162a7905bdbba7b17c1f3a717ce26f42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Profesor:index.html.twig", 1);
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
        $__internal_d64f30d2db4088482bb6b96be498676e2251f41525b45a6e1b6810f673e3dcb8 = $this->env->getExtension("native_profiler");
        $__internal_d64f30d2db4088482bb6b96be498676e2251f41525b45a6e1b6810f673e3dcb8->enter($__internal_d64f30d2db4088482bb6b96be498676e2251f41525b45a6e1b6810f673e3dcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Profesor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64f30d2db4088482bb6b96be498676e2251f41525b45a6e1b6810f673e3dcb8->leave($__internal_d64f30d2db4088482bb6b96be498676e2251f41525b45a6e1b6810f673e3dcb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_318309e1e543c841a02ca33b05fa9dbde917876729edc10651e287a3e7093bac = $this->env->getExtension("native_profiler");
        $__internal_318309e1e543c841a02ca33b05fa9dbde917876729edc10651e287a3e7093bac->enter($__internal_318309e1e543c841a02ca33b05fa9dbde917876729edc10651e287a3e7093bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profesor list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesor_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesor_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesor_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 29
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("profesor_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_318309e1e543c841a02ca33b05fa9dbde917876729edc10651e287a3e7093bac->leave($__internal_318309e1e543c841a02ca33b05fa9dbde917876729edc10651e287a3e7093bac_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Profesor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
