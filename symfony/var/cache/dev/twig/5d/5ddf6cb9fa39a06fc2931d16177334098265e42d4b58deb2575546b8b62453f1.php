<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_dc08a3408c1ed57f3de96782a9cb762199f10e1070460e6d4d8de699bc9c64f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f983f549f1918125b810cf935c8873a2522f8cc21cba4302f7ffd6d9ecb51fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f983f549f1918125b810cf935c8873a2522f8cc21cba4302f7ffd6d9ecb51fd8->enter($__internal_f983f549f1918125b810cf935c8873a2522f8cc21cba4302f7ffd6d9ecb51fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_7a0874d6eecdab38a73e688a48df0667959b02b636060564e6d52fa85957557a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0874d6eecdab38a73e688a48df0667959b02b636060564e6d52fa85957557a->enter($__internal_7a0874d6eecdab38a73e688a48df0667959b02b636060564e6d52fa85957557a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_f983f549f1918125b810cf935c8873a2522f8cc21cba4302f7ffd6d9ecb51fd8->leave($__internal_f983f549f1918125b810cf935c8873a2522f8cc21cba4302f7ffd6d9ecb51fd8_prof);

        
        $__internal_7a0874d6eecdab38a73e688a48df0667959b02b636060564e6d52fa85957557a->leave($__internal_7a0874d6eecdab38a73e688a48df0667959b02b636060564e6d52fa85957557a_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4472e4c1e0a5fa08e33c9db05959057e28fe8dbe43a9f73c0a18f86647d33abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4472e4c1e0a5fa08e33c9db05959057e28fe8dbe43a9f73c0a18f86647d33abf->enter($__internal_4472e4c1e0a5fa08e33c9db05959057e28fe8dbe43a9f73c0a18f86647d33abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e9b7ad3588ce0add0157f7823a139290ca3cf45202197b6498419c7d5ebba317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b7ad3588ce0add0157f7823a139290ca3cf45202197b6498419c7d5ebba317->enter($__internal_e9b7ad3588ce0add0157f7823a139290ca3cf45202197b6498419c7d5ebba317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_e9b7ad3588ce0add0157f7823a139290ca3cf45202197b6498419c7d5ebba317->leave($__internal_e9b7ad3588ce0add0157f7823a139290ca3cf45202197b6498419c7d5ebba317_prof);

        
        $__internal_4472e4c1e0a5fa08e33c9db05959057e28fe8dbe43a9f73c0a18f86647d33abf->leave($__internal_4472e4c1e0a5fa08e33c9db05959057e28fe8dbe43a9f73c0a18f86647d33abf_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_e1d3aa0fdbc62a1af8db27a2653f48a9c64dbc32dd7a2042eb481f300e898322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d3aa0fdbc62a1af8db27a2653f48a9c64dbc32dd7a2042eb481f300e898322->enter($__internal_e1d3aa0fdbc62a1af8db27a2653f48a9c64dbc32dd7a2042eb481f300e898322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_cd4459ff2ff23116b4fd74ef794803d8a954076010ca3fc87fa04f49bc4d1e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4459ff2ff23116b4fd74ef794803d8a954076010ca3fc87fa04f49bc4d1e63->enter($__internal_cd4459ff2ff23116b4fd74ef794803d8a954076010ca3fc87fa04f49bc4d1e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_cd4459ff2ff23116b4fd74ef794803d8a954076010ca3fc87fa04f49bc4d1e63->leave($__internal_cd4459ff2ff23116b4fd74ef794803d8a954076010ca3fc87fa04f49bc4d1e63_prof);

        
        $__internal_e1d3aa0fdbc62a1af8db27a2653f48a9c64dbc32dd7a2042eb481f300e898322->leave($__internal_e1d3aa0fdbc62a1af8db27a2653f48a9c64dbc32dd7a2042eb481f300e898322_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_230c8181b807646286ee116ba283045e8d596edb60430cdfc02c88614615d289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230c8181b807646286ee116ba283045e8d596edb60430cdfc02c88614615d289->enter($__internal_230c8181b807646286ee116ba283045e8d596edb60430cdfc02c88614615d289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_e187107a9061657a8d073b2791dddb9ca27eac7f5783d144f804a5c9e29d98b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e187107a9061657a8d073b2791dddb9ca27eac7f5783d144f804a5c9e29d98b9->enter($__internal_e187107a9061657a8d073b2791dddb9ca27eac7f5783d144f804a5c9e29d98b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e187107a9061657a8d073b2791dddb9ca27eac7f5783d144f804a5c9e29d98b9->leave($__internal_e187107a9061657a8d073b2791dddb9ca27eac7f5783d144f804a5c9e29d98b9_prof);

        
        $__internal_230c8181b807646286ee116ba283045e8d596edb60430cdfc02c88614615d289->leave($__internal_230c8181b807646286ee116ba283045e8d596edb60430cdfc02c88614615d289_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_d9f6abcf466c7ef6793e282447a13280b985dd88c4a4114f20b8f33bbbe55ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f6abcf466c7ef6793e282447a13280b985dd88c4a4114f20b8f33bbbe55ace->enter($__internal_d9f6abcf466c7ef6793e282447a13280b985dd88c4a4114f20b8f33bbbe55ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_ec90e9dbeac014c4944c5710fe3c2a0b044ca0306f2741c22b37be5bd7e94af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec90e9dbeac014c4944c5710fe3c2a0b044ca0306f2741c22b37be5bd7e94af5->enter($__internal_ec90e9dbeac014c4944c5710fe3c2a0b044ca0306f2741c22b37be5bd7e94af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ec90e9dbeac014c4944c5710fe3c2a0b044ca0306f2741c22b37be5bd7e94af5->leave($__internal_ec90e9dbeac014c4944c5710fe3c2a0b044ca0306f2741c22b37be5bd7e94af5_prof);

        
        $__internal_d9f6abcf466c7ef6793e282447a13280b985dd88c4a4114f20b8f33bbbe55ace->leave($__internal_d9f6abcf466c7ef6793e282447a13280b985dd88c4a4114f20b8f33bbbe55ace_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_23d3db8e52c06cf7954d1686b69099214d8250ddbab4dfc25d7d65a54cb26643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d3db8e52c06cf7954d1686b69099214d8250ddbab4dfc25d7d65a54cb26643->enter($__internal_23d3db8e52c06cf7954d1686b69099214d8250ddbab4dfc25d7d65a54cb26643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_876455b14d9f6c60fbd5cfa7f6910aa8ceae64b8489a989e9110ad6a90e2b60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876455b14d9f6c60fbd5cfa7f6910aa8ceae64b8489a989e9110ad6a90e2b60f->enter($__internal_876455b14d9f6c60fbd5cfa7f6910aa8ceae64b8489a989e9110ad6a90e2b60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_876455b14d9f6c60fbd5cfa7f6910aa8ceae64b8489a989e9110ad6a90e2b60f->leave($__internal_876455b14d9f6c60fbd5cfa7f6910aa8ceae64b8489a989e9110ad6a90e2b60f_prof);

        
        $__internal_23d3db8e52c06cf7954d1686b69099214d8250ddbab4dfc25d7d65a54cb26643->leave($__internal_23d3db8e52c06cf7954d1686b69099214d8250ddbab4dfc25d7d65a54cb26643_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_f80ab3b42fe40e03e7725f358465c02793d7c53a7dadba0a7f4c2b15d8101572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80ab3b42fe40e03e7725f358465c02793d7c53a7dadba0a7f4c2b15d8101572->enter($__internal_f80ab3b42fe40e03e7725f358465c02793d7c53a7dadba0a7f4c2b15d8101572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb98c368e0065e663ca0037c5cc814707304949a9203ab2a950e371c1989978f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb98c368e0065e663ca0037c5cc814707304949a9203ab2a950e371c1989978f->enter($__internal_bb98c368e0065e663ca0037c5cc814707304949a9203ab2a950e371c1989978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_bb98c368e0065e663ca0037c5cc814707304949a9203ab2a950e371c1989978f->leave($__internal_bb98c368e0065e663ca0037c5cc814707304949a9203ab2a950e371c1989978f_prof);

        
        $__internal_f80ab3b42fe40e03e7725f358465c02793d7c53a7dadba0a7f4c2b15d8101572->leave($__internal_f80ab3b42fe40e03e7725f358465c02793d7c53a7dadba0a7f4c2b15d8101572_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bc069c594a3057fc8d2a95af1e72150f656993daccd403ed0ff4ce8e358eb275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc069c594a3057fc8d2a95af1e72150f656993daccd403ed0ff4ce8e358eb275->enter($__internal_bc069c594a3057fc8d2a95af1e72150f656993daccd403ed0ff4ce8e358eb275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ef67d6a8d908f80bc0d5c16502a53714c0b61a0967add90f46a34528fec114c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef67d6a8d908f80bc0d5c16502a53714c0b61a0967add90f46a34528fec114c5->enter($__internal_ef67d6a8d908f80bc0d5c16502a53714c0b61a0967add90f46a34528fec114c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_ef67d6a8d908f80bc0d5c16502a53714c0b61a0967add90f46a34528fec114c5->leave($__internal_ef67d6a8d908f80bc0d5c16502a53714c0b61a0967add90f46a34528fec114c5_prof);

        
        $__internal_bc069c594a3057fc8d2a95af1e72150f656993daccd403ed0ff4ce8e358eb275->leave($__internal_bc069c594a3057fc8d2a95af1e72150f656993daccd403ed0ff4ce8e358eb275_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4d7504374ff6f0ce0055adaf177421c05883d1117ebd86aaea1434fd663bbc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7504374ff6f0ce0055adaf177421c05883d1117ebd86aaea1434fd663bbc59->enter($__internal_4d7504374ff6f0ce0055adaf177421c05883d1117ebd86aaea1434fd663bbc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_4c9aa27e3db74498954c5ae457a5f41565d7d4706386f22deda94400947eee31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9aa27e3db74498954c5ae457a5f41565d7d4706386f22deda94400947eee31->enter($__internal_4c9aa27e3db74498954c5ae457a5f41565d7d4706386f22deda94400947eee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_4c9aa27e3db74498954c5ae457a5f41565d7d4706386f22deda94400947eee31->leave($__internal_4c9aa27e3db74498954c5ae457a5f41565d7d4706386f22deda94400947eee31_prof);

        
        $__internal_4d7504374ff6f0ce0055adaf177421c05883d1117ebd86aaea1434fd663bbc59->leave($__internal_4d7504374ff6f0ce0055adaf177421c05883d1117ebd86aaea1434fd663bbc59_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_0c663839b85187cf13ba005fde0d7b92680d23af1acaf546e10bd6429084658c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c663839b85187cf13ba005fde0d7b92680d23af1acaf546e10bd6429084658c->enter($__internal_0c663839b85187cf13ba005fde0d7b92680d23af1acaf546e10bd6429084658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_a33a460c4da8b63cdf19295217a56d353d3d1e400d195dcf98ad194ea5bad88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33a460c4da8b63cdf19295217a56d353d3d1e400d195dcf98ad194ea5bad88c->enter($__internal_a33a460c4da8b63cdf19295217a56d353d3d1e400d195dcf98ad194ea5bad88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_a33a460c4da8b63cdf19295217a56d353d3d1e400d195dcf98ad194ea5bad88c->leave($__internal_a33a460c4da8b63cdf19295217a56d353d3d1e400d195dcf98ad194ea5bad88c_prof);

        
        $__internal_0c663839b85187cf13ba005fde0d7b92680d23af1acaf546e10bd6429084658c->leave($__internal_0c663839b85187cf13ba005fde0d7b92680d23af1acaf546e10bd6429084658c_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_ad462c900ab3fd7166923d86b34fe40bd70340b525e51291a9e67ebfa200ba1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad462c900ab3fd7166923d86b34fe40bd70340b525e51291a9e67ebfa200ba1e->enter($__internal_ad462c900ab3fd7166923d86b34fe40bd70340b525e51291a9e67ebfa200ba1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_85d6c44ba203469234c1ad341adcbca1bcc3efe61e8b6f6a2aa63078fa010950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d6c44ba203469234c1ad341adcbca1bcc3efe61e8b6f6a2aa63078fa010950->enter($__internal_85d6c44ba203469234c1ad341adcbca1bcc3efe61e8b6f6a2aa63078fa010950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_85d6c44ba203469234c1ad341adcbca1bcc3efe61e8b6f6a2aa63078fa010950->leave($__internal_85d6c44ba203469234c1ad341adcbca1bcc3efe61e8b6f6a2aa63078fa010950_prof);

        
        $__internal_ad462c900ab3fd7166923d86b34fe40bd70340b525e51291a9e67ebfa200ba1e->leave($__internal_ad462c900ab3fd7166923d86b34fe40bd70340b525e51291a9e67ebfa200ba1e_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_b9cf53665a898fbe0cfd18797bac92fe829337057e9b189847adc9ff390d1c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cf53665a898fbe0cfd18797bac92fe829337057e9b189847adc9ff390d1c6d->enter($__internal_b9cf53665a898fbe0cfd18797bac92fe829337057e9b189847adc9ff390d1c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_32dbbd3f11d663c0902bc8c674b7964322ad9faefe42b8e071e0aece63741b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32dbbd3f11d663c0902bc8c674b7964322ad9faefe42b8e071e0aece63741b11->enter($__internal_32dbbd3f11d663c0902bc8c674b7964322ad9faefe42b8e071e0aece63741b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_32dbbd3f11d663c0902bc8c674b7964322ad9faefe42b8e071e0aece63741b11->leave($__internal_32dbbd3f11d663c0902bc8c674b7964322ad9faefe42b8e071e0aece63741b11_prof);

        
        $__internal_b9cf53665a898fbe0cfd18797bac92fe829337057e9b189847adc9ff390d1c6d->leave($__internal_b9cf53665a898fbe0cfd18797bac92fe829337057e9b189847adc9ff390d1c6d_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_4b77238f4017632be932a10c2c8939f72e2d54b0daf42f737ce100bf495924c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b77238f4017632be932a10c2c8939f72e2d54b0daf42f737ce100bf495924c3->enter($__internal_4b77238f4017632be932a10c2c8939f72e2d54b0daf42f737ce100bf495924c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_d552c9b8c8d666e434acf4075aaaf36d8ab34531ce41f8e6cb8e5d0ef2da0b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d552c9b8c8d666e434acf4075aaaf36d8ab34531ce41f8e6cb8e5d0ef2da0b4e->enter($__internal_d552c9b8c8d666e434acf4075aaaf36d8ab34531ce41f8e6cb8e5d0ef2da0b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 79
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 81
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_d552c9b8c8d666e434acf4075aaaf36d8ab34531ce41f8e6cb8e5d0ef2da0b4e->leave($__internal_d552c9b8c8d666e434acf4075aaaf36d8ab34531ce41f8e6cb8e5d0ef2da0b4e_prof);

        
        $__internal_4b77238f4017632be932a10c2c8939f72e2d54b0daf42f737ce100bf495924c3->leave($__internal_4b77238f4017632be932a10c2c8939f72e2d54b0daf42f737ce100bf495924c3_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_a14d9df29155e5c43c884584121fca344778a190fd6148462029d72b9678f3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14d9df29155e5c43c884584121fca344778a190fd6148462029d72b9678f3c4->enter($__internal_a14d9df29155e5c43c884584121fca344778a190fd6148462029d72b9678f3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_002487915550f46aeed689eb78172a720dc9d700f03e3888ed7d1f561f22a1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002487915550f46aeed689eb78172a720dc9d700f03e3888ed7d1f561f22a1e5->enter($__internal_002487915550f46aeed689eb78172a720dc9d700f03e3888ed7d1f561f22a1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 82
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 84
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 85
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 87
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 88
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 91
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 100
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_002487915550f46aeed689eb78172a720dc9d700f03e3888ed7d1f561f22a1e5->leave($__internal_002487915550f46aeed689eb78172a720dc9d700f03e3888ed7d1f561f22a1e5_prof);

        
        $__internal_a14d9df29155e5c43c884584121fca344778a190fd6148462029d72b9678f3c4->leave($__internal_a14d9df29155e5c43c884584121fca344778a190fd6148462029d72b9678f3c4_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_11089cd905c6ff94b3bb7ccd4a137cf1963e529840ba0f94ad80f9d6144b62ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11089cd905c6ff94b3bb7ccd4a137cf1963e529840ba0f94ad80f9d6144b62ff->enter($__internal_11089cd905c6ff94b3bb7ccd4a137cf1963e529840ba0f94ad80f9d6144b62ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_565fec991b2a15f701d0155652a0f7bc7cc27fd248738fbdf144d12d080c1a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565fec991b2a15f701d0155652a0f7bc7cc27fd248738fbdf144d12d080c1a07->enter($__internal_565fec991b2a15f701d0155652a0f7bc7cc27fd248738fbdf144d12d080c1a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 101
        echo "                                                <li>
                                                    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_565fec991b2a15f701d0155652a0f7bc7cc27fd248738fbdf144d12d080c1a07->leave($__internal_565fec991b2a15f701d0155652a0f7bc7cc27fd248738fbdf144d12d080c1a07_prof);

        
        $__internal_11089cd905c6ff94b3bb7ccd4a137cf1963e529840ba0f94ad80f9d6144b62ff->leave($__internal_11089cd905c6ff94b3bb7ccd4a137cf1963e529840ba0f94ad80f9d6144b62ff_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c5bfc7ad72c39e97392549f4fa42268ac0024d06e949ab8a812ada10b63cce57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bfc7ad72c39e97392549f4fa42268ac0024d06e949ab8a812ada10b63cce57->enter($__internal_c5bfc7ad72c39e97392549f4fa42268ac0024d06e949ab8a812ada10b63cce57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_1f4268a57d24e40413e47297fdd342b66f8ad5b05c4ae5f99f1592121e3fb37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4268a57d24e40413e47297fdd342b66f8ad5b05c4ae5f99f1592121e3fb37a->enter($__internal_1f4268a57d24e40413e47297fdd342b66f8ad5b05c4ae5f99f1592121e3fb37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_1f4268a57d24e40413e47297fdd342b66f8ad5b05c4ae5f99f1592121e3fb37a->leave($__internal_1f4268a57d24e40413e47297fdd342b66f8ad5b05c4ae5f99f1592121e3fb37a_prof);

        
        $__internal_c5bfc7ad72c39e97392549f4fa42268ac0024d06e949ab8a812ada10b63cce57->leave($__internal_c5bfc7ad72c39e97392549f4fa42268ac0024d06e949ab8a812ada10b63cce57_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_daa237be1de95582b489370e1f657a4bc155957cdd83b2527d42c4535e66b3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa237be1de95582b489370e1f657a4bc155957cdd83b2527d42c4535e66b3a7->enter($__internal_daa237be1de95582b489370e1f657a4bc155957cdd83b2527d42c4535e66b3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_3aa981f439a058a33fb661681e90b9aeaca8f77680af8fbfefdbab0fa000ff64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa981f439a058a33fb661681e90b9aeaca8f77680af8fbfefdbab0fa000ff64->enter($__internal_3aa981f439a058a33fb661681e90b9aeaca8f77680af8fbfefdbab0fa000ff64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_3aa981f439a058a33fb661681e90b9aeaca8f77680af8fbfefdbab0fa000ff64->leave($__internal_3aa981f439a058a33fb661681e90b9aeaca8f77680af8fbfefdbab0fa000ff64_prof);

        
        $__internal_daa237be1de95582b489370e1f657a4bc155957cdd83b2527d42c4535e66b3a7->leave($__internal_daa237be1de95582b489370e1f657a4bc155957cdd83b2527d42c4535e66b3a7_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f2275adecf7e63df75112bb3ead5d255f91a00de5408273cc8b0945033566e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2275adecf7e63df75112bb3ead5d255f91a00de5408273cc8b0945033566e6->enter($__internal_0f2275adecf7e63df75112bb3ead5d255f91a00de5408273cc8b0945033566e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_107b21ff06b1cbb4f37bc2bcde181019f2b78313273fa21ef6e81e47a4c80de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107b21ff06b1cbb4f37bc2bcde181019f2b78313273fa21ef6e81e47a4c80de9->enter($__internal_107b21ff06b1cbb4f37bc2bcde181019f2b78313273fa21ef6e81e47a4c80de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_107b21ff06b1cbb4f37bc2bcde181019f2b78313273fa21ef6e81e47a4c80de9->leave($__internal_107b21ff06b1cbb4f37bc2bcde181019f2b78313273fa21ef6e81e47a4c80de9_prof);

        
        $__internal_0f2275adecf7e63df75112bb3ead5d255f91a00de5408273cc8b0945033566e6->leave($__internal_0f2275adecf7e63df75112bb3ead5d255f91a00de5408273cc8b0945033566e6_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_acd7af9bc91ac41350a56f517b5baf7539012563285f41ae443a455459cc1a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd7af9bc91ac41350a56f517b5baf7539012563285f41ae443a455459cc1a0e->enter($__internal_acd7af9bc91ac41350a56f517b5baf7539012563285f41ae443a455459cc1a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_670c8941755a41935cb2f851825ea177bc47649d4faa38ea420498f05d70ebde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670c8941755a41935cb2f851825ea177bc47649d4faa38ea420498f05d70ebde->enter($__internal_670c8941755a41935cb2f851825ea177bc47649d4faa38ea420498f05d70ebde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_670c8941755a41935cb2f851825ea177bc47649d4faa38ea420498f05d70ebde->leave($__internal_670c8941755a41935cb2f851825ea177bc47649d4faa38ea420498f05d70ebde_prof);

        
        $__internal_acd7af9bc91ac41350a56f517b5baf7539012563285f41ae443a455459cc1a0e->leave($__internal_acd7af9bc91ac41350a56f517b5baf7539012563285f41ae443a455459cc1a0e_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_054e37cd321befea2b3e422725783224ab3aa178797bedf085ff6af9f1d601b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054e37cd321befea2b3e422725783224ab3aa178797bedf085ff6af9f1d601b5->enter($__internal_054e37cd321befea2b3e422725783224ab3aa178797bedf085ff6af9f1d601b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_d2eed646fb3e70c5f989aad305b6bb6cd121c9244550612fef4cf25791a14bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2eed646fb3e70c5f989aad305b6bb6cd121c9244550612fef4cf25791a14bf9->enter($__internal_d2eed646fb3e70c5f989aad305b6bb6cd121c9244550612fef4cf25791a14bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_d2eed646fb3e70c5f989aad305b6bb6cd121c9244550612fef4cf25791a14bf9->leave($__internal_d2eed646fb3e70c5f989aad305b6bb6cd121c9244550612fef4cf25791a14bf9_prof);

        
        $__internal_054e37cd321befea2b3e422725783224ab3aa178797bedf085ff6af9f1d601b5->leave($__internal_054e37cd321befea2b3e422725783224ab3aa178797bedf085ff6af9f1d601b5_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e6d7824cc24aa40081dcaa24d79b0efe8a1a88486d6b3cdb3eda5cc0a4f765c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d7824cc24aa40081dcaa24d79b0efe8a1a88486d6b3cdb3eda5cc0a4f765c0->enter($__internal_e6d7824cc24aa40081dcaa24d79b0efe8a1a88486d6b3cdb3eda5cc0a4f765c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_ad237e15ac4ca5fe6cbc11f253cae27311425022045bd5190a6225573d817900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad237e15ac4ca5fe6cbc11f253cae27311425022045bd5190a6225573d817900->enter($__internal_ad237e15ac4ca5fe6cbc11f253cae27311425022045bd5190a6225573d817900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_ad237e15ac4ca5fe6cbc11f253cae27311425022045bd5190a6225573d817900->leave($__internal_ad237e15ac4ca5fe6cbc11f253cae27311425022045bd5190a6225573d817900_prof);

        
        $__internal_e6d7824cc24aa40081dcaa24d79b0efe8a1a88486d6b3cdb3eda5cc0a4f765c0->leave($__internal_e6d7824cc24aa40081dcaa24d79b0efe8a1a88486d6b3cdb3eda5cc0a4f765c0_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_d5c566f542b70c6b4b9d27d40a927c50e619a06ffc5040e1125b94c46bfac3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c566f542b70c6b4b9d27d40a927c50e619a06ffc5040e1125b94c46bfac3f5->enter($__internal_d5c566f542b70c6b4b9d27d40a927c50e619a06ffc5040e1125b94c46bfac3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_c8c966dd533fa4883a5a97dc2c0dc2d3c7353458338ba4c954d5446cc8573516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c966dd533fa4883a5a97dc2c0dc2d3c7353458338ba4c954d5446cc8573516->enter($__internal_c8c966dd533fa4883a5a97dc2c0dc2d3c7353458338ba4c954d5446cc8573516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_c8c966dd533fa4883a5a97dc2c0dc2d3c7353458338ba4c954d5446cc8573516->leave($__internal_c8c966dd533fa4883a5a97dc2c0dc2d3c7353458338ba4c954d5446cc8573516_prof);

        
        $__internal_d5c566f542b70c6b4b9d27d40a927c50e619a06ffc5040e1125b94c46bfac3f5->leave($__internal_d5c566f542b70c6b4b9d27d40a927c50e619a06ffc5040e1125b94c46bfac3f5_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_59d0235de7bfdf661dac9c1fdfa6c2e51b764dda88b0292d305de51cd2ba235c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d0235de7bfdf661dac9c1fdfa6c2e51b764dda88b0292d305de51cd2ba235c->enter($__internal_59d0235de7bfdf661dac9c1fdfa6c2e51b764dda88b0292d305de51cd2ba235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2d77893ea93d9177c8dd00b3e8e3eb17e2ebccf539d2d1c0c026c1c67ed807ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d77893ea93d9177c8dd00b3e8e3eb17e2ebccf539d2d1c0c026c1c67ed807ef->enter($__internal_2d77893ea93d9177c8dd00b3e8e3eb17e2ebccf539d2d1c0c026c1c67ed807ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_2d77893ea93d9177c8dd00b3e8e3eb17e2ebccf539d2d1c0c026c1c67ed807ef->leave($__internal_2d77893ea93d9177c8dd00b3e8e3eb17e2ebccf539d2d1c0c026c1c67ed807ef_prof);

        
        $__internal_59d0235de7bfdf661dac9c1fdfa6c2e51b764dda88b0292d305de51cd2ba235c->leave($__internal_59d0235de7bfdf661dac9c1fdfa6c2e51b764dda88b0292d305de51cd2ba235c_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d73b3ace843c9c907fce6ae8c523903cf1e4a1a4066e721b5b7d687dfc975ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73b3ace843c9c907fce6ae8c523903cf1e4a1a4066e721b5b7d687dfc975ad3->enter($__internal_d73b3ace843c9c907fce6ae8c523903cf1e4a1a4066e721b5b7d687dfc975ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_80f801aae1057923ed088af572d5875e5a0365f86d851c8476d1a0f6e7664728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f801aae1057923ed088af572d5875e5a0365f86d851c8476d1a0f6e7664728->enter($__internal_80f801aae1057923ed088af572d5875e5a0365f86d851c8476d1a0f6e7664728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_80f801aae1057923ed088af572d5875e5a0365f86d851c8476d1a0f6e7664728->leave($__internal_80f801aae1057923ed088af572d5875e5a0365f86d851c8476d1a0f6e7664728_prof);

        
        $__internal_d73b3ace843c9c907fce6ae8c523903cf1e4a1a4066e721b5b7d687dfc975ad3->leave($__internal_d73b3ace843c9c907fce6ae8c523903cf1e4a1a4066e721b5b7d687dfc975ad3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 160,  769 => 153,  759 => 149,  752 => 145,  748 => 143,  745 => 142,  736 => 141,  707 => 139,  698 => 138,  685 => 134,  676 => 133,  665 => 154,  663 => 153,  658 => 150,  655 => 141,  653 => 138,  649 => 136,  646 => 133,  637 => 132,  626 => 125,  624 => 122,  622 => 121,  613 => 120,  602 => 127,  600 => 120,  597 => 119,  588 => 118,  573 => 102,  570 => 101,  561 => 100,  551 => 108,  546 => 105,  544 => 100,  535 => 94,  530 => 91,  525 => 89,  522 => 88,  520 => 87,  516 => 86,  513 => 85,  511 => 84,  505 => 82,  496 => 81,  484 => 109,  482 => 81,  478 => 79,  475 => 78,  466 => 77,  453 => 71,  444 => 70,  435 => 69,  423 => 112,  421 => 77,  416 => 74,  414 => 69,  407 => 65,  403 => 63,  394 => 62,  383 => 156,  381 => 132,  376 => 129,  374 => 118,  369 => 115,  367 => 62,  364 => 61,  355 => 60,  322 => 58,  311 => 165,  302 => 163,  298 => 162,  295 => 161,  293 => 160,  289 => 158,  287 => 60,  277 => 58,  268 => 57,  247 => 30,  238 => 29,  226 => 43,  223 => 42,  220 => 29,  211 => 28,  196 => 25,  193 => 24,  184 => 23,  171 => 15,  165 => 13,  156 => 12,  138 => 10,  127 => 167,  125 => 57,  118 => 53,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/home/toune/thomas-henon.fr/symfony/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/layout.html.twig");
    }
}
