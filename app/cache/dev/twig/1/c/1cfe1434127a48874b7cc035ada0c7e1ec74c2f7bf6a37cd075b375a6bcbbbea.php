<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
<<<<<<< HEAD:app/cache/dev/twig/1/c/1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea.php
        $__internal_8da083d583edbafeb62f94c15639b80a75a2ab2dd7e4ccd8e6c16b213e931552 = $this->env->getExtension("native_profiler");
        $__internal_8da083d583edbafeb62f94c15639b80a75a2ab2dd7e4ccd8e6c16b213e931552->enter($__internal_8da083d583edbafeb62f94c15639b80a75a2ab2dd7e4ccd8e6c16b213e931552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da083d583edbafeb62f94c15639b80a75a2ab2dd7e4ccd8e6c16b213e931552->leave($__internal_8da083d583edbafeb62f94c15639b80a75a2ab2dd7e4ccd8e6c16b213e931552_prof);
=======
        $__internal_66f1e2a4cf4826cfaafcbf5b977dc931fb77d34fdf280a516e28416c68ce2177 = $this->env->getExtension("native_profiler");
        $__internal_66f1e2a4cf4826cfaafcbf5b977dc931fb77d34fdf280a516e28416c68ce2177->enter($__internal_66f1e2a4cf4826cfaafcbf5b977dc931fb77d34fdf280a516e28416c68ce2177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f1e2a4cf4826cfaafcbf5b977dc931fb77d34fdf280a516e28416c68ce2177->leave($__internal_66f1e2a4cf4826cfaafcbf5b977dc931fb77d34fdf280a516e28416c68ce2177_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/0/4/045f58921adbd9113b107b62c47aea4c6adf14895f5aeb1a98ad174d1395885e.php

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/1/c/1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea.php
        $__internal_dbdc1c5bb4555e8125dc5586e7486ffcd09620b6d0ca70a1214a580474d222d1 = $this->env->getExtension("native_profiler");
        $__internal_dbdc1c5bb4555e8125dc5586e7486ffcd09620b6d0ca70a1214a580474d222d1->enter($__internal_dbdc1c5bb4555e8125dc5586e7486ffcd09620b6d0ca70a1214a580474d222d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_1385ab4881ca0926320cf172ab3b0405c20ddd01fc1799592a461bab3fb7038b = $this->env->getExtension("native_profiler");
        $__internal_1385ab4881ca0926320cf172ab3b0405c20ddd01fc1799592a461bab3fb7038b->enter($__internal_1385ab4881ca0926320cf172ab3b0405c20ddd01fc1799592a461bab3fb7038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/0/4/045f58921adbd9113b107b62c47aea4c6adf14895f5aeb1a98ad174d1395885e.php

        // line 4
        echo "    ";
        $context["dumps_count"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array());
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["dumps_count"]) ? $context["dumps_count"] : $this->getContext($context, "dumps_count"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M21 14h-1c-0.3-4.8-4.1-8.7-9-9V4h-1v1c-4.8 0.3-8.7 4.1-9 9H0v1h1c0.3 4.8 4.1 8.7 9 9v1h1v-1 c4.8-0.3 8.7-4.1 9-9h1V14z M11 22v-4h-1v4c-3.7-0.2-6.7-3.2-7-7h4v-1H3c0.2-3.7 3.2-6.7 7-7v4h1V7c3.7 0.2 6.7 3.2 7 7h-4v1h4 C17.7 18.7 14.7 21.7 11 22z\"/></svg>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["dumps_count"]) ? $context["dumps_count"] : $this->getContext($context, "dumps_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>dump()</b>
            </div>
            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 17
                echo "                <div class=\"sf-toolbar-info-piece\">
                    in
                    ";
                // line 19
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 20
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 21
                    echo "                        ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 26
                    echo "                    ";
                } else {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 29
                echo "                    line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                    ";
                // line 30
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            <img src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" onload=\"var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);};\" />
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Debug/Profiler/dump.html.twig", 36)->display(array_merge($context, array("link" => true)));
            // line 37
            echo "    ";
        }
        
<<<<<<< HEAD:app/cache/dev/twig/1/c/1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea.php
        $__internal_dbdc1c5bb4555e8125dc5586e7486ffcd09620b6d0ca70a1214a580474d222d1->leave($__internal_dbdc1c5bb4555e8125dc5586e7486ffcd09620b6d0ca70a1214a580474d222d1_prof);
=======
        $__internal_1385ab4881ca0926320cf172ab3b0405c20ddd01fc1799592a461bab3fb7038b->leave($__internal_1385ab4881ca0926320cf172ab3b0405c20ddd01fc1799592a461bab3fb7038b_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/0/4/045f58921adbd9113b107b62c47aea4c6adf14895f5aeb1a98ad174d1395885e.php

    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/1/c/1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea.php
        $__internal_7b43c23968f6be78019a74318a3e7bb3393d77bcc9fba0c7f18199906a9bb4e5 = $this->env->getExtension("native_profiler");
        $__internal_7b43c23968f6be78019a74318a3e7bb3393d77bcc9fba0c7f18199906a9bb4e5->enter($__internal_7b43c23968f6be78019a74318a3e7bb3393d77bcc9fba0c7f18199906a9bb4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_4ce4f9dcf1fde6884d93ef985062b3c6281eaa7339b6e394f574f85aec165323 = $this->env->getExtension("native_profiler");
        $__internal_4ce4f9dcf1fde6884d93ef985062b3c6281eaa7339b6e394f574f85aec165323->enter($__internal_4ce4f9dcf1fde6884d93ef985062b3c6281eaa7339b6e394f574f85aec165323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/0/4/045f58921adbd9113b107b62c47aea4c6adf14895f5aeb1a98ad174d1395885e.php

        // line 41
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 43
        echo "";
        // line 44
        echo "<svg width=\"28\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 28 28\" enable-background=\"new 0 0 28 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M28 13h-1.1C26.5 6.6 21.4 1.5 15 1.1V0h-2v1.1C6.6 1.5 1.5 6.6 1.1 13H0v2h1.1C1.5 21.4 6.6 26.5 13 26.9 V28h2v-1.1c6.4-0.5 11.5-5.6 11.9-11.9H28V13z M15 24.9V19h-2v5.9c-5.3-0.5-9.5-4.7-9.9-9.9H9v-2H3.1C3.5 7.7 7.7 3.5 13 3.1V9h2 V3.1c5.3 0.5 9.5 4.7 9.9 9.9H19v2h5.9C24.5 20.3 20.3 24.5 15 24.9z\"/></svg>";
        // line 45
        echo "";
        // line 46
        echo "</span>
        <strong>dump()</strong>
        <span class=\"count\">
            <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
<<<<<<< HEAD:app/cache/dev/twig/1/c/1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea.php
        $__internal_7b43c23968f6be78019a74318a3e7bb3393d77bcc9fba0c7f18199906a9bb4e5->leave($__internal_7b43c23968f6be78019a74318a3e7bb3393d77bcc9fba0c7f18199906a9bb4e5_prof);
=======
        $__internal_4ce4f9dcf1fde6884d93ef985062b3c6281eaa7339b6e394f574f85aec165323->leave($__internal_4ce4f9dcf1fde6884d93ef985062b3c6281eaa7339b6e394f574f85aec165323_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/0/4/045f58921adbd9113b107b62c47aea4c6adf14895f5aeb1a98ad174d1395885e.php

    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/1/c/1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea.php
        $__internal_f68b1748607a40946158fc377a60006a3b6de113cf03163aa0224ced9342333b = $this->env->getExtension("native_profiler");
        $__internal_f68b1748607a40946158fc377a60006a3b6de113cf03163aa0224ced9342333b->enter($__internal_f68b1748607a40946158fc377a60006a3b6de113cf03163aa0224ced9342333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_067cd6fefb8b9af5b119d00b524b269ab7bbd09c9860433676f3f8886c80fdf8 = $this->env->getExtension("native_profiler");
        $__internal_067cd6fefb8b9af5b119d00b524b269ab7bbd09c9860433676f3f8886c80fdf8->enter($__internal_067cd6fefb8b9af5b119d00b524b269ab7bbd09c9860433676f3f8886c80fdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/0/4/045f58921adbd9113b107b62c47aea4c6adf14895f5aeb1a98ad174d1395885e.php

        // line 55
        echo "    <h2>dump()</h2>

    <style>
        li.sf-dump {
            list-style-type: disc;
        }
        .sf-dump ol>li {
            padding: 0;
        }
        .sf-dump a {
            cursor: pointer;
        }
        .sf-dump-compact {
            display: none;
        }
    </style>

    ";
        // line 72
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array())) {
            // line 73
            echo "        <ul class=\"alt\">
            ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 75
                echo "            <li class=\"sf-dump sf-reset\">
                in
                ";
                // line 77
                if ($this->getAttribute($context["dump"], "line", array())) {
                    // line 78
                    echo "                    ";
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 79
                    echo "                    ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 80
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                    ";
                    } else {
                        // line 82
                        echo "                        <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                    ";
                    }
                    // line 84
                    echo "                ";
                } else {
                    // line 85
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                ";
                }
                // line 87
                echo "                line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                <a onclick=\"var s = this.nextElementSibling; if ('sf-dump-compact' == s.className) {this.innerHTML = '&#9660;'; s.className = 'sf-dump-expanded';} else {this.innerHTML = '&#9654;'; s.className = 'sf-dump-compact';}\">&#9654;</a>
                <span class=\"sf-dump-compact\">
                ";
                // line 90
                if ($this->getAttribute($context["dump"], "fileExcerpt", array())) {
                    echo $this->getAttribute($context["dump"], "fileExcerpt", array());
                } else {
                    echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                }
                // line 91
                echo "                </span>

                ";
                // line 93
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        </ul>
    ";
        } else {
            // line 98
            echo "        <p>
            <em>No dumped variable</em>
        </p>
    ";
        }
        
<<<<<<< HEAD:app/cache/dev/twig/1/c/1cfe1434127a48874b7cc035ada0c7e1ec74c2f7bf6a37cd075b375a6bcbbbea.php
        $__internal_f68b1748607a40946158fc377a60006a3b6de113cf03163aa0224ced9342333b->leave($__internal_f68b1748607a40946158fc377a60006a3b6de113cf03163aa0224ced9342333b_prof);
=======
        $__internal_067cd6fefb8b9af5b119d00b524b269ab7bbd09c9860433676f3f8886c80fdf8->leave($__internal_067cd6fefb8b9af5b119d00b524b269ab7bbd09c9860433676f3f8886c80fdf8_prof);
>>>>>>> 7a75af69fb7ef3a814aed720af09e56539709404:app/cache/dev/twig/0/4/045f58921adbd9113b107b62c47aea4c6adf14895f5aeb1a98ad174d1395885e.php

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 98,  275 => 96,  266 => 93,  262 => 91,  256 => 90,  249 => 87,  243 => 85,  240 => 84,  232 => 82,  222 => 80,  219 => 79,  216 => 78,  214 => 77,  210 => 75,  206 => 74,  203 => 73,  201 => 72,  182 => 55,  176 => 54,  165 => 49,  160 => 46,  158 => 45,  156 => 44,  154 => 43,  151 => 41,  145 => 40,  137 => 37,  135 => 36,  132 => 35,  128 => 33,  119 => 30,  114 => 29,  108 => 27,  105 => 26,  97 => 24,  87 => 22,  84 => 21,  81 => 20,  79 => 19,  75 => 17,  71 => 16,  66 => 13,  64 => 12,  61 => 11,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
