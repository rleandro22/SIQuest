<?php

/* UciAdministradorBundle:VistaLibro:editarLibro.html.twig */
class __TwigTemplate_1806dc65a9e280ce6cf566795717d5bbafb701b674e4151db01e10fa34096006 extends Twig_Template
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
        $__internal_de720904544cd2a8ac994e50b7e77a10436bf1279408dfce2230fa75fba40075 = $this->env->getExtension("native_profiler");
        $__internal_de720904544cd2a8ac994e50b7e77a10436bf1279408dfce2230fa75fba40075->enter($__internal_de720904544cd2a8ac994e50b7e77a10436bf1279408dfce2230fa75fba40075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:editarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de720904544cd2a8ac994e50b7e77a10436bf1279408dfce2230fa75fba40075->leave($__internal_de720904544cd2a8ac994e50b7e77a10436bf1279408dfce2230fa75fba40075_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_b75b128861c6b12beb366b988b4a7a067a48d84cae245fc2698c88f03a402122 = $this->env->getExtension("native_profiler");
        $__internal_b75b128861c6b12beb366b988b4a7a067a48d84cae245fc2698c88f03a402122->enter($__internal_b75b128861c6b12beb366b988b4a7a067a48d84cae245fc2698c88f03a402122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_b75b128861c6b12beb366b988b4a7a067a48d84cae245fc2698c88f03a402122->leave($__internal_b75b128861c6b12beb366b988b4a7a067a48d84cae245fc2698c88f03a402122_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0670af3d4a07c7b5b2e90105506d3fd7dba0f97d1eaae869d221bb923fe804cf = $this->env->getExtension("native_profiler");
        $__internal_0670af3d4a07c7b5b2e90105506d3fd7dba0f97d1eaae869d221bb923fe804cf->enter($__internal_0670af3d4a07c7b5b2e90105506d3fd7dba0f97d1eaae869d221bb923fe804cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <h3 class=\"thin text-center\">Editar libro</h3>
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

                                <table class=\"table demo table-bordered\" id=\"tabla\" >
                                    <thead>
                                        <tr>
                                            <th data-hide=\"phone\">
                                                
                                            </th>   
                                            <th data-hide=\"phone\">
                                                Numero 
                                            </th>
                                            <th data-hide=\"phone\">
                                                Nombre
                                            </th>


                                            <th style=\"width: 12%;\" data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["capitulo"]) {
            // line 102
            echo "                                            <tr>
                                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "numeroCapitulo", array()), "html", null, true);
            echo " </td>
                                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["capitulo"], "nombreCapitulo", array()), "html", null, true);
            echo " </td>
                                                <td><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletelibro", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                                </td> 
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capitulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                    </tbody>
                                </table>
                                <div class=\"col-lg-2 col-sm-4 text-right\">
                                    <button class=\"btn btn-action\" onclick=\"redirigirAgregarCapitulo(";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo ");\" type=\"button\">Agregar Capitulo</button>
                                </div>
                                <!-- /Acaba el contenido de capitulo--> 
                                <hr>

                                <!-- /Aquí inicia si es pmbok --> 



                                <div class=\"row top-margin hidden\"  id=\"ocultarPmbok\" >
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8 \" >
                                        <h3>Pmbok</h3><br>

                                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'errors');
        echo "
                                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <hr>
                                ";
        // line 131
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
        
        $__internal_0670af3d4a07c7b5b2e90105506d3fd7dba0f97d1eaae869d221bb923fe804cf->leave($__internal_0670af3d4a07c7b5b2e90105506d3fd7dba0f97d1eaae869d221bb923fe804cf_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_997fcec2c2e2534192d2219c99469bf17ec21516ae32d7c5e6403737c325b074 = $this->env->getExtension("native_profiler");
        $__internal_997fcec2c2e2534192d2219c99469bf17ec21516ae32d7c5e6403737c325b074->enter($__internal_997fcec2c2e2534192d2219c99469bf17ec21516ae32d7c5e6403737c325b074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var cont = 0;


        function addCapitulo() {
            var collectionHolder = \$('#tabla');
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
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
        // line 205
        echo $this->env->getExtension('routing')->getPath("uci_administrador_agregarCapituloLibro", array("id" => "idCtnr"));
        echo "';
            url = url.replace(\"idCtnr\", id);
            window.open(url, '_blank', 'top=0,scrollbars=1,toolbar=0,location=0,menubar=0');
        }
    </script>
";
        
        $__internal_997fcec2c2e2534192d2219c99469bf17ec21516ae32d7c5e6403737c325b074->leave($__internal_997fcec2c2e2534192d2219c99469bf17ec21516ae32d7c5e6403737c325b074_prof);

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
        return array (  353 => 205,  301 => 157,  295 => 156,  265 => 131,  257 => 126,  253 => 125,  237 => 112,  232 => 109,  222 => 105,  218 => 104,  214 => 103,  211 => 102,  207 => 101,  176 => 73,  172 => 72,  168 => 71,  158 => 64,  154 => 63,  150 => 62,  141 => 56,  137 => 55,  133 => 54,  124 => 48,  120 => 47,  116 => 46,  107 => 42,  104 => 41,  98 => 39,  96 => 38,  77 => 21,  75 => 20,  66 => 14,  62 => 13,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }
}