<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f76816dad9d33a705a69411a6eb6756fe18429a3c4fd218c3e2d84a7f40163e extends Twig_Template
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
        $__internal_7c2f44c6a17ea2c235c3de7e1920bf78f39ddc848370191e6deeafc053660b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2f44c6a17ea2c235c3de7e1920bf78f39ddc848370191e6deeafc053660b9c->enter($__internal_7c2f44c6a17ea2c235c3de7e1920bf78f39ddc848370191e6deeafc053660b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3c07cbbd74804bd8c6db094ba06ff04b26fd4bcb01d8dd53855621dd826f94ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c07cbbd74804bd8c6db094ba06ff04b26fd4bcb01d8dd53855621dd826f94ae->enter($__internal_3c07cbbd74804bd8c6db094ba06ff04b26fd4bcb01d8dd53855621dd826f94ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2f44c6a17ea2c235c3de7e1920bf78f39ddc848370191e6deeafc053660b9c->leave($__internal_7c2f44c6a17ea2c235c3de7e1920bf78f39ddc848370191e6deeafc053660b9c_prof);

        
        $__internal_3c07cbbd74804bd8c6db094ba06ff04b26fd4bcb01d8dd53855621dd826f94ae->leave($__internal_3c07cbbd74804bd8c6db094ba06ff04b26fd4bcb01d8dd53855621dd826f94ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f9fd004b358f342db8689a301605e582c165fc14fc60872d40bbc46c368a49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9fd004b358f342db8689a301605e582c165fc14fc60872d40bbc46c368a49e->enter($__internal_6f9fd004b358f342db8689a301605e582c165fc14fc60872d40bbc46c368a49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_be9e4e0a1de7e824a250ed8f708d8b80c0e53d2eb944a99b9252d17295861d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9e4e0a1de7e824a250ed8f708d8b80c0e53d2eb944a99b9252d17295861d03->enter($__internal_be9e4e0a1de7e824a250ed8f708d8b80c0e53d2eb944a99b9252d17295861d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be9e4e0a1de7e824a250ed8f708d8b80c0e53d2eb944a99b9252d17295861d03->leave($__internal_be9e4e0a1de7e824a250ed8f708d8b80c0e53d2eb944a99b9252d17295861d03_prof);

        
        $__internal_6f9fd004b358f342db8689a301605e582c165fc14fc60872d40bbc46c368a49e->leave($__internal_6f9fd004b358f342db8689a301605e582c165fc14fc60872d40bbc46c368a49e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b6c83449708172ead234bd6fbff7701925925bfd5533bf9d8142d0d13e3c996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6c83449708172ead234bd6fbff7701925925bfd5533bf9d8142d0d13e3c996->enter($__internal_6b6c83449708172ead234bd6fbff7701925925bfd5533bf9d8142d0d13e3c996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3c6bc287a29c7e8bd5e483bb94308d2236977a2b5e7c17595c896b9cb4832e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c6bc287a29c7e8bd5e483bb94308d2236977a2b5e7c17595c896b9cb4832e4->enter($__internal_a3c6bc287a29c7e8bd5e483bb94308d2236977a2b5e7c17595c896b9cb4832e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3c6bc287a29c7e8bd5e483bb94308d2236977a2b5e7c17595c896b9cb4832e4->leave($__internal_a3c6bc287a29c7e8bd5e483bb94308d2236977a2b5e7c17595c896b9cb4832e4_prof);

        
        $__internal_6b6c83449708172ead234bd6fbff7701925925bfd5533bf9d8142d0d13e3c996->leave($__internal_6b6c83449708172ead234bd6fbff7701925925bfd5533bf9d8142d0d13e3c996_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddb1e02f1cc455bb42fdc6d5e0c1bd0e8940bdeda6866aa170361e8f999c045d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb1e02f1cc455bb42fdc6d5e0c1bd0e8940bdeda6866aa170361e8f999c045d->enter($__internal_ddb1e02f1cc455bb42fdc6d5e0c1bd0e8940bdeda6866aa170361e8f999c045d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9abfdab8d3b994af2d603b81b02a6eb6956307a456f1d634090830f15366414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9abfdab8d3b994af2d603b81b02a6eb6956307a456f1d634090830f15366414->enter($__internal_c9abfdab8d3b994af2d603b81b02a6eb6956307a456f1d634090830f15366414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9abfdab8d3b994af2d603b81b02a6eb6956307a456f1d634090830f15366414->leave($__internal_c9abfdab8d3b994af2d603b81b02a6eb6956307a456f1d634090830f15366414_prof);

        
        $__internal_ddb1e02f1cc455bb42fdc6d5e0c1bd0e8940bdeda6866aa170361e8f999c045d->leave($__internal_ddb1e02f1cc455bb42fdc6d5e0c1bd0e8940bdeda6866aa170361e8f999c045d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
