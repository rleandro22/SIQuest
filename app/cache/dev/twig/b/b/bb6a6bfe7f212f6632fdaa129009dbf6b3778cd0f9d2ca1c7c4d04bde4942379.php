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
            '__internal_9cd084969592a86f90cf4e2648b8df2be0b4a6c0333f7aae3a6cf9b772d9c091' => array($this, 'block___internal_9cd084969592a86f90cf4e2648b8df2be0b4a6c0333f7aae3a6cf9b772d9c091'),
            '__internal_d04783ad38535d178dec5cd2126f03477174df82bd3bcdedd624387293ae8b71' => array($this, 'block___internal_d04783ad38535d178dec5cd2126f03477174df82bd3bcdedd624387293ae8b71'),
            '__internal_6af357602c0765328ae1b1acf25e2fee18ec9861fd870e33052b028f6118872a' => array($this, 'block___internal_6af357602c0765328ae1b1acf25e2fee18ec9861fd870e33052b028f6118872a'),
            '__internal_320ca9101aea7887fcfce3d9b0fee920946cd12e7bf21d5440ebde127d391e21' => array($this, 'block___internal_320ca9101aea7887fcfce3d9b0fee920946cd12e7bf21d5440ebde127d391e21'),
            '__internal_f234f64f05476df8294933a1092a42ae5ad8f9cf64ca3ab213b9a0ac997605d5' => array($this, 'block___internal_f234f64f05476df8294933a1092a42ae5ad8f9cf64ca3ab213b9a0ac997605d5'),
            '__internal_f5133c96ea495e31a9855da108bb760d3883b57937f23682de8747b61b0381a0' => array($this, 'block___internal_f5133c96ea495e31a9855da108bb760d3883b57937f23682de8747b61b0381a0'),
            '__internal_626c35b99177255ac11398558aa65232bc8df174c1559a9a93d2c1fc2d462bbb' => array($this, 'block___internal_626c35b99177255ac11398558aa65232bc8df174c1559a9a93d2c1fc2d462bbb'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd2a1802c6b641772fffd2860316723efde59127b2a7e57e1760e1c740a166a3 = $this->env->getExtension("native_profiler");
        $__internal_cd2a1802c6b641772fffd2860316723efde59127b2a7e57e1760e1c740a166a3->enter($__internal_cd2a1802c6b641772fffd2860316723efde59127b2a7e57e1760e1c740a166a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2a1802c6b641772fffd2860316723efde59127b2a7e57e1760e1c740a166a3->leave($__internal_cd2a1802c6b641772fffd2860316723efde59127b2a7e57e1760e1c740a166a3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_8fe25f959191bdb097b06d260c7599e2c30a003ab4df8f7df23372d5acc8d4d3 = $this->env->getExtension("native_profiler");
        $__internal_8fe25f959191bdb097b06d260c7599e2c30a003ab4df8f7df23372d5acc8d4d3->enter($__internal_8fe25f959191bdb097b06d260c7599e2c30a003ab4df8f7df23372d5acc8d4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_8fe25f959191bdb097b06d260c7599e2c30a003ab4df8f7df23372d5acc8d4d3->leave($__internal_8fe25f959191bdb097b06d260c7599e2c30a003ab4df8f7df23372d5acc8d4d3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6654eb1d7b88a4a80b0030131d893101b560e521a2d1d501ebaf3f2d0b4fc5ca = $this->env->getExtension("native_profiler");
        $__internal_6654eb1d7b88a4a80b0030131d893101b560e521a2d1d501ebaf3f2d0b4fc5ca->enter($__internal_6654eb1d7b88a4a80b0030131d893101b560e521a2d1d501ebaf3f2d0b4fc5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9cd084969592a86f90cf4e2648b8df2be0b4a6c0333f7aae3a6cf9b772d9c091", $context, $blocks));
        // line 42
        echo "\">
                    </div>
                    <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 45
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d04783ad38535d178dec5cd2126f03477174df82bd3bcdedd624387293ae8b71", $context, $blocks));
        // line 47
        echo "\">
                    </div>
                    <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6af357602c0765328ae1b1acf25e2fee18ec9861fd870e33052b028f6118872a", $context, $blocks));
        // line 52
        echo "\">
                    </div>
                    <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 55
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_320ca9101aea7887fcfce3d9b0fee920946cd12e7bf21d5440ebde127d391e21", $context, $blocks));
        // line 57
        echo "\">
                    </div>
                    <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 60
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f234f64f05476df8294933a1092a42ae5ad8f9cf64ca3ab213b9a0ac997605d5", $context, $blocks));
        // line 62
        echo "\">
                    </div>
                    <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 65
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f5133c96ea495e31a9855da108bb760d3883b57937f23682de8747b61b0381a0", $context, $blocks));
        // line 67
        echo "\">
                    </div>
                    <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                         ";
        // line 70
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_626c35b99177255ac11398558aa65232bc8df174c1559a9a93d2c1fc2d462bbb", $context, $blocks));
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
        
        $__internal_6654eb1d7b88a4a80b0030131d893101b560e521a2d1d501ebaf3f2d0b4fc5ca->leave($__internal_6654eb1d7b88a4a80b0030131d893101b560e521a2d1d501ebaf3f2d0b4fc5ca_prof);

    }

    // line 40
    public function block___internal_9cd084969592a86f90cf4e2648b8df2be0b4a6c0333f7aae3a6cf9b772d9c091($context, array $blocks = array())
    {
        $__internal_c1a704f0b1097d24b9b0a97d97cc2c29b120be3c7918c926dc47aae6f03b8637 = $this->env->getExtension("native_profiler");
        $__internal_c1a704f0b1097d24b9b0a97d97cc2c29b120be3c7918c926dc47aae6f03b8637->enter($__internal_c1a704f0b1097d24b9b0a97d97cc2c29b120be3c7918c926dc47aae6f03b8637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9cd084969592a86f90cf4e2648b8df2be0b4a6c0333f7aae3a6cf9b772d9c091"));

        // line 41
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_c1a704f0b1097d24b9b0a97d97cc2c29b120be3c7918c926dc47aae6f03b8637->leave($__internal_c1a704f0b1097d24b9b0a97d97cc2c29b120be3c7918c926dc47aae6f03b8637_prof);

    }

    // line 45
    public function block___internal_d04783ad38535d178dec5cd2126f03477174df82bd3bcdedd624387293ae8b71($context, array $blocks = array())
    {
        $__internal_af1f148d8887ab006a09b64e7ec0d46fc11b18219a0271296b6aa7ccf27dfec5 = $this->env->getExtension("native_profiler");
        $__internal_af1f148d8887ab006a09b64e7ec0d46fc11b18219a0271296b6aa7ccf27dfec5->enter($__internal_af1f148d8887ab006a09b64e7ec0d46fc11b18219a0271296b6aa7ccf27dfec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_d04783ad38535d178dec5cd2126f03477174df82bd3bcdedd624387293ae8b71"));

        // line 46
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_af1f148d8887ab006a09b64e7ec0d46fc11b18219a0271296b6aa7ccf27dfec5->leave($__internal_af1f148d8887ab006a09b64e7ec0d46fc11b18219a0271296b6aa7ccf27dfec5_prof);

    }

    // line 50
    public function block___internal_6af357602c0765328ae1b1acf25e2fee18ec9861fd870e33052b028f6118872a($context, array $blocks = array())
    {
        $__internal_2cf1b912f4ed9cb0ce57837159b3a7d9b18bc526e05bac3d23c87234e664f452 = $this->env->getExtension("native_profiler");
        $__internal_2cf1b912f4ed9cb0ce57837159b3a7d9b18bc526e05bac3d23c87234e664f452->enter($__internal_2cf1b912f4ed9cb0ce57837159b3a7d9b18bc526e05bac3d23c87234e664f452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6af357602c0765328ae1b1acf25e2fee18ec9861fd870e33052b028f6118872a"));

        // line 51
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_2cf1b912f4ed9cb0ce57837159b3a7d9b18bc526e05bac3d23c87234e664f452->leave($__internal_2cf1b912f4ed9cb0ce57837159b3a7d9b18bc526e05bac3d23c87234e664f452_prof);

    }

    // line 55
    public function block___internal_320ca9101aea7887fcfce3d9b0fee920946cd12e7bf21d5440ebde127d391e21($context, array $blocks = array())
    {
        $__internal_d8bf670d911c71be295968a0fec04cbe3a65d70e56cf54c728b6a89196858cb7 = $this->env->getExtension("native_profiler");
        $__internal_d8bf670d911c71be295968a0fec04cbe3a65d70e56cf54c728b6a89196858cb7->enter($__internal_d8bf670d911c71be295968a0fec04cbe3a65d70e56cf54c728b6a89196858cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_320ca9101aea7887fcfce3d9b0fee920946cd12e7bf21d5440ebde127d391e21"));

        // line 56
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_d8bf670d911c71be295968a0fec04cbe3a65d70e56cf54c728b6a89196858cb7->leave($__internal_d8bf670d911c71be295968a0fec04cbe3a65d70e56cf54c728b6a89196858cb7_prof);

    }

    // line 60
    public function block___internal_f234f64f05476df8294933a1092a42ae5ad8f9cf64ca3ab213b9a0ac997605d5($context, array $blocks = array())
    {
        $__internal_b3599be629b105ac9b7b18800ec768adc447e93bb798cb3e5332aec71a8af5e5 = $this->env->getExtension("native_profiler");
        $__internal_b3599be629b105ac9b7b18800ec768adc447e93bb798cb3e5332aec71a8af5e5->enter($__internal_b3599be629b105ac9b7b18800ec768adc447e93bb798cb3e5332aec71a8af5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f234f64f05476df8294933a1092a42ae5ad8f9cf64ca3ab213b9a0ac997605d5"));

        // line 61
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_b3599be629b105ac9b7b18800ec768adc447e93bb798cb3e5332aec71a8af5e5->leave($__internal_b3599be629b105ac9b7b18800ec768adc447e93bb798cb3e5332aec71a8af5e5_prof);

    }

    // line 65
    public function block___internal_f5133c96ea495e31a9855da108bb760d3883b57937f23682de8747b61b0381a0($context, array $blocks = array())
    {
        $__internal_ee17eaeffc0787b468712c2081e55728dd6c1e9deebe687dc89e745260c1fa88 = $this->env->getExtension("native_profiler");
        $__internal_ee17eaeffc0787b468712c2081e55728dd6c1e9deebe687dc89e745260c1fa88->enter($__internal_ee17eaeffc0787b468712c2081e55728dd6c1e9deebe687dc89e745260c1fa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f5133c96ea495e31a9855da108bb760d3883b57937f23682de8747b61b0381a0"));

        // line 66
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_ee17eaeffc0787b468712c2081e55728dd6c1e9deebe687dc89e745260c1fa88->leave($__internal_ee17eaeffc0787b468712c2081e55728dd6c1e9deebe687dc89e745260c1fa88_prof);

    }

    // line 70
    public function block___internal_626c35b99177255ac11398558aa65232bc8df174c1559a9a93d2c1fc2d462bbb($context, array $blocks = array())
    {
        $__internal_9aac39e1e25a398609d5d1978ef26fe4bcf8d59ba7598612b43335f1cf2bb678 = $this->env->getExtension("native_profiler");
        $__internal_9aac39e1e25a398609d5d1978ef26fe4bcf8d59ba7598612b43335f1cf2bb678->enter($__internal_9aac39e1e25a398609d5d1978ef26fe4bcf8d59ba7598612b43335f1cf2bb678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_626c35b99177255ac11398558aa65232bc8df174c1559a9a93d2c1fc2d462bbb"));

        // line 71
        echo "                             ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                         ";
        
        $__internal_9aac39e1e25a398609d5d1978ef26fe4bcf8d59ba7598612b43335f1cf2bb678->leave($__internal_9aac39e1e25a398609d5d1978ef26fe4bcf8d59ba7598612b43335f1cf2bb678_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f64755334ba92e1fb872c3e75909f945200136b9d38606b4b598f42f6468ab9 = $this->env->getExtension("native_profiler");
        $__internal_3f64755334ba92e1fb872c3e75909f945200136b9d38606b4b598f42f6468ab9->enter($__internal_3f64755334ba92e1fb872c3e75909f945200136b9d38606b4b598f42f6468ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            if (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() == '' || \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() < 0) {
                \$(\"input[id\$='porcentaje']\").attr('readonly', true);
                \$(\"input[id\$='cantidad']\").attr('readonly', true);
            } else {
                \$(\"input[id\$='porcentaje']\").attr('readonly', false);
                \$(\"input[id\$='cantidad']\").attr('readonly', false);
            }
        }

        document.ready = function () {

            \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').bind('click keyup', function () {
                if (\$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val() < 0) {
                    \$('#uci_bundle_basedatosbundle_cuestionario_cantidadPreguntas').val(0);
                }
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
        
        $__internal_3f64755334ba92e1fb872c3e75909f945200136b9d38606b4b598f42f6468ab9->leave($__internal_3f64755334ba92e1fb872c3e75909f945200136b9d38606b4b598f42f6468ab9_prof);

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
