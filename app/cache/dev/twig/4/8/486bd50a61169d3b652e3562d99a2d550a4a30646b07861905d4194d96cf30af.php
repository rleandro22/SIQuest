<?php

/* UciAdministradorBundle:Vista:indiceUsuario.html.twig */
class __TwigTemplate_486bd50a61169d3b652e3562d99a2d550a4a30646b07861905d4194d96cf30af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:Vista:indiceUsuario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f963acc197db7e4d2e131f4ec30c17b4ff25c3d039de55a18b8863ef868a529d = $this->env->getExtension("native_profiler");
        $__internal_f963acc197db7e4d2e131f4ec30c17b4ff25c3d039de55a18b8863ef868a529d->enter($__internal_f963acc197db7e4d2e131f4ec30c17b4ff25c3d039de55a18b8863ef868a529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:indiceUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f963acc197db7e4d2e131f4ec30c17b4ff25c3d039de55a18b8863ef868a529d->leave($__internal_f963acc197db7e4d2e131f4ec30c17b4ff25c3d039de55a18b8863ef868a529d_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_8001f33e729df83fb805c20c9297e0d5ae6c42e956fb63669141426a48e6c63c = $this->env->getExtension("native_profiler");
        $__internal_8001f33e729df83fb805c20c9297e0d5ae6c42e956fb63669141426a48e6c63c->enter($__internal_8001f33e729df83fb805c20c9297e0d5ae6c42e956fb63669141426a48e6c63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_8001f33e729df83fb805c20c9297e0d5ae6c42e956fb63669141426a48e6c63c->leave($__internal_8001f33e729df83fb805c20c9297e0d5ae6c42e956fb63669141426a48e6c63c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a61cfe4423638e4606efeb583086f9502bb8c7259531fbe1b55c487f24afea2 = $this->env->getExtension("native_profiler");
        $__internal_0a61cfe4423638e4606efeb583086f9502bb8c7259531fbe1b55c487f24afea2->enter($__internal_0a61cfe4423638e4606efeb583086f9502bb8c7259531fbe1b55c487f24afea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"index.html\">Inicio</a></li>
            <li class=\"active\">Mantenimiento de libros</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Menu de mantenimiento</h4>
                    </div>
                </div>
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <div id='cssmenu'>
                            <ul>
                                <li><a href='#'><span>Actualizar</span></a></li>
                                <li class='active has-sub'><a href='#'><span>Ingresar</span></a>
                                    <ul>
                                        <li><a href='#'><span>PMBok</span></a>
                                        </li>
                                        <li><a href='#'><span>Otro</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href='#'><span>Borrar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- /Sidebar -->

            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Nuevo Libro</h1>
                </header>

                <p>
                    Ingrese los datos del libro
                </p>
                <br>
                <form>
                    <div class=\"top-margin\">
                        <label>Titulo <span class=\"text-danger\">*</span></label>
                        <input type=\"text\" class=\"form-control\">
                    </div>
                    <div class=\"top-margin\">
                        <label>Año <span class=\"text-danger\">*</span></label>
                        <input type=\"password\" class=\"form-control\">
                    </div>
                    <div class=\"top-margin\">
                        <label>Autor <span class=\"text-danger\">*</span></label>
                        <input type=\"text\" class=\"form-control\">
                    </div>
                    <div class=\"top-margin\">
                        <label>Descripción <span class=\"text-danger\">*</span></label>
                        <input type=\"password\" class=\"form-control\">
                    </div>

                    <hr>

                    <div class=\"row\">
                        <div class=\"col-lg-4 text-right\">
                            <button class=\"btn btn-action\" type=\"submit\">Guardar</button>
                        </div>
                    </div>
                </form>
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_0a61cfe4423638e4606efeb583086f9502bb8c7259531fbe1b55c487f24afea2->leave($__internal_0a61cfe4423638e4606efeb583086f9502bb8c7259531fbe1b55c487f24afea2_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Vista:indiceUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
