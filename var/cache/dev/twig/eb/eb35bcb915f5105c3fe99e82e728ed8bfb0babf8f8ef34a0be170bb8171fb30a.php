<?php

/* TWCOndeBundle:Onde:presentation.html.twig */
class __TwigTemplate_8c40d2fce84658e0179e1446ee552a92498ecb7751f96beb52b48a1f4978fe89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:Onde:presentation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Onde:presentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Onde:presentation.html.twig"));

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
\t\t";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 7
            echo "\t\t\t.content-center{
\t\t\t\tpadding-right: 0px;
\t\t\t}
\t\t\t.black-title{
\t\t\t\ttext-align: right !important;
\t\t\t}
\t\t";
        }
        // line 14
        echo "\t\t.breadcrumb{
\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tmargin-top:15px;position: initial;
\t\t\t}
\t\t}
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

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 44
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:Onde:presentation.html.twig", 44)->display($context);
            echo " 
\t";
        }
        // line 46
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 47
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:Onde:presentation.html.twig", 47)->display($context);
            echo " 
\t";
        }
        // line 49
        echo "<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/front/images/backgrounds/parralax_3.jpg"), "html", null, true);
        echo "')\">
\t<div class=\"xs-black-overlay\"></div>
\t";
        // line 56
        echo "\t<div class=\"container\">
\t\t<div class=\"color-white xs-inner-banner-content\">
\t\t\t";
        // line 59
        echo "\t\t\t";
        // line 62
        echo "\t\t</div>
\t</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class=\"xs-main\">
\t<!-- video popup section section -->
\t<div class=\"xs-video-popup-section video-content\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 content-center\">
\t\t\t\t";
        // line 78
        echo "\t\t\t\t<div class=\"xs-video-popup-wraper video-container\">
\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"";
        // line 79
        echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "en")) ? ("https://www.youtube.com/embed/mdZIN4nEyxo") : ("https://www.youtube.com/embed/_iqhy55OSe8"));
        echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t\t\t\t";
        // line 85
        echo "<!-- .xs-video-popup-content end -->
\t\t\t\t</div><!-- .xs-video-popup-wraper end -->
\t\t\t</div>
\t\t</div><!-- .row end -->
\t</div><!-- .container end -->
</div>
<section class=\"xs-content-section-padding pt-section-presentation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-lg-first\">
\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t<h2 class=\"color-title-b\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("presentation.text2"), "html", null, true);
        echo "</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.accueil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.ONDEenBref"), "html", null, true);
        echo "</li>
\t\t\t\t\t
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 content-center\">

\t\t\t\t";
        // line 117
        echo "\t\t\t\t<div class=\"xs-event-content\">
\t\t\t\t\t<p>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("presentation.text3"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t";
        // line 184
        echo "</section>\t


</main>
\t";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCOndeBundle:Default:footer"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 191
        echo "\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-it\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-it .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Onde:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 191,  252 => 190,  240 => 188,  234 => 184,  226 => 118,  223 => 117,  212 => 102,  206 => 101,  198 => 96,  185 => 85,  181 => 79,  178 => 78,  164 => 62,  162 => 59,  158 => 56,  152 => 49,  146 => 47,  143 => 46,  137 => 44,  134 => 43,  125 => 42,  88 => 14,  79 => 7,  77 => 6,  71 => 4,  62 => 3,  43 => 2,  11 => 1,);
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
\t\t{% if app.request.locale == \"ar\" %}
\t\t\t.content-center{
\t\t\t\tpadding-right: 0px;
\t\t\t}
\t\t\t.black-title{
\t\t\t\ttext-align: right !important;
\t\t\t}
\t\t{% endif %}
\t\t.breadcrumb{
\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t}
\t\t@media only screen and (max-width: 992px){
\t\t\t.breadcrumb{
\t\t\t\tmargin-top:15px;position: initial;
\t\t\t}
\t\t}
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
<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('{{asset('/front/images/backgrounds/parralax_3.jpg')}}')\">
\t<div class=\"xs-black-overlay\"></div>
\t{# <div class=\"container\">
\t\t<div class=\"color-white xs-inner-banner-content\">
\t\t\t<h2>{{\"presentation.title\"|trans}}</h2>
\t\t</div>
\t</div> #}
\t<div class=\"container\">
\t\t<div class=\"color-white xs-inner-banner-content\">
\t\t\t{# <h2>{{\"presentation.title\"|trans}}</h2> #}
\t\t\t{# <ul class=\"xs-breadcumb\">
\t\t\t\t<li class=\"badge badge-pill badge-primary\"><a href=\"index.html\" class=\"color-white\"> {{\"presentation.text1\"|trans}} /</a> {{\"presentation.text2\"|trans}}</li>
\t\t\t</ul> #}
\t\t</div>
\t</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class=\"xs-main\">
\t<!-- video popup section section -->
\t<div class=\"xs-video-popup-section video-content\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 content-center\">
\t\t\t\t{# <div style=\"padding:56.25% 0 0 0;position:relative;\">
\t\t\t\t\t<iframe src=\"https://player.vimeo.com/video/381990622?title=0&byline=0\" style=\"position:absolute;top:0;left:0;width:100%;height:100%;\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe>
\t\t\t\t\t\t
\t\t\t\t\t</div><script src=\"https://player.vimeo.com/api/player.js\"></script> #}
\t\t\t\t<div class=\"xs-video-popup-wraper video-container\">
\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"{{ app.request.locale != \"en\" ? 'https://www.youtube.com/embed/mdZIN4nEyxo': 'https://www.youtube.com/embed/_iqhy55OSe8'}}\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t\t\t\t{# <img src=\"{{asset('assets/images/videoS.png')}}\" alt=\"\">
\t\t\t\t\t<div class=\"xs-video-popup-content\">
\t\t\t\t\t\t<a href=\"{{asset('assets/files/ONDE Vierge.mp4')}}\" class=\"xs-video-popup xs-round-btn\">
\t\t\t\t\t\t\t<i class=\"fa fa-play\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div> #}<!-- .xs-video-popup-content end -->
\t\t\t\t</div><!-- .xs-video-popup-wraper end -->
\t\t\t</div>
\t\t</div><!-- .row end -->
\t</div><!-- .container end -->
</div>
<section class=\"xs-content-section-padding pt-section-presentation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-lg-first\">
\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t<h2 class=\"color-title-b\">{{\"presentation.text2\"|trans}}</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('twc_onde_homepage')}}\">{{\"header.accueil\"|trans}}</a></li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{\"header.aProposONDE.ONDEenBref\"|trans}}</li>
\t\t\t\t\t
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 content-center\">

\t\t\t\t{# <div class=\"xs-event-content\" style=\"display: inline-flex;\">
\t\t\t\t\t<h4>{{\"presentation.text2\"|trans}}</h4>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('twc_onde_homepage')}}\">Accueil</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">L'ONDE en bref</li>
\t\t\t\t\t</ol>
\t\t\t\t</div> #}
\t\t\t\t<div class=\"xs-event-content\">
\t\t\t\t\t<p>{{\"presentation.text3\"|trans}}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t{# <div class=\"row\" >
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"xs-service-slider-content\">
\t\t\t\t\t\t\t<h2 class=\"black-title\">{{\"presentation.realisation.first.title\"|trans}}</h2>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<p class=\"link-re\">{{\"presentation.realisation.first.description\"|trans}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-service-slider-content END -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 bkg-re\" style=\"background-image:url('{{asset('front/images/backgrounds/vacc.jpg')}}');\">
\t\t\t\t\t</div>
\t\t</div>
\t\t<hr class=\"ligne-sepa\">
\t\t<div class=\"row mat-5\" style=\"margin-top: 10rem !important;\">
\t\t\t<div class=\"col-lg-6 bkg-re\" style=\"background-image:url('{{asset('front/images/backgrounds/douar.jpg')}}');background-size: contain;\">
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"xs-service-slider-content\">
\t\t\t\t\t<h2 class=\"black-title\">{{\"presentation.realisation.second.title\"|trans}}</h2>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<p class=\"link-re\">{{\"presentation.realisation.second.description1\"|trans}} :</p>
\t\t\t\t\t\t\t<ul class=\"xs-unorder-list check list-re\">
\t\t\t\t\t\t\t\t<li><p class=\"link-re\">{{\"presentation.realisation.second.description2\"|trans}}</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ul class=\"xs-unorder-list check list-re\">
\t\t\t\t\t\t\t\t<li><p class=\"link-re\">{{\"presentation.realisation.second.description3\"|trans}}</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- .xs-service-slider-content END -->
\t\t\t</div>
\t\t</div>
\t\t<hr class=\"ligne-sepa\">
\t\t<div class=\"row mat-5\" style=\"margin-top: 10rem !important;\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"xs-service-slider-content\">
\t\t\t\t\t<h2 class=\"black-title\">{{\"presentation.realisation.third.title\"|trans}}</h2>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<p class=\"link-re\">{{\"presentation.realisation.third.description1\"|trans}} :</p>
\t\t\t\t\t\t\t<ul class=\"xs-unorder-list check list-re\">
\t\t\t\t\t\t\t\t<li class=\"firt-list\"><p class=\"link-re\">{{\"presentation.realisation.third.description2\"|trans}} :</p></li>
\t\t\t\t\t\t\t\t<li><p class=\"link-re\">{{\"presentation.realisation.third.description3\"|trans}} :</p></li>
\t\t\t\t\t\t\t</ul><!-- .xs-unorder-list .check END -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ul class=\"xs-unorder-list check list-re\">
\t\t\t\t\t\t\t\t<li><p class=\"link-re\">{{\"presentation.realisation.third.description4\"|trans}} :</p></li>
\t\t\t\t\t\t\t</ul><!-- .xs-unorder-list .check END -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- .xs-service-slider-content END -->
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 bkg-re\" style=\"background-image:url('{{asset('assets/images/img17.jpg')}}');\">
\t\t\t</div>
\t\t</div> #}
</section>\t


</main>
\t{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-it\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-it .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
\t\t});
\t</script>
{% endblock %}", "TWCOndeBundle:Onde:presentation.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Onde/presentation.html.twig");
    }
}
