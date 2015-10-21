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
        $__internal_e1ee0f124d292dcece61a16ad83a391646722314023c3eeab3035890cc0ba080 = $this->env->getExtension("native_profiler");
        $__internal_e1ee0f124d292dcece61a16ad83a391646722314023c3eeab3035890cc0ba080->enter($__internal_e1ee0f124d292dcece61a16ad83a391646722314023c3eeab3035890cc0ba080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ee0f124d292dcece61a16ad83a391646722314023c3eeab3035890cc0ba080->leave($__internal_e1ee0f124d292dcece61a16ad83a391646722314023c3eeab3035890cc0ba080_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd9a6049954daa4bbe396097872859b299eed5ae3e96b145f5ed3da54c91ee9d = $this->env->getExtension("native_profiler");
        $__internal_fd9a6049954daa4bbe396097872859b299eed5ae3e96b145f5ed3da54c91ee9d->enter($__internal_fd9a6049954daa4bbe396097872859b299eed5ae3e96b145f5ed3da54c91ee9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_fd9a6049954daa4bbe396097872859b299eed5ae3e96b145f5ed3da54c91ee9d->leave($__internal_fd9a6049954daa4bbe396097872859b299eed5ae3e96b145f5ed3da54c91ee9d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c20c292a7c11991691a639c7c6bb9589be48c2d7ebdbc8808b8f913582122e61 = $this->env->getExtension("native_profiler");
        $__internal_c20c292a7c11991691a639c7c6bb9589be48c2d7ebdbc8808b8f913582122e61->enter($__internal_c20c292a7c11991691a639c7c6bb9589be48c2d7ebdbc8808b8f913582122e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Listado de libros</a></li>
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
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

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
                                
                                    <hr>
                                <!-- /Aquí inicia capitulo --> 
                                
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-6 col-sm-5 col-md-4 col-lg-4\">
                                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()), 'label');
        echo "
                                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()), 'widget');
        echo "
                                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()), 'errors');
        echo "
                                        
                                    </div>
                                </div>
                                <!-- /Fin Nuevo capitulo -->
                                <br>
                                <!-- /Tabla capitulos -->
                                    
                                <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                                    <thead>
                                        <tr>
                                            
                                            <th data-hide=\"phone\">
                                                Numero 
                                            </th>
                                            <th data-hide=\"phone\">
                                                Nombre
                                            </th>
                                            
                                            
                                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "capitulos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["capitulo"]) {
            // line 101
            echo "                                            <tr>
                                                
                                                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "numeroCapitulo", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "nombreCapitulo", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <ul>
                                                      
                                                     
                                                    </ul>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capitulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                    </tbody>
                                </table>
                                <!-- /Aquí acaba el contenido de capitulo--> 
                                <hr>




                                <!-- /Aquí inicia si es pmbok --> 

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'label');
        echo "
                                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'errors');
        echo "
                                        ";
        // line 127
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
                                ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
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
        
        $__internal_c20c292a7c11991691a639c7c6bb9589be48c2d7ebdbc8808b8f913582122e61->leave($__internal_c20c292a7c11991691a639c7c6bb9589be48c2d7ebdbc8808b8f913582122e61_prof);

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
        return array (  268 => 138,  254 => 127,  250 => 126,  246 => 125,  232 => 113,  217 => 104,  213 => 103,  209 => 101,  205 => 100,  178 => 76,  174 => 75,  170 => 74,  158 => 65,  154 => 64,  150 => 63,  140 => 56,  136 => 55,  132 => 54,  123 => 48,  119 => 47,  115 => 46,  106 => 42,  103 => 41,  97 => 39,  95 => 38,  76 => 21,  74 => 20,  65 => 14,  61 => 13,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }
}
