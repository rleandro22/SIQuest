<?php

/* UciBaseDatosBundle:AsistenteAcademica:index.html.twig */
class __TwigTemplate_897206e0204f4ed4238b32aec1b777f9bfffabe74fcc5910c894878a4fce5009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AsistenteAcademica:index.html.twig", 1);
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
        $__internal_9e4b0eb0a200a32fa365258cca1d2696273d464111a293488a3b3ad599af368c = $this->env->getExtension("native_profiler");
        $__internal_9e4b0eb0a200a32fa365258cca1d2696273d464111a293488a3b3ad599af368c->enter($__internal_9e4b0eb0a200a32fa365258cca1d2696273d464111a293488a3b3ad599af368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AsistenteAcademica:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4b0eb0a200a32fa365258cca1d2696273d464111a293488a3b3ad599af368c->leave($__internal_9e4b0eb0a200a32fa365258cca1d2696273d464111a293488a3b3ad599af368c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_379027b25bcf3bdbc60d1b77771f029c8297087c4bc17e2c75ef9c46f1c9163e = $this->env->getExtension("native_profiler");
        $__internal_379027b25bcf3bdbc60d1b77771f029c8297087c4bc17e2c75ef9c46f1c9163e->enter($__internal_379027b25bcf3bdbc60d1b77771f029c8297087c4bc17e2c75ef9c46f1c9163e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AsistenteAcademica list</h1>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("asistenteacademica_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_379027b25bcf3bdbc60d1b77771f029c8297087c4bc17e2c75ef9c46f1c9163e->leave($__internal_379027b25bcf3bdbc60d1b77771f029c8297087c4bc17e2c75ef9c46f1c9163e_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AsistenteAcademica:index.html.twig";
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
