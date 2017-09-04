<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c843f8767ebe0c7bdaecfec77d4e0cbc248a907b77b0e79af63cc90e29643d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0a243963766abd5cde434d9b6142fc17f3795988ed6aac81955f34d489bdd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a243963766abd5cde434d9b6142fc17f3795988ed6aac81955f34d489bdd52->enter($__internal_c0a243963766abd5cde434d9b6142fc17f3795988ed6aac81955f34d489bdd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7fe645631f1796d4ee5d687e59d2a6c1ffb72f51437eb8b1516e97dad3f28ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe645631f1796d4ee5d687e59d2a6c1ffb72f51437eb8b1516e97dad3f28ace->enter($__internal_7fe645631f1796d4ee5d687e59d2a6c1ffb72f51437eb8b1516e97dad3f28ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a243963766abd5cde434d9b6142fc17f3795988ed6aac81955f34d489bdd52->leave($__internal_c0a243963766abd5cde434d9b6142fc17f3795988ed6aac81955f34d489bdd52_prof);

        
        $__internal_7fe645631f1796d4ee5d687e59d2a6c1ffb72f51437eb8b1516e97dad3f28ace->leave($__internal_7fe645631f1796d4ee5d687e59d2a6c1ffb72f51437eb8b1516e97dad3f28ace_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a47e020089c2872a4cb96ee8ea3c66cee94969f8e786e2d79d5dc4659eb9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a47e020089c2872a4cb96ee8ea3c66cee94969f8e786e2d79d5dc4659eb9b5->enter($__internal_92a47e020089c2872a4cb96ee8ea3c66cee94969f8e786e2d79d5dc4659eb9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb041a904fa52fe5e6b6066af73e02e801d2e487bf58ab7ee993a196a033761f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb041a904fa52fe5e6b6066af73e02e801d2e487bf58ab7ee993a196a033761f->enter($__internal_eb041a904fa52fe5e6b6066af73e02e801d2e487bf58ab7ee993a196a033761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section id=\"contact\" class=\"content row container\">
    <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</h2>

        <div>
            ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 13
            echo "
            ";
        }
        // line 15
        echo "        </div>

        ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        <div>
            ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "        </div>
</section>
";
        
        $__internal_eb041a904fa52fe5e6b6066af73e02e801d2e487bf58ab7ee993a196a033761f->leave($__internal_eb041a904fa52fe5e6b6066af73e02e801d2e487bf58ab7ee993a196a033761f_prof);

        
        $__internal_92a47e020089c2872a4cb96ee8ea3c66cee94969f8e786e2d79d5dc4659eb9b5->leave($__internal_92a47e020089c2872a4cb96ee8ea3c66cee94969f8e786e2d79d5dc4659eb9b5_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03bfe6d9d3577244e95a0f3c4eba4b8389fdbd04e211265e785ed22968779026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bfe6d9d3577244e95a0f3c4eba4b8389fdbd04e211265e785ed22968779026->enter($__internal_03bfe6d9d3577244e95a0f3c4eba4b8389fdbd04e211265e785ed22968779026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcd501ba64f421958f30c5ff62b61f970ac8890a53b2e2e4feccabedbbfccc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd501ba64f421958f30c5ff62b61f970ac8890a53b2e2e4feccabedbbfccc3f->enter($__internal_dcd501ba64f421958f30c5ff62b61f970ac8890a53b2e2e4feccabedbbfccc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "            ";
        
        $__internal_dcd501ba64f421958f30c5ff62b61f970ac8890a53b2e2e4feccabedbbfccc3f->leave($__internal_dcd501ba64f421958f30c5ff62b61f970ac8890a53b2e2e4feccabedbbfccc3f_prof);

        
        $__internal_03bfe6d9d3577244e95a0f3c4eba4b8389fdbd04e211265e785ed22968779026->leave($__internal_03bfe6d9d3577244e95a0f3c4eba4b8389fdbd04e211265e785ed22968779026_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 29,  137 => 28,  125 => 30,  123 => 28,  119 => 26,  116 => 25,  110 => 24,  101 => 21,  96 => 20,  91 => 19,  86 => 18,  84 => 17,  80 => 15,  76 => 13,  70 => 10,  66 => 9,  61 => 8,  59 => 7,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}
<section id=\"contact\" class=\"content row container\">
    <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> {{ 'layout.login'|trans({}, 'FOSUserBundle') }}</h2>

        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}

            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
</section>
{% endblock %}", "@FOSUser/layout.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
