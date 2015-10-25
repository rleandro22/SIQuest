<?php

/* UciBaseDatosBundle:AsistenteAcademica:index.html.twig */
class __TwigTemplate_897206e0204f4ed4238b32aec1b777f9bfffabe74fcc5910c894878a4fce5009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AsistenteAcademica:index.html.twig", 1);
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
        $__internal_f3946fbd7c96ff1516b9e46fe9e071c583fe3db935153a40c19df3dc08079868 = $this->env->getExtension("native_profiler");
        $__internal_f3946fbd7c96ff1516b9e46fe9e071c583fe3db935153a40c19df3dc08079868->enter($__internal_f3946fbd7c96ff1516b9e46fe9e071c583fe3db935153a40c19df3dc08079868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AsistenteAcademica:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3946fbd7c96ff1516b9e46fe9e071c583fe3db935153a40c19df3dc08079868->leave($__internal_f3946fbd7c96ff1516b9e46fe9e071c583fe3db935153a40c19df3dc08079868_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8698de9818051e86e7b7205d93c299db06089ef5cf16438daa4f4c610f12d8c = $this->env->getExtension("native_profiler");
        $__internal_b8698de9818051e86e7b7205d93c299db06089ef5cf16438daa4f4c610f12d8c->enter($__internal_b8698de9818051e86e7b7205d93c299db06089ef5cf16438daa4f4c610f12d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AsistenteAcademica list</h1>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("asistenteacademica_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_b8698de9818051e86e7b7205d93c299db06089ef5cf16438daa4f4c610f12d8c->leave($__internal_b8698de9818051e86e7b7205d93c299db06089ef5cf16438daa4f4c610f12d8c_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AsistenteAcademica:index.html.twig";
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
