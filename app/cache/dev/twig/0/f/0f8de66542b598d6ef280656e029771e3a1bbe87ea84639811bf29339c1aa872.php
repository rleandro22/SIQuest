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
        $__internal_7733cf1f538a25a75974912bb4a96d278384c118286130367d5f005e45b0e5f6 = $this->env->getExtension("native_profiler");
        $__internal_7733cf1f538a25a75974912bb4a96d278384c118286130367d5f005e45b0e5f6->enter($__internal_7733cf1f538a25a75974912bb4a96d278384c118286130367d5f005e45b0e5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7733cf1f538a25a75974912bb4a96d278384c118286130367d5f005e45b0e5f6->leave($__internal_7733cf1f538a25a75974912bb4a96d278384c118286130367d5f005e45b0e5f6_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11815f352a122d69a546e025a068f18dab07d9308514b3c54166649f65020f31 = $this->env->getExtension("native_profiler");
        $__internal_11815f352a122d69a546e025a068f18dab07d9308514b3c54166649f65020f31->enter($__internal_11815f352a122d69a546e025a068f18dab07d9308514b3c54166649f65020f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_11815f352a122d69a546e025a068f18dab07d9308514b3c54166649f65020f31->leave($__internal_11815f352a122d69a546e025a068f18dab07d9308514b3c54166649f65020f31_prof);

    }

    // line 6
    public function block_barra($context, array $blocks = array())
    {
        $__internal_8139864310debf22d5cac033bc856c70d9762a39e3e4ec73afdfcfb43d701369 = $this->env->getExtension("native_profiler");
        $__internal_8139864310debf22d5cac033bc856c70d9762a39e3e4ec73afdfcfb43d701369->enter($__internal_8139864310debf22d5cac033bc856c70d9762a39e3e4ec73afdfcfb43d701369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        
        $__internal_8139864310debf22d5cac033bc856c70d9762a39e3e4ec73afdfcfb43d701369->leave($__internal_8139864310debf22d5cac033bc856c70d9762a39e3e4ec73afdfcfb43d701369_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_950c6893115a5d918ff50ba9f96afe1a36f5b46ddac160d600e6098e8e1d7b89 = $this->env->getExtension("native_profiler");
        $__internal_950c6893115a5d918ff50ba9f96afe1a36f5b46ddac160d600e6098e8e1d7b89->enter($__internal_950c6893115a5d918ff50ba9f96afe1a36f5b46ddac160d600e6098e8e1d7b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_950c6893115a5d918ff50ba9f96afe1a36f5b46ddac160d600e6098e8e1d7b89->leave($__internal_950c6893115a5d918ff50ba9f96afe1a36f5b46ddac160d600e6098e8e1d7b89_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5168be0694a8265d74016663ea4f33171e4f55c7045f3b4e7c329c6503dcf7e = $this->env->getExtension("native_profiler");
        $__internal_e5168be0694a8265d74016663ea4f33171e4f55c7045f3b4e7c329c6503dcf7e->enter($__internal_e5168be0694a8265d74016663ea4f33171e4f55c7045f3b4e7c329c6503dcf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'label');
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pregunta", array()), 'errors');
        echo "
                        ";
        // line 23
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
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>
        </div>
        <br><br>
    </div>\t<!-- /container -->

";
        
        $__internal_e5168be0694a8265d74016663ea4f33171e4f55c7045f3b4e7c329c6503dcf7e->leave($__internal_e5168be0694a8265d74016663ea4f33171e4f55c7045f3b4e7c329c6503dcf7e_prof);

    }

    // line 44
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_fa949e8db9c9b6a19d2bf1eb2b51fc86507acd9c16a14237d08f839049701005 = $this->env->getExtension("native_profiler");
        $__internal_fa949e8db9c9b6a19d2bf1eb2b51fc86507acd9c16a14237d08f839049701005->enter($__internal_fa949e8db9c9b6a19d2bf1eb2b51fc86507acd9c16a14237d08f839049701005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        
        $__internal_fa949e8db9c9b6a19d2bf1eb2b51fc86507acd9c16a14237d08f839049701005->leave($__internal_fa949e8db9c9b6a19d2bf1eb2b51fc86507acd9c16a14237d08f839049701005_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acdc9a338936c2e5d1d146c790443acd482469aef3f0f43e5dd075de97b5c30a = $this->env->getExtension("native_profiler");
        $__internal_acdc9a338936c2e5d1d146c790443acd482469aef3f0f43e5dd075de97b5c30a->enter($__internal_acdc9a338936c2e5d1d146c790443acd482469aef3f0f43e5dd075de97b5c30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        
        function obtenerArreglo(){
            var values = \$('input:checkbox:checked').map(function () {
                return this.value;
            }).get();
            if(values.length > 0){
               \$.ajax({
                    url: \$(\"#formularioCuestionario\").attr('action'),
                    type: \"POST\",
                    data: {ids: values},
                    success: function (data) {
                       
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
        
        $__internal_acdc9a338936c2e5d1d146c790443acd482469aef3f0f43e5dd075de97b5c30a->leave($__internal_acdc9a338936c2e5d1d146c790443acd482469aef3f0f43e5dd075de97b5c30a_prof);

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
        return array (  157 => 47,  151 => 46,  140 => 44,  126 => 36,  110 => 23,  106 => 22,  102 => 21,  96 => 18,  87 => 11,  81 => 10,  70 => 7,  59 => 6,  50 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
