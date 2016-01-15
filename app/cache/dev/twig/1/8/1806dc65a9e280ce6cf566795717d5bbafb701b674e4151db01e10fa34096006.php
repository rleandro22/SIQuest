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
        $__internal_0e6ee42a1c00269fbb5cc1559dc5d4678b0592657f4be05703fa1e349cc94b64 = $this->env->getExtension("native_profiler");
        $__internal_0e6ee42a1c00269fbb5cc1559dc5d4678b0592657f4be05703fa1e349cc94b64->enter($__internal_0e6ee42a1c00269fbb5cc1559dc5d4678b0592657f4be05703fa1e349cc94b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:editarLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6ee42a1c00269fbb5cc1559dc5d4678b0592657f4be05703fa1e349cc94b64->leave($__internal_0e6ee42a1c00269fbb5cc1559dc5d4678b0592657f4be05703fa1e349cc94b64_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_4bf358ce51de355cca65acd02cd774d0c1d0920af36efe50ed68b7ce0b5562c5 = $this->env->getExtension("native_profiler");
        $__internal_4bf358ce51de355cca65acd02cd774d0c1d0920af36efe50ed68b7ce0b5562c5->enter($__internal_4bf358ce51de355cca65acd02cd774d0c1d0920af36efe50ed68b7ce0b5562c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_4bf358ce51de355cca65acd02cd774d0c1d0920af36efe50ed68b7ce0b5562c5->leave($__internal_4bf358ce51de355cca65acd02cd774d0c1d0920af36efe50ed68b7ce0b5562c5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c0925cb89b485fbe4318d77c71dd1cc8a476a3c10f1bc0df2e3f4ad55a26e70 = $this->env->getExtension("native_profiler");
        $__internal_7c0925cb89b485fbe4318d77c71dd1cc8a476a3c10f1bc0df2e3f4ad55a26e70->enter($__internal_7c0925cb89b485fbe4318d77c71dd1cc8a476a3c10f1bc0df2e3f4ad55a26e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
   
                                <ul id=\"respuestas\" data-prototype=\"";
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

                                                <div class=\"row\">
                                                    <div class=\"col-sm-2\">";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["capitulo"], "numeroCapitulo", array()), 'widget');
            echo "</div>
                                                    <div class=\"col-sm-8\">";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["capitulo"], "nombreCapitulo", array()), 'widget');
            echo "</div>
                                                </div>
                                                <br>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capitulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 96
        echo "                                </ul>

                                <a href=\"#\" id=\"capitulo_link\">Añadir capítulo</a>
                                <!-- /Acaba el contenido de capitulo--> 
                                <hr>

                                <!-- /Aquí inicia si es pmbok --> 

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'label');
        echo "
                                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'errors');
        echo "
                                        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esPmbok", array()), 'widget', array("attr" => array("onChange" => "ocultarPmbok()")));
        echo "
                                    </div>
                                </div>

                                <div class=\"row top-margin hidden\"  id=\"ocultarPmbok\" >
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8 \" >
                                        <h3>Pmbok</h3><br>

                                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'errors');
        echo "
                                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmbok", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <hr>
                                ";
        // line 122
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
        
        $__internal_7c0925cb89b485fbe4318d77c71dd1cc8a476a3c10f1bc0df2e3f4ad55a26e70->leave($__internal_7c0925cb89b485fbe4318d77c71dd1cc8a476a3c10f1bc0df2e3f4ad55a26e70_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99077bf1c6ce0acb6b23282cb381cf4cb25e909df7d0983350b0ad721a79a47f = $this->env->getExtension("native_profiler");
        $__internal_99077bf1c6ce0acb6b23282cb381cf4cb25e909df7d0983350b0ad721a79a47f->enter($__internal_99077bf1c6ce0acb6b23282cb381cf4cb25e909df7d0983350b0ad721a79a47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
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
        // line 194
        echo $this->env->getExtension('routing')->getPath("uci_administrador_agregarPreguntaCuestionario", array("idCuestionario" => "idCtnr"));
        echo "';
            url = url.replace(\"idCtnr\", id);
            window.open(url, '_blank', 'top=0,scrollbars=1,toolbar=0,location=0,menubar=0');
        }


    </script>
";
        
        $__internal_99077bf1c6ce0acb6b23282cb381cf4cb25e909df7d0983350b0ad721a79a47f->leave($__internal_99077bf1c6ce0acb6b23282cb381cf4cb25e909df7d0983350b0ad721a79a47f_prof);

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
        return array (  352 => 194,  302 => 148,  296 => 147,  266 => 122,  258 => 117,  254 => 116,  243 => 108,  239 => 107,  235 => 106,  223 => 96,  220 => 95,  209 => 90,  205 => 89,  200 => 86,  195 => 85,  193 => 84,  189 => 83,  176 => 73,  172 => 72,  168 => 71,  158 => 64,  154 => 63,  150 => 62,  141 => 56,  137 => 55,  133 => 54,  124 => 48,  120 => 47,  116 => 46,  107 => 42,  104 => 41,  98 => 39,  96 => 38,  77 => 21,  75 => 20,  66 => 14,  62 => 13,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }
}
