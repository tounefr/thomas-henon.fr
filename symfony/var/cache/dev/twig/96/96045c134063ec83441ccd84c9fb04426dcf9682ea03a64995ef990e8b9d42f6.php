<?php

/* article/index.html.twig */
class __TwigTemplate_6f6f433c35cac849446a47bd5e58aa1858e52ace5114f6c9a612edc3b5a65215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog.html.twig", "article/index.html.twig", 1);
        $this->blocks = array(
            'articles' => array($this, 'block_articles'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b55c6862e28bfedf11d2acfe751e7a3d356dc51ee575fa3e8838d16e02d890e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55c6862e28bfedf11d2acfe751e7a3d356dc51ee575fa3e8838d16e02d890e0->enter($__internal_b55c6862e28bfedf11d2acfe751e7a3d356dc51ee575fa3e8838d16e02d890e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_8a3dee80ad2b58c4182ea7de74788eda2a62f1acf880871e6f73969dc6503cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3dee80ad2b58c4182ea7de74788eda2a62f1acf880871e6f73969dc6503cea->enter($__internal_8a3dee80ad2b58c4182ea7de74788eda2a62f1acf880871e6f73969dc6503cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b55c6862e28bfedf11d2acfe751e7a3d356dc51ee575fa3e8838d16e02d890e0->leave($__internal_b55c6862e28bfedf11d2acfe751e7a3d356dc51ee575fa3e8838d16e02d890e0_prof);

        
        $__internal_8a3dee80ad2b58c4182ea7de74788eda2a62f1acf880871e6f73969dc6503cea->leave($__internal_8a3dee80ad2b58c4182ea7de74788eda2a62f1acf880871e6f73969dc6503cea_prof);

    }

    // line 3
    public function block_articles($context, array $blocks = array())
    {
        $__internal_0d127bf24f8c3c6da2a189eb75a9225533887714a0d79c95a8cec7f9dfa63269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d127bf24f8c3c6da2a189eb75a9225533887714a0d79c95a8cec7f9dfa63269->enter($__internal_0d127bf24f8c3c6da2a189eb75a9225533887714a0d79c95a8cec7f9dfa63269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_a8689af65ee7268ffd214c75460d66e918c7c886839bac849bbd8f670e78f868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8689af65ee7268ffd214c75460d66e918c7c886839bac849bbd8f670e78f868->enter($__internal_a8689af65ee7268ffd214c75460d66e918c7c886839bac849bbd8f670e78f868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        // line 4
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) == 0)) {
            // line 5
            echo "            <h3 class=\"text-center\">Aucun articles</h3>
        ";
        } else {
            // line 7
            echo "
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 9
                echo "                ";
                $this->loadTemplate("article/article.html.twig", "article/index.html.twig", 9)->display(array_merge($context, array("article" => $context["article"])));
                // line 10
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
            ";
            // line 12
            $this->displayBlock('pagination', $context, $blocks);
            // line 82
            echo "
        ";
        }
        
        $__internal_a8689af65ee7268ffd214c75460d66e918c7c886839bac849bbd8f670e78f868->leave($__internal_a8689af65ee7268ffd214c75460d66e918c7c886839bac849bbd8f670e78f868_prof);

        
        $__internal_0d127bf24f8c3c6da2a189eb75a9225533887714a0d79c95a8cec7f9dfa63269->leave($__internal_0d127bf24f8c3c6da2a189eb75a9225533887714a0d79c95a8cec7f9dfa63269_prof);

    }

    // line 12
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_a89f574526467134b0835015123a9c6f1d51460775cdea8bf167cf80e071f025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89f574526467134b0835015123a9c6f1d51460775cdea8bf167cf80e071f025->enter($__internal_a89f574526467134b0835015123a9c6f1d51460775cdea8bf167cf80e071f025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_afffe9a1a6f3505723ffbac64a0be1a3d118a0d5bfa43314111b99fc61a328d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afffe9a1a6f3505723ffbac64a0be1a3d118a0d5bfa43314111b99fc61a328d4->enter($__internal_afffe9a1a6f3505723ffbac64a0be1a3d118a0d5bfa43314111b99fc61a328d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 13
        echo "
                ";
        // line 14
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()) > 0)) {
            // line 15
            echo "                    <nav aria-label=\"Page navigation\" class=\"text-center\">
                        <ul class=\"pagination\">
                            ";
            // line 17
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
                // line 18
                echo "                                <li>
                                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => 1)))), "html", null, true);
                echo "\">
                                        <<
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(                // line 25
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1))))), "html", null, true);
                echo "\">
                                        <
                                    </a>
                                </li>
                            ";
            }
            // line 30
            echo "
                            ";
            // line 32
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 33
                echo "                                <li ";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $context["p"])))), "html", null, true);
                echo "\">
                                        ";
                // line 35
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                                    </a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
                            ";
            // line 40
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))) {
                // line 41
                echo "                                <li>
                                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(                // line 43
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1))))), "html", null, true);
                echo "\">
                                        >
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(                // line 49
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))))), "html", null, true);
                echo "\">
                                        >>
                                    </a>
                                </li>
                            ";
            }
            // line 54
            echo "                        </ul>
                    </nav>
                ";
        }
        // line 57
        echo "

                <!--
            <nav aria-label=\"Page navigation\" class=\"text-center\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"#\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                        </a>
                    </li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li>
                        <a href=\"#\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            -->

            ";
        
        $__internal_afffe9a1a6f3505723ffbac64a0be1a3d118a0d5bfa43314111b99fc61a328d4->leave($__internal_afffe9a1a6f3505723ffbac64a0be1a3d118a0d5bfa43314111b99fc61a328d4_prof);

        
        $__internal_a89f574526467134b0835015123a9c6f1d51460775cdea8bf167cf80e071f025->leave($__internal_a89f574526467134b0835015123a9c6f1d51460775cdea8bf167cf80e071f025_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 57,  206 => 54,  198 => 49,  197 => 48,  189 => 43,  188 => 42,  185 => 41,  183 => 40,  180 => 39,  170 => 35,  166 => 34,  159 => 33,  154 => 32,  151 => 30,  143 => 25,  142 => 24,  134 => 19,  131 => 18,  129 => 17,  125 => 15,  123 => 14,  120 => 13,  111 => 12,  99 => 82,  97 => 12,  94 => 11,  80 => 10,  77 => 9,  60 => 8,  57 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block articles %}
        {% if articles|length == 0 %}
            <h3 class=\"text-center\">Aucun articles</h3>
        {% else %}

            {% for article in articles %}
                {% include 'article/article.html.twig' with {'article': article} %}
            {% endfor %}

            {% block pagination %}

                {% if pagination.nbPages > 0 %}
                    <nav aria-label=\"Page navigation\" class=\"text-center\">
                        <ul class=\"pagination\">
                            {% if pagination.page > 1 %}
                                <li>
                                    <a href=\"{{ path(pagination.nomRoute, app.request.query.all|merge(pagination.paramsRoute|merge({'page': 1}))) }}\">
                                        <<
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path(pagination.nomRoute,
                                    app.request.query.all|merge(pagination.paramsRoute|merge({'page': pagination.page-1}))) }}\">
                                        <
                                    </a>
                                </li>
                            {% endif %}

                            {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
                            {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}
                                <li {% if p == pagination.page %}class=\"active\"{% endif %}>
                                    <a href=\"{{ path(pagination.nomRoute, app.request.query.all|merge(pagination.paramsRoute|merge({'page': p}))) }}\">
                                        {{ p }}
                                    </a>
                                </li>
                            {% endfor %}

                            {% if pagination.page < pagination.nbPages %}
                                <li>
                                    <a href=\"{{ path(pagination.nomRoute,
                                    app.request.query.all|merge(pagination.paramsRoute|merge({'page': pagination.page+1}))) }}\">
                                        >
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path(pagination.nomRoute,
                                    app.request.query.all|merge(pagination.paramsRoute|merge({'page': pagination.nbPages}))) }}\">
                                        >>
                                    </a>
                                </li>
                            {% endif %}
                        </ul>
                    </nav>
                {% endif %}


                <!--
            <nav aria-label=\"Page navigation\" class=\"text-center\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"#\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                        </a>
                    </li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li>
                        <a href=\"#\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            -->

            {% endblock %}

        {% endif %}
{% endblock %}", "article/index.html.twig", "/var/www/symfony/app/Resources/views/article/index.html.twig");
    }
}
