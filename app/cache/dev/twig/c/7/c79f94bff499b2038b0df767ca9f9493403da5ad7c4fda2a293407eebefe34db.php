<?php

/* UciAdministradorBundle:Menus:mantenimientoLibro.html.twig */
class __TwigTemplate_c79f94bff499b2038b0df767ca9f9493403da5ad7c4fda2a293407eebefe34db extends Twig_Template
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
        $__internal_72b15f9b00ef6a13aa33e612fd129b642c414d463c173bdcaf6365674f6dcbb3 = $this->env->getExtension("native_profiler");
        $__internal_72b15f9b00ef6a13aa33e612fd129b642c414d463c173bdcaf6365674f6dcbb3->enter($__internal_72b15f9b00ef6a13aa33e612fd129b642c414d463c173bdcaf6365674f6dcbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "'><span>Lista de libros</span></a></li>
                <li><a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_nuevolibro");
        echo "'><span>Nuevo libro</span></a></li>
               </ul>
        </div>
    </div>
</div>
";
        
        $__internal_72b15f9b00ef6a13aa33e612fd129b642c414d463c173bdcaf6365674f6dcbb3->leave($__internal_72b15f9b00ef6a13aa33e612fd129b642c414d463c173bdcaf6365674f6dcbb3_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig";
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
