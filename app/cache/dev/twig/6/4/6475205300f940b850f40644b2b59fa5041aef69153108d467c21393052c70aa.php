<?php

/* UciBaseDatosBundle:Cuestionario:index.html.twig */
class __TwigTemplate_6475205300f940b850f40644b2b59fa5041aef69153108d467c21393052c70aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Cuestionario:index.html.twig", 1);
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
        $__internal_844f521a2a4dfcb868ff02c1d8d76565c36021587c313a8b62b5fd546452c07f = $this->env->getExtension("native_profiler");
        $__internal_844f521a2a4dfcb868ff02c1d8d76565c36021587c313a8b62b5fd546452c07f->enter($__internal_844f521a2a4dfcb868ff02c1d8d76565c36021587c313a8b62b5fd546452c07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Cuestionario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_844f521a2a4dfcb868ff02c1d8d76565c36021587c313a8b62b5fd546452c07f->leave($__internal_844f521a2a4dfcb868ff02c1d8d76565c36021587c313a8b62b5fd546452c07f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4438c24febdeb50ecb23fdcb098167b6c04933a205b52bccc8b1c0ea5f966784 = $this->env->getExtension("native_profiler");
        $__internal_4438c24febdeb50ecb23fdcb098167b6c04933a205b52bccc8b1c0ea5f966784->enter($__internal_4438c24febdeb50ecb23fdcb098167b6c04933a205b52bccc8b1c0ea5f966784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Cuestionario list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pruebanumero</th>
                <th>Fecha</th>
                <th>Revisionid</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuestionario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pruebaNumero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "revisionId", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuestionario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuestionario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("cuestionario_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_4438c24febdeb50ecb23fdcb098167b6c04933a205b52bccc8b1c0ea5f966784->leave($__internal_4438c24febdeb50ecb23fdcb098167b6c04933a205b52bccc8b1c0ea5f966784_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Cuestionario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
