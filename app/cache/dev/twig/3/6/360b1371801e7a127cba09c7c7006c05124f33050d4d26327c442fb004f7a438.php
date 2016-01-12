<?php

/* UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig */
class __TwigTemplate_360b1371801e7a127cba09c7c7006c05124f33050d4d26327c442fb004f7a438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig", 1);
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
        $__internal_aff8ae8bc7b946a56f63f2fa41a418124bfc3d063e39072402df58a929e3c687 = $this->env->getExtension("native_profiler");
        $__internal_aff8ae8bc7b946a56f63f2fa41a418124bfc3d063e39072402df58a929e3c687->enter($__internal_aff8ae8bc7b946a56f63f2fa41a418124bfc3d063e39072402df58a929e3c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff8ae8bc7b946a56f63f2fa41a418124bfc3d063e39072402df58a929e3c687->leave($__internal_aff8ae8bc7b946a56f63f2fa41a418124bfc3d063e39072402df58a929e3c687_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b187c2f69b9be60ca29d31b33b516deeaa9a251fddfee2f9885a883fef26d3d4 = $this->env->getExtension("native_profiler");
        $__internal_b187c2f69b9be60ca29d31b33b516deeaa9a251fddfee2f9885a883fef26d3d4->enter($__internal_b187c2f69b9be60ca29d31b33b516deeaa9a251fddfee2f9885a883fef26d3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_b187c2f69b9be60ca29d31b33b516deeaa9a251fddfee2f9885a883fef26d3d4->leave($__internal_b187c2f69b9be60ca29d31b33b516deeaa9a251fddfee2f9885a883fef26d3d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0591c3298c9135da7885f9ce2ed892378e8f31aba6a16e357b7f8b10a7e40d82 = $this->env->getExtension("native_profiler");
        $__internal_0591c3298c9135da7885f9ce2ed892378e8f31aba6a16e357b7f8b10a7e40d82->enter($__internal_0591c3298c9135da7885f9ce2ed892378e8f31aba6a16e357b7f8b10a7e40d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Listado de Solicitudes</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig", "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Ver solicitudes</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"col-sm-12\">
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        <label>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
        echo "</label><br>
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
        echo "
                                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget', array("attr" => array("onChange" => "this.form.submit()")));
        echo "
                                    </div>
                                </div>
                                <br><br>
                            </div>
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </form>
                    </div>
                </div>

                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
        <br><br><br><br>

        <div class=\"row\">

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                </div>
            </div>
            <br>
            <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                <thead>
                    <tr>
                        <th data-hide=\"phone\">
                            Num.
                        </th>
                        <th data-toggle=\"true\">
                            Texto
                        </th>
                        <th data-hide=\"phone\">
                            Activa
                        </th>
                        <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                    </tr>
                </thead>
                <tbody> 
                    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 78
            echo "                        <tr>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textosolicitud", array()), "html", null, true);
            echo "</td>
                            ";
            // line 81
            if (($this->getAttribute($context["entity"], "activa", array()) == "1")) {
                // line 82
                echo "                                <td><span class=\"status-metro status-active\" title=\"Active\">Si</span></td>
                            ";
            } else {
                // line 84
                echo "                                <td><span class=\"status-metro status-suspended\" title=\"Active\">No</span></td>
                            ";
            }
            // line 86
            echo "                            <td><a data-toggle=\"modal\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editsolicitud", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_borrarsolicitud", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </tbody>
            </table>

            <br><br>

        </div>

        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

        </div>

    </div>\t<!-- /container -->

";
        
        $__internal_0591c3298c9135da7885f9ce2ed892378e8f31aba6a16e357b7f8b10a7e40d82->leave($__internal_0591c3298c9135da7885f9ce2ed892378e8f31aba6a16e357b7f8b10a7e40d82_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23b2903eadcc7743f22a190a461b0db9f88787ed59346af3b224cdd43c2a187b = $this->env->getExtension("native_profiler");
        $__internal_23b2903eadcc7743f22a190a461b0db9f88787ed59346af3b224cdd43c2a187b->enter($__internal_23b2903eadcc7743f22a190a461b0db9f88787ed59346af3b224cdd43c2a187b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
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
        
        $__internal_23b2903eadcc7743f22a190a461b0db9f88787ed59346af3b224cdd43c2a187b->leave($__internal_23b2903eadcc7743f22a190a461b0db9f88787ed59346af3b224cdd43c2a187b_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 107,  208 => 106,  188 => 91,  178 => 87,  173 => 86,  169 => 84,  165 => 82,  163 => 81,  159 => 80,  155 => 79,  152 => 78,  148 => 77,  110 => 42,  102 => 37,  98 => 36,  94 => 35,  87 => 31,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}