<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_59aecf009bfb9029046f014f1c5485877e398abfdea395e47349aec5071c1542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciAdministradorBundle::base.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fabe1e27be84d12f452c772779cac5f1f525f3b64a0237dda86740fa08055cb = $this->env->getExtension("native_profiler");
        $__internal_2fabe1e27be84d12f452c772779cac5f1f525f3b64a0237dda86740fa08055cb->enter($__internal_2fabe1e27be84d12f452c772779cac5f1f525f3b64a0237dda86740fa08055cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fabe1e27be84d12f452c772779cac5f1f525f3b64a0237dda86740fa08055cb->leave($__internal_2fabe1e27be84d12f452c772779cac5f1f525f3b64a0237dda86740fa08055cb_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1c7208f41877630f67219ae8052aed95e250dc054e098da5806b0dfec0fa310 = $this->env->getExtension("native_profiler");
        $__internal_e1c7208f41877630f67219ae8052aed95e250dc054e098da5806b0dfec0fa310->enter($__internal_e1c7208f41877630f67219ae8052aed95e250dc054e098da5806b0dfec0fa310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menuvertcss.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_e1c7208f41877630f67219ae8052aed95e250dc054e098da5806b0dfec0fa310->leave($__internal_e1c7208f41877630f67219ae8052aed95e250dc054e098da5806b0dfec0fa310_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_4c971dc5cabf0f87b6ef17badd5b9bed74e8bde035474f997dc5fdfc71519e2b = $this->env->getExtension("native_profiler");
        $__internal_4c971dc5cabf0f87b6ef17badd5b9bed74e8bde035474f997dc5fdfc71519e2b->enter($__internal_4c971dc5cabf0f87b6ef17badd5b9bed74e8bde035474f997dc5fdfc71519e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_4c971dc5cabf0f87b6ef17badd5b9bed74e8bde035474f997dc5fdfc71519e2b->leave($__internal_4c971dc5cabf0f87b6ef17badd5b9bed74e8bde035474f997dc5fdfc71519e2b_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b6cd7a361656e08c9a7e601b2176200d91a3e76427089ab8d9d7dcd160e8a505 = $this->env->getExtension("native_profiler");
        $__internal_b6cd7a361656e08c9a7e601b2176200d91a3e76427089ab8d9d7dcd160e8a505->enter($__internal_b6cd7a361656e08c9a7e601b2176200d91a3e76427089ab8d9d7dcd160e8a505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                </ul>
            </li>
            <li>
                <a class=\"btn\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_b6cd7a361656e08c9a7e601b2176200d91a3e76427089ab8d9d7dcd160e8a505->leave($__internal_b6cd7a361656e08c9a7e601b2176200d91a3e76427089ab8d9d7dcd160e8a505_prof);

    }

    // line 36
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_2ae0c8700a1bc374ff807add5b324abefd1b5f224dc065c649c70f876b12fa55 = $this->env->getExtension("native_profiler");
        $__internal_2ae0c8700a1bc374ff807add5b324abefd1b5f224dc065c649c70f876b12fa55->enter($__internal_2ae0c8700a1bc374ff807add5b324abefd1b5f224dc065c649c70f876b12fa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 37
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"about.html\">Ayuda</a> |
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_2ae0c8700a1bc374ff807add5b324abefd1b5f224dc065c649c70f876b12fa55->leave($__internal_2ae0c8700a1bc374ff807add5b324abefd1b5f224dc065c649c70f876b12fa55_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b27d392f6955485eb41e034b688636adca87167cd86e2fc1bc25a1a54cd95efa = $this->env->getExtension("native_profiler");
        $__internal_b27d392f6955485eb41e034b688636adca87167cd86e2fc1bc25a1a54cd95efa->enter($__internal_b27d392f6955485eb41e034b688636adca87167cd86e2fc1bc25a1a54cd95efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_b27d392f6955485eb41e034b688636adca87167cd86e2fc1bc25a1a54cd95efa->leave($__internal_b27d392f6955485eb41e034b688636adca87167cd86e2fc1bc25a1a54cd95efa_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 51,  180 => 50,  176 => 49,  172 => 48,  168 => 47,  163 => 46,  157 => 45,  147 => 40,  142 => 38,  139 => 37,  133 => 36,  122 => 31,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
