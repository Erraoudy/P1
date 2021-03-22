<?php

/* TWCOndeBundle:Actualites:index.html.twig */
class __TwigTemplate_cd758f7731700bdeb31c9c8e3908daf87c4d392929231dd2ec24db6f12c219a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:Actualites:index.html.twig", 1);
        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'Style' => [$this, 'block_Style'],
            'body' => [$this, 'block_body'],
            'custom_js' => [$this, 'block_custom_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "TWCOndeBundle::ondelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Actualites:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Actualites:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.actualites"), "html", null, true);
        echo " ";
        $this->displayParentBlock("Title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_Style($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 4
        echo "\t";
        $this->displayParentBlock("Style", $context, $blocks);
        echo "
\t<style>
\t\t.xs-unorder-list.check li{
\t\t\tpadding-left: 60px !important;
\t\t}
\t\t.left-descri{
\t\t\t\ttext-align: left;
\t\t\t}
\t\t.xs-banner-inner-section{
\t\t\tpadding-bottom: 0px;
\t\t}
\t\t.entry-date{
\t\t\tcolor: #87ae81; font-size: 1.14286em; display: inline-block; line-height: 1;
\t\t}
\t\t.entry-date:hover{
\t\t\tcolor: #87ae81; font-size: 1.14286em; display: inline-block; line-height: 1;
\t\t}
\t\t.entry-title{
\t\t\tdisplay: -webkit-box;
\t\t    -webkit-line-clamp: 3;
\t\t    -webkit-box-orient: vertical;
\t\t    overflow: hidden;
\t\t    text-overflow: ellipsis;
\t\t    color: #1e1e1e !important;
\t\t}
\t\t.breadcrumb{
\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tmargin-top:15px;position: initial;
\t\t\t}
\t\t}
\t\t";
        // line 37
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 38
            echo "\t\t\t.list-articles\t{
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.entry-meta{
\t\t\t\tfloat: left;
\t\t\t\tdirection: ltr;
\t\t\t}
\t\t\t.entry-date{
\t\t\t\tfloat: right;
\t\t\t}
\t\t\t.entry-title{
\t\t\t\tmargin-top: 38px;
\t\t\t}
\t\t";
        }
        // line 52
        echo "\t</style>
\t";
        // line 53
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 54
            echo "
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 59
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:Actualites:index.html.twig", 59)->display($context);
            echo " 
\t";
        }
        // line 61
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 62
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:Actualites:index.html.twig", 62)->display($context);
            echo " 
\t";
        }
        // line 64
        echo "\t
\t<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/backgrounds/parralax_3.jpg"), "html", null, true);
        echo "');\">
\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 73
        echo "\t\t\t\t
\t\t\t</div>
\t\t</section>
\t</section>

\t<main class=\"xs-main\">
\t<!-- blog section -->
\t<section class=\"xs-content-section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-lg-first\">
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t\t<h2 class=\"color-title-b\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.actualites"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.accueil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.actualites"), "html", null, true);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 98
        echo "\t\t\t<div class=\"row xs-mb-50 list-articles\">
\t\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 100
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["article"], "status", []) != "draft")) {
                // line 101
                echo "\t\t\t\t\t\t<a href=\"\" title=\"\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 articles-details\" data-id=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
                // line 105
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["article"], "image", [])) > 0)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(twig_first($this->env, $this->getAttribute($context["article"], "image", [])), "Objectkey", []))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/noimage.png"))), "html", null, true);
                echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo_onde.png"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-header\" style=\"min-height: 190px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 118
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "creationDate", []), "d"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 120
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["article"], "creationDate", []), "m") == 1)) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يناير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 122
$context["article"], "creationDate", []), "m") == 2)) {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   فبراير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 124
$context["article"], "creationDate", []), "m") == 3)) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مارس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 126
$context["article"], "creationDate", []), "m") == 4)) {
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ابريل
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 128
$context["article"], "creationDate", []), "m") == 5)) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مايو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 130
$context["article"], "creationDate", []), "m") == 6)) {
                        // line 131
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يونيو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 132
$context["article"], "creationDate", []), "m") == 7)) {
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يوليو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 134
$context["article"], "creationDate", []), "m") == 8)) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أغسطس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 136
$context["article"], "creationDate", []), "m") == 9)) {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   سبتمبر\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 138
$context["article"], "creationDate", []), "m") == 10)) {
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أكتوبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 140
$context["article"], "creationDate", []), "m") == 11)) {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   نوفمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 142
$context["article"], "creationDate", []), "m") == 12)) {
                        // line 143
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ديسمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "creationDate", []), "Y"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "creationDate", []), "d M Y"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 156
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", []), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titreEn", []), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titreAr", []), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t\t";
        // line 200
        echo "\t\t\t\t";
        // line 403
        echo "\t\t\t</div><!-- .row end -->

\t\t\t<!-- pagination -->
\t\t\t";
        // line 422
        echo "\t\t
\t\t</div>
\t</section>\t
</main>
\t";
        // line 426
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCOndeBundle:Default:footer"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 428
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 429
        echo "\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-act\").addClass('active');
\t\t});
\t</script>
\t<script>
        \$('.articles-details').on('click',function(e){
            var id = \$(this).attr(\"data-id\");
            path = '";
        // line 438
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => "1"]);
        echo "';
            path = path.replace('1',id);
            \$.ajax({
                type: 'POST',
                url: path,
                data : {'id' : id},
                success: function(data) {
                   \tvar path = '";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => 1]);
        echo "';

                   \twindow.location.href = path.replace(\"1\", id);

                },
                error: function(data) {
                },
            });
        });      
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Actualites:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 445,  434 => 438,  423 => 429,  414 => 428,  402 => 426,  396 => 422,  391 => 403,  389 => 200,  387 => 174,  381 => 173,  371 => 165,  365 => 163,  362 => 162,  356 => 160,  353 => 159,  347 => 157,  345 => 156,  338 => 151,  332 => 149,  329 => 148,  322 => 145,  318 => 143,  316 => 142,  313 => 141,  311 => 140,  308 => 139,  306 => 138,  303 => 137,  301 => 136,  298 => 135,  296 => 134,  293 => 133,  291 => 132,  288 => 131,  286 => 130,  283 => 129,  281 => 128,  278 => 127,  276 => 126,  273 => 125,  271 => 124,  268 => 123,  266 => 122,  263 => 121,  261 => 120,  256 => 119,  254 => 118,  242 => 109,  238 => 107,  234 => 105,  228 => 102,  225 => 101,  222 => 100,  218 => 99,  215 => 98,  208 => 91,  202 => 90,  194 => 85,  180 => 73,  174 => 65,  171 => 64,  165 => 62,  162 => 61,  156 => 59,  153 => 58,  144 => 57,  132 => 54,  130 => 53,  127 => 52,  111 => 38,  109 => 37,  72 => 4,  63 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TWCOndeBundle::ondelayout.html.twig' %}
{% block Title %}{{\"header.actualites\"|trans}} {{parent()}}{% endblock %}
{% block Style %}
\t{{parent()}}
\t<style>
\t\t.xs-unorder-list.check li{
\t\t\tpadding-left: 60px !important;
\t\t}
\t\t.left-descri{
\t\t\t\ttext-align: left;
\t\t\t}
\t\t.xs-banner-inner-section{
\t\t\tpadding-bottom: 0px;
\t\t}
\t\t.entry-date{
\t\t\tcolor: #87ae81; font-size: 1.14286em; display: inline-block; line-height: 1;
\t\t}
\t\t.entry-date:hover{
\t\t\tcolor: #87ae81; font-size: 1.14286em; display: inline-block; line-height: 1;
\t\t}
\t\t.entry-title{
\t\t\tdisplay: -webkit-box;
\t\t    -webkit-line-clamp: 3;
\t\t    -webkit-box-orient: vertical;
\t\t    overflow: hidden;
\t\t    text-overflow: ellipsis;
\t\t    color: #1e1e1e !important;
\t\t}
\t\t.breadcrumb{
\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tmargin-top:15px;position: initial;
\t\t\t}
\t\t}
\t\t{% if app.request.locale == \"ar\" %}
\t\t\t.list-articles\t{
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.entry-meta{
\t\t\t\tfloat: left;
\t\t\t\tdirection: ltr;
\t\t\t}
\t\t\t.entry-date{
\t\t\t\tfloat: right;
\t\t\t}
\t\t\t.entry-title{
\t\t\t\tmargin-top: 38px;
\t\t\t}
\t\t{% endif %}
\t</style>
\t{% if app.request.locale == \"ar\" %}

\t{% endif %}
{% endblock %}
{% block body %}
\t{% if app.request.locale != \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:header.html.twig\" %} 
\t{% endif %}
\t{% if app.request.locale == \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:headerAr.html.twig\" %} 
\t{% endif %}
\t
\t<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('{{asset('front/images/backgrounds/parralax_3.jpg')}}');\">
\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t{# <div class=\"color-white xs-inner-banner-content\">
\t\t\t\t\t<ul class=\"xs-breadcumb\">
\t\t\t\t\t\t<li class=\"badge badge-pill badge-primary\"><a href=\"index.html\" class=\"color-white\"> {{\"plaidoyer.text1\"|trans}} /</a> {{\"plaidoyer.text2\"|trans}}</li>
\t\t\t\t\t</ul>
\t\t\t\t</div> #}
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t</section>

\t<main class=\"xs-main\">
\t<!-- blog section -->
\t<section class=\"xs-content-section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-lg-first\">
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t\t<h2 class=\"color-title-b\">{{\"header.actualites\"|trans}}</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('twc_onde_homepage')}}\">{{\"header.accueil\"|trans}}</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{\"header.actualites\"|trans}}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# <div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t<h2 class=\"color-title-b\">Actualités</h2>
\t\t\t</div> #}
\t\t\t<div class=\"row xs-mb-50 list-articles\">
\t\t\t\t{% for article in articles %}
\t\t\t\t\t{% if article.status != \"draft\" %}
\t\t\t\t\t\t<a href=\"\" title=\"\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 articles-details\" data-id=\"{{article.id}}\">
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/logo_onde.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-header\" style=\"min-height: 190px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{article.creationDate|date(\"d\")}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if article.creationDate|date(\"m\") == 01 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يناير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 02 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   فبراير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 03 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مارس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 04 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ابريل
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 05 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مايو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 06 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يونيو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 07 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يوليو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 08 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أغسطس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 09 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   سبتمبر\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 10 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أكتوبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 11 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   نوفمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 12 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ديسمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{article.creationDate|date(\"Y\")}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale != \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{article.creationDate|date(\"d M Y\")}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{article.titre}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{article.titreEn}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{article.titreAr}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t{# <div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal  xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_2.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_2.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t02 May 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">South african pre primary school build for children</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div> #}
\t\t\t\t{# <div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal  xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_3.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_3.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"author-name\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Evan</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t13 January 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">Provide pure water for syrian poor people</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_4.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_4.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"author-name\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Evan</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t27th August 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">Brilliant After All, A New Album by Rebecca: Help poor people</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal  xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_5.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_5.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"author-name\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Revol</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t02 May 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">South african pre primary school build for children</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal  xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_6.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_6.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"author-name\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Jocky</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t13 January 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">Provide pure water for syrian poor people</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_7.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_7.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"author-name\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Kalina</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t27th August 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">Brilliant After All, A New Album by Rebecca: Help poor people</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_8.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_8.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"author-name\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Killer</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t02 May 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">South african pre primary school build for children</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal\">
\t\t\t\t\t\t<div class=\"entry-thumbnail \">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/blog/blog_9.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t\t<span class=\"xs-round-avatar\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('assets/images/avatar/avatar_9.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"author-name\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Miller</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t13 January 2017
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t<a href=\"#\">Provide pure water for syrian poor people</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div> #}
\t\t\t</div><!-- .row end -->

\t\t\t<!-- pagination -->
\t\t\t{# <ul class=\"pagination justify-content-center xs-pagination\">
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\"><a class=\"page-link active\" href=\"#\">1</a></li>
\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
\t\t\t\t<li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\">...</a></li>
\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">12</a></li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul> #}\t\t
\t\t</div>
\t</section>\t
</main>
\t{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-act\").addClass('active');
\t\t});
\t</script>
\t<script>
        \$('.articles-details').on('click',function(e){
            var id = \$(this).attr(\"data-id\");
            path = '{{ path('index_details', {id: '1' }) }}';
            path = path.replace('1',id);
            \$.ajax({
                type: 'POST',
                url: path,
                data : {'id' : id},
                success: function(data) {
                   \tvar path = '{{ path(\"index_details\", {id: 1}) }}';

                   \twindow.location.href = path.replace(\"1\", id);

                },
                error: function(data) {
                },
            });
        });      
    </script>
{% endblock %}", "TWCOndeBundle:Actualites:index.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Actualites/index.html.twig");
    }
}
