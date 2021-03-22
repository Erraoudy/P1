<?php

/* TWCOndeBundle:Contact:formulaire.html.twig */
class __TwigTemplate_8368505ea2eab8bc5f6b4418f4b7f7e83b61b1c4fb1664bf460f4c4fc8319131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:Contact:formulaire.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Contact:formulaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Contact:formulaire.html.twig"));

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
\t\t.header-transparent .nav-menu li a .submenu-indicator-chevron{
\t    \tborder-color: transparent #fff #fff transparent;
\t    }
\t    .blue-nav {
\t\t    color: #fff !important;
\t\t}
\t\t.text-message{
\t\t\tborder: 2px solid rgb(200, 200, 200);
\t\t    border-radius: 0px;
\t\t    transition: all 0.4s ease 0s;
\t\t    padding: 13px 29px;
\t\t    width: calc(100% - 55px);
\t\t    /* height: 132px; */
\t\t    margin-top: 0px;
\t\t    margin-bottom: 0px;
\t\t}
\t\t";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 23
            echo "
\t\t\th2,h3,p,input,label {
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.xs-unorder-list, .xs-title{
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.xs-contact-section-v2{
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.xs-unorder-list li i {
\t\t\t    padding: 0 17px;
\t\t\t}
\t\t";
        }
        // line 37
        echo "\t</style>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 42
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:Contact:formulaire.html.twig", 42)->display($context);
            echo " 
\t";
        }
        // line 44
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 45
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:Contact:formulaire.html.twig", 45)->display($context);
            echo " 
\t";
        }
        // line 47
        echo "<section class=\"xs-banner-inner-section parallax-window banner-image-content\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/backgrounds/child.jpg"), "html", null, true);
        echo "')\">
\t<div class=\"xs-black-overlay\"></div>
\t
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class=\"xs-main\">
\t<!-- contact section -->
\t<section class=\"xs-contact-section-v2\">
\t<div class=\"container\">
\t\t<div class=\"xs-contact-container contact-content\" style=\"background-color: white;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"xs-contact-details\">
\t\t\t\t\t<div class=\"xs-widnow-wraper\">
\t\t\t\t\t\t<div class=\"xs-window-top\">
\t\t\t\t\t\t\t<img class=\"img-content\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/rabat.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xs-window-back\">
\t\t\t\t\t\t\t<div id=\"xs-map\" class=\"xs-box-shadow-2\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xs-window-nav\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"xs-window-opener\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- xs-widnow-wraper -->
\t\t\t\t\t<ul class=\"xs-unorder-list\">
\t\t\t\t\t\t<li><i class=\"fa fa-phone color-green\"></i><span>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.tel"), "html", null, true);
        echo "</span></li>
\t\t\t\t\t\t<li><i class=\"fa fa-map-marker color-green\"></i>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.address"), "html", null, true);
        echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- xs-contact-details -->
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"xs-donation-form-wraper\" >
\t\t\t\t\t<div class=\"xs-heading xs-mb-30\">
\t\t\t\t\t\t<h2 class=\"xs-title\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.text1"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t";
        // line 90
        echo "\t\t\t\t\t\t<span class=\"xs-separetor v2\"></span>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div><!-- .xs-heading end -->
\t\t\t\t\t<form action=\"#\" method=\"POST\" id=\"xs-donation-form\" class=\"xs-donation-form\" >
\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t";
        // line 96
        echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.nom"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t";
        // line 101
        echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"Prenom\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.prenom"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t";
        // line 106
        echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"Profession\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.profession"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t";
        // line 111
        echo "\t\t\t\t\t\t\t<input type=\"email\" name=\"name\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.mail"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t";
        // line 116
        echo "\t\t\t\t\t\t\t<textarea  class=\"form-control text-message\" name=\"message\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.message"), "html", null, true);
        echo "\"></textarea>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-warning\"><span class=\"badge\"><i class=\"fa fa-send-o\"></i></span>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.envoyer"), "html", null, true);
        echo "</button>
\t\t\t\t\t</form><!-- .xs-donation-form #xs-donation-form END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t</div><!-- .row end -->
\t\t</div><!-- .xs-contact-container END -->
\t</div><!-- .container end -->
</section>\t<!-- End contact section -->
</main>
\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCOndeBundle:Default:footer"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 132
        echo "\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-con\").addClass('active');
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Contact:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 132,  279 => 131,  267 => 129,  254 => 119,  247 => 116,  239 => 111,  231 => 106,  223 => 101,  215 => 96,  208 => 90,  204 => 88,  193 => 80,  189 => 79,  171 => 64,  150 => 47,  144 => 45,  141 => 44,  135 => 42,  132 => 41,  123 => 40,  111 => 37,  95 => 23,  93 => 22,  71 => 4,  62 => 3,  43 => 2,  11 => 1,);
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
\t\t.header-transparent .nav-menu li a .submenu-indicator-chevron{
\t    \tborder-color: transparent #fff #fff transparent;
\t    }
\t    .blue-nav {
\t\t    color: #fff !important;
\t\t}
\t\t.text-message{
\t\t\tborder: 2px solid rgb(200, 200, 200);
\t\t    border-radius: 0px;
\t\t    transition: all 0.4s ease 0s;
\t\t    padding: 13px 29px;
\t\t    width: calc(100% - 55px);
\t\t    /* height: 132px; */
\t\t    margin-top: 0px;
\t\t    margin-bottom: 0px;
\t\t}
\t\t{% if app.request.locale == \"ar\" %}

\t\t\th2,h3,p,input,label {
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.xs-unorder-list, .xs-title{
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.xs-contact-section-v2{
\t\t\t\tdirection: rtl;
\t\t\t}
\t\t\t.xs-unorder-list li i {
\t\t\t    padding: 0 17px;
\t\t\t}
\t\t{% endif %}
\t</style>
\t
{% endblock %}
{% block body %}
\t{% if app.request.locale != \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:header.html.twig\" %} 
\t{% endif %}
\t{% if app.request.locale == \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:headerAr.html.twig\" %} 
\t{% endif %}
<section class=\"xs-banner-inner-section parallax-window banner-image-content\" style=\"background-image:url('{{asset('assets/images/backgrounds/child.jpg')}}')\">
\t<div class=\"xs-black-overlay\"></div>
\t
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class=\"xs-main\">
\t<!-- contact section -->
\t<section class=\"xs-contact-section-v2\">
\t<div class=\"container\">
\t\t<div class=\"xs-contact-container contact-content\" style=\"background-color: white;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"xs-contact-details\">
\t\t\t\t\t<div class=\"xs-widnow-wraper\">
\t\t\t\t\t\t<div class=\"xs-window-top\">
\t\t\t\t\t\t\t<img class=\"img-content\" src=\"{{asset('assets/images/rabat.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xs-window-back\">
\t\t\t\t\t\t\t<div id=\"xs-map\" class=\"xs-box-shadow-2\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xs-window-nav\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"xs-window-opener\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- xs-widnow-wraper -->
\t\t\t\t\t<ul class=\"xs-unorder-list\">
\t\t\t\t\t\t<li><i class=\"fa fa-phone color-green\"></i><span>{{\"contact.tel\"|trans}}</span></li>
\t\t\t\t\t\t<li><i class=\"fa fa-map-marker color-green\"></i>{{\"contact.address\"|trans}}</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- xs-contact-details -->
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"xs-donation-form-wraper\" >
\t\t\t\t\t<div class=\"xs-heading xs-mb-30\">
\t\t\t\t\t\t<h2 class=\"xs-title\">{{\"contact.text1\"|trans}}</h2>
\t\t\t\t\t\t{# <p class=\"small\">{{\"contact.text2\"|trans}}\"<span class=\"color-green\">{{\"contact.green\"|trans}}</span>\"{{\"contact.text3\"|trans}} <span class=\"color-green\">0537 77 58 88</span>.</p> #}
\t\t\t\t\t\t<span class=\"xs-separetor v2\"></span>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div><!-- .xs-heading end -->
\t\t\t\t\t<form action=\"#\" method=\"POST\" id=\"xs-donation-form\" class=\"xs-donation-form\" >
\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t{# <label for=\"xs-donate-name\">{{\"contact.nom\"|trans}} <span class=\"color-light-red\">**</span></label> #}
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"{{\"contact.nom\"|trans}}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t{# <label for=\"xs-donate-name\">Prenom <span class=\"color-light-red\">**</span></label> #}
\t\t\t\t\t\t\t<input type=\"text\" name=\"Prenom\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"{{\"contact.prenom\"|trans}}\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t{# <label for=\"xs-donate-name\">Profession <span class=\"color-light-red\">**</span></label> #}
\t\t\t\t\t\t\t<input type=\"text\" name=\"Profession\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"{{\"contact.profession\"|trans}}\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t{# <label for=\"xs-donate-name\">Adresse mail  <span class=\"color-light-red\">**</span></label> #}
\t\t\t\t\t\t\t<input type=\"email\" name=\"name\" id=\"xs-donate-name\" class=\"form-control\" placeholder=\"{{\"contact.mail\"|trans}}\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"xs-input-group\">
\t\t\t\t\t\t\t{# <label for=\"xs-donate-name\">{{\"contact.message\"|trans}} <span class=\"color-light-red\">**</span></label> #}
\t\t\t\t\t\t\t<textarea  class=\"form-control text-message\" name=\"message\" placeholder=\"{{\"contact.message\"|trans}}\"></textarea>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-warning\"><span class=\"badge\"><i class=\"fa fa-send-o\"></i></span>{{\"contact.envoyer\"|trans}}</button>
\t\t\t\t\t</form><!-- .xs-donation-form #xs-donation-form END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t</div><!-- .row end -->
\t\t</div><!-- .xs-contact-container END -->
\t</div><!-- .container end -->
</section>\t<!-- End contact section -->
</main>
\t{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-con\").addClass('active');
\t\t});
\t</script>
{% endblock %}", "TWCOndeBundle:Contact:formulaire.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Contact/formulaire.html.twig");
    }
}
