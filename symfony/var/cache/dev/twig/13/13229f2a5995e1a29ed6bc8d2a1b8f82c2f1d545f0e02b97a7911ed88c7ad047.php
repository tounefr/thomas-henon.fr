<?php

/* article/comment/comment.html.twig */
class __TwigTemplate_204af2a27d21c9b15f770827f6e0e31d3f817f5ee4a439c09ab54af5f267318a extends Twig_Template
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
        $__internal_ac96d35fa6a83ed873fa5effdcf5afe352ed07788bddae6bb7150d08754ea8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac96d35fa6a83ed873fa5effdcf5afe352ed07788bddae6bb7150d08754ea8e3->enter($__internal_ac96d35fa6a83ed873fa5effdcf5afe352ed07788bddae6bb7150d08754ea8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/comment/comment.html.twig"));

        $__internal_f1e02e006388eac94c59ec7895239cd3755bbf0f9ff0c79a875e2f3e9d823328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e02e006388eac94c59ec7895239cd3755bbf0f9ff0c79a875e2f3e9d823328->enter($__internal_f1e02e006388eac94c59ec7895239cd3755bbf0f9ff0c79a875e2f3e9d823328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/comment/comment.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter(($context["comments"] ?? $this->getContext($context, "comments")))));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["comment"], "getIsApproved", array(), "method")) {
                // line 3
                echo "        <section id=\"comment";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" class=\"content row container\">
            <div class=\"row\">
                <div class=\"comment_head\">
                    <h4 class=\"\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getPseudo", array(), "method"), "html", null, true);
                echo "</h4>
                    <time><span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span> ";
                // line 7
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</time>
                </div>
                <p>
                    <img src=\"/bundles/app/images/guest.png\" alt=\"guest picture\" />
                    ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getComment", array(), "method"), "html", null, true);
                echo "
                </p>
            </div>
        </section>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ac96d35fa6a83ed873fa5effdcf5afe352ed07788bddae6bb7150d08754ea8e3->leave($__internal_ac96d35fa6a83ed873fa5effdcf5afe352ed07788bddae6bb7150d08754ea8e3_prof);

        
        $__internal_f1e02e006388eac94c59ec7895239cd3755bbf0f9ff0c79a875e2f3e9d823328->leave($__internal_f1e02e006388eac94c59ec7895239cd3755bbf0f9ff0c79a875e2f3e9d823328_prof);

    }

    public function getTemplateName()
    {
        return "article/comment/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  43 => 7,  39 => 6,  32 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for comment in comments|sort|reverse %}
    {% if comment.getIsApproved() %}
        <section id=\"comment{{ comment.id }}\" class=\"content row container\">
            <div class=\"row\">
                <div class=\"comment_head\">
                    <h4 class=\"\">{{ comment.getPseudo() }}</h4>
                    <time><span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span> {{ comment.date|date('Y-m-d H:i:s') }}</time>
                </div>
                <p>
                    <img src=\"/bundles/app/images/guest.png\" alt=\"guest picture\" />
                    {{ comment.getComment() }}
                </p>
            </div>
        </section>
    {% endif %}
{% endfor %}", "article/comment/comment.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/article/comment/comment.html.twig");
    }
}
