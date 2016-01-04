<?php

/* form_div_layout.html.twig */
class __TwigTemplate_158259455e2d3d3afb124e9a28dbceec200003c4440a980fc62ed01fe338ba2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa6c8f6cf86a87281e96102f9ebe89c26ada7c1852d2fdd078a854a006610134 = $this->env->getExtension("native_profiler");
        $__internal_fa6c8f6cf86a87281e96102f9ebe89c26ada7c1852d2fdd078a854a006610134->enter($__internal_fa6c8f6cf86a87281e96102f9ebe89c26ada7c1852d2fdd078a854a006610134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('button_widget', $context, $blocks);
        // line 193
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 198
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 205
        $this->displayBlock('form_label', $context, $blocks);
        // line 227
        $this->displayBlock('button_label', $context, $blocks);
        // line 231
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 239
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 253
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 259
        $this->displayBlock('form', $context, $blocks);
        // line 265
        $this->displayBlock('form_start', $context, $blocks);
        // line 278
        $this->displayBlock('form_end', $context, $blocks);
        // line 285
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 289
        $this->displayBlock('form_errors', $context, $blocks);
        // line 299
        $this->displayBlock('form_rest', $context, $blocks);
        // line 306
        echo "
";
        // line 309
        $this->displayBlock('form_rows', $context, $blocks);
        // line 315
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_fa6c8f6cf86a87281e96102f9ebe89c26ada7c1852d2fdd078a854a006610134->leave($__internal_fa6c8f6cf86a87281e96102f9ebe89c26ada7c1852d2fdd078a854a006610134_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_a1dd2396a8372fd54f05a4ebcc0d2dc4a6a4d3171193d5d8d27680c1949b5430 = $this->env->getExtension("native_profiler");
        $__internal_a1dd2396a8372fd54f05a4ebcc0d2dc4a6a4d3171193d5d8d27680c1949b5430->enter($__internal_a1dd2396a8372fd54f05a4ebcc0d2dc4a6a4d3171193d5d8d27680c1949b5430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_a1dd2396a8372fd54f05a4ebcc0d2dc4a6a4d3171193d5d8d27680c1949b5430->leave($__internal_a1dd2396a8372fd54f05a4ebcc0d2dc4a6a4d3171193d5d8d27680c1949b5430_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_076508044d21c95f51e8621ef299dc708d2d3324943bdccab0bb4c56b8c2e758 = $this->env->getExtension("native_profiler");
        $__internal_076508044d21c95f51e8621ef299dc708d2d3324943bdccab0bb4c56b8c2e758->enter($__internal_076508044d21c95f51e8621ef299dc708d2d3324943bdccab0bb4c56b8c2e758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_076508044d21c95f51e8621ef299dc708d2d3324943bdccab0bb4c56b8c2e758->leave($__internal_076508044d21c95f51e8621ef299dc708d2d3324943bdccab0bb4c56b8c2e758_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5a806c8abd5ba7cb6442ea046a307151a2f11f4271f1a4b0ed017e3b9796c93b = $this->env->getExtension("native_profiler");
        $__internal_5a806c8abd5ba7cb6442ea046a307151a2f11f4271f1a4b0ed017e3b9796c93b->enter($__internal_5a806c8abd5ba7cb6442ea046a307151a2f11f4271f1a4b0ed017e3b9796c93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_5a806c8abd5ba7cb6442ea046a307151a2f11f4271f1a4b0ed017e3b9796c93b->leave($__internal_5a806c8abd5ba7cb6442ea046a307151a2f11f4271f1a4b0ed017e3b9796c93b_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_9826a40d9a03d9538c4e6d38ce31ce8e6ad07a8abcab7338c4d3b12626fbd40e = $this->env->getExtension("native_profiler");
        $__internal_9826a40d9a03d9538c4e6d38ce31ce8e6ad07a8abcab7338c4d3b12626fbd40e->enter($__internal_9826a40d9a03d9538c4e6d38ce31ce8e6ad07a8abcab7338c4d3b12626fbd40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_9826a40d9a03d9538c4e6d38ce31ce8e6ad07a8abcab7338c4d3b12626fbd40e->leave($__internal_9826a40d9a03d9538c4e6d38ce31ce8e6ad07a8abcab7338c4d3b12626fbd40e_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a3b96224af7e12554ee14c21aa46f250abec7903aa5ac2699c7928babd855574 = $this->env->getExtension("native_profiler");
        $__internal_a3b96224af7e12554ee14c21aa46f250abec7903aa5ac2699c7928babd855574->enter($__internal_a3b96224af7e12554ee14c21aa46f250abec7903aa5ac2699c7928babd855574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_a3b96224af7e12554ee14c21aa46f250abec7903aa5ac2699c7928babd855574->leave($__internal_a3b96224af7e12554ee14c21aa46f250abec7903aa5ac2699c7928babd855574_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_0e582656593d3d74c4ae4003dbbfc0c87e36c15a3df445921535707caea42aae = $this->env->getExtension("native_profiler");
        $__internal_0e582656593d3d74c4ae4003dbbfc0c87e36c15a3df445921535707caea42aae->enter($__internal_0e582656593d3d74c4ae4003dbbfc0c87e36c15a3df445921535707caea42aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_0e582656593d3d74c4ae4003dbbfc0c87e36c15a3df445921535707caea42aae->leave($__internal_0e582656593d3d74c4ae4003dbbfc0c87e36c15a3df445921535707caea42aae_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_aa5a74f6a3a57427a60e6e6a69e2db4221c078019258ebb7a854a63584b4aaeb = $this->env->getExtension("native_profiler");
        $__internal_aa5a74f6a3a57427a60e6e6a69e2db4221c078019258ebb7a854a63584b4aaeb->enter($__internal_aa5a74f6a3a57427a60e6e6a69e2db4221c078019258ebb7a854a63584b4aaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_aa5a74f6a3a57427a60e6e6a69e2db4221c078019258ebb7a854a63584b4aaeb->leave($__internal_aa5a74f6a3a57427a60e6e6a69e2db4221c078019258ebb7a854a63584b4aaeb_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a8c4716026da4282589ebb0b19ab235dc50fb291ad8c81616e1eb918276106d7 = $this->env->getExtension("native_profiler");
        $__internal_a8c4716026da4282589ebb0b19ab235dc50fb291ad8c81616e1eb918276106d7->enter($__internal_a8c4716026da4282589ebb0b19ab235dc50fb291ad8c81616e1eb918276106d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_a8c4716026da4282589ebb0b19ab235dc50fb291ad8c81616e1eb918276106d7->leave($__internal_a8c4716026da4282589ebb0b19ab235dc50fb291ad8c81616e1eb918276106d7_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_78b847b5fdfc22c8f24fb8242198a5f6673e1eefd143df005fd04e9cebcb084a = $this->env->getExtension("native_profiler");
        $__internal_78b847b5fdfc22c8f24fb8242198a5f6673e1eefd143df005fd04e9cebcb084a->enter($__internal_78b847b5fdfc22c8f24fb8242198a5f6673e1eefd143df005fd04e9cebcb084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_78b847b5fdfc22c8f24fb8242198a5f6673e1eefd143df005fd04e9cebcb084a->leave($__internal_78b847b5fdfc22c8f24fb8242198a5f6673e1eefd143df005fd04e9cebcb084a_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d943894b1f204da99f936bf02923a71b8d77d16efc4928f1efd0fb83ffeed228 = $this->env->getExtension("native_profiler");
        $__internal_d943894b1f204da99f936bf02923a71b8d77d16efc4928f1efd0fb83ffeed228->enter($__internal_d943894b1f204da99f936bf02923a71b8d77d16efc4928f1efd0fb83ffeed228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_d943894b1f204da99f936bf02923a71b8d77d16efc4928f1efd0fb83ffeed228->leave($__internal_d943894b1f204da99f936bf02923a71b8d77d16efc4928f1efd0fb83ffeed228_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0f61783d8d0117da109389803324d69699f7c02d33af7c6325c5a3af52b6ef79 = $this->env->getExtension("native_profiler");
        $__internal_0f61783d8d0117da109389803324d69699f7c02d33af7c6325c5a3af52b6ef79->enter($__internal_0f61783d8d0117da109389803324d69699f7c02d33af7c6325c5a3af52b6ef79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_0f61783d8d0117da109389803324d69699f7c02d33af7c6325c5a3af52b6ef79->leave($__internal_0f61783d8d0117da109389803324d69699f7c02d33af7c6325c5a3af52b6ef79_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fbbe23ff1a06474bb95861645f393511975261f1961ed7414c2ac683e07097ae = $this->env->getExtension("native_profiler");
        $__internal_fbbe23ff1a06474bb95861645f393511975261f1961ed7414c2ac683e07097ae->enter($__internal_fbbe23ff1a06474bb95861645f393511975261f1961ed7414c2ac683e07097ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_fbbe23ff1a06474bb95861645f393511975261f1961ed7414c2ac683e07097ae->leave($__internal_fbbe23ff1a06474bb95861645f393511975261f1961ed7414c2ac683e07097ae_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9ac442a635a92cd579dd173d14e69989073af8c0eab7796a81c7c3ad78029633 = $this->env->getExtension("native_profiler");
        $__internal_9ac442a635a92cd579dd173d14e69989073af8c0eab7796a81c7c3ad78029633->enter($__internal_9ac442a635a92cd579dd173d14e69989073af8c0eab7796a81c7c3ad78029633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_9ac442a635a92cd579dd173d14e69989073af8c0eab7796a81c7c3ad78029633->leave($__internal_9ac442a635a92cd579dd173d14e69989073af8c0eab7796a81c7c3ad78029633_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_76d34f3f8460b46ca3ef89fee00bfa59d46575a079b659b3697ba49649b251b5 = $this->env->getExtension("native_profiler");
        $__internal_76d34f3f8460b46ca3ef89fee00bfa59d46575a079b659b3697ba49649b251b5->enter($__internal_76d34f3f8460b46ca3ef89fee00bfa59d46575a079b659b3697ba49649b251b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_76d34f3f8460b46ca3ef89fee00bfa59d46575a079b659b3697ba49649b251b5->leave($__internal_76d34f3f8460b46ca3ef89fee00bfa59d46575a079b659b3697ba49649b251b5_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_8aaf3f285332636a6346a6345c98d4f967a97f99e716cb1fff01da8b7a84f77b = $this->env->getExtension("native_profiler");
        $__internal_8aaf3f285332636a6346a6345c98d4f967a97f99e716cb1fff01da8b7a84f77b->enter($__internal_8aaf3f285332636a6346a6345c98d4f967a97f99e716cb1fff01da8b7a84f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8aaf3f285332636a6346a6345c98d4f967a97f99e716cb1fff01da8b7a84f77b->leave($__internal_8aaf3f285332636a6346a6345c98d4f967a97f99e716cb1fff01da8b7a84f77b_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_94eb232c7df57af9890d4a5821b12cf452dde8c16d984cebf7dc6fd5a5b20ade = $this->env->getExtension("native_profiler");
        $__internal_94eb232c7df57af9890d4a5821b12cf452dde8c16d984cebf7dc6fd5a5b20ade->enter($__internal_94eb232c7df57af9890d4a5821b12cf452dde8c16d984cebf7dc6fd5a5b20ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_94eb232c7df57af9890d4a5821b12cf452dde8c16d984cebf7dc6fd5a5b20ade->leave($__internal_94eb232c7df57af9890d4a5821b12cf452dde8c16d984cebf7dc6fd5a5b20ade_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d5312b02784d7d2c1ae19defbc553bcf4983ac19467f40b59335ef7309e69e0c = $this->env->getExtension("native_profiler");
        $__internal_d5312b02784d7d2c1ae19defbc553bcf4983ac19467f40b59335ef7309e69e0c->enter($__internal_d5312b02784d7d2c1ae19defbc553bcf4983ac19467f40b59335ef7309e69e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_d5312b02784d7d2c1ae19defbc553bcf4983ac19467f40b59335ef7309e69e0c->leave($__internal_d5312b02784d7d2c1ae19defbc553bcf4983ac19467f40b59335ef7309e69e0c_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_e6846a0bee35f0d5465cc33f3bd94ab086226a960d899c7d389b019606027f58 = $this->env->getExtension("native_profiler");
        $__internal_e6846a0bee35f0d5465cc33f3bd94ab086226a960d899c7d389b019606027f58->enter($__internal_e6846a0bee35f0d5465cc33f3bd94ab086226a960d899c7d389b019606027f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e6846a0bee35f0d5465cc33f3bd94ab086226a960d899c7d389b019606027f58->leave($__internal_e6846a0bee35f0d5465cc33f3bd94ab086226a960d899c7d389b019606027f58_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_22d3129927d90ea7806c5223360b1cda338af28322bcb7a9ae9f03c5383cd68e = $this->env->getExtension("native_profiler");
        $__internal_22d3129927d90ea7806c5223360b1cda338af28322bcb7a9ae9f03c5383cd68e->enter($__internal_22d3129927d90ea7806c5223360b1cda338af28322bcb7a9ae9f03c5383cd68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_22d3129927d90ea7806c5223360b1cda338af28322bcb7a9ae9f03c5383cd68e->leave($__internal_22d3129927d90ea7806c5223360b1cda338af28322bcb7a9ae9f03c5383cd68e_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8ea72dad2d9d0e5f837f9a654d88fa963f6d84b770e8cf94fcce66c296edb039 = $this->env->getExtension("native_profiler");
        $__internal_8ea72dad2d9d0e5f837f9a654d88fa963f6d84b770e8cf94fcce66c296edb039->enter($__internal_8ea72dad2d9d0e5f837f9a654d88fa963f6d84b770e8cf94fcce66c296edb039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_8ea72dad2d9d0e5f837f9a654d88fa963f6d84b770e8cf94fcce66c296edb039->leave($__internal_8ea72dad2d9d0e5f837f9a654d88fa963f6d84b770e8cf94fcce66c296edb039_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_f43f1cb61158979289765adcfa57b8e39938a9e9d3a2d32a0477bb839861e211 = $this->env->getExtension("native_profiler");
        $__internal_f43f1cb61158979289765adcfa57b8e39938a9e9d3a2d32a0477bb839861e211->enter($__internal_f43f1cb61158979289765adcfa57b8e39938a9e9d3a2d32a0477bb839861e211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f43f1cb61158979289765adcfa57b8e39938a9e9d3a2d32a0477bb839861e211->leave($__internal_f43f1cb61158979289765adcfa57b8e39938a9e9d3a2d32a0477bb839861e211_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_5bd70d2f91f18ed89e94c95bfa1b288769d9bfe3adbdee18db2ecba9b16a5c4f = $this->env->getExtension("native_profiler");
        $__internal_5bd70d2f91f18ed89e94c95bfa1b288769d9bfe3adbdee18db2ecba9b16a5c4f->enter($__internal_5bd70d2f91f18ed89e94c95bfa1b288769d9bfe3adbdee18db2ecba9b16a5c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5bd70d2f91f18ed89e94c95bfa1b288769d9bfe3adbdee18db2ecba9b16a5c4f->leave($__internal_5bd70d2f91f18ed89e94c95bfa1b288769d9bfe3adbdee18db2ecba9b16a5c4f_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_3ff3d7ecbff78246663565e62ce11652c39c84edbec560e75beea1d5ab2ebc8d = $this->env->getExtension("native_profiler");
        $__internal_3ff3d7ecbff78246663565e62ce11652c39c84edbec560e75beea1d5ab2ebc8d->enter($__internal_3ff3d7ecbff78246663565e62ce11652c39c84edbec560e75beea1d5ab2ebc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3ff3d7ecbff78246663565e62ce11652c39c84edbec560e75beea1d5ab2ebc8d->leave($__internal_3ff3d7ecbff78246663565e62ce11652c39c84edbec560e75beea1d5ab2ebc8d_prof);

    }

    // line 179
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4d605982d9a0d35d1704b1415f8b16ff8ce0b9f8d288283e4e9ec0b2dc05e204 = $this->env->getExtension("native_profiler");
        $__internal_4d605982d9a0d35d1704b1415f8b16ff8ce0b9f8d288283e4e9ec0b2dc05e204->enter($__internal_4d605982d9a0d35d1704b1415f8b16ff8ce0b9f8d288283e4e9ec0b2dc05e204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 180
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 181
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 182
                $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 183
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 184
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 187
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 190
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_4d605982d9a0d35d1704b1415f8b16ff8ce0b9f8d288283e4e9ec0b2dc05e204->leave($__internal_4d605982d9a0d35d1704b1415f8b16ff8ce0b9f8d288283e4e9ec0b2dc05e204_prof);

    }

    // line 193
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_68f3392e6f1dfdaf45f8c2957d03d35266d373e694616c773f86e1d9c159d643 = $this->env->getExtension("native_profiler");
        $__internal_68f3392e6f1dfdaf45f8c2957d03d35266d373e694616c773f86e1d9c159d643->enter($__internal_68f3392e6f1dfdaf45f8c2957d03d35266d373e694616c773f86e1d9c159d643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 195
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_68f3392e6f1dfdaf45f8c2957d03d35266d373e694616c773f86e1d9c159d643->leave($__internal_68f3392e6f1dfdaf45f8c2957d03d35266d373e694616c773f86e1d9c159d643_prof);

    }

    // line 198
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_a7f7fa3c3df43350b9513903abb0e9a7136f42d28324f6cbd67fd5c2b9a6618d = $this->env->getExtension("native_profiler");
        $__internal_a7f7fa3c3df43350b9513903abb0e9a7136f42d28324f6cbd67fd5c2b9a6618d->enter($__internal_a7f7fa3c3df43350b9513903abb0e9a7136f42d28324f6cbd67fd5c2b9a6618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_a7f7fa3c3df43350b9513903abb0e9a7136f42d28324f6cbd67fd5c2b9a6618d->leave($__internal_a7f7fa3c3df43350b9513903abb0e9a7136f42d28324f6cbd67fd5c2b9a6618d_prof);

    }

    // line 205
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_075bf4ee2985ed60406d19f5652fb410cbbd85e44cc9c320eea358146a54c521 = $this->env->getExtension("native_profiler");
        $__internal_075bf4ee2985ed60406d19f5652fb410cbbd85e44cc9c320eea358146a54c521->enter($__internal_075bf4ee2985ed60406d19f5652fb410cbbd85e44cc9c320eea358146a54c521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 206
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 207
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 208
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 210
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 211
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 213
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 214
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 215
                    $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 216
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 217
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 220
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 223
            echo "<label";
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
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_075bf4ee2985ed60406d19f5652fb410cbbd85e44cc9c320eea358146a54c521->leave($__internal_075bf4ee2985ed60406d19f5652fb410cbbd85e44cc9c320eea358146a54c521_prof);

    }

    // line 227
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_5a7107ade29ab5337094d97193607551005b6cc3254cbd6d02b69f0b5f2f6bda = $this->env->getExtension("native_profiler");
        $__internal_5a7107ade29ab5337094d97193607551005b6cc3254cbd6d02b69f0b5f2f6bda->enter($__internal_5a7107ade29ab5337094d97193607551005b6cc3254cbd6d02b69f0b5f2f6bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_5a7107ade29ab5337094d97193607551005b6cc3254cbd6d02b69f0b5f2f6bda->leave($__internal_5a7107ade29ab5337094d97193607551005b6cc3254cbd6d02b69f0b5f2f6bda_prof);

    }

    // line 231
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_a7007d8ab08c8c815fdef8c19d9d099c9148f765bb4e9e85b770fc0d0941af0f = $this->env->getExtension("native_profiler");
        $__internal_a7007d8ab08c8c815fdef8c19d9d099c9148f765bb4e9e85b770fc0d0941af0f->enter($__internal_a7007d8ab08c8c815fdef8c19d9d099c9148f765bb4e9e85b770fc0d0941af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 236
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_a7007d8ab08c8c815fdef8c19d9d099c9148f765bb4e9e85b770fc0d0941af0f->leave($__internal_a7007d8ab08c8c815fdef8c19d9d099c9148f765bb4e9e85b770fc0d0941af0f_prof);

    }

    // line 239
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_837f769dff9bf63b125f5442ab9832c72a0e54e4ffbc85fba458df8818c1eaff = $this->env->getExtension("native_profiler");
        $__internal_837f769dff9bf63b125f5442ab9832c72a0e54e4ffbc85fba458df8818c1eaff->enter($__internal_837f769dff9bf63b125f5442ab9832c72a0e54e4ffbc85fba458df8818c1eaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 240
        echo "<div>";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 244
        echo "</div>";
        
        $__internal_837f769dff9bf63b125f5442ab9832c72a0e54e4ffbc85fba458df8818c1eaff->leave($__internal_837f769dff9bf63b125f5442ab9832c72a0e54e4ffbc85fba458df8818c1eaff_prof);

    }

    // line 247
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_58b90f4e602bdf95ed435771cda023f694cd01ed636f10192682443f4516abc2 = $this->env->getExtension("native_profiler");
        $__internal_58b90f4e602bdf95ed435771cda023f694cd01ed636f10192682443f4516abc2->enter($__internal_58b90f4e602bdf95ed435771cda023f694cd01ed636f10192682443f4516abc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 248
        echo "<div>";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 250
        echo "</div>";
        
        $__internal_58b90f4e602bdf95ed435771cda023f694cd01ed636f10192682443f4516abc2->leave($__internal_58b90f4e602bdf95ed435771cda023f694cd01ed636f10192682443f4516abc2_prof);

    }

    // line 253
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ee3a883e35076fdf86e0fb598d482868063802b72edcd86ec23b21dacf28f1cc = $this->env->getExtension("native_profiler");
        $__internal_ee3a883e35076fdf86e0fb598d482868063802b72edcd86ec23b21dacf28f1cc->enter($__internal_ee3a883e35076fdf86e0fb598d482868063802b72edcd86ec23b21dacf28f1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_ee3a883e35076fdf86e0fb598d482868063802b72edcd86ec23b21dacf28f1cc->leave($__internal_ee3a883e35076fdf86e0fb598d482868063802b72edcd86ec23b21dacf28f1cc_prof);

    }

    // line 259
    public function block_form($context, array $blocks = array())
    {
        $__internal_dc43205d501b9ee685f938e288defdca283ea61c18810e15f76efa33d23a9b38 = $this->env->getExtension("native_profiler");
        $__internal_dc43205d501b9ee685f938e288defdca283ea61c18810e15f76efa33d23a9b38->enter($__internal_dc43205d501b9ee685f938e288defdca283ea61c18810e15f76efa33d23a9b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 262
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_dc43205d501b9ee685f938e288defdca283ea61c18810e15f76efa33d23a9b38->leave($__internal_dc43205d501b9ee685f938e288defdca283ea61c18810e15f76efa33d23a9b38_prof);

    }

    // line 265
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_98b6ecfff45c8448262c517f964bb5956a3ee0f4976f54b274c2a90b0e9ec2a8 = $this->env->getExtension("native_profiler");
        $__internal_98b6ecfff45c8448262c517f964bb5956a3ee0f4976f54b274c2a90b0e9ec2a8->enter($__internal_98b6ecfff45c8448262c517f964bb5956a3ee0f4976f54b274c2a90b0e9ec2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 266
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 267
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 268
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 270
            $context["form_method"] = "POST";
        }
        // line 272
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
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
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 273
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 274
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_98b6ecfff45c8448262c517f964bb5956a3ee0f4976f54b274c2a90b0e9ec2a8->leave($__internal_98b6ecfff45c8448262c517f964bb5956a3ee0f4976f54b274c2a90b0e9ec2a8_prof);

    }

    // line 278
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_ebec734b1b7ff3e16aee6bcdbe066432b054226d460a3cbcefa27287ff38c620 = $this->env->getExtension("native_profiler");
        $__internal_ebec734b1b7ff3e16aee6bcdbe066432b054226d460a3cbcefa27287ff38c620->enter($__internal_ebec734b1b7ff3e16aee6bcdbe066432b054226d460a3cbcefa27287ff38c620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 279
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 280
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 282
        echo "</form>";
        
        $__internal_ebec734b1b7ff3e16aee6bcdbe066432b054226d460a3cbcefa27287ff38c620->leave($__internal_ebec734b1b7ff3e16aee6bcdbe066432b054226d460a3cbcefa27287ff38c620_prof);

    }

    // line 285
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_1ed2ebdc57e0aad2e391256d2c32d972e0e98441e66e4046a371b6e7e91568f3 = $this->env->getExtension("native_profiler");
        $__internal_1ed2ebdc57e0aad2e391256d2c32d972e0e98441e66e4046a371b6e7e91568f3->enter($__internal_1ed2ebdc57e0aad2e391256d2c32d972e0e98441e66e4046a371b6e7e91568f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 286
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_1ed2ebdc57e0aad2e391256d2c32d972e0e98441e66e4046a371b6e7e91568f3->leave($__internal_1ed2ebdc57e0aad2e391256d2c32d972e0e98441e66e4046a371b6e7e91568f3_prof);

    }

    // line 289
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3653ed597edd645644785642d33149fe2fdbd3738376f51b2c06a72c839803fc = $this->env->getExtension("native_profiler");
        $__internal_3653ed597edd645644785642d33149fe2fdbd3738376f51b2c06a72c839803fc->enter($__internal_3653ed597edd645644785642d33149fe2fdbd3738376f51b2c06a72c839803fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 290
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 291
            echo "<ul>";
            // line 292
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 293
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "</ul>";
        }
        
        $__internal_3653ed597edd645644785642d33149fe2fdbd3738376f51b2c06a72c839803fc->leave($__internal_3653ed597edd645644785642d33149fe2fdbd3738376f51b2c06a72c839803fc_prof);

    }

    // line 299
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_8446c770976a0bdd59180ca714a5b9013878a77d265aba726fa1eb3b64cfda90 = $this->env->getExtension("native_profiler");
        $__internal_8446c770976a0bdd59180ca714a5b9013878a77d265aba726fa1eb3b64cfda90->enter($__internal_8446c770976a0bdd59180ca714a5b9013878a77d265aba726fa1eb3b64cfda90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 300
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 302
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8446c770976a0bdd59180ca714a5b9013878a77d265aba726fa1eb3b64cfda90->leave($__internal_8446c770976a0bdd59180ca714a5b9013878a77d265aba726fa1eb3b64cfda90_prof);

    }

    // line 309
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_3cb3c4d1d4fba28e01c3cdf21577ae17a930a9b2e93216984f79e1b4555f8574 = $this->env->getExtension("native_profiler");
        $__internal_3cb3c4d1d4fba28e01c3cdf21577ae17a930a9b2e93216984f79e1b4555f8574->enter($__internal_3cb3c4d1d4fba28e01c3cdf21577ae17a930a9b2e93216984f79e1b4555f8574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 310
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 311
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3cb3c4d1d4fba28e01c3cdf21577ae17a930a9b2e93216984f79e1b4555f8574->leave($__internal_3cb3c4d1d4fba28e01c3cdf21577ae17a930a9b2e93216984f79e1b4555f8574_prof);

    }

    // line 315
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_bef1f89641c439b720dd9f2e0d332a600680c4ffe73c6263eed5f02f3b75d0bc = $this->env->getExtension("native_profiler");
        $__internal_bef1f89641c439b720dd9f2e0d332a600680c4ffe73c6263eed5f02f3b75d0bc->enter($__internal_bef1f89641c439b720dd9f2e0d332a600680c4ffe73c6263eed5f02f3b75d0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 316
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 317
        if (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")) &&  !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bef1f89641c439b720dd9f2e0d332a600680c4ffe73c6263eed5f02f3b75d0bc->leave($__internal_bef1f89641c439b720dd9f2e0d332a600680c4ffe73c6263eed5f02f3b75d0bc_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_7f16731908e3849ff52cde71735897d98bb930cc22727885ab0bb71e653b5663 = $this->env->getExtension("native_profiler");
        $__internal_7f16731908e3849ff52cde71735897d98bb930cc22727885ab0bb71e653b5663->enter($__internal_7f16731908e3849ff52cde71735897d98bb930cc22727885ab0bb71e653b5663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7f16731908e3849ff52cde71735897d98bb930cc22727885ab0bb71e653b5663->leave($__internal_7f16731908e3849ff52cde71735897d98bb930cc22727885ab0bb71e653b5663_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_8796948deca1bf4f6738c122ca7cbca16a74e095d957da48b9eaa27389af5819 = $this->env->getExtension("native_profiler");
        $__internal_8796948deca1bf4f6738c122ca7cbca16a74e095d957da48b9eaa27389af5819->enter($__internal_8796948deca1bf4f6738c122ca7cbca16a74e095d957da48b9eaa27389af5819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8796948deca1bf4f6738c122ca7cbca16a74e095d957da48b9eaa27389af5819->leave($__internal_8796948deca1bf4f6738c122ca7cbca16a74e095d957da48b9eaa27389af5819_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_9244185dc9368cc227d360a142639ef7b0d882b7936d05d65ccb51333799fd26 = $this->env->getExtension("native_profiler");
        $__internal_9244185dc9368cc227d360a142639ef7b0d882b7936d05d65ccb51333799fd26->enter($__internal_9244185dc9368cc227d360a142639ef7b0d882b7936d05d65ccb51333799fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9244185dc9368cc227d360a142639ef7b0d882b7936d05d65ccb51333799fd26->leave($__internal_9244185dc9368cc227d360a142639ef7b0d882b7936d05d65ccb51333799fd26_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1269 => 368,  1267 => 367,  1262 => 366,  1260 => 365,  1255 => 364,  1253 => 363,  1251 => 362,  1247 => 361,  1241 => 360,  1226 => 355,  1224 => 354,  1219 => 353,  1217 => 352,  1212 => 351,  1210 => 350,  1208 => 349,  1204 => 348,  1195 => 347,  1189 => 346,  1174 => 341,  1172 => 340,  1167 => 339,  1165 => 338,  1160 => 337,  1158 => 336,  1156 => 335,  1152 => 334,  1146 => 333,  1140 => 332,  1125 => 327,  1123 => 326,  1118 => 325,  1116 => 324,  1111 => 323,  1109 => 322,  1107 => 321,  1103 => 320,  1099 => 319,  1095 => 318,  1091 => 317,  1085 => 316,  1079 => 315,  1068 => 311,  1064 => 310,  1058 => 309,  1046 => 302,  1044 => 301,  1040 => 300,  1034 => 299,  1026 => 295,  1018 => 293,  1014 => 292,  1012 => 291,  1010 => 290,  1004 => 289,  995 => 286,  989 => 285,  982 => 282,  979 => 280,  977 => 279,  971 => 278,  961 => 274,  959 => 273,  935 => 272,  932 => 270,  929 => 268,  927 => 267,  925 => 266,  919 => 265,  912 => 262,  910 => 261,  908 => 260,  902 => 259,  895 => 254,  889 => 253,  882 => 250,  880 => 249,  878 => 248,  872 => 247,  865 => 244,  863 => 243,  861 => 242,  859 => 241,  857 => 240,  851 => 239,  844 => 236,  838 => 231,  827 => 227,  804 => 223,  800 => 220,  797 => 217,  796 => 216,  795 => 215,  793 => 214,  790 => 213,  787 => 211,  784 => 210,  781 => 208,  779 => 207,  777 => 206,  771 => 205,  764 => 200,  762 => 199,  756 => 198,  749 => 195,  747 => 194,  741 => 193,  728 => 190,  724 => 187,  721 => 184,  720 => 183,  719 => 182,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 315,  144 => 309,  141 => 306,  139 => 299,  137 => 289,  135 => 285,  133 => 278,  131 => 265,  129 => 259,  127 => 253,  125 => 247,  123 => 239,  121 => 231,  119 => 227,  117 => 205,  115 => 198,  113 => 193,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
