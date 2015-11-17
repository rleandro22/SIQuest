<?php

/* UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_bb6a6bfe7f212f6632fdaa129009dbf6b3778cd0f9d2ca1c7c4d04bde4942379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_abfe7e68527135426c2a276c80885cc568ed48b413795c481ab050a8ee69943b' => array($this, 'block___internal_abfe7e68527135426c2a276c80885cc568ed48b413795c481ab050a8ee69943b'),
            '__internal_421234d47807be4754e1af1ae74de582240ec5b5b923e6ade5533d5c4894576a' => array($this, 'block___internal_421234d47807be4754e1af1ae74de582240ec5b5b923e6ade5533d5c4894576a'),
            '__internal_a31912d1958b332541ae8b8ebd7dd883959d3b3321850fffde07ad5ae36b4df7' => array($this, 'block___internal_a31912d1958b332541ae8b8ebd7dd883959d3b3321850fffde07ad5ae36b4df7'),
            '__internal_bffd7de70c507271341e85dd0182612fa85a1da812d784dae6d603ea609ca2c2' => array($this, 'block___internal_bffd7de70c507271341e85dd0182612fa85a1da812d784dae6d603ea609ca2c2'),
            '__internal_9b6728f64a70f296e4244356967651514655db00a6b5d5838d35358538a7e968' => array($this, 'block___internal_9b6728f64a70f296e4244356967651514655db00a6b5d5838d35358538a7e968'),
            '__internal_4d6145f49c4c36bb731aa2fab851b12b9a0485832e8b7938b3cbaf8a56c8b7c8' => array($this, 'block___internal_4d6145f49c4c36bb731aa2fab851b12b9a0485832e8b7938b3cbaf8a56c8b7c8'),
            '__internal_152913c5ffa576c6ef47ca90f578bd07b7a6627542b23047dcd3f56b30c04a48' => array($this, 'block___internal_152913c5ffa576c6ef47ca90f578bd07b7a6627542b23047dcd3f56b30c04a48'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb956b52a3a6ff88d21929b4abd577dabf2a5b039e19c5ce514e434c2952e2b5 = $this->env->getExtension("native_profiler");
        $__internal_bb956b52a3a6ff88d21929b4abd577dabf2a5b039e19c5ce514e434c2952e2b5->enter($__internal_bb956b52a3a6ff88d21929b4abd577dabf2a5b039e19c5ce514e434c2952e2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb956b52a3a6ff88d21929b4abd577dabf2a5b039e19c5ce514e434c2952e2b5->leave($__internal_bb956b52a3a6ff88d21929b4abd577dabf2a5b039e19c5ce514e434c2952e2b5_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_4839ff37cb66a1a779fad64aa114d04515f6c9a42c32d4ee889c7b65b859d314 = $this->env->getExtension("native_profiler");
        $__internal_4839ff37cb66a1a779fad64aa114d04515f6c9a42c32d4ee889c7b65b859d314->enter($__internal_4839ff37cb66a1a779fad64aa114d04515f6c9a42c32d4ee889c7b65b859d314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_4839ff37cb66a1a779fad64aa114d04515f6c9a42c32d4ee889c7b65b859d314->leave($__internal_4839ff37cb66a1a779fad64aa114d04515f6c9a42c32d4ee889c7b65b859d314_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d171d9cc9a931ff2c1a04deb5706ce376f9394bc16944bc0662e47e5bb1f4ef2 = $this->env->getExtension("native_profiler");
        $__internal_d171d9cc9a931ff2c1a04deb5706ce376f9394bc16944bc0662e47e5bb1f4ef2->enter($__internal_d171d9cc9a931ff2c1a04deb5706ce376f9394bc16944bc0662e47e5bb1f4ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Generar cuestionarios</h1>
                </header>
                <br>
                <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\" id=\"formularioCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuestionarioname", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadPreguntas", array()), 'row');
        echo "
                        </div>
                    </div>
                    <h3>Parámetros</h3>
                    <div id=\"libros\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 40
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_abfe7e68527135426c2a276c80885cc568ed48b413795c481ab050a8ee69943b", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_421234d47807be4754e1af1ae74de582240ec5b5b923e6ade5533d5c4894576a", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a31912d1958b332541ae8b8ebd7dd883959d3b3321850fffde07ad5ae36b4df7", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_bffd7de70c507271341e85dd0182612fa85a1da812d784dae6d603ea609ca2c2", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9b6728f64a70f296e4244356967651514655db00a6b5d5838d35358538a7e968", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_4d6145f49c4c36bb731aa2fab851b12b9a0485832e8b7938b3cbaf8a56c8b7c8", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_152913c5ffa576c6ef47ca90f578bd07b7a6627542b23047dcd3f56b30c04a48", $context, $blocks));
        // line 72
        echo "\">
                    </div>
                    <br>
                    <div class=\"dropdown\">
                        <a data-toggle=\"dropdown\" href=\"#\" id=\"area_link\">Añadir parámetro</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 5);\">Libro</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 0);\">A. Conocimiento</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 1);\">G. Procesos</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 2);\">T. Talento</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 3);\">T. Prueba</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 4);\">T. Respuesta</a></li>
                            <li><a href=\"#\" onclick=\"agregarFormParametro(event, 6);\">P. Conjunto</a></li>
                        </ul>
                    </div>   
                    <br><br><br>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">                     
                        </div>
                        <div class=\"col-lg-2 text-right\">
                            <button class=\"btn btn-bg\" type=\"button\" onclick=\"verificarParametros();\">Verificar</button>
                        </div>
                        <div class=\"col-lg-1 text-right\"></div>
                        <div class=\"col-lg-2 text-right\">
                            <button class=\"btn btn-action\" id=\"enviar\" type=\"submit\">Generar</button>
                        </div>
                    </div>
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>





            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row top-space\">

            <br><br>




            <br><br>
        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_d171d9cc9a931ff2c1a04deb5706ce376f9394bc16944bc0662e47e5bb1f4ef2->leave($__internal_d171d9cc9a931ff2c1a04deb5706ce376f9394bc16944bc0662e47e5bb1f4ef2_prof);

    }

    // line 40
    public function block___internal_abfe7e68527135426c2a276c80885cc568ed48b413795c481ab050a8ee69943b($context, array $blocks = array())
    {
        $__internal_bc0b19f3df6112bdff79e6bb24266823f53ca0b4658ef078ebb80d9a7cd16a85 = $this->env->getExtension("native_profiler");
        $__internal_bc0b19f3df6112bdff79e6bb24266823f53ca0b4658ef078ebb80d9a7cd16a85->enter($__internal_bc0b19f3df6112bdff79e6bb24266823f53ca0b4658ef078ebb80d9a7cd16a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_abfe7e68527135426c2a276c80885cc568ed48b413795c481ab050a8ee69943b"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_bc0b19f3df6112bdff79e6bb24266823f53ca0b4658ef078ebb80d9a7cd16a85->leave($__internal_bc0b19f3df6112bdff79e6bb24266823f53ca0b4658ef078ebb80d9a7cd16a85_prof);

    }

    // line 45
    public function block___internal_421234d47807be4754e1af1ae74de582240ec5b5b923e6ade5533d5c4894576a($context, array $blocks = array())
    {
        $__internal_66b9a26c7fcb6787d092bdfd6a5afc1d89dd70d5c846140f33a8a4de2483104a = $this->env->getExtension("native_profiler");
        $__internal_66b9a26c7fcb6787d092bdfd6a5afc1d89dd70d5c846140f33a8a4de2483104a->enter($__internal_66b9a26c7fcb6787d092bdfd6a5afc1d89dd70d5c846140f33a8a4de2483104a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_421234d47807be4754e1af1ae74de582240ec5b5b923e6ade5533d5c4894576a"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_66b9a26c7fcb6787d092bdfd6a5afc1d89dd70d5c846140f33a8a4de2483104a->leave($__internal_66b9a26c7fcb6787d092bdfd6a5afc1d89dd70d5c846140f33a8a4de2483104a_prof);

    }

    // line 50
    public function block___internal_a31912d1958b332541ae8b8ebd7dd883959d3b3321850fffde07ad5ae36b4df7($context, array $blocks = array())
    {
        $__internal_1970be8c73d3105cbc1094e602f40a2a02d1ed2771c3ff92295ae233d47640dd = $this->env->getExtension("native_profiler");
        $__internal_1970be8c73d3105cbc1094e602f40a2a02d1ed2771c3ff92295ae233d47640dd->enter($__internal_1970be8c73d3105cbc1094e602f40a2a02d1ed2771c3ff92295ae233d47640dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_a31912d1958b332541ae8b8ebd7dd883959d3b3321850fffde07ad5ae36b4df7"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_1970be8c73d3105cbc1094e602f40a2a02d1ed2771c3ff92295ae233d47640dd->leave($__internal_1970be8c73d3105cbc1094e602f40a2a02d1ed2771c3ff92295ae233d47640dd_prof);

    }

    // line 55
    public function block___internal_bffd7de70c507271341e85dd0182612fa85a1da812d784dae6d603ea609ca2c2($context, array $blocks = array())
    {
        $__internal_e548920541b774d9c975ec9436b27821005f678c3f9e6e163c2ec29af774059d = $this->env->getExtension("native_profiler");
        $__internal_e548920541b774d9c975ec9436b27821005f678c3f9e6e163c2ec29af774059d->enter($__internal_e548920541b774d9c975ec9436b27821005f678c3f9e6e163c2ec29af774059d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_bffd7de70c507271341e85dd0182612fa85a1da812d784dae6d603ea609ca2c2"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_e548920541b774d9c975ec9436b27821005f678c3f9e6e163c2ec29af774059d->leave($__internal_e548920541b774d9c975ec9436b27821005f678c3f9e6e163c2ec29af774059d_prof);

    }

    // line 60
    public function block___internal_9b6728f64a70f296e4244356967651514655db00a6b5d5838d35358538a7e968($context, array $blocks = array())
    {
        $__internal_784e8159b0e4c236461f045607ba43879a3f2b1e914807f47ed3df39aec9c61f = $this->env->getExtension("native_profiler");
        $__internal_784e8159b0e4c236461f045607ba43879a3f2b1e914807f47ed3df39aec9c61f->enter($__internal_784e8159b0e4c236461f045607ba43879a3f2b1e914807f47ed3df39aec9c61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9b6728f64a70f296e4244356967651514655db00a6b5d5838d35358538a7e968"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_784e8159b0e4c236461f045607ba43879a3f2b1e914807f47ed3df39aec9c61f->leave($__internal_784e8159b0e4c236461f045607ba43879a3f2b1e914807f47ed3df39aec9c61f_prof);

    }

    // line 65
    public function block___internal_4d6145f49c4c36bb731aa2fab851b12b9a0485832e8b7938b3cbaf8a56c8b7c8($context, array $blocks = array())
    {
        $__internal_fff2f238e7b3ba70e75bd3bcb98421c340372b2503715110d211b340898965f2 = $this->env->getExtension("native_profiler");
        $__internal_fff2f238e7b3ba70e75bd3bcb98421c340372b2503715110d211b340898965f2->enter($__internal_fff2f238e7b3ba70e75bd3bcb98421c340372b2503715110d211b340898965f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_4d6145f49c4c36bb731aa2fab851b12b9a0485832e8b7938b3cbaf8a56c8b7c8"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_fff2f238e7b3ba70e75bd3bcb98421c340372b2503715110d211b340898965f2->leave($__internal_fff2f238e7b3ba70e75bd3bcb98421c340372b2503715110d211b340898965f2_prof);

    }

    // line 70
    public function block___internal_152913c5ffa576c6ef47ca90f578bd07b7a6627542b23047dcd3f56b30c04a48($context, array $blocks = array())
    {
        $__internal_41942812451c278a35ababa5014e4faed52596db73e5f7d7698dbf30323555f8 = $this->env->getExtension("native_profiler");
        $__internal_41942812451c278a35ababa5014e4faed52596db73e5f7d7698dbf30323555f8->enter($__internal_41942812451c278a35ababa5014e4faed52596db73e5f7d7698dbf30323555f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_152913c5ffa576c6ef47ca90f578bd07b7a6627542b23047dcd3f56b30c04a48"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_41942812451c278a35ababa5014e4faed52596db73e5f7d7698dbf30323555f8->leave($__internal_41942812451c278a35ababa5014e4faed52596db73e5f7d7698dbf30323555f8_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c61db1f1b713a36b0de7c3b708a031d3787dfc5b5bbb4a45b42aa9a6d82fc93b = $this->env->getExtension("native_profiler");
        $__internal_c61db1f1b713a36b0de7c3b708a031d3787dfc5b5bbb4a45b42aa9a6d82fc93b->enter($__internal_c61db1f1b713a36b0de7c3b708a031d3787dfc5b5bbb4a45b42aa9a6d82fc93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        function verificarParametros() {
            \$.ajax({
                type: \$(\"#formularioCuestionario\").attr('method'),
                url: \$(\"#formularioCuestionario\").attr('action'),
                data: \$(\"#formularioCuestionario\").serialize(),
                dataType: \"json\",
                success: function (data) {

                },
                error: function () {
                    alert(\"Ocurrio un error.\");
                }
            });
        }
        function addParametro(tipo) {
            var collectionHolder;
            switch (tipo) {
                case 0:
                    collectionHolder = \$('#areas');
                    break;
                case 1:
                    collectionHolder = \$('#grupos');
                    break;
                case 2:
                    collectionHolder = \$('#triangulos');
                    break;
                case 3:
                    collectionHolder = \$('#tipospruebas');
                    break;
                case 4:
                    collectionHolder = \$('#tiposrespuestas');
                    break;
                case 5:
                    collectionHolder = \$('#libros');
                    break;
                case 6:
                    collectionHolder = \$('#conjuntos');
                    break;
            }
            var prototype = collectionHolder.attr('data-prototype');
            var form = prototype.replace(/__name__/g, collectionHolder.children().length); //importante
            var removeFormA = \$('<a href=\"#\" onclick=\"addTagFormDeleteLink(event, this); \"><span class=\"navigationSpace glyphicon glyphicon-remove\" style=\"color: red; font-size:180%\" ></span></a>');
            var newTr = \$('<div class=\"row top-margin\"></div>');
            newTr.append(form);
            newTr.append(removeFormA);
            collectionHolder.append(newTr);
            return prototype;
        }
        function addTagFormDeleteLink(e, elemento) {
            e.preventDefault();
            var removeFormA = elemento.parentNode;
            removeFormA.remove();
        }
        function agregarFormParametro(e, tipo) {
            e.preventDefault();
            addParametro(tipo);
            eventoSelectLibro();
        }

        function eventoSelectLibro() {
            \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_parametroConjunto_'][id \$='libro']\").change(function () {
                var numeroForm = \$(this).attr('id').substring(58, 59);
                var \$capitulo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_capitulo');
                var \$area_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_areaConocimiento');
                var \$grupo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_grupoProcesos');
                var \$triangulo_selector = \$('#uci_bundle_basedatosbundle_cuestionario_parametroConjunto_' + numeroForm + '_trianguloTalento');
                \$capitulo_selector.html('<option></option>');
                \$area_selector.html('<option></option>');
                \$grupo_selector.html('<option></option>');
                \$triangulo_selector.html('<option></option>');
                //var idLibro = \$(this).val();
                var idLibro = (\$(this).val()) ? \$(this).val() : 0;
                \$.ajax({
                    url: \"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("uci_administrador_setearlibroscuestionario");
        echo "\",
                    type: \"POST\",
                    data: {idLibro: idLibro},
                    success: function (data) {
                        //alert(JSON.stringify(data));
                        \$capitulo_selector.html('<option></option>');
                        if (data.capitulos.id != \"0\") {
                            for (var i = 0, total = data.capitulos.length; i < total; i++) {
                                \$capitulo_selector.append('<option value=\"' + data.capitulos[i].id + '\">' + data.capitulos[i].nombreCapitulo + '</option>');
                            }
                        }
                        \$area_selector.html('<option></option>');
                        if (data.areas.id != \"0\") {
                            for (var i = 0, total = data.areas.length; i < total; i++) {
                                \$area_selector.append('<option value=\"' + data.areas[i].id + '\">' + data.areas[i].nombreArea + '</option>');
                            }
                        }
                        \$grupo_selector.html('<option></option>');
                        if (data.grupos.id != \"0\") {
                            for (var i = 0, total = data.grupos.length; i < total; i++) {
                                \$grupo_selector.append('<option value=\"' + data.grupos[i].id + '\">' + data.grupos[i].nombreGrupo + '</option>');
                            }
                        }
                        \$triangulo_selector.html('<option></option>');
                        if (data.triangulos.id != \"0\") {
                            for (var i = 0, total = data.triangulos.length; i < total; i++) {
                                \$triangulo_selector.append('<option value=\"' + data.triangulos[i].id + '\">' + data.triangulos[i].nombreTalento + '</option>');
                            }
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert('Ocurrio un error');
                    }
                });

            });
        }
        document.ready = function () {
            \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').keydown(function (e) {
                if (e.which != '8' && e.which != '46') {
                    str = \$(this).val();
                    str = str.replace(/\\s/g, '');
                    \$(this).val(str);
                }
            });
            \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').bind('input', function (e) {
                var \$valor = \$(this).val();
                \$valor = \$valor.replace(/\\s/g, \"\");
                \$(this).val(\$valor);
            });
            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            }
            );
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
        
        $__internal_c61db1f1b713a36b0de7c3b708a031d3787dfc5b5bbb4a45b42aa9a6d82fc93b->leave($__internal_c61db1f1b713a36b0de7c3b708a031d3787dfc5b5bbb4a45b42aa9a6d82fc93b_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 203,  337 => 128,  331 => 127,  321 => 71,  315 => 70,  305 => 66,  299 => 65,  289 => 61,  283 => 60,  273 => 56,  267 => 55,  257 => 51,  251 => 50,  241 => 46,  235 => 45,  225 => 41,  219 => 40,  185 => 99,  156 => 72,  154 => 70,  149 => 67,  147 => 65,  142 => 62,  140 => 60,  135 => 57,  133 => 55,  128 => 52,  126 => 50,  121 => 47,  119 => 45,  114 => 42,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
