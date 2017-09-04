<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2d6fabb08b6536cbcb2a000491cf6aec69e9e08f3fcb8f2fa87c6b1324f2be9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c33ae1a52e933f2f2af062d42810201709ec298020684fbd0173d4c85f2b5822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33ae1a52e933f2f2af062d42810201709ec298020684fbd0173d4c85f2b5822->enter($__internal_c33ae1a52e933f2f2af062d42810201709ec298020684fbd0173d4c85f2b5822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3c6433c57c1e49129907b43d5739dd9724bb41a21a28c7914d4b4933197b1fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6433c57c1e49129907b43d5739dd9724bb41a21a28c7914d4b4933197b1fcd->enter($__internal_3c6433c57c1e49129907b43d5739dd9724bb41a21a28c7914d4b4933197b1fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33ae1a52e933f2f2af062d42810201709ec298020684fbd0173d4c85f2b5822->leave($__internal_c33ae1a52e933f2f2af062d42810201709ec298020684fbd0173d4c85f2b5822_prof);

        
        $__internal_3c6433c57c1e49129907b43d5739dd9724bb41a21a28c7914d4b4933197b1fcd->leave($__internal_3c6433c57c1e49129907b43d5739dd9724bb41a21a28c7914d4b4933197b1fcd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5684a4ae87648da48e73457bf79d1355df39ab3ba94f25873589ec8ac20e8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5684a4ae87648da48e73457bf79d1355df39ab3ba94f25873589ec8ac20e8c3->enter($__internal_a5684a4ae87648da48e73457bf79d1355df39ab3ba94f25873589ec8ac20e8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fee8b9eb291bdf2ea7d5c500bedc3e29da2c91fb99a29b59595b14f2d6599e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee8b9eb291bdf2ea7d5c500bedc3e29da2c91fb99a29b59595b14f2d6599e0f->enter($__internal_fee8b9eb291bdf2ea7d5c500bedc3e29da2c91fb99a29b59595b14f2d6599e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fee8b9eb291bdf2ea7d5c500bedc3e29da2c91fb99a29b59595b14f2d6599e0f->leave($__internal_fee8b9eb291bdf2ea7d5c500bedc3e29da2c91fb99a29b59595b14f2d6599e0f_prof);

        
        $__internal_a5684a4ae87648da48e73457bf79d1355df39ab3ba94f25873589ec8ac20e8c3->leave($__internal_a5684a4ae87648da48e73457bf79d1355df39ab3ba94f25873589ec8ac20e8c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
