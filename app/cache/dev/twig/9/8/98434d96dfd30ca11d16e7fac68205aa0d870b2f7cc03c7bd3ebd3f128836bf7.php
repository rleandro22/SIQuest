<?php

/* UciBaseDatosBundle:TipoPrueba:index.html.twig */
class __TwigTemplate_98434d96dfd30ca11d16e7fac68205aa0d870b2f7cc03c7bd3ebd3f128836bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoPrueba:index.html.twig", 1);
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
        $__internal_a4f3f3a83fb033205bb5667676313a48c3338ff49a679f55ae39dd583779389f = $this->env->getExtension("native_profiler");
        $__internal_a4f3f3a83fb033205bb5667676313a48c3338ff49a679f55ae39dd583779389f->enter($__internal_a4f3f3a83fb033205bb5667676313a48c3338ff49a679f55ae39dd583779389f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoPrueba:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f3f3a83fb033205bb5667676313a48c3338ff49a679f55ae39dd583779389f->leave($__internal_a4f3f3a83fb033205bb5667676313a48c3338ff49a679f55ae39dd583779389f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_842bc640d76e8d5a745982a16a755512ac0740624faabce42143e44888a67071 = $this->env->getExtension("native_profiler");
        $__internal_842bc640d76e8d5a745982a16a755512ac0740624faabce42143e44888a67071->enter($__internal_842bc640d76e8d5a745982a16a755512ac0740624faabce42143e44888a67071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoPrueba list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombretipo</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoprueba_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreTipo", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoprueba_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoprueba_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("tipoprueba_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_842bc640d76e8d5a745982a16a755512ac0740624faabce42143e44888a67071->leave($__internal_842bc640d76e8d5a745982a16a755512ac0740624faabce42143e44888a67071_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoPrueba:index.html.twig";
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
