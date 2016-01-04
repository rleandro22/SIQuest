<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig */
class __TwigTemplate_ae2cb3d5fd5cdfe95fbd7c56a53893d14a026f2154544dbe616a0e5736f3d7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAsistenteAcademicaBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            '__internal_c0e1828fd5140012ce8bebbd095ab5f8cecd1e7e0d4d5c8ee2a7396a2e73847c' => array($this, 'block___internal_c0e1828fd5140012ce8bebbd095ab5f8cecd1e7e0d4d5c8ee2a7396a2e73847c'),
            '__internal_d47dc0b765ac5ff37f275e59d16b5f8ccc7eee6e3608b24c5fa8e5ab7b04530f' => array($this, 'block___internal_d47dc0b765ac5ff37f275e59d16b5f8ccc7eee6e3608b24c5fa8e5ab7b04530f'),
            '__internal_495877c851c48b74c585d5ea6268e783ceebf9799bb03098d8d5e1bafea00517' => array($this, 'block___internal_495877c851c48b74c585d5ea6268e783ceebf9799bb03098d8d5e1bafea00517'),
            '__internal_27dcbb8f10694c7289389e9fb354663ffd2f93c05ee10220894ed716c208e1dc' => array($this, 'block___internal_27dcbb8f10694c7289389e9fb354663ffd2f93c05ee10220894ed716c208e1dc'),
            '__internal_529e325026073c27949a945990823145960689e02570d4caf2f15b7650297719' => array($this, 'block___internal_529e325026073c27949a945990823145960689e02570d4caf2f15b7650297719'),
            '__internal_37e036740b5644521165961b3fc56ae7eb6ca4ac8d8c5fde718dbe46f3aafa56' => array($this, 'block___internal_37e036740b5644521165961b3fc56ae7eb6ca4ac8d8c5fde718dbe46f3aafa56'),
            '__internal_33dad2c7fcae9f0ddffbca72434db39dbbdc6579775ae0d0f586da6da3e40ab7' => array($this, 'block___internal_33dad2c7fcae9f0ddffbca72434db39dbbdc6579775ae0d0f586da6da3e40ab7'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14f6f8f838632961954862ccb0e617d3fc111c095d18622a9d90acd819ab9b86 = $this->env->getExtension("native_profiler");
        $__internal_14f6f8f838632961954862ccb0e617d3fc111c095d18622a9d90acd819ab9b86->enter($__internal_14f6f8f838632961954862ccb0e617d3fc111c095d18622a9d90acd819ab9b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14f6f8f838632961954862ccb0e617d3fc111c095d18622a9d90acd819ab9b86->leave($__internal_14f6f8f838632961954862ccb0e617d3fc111c095d18622a9d90acd819ab9b86_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_bd18e370f6e279d786af6fc2d609e415ceff676b315f157077e0c27d031eabc9 = $this->env->getExtension("native_profiler");
        $__internal_bd18e370f6e279d786af6fc2d609e415ceff676b315f157077e0c27d031eabc9->enter($__internal_bd18e370f6e279d786af6fc2d609e415ceff676b315f157077e0c27d031eabc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_bd18e370f6e279d786af6fc2d609e415ceff676b315f157077e0c27d031eabc9->leave($__internal_bd18e370f6e279d786af6fc2d609e415ceff676b315f157077e0c27d031eabc9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_104eae3a96b20264310462ed576f1c0a9850d2c36ddd40206f7fddd080835f46 = $this->env->getExtension("native_profiler");
        $__internal_104eae3a96b20264310462ed576f1c0a9850d2c36ddd40206f7fddd080835f46->enter($__internal_104eae3a96b20264310462ed576f1c0a9850d2c36ddd40206f7fddd080835f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li class=\"active\">Nuevo Cuestionario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAsistenteAcademicaBundle:Menus:mantenimientoCuestionario.html.twig", "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig", 19)->display($context);
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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_registrarcuestionario");
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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c0e1828fd5140012ce8bebbd095ab5f8cecd1e7e0d4d5c8ee2a7396a2e73847c", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d47dc0b765ac5ff37f275e59d16b5f8ccc7eee6e3608b24c5fa8e5ab7b04530f", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_495877c851c48b74c585d5ea6268e783ceebf9799bb03098d8d5e1bafea00517", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_27dcbb8f10694c7289389e9fb354663ffd2f93c05ee10220894ed716c208e1dc", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_529e325026073c27949a945990823145960689e02570d4caf2f15b7650297719", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_37e036740b5644521165961b3fc56ae7eb6ca4ac8d8c5fde718dbe46f3aafa56", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_33dad2c7fcae9f0ddffbca72434db39dbbdc6579775ae0d0f586da6da3e40ab7", $context, $blocks));
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
        
        $__internal_104eae3a96b20264310462ed576f1c0a9850d2c36ddd40206f7fddd080835f46->leave($__internal_104eae3a96b20264310462ed576f1c0a9850d2c36ddd40206f7fddd080835f46_prof);

    }

    // line 47
    public function block___internal_c0e1828fd5140012ce8bebbd095ab5f8cecd1e7e0d4d5c8ee2a7396a2e73847c($context, array $blocks = array())
    {
        $__internal_1cf80d85647c6b732e973118576af666f0bf76fd8dbbecaa3a8f2457dfbe6057 = $this->env->getExtension("native_profiler");
        $__internal_1cf80d85647c6b732e973118576af666f0bf76fd8dbbecaa3a8f2457dfbe6057->enter($__internal_1cf80d85647c6b732e973118576af666f0bf76fd8dbbecaa3a8f2457dfbe6057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c0e1828fd5140012ce8bebbd095ab5f8cecd1e7e0d4d5c8ee2a7396a2e73847c"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_1cf80d85647c6b732e973118576af666f0bf76fd8dbbecaa3a8f2457dfbe6057->leave($__internal_1cf80d85647c6b732e973118576af666f0bf76fd8dbbecaa3a8f2457dfbe6057_prof);

    }

    // line 52
    public function block___internal_d47dc0b765ac5ff37f275e59d16b5f8ccc7eee6e3608b24c5fa8e5ab7b04530f($context, array $blocks = array())
    {
        $__internal_28c2fc465405034342cd24d12ed9b15e3621fddd79e57b23049d576b50c35d74 = $this->env->getExtension("native_profiler");
        $__internal_28c2fc465405034342cd24d12ed9b15e3621fddd79e57b23049d576b50c35d74->enter($__internal_28c2fc465405034342cd24d12ed9b15e3621fddd79e57b23049d576b50c35d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d47dc0b765ac5ff37f275e59d16b5f8ccc7eee6e3608b24c5fa8e5ab7b04530f"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_28c2fc465405034342cd24d12ed9b15e3621fddd79e57b23049d576b50c35d74->leave($__internal_28c2fc465405034342cd24d12ed9b15e3621fddd79e57b23049d576b50c35d74_prof);

    }

    // line 57
    public function block___internal_495877c851c48b74c585d5ea6268e783ceebf9799bb03098d8d5e1bafea00517($context, array $blocks = array())
    {
        $__internal_09ea69dd2991aa9f439404dd49e9779507ba283e0d40292a3bd27f59a78ee0b9 = $this->env->getExtension("native_profiler");
        $__internal_09ea69dd2991aa9f439404dd49e9779507ba283e0d40292a3bd27f59a78ee0b9->enter($__internal_09ea69dd2991aa9f439404dd49e9779507ba283e0d40292a3bd27f59a78ee0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_495877c851c48b74c585d5ea6268e783ceebf9799bb03098d8d5e1bafea00517"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_09ea69dd2991aa9f439404dd49e9779507ba283e0d40292a3bd27f59a78ee0b9->leave($__internal_09ea69dd2991aa9f439404dd49e9779507ba283e0d40292a3bd27f59a78ee0b9_prof);

    }

    // line 62
    public function block___internal_27dcbb8f10694c7289389e9fb354663ffd2f93c05ee10220894ed716c208e1dc($context, array $blocks = array())
    {
        $__internal_01798539ea4ca028e84c99df77ff40c5369491c98d5b30e806838fd8bef7e9fb = $this->env->getExtension("native_profiler");
        $__internal_01798539ea4ca028e84c99df77ff40c5369491c98d5b30e806838fd8bef7e9fb->enter($__internal_01798539ea4ca028e84c99df77ff40c5369491c98d5b30e806838fd8bef7e9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_27dcbb8f10694c7289389e9fb354663ffd2f93c05ee10220894ed716c208e1dc"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_01798539ea4ca028e84c99df77ff40c5369491c98d5b30e806838fd8bef7e9fb->leave($__internal_01798539ea4ca028e84c99df77ff40c5369491c98d5b30e806838fd8bef7e9fb_prof);

    }

    // line 67
    public function block___internal_529e325026073c27949a945990823145960689e02570d4caf2f15b7650297719($context, array $blocks = array())
    {
        $__internal_0f2106e3c40bfd601403ab179a272f5f8568474167ca4a8dac2ee80cfb565a45 = $this->env->getExtension("native_profiler");
        $__internal_0f2106e3c40bfd601403ab179a272f5f8568474167ca4a8dac2ee80cfb565a45->enter($__internal_0f2106e3c40bfd601403ab179a272f5f8568474167ca4a8dac2ee80cfb565a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_529e325026073c27949a945990823145960689e02570d4caf2f15b7650297719"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0f2106e3c40bfd601403ab179a272f5f8568474167ca4a8dac2ee80cfb565a45->leave($__internal_0f2106e3c40bfd601403ab179a272f5f8568474167ca4a8dac2ee80cfb565a45_prof);

    }

    // line 72
    public function block___internal_37e036740b5644521165961b3fc56ae7eb6ca4ac8d8c5fde718dbe46f3aafa56($context, array $blocks = array())
    {
        $__internal_030b2645c6e9a61f142d0d8a8a494f589b97dbe36023209ba9e8c02328f7212c = $this->env->getExtension("native_profiler");
        $__internal_030b2645c6e9a61f142d0d8a8a494f589b97dbe36023209ba9e8c02328f7212c->enter($__internal_030b2645c6e9a61f142d0d8a8a494f589b97dbe36023209ba9e8c02328f7212c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_37e036740b5644521165961b3fc56ae7eb6ca4ac8d8c5fde718dbe46f3aafa56"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_030b2645c6e9a61f142d0d8a8a494f589b97dbe36023209ba9e8c02328f7212c->leave($__internal_030b2645c6e9a61f142d0d8a8a494f589b97dbe36023209ba9e8c02328f7212c_prof);

    }

    // line 77
    public function block___internal_33dad2c7fcae9f0ddffbca72434db39dbbdc6579775ae0d0f586da6da3e40ab7($context, array $blocks = array())
    {
        $__internal_0f1bede04abcf63c765a29f18c61693d7a0524ccb6345f9324843e0f1af0bf3c = $this->env->getExtension("native_profiler");
        $__internal_0f1bede04abcf63c765a29f18c61693d7a0524ccb6345f9324843e0f1af0bf3c->enter($__internal_0f1bede04abcf63c765a29f18c61693d7a0524ccb6345f9324843e0f1af0bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_33dad2c7fcae9f0ddffbca72434db39dbbdc6579775ae0d0f586da6da3e40ab7"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0f1bede04abcf63c765a29f18c61693d7a0524ccb6345f9324843e0f1af0bf3c->leave($__internal_0f1bede04abcf63c765a29f18c61693d7a0524ccb6345f9324843e0f1af0bf3c_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_153e007051817176011bb11a1a758b3cacea2d4ae460bbcda94b5aaedf77a67c = $this->env->getExtension("native_profiler");
        $__internal_153e007051817176011bb11a1a758b3cacea2d4ae460bbcda94b5aaedf77a67c->enter($__internal_153e007051817176011bb11a1a758b3cacea2d4ae460bbcda94b5aaedf77a67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_setearlibroscuestionario");
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
                    var sum = 0;
                    \$(\"input[id\$='cantidad']\").each(function () {
                        sum += parseFloat(\$(this).val());  //Or this.innerHTML, this.innerText
                        //SUM NO DEBE SER MAYOR A CANTIDAD, PONER UN AVISO
                    });
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
        // line 303
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
                if (\$(\"input[id\$='porcentaje']\").length) {
                    if (\$(\"input[id\$='porcentaje']\").val() && \$(\"input[id\$='cantidad']\").val() && \$(\"input[id\$='cantidad']\").val() > 0) {
                        llenarTablaPreguntas();
                    } else {
                        alert('Ingrese al menos 1 parametro para generar las preguntas.');
                    }
                } else {
                    if (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() && \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() > 0) {
                        llenarTablaPreguntas();
                    } else {
                        alert('Cantidad de preguntas no aceptada.');
                    }
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
                \$(\"#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas\").val(tbl.length);
                if (\$(\"#uci_bundle_basedatosbundle_cuestionario_cuestionarioname\").val() && \$(\"#uci_bundle_basedatosbundle_cuestionario_curso\").val()) {
                    \$.ajax({
                        url: \"";
        // line 378
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_guardarcuestionario");
        echo "\",
                        type: \"POST\",
                        data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                        success: function (data) {
                            if (data.resultado == 1) {
                                window.location.href = \"";
        // line 383
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "\";
                            } else {
                                alert('Ocurrio un error');
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('Ocurrio un error');
                        }
                    });
                } else {
                    alert('Rellene todos los campos del formulario');
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
        
        $__internal_153e007051817176011bb11a1a758b3cacea2d4ae460bbcda94b5aaedf77a67c->leave($__internal_153e007051817176011bb11a1a758b3cacea2d4ae460bbcda94b5aaedf77a67c_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 383,  603 => 378,  525 => 303,  422 => 203,  355 => 140,  349 => 139,  339 => 78,  333 => 77,  323 => 73,  317 => 72,  307 => 68,  301 => 67,  291 => 63,  285 => 62,  275 => 58,  269 => 57,  259 => 53,  253 => 52,  243 => 48,  237 => 47,  196 => 104,  169 => 79,  167 => 77,  162 => 74,  160 => 72,  155 => 69,  153 => 67,  148 => 64,  146 => 62,  141 => 59,  139 => 57,  134 => 54,  132 => 52,  127 => 49,  125 => 47,  116 => 41,  108 => 36,  100 => 31,  94 => 28,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
