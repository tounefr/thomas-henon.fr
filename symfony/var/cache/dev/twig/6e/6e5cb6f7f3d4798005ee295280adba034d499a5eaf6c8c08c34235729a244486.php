<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_eacbb8787c491b979082ee053598a238859eaf06d023d863771d126de10d512c extends Twig_Template
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
        $__internal_79c8328ca4bf79667311ff5d25b994723cca8b0949133aee90fb580b2ad6756b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c8328ca4bf79667311ff5d25b994723cca8b0949133aee90fb580b2ad6756b->enter($__internal_79c8328ca4bf79667311ff5d25b994723cca8b0949133aee90fb580b2ad6756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_9de625e57022330cdfe6f4b4b38e4bd04c9cac1f5e28bb1fa28fc04f9904ee00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de625e57022330cdfe6f4b4b38e4bd04c9cac1f5e28bb1fa28fc04f9904ee00->enter($__internal_9de625e57022330cdfe6f4b4b38e4bd04c9cac1f5e28bb1fa28fc04f9904ee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_79c8328ca4bf79667311ff5d25b994723cca8b0949133aee90fb580b2ad6756b->leave($__internal_79c8328ca4bf79667311ff5d25b994723cca8b0949133aee90fb580b2ad6756b_prof);

        
        $__internal_9de625e57022330cdfe6f4b4b38e4bd04c9cac1f5e28bb1fa28fc04f9904ee00->leave($__internal_9de625e57022330cdfe6f4b4b38e4bd04c9cac1f5e28bb1fa28fc04f9904ee00_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_497e924e7f7cf9800b5f076217e3b96a1747d92f9f2312dd411a0f897ec8ba5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497e924e7f7cf9800b5f076217e3b96a1747d92f9f2312dd411a0f897ec8ba5c->enter($__internal_497e924e7f7cf9800b5f076217e3b96a1747d92f9f2312dd411a0f897ec8ba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0d86b7cfe662a1f9ed55b33252e79da7e518b6c48c905f3843073ca223fa8c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d86b7cfe662a1f9ed55b33252e79da7e518b6c48c905f3843073ca223fa8c2b->enter($__internal_0d86b7cfe662a1f9ed55b33252e79da7e518b6c48c905f3843073ca223fa8c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0d86b7cfe662a1f9ed55b33252e79da7e518b6c48c905f3843073ca223fa8c2b->leave($__internal_0d86b7cfe662a1f9ed55b33252e79da7e518b6c48c905f3843073ca223fa8c2b_prof);

        
        $__internal_497e924e7f7cf9800b5f076217e3b96a1747d92f9f2312dd411a0f897ec8ba5c->leave($__internal_497e924e7f7cf9800b5f076217e3b96a1747d92f9f2312dd411a0f897ec8ba5c_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4b6f9ff4763a8d7e1e068bf1f85c23acb0b18fc96be8e247ba88080b470d5475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6f9ff4763a8d7e1e068bf1f85c23acb0b18fc96be8e247ba88080b470d5475->enter($__internal_4b6f9ff4763a8d7e1e068bf1f85c23acb0b18fc96be8e247ba88080b470d5475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f943b450ebc3e04199bf070854343d544010b349df9fee9d41fcefcd690f1149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f943b450ebc3e04199bf070854343d544010b349df9fee9d41fcefcd690f1149->enter($__internal_f943b450ebc3e04199bf070854343d544010b349df9fee9d41fcefcd690f1149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f943b450ebc3e04199bf070854343d544010b349df9fee9d41fcefcd690f1149->leave($__internal_f943b450ebc3e04199bf070854343d544010b349df9fee9d41fcefcd690f1149_prof);

        
        $__internal_4b6f9ff4763a8d7e1e068bf1f85c23acb0b18fc96be8e247ba88080b470d5475->leave($__internal_4b6f9ff4763a8d7e1e068bf1f85c23acb0b18fc96be8e247ba88080b470d5475_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a05dde61541abea52fd42bf834d88b9a8e7a2c52353dc2aa450173a09a2f5e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05dde61541abea52fd42bf834d88b9a8e7a2c52353dc2aa450173a09a2f5e83->enter($__internal_a05dde61541abea52fd42bf834d88b9a8e7a2c52353dc2aa450173a09a2f5e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8be7535290232b830df2cbc1669cce99222f8787a93aad5b59c62c262ccb6675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be7535290232b830df2cbc1669cce99222f8787a93aad5b59c62c262ccb6675->enter($__internal_8be7535290232b830df2cbc1669cce99222f8787a93aad5b59c62c262ccb6675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8be7535290232b830df2cbc1669cce99222f8787a93aad5b59c62c262ccb6675->leave($__internal_8be7535290232b830df2cbc1669cce99222f8787a93aad5b59c62c262ccb6675_prof);

        
        $__internal_a05dde61541abea52fd42bf834d88b9a8e7a2c52353dc2aa450173a09a2f5e83->leave($__internal_a05dde61541abea52fd42bf834d88b9a8e7a2c52353dc2aa450173a09a2f5e83_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d04c283591d0040b897d2a95531ab43f41c27beb3ba4e85a1ce4a57240d875a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04c283591d0040b897d2a95531ab43f41c27beb3ba4e85a1ce4a57240d875a3->enter($__internal_d04c283591d0040b897d2a95531ab43f41c27beb3ba4e85a1ce4a57240d875a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a80d768fe3db46f389f20438e69cac0541dc905b90142abe499bcbd6fb01c560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80d768fe3db46f389f20438e69cac0541dc905b90142abe499bcbd6fb01c560->enter($__internal_a80d768fe3db46f389f20438e69cac0541dc905b90142abe499bcbd6fb01c560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e41cbd8473ab732f1cd31b7416019ffa9b92ad8481a62eb379850d856be648e6 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_fcd448905f1c9c88679d60e6c7321391909acebba14f0503e6f1c0c68374c689 = "{{") && ('' === $__internal_fcd448905f1c9c88679d60e6c7321391909acebba14f0503e6f1c0c68374c689 || 0 === strpos($__internal_e41cbd8473ab732f1cd31b7416019ffa9b92ad8481a62eb379850d856be648e6, $__internal_fcd448905f1c9c88679d60e6c7321391909acebba14f0503e6f1c0c68374c689)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_a80d768fe3db46f389f20438e69cac0541dc905b90142abe499bcbd6fb01c560->leave($__internal_a80d768fe3db46f389f20438e69cac0541dc905b90142abe499bcbd6fb01c560_prof);

        
        $__internal_d04c283591d0040b897d2a95531ab43f41c27beb3ba4e85a1ce4a57240d875a3->leave($__internal_d04c283591d0040b897d2a95531ab43f41c27beb3ba4e85a1ce4a57240d875a3_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ee308ba8d8c08f591b915b2b8ea0f696d6cc37a9a1869ab8ad02f1a86bf8c01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee308ba8d8c08f591b915b2b8ea0f696d6cc37a9a1869ab8ad02f1a86bf8c01e->enter($__internal_ee308ba8d8c08f591b915b2b8ea0f696d6cc37a9a1869ab8ad02f1a86bf8c01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_91d65492758ff240075ce6dfc822e5fcc139767ad0da3d6d50609e39ac937dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d65492758ff240075ce6dfc822e5fcc139767ad0da3d6d50609e39ac937dde->enter($__internal_91d65492758ff240075ce6dfc822e5fcc139767ad0da3d6d50609e39ac937dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_91d65492758ff240075ce6dfc822e5fcc139767ad0da3d6d50609e39ac937dde->leave($__internal_91d65492758ff240075ce6dfc822e5fcc139767ad0da3d6d50609e39ac937dde_prof);

        
        $__internal_ee308ba8d8c08f591b915b2b8ea0f696d6cc37a9a1869ab8ad02f1a86bf8c01e->leave($__internal_ee308ba8d8c08f591b915b2b8ea0f696d6cc37a9a1869ab8ad02f1a86bf8c01e_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2e64d8f3bb4cd7f08d4b596a005841f2027377b7222749a226128252cda32f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e64d8f3bb4cd7f08d4b596a005841f2027377b7222749a226128252cda32f8b->enter($__internal_2e64d8f3bb4cd7f08d4b596a005841f2027377b7222749a226128252cda32f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ee67b513154d886c5e7ff9f77ab102ed1493269861446fad533943506748c44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee67b513154d886c5e7ff9f77ab102ed1493269861446fad533943506748c44c->enter($__internal_ee67b513154d886c5e7ff9f77ab102ed1493269861446fad533943506748c44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_ee67b513154d886c5e7ff9f77ab102ed1493269861446fad533943506748c44c->leave($__internal_ee67b513154d886c5e7ff9f77ab102ed1493269861446fad533943506748c44c_prof);

        
        $__internal_2e64d8f3bb4cd7f08d4b596a005841f2027377b7222749a226128252cda32f8b->leave($__internal_2e64d8f3bb4cd7f08d4b596a005841f2027377b7222749a226128252cda32f8b_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_cefb7a6719c27116ab5906ac70632f631e74e16257a32c12c8421fe92b2696f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefb7a6719c27116ab5906ac70632f631e74e16257a32c12c8421fe92b2696f6->enter($__internal_cefb7a6719c27116ab5906ac70632f631e74e16257a32c12c8421fe92b2696f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f5aa6e5f71b91d39842e940374612cedb46954f2bfc50055b79368e2de7e28c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5aa6e5f71b91d39842e940374612cedb46954f2bfc50055b79368e2de7e28c1->enter($__internal_f5aa6e5f71b91d39842e940374612cedb46954f2bfc50055b79368e2de7e28c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_f5aa6e5f71b91d39842e940374612cedb46954f2bfc50055b79368e2de7e28c1->leave($__internal_f5aa6e5f71b91d39842e940374612cedb46954f2bfc50055b79368e2de7e28c1_prof);

        
        $__internal_cefb7a6719c27116ab5906ac70632f631e74e16257a32c12c8421fe92b2696f6->leave($__internal_cefb7a6719c27116ab5906ac70632f631e74e16257a32c12c8421fe92b2696f6_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9ba62c5c0a1f482faead75a6d6648dc41598a90e7333f0343bc3464548943f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba62c5c0a1f482faead75a6d6648dc41598a90e7333f0343bc3464548943f98->enter($__internal_9ba62c5c0a1f482faead75a6d6648dc41598a90e7333f0343bc3464548943f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_5cfe16cdb1ec9ea8dc51b3c4f346125263b1421fb5c1430219ed733546dba1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfe16cdb1ec9ea8dc51b3c4f346125263b1421fb5c1430219ed733546dba1a2->enter($__internal_5cfe16cdb1ec9ea8dc51b3c4f346125263b1421fb5c1430219ed733546dba1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_5cfe16cdb1ec9ea8dc51b3c4f346125263b1421fb5c1430219ed733546dba1a2->leave($__internal_5cfe16cdb1ec9ea8dc51b3c4f346125263b1421fb5c1430219ed733546dba1a2_prof);

        
        $__internal_9ba62c5c0a1f482faead75a6d6648dc41598a90e7333f0343bc3464548943f98->leave($__internal_9ba62c5c0a1f482faead75a6d6648dc41598a90e7333f0343bc3464548943f98_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e2f3a49239c177c7664f5fa403d81236002018bbd11808f1f284e32e73dbffb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f3a49239c177c7664f5fa403d81236002018bbd11808f1f284e32e73dbffb1->enter($__internal_e2f3a49239c177c7664f5fa403d81236002018bbd11808f1f284e32e73dbffb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_73b9bbee27ead131354fe70550864b47a5a29acde59352abb4f3f23e5b4fb81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b9bbee27ead131354fe70550864b47a5a29acde59352abb4f3f23e5b4fb81c->enter($__internal_73b9bbee27ead131354fe70550864b47a5a29acde59352abb4f3f23e5b4fb81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_73b9bbee27ead131354fe70550864b47a5a29acde59352abb4f3f23e5b4fb81c->leave($__internal_73b9bbee27ead131354fe70550864b47a5a29acde59352abb4f3f23e5b4fb81c_prof);

        
        $__internal_e2f3a49239c177c7664f5fa403d81236002018bbd11808f1f284e32e73dbffb1->leave($__internal_e2f3a49239c177c7664f5fa403d81236002018bbd11808f1f284e32e73dbffb1_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3975b038d4db85614686c74e5a75e40e0ea14d3dbf24cbbf3c240e1890b38397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3975b038d4db85614686c74e5a75e40e0ea14d3dbf24cbbf3c240e1890b38397->enter($__internal_3975b038d4db85614686c74e5a75e40e0ea14d3dbf24cbbf3c240e1890b38397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1ebc7b0003152f62271bb05892c1a14626f130020bd8b166e50a134c9eeb19d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebc7b0003152f62271bb05892c1a14626f130020bd8b166e50a134c9eeb19d0->enter($__internal_1ebc7b0003152f62271bb05892c1a14626f130020bd8b166e50a134c9eeb19d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1ebc7b0003152f62271bb05892c1a14626f130020bd8b166e50a134c9eeb19d0->leave($__internal_1ebc7b0003152f62271bb05892c1a14626f130020bd8b166e50a134c9eeb19d0_prof);

        
        $__internal_3975b038d4db85614686c74e5a75e40e0ea14d3dbf24cbbf3c240e1890b38397->leave($__internal_3975b038d4db85614686c74e5a75e40e0ea14d3dbf24cbbf3c240e1890b38397_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7d0e2938c3369f7aca587b201c07685526ce56cf38c8478ba355e3cd6ed3c72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0e2938c3369f7aca587b201c07685526ce56cf38c8478ba355e3cd6ed3c72f->enter($__internal_7d0e2938c3369f7aca587b201c07685526ce56cf38c8478ba355e3cd6ed3c72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_22b0103f385ede4802a5d872540997c590beaec6f893fd981192bc77eccf3455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b0103f385ede4802a5d872540997c590beaec6f893fd981192bc77eccf3455->enter($__internal_22b0103f385ede4802a5d872540997c590beaec6f893fd981192bc77eccf3455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
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
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_22b0103f385ede4802a5d872540997c590beaec6f893fd981192bc77eccf3455->leave($__internal_22b0103f385ede4802a5d872540997c590beaec6f893fd981192bc77eccf3455_prof);

        
        $__internal_7d0e2938c3369f7aca587b201c07685526ce56cf38c8478ba355e3cd6ed3c72f->leave($__internal_7d0e2938c3369f7aca587b201c07685526ce56cf38c8478ba355e3cd6ed3c72f_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a3766e202a79169d6c24d5535c01f2e961c290ec5c7d24652177f08a492d761f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3766e202a79169d6c24d5535c01f2e961c290ec5c7d24652177f08a492d761f->enter($__internal_a3766e202a79169d6c24d5535c01f2e961c290ec5c7d24652177f08a492d761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_10ebef918dc14550fe66f101c8cf4f11a176b0ebbdad455b10ff121261ab47b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ebef918dc14550fe66f101c8cf4f11a176b0ebbdad455b10ff121261ab47b9->enter($__internal_10ebef918dc14550fe66f101c8cf4f11a176b0ebbdad455b10ff121261ab47b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_10ebef918dc14550fe66f101c8cf4f11a176b0ebbdad455b10ff121261ab47b9->leave($__internal_10ebef918dc14550fe66f101c8cf4f11a176b0ebbdad455b10ff121261ab47b9_prof);

        
        $__internal_a3766e202a79169d6c24d5535c01f2e961c290ec5c7d24652177f08a492d761f->leave($__internal_a3766e202a79169d6c24d5535c01f2e961c290ec5c7d24652177f08a492d761f_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8b219a1a4d1f0c8a8d2cf0d722b8fd5514b936e8a2dc5d4e43b18eea6395f934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b219a1a4d1f0c8a8d2cf0d722b8fd5514b936e8a2dc5d4e43b18eea6395f934->enter($__internal_8b219a1a4d1f0c8a8d2cf0d722b8fd5514b936e8a2dc5d4e43b18eea6395f934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_69b8636f38705017add9af1b911d048a171f5c5f75e52ae4c357a7ffcfb1a630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b8636f38705017add9af1b911d048a171f5c5f75e52ae4c357a7ffcfb1a630->enter($__internal_69b8636f38705017add9af1b911d048a171f5c5f75e52ae4c357a7ffcfb1a630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_69b8636f38705017add9af1b911d048a171f5c5f75e52ae4c357a7ffcfb1a630->leave($__internal_69b8636f38705017add9af1b911d048a171f5c5f75e52ae4c357a7ffcfb1a630_prof);

        
        $__internal_8b219a1a4d1f0c8a8d2cf0d722b8fd5514b936e8a2dc5d4e43b18eea6395f934->leave($__internal_8b219a1a4d1f0c8a8d2cf0d722b8fd5514b936e8a2dc5d4e43b18eea6395f934_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5038088c89490d181aeccf7fc14ecbe3b7ab69c324a6bb084374b3283e746da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5038088c89490d181aeccf7fc14ecbe3b7ab69c324a6bb084374b3283e746da0->enter($__internal_5038088c89490d181aeccf7fc14ecbe3b7ab69c324a6bb084374b3283e746da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_71d52656e572033171db41296c9bcb50a9e7cc689c3def027cf49ff55b0cf795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d52656e572033171db41296c9bcb50a9e7cc689c3def027cf49ff55b0cf795->enter($__internal_71d52656e572033171db41296c9bcb50a9e7cc689c3def027cf49ff55b0cf795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_71d52656e572033171db41296c9bcb50a9e7cc689c3def027cf49ff55b0cf795->leave($__internal_71d52656e572033171db41296c9bcb50a9e7cc689c3def027cf49ff55b0cf795_prof);

        
        $__internal_5038088c89490d181aeccf7fc14ecbe3b7ab69c324a6bb084374b3283e746da0->leave($__internal_5038088c89490d181aeccf7fc14ecbe3b7ab69c324a6bb084374b3283e746da0_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ce7e48fc4a71cdbed46f86ab9981b0fd629f8dd8cc8f859cc0799eff358bd915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7e48fc4a71cdbed46f86ab9981b0fd629f8dd8cc8f859cc0799eff358bd915->enter($__internal_ce7e48fc4a71cdbed46f86ab9981b0fd629f8dd8cc8f859cc0799eff358bd915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d5e3d7145fb782dae80b668e4ef56624f14d078c3f926a30944f730a444d9594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e3d7145fb782dae80b668e4ef56624f14d078c3f926a30944f730a444d9594->enter($__internal_d5e3d7145fb782dae80b668e4ef56624f14d078c3f926a30944f730a444d9594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d5e3d7145fb782dae80b668e4ef56624f14d078c3f926a30944f730a444d9594->leave($__internal_d5e3d7145fb782dae80b668e4ef56624f14d078c3f926a30944f730a444d9594_prof);

        
        $__internal_ce7e48fc4a71cdbed46f86ab9981b0fd629f8dd8cc8f859cc0799eff358bd915->leave($__internal_ce7e48fc4a71cdbed46f86ab9981b0fd629f8dd8cc8f859cc0799eff358bd915_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7524d176732f7843a46e76640783648d4b286bbe4e49e80eb78dc9eef3ea835d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7524d176732f7843a46e76640783648d4b286bbe4e49e80eb78dc9eef3ea835d->enter($__internal_7524d176732f7843a46e76640783648d4b286bbe4e49e80eb78dc9eef3ea835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_26cbe5c90736168fc7f6f7b56129b3371e2f76a67cbaf22f991bfa24a31c9f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cbe5c90736168fc7f6f7b56129b3371e2f76a67cbaf22f991bfa24a31c9f94->enter($__internal_26cbe5c90736168fc7f6f7b56129b3371e2f76a67cbaf22f991bfa24a31c9f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_26cbe5c90736168fc7f6f7b56129b3371e2f76a67cbaf22f991bfa24a31c9f94->leave($__internal_26cbe5c90736168fc7f6f7b56129b3371e2f76a67cbaf22f991bfa24a31c9f94_prof);

        
        $__internal_7524d176732f7843a46e76640783648d4b286bbe4e49e80eb78dc9eef3ea835d->leave($__internal_7524d176732f7843a46e76640783648d4b286bbe4e49e80eb78dc9eef3ea835d_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_323e142c4f64b42ab882a45790d02d6ab3e85b0b9fbde32d9d653421d223d9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323e142c4f64b42ab882a45790d02d6ab3e85b0b9fbde32d9d653421d223d9b7->enter($__internal_323e142c4f64b42ab882a45790d02d6ab3e85b0b9fbde32d9d653421d223d9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_25e84013f0e42675239e23a4984c6f2cc53c2bd7701556333fc1a19d1385b203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e84013f0e42675239e23a4984c6f2cc53c2bd7701556333fc1a19d1385b203->enter($__internal_25e84013f0e42675239e23a4984c6f2cc53c2bd7701556333fc1a19d1385b203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_25e84013f0e42675239e23a4984c6f2cc53c2bd7701556333fc1a19d1385b203->leave($__internal_25e84013f0e42675239e23a4984c6f2cc53c2bd7701556333fc1a19d1385b203_prof);

        
        $__internal_323e142c4f64b42ab882a45790d02d6ab3e85b0b9fbde32d9d653421d223d9b7->leave($__internal_323e142c4f64b42ab882a45790d02d6ab3e85b0b9fbde32d9d653421d223d9b7_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e593f8479e9c22c1bafd31602a94865695af6ca46af04810b48e9eda3ca9c764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e593f8479e9c22c1bafd31602a94865695af6ca46af04810b48e9eda3ca9c764->enter($__internal_e593f8479e9c22c1bafd31602a94865695af6ca46af04810b48e9eda3ca9c764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_39b12ac319979b3d5476bbf97974fbf1b54e8547c0503f784c11fd0ff561a219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b12ac319979b3d5476bbf97974fbf1b54e8547c0503f784c11fd0ff561a219->enter($__internal_39b12ac319979b3d5476bbf97974fbf1b54e8547c0503f784c11fd0ff561a219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_39b12ac319979b3d5476bbf97974fbf1b54e8547c0503f784c11fd0ff561a219->leave($__internal_39b12ac319979b3d5476bbf97974fbf1b54e8547c0503f784c11fd0ff561a219_prof);

        
        $__internal_e593f8479e9c22c1bafd31602a94865695af6ca46af04810b48e9eda3ca9c764->leave($__internal_e593f8479e9c22c1bafd31602a94865695af6ca46af04810b48e9eda3ca9c764_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_59f71d83170f440f63a53e51ff7d45294fac7974cb854df85afc4c2574eaced7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f71d83170f440f63a53e51ff7d45294fac7974cb854df85afc4c2574eaced7->enter($__internal_59f71d83170f440f63a53e51ff7d45294fac7974cb854df85afc4c2574eaced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_db6928609de93aa6fc9f20ca12c06cdfb9a92bcf29afa19b8867a7fda3421486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6928609de93aa6fc9f20ca12c06cdfb9a92bcf29afa19b8867a7fda3421486->enter($__internal_db6928609de93aa6fc9f20ca12c06cdfb9a92bcf29afa19b8867a7fda3421486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_db6928609de93aa6fc9f20ca12c06cdfb9a92bcf29afa19b8867a7fda3421486->leave($__internal_db6928609de93aa6fc9f20ca12c06cdfb9a92bcf29afa19b8867a7fda3421486_prof);

        
        $__internal_59f71d83170f440f63a53e51ff7d45294fac7974cb854df85afc4c2574eaced7->leave($__internal_59f71d83170f440f63a53e51ff7d45294fac7974cb854df85afc4c2574eaced7_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_16a49c142e89b6fe65474e257b3e46a85fa25457331eddf6cd46e985db5f39bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a49c142e89b6fe65474e257b3e46a85fa25457331eddf6cd46e985db5f39bf->enter($__internal_16a49c142e89b6fe65474e257b3e46a85fa25457331eddf6cd46e985db5f39bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0ef2f0738c1431f3d17099d1d43e6ee349a92a944b4add2bdb4046e83fd030e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef2f0738c1431f3d17099d1d43e6ee349a92a944b4add2bdb4046e83fd030e9->enter($__internal_0ef2f0738c1431f3d17099d1d43e6ee349a92a944b4add2bdb4046e83fd030e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_0ef2f0738c1431f3d17099d1d43e6ee349a92a944b4add2bdb4046e83fd030e9->leave($__internal_0ef2f0738c1431f3d17099d1d43e6ee349a92a944b4add2bdb4046e83fd030e9_prof);

        
        $__internal_16a49c142e89b6fe65474e257b3e46a85fa25457331eddf6cd46e985db5f39bf->leave($__internal_16a49c142e89b6fe65474e257b3e46a85fa25457331eddf6cd46e985db5f39bf_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9245b3f27a635ac3f877fff7ad40c5ccd54ed4b034eeb0077b80c98802c74cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9245b3f27a635ac3f877fff7ad40c5ccd54ed4b034eeb0077b80c98802c74cb3->enter($__internal_9245b3f27a635ac3f877fff7ad40c5ccd54ed4b034eeb0077b80c98802c74cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_aadb2af7ccc06d116a3d4672d59a3f23ed96fef422a583d13fce82eff9aeb812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadb2af7ccc06d116a3d4672d59a3f23ed96fef422a583d13fce82eff9aeb812->enter($__internal_aadb2af7ccc06d116a3d4672d59a3f23ed96fef422a583d13fce82eff9aeb812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aadb2af7ccc06d116a3d4672d59a3f23ed96fef422a583d13fce82eff9aeb812->leave($__internal_aadb2af7ccc06d116a3d4672d59a3f23ed96fef422a583d13fce82eff9aeb812_prof);

        
        $__internal_9245b3f27a635ac3f877fff7ad40c5ccd54ed4b034eeb0077b80c98802c74cb3->leave($__internal_9245b3f27a635ac3f877fff7ad40c5ccd54ed4b034eeb0077b80c98802c74cb3_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d9ef61e93a597d625f041a445c965740e09b06c60f5a15f39af42cdb7bfb775c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ef61e93a597d625f041a445c965740e09b06c60f5a15f39af42cdb7bfb775c->enter($__internal_d9ef61e93a597d625f041a445c965740e09b06c60f5a15f39af42cdb7bfb775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f7b6fad58c05f0774f17af0e4bb5cb1c6bb8e788822e1783f4fc84b355a06522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b6fad58c05f0774f17af0e4bb5cb1c6bb8e788822e1783f4fc84b355a06522->enter($__internal_f7b6fad58c05f0774f17af0e4bb5cb1c6bb8e788822e1783f4fc84b355a06522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7b6fad58c05f0774f17af0e4bb5cb1c6bb8e788822e1783f4fc84b355a06522->leave($__internal_f7b6fad58c05f0774f17af0e4bb5cb1c6bb8e788822e1783f4fc84b355a06522_prof);

        
        $__internal_d9ef61e93a597d625f041a445c965740e09b06c60f5a15f39af42cdb7bfb775c->leave($__internal_d9ef61e93a597d625f041a445c965740e09b06c60f5a15f39af42cdb7bfb775c_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_f70e298af0e69944df6c6887aba1d0e1f6996e2a3e62bd22322b7f5580cf92cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70e298af0e69944df6c6887aba1d0e1f6996e2a3e62bd22322b7f5580cf92cf->enter($__internal_f70e298af0e69944df6c6887aba1d0e1f6996e2a3e62bd22322b7f5580cf92cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_fd59e1206d7a5d900e30a054aa43432e1af157ae9921e3914b8b963b5354d055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd59e1206d7a5d900e30a054aa43432e1af157ae9921e3914b8b963b5354d055->enter($__internal_fd59e1206d7a5d900e30a054aa43432e1af157ae9921e3914b8b963b5354d055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fd59e1206d7a5d900e30a054aa43432e1af157ae9921e3914b8b963b5354d055->leave($__internal_fd59e1206d7a5d900e30a054aa43432e1af157ae9921e3914b8b963b5354d055_prof);

        
        $__internal_f70e298af0e69944df6c6887aba1d0e1f6996e2a3e62bd22322b7f5580cf92cf->leave($__internal_f70e298af0e69944df6c6887aba1d0e1f6996e2a3e62bd22322b7f5580cf92cf_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9b67f4fd80935a21793a47163a8a46372bb97cbe7cd714c5b39114d40bb8eaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b67f4fd80935a21793a47163a8a46372bb97cbe7cd714c5b39114d40bb8eaac->enter($__internal_9b67f4fd80935a21793a47163a8a46372bb97cbe7cd714c5b39114d40bb8eaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_27b15ec29a9cede18b0e55194b40e64317da3d8bd57b4a8737314587b73aee1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b15ec29a9cede18b0e55194b40e64317da3d8bd57b4a8737314587b73aee1b->enter($__internal_27b15ec29a9cede18b0e55194b40e64317da3d8bd57b4a8737314587b73aee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_27b15ec29a9cede18b0e55194b40e64317da3d8bd57b4a8737314587b73aee1b->leave($__internal_27b15ec29a9cede18b0e55194b40e64317da3d8bd57b4a8737314587b73aee1b_prof);

        
        $__internal_9b67f4fd80935a21793a47163a8a46372bb97cbe7cd714c5b39114d40bb8eaac->leave($__internal_9b67f4fd80935a21793a47163a8a46372bb97cbe7cd714c5b39114d40bb8eaac_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_68851531510bfe4b1c7377e0cb417a04a73561fe4baf9d53b87602e5f70b341c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68851531510bfe4b1c7377e0cb417a04a73561fe4baf9d53b87602e5f70b341c->enter($__internal_68851531510bfe4b1c7377e0cb417a04a73561fe4baf9d53b87602e5f70b341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_68ca8b965ab65bb3d8cc7dbb47d817b5680ae3685bb040dd22b5314d58ca70cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ca8b965ab65bb3d8cc7dbb47d817b5680ae3685bb040dd22b5314d58ca70cd->enter($__internal_68ca8b965ab65bb3d8cc7dbb47d817b5680ae3685bb040dd22b5314d58ca70cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_68ca8b965ab65bb3d8cc7dbb47d817b5680ae3685bb040dd22b5314d58ca70cd->leave($__internal_68ca8b965ab65bb3d8cc7dbb47d817b5680ae3685bb040dd22b5314d58ca70cd_prof);

        
        $__internal_68851531510bfe4b1c7377e0cb417a04a73561fe4baf9d53b87602e5f70b341c->leave($__internal_68851531510bfe4b1c7377e0cb417a04a73561fe4baf9d53b87602e5f70b341c_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3fdd4d407b0b4053a4f25bed70e041f401001855d901fc55949f450d03d14f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdd4d407b0b4053a4f25bed70e041f401001855d901fc55949f450d03d14f22->enter($__internal_3fdd4d407b0b4053a4f25bed70e041f401001855d901fc55949f450d03d14f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bdd0aca049a0a8b250d35a495dbe38215449a3d9f36fdcb6eaf06c3c52085f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd0aca049a0a8b250d35a495dbe38215449a3d9f36fdcb6eaf06c3c52085f8d->enter($__internal_bdd0aca049a0a8b250d35a495dbe38215449a3d9f36fdcb6eaf06c3c52085f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_bdd0aca049a0a8b250d35a495dbe38215449a3d9f36fdcb6eaf06c3c52085f8d->leave($__internal_bdd0aca049a0a8b250d35a495dbe38215449a3d9f36fdcb6eaf06c3c52085f8d_prof);

        
        $__internal_3fdd4d407b0b4053a4f25bed70e041f401001855d901fc55949f450d03d14f22->leave($__internal_3fdd4d407b0b4053a4f25bed70e041f401001855d901fc55949f450d03d14f22_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_eb4ed28136f73dc2a6a6db6faceb5bcc8ec8080fd29856f60075fdfe9aab7cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4ed28136f73dc2a6a6db6faceb5bcc8ec8080fd29856f60075fdfe9aab7cec->enter($__internal_eb4ed28136f73dc2a6a6db6faceb5bcc8ec8080fd29856f60075fdfe9aab7cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e8bea291ddb0e3075332723cb3c6478797fc7efdc51b345798eafe157adb89f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bea291ddb0e3075332723cb3c6478797fc7efdc51b345798eafe157adb89f7->enter($__internal_e8bea291ddb0e3075332723cb3c6478797fc7efdc51b345798eafe157adb89f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_e8bea291ddb0e3075332723cb3c6478797fc7efdc51b345798eafe157adb89f7->leave($__internal_e8bea291ddb0e3075332723cb3c6478797fc7efdc51b345798eafe157adb89f7_prof);

        
        $__internal_eb4ed28136f73dc2a6a6db6faceb5bcc8ec8080fd29856f60075fdfe9aab7cec->leave($__internal_eb4ed28136f73dc2a6a6db6faceb5bcc8ec8080fd29856f60075fdfe9aab7cec_prof);

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
", "bootstrap_3_layout.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
