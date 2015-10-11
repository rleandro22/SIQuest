<?php

/* UciBaseDatosBundle:Capitulo:index.html.twig */
class __TwigTemplate_af104743ea39c60dc7fef83bbd3cff2b7c1618d6711919d35cc757fad057731e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Capitulo:index.html.twig", 1);
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
        $__internal_16e2a727ebaf4999255e7bbb2918cf709403f0a4ceb3931fe2b82fdb8d444fbb = $this->env->getExtension("native_profiler");
        $__internal_16e2a727ebaf4999255e7bbb2918cf709403f0a4ceb3931fe2b82fdb8d444fbb->enter($__internal_16e2a727ebaf4999255e7bbb2918cf709403f0a4ceb3931fe2b82fdb8d444fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Capitulo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e2a727ebaf4999255e7bbb2918cf709403f0a4ceb3931fe2b82fdb8d444fbb->leave($__internal_16e2a727ebaf4999255e7bbb2918cf709403f0a4ceb3931fe2b82fdb8d444fbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b10b0d8fd69287e30fb30216bcc0f212fd7f5200b6cc1eafc0812417a12399 = $this->env->getExtension("native_profiler");
        $__internal_37b10b0d8fd69287e30fb30216bcc0f212fd7f5200b6cc1eafc0812417a12399->enter($__internal_37b10b0d8fd69287e30fb30216bcc0f212fd7f5200b6cc1eafc0812417a12399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Capitulo list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numerocapitulo</th>
                <th>Nombrecapitulo</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("capitulo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numeroCapitulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreCapitulo", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("capitulo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("capitulo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("capitulo_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_37b10b0d8fd69287e30fb30216bcc0f212fd7f5200b6cc1eafc0812417a12399->leave($__internal_37b10b0d8fd69287e30fb30216bcc0f212fd7f5200b6cc1eafc0812417a12399_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Capitulo:index.html.twig";
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
