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
        $__internal_8a26a312d4057712ebd6d2b9b3f25e7cf9b3ce68c3b3f555ea374118686e6ebe = $this->env->getExtension("native_profiler");
        $__internal_8a26a312d4057712ebd6d2b9b3f25e7cf9b3ce68c3b3f555ea374118686e6ebe->enter($__internal_8a26a312d4057712ebd6d2b9b3f25e7cf9b3ce68c3b3f555ea374118686e6ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a26a312d4057712ebd6d2b9b3f25e7cf9b3ce68c3b3f555ea374118686e6ebe->leave($__internal_8a26a312d4057712ebd6d2b9b3f25e7cf9b3ce68c3b3f555ea374118686e6ebe_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c1a18d22c9ff42dc331f52cf4dee1072749eaceb062257d4ef87ac23b713d56e = $this->env->getExtension("native_profiler");
        $__internal_c1a18d22c9ff42dc331f52cf4dee1072749eaceb062257d4ef87ac23b713d56e->enter($__internal_c1a18d22c9ff42dc331f52cf4dee1072749eaceb062257d4ef87ac23b713d56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_c1a18d22c9ff42dc331f52cf4dee1072749eaceb062257d4ef87ac23b713d56e->leave($__internal_c1a18d22c9ff42dc331f52cf4dee1072749eaceb062257d4ef87ac23b713d56e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_74471827b070354c0e924c347b394d95f8616dc705bec611470673e47eaf05ea = $this->env->getExtension("native_profiler");
        $__internal_74471827b070354c0e924c347b394d95f8616dc705bec611470673e47eaf05ea->enter($__internal_74471827b070354c0e924c347b394d95f8616dc705bec611470673e47eaf05ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h1 class=\"page-title\">Lista de generaciones</h1>
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
                        <div class=\"thumbnail\">
                            <div class=\"row\">
                                <div class=\"col-md-6\"><a data-toggle=\"modal\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
                                        <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "generacion", array()), "html", null, true);
            echo "</p>
                                    </a></div>
                                <div class=\"col-md-6\"><a data-toggle=\"modal\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <a href=\"#\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
                            </div>

                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categoria.png"), "html", null, true);
            echo "\" alt=\"\">
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_74471827b070354c0e924c347b394d95f8616dc705bec611470673e47eaf05ea->leave($__internal_74471827b070354c0e924c347b394d95f8616dc705bec611470673e47eaf05ea_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df03f2ad35bf3a7d43877c5f51a13a125ddb224649498d60e479a61e1c162cd3 = $this->env->getExtension("native_profiler");
        $__internal_df03f2ad35bf3a7d43877c5f51a13a125ddb224649498d60e479a61e1c162cd3->enter($__internal_df03f2ad35bf3a7d43877c5f51a13a125ddb224649498d60e479a61e1c162cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {

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
        
        $__internal_df03f2ad35bf3a7d43877c5f51a13a125ddb224649498d60e479a61e1c162cd3->leave($__internal_df03f2ad35bf3a7d43877c5f51a13a125ddb224649498d60e479a61e1c162cd3_prof);

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
        return array (  148 => 62,  142 => 61,  122 => 46,  111 => 41,  103 => 36,  98 => 34,  94 => 33,  89 => 30,  85 => 29,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
