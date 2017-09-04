<?php

/* blog.html.twig */
class __TwigTemplate_282d8226f8a024dc1602107144c57fa8396cc68ea2a74f1e984c0a447595e1aa extends Twig_Template
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
        $__internal_7eae0b6509267eef0173d5a02e176dd181e7bcbef24fa207a1db74d6aeadae92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eae0b6509267eef0173d5a02e176dd181e7bcbef24fa207a1db74d6aeadae92->enter($__internal_7eae0b6509267eef0173d5a02e176dd181e7bcbef24fa207a1db74d6aeadae92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog.html.twig"));

        $__internal_e87769d2c5c81151c6f9afb465d777833ac862e96a9b31ad9bce3786fc18f714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87769d2c5c81151c6f9afb465d777833ac862e96a9b31ad9bce3786fc18f714->enter($__internal_e87769d2c5c81151c6f9afb465d777833ac862e96a9b31ad9bce3786fc18f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eae0b6509267eef0173d5a02e176dd181e7bcbef24fa207a1db74d6aeadae92->leave($__internal_7eae0b6509267eef0173d5a02e176dd181e7bcbef24fa207a1db74d6aeadae92_prof);

        
        $__internal_e87769d2c5c81151c6f9afb465d777833ac862e96a9b31ad9bce3786fc18f714->leave($__internal_e87769d2c5c81151c6f9afb465d777833ac862e96a9b31ad9bce3786fc18f714_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3e0259c9b9c1d2027859cf26e885ab38a08468a4dfbf642958e3998790c02368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0259c9b9c1d2027859cf26e885ab38a08468a4dfbf642958e3998790c02368->enter($__internal_3e0259c9b9c1d2027859cf26e885ab38a08468a4dfbf642958e3998790c02368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_c09ad66bc52ad147d8c397af2b0c50666f475b468f2d46f2c95414c9a7ee8294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09ad66bc52ad147d8c397af2b0c50666f475b468f2d46f2c95414c9a7ee8294->enter($__internal_c09ad66bc52ad147d8c397af2b0c50666f475b468f2d46f2c95414c9a7ee8294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blog";
        
        $__internal_c09ad66bc52ad147d8c397af2b0c50666f475b468f2d46f2c95414c9a7ee8294->leave($__internal_c09ad66bc52ad147d8c397af2b0c50666f475b468f2d46f2c95414c9a7ee8294_prof);

        
        $__internal_3e0259c9b9c1d2027859cf26e885ab38a08468a4dfbf642958e3998790c02368->leave($__internal_3e0259c9b9c1d2027859cf26e885ab38a08468a4dfbf642958e3998790c02368_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfdbc9fc7c24816c6ccbbc8d0d6a6a85351ffbff12d49929f7e57b27a1265fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdbc9fc7c24816c6ccbbc8d0d6a6a85351ffbff12d49929f7e57b27a1265fb6->enter($__internal_cfdbc9fc7c24816c6ccbbc8d0d6a6a85351ffbff12d49929f7e57b27a1265fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f292690384171361f210f6673dbfec7b247039654676e4e0c3660243549a2219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f292690384171361f210f6673dbfec7b247039654676e4e0c3660243549a2219->enter($__internal_f292690384171361f210f6673dbfec7b247039654676e4e0c3660243549a2219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f292690384171361f210f6673dbfec7b247039654676e4e0c3660243549a2219->leave($__internal_f292690384171361f210f6673dbfec7b247039654676e4e0c3660243549a2219_prof);

        
        $__internal_cfdbc9fc7c24816c6ccbbc8d0d6a6a85351ffbff12d49929f7e57b27a1265fb6->leave($__internal_cfdbc9fc7c24816c6ccbbc8d0d6a6a85351ffbff12d49929f7e57b27a1265fb6_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa335934965bc987ad1243fbb48362fa62c4f70dad04dd4885a2e3fa9cfcd47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa335934965bc987ad1243fbb48362fa62c4f70dad04dd4885a2e3fa9cfcd47b->enter($__internal_aa335934965bc987ad1243fbb48362fa62c4f70dad04dd4885a2e3fa9cfcd47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faf7cdd6a0461f373d77c2f606033b554e75951a9d1d35517b99cf79e8e7b216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf7cdd6a0461f373d77c2f606033b554e75951a9d1d35517b99cf79e8e7b216->enter($__internal_faf7cdd6a0461f373d77c2f606033b554e75951a9d1d35517b99cf79e8e7b216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<div id=\"blog\" class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-9\">
        ";
        // line 31
        $this->displayBlock('flashes', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 54
        echo "        ";
        $this->displayBlock('articles', $context, $blocks);
        // line 56
        echo "        </div>

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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            echo "                                <li><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index", array("category" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a> <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["category"], "articles", array())), "html", null, true);
            echo "</span> <!--<span class=\"badge\">42</span>--></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </ul>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                            Traduire
                        </h3>
                        <div id=\"rss_subscribe\">
                        </div>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-flash\" aria-hidden=\"true\"></span>
                            Articles populaires
                        </h3>
                        <div id=\"rss_subscribe\">
                        </div>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Newsletter
                        </h3>
                        <div id=\"rss_subscribe\">
                        </div>
                    </section>
                </div>
            </nav>
        </div>

    </div>

</div>
";
        
        $__internal_faf7cdd6a0461f373d77c2f606033b554e75951a9d1d35517b99cf79e8e7b216->leave($__internal_faf7cdd6a0461f373d77c2f606033b554e75951a9d1d35517b99cf79e8e7b216_prof);

        
        $__internal_aa335934965bc987ad1243fbb48362fa62c4f70dad04dd4885a2e3fa9cfcd47b->leave($__internal_aa335934965bc987ad1243fbb48362fa62c4f70dad04dd4885a2e3fa9cfcd47b_prof);

    }

    // line 31
    public function block_flashes($context, array $blocks = array())
    {
        $__internal_798cc133a8fa61beb329741afe46fa5f7a5250ae3934c187095e37a5f5d124d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798cc133a8fa61beb329741afe46fa5f7a5250ae3934c187095e37a5f5d124d2->enter($__internal_798cc133a8fa61beb329741afe46fa5f7a5250ae3934c187095e37a5f5d124d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        $__internal_04059cb58d831e830e0a684cb6fe0dc86e3447c21a0289aaf8398682d9b972ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04059cb58d831e830e0a684cb6fe0dc86e3447c21a0289aaf8398682d9b972ca->enter($__internal_04059cb58d831e830e0a684cb6fe0dc86e3447c21a0289aaf8398682d9b972ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        // line 32
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                echo "
                    <div class=\"alert alert-";
                // line 35
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
                        <span class=\"glyphicon glyphicon-flash\" aria-hidden=\"true\"></span>
                        <strong>";
                // line 37
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        ";
        
        $__internal_04059cb58d831e830e0a684cb6fe0dc86e3447c21a0289aaf8398682d9b972ca->leave($__internal_04059cb58d831e830e0a684cb6fe0dc86e3447c21a0289aaf8398682d9b972ca_prof);

        
        $__internal_798cc133a8fa61beb329741afe46fa5f7a5250ae3934c187095e37a5f5d124d2->leave($__internal_798cc133a8fa61beb329741afe46fa5f7a5250ae3934c187095e37a5f5d124d2_prof);

    }

    // line 43
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_02a34a18c4c9e6e351c69742a8f73c0c69ec7afaaa793f6f4f1e5339dd37ce5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a34a18c4c9e6e351c69742a8f73c0c69ec7afaaa793f6f4f1e5339dd37ce5e->enter($__internal_02a34a18c4c9e6e351c69742a8f73c0c69ec7afaaa793f6f4f1e5339dd37ce5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_1eb54c0a904bbb89fc73319c091d0e3b7a3bf965e8cd5b9b7e5231431517e22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb54c0a904bbb89fc73319c091d0e3b7a3bf965e8cd5b9b7e5231431517e22f->enter($__internal_1eb54c0a904bbb89fc73319c091d0e3b7a3bf965e8cd5b9b7e5231431517e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 44
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Blog</a></li>
                ";
        // line 46
        if (array_key_exists("article", $context)) {
            // line 47
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index", array("category" => $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "getCategory", array(), "method"), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
                    ";
            // line 48
            if ($this->getAttribute(($context["article"] ?? null), "title", array(), "any", true, true)) {
                // line 49
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "getId", array(), "method"), "slug" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "getSlug", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 51
            echo "                ";
        }
        // line 52
        echo "            </ol>
        ";
        
        $__internal_1eb54c0a904bbb89fc73319c091d0e3b7a3bf965e8cd5b9b7e5231431517e22f->leave($__internal_1eb54c0a904bbb89fc73319c091d0e3b7a3bf965e8cd5b9b7e5231431517e22f_prof);

        
        $__internal_02a34a18c4c9e6e351c69742a8f73c0c69ec7afaaa793f6f4f1e5339dd37ce5e->leave($__internal_02a34a18c4c9e6e351c69742a8f73c0c69ec7afaaa793f6f4f1e5339dd37ce5e_prof);

    }

    // line 54
    public function block_articles($context, array $blocks = array())
    {
        $__internal_be561307e6bc1a740b1905557772cec7afc029e34d3292d2f603f98dc401e386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be561307e6bc1a740b1905557772cec7afc029e34d3292d2f603f98dc401e386->enter($__internal_be561307e6bc1a740b1905557772cec7afc029e34d3292d2f603f98dc401e386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_29c38d469b205785deeeafe4e503f4edae16b071ae038c9888ec1b071cb904e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c38d469b205785deeeafe4e503f4edae16b071ae038c9888ec1b071cb904e1->enter($__internal_29c38d469b205785deeeafe4e503f4edae16b071ae038c9888ec1b071cb904e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        // line 55
        echo "        ";
        
        $__internal_29c38d469b205785deeeafe4e503f4edae16b071ae038c9888ec1b071cb904e1->leave($__internal_29c38d469b205785deeeafe4e503f4edae16b071ae038c9888ec1b071cb904e1_prof);

        
        $__internal_be561307e6bc1a740b1905557772cec7afc029e34d3292d2f603f98dc401e386->leave($__internal_be561307e6bc1a740b1905557772cec7afc029e34d3292d2f603f98dc401e386_prof);

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
        return array (  316 => 55,  307 => 54,  296 => 52,  293 => 51,  285 => 49,  283 => 48,  276 => 47,  274 => 46,  270 => 45,  267 => 44,  258 => 43,  248 => 41,  242 => 40,  233 => 37,  228 => 35,  225 => 34,  220 => 33,  215 => 32,  206 => 31,  157 => 70,  144 => 68,  140 => 67,  127 => 56,  124 => 54,  122 => 43,  119 => 42,  117 => 31,  111 => 27,  102 => 26,  72 => 6,  63 => 5,  45 => 3,  11 => 1,);
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

        <div class=\"col-md-9\">
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
                                <li><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <a href=\"{{ path('article_index', {'category': category.name }) }}\">{{ category.name }}</a> <span class=\"badge\">{{ category.articles|length }}</span> <!--<span class=\"badge\">42</span>--></li>
                            {% endfor %}
                        </ul>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                            Traduire
                        </h3>
                        <div id=\"rss_subscribe\">
                        </div>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-flash\" aria-hidden=\"true\"></span>
                            Articles populaires
                        </h3>
                        <div id=\"rss_subscribe\">
                        </div>
                    </section>
                </div>
                <div class=\"row\">
                    <section class=\"content row container\">
                        <h3 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
                            Newsletter
                        </h3>
                        <div id=\"rss_subscribe\">
                        </div>
                    </section>
                </div>
            </nav>
        </div>

    </div>

</div>
{% endblock %}", "blog.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/blog.html.twig");
    }
}
