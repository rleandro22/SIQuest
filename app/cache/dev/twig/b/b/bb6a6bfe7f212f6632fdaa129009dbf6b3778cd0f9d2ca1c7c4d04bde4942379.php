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
            '__internal_ad60583310e69d178073b4c5fc9468c904ddbceabb1eef690c9e6fb5bdab5e7b' => array($this, 'block___internal_ad60583310e69d178073b4c5fc9468c904ddbceabb1eef690c9e6fb5bdab5e7b'),
            '__internal_9f30bb6c5e62bb57ca98f06941aa897eada4ac62b0915e61004069b00817c38a' => array($this, 'block___internal_9f30bb6c5e62bb57ca98f06941aa897eada4ac62b0915e61004069b00817c38a'),
            '__internal_e1861f93f9e4622b725264b41b74c52c4a1f5d16b5f86c075f3fdd6904f309aa' => array($this, 'block___internal_e1861f93f9e4622b725264b41b74c52c4a1f5d16b5f86c075f3fdd6904f309aa'),
            '__internal_13b0bc0622b948947941fdd16565ed1103351be0df457d91044f4acb6d13c983' => array($this, 'block___internal_13b0bc0622b948947941fdd16565ed1103351be0df457d91044f4acb6d13c983'),
            '__internal_8235ca30c9940504fbf31a53399abd24301adff2429c402b33ee4d0a4aafaf93' => array($this, 'block___internal_8235ca30c9940504fbf31a53399abd24301adff2429c402b33ee4d0a4aafaf93'),
            '__internal_f6287db0a84afcd44bd9bf7a1fc3bd1684625d0121c26149846763b60e79a5d1' => array($this, 'block___internal_f6287db0a84afcd44bd9bf7a1fc3bd1684625d0121c26149846763b60e79a5d1'),
            '__internal_e195242910be2b65fbd0d2dd66a17286dae30abf11fe7fcb8259febee0e301f3' => array($this, 'block___internal_e195242910be2b65fbd0d2dd66a17286dae30abf11fe7fcb8259febee0e301f3'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c03dea73032e513111833ac001030ddb116264d70912d47d8fd1a467f2debe79 = $this->env->getExtension("native_profiler");
        $__internal_c03dea73032e513111833ac001030ddb116264d70912d47d8fd1a467f2debe79->enter($__internal_c03dea73032e513111833ac001030ddb116264d70912d47d8fd1a467f2debe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03dea73032e513111833ac001030ddb116264d70912d47d8fd1a467f2debe79->leave($__internal_c03dea73032e513111833ac001030ddb116264d70912d47d8fd1a467f2debe79_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a4eee7350f8d7087bfafeb72bd860526e8db3555430492d7c2eddccad21e822f = $this->env->getExtension("native_profiler");
        $__internal_a4eee7350f8d7087bfafeb72bd860526e8db3555430492d7c2eddccad21e822f->enter($__internal_a4eee7350f8d7087bfafeb72bd860526e8db3555430492d7c2eddccad21e822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_a4eee7350f8d7087bfafeb72bd860526e8db3555430492d7c2eddccad21e822f->leave($__internal_a4eee7350f8d7087bfafeb72bd860526e8db3555430492d7c2eddccad21e822f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e69c817325e54443e23ac3267d254e2a8ea0565eb8c4048030d7284a1e35796 = $this->env->getExtension("native_profiler");
        $__internal_6e69c817325e54443e23ac3267d254e2a8ea0565eb8c4048030d7284a1e35796->enter($__internal_6e69c817325e54443e23ac3267d254e2a8ea0565eb8c4048030d7284a1e35796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ad60583310e69d178073b4c5fc9468c904ddbceabb1eef690c9e6fb5bdab5e7b", $context, $blocks));
        // line 43
        echo "\">
                        </div>
                        <div id=\"areas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 46
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9f30bb6c5e62bb57ca98f06941aa897eada4ac62b0915e61004069b00817c38a", $context, $blocks));
        // line 48
        echo "\">
                        </div>
                        <div id=\"grupos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 51
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_e1861f93f9e4622b725264b41b74c52c4a1f5d16b5f86c075f3fdd6904f309aa", $context, $blocks));
        // line 53
        echo "\">
                        </div>
                        <div id=\"triangulos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 56
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_13b0bc0622b948947941fdd16565ed1103351be0df457d91044f4acb6d13c983", $context, $blocks));
        // line 58
        echo "\">
                        </div>
                        <div id=\"tipospruebas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 61
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8235ca30c9940504fbf31a53399abd24301adff2429c402b33ee4d0a4aafaf93", $context, $blocks));
        // line 63
        echo "\">
                        </div>
                        <div id=\"tiposrespuestas\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 66
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_f6287db0a84afcd44bd9bf7a1fc3bd1684625d0121c26149846763b60e79a5d1", $context, $blocks));
        // line 68
        echo "\">
                        </div>
                        <div id=\"conjuntos\" data-filter=\"#filter\" data-prototype=\"
                             ";
        // line 71
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_e195242910be2b65fbd0d2dd66a17286dae30abf11fe7fcb8259febee0e301f3", $context, $blocks));
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
        
        $__internal_6e69c817325e54443e23ac3267d254e2a8ea0565eb8c4048030d7284a1e35796->leave($__internal_6e69c817325e54443e23ac3267d254e2a8ea0565eb8c4048030d7284a1e35796_prof);

    }

    // line 41
    public function block___internal_ad60583310e69d178073b4c5fc9468c904ddbceabb1eef690c9e6fb5bdab5e7b($context, array $blocks = array())
    {
        $__internal_166d6fe6f2dca952962defbe95505abb61528336b123abfc84cd2c2a41008fc4 = $this->env->getExtension("native_profiler");
        $__internal_166d6fe6f2dca952962defbe95505abb61528336b123abfc84cd2c2a41008fc4->enter($__internal_166d6fe6f2dca952962defbe95505abb61528336b123abfc84cd2c2a41008fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_ad60583310e69d178073b4c5fc9468c904ddbceabb1eef690c9e6fb5bdab5e7b"));

        // line 42
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_166d6fe6f2dca952962defbe95505abb61528336b123abfc84cd2c2a41008fc4->leave($__internal_166d6fe6f2dca952962defbe95505abb61528336b123abfc84cd2c2a41008fc4_prof);

    }

    // line 46
    public function block___internal_9f30bb6c5e62bb57ca98f06941aa897eada4ac62b0915e61004069b00817c38a($context, array $blocks = array())
    {
        $__internal_e39dadf371a8ebfa1427e8b75128b435c74b8e10da7196e070c7d96038a01bad = $this->env->getExtension("native_profiler");
        $__internal_e39dadf371a8ebfa1427e8b75128b435c74b8e10da7196e070c7d96038a01bad->enter($__internal_e39dadf371a8ebfa1427e8b75128b435c74b8e10da7196e070c7d96038a01bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9f30bb6c5e62bb57ca98f06941aa897eada4ac62b0915e61004069b00817c38a"));

        // line 47
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_e39dadf371a8ebfa1427e8b75128b435c74b8e10da7196e070c7d96038a01bad->leave($__internal_e39dadf371a8ebfa1427e8b75128b435c74b8e10da7196e070c7d96038a01bad_prof);

    }

    // line 51
    public function block___internal_e1861f93f9e4622b725264b41b74c52c4a1f5d16b5f86c075f3fdd6904f309aa($context, array $blocks = array())
    {
        $__internal_042051a89c66eb499b4d303dcde009ef668480e48cc9795676344fd96f3fb6bb = $this->env->getExtension("native_profiler");
        $__internal_042051a89c66eb499b4d303dcde009ef668480e48cc9795676344fd96f3fb6bb->enter($__internal_042051a89c66eb499b4d303dcde009ef668480e48cc9795676344fd96f3fb6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_e1861f93f9e4622b725264b41b74c52c4a1f5d16b5f86c075f3fdd6904f309aa"));

        // line 52
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_042051a89c66eb499b4d303dcde009ef668480e48cc9795676344fd96f3fb6bb->leave($__internal_042051a89c66eb499b4d303dcde009ef668480e48cc9795676344fd96f3fb6bb_prof);

    }

    // line 56
    public function block___internal_13b0bc0622b948947941fdd16565ed1103351be0df457d91044f4acb6d13c983($context, array $blocks = array())
    {
        $__internal_d3c6e1fefe2a8c14e852114c94f12ef7aecc73d83ed0b3c95896e1ba8a2a3cfb = $this->env->getExtension("native_profiler");
        $__internal_d3c6e1fefe2a8c14e852114c94f12ef7aecc73d83ed0b3c95896e1ba8a2a3cfb->enter($__internal_d3c6e1fefe2a8c14e852114c94f12ef7aecc73d83ed0b3c95896e1ba8a2a3cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_13b0bc0622b948947941fdd16565ed1103351be0df457d91044f4acb6d13c983"));

        // line 57
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_d3c6e1fefe2a8c14e852114c94f12ef7aecc73d83ed0b3c95896e1ba8a2a3cfb->leave($__internal_d3c6e1fefe2a8c14e852114c94f12ef7aecc73d83ed0b3c95896e1ba8a2a3cfb_prof);

    }

    // line 61
    public function block___internal_8235ca30c9940504fbf31a53399abd24301adff2429c402b33ee4d0a4aafaf93($context, array $blocks = array())
    {
        $__internal_f7e67592696296540c97103636ecddb7861ef2568bc26e89901cf6e3b180185d = $this->env->getExtension("native_profiler");
        $__internal_f7e67592696296540c97103636ecddb7861ef2568bc26e89901cf6e3b180185d->enter($__internal_f7e67592696296540c97103636ecddb7861ef2568bc26e89901cf6e3b180185d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_8235ca30c9940504fbf31a53399abd24301adff2429c402b33ee4d0a4aafaf93"));

        // line 62
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_f7e67592696296540c97103636ecddb7861ef2568bc26e89901cf6e3b180185d->leave($__internal_f7e67592696296540c97103636ecddb7861ef2568bc26e89901cf6e3b180185d_prof);

    }

    // line 66
    public function block___internal_f6287db0a84afcd44bd9bf7a1fc3bd1684625d0121c26149846763b60e79a5d1($context, array $blocks = array())
    {
        $__internal_8198ae86a80169cf977ae5acffd353e7e161a1b96a6e28e95054c0ead775b1b8 = $this->env->getExtension("native_profiler");
        $__internal_8198ae86a80169cf977ae5acffd353e7e161a1b96a6e28e95054c0ead775b1b8->enter($__internal_8198ae86a80169cf977ae5acffd353e7e161a1b96a6e28e95054c0ead775b1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f6287db0a84afcd44bd9bf7a1fc3bd1684625d0121c26149846763b60e79a5d1"));

        // line 67
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_8198ae86a80169cf977ae5acffd353e7e161a1b96a6e28e95054c0ead775b1b8->leave($__internal_8198ae86a80169cf977ae5acffd353e7e161a1b96a6e28e95054c0ead775b1b8_prof);

    }

    // line 71
    public function block___internal_e195242910be2b65fbd0d2dd66a17286dae30abf11fe7fcb8259febee0e301f3($context, array $blocks = array())
    {
        $__internal_344d303d92a8b6e210e08bb42c57883ea17d5f6d10f3c5b782716cb3304ce566 = $this->env->getExtension("native_profiler");
        $__internal_344d303d92a8b6e210e08bb42c57883ea17d5f6d10f3c5b782716cb3304ce566->enter($__internal_344d303d92a8b6e210e08bb42c57883ea17d5f6d10f3c5b782716cb3304ce566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_e195242910be2b65fbd0d2dd66a17286dae30abf11fe7fcb8259febee0e301f3"));

        // line 72
        echo "                                 ";
        echo twig_include($this->env, $context, "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parametroConjunto", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
        
        $__internal_344d303d92a8b6e210e08bb42c57883ea17d5f6d10f3c5b782716cb3304ce566->leave($__internal_344d303d92a8b6e210e08bb42c57883ea17d5f6d10f3c5b782716cb3304ce566_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f6415471eb5d0b4a254f550b3158168f2556c5fdab7dc690a3e46f9282e12dd = $this->env->getExtension("native_profiler");
        $__internal_7f6415471eb5d0b4a254f550b3158168f2556c5fdab7dc690a3e46f9282e12dd->enter($__internal_7f6415471eb5d0b4a254f550b3158168f2556c5fdab7dc690a3e46f9282e12dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                var tbl = \$('#tablaPreguntas tr').map(function () {
                    return \$(this).find('.celdaId').map(function () {
                        return \$(this).text();
                    }).get();
                }).get();
                alert(JSON.stringify(tbl));
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
        
        $__internal_7f6415471eb5d0b4a254f550b3158168f2556c5fdab7dc690a3e46f9282e12dd->leave($__internal_7f6415471eb5d0b4a254f550b3158168f2556c5fdab7dc690a3e46f9282e12dd_prof);

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
