<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig */
class __TwigTemplate_dc10c87c0935f73e9d9b0633d2db82ec034403da089a7ddcdcddbf6c88321b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAsistenteAcademicaBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig", 1);
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
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec3a3af44ccb89c541e5922ae7c7ee522c99a92cf680e9c8a52354cdc4e71da = $this->env->getExtension("native_profiler");
        $__internal_1ec3a3af44ccb89c541e5922ae7c7ee522c99a92cf680e9c8a52354cdc4e71da->enter($__internal_1ec3a3af44ccb89c541e5922ae7c7ee522c99a92cf680e9c8a52354cdc4e71da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec3a3af44ccb89c541e5922ae7c7ee522c99a92cf680e9c8a52354cdc4e71da->leave($__internal_1ec3a3af44ccb89c541e5922ae7c7ee522c99a92cf680e9c8a52354cdc4e71da_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c49b9533eb6196e4127ca0f6121587aea32bb8505e49c4eae949e862cdebdd7 = $this->env->getExtension("native_profiler");
        $__internal_3c49b9533eb6196e4127ca0f6121587aea32bb8505e49c4eae949e862cdebdd7->enter($__internal_3c49b9533eb6196e4127ca0f6121587aea32bb8505e49c4eae949e862cdebdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_3c49b9533eb6196e4127ca0f6121587aea32bb8505e49c4eae949e862cdebdd7->leave($__internal_3c49b9533eb6196e4127ca0f6121587aea32bb8505e49c4eae949e862cdebdd7_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_e6170a44cbb9d7df6e8d0e8f749427b0823148868c46ccb16ed46e4daa4f979b = $this->env->getExtension("native_profiler");
        $__internal_e6170a44cbb9d7df6e8d0e8f749427b0823148868c46ccb16ed46e4daa4f979b->enter($__internal_e6170a44cbb9d7df6e8d0e8f749427b0823148868c46ccb16ed46e4daa4f979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_e6170a44cbb9d7df6e8d0e8f749427b0823148868c46ccb16ed46e4daa4f979b->leave($__internal_e6170a44cbb9d7df6e8d0e8f749427b0823148868c46ccb16ed46e4daa4f979b_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_b38d863addbadaa37de9bcaddb6a1da9b3781fe4511c866a396ca76b4fe325fd = $this->env->getExtension("native_profiler");
        $__internal_b38d863addbadaa37de9bcaddb6a1da9b3781fe4511c866a396ca76b4fe325fd->enter($__internal_b38d863addbadaa37de9bcaddb6a1da9b3781fe4511c866a396ca76b4fe325fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b38d863addbadaa37de9bcaddb6a1da9b3781fe4511c866a396ca76b4fe325fd->leave($__internal_b38d863addbadaa37de9bcaddb6a1da9b3781fe4511c866a396ca76b4fe325fd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d26ad00f2a4bf2c931a4b9b3deeb48758787021fbeee01c2913b1a056af5c5b5 = $this->env->getExtension("native_profiler");
        $__internal_d26ad00f2a4bf2c931a4b9b3deeb48758787021fbeee01c2913b1a056af5c5b5->enter($__internal_d26ad00f2a4bf2c931a4b9b3deeb48758787021fbeee01c2913b1a056af5c5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- container -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Sidebar -->
            <header class=\"page-header\">
                <h1 class=\"page-title\">Elija una pregunta</h1>
            </header>
            <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_agregarPreguntaCuestionario", array("idCuestionario" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" id=\"formularioCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">

                    <div class=\"row top-margin\">
                        <div class=\"cols-xs-12 col-sm-11 col-md-11 col-lg-11\">
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'label');
        echo "
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'errors');
        echo "
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'widget');
        echo "
                        </div>
                    </div>

                    <hr>
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-6 col-sm-3 text-right\">
                            <button class=\"btn\" type=\"button\" onclick=\"closeWindows();\">Cerrar</button>
                        </div>
                        <div class=\"col-lg-4 col-md-6 col-sm-3 text-right\">
                            <button id=\"pruebaultima\" class=\"btn btn-action\" onclick=\"obtenerArreglo();\" type=\"button\">Registrar</button>
                        </div>
                    </div>
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>
        </div>
        <br><br>
    </div>\t<!-- /container -->

";
        
        $__internal_d26ad00f2a4bf2c931a4b9b3deeb48758787021fbeee01c2913b1a056af5c5b5->leave($__internal_d26ad00f2a4bf2c931a4b9b3deeb48758787021fbeee01c2913b1a056af5c5b5_prof);

    }

    // line 45
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_e0b59fd63c2857eaa1558be76c06d2517b8744d27fbeb3fe0baf1c663956ca0e = $this->env->getExtension("native_profiler");
        $__internal_e0b59fd63c2857eaa1558be76c06d2517b8744d27fbeb3fe0baf1c663956ca0e->enter($__internal_e0b59fd63c2857eaa1558be76c06d2517b8744d27fbeb3fe0baf1c663956ca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_e0b59fd63c2857eaa1558be76c06d2517b8744d27fbeb3fe0baf1c663956ca0e->leave($__internal_e0b59fd63c2857eaa1558be76c06d2517b8744d27fbeb3fe0baf1c663956ca0e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10e8718b0fa78fb15782e4e3034fe6096fe85d8127cdd7237bc3f2565a3b5cf4 = $this->env->getExtension("native_profiler");
        $__internal_10e8718b0fa78fb15782e4e3034fe6096fe85d8127cdd7237bc3f2565a3b5cf4->enter($__internal_10e8718b0fa78fb15782e4e3034fe6096fe85d8127cdd7237bc3f2565a3b5cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_ver_cuestionario", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
    </script>
";
        
        $__internal_10e8718b0fa78fb15782e4e3034fe6096fe85d8127cdd7237bc3f2565a3b5cf4->leave($__internal_10e8718b0fa78fb15782e4e3034fe6096fe85d8127cdd7237bc3f2565a3b5cf4_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 63,  158 => 48,  152 => 47,  141 => 45,  127 => 37,  111 => 24,  107 => 23,  103 => 22,  96 => 18,  87 => 11,  81 => 10,  70 => 7,  59 => 6,  50 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
