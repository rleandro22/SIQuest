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
        $__internal_746b982689eee5c823b66e9be44501a085107e77c763354daf0820c910fc0f61 = $this->env->getExtension("native_profiler");
        $__internal_746b982689eee5c823b66e9be44501a085107e77c763354daf0820c910fc0f61->enter($__internal_746b982689eee5c823b66e9be44501a085107e77c763354daf0820c910fc0f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pregunta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_746b982689eee5c823b66e9be44501a085107e77c763354daf0820c910fc0f61->leave($__internal_746b982689eee5c823b66e9be44501a085107e77c763354daf0820c910fc0f61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a569e10af6a7ba6cdb957d9e3f2b560933abda2bee8abf38dc2dae313877437 = $this->env->getExtension("native_profiler");
        $__internal_2a569e10af6a7ba6cdb957d9e3f2b560933abda2bee8abf38dc2dae313877437->enter($__internal_2a569e10af6a7ba6cdb957d9e3f2b560933abda2bee8abf38dc2dae313877437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pregunta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
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
        // line 29
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("pregunta_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_2a569e10af6a7ba6cdb957d9e3f2b560933abda2bee8abf38dc2dae313877437->leave($__internal_2a569e10af6a7ba6cdb957d9e3f2b560933abda2bee8abf38dc2dae313877437_prof);

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
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
