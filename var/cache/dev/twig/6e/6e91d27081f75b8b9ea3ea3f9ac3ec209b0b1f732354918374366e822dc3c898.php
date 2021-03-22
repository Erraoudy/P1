<?php

/* TWCOndeBundle:Actualites:details.html.twig */
class __TwigTemplate_63b5cf0a87769782947883cfb0b4268f059b2d3e2685f6aecf92b1a33329637b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:Actualites:details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Actualites:details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Actualites:details.html.twig"));

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
\t\t.entry-title > a {
\t\t    color: #041d57 !important;
\t\t}
\t\tfont{
\t\t\t    font-size: 16px !important;
\t\t    line-height: 20px !important;
\t\t    letter-spacing: 1px !important;
\t\t}
\t\t.entry-title{
\t\t\tcolor: #1e1e1e !important;
\t\t}
\t\t.breadcrumb{
\t\t\tfloat: right;
\t\t\tposition: initial;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tfloat: none;
\t\t\t}
\t\t}
\t\t";
        // line 41
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 42
            echo "\t\t\t.xs-blog-single\t{
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.entry-title{
\t\t\t\ttext-align: right;
\t\t\t}
\t\t";
        }
        // line 49
        echo "\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 53
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:Actualites:details.html.twig", 53)->display($context);
            echo " 
\t";
        }
        // line 55
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 56
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:Actualites:details.html.twig", 56)->display($context);
            echo " 
\t";
        }
        // line 58
        echo "\t
\t<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/backgrounds/parralax_3.jpg"), "html", null, true);
        echo "');\">
\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t</section>

\t<main class=\"xs-main\">\t\t\t\t
\t<!-- blog single post -->
\t<div class=\"xs-content-section-padding xs-blog-single\">
\t<div class=\"container\">
\t\t";
        // line 74
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 col-md-12 text-lg-right\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.accueil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.actualites"), "html", null, true);
        echo "</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-8\">
\t\t\t\t<!-- format standard -->

\t\t\t\t<article class=\"post format-standard hentry xs-blog-post-details\">
\t\t\t\t\t";
        // line 87
        if (twig_in_filter("mp4", $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "publication", []))) {
            // line 88
            echo "\t\t\t\t\t\t<video  controls style=\"margin-bottom: 45px;width: 100%;\">
\t\t\t\t\t\t  <source src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "publication", [])), "html", null, true);
            echo "\" type=\"video/mp4\">
\t\t\t\t\t\t  <source src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "publication", [])), "html", null, true);
            echo "\" type=\"video/ogg\">
\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t\t</video>
\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t<div class=\"post-media post-image\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", [])) > 0)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", [])), "Objectkey", []))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/noimage.png"))), "html", null, true);
            echo ");height: 450px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t";
            // line 96
            echo "\t\t\t\t\t\t</div><!-- .post-media END -->
\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t

\t\t\t\t\t<div class=\"post-body xs-border xs-padding-40\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"post-meta row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 xs-padding-0\">
\t\t\t\t \t\t\t\t\t<span class=\"post-meta-date\">
\t\t\t\t \t\t\t\t\t\t";
        // line 105
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "d"), "html", null, true);
            echo "</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 107
            if ((twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 1)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t   يناير
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 109
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 2)) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t\t   فبراير
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 111
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 3)) {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t\t   مارس
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 113
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 4)) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t   ابريل
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 115
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 5)) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t\t   مايو
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 117
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 6)) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t   يونيو
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 119
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 7)) {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t   يوليو
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 121
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 8)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t   أغسطس
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 123
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 9)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t   سبتمبر\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 125
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 10)) {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t\t   أكتوبر
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 127
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 11)) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t   نوفمبر
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 129
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 12)) {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t\t   ديسمبر
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 135
            echo "\t\t\t\t \t\t\t\t\t\t\t<b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "d"), "html", null, true);
            echo "</b> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "M"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t \t\t\t\t\t</span>
\t\t\t\t \t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- .row end -->
\t\t\t \t\t\t\t<h2 class=\"entry-title xs-post-entry-title\">
\t\t\t\t \t\t\t\t";
        // line 141
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "titre", []), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
            // line 145
            echo "\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "titreEn", []), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t";
        }
        // line 147
        echo "\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "titreAr", []), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t \t\t\t</h2>
\t\t\t\t\t\t</div><!-- header end -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t";
        // line 154
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
            // line 155
            echo "\t\t\t\t\t\t\t\t<p class=\"content-de\">";
            echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "contenu", []);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 157
        echo "\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
            // line 158
            echo "\t\t\t\t\t\t\t\t<p class=\"content-de\">";
            echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "contenuEn", []);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 161
            echo "\t\t\t\t\t\t\t\t<p class=\"content-de\">";
            echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "contenuAr", []);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 163
        echo "\t\t\t\t\t\t\t
";
        // line 169
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- .xs-entry-content END -->

\t\t\t\t\t</div><!-- post-body end -->
\t\t\t\t</article><!-- .post  END -->
\t\t\t</div>
\t\t\t<div class=\"col-md-12 col-lg-4\">
\t\t\t\t<!-- sidebar content -->
\t\t\t\t<div class=\"sidebar sidebar-right\">
\t\t\t\t\t<!-- search bar start -->
\t\t\t\t\t";
        // line 185
        echo "\t\t\t\t\t<!-- search bas stop -->
\t\t\t\t\t<!-- recent post start -->
\t\t\t\t\t<div class=\"widget recent-posts xs-sidebar-widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.actualites"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<ul class=\"xs-recent-post-widget\">
\t\t\t\t\t\t\t";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 191
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["item"], "status", []) != "draft")) {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"posts-thumb float-left\"> 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => $this->getAttribute($context["item"], "id", [])]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"img\" class=\"img-responsive\" src=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/news_feeds_1.jpg"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"xs-entry-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 197
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date d-block\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "d"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-month d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 200
                    if ((twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 1)) {
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يناير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 202
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 2)) {
                        // line 203
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   فبراير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 204
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 3)) {
                        // line 205
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مارس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 206
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 4)) {
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ابريل
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 208
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 5)) {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مايو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 210
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 6)) {
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يونيو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 212
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 7)) {
                        // line 213
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يوليو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 214
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 8)) {
                        // line 215
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أغسطس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 216
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 9)) {
                        // line 217
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   سبتمبر\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 218
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 10)) {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أكتوبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 220
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 11)) {
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   نوفمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 222
($context["article"] ?? $this->getContext($context, "article")), "creationDate", []), "m") == 12)) {
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ديسمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
                    // line 229
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date d-block\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "creationDate", []), "d"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-month d-block\">";
                    // line 230
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "creationDate", []), "M"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"xs-black-overlay bg-aqua\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div><!-- .posts-thumb END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => $this->getAttribute($context["item"], "id", [])]), "html", null, true);
                echo "\" style=\"text-overflow: ellipsis;
\t\t\t\t\t\t\t\t\t\t\t    white-space: nowrap;
\t\t\t\t\t\t\t\t\t\t\t    overflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t    width: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t    ";
                // line 242
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
                    // line 243
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
                    // line 246
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titreEn", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
                    // line 249
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titreAr", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 251
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div><!-- .post-info END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</li><!-- 1st post end-->
\t\t\t\t\t\t\t\t";
            }
            // line 257
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 293
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"widget widget_call_to_action\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block\">
\t\t\t\t\t\t\t<img src=\"assets/images/side_add_baner.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>\t
\t\t</div><!-- .row end -->
\t</div><!-- .container end -->
</div>\t<!-- End blog single post -->

</main>
\t";
        // line 308
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCOndeBundle:Default:footer"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 310
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 311
        echo "\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Actualites:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 311,  603 => 310,  591 => 308,  574 => 293,  571 => 258,  565 => 257,  557 => 251,  551 => 249,  548 => 248,  542 => 246,  539 => 245,  533 => 243,  531 => 242,  524 => 238,  516 => 232,  511 => 230,  506 => 229,  503 => 228,  498 => 225,  494 => 223,  492 => 222,  489 => 221,  487 => 220,  484 => 219,  482 => 218,  479 => 217,  477 => 216,  474 => 215,  472 => 214,  469 => 213,  467 => 212,  464 => 211,  462 => 210,  459 => 209,  457 => 208,  454 => 207,  452 => 206,  449 => 205,  447 => 204,  444 => 203,  442 => 202,  439 => 201,  437 => 200,  431 => 198,  429 => 197,  424 => 195,  420 => 194,  416 => 192,  413 => 191,  409 => 190,  404 => 188,  399 => 185,  387 => 169,  384 => 163,  378 => 161,  375 => 160,  369 => 158,  366 => 157,  360 => 155,  358 => 154,  352 => 150,  346 => 148,  343 => 147,  337 => 145,  334 => 144,  328 => 142,  326 => 141,  320 => 137,  312 => 135,  309 => 134,  305 => 132,  301 => 130,  299 => 129,  296 => 128,  294 => 127,  291 => 126,  289 => 125,  286 => 124,  284 => 123,  281 => 122,  279 => 121,  276 => 120,  274 => 119,  271 => 118,  269 => 117,  266 => 116,  264 => 115,  261 => 114,  259 => 113,  256 => 112,  254 => 111,  251 => 110,  249 => 109,  246 => 108,  244 => 107,  239 => 106,  237 => 105,  228 => 98,  224 => 96,  219 => 94,  212 => 90,  208 => 89,  205 => 88,  203 => 87,  191 => 78,  185 => 77,  180 => 74,  165 => 59,  162 => 58,  156 => 56,  153 => 55,  147 => 53,  144 => 52,  135 => 51,  124 => 49,  115 => 42,  113 => 41,  72 => 4,  63 => 3,  43 => 2,  11 => 1,);
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
\t\t.entry-title > a {
\t\t    color: #041d57 !important;
\t\t}
\t\tfont{
\t\t\t    font-size: 16px !important;
\t\t    line-height: 20px !important;
\t\t    letter-spacing: 1px !important;
\t\t}
\t\t.entry-title{
\t\t\tcolor: #1e1e1e !important;
\t\t}
\t\t.breadcrumb{
\t\t\tfloat: right;
\t\t\tposition: initial;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tfloat: none;
\t\t\t}
\t\t}
\t\t{% if app.request.locale == \"ar\" %}
\t\t\t.xs-blog-single\t{
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.entry-title{
\t\t\t\ttext-align: right;
\t\t\t}
\t\t{% endif %}
\t</style>
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
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t</section>

\t<main class=\"xs-main\">\t\t\t\t
\t<!-- blog single post -->
\t<div class=\"xs-content-section-padding xs-blog-single\">
\t<div class=\"container\">
\t\t{# <div class=\" xs-inner-banner-content pb-3\">
\t\t\t<h2 class=\"color-title-b\">Details</h2>
\t\t</div> #}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 col-md-12 text-lg-right\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('twc_onde_homepage')}}\">{{\"header.accueil\"|trans}}</a></li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{\"header.actualites\"|trans}}</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-8\">
\t\t\t\t<!-- format standard -->

\t\t\t\t<article class=\"post format-standard hentry xs-blog-post-details\">
\t\t\t\t\t{% if 'mp4' in article.publication %}
\t\t\t\t\t\t<video  controls style=\"margin-bottom: 45px;width: 100%;\">
\t\t\t\t\t\t  <source src=\"{{ asset(article.publication)}}\" type=\"video/mp4\">
\t\t\t\t\t\t  <source src=\"{{ asset(article.publication)}}\" type=\"video/ogg\">
\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t\t</video>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"post-media post-image\" style=\"background-image: url({{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }});height: 450px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" class=\"img-responsive\" alt=\"\" style=\"height: 440px;\"> #}
\t\t\t\t\t\t</div><!-- .post-media END -->
\t\t\t\t\t{% endif %}
\t\t\t\t\t

\t\t\t\t\t<div class=\"post-body xs-border xs-padding-40\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t<div class=\"post-meta row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 xs-padding-0\">
\t\t\t\t \t\t\t\t\t<span class=\"post-meta-date\">
\t\t\t\t \t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t<b>{{article.creationDate|date(\"d\")}}</b>
\t\t\t\t\t\t\t\t\t\t\t{% if article.creationDate|date(\"m\") == 01 %}
\t\t\t\t\t\t\t\t\t\t\t   يناير
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 02 %}
\t\t\t\t\t\t\t\t\t\t\t   فبراير
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 03 %}
\t\t\t\t\t\t\t\t\t\t\t   مارس
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 04 %}
\t\t\t\t\t\t\t\t\t\t\t   ابريل
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 05 %}
\t\t\t\t\t\t\t\t\t\t\t   مايو
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 06 %}
\t\t\t\t\t\t\t\t\t\t\t   يونيو
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 07 %}
\t\t\t\t\t\t\t\t\t\t\t   يوليو
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 08 %}
\t\t\t\t\t\t\t\t\t\t\t   أغسطس
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 09 %}
\t\t\t\t\t\t\t\t\t\t\t   سبتمبر\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 10 %}
\t\t\t\t\t\t\t\t\t\t\t   أكتوبر
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 11 %}
\t\t\t\t\t\t\t\t\t\t\t   نوفمبر
\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 12 %}
\t\t\t\t\t\t\t\t\t\t\t   ديسمبر
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if app.request.locale != \"ar\" %}
\t\t\t\t \t\t\t\t\t\t\t<b>{{article.creationDate|date(\"d\")}}</b> {{article.creationDate|date(\"M\")}}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t \t\t\t\t\t</span>
\t\t\t\t \t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- .row end -->
\t\t\t \t\t\t\t<h2 class=\"entry-title xs-post-entry-title\">
\t\t\t\t \t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{article.titre}}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{article.titreEn}}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{article.titreAr}}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t \t\t\t</h2>
\t\t\t\t\t\t</div><!-- header end -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t<p class=\"content-de\">{{article.contenu|raw}}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t<p class=\"content-de\">{{article.contenuEn|raw}}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t<p class=\"content-de\">{{article.contenuAr|raw}}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
{# 
\t\t\t\t\t\t\t<p>Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary grow familiar with the countless indescribable forms of the insects and flies.  </p>


\t\t\t\t\t\t\t<p>Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary grow familiar with the countless indescribable forms of the insects and flies.  </p> #}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- .xs-entry-content END -->

\t\t\t\t\t</div><!-- post-body end -->
\t\t\t\t</article><!-- .post  END -->
\t\t\t</div>
\t\t\t<div class=\"col-md-12 col-lg-4\">
\t\t\t\t<!-- sidebar content -->
\t\t\t\t<div class=\"sidebar sidebar-right\">
\t\t\t\t\t<!-- search bar start -->
\t\t\t\t\t{# <div class=\"widget widget_search\">\t
\t\t\t\t\t\t<form class=\"xs-serachForm\" method=\"get\" action=\"GET\">
\t\t\t\t\t\t\t<input type=\"search\" name=\"search\" placeholder=\"Type keywords...\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div> #}
\t\t\t\t\t<!-- search bas stop -->
\t\t\t\t\t<!-- recent post start -->
\t\t\t\t\t<div class=\"widget recent-posts xs-sidebar-widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">{{\"header.actualites\"|trans}}</h3>
\t\t\t\t\t\t<ul class=\"xs-recent-post-widget\">
\t\t\t\t\t\t\t{% for item in articles %}
\t\t\t\t\t\t\t\t{% if item.status != \"draft\" %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"posts-thumb float-left\"> 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index_details', {id: item.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"img\" class=\"img-responsive\" src=\"{{asset('assets/images/news_feeds_1.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"xs-entry-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date d-block\">{{article.creationDate|date(\"d\")}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-month d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if article.creationDate|date(\"m\") == 01 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يناير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 02 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   فبراير
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 03 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مارس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 04 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ابريل
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 05 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   مايو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 06 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يونيو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 07 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   يوليو
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 08 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أغسطس
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 09 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   سبتمبر\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 10 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   أكتوبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 11 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   نوفمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif article.creationDate|date(\"m\") == 12 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ديسمبر
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale != \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date d-block\">{{item.creationDate|date(\"d\")}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-month d-block\">{{item.creationDate|date(\"M\")}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"xs-black-overlay bg-aqua\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div><!-- .posts-thumb END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index_details', {id: item.id }) }}\" style=\"text-overflow: ellipsis;
\t\t\t\t\t\t\t\t\t\t\t    white-space: nowrap;
\t\t\t\t\t\t\t\t\t\t\t    overflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t    width: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t    {% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{item.titre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{item.titreEn}}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{item.titreAr}}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div><!-- .post-info END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</li><!-- 1st post end-->
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{# <li>
\t\t\t\t\t\t\t\t<div class=\"posts-thumb float-left\"> 
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"img\" class=\"img-responsive\" src=\"{{asset('assets/images/news_feeds_2.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"xs-entry-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date d-block\">23</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-month d-block\">sep</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"xs-black-overlay bg-aqua\"></div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Disaster Relief</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"posts-thumb float-left\"> 
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"img\" class=\"img-responsive\" src=\"{{asset('assets/images/news_feeds_2.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"xs-entry-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date d-block\">05</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"entry-month d-block\">oct</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"xs-black-overlay bg-aqua\"></div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Disaster Relief</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"widget widget_call_to_action\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block\">
\t\t\t\t\t\t\t<img src=\"assets/images/side_add_baner.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>\t
\t\t</div><!-- .row end -->
\t</div><!-- .container end -->
</div>\t<!-- End blog single post -->

</main>
\t{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t});
\t</script>
{% endblock %}", "TWCOndeBundle:Actualites:details.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Actualites/details.html.twig");
    }
}
