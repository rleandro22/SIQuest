<?php

/* UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig */
class __TwigTemplate_0f8de66542b598d6ef280656e029771e3a1bbe87ea84639811bf29339c1aa872 extends Twig_Template
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
        $__internal_e2919bd0fad6d0b77ed42d6a2063a7cb709d5e04f45c93dc92d71cd371cce556 = $this->env->getExtension("native_profiler");
        $__internal_e2919bd0fad6d0b77ed42d6a2063a7cb709d5e04f45c93dc92d71cd371cce556->enter($__internal_e2919bd0fad6d0b77ed42d6a2063a7cb709d5e04f45c93dc92d71cd371cce556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2919bd0fad6d0b77ed42d6a2063a7cb709d5e04f45c93dc92d71cd371cce556->leave($__internal_e2919bd0fad6d0b77ed42d6a2063a7cb709d5e04f45c93dc92d71cd371cce556_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c06ee554607aaaae1c56863e8817ff5688105d66a2b6b29f78c42f0c3b7bf94 = $this->env->getExtension("native_profiler");
        $__internal_6c06ee554607aaaae1c56863e8817ff5688105d66a2b6b29f78c42f0c3b7bf94->enter($__internal_6c06ee554607aaaae1c56863e8817ff5688105d66a2b6b29f78c42f0c3b7bf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_6c06ee554607aaaae1c56863e8817ff5688105d66a2b6b29f78c42f0c3b7bf94->leave($__internal_6c06ee554607aaaae1c56863e8817ff5688105d66a2b6b29f78c42f0c3b7bf94_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_15a13b9129b559e0177272bdea4af021ffab091382a3c95cab52acfe7eeb3b8a = $this->env->getExtension("native_profiler");
        $__internal_15a13b9129b559e0177272bdea4af021ffab091382a3c95cab52acfe7eeb3b8a->enter($__internal_15a13b9129b559e0177272bdea4af021ffab091382a3c95cab52acfe7eeb3b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_15a13b9129b559e0177272bdea4af021ffab091382a3c95cab52acfe7eeb3b8a->leave($__internal_15a13b9129b559e0177272bdea4af021ffab091382a3c95cab52acfe7eeb3b8a_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_3e0834bccf8ffa1279c924fbe6b5e9cfa69e1e92a4a6c43ec3fd8a53a1449597 = $this->env->getExtension("native_profiler");
        $__internal_3e0834bccf8ffa1279c924fbe6b5e9cfa69e1e92a4a6c43ec3fd8a53a1449597->enter($__internal_3e0834bccf8ffa1279c924fbe6b5e9cfa69e1e92a4a6c43ec3fd8a53a1449597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_3e0834bccf8ffa1279c924fbe6b5e9cfa69e1e92a4a6c43ec3fd8a53a1449597->leave($__internal_3e0834bccf8ffa1279c924fbe6b5e9cfa69e1e92a4a6c43ec3fd8a53a1449597_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6663e7ac7633616b9727d107bb382aa98408c8923b2c928913b96b364570a094 = $this->env->getExtension("native_profiler");
        $__internal_6663e7ac7633616b9727d107bb382aa98408c8923b2c928913b96b364570a094->enter($__internal_6663e7ac7633616b9727d107bb382aa98408c8923b2c928913b96b364570a094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6663e7ac7633616b9727d107bb382aa98408c8923b2c928913b96b364570a094->leave($__internal_6663e7ac7633616b9727d107bb382aa98408c8923b2c928913b96b364570a094_prof);

    }

    // line 45
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_e52dd7d496e37b23484f2e26b0029608157d0fa0c1597342b536f8c8f011d2c5 = $this->env->getExtension("native_profiler");
        $__internal_e52dd7d496e37b23484f2e26b0029608157d0fa0c1597342b536f8c8f011d2c5->enter($__internal_e52dd7d496e37b23484f2e26b0029608157d0fa0c1597342b536f8c8f011d2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_e52dd7d496e37b23484f2e26b0029608157d0fa0c1597342b536f8c8f011d2c5->leave($__internal_e52dd7d496e37b23484f2e26b0029608157d0fa0c1597342b536f8c8f011d2c5_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7296e8c470f8b9ad47651e0d3ab2457f4f2c36d663dc339e1fb9967d99ca549e = $this->env->getExtension("native_profiler");
        $__internal_7296e8c470f8b9ad47651e0d3ab2457f4f2c36d663dc339e1fb9967d99ca549e->enter($__internal_7296e8c470f8b9ad47651e0d3ab2457f4f2c36d663dc339e1fb9967d99ca549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7296e8c470f8b9ad47651e0d3ab2457f4f2c36d663dc339e1fb9967d99ca549e->leave($__internal_7296e8c470f8b9ad47651e0d3ab2457f4f2c36d663dc339e1fb9967d99ca549e_prof);

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
