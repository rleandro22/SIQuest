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
            '__internal_164a6bb59e1494467ab30146abf870719bcfe11aca436772c18dafb385a14adf' => array($this, 'block___internal_164a6bb59e1494467ab30146abf870719bcfe11aca436772c18dafb385a14adf'),
            '__internal_0c32d8ffbe9b431290a59f8960340ee664c6906b32c5f00d0afd42046b7a4e74' => array($this, 'block___internal_0c32d8ffbe9b431290a59f8960340ee664c6906b32c5f00d0afd42046b7a4e74'),
            '__internal_53a6dca98b85ff8a178d2a2b49946d9f9569e8083b673d806e9a235a0c66697c' => array($this, 'block___internal_53a6dca98b85ff8a178d2a2b49946d9f9569e8083b673d806e9a235a0c66697c'),
            '__internal_8385ab2feaea13bc9a8aeb854a354abe66ab8dc58d671f4ca8510f0cad6d5832' => array($this, 'block___internal_8385ab2feaea13bc9a8aeb854a354abe66ab8dc58d671f4ca8510f0cad6d5832'),
            '__internal_d3fe4a3dc9cf73001fdfc3c203a4815a5fb3cec9b70ffe7d5a84e454a979ae46' => array($this, 'block___internal_d3fe4a3dc9cf73001fdfc3c203a4815a5fb3cec9b70ffe7d5a84e454a979ae46'),
            '__internal_f0d419656f2e3e7bb3ef9f8869b4b06872a0f17460a13708c54b8b94498a074f' => array($this, 'block___internal_f0d419656f2e3e7bb3ef9f8869b4b06872a0f17460a13708c54b8b94498a074f'),
            '__internal_d1b96f02e6673b0b761a31e57fbefef7aa491af734d9ccfc301da4e97efe3583' => array($this, 'block___internal_d1b96f02e6673b0b761a31e57fbefef7aa491af734d9ccfc301da4e97efe3583'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d3f21c8cd637eff324436823a1a7a8fadc5a60c5cb77093e421244cab4d2995 = $this->env->getExtension("native_profiler");
        $__internal_8d3f21c8cd637eff324436823a1a7a8fadc5a60c5cb77093e421244cab4d2995->enter($__internal_8d3f21c8cd637eff324436823a1a7a8fadc5a60c5cb77093e421244cab4d2995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3f21c8cd637eff324436823a1a7a8fadc5a60c5cb77093e421244cab4d2995->leave($__internal_8d3f21c8cd637eff324436823a1a7a8fadc5a60c5cb77093e421244cab4d2995_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3faeaabe42355f5bc508d1fbfec48e63374da17248027cbbcefba452f68b18d5 = $this->env->getExtension("native_profiler");
        $__internal_3faeaabe42355f5bc508d1fbfec48e63374da17248027cbbcefba452f68b18d5->enter($__internal_3faeaabe42355f5bc508d1fbfec48e63374da17248027cbbcefba452f68b18d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_3faeaabe42355f5bc508d1fbfec48e63374da17248027cbbcefba452f68b18d5->leave($__internal_3faeaabe42355f5bc508d1fbfec48e63374da17248027cbbcefba452f68b18d5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e27440d61fd53b58bbe0dcdbf3c7dcc61c2247043a13e72a52b091a66a40fcf = $this->env->getExtension("native_profiler");
        $__internal_8e27440d61fd53b58bbe0dcdbf3c7dcc61c2247043a13e72a52b091a66a40fcf->enter($__internal_8e27440d61fd53b58bbe0dcdbf3c7dcc61c2247043a13e72a52b091a66a40fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <div id=\"listaParametros\">
                        <div id=\"libros\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 41
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_164a6bb59e1494467ab30146abf870719bcfe11aca436772c18dafb385a14adf", $context, $blocks));
        // line 43
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 46
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0c32d8ffbe9b431290a59f8960340ee664c6906b32c5f00d0afd42046b7a4e74", $context, $blocks));
        // line 48
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 51
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_53a6dca98b85ff8a178d2a2b49946d9f9569e8083b673d806e9a235a0c66697c", $context, $blocks));
        // line 53
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 56
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8385ab2feaea13bc9a8aeb854a354abe66ab8dc58d671f4ca8510f0cad6d5832", $context, $blocks));
        // line 58
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 61
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d3fe4a3dc9cf73001fdfc3c203a4815a5fb3cec9b70ffe7d5a84e454a979ae46", $context, $blocks));
        // line 63
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 66
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f0d419656f2e3e7bb3ef9f8869b4b06872a0f17460a13708c54b8b94498a074f", $context, $blocks));
        // line 68
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 71
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d1b96f02e6673b0b761a31e57fbefef7aa491af734d9ccfc301da4e97efe3583", $context, $blocks));
        // line 73
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
                    </div> 
                    <br><br><br>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">                     
                        </div>
                        <div class=\"col-lg-1 text-right\"></div>
                        <div class=\"col-lg-2 text-right\">
                            <button class=\"btn btn-action\" id=\"enviar\" type=\"button\">Agregar preguntas</button>
                        </div>
                    </div>
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>





            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row\">

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br><br>
            <div class=\"aleta\">
                <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">

                </table>
            </div>
            </br></br>

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_8e27440d61fd53b58bbe0dcdbf3c7dcc61c2247043a13e72a52b091a66a40fcf->leave($__internal_8e27440d61fd53b58bbe0dcdbf3c7dcc61c2247043a13e72a52b091a66a40fcf_prof);

    }

    // line 41
    public function block___internal_164a6bb59e1494467ab30146abf870719bcfe11aca436772c18dafb385a14adf($context, array $blocks = array())
    {
        $__internal_113dd534cdb570d9fc045103a9fa09b3958d84e9099b82ba312d3c39d6565e78 = $this->env->getExtension("native_profiler");
        $__internal_113dd534cdb570d9fc045103a9fa09b3958d84e9099b82ba312d3c39d6565e78->enter($__internal_113dd534cdb570d9fc045103a9fa09b3958d84e9099b82ba312d3c39d6565e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_164a6bb59e1494467ab30146abf870719bcfe11aca436772c18dafb385a14adf"));

        // line 42
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_113dd534cdb570d9fc045103a9fa09b3958d84e9099b82ba312d3c39d6565e78->leave($__internal_113dd534cdb570d9fc045103a9fa09b3958d84e9099b82ba312d3c39d6565e78_prof);

    }

    // line 46
    public function block___internal_0c32d8ffbe9b431290a59f8960340ee664c6906b32c5f00d0afd42046b7a4e74($context, array $blocks = array())
    {
        $__internal_ae208005b8141021945e81e85eee0b4ac5bf5807a707d92d8e3a0e36ef305920 = $this->env->getExtension("native_profiler");
        $__internal_ae208005b8141021945e81e85eee0b4ac5bf5807a707d92d8e3a0e36ef305920->enter($__internal_ae208005b8141021945e81e85eee0b4ac5bf5807a707d92d8e3a0e36ef305920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0c32d8ffbe9b431290a59f8960340ee664c6906b32c5f00d0afd42046b7a4e74"));

        // line 47
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_ae208005b8141021945e81e85eee0b4ac5bf5807a707d92d8e3a0e36ef305920->leave($__internal_ae208005b8141021945e81e85eee0b4ac5bf5807a707d92d8e3a0e36ef305920_prof);

    }

    // line 51
    public function block___internal_53a6dca98b85ff8a178d2a2b49946d9f9569e8083b673d806e9a235a0c66697c($context, array $blocks = array())
    {
        $__internal_c2a229735e28d7c60b6fc3d6d70cb826f86d7de737d2b46f244ecbb417ab48a8 = $this->env->getExtension("native_profiler");
        $__internal_c2a229735e28d7c60b6fc3d6d70cb826f86d7de737d2b46f244ecbb417ab48a8->enter($__internal_c2a229735e28d7c60b6fc3d6d70cb826f86d7de737d2b46f244ecbb417ab48a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_53a6dca98b85ff8a178d2a2b49946d9f9569e8083b673d806e9a235a0c66697c"));

        // line 52
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_c2a229735e28d7c60b6fc3d6d70cb826f86d7de737d2b46f244ecbb417ab48a8->leave($__internal_c2a229735e28d7c60b6fc3d6d70cb826f86d7de737d2b46f244ecbb417ab48a8_prof);

    }

    // line 56
    public function block___internal_8385ab2feaea13bc9a8aeb854a354abe66ab8dc58d671f4ca8510f0cad6d5832($context, array $blocks = array())
    {
        $__internal_bf58399dea4c37d384daafe2e7b112725cab605c3be208aa143f7e6b967d73ee = $this->env->getExtension("native_profiler");
        $__internal_bf58399dea4c37d384daafe2e7b112725cab605c3be208aa143f7e6b967d73ee->enter($__internal_bf58399dea4c37d384daafe2e7b112725cab605c3be208aa143f7e6b967d73ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_8385ab2feaea13bc9a8aeb854a354abe66ab8dc58d671f4ca8510f0cad6d5832"));

        // line 57
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_bf58399dea4c37d384daafe2e7b112725cab605c3be208aa143f7e6b967d73ee->leave($__internal_bf58399dea4c37d384daafe2e7b112725cab605c3be208aa143f7e6b967d73ee_prof);

    }

    // line 61
    public function block___internal_d3fe4a3dc9cf73001fdfc3c203a4815a5fb3cec9b70ffe7d5a84e454a979ae46($context, array $blocks = array())
    {
        $__internal_57e25deb21cb20f6b1f6c02d1472782dcfae5ee10b79c6a8c51efaef87044360 = $this->env->getExtension("native_profiler");
        $__internal_57e25deb21cb20f6b1f6c02d1472782dcfae5ee10b79c6a8c51efaef87044360->enter($__internal_57e25deb21cb20f6b1f6c02d1472782dcfae5ee10b79c6a8c51efaef87044360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d3fe4a3dc9cf73001fdfc3c203a4815a5fb3cec9b70ffe7d5a84e454a979ae46"));

        // line 62
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_57e25deb21cb20f6b1f6c02d1472782dcfae5ee10b79c6a8c51efaef87044360->leave($__internal_57e25deb21cb20f6b1f6c02d1472782dcfae5ee10b79c6a8c51efaef87044360_prof);

    }

    // line 66
    public function block___internal_f0d419656f2e3e7bb3ef9f8869b4b06872a0f17460a13708c54b8b94498a074f($context, array $blocks = array())
    {
        $__internal_f0562e35fee0193362ef48d0ef43f6e59dcdb14438c4cedb257305e2aefebe76 = $this->env->getExtension("native_profiler");
        $__internal_f0562e35fee0193362ef48d0ef43f6e59dcdb14438c4cedb257305e2aefebe76->enter($__internal_f0562e35fee0193362ef48d0ef43f6e59dcdb14438c4cedb257305e2aefebe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f0d419656f2e3e7bb3ef9f8869b4b06872a0f17460a13708c54b8b94498a074f"));

        // line 67
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_f0562e35fee0193362ef48d0ef43f6e59dcdb14438c4cedb257305e2aefebe76->leave($__internal_f0562e35fee0193362ef48d0ef43f6e59dcdb14438c4cedb257305e2aefebe76_prof);

    }

    // line 71
    public function block___internal_d1b96f02e6673b0b761a31e57fbefef7aa491af734d9ccfc301da4e97efe3583($context, array $blocks = array())
    {
        $__internal_bc6839461fe861458c9e0c2fbd8d23532359dd87413fb377c0af8b9186c58cf6 = $this->env->getExtension("native_profiler");
        $__internal_bc6839461fe861458c9e0c2fbd8d23532359dd87413fb377c0af8b9186c58cf6->enter($__internal_bc6839461fe861458c9e0c2fbd8d23532359dd87413fb377c0af8b9186c58cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d1b96f02e6673b0b761a31e57fbefef7aa491af734d9ccfc301da4e97efe3583"));

        // line 72
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_bc6839461fe861458c9e0c2fbd8d23532359dd87413fb377c0af8b9186c58cf6->leave($__internal_bc6839461fe861458c9e0c2fbd8d23532359dd87413fb377c0af8b9186c58cf6_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9278b398260598ec3265dbdfe81ec62db2fe9343b8a52b090df12ff2ed2b4a9b = $this->env->getExtension("native_profiler");
        $__internal_9278b398260598ec3265dbdfe81ec62db2fe9343b8a52b090df12ff2ed2b4a9b->enter($__internal_9278b398260598ec3265dbdfe81ec62db2fe9343b8a52b090df12ff2ed2b4a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

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
            deshabilitarNumericos();
            configurarCamposNumericos();
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
                var idLibro = (\$(this).val()) ? \$(this).val() : 0;
                \$.ajax({
                    url: \"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("uci_administrador_setearlibroscuestionario");
        echo "\",
                    type: \"POST\",
                    data: {idLibro: idLibro},
                    success: function (data) {
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

        function configurarCamposNumericos() {
            \$(\"input[id\$='porcentaje']\").numeric();
            \$(\"input[id\$='porcentaje']\").keyup(function (e) {
                if (\$(this).val() != '' && \$(this).val() > 0) {
                    var campoCantidad = \$(this).attr('id').substring(0, \$(this).attr('id').length - 11) + '_cantidad';
                    var porcentaje = (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() * \$(this).val()) / 100;
                    \$(\"#\" + campoCantidad).val(porcentaje);
                    if (Math.round(porcentaje) != porcentaje) {
                        \$(\"#\" + campoCantidad).addClass('inputColoreado');
                    } else {
                        \$(\"#\" + campoCantidad).removeClass('inputColoreado');
                    }
                    if (\$(this).val() > 100) {
                        \$(this).addClass('inputColoreado');
                    } else {
                        \$(this).removeClass('inputColoreado');
                    }
                } else {
                    \$(this).removeClass('inputColoreado');
                    var campoCantidad = \$(this).attr('id').substring(0, \$(this).attr('id').length - 11) + '_cantidad';
                    \$(\"#\" + campoCantidad).val(0);
                    \$(\"#\" + campoCantidad).removeClass('inputColoreado');
                }
            });
            \$(\"input[id\$='cantidad']\").bind('click keyup', function () {
                if (\$(this).val() != '' && \$(this).val() > 0) {
                    var campoPorcentaje = \$(this).attr('id').substring(0, \$(this).attr('id').length - 9) + '_porcentaje';
                    var porcentaje = (100 * \$(this).val()) / \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val();
                    \$(\"#\" + campoPorcentaje).val(porcentaje);
                    if (porcentaje > 100) {
                        \$(\"#\" + campoPorcentaje).addClass('inputColoreado');
                    } else {
                        \$(\"#\" + campoPorcentaje).removeClass('inputColoreado');
                    }
                    if (Math.round(\$(this).val()) != \$(this).val()) {
                        \$(this).addClass('inputColoreado');
                    } else {
                        \$(this).removeClass('inputColoreado');
                    }
                } else {
                    var campoPorcentaje = \$(this).attr('id').substring(0, \$(this).attr('id').length - 9) + '_porcentaje';
                    \$(\"#\" + campoPorcentaje).val(0);
                    \$(\"#\" + campoPorcentaje).removeClass('inputColoreado');
                    \$(this).removeClass('inputColoreado');
                }
            });
        }

        function deshabilitarNumericos() {
            if (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() == '' || \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() < 1) {
                \$(\"input[id\$='porcentaje']\").attr('readonly', true);
                \$(\"input[id\$='cantidad']\").attr('readonly', true);
            } else {
                \$(\"input[id\$='porcentaje']\").attr('readonly', false);
                \$(\"input[id\$='cantidad']\").attr('readonly', false);
            }
        }

        document.ready = function () {

            \$('#enviar').click(function (e) {
                if (\$(\"input[id\$='porcentaje']\").val() && \$(\"input[id\$='cantidad']\").val() && \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_']\").val() && \$(\"input[id\$='cantidad']\").val() > 0) {
                    \$.ajax({
                        type: \$(\"#formularioCuestionario\").attr('method'),
                        url: \$(\"#formularioCuestionario\").attr('action'),
                        data: \$(\"#formularioCuestionario\").serialize(),
                        dataType: \"json\",
                        success: function (data) {
                            alert(JSON.stringify(data));
                        },
                        error: function () {
                            alert(\"Ocurrio un error.\");
                        }
                    });
                } else {
                    alert('Ingrese al menos 1 parametro para generar las preguntas.');
                }
            });

            \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').bind('click keyup', function () {
                deshabilitarNumericos();
            });

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
        
        $__internal_9278b398260598ec3265dbdfe81ec62db2fe9343b8a52b090df12ff2ed2b4a9b->leave($__internal_9278b398260598ec3265dbdfe81ec62db2fe9343b8a52b090df12ff2ed2b4a9b_prof);

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
        return array (  410 => 197,  343 => 134,  337 => 133,  327 => 72,  321 => 71,  311 => 67,  305 => 66,  295 => 62,  289 => 61,  279 => 57,  273 => 56,  263 => 52,  257 => 51,  247 => 47,  241 => 46,  231 => 42,  225 => 41,  184 => 98,  157 => 73,  155 => 71,  150 => 68,  148 => 66,  143 => 63,  141 => 61,  136 => 58,  134 => 56,  129 => 53,  127 => 51,  122 => 48,  120 => 46,  115 => 43,  113 => 41,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
