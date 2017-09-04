<?php

/* blog.html.twig */
class __TwigTemplate_4d08df06702d5e529e6dd0d02f8125ae1d32b740619fb6cd159f6de554d0339a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'flashes' => array($this, 'block_flashes'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'articles' => array($this, 'block_articles'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcc0915fcd217245e7758ce749ab00e7e62c3519855691aa52c9f14be6a30a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc0915fcd217245e7758ce749ab00e7e62c3519855691aa52c9f14be6a30a0f->enter($__internal_bcc0915fcd217245e7758ce749ab00e7e62c3519855691aa52c9f14be6a30a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog.html.twig"));

        $__internal_f6ff73426d0688acbc2e73cf34c8cbbbf5216b0714aa31e01b62256623828fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ff73426d0688acbc2e73cf34c8cbbbf5216b0714aa31e01b62256623828fef->enter($__internal_f6ff73426d0688acbc2e73cf34c8cbbbf5216b0714aa31e01b62256623828fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc0915fcd217245e7758ce749ab00e7e62c3519855691aa52c9f14be6a30a0f->leave($__internal_bcc0915fcd217245e7758ce749ab00e7e62c3519855691aa52c9f14be6a30a0f_prof);

        
        $__internal_f6ff73426d0688acbc2e73cf34c8cbbbf5216b0714aa31e01b62256623828fef->leave($__internal_f6ff73426d0688acbc2e73cf34c8cbbbf5216b0714aa31e01b62256623828fef_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9123e399b79dadba7f29f8bca3a673f1e033e023964232770b49df6fe631b9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9123e399b79dadba7f29f8bca3a673f1e033e023964232770b49df6fe631b9bf->enter($__internal_9123e399b79dadba7f29f8bca3a673f1e033e023964232770b49df6fe631b9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e04894eb7ebf810d843bea2865c9b9ad684e3408ed158513f38f7def6d2b04b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04894eb7ebf810d843bea2865c9b9ad684e3408ed158513f38f7def6d2b04b7->enter($__internal_e04894eb7ebf810d843bea2865c9b9ad684e3408ed158513f38f7def6d2b04b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blog";
        
        $__internal_e04894eb7ebf810d843bea2865c9b9ad684e3408ed158513f38f7def6d2b04b7->leave($__internal_e04894eb7ebf810d843bea2865c9b9ad684e3408ed158513f38f7def6d2b04b7_prof);

        
        $__internal_9123e399b79dadba7f29f8bca3a673f1e033e023964232770b49df6fe631b9bf->leave($__internal_9123e399b79dadba7f29f8bca3a673f1e033e023964232770b49df6fe631b9bf_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db43abcd47009056210a3bbc997ba624153e9449b9bc254afac865c3e53fb954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db43abcd47009056210a3bbc997ba624153e9449b9bc254afac865c3e53fb954->enter($__internal_db43abcd47009056210a3bbc997ba624153e9449b9bc254afac865c3e53fb954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c744a658ce48741815899cee0cc3e9427ea6e3d922cdb68512e589449e894ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c744a658ce48741815899cee0cc3e9427ea6e3d922cdb68512e589449e894ead->enter($__internal_c744a658ce48741815899cee0cc3e9427ea6e3d922cdb68512e589449e894ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = \"https://platform.twitter.com/widgets.js\";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, \"script\", \"twitter-wjs\"));
</script>
";
        
        $__internal_c744a658ce48741815899cee0cc3e9427ea6e3d922cdb68512e589449e894ead->leave($__internal_c744a658ce48741815899cee0cc3e9427ea6e3d922cdb68512e589449e894ead_prof);

        
        $__internal_db43abcd47009056210a3bbc997ba624153e9449b9bc254afac865c3e53fb954->leave($__internal_db43abcd47009056210a3bbc997ba624153e9449b9bc254afac865c3e53fb954_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1c7e4ff9765b62d5ed4d96eab081fd783c7a18418b1b72074717a1724671e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c7e4ff9765b62d5ed4d96eab081fd783c7a18418b1b72074717a1724671e53->enter($__internal_e1c7e4ff9765b62d5ed4d96eab081fd783c7a18418b1b72074717a1724671e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af4976cca0898ea31a12291e0c5a609fd03023718290b2cd3ac88cc76ffbcd1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4976cca0898ea31a12291e0c5a609fd03023718290b2cd3ac88cc76ffbcd1f->enter($__internal_af4976cca0898ea31a12291e0c5a609fd03023718290b2cd3ac88cc76ffbcd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<div id=\"blog\" class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-3\">
            <nav>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Categories
                        </h3>
                        <ul>
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "                            <li><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index", array("category" => $this->getAttribute($context["category"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getName", array(), "method"), "html", null, true);
            echo "</a> <!--<span class=\"badge\">42</span>--></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </ul>
                    </section>
                </div>
                <!--
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Archives
                        </h3>
                        <ul>
                            <li><a href=\"#\">Catégorie</a></li>
                            <li><a href=\"#\">Catégorie</a></li>
                            <li><a href=\"#\">Catégorie</a></li>
                        </ul>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Pub
                        </h3>
                    </section>
                </div>
                -->
            </nav>
        </div>

        <div class=\"col-md-6\">
        ";
        // line 72
        $this->displayBlock('flashes', $context, $blocks);
        // line 83
        echo "
        ";
        // line 84
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 95
        echo "        ";
        $this->displayBlock('articles', $context, $blocks);
        // line 97
        echo "        </div>

        <!--
        <div class=\"col-md-3\">
            <nav>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Abonnez vous !
                        </h3>
                        <div id=\"rss_subscribe\">
                            <i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i>
                        </div>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Pub
                        </h3>
                    </section>
                </div>
            </nav>
        </div>
        -->

    </div>

</div>
";
        
        $__internal_af4976cca0898ea31a12291e0c5a609fd03023718290b2cd3ac88cc76ffbcd1f->leave($__internal_af4976cca0898ea31a12291e0c5a609fd03023718290b2cd3ac88cc76ffbcd1f_prof);

        
        $__internal_e1c7e4ff9765b62d5ed4d96eab081fd783c7a18418b1b72074717a1724671e53->leave($__internal_e1c7e4ff9765b62d5ed4d96eab081fd783c7a18418b1b72074717a1724671e53_prof);

    }

    // line 72
    public function block_flashes($context, array $blocks = array())
    {
        $__internal_c128fc62220f14c5be13dcf1d901bd14702bf2310cb1007876ed2a43520f9782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c128fc62220f14c5be13dcf1d901bd14702bf2310cb1007876ed2a43520f9782->enter($__internal_c128fc62220f14c5be13dcf1d901bd14702bf2310cb1007876ed2a43520f9782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        $__internal_93c74090f2de9cea5057250fe362887c9b73d1c1a263e294c281f6c8dcfcdd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c74090f2de9cea5057250fe362887c9b73d1c1a263e294c281f6c8dcfcdd1a->enter($__internal_93c74090f2de9cea5057250fe362887c9b73d1c1a263e294c281f6c8dcfcdd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        // line 73
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 74
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 75
                echo "
                    <div class=\"alert alert-";
                // line 76
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
                        <span class=\"glyphicon glyphicon-flash\" aria-hidden=\"true\"></span>
                        <strong>";
                // line 78
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        ";
        
        $__internal_93c74090f2de9cea5057250fe362887c9b73d1c1a263e294c281f6c8dcfcdd1a->leave($__internal_93c74090f2de9cea5057250fe362887c9b73d1c1a263e294c281f6c8dcfcdd1a_prof);

        
        $__internal_c128fc62220f14c5be13dcf1d901bd14702bf2310cb1007876ed2a43520f9782->leave($__internal_c128fc62220f14c5be13dcf1d901bd14702bf2310cb1007876ed2a43520f9782_prof);

    }

    // line 84
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8c8e11b33b69d50046c3a57cc79432c03fecc258c4aca9d288caaf1106a958a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8e11b33b69d50046c3a57cc79432c03fecc258c4aca9d288caaf1106a958a5->enter($__internal_8c8e11b33b69d50046c3a57cc79432c03fecc258c4aca9d288caaf1106a958a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_364566be025f210b7f96923c9acdda3993d85bbdd8c3c077dbe8041089b25849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364566be025f210b7f96923c9acdda3993d85bbdd8c3c077dbe8041089b25849->enter($__internal_364566be025f210b7f96923c9acdda3993d85bbdd8c3c077dbe8041089b25849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 85
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Blog</a></li>
                ";
        // line 87
        if (array_key_exists("article", $context)) {
            // line 88
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index", array("category" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getCategory", array(), "method"), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
                    ";
            // line 89
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array(), "any", true, true)) {
                // line 90
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getId", array(), "method"), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getSlug", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 92
            echo "                ";
        }
        // line 93
        echo "            </ol>
        ";
        
        $__internal_364566be025f210b7f96923c9acdda3993d85bbdd8c3c077dbe8041089b25849->leave($__internal_364566be025f210b7f96923c9acdda3993d85bbdd8c3c077dbe8041089b25849_prof);

        
        $__internal_8c8e11b33b69d50046c3a57cc79432c03fecc258c4aca9d288caaf1106a958a5->leave($__internal_8c8e11b33b69d50046c3a57cc79432c03fecc258c4aca9d288caaf1106a958a5_prof);

    }

    // line 95
    public function block_articles($context, array $blocks = array())
    {
        $__internal_3e36e5c8c5a80ce48429cbc46fa92ad31c05a0a89fcaf68234ec285bd79ed012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e36e5c8c5a80ce48429cbc46fa92ad31c05a0a89fcaf68234ec285bd79ed012->enter($__internal_3e36e5c8c5a80ce48429cbc46fa92ad31c05a0a89fcaf68234ec285bd79ed012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_bf81a13ad775e40d6de9ce69e8904dd39bcc3964027b34fa77c058b52d1057f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf81a13ad775e40d6de9ce69e8904dd39bcc3964027b34fa77c058b52d1057f9->enter($__internal_bf81a13ad775e40d6de9ce69e8904dd39bcc3964027b34fa77c058b52d1057f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        // line 96
        echo "        ";
        
        $__internal_bf81a13ad775e40d6de9ce69e8904dd39bcc3964027b34fa77c058b52d1057f9->leave($__internal_bf81a13ad775e40d6de9ce69e8904dd39bcc3964027b34fa77c058b52d1057f9_prof);

        
        $__internal_3e36e5c8c5a80ce48429cbc46fa92ad31c05a0a89fcaf68234ec285bd79ed012->leave($__internal_3e36e5c8c5a80ce48429cbc46fa92ad31c05a0a89fcaf68234ec285bd79ed012_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 96,  324 => 95,  313 => 93,  310 => 92,  302 => 90,  300 => 89,  293 => 88,  291 => 87,  287 => 86,  284 => 85,  275 => 84,  265 => 82,  259 => 81,  250 => 78,  245 => 76,  242 => 75,  237 => 74,  232 => 73,  223 => 72,  182 => 97,  179 => 95,  177 => 84,  174 => 83,  172 => 72,  140 => 42,  129 => 40,  125 => 39,  111 => 27,  102 => 26,  72 => 6,  63 => 5,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block page_title %}Blog{% endblock %}

{% block javascripts %}
    {{ parent() }}
<script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = \"https://platform.twitter.com/widgets.js\";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, \"script\", \"twitter-wjs\"));
</script>
{% endblock %}

{% block body %}
<div id=\"blog\" class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-3\">
            <nav>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Categories
                        </h3>
                        <ul>
                            {% for category in categories %}
                            <li><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <a href=\"{{ path('article_index', {'category': category.getName() }) }}\">{{ category.getName() }}</a> <!--<span class=\"badge\">42</span>--></li>
                            {% endfor %}
                        </ul>
                    </section>
                </div>
                <!--
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Archives
                        </h3>
                        <ul>
                            <li><a href=\"#\">Catégorie</a></li>
                            <li><a href=\"#\">Catégorie</a></li>
                            <li><a href=\"#\">Catégorie</a></li>
                        </ul>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Pub
                        </h3>
                    </section>
                </div>
                -->
            </nav>
        </div>

        <div class=\"col-md-6\">
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

        {% block breadcrumb %}
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('article_index') }}\">Blog</a></li>
                {% if article is defined %}
                    <li><a href=\"{{ path('article_index', {'category': article.getCategory().getName() }) }}\">{{ article.getCategory().getName() }}</a></li>
                    {% if article.title is defined %}
                        <li class=\"active\"><a href=\"{{ path('article_show', {'id': article.getId(), 'slug': article.getSlug()}) }}\">{{ article.title }}</a></li>
                    {% endif %}
                {% endif %}
            </ol>
        {% endblock %}
        {% block articles %}
        {% endblock %}
        </div>

        <!--
        <div class=\"col-md-3\">
            <nav>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Abonnez vous !
                        </h3>
                        <div id=\"rss_subscribe\">
                            <i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i>
                        </div>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Pub
                        </h3>
                    </section>
                </div>
            </nav>
        </div>
        -->

    </div>

</div>
{% endblock %}", "blog.html.twig", "/var/www/symfony/app/Resources/views/blog.html.twig");
    }
}
