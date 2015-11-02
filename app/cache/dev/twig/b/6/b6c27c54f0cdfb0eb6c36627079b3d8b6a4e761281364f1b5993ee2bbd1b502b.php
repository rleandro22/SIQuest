<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_b6c27c54f0cdfb0eb6c36627079b3d8b6a4e761281364f1b5993ee2bbd1b502b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1562a7216f016ecbc166894b93e31f182e81c065af986c68899e9b29f8ab5e = $this->env->getExtension("native_profiler");
        $__internal_ec1562a7216f016ecbc166894b93e31f182e81c065af986c68899e9b29f8ab5e->enter($__internal_ec1562a7216f016ecbc166894b93e31f182e81c065af986c68899e9b29f8ab5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_label', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('choice_label', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 178
        echo "
";
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('form_row', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('button_row', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('choice_row', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('date_row', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('time_row', $context, $blocks);
        // line 209
        echo "
";
        // line 210
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_row', $context, $blocks);
        // line 228
        echo "
";
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ec1562a7216f016ecbc166894b93e31f182e81c065af986c68899e9b29f8ab5e->leave($__internal_ec1562a7216f016ecbc166894b93e31f182e81c065af986c68899e9b29f8ab5e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d6d8887f3e4163911b2475baad20ffd1ab83269719dc7fa7f6783d158f299bfc = $this->env->getExtension("native_profiler");
        $__internal_d6d8887f3e4163911b2475baad20ffd1ab83269719dc7fa7f6783d158f299bfc->enter($__internal_d6d8887f3e4163911b2475baad20ffd1ab83269719dc7fa7f6783d158f299bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d6d8887f3e4163911b2475baad20ffd1ab83269719dc7fa7f6783d158f299bfc->leave($__internal_d6d8887f3e4163911b2475baad20ffd1ab83269719dc7fa7f6783d158f299bfc_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4388fe0cafd5dc53e09dfcce8aa39710e964e4637bb1ab23f7b1b71648c4c065 = $this->env->getExtension("native_profiler");
        $__internal_4388fe0cafd5dc53e09dfcce8aa39710e964e4637bb1ab23f7b1b71648c4c065->enter($__internal_4388fe0cafd5dc53e09dfcce8aa39710e964e4637bb1ab23f7b1b71648c4c065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4388fe0cafd5dc53e09dfcce8aa39710e964e4637bb1ab23f7b1b71648c4c065->leave($__internal_4388fe0cafd5dc53e09dfcce8aa39710e964e4637bb1ab23f7b1b71648c4c065_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b9369dcf58e93c1aa48d3fa927eccbc47d273354113a19cac64b71660bcfcb73 = $this->env->getExtension("native_profiler");
        $__internal_b9369dcf58e93c1aa48d3fa927eccbc47d273354113a19cac64b71660bcfcb73->enter($__internal_b9369dcf58e93c1aa48d3fa927eccbc47d273354113a19cac64b71660bcfcb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b9369dcf58e93c1aa48d3fa927eccbc47d273354113a19cac64b71660bcfcb73->leave($__internal_b9369dcf58e93c1aa48d3fa927eccbc47d273354113a19cac64b71660bcfcb73_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ed3f74f9c48cf51bd99061e474d65ffd6e938c93b707915725b9f351baf48ca6 = $this->env->getExtension("native_profiler");
        $__internal_ed3f74f9c48cf51bd99061e474d65ffd6e938c93b707915725b9f351baf48ca6->enter($__internal_ed3f74f9c48cf51bd99061e474d65ffd6e938c93b707915725b9f351baf48ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 25
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_ed3f74f9c48cf51bd99061e474d65ffd6e938c93b707915725b9f351baf48ca6->leave($__internal_ed3f74f9c48cf51bd99061e474d65ffd6e938c93b707915725b9f351baf48ca6_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c14b7708a909bc49f1f456c823ff3cdd8166bd80113a2cbf7767e9645c62a0db = $this->env->getExtension("native_profiler");
        $__internal_c14b7708a909bc49f1f456c823ff3cdd8166bd80113a2cbf7767e9645c62a0db->enter($__internal_c14b7708a909bc49f1f456c823ff3cdd8166bd80113a2cbf7767e9645c62a0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c14b7708a909bc49f1f456c823ff3cdd8166bd80113a2cbf7767e9645c62a0db->leave($__internal_c14b7708a909bc49f1f456c823ff3cdd8166bd80113a2cbf7767e9645c62a0db_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ce31b5f0f9f975e0db221a73cf53f7ca3bfd1b96355100e9cf46d201767a4f6d = $this->env->getExtension("native_profiler");
        $__internal_ce31b5f0f9f975e0db221a73cf53f7ca3bfd1b96355100e9cf46d201767a4f6d->enter($__internal_ce31b5f0f9f975e0db221a73cf53f7ca3bfd1b96355100e9cf46d201767a4f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_ce31b5f0f9f975e0db221a73cf53f7ca3bfd1b96355100e9cf46d201767a4f6d->leave($__internal_ce31b5f0f9f975e0db221a73cf53f7ca3bfd1b96355100e9cf46d201767a4f6d_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_40a3bb56e4f559ff6946df8e9e07d3ef81c0b38369397286130801c053208222 = $this->env->getExtension("native_profiler");
        $__internal_40a3bb56e4f559ff6946df8e9e07d3ef81c0b38369397286130801c053208222->enter($__internal_40a3bb56e4f559ff6946df8e9e07d3ef81c0b38369397286130801c053208222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_40a3bb56e4f559ff6946df8e9e07d3ef81c0b38369397286130801c053208222->leave($__internal_40a3bb56e4f559ff6946df8e9e07d3ef81c0b38369397286130801c053208222_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_04b78502c546373751d26487531e211240c3791e06bf48ffc85068ebe179088b = $this->env->getExtension("native_profiler");
        $__internal_04b78502c546373751d26487531e211240c3791e06bf48ffc85068ebe179088b->enter($__internal_04b78502c546373751d26487531e211240c3791e06bf48ffc85068ebe179088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_04b78502c546373751d26487531e211240c3791e06bf48ffc85068ebe179088b->leave($__internal_04b78502c546373751d26487531e211240c3791e06bf48ffc85068ebe179088b_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ad0d2a26c2199395e96503cab8898beffbf516249f39df94020e28ab940c7d0d = $this->env->getExtension("native_profiler");
        $__internal_ad0d2a26c2199395e96503cab8898beffbf516249f39df94020e28ab940c7d0d->enter($__internal_ad0d2a26c2199395e96503cab8898beffbf516249f39df94020e28ab940c7d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_ad0d2a26c2199395e96503cab8898beffbf516249f39df94020e28ab940c7d0d->leave($__internal_ad0d2a26c2199395e96503cab8898beffbf516249f39df94020e28ab940c7d0d_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_255e93205d3eab22a24350753e8bad6ea4c8512b98cc3a3dd5e6cb2b4df8d1cd = $this->env->getExtension("native_profiler");
        $__internal_255e93205d3eab22a24350753e8bad6ea4c8512b98cc3a3dd5e6cb2b4df8d1cd->enter($__internal_255e93205d3eab22a24350753e8bad6ea4c8512b98cc3a3dd5e6cb2b4df8d1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            echo "<div class=\"control-group\">";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "</div>";
        } else {
            // line 106
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 107
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 109
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 110
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "</div>";
        }
        
        $__internal_255e93205d3eab22a24350753e8bad6ea4c8512b98cc3a3dd5e6cb2b4df8d1cd->leave($__internal_255e93205d3eab22a24350753e8bad6ea4c8512b98cc3a3dd5e6cb2b4df8d1cd_prof);

    }

    // line 117
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_253100f53d46e7e98de03f1a1993730896781be44071df27008fbee1ecaab068 = $this->env->getExtension("native_profiler");
        $__internal_253100f53d46e7e98de03f1a1993730896781be44071df27008fbee1ecaab068->enter($__internal_253100f53d46e7e98de03f1a1993730896781be44071df27008fbee1ecaab068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 118
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 119
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 122
            echo "<div class=\"checkbox\">";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 124
            echo "</div>";
        }
        
        $__internal_253100f53d46e7e98de03f1a1993730896781be44071df27008fbee1ecaab068->leave($__internal_253100f53d46e7e98de03f1a1993730896781be44071df27008fbee1ecaab068_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9ca637f21a0b4ea2e2b52ad5e950bbb65105ec37c0719ec69e1cb354abd57422 = $this->env->getExtension("native_profiler");
        $__internal_9ca637f21a0b4ea2e2b52ad5e950bbb65105ec37c0719ec69e1cb354abd57422->enter($__internal_9ca637f21a0b4ea2e2b52ad5e950bbb65105ec37c0719ec69e1cb354abd57422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 129
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 130
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 133
            echo "<div class=\"radio\">";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 135
            echo "</div>";
        }
        
        $__internal_9ca637f21a0b4ea2e2b52ad5e950bbb65105ec37c0719ec69e1cb354abd57422->leave($__internal_9ca637f21a0b4ea2e2b52ad5e950bbb65105ec37c0719ec69e1cb354abd57422_prof);

    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_996dd1af64f040129d2b215b01a49ced06976e3d8db53a7b2f8f3d2658f6c10d = $this->env->getExtension("native_profiler");
        $__internal_996dd1af64f040129d2b215b01a49ced06976e3d8db53a7b2f8f3d2658f6c10d->enter($__internal_996dd1af64f040129d2b215b01a49ced06976e3d8db53a7b2f8f3d2658f6c10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 142
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_996dd1af64f040129d2b215b01a49ced06976e3d8db53a7b2f8f3d2658f6c10d->leave($__internal_996dd1af64f040129d2b215b01a49ced06976e3d8db53a7b2f8f3d2658f6c10d_prof);

    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_91d86fb83510ce71eb7bb8beb9217255c018ddd7292824f0bf9d4c0e7613e471 = $this->env->getExtension("native_profiler");
        $__internal_91d86fb83510ce71eb7bb8beb9217255c018ddd7292824f0bf9d4c0e7613e471->enter($__internal_91d86fb83510ce71eb7bb8beb9217255c018ddd7292824f0bf9d4c0e7613e471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 148
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(strtr((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_91d86fb83510ce71eb7bb8beb9217255c018ddd7292824f0bf9d4c0e7613e471->leave($__internal_91d86fb83510ce71eb7bb8beb9217255c018ddd7292824f0bf9d4c0e7613e471_prof);

    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a74675c446ebfc9bf77ccd684fa4eb9d66039cc1d429d714beaf04376a24693b = $this->env->getExtension("native_profiler");
        $__internal_a74675c446ebfc9bf77ccd684fa4eb9d66039cc1d429d714beaf04376a24693b->enter($__internal_a74675c446ebfc9bf77ccd684fa4eb9d66039cc1d429d714beaf04376a24693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a74675c446ebfc9bf77ccd684fa4eb9d66039cc1d429d714beaf04376a24693b->leave($__internal_a74675c446ebfc9bf77ccd684fa4eb9d66039cc1d429d714beaf04376a24693b_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_283d153a335e4fea8b550400ae77a1249dc1716c1817744c8c54cb985596220e = $this->env->getExtension("native_profiler");
        $__internal_283d153a335e4fea8b550400ae77a1249dc1716c1817744c8c54cb985596220e->enter($__internal_283d153a335e4fea8b550400ae77a1249dc1716c1817744c8c54cb985596220e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_283d153a335e4fea8b550400ae77a1249dc1716c1817744c8c54cb985596220e->leave($__internal_283d153a335e4fea8b550400ae77a1249dc1716c1817744c8c54cb985596220e_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_df915eb44b4809c3d3cb66dc14be3f3cc03f3cd4e1b4d765a0b912487bcb8c50 = $this->env->getExtension("native_profiler");
        $__internal_df915eb44b4809c3d3cb66dc14be3f3cc03f3cd4e1b4d765a0b912487bcb8c50->enter($__internal_df915eb44b4809c3d3cb66dc14be3f3cc03f3cd4e1b4d765a0b912487bcb8c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 161
        echo "    ";
        // line 162
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 163
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 167
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 170
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 171
                echo "        ";
            }
            // line 172
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 173
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 174
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 175
            echo "</label>
    ";
        }
        
        $__internal_df915eb44b4809c3d3cb66dc14be3f3cc03f3cd4e1b4d765a0b912487bcb8c50->leave($__internal_df915eb44b4809c3d3cb66dc14be3f3cc03f3cd4e1b4d765a0b912487bcb8c50_prof);

    }

    // line 181
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5d05a263809f48bf718357c0fd7520bbfbeab7fc21a4994c7aab36f0d66f59d5 = $this->env->getExtension("native_profiler");
        $__internal_5d05a263809f48bf718357c0fd7520bbfbeab7fc21a4994c7aab36f0d66f59d5->enter($__internal_5d05a263809f48bf718357c0fd7520bbfbeab7fc21a4994c7aab36f0d66f59d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 182
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 186
        echo "</div>";
        
        $__internal_5d05a263809f48bf718357c0fd7520bbfbeab7fc21a4994c7aab36f0d66f59d5->leave($__internal_5d05a263809f48bf718357c0fd7520bbfbeab7fc21a4994c7aab36f0d66f59d5_prof);

    }

    // line 189
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e44b77f024975e1aa5add4167f6af94d8e0dfa1317caeb4ace08bf2430f139b3 = $this->env->getExtension("native_profiler");
        $__internal_e44b77f024975e1aa5add4167f6af94d8e0dfa1317caeb4ace08bf2430f139b3->enter($__internal_e44b77f024975e1aa5add4167f6af94d8e0dfa1317caeb4ace08bf2430f139b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 190
        echo "<div class=\"form-group\">";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 192
        echo "</div>";
        
        $__internal_e44b77f024975e1aa5add4167f6af94d8e0dfa1317caeb4ace08bf2430f139b3->leave($__internal_e44b77f024975e1aa5add4167f6af94d8e0dfa1317caeb4ace08bf2430f139b3_prof);

    }

    // line 195
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_400ffe29ab2bcbe9c1c981c0159153572aaf25da08f35800b580112d31724ac8 = $this->env->getExtension("native_profiler");
        $__internal_400ffe29ab2bcbe9c1c981c0159153572aaf25da08f35800b580112d31724ac8->enter($__internal_400ffe29ab2bcbe9c1c981c0159153572aaf25da08f35800b580112d31724ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 196
        $context["force_error"] = true;
        // line 197
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_400ffe29ab2bcbe9c1c981c0159153572aaf25da08f35800b580112d31724ac8->leave($__internal_400ffe29ab2bcbe9c1c981c0159153572aaf25da08f35800b580112d31724ac8_prof);

    }

    // line 200
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0a534d4778e36e7705dc585a43d7591bf59189188be7124bf63b87669e2ebaee = $this->env->getExtension("native_profiler");
        $__internal_0a534d4778e36e7705dc585a43d7591bf59189188be7124bf63b87669e2ebaee->enter($__internal_0a534d4778e36e7705dc585a43d7591bf59189188be7124bf63b87669e2ebaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 201
        $context["force_error"] = true;
        // line 202
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0a534d4778e36e7705dc585a43d7591bf59189188be7124bf63b87669e2ebaee->leave($__internal_0a534d4778e36e7705dc585a43d7591bf59189188be7124bf63b87669e2ebaee_prof);

    }

    // line 205
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_57fd566ade1dad55cc69f42ff13ee94027b162e2cc81e4c98d426d617ebbdac6 = $this->env->getExtension("native_profiler");
        $__internal_57fd566ade1dad55cc69f42ff13ee94027b162e2cc81e4c98d426d617ebbdac6->enter($__internal_57fd566ade1dad55cc69f42ff13ee94027b162e2cc81e4c98d426d617ebbdac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 206
        $context["force_error"] = true;
        // line 207
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_57fd566ade1dad55cc69f42ff13ee94027b162e2cc81e4c98d426d617ebbdac6->leave($__internal_57fd566ade1dad55cc69f42ff13ee94027b162e2cc81e4c98d426d617ebbdac6_prof);

    }

    // line 210
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_74542b0ac3befa2338d6e49bdc18b6146bbfc281f66739046872de0b2978b672 = $this->env->getExtension("native_profiler");
        $__internal_74542b0ac3befa2338d6e49bdc18b6146bbfc281f66739046872de0b2978b672->enter($__internal_74542b0ac3befa2338d6e49bdc18b6146bbfc281f66739046872de0b2978b672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 211
        $context["force_error"] = true;
        // line 212
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_74542b0ac3befa2338d6e49bdc18b6146bbfc281f66739046872de0b2978b672->leave($__internal_74542b0ac3befa2338d6e49bdc18b6146bbfc281f66739046872de0b2978b672_prof);

    }

    // line 215
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_91907fe5d56e5ebac784feecf3e99e89689a8c5a046486e9cdb2c623240c46ca = $this->env->getExtension("native_profiler");
        $__internal_91907fe5d56e5ebac784feecf3e99e89689a8c5a046486e9cdb2c623240c46ca->enter($__internal_91907fe5d56e5ebac784feecf3e99e89689a8c5a046486e9cdb2c623240c46ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 216
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 219
        echo "</div>";
        
        $__internal_91907fe5d56e5ebac784feecf3e99e89689a8c5a046486e9cdb2c623240c46ca->leave($__internal_91907fe5d56e5ebac784feecf3e99e89689a8c5a046486e9cdb2c623240c46ca_prof);

    }

    // line 222
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_280cdb07774e9a04c52298f0791594abbbec1ee941020bad05cd84bf6fbe4bea = $this->env->getExtension("native_profiler");
        $__internal_280cdb07774e9a04c52298f0791594abbbec1ee941020bad05cd84bf6fbe4bea->enter($__internal_280cdb07774e9a04c52298f0791594abbbec1ee941020bad05cd84bf6fbe4bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 223
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 226
        echo "</div>";
        
        $__internal_280cdb07774e9a04c52298f0791594abbbec1ee941020bad05cd84bf6fbe4bea->leave($__internal_280cdb07774e9a04c52298f0791594abbbec1ee941020bad05cd84bf6fbe4bea_prof);

    }

    // line 231
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_eaea6e9c289cadf07a6a66883745c785974559f251ec2c9dc1fc9edf0069f189 = $this->env->getExtension("native_profiler");
        $__internal_eaea6e9c289cadf07a6a66883745c785974559f251ec2c9dc1fc9edf0069f189->enter($__internal_eaea6e9c289cadf07a6a66883745c785974559f251ec2c9dc1fc9edf0069f189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 232
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 233
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 234
            echo "    <ul class=\"list-unstyled\">";
            // line 235
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 236
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "</ul>
    ";
            // line 239
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_eaea6e9c289cadf07a6a66883745c785974559f251ec2c9dc1fc9edf0069f189->leave($__internal_eaea6e9c289cadf07a6a66883745c785974559f251ec2c9dc1fc9edf0069f189_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  834 => 239,  831 => 238,  823 => 236,  819 => 235,  817 => 234,  811 => 233,  809 => 232,  803 => 231,  796 => 226,  794 => 225,  792 => 224,  786 => 223,  780 => 222,  773 => 219,  771 => 218,  769 => 217,  763 => 216,  757 => 215,  750 => 212,  748 => 211,  742 => 210,  735 => 207,  733 => 206,  727 => 205,  720 => 202,  718 => 201,  712 => 200,  705 => 197,  703 => 196,  697 => 195,  690 => 192,  688 => 191,  686 => 190,  680 => 189,  673 => 186,  671 => 185,  669 => 184,  667 => 183,  661 => 182,  655 => 181,  646 => 175,  644 => 174,  642 => 173,  627 => 172,  624 => 171,  621 => 170,  618 => 169,  615 => 168,  612 => 167,  609 => 166,  606 => 165,  603 => 164,  600 => 163,  597 => 162,  595 => 161,  589 => 160,  582 => 157,  576 => 156,  569 => 153,  563 => 152,  556 => 149,  554 => 148,  548 => 146,  541 => 143,  539 => 142,  533 => 141,  525 => 135,  523 => 134,  521 => 133,  518 => 131,  516 => 130,  514 => 129,  508 => 128,  500 => 124,  498 => 123,  496 => 122,  493 => 120,  491 => 119,  489 => 118,  483 => 117,  475 => 113,  469 => 110,  468 => 109,  467 => 108,  463 => 107,  459 => 106,  456 => 104,  450 => 101,  449 => 100,  448 => 99,  444 => 98,  442 => 97,  440 => 96,  434 => 95,  427 => 92,  425 => 91,  419 => 90,  410 => 85,  407 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 231,  197 => 230,  194 => 228,  192 => 222,  189 => 221,  187 => 215,  184 => 214,  182 => 210,  179 => 209,  177 => 205,  174 => 204,  172 => 200,  169 => 199,  167 => 195,  164 => 194,  162 => 189,  159 => 188,  157 => 181,  154 => 180,  151 => 178,  149 => 160,  146 => 159,  144 => 156,  141 => 155,  139 => 152,  136 => 151,  134 => 146,  131 => 145,  129 => 141,  126 => 140,  123 => 138,  121 => 128,  118 => 127,  116 => 117,  113 => 116,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }
}
