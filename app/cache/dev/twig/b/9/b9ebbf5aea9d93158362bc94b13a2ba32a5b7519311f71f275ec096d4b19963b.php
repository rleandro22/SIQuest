<?php

/* UciBaseDatosBundle:Curso:index.html.twig */
class __TwigTemplate_b9ebbf5aea9d93158362bc94b13a2ba32a5b7519311f71f275ec096d4b19963b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Curso:index.html.twig", 1);
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
        $__internal_95cd9e87a9685660702e41266aac9648f3bc3d86a2778409e0b8e2ebb45becd7 = $this->env->getExtension("native_profiler");
        $__internal_95cd9e87a9685660702e41266aac9648f3bc3d86a2778409e0b8e2ebb45becd7->enter($__internal_95cd9e87a9685660702e41266aac9648f3bc3d86a2778409e0b8e2ebb45becd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Curso:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95cd9e87a9685660702e41266aac9648f3bc3d86a2778409e0b8e2ebb45becd7->leave($__internal_95cd9e87a9685660702e41266aac9648f3bc3d86a2778409e0b8e2ebb45becd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa66133b7ae856a4500919f9d4ae54467bb4db416cd2df38af501c60680f3ffe = $this->env->getExtension("native_profiler");
        $__internal_aa66133b7ae856a4500919f9d4ae54467bb4db416cd2df38af501c60680f3ffe->enter($__internal_aa66133b7ae856a4500919f9d4ae54467bb4db416cd2df38af501c60680f3ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Curso list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombrecurso</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrecurso", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("curso_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_aa66133b7ae856a4500919f9d4ae54467bb4db416cd2df38af501c60680f3ffe->leave($__internal_aa66133b7ae856a4500919f9d4ae54467bb4db416cd2df38af501c60680f3ffe_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Curso:index.html.twig";
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
