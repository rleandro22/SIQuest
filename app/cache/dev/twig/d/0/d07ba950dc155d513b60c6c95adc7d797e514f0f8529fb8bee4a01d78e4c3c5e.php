<?php

/* UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig */
class __TwigTemplate_d07ba950dc155d513b60c6c95adc7d797e514f0f8529fb8bee4a01d78e4c3c5e extends Twig_Template
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
        $__internal_9c4eceefba53e6dc33e33d64480d652a388f0f450515df0a2e2bdd8ba3cbe240 = $this->env->getExtension("native_profiler");
        $__internal_9c4eceefba53e6dc33e33d64480d652a388f0f450515df0a2e2bdd8ba3cbe240->enter($__internal_9c4eceefba53e6dc33e33d64480d652a388f0f450515df0a2e2bdd8ba3cbe240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4eceefba53e6dc33e33d64480d652a388f0f450515df0a2e2bdd8ba3cbe240->leave($__internal_9c4eceefba53e6dc33e33d64480d652a388f0f450515df0a2e2bdd8ba3cbe240_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5c3de1a6c0858f6d1c5d59093ed9ce8830334f0aa7ef9fb92d6227742f8b02b = $this->env->getExtension("native_profiler");
        $__internal_b5c3de1a6c0858f6d1c5d59093ed9ce8830334f0aa7ef9fb92d6227742f8b02b->enter($__internal_b5c3de1a6c0858f6d1c5d59093ed9ce8830334f0aa7ef9fb92d6227742f8b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_b5c3de1a6c0858f6d1c5d59093ed9ce8830334f0aa7ef9fb92d6227742f8b02b->leave($__internal_b5c3de1a6c0858f6d1c5d59093ed9ce8830334f0aa7ef9fb92d6227742f8b02b_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_f2f1bacf3b829f5e5b8553c707c32a15f624e9a4be1ae7dabf8a0ed13b6d40e2 = $this->env->getExtension("native_profiler");
        $__internal_f2f1bacf3b829f5e5b8553c707c32a15f624e9a4be1ae7dabf8a0ed13b6d40e2->enter($__internal_f2f1bacf3b829f5e5b8553c707c32a15f624e9a4be1ae7dabf8a0ed13b6d40e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_f2f1bacf3b829f5e5b8553c707c32a15f624e9a4be1ae7dabf8a0ed13b6d40e2->leave($__internal_f2f1bacf3b829f5e5b8553c707c32a15f624e9a4be1ae7dabf8a0ed13b6d40e2_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_a8492165e9f806bfa65ccb3b73d4a6133cca5a31bb276c2a660104f8445828ea = $this->env->getExtension("native_profiler");
        $__internal_a8492165e9f806bfa65ccb3b73d4a6133cca5a31bb276c2a660104f8445828ea->enter($__internal_a8492165e9f806bfa65ccb3b73d4a6133cca5a31bb276c2a660104f8445828ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a8492165e9f806bfa65ccb3b73d4a6133cca5a31bb276c2a660104f8445828ea->leave($__internal_a8492165e9f806bfa65ccb3b73d4a6133cca5a31bb276c2a660104f8445828ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_29cac2db664fc38b6c561e1b25c3910aedcf803e9be365cb4f2c1846bda1b1e5 = $this->env->getExtension("native_profiler");
        $__internal_29cac2db664fc38b6c561e1b25c3910aedcf803e9be365cb4f2c1846bda1b1e5->enter($__internal_29cac2db664fc38b6c561e1b25c3910aedcf803e9be365cb4f2c1846bda1b1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29cac2db664fc38b6c561e1b25c3910aedcf803e9be365cb4f2c1846bda1b1e5->leave($__internal_29cac2db664fc38b6c561e1b25c3910aedcf803e9be365cb4f2c1846bda1b1e5_prof);

    }

    // line 68
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_7418683e89a5fa80757ea91976b4664566364f7948f34925f7e108ec36b75b93 = $this->env->getExtension("native_profiler");
        $__internal_7418683e89a5fa80757ea91976b4664566364f7948f34925f7e108ec36b75b93->enter($__internal_7418683e89a5fa80757ea91976b4664566364f7948f34925f7e108ec36b75b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_7418683e89a5fa80757ea91976b4664566364f7948f34925f7e108ec36b75b93->leave($__internal_7418683e89a5fa80757ea91976b4664566364f7948f34925f7e108ec36b75b93_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39916d8ec68e962e9ae01f64bd15566728e0ef5e8b971da9b1684e60c3fc0a60 = $this->env->getExtension("native_profiler");
        $__internal_39916d8ec68e962e9ae01f64bd15566728e0ef5e8b971da9b1684e60c3fc0a60->enter($__internal_39916d8ec68e962e9ae01f64bd15566728e0ef5e8b971da9b1684e60c3fc0a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_39916d8ec68e962e9ae01f64bd15566728e0ef5e8b971da9b1684e60c3fc0a60->leave($__internal_39916d8ec68e962e9ae01f64bd15566728e0ef5e8b971da9b1684e60c3fc0a60_prof);

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
