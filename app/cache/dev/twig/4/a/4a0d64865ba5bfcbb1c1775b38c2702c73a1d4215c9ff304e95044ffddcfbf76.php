<?php

/* UciBaseDatosBundle:Usuario:index.html.twig */
class __TwigTemplate_4a0d64865ba5bfcbb1c1775b38c2702c73a1d4215c9ff304e95044ffddcfbf76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Usuario:index.html.twig", 1);
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
        $__internal_d3b2b726894a7bb8517c0a32bfca736b8d616d64e34f2e5ec9741897337849be = $this->env->getExtension("native_profiler");
        $__internal_d3b2b726894a7bb8517c0a32bfca736b8d616d64e34f2e5ec9741897337849be->enter($__internal_d3b2b726894a7bb8517c0a32bfca736b8d616d64e34f2e5ec9741897337849be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b2b726894a7bb8517c0a32bfca736b8d616d64e34f2e5ec9741897337849be->leave($__internal_d3b2b726894a7bb8517c0a32bfca736b8d616d64e34f2e5ec9741897337849be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfb271b8389b8114ad94dfda63afea450b24d53ddee38dd5f8e62342e6905417 = $this->env->getExtension("native_profiler");
        $__internal_cfb271b8389b8114ad94dfda63afea450b24d53ddee38dd5f8e62342e6905417->enter($__internal_cfb271b8389b8114ad94dfda63afea450b24d53ddee38dd5f8e62342e6905417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Usuario list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "usuario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "clave", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_cfb271b8389b8114ad94dfda63afea450b24d53ddee38dd5f8e62342e6905417->leave($__internal_cfb271b8389b8114ad94dfda63afea450b24d53ddee38dd5f8e62342e6905417_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
