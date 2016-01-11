<?php

/* UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig */
class __TwigTemplate_1cdf52d4ed73a5c30714e5adbe3c198cfd1fa25397e3f0ff8e32ed9669f49829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'barra' => array($this, 'block_barra'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'piepagina' => array($this, 'block_piepagina'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5497ca618eb73f16a9ae2dcaf03281ab6f6f5fff2efc64b8bbaaca6a7a47cba0 = $this->env->getExtension("native_profiler");
        $__internal_5497ca618eb73f16a9ae2dcaf03281ab6f6f5fff2efc64b8bbaaca6a7a47cba0->enter($__internal_5497ca618eb73f16a9ae2dcaf03281ab6f6f5fff2efc64b8bbaaca6a7a47cba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5497ca618eb73f16a9ae2dcaf03281ab6f6f5fff2efc64b8bbaaca6a7a47cba0->leave($__internal_5497ca618eb73f16a9ae2dcaf03281ab6f6f5fff2efc64b8bbaaca6a7a47cba0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4bd272bebb5a6610d7dc7cc169f0deb2e437a0ad3280b84a651c7a9b15daa5a = $this->env->getExtension("native_profiler");
        $__internal_f4bd272bebb5a6610d7dc7cc169f0deb2e437a0ad3280b84a651c7a9b15daa5a->enter($__internal_f4bd272bebb5a6610d7dc7cc169f0deb2e437a0ad3280b84a651c7a9b15daa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_f4bd272bebb5a6610d7dc7cc169f0deb2e437a0ad3280b84a651c7a9b15daa5a->leave($__internal_f4bd272bebb5a6610d7dc7cc169f0deb2e437a0ad3280b84a651c7a9b15daa5a_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_0e07148034f72c83c802a6084cf8ccf8512e4b8db82a16e15e4fee7a97525472 = $this->env->getExtension("native_profiler");
        $__internal_0e07148034f72c83c802a6084cf8ccf8512e4b8db82a16e15e4fee7a97525472->enter($__internal_0e07148034f72c83c802a6084cf8ccf8512e4b8db82a16e15e4fee7a97525472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_0e07148034f72c83c802a6084cf8ccf8512e4b8db82a16e15e4fee7a97525472->leave($__internal_0e07148034f72c83c802a6084cf8ccf8512e4b8db82a16e15e4fee7a97525472_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_a160a0945781eaf690651b29342956b7834a041317416d50e1c22e10425537dd = $this->env->getExtension("native_profiler");
        $__internal_a160a0945781eaf690651b29342956b7834a041317416d50e1c22e10425537dd->enter($__internal_a160a0945781eaf690651b29342956b7834a041317416d50e1c22e10425537dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a160a0945781eaf690651b29342956b7834a041317416d50e1c22e10425537dd->leave($__internal_a160a0945781eaf690651b29342956b7834a041317416d50e1c22e10425537dd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e8197bebbb0874d3be0f941d44c78667c716c33a051ce23cdf9db478d427da1 = $this->env->getExtension("native_profiler");
        $__internal_8e8197bebbb0874d3be0f941d44c78667c716c33a051ce23cdf9db478d427da1->enter($__internal_8e8197bebbb0874d3be0f941d44c78667c716c33a051ce23cdf9db478d427da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- container -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Sidebar -->
            <header class=\"page-header\">
                <h1 class=\"page-title\"></h1>
            </header>
            <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_agregarCapituloLibro", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" id=\"formularioCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">

                <h3>Agregar Capítulos</h3><br>
                <!-- /Tabla capitulos -->

                <table class=\"table demo table-bordered\" id=\"tablaCapitulos\" data-filter=\"#filter\" >
                    <thead>
                        <tr>
                            <th data-hide=\"phone\"> </th> 
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
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["capitulo"]) {
            // line 38
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 39
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["capitulo"], "numeroCapitulo", array())), "html", null, true);
            echo " </td>
                                 <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 40
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["capitulo"], "nombreCapitulo", array())), "html", null, true);
            echo " </td>
                                 <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_removerPreguntaCuestionario", array("idPregunta" => $this->getAttribute($context["capitulo"], "id", array()), "idCuestionario" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capitulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                </table>
                <a href=\"#\" id=\"capitulo_link\">Añadir capítulo</a>
                <!-- /Acaba el contenido de capitulo--> 


                <hr>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-sm-3 text-right\">
                        <button class=\"btn\" type=\"button\" onclick=\"closeWindows();\">Cerrar</button>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-3 text-right\">
                        <button id=\"pruebaultima\" class=\"btn btn-action\" onclick=\"obtenerArreglo();\" type=\"button\">Registrar</button>
                    </div>
                </div>

            </form>
        </div>
        <br><br>
    </div>\t<!-- /container -->

";
        
        $__internal_8e8197bebbb0874d3be0f941d44c78667c716c33a051ce23cdf9db478d427da1->leave($__internal_8e8197bebbb0874d3be0f941d44c78667c716c33a051ce23cdf9db478d427da1_prof);

    }

    // line 68
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_6f9319f85af2b8f2e739b4d13664920c4caf93f8b7fb057fdfa5f19f855374fd = $this->env->getExtension("native_profiler");
        $__internal_6f9319f85af2b8f2e739b4d13664920c4caf93f8b7fb057fdfa5f19f855374fd->enter($__internal_6f9319f85af2b8f2e739b4d13664920c4caf93f8b7fb057fdfa5f19f855374fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_6f9319f85af2b8f2e739b4d13664920c4caf93f8b7fb057fdfa5f19f855374fd->leave($__internal_6f9319f85af2b8f2e739b4d13664920c4caf93f8b7fb057fdfa5f19f855374fd_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f95996c7d587af2dbca27400748a1a0204d6f6d88ea53547e7582046f0bee665 = $this->env->getExtension("native_profiler");
        $__internal_f95996c7d587af2dbca27400748a1a0204d6f6d88ea53547e7582046f0bee665->enter($__internal_f95996c7d587af2dbca27400748a1a0204d6f6d88ea53547e7582046f0bee665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function obtenerArreglo() {
            var values = \$('input:checkbox:checked').map(function () {
                return this.value;
            }).get();
            if (values.length > 0) {
                \$.ajax({
                    url: \$(\"#formularioCuestionario\").attr('action'),
                    type: \"POST\",
                    data: {ids: values},
                    success: function (data) {
                        if (data.resultado == 1) {
                            window.opener.location.reload(false);
                            window.location.href = \"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_ver_cuestionario", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\";
                            closeWindows();
                        } else {
                            alert('Ocurrio un error');
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert('Ocurrio un error');
                    }
                });
            }
        }



        function closeWindows() {
            var browserName = navigator.appName;
            if (browserName == \"Microsoft Internet Explorer\") {
                var ie7 = (document.all && !window.opera && window.XMLHttpRequest) ? true : false;
                if (ie7)
                {
                    window.open('', '_parent', '');
                    window.close();
                }
                else
                {
                    this.focus();
                    self.opener = this;
                    self.close();
                }
            } else {
                try {
                    this.focus();
                    self.opener = this;
                    self.close();
                }
                catch (e) {

                }
                try {
                    window.open('', '_self', '');
                    window.close();
                }
                catch (e) {

                }
            }
        }

        function addCapitulo() {
            var collectionHolder = \$('#tablaCapitulos');
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


    </script>
";
        
        $__internal_f95996c7d587af2dbca27400748a1a0204d6f6d88ea53547e7582046f0bee665->leave($__internal_f95996c7d587af2dbca27400748a1a0204d6f6d88ea53547e7582046f0bee665_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 86,  188 => 71,  182 => 70,  171 => 68,  143 => 45,  133 => 41,  129 => 40,  125 => 39,  122 => 38,  118 => 37,  96 => 18,  87 => 11,  81 => 10,  70 => 7,  59 => 6,  50 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
