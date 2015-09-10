<?php

/* UciDataBaseBundle:Usuario:index.html.twig */
class __TwigTemplate_77e6cb649b42bd08ecc45efda3296896801db051d7df6582e068df3492576be3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciDataBaseBundle:Usuario:index.html.twig", 1);
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
        $__internal_1603da00adaf2684fc6e7fe4e9f5c6ac1fa3ecbe5fa96737744e17570678770a = $this->env->getExtension("native_profiler");
        $__internal_1603da00adaf2684fc6e7fe4e9f5c6ac1fa3ecbe5fa96737744e17570678770a->enter($__internal_1603da00adaf2684fc6e7fe4e9f5c6ac1fa3ecbe5fa96737744e17570678770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciDataBaseBundle:Usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1603da00adaf2684fc6e7fe4e9f5c6ac1fa3ecbe5fa96737744e17570678770a->leave($__internal_1603da00adaf2684fc6e7fe4e9f5c6ac1fa3ecbe5fa96737744e17570678770a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee85ccb58675f8fa9a7e7c583f19dc5c6595dad102ef3da6a735cf4930cf47a = $this->env->getExtension("native_profiler");
        $__internal_cee85ccb58675f8fa9a7e7c583f19dc5c6595dad102ef3da6a735cf4930cf47a->enter($__internal_cee85ccb58675f8fa9a7e7c583f19dc5c6595dad102ef3da6a735cf4930cf47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    ";
        
        $__internal_cee85ccb58675f8fa9a7e7c583f19dc5c6595dad102ef3da6a735cf4930cf47a->leave($__internal_cee85ccb58675f8fa9a7e7c583f19dc5c6595dad102ef3da6a735cf4930cf47a_prof);

    }

    public function getTemplateName()
    {
        return "UciDataBaseBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
