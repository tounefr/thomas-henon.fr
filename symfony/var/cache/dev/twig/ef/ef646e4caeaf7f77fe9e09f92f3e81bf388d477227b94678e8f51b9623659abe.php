<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7b15067cfec8e9e42f3849353a6a95ada9274d4feb61b228e31563dea2980fc0 extends Twig_Template
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
        $__internal_fa3d954dd82f30a3a7196403718e88e381b392684d3b89ac248f004fe3eb271d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3d954dd82f30a3a7196403718e88e381b392684d3b89ac248f004fe3eb271d->enter($__internal_fa3d954dd82f30a3a7196403718e88e381b392684d3b89ac248f004fe3eb271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b37ec3239f1e4e30b8697de0d11b692505264627c0d1fe5518d735342f5d4cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37ec3239f1e4e30b8697de0d11b692505264627c0d1fe5518d735342f5d4cbc->enter($__internal_b37ec3239f1e4e30b8697de0d11b692505264627c0d1fe5518d735342f5d4cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3d954dd82f30a3a7196403718e88e381b392684d3b89ac248f004fe3eb271d->leave($__internal_fa3d954dd82f30a3a7196403718e88e381b392684d3b89ac248f004fe3eb271d_prof);

        
        $__internal_b37ec3239f1e4e30b8697de0d11b692505264627c0d1fe5518d735342f5d4cbc->leave($__internal_b37ec3239f1e4e30b8697de0d11b692505264627c0d1fe5518d735342f5d4cbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8e2d4f9b26ba36ba544dc02e4739ce4ad5c2581ddd55ab6a890ae6d8163c737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e2d4f9b26ba36ba544dc02e4739ce4ad5c2581ddd55ab6a890ae6d8163c737->enter($__internal_e8e2d4f9b26ba36ba544dc02e4739ce4ad5c2581ddd55ab6a890ae6d8163c737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc23bfdd239fb3434e7b26d2799666f94ec32857dbd3eeb894f887d00e2db115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc23bfdd239fb3434e7b26d2799666f94ec32857dbd3eeb894f887d00e2db115->enter($__internal_fc23bfdd239fb3434e7b26d2799666f94ec32857dbd3eeb894f887d00e2db115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fc23bfdd239fb3434e7b26d2799666f94ec32857dbd3eeb894f887d00e2db115->leave($__internal_fc23bfdd239fb3434e7b26d2799666f94ec32857dbd3eeb894f887d00e2db115_prof);

        
        $__internal_e8e2d4f9b26ba36ba544dc02e4739ce4ad5c2581ddd55ab6a890ae6d8163c737->leave($__internal_e8e2d4f9b26ba36ba544dc02e4739ce4ad5c2581ddd55ab6a890ae6d8163c737_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e79c4cf63dd43e965fdb49f4c7fef476f5259a8101f91ef3eef6158e4a5960e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79c4cf63dd43e965fdb49f4c7fef476f5259a8101f91ef3eef6158e4a5960e2->enter($__internal_e79c4cf63dd43e965fdb49f4c7fef476f5259a8101f91ef3eef6158e4a5960e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c55bae59b847c9e73ac620278920c23b34813953f0b5b6ed472c335510a17570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55bae59b847c9e73ac620278920c23b34813953f0b5b6ed472c335510a17570->enter($__internal_c55bae59b847c9e73ac620278920c23b34813953f0b5b6ed472c335510a17570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c55bae59b847c9e73ac620278920c23b34813953f0b5b6ed472c335510a17570->leave($__internal_c55bae59b847c9e73ac620278920c23b34813953f0b5b6ed472c335510a17570_prof);

        
        $__internal_e79c4cf63dd43e965fdb49f4c7fef476f5259a8101f91ef3eef6158e4a5960e2->leave($__internal_e79c4cf63dd43e965fdb49f4c7fef476f5259a8101f91ef3eef6158e4a5960e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6630315c0ee825a75389ba0feffa59baf58d240b56529a7f5b535bb1cb7b6889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6630315c0ee825a75389ba0feffa59baf58d240b56529a7f5b535bb1cb7b6889->enter($__internal_6630315c0ee825a75389ba0feffa59baf58d240b56529a7f5b535bb1cb7b6889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4478d090a1d758748825d76c99be603180cb51e8cdb12b77b45cea4a1f729e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4478d090a1d758748825d76c99be603180cb51e8cdb12b77b45cea4a1f729e1->enter($__internal_b4478d090a1d758748825d76c99be603180cb51e8cdb12b77b45cea4a1f729e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b4478d090a1d758748825d76c99be603180cb51e8cdb12b77b45cea4a1f729e1->leave($__internal_b4478d090a1d758748825d76c99be603180cb51e8cdb12b77b45cea4a1f729e1_prof);

        
        $__internal_6630315c0ee825a75389ba0feffa59baf58d240b56529a7f5b535bb1cb7b6889->leave($__internal_6630315c0ee825a75389ba0feffa59baf58d240b56529a7f5b535bb1cb7b6889_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
