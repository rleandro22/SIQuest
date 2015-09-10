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
        $__internal_fcb10aea051b93eebd2439aecfb3cf24f3bda51bc627f8497251c430b93bc758 = $this->env->getExtension("native_profiler");
        $__internal_fcb10aea051b93eebd2439aecfb3cf24f3bda51bc627f8497251c430b93bc758->enter($__internal_fcb10aea051b93eebd2439aecfb3cf24f3bda51bc627f8497251c430b93bc758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Idiomas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb10aea051b93eebd2439aecfb3cf24f3bda51bc627f8497251c430b93bc758->leave($__internal_fcb10aea051b93eebd2439aecfb3cf24f3bda51bc627f8497251c430b93bc758_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07cf873ffcba6b25520924b054498761020275c42d692bdb97a8fa5b92ce46b8 = $this->env->getExtension("native_profiler");
        $__internal_07cf873ffcba6b25520924b054498761020275c42d692bdb97a8fa5b92ce46b8->enter($__internal_07cf873ffcba6b25520924b054498761020275c42d692bdb97a8fa5b92ce46b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_07cf873ffcba6b25520924b054498761020275c42d692bdb97a8fa5b92ce46b8->leave($__internal_07cf873ffcba6b25520924b054498761020275c42d692bdb97a8fa5b92ce46b8_prof);

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
