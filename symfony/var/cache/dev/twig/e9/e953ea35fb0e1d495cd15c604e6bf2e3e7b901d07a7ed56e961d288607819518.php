<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1baa379f096de9cd7b38b86e71aa480637e3a700c40460eabca70d1cae7bfbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_879a17da7e5699a8148cb0470a14ada38e5bbe08debb81d3cd28333e5ef4b933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879a17da7e5699a8148cb0470a14ada38e5bbe08debb81d3cd28333e5ef4b933->enter($__internal_879a17da7e5699a8148cb0470a14ada38e5bbe08debb81d3cd28333e5ef4b933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c4b35fa80fbc64a46364b163df9720c65282d896d71d4829ce597bfa66316215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b35fa80fbc64a46364b163df9720c65282d896d71d4829ce597bfa66316215->enter($__internal_c4b35fa80fbc64a46364b163df9720c65282d896d71d4829ce597bfa66316215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879a17da7e5699a8148cb0470a14ada38e5bbe08debb81d3cd28333e5ef4b933->leave($__internal_879a17da7e5699a8148cb0470a14ada38e5bbe08debb81d3cd28333e5ef4b933_prof);

        
        $__internal_c4b35fa80fbc64a46364b163df9720c65282d896d71d4829ce597bfa66316215->leave($__internal_c4b35fa80fbc64a46364b163df9720c65282d896d71d4829ce597bfa66316215_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea7de35b35e50d8c1e784b1376aea757813b3ebd8f42fd9f17b5636cd4cceecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7de35b35e50d8c1e784b1376aea757813b3ebd8f42fd9f17b5636cd4cceecb->enter($__internal_ea7de35b35e50d8c1e784b1376aea757813b3ebd8f42fd9f17b5636cd4cceecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b8bc36430989469e5e29033bba2214161decf922eeadf3851bb302685a455de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8bc36430989469e5e29033bba2214161decf922eeadf3851bb302685a455de->enter($__internal_6b8bc36430989469e5e29033bba2214161decf922eeadf3851bb302685a455de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6b8bc36430989469e5e29033bba2214161decf922eeadf3851bb302685a455de->leave($__internal_6b8bc36430989469e5e29033bba2214161decf922eeadf3851bb302685a455de_prof);

        
        $__internal_ea7de35b35e50d8c1e784b1376aea757813b3ebd8f42fd9f17b5636cd4cceecb->leave($__internal_ea7de35b35e50d8c1e784b1376aea757813b3ebd8f42fd9f17b5636cd4cceecb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e403c14217816e113f269f2b58464cfb4ecffc41a759c4402b5204d81b335aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e403c14217816e113f269f2b58464cfb4ecffc41a759c4402b5204d81b335aa1->enter($__internal_e403c14217816e113f269f2b58464cfb4ecffc41a759c4402b5204d81b335aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_317c9d7cb80920f26ab17f92911d4f5b0a8987b81072d144f1da92dd6f38a065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317c9d7cb80920f26ab17f92911d4f5b0a8987b81072d144f1da92dd6f38a065->enter($__internal_317c9d7cb80920f26ab17f92911d4f5b0a8987b81072d144f1da92dd6f38a065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_317c9d7cb80920f26ab17f92911d4f5b0a8987b81072d144f1da92dd6f38a065->leave($__internal_317c9d7cb80920f26ab17f92911d4f5b0a8987b81072d144f1da92dd6f38a065_prof);

        
        $__internal_e403c14217816e113f269f2b58464cfb4ecffc41a759c4402b5204d81b335aa1->leave($__internal_e403c14217816e113f269f2b58464cfb4ecffc41a759c4402b5204d81b335aa1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_34b6463b6d4f1adbbe0ffc0121cea7cbea33418c5e3e0eb8e2f20981182fbe86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b6463b6d4f1adbbe0ffc0121cea7cbea33418c5e3e0eb8e2f20981182fbe86->enter($__internal_34b6463b6d4f1adbbe0ffc0121cea7cbea33418c5e3e0eb8e2f20981182fbe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7075bf01176dc5a23277f03c99f3c816bac43d6c2c82c43c59458b4b815cdb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7075bf01176dc5a23277f03c99f3c816bac43d6c2c82c43c59458b4b815cdb16->enter($__internal_7075bf01176dc5a23277f03c99f3c816bac43d6c2c82c43c59458b4b815cdb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7075bf01176dc5a23277f03c99f3c816bac43d6c2c82c43c59458b4b815cdb16->leave($__internal_7075bf01176dc5a23277f03c99f3c816bac43d6c2c82c43c59458b4b815cdb16_prof);

        
        $__internal_34b6463b6d4f1adbbe0ffc0121cea7cbea33418c5e3e0eb8e2f20981182fbe86->leave($__internal_34b6463b6d4f1adbbe0ffc0121cea7cbea33418c5e3e0eb8e2f20981182fbe86_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
