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
            '__internal_05d5e1cebe96c81f2ffaf3bb7116a42a67e504b6cc8ea07e67e352258178a933' => array($this, 'block___internal_05d5e1cebe96c81f2ffaf3bb7116a42a67e504b6cc8ea07e67e352258178a933'),
            '__internal_f319f187c5f4f04be3e04db37a425deda5a99cddbda44a0a82b81c87577155f1' => array($this, 'block___internal_f319f187c5f4f04be3e04db37a425deda5a99cddbda44a0a82b81c87577155f1'),
            '__internal_3e83be583a17fc3e41e7915a2c8ef0374cb6d6504d60dc654c0c69b2337e9e61' => array($this, 'block___internal_3e83be583a17fc3e41e7915a2c8ef0374cb6d6504d60dc654c0c69b2337e9e61'),
            '__internal_bceb96732d4ca5ff7968a5daa4a310dde138b6113841a0870b3139d2421af2c3' => array($this, 'block___internal_bceb96732d4ca5ff7968a5daa4a310dde138b6113841a0870b3139d2421af2c3'),
            '__internal_3529f56f0365453709fb27f767f8742405eb4efd6b1cef4f724f42255af517bc' => array($this, 'block___internal_3529f56f0365453709fb27f767f8742405eb4efd6b1cef4f724f42255af517bc'),
            '__internal_03b7e31d526380a1d67e8e5fa6dd16baf45899374ccc9b198a52c189668acbe8' => array($this, 'block___internal_03b7e31d526380a1d67e8e5fa6dd16baf45899374ccc9b198a52c189668acbe8'),
            '__internal_cda64cc76d7fd819202400bc37fe7da9788580a92ac2e463602d7fa367a78605' => array($this, 'block___internal_cda64cc76d7fd819202400bc37fe7da9788580a92ac2e463602d7fa367a78605'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ea75f55487d237665f11197b5693f54080ab936abfdcdf24680e908d9b4b7bc = $this->env->getExtension("native_profiler");
        $__internal_6ea75f55487d237665f11197b5693f54080ab936abfdcdf24680e908d9b4b7bc->enter($__internal_6ea75f55487d237665f11197b5693f54080ab936abfdcdf24680e908d9b4b7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea75f55487d237665f11197b5693f54080ab936abfdcdf24680e908d9b4b7bc->leave($__internal_6ea75f55487d237665f11197b5693f54080ab936abfdcdf24680e908d9b4b7bc_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2c062806632a4c97250cc1a81437c404a483bad8d1837c871859387bfd8626d6 = $this->env->getExtension("native_profiler");
        $__internal_2c062806632a4c97250cc1a81437c404a483bad8d1837c871859387bfd8626d6->enter($__internal_2c062806632a4c97250cc1a81437c404a483bad8d1837c871859387bfd8626d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_2c062806632a4c97250cc1a81437c404a483bad8d1837c871859387bfd8626d6->leave($__internal_2c062806632a4c97250cc1a81437c404a483bad8d1837c871859387bfd8626d6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c029d9f10c4749997bcd9b703e0ab05a455f16c6ec8f6fc3e68a82329866ab76 = $this->env->getExtension("native_profiler");
        $__internal_c029d9f10c4749997bcd9b703e0ab05a455f16c6ec8f6fc3e68a82329866ab76->enter($__internal_c029d9f10c4749997bcd9b703e0ab05a455f16c6ec8f6fc3e68a82329866ab76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_05d5e1cebe96c81f2ffaf3bb7116a42a67e504b6cc8ea07e67e352258178a933", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f319f187c5f4f04be3e04db37a425deda5a99cddbda44a0a82b81c87577155f1", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_3e83be583a17fc3e41e7915a2c8ef0374cb6d6504d60dc654c0c69b2337e9e61", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_bceb96732d4ca5ff7968a5daa4a310dde138b6113841a0870b3139d2421af2c3", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_3529f56f0365453709fb27f767f8742405eb4efd6b1cef4f724f42255af517bc", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_03b7e31d526380a1d67e8e5fa6dd16baf45899374ccc9b198a52c189668acbe8", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_cda64cc76d7fd819202400bc37fe7da9788580a92ac2e463602d7fa367a78605", $context, $blocks));
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
        
        $__internal_c029d9f10c4749997bcd9b703e0ab05a455f16c6ec8f6fc3e68a82329866ab76->leave($__internal_c029d9f10c4749997bcd9b703e0ab05a455f16c6ec8f6fc3e68a82329866ab76_prof);

    }

    // line 40
    public function block___internal_05d5e1cebe96c81f2ffaf3bb7116a42a67e504b6cc8ea07e67e352258178a933($context, array $blocks = array())
    {
        $__internal_b9ef684da75e48ded16b1ec46ca0a2e1c1fbc3a4578837bce5b3bfc81931c3d7 = $this->env->getExtension("native_profiler");
        $__internal_b9ef684da75e48ded16b1ec46ca0a2e1c1fbc3a4578837bce5b3bfc81931c3d7->enter($__internal_b9ef684da75e48ded16b1ec46ca0a2e1c1fbc3a4578837bce5b3bfc81931c3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_05d5e1cebe96c81f2ffaf3bb7116a42a67e504b6cc8ea07e67e352258178a933"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_b9ef684da75e48ded16b1ec46ca0a2e1c1fbc3a4578837bce5b3bfc81931c3d7->leave($__internal_b9ef684da75e48ded16b1ec46ca0a2e1c1fbc3a4578837bce5b3bfc81931c3d7_prof);

    }

    // line 45
    public function block___internal_f319f187c5f4f04be3e04db37a425deda5a99cddbda44a0a82b81c87577155f1($context, array $blocks = array())
    {
        $__internal_a6c5bcf5dc5bf0d41cab94e0ebc969d1100c48d1ba53552443613e294d1e9e99 = $this->env->getExtension("native_profiler");
        $__internal_a6c5bcf5dc5bf0d41cab94e0ebc969d1100c48d1ba53552443613e294d1e9e99->enter($__internal_a6c5bcf5dc5bf0d41cab94e0ebc969d1100c48d1ba53552443613e294d1e9e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f319f187c5f4f04be3e04db37a425deda5a99cddbda44a0a82b81c87577155f1"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_a6c5bcf5dc5bf0d41cab94e0ebc969d1100c48d1ba53552443613e294d1e9e99->leave($__internal_a6c5bcf5dc5bf0d41cab94e0ebc969d1100c48d1ba53552443613e294d1e9e99_prof);

    }

    // line 50
    public function block___internal_3e83be583a17fc3e41e7915a2c8ef0374cb6d6504d60dc654c0c69b2337e9e61($context, array $blocks = array())
    {
        $__internal_8e0b7334139a57071b7e4170dcf2dded2cef2d522a6d229622ebcb993ffdc199 = $this->env->getExtension("native_profiler");
        $__internal_8e0b7334139a57071b7e4170dcf2dded2cef2d522a6d229622ebcb993ffdc199->enter($__internal_8e0b7334139a57071b7e4170dcf2dded2cef2d522a6d229622ebcb993ffdc199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_3e83be583a17fc3e41e7915a2c8ef0374cb6d6504d60dc654c0c69b2337e9e61"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_8e0b7334139a57071b7e4170dcf2dded2cef2d522a6d229622ebcb993ffdc199->leave($__internal_8e0b7334139a57071b7e4170dcf2dded2cef2d522a6d229622ebcb993ffdc199_prof);

    }

    // line 55
    public function block___internal_bceb96732d4ca5ff7968a5daa4a310dde138b6113841a0870b3139d2421af2c3($context, array $blocks = array())
    {
        $__internal_87d3d975dddb2a4b53697f6243c1a631765d413a9d68708fe6b186d666cfbc3c = $this->env->getExtension("native_profiler");
        $__internal_87d3d975dddb2a4b53697f6243c1a631765d413a9d68708fe6b186d666cfbc3c->enter($__internal_87d3d975dddb2a4b53697f6243c1a631765d413a9d68708fe6b186d666cfbc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_bceb96732d4ca5ff7968a5daa4a310dde138b6113841a0870b3139d2421af2c3"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_87d3d975dddb2a4b53697f6243c1a631765d413a9d68708fe6b186d666cfbc3c->leave($__internal_87d3d975dddb2a4b53697f6243c1a631765d413a9d68708fe6b186d666cfbc3c_prof);

    }

    // line 60
    public function block___internal_3529f56f0365453709fb27f767f8742405eb4efd6b1cef4f724f42255af517bc($context, array $blocks = array())
    {
        $__internal_29b641ec57c85015c88f54e22b57e0e0b1e583f45b0ec9649798bb4a14baee06 = $this->env->getExtension("native_profiler");
        $__internal_29b641ec57c85015c88f54e22b57e0e0b1e583f45b0ec9649798bb4a14baee06->enter($__internal_29b641ec57c85015c88f54e22b57e0e0b1e583f45b0ec9649798bb4a14baee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_3529f56f0365453709fb27f767f8742405eb4efd6b1cef4f724f42255af517bc"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_29b641ec57c85015c88f54e22b57e0e0b1e583f45b0ec9649798bb4a14baee06->leave($__internal_29b641ec57c85015c88f54e22b57e0e0b1e583f45b0ec9649798bb4a14baee06_prof);

    }

    // line 65
    public function block___internal_03b7e31d526380a1d67e8e5fa6dd16baf45899374ccc9b198a52c189668acbe8($context, array $blocks = array())
    {
        $__internal_4ebaf0043833d598e47a4d229def053038ac6145dd110d27dd3e89c4c755c259 = $this->env->getExtension("native_profiler");
        $__internal_4ebaf0043833d598e47a4d229def053038ac6145dd110d27dd3e89c4c755c259->enter($__internal_4ebaf0043833d598e47a4d229def053038ac6145dd110d27dd3e89c4c755c259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_03b7e31d526380a1d67e8e5fa6dd16baf45899374ccc9b198a52c189668acbe8"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_4ebaf0043833d598e47a4d229def053038ac6145dd110d27dd3e89c4c755c259->leave($__internal_4ebaf0043833d598e47a4d229def053038ac6145dd110d27dd3e89c4c755c259_prof);

    }

    // line 70
    public function block___internal_cda64cc76d7fd819202400bc37fe7da9788580a92ac2e463602d7fa367a78605($context, array $blocks = array())
    {
        $__internal_f5f0b91b4285c4eed0b688f61a1819f0599e434d96ceeddeb414a3e57d83b14a = $this->env->getExtension("native_profiler");
        $__internal_f5f0b91b4285c4eed0b688f61a1819f0599e434d96ceeddeb414a3e57d83b14a->enter($__internal_f5f0b91b4285c4eed0b688f61a1819f0599e434d96ceeddeb414a3e57d83b14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_cda64cc76d7fd819202400bc37fe7da9788580a92ac2e463602d7fa367a78605"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_f5f0b91b4285c4eed0b688f61a1819f0599e434d96ceeddeb414a3e57d83b14a->leave($__internal_f5f0b91b4285c4eed0b688f61a1819f0599e434d96ceeddeb414a3e57d83b14a_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04d5b59a60bd12e076a048924210654a598268a9b391971b1c97a5461cff12f4 = $this->env->getExtension("native_profiler");
        $__internal_04d5b59a60bd12e076a048924210654a598268a9b391971b1c97a5461cff12f4->enter($__internal_04d5b59a60bd12e076a048924210654a598268a9b391971b1c97a5461cff12f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            deshabilitarNumericos();
            noLetrasEnPorcentaje();
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
        // line 208
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

        function noLetrasEnPorcentaje() {
            \$(\"input[id\$='porcentaje']\").numeric();
            \$(\"input[id\$='porcentaje']\").keyup(function (e) {
                if (\$(this).val() > 100) {
                    \$(this).addClass('inputColoreado');
                } else {
                    \$(this).removeClass('inputColoreado');
                }
            });
        }

        function deshabilitarNumericos() {
            if (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() == '' || ('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() < 0) {
                //\$('.DisabledInputs').removeAttr('disabled');
                \$(\"input[id\$='porcentaje']\").attr('readonly',true);
                \$(\"input[id\$='cantidad']\").attr('readonly',true);
            } else {
               // \$('.DisabledInputs').attr('disabled', 'disabled');
               \$(\"input[id\$='porcentaje']\").attr('readonly',false);
                \$(\"input[id\$='cantidad']\").attr('readonly',false);
            }
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
        
        $__internal_04d5b59a60bd12e076a048924210654a598268a9b391971b1c97a5461cff12f4->leave($__internal_04d5b59a60bd12e076a048924210654a598268a9b391971b1c97a5461cff12f4_prof);

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
        return array (  421 => 208,  337 => 128,  331 => 127,  321 => 71,  315 => 70,  305 => 66,  299 => 65,  289 => 61,  283 => 60,  273 => 56,  267 => 55,  257 => 51,  251 => 50,  241 => 46,  235 => 45,  225 => 41,  219 => 40,  185 => 99,  156 => 72,  154 => 70,  149 => 67,  147 => 65,  142 => 62,  140 => 60,  135 => 57,  133 => 55,  128 => 52,  126 => 50,  121 => 47,  119 => 45,  114 => 42,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
