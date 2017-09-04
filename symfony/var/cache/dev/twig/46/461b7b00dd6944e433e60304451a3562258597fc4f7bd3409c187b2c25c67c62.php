<?php

/* default/about.html.twig */
class __TwigTemplate_245bd74abba49ceb1cb7b43df2adb0cd8ffb37c873547baa75a8499dd758db59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/about.html.twig", 1);
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
        $__internal_282761384312c35a328c3bfab9f42d773e4269c91ab50c51095a346586da8fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282761384312c35a328c3bfab9f42d773e4269c91ab50c51095a346586da8fca->enter($__internal_282761384312c35a328c3bfab9f42d773e4269c91ab50c51095a346586da8fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $__internal_71a2911f20856e50053ad2388d89ff79aecf128b16a47a411e3ffafdd802c1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a2911f20856e50053ad2388d89ff79aecf128b16a47a411e3ffafdd802c1ab->enter($__internal_71a2911f20856e50053ad2388d89ff79aecf128b16a47a411e3ffafdd802c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_282761384312c35a328c3bfab9f42d773e4269c91ab50c51095a346586da8fca->leave($__internal_282761384312c35a328c3bfab9f42d773e4269c91ab50c51095a346586da8fca_prof);

        
        $__internal_71a2911f20856e50053ad2388d89ff79aecf128b16a47a411e3ffafdd802c1ab->leave($__internal_71a2911f20856e50053ad2388d89ff79aecf128b16a47a411e3ffafdd802c1ab_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_eed5f78fa4cb0ebc568c61690303628674240c0edae32bcc64f935362c1680a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed5f78fa4cb0ebc568c61690303628674240c0edae32bcc64f935362c1680a7->enter($__internal_eed5f78fa4cb0ebc568c61690303628674240c0edae32bcc64f935362c1680a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_351470a405debff89a28b954c8bdcab4ce83da99bdc8ddc56c4f42a0df21ccf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351470a405debff89a28b954c8bdcab4ce83da99bdc8ddc56c4f42a0df21ccf3->enter($__internal_351470a405debff89a28b954c8bdcab4ce83da99bdc8ddc56c4f42a0df21ccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "A propos";
        
        $__internal_351470a405debff89a28b954c8bdcab4ce83da99bdc8ddc56c4f42a0df21ccf3->leave($__internal_351470a405debff89a28b954c8bdcab4ce83da99bdc8ddc56c4f42a0df21ccf3_prof);

        
        $__internal_eed5f78fa4cb0ebc568c61690303628674240c0edae32bcc64f935362c1680a7->leave($__internal_eed5f78fa4cb0ebc568c61690303628674240c0edae32bcc64f935362c1680a7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80192ab09c89d09b6bc17044ec87d4eed2363005237d2146a50bfcddeea6a822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80192ab09c89d09b6bc17044ec87d4eed2363005237d2146a50bfcddeea6a822->enter($__internal_80192ab09c89d09b6bc17044ec87d4eed2363005237d2146a50bfcddeea6a822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d39a00e74c9a8162b920dc879d130229bf7b1322c1a876ce13696c86ac558de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39a00e74c9a8162b920dc879d130229bf7b1322c1a876ce13696c86ac558de4->enter($__internal_d39a00e74c9a8162b920dc879d130229bf7b1322c1a876ce13696c86ac558de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"about\">

        <div class=\"row\">
            <section class=\"content container\">
                <article>
                    <h2 class=\"row\">
                        <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> A propos
                    </h2>

                    <h3 class=\"text-center\">Hello</h3>
                    <p class=\"row article_content text-center\">
                        Je suis <strong>Thomas HENON</strong> alias <strong>Toune</strong>,<br />développeur et administrateur système vivant en France sur Strasbourg.<br />
                        J'aime la sécurité informatique, administrer des serveurs, le développement.<br />
                        Sur ce blog, je partage diverses astuces et bouts de code qui peuvent sans doutes vous être utile.<br/>
                    </p>
                    <p class=\"text-center\" style=\"display: none;\">
                        <i class=\"fa fa-beer\" aria-hidden=\"true\"></i><br />
                        Si je vous ai rendu service par l'intermédiaire de ce blog, vous pouvez toujours me remercier en me payant une bière:<br />
                        <a class=\"btn_donation\" href=\"https://blockchain.info/address/17pVm7TyRcPyNnQUr4iAWaZbvisPtSJgKW\" target=\"_blank\"><i class=\"fa fa-btc\" aria-hidden=\"true\"></i> Faire un don: 17pVm7TyRcPyNnQUr4iAWaZbvisPtSJgKW</a>
                    </p>
                </article>
            </section>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <section id=\"social_networks\" class=\"content container\">
                    <article>
                        <h2 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Réseaux sociaux
                        </h2>
                        <div class=\"article_content\">
                            <div id=\"social_networks\" class=\"row\">
                                <ul class=\"col-xs-6\">
                                    <a href=\"https://fr.linkedin.com/in/thomas-henon-773b94b3\" target=\"_blank\"><li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i> LinkedIn</li></a>
                                    <a href=\"#\"><li><i class=\"fa fa-telegram\" aria-hidden=\"true\"></i> Télégram</li></a>
                                    <a href=\"https://github.com/tounefr\" target=\"_blank\"><li><i class=\"fa fa-github\" aria-hidden=\"true\"></i> Github</li></a>
                                    <a href=\"https://twitter.com/tounefr\" target=\"_blank\"><li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> Twitter</li></a>
                                </ul>
                                <ul class=\"col-xs-6\">
                                    <a href=\"https://hostux.social/@tounefr\" target=\"_blank\"><li><i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i> Mastodon</li></a>
                                    <a target=\"_blank\" href=\"https://keybase.io/tounefr/pgp_keys.asc?fingerprint=b58c5f336ef2ce39af107b2e927c823f25b3b8f8\"><li><i class=\"fa fa-key\" aria-hidden=\"true\"></i> Clé PGP</li></a>
                                    <a href=\"mailto:contact@toune.fr\"><li><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> Flux RSS</li></a>
                                    <a href=\"mailto:contact@toune.fr\"><li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Email</li></a>
                                </ul>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <section id=\"last_articles\" class=\"content container\">
                    <article>
                        <h2 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Derniers articles
                        </h2>
                        <div>
                            <ul>
                                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? $this->getContext($context, "lastArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 65
            echo "                                    <li class=\"row\">
                                        <div class=\"col-md-10 col-xs-12\"><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()), "slug" => $this->getAttribute($context["article"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></div>
                                        <div class=\"col-md-2 col-xs-12\"><time>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</time></div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                            </ul>
                        </div>
                    </article>
                </section>
            </div>
        </div>

    </div>

";
        
        $__internal_d39a00e74c9a8162b920dc879d130229bf7b1322c1a876ce13696c86ac558de4->leave($__internal_d39a00e74c9a8162b920dc879d130229bf7b1322c1a876ce13696c86ac558de4_prof);

        
        $__internal_80192ab09c89d09b6bc17044ec87d4eed2363005237d2146a50bfcddeea6a822->leave($__internal_80192ab09c89d09b6bc17044ec87d4eed2363005237d2146a50bfcddeea6a822_prof);

    }

    public function getTemplateName()
    {
        return "default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 70,  141 => 67,  135 => 66,  132 => 65,  128 => 64,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block page_title %}A propos{% endblock %}

{% block body %}
    <div id=\"about\">

        <div class=\"row\">
            <section class=\"content container\">
                <article>
                    <h2 class=\"row\">
                        <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> A propos
                    </h2>

                    <h3 class=\"text-center\">Hello</h3>
                    <p class=\"row article_content text-center\">
                        Je suis <strong>Thomas HENON</strong> alias <strong>Toune</strong>,<br />développeur et administrateur système vivant en France sur Strasbourg.<br />
                        J'aime la sécurité informatique, administrer des serveurs, le développement.<br />
                        Sur ce blog, je partage diverses astuces et bouts de code qui peuvent sans doutes vous être utile.<br/>
                    </p>
                    <p class=\"text-center\" style=\"display: none;\">
                        <i class=\"fa fa-beer\" aria-hidden=\"true\"></i><br />
                        Si je vous ai rendu service par l'intermédiaire de ce blog, vous pouvez toujours me remercier en me payant une bière:<br />
                        <a class=\"btn_donation\" href=\"https://blockchain.info/address/17pVm7TyRcPyNnQUr4iAWaZbvisPtSJgKW\" target=\"_blank\"><i class=\"fa fa-btc\" aria-hidden=\"true\"></i> Faire un don: 17pVm7TyRcPyNnQUr4iAWaZbvisPtSJgKW</a>
                    </p>
                </article>
            </section>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <section id=\"social_networks\" class=\"content container\">
                    <article>
                        <h2 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Réseaux sociaux
                        </h2>
                        <div class=\"article_content\">
                            <div id=\"social_networks\" class=\"row\">
                                <ul class=\"col-xs-6\">
                                    <a href=\"https://fr.linkedin.com/in/thomas-henon-773b94b3\" target=\"_blank\"><li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i> LinkedIn</li></a>
                                    <a href=\"#\"><li><i class=\"fa fa-telegram\" aria-hidden=\"true\"></i> Télégram</li></a>
                                    <a href=\"https://github.com/tounefr\" target=\"_blank\"><li><i class=\"fa fa-github\" aria-hidden=\"true\"></i> Github</li></a>
                                    <a href=\"https://twitter.com/tounefr\" target=\"_blank\"><li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> Twitter</li></a>
                                </ul>
                                <ul class=\"col-xs-6\">
                                    <a href=\"https://hostux.social/@tounefr\" target=\"_blank\"><li><i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i> Mastodon</li></a>
                                    <a target=\"_blank\" href=\"https://keybase.io/tounefr/pgp_keys.asc?fingerprint=b58c5f336ef2ce39af107b2e927c823f25b3b8f8\"><li><i class=\"fa fa-key\" aria-hidden=\"true\"></i> Clé PGP</li></a>
                                    <a href=\"mailto:contact@toune.fr\"><li><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> Flux RSS</li></a>
                                    <a href=\"mailto:contact@toune.fr\"><li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Email</li></a>
                                </ul>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <section id=\"last_articles\" class=\"content container\">
                    <article>
                        <h2 class=\"row\">
                            <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Derniers articles
                        </h2>
                        <div>
                            <ul>
                                {%  for article in lastArticles %}
                                    <li class=\"row\">
                                        <div class=\"col-md-10 col-xs-12\"><a href=\"{{ path('article_show', { 'id': article.id, 'slug': article.slug }) }}\">{{ article.title }}</a></div>
                                        <div class=\"col-md-2 col-xs-12\"><time>{{  article.date|date('d/m/Y') }}</time></div>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </article>
                </section>
            </div>
        </div>

    </div>

{% endblock %}
", "default/about.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/default/about.html.twig");
    }
}
