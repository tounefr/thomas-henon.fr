<?php

/* default/cv.html.twig */
class __TwigTemplate_a48555daa018f07f9211c43170f504941405df1e5ee4fd01cfc2f2749afa6a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/cv.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0294537a9c8765250b67d54a82c34b854bc7aed97528f0aac10709cd7a94ddea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0294537a9c8765250b67d54a82c34b854bc7aed97528f0aac10709cd7a94ddea->enter($__internal_0294537a9c8765250b67d54a82c34b854bc7aed97528f0aac10709cd7a94ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/cv.html.twig"));

        $__internal_438522b862099b9b82165ca1bf317902fe929afb012545228a6fcd0f420de1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438522b862099b9b82165ca1bf317902fe929afb012545228a6fcd0f420de1f2->enter($__internal_438522b862099b9b82165ca1bf317902fe929afb012545228a6fcd0f420de1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0294537a9c8765250b67d54a82c34b854bc7aed97528f0aac10709cd7a94ddea->leave($__internal_0294537a9c8765250b67d54a82c34b854bc7aed97528f0aac10709cd7a94ddea_prof);

        
        $__internal_438522b862099b9b82165ca1bf317902fe929afb012545228a6fcd0f420de1f2->leave($__internal_438522b862099b9b82165ca1bf317902fe929afb012545228a6fcd0f420de1f2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4bdb8715a4038e720fb993e69055a5f86e52e75ba60aceda944b34cd800937f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdb8715a4038e720fb993e69055a5f86e52e75ba60aceda944b34cd800937f7->enter($__internal_4bdb8715a4038e720fb993e69055a5f86e52e75ba60aceda944b34cd800937f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_0c0c0f0d759a28a65c6c4735645e971729444a68d97bb2637c3af3343c7a400e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0c0f0d759a28a65c6c4735645e971729444a68d97bb2637c3af3343c7a400e->enter($__internal_0c0c0f0d759a28a65c6c4735645e971729444a68d97bb2637c3af3343c7a400e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Curriculum Vitae";
        
        $__internal_0c0c0f0d759a28a65c6c4735645e971729444a68d97bb2637c3af3343c7a400e->leave($__internal_0c0c0f0d759a28a65c6c4735645e971729444a68d97bb2637c3af3343c7a400e_prof);

        
        $__internal_4bdb8715a4038e720fb993e69055a5f86e52e75ba60aceda944b34cd800937f7->leave($__internal_4bdb8715a4038e720fb993e69055a5f86e52e75ba60aceda944b34cd800937f7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb9a24179338dcb5e8682e7891829655693cd0ce6dba69e6f3e223ad769f1253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9a24179338dcb5e8682e7891829655693cd0ce6dba69e6f3e223ad769f1253->enter($__internal_bb9a24179338dcb5e8682e7891829655693cd0ce6dba69e6f3e223ad769f1253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73c4838154081967342f407402c5f70017c36b1a77b68b4eb13e598807028cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c4838154081967342f407402c5f70017c36b1a77b68b4eb13e598807028cb6->enter($__internal_73c4838154081967342f407402c5f70017c36b1a77b68b4eb13e598807028cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" media=\"print\" href=\"/bundles/app/css/cv_printer.css\" />
";
        
        $__internal_73c4838154081967342f407402c5f70017c36b1a77b68b4eb13e598807028cb6->leave($__internal_73c4838154081967342f407402c5f70017c36b1a77b68b4eb13e598807028cb6_prof);

        
        $__internal_bb9a24179338dcb5e8682e7891829655693cd0ce6dba69e6f3e223ad769f1253->leave($__internal_bb9a24179338dcb5e8682e7891829655693cd0ce6dba69e6f3e223ad769f1253_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0dfd09f3d9f89a69e544338d94528dff8780724fd96e9a684da713f8d2a4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0dfd09f3d9f89a69e544338d94528dff8780724fd96e9a684da713f8d2a4c4->enter($__internal_cc0dfd09f3d9f89a69e544338d94528dff8780724fd96e9a684da713f8d2a4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2eb25c488f38e179cb661db041ce4d286f1eef0a8effe0f554125cbece3d9692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb25c488f38e179cb661db041ce4d286f1eef0a8effe0f554125cbece3d9692->enter($__internal_2eb25c488f38e179cb661db041ce4d286f1eef0a8effe0f554125cbece3d9692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<div id=\"cv\">

    <div class=\"alert alert-info\" role=\"alert\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> Je suis à la recherche d'une alternance à partir de Septembre 2017 !</div>

    <section id=\"cv_presentation\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Curriculum Vitae</h2>
        <p>
            <div class=\"row\">
                <div class=\"col-md-9 cv_pres_left\">
                    <ul>
                        <li><span class=\"cv_my_name\">Thomas HENON</span></li>
                        <li><span class=\"cv_my_age\">20 ans</span></li>
                        <li><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Strasbourg, France</li>
                        <li><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> contact@thomas-henon.fr</li>
                        <li><span class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></span> 06 95 42 48 63</li>
                        <li><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> thomas-henon.fr</li>
                        <li><span class=\"glyphicon glyphicon-briefcase\" aria-hidden=\"true\"></span> <span class=\"professionnal_status\">Situation professionnelle : </span>Etudiant, Freelance</li>
                    </ul>
                </div>
                <div id=\"img_profil\">
                    <img src=\"/bundles/app/images/profil.png\" alt=\"Thomas HENON\" />
                </div>
            </div>
            <a class=\"print_link text-center\" href=\"/bundles/app/files/thomas-henon-CV.pdf\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"></span> Version PDF</a>
        </p>
    </section>

    <section id=\"cv_skills\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Compétences</h2>
        <p>
            <div class=\"col-md-9\">
                <div class=\"row cv_skills_container\">
                    <div class=\"col-md-4\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Développement web</span></h3>
                        <ul>
                            <li>PHP: Symfony3</li>
                            <li>HTML5/CSS3: Bootstrap</li>
                            <li>JavaScript: JQuery, VueJS</li>
                        </ul>
                    </div>
                    <div class=\"col-md-8\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Administration système/réseaux</span></h3>
                        <ul>
                            <li>Docker Engine/Swarm/Machine</li>
                            <li>Ansible</li>
                            <li>Intégration continue</li>
                            <li>Proxmox</li>
                        </ul>
                    </div>
                </div>
                <div class=\"row cv_skills_container\">
                    <div class=\"col-md-4\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Programmation système</span></h3>
                        <ul>
                            <li>Langage C</li>
                            <li>Python3</li>
                            <li>Bash</li>
                        </ul>
                    </div>
                    <div class=\"col-md-8\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Gestion de projets</span></h3>
                        <ul>
                            <li>Git</li>
                            <li>Méthode agile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </p>
    </section>

    <section id=\"cv_formations\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\"></span> Formations</h2>
        <p>
        <ul>
            <li>
                <time class=\"text-right\">2015 à Aujourd'hui</time>
                <div><h3>Epitech</h3>: promotion 2020</div>
                <p>
                    <ul>
                        <li>Option Architecte Système Réseau et Sécurité</li>
                        <li>En troisième année à Strasbourg</li>
                    </ul>
                </p>
            </li>
            <li>
                <time class=\"text-right\">2013 à 2015</time>
                <div><h3>Baccalauréat</h3></div>
                <p>
                    <ul>
                        <li>Lycée Jean Jacques Henner</li>
                        <li>STI2D (Sciences et Technologies de l'Industrie et du Développement Durable)</li>
                        <li>Mention assez bien</li>
                    </ul>
                </p>
            </li>
        </ul>
        </p>
    </section>

    <section id=\"cv_experiences\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> Expériences professionnelles</h2>
        <p>
        <ul>
            <li>
                <time class=\"text-right\">Juillet-Décembre 2016</time>
                <div><h3>WideVOIP</h3>: Stage + CDD</div>
                <p>
                    <ul>
                        <li>Opérateur télécom</li>
                        <li>Migration de version du framework CodeIgniter</li>
                        <li>Développement d'une interface de portabilité des numéros fixes (MOP v3)</li>
            <li>Maintenance de l'interface client (ERP)<span style=\"display: none\"> : corrections de bugs, développement de nouvelles fonctionnalités (mailing list), code refactor.</span></li>
                        <li>Mise en place d'une intégration continue</li>
                        <li>Technologies utilisées : PHP5, MVC, MySQL, intégration continue Gitlab, Git, Docker</li>
                    </ul>
                <div><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> <a href=\"https://www.widevoip.com/\" target=\"_blank\">https://www.widevoip.com/</a></div>
                </p>
            </li>
            <li>
                <time class=\"text-right\">Janvier 2012</time>
                <div><h3>New-Web</h3>: Stage de découverte</div>
                <p>
                    <ul>
                        <li>SSII</li>
                        <li>Dépannage informatique hardware pour particuliers / traitement de données.</li>
                    </ul>
                    <div><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> <a href=\"http://new-web.fr/\" target=\"_blank\">http://new-web.fr/</a></div>
                </p>
            </li>
            <li>
                <time class=\"text-right\">Janvier 2012</time>
                <div><h3>Ingénierie des Voiries et des Réseaux (IVR)</h3>: Stage de découverte</div>
                <p>
                    <ul>
                        <li></li>
                        <li>Découverte de la conception de voiries et réseaux dans les travaux publics.</li>
                    </ul>
                    <div><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> <a href=\"http://ivr68.fr/\" target=\"_blank\">http://ivr68.fr/</a></div>
                </p>
            </li>
        </ul>
        </p>
    </section>

    <section class=\"content row container\">
        <div id=\"cv_social\" class=\"col-md-4\">
            <h2><span class=\"glyphicon glyphicon-comment\" aria-hidden=\"true\"></span> Social</h2>
            <p>
                <ul>
                    <li><i class=\"fa fa-github\" aria-hidden=\"true\"></i> Github: tounefr</li>
                    <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> Twitter: @Tounefr</li>
                </ul>
            </p>
        </div>
        <div id=\"cv_languages\" class=\"col-md-4\">
            <h2><i class=\"fa fa-language\" aria-hidden=\"true\"></i> Langues</h2>
            <p>
                <ul>
                    <li>Anglais: 795 TOEIC</li>
                    <li>Espagnol: notions</li>
                    <li>Français: langue natale</li>
                </ul>
            </p>
        </div>
        <div id=\"cv_hobbies\" class=\"col-md-4\">
            <h2><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Loisirs</h2>
            <p>Escalade, Musique</p>
        </div>
    </section>


</div>

";
        
        $__internal_2eb25c488f38e179cb661db041ce4d286f1eef0a8effe0f554125cbece3d9692->leave($__internal_2eb25c488f38e179cb661db041ce4d286f1eef0a8effe0f554125cbece3d9692_prof);

        
        $__internal_cc0dfd09f3d9f89a69e544338d94528dff8780724fd96e9a684da713f8d2a4c4->leave($__internal_cc0dfd09f3d9f89a69e544338d94528dff8780724fd96e9a684da713f8d2a4c4_prof);

    }

    public function getTemplateName()
    {
        return "default/cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 11,  83 => 10,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block page_title %}Curriculum Vitae{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" media=\"print\" href=\"/bundles/app/css/cv_printer.css\" />
{% endblock %}

{% block body %}

<div id=\"cv\">

    <div class=\"alert alert-info\" role=\"alert\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> Je suis à la recherche d'une alternance à partir de Septembre 2017 !</div>

    <section id=\"cv_presentation\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Curriculum Vitae</h2>
        <p>
            <div class=\"row\">
                <div class=\"col-md-9 cv_pres_left\">
                    <ul>
                        <li><span class=\"cv_my_name\">Thomas HENON</span></li>
                        <li><span class=\"cv_my_age\">20 ans</span></li>
                        <li><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Strasbourg, France</li>
                        <li><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> contact@thomas-henon.fr</li>
                        <li><span class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></span> 06 95 42 48 63</li>
                        <li><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> thomas-henon.fr</li>
                        <li><span class=\"glyphicon glyphicon-briefcase\" aria-hidden=\"true\"></span> <span class=\"professionnal_status\">Situation professionnelle : </span>Etudiant, Freelance</li>
                    </ul>
                </div>
                <div id=\"img_profil\">
                    <img src=\"/bundles/app/images/profil.png\" alt=\"Thomas HENON\" />
                </div>
            </div>
            <a class=\"print_link text-center\" href=\"/bundles/app/files/thomas-henon-CV.pdf\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"></span> Version PDF</a>
        </p>
    </section>

    <section id=\"cv_skills\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-console\" aria-hidden=\"true\"></span> Compétences</h2>
        <p>
            <div class=\"col-md-9\">
                <div class=\"row cv_skills_container\">
                    <div class=\"col-md-4\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Développement web</span></h3>
                        <ul>
                            <li>PHP: Symfony3</li>
                            <li>HTML5/CSS3: Bootstrap</li>
                            <li>JavaScript: JQuery, VueJS</li>
                        </ul>
                    </div>
                    <div class=\"col-md-8\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Administration système/réseaux</span></h3>
                        <ul>
                            <li>Docker Engine/Swarm/Machine</li>
                            <li>Ansible</li>
                            <li>Intégration continue</li>
                            <li>Proxmox</li>
                        </ul>
                    </div>
                </div>
                <div class=\"row cv_skills_container\">
                    <div class=\"col-md-4\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Programmation système</span></h3>
                        <ul>
                            <li>Langage C</li>
                            <li>Python3</li>
                            <li>Bash</li>
                        </ul>
                    </div>
                    <div class=\"col-md-8\">
                        <h3><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> <span class=\"text-underline\">Gestion de projets</span></h3>
                        <ul>
                            <li>Git</li>
                            <li>Méthode agile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </p>
    </section>

    <section id=\"cv_formations\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\"></span> Formations</h2>
        <p>
        <ul>
            <li>
                <time class=\"text-right\">2015 à Aujourd'hui</time>
                <div><h3>Epitech</h3>: promotion 2020</div>
                <p>
                    <ul>
                        <li>Option Architecte Système Réseau et Sécurité</li>
                        <li>En troisième année à Strasbourg</li>
                    </ul>
                </p>
            </li>
            <li>
                <time class=\"text-right\">2013 à 2015</time>
                <div><h3>Baccalauréat</h3></div>
                <p>
                    <ul>
                        <li>Lycée Jean Jacques Henner</li>
                        <li>STI2D (Sciences et Technologies de l'Industrie et du Développement Durable)</li>
                        <li>Mention assez bien</li>
                    </ul>
                </p>
            </li>
        </ul>
        </p>
    </section>

    <section id=\"cv_experiences\" class=\"content row container\">
        <h2><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> Expériences professionnelles</h2>
        <p>
        <ul>
            <li>
                <time class=\"text-right\">Juillet-Décembre 2016</time>
                <div><h3>WideVOIP</h3>: Stage + CDD</div>
                <p>
                    <ul>
                        <li>Opérateur télécom</li>
                        <li>Migration de version du framework CodeIgniter</li>
                        <li>Développement d'une interface de portabilité des numéros fixes (MOP v3)</li>
            <li>Maintenance de l'interface client (ERP)<span style=\"display: none\"> : corrections de bugs, développement de nouvelles fonctionnalités (mailing list), code refactor.</span></li>
                        <li>Mise en place d'une intégration continue</li>
                        <li>Technologies utilisées : PHP5, MVC, MySQL, intégration continue Gitlab, Git, Docker</li>
                    </ul>
                <div><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> <a href=\"https://www.widevoip.com/\" target=\"_blank\">https://www.widevoip.com/</a></div>
                </p>
            </li>
            <li>
                <time class=\"text-right\">Janvier 2012</time>
                <div><h3>New-Web</h3>: Stage de découverte</div>
                <p>
                    <ul>
                        <li>SSII</li>
                        <li>Dépannage informatique hardware pour particuliers / traitement de données.</li>
                    </ul>
                    <div><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> <a href=\"http://new-web.fr/\" target=\"_blank\">http://new-web.fr/</a></div>
                </p>
            </li>
            <li>
                <time class=\"text-right\">Janvier 2012</time>
                <div><h3>Ingénierie des Voiries et des Réseaux (IVR)</h3>: Stage de découverte</div>
                <p>
                    <ul>
                        <li></li>
                        <li>Découverte de la conception de voiries et réseaux dans les travaux publics.</li>
                    </ul>
                    <div><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> <a href=\"http://ivr68.fr/\" target=\"_blank\">http://ivr68.fr/</a></div>
                </p>
            </li>
        </ul>
        </p>
    </section>

    <section class=\"content row container\">
        <div id=\"cv_social\" class=\"col-md-4\">
            <h2><span class=\"glyphicon glyphicon-comment\" aria-hidden=\"true\"></span> Social</h2>
            <p>
                <ul>
                    <li><i class=\"fa fa-github\" aria-hidden=\"true\"></i> Github: tounefr</li>
                    <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> Twitter: @Tounefr</li>
                </ul>
            </p>
        </div>
        <div id=\"cv_languages\" class=\"col-md-4\">
            <h2><i class=\"fa fa-language\" aria-hidden=\"true\"></i> Langues</h2>
            <p>
                <ul>
                    <li>Anglais: 795 TOEIC</li>
                    <li>Espagnol: notions</li>
                    <li>Français: langue natale</li>
                </ul>
            </p>
        </div>
        <div id=\"cv_hobbies\" class=\"col-md-4\">
            <h2><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Loisirs</h2>
            <p>Escalade, Musique</p>
        </div>
    </section>


</div>

{% endblock %}
", "default/cv.html.twig", "/var/www/symfony/app/Resources/views/default/cv.html.twig");
    }
}
