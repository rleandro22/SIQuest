<?php

/* UciAdministradorBundle:VistaAtributosPmbok:indiceAtributosPmbok.html.twig */
class __TwigTemplate_ff34324aedeefe96a03cae3cc63ef2e424a2a940170d7ab82375a4361b1294f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaAtributosPmbok:indiceAtributosPmbok.html.twig", 1);
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
        $__internal_f315450c46cb9c7990a359d4462b568a905023ef3d662b29cf7fdca297acec09 = $this->env->getExtension("native_profiler");
        $__internal_f315450c46cb9c7990a359d4462b568a905023ef3d662b29cf7fdca297acec09->enter($__internal_f315450c46cb9c7990a359d4462b568a905023ef3d662b29cf7fdca297acec09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaAtributosPmbok:indiceAtributosPmbok.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f315450c46cb9c7990a359d4462b568a905023ef3d662b29cf7fdca297acec09->leave($__internal_f315450c46cb9c7990a359d4462b568a905023ef3d662b29cf7fdca297acec09_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b15e1a1040fbd66ea0f4aec7ba1892895c8de0643fd59fa436a56d1ed21eafda = $this->env->getExtension("native_profiler");
        $__internal_b15e1a1040fbd66ea0f4aec7ba1892895c8de0643fd59fa436a56d1ed21eafda->enter($__internal_b15e1a1040fbd66ea0f4aec7ba1892895c8de0643fd59fa436a56d1ed21eafda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_b15e1a1040fbd66ea0f4aec7ba1892895c8de0643fd59fa436a56d1ed21eafda->leave($__internal_b15e1a1040fbd66ea0f4aec7ba1892895c8de0643fd59fa436a56d1ed21eafda_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bafed74331399dadbce085a05aba63146fda4c1431fab1f02b78501208d071e7 = $this->env->getExtension("native_profiler");
        $__internal_bafed74331399dadbce085a05aba63146fda4c1431fab1f02b78501208d071e7->enter($__internal_bafed74331399dadbce085a05aba63146fda4c1431fab1f02b78501208d071e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Listado de Libros</a></li>
            <li class=\"active\">Listado de Atributos PMBok</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoAtributosPmbok.html.twig", "UciAdministradorBundle:VistaAtributosPmbok:indiceAtributosPmbok.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Atributos del PMBok</h1>
                </header>
                <br>

                <br><br>

                <h4 class=\"alert-info\">Areas de conocimiento</h4>
                <br>
                <table class=\"table demo table-bordered\" id=\"tabla\">
                    <thead>
                        <tr>
                            <th style=\"border-right:0;\" data-toggle=\"true\">
                                Nombre del area
                            </th>
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody> 
                        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 44
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "nombreArea", array()), "html", null, true);
            echo " </td>
                                <td>
                                    <a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editarea", array("id" => $this->getAttribute($context["area"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-edit\"></span></a>
                                    <a class=\"speedbump\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletearea", array("id" => $this->getAttribute($context["area"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
                    </tbody>
                </table>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn btn-action\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addarea");
        echo "\">Agregar area</button>
                    </div>
                </div>

                <br><br><br>

                <h4 class=\"alert-info\">Grupos de procesos</h4>
                <br>
                <table class=\"table demo table-bordered\" id=\"tabla\">
                    <thead>
                        <tr>
                            <th style=\"border-right:0;\" data-toggle=\"true\">
                                Nombre del grupo
                            </th>
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody> 
                        ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grupos"]) ? $context["grupos"] : $this->getContext($context, "grupos")));
        foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
            // line 76
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "nombreGrupo", array()), "html", null, true);
            echo " </td>
                                <td>
                                    <a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editgrupo", array("id" => $this->getAttribute($context["grupo"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-edit\"></span></a>
                                    <a class=\"speedbump\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletegrupo", array("id" => $this->getAttribute($context["grupo"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
                    </tbody>
                </table>

                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn btn-action\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addgrupo");
        echo "\">Agregar grupo</button>
                    </div>
                </div>

                <br><br><br>

                <h4 class=\"alert-info\">Triangulos de talento</h4>
                <br>
                <table class=\"table demo table-bordered\" id=\"tabla\">
                    <thead>
                        <tr>
                            <th style=\"border-right:0;\" data-toggle=\"true\">
                                Nombre del triángulo
                            </th>
                            <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                        </tr>
                    </thead>
                    <tbody> 
                        ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["triangulos"]) ? $context["triangulos"] : $this->getContext($context, "triangulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["triangulo"]) {
            // line 109
            echo "                            <tr>
                                <td style=\"border-right:0;\" class=\"primera-columna\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["triangulo"], "nombreTalento", array()), "html", null, true);
            echo " </td>
                                <td>
                                    <a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edittriangulo", array("id" => $this->getAttribute($context["triangulo"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-edit\"></span></a>
                                    <a class=\"speedbump\" href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletetriangulo", array("id" => $this->getAttribute($context["triangulo"], "id", array()))), "html", null, true);
            echo "\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['triangulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
                    </tbody>
                </table>

                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn btn-action\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addtriangulo");
        echo "\">Agregar triángulo</button>
                    </div>
                </div>

                <br><br><br>

                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>



            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_bafed74331399dadbce085a05aba63146fda4c1431fab1f02b78501208d071e7->leave($__internal_bafed74331399dadbce085a05aba63146fda4c1431fab1f02b78501208d071e7_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4d4b01e9024ded5e6517c34e33b44a5751f3558c53b8bd17d21613208165090 = $this->env->getExtension("native_profiler");
        $__internal_c4d4b01e9024ded5e6517c34e33b44a5751f3558c53b8bd17d21613208165090->enter($__internal_c4d4b01e9024ded5e6517c34e33b44a5751f3558c53b8bd17d21613208165090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function alertTimeout(wait) {
            setTimeout(function () {
                \$('#alert_placeholder').children('.alert:first-child').remove();
            }, wait);
        }

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
        
        $__internal_c4d4b01e9024ded5e6517c34e33b44a5751f3558c53b8bd17d21613208165090->leave($__internal_c4d4b01e9024ded5e6517c34e33b44a5751f3558c53b8bd17d21613208165090_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaAtributosPmbok:indiceAtributosPmbok.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 145,  272 => 144,  245 => 123,  237 => 117,  227 => 113,  223 => 112,  218 => 110,  215 => 109,  211 => 108,  190 => 90,  182 => 84,  172 => 80,  168 => 79,  163 => 77,  160 => 76,  156 => 75,  135 => 57,  128 => 52,  118 => 48,  114 => 47,  109 => 45,  106 => 44,  102 => 43,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
