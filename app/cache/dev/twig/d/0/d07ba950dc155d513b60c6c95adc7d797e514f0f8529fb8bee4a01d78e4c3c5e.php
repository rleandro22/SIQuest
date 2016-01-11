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
        $__internal_9569dea5b27982abfd4f0bb580d9a988cfeb082f852c5e2a638c2cb1907c7dc1 = $this->env->getExtension("native_profiler");
        $__internal_9569dea5b27982abfd4f0bb580d9a988cfeb082f852c5e2a638c2cb1907c7dc1->enter($__internal_9569dea5b27982abfd4f0bb580d9a988cfeb082f852c5e2a638c2cb1907c7dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:agregarCapituloLibro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9569dea5b27982abfd4f0bb580d9a988cfeb082f852c5e2a638c2cb1907c7dc1->leave($__internal_9569dea5b27982abfd4f0bb580d9a988cfeb082f852c5e2a638c2cb1907c7dc1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb8ae6ad634c50888616e0f710920651fe4eed04938b900a261796736e394671 = $this->env->getExtension("native_profiler");
        $__internal_eb8ae6ad634c50888616e0f710920651fe4eed04938b900a261796736e394671->enter($__internal_eb8ae6ad634c50888616e0f710920651fe4eed04938b900a261796736e394671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_eb8ae6ad634c50888616e0f710920651fe4eed04938b900a261796736e394671->leave($__internal_eb8ae6ad634c50888616e0f710920651fe4eed04938b900a261796736e394671_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_b71d9e331a468bd48725fb90ac1d770f2997568e69134f68cf1dfb7e78b0472f = $this->env->getExtension("native_profiler");
        $__internal_b71d9e331a468bd48725fb90ac1d770f2997568e69134f68cf1dfb7e78b0472f->enter($__internal_b71d9e331a468bd48725fb90ac1d770f2997568e69134f68cf1dfb7e78b0472f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_b71d9e331a468bd48725fb90ac1d770f2997568e69134f68cf1dfb7e78b0472f->leave($__internal_b71d9e331a468bd48725fb90ac1d770f2997568e69134f68cf1dfb7e78b0472f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_93fc72495a8ae06e153baea9f217e71d39c11aa48893dd8e41456c4746076f7b = $this->env->getExtension("native_profiler");
        $__internal_93fc72495a8ae06e153baea9f217e71d39c11aa48893dd8e41456c4746076f7b->enter($__internal_93fc72495a8ae06e153baea9f217e71d39c11aa48893dd8e41456c4746076f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_93fc72495a8ae06e153baea9f217e71d39c11aa48893dd8e41456c4746076f7b->leave($__internal_93fc72495a8ae06e153baea9f217e71d39c11aa48893dd8e41456c4746076f7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61af0fec7b9822a5ff3e77add3ec72945247730c1d958096b64dad4e82ce8148 = $this->env->getExtension("native_profiler");
        $__internal_61af0fec7b9822a5ff3e77add3ec72945247730c1d958096b64dad4e82ce8148->enter($__internal_61af0fec7b9822a5ff3e77add3ec72945247730c1d958096b64dad4e82ce8148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_61af0fec7b9822a5ff3e77add3ec72945247730c1d958096b64dad4e82ce8148->leave($__internal_61af0fec7b9822a5ff3e77add3ec72945247730c1d958096b64dad4e82ce8148_prof);

    }

    // line 68
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_078f00281d0786e2cd7fdbadd27d49206d3c69f33d22984fc125aab69ec2f774 = $this->env->getExtension("native_profiler");
        $__internal_078f00281d0786e2cd7fdbadd27d49206d3c69f33d22984fc125aab69ec2f774->enter($__internal_078f00281d0786e2cd7fdbadd27d49206d3c69f33d22984fc125aab69ec2f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_078f00281d0786e2cd7fdbadd27d49206d3c69f33d22984fc125aab69ec2f774->leave($__internal_078f00281d0786e2cd7fdbadd27d49206d3c69f33d22984fc125aab69ec2f774_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ad9c24801b9f23336cdc8a2dc0e52077271d5c73467f1f5cb61159e0d7551dd = $this->env->getExtension("native_profiler");
        $__internal_1ad9c24801b9f23336cdc8a2dc0e52077271d5c73467f1f5cb61159e0d7551dd->enter($__internal_1ad9c24801b9f23336cdc8a2dc0e52077271d5c73467f1f5cb61159e0d7551dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1ad9c24801b9f23336cdc8a2dc0e52077271d5c73467f1f5cb61159e0d7551dd->leave($__internal_1ad9c24801b9f23336cdc8a2dc0e52077271d5c73467f1f5cb61159e0d7551dd_prof);

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
