<?php

/* UciBaseDatosBundle:Decano:index.html.twig */
class __TwigTemplate_2f11f88b250ef8fbc96a7ba2a1d00dd2920195fd466702b9f9e8c91f4e1ef0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Decano:index.html.twig", 1);
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
        $__internal_8ce624b863b5bc3d60b790221f270ad948025d0d667e9d8425a2f1543edf3925 = $this->env->getExtension("native_profiler");
        $__internal_8ce624b863b5bc3d60b790221f270ad948025d0d667e9d8425a2f1543edf3925->enter($__internal_8ce624b863b5bc3d60b790221f270ad948025d0d667e9d8425a2f1543edf3925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Decano:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce624b863b5bc3d60b790221f270ad948025d0d667e9d8425a2f1543edf3925->leave($__internal_8ce624b863b5bc3d60b790221f270ad948025d0d667e9d8425a2f1543edf3925_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adda6b17927ed806edd34ba89b8cd3d719a42b611dafe8587074141d8b3c3d2c = $this->env->getExtension("native_profiler");
        $__internal_adda6b17927ed806edd34ba89b8cd3d719a42b611dafe8587074141d8b3c3d2c->enter($__internal_adda6b17927ed806edd34ba89b8cd3d719a42b611dafe8587074141d8b3c3d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Decano list</h1>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("decano_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("decano_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("decano_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("decano_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_adda6b17927ed806edd34ba89b8cd3d719a42b611dafe8587074141d8b3c3d2c->leave($__internal_adda6b17927ed806edd34ba89b8cd3d719a42b611dafe8587074141d8b3c3d2c_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Decano:index.html.twig";
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
