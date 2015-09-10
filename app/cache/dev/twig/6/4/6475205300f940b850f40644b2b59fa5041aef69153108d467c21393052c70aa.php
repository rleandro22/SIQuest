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
        $__internal_452fa97064a582fa8b5f0c156557a4737a672e1b42386acef8f3d95c418c6e82 = $this->env->getExtension("native_profiler");
        $__internal_452fa97064a582fa8b5f0c156557a4737a672e1b42386acef8f3d95c418c6e82->enter($__internal_452fa97064a582fa8b5f0c156557a4737a672e1b42386acef8f3d95c418c6e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Cuestionario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_452fa97064a582fa8b5f0c156557a4737a672e1b42386acef8f3d95c418c6e82->leave($__internal_452fa97064a582fa8b5f0c156557a4737a672e1b42386acef8f3d95c418c6e82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b48aec96e3623b96050da75cec8b3fb08e970c54f0e99a979137edd76ecd20 = $this->env->getExtension("native_profiler");
        $__internal_36b48aec96e3623b96050da75cec8b3fb08e970c54f0e99a979137edd76ecd20->enter($__internal_36b48aec96e3623b96050da75cec8b3fb08e970c54f0e99a979137edd76ecd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Cuestionario list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pruebanumero</th>
                <th>Fechaaplicacuestionario</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuestionario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pruebaNumero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["entity"], "fechaAplicaCuestionario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAplicaCuestionario", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuestionario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
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
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("cuestionario_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_36b48aec96e3623b96050da75cec8b3fb08e970c54f0e99a979137edd76ecd20->leave($__internal_36b48aec96e3623b96050da75cec8b3fb08e970c54f0e99a979137edd76ecd20_prof);

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
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
