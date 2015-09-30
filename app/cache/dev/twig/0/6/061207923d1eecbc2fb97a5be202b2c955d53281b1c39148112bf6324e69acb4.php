<?php

/* UciBaseDatosBundle:Rol:index.html.twig */
class __TwigTemplate_061207923d1eecbc2fb97a5be202b2c955d53281b1c39148112bf6324e69acb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Rol:index.html.twig", 1);
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
        $__internal_0c0b57d03886f215f4ed1d399b88f86f019f363358d1f2b0715bf62b606b4839 = $this->env->getExtension("native_profiler");
        $__internal_0c0b57d03886f215f4ed1d399b88f86f019f363358d1f2b0715bf62b606b4839->enter($__internal_0c0b57d03886f215f4ed1d399b88f86f019f363358d1f2b0715bf62b606b4839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Rol:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0b57d03886f215f4ed1d399b88f86f019f363358d1f2b0715bf62b606b4839->leave($__internal_0c0b57d03886f215f4ed1d399b88f86f019f363358d1f2b0715bf62b606b4839_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_070b34954b4f1498bd89d29ffb7995ddb9ea43ccaa1689d85cd0130d3e6c7ea6 = $this->env->getExtension("native_profiler");
        $__internal_070b34954b4f1498bd89d29ffb7995ddb9ea43ccaa1689d85cd0130d3e6c7ea6->enter($__internal_070b34954b4f1498bd89d29ffb7995ddb9ea43ccaa1689d85cd0130d3e6c7ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Rol list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("rol_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_070b34954b4f1498bd89d29ffb7995ddb9ea43ccaa1689d85cd0130d3e6c7ea6->leave($__internal_070b34954b4f1498bd89d29ffb7995ddb9ea43ccaa1689d85cd0130d3e6c7ea6_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Rol:index.html.twig";
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
