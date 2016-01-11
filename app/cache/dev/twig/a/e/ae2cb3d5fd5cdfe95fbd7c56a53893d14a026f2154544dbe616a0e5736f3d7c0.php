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
            '__internal_86aefd569ae982c4d378446a2d8e6d16ca31b58e729ab619ae2e5f6dd7c51a3f' => array($this, 'block___internal_86aefd569ae982c4d378446a2d8e6d16ca31b58e729ab619ae2e5f6dd7c51a3f'),
            '__internal_6dac88f6acae54f86bbaffa4111f321a6819a21a0b0918c31e13782c39c99e69' => array($this, 'block___internal_6dac88f6acae54f86bbaffa4111f321a6819a21a0b0918c31e13782c39c99e69'),
            '__internal_1601542a332a5a93070e84a375f67570def266fa606cca2771f91e8b0c7d520b' => array($this, 'block___internal_1601542a332a5a93070e84a375f67570def266fa606cca2771f91e8b0c7d520b'),
            '__internal_9f67dd773b280a44b3ed80e7a43aa4d0d76be9390dcbf8ff16f204d6d50593c7' => array($this, 'block___internal_9f67dd773b280a44b3ed80e7a43aa4d0d76be9390dcbf8ff16f204d6d50593c7'),
            '__internal_6a20ba270bb074472bcc281709545b2d956538d6e009960df3f592ff5f87516a' => array($this, 'block___internal_6a20ba270bb074472bcc281709545b2d956538d6e009960df3f592ff5f87516a'),
            '__internal_d5f59b2498447a8bb8bb234b8da88330da33b0c8291573827ec19d9de5d3c017' => array($this, 'block___internal_d5f59b2498447a8bb8bb234b8da88330da33b0c8291573827ec19d9de5d3c017'),
            '__internal_178121a11aed17d8c35806bf63be603912f41ae21221dab375c9ff7cceb2456a' => array($this, 'block___internal_178121a11aed17d8c35806bf63be603912f41ae21221dab375c9ff7cceb2456a'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8d5bdf7d3764610a9397a83016ccf4a220381e0537be7a7d32a3b1b582d2861 = $this->env->getExtension("native_profiler");
        $__internal_c8d5bdf7d3764610a9397a83016ccf4a220381e0537be7a7d32a3b1b582d2861->enter($__internal_c8d5bdf7d3764610a9397a83016ccf4a220381e0537be7a7d32a3b1b582d2861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d5bdf7d3764610a9397a83016ccf4a220381e0537be7a7d32a3b1b582d2861->leave($__internal_c8d5bdf7d3764610a9397a83016ccf4a220381e0537be7a7d32a3b1b582d2861_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_1f9ce6276834fca433bf3d53e679f6711ef5ad6d880ad8367f6fc9325f2376f9 = $this->env->getExtension("native_profiler");
        $__internal_1f9ce6276834fca433bf3d53e679f6711ef5ad6d880ad8367f6fc9325f2376f9->enter($__internal_1f9ce6276834fca433bf3d53e679f6711ef5ad6d880ad8367f6fc9325f2376f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_1f9ce6276834fca433bf3d53e679f6711ef5ad6d880ad8367f6fc9325f2376f9->leave($__internal_1f9ce6276834fca433bf3d53e679f6711ef5ad6d880ad8367f6fc9325f2376f9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cf2cfe4f1c4c0ac88e0ac2fb41123609b4bfcba80f74f2089a490d58732644e = $this->env->getExtension("native_profiler");
        $__internal_1cf2cfe4f1c4c0ac88e0ac2fb41123609b4bfcba80f74f2089a490d58732644e->enter($__internal_1cf2cfe4f1c4c0ac88e0ac2fb41123609b4bfcba80f74f2089a490d58732644e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_86aefd569ae982c4d378446a2d8e6d16ca31b58e729ab619ae2e5f6dd7c51a3f", $context, $blocks));
        // line 49
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 52
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6dac88f6acae54f86bbaffa4111f321a6819a21a0b0918c31e13782c39c99e69", $context, $blocks));
        // line 54
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 57
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_1601542a332a5a93070e84a375f67570def266fa606cca2771f91e8b0c7d520b", $context, $blocks));
        // line 59
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 62
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9f67dd773b280a44b3ed80e7a43aa4d0d76be9390dcbf8ff16f204d6d50593c7", $context, $blocks));
        // line 64
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 67
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6a20ba270bb074472bcc281709545b2d956538d6e009960df3f592ff5f87516a", $context, $blocks));
        // line 69
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 72
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d5f59b2498447a8bb8bb234b8da88330da33b0c8291573827ec19d9de5d3c017", $context, $blocks));
        // line 74
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 77
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_178121a11aed17d8c35806bf63be603912f41ae21221dab375c9ff7cceb2456a", $context, $blocks));
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
        
        $__internal_1cf2cfe4f1c4c0ac88e0ac2fb41123609b4bfcba80f74f2089a490d58732644e->leave($__internal_1cf2cfe4f1c4c0ac88e0ac2fb41123609b4bfcba80f74f2089a490d58732644e_prof);

    }

    // line 47
    public function block___internal_86aefd569ae982c4d378446a2d8e6d16ca31b58e729ab619ae2e5f6dd7c51a3f($context, array $blocks = array())
    {
        $__internal_e9887d7190135d5b7acfbd1e9e2608fc632bb27c40792e31cdb3456c5eee0e62 = $this->env->getExtension("native_profiler");
        $__internal_e9887d7190135d5b7acfbd1e9e2608fc632bb27c40792e31cdb3456c5eee0e62->enter($__internal_e9887d7190135d5b7acfbd1e9e2608fc632bb27c40792e31cdb3456c5eee0e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_86aefd569ae982c4d378446a2d8e6d16ca31b58e729ab619ae2e5f6dd7c51a3f"));

        // line 48
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_e9887d7190135d5b7acfbd1e9e2608fc632bb27c40792e31cdb3456c5eee0e62->leave($__internal_e9887d7190135d5b7acfbd1e9e2608fc632bb27c40792e31cdb3456c5eee0e62_prof);

    }

    // line 52
    public function block___internal_6dac88f6acae54f86bbaffa4111f321a6819a21a0b0918c31e13782c39c99e69($context, array $blocks = array())
    {
        $__internal_346f82097191308c5cbbc55c92ec71687f5019c48b106e94c3db053672b79dfb = $this->env->getExtension("native_profiler");
        $__internal_346f82097191308c5cbbc55c92ec71687f5019c48b106e94c3db053672b79dfb->enter($__internal_346f82097191308c5cbbc55c92ec71687f5019c48b106e94c3db053672b79dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6dac88f6acae54f86bbaffa4111f321a6819a21a0b0918c31e13782c39c99e69"));

        // line 53
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_346f82097191308c5cbbc55c92ec71687f5019c48b106e94c3db053672b79dfb->leave($__internal_346f82097191308c5cbbc55c92ec71687f5019c48b106e94c3db053672b79dfb_prof);

    }

    // line 57
    public function block___internal_1601542a332a5a93070e84a375f67570def266fa606cca2771f91e8b0c7d520b($context, array $blocks = array())
    {
        $__internal_01bd30d2de0f49fecdef0a19df0ab9925e1433c17473736131d966947b88bf71 = $this->env->getExtension("native_profiler");
        $__internal_01bd30d2de0f49fecdef0a19df0ab9925e1433c17473736131d966947b88bf71->enter($__internal_01bd30d2de0f49fecdef0a19df0ab9925e1433c17473736131d966947b88bf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_1601542a332a5a93070e84a375f67570def266fa606cca2771f91e8b0c7d520b"));

        // line 58
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_01bd30d2de0f49fecdef0a19df0ab9925e1433c17473736131d966947b88bf71->leave($__internal_01bd30d2de0f49fecdef0a19df0ab9925e1433c17473736131d966947b88bf71_prof);

    }

    // line 62
    public function block___internal_9f67dd773b280a44b3ed80e7a43aa4d0d76be9390dcbf8ff16f204d6d50593c7($context, array $blocks = array())
    {
        $__internal_1ed834973e310e4d57328182947755f16af1917a1dadcc02e99ccd336ab88b3c = $this->env->getExtension("native_profiler");
        $__internal_1ed834973e310e4d57328182947755f16af1917a1dadcc02e99ccd336ab88b3c->enter($__internal_1ed834973e310e4d57328182947755f16af1917a1dadcc02e99ccd336ab88b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9f67dd773b280a44b3ed80e7a43aa4d0d76be9390dcbf8ff16f204d6d50593c7"));

        // line 63
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_1ed834973e310e4d57328182947755f16af1917a1dadcc02e99ccd336ab88b3c->leave($__internal_1ed834973e310e4d57328182947755f16af1917a1dadcc02e99ccd336ab88b3c_prof);

    }

    // line 67
    public function block___internal_6a20ba270bb074472bcc281709545b2d956538d6e009960df3f592ff5f87516a($context, array $blocks = array())
    {
        $__internal_d1a435c71597b03514de1b559bfbe5cb446e7ae3796914c9ba49e5bb4dd60426 = $this->env->getExtension("native_profiler");
        $__internal_d1a435c71597b03514de1b559bfbe5cb446e7ae3796914c9ba49e5bb4dd60426->enter($__internal_d1a435c71597b03514de1b559bfbe5cb446e7ae3796914c9ba49e5bb4dd60426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6a20ba270bb074472bcc281709545b2d956538d6e009960df3f592ff5f87516a"));

        // line 68
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_d1a435c71597b03514de1b559bfbe5cb446e7ae3796914c9ba49e5bb4dd60426->leave($__internal_d1a435c71597b03514de1b559bfbe5cb446e7ae3796914c9ba49e5bb4dd60426_prof);

    }

    // line 72
    public function block___internal_d5f59b2498447a8bb8bb234b8da88330da33b0c8291573827ec19d9de5d3c017($context, array $blocks = array())
    {
        $__internal_a8bdcf4a0cfaae1b24bda618b58f012782e56cffde298d9276c9d610932efe70 = $this->env->getExtension("native_profiler");
        $__internal_a8bdcf4a0cfaae1b24bda618b58f012782e56cffde298d9276c9d610932efe70->enter($__internal_a8bdcf4a0cfaae1b24bda618b58f012782e56cffde298d9276c9d610932efe70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d5f59b2498447a8bb8bb234b8da88330da33b0c8291573827ec19d9de5d3c017"));

        // line 73
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_a8bdcf4a0cfaae1b24bda618b58f012782e56cffde298d9276c9d610932efe70->leave($__internal_a8bdcf4a0cfaae1b24bda618b58f012782e56cffde298d9276c9d610932efe70_prof);

    }

    // line 77
    public function block___internal_178121a11aed17d8c35806bf63be603912f41ae21221dab375c9ff7cceb2456a($context, array $blocks = array())
    {
        $__internal_9c405334de5a71b2f8903be5ad3bd6522ae11760ed9e4aadedad8498e07d44b5 = $this->env->getExtension("native_profiler");
        $__internal_9c405334de5a71b2f8903be5ad3bd6522ae11760ed9e4aadedad8498e07d44b5->enter($__internal_9c405334de5a71b2f8903be5ad3bd6522ae11760ed9e4aadedad8498e07d44b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_178121a11aed17d8c35806bf63be603912f41ae21221dab375c9ff7cceb2456a"));

        // line 78
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_9c405334de5a71b2f8903be5ad3bd6522ae11760ed9e4aadedad8498e07d44b5->leave($__internal_9c405334de5a71b2f8903be5ad3bd6522ae11760ed9e4aadedad8498e07d44b5_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c6e92063ff73eb6c07705c9be515cffd2c8d39133f172aa6f496d1a2a3cd40c = $this->env->getExtension("native_profiler");
        $__internal_2c6e92063ff73eb6c07705c9be515cffd2c8d39133f172aa6f496d1a2a3cd40c->enter($__internal_2c6e92063ff73eb6c07705c9be515cffd2c8d39133f172aa6f496d1a2a3cd40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                        \$capitulo_selector.html('<option value=\"0\">Capitulos</option>');
                        if (data.capitulos.id != \"0\") {
                            for (var i = 0, total = data.capitulos.length; i < total; i++) {
                                \$capitulo_selector.append('<option value=\"' + data.capitulos[i].id + '\">' + data.capitulos[i].numeroCapitulo+ '-' + data.capitulos[i].nombreCapitulo + '</option>');
                            }
                        }
                        \$area_selector.html('<option value=\"0\">A. Conocimiento</option>');
                        if (data.areas.id != \"0\") {
                            for (var i = 0, total = data.areas.length; i < total; i++) {
                                \$area_selector.append('<option value=\"' + data.areas[i].id + '\">' + data.areas[i].nombreArea + '</option>');
                            }
                        }
                        \$grupo_selector.html('<option value=\"0\">G. Procesos</option>');
                        if (data.grupos.id != \"0\") {
                            for (var i = 0, total = data.grupos.length; i < total; i++) {
                                \$grupo_selector.append('<option value=\"' + data.grupos[i].id + '\">' + data.grupos[i].nombreGrupo + '</option>');
                            }
                        }
                        \$triangulo_selector.html('<option value=\"0\">T. Talento</option>');
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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_verPreguntaPop", array("idPregunta" => "idPreg"));
        echo "';
            url = url.replace(\"idPreg\", id);
            url = url.replace(\"idCuest\", '0');
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
        // line 379
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_guardarcuestionario");
        echo "\",
                        type: \"POST\",
                        data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                        success: function (data) {
                            if (data.resultado == 1) {
                                window.location.href = \"";
        // line 384
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
        
        $__internal_2c6e92063ff73eb6c07705c9be515cffd2c8d39133f172aa6f496d1a2a3cd40c->leave($__internal_2c6e92063ff73eb6c07705c9be515cffd2c8d39133f172aa6f496d1a2a3cd40c_prof);

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
        return array (  612 => 384,  604 => 379,  525 => 303,  422 => 203,  355 => 140,  349 => 139,  339 => 78,  333 => 77,  323 => 73,  317 => 72,  307 => 68,  301 => 67,  291 => 63,  285 => 62,  275 => 58,  269 => 57,  259 => 53,  253 => 52,  243 => 48,  237 => 47,  196 => 104,  169 => 79,  167 => 77,  162 => 74,  160 => 72,  155 => 69,  153 => 67,  148 => 64,  146 => 62,  141 => 59,  139 => 57,  134 => 54,  132 => 52,  127 => 49,  125 => 47,  116 => 41,  108 => 36,  100 => 31,  94 => 28,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
