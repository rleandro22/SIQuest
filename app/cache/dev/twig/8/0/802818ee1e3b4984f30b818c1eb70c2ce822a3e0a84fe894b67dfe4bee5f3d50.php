<?php

/* UciBaseDatosBundle:TipoRespuestaCorta:index.html.twig */
class __TwigTemplate_802818ee1e3b4984f30b818c1eb70c2ce822a3e0a84fe894b67dfe4bee5f3d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoRespuestaCorta:index.html.twig", 1);
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
        $__internal_ab138cbb0126fb0131ada3569a307e7585ef45c7de15c2644f6443f0f1f8ea17 = $this->env->getExtension("native_profiler");
        $__internal_ab138cbb0126fb0131ada3569a307e7585ef45c7de15c2644f6443f0f1f8ea17->enter($__internal_ab138cbb0126fb0131ada3569a307e7585ef45c7de15c2644f6443f0f1f8ea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoRespuestaCorta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab138cbb0126fb0131ada3569a307e7585ef45c7de15c2644f6443f0f1f8ea17->leave($__internal_ab138cbb0126fb0131ada3569a307e7585ef45c7de15c2644f6443f0f1f8ea17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f8333270bcf3a800336d543219eaed5ca50e21c927243ce78e7abbf44b8b565 = $this->env->getExtension("native_profiler");
        $__internal_5f8333270bcf3a800336d543219eaed5ca50e21c927243ce78e7abbf44b8b565->enter($__internal_5f8333270bcf3a800336d543219eaed5ca50e21c927243ce78e7abbf44b8b565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoRespuestaCorta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Correcta</th>
                <th>Porcentajecorreccion</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tiporespuestacorta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correcta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "porcentajeCorreccion", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tiporespuestacorta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tiporespuestacorta_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("tiporespuestacorta_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_5f8333270bcf3a800336d543219eaed5ca50e21c927243ce78e7abbf44b8b565->leave($__internal_5f8333270bcf3a800336d543219eaed5ca50e21c927243ce78e7abbf44b8b565_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoRespuestaCorta:index.html.twig";
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
