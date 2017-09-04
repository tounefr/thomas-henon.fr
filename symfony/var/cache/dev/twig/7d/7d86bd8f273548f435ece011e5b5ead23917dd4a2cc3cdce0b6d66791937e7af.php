<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_cd71f3e160c14449ea2b04fea00b8ac183539ce204804ef7d2b8897c36c95d23 extends Twig_Template
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
        $__internal_4cfc4c8d4c76ae4bd59149d2170d762aed8a886b41e5ac02d6ed0a05e7a2230f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfc4c8d4c76ae4bd59149d2170d762aed8a886b41e5ac02d6ed0a05e7a2230f->enter($__internal_4cfc4c8d4c76ae4bd59149d2170d762aed8a886b41e5ac02d6ed0a05e7a2230f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_6b56e65e82fb02f470f7234b7e4280d3ea29f0ddc6aea98aa726315673f8ba46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b56e65e82fb02f470f7234b7e4280d3ea29f0ddc6aea98aa726315673f8ba46->enter($__internal_6b56e65e82fb02f470f7234b7e4280d3ea29f0ddc6aea98aa726315673f8ba46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_4cfc4c8d4c76ae4bd59149d2170d762aed8a886b41e5ac02d6ed0a05e7a2230f->leave($__internal_4cfc4c8d4c76ae4bd59149d2170d762aed8a886b41e5ac02d6ed0a05e7a2230f_prof);

        
        $__internal_6b56e65e82fb02f470f7234b7e4280d3ea29f0ddc6aea98aa726315673f8ba46->leave($__internal_6b56e65e82fb02f470f7234b7e4280d3ea29f0ddc6aea98aa726315673f8ba46_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_null.html.twig");
    }
}
