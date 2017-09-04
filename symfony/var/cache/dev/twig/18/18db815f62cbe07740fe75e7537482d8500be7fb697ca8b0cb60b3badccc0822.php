<?php

/* contact/new.html.twig */
class __TwigTemplate_59d8a0d26fe83d631bae33f4f9f53619fc3f4275e8168e179163a2b245a64769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "contact/new.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0a753a6c7689efe73f327ee9237f07d1a26a9ed2126d060a1df7f30f31fa547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a753a6c7689efe73f327ee9237f07d1a26a9ed2126d060a1df7f30f31fa547->enter($__internal_a0a753a6c7689efe73f327ee9237f07d1a26a9ed2126d060a1df7f30f31fa547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $__internal_5924c4ec991ffecb54c7e77431328cdc6fbac48221476616123e8469c7066700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5924c4ec991ffecb54c7e77431328cdc6fbac48221476616123e8469c7066700->enter($__internal_5924c4ec991ffecb54c7e77431328cdc6fbac48221476616123e8469c7066700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a753a6c7689efe73f327ee9237f07d1a26a9ed2126d060a1df7f30f31fa547->leave($__internal_a0a753a6c7689efe73f327ee9237f07d1a26a9ed2126d060a1df7f30f31fa547_prof);

        
        $__internal_5924c4ec991ffecb54c7e77431328cdc6fbac48221476616123e8469c7066700->leave($__internal_5924c4ec991ffecb54c7e77431328cdc6fbac48221476616123e8469c7066700_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_520a1788e73da0e19edbf79eab6793cdbab1673746a103941a1149df7728c6d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520a1788e73da0e19edbf79eab6793cdbab1673746a103941a1149df7728c6d8->enter($__internal_520a1788e73da0e19edbf79eab6793cdbab1673746a103941a1149df7728c6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_8c72e1c169a26f915f18a8f54b25baf22d63dda775c0d248f444d1a4ca5ce1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c72e1c169a26f915f18a8f54b25baf22d63dda775c0d248f444d1a4ca5ce1fb->enter($__internal_8c72e1c169a26f915f18a8f54b25baf22d63dda775c0d248f444d1a4ca5ce1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Contact";
        
        $__internal_8c72e1c169a26f915f18a8f54b25baf22d63dda775c0d248f444d1a4ca5ce1fb->leave($__internal_8c72e1c169a26f915f18a8f54b25baf22d63dda775c0d248f444d1a4ca5ce1fb_prof);

        
        $__internal_520a1788e73da0e19edbf79eab6793cdbab1673746a103941a1149df7728c6d8->leave($__internal_520a1788e73da0e19edbf79eab6793cdbab1673746a103941a1149df7728c6d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c31fb46157abde4d6d0f19278e4f3ee52caec6ee089a75c33d9767bd146852de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31fb46157abde4d6d0f19278e4f3ee52caec6ee089a75c33d9767bd146852de->enter($__internal_c31fb46157abde4d6d0f19278e4f3ee52caec6ee089a75c33d9767bd146852de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1964d115b50e163b0f5c9da5c08c49328f8b9dea0fa09f0aaedda4cd9593327f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1964d115b50e163b0f5c9da5c08c49328f8b9dea0fa09f0aaedda4cd9593327f->enter($__internal_1964d115b50e163b0f5c9da5c08c49328f8b9dea0fa09f0aaedda4cd9593327f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section id=\"contact\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Contact</h2>
        <p>Vous recevrez une réponse dans les 24h.</p>
        <br />
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <button type=\"submit\" name=\"form-submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\">  Valider</button>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_1964d115b50e163b0f5c9da5c08c49328f8b9dea0fa09f0aaedda4cd9593327f->leave($__internal_1964d115b50e163b0f5c9da5c08c49328f8b9dea0fa09f0aaedda4cd9593327f_prof);

        
        $__internal_c31fb46157abde4d6d0f19278e4f3ee52caec6ee089a75c33d9767bd146852de->leave($__internal_c31fb46157abde4d6d0f19278e4f3ee52caec6ee089a75c33d9767bd146852de_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block page_title %}Contact{% endblock %}

{% block body %}
    <section id=\"contact\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Contact</h2>
        <p>Vous recevrez une réponse dans les 24h.</p>
        <br />
        {{ form_start(form) }}
        {{ form_widget(form) }}
        <button type=\"submit\" name=\"form-submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\">  Valider</button>
        {{ form_end(form) }}
    </section>
{% endblock %}
", "contact/new.html.twig", "/var/www/symfony/app/Resources/views/contact/new.html.twig");
    }
}
