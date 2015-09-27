<?php

/* UciBaseDatosBundle:Profesor:index.html.twig */
class __TwigTemplate_f0849ee00a943b0f43d7c5a075952bb162a7905bdbba7b17c1f3a717ce26f42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Profesor:index.html.twig", 1);
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
        $__internal_7feb464d964e2f7aebff56017a4349201bb63c60f6ce21a2066f84269da7370f = $this->env->getExtension("native_profiler");
        $__internal_7feb464d964e2f7aebff56017a4349201bb63c60f6ce21a2066f84269da7370f->enter($__internal_7feb464d964e2f7aebff56017a4349201bb63c60f6ce21a2066f84269da7370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Profesor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7feb464d964e2f7aebff56017a4349201bb63c60f6ce21a2066f84269da7370f->leave($__internal_7feb464d964e2f7aebff56017a4349201bb63c60f6ce21a2066f84269da7370f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe062a903a4f7c9ec8f680dc7302ff7abeaab844d29c16ce7feb6cc0086e92aa = $this->env->getExtension("native_profiler");
        $__internal_fe062a903a4f7c9ec8f680dc7302ff7abeaab844d29c16ce7feb6cc0086e92aa->enter($__internal_fe062a903a4f7c9ec8f680dc7302ff7abeaab844d29c16ce7feb6cc0086e92aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profesor list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Editatodas</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesor_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "editatodas", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesor_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesor_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("profesor_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_fe062a903a4f7c9ec8f680dc7302ff7abeaab844d29c16ce7feb6cc0086e92aa->leave($__internal_fe062a903a4f7c9ec8f680dc7302ff7abeaab844d29c16ce7feb6cc0086e92aa_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Profesor:index.html.twig";
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
