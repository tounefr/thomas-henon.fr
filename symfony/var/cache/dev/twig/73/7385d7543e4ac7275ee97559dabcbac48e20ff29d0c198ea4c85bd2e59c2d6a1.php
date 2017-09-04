<?php

/* layout.html.twig */
class __TwigTemplate_97cea4028392e58e5f07b518963fc293cba3836de91fe69e89821e13fac265e6 extends Twig_Template
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
        $__internal_0c446148c8682a948c411209abf905c2a2177ac64894342a77c471dd902a08bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c446148c8682a948c411209abf905c2a2177ac64894342a77c471dd902a08bb->enter($__internal_0c446148c8682a948c411209abf905c2a2177ac64894342a77c471dd902a08bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_0cfc2bd1dfad38f4eec4ceb03417f80053366ae5f1cd858a0a31606b0fb191ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfc2bd1dfad38f4eec4ceb03417f80053366ae5f1cd858a0a31606b0fb191ef->enter($__internal_0cfc2bd1dfad38f4eec4ceb03417f80053366ae5f1cd858a0a31606b0fb191ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_0c446148c8682a948c411209abf905c2a2177ac64894342a77c471dd902a08bb->leave($__internal_0c446148c8682a948c411209abf905c2a2177ac64894342a77c471dd902a08bb_prof);

        
        $__internal_0cfc2bd1dfad38f4eec4ceb03417f80053366ae5f1cd858a0a31606b0fb191ef->leave($__internal_0cfc2bd1dfad38f4eec4ceb03417f80053366ae5f1cd858a0a31606b0fb191ef_prof);

    }

    // line 8
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ea339cf44aa4ccdb7637fe36074c55096e55f03117e20b7be167ef963aaabcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea339cf44aa4ccdb7637fe36074c55096e55f03117e20b7be167ef963aaabcd9->enter($__internal_ea339cf44aa4ccdb7637fe36074c55096e55f03117e20b7be167ef963aaabcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3ed595d44cbcff1c130f5602b8084d6d1596f51d2ffcf8189c734b1a092ad1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed595d44cbcff1c130f5602b8084d6d1596f51d2ffcf8189c734b1a092ad1b3->enter($__internal_3ed595d44cbcff1c130f5602b8084d6d1596f51d2ffcf8189c734b1a092ad1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_3ed595d44cbcff1c130f5602b8084d6d1596f51d2ffcf8189c734b1a092ad1b3->leave($__internal_3ed595d44cbcff1c130f5602b8084d6d1596f51d2ffcf8189c734b1a092ad1b3_prof);

        
        $__internal_ea339cf44aa4ccdb7637fe36074c55096e55f03117e20b7be167ef963aaabcd9->leave($__internal_ea339cf44aa4ccdb7637fe36074c55096e55f03117e20b7be167ef963aaabcd9_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15544397e29a259d5386507c3d4c86a6bb280454a4c8aa8cf1e0a80bce0d2ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15544397e29a259d5386507c3d4c86a6bb280454a4c8aa8cf1e0a80bce0d2ef9->enter($__internal_15544397e29a259d5386507c3d4c86a6bb280454a4c8aa8cf1e0a80bce0d2ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_db3b09683f623a3fa0b8bbe6cf75eab59d8eeff493710f0727b96030f7844bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3b09683f623a3fa0b8bbe6cf75eab59d8eeff493710f0727b96030f7844bef->enter($__internal_db3b09683f623a3fa0b8bbe6cf75eab59d8eeff493710f0727b96030f7844bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    <link rel=\"stylesheet\" href=\"/bundles/app/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/bundles/app/css/style.css\" />
    <link rel=\"stylesheet\" href=\"/bundles/app/font-awesome-4.7.0/css/font-awesome.min.css\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_rss");
        echo "\" title=\"Blog thomas-henon.fr\">
    ";
        
        $__internal_db3b09683f623a3fa0b8bbe6cf75eab59d8eeff493710f0727b96030f7844bef->leave($__internal_db3b09683f623a3fa0b8bbe6cf75eab59d8eeff493710f0727b96030f7844bef_prof);

        
        $__internal_15544397e29a259d5386507c3d4c86a6bb280454a4c8aa8cf1e0a80bce0d2ef9->leave($__internal_15544397e29a259d5386507c3d4c86a6bb280454a4c8aa8cf1e0a80bce0d2ef9_prof);

    }

    // line 71
    public function block_flashes($context, array $blocks = array())
    {
        $__internal_ca699fb48b240b192950ea794aebdc64a45c1f5432982e2680e19e126a44dfd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca699fb48b240b192950ea794aebdc64a45c1f5432982e2680e19e126a44dfd2->enter($__internal_ca699fb48b240b192950ea794aebdc64a45c1f5432982e2680e19e126a44dfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        $__internal_6bb2b99269390b4ef58d7f2d41f72c8011b91c9b08ca57fa8f0ef830d556c55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb2b99269390b4ef58d7f2d41f72c8011b91c9b08ca57fa8f0ef830d556c55a->enter($__internal_6bb2b99269390b4ef58d7f2d41f72c8011b91c9b08ca57fa8f0ef830d556c55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        // line 72
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
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
        
        $__internal_6bb2b99269390b4ef58d7f2d41f72c8011b91c9b08ca57fa8f0ef830d556c55a->leave($__internal_6bb2b99269390b4ef58d7f2d41f72c8011b91c9b08ca57fa8f0ef830d556c55a_prof);

        
        $__internal_ca699fb48b240b192950ea794aebdc64a45c1f5432982e2680e19e126a44dfd2->leave($__internal_ca699fb48b240b192950ea794aebdc64a45c1f5432982e2680e19e126a44dfd2_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_e273fb4ee61af1e370dd9d681afd5fc8005f3585fa2afb39c67a49583d14e216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e273fb4ee61af1e370dd9d681afd5fc8005f3585fa2afb39c67a49583d14e216->enter($__internal_e273fb4ee61af1e370dd9d681afd5fc8005f3585fa2afb39c67a49583d14e216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_469cc290704af0f9230cd183acd401b2cebb67dc0745d46d170127cd4946ff52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469cc290704af0f9230cd183acd401b2cebb67dc0745d46d170127cd4946ff52->enter($__internal_469cc290704af0f9230cd183acd401b2cebb67dc0745d46d170127cd4946ff52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_469cc290704af0f9230cd183acd401b2cebb67dc0745d46d170127cd4946ff52->leave($__internal_469cc290704af0f9230cd183acd401b2cebb67dc0745d46d170127cd4946ff52_prof);

        
        $__internal_e273fb4ee61af1e370dd9d681afd5fc8005f3585fa2afb39c67a49583d14e216->leave($__internal_e273fb4ee61af1e370dd9d681afd5fc8005f3585fa2afb39c67a49583d14e216_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81133441f88d422c624a5722597e715d1c594feef82dc4f130bea61caa281a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81133441f88d422c624a5722597e715d1c594feef82dc4f130bea61caa281a10->enter($__internal_81133441f88d422c624a5722597e715d1c594feef82dc4f130bea61caa281a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8fc53957b96005b9079498c32533235d2b59fb769a306a5bc2e3ada8d6be65b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc53957b96005b9079498c32533235d2b59fb769a306a5bc2e3ada8d6be65b7->enter($__internal_8fc53957b96005b9079498c32533235d2b59fb769a306a5bc2e3ada8d6be65b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8fc53957b96005b9079498c32533235d2b59fb769a306a5bc2e3ada8d6be65b7->leave($__internal_8fc53957b96005b9079498c32533235d2b59fb769a306a5bc2e3ada8d6be65b7_prof);

        
        $__internal_81133441f88d422c624a5722597e715d1c594feef82dc4f130bea61caa281a10->leave($__internal_81133441f88d422c624a5722597e715d1c594feef82dc4f130bea61caa281a10_prof);

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
</html>", "layout.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/layout.html.twig");
    }
}
