<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ef8f31f5b5a0e937257be602f9f6ffe45dc83875f6575188079702574fe930de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cf7df006a7cfad36ea4424ccc942a1826aa46b14fb5d0868f6d9acd969fe85f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7df006a7cfad36ea4424ccc942a1826aa46b14fb5d0868f6d9acd969fe85f1->enter($__internal_cf7df006a7cfad36ea4424ccc942a1826aa46b14fb5d0868f6d9acd969fe85f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7c41a9510aa5b40ce1c0d2f946a223209e0b8ea3929071a46189dd92af2c55d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c41a9510aa5b40ce1c0d2f946a223209e0b8ea3929071a46189dd92af2c55d2->enter($__internal_7c41a9510aa5b40ce1c0d2f946a223209e0b8ea3929071a46189dd92af2c55d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7df006a7cfad36ea4424ccc942a1826aa46b14fb5d0868f6d9acd969fe85f1->leave($__internal_cf7df006a7cfad36ea4424ccc942a1826aa46b14fb5d0868f6d9acd969fe85f1_prof);

        
        $__internal_7c41a9510aa5b40ce1c0d2f946a223209e0b8ea3929071a46189dd92af2c55d2->leave($__internal_7c41a9510aa5b40ce1c0d2f946a223209e0b8ea3929071a46189dd92af2c55d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_987232eca7f40962ba2a27b0f76babf8ccde5139fdd4eb6bd0b338d0d91b2e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987232eca7f40962ba2a27b0f76babf8ccde5139fdd4eb6bd0b338d0d91b2e6f->enter($__internal_987232eca7f40962ba2a27b0f76babf8ccde5139fdd4eb6bd0b338d0d91b2e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be5fbbac3dda9059d15bcb8f01f3319e755a6319af5d363f52c02c25383f5094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5fbbac3dda9059d15bcb8f01f3319e755a6319af5d363f52c02c25383f5094->enter($__internal_be5fbbac3dda9059d15bcb8f01f3319e755a6319af5d363f52c02c25383f5094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_be5fbbac3dda9059d15bcb8f01f3319e755a6319af5d363f52c02c25383f5094->leave($__internal_be5fbbac3dda9059d15bcb8f01f3319e755a6319af5d363f52c02c25383f5094_prof);

        
        $__internal_987232eca7f40962ba2a27b0f76babf8ccde5139fdd4eb6bd0b338d0d91b2e6f->leave($__internal_987232eca7f40962ba2a27b0f76babf8ccde5139fdd4eb6bd0b338d0d91b2e6f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ba8b10bcbd58eee8a26401ae6d0840502f97bb92b9401daa8df89b4eb2ee40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba8b10bcbd58eee8a26401ae6d0840502f97bb92b9401daa8df89b4eb2ee40a->enter($__internal_6ba8b10bcbd58eee8a26401ae6d0840502f97bb92b9401daa8df89b4eb2ee40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa8d2e7a657ab70156b184cf962d2ba3ad4261c0e30760c8404ce8f9320e695e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8d2e7a657ab70156b184cf962d2ba3ad4261c0e30760c8404ce8f9320e695e->enter($__internal_aa8d2e7a657ab70156b184cf962d2ba3ad4261c0e30760c8404ce8f9320e695e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aa8d2e7a657ab70156b184cf962d2ba3ad4261c0e30760c8404ce8f9320e695e->leave($__internal_aa8d2e7a657ab70156b184cf962d2ba3ad4261c0e30760c8404ce8f9320e695e_prof);

        
        $__internal_6ba8b10bcbd58eee8a26401ae6d0840502f97bb92b9401daa8df89b4eb2ee40a->leave($__internal_6ba8b10bcbd58eee8a26401ae6d0840502f97bb92b9401daa8df89b4eb2ee40a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70f8aea7ebafbc2b55220599ccda0d00a0f2cc5fd0febd086d819b0d4ed0bfae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f8aea7ebafbc2b55220599ccda0d00a0f2cc5fd0febd086d819b0d4ed0bfae->enter($__internal_70f8aea7ebafbc2b55220599ccda0d00a0f2cc5fd0febd086d819b0d4ed0bfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70ddb06ee1ada2812b101ddd9a02e769d9640da826ec2d1c99fc01503f456727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ddb06ee1ada2812b101ddd9a02e769d9640da826ec2d1c99fc01503f456727->enter($__internal_70ddb06ee1ada2812b101ddd9a02e769d9640da826ec2d1c99fc01503f456727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_70ddb06ee1ada2812b101ddd9a02e769d9640da826ec2d1c99fc01503f456727->leave($__internal_70ddb06ee1ada2812b101ddd9a02e769d9640da826ec2d1c99fc01503f456727_prof);

        
        $__internal_70f8aea7ebafbc2b55220599ccda0d00a0f2cc5fd0febd086d819b0d4ed0bfae->leave($__internal_70f8aea7ebafbc2b55220599ccda0d00a0f2cc5fd0febd086d819b0d4ed0bfae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
