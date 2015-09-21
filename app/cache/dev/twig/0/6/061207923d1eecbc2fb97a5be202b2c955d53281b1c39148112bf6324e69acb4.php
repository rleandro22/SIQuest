<?php

/* UciBaseDatosBundle:Rol:index.html.twig */
class __TwigTemplate_061207923d1eecbc2fb97a5be202b2c955d53281b1c39148112bf6324e69acb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Rol:index.html.twig", 1);
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
        $__internal_05891b97283938070e74e48d50ae5cd1f4fc362c343854746103f325fac6b777 = $this->env->getExtension("native_profiler");
        $__internal_05891b97283938070e74e48d50ae5cd1f4fc362c343854746103f325fac6b777->enter($__internal_05891b97283938070e74e48d50ae5cd1f4fc362c343854746103f325fac6b777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Rol:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05891b97283938070e74e48d50ae5cd1f4fc362c343854746103f325fac6b777->leave($__internal_05891b97283938070e74e48d50ae5cd1f4fc362c343854746103f325fac6b777_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_662303b31542e26db601d9b000c0e6fbce12d259e67a1f326394839a84046af5 = $this->env->getExtension("native_profiler");
        $__internal_662303b31542e26db601d9b000c0e6fbce12d259e67a1f326394839a84046af5->enter($__internal_662303b31542e26db601d9b000c0e6fbce12d259e67a1f326394839a84046af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Rol list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("rol_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_662303b31542e26db601d9b000c0e6fbce12d259e67a1f326394839a84046af5->leave($__internal_662303b31542e26db601d9b000c0e6fbce12d259e67a1f326394839a84046af5_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Rol:index.html.twig";
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
