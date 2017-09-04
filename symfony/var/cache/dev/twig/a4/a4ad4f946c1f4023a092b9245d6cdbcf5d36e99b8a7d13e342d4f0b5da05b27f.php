<?php

/* default/about.html.twig */
class __TwigTemplate_c1767a4547c48ef99c6c8db3afab9ee3e4fa03d601a134af175dbaae3fbb6b99 extends Twig_Template
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
        $__internal_0fefed858cf20ec144f4cc988b012b3db3273de2b4533f056aaec0938f3c4dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fefed858cf20ec144f4cc988b012b3db3273de2b4533f056aaec0938f3c4dc9->enter($__internal_0fefed858cf20ec144f4cc988b012b3db3273de2b4533f056aaec0938f3c4dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $__internal_73973ab962b0e7ce45f8d9a6524cbfb57ea31931939f225c4f4e7e52e9ba47fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73973ab962b0e7ce45f8d9a6524cbfb57ea31931939f225c4f4e7e52e9ba47fd->enter($__internal_73973ab962b0e7ce45f8d9a6524cbfb57ea31931939f225c4f4e7e52e9ba47fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fefed858cf20ec144f4cc988b012b3db3273de2b4533f056aaec0938f3c4dc9->leave($__internal_0fefed858cf20ec144f4cc988b012b3db3273de2b4533f056aaec0938f3c4dc9_prof);

        
        $__internal_73973ab962b0e7ce45f8d9a6524cbfb57ea31931939f225c4f4e7e52e9ba47fd->leave($__internal_73973ab962b0e7ce45f8d9a6524cbfb57ea31931939f225c4f4e7e52e9ba47fd_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_80deb1505b3d0d46edde0935d448d4882000cdc3c753a5ee921d230814917dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80deb1505b3d0d46edde0935d448d4882000cdc3c753a5ee921d230814917dcb->enter($__internal_80deb1505b3d0d46edde0935d448d4882000cdc3c753a5ee921d230814917dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e92d3d725f29afdcc937c0fa6eff8c045828b3b58124e97b0b182c2b37d23c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92d3d725f29afdcc937c0fa6eff8c045828b3b58124e97b0b182c2b37d23c75->enter($__internal_e92d3d725f29afdcc937c0fa6eff8c045828b3b58124e97b0b182c2b37d23c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "A propos";
        
        $__internal_e92d3d725f29afdcc937c0fa6eff8c045828b3b58124e97b0b182c2b37d23c75->leave($__internal_e92d3d725f29afdcc937c0fa6eff8c045828b3b58124e97b0b182c2b37d23c75_prof);

        
        $__internal_80deb1505b3d0d46edde0935d448d4882000cdc3c753a5ee921d230814917dcb->leave($__internal_80deb1505b3d0d46edde0935d448d4882000cdc3c753a5ee921d230814917dcb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f8d91a6050342583de0a78f89afe3003938b6a13287201ee3ed560b154ba110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8d91a6050342583de0a78f89afe3003938b6a13287201ee3ed560b154ba110->enter($__internal_7f8d91a6050342583de0a78f89afe3003938b6a13287201ee3ed560b154ba110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db634f8c3e3653ad216dad38fe891ecbe9ecda8c03fbc2e625253ae1232fc8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db634f8c3e3653ad216dad38fe891ecbe9ecda8c03fbc2e625253ae1232fc8f0->enter($__internal_db634f8c3e3653ad216dad38fe891ecbe9ecda8c03fbc2e625253ae1232fc8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"about\">
        <section class=\"content row container\">
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

        <div class=\"col-xs-6\">
            <section class=\"content row container\">
                <article>
                    <h2 class=\"row\">
                        <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Réseaux sociaux
                    </h2>
                    <div class=\"article_content\">
                        <p class=\"text-left\">Vous pouvez me suivre sur les réseaux sociaux</p>
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
        <div class=\"col-xs-6\">
            <section class=\"content row container\">
                <article>
                    <h2 class=\"row\">
                        <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Derniers articles
                    </h2>
                    <div id=\"\">
                        <ul>
                            <li><a href=\"\">Article</a></li>
                        </ul>
                    </div>
                </article>
            </section>
        </div>



    </div>

";
        
        $__internal_db634f8c3e3653ad216dad38fe891ecbe9ecda8c03fbc2e625253ae1232fc8f0->leave($__internal_db634f8c3e3653ad216dad38fe891ecbe9ecda8c03fbc2e625253ae1232fc8f0_prof);

        
        $__internal_7f8d91a6050342583de0a78f89afe3003938b6a13287201ee3ed560b154ba110->leave($__internal_7f8d91a6050342583de0a78f89afe3003938b6a13287201ee3ed560b154ba110_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
        <section class=\"content row container\">
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

        <div class=\"col-xs-6\">
            <section class=\"content row container\">
                <article>
                    <h2 class=\"row\">
                        <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Réseaux sociaux
                    </h2>
                    <div class=\"article_content\">
                        <p class=\"text-left\">Vous pouvez me suivre sur les réseaux sociaux</p>
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
        <div class=\"col-xs-6\">
            <section class=\"content row container\">
                <article>
                    <h2 class=\"row\">
                        <span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Derniers articles
                    </h2>
                    <div id=\"\">
                        <ul>
                            <li><a href=\"\">Article</a></li>
                        </ul>
                    </div>
                </article>
            </section>
        </div>



    </div>

{% endblock %}
", "default/about.html.twig", "/var/www/symfony/app/Resources/views/default/about.html.twig");
    }
}
