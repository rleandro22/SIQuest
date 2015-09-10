<?php

/* UciBaseDatosBundle:TipoPregunta:index.html.twig */
class __TwigTemplate_e530707dd4328f96f5ff0d372c657e1167eb4b5307e9e417f0f1caf3a5c87341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoPregunta:index.html.twig", 1);
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
        $__internal_5d08fad9162e2c3806b8082460552e64c92fcb5ca5807ec5106154c73ec5cdb0 = $this->env->getExtension("native_profiler");
        $__internal_5d08fad9162e2c3806b8082460552e64c92fcb5ca5807ec5106154c73ec5cdb0->enter($__internal_5d08fad9162e2c3806b8082460552e64c92fcb5ca5807ec5106154c73ec5cdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoPregunta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d08fad9162e2c3806b8082460552e64c92fcb5ca5807ec5106154c73ec5cdb0->leave($__internal_5d08fad9162e2c3806b8082460552e64c92fcb5ca5807ec5106154c73ec5cdb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ac957ddb6831d55578b4b2f48963f8e3dccb795b7e3eca55d729d6c8235ecc0 = $this->env->getExtension("native_profiler");
        $__internal_2ac957ddb6831d55578b4b2f48963f8e3dccb795b7e3eca55d729d6c8235ecc0->enter($__internal_2ac957ddb6831d55578b4b2f48963f8e3dccb795b7e3eca55d729d6c8235ecc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoPregunta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipopregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipo", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipopregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipopregunta_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("tipopregunta_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_2ac957ddb6831d55578b4b2f48963f8e3dccb795b7e3eca55d729d6c8235ecc0->leave($__internal_2ac957ddb6831d55578b4b2f48963f8e3dccb795b7e3eca55d729d6c8235ecc0_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoPregunta:index.html.twig";
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
