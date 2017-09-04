<?php

/* emails/layout.html.twig */
class __TwigTemplate_d7a9cc71652a74f47ee249dce3795451554cc6252e3070a521d52d092c04ab37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e98569cd72f89995c18d29a1fc459e977975e000fdc9fde97e8e23d0a04b7875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98569cd72f89995c18d29a1fc459e977975e000fdc9fde97e8e23d0a04b7875->enter($__internal_e98569cd72f89995c18d29a1fc459e977975e000fdc9fde97e8e23d0a04b7875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/layout.html.twig"));

        $__internal_c3027ad7f6b0acabc390182afeec4361639895f88a08b035a7e51fcb3f0c2969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3027ad7f6b0acabc390182afeec4361639895f88a08b035a7e51fcb3f0c2969->enter($__internal_c3027ad7f6b0acabc390182afeec4361639895f88a08b035a7e51fcb3f0c2969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<head>

</head>
<body>
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "</body>
";
        
        $__internal_e98569cd72f89995c18d29a1fc459e977975e000fdc9fde97e8e23d0a04b7875->leave($__internal_e98569cd72f89995c18d29a1fc459e977975e000fdc9fde97e8e23d0a04b7875_prof);

        
        $__internal_c3027ad7f6b0acabc390182afeec4361639895f88a08b035a7e51fcb3f0c2969->leave($__internal_c3027ad7f6b0acabc390182afeec4361639895f88a08b035a7e51fcb3f0c2969_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcdc98747470c0df2f91260cb6eb06e93aa17fe53098c1b80f0c0dda3c323dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdc98747470c0df2f91260cb6eb06e93aa17fe53098c1b80f0c0dda3c323dae->enter($__internal_fcdc98747470c0df2f91260cb6eb06e93aa17fe53098c1b80f0c0dda3c323dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b134a536278b567aef28fb263c3e8ee5ffda61a8b4eeccd4a515fde628039ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b134a536278b567aef28fb263c3e8ee5ffda61a8b4eeccd4a515fde628039ce8->enter($__internal_b134a536278b567aef28fb263c3e8ee5ffda61a8b4eeccd4a515fde628039ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        
        $__internal_b134a536278b567aef28fb263c3e8ee5ffda61a8b4eeccd4a515fde628039ce8->leave($__internal_b134a536278b567aef28fb263c3e8ee5ffda61a8b4eeccd4a515fde628039ce8_prof);

        
        $__internal_fcdc98747470c0df2f91260cb6eb06e93aa17fe53098c1b80f0c0dda3c323dae->leave($__internal_fcdc98747470c0df2f91260cb6eb06e93aa17fe53098c1b80f0c0dda3c323dae_prof);

    }

    public function getTemplateName()
    {
        return "emails/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  46 => 6,  35 => 9,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<head>

</head>
<body>
    {% block body %}

    {% endblock %}
</body>
", "emails/layout.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/emails/layout.html.twig");
    }
}
