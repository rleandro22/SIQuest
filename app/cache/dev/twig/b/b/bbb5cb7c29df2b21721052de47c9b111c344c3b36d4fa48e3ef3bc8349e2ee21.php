<?php

/* UciBaseDatosBundle:Pregunta:index.html.twig */
class __TwigTemplate_bbb5cb7c29df2b21721052de47c9b111c344c3b36d4fa48e3ef3bc8349e2ee21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pregunta:index.html.twig", 1);
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
        $__internal_18667be50d31bf05255a3b0c489b648b24cdf5b4aa826ed058bda8f49edfa110 = $this->env->getExtension("native_profiler");
        $__internal_18667be50d31bf05255a3b0c489b648b24cdf5b4aa826ed058bda8f49edfa110->enter($__internal_18667be50d31bf05255a3b0c489b648b24cdf5b4aa826ed058bda8f49edfa110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pregunta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18667be50d31bf05255a3b0c489b648b24cdf5b4aa826ed058bda8f49edfa110->leave($__internal_18667be50d31bf05255a3b0c489b648b24cdf5b4aa826ed058bda8f49edfa110_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58332a99b9d252bd93740188392979ead58121eed98c39368a3878a1ba79b52a = $this->env->getExtension("native_profiler");
        $__internal_58332a99b9d252bd93740188392979ead58121eed98c39368a3878a1ba79b52a->enter($__internal_58332a99b9d252bd93740188392979ead58121eed98c39368a3878a1ba79b52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pregunta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pregunta_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("pregunta_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_58332a99b9d252bd93740188392979ead58121eed98c39368a3878a1ba79b52a->leave($__internal_58332a99b9d252bd93740188392979ead58121eed98c39368a3878a1ba79b52a_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pregunta:index.html.twig";
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
