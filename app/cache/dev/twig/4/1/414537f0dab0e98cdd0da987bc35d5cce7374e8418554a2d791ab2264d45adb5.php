<?php

/* UciBaseDatosBundle:Idiomas:index.html.twig */
class __TwigTemplate_414537f0dab0e98cdd0da987bc35d5cce7374e8418554a2d791ab2264d45adb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Idiomas:index.html.twig", 1);
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
        $__internal_4403e9e817e30fbf0006b22b05e546ee5b3abc65896210d58b224bea4ea27e13 = $this->env->getExtension("native_profiler");
        $__internal_4403e9e817e30fbf0006b22b05e546ee5b3abc65896210d58b224bea4ea27e13->enter($__internal_4403e9e817e30fbf0006b22b05e546ee5b3abc65896210d58b224bea4ea27e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Idiomas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4403e9e817e30fbf0006b22b05e546ee5b3abc65896210d58b224bea4ea27e13->leave($__internal_4403e9e817e30fbf0006b22b05e546ee5b3abc65896210d58b224bea4ea27e13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71d7b444c7a35a153be2347b4431ce4759f2a7c2452617348ed149f245b0e18e = $this->env->getExtension("native_profiler");
        $__internal_71d7b444c7a35a153be2347b4431ce4759f2a7c2452617348ed149f245b0e18e->enter($__internal_71d7b444c7a35a153be2347b4431ce4759f2a7c2452617348ed149f245b0e18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Idiomas list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigolenguaje</th>
                <th>Nombrelenguaje</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idiomas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigoLenguaje", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreLenguaje", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idiomas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idiomas_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("idiomas_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_71d7b444c7a35a153be2347b4431ce4759f2a7c2452617348ed149f245b0e18e->leave($__internal_71d7b444c7a35a153be2347b4431ce4759f2a7c2452617348ed149f245b0e18e_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Idiomas:index.html.twig";
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
