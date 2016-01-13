<?php

/* UciProfesorBundle:VistaCuestionario:indiceCuestionario.html.twig */
class __TwigTemplate_a5932bef25f9086a7d12b03a38e5a4c76b3fbc79b918e59210415170fa67a0cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciProfesorBundle::base.html.twig", "UciProfesorBundle:VistaCuestionario:indiceCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciProfesorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4eb0a7ee37d19819d84f7a6bfbd4c295a4d1467c33c8f1ea6698718990647f6 = $this->env->getExtension("native_profiler");
        $__internal_e4eb0a7ee37d19819d84f7a6bfbd4c295a4d1467c33c8f1ea6698718990647f6->enter($__internal_e4eb0a7ee37d19819d84f7a6bfbd4c295a4d1467c33c8f1ea6698718990647f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:VistaCuestionario:indiceCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4eb0a7ee37d19819d84f7a6bfbd4c295a4d1467c33c8f1ea6698718990647f6->leave($__internal_e4eb0a7ee37d19819d84f7a6bfbd4c295a4d1467c33c8f1ea6698718990647f6_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_9a2d926b3f3fd9d9653f712b467d13803365ec23fe28f3c5114491f166524488 = $this->env->getExtension("native_profiler");
        $__internal_9a2d926b3f3fd9d9653f712b467d13803365ec23fe28f3c5114491f166524488->enter($__internal_9a2d926b3f3fd9d9653f712b467d13803365ec23fe28f3c5114491f166524488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_9a2d926b3f3fd9d9653f712b467d13803365ec23fe28f3c5114491f166524488->leave($__internal_9a2d926b3f3fd9d9653f712b467d13803365ec23fe28f3c5114491f166524488_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_21f8c9a97b84205d962acaaec246f584a9d1207b1b750751f2c962337367b838 = $this->env->getExtension("native_profiler");
        $__internal_21f8c9a97b84205d962acaaec246f584a9d1207b1b750751f2c962337367b838->enter($__internal_21f8c9a97b84205d962acaaec246f584a9d1207b1b750751f2c962337367b838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_profesor_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Cuestionarios</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig", "UciProfesorBundle:VistaCuestionario:indiceCuestionario.html.twig", 18)->display($context);
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
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_profesor_ver_cuestionario", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuestionarioname", array()), "html", null, true);
            echo "</p>
                        </a>

                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_profesor_ver_cuestionario", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_profesor_ver_cuestionario", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
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
        
        $__internal_21f8c9a97b84205d962acaaec246f584a9d1207b1b750751f2c962337367b838->leave($__internal_21f8c9a97b84205d962acaaec246f584a9d1207b1b750751f2c962337367b838_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3e16d3062c05754ad72dd6bf8908235b76d71641609521fde74a8265fef22a7 = $this->env->getExtension("native_profiler");
        $__internal_c3e16d3062c05754ad72dd6bf8908235b76d71641609521fde74a8265fef22a7->enter($__internal_c3e16d3062c05754ad72dd6bf8908235b76d71641609521fde74a8265fef22a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c3e16d3062c05754ad72dd6bf8908235b76d71641609521fde74a8265fef22a7->leave($__internal_c3e16d3062c05754ad72dd6bf8908235b76d71641609521fde74a8265fef22a7_prof);

    }

    public function getTemplateName()
    {
        return "UciProfesorBundle:VistaCuestionario:indiceCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 84,  184 => 83,  171 => 75,  159 => 69,  151 => 64,  147 => 63,  141 => 60,  137 => 59,  131 => 57,  127 => 56,  103 => 35,  97 => 32,  93 => 31,  89 => 30,  83 => 27,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
