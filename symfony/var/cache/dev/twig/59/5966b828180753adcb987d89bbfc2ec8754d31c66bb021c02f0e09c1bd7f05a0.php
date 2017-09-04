<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_1309f886eb8e1d5951c74b002e2394912671c247a438945cef43771a17dc49c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeecc3a95225c905ef9d2c8c73bff57508777d432492bc6ab337bd85dc8fb281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeecc3a95225c905ef9d2c8c73bff57508777d432492bc6ab337bd85dc8fb281->enter($__internal_aeecc3a95225c905ef9d2c8c73bff57508777d432492bc6ab337bd85dc8fb281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_abdc548da8d111d775eeb9214486ba31d9dab7042bc961df301565b4ca46d131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdc548da8d111d775eeb9214486ba31d9dab7042bc961df301565b4ca46d131->enter($__internal_abdc548da8d111d775eeb9214486ba31d9dab7042bc961df301565b4ca46d131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_aeecc3a95225c905ef9d2c8c73bff57508777d432492bc6ab337bd85dc8fb281->leave($__internal_aeecc3a95225c905ef9d2c8c73bff57508777d432492bc6ab337bd85dc8fb281_prof);

        
        $__internal_abdc548da8d111d775eeb9214486ba31d9dab7042bc961df301565b4ca46d131->leave($__internal_abdc548da8d111d775eeb9214486ba31d9dab7042bc961df301565b4ca46d131_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_string.html.twig");
    }
}
