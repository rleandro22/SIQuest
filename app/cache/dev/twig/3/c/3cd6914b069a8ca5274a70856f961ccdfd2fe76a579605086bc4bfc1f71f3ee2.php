<?php

/* UciAdministradorBundle:VistaLibro:editarLibro.html.twig */
class __TwigTemplate_3cd6914b069a8ca5274a70856f961ccdfd2fe76a579605086bc4bfc1f71f3ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:editarLibro.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_449a1ee71d7567ce5c9d5c376cf17f15a8ca7ea184bfe1f09425f1973744a0b7 = $this->env->getExtension("native_profiler");
        $__internal_449a1ee71d7567ce5c9d5c376cf17f15a8ca7ea184bfe1f09425f1973744a0b7->enter($__internal_449a1ee71d7567ce5c9d5c376cf17f15a8ca7ea184bfe1f09425f1973744a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:editarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_449a1ee71d7567ce5c9d5c376cf17f15a8ca7ea184bfe1f09425f1973744a0b7->leave($__internal_449a1ee71d7567ce5c9d5c376cf17f15a8ca7ea184bfe1f09425f1973744a0b7_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_9b359319a94e0a10c1115ba468890dcfa6214f9ac1ea6c4095eedeaf7ef262e1 = $this->env->getExtension("native_profiler");
        $__internal_9b359319a94e0a10c1115ba468890dcfa6214f9ac1ea6c4095eedeaf7ef262e1->enter($__internal_9b359319a94e0a10c1115ba468890dcfa6214f9ac1ea6c4095eedeaf7ef262e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_9b359319a94e0a10c1115ba468890dcfa6214f9ac1ea6c4095eedeaf7ef262e1->leave($__internal_9b359319a94e0a10c1115ba468890dcfa6214f9ac1ea6c4095eedeaf7ef262e1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_237d0b6c17e91b9a52f6c675543ac6ef83296836d4761edf7d41aff0317faa06 = $this->env->getExtension("native_profiler");
        $__internal_237d0b6c17e91b9a52f6c675543ac6ef83296836d4761edf7d41aff0317faa06->enter($__internal_237d0b6c17e91b9a52f6c675543ac6ef83296836d4761edf7d41aff0317faa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoLibro.html.twig", "UciAdministradorBundle:VistaLibro:editarLibro.html.twig", 20)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editarlibro", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginas", array()), 'label');
        echo "
                                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginas", array()), 'errors');
        echo "
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginas", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'label');
        echo "
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'errors');
        echo "
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'widget');
        echo "
                                    </div>
                                </div>


                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'label');
        echo "
                                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'errors');
        echo "
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idiomas", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <hr>
                                <!-- /Aquí inicia capitulo --> 

                                <h3>Capítulos</h3><br>
                                <!-- /Tabla capitulos -->

                                <ul id=\"caps\" data-prototype=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                                    ";
        // line 84
        ob_start();
        // line 85
        echo "                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["capitulo"]) {
            // line 86
            echo "                                            <li>
                                                <div>
                                                    ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["capitulo"], 'row');
            echo "
                                                    <a href=\"#\" onclick=\"addTagFormDeleteLink(event, this, ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["capitulo"], "vars", array()), "value", array()), "id", array()), "html", null, true);
            echo ");\">Borrar</a>
                                                </div>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capitulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 94
        echo "                                </ul>

                                <a href=\"#\" id=\"capitulo_link\">Añadir capítulo</a>
                                <!-- /Acaba el contenido de capitulo--> 
                                <br><br><br>
                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">                     
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Guardar</button>
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
        
        $__internal_237d0b6c17e91b9a52f6c675543ac6ef83296836d4761edf7d41aff0317faa06->leave($__internal_237d0b6c17e91b9a52f6c675543ac6ef83296836d4761edf7d41aff0317faa06_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0a048443c92e2d703428fa9067049970318ab3aeca9be891cbd51b238160219 = $this->env->getExtension("native_profiler");
        $__internal_d0a048443c92e2d703428fa9067049970318ab3aeca9be891cbd51b238160219->enter($__internal_d0a048443c92e2d703428fa9067049970318ab3aeca9be891cbd51b238160219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var cont = 0;


        function addCapitulo() {
            var collectionHolder = \$('#caps');
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
            var removeFormA = \$('<a href=\"#\" onclick=\"addTagFormDeleteLink(event, this, 0);\">Borrar</a>');
            var newLi = \$('<li></li>');
            newLi.append(form);
            newLi.append(removeFormA);
            collectionHolder.append(newLi);
            return prototype;
        }

        function addTagFormDeleteLink(e, elemento, idCap) {
            e.preventDefault();
            var idCap=idCap;
                if(idCap!=0){
                    \$.ajax({
                            url: \"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("uci_administrador_deletecapitulo");
        echo "\",
                            type: \"POST\",
                            data: {idCap: idCap},
                            success: function( data ) {
                                if (data.resultado == \"1\") {
                                    var removeFormA = elemento.parentNode;
                                    removeFormA.remove();
                                }else{
                                   alert('Ocurrio un error'); 
                                }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('Ocurrio un error');
                        }
                    });
                }else{
                    var removeFormA = elemento.parentNode;
                    removeFormA.remove();
                }
        }

        \$('#capitulo_link').on('click', function (e) {
            e.preventDefault();
            addCapitulo();

        });


        function ocultarPmbok() {
            if (cont === 0) {
                \$(\"#ocultarPmbok\").removeClass('hidden');
                cont = 1;
            } else {
                \$(\"#ocultarPmbok\").addClass('hidden');
                cont = 0;
            }
        }
        ;

        function redirigirAgregarCapitulo(id) {
            var url = '";
        // line 188
        echo $this->env->getExtension('routing')->getPath("uci_administrador_agregarPreguntaCuestionario", array("idCuestionario" => "idCtnr"));
        echo "';
            url = url.replace(\"idCtnr\", id);
            window.open(url, '_blank', 'top=0,scrollbars=1,toolbar=0,location=0,menubar=0');
        }


    </script>
";
        
        $__internal_d0a048443c92e2d703428fa9067049970318ab3aeca9be891cbd51b238160219->leave($__internal_d0a048443c92e2d703428fa9067049970318ab3aeca9be891cbd51b238160219_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:editarLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 188,  291 => 148,  264 => 125,  258 => 124,  228 => 99,  221 => 94,  218 => 93,  208 => 89,  204 => 88,  200 => 86,  195 => 85,  193 => 84,  189 => 83,  176 => 73,  172 => 72,  168 => 71,  158 => 64,  154 => 63,  150 => 62,  141 => 56,  137 => 55,  133 => 54,  124 => 48,  120 => 47,  116 => 46,  107 => 42,  104 => 41,  98 => 39,  96 => 38,  77 => 21,  75 => 20,  66 => 14,  62 => 13,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }
}
