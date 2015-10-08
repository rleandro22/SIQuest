<?php

/* UciBaseDatosBundle:AsistenteAcademica:show.html.twig */
class __TwigTemplate_dbfbb7e1ed6fd4604f5db514c1d27710e6b5647c655fddfa48cd4b3ad3f313de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AsistenteAcademica:show.html.twig", 1);
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
        $__internal_8f222e225c6ba8386da8c6ffd57d9720f25b4c22d2283e7f2197d4c63786352b = $this->env->getExtension("native_profiler");
        $__internal_8f222e225c6ba8386da8c6ffd57d9720f25b4c22d2283e7f2197d4c63786352b->enter($__internal_8f222e225c6ba8386da8c6ffd57d9720f25b4c22d2283e7f2197d4c63786352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AsistenteAcademica:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f222e225c6ba8386da8c6ffd57d9720f25b4c22d2283e7f2197d4c63786352b->leave($__internal_8f222e225c6ba8386da8c6ffd57d9720f25b4c22d2283e7f2197d4c63786352b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3200c1f83b96d8c9a8c66e8a3f94781c4d866fe6ba28bf311ea16e90863fefb = $this->env->getExtension("native_profiler");
        $__internal_e3200c1f83b96d8c9a8c66e8a3f94781c4d866fe6ba28bf311ea16e90863fefb->enter($__internal_e3200c1f83b96d8c9a8c66e8a3f94781c4d866fe6ba28bf311ea16e90863fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AsistenteAcademica</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("asistenteacademica");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_e3200c1f83b96d8c9a8c66e8a3f94781c4d866fe6ba28bf311ea16e90863fefb->leave($__internal_e3200c1f83b96d8c9a8c66e8a3f94781c4d866fe6ba28bf311ea16e90863fefb_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AsistenteAcademica:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  66 => 22,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
