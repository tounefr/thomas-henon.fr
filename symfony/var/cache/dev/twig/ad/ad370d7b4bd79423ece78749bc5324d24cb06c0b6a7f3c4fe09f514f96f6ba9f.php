<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5ea6741e281500cf3d20d608d3ae5b88734b8f9e6883697183be9c74f664ffaa extends Twig_Template
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
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
        $__internal_58bcc8570d68c7da166f29f4edc9fc3afe38d033999f8a7642954a5bdd977234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bcc8570d68c7da166f29f4edc9fc3afe38d033999f8a7642954a5bdd977234->enter($__internal_58bcc8570d68c7da166f29f4edc9fc3afe38d033999f8a7642954a5bdd977234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_00db4ca6ed6ba171b524a60a8e7cdb20f5786f9422d980acbf9581fe28719a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00db4ca6ed6ba171b524a60a8e7cdb20f5786f9422d980acbf9581fe28719a9d->enter($__internal_00db4ca6ed6ba171b524a60a8e7cdb20f5786f9422d980acbf9581fe28719a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_58bcc8570d68c7da166f29f4edc9fc3afe38d033999f8a7642954a5bdd977234->leave($__internal_58bcc8570d68c7da166f29f4edc9fc3afe38d033999f8a7642954a5bdd977234_prof);

        
        $__internal_00db4ca6ed6ba171b524a60a8e7cdb20f5786f9422d980acbf9581fe28719a9d->leave($__internal_00db4ca6ed6ba171b524a60a8e7cdb20f5786f9422d980acbf9581fe28719a9d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bb8e89bd8a9f95781dd66c85292cdcd7419b3fbc73651c164f1162923d4d5bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8e89bd8a9f95781dd66c85292cdcd7419b3fbc73651c164f1162923d4d5bd6->enter($__internal_bb8e89bd8a9f95781dd66c85292cdcd7419b3fbc73651c164f1162923d4d5bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ee28f228862481d06cabb664f3c7c0bf384ba014f9d1c3cde26712895155609d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee28f228862481d06cabb664f3c7c0bf384ba014f9d1c3cde26712895155609d->enter($__internal_ee28f228862481d06cabb664f3c7c0bf384ba014f9d1c3cde26712895155609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ee28f228862481d06cabb664f3c7c0bf384ba014f9d1c3cde26712895155609d->leave($__internal_ee28f228862481d06cabb664f3c7c0bf384ba014f9d1c3cde26712895155609d_prof);

        
        $__internal_bb8e89bd8a9f95781dd66c85292cdcd7419b3fbc73651c164f1162923d4d5bd6->leave($__internal_bb8e89bd8a9f95781dd66c85292cdcd7419b3fbc73651c164f1162923d4d5bd6_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b943e0839ce89044f64155d362a7099a221a1edfffc2318775673714fc165bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b943e0839ce89044f64155d362a7099a221a1edfffc2318775673714fc165bac->enter($__internal_b943e0839ce89044f64155d362a7099a221a1edfffc2318775673714fc165bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2d91d87eb50ac54ee92dfcbec670b52543f864f30b0eaae766595b796e0bcc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d91d87eb50ac54ee92dfcbec670b52543f864f30b0eaae766595b796e0bcc16->enter($__internal_2d91d87eb50ac54ee92dfcbec670b52543f864f30b0eaae766595b796e0bcc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2d91d87eb50ac54ee92dfcbec670b52543f864f30b0eaae766595b796e0bcc16->leave($__internal_2d91d87eb50ac54ee92dfcbec670b52543f864f30b0eaae766595b796e0bcc16_prof);

        
        $__internal_b943e0839ce89044f64155d362a7099a221a1edfffc2318775673714fc165bac->leave($__internal_b943e0839ce89044f64155d362a7099a221a1edfffc2318775673714fc165bac_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_6b539387b2291ba1bc096bca1f3b221107a0a0de8de88c7666b7a8d2159daac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b539387b2291ba1bc096bca1f3b221107a0a0de8de88c7666b7a8d2159daac3->enter($__internal_6b539387b2291ba1bc096bca1f3b221107a0a0de8de88c7666b7a8d2159daac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8bd98b3d465e40eff7cb1bc2fb010fc22b15a1551861af53518d4e475b309bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd98b3d465e40eff7cb1bc2fb010fc22b15a1551861af53518d4e475b309bca->enter($__internal_8bd98b3d465e40eff7cb1bc2fb010fc22b15a1551861af53518d4e475b309bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8bd98b3d465e40eff7cb1bc2fb010fc22b15a1551861af53518d4e475b309bca->leave($__internal_8bd98b3d465e40eff7cb1bc2fb010fc22b15a1551861af53518d4e475b309bca_prof);

        
        $__internal_6b539387b2291ba1bc096bca1f3b221107a0a0de8de88c7666b7a8d2159daac3->leave($__internal_6b539387b2291ba1bc096bca1f3b221107a0a0de8de88c7666b7a8d2159daac3_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1633625673ad85626421f29ceaf557cb7dc43a482b706d6c98ca90b4f3e26038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1633625673ad85626421f29ceaf557cb7dc43a482b706d6c98ca90b4f3e26038->enter($__internal_1633625673ad85626421f29ceaf557cb7dc43a482b706d6c98ca90b4f3e26038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_da8a7bc735e03ce6898c7ab2609efff98fa4cb98c512fabb2945a522e1d94d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8a7bc735e03ce6898c7ab2609efff98fa4cb98c512fabb2945a522e1d94d21->enter($__internal_da8a7bc735e03ce6898c7ab2609efff98fa4cb98c512fabb2945a522e1d94d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_215a1270233570f9ed51c8eaf3c0e03be5cd768d1d0b663a787841cde2ed7c89 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_b567b6ea3977b2835f10dc4bfc07db09646b67b2b0404015868fa7160cc086d4 = "{{") && ('' === $__internal_b567b6ea3977b2835f10dc4bfc07db09646b67b2b0404015868fa7160cc086d4 || 0 === strpos($__internal_215a1270233570f9ed51c8eaf3c0e03be5cd768d1d0b663a787841cde2ed7c89, $__internal_b567b6ea3977b2835f10dc4bfc07db09646b67b2b0404015868fa7160cc086d4)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_da8a7bc735e03ce6898c7ab2609efff98fa4cb98c512fabb2945a522e1d94d21->leave($__internal_da8a7bc735e03ce6898c7ab2609efff98fa4cb98c512fabb2945a522e1d94d21_prof);

        
        $__internal_1633625673ad85626421f29ceaf557cb7dc43a482b706d6c98ca90b4f3e26038->leave($__internal_1633625673ad85626421f29ceaf557cb7dc43a482b706d6c98ca90b4f3e26038_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1cef9f25f3f0751b10cae71dac18bc22d40eb489fc08cab1a6544a5e079ed364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cef9f25f3f0751b10cae71dac18bc22d40eb489fc08cab1a6544a5e079ed364->enter($__internal_1cef9f25f3f0751b10cae71dac18bc22d40eb489fc08cab1a6544a5e079ed364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7804ce2022a07e935ff1f03d0d376f3fe8f4622b43861972ff8f087c1f121c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7804ce2022a07e935ff1f03d0d376f3fe8f4622b43861972ff8f087c1f121c4b->enter($__internal_7804ce2022a07e935ff1f03d0d376f3fe8f4622b43861972ff8f087c1f121c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7804ce2022a07e935ff1f03d0d376f3fe8f4622b43861972ff8f087c1f121c4b->leave($__internal_7804ce2022a07e935ff1f03d0d376f3fe8f4622b43861972ff8f087c1f121c4b_prof);

        
        $__internal_1cef9f25f3f0751b10cae71dac18bc22d40eb489fc08cab1a6544a5e079ed364->leave($__internal_1cef9f25f3f0751b10cae71dac18bc22d40eb489fc08cab1a6544a5e079ed364_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8bd91d260103a5dee59010480b04a82fa639007af0731baa2c2cc9a5cf0430a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd91d260103a5dee59010480b04a82fa639007af0731baa2c2cc9a5cf0430a5->enter($__internal_8bd91d260103a5dee59010480b04a82fa639007af0731baa2c2cc9a5cf0430a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_cba8fc34e3b454ce192754822067e258bdb3633ced7d885f9ef63be3d22f7293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba8fc34e3b454ce192754822067e258bdb3633ced7d885f9ef63be3d22f7293->enter($__internal_cba8fc34e3b454ce192754822067e258bdb3633ced7d885f9ef63be3d22f7293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_cba8fc34e3b454ce192754822067e258bdb3633ced7d885f9ef63be3d22f7293->leave($__internal_cba8fc34e3b454ce192754822067e258bdb3633ced7d885f9ef63be3d22f7293_prof);

        
        $__internal_8bd91d260103a5dee59010480b04a82fa639007af0731baa2c2cc9a5cf0430a5->leave($__internal_8bd91d260103a5dee59010480b04a82fa639007af0731baa2c2cc9a5cf0430a5_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7f661ee5f5cf3fc8e6b3b23fb137e69e1a96d6d4b2c08dcf439c762c65909e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f661ee5f5cf3fc8e6b3b23fb137e69e1a96d6d4b2c08dcf439c762c65909e1b->enter($__internal_7f661ee5f5cf3fc8e6b3b23fb137e69e1a96d6d4b2c08dcf439c762c65909e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a4f22e2010684e3daf6df9e233459bbae41db2331bab63669ef760eda7183831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f22e2010684e3daf6df9e233459bbae41db2331bab63669ef760eda7183831->enter($__internal_a4f22e2010684e3daf6df9e233459bbae41db2331bab63669ef760eda7183831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_a4f22e2010684e3daf6df9e233459bbae41db2331bab63669ef760eda7183831->leave($__internal_a4f22e2010684e3daf6df9e233459bbae41db2331bab63669ef760eda7183831_prof);

        
        $__internal_7f661ee5f5cf3fc8e6b3b23fb137e69e1a96d6d4b2c08dcf439c762c65909e1b->leave($__internal_7f661ee5f5cf3fc8e6b3b23fb137e69e1a96d6d4b2c08dcf439c762c65909e1b_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4d077c98a1cd768d61c5af4b0297609ff820d733651db95b07bb929cb9ca7e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d077c98a1cd768d61c5af4b0297609ff820d733651db95b07bb929cb9ca7e69->enter($__internal_4d077c98a1cd768d61c5af4b0297609ff820d733651db95b07bb929cb9ca7e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_982b0b9cfe5b87a25282d41e0fa943beea8e9633f6976db6bb02d4c913083292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982b0b9cfe5b87a25282d41e0fa943beea8e9633f6976db6bb02d4c913083292->enter($__internal_982b0b9cfe5b87a25282d41e0fa943beea8e9633f6976db6bb02d4c913083292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_982b0b9cfe5b87a25282d41e0fa943beea8e9633f6976db6bb02d4c913083292->leave($__internal_982b0b9cfe5b87a25282d41e0fa943beea8e9633f6976db6bb02d4c913083292_prof);

        
        $__internal_4d077c98a1cd768d61c5af4b0297609ff820d733651db95b07bb929cb9ca7e69->leave($__internal_4d077c98a1cd768d61c5af4b0297609ff820d733651db95b07bb929cb9ca7e69_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b307fd6e55c358351c3cafd5bd48e170cfd3534fc58940aa1405a3a097047d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b307fd6e55c358351c3cafd5bd48e170cfd3534fc58940aa1405a3a097047d53->enter($__internal_b307fd6e55c358351c3cafd5bd48e170cfd3534fc58940aa1405a3a097047d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8a36dbe598409ae0febf6a486e3772ab48ade56b3fc593de59e2e6d1533850c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a36dbe598409ae0febf6a486e3772ab48ade56b3fc593de59e2e6d1533850c4->enter($__internal_8a36dbe598409ae0febf6a486e3772ab48ade56b3fc593de59e2e6d1533850c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_8a36dbe598409ae0febf6a486e3772ab48ade56b3fc593de59e2e6d1533850c4->leave($__internal_8a36dbe598409ae0febf6a486e3772ab48ade56b3fc593de59e2e6d1533850c4_prof);

        
        $__internal_b307fd6e55c358351c3cafd5bd48e170cfd3534fc58940aa1405a3a097047d53->leave($__internal_b307fd6e55c358351c3cafd5bd48e170cfd3534fc58940aa1405a3a097047d53_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bd72462b9c13b59b6ae30e0d1c83a159aa4e4dc7ca7ff167e22094ab15f9d9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd72462b9c13b59b6ae30e0d1c83a159aa4e4dc7ca7ff167e22094ab15f9d9db->enter($__internal_bd72462b9c13b59b6ae30e0d1c83a159aa4e4dc7ca7ff167e22094ab15f9d9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9e18a610b075bd74b084005b0d5f7b0e1f8494ce3599e40d67859283fa3c1a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e18a610b075bd74b084005b0d5f7b0e1f8494ce3599e40d67859283fa3c1a46->enter($__internal_9e18a610b075bd74b084005b0d5f7b0e1f8494ce3599e40d67859283fa3c1a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9e18a610b075bd74b084005b0d5f7b0e1f8494ce3599e40d67859283fa3c1a46->leave($__internal_9e18a610b075bd74b084005b0d5f7b0e1f8494ce3599e40d67859283fa3c1a46_prof);

        
        $__internal_bd72462b9c13b59b6ae30e0d1c83a159aa4e4dc7ca7ff167e22094ab15f9d9db->leave($__internal_bd72462b9c13b59b6ae30e0d1c83a159aa4e4dc7ca7ff167e22094ab15f9d9db_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_703e9d51811b51879a63192b3c59d657f0f7287cd6150f5a362a129c247c98b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703e9d51811b51879a63192b3c59d657f0f7287cd6150f5a362a129c247c98b5->enter($__internal_703e9d51811b51879a63192b3c59d657f0f7287cd6150f5a362a129c247c98b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_696073d262a1ec67d41f27cda343485179d26cec214e2654f45aa6bed2d02c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696073d262a1ec67d41f27cda343485179d26cec214e2654f45aa6bed2d02c0a->enter($__internal_696073d262a1ec67d41f27cda343485179d26cec214e2654f45aa6bed2d02c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_696073d262a1ec67d41f27cda343485179d26cec214e2654f45aa6bed2d02c0a->leave($__internal_696073d262a1ec67d41f27cda343485179d26cec214e2654f45aa6bed2d02c0a_prof);

        
        $__internal_703e9d51811b51879a63192b3c59d657f0f7287cd6150f5a362a129c247c98b5->leave($__internal_703e9d51811b51879a63192b3c59d657f0f7287cd6150f5a362a129c247c98b5_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d66eab9fc766b508ee0984cbd476929c96779d66687e951d9f97fc8aecee17f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66eab9fc766b508ee0984cbd476929c96779d66687e951d9f97fc8aecee17f1->enter($__internal_d66eab9fc766b508ee0984cbd476929c96779d66687e951d9f97fc8aecee17f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c7afe3df05f38697f66d8e01cde33784f81863ce00f816cb594b3de37d31fff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7afe3df05f38697f66d8e01cde33784f81863ce00f816cb594b3de37d31fff6->enter($__internal_c7afe3df05f38697f66d8e01cde33784f81863ce00f816cb594b3de37d31fff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_c7afe3df05f38697f66d8e01cde33784f81863ce00f816cb594b3de37d31fff6->leave($__internal_c7afe3df05f38697f66d8e01cde33784f81863ce00f816cb594b3de37d31fff6_prof);

        
        $__internal_d66eab9fc766b508ee0984cbd476929c96779d66687e951d9f97fc8aecee17f1->leave($__internal_d66eab9fc766b508ee0984cbd476929c96779d66687e951d9f97fc8aecee17f1_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_67a0e69361a83932fea2bb1fa9d0dec74cbe8a8b6e79bb911fd8edc4023c3e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a0e69361a83932fea2bb1fa9d0dec74cbe8a8b6e79bb911fd8edc4023c3e3e->enter($__internal_67a0e69361a83932fea2bb1fa9d0dec74cbe8a8b6e79bb911fd8edc4023c3e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a19c41acfbeb646a8249434f8fecacbc800aeab061c703fb6b44d603228926e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19c41acfbeb646a8249434f8fecacbc800aeab061c703fb6b44d603228926e3->enter($__internal_a19c41acfbeb646a8249434f8fecacbc800aeab061c703fb6b44d603228926e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_a19c41acfbeb646a8249434f8fecacbc800aeab061c703fb6b44d603228926e3->leave($__internal_a19c41acfbeb646a8249434f8fecacbc800aeab061c703fb6b44d603228926e3_prof);

        
        $__internal_67a0e69361a83932fea2bb1fa9d0dec74cbe8a8b6e79bb911fd8edc4023c3e3e->leave($__internal_67a0e69361a83932fea2bb1fa9d0dec74cbe8a8b6e79bb911fd8edc4023c3e3e_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_df27af8b03789e3bb89f7ac366b7c5b2ff18d05da042ccdef153cf39057920fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df27af8b03789e3bb89f7ac366b7c5b2ff18d05da042ccdef153cf39057920fa->enter($__internal_df27af8b03789e3bb89f7ac366b7c5b2ff18d05da042ccdef153cf39057920fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6a646bbaa64359979f768e834cd52c17bf0ab8276f479a850843aab5761ac87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a646bbaa64359979f768e834cd52c17bf0ab8276f479a850843aab5761ac87d->enter($__internal_6a646bbaa64359979f768e834cd52c17bf0ab8276f479a850843aab5761ac87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6a646bbaa64359979f768e834cd52c17bf0ab8276f479a850843aab5761ac87d->leave($__internal_6a646bbaa64359979f768e834cd52c17bf0ab8276f479a850843aab5761ac87d_prof);

        
        $__internal_df27af8b03789e3bb89f7ac366b7c5b2ff18d05da042ccdef153cf39057920fa->leave($__internal_df27af8b03789e3bb89f7ac366b7c5b2ff18d05da042ccdef153cf39057920fa_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f8438bed1708620bfa6f2c8d08d787b2ad051e3f2cd4cfbbe2f1588cb7de5631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8438bed1708620bfa6f2c8d08d787b2ad051e3f2cd4cfbbe2f1588cb7de5631->enter($__internal_f8438bed1708620bfa6f2c8d08d787b2ad051e3f2cd4cfbbe2f1588cb7de5631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c2db4efcb49c5f753947e8ebc6e148469116b19a1205eec02b88117f95b52185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2db4efcb49c5f753947e8ebc6e148469116b19a1205eec02b88117f95b52185->enter($__internal_c2db4efcb49c5f753947e8ebc6e148469116b19a1205eec02b88117f95b52185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c2db4efcb49c5f753947e8ebc6e148469116b19a1205eec02b88117f95b52185->leave($__internal_c2db4efcb49c5f753947e8ebc6e148469116b19a1205eec02b88117f95b52185_prof);

        
        $__internal_f8438bed1708620bfa6f2c8d08d787b2ad051e3f2cd4cfbbe2f1588cb7de5631->leave($__internal_f8438bed1708620bfa6f2c8d08d787b2ad051e3f2cd4cfbbe2f1588cb7de5631_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_19e3aaf27217c0aab7aab51617d6142713cdb4603eea79dcb6d1dbb8a1b1351a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e3aaf27217c0aab7aab51617d6142713cdb4603eea79dcb6d1dbb8a1b1351a->enter($__internal_19e3aaf27217c0aab7aab51617d6142713cdb4603eea79dcb6d1dbb8a1b1351a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6a04c3efbb33b786beb6add99047cdea5fa078d43c37d1be8a274799b717c774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a04c3efbb33b786beb6add99047cdea5fa078d43c37d1be8a274799b717c774->enter($__internal_6a04c3efbb33b786beb6add99047cdea5fa078d43c37d1be8a274799b717c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6a04c3efbb33b786beb6add99047cdea5fa078d43c37d1be8a274799b717c774->leave($__internal_6a04c3efbb33b786beb6add99047cdea5fa078d43c37d1be8a274799b717c774_prof);

        
        $__internal_19e3aaf27217c0aab7aab51617d6142713cdb4603eea79dcb6d1dbb8a1b1351a->leave($__internal_19e3aaf27217c0aab7aab51617d6142713cdb4603eea79dcb6d1dbb8a1b1351a_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d7ef309a79865f013dca7d7d57e4c559fbfe0f2c1ec5d46a16a223edf6698d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ef309a79865f013dca7d7d57e4c559fbfe0f2c1ec5d46a16a223edf6698d64->enter($__internal_d7ef309a79865f013dca7d7d57e4c559fbfe0f2c1ec5d46a16a223edf6698d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ee64a011fec2a5e48d2ad003641629888c43413d4ba37c66acf3616c1a1d037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee64a011fec2a5e48d2ad003641629888c43413d4ba37c66acf3616c1a1d037d->enter($__internal_ee64a011fec2a5e48d2ad003641629888c43413d4ba37c66acf3616c1a1d037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ee64a011fec2a5e48d2ad003641629888c43413d4ba37c66acf3616c1a1d037d->leave($__internal_ee64a011fec2a5e48d2ad003641629888c43413d4ba37c66acf3616c1a1d037d_prof);

        
        $__internal_d7ef309a79865f013dca7d7d57e4c559fbfe0f2c1ec5d46a16a223edf6698d64->leave($__internal_d7ef309a79865f013dca7d7d57e4c559fbfe0f2c1ec5d46a16a223edf6698d64_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f171ef4c0f44e811f851245a36adb1ac59b44b90e9880c451d898d8f111c332d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f171ef4c0f44e811f851245a36adb1ac59b44b90e9880c451d898d8f111c332d->enter($__internal_f171ef4c0f44e811f851245a36adb1ac59b44b90e9880c451d898d8f111c332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1a45e082074ad1e7b128e08435f0bbe91fef0562cf932db69f8e2bc21813919b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a45e082074ad1e7b128e08435f0bbe91fef0562cf932db69f8e2bc21813919b->enter($__internal_1a45e082074ad1e7b128e08435f0bbe91fef0562cf932db69f8e2bc21813919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
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
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_1a45e082074ad1e7b128e08435f0bbe91fef0562cf932db69f8e2bc21813919b->leave($__internal_1a45e082074ad1e7b128e08435f0bbe91fef0562cf932db69f8e2bc21813919b_prof);

        
        $__internal_f171ef4c0f44e811f851245a36adb1ac59b44b90e9880c451d898d8f111c332d->leave($__internal_f171ef4c0f44e811f851245a36adb1ac59b44b90e9880c451d898d8f111c332d_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_30ab98e562fadb450f0f5529b0a8f549dd101a6efed324bca7644e257004dcd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ab98e562fadb450f0f5529b0a8f549dd101a6efed324bca7644e257004dcd6->enter($__internal_30ab98e562fadb450f0f5529b0a8f549dd101a6efed324bca7644e257004dcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ed0e5857390b71dd896c342670bbf48422bf6b48a59e0267c86b2e984e74bd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0e5857390b71dd896c342670bbf48422bf6b48a59e0267c86b2e984e74bd3a->enter($__internal_ed0e5857390b71dd896c342670bbf48422bf6b48a59e0267c86b2e984e74bd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_ed0e5857390b71dd896c342670bbf48422bf6b48a59e0267c86b2e984e74bd3a->leave($__internal_ed0e5857390b71dd896c342670bbf48422bf6b48a59e0267c86b2e984e74bd3a_prof);

        
        $__internal_30ab98e562fadb450f0f5529b0a8f549dd101a6efed324bca7644e257004dcd6->leave($__internal_30ab98e562fadb450f0f5529b0a8f549dd101a6efed324bca7644e257004dcd6_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f4bb9446e66ce58bc33fc7918ee5c1a7a4ba22d1ed063cd024e324f02db8b919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bb9446e66ce58bc33fc7918ee5c1a7a4ba22d1ed063cd024e324f02db8b919->enter($__internal_f4bb9446e66ce58bc33fc7918ee5c1a7a4ba22d1ed063cd024e324f02db8b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f3ae7b9e349aa2146bbd38e02fdd0cabc8a51c679ab7fa4e6305950caf3a1009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ae7b9e349aa2146bbd38e02fdd0cabc8a51c679ab7fa4e6305950caf3a1009->enter($__internal_f3ae7b9e349aa2146bbd38e02fdd0cabc8a51c679ab7fa4e6305950caf3a1009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_f3ae7b9e349aa2146bbd38e02fdd0cabc8a51c679ab7fa4e6305950caf3a1009->leave($__internal_f3ae7b9e349aa2146bbd38e02fdd0cabc8a51c679ab7fa4e6305950caf3a1009_prof);

        
        $__internal_f4bb9446e66ce58bc33fc7918ee5c1a7a4ba22d1ed063cd024e324f02db8b919->leave($__internal_f4bb9446e66ce58bc33fc7918ee5c1a7a4ba22d1ed063cd024e324f02db8b919_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_97b3bc1203bc0cc4050ad6cfda2d1435c4fb066fdbb9db65cbf002bc7cffa089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b3bc1203bc0cc4050ad6cfda2d1435c4fb066fdbb9db65cbf002bc7cffa089->enter($__internal_97b3bc1203bc0cc4050ad6cfda2d1435c4fb066fdbb9db65cbf002bc7cffa089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_969b11a532e6c909d453a496b3e0dbbed5155cd4c6e4b15f8f9e8cf3226d61d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969b11a532e6c909d453a496b3e0dbbed5155cd4c6e4b15f8f9e8cf3226d61d1->enter($__internal_969b11a532e6c909d453a496b3e0dbbed5155cd4c6e4b15f8f9e8cf3226d61d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_969b11a532e6c909d453a496b3e0dbbed5155cd4c6e4b15f8f9e8cf3226d61d1->leave($__internal_969b11a532e6c909d453a496b3e0dbbed5155cd4c6e4b15f8f9e8cf3226d61d1_prof);

        
        $__internal_97b3bc1203bc0cc4050ad6cfda2d1435c4fb066fdbb9db65cbf002bc7cffa089->leave($__internal_97b3bc1203bc0cc4050ad6cfda2d1435c4fb066fdbb9db65cbf002bc7cffa089_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_da1b157e48ce1a7d433c268891e059327eefeee8cc118374b6ceecd0e1ff3800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1b157e48ce1a7d433c268891e059327eefeee8cc118374b6ceecd0e1ff3800->enter($__internal_da1b157e48ce1a7d433c268891e059327eefeee8cc118374b6ceecd0e1ff3800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0a188d02514c711777cffd8c1668bbd19d7ea380f5877249ba640f0cd0d04949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a188d02514c711777cffd8c1668bbd19d7ea380f5877249ba640f0cd0d04949->enter($__internal_0a188d02514c711777cffd8c1668bbd19d7ea380f5877249ba640f0cd0d04949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0a188d02514c711777cffd8c1668bbd19d7ea380f5877249ba640f0cd0d04949->leave($__internal_0a188d02514c711777cffd8c1668bbd19d7ea380f5877249ba640f0cd0d04949_prof);

        
        $__internal_da1b157e48ce1a7d433c268891e059327eefeee8cc118374b6ceecd0e1ff3800->leave($__internal_da1b157e48ce1a7d433c268891e059327eefeee8cc118374b6ceecd0e1ff3800_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0a3467894070d1df6c533b36c0d4df6c0f43eb8e6d3a8a88ca677168cc05cf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3467894070d1df6c533b36c0d4df6c0f43eb8e6d3a8a88ca677168cc05cf3c->enter($__internal_0a3467894070d1df6c533b36c0d4df6c0f43eb8e6d3a8a88ca677168cc05cf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6bf92d59b9fd5be0485af1c8cf4eb0681dceb0dc60b8cdb28c7a1c71b0a3c818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf92d59b9fd5be0485af1c8cf4eb0681dceb0dc60b8cdb28c7a1c71b0a3c818->enter($__internal_6bf92d59b9fd5be0485af1c8cf4eb0681dceb0dc60b8cdb28c7a1c71b0a3c818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6bf92d59b9fd5be0485af1c8cf4eb0681dceb0dc60b8cdb28c7a1c71b0a3c818->leave($__internal_6bf92d59b9fd5be0485af1c8cf4eb0681dceb0dc60b8cdb28c7a1c71b0a3c818_prof);

        
        $__internal_0a3467894070d1df6c533b36c0d4df6c0f43eb8e6d3a8a88ca677168cc05cf3c->leave($__internal_0a3467894070d1df6c533b36c0d4df6c0f43eb8e6d3a8a88ca677168cc05cf3c_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5ea11cd86a01795a40b3d1fddb2b74c8f88d5fc52af60a3a47e114789343ce36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea11cd86a01795a40b3d1fddb2b74c8f88d5fc52af60a3a47e114789343ce36->enter($__internal_5ea11cd86a01795a40b3d1fddb2b74c8f88d5fc52af60a3a47e114789343ce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_56b1d9f5f838705671222a60bfab73f06696c9415008bf9aca3932fef69f979c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b1d9f5f838705671222a60bfab73f06696c9415008bf9aca3932fef69f979c->enter($__internal_56b1d9f5f838705671222a60bfab73f06696c9415008bf9aca3932fef69f979c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_56b1d9f5f838705671222a60bfab73f06696c9415008bf9aca3932fef69f979c->leave($__internal_56b1d9f5f838705671222a60bfab73f06696c9415008bf9aca3932fef69f979c_prof);

        
        $__internal_5ea11cd86a01795a40b3d1fddb2b74c8f88d5fc52af60a3a47e114789343ce36->leave($__internal_5ea11cd86a01795a40b3d1fddb2b74c8f88d5fc52af60a3a47e114789343ce36_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_655c95c0635ba017c4541c152884957bf50050b6962b2ef575fe5c77197b71e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655c95c0635ba017c4541c152884957bf50050b6962b2ef575fe5c77197b71e3->enter($__internal_655c95c0635ba017c4541c152884957bf50050b6962b2ef575fe5c77197b71e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7a6840242a3b8d228920b8fbb4493879769d396ccc4c485025c538a1d92aa113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6840242a3b8d228920b8fbb4493879769d396ccc4c485025c538a1d92aa113->enter($__internal_7a6840242a3b8d228920b8fbb4493879769d396ccc4c485025c538a1d92aa113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_7a6840242a3b8d228920b8fbb4493879769d396ccc4c485025c538a1d92aa113->leave($__internal_7a6840242a3b8d228920b8fbb4493879769d396ccc4c485025c538a1d92aa113_prof);

        
        $__internal_655c95c0635ba017c4541c152884957bf50050b6962b2ef575fe5c77197b71e3->leave($__internal_655c95c0635ba017c4541c152884957bf50050b6962b2ef575fe5c77197b71e3_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_db70ca0303e8107dcd5738c9a94bc1861a13e170387b23c816d30ddf5a0a8851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db70ca0303e8107dcd5738c9a94bc1861a13e170387b23c816d30ddf5a0a8851->enter($__internal_db70ca0303e8107dcd5738c9a94bc1861a13e170387b23c816d30ddf5a0a8851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bb4d6afb7b0344f1b0b7a7d99f0bdefcb013fa80d94c10b307a97c4ce8ca0ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4d6afb7b0344f1b0b7a7d99f0bdefcb013fa80d94c10b307a97c4ce8ca0ee9->enter($__internal_bb4d6afb7b0344f1b0b7a7d99f0bdefcb013fa80d94c10b307a97c4ce8ca0ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_bb4d6afb7b0344f1b0b7a7d99f0bdefcb013fa80d94c10b307a97c4ce8ca0ee9->leave($__internal_bb4d6afb7b0344f1b0b7a7d99f0bdefcb013fa80d94c10b307a97c4ce8ca0ee9_prof);

        
        $__internal_db70ca0303e8107dcd5738c9a94bc1861a13e170387b23c816d30ddf5a0a8851->leave($__internal_db70ca0303e8107dcd5738c9a94bc1861a13e170387b23c816d30ddf5a0a8851_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f9a982bae4ae18b7a0e7cf23127e742a826a0485fdda47d4886edf5b620f9fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a982bae4ae18b7a0e7cf23127e742a826a0485fdda47d4886edf5b620f9fed->enter($__internal_f9a982bae4ae18b7a0e7cf23127e742a826a0485fdda47d4886edf5b620f9fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_47454a66c3c99a3d7db2352e508c9fee5bb5871d8f898b12b9266a22949558ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47454a66c3c99a3d7db2352e508c9fee5bb5871d8f898b12b9266a22949558ee->enter($__internal_47454a66c3c99a3d7db2352e508c9fee5bb5871d8f898b12b9266a22949558ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_47454a66c3c99a3d7db2352e508c9fee5bb5871d8f898b12b9266a22949558ee->leave($__internal_47454a66c3c99a3d7db2352e508c9fee5bb5871d8f898b12b9266a22949558ee_prof);

        
        $__internal_f9a982bae4ae18b7a0e7cf23127e742a826a0485fdda47d4886edf5b620f9fed->leave($__internal_f9a982bae4ae18b7a0e7cf23127e742a826a0485fdda47d4886edf5b620f9fed_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
