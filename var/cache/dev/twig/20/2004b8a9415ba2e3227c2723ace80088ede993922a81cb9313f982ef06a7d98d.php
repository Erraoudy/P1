<?php

/* TWCOndeBundle:Actions:participation.html.twig */
class __TwigTemplate_d97f2418feab0eb4751351afb6a48a3260c5508ca3c86ee21777ddf4e1754b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:Actions:participation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Actions:participation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Actions:participation.html.twig"));

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

        echo "Homepage ";
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
\t\t.xs-banner-inner-section{
\t\t\tpadding-bottom: 0px;
\t\t}
\t\t.breadcrumb{
\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tmargin-top:15px;position: initial;
\t\t\t}
\t\t}
\t\t
\t\t.video-container {
\t\t\tposition: relative;
\t\t\tpadding-bottom: 56.25%;
\t\t\tpadding-top: 30px;
\t\t\theight: 0;
\t\t\toverflow: hidden;
\t\t}

\t\t.video-container iframe,  
\t\t.video-container object,  
\t\t.video-container embed {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t}
\t</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 40
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:Actions:participation.html.twig", 40)->display($context);
            echo " 
\t";
        }
        // line 42
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 43
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:Actions:participation.html.twig", 43)->display($context);
            echo " 
\t";
        }
        // line 45
        echo "\t<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/backgrounds/parralax_3.jpg"), "html", null, true);
        echo "');\">
\t\t<div class=\"xs-black-overlay\"></div>
\t\t<div class=\"container\">
\t\t\t";
        // line 51
        echo "\t\t</div>
\t</section>

<main class=\"xs-main\">
\t<div class=\"xs-content-section-padding xs-blog-single\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-lg-first\">
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t\t<h2 class=\"color-title-b\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("participation.title"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.accueil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.participation"), "html", null, true);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 73
        echo "\t\t\t";
        // line 98
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t\t\t<div class=\"xs-text-content xs-pr-20\">
\t\t\t\t\t\t<p class=\"p-description-first\">
\t\t\t\t\t\t\t";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("participation.description1"), "html", null, true);
        echo " 
\t\t\t\t\t\t</p>
\t\t\t\t\t</div><!-- .xs-text-content END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t";
        // line 108
        echo "\t\t\t\t\t<div class=\"video-container\">
\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"";
        // line 109
        echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "en")) ? ("https://www.youtube.com/embed/yBYHW-xa9oo") : ("https://www.youtube.com/embed/3qTLTuq7vJo"));
        echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 118
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCOndeBundle:Default:footer"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 126
        echo "\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-pr\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-pr .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Actions:participation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 126,  225 => 125,  213 => 123,  206 => 118,  201 => 109,  198 => 108,  190 => 102,  184 => 98,  182 => 73,  175 => 66,  169 => 65,  161 => 60,  150 => 51,  143 => 45,  137 => 43,  134 => 42,  128 => 40,  125 => 39,  116 => 38,  71 => 4,  62 => 3,  43 => 2,  11 => 1,);
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
{% block Title %}Homepage {{parent()}}{% endblock %}
{% block Style %}
\t{{parent()}}
\t<style>
\t\t.xs-banner-inner-section{
\t\t\tpadding-bottom: 0px;
\t\t}
\t\t.breadcrumb{
\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tmargin-top:15px;position: initial;
\t\t\t}
\t\t}
\t\t
\t\t.video-container {
\t\t\tposition: relative;
\t\t\tpadding-bottom: 56.25%;
\t\t\tpadding-top: 30px;
\t\t\theight: 0;
\t\t\toverflow: hidden;
\t\t}

\t\t.video-container iframe,  
\t\t.video-container object,  
\t\t.video-container embed {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t}
\t</style>

{% endblock %}
{% block body %}
\t{% if app.request.locale != \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:header.html.twig\" %} 
\t{% endif %}
\t{% if app.request.locale == \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:headerAr.html.twig\" %} 
\t{% endif %}
\t<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('{{asset('front/images/backgrounds/parralax_3.jpg')}}');\">
\t\t<div class=\"xs-black-overlay\"></div>
\t\t<div class=\"container\">
\t\t\t{# <div class=\"color-white xs-inner-banner-content pb-3\">
\t\t\t\t<h2>{{\"participation.title\"|trans}}</h2>
\t\t\t</div> #}
\t\t</div>
\t</section>

<main class=\"xs-main\">
\t<div class=\"xs-content-section-padding xs-blog-single\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-lg-first\">
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t\t<h2 class=\"color-title-b\">{{\"participation.title\"|trans}}</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('twc_onde_homepage')}}\">{{\"header.accueil\"|trans}}</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{\"header.projets.participation\"|trans}}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# <div class=\"xs-inner-banner-content pb-3\">
\t\t\t\t<h2 class=\"color-title-b\">{{\"participation.title\"|trans}}</h2>
\t\t\t</div> #}
\t\t\t{# {% if app.request.locale == \"fr\" %}
\t\t\t\t<div class=\"section section-home-bo\">
\t\t\t\t\t<div class=\"container bottom-con\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-8\">
\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img block-mission mb-5\">
\t\t\t\t\t\t\t\t\t{{\"participation.description2\"|trans|raw}} 
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img block-mission second-quote\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 res-first\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div style=\"background-image: url({{asset('assets/images/Med-VI.jpg')}});    height: 400px;background-size: cover;background-repeat: no-repeat;background-position: inherit;margin-top: 15px;margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %} #}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t\t\t<div class=\"xs-text-content xs-pr-20\">
\t\t\t\t\t\t<p class=\"p-description-first\">
\t\t\t\t\t\t\t{{\"participation.description1\"|trans}} 
\t\t\t\t\t\t</p>
\t\t\t\t\t</div><!-- .xs-text-content END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t{# <iframe src=\"https://player.vimeo.com/video/377751403\" width=\"500\" height=\"340\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> #}
\t\t\t\t\t<div class=\"video-container\">
\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"{{ app.request.locale != \"en\" ? 'https://www.youtube.com/embed/yBYHW-xa9oo': 'https://www.youtube.com/embed/3qTLTuq7vJo'}}\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t{# <div class=\"xs-feature-image-box image-1\">
\t\t\t\t\t\t<img src=\"{{asset('assets/images/img4.jpg')}}\" alt=\"\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"xs-feature-image-box image-2\" style=\"margin-top: 0px !important;\">
\t\t\t\t\t\t<img src=\"{{asset('assets/images/img10.jpg')}}\" alt=\"\">
\t\t\t\t\t</div> #}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-pr\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-pr .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
\t\t});
\t</script>
{% endblock %}", "TWCOndeBundle:Actions:participation.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Actions/participation.html.twig");
    }
}
