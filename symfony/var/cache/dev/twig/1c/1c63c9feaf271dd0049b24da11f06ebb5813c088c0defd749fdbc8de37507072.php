<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d648c652b172310d3ed77f38e9a39d905318318a6e3fef54fbc5cdab8ddd903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9001db4054143e0099afe24b36738d9a812d223853588bd7a204e31dec7fe8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9001db4054143e0099afe24b36738d9a812d223853588bd7a204e31dec7fe8a8->enter($__internal_9001db4054143e0099afe24b36738d9a812d223853588bd7a204e31dec7fe8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_39f833e187d4a1cd943327715bb4631921dcb9e42d7d47036601b06d9fa7bcf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f833e187d4a1cd943327715bb4631921dcb9e42d7d47036601b06d9fa7bcf7->enter($__internal_39f833e187d4a1cd943327715bb4631921dcb9e42d7d47036601b06d9fa7bcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9001db4054143e0099afe24b36738d9a812d223853588bd7a204e31dec7fe8a8->leave($__internal_9001db4054143e0099afe24b36738d9a812d223853588bd7a204e31dec7fe8a8_prof);

        
        $__internal_39f833e187d4a1cd943327715bb4631921dcb9e42d7d47036601b06d9fa7bcf7->leave($__internal_39f833e187d4a1cd943327715bb4631921dcb9e42d7d47036601b06d9fa7bcf7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b369e96d0f21715cfff81755a5c27db116766e267d9ce6d7fb0f442ef9597fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b369e96d0f21715cfff81755a5c27db116766e267d9ce6d7fb0f442ef9597fee->enter($__internal_b369e96d0f21715cfff81755a5c27db116766e267d9ce6d7fb0f442ef9597fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58d558557e074f5138fc839272c82da293ac5a9353defff4a59caebc66ff88ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d558557e074f5138fc839272c82da293ac5a9353defff4a59caebc66ff88ad->enter($__internal_58d558557e074f5138fc839272c82da293ac5a9353defff4a59caebc66ff88ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_58d558557e074f5138fc839272c82da293ac5a9353defff4a59caebc66ff88ad->leave($__internal_58d558557e074f5138fc839272c82da293ac5a9353defff4a59caebc66ff88ad_prof);

        
        $__internal_b369e96d0f21715cfff81755a5c27db116766e267d9ce6d7fb0f442ef9597fee->leave($__internal_b369e96d0f21715cfff81755a5c27db116766e267d9ce6d7fb0f442ef9597fee_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a355eb049145832579d86c79ee4d7067d20ccb904f26726cee30d4ccfcdf4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a355eb049145832579d86c79ee4d7067d20ccb904f26726cee30d4ccfcdf4f9->enter($__internal_4a355eb049145832579d86c79ee4d7067d20ccb904f26726cee30d4ccfcdf4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5fcefd82cc000f1bb184ffe3126f34eb1d30097785c05d19fb85135dbded7622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcefd82cc000f1bb184ffe3126f34eb1d30097785c05d19fb85135dbded7622->enter($__internal_5fcefd82cc000f1bb184ffe3126f34eb1d30097785c05d19fb85135dbded7622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5fcefd82cc000f1bb184ffe3126f34eb1d30097785c05d19fb85135dbded7622->leave($__internal_5fcefd82cc000f1bb184ffe3126f34eb1d30097785c05d19fb85135dbded7622_prof);

        
        $__internal_4a355eb049145832579d86c79ee4d7067d20ccb904f26726cee30d4ccfcdf4f9->leave($__internal_4a355eb049145832579d86c79ee4d7067d20ccb904f26726cee30d4ccfcdf4f9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_67ad62e795286b62e78f2978b439e0474f07bca0a3daf4ad03cf73b0c9ff5e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ad62e795286b62e78f2978b439e0474f07bca0a3daf4ad03cf73b0c9ff5e65->enter($__internal_67ad62e795286b62e78f2978b439e0474f07bca0a3daf4ad03cf73b0c9ff5e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_875b6b1f95e065ea6d7f7e8ec631d7f52393696acc383ca5a1dc35a891e7b311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875b6b1f95e065ea6d7f7e8ec631d7f52393696acc383ca5a1dc35a891e7b311->enter($__internal_875b6b1f95e065ea6d7f7e8ec631d7f52393696acc383ca5a1dc35a891e7b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_875b6b1f95e065ea6d7f7e8ec631d7f52393696acc383ca5a1dc35a891e7b311->leave($__internal_875b6b1f95e065ea6d7f7e8ec631d7f52393696acc383ca5a1dc35a891e7b311_prof);

        
        $__internal_67ad62e795286b62e78f2978b439e0474f07bca0a3daf4ad03cf73b0c9ff5e65->leave($__internal_67ad62e795286b62e78f2978b439e0474f07bca0a3daf4ad03cf73b0c9ff5e65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
