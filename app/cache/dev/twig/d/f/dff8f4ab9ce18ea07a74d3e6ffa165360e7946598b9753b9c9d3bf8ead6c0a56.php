<?php

/* UciAdministradorBundle:VistaLibro:registrarLibro.html.twig */
class __TwigTemplate_dff8f4ab9ce18ea07a74d3e6ffa165360e7946598b9753b9c9d3bf8ead6c0a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_0c8a3c0abff8f4cab804580e9af2863c29da7faf8c2ffda6768d28d7c0cb20f3' => array($this, 'block___internal_0c8a3c0abff8f4cab804580e9af2863c29da7faf8c2ffda6768d28d7c0cb20f3'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c55bd24d038838c639dfc5833e5d416d0d6429d857675cb14ea7efcb1a01b603 = $this->env->getExtension("native_profiler");
        $__internal_c55bd24d038838c639dfc5833e5d416d0d6429d857675cb14ea7efcb1a01b603->enter($__internal_c55bd24d038838c639dfc5833e5d416d0d6429d857675cb14ea7efcb1a01b603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:registrarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55bd24d038838c639dfc5833e5d416d0d6429d857675cb14ea7efcb1a01b603->leave($__internal_c55bd24d038838c639dfc5833e5d416d0d6429d857675cb14ea7efcb1a01b603_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_847f7bf4a43a113498fcd20bb9f55acbc39133bd4e37f61eb146d2885bdab703 = $this->env->getExtension("native_profiler");
        $__internal_847f7bf4a43a113498fcd20bb9f55acbc39133bd4e37f61eb146d2885bdab703->enter($__internal_847f7bf4a43a113498fcd20bb9f55acbc39133bd4e37f61eb146d2885bdab703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_847f7bf4a43a113498fcd20bb9f55acbc39133bd4e37f61eb146d2885bdab703->leave($__internal_847f7bf4a43a113498fcd20bb9f55acbc39133bd4e37f61eb146d2885bdab703_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_51f919afdb10ce01505fd6fdbc118d8b6bf95ef13ec608667b59ebd476109563 = $this->env->getExtension("native_profiler");
        $__internal_51f919afdb10ce01505fd6fdbc118d8b6bf95ef13ec608667b59ebd476109563->enter($__internal_51f919afdb10ce01505fd6fdbc118d8b6bf95ef13ec608667b59ebd476109563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                                <table class=\"table demo table-bordered\" id=\"tablaCapitulos\" data-filter=\"#filter\" 
                                       data-prototype=\"
                                       ";
        // line 85
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0c8a3c0abff8f4cab804580e9af2863c29da7faf8c2ffda6768d28d7c0cb20f3", $context, $blocks));
        // line 87
        echo "\">
                                    <thead>
                                        <tr>
                                            <th data-toggle=\"true\">
                                               
                                            </th>
                                            <th data-hide=\"true\">
                                                Número
                                            </th>
                                            <th data-hide=\"phone\">
                                                Nombre
                                            </th>
                                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <a href=\"#\" id=\"capitulo_link\">Añadir capítulo</a>
                                <!-- /Acaba el contenido de capitulo--> 
                                <hr>

                                <!-- /Aquí inicia si es pmbok --> 

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'label');
        echo "
                                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'errors');
        echo "
                                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'widget', array("attr" => array("onChange" => "ocultarPmbok()")));
        echo "
                                    </div>
                                </div>

                                <div class=\"row top-margin hidden\"  id=\"ocultarPmbok\" >
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8 \" >
                                        <h3>Pmbok</h3><br>

                                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'errors');
        echo "
                                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <hr>
                                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
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
        
        $__internal_51f919afdb10ce01505fd6fdbc118d8b6bf95ef13ec608667b59ebd476109563->leave($__internal_51f919afdb10ce01505fd6fdbc118d8b6bf95ef13ec608667b59ebd476109563_prof);

    }

    // line 85
    public function block___internal_0c8a3c0abff8f4cab804580e9af2863c29da7faf8c2ffda6768d28d7c0cb20f3($context, array $blocks = array())
    {
        $__internal_4791effe6c38adc5c53a7817d6b112f74917e58952029062486f4a176ec6c464 = $this->env->getExtension("native_profiler");
        $__internal_4791effe6c38adc5c53a7817d6b112f74917e58952029062486f4a176ec6c464->enter($__internal_4791effe6c38adc5c53a7817d6b112f74917e58952029062486f4a176ec6c464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0c8a3c0abff8f4cab804580e9af2863c29da7faf8c2ffda6768d28d7c0cb20f3"));

        // line 86
        echo "                                           ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig", array("form" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulos", array()), "vars", array()), "prototype", array()))));
        echo "
                                       ";
        
        $__internal_4791effe6c38adc5c53a7817d6b112f74917e58952029062486f4a176ec6c464->leave($__internal_4791effe6c38adc5c53a7817d6b112f74917e58952029062486f4a176ec6c464_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_088645acb61002f4e851c2470e2b436d756e31daa605d37f7809188d511324e5 = $this->env->getExtension("native_profiler");
        $__internal_088645acb61002f4e851c2470e2b436d756e31daa605d37f7809188d511324e5->enter($__internal_088645acb61002f4e851c2470e2b436d756e31daa605d37f7809188d511324e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var cont = 0;


        function addCapitulo() {
            var index = \$('table tbody tr').length;
            var row = \$('script[type=\"text/html\"]').text().replace(/\\\$\\\$name\\\$\\\$/g, index);
            \$('table tbody').append(row);
            var collectionHolder = \$('#tablaCapitulos');
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, index); //importante
            var removeFormA = \$('<td href=\"#\" onclick=\"addTagFormDeleteLink(event, this); \"><span class=\"navigationSpace glyphicon glyphicon-remove\" style=\"color: red; font-size:180%\" ></span></td>');
            var newTr = \$('<tr></tr>');
            newTr.append(form);
            newTr.append(removeFormA);
            collectionHolder.append(newTr);
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
        // line 202
        echo $this->env->getExtension('routing')->getPath("uci_administrador_agregarPreguntaCuestionario", array("idCuestionario" => "idCtnr"));
        echo "';
            url = url.replace(\"idCtnr\", id);
            window.open(url, '_blank', 'top=0,scrollbars=1,toolbar=0,location=0,menubar=0');
        }


    </script>
";
        
        $__internal_088645acb61002f4e851c2470e2b436d756e31daa605d37f7809188d511324e5->leave($__internal_088645acb61002f4e851c2470e2b436d756e31daa605d37f7809188d511324e5_prof);

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
        return array (  356 => 202,  306 => 156,  300 => 155,  290 => 86,  284 => 85,  254 => 130,  246 => 125,  242 => 124,  231 => 116,  227 => 115,  223 => 114,  194 => 87,  192 => 85,  177 => 73,  173 => 72,  169 => 71,  159 => 64,  155 => 63,  151 => 62,  142 => 56,  138 => 55,  134 => 54,  125 => 48,  121 => 47,  117 => 46,  108 => 42,  105 => 41,  99 => 39,  97 => 38,  78 => 21,  76 => 20,  67 => 14,  63 => 13,  57 => 9,  51 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
