<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_a990e068018c2f7494c1e8a49f84ebb0c4d25508963b1e39a4a5097b4cc3d9ac extends Twig_Template
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
        $__internal_155875b2a6315accec25e0d91d209d3773955651183e15474973bf5c725571eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155875b2a6315accec25e0d91d209d3773955651183e15474973bf5c725571eb->enter($__internal_155875b2a6315accec25e0d91d209d3773955651183e15474973bf5c725571eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_e6c7dcd5ec44c0950d0bc83c0efdcf3a89b78c0164bda9d4493223780fc54380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c7dcd5ec44c0950d0bc83c0efdcf3a89b78c0164bda9d4493223780fc54380->enter($__internal_e6c7dcd5ec44c0950d0bc83c0efdcf3a89b78c0164bda9d4493223780fc54380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <div class=\"form-group\">
        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" required=\"required\" />

    </div>

    <div class=\"form-group\">
        <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" />

    </div>

    <div class=\"checkbox\">
        <label for=\"remember_me\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>

    </div>

    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\">  ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</span></button>

</form>
";
        
        $__internal_155875b2a6315accec25e0d91d209d3773955651183e15474973bf5c725571eb->leave($__internal_155875b2a6315accec25e0d91d209d3773955651183e15474973bf5c725571eb_prof);

        
        $__internal_e6c7dcd5ec44c0950d0bc83c0efdcf3a89b78c0164bda9d4493223780fc54380->leave($__internal_e6c7dcd5ec44c0950d0bc83c0efdcf3a89b78c0164bda9d4493223780fc54380_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  77 => 26,  67 => 19,  59 => 14,  55 => 13,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" required=\"required\" />

    </div>

    <div class=\"form-group\">
        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" />

    </div>

    <div class=\"checkbox\">
        <label for=\"remember_me\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> {{ 'security.login.remember_me'|trans }}
        </label>

    </div>

    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\">  {{ 'security.login.submit'|trans }}</span></button>

</form>
", "@FOSUser/Security/login_content.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
