<?php

/* UciBaseDatosBundle:Solicitud:index.html.twig */
class __TwigTemplate_05b805d9dc6164c3d517869eaf4f99372430a0d7d63df4701f7d63bafb00641e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Solicitud:index.html.twig", 1);
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
        $__internal_da36e666d14ae2a7fabb5f827cd4495d4db832ce73ced44b47a61f431e03bf31 = $this->env->getExtension("native_profiler");
        $__internal_da36e666d14ae2a7fabb5f827cd4495d4db832ce73ced44b47a61f431e03bf31->enter($__internal_da36e666d14ae2a7fabb5f827cd4495d4db832ce73ced44b47a61f431e03bf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Solicitud:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da36e666d14ae2a7fabb5f827cd4495d4db832ce73ced44b47a61f431e03bf31->leave($__internal_da36e666d14ae2a7fabb5f827cd4495d4db832ce73ced44b47a61f431e03bf31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be1d5ffa8410fcab2575001cfd1d2ee2b4d3952b6bcef49426eb344e5fd3b989 = $this->env->getExtension("native_profiler");
        $__internal_be1d5ffa8410fcab2575001cfd1d2ee2b4d3952b6bcef49426eb344e5fd3b989->enter($__internal_be1d5ffa8410fcab2575001cfd1d2ee2b4d3952b6bcef49426eb344e5fd3b989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Solicitud list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Textosolicitud</th>
                <th>Activa</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textosolicitud", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "activa", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("solicitud_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_be1d5ffa8410fcab2575001cfd1d2ee2b4d3952b6bcef49426eb344e5fd3b989->leave($__internal_be1d5ffa8410fcab2575001cfd1d2ee2b4d3952b6bcef49426eb344e5fd3b989_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Solicitud:index.html.twig";
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
