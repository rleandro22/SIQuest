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
        $__internal_2b91d4fca3e8a5a9ac712598cf8e191abfa37f82534190f1efdeb6745c85a2f2 = $this->env->getExtension("native_profiler");
        $__internal_2b91d4fca3e8a5a9ac712598cf8e191abfa37f82534190f1efdeb6745c85a2f2->enter($__internal_2b91d4fca3e8a5a9ac712598cf8e191abfa37f82534190f1efdeb6745c85a2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b91d4fca3e8a5a9ac712598cf8e191abfa37f82534190f1efdeb6745c85a2f2->leave($__internal_2b91d4fca3e8a5a9ac712598cf8e191abfa37f82534190f1efdeb6745c85a2f2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb5e25858190d1b3e086743851e3992478089f4585d4ca945229e509bd1492df = $this->env->getExtension("native_profiler");
        $__internal_cb5e25858190d1b3e086743851e3992478089f4585d4ca945229e509bd1492df->enter($__internal_cb5e25858190d1b3e086743851e3992478089f4585d4ca945229e509bd1492df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_cb5e25858190d1b3e086743851e3992478089f4585d4ca945229e509bd1492df->leave($__internal_cb5e25858190d1b3e086743851e3992478089f4585d4ca945229e509bd1492df_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_f9b5af677fd731f302d52b2b5ee48edc929a6118e62a49207600c7ca82a9c143 = $this->env->getExtension("native_profiler");
        $__internal_f9b5af677fd731f302d52b2b5ee48edc929a6118e62a49207600c7ca82a9c143->enter($__internal_f9b5af677fd731f302d52b2b5ee48edc929a6118e62a49207600c7ca82a9c143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_f9b5af677fd731f302d52b2b5ee48edc929a6118e62a49207600c7ca82a9c143->leave($__internal_f9b5af677fd731f302d52b2b5ee48edc929a6118e62a49207600c7ca82a9c143_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_a13cddc78e15549b4d8cbd64530ba49a3475d0fc19c0ee396a923193eaa8436b = $this->env->getExtension("native_profiler");
        $__internal_a13cddc78e15549b4d8cbd64530ba49a3475d0fc19c0ee396a923193eaa8436b->enter($__internal_a13cddc78e15549b4d8cbd64530ba49a3475d0fc19c0ee396a923193eaa8436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a13cddc78e15549b4d8cbd64530ba49a3475d0fc19c0ee396a923193eaa8436b->leave($__internal_a13cddc78e15549b4d8cbd64530ba49a3475d0fc19c0ee396a923193eaa8436b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2668234c975f29dc71c54029ffba35921d12d39f5e8b0891a0fcea0b2d544259 = $this->env->getExtension("native_profiler");
        $__internal_2668234c975f29dc71c54029ffba35921d12d39f5e8b0891a0fcea0b2d544259->enter($__internal_2668234c975f29dc71c54029ffba35921d12d39f5e8b0891a0fcea0b2d544259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2668234c975f29dc71c54029ffba35921d12d39f5e8b0891a0fcea0b2d544259->leave($__internal_2668234c975f29dc71c54029ffba35921d12d39f5e8b0891a0fcea0b2d544259_prof);

    }

    // line 45
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_f737c89a61ebb35028cbb53a3f49f1ec5ab244bf26a942bfe8728f35ee514fc4 = $this->env->getExtension("native_profiler");
        $__internal_f737c89a61ebb35028cbb53a3f49f1ec5ab244bf26a942bfe8728f35ee514fc4->enter($__internal_f737c89a61ebb35028cbb53a3f49f1ec5ab244bf26a942bfe8728f35ee514fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_f737c89a61ebb35028cbb53a3f49f1ec5ab244bf26a942bfe8728f35ee514fc4->leave($__internal_f737c89a61ebb35028cbb53a3f49f1ec5ab244bf26a942bfe8728f35ee514fc4_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25af203507f3d4dcac1d825ac8294f1f000ab676e52bc7c87eec89f0c5778bdf = $this->env->getExtension("native_profiler");
        $__internal_25af203507f3d4dcac1d825ac8294f1f000ab676e52bc7c87eec89f0c5778bdf->enter($__internal_25af203507f3d4dcac1d825ac8294f1f000ab676e52bc7c87eec89f0c5778bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_25af203507f3d4dcac1d825ac8294f1f000ab676e52bc7c87eec89f0c5778bdf->leave($__internal_25af203507f3d4dcac1d825ac8294f1f000ab676e52bc7c87eec89f0c5778bdf_prof);

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
