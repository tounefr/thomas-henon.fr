<?php

/* article/show.html.twig */
class __TwigTemplate_34dfa206d98d2f830f5a821ccfd4d98c4795e57bea5bd01f28d3bbae992f7415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'articles' => array($this, 'block_articles'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7eaece6da655cfba5b47a864820527904929e7765b019635cf6aa50f0ba86f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7eaece6da655cfba5b47a864820527904929e7765b019635cf6aa50f0ba86f0->enter($__internal_c7eaece6da655cfba5b47a864820527904929e7765b019635cf6aa50f0ba86f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_02c1a96a38406a322dd25c9171fd2455806d6a6157e8d8e57401b4f6523b53a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c1a96a38406a322dd25c9171fd2455806d6a6157e8d8e57401b4f6523b53a8->enter($__internal_02c1a96a38406a322dd25c9171fd2455806d6a6157e8d8e57401b4f6523b53a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7eaece6da655cfba5b47a864820527904929e7765b019635cf6aa50f0ba86f0->leave($__internal_c7eaece6da655cfba5b47a864820527904929e7765b019635cf6aa50f0ba86f0_prof);

        
        $__internal_02c1a96a38406a322dd25c9171fd2455806d6a6157e8d8e57401b4f6523b53a8->leave($__internal_02c1a96a38406a322dd25c9171fd2455806d6a6157e8d8e57401b4f6523b53a8_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_321e981c5401afb68d1eb7c3e2ce3275db2295097690500420c0de973f566e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321e981c5401afb68d1eb7c3e2ce3275db2295097690500420c0de973f566e63->enter($__internal_321e981c5401afb68d1eb7c3e2ce3275db2295097690500420c0de973f566e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_4c890f34796f9a9c236991b33a8db522c1cc5e19b082431db262bbfa75589bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c890f34796f9a9c236991b33a8db522c1cc5e19b082431db262bbfa75589bb9->enter($__internal_4c890f34796f9a9c236991b33a8db522c1cc5e19b082431db262bbfa75589bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "getTitle", array(), "method"), "html", null, true);
        
        $__internal_4c890f34796f9a9c236991b33a8db522c1cc5e19b082431db262bbfa75589bb9->leave($__internal_4c890f34796f9a9c236991b33a8db522c1cc5e19b082431db262bbfa75589bb9_prof);

        
        $__internal_321e981c5401afb68d1eb7c3e2ce3275db2295097690500420c0de973f566e63->leave($__internal_321e981c5401afb68d1eb7c3e2ce3275db2295097690500420c0de973f566e63_prof);

    }

    // line 6
    public function block_articles($context, array $blocks = array())
    {
        $__internal_126416a1e5ccdfabbf669f70b23bec5e0a13de0d6150ead2c8e98c1f610245a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126416a1e5ccdfabbf669f70b23bec5e0a13de0d6150ead2c8e98c1f610245a7->enter($__internal_126416a1e5ccdfabbf669f70b23bec5e0a13de0d6150ead2c8e98c1f610245a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_cdc9c71d0cfb410c579cd5e749001493282387d382f5d0da94de194c9390412a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc9c71d0cfb410c579cd5e749001493282387d382f5d0da94de194c9390412a->enter($__internal_cdc9c71d0cfb410c579cd5e749001493282387d382f5d0da94de194c9390412a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        // line 7
        echo "    ";
        $this->loadTemplate("article/article.html.twig", "article/show.html.twig", 7)->display(array_merge($context, array("article" => ($context["article"] ?? $this->getContext($context, "article")))));
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("article/comment/show.html.twig", "article/show.html.twig", 9)->display(array_merge($context, array("comments" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "comments", array()))));
        // line 10
        echo "
";
        
        $__internal_cdc9c71d0cfb410c579cd5e749001493282387d382f5d0da94de194c9390412a->leave($__internal_cdc9c71d0cfb410c579cd5e749001493282387d382f5d0da94de194c9390412a_prof);

        
        $__internal_126416a1e5ccdfabbf669f70b23bec5e0a13de0d6150ead2c8e98c1f610245a7->leave($__internal_126416a1e5ccdfabbf669f70b23bec5e0a13de0d6150ead2c8e98c1f610245a7_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12856f6fc18e2021487bd09b344bafa11d4cced060d988228154e2ad66d302f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12856f6fc18e2021487bd09b344bafa11d4cced060d988228154e2ad66d302f6->enter($__internal_12856f6fc18e2021487bd09b344bafa11d4cced060d988228154e2ad66d302f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5935686a9b64d08da310113705a23f755c49549e138d898157c1e6a1cc2ff748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5935686a9b64d08da310113705a23f755c49549e138d898157c1e6a1cc2ff748->enter($__internal_5935686a9b64d08da310113705a23f755c49549e138d898157c1e6a1cc2ff748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script id=\"dsq-count-scr\" src=\"//blog-toune.disqus.com/count.js\" async></script>
";
        
        $__internal_5935686a9b64d08da310113705a23f755c49549e138d898157c1e6a1cc2ff748->leave($__internal_5935686a9b64d08da310113705a23f755c49549e138d898157c1e6a1cc2ff748_prof);

        
        $__internal_12856f6fc18e2021487bd09b344bafa11d4cced060d988228154e2ad66d302f6->leave($__internal_12856f6fc18e2021487bd09b344bafa11d4cced060d988228154e2ad66d302f6_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 14,  88 => 13,  77 => 10,  75 => 9,  72 => 8,  69 => 7,  60 => 6,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'blog.html.twig' %}


{% block page_title %}{{ article.getTitle() }}{% endblock %}

{% block articles %}
    {% include 'article/article.html.twig' with {'article': article} %}

    {% include 'article/comment/show.html.twig' with {'comments': article.comments} %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script id=\"dsq-count-scr\" src=\"//blog-toune.disqus.com/count.js\" async></script>
{% endblock %}", "article/show.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/article/show.html.twig");
    }
}
