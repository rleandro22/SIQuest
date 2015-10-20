<?php

/* UciBaseDatosBundle:PreguntaTieneRespuestas:index.html.twig */
class __TwigTemplate_79ed45b54c96253cfc9414bf32dbb56abdcab5b44ab7b74a137b90b0060c0ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:PreguntaTieneRespuestas:index.html.twig", 1);
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
        $__internal_e2d91f2c0038400578c2f179fa15b09f4e8ae68b81be9cdf451be1b8091d5d8a = $this->env->getExtension("native_profiler");
        $__internal_e2d91f2c0038400578c2f179fa15b09f4e8ae68b81be9cdf451be1b8091d5d8a->enter($__internal_e2d91f2c0038400578c2f179fa15b09f4e8ae68b81be9cdf451be1b8091d5d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:PreguntaTieneRespuestas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d91f2c0038400578c2f179fa15b09f4e8ae68b81be9cdf451be1b8091d5d8a->leave($__internal_e2d91f2c0038400578c2f179fa15b09f4e8ae68b81be9cdf451be1b8091d5d8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_946c4b555c586ecc6db935d0b6e5200c640aad3deb77133c694b4ec9933767a1 = $this->env->getExtension("native_profiler");
        $__internal_946c4b555c586ecc6db935d0b6e5200c640aad3deb77133c694b4ec9933767a1->enter($__internal_946c4b555c586ecc6db935d0b6e5200c640aad3deb77133c694b4ec9933767a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>PreguntaTieneRespuestas list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Orden</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntatienerespuestas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "orden", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntatienerespuestas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntatienerespuestas_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("preguntatienerespuestas_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_946c4b555c586ecc6db935d0b6e5200c640aad3deb77133c694b4ec9933767a1->leave($__internal_946c4b555c586ecc6db935d0b6e5200c640aad3deb77133c694b4ec9933767a1_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:PreguntaTieneRespuestas:index.html.twig";
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
