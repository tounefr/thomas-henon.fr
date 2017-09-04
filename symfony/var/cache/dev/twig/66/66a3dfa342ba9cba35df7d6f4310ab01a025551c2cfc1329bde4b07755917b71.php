<?php

/* emails/blog/new_comment.html.twig */
class __TwigTemplate_852513e5d0acd5ab31dbeb6a72c7d16e14822e2fff3106bb419914ee7f3eb6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("emails/layout.html.twig", "emails/blog/new_comment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "emails/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7df6408230975304e1124f4e11197a2e0e0c7724ad18b372335b4c88bbc9b72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df6408230975304e1124f4e11197a2e0e0c7724ad18b372335b4c88bbc9b72b->enter($__internal_7df6408230975304e1124f4e11197a2e0e0c7724ad18b372335b4c88bbc9b72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/blog/new_comment.html.twig"));

        $__internal_4de85209fc166d3d6fdd398c654f200691fd1c8572fcd28d91581792f02ab71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de85209fc166d3d6fdd398c654f200691fd1c8572fcd28d91581792f02ab71f->enter($__internal_4de85209fc166d3d6fdd398c654f200691fd1c8572fcd28d91581792f02ab71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/blog/new_comment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df6408230975304e1124f4e11197a2e0e0c7724ad18b372335b4c88bbc9b72b->leave($__internal_7df6408230975304e1124f4e11197a2e0e0c7724ad18b372335b4c88bbc9b72b_prof);

        
        $__internal_4de85209fc166d3d6fdd398c654f200691fd1c8572fcd28d91581792f02ab71f->leave($__internal_4de85209fc166d3d6fdd398c654f200691fd1c8572fcd28d91581792f02ab71f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f975c870e23ea09376d76a509580dc766d4ff31cc2162a13fb1a0f20eb3ae87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f975c870e23ea09376d76a509580dc766d4ff31cc2162a13fb1a0f20eb3ae87->enter($__internal_7f975c870e23ea09376d76a509580dc766d4ff31cc2162a13fb1a0f20eb3ae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27a6eedd30fc64e8d5eb0472624c6929aaa335f287fb8d56ae5e06e9acbf4d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a6eedd30fc64e8d5eb0472624c6929aaa335f287fb8d56ae5e06e9acbf4d65->enter($__internal_27a6eedd30fc64e8d5eb0472624c6929aaa335f287fb8d56ae5e06e9acbf4d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Pseudo: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "getPseudo", array(), "method"), "html", null, true);
        echo "</p>
    <p>Email: <";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "getEmail", array(), "method"), "html", null, true);
        echo "/p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "getComment", array(), "method"), "html", null, true);
        echo "</p>
";
        
        $__internal_27a6eedd30fc64e8d5eb0472624c6929aaa335f287fb8d56ae5e06e9acbf4d65->leave($__internal_27a6eedd30fc64e8d5eb0472624c6929aaa335f287fb8d56ae5e06e9acbf4d65_prof);

        
        $__internal_7f975c870e23ea09376d76a509580dc766d4ff31cc2162a13fb1a0f20eb3ae87->leave($__internal_7f975c870e23ea09376d76a509580dc766d4ff31cc2162a13fb1a0f20eb3ae87_prof);

    }

    public function getTemplateName()
    {
        return "emails/blog/new_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'emails/layout.html.twig' %}

{% block body %}
    <p>Pseudo: {{ comment.getPseudo() }}</p>
    <p>Email: <{{ comment.getEmail() }}/p>
    <p>{{ comment.getComment() }}</p>
{% endblock %}", "emails/blog/new_comment.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/emails/blog/new_comment.html.twig");
    }
}
