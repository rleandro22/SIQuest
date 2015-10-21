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
        $__internal_9056bb77f20eb726e9a551a8dd276ff9f34b0630772c22e2cc62e5eb92a6d67d = $this->env->getExtension("native_profiler");
        $__internal_9056bb77f20eb726e9a551a8dd276ff9f34b0630772c22e2cc62e5eb92a6d67d->enter($__internal_9056bb77f20eb726e9a551a8dd276ff9f34b0630772c22e2cc62e5eb92a6d67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9056bb77f20eb726e9a551a8dd276ff9f34b0630772c22e2cc62e5eb92a6d67d->leave($__internal_9056bb77f20eb726e9a551a8dd276ff9f34b0630772c22e2cc62e5eb92a6d67d_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d43a56987d0bd88674e3c7d5c7021bcc3779712ded4a5ed3bf75163cc4e2954b = $this->env->getExtension("native_profiler");
        $__internal_d43a56987d0bd88674e3c7d5c7021bcc3779712ded4a5ed3bf75163cc4e2954b->enter($__internal_d43a56987d0bd88674e3c7d5c7021bcc3779712ded4a5ed3bf75163cc4e2954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_d43a56987d0bd88674e3c7d5c7021bcc3779712ded4a5ed3bf75163cc4e2954b->leave($__internal_d43a56987d0bd88674e3c7d5c7021bcc3779712ded4a5ed3bf75163cc4e2954b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea1bae46ea6438159f9cf5633a3b3a9ba06d82226fc40d1aff57b4c0d34f3941 = $this->env->getExtension("native_profiler");
        $__internal_ea1bae46ea6438159f9cf5633a3b3a9ba06d82226fc40d1aff57b4c0d34f3941->enter($__internal_ea1bae46ea6438159f9cf5633a3b3a9ba06d82226fc40d1aff57b4c0d34f3941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecategoria", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a></div>
                            </div>

                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_indicecurso", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
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
        
        $__internal_ea1bae46ea6438159f9cf5633a3b3a9ba06d82226fc40d1aff57b4c0d34f3941->leave($__internal_ea1bae46ea6438159f9cf5633a3b3a9ba06d82226fc40d1aff57b4c0d34f3941_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9df1e10a8a75084ac488c975b6ef3b8de5b4b74cde9a0f8e2b27b93a57055763 = $this->env->getExtension("native_profiler");
        $__internal_9df1e10a8a75084ac488c975b6ef3b8de5b4b74cde9a0f8e2b27b93a57055763->enter($__internal_9df1e10a8a75084ac488c975b6ef3b8de5b4b74cde9a0f8e2b27b93a57055763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9df1e10a8a75084ac488c975b6ef3b8de5b4b74cde9a0f8e2b27b93a57055763->leave($__internal_9df1e10a8a75084ac488c975b6ef3b8de5b4b74cde9a0f8e2b27b93a57055763_prof);

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
        return array (  154 => 62,  148 => 61,  128 => 46,  117 => 41,  113 => 40,  107 => 37,  103 => 36,  98 => 34,  94 => 33,  89 => 30,  85 => 29,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
