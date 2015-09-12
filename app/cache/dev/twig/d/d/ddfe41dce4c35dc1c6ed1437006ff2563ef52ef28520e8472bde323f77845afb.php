<?php

/* UciBaseDatosBundle:UsuarioCorrigePregunta:index.html.twig */
class __TwigTemplate_ddfe41dce4c35dc1c6ed1437006ff2563ef52ef28520e8472bde323f77845afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:UsuarioCorrigePregunta:index.html.twig", 1);
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
        $__internal_06a8718bdf03608066374aa0ca26ea29cd6b9a960c3da63924a0efbe1d37a262 = $this->env->getExtension("native_profiler");
        $__internal_06a8718bdf03608066374aa0ca26ea29cd6b9a960c3da63924a0efbe1d37a262->enter($__internal_06a8718bdf03608066374aa0ca26ea29cd6b9a960c3da63924a0efbe1d37a262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:UsuarioCorrigePregunta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06a8718bdf03608066374aa0ca26ea29cd6b9a960c3da63924a0efbe1d37a262->leave($__internal_06a8718bdf03608066374aa0ca26ea29cd6b9a960c3da63924a0efbe1d37a262_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21ccdd328e76063813fdc3332c7a9dc13d1b141042a0c7e6b03a79283cd6253b = $this->env->getExtension("native_profiler");
        $__internal_21ccdd328e76063813fdc3332c7a9dc13d1b141042a0c7e6b03a79283cd6253b->enter($__internal_21ccdd328e76063813fdc3332c7a9dc13d1b141042a0c7e6b03a79283cd6253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>UsuarioCorrigePregunta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fechacorreccion</th>
                <th>Comentario</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuariocorrigepregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["entity"], "fechaCorreccion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaCorreccion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "comentario", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuariocorrigepregunta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuariocorrigepregunta_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("usuariocorrigepregunta_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_21ccdd328e76063813fdc3332c7a9dc13d1b141042a0c7e6b03a79283cd6253b->leave($__internal_21ccdd328e76063813fdc3332c7a9dc13d1b141042a0c7e6b03a79283cd6253b_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:UsuarioCorrigePregunta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
