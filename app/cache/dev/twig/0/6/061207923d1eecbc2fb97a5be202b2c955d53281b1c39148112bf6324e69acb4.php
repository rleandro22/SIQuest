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
        $__internal_ad2a629ac400575386fc429fe03c8d998fdb8d16dd8d386b5d036925dc80c84c = $this->env->getExtension("native_profiler");
        $__internal_ad2a629ac400575386fc429fe03c8d998fdb8d16dd8d386b5d036925dc80c84c->enter($__internal_ad2a629ac400575386fc429fe03c8d998fdb8d16dd8d386b5d036925dc80c84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Rol:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2a629ac400575386fc429fe03c8d998fdb8d16dd8d386b5d036925dc80c84c->leave($__internal_ad2a629ac400575386fc429fe03c8d998fdb8d16dd8d386b5d036925dc80c84c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5125b251139de423c9aa6e7c5fc366824b325fa2c460d8c037de40856feaa30b = $this->env->getExtension("native_profiler");
        $__internal_5125b251139de423c9aa6e7c5fc366824b325fa2c460d8c037de40856feaa30b->enter($__internal_5125b251139de423c9aa6e7c5fc366824b325fa2c460d8c037de40856feaa30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5125b251139de423c9aa6e7c5fc366824b325fa2c460d8c037de40856feaa30b->leave($__internal_5125b251139de423c9aa6e7c5fc366824b325fa2c460d8c037de40856feaa30b_prof);

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
