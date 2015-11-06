<?php

/* UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig */
class __TwigTemplate_ebd3912ca34d72abc278e9cdaa1d8ed1783ddbd627e68fef2bd0cccf54a7322a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig", 1);
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
        $__internal_37b88a329e65f4ed03c609e4b643485fb1285e2f720b58b2faf67bf753c94c69 = $this->env->getExtension("native_profiler");
        $__internal_37b88a329e65f4ed03c609e4b643485fb1285e2f720b58b2faf67bf753c94c69->enter($__internal_37b88a329e65f4ed03c609e4b643485fb1285e2f720b58b2faf67bf753c94c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b88a329e65f4ed03c609e4b643485fb1285e2f720b58b2faf67bf753c94c69->leave($__internal_37b88a329e65f4ed03c609e4b643485fb1285e2f720b58b2faf67bf753c94c69_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_539b5b0740206dae1c8f6b334744c6c1ef624950aa219392342f6447e25b1b7a = $this->env->getExtension("native_profiler");
        $__internal_539b5b0740206dae1c8f6b334744c6c1ef624950aa219392342f6447e25b1b7a->enter($__internal_539b5b0740206dae1c8f6b334744c6c1ef624950aa219392342f6447e25b1b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_539b5b0740206dae1c8f6b334744c6c1ef624950aa219392342f6447e25b1b7a->leave($__internal_539b5b0740206dae1c8f6b334744c6c1ef624950aa219392342f6447e25b1b7a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ba163016f22d57135fd81c70f01494b83ea093bff4cb4e6407c55c24493496c = $this->env->getExtension("native_profiler");
        $__internal_7ba163016f22d57135fd81c70f01494b83ea093bff4cb4e6407c55c24493496c->enter($__internal_7ba163016f22d57135fd81c70f01494b83ea093bff4cb4e6407c55c24493496c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Cuestionarios</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Filtrar cuestionarios</h1>
                </header>
                <br>
                <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row top-margin\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>

                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row top-space\">

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br><br>
            <div id=\"tablaCuestionarios\">
                ";
        // line 62
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UciAdministradorBundle:Cuestionario:aRetornarCuestionarios"));
        echo "
            </div>
            </br></br>

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_7ba163016f22d57135fd81c70f01494b83ea093bff4cb4e6407c55c24493496c->leave($__internal_7ba163016f22d57135fd81c70f01494b83ea093bff4cb4e6407c55c24493496c_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a80706edd442209ffcf6fa44112fa03f6f26c3bce012466322e1fa26d2fd625 = $this->env->getExtension("native_profiler");
        $__internal_5a80706edd442209ffcf6fa44112fa03f6f26c3bce012466322e1fa26d2fd625->enter($__internal_5a80706edd442209ffcf6fa44112fa03f6f26c3bce012466322e1fa26d2fd625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {
            
            \$(\"#uci_bundle_basedatosbundle_filtracuestionario_curso\").change(function () {
                var idCurso = \$(this).val();
                var nombreCuestionario =  \$(\"#filter\").val();
                \$( \"#tablaCuestionarios\" ).load('";
        // line 80
        echo $this->env->getExtension('routing')->getPath("uci_administrador_listadoCuestionarios");
        echo "'); 
            });

            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            }
            );

            \$('body').on('hidden.bs.modal', '.modal', function () {
                \$('.modal-content', this).empty();
                \$(this).removeData('bs.modal');
            });

            var handleSpeedBump = function (e) {
                e.preventDefault();
                var href = this.getAttribute(\"data-href\");
                var sure = confirm(\"¿Esta seguro que desea realizar el borrado?\\n (Esta operación no es reversible)\");
                if (!sure)
                    return;
                document.location = href;
            };
            \$(\"a.speedbump\")
                    .click(handleSpeedBump)
                    .bind(\"contextmenu\", handleSpeedBump)
                    .dblclick(handleSpeedBump)
                    .each(function () {
                        var href = this.href;
                        this.setAttribute(\"data-href\", href);
                        this.href = \"javascript:void('Navigate to \" + href.replace(\"'\", \"\") + \"')\";
                    });
        };
    </script>
";
        
        $__internal_5a80706edd442209ffcf6fa44112fa03f6f26c3bce012466322e1fa26d2fd625->leave($__internal_5a80706edd442209ffcf6fa44112fa03f6f26c3bce012466322e1fa26d2fd625_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 80,  155 => 73,  149 => 72,  133 => 62,  103 => 35,  97 => 32,  93 => 31,  89 => 30,  83 => 27,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
