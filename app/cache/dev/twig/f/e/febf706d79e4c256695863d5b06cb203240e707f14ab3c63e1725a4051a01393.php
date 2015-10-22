<?php

/* UciBaseDatosBundle:TipoRespuestaMultiple:index.html.twig */
class __TwigTemplate_febf706d79e4c256695863d5b06cb203240e707f14ab3c63e1725a4051a01393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoRespuestaMultiple:index.html.twig", 1);
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
        $__internal_fd700de206499eb84b90b6ddea3d88c7ca103c0e30cce1714ae45675ee64b5ff = $this->env->getExtension("native_profiler");
        $__internal_fd700de206499eb84b90b6ddea3d88c7ca103c0e30cce1714ae45675ee64b5ff->enter($__internal_fd700de206499eb84b90b6ddea3d88c7ca103c0e30cce1714ae45675ee64b5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoRespuestaMultiple:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd700de206499eb84b90b6ddea3d88c7ca103c0e30cce1714ae45675ee64b5ff->leave($__internal_fd700de206499eb84b90b6ddea3d88c7ca103c0e30cce1714ae45675ee64b5ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f382e5c76d2af2a8500009a7faaccd8274845a894846965f7a0956a2eca66f8a = $this->env->getExtension("native_profiler");
        $__internal_f382e5c76d2af2a8500009a7faaccd8274845a894846965f7a0956a2eca66f8a->enter($__internal_f382e5c76d2af2a8500009a7faaccd8274845a894846965f7a0956a2eca66f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoRespuestaMultiple list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Correcta</th>
                <th>Porcentajecorreccion</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tiporespuestamultiple_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correcta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "porcentajeCorreccion", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tiporespuestamultiple_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tiporespuestamultiple_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("tiporespuestamultiple_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_f382e5c76d2af2a8500009a7faaccd8274845a894846965f7a0956a2eca66f8a->leave($__internal_f382e5c76d2af2a8500009a7faaccd8274845a894846965f7a0956a2eca66f8a_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoRespuestaMultiple:index.html.twig";
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
