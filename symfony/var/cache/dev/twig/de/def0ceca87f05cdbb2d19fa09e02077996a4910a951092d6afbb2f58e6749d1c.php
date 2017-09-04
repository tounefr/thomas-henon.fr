<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_b1352ab8408a7fb9c3e09592fc4d753bc3fffa1bbe14b0e6f6933050760e2371 extends Twig_Template
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
        $__internal_a9184b27a3c156f3e6b416773dfedd5e63c8115d5a873a22ab403a329d2ea2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9184b27a3c156f3e6b416773dfedd5e63c8115d5a873a22ab403a329d2ea2b3->enter($__internal_a9184b27a3c156f3e6b416773dfedd5e63c8115d5a873a22ab403a329d2ea2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_837238ea887d42ab722f70a58ae85ca6e6aa7076907d7b8d96dbcd405765a09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837238ea887d42ab722f70a58ae85ca6e6aa7076907d7b8d96dbcd405765a09e->enter($__internal_837238ea887d42ab722f70a58ae85ca6e6aa7076907d7b8d96dbcd405765a09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a9184b27a3c156f3e6b416773dfedd5e63c8115d5a873a22ab403a329d2ea2b3->leave($__internal_a9184b27a3c156f3e6b416773dfedd5e63c8115d5a873a22ab403a329d2ea2b3_prof);

        
        $__internal_837238ea887d42ab722f70a58ae85ca6e6aa7076907d7b8d96dbcd405765a09e->leave($__internal_837238ea887d42ab722f70a58ae85ca6e6aa7076907d7b8d96dbcd405765a09e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}
