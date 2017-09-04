<?php

/* article/comment/show.html.twig */
class __TwigTemplate_8f424b369bc34a45fb053f152121e40d4e88834a9b9d10a96d994955df618025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'comments' => array($this, 'block_comments'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c88999291970d90828dfcd39a08e4199776155e3d7ea66fdf25202e6b60a2ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88999291970d90828dfcd39a08e4199776155e3d7ea66fdf25202e6b60a2ebc->enter($__internal_c88999291970d90828dfcd39a08e4199776155e3d7ea66fdf25202e6b60a2ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/comment/show.html.twig"));

        $__internal_3470fb4ac2f2357cf818ba1905fcfc16b2c9578d9398900c729b40dd12f74128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3470fb4ac2f2357cf818ba1905fcfc16b2c9578d9398900c729b40dd12f74128->enter($__internal_3470fb4ac2f2357cf818ba1905fcfc16b2c9578d9398900c729b40dd12f74128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/comment/show.html.twig"));

        // line 1
        $this->displayBlock('comments', $context, $blocks);
        
        $__internal_c88999291970d90828dfcd39a08e4199776155e3d7ea66fdf25202e6b60a2ebc->leave($__internal_c88999291970d90828dfcd39a08e4199776155e3d7ea66fdf25202e6b60a2ebc_prof);

        
        $__internal_3470fb4ac2f2357cf818ba1905fcfc16b2c9578d9398900c729b40dd12f74128->leave($__internal_3470fb4ac2f2357cf818ba1905fcfc16b2c9578d9398900c729b40dd12f74128_prof);

    }

    public function block_comments($context, array $blocks = array())
    {
        $__internal_d950d7bc4083968a8ace1679c8e95d351a5882102b0a8793f6b7637a2e810c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d950d7bc4083968a8ace1679c8e95d351a5882102b0a8793f6b7637a2e810c5d->enter($__internal_d950d7bc4083968a8ace1679c8e95d351a5882102b0a8793f6b7637a2e810c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comments"));

        $__internal_51ac93a331d2f169c1f3c2ba7c5092f7e70af089142b6946440b482ed190c9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ac93a331d2f169c1f3c2ba7c5092f7e70af089142b6946440b482ed190c9cf->enter($__internal_51ac93a331d2f169c1f3c2ba7c5092f7e70af089142b6946440b482ed190c9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comments"));

        // line 2
        echo "
    <div id=\"article_comments\">
        <div class=\"row\">
            <div class=\"col-md-8\">

                <section class=\"content row container\">
                    <div class=\"row\">
                        ";
        // line 9
        if ((twig_length_filter($this->env, ($context["comments"] ?? $this->getContext($context, "comments"))) > 0)) {
            // line 10
            echo "                            <h4 class=\"text-center\">Réagissez à cet article en postant un commentaire</h4>
                        ";
        } else {
            // line 12
            echo "                            <h4 class=\"text-center\">Soyez le premier à rédiger un commentaire !</h4>
                        ";
        }
        // line 14
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["new_comment_form"] ?? $this->getContext($context, "new_comment_form")), 'form_start');
        echo "
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["new_comment_form"] ?? $this->getContext($context, "new_comment_form")), 'widget');
        echo "
                        <button type=\"submit\" name=\"form-submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\">  Valider</button>
                        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["new_comment_form"] ?? $this->getContext($context, "new_comment_form")), 'form_end');
        echo "
                    </div>
                </section>


                ";
        // line 22
        $this->loadTemplate("article/comment/comment.html.twig", "article/comment/show.html.twig", 22)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 23
        echo "

            </div>
        </div>
    </div>

    <!--
    <div id=\"disqus_thread\"></div>
    <script>

        var disqus_config = function () {
            this.page.url = 'http://localhost/';  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = 1; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://blog-toune.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
    -->
";
        
        $__internal_51ac93a331d2f169c1f3c2ba7c5092f7e70af089142b6946440b482ed190c9cf->leave($__internal_51ac93a331d2f169c1f3c2ba7c5092f7e70af089142b6946440b482ed190c9cf_prof);

        
        $__internal_d950d7bc4083968a8ace1679c8e95d351a5882102b0a8793f6b7637a2e810c5d->leave($__internal_d950d7bc4083968a8ace1679c8e95d351a5882102b0a8793f6b7637a2e810c5d_prof);

    }

    public function getTemplateName()
    {
        return "article/comment/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  81 => 22,  73 => 17,  68 => 15,  63 => 14,  59 => 12,  55 => 10,  53 => 9,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block comments %}

    <div id=\"article_comments\">
        <div class=\"row\">
            <div class=\"col-md-8\">

                <section class=\"content row container\">
                    <div class=\"row\">
                        {% if comments|length > 0 %}
                            <h4 class=\"text-center\">Réagissez à cet article en postant un commentaire</h4>
                        {% else %}
                            <h4 class=\"text-center\">Soyez le premier à rédiger un commentaire !</h4>
                        {% endif %}
                        {{ form_start(new_comment_form) }}
                        {{ form_widget(new_comment_form) }}
                        <button type=\"submit\" name=\"form-submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\">  Valider</button>
                        {{ form_end(new_comment_form) }}
                    </div>
                </section>


                {% include 'article/comment/comment.html.twig' with { 'comments': comments } %}


            </div>
        </div>
    </div>

    <!--
    <div id=\"disqus_thread\"></div>
    <script>

        var disqus_config = function () {
            this.page.url = 'http://localhost/';  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = 1; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://blog-toune.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
    -->
{% endblock %}", "article/comment/show.html.twig", "/home/toune/thomas-henon.fr/symfony/app/Resources/views/article/comment/show.html.twig");
    }
}
