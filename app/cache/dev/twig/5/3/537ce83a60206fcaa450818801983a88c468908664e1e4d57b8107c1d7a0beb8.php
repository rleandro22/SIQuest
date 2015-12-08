<?php

/* UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_537ce83a60206fcaa450818801983a88c468908664e1e4d57b8107c1d7a0beb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_81059c9b07830fc6ff85a84bed708a5092b31e5606f1436c6d29742a019bcbc7' => array($this, 'block___internal_81059c9b07830fc6ff85a84bed708a5092b31e5606f1436c6d29742a019bcbc7'),
            '__internal_f000f91db4f929e126b13d2227d05fbe9732ba57d8931b330ced0271f8312726' => array($this, 'block___internal_f000f91db4f929e126b13d2227d05fbe9732ba57d8931b330ced0271f8312726'),
            '__internal_c5b666c9cdaf5f15611bdbdf7afdc9410023d648999344259e6c74e4c842363d' => array($this, 'block___internal_c5b666c9cdaf5f15611bdbdf7afdc9410023d648999344259e6c74e4c842363d'),
            '__internal_b32956964cd9c5036f40eeea4a48b23cfcffa7264efb18bde11e68db7728ecc8' => array($this, 'block___internal_b32956964cd9c5036f40eeea4a48b23cfcffa7264efb18bde11e68db7728ecc8'),
            '__internal_43ef3b0c2a23dc378d63626f6ad661a23db278afafaf25f4afecc4e683762a87' => array($this, 'block___internal_43ef3b0c2a23dc378d63626f6ad661a23db278afafaf25f4afecc4e683762a87'),
            '__internal_de44a8c80360d150b4f2569e267e6884f97df58a89decb7df95ba535d02f874e' => array($this, 'block___internal_de44a8c80360d150b4f2569e267e6884f97df58a89decb7df95ba535d02f874e'),
            '__internal_46c14add8406ce968e51c94a12c27454a8c77af689c59b88faa832bc06c3bc26' => array($this, 'block___internal_46c14add8406ce968e51c94a12c27454a8c77af689c59b88faa832bc06c3bc26'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dad217d3c26ea6bbacc5ca215a1373cbb740bae83a3991090156eb5c673ea9e = $this->env->getExtension("native_profiler");
        $__internal_8dad217d3c26ea6bbacc5ca215a1373cbb740bae83a3991090156eb5c673ea9e->enter($__internal_8dad217d3c26ea6bbacc5ca215a1373cbb740bae83a3991090156eb5c673ea9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dad217d3c26ea6bbacc5ca215a1373cbb740bae83a3991090156eb5c673ea9e->leave($__internal_8dad217d3c26ea6bbacc5ca215a1373cbb740bae83a3991090156eb5c673ea9e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0a049040dd192b6199dcbd90f5f4c2f35cbbca53e4e455212261b32634641986 = $this->env->getExtension("native_profiler");
        $__internal_0a049040dd192b6199dcbd90f5f4c2f35cbbca53e4e455212261b32634641986->enter($__internal_0a049040dd192b6199dcbd90f5f4c2f35cbbca53e4e455212261b32634641986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_0a049040dd192b6199dcbd90f5f4c2f35cbbca53e4e455212261b32634641986->leave($__internal_0a049040dd192b6199dcbd90f5f4c2f35cbbca53e4e455212261b32634641986_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_78f2a8aa27f84ea1a7a7f0a64de6e747f4bef34de31d193fa57b2eaafcfde488 = $this->env->getExtension("native_profiler");
        $__internal_78f2a8aa27f84ea1a7a7f0a64de6e747f4bef34de31d193fa57b2eaafcfde488->enter($__internal_78f2a8aa27f84ea1a7a7f0a64de6e747f4bef34de31d193fa57b2eaafcfde488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Listado de Cuestionarios</a></li>
            <li class=\"active\">Nuevo Cuestionario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Generar cuestionarios</h1>
                </header>
                <br>
                <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\" id=\"formularioCuestionario\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuestionarioname", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadPreguntas", array()), 'row');
        echo "
                        </div>
                    </div>
                    <h3>Parámetros</h3>
                    <div id=\"listaParametros\">
                        <div id=\"libros\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 47
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_81059c9b07830fc6ff85a84bed708a5092b31e5606f1436c6d29742a019bcbc7", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f000f91db4f929e126b13d2227d05fbe9732ba57d8931b330ced0271f8312726", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c5b666c9cdaf5f15611bdbdf7afdc9410023d648999344259e6c74e4c842363d", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_b32956964cd9c5036f40eeea4a48b23cfcffa7264efb18bde11e68db7728ecc8", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_43ef3b0c2a23dc378d63626f6ad661a23db278afafaf25f4afecc4e683762a87", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_de44a8c80360d150b4f2569e267e6884f97df58a89decb7df95ba535d02f874e", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_46c14add8406ce968e51c94a12c27454a8c77af689c59b88faa832bc06c3bc26", $context, $blocks));
        // line 79
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
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
                <br><br>





            </article>
            <!-- /Article -->
        </div>


        <br><br>
        <div class=\"row\">
            <br><br>
            <table class=\"table demo table-bordered\" id=\"tablaPreguntas\">


            </table>  
            <br><br>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8\">                     
            </div>
            <div class=\"col-lg-1 text-right\"></div>
            <div class=\"col-lg-2 text-right\">
                <button class=\"btn btn-action hidden\" id=\"guardar\" type=\"button\">Guardar preguntas</button>
            </div>
        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_78f2a8aa27f84ea1a7a7f0a64de6e747f4bef34de31d193fa57b2eaafcfde488->leave($__internal_78f2a8aa27f84ea1a7a7f0a64de6e747f4bef34de31d193fa57b2eaafcfde488_prof);

    }

    // line 47
    public function block___internal_81059c9b07830fc6ff85a84bed708a5092b31e5606f1436c6d29742a019bcbc7($context, array $blocks = array())
    {
        $__internal_01c4d3fa61c7618f801185047805ccd72025482b7d0ebd2eaa993dc350f67b59 = $this->env->getExtension("native_profiler");
        $__internal_01c4d3fa61c7618f801185047805ccd72025482b7d0ebd2eaa993dc350f67b59->enter($__internal_01c4d3fa61c7618f801185047805ccd72025482b7d0ebd2eaa993dc350f67b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_81059c9b07830fc6ff85a84bed708a5092b31e5606f1436c6d29742a019bcbc7"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_01c4d3fa61c7618f801185047805ccd72025482b7d0ebd2eaa993dc350f67b59->leave($__internal_01c4d3fa61c7618f801185047805ccd72025482b7d0ebd2eaa993dc350f67b59_prof);

    }

    // line 52
    public function block___internal_f000f91db4f929e126b13d2227d05fbe9732ba57d8931b330ced0271f8312726($context, array $blocks = array())
    {
        $__internal_9e68b374c74c404041ee2c63aa06469b516c3bf5e9c9e9168a4f1a83678f7925 = $this->env->getExtension("native_profiler");
        $__internal_9e68b374c74c404041ee2c63aa06469b516c3bf5e9c9e9168a4f1a83678f7925->enter($__internal_9e68b374c74c404041ee2c63aa06469b516c3bf5e9c9e9168a4f1a83678f7925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f000f91db4f929e126b13d2227d05fbe9732ba57d8931b330ced0271f8312726"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_9e68b374c74c404041ee2c63aa06469b516c3bf5e9c9e9168a4f1a83678f7925->leave($__internal_9e68b374c74c404041ee2c63aa06469b516c3bf5e9c9e9168a4f1a83678f7925_prof);

    }

    // line 57
    public function block___internal_c5b666c9cdaf5f15611bdbdf7afdc9410023d648999344259e6c74e4c842363d($context, array $blocks = array())
    {
        $__internal_4d4da647f9edd166b16d46d10d89c8d977ec6b7e0dd58514ad81b4802cfe4530 = $this->env->getExtension("native_profiler");
        $__internal_4d4da647f9edd166b16d46d10d89c8d977ec6b7e0dd58514ad81b4802cfe4530->enter($__internal_4d4da647f9edd166b16d46d10d89c8d977ec6b7e0dd58514ad81b4802cfe4530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c5b666c9cdaf5f15611bdbdf7afdc9410023d648999344259e6c74e4c842363d"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_4d4da647f9edd166b16d46d10d89c8d977ec6b7e0dd58514ad81b4802cfe4530->leave($__internal_4d4da647f9edd166b16d46d10d89c8d977ec6b7e0dd58514ad81b4802cfe4530_prof);

    }

    // line 62
    public function block___internal_b32956964cd9c5036f40eeea4a48b23cfcffa7264efb18bde11e68db7728ecc8($context, array $blocks = array())
    {
        $__internal_3e02749bac8be599bc85c2e6e486f61dbcac063d2509a27889d7f15b17915dcc = $this->env->getExtension("native_profiler");
        $__internal_3e02749bac8be599bc85c2e6e486f61dbcac063d2509a27889d7f15b17915dcc->enter($__internal_3e02749bac8be599bc85c2e6e486f61dbcac063d2509a27889d7f15b17915dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_b32956964cd9c5036f40eeea4a48b23cfcffa7264efb18bde11e68db7728ecc8"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_3e02749bac8be599bc85c2e6e486f61dbcac063d2509a27889d7f15b17915dcc->leave($__internal_3e02749bac8be599bc85c2e6e486f61dbcac063d2509a27889d7f15b17915dcc_prof);

    }

    // line 67
    public function block___internal_43ef3b0c2a23dc378d63626f6ad661a23db278afafaf25f4afecc4e683762a87($context, array $blocks = array())
    {
        $__internal_fd9809f8b317663c98e56a922a5395c52c05285bcc9121c4232f8820ec701d8e = $this->env->getExtension("native_profiler");
        $__internal_fd9809f8b317663c98e56a922a5395c52c05285bcc9121c4232f8820ec701d8e->enter($__internal_fd9809f8b317663c98e56a922a5395c52c05285bcc9121c4232f8820ec701d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_43ef3b0c2a23dc378d63626f6ad661a23db278afafaf25f4afecc4e683762a87"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_fd9809f8b317663c98e56a922a5395c52c05285bcc9121c4232f8820ec701d8e->leave($__internal_fd9809f8b317663c98e56a922a5395c52c05285bcc9121c4232f8820ec701d8e_prof);

    }

    // line 72
    public function block___internal_de44a8c80360d150b4f2569e267e6884f97df58a89decb7df95ba535d02f874e($context, array $blocks = array())
    {
        $__internal_771ed4a85f2180cf45479ed3e8c1ff0167f087e9fffc1920fe468b045bc72670 = $this->env->getExtension("native_profiler");
        $__internal_771ed4a85f2180cf45479ed3e8c1ff0167f087e9fffc1920fe468b045bc72670->enter($__internal_771ed4a85f2180cf45479ed3e8c1ff0167f087e9fffc1920fe468b045bc72670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_de44a8c80360d150b4f2569e267e6884f97df58a89decb7df95ba535d02f874e"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_771ed4a85f2180cf45479ed3e8c1ff0167f087e9fffc1920fe468b045bc72670->leave($__internal_771ed4a85f2180cf45479ed3e8c1ff0167f087e9fffc1920fe468b045bc72670_prof);

    }

    // line 77
    public function block___internal_46c14add8406ce968e51c94a12c27454a8c77af689c59b88faa832bc06c3bc26($context, array $blocks = array())
    {
        $__internal_5f36722a7b52c0167accb6e1c7000fe506ad1f730a70cd8f23104bd0229871ee = $this->env->getExtension("native_profiler");
        $__internal_5f36722a7b52c0167accb6e1c7000fe506ad1f730a70cd8f23104bd0229871ee->enter($__internal_5f36722a7b52c0167accb6e1c7000fe506ad1f730a70cd8f23104bd0229871ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_46c14add8406ce968e51c94a12c27454a8c77af689c59b88faa832bc06c3bc26"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_5f36722a7b52c0167accb6e1c7000fe506ad1f730a70cd8f23104bd0229871ee->leave($__internal_5f36722a7b52c0167accb6e1c7000fe506ad1f730a70cd8f23104bd0229871ee_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eab70ac1df5eef0ea74c226a009875b7e79c7e6ce946599bc8c896d4bd961631 = $this->env->getExtension("native_profiler");
        $__internal_eab70ac1df5eef0ea74c226a009875b7e79c7e6ce946599bc8c896d4bd961631->enter($__internal_eab70ac1df5eef0ea74c226a009875b7e79c7e6ce946599bc8c896d4bd961631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
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
        // line 203
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

        function editarPregunta(id) {
            var url = '";
        // line 298
        echo $this->env->getExtension('routing')->getPath("uci_administrador_editarPregunta", array("idPregunta" => "idPreg"));
        echo "';
            url = url.replace(\"idPreg\", id);
            window.open(url, '_blank', \"width=500%, height=500%\", 'toolbar=0,location=0,menubar=0');
            llenarTablaPreguntas();
        }

        function borrarPregunta(obj, e) {
            e.preventDefault();
            var sure = confirm(\"¿Esta seguro que desea realizar el borrado?\\n (Esta operación no es reversible)\");
            if (sure) {
                \$(obj).parent().parent().remove();
                if (\$('#tablaPreguntas tr').length > 0) {
                    \$('#guardar').removeClass('hidden');
                } else {
                    \$('#guardar').addClass('hidden');
                }
            }
        }

        function llenarTablaPreguntas() {
            \$.ajax({
                type: \$(\"#formularioCuestionario\").attr('method'),
                url: \$(\"#formularioCuestionario\").attr('action'),
                data: \$(\"#formularioCuestionario\").serialize(),
                dataType: \"json\",
                success: function (data) {
                    if (data.preguntas.id != \"0\") {
                        var trHTML = '';
                        for (var i = 0, total = data.preguntas.length; i < total; i++) {
                            trHTML += '<tr><td class=\"celdaId\">' + data.preguntas[i].id + '</td><td>' + data.preguntas[i].titulo + '</td><td>&nbsp;&nbsp;&nbsp;<a onclick=\"editarPregunta(' + data.preguntas[i].id + ')\"><span class=\"glyphicon glyphicon-pencil\"></span></a>&nbsp;&nbsp;&nbsp;<a href=\"\" onclick=\"borrarPregunta(this, event);\"><span class=\"glyphicon glyphicon-remove\"></span></a></td></tr>';
                        }
                        \$(\"#tablaPreguntas tr\").remove();
                        \$('#tablaPreguntas').append(trHTML);
                        if (\$('#tablaPreguntas tr').length > 0) {
                            \$('#guardar').removeClass('hidden');
                        } else {
                            \$('#guardar').addClass('hidden');
                        }
                    }
                },
                error: function () {
                    \$('#guardar').removeClass('hidden');
                    alert(\"Ocurrio un error.\");
                }
            });
        }

        document.ready = function () {

            \$('#enviar').click(function (e) {
                if (\$(\"input[id\$='porcentaje']\").val() && \$(\"input[id\$='cantidad']\").val() && \$(\"select[id^='uci_bundle_basedatosbundle_cuestionario_']\").val() && \$(\"input[id\$='cantidad']\").val() > 0) {
                    llenarTablaPreguntas();
                } else {
                    alert('Ingrese al menos 1 parametro para generar las preguntas.');
                }
            });
            \$('#guardar').click(function (e) {
                var nombreCuestionario = \$('#uci_bundle_basedatosbundle_cuestionario_cuestionarioname').val();
                var curso = \$('#uci_bundle_basedatosbundle_cuestionario_curso').val();
                var tbl = \$('#tablaPreguntas tr').map(function () {
                    return \$(this).find('.celdaId').map(function () {
                        return \$(this).text();
                    }).get();
                }).get();
                \$.ajax({
                    url: \"";
        // line 363
        echo $this->env->getExtension('routing')->getPath("uci_administrador_guardarcuestionario");
        echo "\",
                    type: \"POST\",
                    data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                    success: function (data) {
                        if (data.resultado == 1) {
                            window.location.href = \"";
        // line 368
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\";
                        } else {
                            alert('Ocurrio un error');
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert('Ocurrio un error');
                    }
                });
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
        
        $__internal_eab70ac1df5eef0ea74c226a009875b7e79c7e6ce946599bc8c896d4bd961631->leave($__internal_eab70ac1df5eef0ea74c226a009875b7e79c7e6ce946599bc8c896d4bd961631_prof);

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
        return array (  596 => 368,  588 => 363,  520 => 298,  422 => 203,  355 => 140,  349 => 139,  339 => 78,  333 => 77,  323 => 73,  317 => 72,  307 => 68,  301 => 67,  291 => 63,  285 => 62,  275 => 58,  269 => 57,  259 => 53,  253 => 52,  243 => 48,  237 => 47,  196 => 104,  169 => 79,  167 => 77,  162 => 74,  160 => 72,  155 => 69,  153 => 67,  148 => 64,  146 => 62,  141 => 59,  139 => 57,  134 => 54,  132 => 52,  127 => 49,  125 => 47,  116 => 41,  108 => 36,  100 => 31,  94 => 28,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
