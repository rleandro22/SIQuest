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
        $__internal_80ee539034de9aa77a3ba80ffe4c5b9f35b0c7e06c67561557107ac61d888778 = $this->env->getExtension("native_profiler");
        $__internal_80ee539034de9aa77a3ba80ffe4c5b9f35b0c7e06c67561557107ac61d888778->enter($__internal_80ee539034de9aa77a3ba80ffe4c5b9f35b0c7e06c67561557107ac61d888778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ee539034de9aa77a3ba80ffe4c5b9f35b0c7e06c67561557107ac61d888778->leave($__internal_80ee539034de9aa77a3ba80ffe4c5b9f35b0c7e06c67561557107ac61d888778_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f6971629c0095dfc3628a4dd3540fdd224f55dc2122f599fbe104795bb32ae1d = $this->env->getExtension("native_profiler");
        $__internal_f6971629c0095dfc3628a4dd3540fdd224f55dc2122f599fbe104795bb32ae1d->enter($__internal_f6971629c0095dfc3628a4dd3540fdd224f55dc2122f599fbe104795bb32ae1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_f6971629c0095dfc3628a4dd3540fdd224f55dc2122f599fbe104795bb32ae1d->leave($__internal_f6971629c0095dfc3628a4dd3540fdd224f55dc2122f599fbe104795bb32ae1d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a64ff4e7daac128376db6c66bddeac20efe831c0e15a49069dc3531d9e6d5ff0 = $this->env->getExtension("native_profiler");
        $__internal_a64ff4e7daac128376db6c66bddeac20efe831c0e15a49069dc3531d9e6d5ff0->enter($__internal_a64ff4e7daac128376db6c66bddeac20efe831c0e15a49069dc3531d9e6d5ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a64ff4e7daac128376db6c66bddeac20efe831c0e15a49069dc3531d9e6d5ff0->leave($__internal_a64ff4e7daac128376db6c66bddeac20efe831c0e15a49069dc3531d9e6d5ff0_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8bbf5175f8fee3125dbe1911287228ca7fa484211e174e64dc199ff6cef7212 = $this->env->getExtension("native_profiler");
        $__internal_b8bbf5175f8fee3125dbe1911287228ca7fa484211e174e64dc199ff6cef7212->enter($__internal_b8bbf5175f8fee3125dbe1911287228ca7fa484211e174e64dc199ff6cef7212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b8bbf5175f8fee3125dbe1911287228ca7fa484211e174e64dc199ff6cef7212->leave($__internal_b8bbf5175f8fee3125dbe1911287228ca7fa484211e174e64dc199ff6cef7212_prof);

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
