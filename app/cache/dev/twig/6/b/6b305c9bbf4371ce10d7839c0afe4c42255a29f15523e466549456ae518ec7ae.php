<?php

/* UciAsistenteAcademicaBundle:VistaPregunta:verPregunta.html.twig */
class __TwigTemplate_6b305c9bbf4371ce10d7839c0afe4c42255a29f15523e466549456ae518ec7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaPregunta:verPregunta.html.twig", 1);
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
        $__internal_27a7082a017a844bae52a51d60cec4851a5f0b3dee61ee0654862a775cd3ccfb = $this->env->getExtension("native_profiler");
        $__internal_27a7082a017a844bae52a51d60cec4851a5f0b3dee61ee0654862a775cd3ccfb->enter($__internal_27a7082a017a844bae52a51d60cec4851a5f0b3dee61ee0654862a775cd3ccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaPregunta:verPregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a7082a017a844bae52a51d60cec4851a5f0b3dee61ee0654862a775cd3ccfb->leave($__internal_27a7082a017a844bae52a51d60cec4851a5f0b3dee61ee0654862a775cd3ccfb_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b1bbb3cd53e7b3187a9df845cba2f2d61670aeea572d827cdc21b91a55bc8817 = $this->env->getExtension("native_profiler");
        $__internal_b1bbb3cd53e7b3187a9df845cba2f2d61670aeea572d827cdc21b91a55bc8817->enter($__internal_b1bbb3cd53e7b3187a9df845cba2f2d61670aeea572d827cdc21b91a55bc8817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_b1bbb3cd53e7b3187a9df845cba2f2d61670aeea572d827cdc21b91a55bc8817->leave($__internal_b1bbb3cd53e7b3187a9df845cba2f2d61670aeea572d827cdc21b91a55bc8817_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_70d1255777e846cd625bd286ceae53737dec22462f8afa5839a56d823494c072 = $this->env->getExtension("native_profiler");
        $__internal_70d1255777e846cd625bd286ceae53737dec22462f8afa5839a56d823494c072->enter($__internal_70d1255777e846cd625bd286ceae53737dec22462f8afa5839a56d823494c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "\">Listado de Cuestionarios</a></li>
            <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_ver_cuestionario", array("id" => (isset($context["idCuestionario"]) ? $context["idCuestionario"] : $this->getContext($context, "idCuestionario")))), "html", null, true);
        echo "\">Ver cuestionario</a></li>
            <li class=\"active\">Ver Pregunta</li>
        </ol>
        <form>             

            <div class=\"row\">
                <!-- Sidebar -->
                <aside class=\"col-md-4 sidebar sidebar-left\">
                    ";
        // line 22
        $this->loadTemplate("UciAsistenteAcademicaBundle:Menus:mantenimientoCuestionario.html.twig", "UciAsistenteAcademicaBundle:VistaPregunta:verPregunta.html.twig", 22)->display($context);
        // line 23
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
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "nombre", array()), "html", null, true);
        echo "</h3>
                                <hr>

                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'row');
        echo "
                                    </div><div class=\"imagenCargando\"></div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPagina", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 75
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
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoRespuesta", array()), "explicacion", array()), "html", null, true);
        echo "</p><hr></div>
                <ul id=\"respuestas\" data-prototype=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 93
        ob_start();
        // line 94
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 95
            echo "                            <li> ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["respuesta"], 'row');
            echo "
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 99
        echo "                </ul>
                <br><br>

            </div>
            <br>
            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>\t<!-- /container -->

";
        
        $__internal_70d1255777e846cd625bd286ceae53737dec22462f8afa5839a56d823494c072->leave($__internal_70d1255777e846cd625bd286ceae53737dec22462f8afa5839a56d823494c072_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0013af155f39266c6b0bd773daaedc989d28df8c184d4c8f2dcece4aebf453d1 = $this->env->getExtension("native_profiler");
        $__internal_0013af155f39266c6b0bd773daaedc989d28df8c184d4c8f2dcece4aebf453d1->enter($__internal_0013af155f39266c6b0bd773daaedc989d28df8c184d4c8f2dcece4aebf453d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
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
        
        $__internal_0013af155f39266c6b0bd773daaedc989d28df8c184d4c8f2dcece4aebf453d1->leave($__internal_0013af155f39266c6b0bd773daaedc989d28df8c184d4c8f2dcece4aebf453d1_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaPregunta:verPregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 111,  227 => 110,  215 => 104,  208 => 99,  205 => 98,  195 => 95,  190 => 94,  188 => 93,  184 => 92,  180 => 91,  161 => 75,  153 => 70,  145 => 65,  137 => 60,  129 => 55,  121 => 50,  113 => 45,  105 => 40,  97 => 35,  83 => 23,  81 => 22,  70 => 14,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
