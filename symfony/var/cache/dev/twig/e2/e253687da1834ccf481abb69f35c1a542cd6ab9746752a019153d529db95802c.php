<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_689864064c4287a65f5d13236af2dc24ef26fb48a154078d02a7fbeda0c42303 extends Twig_Template
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
        $__internal_25d94a7b1a8fc242a5dac2e9a774da42612a82e97f427fb3362f98d4513fdb0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d94a7b1a8fc242a5dac2e9a774da42612a82e97f427fb3362f98d4513fdb0b->enter($__internal_25d94a7b1a8fc242a5dac2e9a774da42612a82e97f427fb3362f98d4513fdb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_0172c46b487f920c8b18350e8dfa9bd68587db5c942c2eacd41a06ac07eee37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0172c46b487f920c8b18350e8dfa9bd68587db5c942c2eacd41a06ac07eee37f->enter($__internal_0172c46b487f920c8b18350e8dfa9bd68587db5c942c2eacd41a06ac07eee37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_25d94a7b1a8fc242a5dac2e9a774da42612a82e97f427fb3362f98d4513fdb0b->leave($__internal_25d94a7b1a8fc242a5dac2e9a774da42612a82e97f427fb3362f98d4513fdb0b_prof);

        
        $__internal_0172c46b487f920c8b18350e8dfa9bd68587db5c942c2eacd41a06ac07eee37f->leave($__internal_0172c46b487f920c8b18350e8dfa9bd68587db5c942c2eacd41a06ac07eee37f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_id.html.twig");
    }
}
