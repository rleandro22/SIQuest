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
            '__internal_78dfba3a46d4200c148646b96041a7a2c36c2a85fb44be9a5b70f7e34167c4c3' => array($this, 'block___internal_78dfba3a46d4200c148646b96041a7a2c36c2a85fb44be9a5b70f7e34167c4c3'),
            '__internal_de68f60d93aa4a07bb8b1d0f32c1ced198efe83f3a0aa6fa2d4108a7a43bd37d' => array($this, 'block___internal_de68f60d93aa4a07bb8b1d0f32c1ced198efe83f3a0aa6fa2d4108a7a43bd37d'),
            '__internal_64b6f468a2d8e9d93a5679c0b9c1d562b11d2fa9e54cf76e1c025a02287e47ee' => array($this, 'block___internal_64b6f468a2d8e9d93a5679c0b9c1d562b11d2fa9e54cf76e1c025a02287e47ee'),
            '__internal_80171b19a939993ecfa1a51b0fcf10e74d5e351f2db8b931a7a91cb5a87a7419' => array($this, 'block___internal_80171b19a939993ecfa1a51b0fcf10e74d5e351f2db8b931a7a91cb5a87a7419'),
            '__internal_7870be7e0c50ec42f9640f9e75c2a720bfc848aac1f10d4c95685c9f72d1ae77' => array($this, 'block___internal_7870be7e0c50ec42f9640f9e75c2a720bfc848aac1f10d4c95685c9f72d1ae77'),
            '__internal_3760178d7adb81d125679cb8fa97ee5acb1b5e12035087c02bcd3fa0405c2afd' => array($this, 'block___internal_3760178d7adb81d125679cb8fa97ee5acb1b5e12035087c02bcd3fa0405c2afd'),
            '__internal_fd5d078df107a108f6837f233ce5c76e071bb2ef247b294944fc317199eea946' => array($this, 'block___internal_fd5d078df107a108f6837f233ce5c76e071bb2ef247b294944fc317199eea946'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9318fb96ea3c456c7d1f1c4b29707caaf9f8468aedb64479bcd5a6b9c0a8a23d = $this->env->getExtension("native_profiler");
        $__internal_9318fb96ea3c456c7d1f1c4b29707caaf9f8468aedb64479bcd5a6b9c0a8a23d->enter($__internal_9318fb96ea3c456c7d1f1c4b29707caaf9f8468aedb64479bcd5a6b9c0a8a23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9318fb96ea3c456c7d1f1c4b29707caaf9f8468aedb64479bcd5a6b9c0a8a23d->leave($__internal_9318fb96ea3c456c7d1f1c4b29707caaf9f8468aedb64479bcd5a6b9c0a8a23d_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7291da94858dcf9713ed4d78147c11b237f92c2e5b59f8c8e6e18d08cea96661 = $this->env->getExtension("native_profiler");
        $__internal_7291da94858dcf9713ed4d78147c11b237f92c2e5b59f8c8e6e18d08cea96661->enter($__internal_7291da94858dcf9713ed4d78147c11b237f92c2e5b59f8c8e6e18d08cea96661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_7291da94858dcf9713ed4d78147c11b237f92c2e5b59f8c8e6e18d08cea96661->leave($__internal_7291da94858dcf9713ed4d78147c11b237f92c2e5b59f8c8e6e18d08cea96661_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ea51106d3bc74f22e15ff76231ea887dc8aac0cb51b381c8986c7f3baebed9e = $this->env->getExtension("native_profiler");
        $__internal_8ea51106d3bc74f22e15ff76231ea887dc8aac0cb51b381c8986c7f3baebed9e->enter($__internal_8ea51106d3bc74f22e15ff76231ea887dc8aac0cb51b381c8986c7f3baebed9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadPreguntas", array()), 'row');
        echo "
                        </div>
                    </div>
                    <h3>Parámetros</h3>
                    <div id=\"listaParametros\">
                        <div id=\"libros\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 46
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_78dfba3a46d4200c148646b96041a7a2c36c2a85fb44be9a5b70f7e34167c4c3", $context, $blocks));
        // line 48
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 51
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_de68f60d93aa4a07bb8b1d0f32c1ced198efe83f3a0aa6fa2d4108a7a43bd37d", $context, $blocks));
        // line 53
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 56
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_64b6f468a2d8e9d93a5679c0b9c1d562b11d2fa9e54cf76e1c025a02287e47ee", $context, $blocks));
        // line 58
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 61
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_80171b19a939993ecfa1a51b0fcf10e74d5e351f2db8b931a7a91cb5a87a7419", $context, $blocks));
        // line 63
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 66
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_7870be7e0c50ec42f9640f9e75c2a720bfc848aac1f10d4c95685c9f72d1ae77", $context, $blocks));
        // line 68
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 71
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_3760178d7adb81d125679cb8fa97ee5acb1b5e12035087c02bcd3fa0405c2afd", $context, $blocks));
        // line 73
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 76
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_fd5d078df107a108f6837f233ce5c76e071bb2ef247b294944fc317199eea946", $context, $blocks));
        // line 78
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
        // line 103
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
        
        $__internal_8ea51106d3bc74f22e15ff76231ea887dc8aac0cb51b381c8986c7f3baebed9e->leave($__internal_8ea51106d3bc74f22e15ff76231ea887dc8aac0cb51b381c8986c7f3baebed9e_prof);

    }

    // line 46
    public function block___internal_78dfba3a46d4200c148646b96041a7a2c36c2a85fb44be9a5b70f7e34167c4c3($context, array $blocks = array())
    {
        $__internal_0eebc6e9b25e25105ac75ab32b3b3a98f9cce993a7cc90e6662f155686cadbe1 = $this->env->getExtension("native_profiler");
        $__internal_0eebc6e9b25e25105ac75ab32b3b3a98f9cce993a7cc90e6662f155686cadbe1->enter($__internal_0eebc6e9b25e25105ac75ab32b3b3a98f9cce993a7cc90e6662f155686cadbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_78dfba3a46d4200c148646b96041a7a2c36c2a85fb44be9a5b70f7e34167c4c3"));

        // line 47
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_0eebc6e9b25e25105ac75ab32b3b3a98f9cce993a7cc90e6662f155686cadbe1->leave($__internal_0eebc6e9b25e25105ac75ab32b3b3a98f9cce993a7cc90e6662f155686cadbe1_prof);

    }

    // line 51
    public function block___internal_de68f60d93aa4a07bb8b1d0f32c1ced198efe83f3a0aa6fa2d4108a7a43bd37d($context, array $blocks = array())
    {
        $__internal_66139e4c2f9224869472108774bbf7d8face96f1d801baaab2af74a984f34c2a = $this->env->getExtension("native_profiler");
        $__internal_66139e4c2f9224869472108774bbf7d8face96f1d801baaab2af74a984f34c2a->enter($__internal_66139e4c2f9224869472108774bbf7d8face96f1d801baaab2af74a984f34c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_de68f60d93aa4a07bb8b1d0f32c1ced198efe83f3a0aa6fa2d4108a7a43bd37d"));

        // line 52
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_66139e4c2f9224869472108774bbf7d8face96f1d801baaab2af74a984f34c2a->leave($__internal_66139e4c2f9224869472108774bbf7d8face96f1d801baaab2af74a984f34c2a_prof);

    }

    // line 56
    public function block___internal_64b6f468a2d8e9d93a5679c0b9c1d562b11d2fa9e54cf76e1c025a02287e47ee($context, array $blocks = array())
    {
        $__internal_768ae5ce9c158e5bcc63c735b0ff2c85b394e29e496abb838a1a8385b9c2afb4 = $this->env->getExtension("native_profiler");
        $__internal_768ae5ce9c158e5bcc63c735b0ff2c85b394e29e496abb838a1a8385b9c2afb4->enter($__internal_768ae5ce9c158e5bcc63c735b0ff2c85b394e29e496abb838a1a8385b9c2afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_64b6f468a2d8e9d93a5679c0b9c1d562b11d2fa9e54cf76e1c025a02287e47ee"));

        // line 57
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_768ae5ce9c158e5bcc63c735b0ff2c85b394e29e496abb838a1a8385b9c2afb4->leave($__internal_768ae5ce9c158e5bcc63c735b0ff2c85b394e29e496abb838a1a8385b9c2afb4_prof);

    }

    // line 61
    public function block___internal_80171b19a939993ecfa1a51b0fcf10e74d5e351f2db8b931a7a91cb5a87a7419($context, array $blocks = array())
    {
        $__internal_e05194f1be7dd4b76cadd317a8ceb82444039c32fefd73c72660a1d5a24f1370 = $this->env->getExtension("native_profiler");
        $__internal_e05194f1be7dd4b76cadd317a8ceb82444039c32fefd73c72660a1d5a24f1370->enter($__internal_e05194f1be7dd4b76cadd317a8ceb82444039c32fefd73c72660a1d5a24f1370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_80171b19a939993ecfa1a51b0fcf10e74d5e351f2db8b931a7a91cb5a87a7419"));

        // line 62
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_e05194f1be7dd4b76cadd317a8ceb82444039c32fefd73c72660a1d5a24f1370->leave($__internal_e05194f1be7dd4b76cadd317a8ceb82444039c32fefd73c72660a1d5a24f1370_prof);

    }

    // line 66
    public function block___internal_7870be7e0c50ec42f9640f9e75c2a720bfc848aac1f10d4c95685c9f72d1ae77($context, array $blocks = array())
    {
        $__internal_6e842d052620055b916c52ce9f67e41f83a133e2a1ef76bc7affd4c11898b5a7 = $this->env->getExtension("native_profiler");
        $__internal_6e842d052620055b916c52ce9f67e41f83a133e2a1ef76bc7affd4c11898b5a7->enter($__internal_6e842d052620055b916c52ce9f67e41f83a133e2a1ef76bc7affd4c11898b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_7870be7e0c50ec42f9640f9e75c2a720bfc848aac1f10d4c95685c9f72d1ae77"));

        // line 67
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_6e842d052620055b916c52ce9f67e41f83a133e2a1ef76bc7affd4c11898b5a7->leave($__internal_6e842d052620055b916c52ce9f67e41f83a133e2a1ef76bc7affd4c11898b5a7_prof);

    }

    // line 71
    public function block___internal_3760178d7adb81d125679cb8fa97ee5acb1b5e12035087c02bcd3fa0405c2afd($context, array $blocks = array())
    {
        $__internal_79a6aca87bfa0cbb33e5d276280c6768bad5066bdac8074f472710fbe8f2fc51 = $this->env->getExtension("native_profiler");
        $__internal_79a6aca87bfa0cbb33e5d276280c6768bad5066bdac8074f472710fbe8f2fc51->enter($__internal_79a6aca87bfa0cbb33e5d276280c6768bad5066bdac8074f472710fbe8f2fc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_3760178d7adb81d125679cb8fa97ee5acb1b5e12035087c02bcd3fa0405c2afd"));

        // line 72
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_79a6aca87bfa0cbb33e5d276280c6768bad5066bdac8074f472710fbe8f2fc51->leave($__internal_79a6aca87bfa0cbb33e5d276280c6768bad5066bdac8074f472710fbe8f2fc51_prof);

    }

    // line 76
    public function block___internal_fd5d078df107a108f6837f233ce5c76e071bb2ef247b294944fc317199eea946($context, array $blocks = array())
    {
        $__internal_4a278e0ad088b10c12d834cc86d580ce11cc99bed5264bcbf15de2262743f46e = $this->env->getExtension("native_profiler");
        $__internal_4a278e0ad088b10c12d834cc86d580ce11cc99bed5264bcbf15de2262743f46e->enter($__internal_4a278e0ad088b10c12d834cc86d580ce11cc99bed5264bcbf15de2262743f46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_fd5d078df107a108f6837f233ce5c76e071bb2ef247b294944fc317199eea946"));

        // line 77
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_4a278e0ad088b10c12d834cc86d580ce11cc99bed5264bcbf15de2262743f46e->leave($__internal_4a278e0ad088b10c12d834cc86d580ce11cc99bed5264bcbf15de2262743f46e_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e68ca43f44963eb48c6caccbb110cf3ed9719127d991a296bc70125fd1cd2601 = $this->env->getExtension("native_profiler");
        $__internal_e68ca43f44963eb48c6caccbb110cf3ed9719127d991a296bc70125fd1cd2601->enter($__internal_e68ca43f44963eb48c6caccbb110cf3ed9719127d991a296bc70125fd1cd2601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
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
        // line 202
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
            /*var url = '{ path('uci_administrador_editarPregunta', { 'idPregunta': 'idPreg' }) }}';
             url = url.replace(\"idPreg\", id);
             window.open(url, '_blank', \"width=500%, height=500%\", 'toolbar=0,location=0,menubar=0');
             llenarTablaPreguntas();*/
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
        // line 365
        echo $this->env->getExtension('routing')->getPath("uci_administrador_guardarcuestionario");
        echo "\",
                    type: \"POST\",
                    data: {preguntas: tbl, nombreCuestionario: nombreCuestionario, curso: curso},
                    success: function (data) {
                        alert('Exitoso');
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
        
        $__internal_e68ca43f44963eb48c6caccbb110cf3ed9719127d991a296bc70125fd1cd2601->leave($__internal_e68ca43f44963eb48c6caccbb110cf3ed9719127d991a296bc70125fd1cd2601_prof);

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
        return array (  584 => 365,  418 => 202,  351 => 139,  345 => 138,  335 => 77,  329 => 76,  319 => 72,  313 => 71,  303 => 67,  297 => 66,  287 => 62,  281 => 61,  271 => 57,  265 => 56,  255 => 52,  249 => 51,  239 => 47,  233 => 46,  192 => 103,  165 => 78,  163 => 76,  158 => 73,  156 => 71,  151 => 68,  149 => 66,  144 => 63,  142 => 61,  137 => 58,  135 => 56,  130 => 53,  128 => 51,  123 => 48,  121 => 46,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
