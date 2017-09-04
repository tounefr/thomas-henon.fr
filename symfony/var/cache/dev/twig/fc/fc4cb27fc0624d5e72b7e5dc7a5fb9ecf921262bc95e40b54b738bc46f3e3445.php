<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_530f09309f5d0b34ef276f4c31cae7d55c9136260c3aa24628e4deb8c2ec7e34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ec42b70c6a972054d331fbb1796a43809fc3e6c6923bad6ff685245e7a6225c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec42b70c6a972054d331fbb1796a43809fc3e6c6923bad6ff685245e7a6225c->enter($__internal_0ec42b70c6a972054d331fbb1796a43809fc3e6c6923bad6ff685245e7a6225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2e53cc87e5ff4dfd918eca79ebb41394fc8e08c5e8b9f23895c64e2b059ff86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e53cc87e5ff4dfd918eca79ebb41394fc8e08c5e8b9f23895c64e2b059ff86c->enter($__internal_2e53cc87e5ff4dfd918eca79ebb41394fc8e08c5e8b9f23895c64e2b059ff86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec42b70c6a972054d331fbb1796a43809fc3e6c6923bad6ff685245e7a6225c->leave($__internal_0ec42b70c6a972054d331fbb1796a43809fc3e6c6923bad6ff685245e7a6225c_prof);

        
        $__internal_2e53cc87e5ff4dfd918eca79ebb41394fc8e08c5e8b9f23895c64e2b059ff86c->leave($__internal_2e53cc87e5ff4dfd918eca79ebb41394fc8e08c5e8b9f23895c64e2b059ff86c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6995a175c62c967734e5f373dd64cafbf0676d8c1591a7cbd39f21dff35e3783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6995a175c62c967734e5f373dd64cafbf0676d8c1591a7cbd39f21dff35e3783->enter($__internal_6995a175c62c967734e5f373dd64cafbf0676d8c1591a7cbd39f21dff35e3783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f4d3fd8cd6271b5dac2d37bb6e65a60be83c6799a0755271c3271d61b887dfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d3fd8cd6271b5dac2d37bb6e65a60be83c6799a0755271c3271d61b887dfda->enter($__internal_f4d3fd8cd6271b5dac2d37bb6e65a60be83c6799a0755271c3271d61b887dfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f4d3fd8cd6271b5dac2d37bb6e65a60be83c6799a0755271c3271d61b887dfda->leave($__internal_f4d3fd8cd6271b5dac2d37bb6e65a60be83c6799a0755271c3271d61b887dfda_prof);

        
        $__internal_6995a175c62c967734e5f373dd64cafbf0676d8c1591a7cbd39f21dff35e3783->leave($__internal_6995a175c62c967734e5f373dd64cafbf0676d8c1591a7cbd39f21dff35e3783_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
