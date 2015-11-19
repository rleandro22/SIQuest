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
            '__internal_195abc7ef34d8325e158689be1342180f7d44e76bca4a0e13c474762f237992f' => array($this, 'block___internal_195abc7ef34d8325e158689be1342180f7d44e76bca4a0e13c474762f237992f'),
            '__internal_d11a85cfc42308cc67818f2193a6b730d1346062eb0fac9c2778b4e9514e573c' => array($this, 'block___internal_d11a85cfc42308cc67818f2193a6b730d1346062eb0fac9c2778b4e9514e573c'),
            '__internal_c54119cd1adfae91b6618306ea08e56267bbf8655ab8229d7860108b74daee58' => array($this, 'block___internal_c54119cd1adfae91b6618306ea08e56267bbf8655ab8229d7860108b74daee58'),
            '__internal_6e18dd65f36f25a388ef821cc48e0776af4aca413fe4ea41957b6d746cea70a8' => array($this, 'block___internal_6e18dd65f36f25a388ef821cc48e0776af4aca413fe4ea41957b6d746cea70a8'),
            '__internal_284997f684064022b5535d4b6f734df9cc495e263a377777b40b777c854cd64a' => array($this, 'block___internal_284997f684064022b5535d4b6f734df9cc495e263a377777b40b777c854cd64a'),
            '__internal_bc6706b691b44f2f02b4d68d88495f0714ceef0770973a444fd4e5745dd058ec' => array($this, 'block___internal_bc6706b691b44f2f02b4d68d88495f0714ceef0770973a444fd4e5745dd058ec'),
            '__internal_72015069d53941959a634fad6bd608b065c53708dc65540dedffa9d8cd05939c' => array($this, 'block___internal_72015069d53941959a634fad6bd608b065c53708dc65540dedffa9d8cd05939c'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_786a72f27e417dd334c18551ccedfa5d57411c18410f2df1411c5c0a99489861 = $this->env->getExtension("native_profiler");
        $__internal_786a72f27e417dd334c18551ccedfa5d57411c18410f2df1411c5c0a99489861->enter($__internal_786a72f27e417dd334c18551ccedfa5d57411c18410f2df1411c5c0a99489861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_786a72f27e417dd334c18551ccedfa5d57411c18410f2df1411c5c0a99489861->leave($__internal_786a72f27e417dd334c18551ccedfa5d57411c18410f2df1411c5c0a99489861_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_12cae45e8cc3e4a64c127fb61902b344779d429df781db76500658d94b9ce129 = $this->env->getExtension("native_profiler");
        $__internal_12cae45e8cc3e4a64c127fb61902b344779d429df781db76500658d94b9ce129->enter($__internal_12cae45e8cc3e4a64c127fb61902b344779d429df781db76500658d94b9ce129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_12cae45e8cc3e4a64c127fb61902b344779d429df781db76500658d94b9ce129->leave($__internal_12cae45e8cc3e4a64c127fb61902b344779d429df781db76500658d94b9ce129_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e5e28dececb068b2a0268fe28ea2ef976264e383a6ac19d97d39701dee38bc = $this->env->getExtension("native_profiler");
        $__internal_f3e5e28dececb068b2a0268fe28ea2ef976264e383a6ac19d97d39701dee38bc->enter($__internal_f3e5e28dececb068b2a0268fe28ea2ef976264e383a6ac19d97d39701dee38bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_195abc7ef34d8325e158689be1342180f7d44e76bca4a0e13c474762f237992f", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d11a85cfc42308cc67818f2193a6b730d1346062eb0fac9c2778b4e9514e573c", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c54119cd1adfae91b6618306ea08e56267bbf8655ab8229d7860108b74daee58", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6e18dd65f36f25a388ef821cc48e0776af4aca413fe4ea41957b6d746cea70a8", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_284997f684064022b5535d4b6f734df9cc495e263a377777b40b777c854cd64a", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_bc6706b691b44f2f02b4d68d88495f0714ceef0770973a444fd4e5745dd058ec", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_72015069d53941959a634fad6bd608b065c53708dc65540dedffa9d8cd05939c", $context, $blocks));
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
        
        $__internal_f3e5e28dececb068b2a0268fe28ea2ef976264e383a6ac19d97d39701dee38bc->leave($__internal_f3e5e28dececb068b2a0268fe28ea2ef976264e383a6ac19d97d39701dee38bc_prof);

    }

    // line 40
    public function block___internal_195abc7ef34d8325e158689be1342180f7d44e76bca4a0e13c474762f237992f($context, array $blocks = array())
    {
        $__internal_417ccc93895237bce98dbb065afb8bdecc6a9ee1c628c8d2621a8b83a4f36318 = $this->env->getExtension("native_profiler");
        $__internal_417ccc93895237bce98dbb065afb8bdecc6a9ee1c628c8d2621a8b83a4f36318->enter($__internal_417ccc93895237bce98dbb065afb8bdecc6a9ee1c628c8d2621a8b83a4f36318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_195abc7ef34d8325e158689be1342180f7d44e76bca4a0e13c474762f237992f"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_417ccc93895237bce98dbb065afb8bdecc6a9ee1c628c8d2621a8b83a4f36318->leave($__internal_417ccc93895237bce98dbb065afb8bdecc6a9ee1c628c8d2621a8b83a4f36318_prof);

    }

    // line 45
    public function block___internal_d11a85cfc42308cc67818f2193a6b730d1346062eb0fac9c2778b4e9514e573c($context, array $blocks = array())
    {
        $__internal_d5e3d7ebeb11db81f997c0d3605c93cc1b6234a38359a1f707d51146763c6f18 = $this->env->getExtension("native_profiler");
        $__internal_d5e3d7ebeb11db81f997c0d3605c93cc1b6234a38359a1f707d51146763c6f18->enter($__internal_d5e3d7ebeb11db81f997c0d3605c93cc1b6234a38359a1f707d51146763c6f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d11a85cfc42308cc67818f2193a6b730d1346062eb0fac9c2778b4e9514e573c"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_d5e3d7ebeb11db81f997c0d3605c93cc1b6234a38359a1f707d51146763c6f18->leave($__internal_d5e3d7ebeb11db81f997c0d3605c93cc1b6234a38359a1f707d51146763c6f18_prof);

    }

    // line 50
    public function block___internal_c54119cd1adfae91b6618306ea08e56267bbf8655ab8229d7860108b74daee58($context, array $blocks = array())
    {
        $__internal_b16d36f7cdd8039fa88f3f4868ac260438ae0ff24d145d5c7b56296f51439db0 = $this->env->getExtension("native_profiler");
        $__internal_b16d36f7cdd8039fa88f3f4868ac260438ae0ff24d145d5c7b56296f51439db0->enter($__internal_b16d36f7cdd8039fa88f3f4868ac260438ae0ff24d145d5c7b56296f51439db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c54119cd1adfae91b6618306ea08e56267bbf8655ab8229d7860108b74daee58"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_b16d36f7cdd8039fa88f3f4868ac260438ae0ff24d145d5c7b56296f51439db0->leave($__internal_b16d36f7cdd8039fa88f3f4868ac260438ae0ff24d145d5c7b56296f51439db0_prof);

    }

    // line 55
    public function block___internal_6e18dd65f36f25a388ef821cc48e0776af4aca413fe4ea41957b6d746cea70a8($context, array $blocks = array())
    {
        $__internal_e2a26588a6525455ead66c291cc3684cf139b0d04c5ba63708f185384de37f61 = $this->env->getExtension("native_profiler");
        $__internal_e2a26588a6525455ead66c291cc3684cf139b0d04c5ba63708f185384de37f61->enter($__internal_e2a26588a6525455ead66c291cc3684cf139b0d04c5ba63708f185384de37f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6e18dd65f36f25a388ef821cc48e0776af4aca413fe4ea41957b6d746cea70a8"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_e2a26588a6525455ead66c291cc3684cf139b0d04c5ba63708f185384de37f61->leave($__internal_e2a26588a6525455ead66c291cc3684cf139b0d04c5ba63708f185384de37f61_prof);

    }

    // line 60
    public function block___internal_284997f684064022b5535d4b6f734df9cc495e263a377777b40b777c854cd64a($context, array $blocks = array())
    {
        $__internal_8b8f3267822441d7f0b3c46385dbe61d42f7bbaff817592fff9ffd9d25a931a6 = $this->env->getExtension("native_profiler");
        $__internal_8b8f3267822441d7f0b3c46385dbe61d42f7bbaff817592fff9ffd9d25a931a6->enter($__internal_8b8f3267822441d7f0b3c46385dbe61d42f7bbaff817592fff9ffd9d25a931a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_284997f684064022b5535d4b6f734df9cc495e263a377777b40b777c854cd64a"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_8b8f3267822441d7f0b3c46385dbe61d42f7bbaff817592fff9ffd9d25a931a6->leave($__internal_8b8f3267822441d7f0b3c46385dbe61d42f7bbaff817592fff9ffd9d25a931a6_prof);

    }

    // line 65
    public function block___internal_bc6706b691b44f2f02b4d68d88495f0714ceef0770973a444fd4e5745dd058ec($context, array $blocks = array())
    {
        $__internal_0ccf3e6868a78a70d52796bc59858c8d587f521fe4193b2ba41df9e2c2cfd057 = $this->env->getExtension("native_profiler");
        $__internal_0ccf3e6868a78a70d52796bc59858c8d587f521fe4193b2ba41df9e2c2cfd057->enter($__internal_0ccf3e6868a78a70d52796bc59858c8d587f521fe4193b2ba41df9e2c2cfd057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_bc6706b691b44f2f02b4d68d88495f0714ceef0770973a444fd4e5745dd058ec"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_0ccf3e6868a78a70d52796bc59858c8d587f521fe4193b2ba41df9e2c2cfd057->leave($__internal_0ccf3e6868a78a70d52796bc59858c8d587f521fe4193b2ba41df9e2c2cfd057_prof);

    }

    // line 70
    public function block___internal_72015069d53941959a634fad6bd608b065c53708dc65540dedffa9d8cd05939c($context, array $blocks = array())
    {
        $__internal_df8c90d4c2202b4e796c75df8c0c878bd5f374b17bc525d09f97d2cc3ca07772 = $this->env->getExtension("native_profiler");
        $__internal_df8c90d4c2202b4e796c75df8c0c878bd5f374b17bc525d09f97d2cc3ca07772->enter($__internal_df8c90d4c2202b4e796c75df8c0c878bd5f374b17bc525d09f97d2cc3ca07772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_72015069d53941959a634fad6bd608b065c53708dc65540dedffa9d8cd05939c"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_df8c90d4c2202b4e796c75df8c0c878bd5f374b17bc525d09f97d2cc3ca07772->leave($__internal_df8c90d4c2202b4e796c75df8c0c878bd5f374b17bc525d09f97d2cc3ca07772_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81308952d46cfe9c607ec8bf950e1e8f75afec001d82fdb932f7ad52447b0dd3 = $this->env->getExtension("native_profiler");
        $__internal_81308952d46cfe9c607ec8bf950e1e8f75afec001d82fdb932f7ad52447b0dd3->enter($__internal_81308952d46cfe9c607ec8bf950e1e8f75afec001d82fdb932f7ad52447b0dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function autollenado() {

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
        // line 195
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
        
        $__internal_81308952d46cfe9c607ec8bf950e1e8f75afec001d82fdb932f7ad52447b0dd3->leave($__internal_81308952d46cfe9c607ec8bf950e1e8f75afec001d82fdb932f7ad52447b0dd3_prof);

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
        return array (  408 => 195,  337 => 128,  331 => 127,  321 => 71,  315 => 70,  305 => 66,  299 => 65,  289 => 61,  283 => 60,  273 => 56,  267 => 55,  257 => 51,  251 => 50,  241 => 46,  235 => 45,  225 => 41,  219 => 40,  185 => 99,  156 => 72,  154 => 70,  149 => 67,  147 => 65,  142 => 62,  140 => 60,  135 => 57,  133 => 55,  128 => 52,  126 => 50,  121 => 47,  119 => 45,  114 => 42,  112 => 40,  104 => 35,  96 => 30,  90 => 27,  80 => 19,  78 => 18,  69 => 12,  63 => 8,  57 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
