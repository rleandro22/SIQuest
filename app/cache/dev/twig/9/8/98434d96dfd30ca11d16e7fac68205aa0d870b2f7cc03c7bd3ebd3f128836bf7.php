<?php

/* UciBaseDatosBundle:TipoPrueba:index.html.twig */
class __TwigTemplate_98434d96dfd30ca11d16e7fac68205aa0d870b2f7cc03c7bd3ebd3f128836bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoPrueba:index.html.twig", 1);
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
        $__internal_4e73a386c4e69279b67bc402d76d2359cf66c69ee3e5f05944e51822ede8764a = $this->env->getExtension("native_profiler");
        $__internal_4e73a386c4e69279b67bc402d76d2359cf66c69ee3e5f05944e51822ede8764a->enter($__internal_4e73a386c4e69279b67bc402d76d2359cf66c69ee3e5f05944e51822ede8764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoPrueba:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e73a386c4e69279b67bc402d76d2359cf66c69ee3e5f05944e51822ede8764a->leave($__internal_4e73a386c4e69279b67bc402d76d2359cf66c69ee3e5f05944e51822ede8764a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3576c50491f0ee0e6d1cf834a92cf92a240e1f72869756e018e924b7773a2ab2 = $this->env->getExtension("native_profiler");
        $__internal_3576c50491f0ee0e6d1cf834a92cf92a240e1f72869756e018e924b7773a2ab2->enter($__internal_3576c50491f0ee0e6d1cf834a92cf92a240e1f72869756e018e924b7773a2ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoPrueba list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombretipo</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoprueba_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreTipo", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoprueba_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoprueba_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("tipoprueba_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_3576c50491f0ee0e6d1cf834a92cf92a240e1f72869756e018e924b7773a2ab2->leave($__internal_3576c50491f0ee0e6d1cf834a92cf92a240e1f72869756e018e924b7773a2ab2_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoPrueba:index.html.twig";
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
