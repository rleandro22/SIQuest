<?php

/* UciBaseDatosBundle:Respuesta:index.html.twig */
class __TwigTemplate_273831847cede0be5ad2fa18fdbc5cd40ada703e813ade16000721507bbd1910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Respuesta:index.html.twig", 1);
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
        $__internal_858581f889255474ca84fba40f5a72216c4847721428970f5b4d32f5d45c694d = $this->env->getExtension("native_profiler");
        $__internal_858581f889255474ca84fba40f5a72216c4847721428970f5b4d32f5d45c694d->enter($__internal_858581f889255474ca84fba40f5a72216c4847721428970f5b4d32f5d45c694d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Respuesta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_858581f889255474ca84fba40f5a72216c4847721428970f5b4d32f5d45c694d->leave($__internal_858581f889255474ca84fba40f5a72216c4847721428970f5b4d32f5d45c694d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0be210a7e9f7ed82ff837111d809948639263090972ff4b7fc92f5ec476307e9 = $this->env->getExtension("native_profiler");
        $__internal_0be210a7e9f7ed82ff837111d809948639263090972ff4b7fc92f5ec476307e9->enter($__internal_0be210a7e9f7ed82ff837111d809948639263090972ff4b7fc92f5ec476307e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Respuesta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Textorespuesta</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuesta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textoRespuesta", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuesta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuesta_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("respuesta_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_0be210a7e9f7ed82ff837111d809948639263090972ff4b7fc92f5ec476307e9->leave($__internal_0be210a7e9f7ed82ff837111d809948639263090972ff4b7fc92f5ec476307e9_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Respuesta:index.html.twig";
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
