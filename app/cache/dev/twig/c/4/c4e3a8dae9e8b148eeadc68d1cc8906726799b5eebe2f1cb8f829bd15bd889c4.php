<?php

/* UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig */
class __TwigTemplate_c4e3a8dae9e8b148eeadc68d1cc8906726799b5eebe2f1cb8f829bd15bd889c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig", 1);
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
        $__internal_18103931c0996928c244c3e336cac18212de1644609caab56bea6885ccb415e7 = $this->env->getExtension("native_profiler");
        $__internal_18103931c0996928c244c3e336cac18212de1644609caab56bea6885ccb415e7->enter($__internal_18103931c0996928c244c3e336cac18212de1644609caab56bea6885ccb415e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18103931c0996928c244c3e336cac18212de1644609caab56bea6885ccb415e7->leave($__internal_18103931c0996928c244c3e336cac18212de1644609caab56bea6885ccb415e7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a294808cb042189396b01caa5734468e325b50416fb69dbbd9acb52783e1cf89 = $this->env->getExtension("native_profiler");
        $__internal_a294808cb042189396b01caa5734468e325b50416fb69dbbd9acb52783e1cf89->enter($__internal_a294808cb042189396b01caa5734468e325b50416fb69dbbd9acb52783e1cf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_a294808cb042189396b01caa5734468e325b50416fb69dbbd9acb52783e1cf89->leave($__internal_a294808cb042189396b01caa5734468e325b50416fb69dbbd9acb52783e1cf89_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_bdbace46d458bba1790d49a39af0e4a32963d4a72cc85ad2fad62a98149c1074 = $this->env->getExtension("native_profiler");
        $__internal_bdbace46d458bba1790d49a39af0e4a32963d4a72cc85ad2fad62a98149c1074->enter($__internal_bdbace46d458bba1790d49a39af0e4a32963d4a72cc85ad2fad62a98149c1074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_bdbace46d458bba1790d49a39af0e4a32963d4a72cc85ad2fad62a98149c1074->leave($__internal_bdbace46d458bba1790d49a39af0e4a32963d4a72cc85ad2fad62a98149c1074_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_8fe5f94008df2263ab96073569b9da212c652737bf77fbef859a418e75d626a3 = $this->env->getExtension("native_profiler");
        $__internal_8fe5f94008df2263ab96073569b9da212c652737bf77fbef859a418e75d626a3->enter($__internal_8fe5f94008df2263ab96073569b9da212c652737bf77fbef859a418e75d626a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_8fe5f94008df2263ab96073569b9da212c652737bf77fbef859a418e75d626a3->leave($__internal_8fe5f94008df2263ab96073569b9da212c652737bf77fbef859a418e75d626a3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4acb251d2ad2bd13443a04e9cf20dfbe104010696d75dfebf200be0661fa745f = $this->env->getExtension("native_profiler");
        $__internal_4acb251d2ad2bd13443a04e9cf20dfbe104010696d75dfebf200be0661fa745f->enter($__internal_4acb251d2ad2bd13443a04e9cf20dfbe104010696d75dfebf200be0661fa745f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_agregarPreguntaCuestionario", array("idCuestionario" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_4acb251d2ad2bd13443a04e9cf20dfbe104010696d75dfebf200be0661fa745f->leave($__internal_4acb251d2ad2bd13443a04e9cf20dfbe104010696d75dfebf200be0661fa745f_prof);

    }

    // line 45
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_917cfb38c4b1d046bf4b59d5f004be2b3cf15c74b8d7279564aad91cc4111dea = $this->env->getExtension("native_profiler");
        $__internal_917cfb38c4b1d046bf4b59d5f004be2b3cf15c74b8d7279564aad91cc4111dea->enter($__internal_917cfb38c4b1d046bf4b59d5f004be2b3cf15c74b8d7279564aad91cc4111dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_917cfb38c4b1d046bf4b59d5f004be2b3cf15c74b8d7279564aad91cc4111dea->leave($__internal_917cfb38c4b1d046bf4b59d5f004be2b3cf15c74b8d7279564aad91cc4111dea_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2e626bbbaabd9e8dc91e01ab6924b68bf9fffee467ed8566aed93f21eba74db = $this->env->getExtension("native_profiler");
        $__internal_d2e626bbbaabd9e8dc91e01ab6924b68bf9fffee467ed8566aed93f21eba74db->enter($__internal_d2e626bbbaabd9e8dc91e01ab6924b68bf9fffee467ed8566aed93f21eba74db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_ver_cuestionario", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_d2e626bbbaabd9e8dc91e01ab6924b68bf9fffee467ed8566aed93f21eba74db->leave($__internal_d2e626bbbaabd9e8dc91e01ab6924b68bf9fffee467ed8566aed93f21eba74db_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig";
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
