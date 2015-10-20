<?php

/* UciBaseDatosBundle:Respuesta:index.html.twig */
class __TwigTemplate_273831847cede0be5ad2fa18fdbc5cd40ada703e813ade16000721507bbd1910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Respuesta:index.html.twig", 1);
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
        $__internal_6cce2b9452c155ab0cccd8c7e9c9f6dcec5ef05bcf07ad97977c2adbb5e0378e = $this->env->getExtension("native_profiler");
        $__internal_6cce2b9452c155ab0cccd8c7e9c9f6dcec5ef05bcf07ad97977c2adbb5e0378e->enter($__internal_6cce2b9452c155ab0cccd8c7e9c9f6dcec5ef05bcf07ad97977c2adbb5e0378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Respuesta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cce2b9452c155ab0cccd8c7e9c9f6dcec5ef05bcf07ad97977c2adbb5e0378e->leave($__internal_6cce2b9452c155ab0cccd8c7e9c9f6dcec5ef05bcf07ad97977c2adbb5e0378e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_787fadc756a8d9306f8b7313f8f037cf5a9adb91504f5d9b9476a8e35c194a99 = $this->env->getExtension("native_profiler");
        $__internal_787fadc756a8d9306f8b7313f8f037cf5a9adb91504f5d9b9476a8e35c194a99->enter($__internal_787fadc756a8d9306f8b7313f8f037cf5a9adb91504f5d9b9476a8e35c194a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Respuesta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Textorespuesta</th>
                <th>Textoretroalimentacion</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuesta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textoRespuesta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textoRetroalimentacion", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuesta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuesta_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("respuesta_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_787fadc756a8d9306f8b7313f8f037cf5a9adb91504f5d9b9476a8e35c194a99->leave($__internal_787fadc756a8d9306f8b7313f8f037cf5a9adb91504f5d9b9476a8e35c194a99_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Respuesta:index.html.twig";
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
