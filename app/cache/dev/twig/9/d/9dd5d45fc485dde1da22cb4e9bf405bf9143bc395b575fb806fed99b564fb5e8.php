<?php

/* UciAsistenteAcademicaBundle:VistaSolicitud:indiceSolicitud.html.twig */
class __TwigTemplate_9dd5d45fc485dde1da22cb4e9bf405bf9143bc395b575fb806fed99b564fb5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAsistenteAcademicaBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaSolicitud:indiceSolicitud.html.twig", 1);
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
        $__internal_5e35a59c5b2d167d230a5fa365cc207c41fd44e32f8abf613605d2ace2b641ab = $this->env->getExtension("native_profiler");
        $__internal_5e35a59c5b2d167d230a5fa365cc207c41fd44e32f8abf613605d2ace2b641ab->enter($__internal_5e35a59c5b2d167d230a5fa365cc207c41fd44e32f8abf613605d2ace2b641ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaSolicitud:indiceSolicitud.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e35a59c5b2d167d230a5fa365cc207c41fd44e32f8abf613605d2ace2b641ab->leave($__internal_5e35a59c5b2d167d230a5fa365cc207c41fd44e32f8abf613605d2ace2b641ab_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ebc823a2894d1705e35dca68c2c45b3e4c4d683805c35f837630c1890213dd5a = $this->env->getExtension("native_profiler");
        $__internal_ebc823a2894d1705e35dca68c2c45b3e4c4d683805c35f837630c1890213dd5a->enter($__internal_ebc823a2894d1705e35dca68c2c45b3e4c4d683805c35f837630c1890213dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_ebc823a2894d1705e35dca68c2c45b3e4c4d683805c35f837630c1890213dd5a->leave($__internal_ebc823a2894d1705e35dca68c2c45b3e4c4d683805c35f837630c1890213dd5a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bf78757ade55d3e822f7c8525a6647a91967c9940ef199dacbca92ba1a921a4 = $this->env->getExtension("native_profiler");
        $__internal_8bf78757ade55d3e822f7c8525a6647a91967c9940ef199dacbca92ba1a921a4->enter($__internal_8bf78757ade55d3e822f7c8525a6647a91967c9940ef199dacbca92ba1a921a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Solicitudes</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAsistenteAcademicaBundle:Menus:mantenimientoInicio.html.twig", "UciAsistenteAcademicaBundle:VistaSolicitud:indiceSolicitud.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Ver solicitudes</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicesolicitudes");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"col-sm-12\">
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        <label>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
        echo "</label><br>
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
        echo "
                                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                                    </div>
                                </div>
                                <br><br>
                            </div>
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </form>
                    </div>
                </div>

                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
        <br><br><br><br>

        <div class=\"row\">

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br>
            <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                <thead>
                    <tr>
                        <th data-hide=\"phone\">
                            Num.
                        </th>
                        <th data-toggle=\"true\">
                            Texto
                        </th>
                        <th data-hide=\"phone\">
                            Activa
                        </th>
                    </tr>
                </thead>
                <tbody> 
                    ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 77
            echo "                        <tr>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textosolicitud", array()), "html", null, true);
            echo "</td>
                            ";
            // line 80
            if (($this->getAttribute($context["entity"], "activa", array()) == "1")) {
                // line 81
                echo "                                <td>
                                    <label class=\"switch\">
                                        <input type=\"checkbox\" class=\"switch-input\" id=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" checked>
                                        <span class=\"switch-label\" data-on=\"Si\" data-off=\"No\"></span>
                                        <span class=\"switch-handle\"></span>
                                    </label>
                                </td>
                            ";
            } else {
                // line 89
                echo "                                <td>
                                    <label class=\"switch\">
                                        <input type=\"checkbox\" class=\"switch-input\" id=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">
                                        <span class=\"switch-label\" data-on=\"Si\" data-off=\"No\"></span>
                                        <span class=\"switch-handle\"></span>
                                    </label>
                                </td>
                            ";
            }
            // line 97
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                </tbody>
            </table>

            <br><br>

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_8bf78757ade55d3e822f7c8525a6647a91967c9940ef199dacbca92ba1a921a4->leave($__internal_8bf78757ade55d3e822f7c8525a6647a91967c9940ef199dacbca92ba1a921a4_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a0b9ddd1b28f2b971e8fae1341ee2489f9a68365dfbc38ab8265171c72bb5b9 = $this->env->getExtension("native_profiler");
        $__internal_1a0b9ddd1b28f2b971e8fae1341ee2489f9a68365dfbc38ab8265171c72bb5b9->enter($__internal_1a0b9ddd1b28f2b971e8fae1341ee2489f9a68365dfbc38ab8265171c72bb5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {

            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            });

            \$(':checkbox').change(function () {
                var idSolicitud = \$(this).attr(\"id\");
                if (\$(this).is(\":checked\")) {
                    var estado = 1;
                } else {
                    var estado = 0;
                }
                \$.ajax({
                    url: \"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_editsolicitud");
        echo "\",
                    type: \"POST\",
                    data: {idSolicitud: idSolicitud, estado: estado},
                    success: function (data) {
                        if (!isNaN(data.resultado)) {
                            if (data.resultado == \"0\") {
                                \$(\"#notification_count\").fadeOut(\"slow\");
                                return false;
                            } else {
                                \$(\"#notification_count\").removeClass(\"hidden\");
                                document.getElementById(\"notification_count\").innerHTML = data.resultado;
                                return false;
                            }
                        } else {
                            document.getElementById(\"notification_count\").innerHTML = \"0\";
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {

                    }
                });
            });
        };
    </script>
";
        
        $__internal_1a0b9ddd1b28f2b971e8fae1341ee2489f9a68365dfbc38ab8265171c72bb5b9->leave($__internal_1a0b9ddd1b28f2b971e8fae1341ee2489f9a68365dfbc38ab8265171c72bb5b9_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaSolicitud:indiceSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 127,  219 => 111,  213 => 110,  197 => 99,  190 => 97,  181 => 91,  177 => 89,  168 => 83,  164 => 81,  162 => 80,  158 => 79,  154 => 78,  151 => 77,  147 => 76,  110 => 42,  102 => 37,  98 => 36,  94 => 35,  87 => 31,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
