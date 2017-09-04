<?php

/* article/article.html.twig */
class __TwigTemplate_4f7c76f83c0b2f29a9a422ceb6c3c1b4a295c3670ce17558b013c5b7be5e12b2 extends Twig_Template
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
        $__internal_b55d077b396fa1f59028e588296888fd75e8d14b1a1c77ded2a2808ccea0d7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55d077b396fa1f59028e588296888fd75e8d14b1a1c77ded2a2808ccea0d7a0->enter($__internal_b55d077b396fa1f59028e588296888fd75e8d14b1a1c77ded2a2808ccea0d7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $__internal_f4a777196de3c9595d03dc2bccdd622e2a9572e3a0846ddd85397b64eabd0f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a777196de3c9595d03dc2bccdd622e2a9572e3a0846ddd85397b64eabd0f88->enter($__internal_f4a777196de3c9595d03dc2bccdd622e2a9572e3a0846ddd85397b64eabd0f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        // line 1
        echo "<section class=\"content row container\">
    <article>
        <h2>
            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</a>
        </h2>
        <hr />
<!--        <img class=\"article_thumbnail hidden-xs\" width=650 height=150 src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "html", null, true);
        echo "\" />-->
        <p class=\"row article_content text-justify\">
            ";
        // line 10
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array())) > 50) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "article_show"))) {
            // line 11
            echo "                ";
            echo twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), 0, 200);
            echo "...
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
            echo "\" class=\"read_article\">Lire la suite</a>
            ";
        } else {
            // line 14
            echo "                ";
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array());
            echo "
            ";
        }
        // line 16
        echo "        </p>
        <hr />
        <div class=\"row\">
            <div class=\"col-md-6\">
                <span class=\"posted_by\">Posté par <a href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "user", array()), "getUsername", array(), "method"), "html", null, true);
        echo "</a></span>
                ";
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category", array())) > 0)) {
            // line 22
            echo "                    <span class=\"article_category\">dans <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index", array("category" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category", array()), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category", array()), "getName", array(), "method"), "html", null, true);
            echo "</a></span>
                ";
        }
        // line 24
        echo "            </div>
            <div class=\"col-md-6 text-right\">
                <div class=\"row\">
                    <time class=\"date_article\">Posté le ";
        // line 27
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</time>
                </div>
                ";
        // line 29
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getLastUpdate", array(), "method")) {
            // line 30
            echo "                <div class=\"row\">
                    <time class=\"date_article\">Dernière modification le ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getLastUpdate", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
            echo "</time>
                </div>
                ";
        }
        // line 34
        echo "            </div>
        </div>
        ";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "article_show")) {
            // line 37
            echo "        <div id=\"article_social_links\">
            <div class=\"row\">
                <a class=\"twitter-share-button\"
                   href=\"https://twitter.com/intent/tweet?text=";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
            echo "\"
                   data-size=\"default\">
                    Tweet</a>
                <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
                <script type=\"IN/Share\" data-url=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getUri", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
            </div>
        </div>
        ";
        }
        // line 48
        echo "    </article>
</section>";
        
        $__internal_b55d077b396fa1f59028e588296888fd75e8d14b1a1c77ded2a2808ccea0d7a0->leave($__internal_b55d077b396fa1f59028e588296888fd75e8d14b1a1c77ded2a2808ccea0d7a0_prof);

        
        $__internal_f4a777196de3c9595d03dc2bccdd622e2a9572e3a0846ddd85397b64eabd0f88->leave($__internal_f4a777196de3c9595d03dc2bccdd622e2a9572e3a0846ddd85397b64eabd0f88_prof);

    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 48,  123 => 44,  116 => 40,  111 => 37,  109 => 36,  105 => 34,  99 => 31,  96 => 30,  94 => 29,  87 => 27,  82 => 24,  74 => 22,  72 => 21,  68 => 20,  62 => 16,  56 => 14,  51 => 12,  46 => 11,  44 => 10,  39 => 8,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"content row container\">
    <article>
        <h2>
            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span>
            <a href=\"{{ path('article_show', { 'id': article.id, 'slug': article.slug }) }}\">{{ article.title }}</a>
        </h2>
        <hr />
<!--        <img class=\"article_thumbnail hidden-xs\" width=650 height=150 src=\"{{ article.image }}\" />-->
        <p class=\"row article_content text-justify\">
            {% if article.content|raw|length > 50 and app.request.attributes.get('_route') != 'article_show' %}
                {{ article.content|raw|slice(0, 200)|raw }}...
                <a href=\"{{ path('article_show', { 'id': article.id, 'slug': article.slug }) }}\" class=\"read_article\">Lire la suite</a>
            {% else %}
                {{ article.content|raw }}
            {% endif %}
        </p>
        <hr />
        <div class=\"row\">
            <div class=\"col-md-6\">
                <span class=\"posted_by\">Posté par <a href=\"#\">{{ article.user.getUsername() }}</a></span>
                {% if article.category|length > 0 %}
                    <span class=\"article_category\">dans <a href=\"{{ path('article_index', {'category': article.category.getName()}) }}\">{{ article.category.getName() }}</a></span>
                {% endif %}
            </div>
            <div class=\"col-md-6 text-right\">
                <div class=\"row\">
                    <time class=\"date_article\">Posté le {% if article.date %}{{ article.date|date('Y-m-d H:i:s') }}{% endif %}</time>
                </div>
                {% if article.getLastUpdate() %}
                <div class=\"row\">
                    <time class=\"date_article\">Dernière modification le {{ article.getLastUpdate()|date('Y-m-d H:i:s') }}</time>
                </div>
                {% endif %}
            </div>
        </div>
        {% if app.request.attributes.get('_route') == 'article_show' %}
        <div id=\"article_social_links\">
            <div class=\"row\">
                <a class=\"twitter-share-button\"
                   href=\"https://twitter.com/intent/tweet?text={{ article.title }}\"
                   data-size=\"default\">
                    Tweet</a>
                <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
                <script type=\"IN/Share\" data-url=\"{{ app.request.getUri }}\" data-counter=\"right\"></script>
            </div>
        </div>
        {% endif %}
    </article>
</section>", "article/article.html.twig", "/var/www/symfony/app/Resources/views/article/article.html.twig");
    }
}
