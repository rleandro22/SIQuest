<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_e6fbca10fe444ed49404c354390755e8037cabafcfa0786263c75f1d0957f5eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bac92dd890f94d10022eca38b96f694dcef956362bdf3742cab27628e3a64b10 = $this->env->getExtension("native_profiler");
        $__internal_bac92dd890f94d10022eca38b96f694dcef956362bdf3742cab27628e3a64b10->enter($__internal_bac92dd890f94d10022eca38b96f694dcef956362bdf3742cab27628e3a64b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac92dd890f94d10022eca38b96f694dcef956362bdf3742cab27628e3a64b10->leave($__internal_bac92dd890f94d10022eca38b96f694dcef956362bdf3742cab27628e3a64b10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d85bb0250367bcd81430558555b90f1d5fa1d2a02fa6caf55981e01a01f06e0 = $this->env->getExtension("native_profiler");
        $__internal_7d85bb0250367bcd81430558555b90f1d5fa1d2a02fa6caf55981e01a01f06e0->enter($__internal_7d85bb0250367bcd81430558555b90f1d5fa1d2a02fa6caf55981e01a01f06e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <img height=\"28\" alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbElEQVRIx2NgGAXUBowMDAwMaWlp/6ll4KxZsxhZYJy0tDRqGMjAwMDAwEQL77OgCxSXlJBsSG9PDwqfJi6lj/fRvTJ4XYocUTBXE4q8oRtRRBnKwsw8RFw6fA0lKkd1dnYOIpfCCthRMIIAAI0IFu9Hxh7ZAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/twig.html.twig", 27)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_7d85bb0250367bcd81430558555b90f1d5fa1d2a02fa6caf55981e01a01f06e0->leave($__internal_7d85bb0250367bcd81430558555b90f1d5fa1d2a02fa6caf55981e01a01f06e0_prof);

    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        $__internal_780bd5a453d2b5429b8d83c9ebafe40b282523a54640d6d40b1048c9ec8d9248 = $this->env->getExtension("native_profiler");
        $__internal_780bd5a453d2b5429b8d83c9ebafe40b282523a54640d6d40b1048c9ec8d9248->enter($__internal_780bd5a453d2b5429b8d83c9ebafe40b282523a54640d6d40b1048c9ec8d9248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 31
        echo "<span class=\"label\">
    <span class=\"icon\"><img alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAgCAYAAAABtRhCAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbklEQVRIx2NgGAVDHTDCGGlpaf9pZcmsWbPg9rAgS6SlpdHCMhQ+E72DlAWbYHFJCcUG9/b0YBWnuw9HLaRPosEV4cPHh9iyBczXxGaZ0WxBfBwwM4/mw1ELRy0c4MK7s7NzCPsQvYU1CkYBNgAAV5UW+fU+ZL4AAAAASUVORK5CYII=\"></span>
    <strong>Twig</strong>
    <span class=\"count\">
        <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 36
        echo twig_escape_filter($this->env, sprintf("%0.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array())), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_780bd5a453d2b5429b8d83c9ebafe40b282523a54640d6d40b1048c9ec8d9248->leave($__internal_780bd5a453d2b5429b8d83c9ebafe40b282523a54640d6d40b1048c9ec8d9248_prof);

    }

    // line 41
    public function block_panel($context, array $blocks = array())
    {
        $__internal_125a838db6e1fedd1c8d947e05eb5b3807bbce8af36380401990a4f4cd570e64 = $this->env->getExtension("native_profiler");
        $__internal_125a838db6e1fedd1c8d947e05eb5b3807bbce8af36380401990a4f4cd570e64->enter($__internal_125a838db6e1fedd1c8d947e05eb5b3807bbce8af36380401990a4f4cd570e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 42
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array())) {
            // line 43
            echo "        <h2>Twig Stats</h2>

        <table>
            <tr>
                <th>Total Render Time<br /><small>including sub-requests rendering time</small></th>
                <td><pre>";
            // line 48
            echo twig_escape_filter($this->env, sprintf("%0.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo "</pre></td>
            </tr>
            <tr>
                <th scope=\"col\" style=\"width: 30%\">Template Calls</th>
                <td scope=\"col\" style=\"width: 60%\"><pre>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</pre></td>
            </tr>
            <tr>
                <th>Block Calls</th>
                <td><pre>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</pre></td>
            </tr>
            <tr>
                <th>Macro Calls</th>
                <td><pre>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</pre></td>
            </tr>
        </table>

        <h2>Rendered Templates</h2>

        <table>
            <tr>
                <th scope=\"col\">Template Name</th>
                <th scope=\"col\">Render Count</th>
            </tr>
            ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 72
                echo "                <tr>
                    <td><code>";
                // line 73
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</code></td>
                    <td><pre>";
                // line 74
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</pre></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </table>

        <h2>Rendering Call Graph</h2>

        ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 83
            echo "        <p><em>No Twig templates were rendered for this request.</em></p>
    ";
        }
        
        $__internal_125a838db6e1fedd1c8d947e05eb5b3807bbce8af36380401990a4f4cd570e64->leave($__internal_125a838db6e1fedd1c8d947e05eb5b3807bbce8af36380401990a4f4cd570e64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 83,  202 => 81,  196 => 77,  187 => 74,  183 => 73,  180 => 72,  176 => 71,  162 => 60,  155 => 56,  148 => 52,  141 => 48,  134 => 43,  131 => 42,  125 => 41,  114 => 36,  110 => 35,  104 => 31,  98 => 30,  90 => 27,  84 => 24,  77 => 20,  70 => 16,  63 => 12,  59 => 10,  56 => 9,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
