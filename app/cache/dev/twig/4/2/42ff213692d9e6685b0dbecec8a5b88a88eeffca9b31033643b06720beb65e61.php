<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_42ff213692d9e6685b0dbecec8a5b88a88eeffca9b31033643b06720beb65e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3235bbaa9cdea6ec0210e61cc9246faf16b6ebbe79979b25b3a17f9bbe26e02 = $this->env->getExtension("native_profiler");
        $__internal_c3235bbaa9cdea6ec0210e61cc9246faf16b6ebbe79979b25b3a17f9bbe26e02->enter($__internal_c3235bbaa9cdea6ec0210e61cc9246faf16b6ebbe79979b25b3a17f9bbe26e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3235bbaa9cdea6ec0210e61cc9246faf16b6ebbe79979b25b3a17f9bbe26e02->leave($__internal_c3235bbaa9cdea6ec0210e61cc9246faf16b6ebbe79979b25b3a17f9bbe26e02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b6681f41f66476bf147ce545ac4d9c26e1a97699c9e3108b8014fe7121ef24 = $this->env->getExtension("native_profiler");
        $__internal_41b6681f41f66476bf147ce545ac4d9c26e1a97699c9e3108b8014fe7121ef24->enter($__internal_41b6681f41f66476bf147ce545ac4d9c26e1a97699c9e3108b8014fe7121ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "@WebProfiler/Profiler/info.html.twig", 5)->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "@WebProfiler/Profiler/info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_41b6681f41f66476bf147ce545ac4d9c26e1a97699c9e3108b8014fe7121ef24->leave($__internal_41b6681f41f66476bf147ce545ac4d9c26e1a97699c9e3108b8014fe7121ef24_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3593539f4478479aa8f1ac9e72953135373bc41cbe190555597ed5258a29a856 = $this->env->getExtension("native_profiler");
        $__internal_3593539f4478479aa8f1ac9e72953135373bc41cbe190555597ed5258a29a856->enter($__internal_3593539f4478479aa8f1ac9e72953135373bc41cbe190555597ed5258a29a856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_3593539f4478479aa8f1ac9e72953135373bc41cbe190555597ed5258a29a856->leave($__internal_3593539f4478479aa8f1ac9e72953135373bc41cbe190555597ed5258a29a856_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
