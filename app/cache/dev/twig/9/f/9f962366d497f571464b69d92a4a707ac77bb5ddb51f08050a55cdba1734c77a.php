<?php

/* UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig */
class __TwigTemplate_9f962366d497f571464b69d92a4a707ac77bb5ddb51f08050a55cdba1734c77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig", 1);
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
        $__internal_e480803a8fc02f37b2a41a5ef3c9c76509837147fa04424bfccb0a410291d772 = $this->env->getExtension("native_profiler");
        $__internal_e480803a8fc02f37b2a41a5ef3c9c76509837147fa04424bfccb0a410291d772->enter($__internal_e480803a8fc02f37b2a41a5ef3c9c76509837147fa04424bfccb0a410291d772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e480803a8fc02f37b2a41a5ef3c9c76509837147fa04424bfccb0a410291d772->leave($__internal_e480803a8fc02f37b2a41a5ef3c9c76509837147fa04424bfccb0a410291d772_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_85ecaeef0296354d8eeb3a15892516fe2f0db44d26a6118835893c9771d6616a = $this->env->getExtension("native_profiler");
        $__internal_85ecaeef0296354d8eeb3a15892516fe2f0db44d26a6118835893c9771d6616a->enter($__internal_85ecaeef0296354d8eeb3a15892516fe2f0db44d26a6118835893c9771d6616a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_85ecaeef0296354d8eeb3a15892516fe2f0db44d26a6118835893c9771d6616a->leave($__internal_85ecaeef0296354d8eeb3a15892516fe2f0db44d26a6118835893c9771d6616a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a33202db0eb3fcd723764362bea223c3400af2d3a12d1213979d0d7e8eebf17 = $this->env->getExtension("native_profiler");
        $__internal_5a33202db0eb3fcd723764362bea223c3400af2d3a12d1213979d0d7e8eebf17->enter($__internal_5a33202db0eb3fcd723764362bea223c3400af2d3a12d1213979d0d7e8eebf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Generaciones</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de categorias</h1>
                </header>
                <br>

                <br><br>
                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                        <a class=\"thumbnail\" data-toggle=\"modal\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
                            <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "generacion", array()), "html", null, true);
            echo "</p>
                            <img class=\"img-responsive\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categoria.png"), "html", null, true);
            echo "\" alt=\"\">
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_5a33202db0eb3fcd723764362bea223c3400af2d3a12d1213979d0d7e8eebf17->leave($__internal_5a33202db0eb3fcd723764362bea223c3400af2d3a12d1213979d0d7e8eebf17_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_283b929c783f25ee151533cbc6529f45fac301899b671e142837be3879553256 = $this->env->getExtension("native_profiler");
        $__internal_283b929c783f25ee151533cbc6529f45fac301899b671e142837be3879553256->enter($__internal_283b929c783f25ee151533cbc6529f45fac301899b671e142837be3879553256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {

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
        
        $__internal_283b929c783f25ee151533cbc6529f45fac301899b671e142837be3879553256->leave($__internal_283b929c783f25ee151533cbc6529f45fac301899b671e142837be3879553256_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  130 => 52,  110 => 37,  100 => 33,  96 => 32,  92 => 31,  89 => 30,  85 => 29,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
