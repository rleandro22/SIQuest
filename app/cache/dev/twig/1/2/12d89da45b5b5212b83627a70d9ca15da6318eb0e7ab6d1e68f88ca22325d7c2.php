<?php

/* UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig */
class __TwigTemplate_12d89da45b5b5212b83627a70d9ca15da6318eb0e7ab6d1e68f88ca22325d7c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26b2952f1855046aa21093f5ea9b37a7d48cd345c4f59dbe74d42385052ef27c = $this->env->getExtension("native_profiler");
        $__internal_26b2952f1855046aa21093f5ea9b37a7d48cd345c4f59dbe74d42385052ef27c->enter($__internal_26b2952f1855046aa21093f5ea9b37a7d48cd345c4f59dbe74d42385052ef27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig"));

        // line 1
        echo "<div class=\"row widget\">
    <div class=\"col-xs-12\">
        <h4>Menu de mantenimiento</h4>
    </div>
</div>
<div class=\"row widget\">
    <div class=\"col-xs-12\">
        <div id='cssmenu'>
            <ul>
                <li><a href='";
        // line 10
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "'><span>Lista de generaciones</span></a></li>
                <li><a data-toggle=\"modal\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addcategoria");
        echo "\" data-target=\"#myModal\">Nueva generación</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_26b2952f1855046aa21093f5ea9b37a7d48cd345c4f59dbe74d42385052ef27c->leave($__internal_26b2952f1855046aa21093f5ea9b37a7d48cd345c4f59dbe74d42385052ef27c_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  33 => 10,  22 => 1,);
    }
}
