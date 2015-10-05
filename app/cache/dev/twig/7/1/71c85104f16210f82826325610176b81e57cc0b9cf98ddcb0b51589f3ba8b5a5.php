<?php

/* UciBaseDatosBundle:Generacion:index.html.twig */
class __TwigTemplate_71c85104f16210f82826325610176b81e57cc0b9cf98ddcb0b51589f3ba8b5a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Generacion:index.html.twig", 1);
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
        $__internal_f1ab074c28feb68c9dc4f7a86efa03a7ced20d401bca7ffd99cca32e679a2395 = $this->env->getExtension("native_profiler");
        $__internal_f1ab074c28feb68c9dc4f7a86efa03a7ced20d401bca7ffd99cca32e679a2395->enter($__internal_f1ab074c28feb68c9dc4f7a86efa03a7ced20d401bca7ffd99cca32e679a2395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Generacion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ab074c28feb68c9dc4f7a86efa03a7ced20d401bca7ffd99cca32e679a2395->leave($__internal_f1ab074c28feb68c9dc4f7a86efa03a7ced20d401bca7ffd99cca32e679a2395_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60260af92324e01bfd48e8d26b600665dedfcd34f6c3d34ec28ed6969301221c = $this->env->getExtension("native_profiler");
        $__internal_60260af92324e01bfd48e8d26b600665dedfcd34f6c3d34ec28ed6969301221c->enter($__internal_60260af92324e01bfd48e8d26b600665dedfcd34f6c3d34ec28ed6969301221c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Generacion list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Generacion</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "generacion", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("generacion_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_60260af92324e01bfd48e8d26b600665dedfcd34f6c3d34ec28ed6969301221c->leave($__internal_60260af92324e01bfd48e8d26b600665dedfcd34f6c3d34ec28ed6969301221c_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Generacion:index.html.twig";
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
