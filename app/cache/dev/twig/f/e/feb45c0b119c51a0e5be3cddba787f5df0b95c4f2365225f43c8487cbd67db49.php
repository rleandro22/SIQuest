<?php

/* UciAdministradorBundle:VistaLibro:registrarLibro.html.twig */
class __TwigTemplate_feb45c0b119c51a0e5be3cddba787f5df0b95c4f2365225f43c8487cbd67db49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig", 1);
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
        $__internal_63e552c97f3d3a87a58ef75db64f185b8064948e113d0985bc565ed6c6df0bc0 = $this->env->getExtension("native_profiler");
        $__internal_63e552c97f3d3a87a58ef75db64f185b8064948e113d0985bc565ed6c6df0bc0->enter($__internal_63e552c97f3d3a87a58ef75db64f185b8064948e113d0985bc565ed6c6df0bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e552c97f3d3a87a58ef75db64f185b8064948e113d0985bc565ed6c6df0bc0->leave($__internal_63e552c97f3d3a87a58ef75db64f185b8064948e113d0985bc565ed6c6df0bc0_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_caecca273a5d5a01ddb21b36d372f21e4f0193ae9461427bdba02d5496ac535e = $this->env->getExtension("native_profiler");
        $__internal_caecca273a5d5a01ddb21b36d372f21e4f0193ae9461427bdba02d5496ac535e->enter($__internal_caecca273a5d5a01ddb21b36d372f21e4f0193ae9461427bdba02d5496ac535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_caecca273a5d5a01ddb21b36d372f21e4f0193ae9461427bdba02d5496ac535e->leave($__internal_caecca273a5d5a01ddb21b36d372f21e4f0193ae9461427bdba02d5496ac535e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_139d7af73c674648b01d72ae45f07f866e64011b8cbfee61900ca20389482faa = $this->env->getExtension("native_profiler");
        $__internal_139d7af73c674648b01d72ae45f07f866e64011b8cbfee61900ca20389482faa->enter($__internal_139d7af73c674648b01d72ae45f07f866e64011b8cbfee61900ca20389482faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Registrar Libro</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 20
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoLibro.html.twig", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig", 20)->display($context);
        // line 21
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Nuevo libro</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h3 class=\"thin text-center\">Registrar un nuevo libro</h3>
                            <p class=\"text-center text-muted\">Todos los campos son requeridos. </p>
                            <hr>

                            ";
        // line 38
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 39
            echo "                                <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                            ";
        }
        // line 41
        echo "
                            <form action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("uci_administrador_nuevolibro");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                               
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'label');
        echo "
                                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo "
                                    </div>
                                </div>
                            
                                 <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'label');
        echo "
                                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'errors');
        echo "
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                    

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'label');
        echo "
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'errors');
        echo "
                                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'label');
        echo "
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'errors');
        echo "
                                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                    <hr>
                                    <div class=\"row\">
                                        <div class=\"col-lg-8\">                     
                                        </div>
                                        <div class=\"col-lg-4 text-right\">
                                            <button class=\"btn btn-action\" type=\"submit\">Registrar</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>


                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_139d7af73c674648b01d72ae45f07f866e64011b8cbfee61900ca20389482faa->leave($__internal_139d7af73c674648b01d72ae45f07f866e64011b8cbfee61900ca20389482faa_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 72,  164 => 71,  160 => 70,  152 => 65,  148 => 64,  144 => 63,  134 => 56,  130 => 55,  126 => 54,  117 => 48,  113 => 47,  109 => 46,  102 => 42,  99 => 41,  93 => 39,  91 => 38,  72 => 21,  70 => 20,  61 => 14,  55 => 10,  49 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
