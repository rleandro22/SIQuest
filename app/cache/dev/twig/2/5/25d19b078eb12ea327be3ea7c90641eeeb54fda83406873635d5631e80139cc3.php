<?php

/* UciBaseDatosBundle:GrupoProcesos:index.html.twig */
class __TwigTemplate_25d19b078eb12ea327be3ea7c90641eeeb54fda83406873635d5631e80139cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:GrupoProcesos:index.html.twig", 1);
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
        $__internal_9220dfa38a4a5f21bfd687af946e04b6209ad5fe4a4e0f72b511aa34e3e24b60 = $this->env->getExtension("native_profiler");
        $__internal_9220dfa38a4a5f21bfd687af946e04b6209ad5fe4a4e0f72b511aa34e3e24b60->enter($__internal_9220dfa38a4a5f21bfd687af946e04b6209ad5fe4a4e0f72b511aa34e3e24b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:GrupoProcesos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9220dfa38a4a5f21bfd687af946e04b6209ad5fe4a4e0f72b511aa34e3e24b60->leave($__internal_9220dfa38a4a5f21bfd687af946e04b6209ad5fe4a4e0f72b511aa34e3e24b60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45c48bee958a01e1a5bd716ee0772e694d5956241de1d4704857e8d43a3b0232 = $this->env->getExtension("native_profiler");
        $__internal_45c48bee958a01e1a5bd716ee0772e694d5956241de1d4704857e8d43a3b0232->enter($__internal_45c48bee958a01e1a5bd716ee0772e694d5956241de1d4704857e8d43a3b0232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>GrupoProcesos list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombregrupo</th>
                <th>Porcentaje</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupoprocesos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreGrupo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "porcentaje", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupoprocesos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupoprocesos_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("grupoprocesos_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_45c48bee958a01e1a5bd716ee0772e694d5956241de1d4704857e8d43a3b0232->leave($__internal_45c48bee958a01e1a5bd716ee0772e694d5956241de1d4704857e8d43a3b0232_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:GrupoProcesos:index.html.twig";
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
