<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c70a184eb2d0568a3bf3d192f1ee6b3f5767c13cddd6aefe950ae8b915faa929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3996810282134650abf893b2964d79afbee0c86e3c971d11bd86237752a438ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3996810282134650abf893b2964d79afbee0c86e3c971d11bd86237752a438ff->enter($__internal_3996810282134650abf893b2964d79afbee0c86e3c971d11bd86237752a438ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4b64f1f73f085ce06dd8ad3396e4467406a57b4e0c755e8959dea3f5fa410414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b64f1f73f085ce06dd8ad3396e4467406a57b4e0c755e8959dea3f5fa410414->enter($__internal_4b64f1f73f085ce06dd8ad3396e4467406a57b4e0c755e8959dea3f5fa410414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3996810282134650abf893b2964d79afbee0c86e3c971d11bd86237752a438ff->leave($__internal_3996810282134650abf893b2964d79afbee0c86e3c971d11bd86237752a438ff_prof);

        
        $__internal_4b64f1f73f085ce06dd8ad3396e4467406a57b4e0c755e8959dea3f5fa410414->leave($__internal_4b64f1f73f085ce06dd8ad3396e4467406a57b4e0c755e8959dea3f5fa410414_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61d65466499116808fea413167a0d1a563688876e9f029d650865fac6e06e820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d65466499116808fea413167a0d1a563688876e9f029d650865fac6e06e820->enter($__internal_61d65466499116808fea413167a0d1a563688876e9f029d650865fac6e06e820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33af12c99c6cd310237e4f6d170e5c8b4418e268bc116af99539f80e9a7f6aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33af12c99c6cd310237e4f6d170e5c8b4418e268bc116af99539f80e9a7f6aa1->enter($__internal_33af12c99c6cd310237e4f6d170e5c8b4418e268bc116af99539f80e9a7f6aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33af12c99c6cd310237e4f6d170e5c8b4418e268bc116af99539f80e9a7f6aa1->leave($__internal_33af12c99c6cd310237e4f6d170e5c8b4418e268bc116af99539f80e9a7f6aa1_prof);

        
        $__internal_61d65466499116808fea413167a0d1a563688876e9f029d650865fac6e06e820->leave($__internal_61d65466499116808fea413167a0d1a563688876e9f029d650865fac6e06e820_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39beb29430b9f1726b83a6ba2063401483e32e043a071855c4f1af8a0e0fcdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39beb29430b9f1726b83a6ba2063401483e32e043a071855c4f1af8a0e0fcdd1->enter($__internal_39beb29430b9f1726b83a6ba2063401483e32e043a071855c4f1af8a0e0fcdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0cb90425dd439c9963fa45e3ab0397a0efafc85fde3ba3fc48d825ae4fb545c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb90425dd439c9963fa45e3ab0397a0efafc85fde3ba3fc48d825ae4fb545c4->enter($__internal_0cb90425dd439c9963fa45e3ab0397a0efafc85fde3ba3fc48d825ae4fb545c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cb90425dd439c9963fa45e3ab0397a0efafc85fde3ba3fc48d825ae4fb545c4->leave($__internal_0cb90425dd439c9963fa45e3ab0397a0efafc85fde3ba3fc48d825ae4fb545c4_prof);

        
        $__internal_39beb29430b9f1726b83a6ba2063401483e32e043a071855c4f1af8a0e0fcdd1->leave($__internal_39beb29430b9f1726b83a6ba2063401483e32e043a071855c4f1af8a0e0fcdd1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aeef91a4b17025ac17d466e0828a215d5c067e7b5bae6d449fb5ca9322559075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeef91a4b17025ac17d466e0828a215d5c067e7b5bae6d449fb5ca9322559075->enter($__internal_aeef91a4b17025ac17d466e0828a215d5c067e7b5bae6d449fb5ca9322559075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d6aed504bf6e11a8c4b370a4abdc7c09966674962a4144cd803c834f4c03085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6aed504bf6e11a8c4b370a4abdc7c09966674962a4144cd803c834f4c03085->enter($__internal_3d6aed504bf6e11a8c4b370a4abdc7c09966674962a4144cd803c834f4c03085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d6aed504bf6e11a8c4b370a4abdc7c09966674962a4144cd803c834f4c03085->leave($__internal_3d6aed504bf6e11a8c4b370a4abdc7c09966674962a4144cd803c834f4c03085_prof);

        
        $__internal_aeef91a4b17025ac17d466e0828a215d5c067e7b5bae6d449fb5ca9322559075->leave($__internal_aeef91a4b17025ac17d466e0828a215d5c067e7b5bae6d449fb5ca9322559075_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
