<?php

/* layout.html.twig */
class __TwigTemplate_8b41c31e4d9836b347ebb6ffa399c0b52c5595279004223bdbe821446636b8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'flashes' => array($this, 'block_flashes'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0350f3bc1820618190388c9c5db554e91ff33fc7ace7f90c5331a21ca367f10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0350f3bc1820618190388c9c5db554e91ff33fc7ace7f90c5331a21ca367f10c->enter($__internal_0350f3bc1820618190388c9c5db554e91ff33fc7ace7f90c5331a21ca367f10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_e271725606c3fa7b38750729fbbb10c9b1332f48d67501a5986be424269182ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e271725606c3fa7b38750729fbbb10c9b1332f48d67501a5986be424269182ff->enter($__internal_e271725606c3fa7b38750729fbbb10c9b1332f48d67501a5986be424269182ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>
    <meta name=\"author\" content=\"Thomas HENON\" />
    <meta name=\"keywords\" content=\"développeur web administrateur système symfony 2 epitech thomas henon recherche stage\" />
    <meta name=\"google-site-verification\" content=\"Qv8rHvbJZF2_H5G26sujceQy-VJhcEXMrxBVmLXnOz4\" />
    <link rel=\"icon\" type=\"image/png\" href=\"/bundles/app/images/favicon.ico\" />
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>

<body>

<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">thomas@henon:~/</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"> A propos</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\"><span class=\"glyphicon glyphicon-comment\" aria-hidden=\"true\"> Blog</a></li>
                <!--<li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\"><span class=\"glyphicon glyphicon-briefcase\" aria-hidden=\"true\"> Projets</a></li>-->
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv");
        echo "\"><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"> CV</a></li>
                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Contact</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right hidden-xs\">
                <li>
                    <a href=\"https://twitter.com/tounefr\" target=\"_blank\">
                        <img src=\"/bundles/app/images/0.png\" alt=\"Twitter logo\" />
                    </a>
                </li>
                <li>
                    <a href=\"https://github.com/tounefr\" target=\"_blank\">
                        <img src=\"/bundles/app/images/1.png\" alt=\"Github logo\" />
                    </a>
                </li>
                <li>
                    <a type=\"application/rss+xml\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_rss");
        echo "\" target=\"_blank\">
                        <img src=\"/bundles/app/images/2.png\" alt=\"RSS logo\" />
                    </a>
                </li>
                <li>
                    <a href=\"https://fr.linkedin.com/in/thomas-henon-773b94b3\" target=\"_blank\">
                        <img src=\"/bundles/app/images/3.png\" alt=\"Linkedin logo\" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<noscript><p style=\"text-align: center\">Veuillez activer JavaScript !</p></noscript>

<div id=\"content\">
";
        // line 71
        $this->displayBlock('flashes', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "
</div>

<footer style=\"display: none\">
    <ul>
        <li><a href=\"https://creativecommons.org/licenses/by-nc-sa/4.0/\" target=\"_blank\"><i class=\"fa fa-copyright\" aria-hidden=\"true\"></i> Site sous Licence CC-NA</a></li>
        <li><a href=\"http://dtvkvl6lucqyd3sf.onion\" target=\"_blank\"><img src=\"/bundles/app/images/tor.png\" width=\"15\" height=\"15\" /> Accès Tor: dtvkvl6lucqyd3sf.onion</a></li>
    </ul>
</footer>

";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "
</body>
</html>";
        
        $__internal_0350f3bc1820618190388c9c5db554e91ff33fc7ace7f90c5331a21ca367f10c->leave($__internal_0350f3bc1820618190388c9c5db554e91ff33fc7ace7f90c5331a21ca367f10c_prof);

        
        $__internal_e271725606c3fa7b38750729fbbb10c9b1332f48d67501a5986be424269182ff->leave($__internal_e271725606c3fa7b38750729fbbb10c9b1332f48d67501a5986be424269182ff_prof);

    }

    // line 8
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5b9b3567a6da21ec94aa05f99dbc697e05c205a61d5792b740095f2700e8600d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9b3567a6da21ec94aa05f99dbc697e05c205a61d5792b740095f2700e8600d->enter($__internal_5b9b3567a6da21ec94aa05f99dbc697e05c205a61d5792b740095f2700e8600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_730a86649d047f8c056af125e2db1c224b19bade2c92b7736ce6193e65668553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730a86649d047f8c056af125e2db1c224b19bade2c92b7736ce6193e65668553->enter($__internal_730a86649d047f8c056af125e2db1c224b19bade2c92b7736ce6193e65668553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_730a86649d047f8c056af125e2db1c224b19bade2c92b7736ce6193e65668553->leave($__internal_730a86649d047f8c056af125e2db1c224b19bade2c92b7736ce6193e65668553_prof);

        
        $__internal_5b9b3567a6da21ec94aa05f99dbc697e05c205a61d5792b740095f2700e8600d->leave($__internal_5b9b3567a6da21ec94aa05f99dbc697e05c205a61d5792b740095f2700e8600d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8280fc26fb93dcba6ff378959c0f78b4091749d8bb631bba1e432a053b2f1ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8280fc26fb93dcba6ff378959c0f78b4091749d8bb631bba1e432a053b2f1ce6->enter($__internal_8280fc26fb93dcba6ff378959c0f78b4091749d8bb631bba1e432a053b2f1ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_db5f93648de7dad5fb5268d206b966407f28a401d458136fd1456ef7692c3a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5f93648de7dad5fb5268d206b966407f28a401d458136fd1456ef7692c3a67->enter($__internal_db5f93648de7dad5fb5268d206b966407f28a401d458136fd1456ef7692c3a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    <link rel=\"stylesheet\" href=\"/bundles/app/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/bundles/app/css/style.css\" />
    <link rel=\"stylesheet\" href=\"/bundles/app/font-awesome-4.7.0/css/font-awesome.min.css\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_rss");
        echo "\" title=\"Blog thomas-henon.fr\">
    ";
        
        $__internal_db5f93648de7dad5fb5268d206b966407f28a401d458136fd1456ef7692c3a67->leave($__internal_db5f93648de7dad5fb5268d206b966407f28a401d458136fd1456ef7692c3a67_prof);

        
        $__internal_8280fc26fb93dcba6ff378959c0f78b4091749d8bb631bba1e432a053b2f1ce6->leave($__internal_8280fc26fb93dcba6ff378959c0f78b4091749d8bb631bba1e432a053b2f1ce6_prof);

    }

    // line 71
    public function block_flashes($context, array $blocks = array())
    {
        $__internal_f99339c97719b307589152462ac7192c1d260c438717e309dd507f72b58033b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99339c97719b307589152462ac7192c1d260c438717e309dd507f72b58033b3->enter($__internal_f99339c97719b307589152462ac7192c1d260c438717e309dd507f72b58033b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        $__internal_a50016171b86503537ee0512721b690d2929444d3cd4587ef2a5a172377157e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50016171b86503537ee0512721b690d2929444d3cd4587ef2a5a172377157e5->enter($__internal_a50016171b86503537ee0512721b690d2929444d3cd4587ef2a5a172377157e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        // line 72
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 73
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 74
                echo "
            <div class=\"alert alert-";
                // line 75
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
                <span class=\"glyphicon glyphicon-flash\" aria-hidden=\"true\"></span>
                <strong>";
                // line 77
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a50016171b86503537ee0512721b690d2929444d3cd4587ef2a5a172377157e5->leave($__internal_a50016171b86503537ee0512721b690d2929444d3cd4587ef2a5a172377157e5_prof);

        
        $__internal_f99339c97719b307589152462ac7192c1d260c438717e309dd507f72b58033b3->leave($__internal_f99339c97719b307589152462ac7192c1d260c438717e309dd507f72b58033b3_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_3352d1323a49a8866e8b3733b3a627001c5d46220194adb53839c3a667adc9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3352d1323a49a8866e8b3733b3a627001c5d46220194adb53839c3a667adc9a7->enter($__internal_3352d1323a49a8866e8b3733b3a627001c5d46220194adb53839c3a667adc9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b91f22cc1856e741302773e73148ef2f9e348954044493015f4fa83b2b4bae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b91f22cc1856e741302773e73148ef2f9e348954044493015f4fa83b2b4bae7->enter($__internal_6b91f22cc1856e741302773e73148ef2f9e348954044493015f4fa83b2b4bae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b91f22cc1856e741302773e73148ef2f9e348954044493015f4fa83b2b4bae7->leave($__internal_6b91f22cc1856e741302773e73148ef2f9e348954044493015f4fa83b2b4bae7_prof);

        
        $__internal_3352d1323a49a8866e8b3733b3a627001c5d46220194adb53839c3a667adc9a7->leave($__internal_3352d1323a49a8866e8b3733b3a627001c5d46220194adb53839c3a667adc9a7_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_caa63d2e4090cde99f6bad7f2e7feb155cc6015f672dc11c5332cacd223327b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa63d2e4090cde99f6bad7f2e7feb155cc6015f672dc11c5332cacd223327b9->enter($__internal_caa63d2e4090cde99f6bad7f2e7feb155cc6015f672dc11c5332cacd223327b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee159030f8d96889c27a152fd653588bf3bfe56537a910c297e4ca5cf2a5cc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee159030f8d96889c27a152fd653588bf3bfe56537a910c297e4ca5cf2a5cc07->enter($__internal_ee159030f8d96889c27a152fd653588bf3bfe56537a910c297e4ca5cf2a5cc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    <script src=\"/bundles/app/js/jquery-2.2.0.min.js\"></script>
    <script src=\"/bundles/app/js/bootstrap.min.js\"></script>
    <!-- Piwik -->
    <script type=\"text/javascript\">
        var _paq = _paq || [];
        /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
        _paq.push([\"setCookieDomain\", \"*.thomas-henon.fr https\"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u=\"//analytics.toune.fr/\";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src=\"//analytics.toune.fr/piwik.php?idsite=1&rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
    <!-- End Piwik Code -->
";
        
        $__internal_ee159030f8d96889c27a152fd653588bf3bfe56537a910c297e4ca5cf2a5cc07->leave($__internal_ee159030f8d96889c27a152fd653588bf3bfe56537a910c297e4ca5cf2a5cc07_prof);

        
        $__internal_caa63d2e4090cde99f6bad7f2e7feb155cc6015f672dc11c5332cacd223327b9->leave($__internal_caa63d2e4090cde99f6bad7f2e7feb155cc6015f672dc11c5332cacd223327b9_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 96,  267 => 95,  250 => 83,  236 => 80,  227 => 77,  222 => 75,  219 => 74,  214 => 73,  209 => 72,  200 => 71,  188 => 17,  183 => 14,  174 => 13,  157 => 8,  145 => 116,  143 => 95,  131 => 85,  129 => 83,  126 => 82,  124 => 71,  104 => 54,  87 => 40,  83 => 39,  79 => 38,  75 => 37,  71 => 36,  64 => 32,  49 => 19,  47 => 13,  39 => 8,  30 => 1,);
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
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block page_title %}{% endblock %}</title>
    <meta name=\"author\" content=\"Thomas HENON\" />
    <meta name=\"keywords\" content=\"développeur web administrateur système symfony 2 epitech thomas henon recherche stage\" />
    <meta name=\"google-site-verification\" content=\"Qv8rHvbJZF2_H5G26sujceQy-VJhcEXMrxBVmLXnOz4\" />
    <link rel=\"icon\" type=\"image/png\" href=\"/bundles/app/images/favicon.ico\" />
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/bundles/app/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/bundles/app/css/style.css\" />
    <link rel=\"stylesheet\" href=\"/bundles/app/font-awesome-4.7.0/css/font-awesome.min.css\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{{ path('article_rss') }}\" title=\"Blog thomas-henon.fr\">
    {% endblock %}
</head>

<body>

<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path('about') }}\">thomas@henon:~/</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('about') }}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"> A propos</a></li>
                <li><a href=\"{{ path('article_index') }}\"><span class=\"glyphicon glyphicon-comment\" aria-hidden=\"true\"> Blog</a></li>
                <!--<li><a href=\"{{ path('about') }}\"><span class=\"glyphicon glyphicon-briefcase\" aria-hidden=\"true\"> Projets</a></li>-->
                <li><a href=\"{{ path('cv') }}\"><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"> CV</a></li>
                <li><a href=\"{{ path('contact') }}\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Contact</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right hidden-xs\">
                <li>
                    <a href=\"https://twitter.com/tounefr\" target=\"_blank\">
                        <img src=\"/bundles/app/images/0.png\" alt=\"Twitter logo\" />
                    </a>
                </li>
                <li>
                    <a href=\"https://github.com/tounefr\" target=\"_blank\">
                        <img src=\"/bundles/app/images/1.png\" alt=\"Github logo\" />
                    </a>
                </li>
                <li>
                    <a type=\"application/rss+xml\" href=\"{{ path('article_rss') }}\" target=\"_blank\">
                        <img src=\"/bundles/app/images/2.png\" alt=\"RSS logo\" />
                    </a>
                </li>
                <li>
                    <a href=\"https://fr.linkedin.com/in/thomas-henon-773b94b3\" target=\"_blank\">
                        <img src=\"/bundles/app/images/3.png\" alt=\"Linkedin logo\" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<noscript><p style=\"text-align: center\">Veuillez activer JavaScript !</p></noscript>

<div id=\"content\">
{% block flashes %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}

            <div class=\"alert alert-{{ label }}\" role=\"alert\">
                <span class=\"glyphicon glyphicon-flash\" aria-hidden=\"true\"></span>
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
    {% endfor %}
{% endblock %}

{% block body %}
{% endblock %}

</div>

<footer style=\"display: none\">
    <ul>
        <li><a href=\"https://creativecommons.org/licenses/by-nc-sa/4.0/\" target=\"_blank\"><i class=\"fa fa-copyright\" aria-hidden=\"true\"></i> Site sous Licence CC-NA</a></li>
        <li><a href=\"http://dtvkvl6lucqyd3sf.onion\" target=\"_blank\"><img src=\"/bundles/app/images/tor.png\" width=\"15\" height=\"15\" /> Accès Tor: dtvkvl6lucqyd3sf.onion</a></li>
    </ul>
</footer>

{% block javascripts %}
    <script src=\"/bundles/app/js/jquery-2.2.0.min.js\"></script>
    <script src=\"/bundles/app/js/bootstrap.min.js\"></script>
    <!-- Piwik -->
    <script type=\"text/javascript\">
        var _paq = _paq || [];
        /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
        _paq.push([\"setCookieDomain\", \"*.thomas-henon.fr https\"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u=\"//analytics.toune.fr/\";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src=\"//analytics.toune.fr/piwik.php?idsite=1&rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
    <!-- End Piwik Code -->
{% endblock %}

</body>
</html>", "layout.html.twig", "/var/www/symfony/app/Resources/views/layout.html.twig");
    }
}
