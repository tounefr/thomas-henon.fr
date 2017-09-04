<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_905a6cb095ce0bda6bf4160646b2354f9b86419999447a1f5c124e9ea4d16c4c extends Twig_Template
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
        $__internal_50e592c8f48d1a01cb4f9d44877af8d045508c56120f0dd95e5918dbd96e967c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e592c8f48d1a01cb4f9d44877af8d045508c56120f0dd95e5918dbd96e967c->enter($__internal_50e592c8f48d1a01cb4f9d44877af8d045508c56120f0dd95e5918dbd96e967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2905a5248b559672750ba7f4f4c7be42c072815ccd052a4f94d27c6ae448e006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2905a5248b559672750ba7f4f4c7be42c072815ccd052a4f94d27c6ae448e006->enter($__internal_2905a5248b559672750ba7f4f4c7be42c072815ccd052a4f94d27c6ae448e006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_50e592c8f48d1a01cb4f9d44877af8d045508c56120f0dd95e5918dbd96e967c->leave($__internal_50e592c8f48d1a01cb4f9d44877af8d045508c56120f0dd95e5918dbd96e967c_prof);

        
        $__internal_2905a5248b559672750ba7f4f4c7be42c072815ccd052a4f94d27c6ae448e006->leave($__internal_2905a5248b559672750ba7f4f4c7be42c072815ccd052a4f94d27c6ae448e006_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cfb6a109a2b59553eba2efc35cbab1f270d8784a3fb876f9f9fc91ec6f59465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfb6a109a2b59553eba2efc35cbab1f270d8784a3fb876f9f9fc91ec6f59465->enter($__internal_3cfb6a109a2b59553eba2efc35cbab1f270d8784a3fb876f9f9fc91ec6f59465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0466c227fabe08b2c327490fc982e6d66027c1195cd553c75100723274785954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0466c227fabe08b2c327490fc982e6d66027c1195cd553c75100723274785954->enter($__internal_0466c227fabe08b2c327490fc982e6d66027c1195cd553c75100723274785954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0466c227fabe08b2c327490fc982e6d66027c1195cd553c75100723274785954->leave($__internal_0466c227fabe08b2c327490fc982e6d66027c1195cd553c75100723274785954_prof);

        
        $__internal_3cfb6a109a2b59553eba2efc35cbab1f270d8784a3fb876f9f9fc91ec6f59465->leave($__internal_3cfb6a109a2b59553eba2efc35cbab1f270d8784a3fb876f9f9fc91ec6f59465_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b0e5b94aa7c4d823ef594003a8a46c68d7caede496333afe0a23ad246d7d7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0e5b94aa7c4d823ef594003a8a46c68d7caede496333afe0a23ad246d7d7cd->enter($__internal_3b0e5b94aa7c4d823ef594003a8a46c68d7caede496333afe0a23ad246d7d7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b121993036d282b9b83fc2d47da658fad4723761ac7d4fc79d173c6ed6a11c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b121993036d282b9b83fc2d47da658fad4723761ac7d4fc79d173c6ed6a11c2->enter($__internal_9b121993036d282b9b83fc2d47da658fad4723761ac7d4fc79d173c6ed6a11c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9b121993036d282b9b83fc2d47da658fad4723761ac7d4fc79d173c6ed6a11c2->leave($__internal_9b121993036d282b9b83fc2d47da658fad4723761ac7d4fc79d173c6ed6a11c2_prof);

        
        $__internal_3b0e5b94aa7c4d823ef594003a8a46c68d7caede496333afe0a23ad246d7d7cd->leave($__internal_3b0e5b94aa7c4d823ef594003a8a46c68d7caede496333afe0a23ad246d7d7cd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b99558d93a0e95d8cf0574beac0132660752fd17315d0be1a6dfa4358e8f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b99558d93a0e95d8cf0574beac0132660752fd17315d0be1a6dfa4358e8f4e->enter($__internal_78b99558d93a0e95d8cf0574beac0132660752fd17315d0be1a6dfa4358e8f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e74084db5cfeb133538fc22decc9b1fd422839cd99e4d5b23773a2101ef602b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e74084db5cfeb133538fc22decc9b1fd422839cd99e4d5b23773a2101ef602b->enter($__internal_7e74084db5cfeb133538fc22decc9b1fd422839cd99e4d5b23773a2101ef602b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e74084db5cfeb133538fc22decc9b1fd422839cd99e4d5b23773a2101ef602b->leave($__internal_7e74084db5cfeb133538fc22decc9b1fd422839cd99e4d5b23773a2101ef602b_prof);

        
        $__internal_78b99558d93a0e95d8cf0574beac0132660752fd17315d0be1a6dfa4358e8f4e->leave($__internal_78b99558d93a0e95d8cf0574beac0132660752fd17315d0be1a6dfa4358e8f4e_prof);

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
", "@Twig/layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
