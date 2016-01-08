<?php

/* UciAsistenteAcademicaBundle:VistaPregunta:verPreguntaPop.html.twig */
class __TwigTemplate_25288422443daaf4bbd8b0ec3d7749f94484cccc59e40d7e0a2e3e3e4f6bb98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaPregunta:verPreguntaPop.html.twig", 1);
        $this->blocks = array(
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc16360df33c8c6fac549f6aba9b250cb3f89e97b51ccff9e55707dc6c7a1f36 = $this->env->getExtension("native_profiler");
        $__internal_cc16360df33c8c6fac549f6aba9b250cb3f89e97b51ccff9e55707dc6c7a1f36->enter($__internal_cc16360df33c8c6fac549f6aba9b250cb3f89e97b51ccff9e55707dc6c7a1f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaPregunta:verPreguntaPop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc16360df33c8c6fac549f6aba9b250cb3f89e97b51ccff9e55707dc6c7a1f36->leave($__internal_cc16360df33c8c6fac549f6aba9b250cb3f89e97b51ccff9e55707dc6c7a1f36_prof);

    }

    // line 3
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_470401ab5558a0adef9106d5c3281631c3f700517718e9352c88154d055837a3 = $this->env->getExtension("native_profiler");
        $__internal_470401ab5558a0adef9106d5c3281631c3f700517718e9352c88154d055837a3->enter($__internal_470401ab5558a0adef9106d5c3281631c3f700517718e9352c88154d055837a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_470401ab5558a0adef9106d5c3281631c3f700517718e9352c88154d055837a3->leave($__internal_470401ab5558a0adef9106d5c3281631c3f700517718e9352c88154d055837a3_prof);

    }

    // line 4
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ff3d40b8103c0b5bac04ce6a5254e8be23de74290e7fda15b9aa03e1c5506e91 = $this->env->getExtension("native_profiler");
        $__internal_ff3d40b8103c0b5bac04ce6a5254e8be23de74290e7fda15b9aa03e1c5506e91->enter($__internal_ff3d40b8103c0b5bac04ce6a5254e8be23de74290e7fda15b9aa03e1c5506e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 5
        echo "    ";
        
        $__internal_ff3d40b8103c0b5bac04ce6a5254e8be23de74290e7fda15b9aa03e1c5506e91->leave($__internal_ff3d40b8103c0b5bac04ce6a5254e8be23de74290e7fda15b9aa03e1c5506e91_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_8f4ef58471068d8cbfd254bd562dabb116af7dfe2aded7d5e77ec85c4ec6a331 = $this->env->getExtension("native_profiler");
        $__internal_8f4ef58471068d8cbfd254bd562dabb116af7dfe2aded7d5e77ec85c4ec6a331->enter($__internal_8f4ef58471068d8cbfd254bd562dabb116af7dfe2aded7d5e77ec85c4ec6a331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_8f4ef58471068d8cbfd254bd562dabb116af7dfe2aded7d5e77ec85c4ec6a331->leave($__internal_8f4ef58471068d8cbfd254bd562dabb116af7dfe2aded7d5e77ec85c4ec6a331_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_db7db8a23680fbb15a51ee2f4903d5bb05c17f4521a4851e174c60154f0ffa34 = $this->env->getExtension("native_profiler");
        $__internal_db7db8a23680fbb15a51ee2f4903d5bb05c17f4521a4851e174c60154f0ffa34->enter($__internal_db7db8a23680fbb15a51ee2f4903d5bb05c17f4521a4851e174c60154f0ffa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- container -->
    <div class=\"container\">


        <form>             

            <div class=\"row\">
                <!-- Sidebar -->
                <aside class=\"col-md-4 sidebar sidebar-left hidden\">
                    ";
        // line 20
        $this->loadTemplate("UciAsistenteAcademicaBundle:Menus:mantenimientoInicio.html.twig", "UciAsistenteAcademicaBundle:VistaPregunta:verPreguntaPop.html.twig", 20)->display($context);
        // line 21
        echo "                </aside>
                <!-- /Sidebar -->
                <!-- Article main content -->
                <article class=\"col-sm-8 maincontent\">
                    <header class=\"page-header\">
                        <h1 class=\"page-title\">Ver pregunta</h1>
                    </header>
                    <br>
                    <!-- /Aquí va el contenido -->
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <h3 class=\"thin text-center\">Detalles de pregunta ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "nombre", array()), "html", null, true);
        echo "</h3>
                                <hr>

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'row');
        echo "
                                    </div><div class=\"imagenCargando\"></div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPagina", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <br>
                                <hr>

                            </div>
                        </div>
                    </div>
                    <!-- /Aquí acaba el contenido --> 
                </article>
                <!-- /Article -->
            </div>

            <div class=\"row\" id=\"panelRespuestas\">
                <h3><a id=\"linkTextoResp\" href=\"#\" style=\"text-decoration: none;\">Respuestas</a></h3><hr>
                <div id=\"explicacionRespuesta\" style=\"display: none;\"><p class=\"text-warning\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "explicacion", array()), "html", null, true);
        echo "</p><hr></div>
                <ul id=\"respuestas\" data-prototype=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 91
        ob_start();
        // line 92
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 93
            echo "                            <li> ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["respuesta"], 'row');
            echo "
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 97
        echo "                </ul>
                <br><br>

            </div>
            <br>
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>\t<!-- /container -->

";
        
        $__internal_db7db8a23680fbb15a51ee2f4903d5bb05c17f4521a4851e174c60154f0ffa34->leave($__internal_db7db8a23680fbb15a51ee2f4903d5bb05c17f4521a4851e174c60154f0ffa34_prof);

    }

    // line 108
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_3359d08e2c2c1e9b8e9610d76a4eb66e9031e13f5569684737a10576ec0d4d06 = $this->env->getExtension("native_profiler");
        $__internal_3359d08e2c2c1e9b8e9610d76a4eb66e9031e13f5569684737a10576ec0d4d06->enter($__internal_3359d08e2c2c1e9b8e9610d76a4eb66e9031e13f5569684737a10576ec0d4d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 109
        echo "    ";
        
        $__internal_3359d08e2c2c1e9b8e9610d76a4eb66e9031e13f5569684737a10576ec0d4d06->leave($__internal_3359d08e2c2c1e9b8e9610d76a4eb66e9031e13f5569684737a10576ec0d4d06_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d083b37790c6729835fbf1cac2a9285423a567173f65a7c2894863d945b535f = $this->env->getExtension("native_profiler");
        $__internal_0d083b37790c6729835fbf1cac2a9285423a567173f65a7c2894863d945b535f->enter($__internal_0d083b37790c6729835fbf1cac2a9285423a567173f65a7c2894863d945b535f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        document.ready = function () {
            nicEditors.allTextAreas();
            jQuery('.nicEdit-main').attr('contenteditable', 'false');
            jQuery('.nicEdit-panel').hide();
            \$('input[type=\"text\"], input[type=\"checkbox\"], input[type=\"number\"], select').prop(\"disabled\", true);
            \$('#linkTextoResp').on('click', function (e) {
                e.preventDefault();
                \$('#explicacionRespuesta').toggle(\"fast\");
            });
        };
    </script>
";
        
        $__internal_0d083b37790c6729835fbf1cac2a9285423a567173f65a7c2894863d945b535f->leave($__internal_0d083b37790c6729835fbf1cac2a9285423a567173f65a7c2894863d945b535f_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaPregunta:verPreguntaPop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 112,  254 => 111,  247 => 109,  241 => 108,  229 => 102,  222 => 97,  219 => 96,  209 => 93,  204 => 92,  202 => 91,  198 => 90,  194 => 89,  175 => 73,  167 => 68,  159 => 63,  151 => 58,  143 => 53,  135 => 48,  127 => 43,  119 => 38,  111 => 33,  97 => 21,  95 => 20,  84 => 11,  78 => 10,  70 => 7,  64 => 6,  57 => 5,  51 => 4,  39 => 3,  11 => 1,);
    }
}
