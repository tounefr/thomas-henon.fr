<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7c65b691dbfdc86eb272ea8a349b7548e60aa4672f0dcafd2966057ddeddfa87 extends Twig_Template
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
        $__internal_8a6015947f78eb878bbaad9a318698b16c3f9132b591bb6338705322dfb0da9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6015947f78eb878bbaad9a318698b16c3f9132b591bb6338705322dfb0da9d->enter($__internal_8a6015947f78eb878bbaad9a318698b16c3f9132b591bb6338705322dfb0da9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_86d0830b4a40dc605460bb57dc44121c2720ec93020257602ba4f115d4b0f014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d0830b4a40dc605460bb57dc44121c2720ec93020257602ba4f115d4b0f014->enter($__internal_86d0830b4a40dc605460bb57dc44121c2720ec93020257602ba4f115d4b0f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a6015947f78eb878bbaad9a318698b16c3f9132b591bb6338705322dfb0da9d->leave($__internal_8a6015947f78eb878bbaad9a318698b16c3f9132b591bb6338705322dfb0da9d_prof);

        
        $__internal_86d0830b4a40dc605460bb57dc44121c2720ec93020257602ba4f115d4b0f014->leave($__internal_86d0830b4a40dc605460bb57dc44121c2720ec93020257602ba4f115d4b0f014_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f05dac342a249d4d87b7a12d53297f0ac254d28a1fc0c61d0f39a13375c32df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05dac342a249d4d87b7a12d53297f0ac254d28a1fc0c61d0f39a13375c32df9->enter($__internal_f05dac342a249d4d87b7a12d53297f0ac254d28a1fc0c61d0f39a13375c32df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28b6b0b3f5eea53dee2e7446a6da5cf2d9ca63c8364b3c7a85471f79e56278ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b6b0b3f5eea53dee2e7446a6da5cf2d9ca63c8364b3c7a85471f79e56278ae->enter($__internal_28b6b0b3f5eea53dee2e7446a6da5cf2d9ca63c8364b3c7a85471f79e56278ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_28b6b0b3f5eea53dee2e7446a6da5cf2d9ca63c8364b3c7a85471f79e56278ae->leave($__internal_28b6b0b3f5eea53dee2e7446a6da5cf2d9ca63c8364b3c7a85471f79e56278ae_prof);

        
        $__internal_f05dac342a249d4d87b7a12d53297f0ac254d28a1fc0c61d0f39a13375c32df9->leave($__internal_f05dac342a249d4d87b7a12d53297f0ac254d28a1fc0c61d0f39a13375c32df9_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
