<?php

/* UciAdministradorBundle:VistaLibro:registrarLibro.html.twig */
class __TwigTemplate_e4125d890c855d8d8cff66244a070cd641cc713ac6c9986fa323c5a3627e01b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_42670a35f8266489181a0f7ca1faabf4fa92af3d9a9d6c7a6c25309930893628' => array($this, 'block___internal_42670a35f8266489181a0f7ca1faabf4fa92af3d9a9d6c7a6c25309930893628'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a474daea2475f53e96da1ff82f4a6d9a0883f7f283917f59326789733dacf073 = $this->env->getExtension("native_profiler");
        $__internal_a474daea2475f53e96da1ff82f4a6d9a0883f7f283917f59326789733dacf073->enter($__internal_a474daea2475f53e96da1ff82f4a6d9a0883f7f283917f59326789733dacf073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a474daea2475f53e96da1ff82f4a6d9a0883f7f283917f59326789733dacf073->leave($__internal_a474daea2475f53e96da1ff82f4a6d9a0883f7f283917f59326789733dacf073_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_cc63853ee7c2138fd7b06e6d34a12e042cd37909564c073de6ad4336cbe00ebb = $this->env->getExtension("native_profiler");
        $__internal_cc63853ee7c2138fd7b06e6d34a12e042cd37909564c073de6ad4336cbe00ebb->enter($__internal_cc63853ee7c2138fd7b06e6d34a12e042cd37909564c073de6ad4336cbe00ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_cc63853ee7c2138fd7b06e6d34a12e042cd37909564c073de6ad4336cbe00ebb->leave($__internal_cc63853ee7c2138fd7b06e6d34a12e042cd37909564c073de6ad4336cbe00ebb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_79d0a5b4b8101ef269e767566ccfc659a069ed778948a3f21ed79a82b491c58e = $this->env->getExtension("native_profiler");
        $__internal_79d0a5b4b8101ef269e767566ccfc659a069ed778948a3f21ed79a82b491c58e->enter($__internal_79d0a5b4b8101ef269e767566ccfc659a069ed778948a3f21ed79a82b491c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                                <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\" 
                                       data-prototype=\"
                                       ";
        // line 85
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_42670a35f8266489181a0f7ca1faabf4fa92af3d9a9d6c7a6c25309930893628", $context, $blocks));
        // line 87
        echo "\">
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
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "capitulos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["capitulo"]) {
            // line 104
            echo "                                            <tr>

                                                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "numeroCapitulo", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "nombreCapitulo", array()), "html", null, true);
            echo "</td>
                                                <td></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capitulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                    </tbody>
                                </table>
                                    <a href=\"#\" id=\"capitulo_link\">Añadir capítulo</a>
                                <!-- /Acaba el contenido de capitulo--> 
                                <hr>

                                <!-- /Aquí inicia si es pmbok --> 

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'label');
        echo "
                                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'errors');
        echo "
                                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'widget', array("attr" => array("onChange" => "ocultarPmbok()")));
        echo "
                                    </div>
                                </div>
                                
                                <div class=\"row top-margin hidden\"  id=\"ocultarPmbok\" >
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8 \" >
                                         <h3>Pmbok</h3><br>
                                       
                                        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'errors');
        echo "
                                        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'widget');
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
        
        $__internal_79d0a5b4b8101ef269e767566ccfc659a069ed778948a3f21ed79a82b491c58e->leave($__internal_79d0a5b4b8101ef269e767566ccfc659a069ed778948a3f21ed79a82b491c58e_prof);

    }

    // line 85
    public function block___internal_42670a35f8266489181a0f7ca1faabf4fa92af3d9a9d6c7a6c25309930893628($context, array $blocks = array())
    {
        $__internal_cb30cfa2ca0ed9f2e9ebd7a2ba8eb59363d7e8a5bcb3c94fabe1b830d0367414 = $this->env->getExtension("native_profiler");
        $__internal_cb30cfa2ca0ed9f2e9ebd7a2ba8eb59363d7e8a5bcb3c94fabe1b830d0367414->enter($__internal_cb30cfa2ca0ed9f2e9ebd7a2ba8eb59363d7e8a5bcb3c94fabe1b830d0367414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_42670a35f8266489181a0f7ca1faabf4fa92af3d9a9d6c7a6c25309930893628"));

        // line 86
        echo "                                           ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()), "vars", array()), "prototype", array())));
        echo "
                                       ";
        
        $__internal_cb30cfa2ca0ed9f2e9ebd7a2ba8eb59363d7e8a5bcb3c94fabe1b830d0367414->leave($__internal_cb30cfa2ca0ed9f2e9ebd7a2ba8eb59363d7e8a5bcb3c94fabe1b830d0367414_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2545a2acd8eba518c711c75166ecf6753c820c3d42f29d858dac89c734aa97cf = $this->env->getExtension("native_profiler");
        $__internal_2545a2acd8eba518c711c75166ecf6753c820c3d42f29d858dac89c734aa97cf->enter($__internal_2545a2acd8eba518c711c75166ecf6753c820c3d42f29d858dac89c734aa97cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var cont=0;
        

        function addCapitulo() {
            var collectionHolder = \$('#tabla');
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
            var removeFormA = \$('<td href=\"#\" onclick=\"addTagFormDeleteLink(event, this); \"><span class=\"navigationSpace glyphicon glyphicon-remove\" style=\"color: red; font-size:180%\" ></span></td>');
            var newTr = \$('<tr></tr>');
            newTr.append(form);
            newTr.append(removeFormA);
            collectionHolder.append(newTr);
            siSaleEsGuaba();
            return prototype;
        }

        function addTagFormDeleteLink(e, elemento) {
            e.preventDefault();
            var removeFormA = elemento.parentNode;
            removeFormA.remove();
        }

       



            \$('#capitulo_link').on('click', function (e) {
                e.preventDefault();
                addCapitulo();

            });

         
         function ocultarPmbok() {
            if (cont ===0 ) {
                \$(\"#ocultarPmbok\").removeClass('hidden');
                cont=1;
            } else{
                \$(\"#ocultarPmbok\").addClass('hidden');
                cont=0;
            }
        };
    </script>
";
        
        $__internal_2545a2acd8eba518c711c75166ecf6753c820c3d42f29d858dac89c734aa97cf->leave($__internal_2545a2acd8eba518c711c75166ecf6753c820c3d42f29d858dac89c734aa97cf_prof);

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
        return array (  326 => 163,  320 => 162,  310 => 86,  304 => 85,  269 => 132,  265 => 131,  254 => 123,  250 => 122,  246 => 121,  234 => 111,  224 => 107,  220 => 106,  216 => 104,  212 => 103,  194 => 87,  192 => 85,  177 => 73,  173 => 72,  169 => 71,  159 => 64,  155 => 63,  151 => 62,  142 => 56,  138 => 55,  134 => 54,  125 => 48,  121 => 47,  117 => 46,  108 => 42,  105 => 41,  99 => 39,  97 => 38,  78 => 21,  76 => 20,  67 => 14,  63 => 13,  57 => 9,  51 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
