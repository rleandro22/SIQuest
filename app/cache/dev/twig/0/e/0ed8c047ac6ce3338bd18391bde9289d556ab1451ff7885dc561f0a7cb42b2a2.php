<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:indiceCuestionario.html.twig */
class __TwigTemplate_0ed8c047ac6ce3338bd18391bde9289d556ab1451ff7885dc561f0a7cb42b2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAsistenteAcademicaBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaCuestionario:indiceCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f8b3a4cf8e1a05b46109fdd6d66600daae71149699f3fb05c59a71128193e9c = $this->env->getExtension("native_profiler");
        $__internal_7f8b3a4cf8e1a05b46109fdd6d66600daae71149699f3fb05c59a71128193e9c->enter($__internal_7f8b3a4cf8e1a05b46109fdd6d66600daae71149699f3fb05c59a71128193e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:indiceCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f8b3a4cf8e1a05b46109fdd6d66600daae71149699f3fb05c59a71128193e9c->leave($__internal_7f8b3a4cf8e1a05b46109fdd6d66600daae71149699f3fb05c59a71128193e9c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2d05b717e035027b46b235600586ba3068e94b7143be5f8a36e75fdae1fb6ce6 = $this->env->getExtension("native_profiler");
        $__internal_2d05b717e035027b46b235600586ba3068e94b7143be5f8a36e75fdae1fb6ce6->enter($__internal_2d05b717e035027b46b235600586ba3068e94b7143be5f8a36e75fdae1fb6ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_2d05b717e035027b46b235600586ba3068e94b7143be5f8a36e75fdae1fb6ce6->leave($__internal_2d05b717e035027b46b235600586ba3068e94b7143be5f8a36e75fdae1fb6ce6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1d1f22a5717b0210bb299293adc7bfc1da0483dd15ab8b8218efacabf9fd90e = $this->env->getExtension("native_profiler");
        $__internal_c1d1f22a5717b0210bb299293adc7bfc1da0483dd15ab8b8218efacabf9fd90e->enter($__internal_c1d1f22a5717b0210bb299293adc7bfc1da0483dd15ab8b8218efacabf9fd90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Cuestionarios</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAsistenteAcademicaBundle:Menus:mantenimientoCuestionario.html.twig", "UciAsistenteAcademicaBundle:VistaCuestionario:indiceCuestionario.html.twig", 18)->display($context);
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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
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

            <br><br>
            ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 57
            echo "                <div class=\"col-lg-2 col-md-4 col-xs-6 thumb\" id=\"";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "cuestionarioname", array()), array(" " => "")), "html", null, true);
            echo "\">
                    <div class=\"thumbnail\">
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_ver_cuestionario", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuestionarioname", array()), "html", null, true);
            echo "</p>
                        </a>

                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_ver_cuestionario", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <img class=\"img-responsive\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img_test_1.png"), "html", null, true);
            echo "\" alt=\"\">
                        </a>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-md-6\"></div>
                            <div class=\"col-md-6\"><span class=\"pull-right\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_ver_cuestionario", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_borrarCuestionario", array("idCuestionario" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </br></br>

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_c1d1f22a5717b0210bb299293adc7bfc1da0483dd15ab8b8218efacabf9fd90e->leave($__internal_c1d1f22a5717b0210bb299293adc7bfc1da0483dd15ab8b8218efacabf9fd90e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcfd01b0d8dbe274afaa28d2d0f3d96e6a9da8257ce5dcffbafe96486074d49b = $this->env->getExtension("native_profiler");
        $__internal_fcfd01b0d8dbe274afaa28d2d0f3d96e6a9da8257ce5dcffbafe96486074d49b->enter($__internal_fcfd01b0d8dbe274afaa28d2d0f3d96e6a9da8257ce5dcffbafe96486074d49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {

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
        
        $__internal_fcfd01b0d8dbe274afaa28d2d0f3d96e6a9da8257ce5dcffbafe96486074d49b->leave($__internal_fcfd01b0d8dbe274afaa28d2d0f3d96e6a9da8257ce5dcffbafe96486074d49b_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:indiceCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 84,  187 => 83,  174 => 75,  163 => 70,  159 => 69,  151 => 64,  147 => 63,  141 => 60,  137 => 59,  131 => 57,  127 => 56,  103 => 35,  97 => 32,  93 => 31,  89 => 30,  83 => 27,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
