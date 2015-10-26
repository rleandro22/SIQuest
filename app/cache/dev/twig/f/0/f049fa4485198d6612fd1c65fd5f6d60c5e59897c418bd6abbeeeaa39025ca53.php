<?php

/* UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig */
class __TwigTemplate_f049fa4485198d6612fd1c65fd5f6d60c5e59897c418bd6abbeeeaa39025ca53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a670bcb16b727c509cf2ca220113217365b21745ac4b91f4e706148e6f608a44 = $this->env->getExtension("native_profiler");
        $__internal_a670bcb16b727c509cf2ca220113217365b21745ac4b91f4e706148e6f608a44->enter($__internal_a670bcb16b727c509cf2ca220113217365b21745ac4b91f4e706148e6f608a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a670bcb16b727c509cf2ca220113217365b21745ac4b91f4e706148e6f608a44->leave($__internal_a670bcb16b727c509cf2ca220113217365b21745ac4b91f4e706148e6f608a44_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f783793f7e59fb42a0691d16cb8fd565fc7b66f7a7c90afa90438955858458ce = $this->env->getExtension("native_profiler");
        $__internal_f783793f7e59fb42a0691d16cb8fd565fc7b66f7a7c90afa90438955858458ce->enter($__internal_f783793f7e59fb42a0691d16cb8fd565fc7b66f7a7c90afa90438955858458ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_f783793f7e59fb42a0691d16cb8fd565fc7b66f7a7c90afa90438955858458ce->leave($__internal_f783793f7e59fb42a0691d16cb8fd565fc7b66f7a7c90afa90438955858458ce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9be4c869757ba752e66f815b23811a6c41d5548d3261e6fd9b72bd4277291cd1 = $this->env->getExtension("native_profiler");
        $__internal_9be4c869757ba752e66f815b23811a6c41d5548d3261e6fd9b72bd4277291cd1->enter($__internal_9be4c869757ba752e66f815b23811a6c41d5548d3261e6fd9b72bd4277291cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Listado de Preguntas</a></li>
            <li class=\"active\">Registrar pregunta</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig", "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Nueva pregunta</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_registrarPregunta", array("idTipoRespuesta" => $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "id", array()))), "html", null, true);
        echo "\" name=\"formulario\" method=\"POST\" enctype=\"multipart/form-data\">             
                                <h3 class=\"thin text-center\">Registrar una nueva pregunta ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "nombre", array()), "html", null, true);
        echo "</h3>
                                <p class=\"text-center text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoRespuesta"]) ? $context["tipoRespuesta"] : $this->getContext($context, "tipoRespuesta")), "explicacion", array()), "html", null, true);
        echo "</p>
                                <hr>

                                ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "                                    <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                                ";
        }
        // line 40
        echo "
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPagina", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <h3>Respuestas</h3><br>
                                <div class=\"respuestas\" data-prototype=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                                    ";
        // line 86
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "respuesta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 87
            echo "                                        <div class=\"row top-margin\">
                                            <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                                ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["respuesta"], "correcta", array()), 'row');
            echo "
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                </div>
                                <br><br>
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">                     
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Registrar</button>
                                    </div>
                                </div>
                                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>

        <div class=\"row\">

        </div>
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_9be4c869757ba752e66f815b23811a6c41d5548d3261e6fd9b72bd4277291cd1->leave($__internal_9be4c869757ba752e66f815b23811a6c41d5548d3261e6fd9b72bd4277291cd1_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_534d1629b6ba5e0275547086a4290d6a762695e710f66e18d3213cb12fb0e59a = $this->env->getExtension("native_profiler");
        $__internal_534d1629b6ba5e0275547086a4290d6a762695e710f66e18d3213cb12fb0e59a->enter($__internal_534d1629b6ba5e0275547086a4290d6a762695e710f66e18d3213cb12fb0e59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Añadir respuesta</a>');
        var \$newLinkLi = \$('<div></div>').append(\$addTagLink);

        function addTagForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');

            // get the new index
            var index = \$collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, 'Respuesta' + index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            var \$newFormLi = \$('<div style=\"background-color:#F6F6F6; border-radius:10px;padding: 25px;border: 5px solid #003c70;margin: 5px;\"></div><br>').append(newForm);
            \$newLinkLi.before(\$newFormLi);
        }

        document.ready = function () {

            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('div.respuestas');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

            \$addTagLink.on('click', function (e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });


            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            }
            );

            \$('body').on('hidden.bs.modal', '.modal', function () {
                \$('.modal-content', this).empty();
                \$(this).removeData('bs.modal');
            });

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
        
        $__internal_534d1629b6ba5e0275547086a4290d6a762695e710f66e18d3213cb12fb0e59a->leave($__internal_534d1629b6ba5e0275547086a4290d6a762695e710f66e18d3213cb12fb0e59a_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 123,  243 => 122,  217 => 102,  206 => 93,  196 => 89,  192 => 87,  187 => 86,  183 => 84,  174 => 78,  166 => 73,  158 => 68,  150 => 63,  142 => 58,  134 => 53,  126 => 48,  118 => 43,  113 => 40,  107 => 38,  105 => 37,  99 => 34,  95 => 33,  91 => 32,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
