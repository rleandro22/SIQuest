<?php

/* UciBaseDatosBundle:Libro:index.html.twig */
class __TwigTemplate_6c4501650f37caa8cbacf08cc2f047f3510cdfc15c7a04f949d6423d7bf8dbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Libro:index.html.twig", 1);
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
        $__internal_cfd93bf67fea7f4ef3c0fe6213fdccd8dadd5f325e0beefc346d44e8afdccc6c = $this->env->getExtension("native_profiler");
        $__internal_cfd93bf67fea7f4ef3c0fe6213fdccd8dadd5f325e0beefc346d44e8afdccc6c->enter($__internal_cfd93bf67fea7f4ef3c0fe6213fdccd8dadd5f325e0beefc346d44e8afdccc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Libro:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfd93bf67fea7f4ef3c0fe6213fdccd8dadd5f325e0beefc346d44e8afdccc6c->leave($__internal_cfd93bf67fea7f4ef3c0fe6213fdccd8dadd5f325e0beefc346d44e8afdccc6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_474e32b50b27b46d1f6c2239f50c17e7a61389ece930f02f44c6cee4f7c92bac = $this->env->getExtension("native_profiler");
        $__internal_474e32b50b27b46d1f6c2239f50c17e7a61389ece930f02f44c6cee4f7c92bac->enter($__internal_474e32b50b27b46d1f6c2239f50c17e7a61389ece930f02f44c6cee4f7c92bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Libro list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Anio</th>
                <th>Espmbok</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "esPmbok", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("libro_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_474e32b50b27b46d1f6c2239f50c17e7a61389ece930f02f44c6cee4f7c92bac->leave($__internal_474e32b50b27b46d1f6c2239f50c17e7a61389ece930f02f44c6cee4f7c92bac_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Libro:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
