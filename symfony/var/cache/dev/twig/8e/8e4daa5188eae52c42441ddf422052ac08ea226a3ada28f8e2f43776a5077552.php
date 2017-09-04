<?php

/* contact/new.html.twig */
class __TwigTemplate_61ecd5c60c91168c0b2d25f438515b22409a52a88ee5755ce4f52493c0be3d38 extends Twig_Template
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
        $__internal_46c1e458161271f2d650533b59aedd7289ce1596e6a105e7046f41ca651d4b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c1e458161271f2d650533b59aedd7289ce1596e6a105e7046f41ca651d4b5c->enter($__internal_46c1e458161271f2d650533b59aedd7289ce1596e6a105e7046f41ca651d4b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $__internal_c8c59c49e9dfebede388e4509b2f735e0a5716d132a48988f9a066ad5699c383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c59c49e9dfebede388e4509b2f735e0a5716d132a48988f9a066ad5699c383->enter($__internal_c8c59c49e9dfebede388e4509b2f735e0a5716d132a48988f9a066ad5699c383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c1e458161271f2d650533b59aedd7289ce1596e6a105e7046f41ca651d4b5c->leave($__internal_46c1e458161271f2d650533b59aedd7289ce1596e6a105e7046f41ca651d4b5c_prof);

        
        $__internal_c8c59c49e9dfebede388e4509b2f735e0a5716d132a48988f9a066ad5699c383->leave($__internal_c8c59c49e9dfebede388e4509b2f735e0a5716d132a48988f9a066ad5699c383_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7937e9a89685c868da502cc562f65bc882219818f359d20db927dd9bb9e4425d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7937e9a89685c868da502cc562f65bc882219818f359d20db927dd9bb9e4425d->enter($__internal_7937e9a89685c868da502cc562f65bc882219818f359d20db927dd9bb9e4425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_82d7d0eaef944fd6ae1420b7988e9219f9986d95f8596a243adb715c40ae22ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d7d0eaef944fd6ae1420b7988e9219f9986d95f8596a243adb715c40ae22ca->enter($__internal_82d7d0eaef944fd6ae1420b7988e9219f9986d95f8596a243adb715c40ae22ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Contact";
        
        $__internal_82d7d0eaef944fd6ae1420b7988e9219f9986d95f8596a243adb715c40ae22ca->leave($__internal_82d7d0eaef944fd6ae1420b7988e9219f9986d95f8596a243adb715c40ae22ca_prof);

        
        $__internal_7937e9a89685c868da502cc562f65bc882219818f359d20db927dd9bb9e4425d->leave($__internal_7937e9a89685c868da502cc562f65bc882219818f359d20db927dd9bb9e4425d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a69180acebd6a91f403360b1420eeb7e3a61ea1fd899a45eebdd909ed2c49dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a69180acebd6a91f403360b1420eeb7e3a61ea1fd899a45eebdd909ed2c49dc->enter($__internal_4a69180acebd6a91f403360b1420eeb7e3a61ea1fd899a45eebdd909ed2c49dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d24853f798b6c0eae24c2ac2bd5c83d27c726f3c03128e7bc15a804885b1342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d24853f798b6c0eae24c2ac2bd5c83d27c726f3c03128e7bc15a804885b1342->enter($__internal_0d24853f798b6c0eae24c2ac2bd5c83d27c726f3c03128e7bc15a804885b1342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section id=\"contact\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Contact</h2>
        <p>Vous recevrez une réponse dans les 24h.</p>
        <br />
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <button type=\"submit\" name=\"form-submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\">  Valider</button>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_0d24853f798b6c0eae24c2ac2bd5c83d27c726f3c03128e7bc15a804885b1342->leave($__internal_0d24853f798b6c0eae24c2ac2bd5c83d27c726f3c03128e7bc15a804885b1342_prof);

        
        $__internal_4a69180acebd6a91f403360b1420eeb7e3a61ea1fd899a45eebdd909ed2c49dc->leave($__internal_4a69180acebd6a91f403360b1420eeb7e3a61ea1fd899a45eebdd909ed2c49dc_prof);

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
", "contact/new.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/contact/new.html.twig");
    }
}
