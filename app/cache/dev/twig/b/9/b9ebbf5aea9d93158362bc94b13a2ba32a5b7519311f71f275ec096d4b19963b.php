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
        $__internal_f29cbd074a33ca26bb0d8a23e52ea4ae0ebe78b6149b7e5b61284c6bcd264a79 = $this->env->getExtension("native_profiler");
        $__internal_f29cbd074a33ca26bb0d8a23e52ea4ae0ebe78b6149b7e5b61284c6bcd264a79->enter($__internal_f29cbd074a33ca26bb0d8a23e52ea4ae0ebe78b6149b7e5b61284c6bcd264a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Curso:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29cbd074a33ca26bb0d8a23e52ea4ae0ebe78b6149b7e5b61284c6bcd264a79->leave($__internal_f29cbd074a33ca26bb0d8a23e52ea4ae0ebe78b6149b7e5b61284c6bcd264a79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c2a54e0ea497d4411693bac038b7dfa9a3041921c0f3aa04758dc60a6260af = $this->env->getExtension("native_profiler");
        $__internal_d9c2a54e0ea497d4411693bac038b7dfa9a3041921c0f3aa04758dc60a6260af->enter($__internal_d9c2a54e0ea497d4411693bac038b7dfa9a3041921c0f3aa04758dc60a6260af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Curso list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Generacion</th>
                <th>Nombrecurso</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "generacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrecurso", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
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
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("curso_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_d9c2a54e0ea497d4411693bac038b7dfa9a3041921c0f3aa04758dc60a6260af->leave($__internal_d9c2a54e0ea497d4411693bac038b7dfa9a3041921c0f3aa04758dc60a6260af_prof);

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
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
