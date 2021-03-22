<?php

/* TWCOndeBundle:Default:footer.html.twig */
class __TwigTemplate_7a93824496785e76a2907b849d7a2822aa317040ffcf3b432a6eda8adbf661d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:footer.html.twig"));

        // line 1
        echo "<style>
.details{
\tline-height: 2.8 !important;
}
\t";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 6
            echo "        footer{
        \t    direction: rtl;
        }
\t";
        }
        // line 10
        echo "</style>
<footer class=\"xs-footer-section\">
\t<div class=\"container\">
\t\t<div class=\"xs-footer-top-layer\" style=\"padding-top: 50px;
        padding-bottom: 30px;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-widget xs-pr-20\">
\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\" class=\"xs-footer-logo\">
\t\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"xs-social-list-v2\">
\t\t\t\t\t\t<li><a href=\"https://facebook.com/ONDEMaroc/?ref=br_rs\" target=\"_blank\" class=\"color-facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://twitter.com/ondemaroc\" target=\"_blank\" class=\"color-twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/ondemaroc\" target=\"_blank\" class=\"color-dribbble\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t";
        // line 25
        echo "\t\t\t\t\t</ul><!-- .xs-social-list END -->
\t\t\t\t\t<p style=\"margin-left: 0px;margin-top: 10px;\">&copy; ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.copyright.first"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.copyright.second"), "html", null, true);
        echo ".</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-widget\">
\t\t\t\t\t<h3 class=\"widget-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.apropos.title"), "html", null, true);
        echo "</h3>
\t\t\t\t\t<ul class=\"xs-footer-list\">
\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.apropos.first"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.apropos.second"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("realisations");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.apropos.third"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plaidoyer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.apropos.forth"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.apropos.fifth"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organigramme");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.apropos.sixth"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-widget\">
\t\t\t\t\t<h3 class=\"widget-title\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.contact.title"), "html", null, true);
        echo "</h3>
\t\t\t\t\t<ul class=\"xs-info-list\">
\t\t\t\t\t\t<li class=\"details\"><i class=\"fa fa-home\"></i>47 rue Mellouza, Rabat</li>
\t\t\t\t\t\t<li class=\"details\"><i class=\"fa fa-phone\"></i>05377-55099</li>
\t\t\t\t\t\t<li class=\"details\"><i class=\"fa fa-envelope-o\"></i><a href=\"mailto:secretariat@onde.ma\">secretariat@onde.ma</a></li>
\t\t\t\t\t</ul><!-- .xs-list-with-icon END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 61
        echo "\t<div class=\"xs-back-to-top-wraper\">
\t\t<a href=\"#\" class=\"xs-back-to-top\"><i class=\"fa fa-angle-up\"></i></a>
\t</div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  118 => 40,  109 => 36,  103 => 35,  97 => 34,  91 => 33,  85 => 32,  79 => 31,  74 => 29,  64 => 26,  61 => 25,  52 => 18,  48 => 17,  39 => 10,  33 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
.details{
\tline-height: 2.8 !important;
}
\t{% if app.request.locale == \"ar\" %}
        footer{
        \t    direction: rtl;
        }
\t{% endif %}
</style>
<footer class=\"xs-footer-section\">
\t<div class=\"container\">
\t\t<div class=\"xs-footer-top-layer\" style=\"padding-top: 50px;
        padding-bottom: 30px;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-widget xs-pr-20\">
\t\t\t\t\t<a href=\"{{path('twc_onde_homepage')}}\" class=\"xs-footer-logo\">
\t\t\t\t\t\t<img src=\"{{asset('front/images/logo_onde.png')}}\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"xs-social-list-v2\">
\t\t\t\t\t\t<li><a href=\"https://facebook.com/ONDEMaroc/?ref=br_rs\" target=\"_blank\" class=\"color-facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://twitter.com/ondemaroc\" target=\"_blank\" class=\"color-twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/ondemaroc\" target=\"_blank\" class=\"color-dribbble\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t{# <li><a href=\"\" class=\"color-pinterest\"><i class=\"fa fa-pinterest\"></i></a></li> #}
\t\t\t\t\t</ul><!-- .xs-social-list END -->
\t\t\t\t\t<p style=\"margin-left: 0px;margin-top: 10px;\">&copy; {{\"footer.copyright.first\"|trans}} <a href=\"{{path('twc_onde_homepage')}}\">{{\"footer.copyright.second\"|trans}}.</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-widget\">
\t\t\t\t\t<h3 class=\"widget-title\">{{\"footer.apropos.title\"|trans}}</h3>
\t\t\t\t\t<ul class=\"xs-footer-list\">
\t\t\t\t\t\t<li><a href=\"{{path('presentation')}}\">{{\"footer.apropos.first\"|trans}}</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('missions')}}\">{{\"footer.apropos.second\"|trans}}</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('realisations')}}\">{{\"footer.apropos.third\"|trans}}</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('plaidoyer')}}\">{{\"footer.apropos.forth\"|trans}}</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('historique')}}\">{{\"footer.apropos.fifth\"|trans}}</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('organigramme')}}\">{{\"footer.apropos.sixth\"|trans}}</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-widget\">
\t\t\t\t\t<h3 class=\"widget-title\">{{\"footer.contact.title\"|trans}}</h3>
\t\t\t\t\t<ul class=\"xs-info-list\">
\t\t\t\t\t\t<li class=\"details\"><i class=\"fa fa-home\"></i>47 rue Mellouza, Rabat</li>
\t\t\t\t\t\t<li class=\"details\"><i class=\"fa fa-phone\"></i>05377-55099</li>
\t\t\t\t\t\t<li class=\"details\"><i class=\"fa fa-envelope-o\"></i><a href=\"mailto:secretariat@onde.ma\">secretariat@onde.ma</a></li>
\t\t\t\t\t</ul><!-- .xs-list-with-icon END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{# <div class=\"container\">
\t\t<div class=\"xs-copyright\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 text-left\">
\t\t\t\t\t<div class=\"xs-copyright-text\">
\t\t\t\t\t\t<p>&copy; {{\"footer.copyright.first\"|trans}} <a href=\"{{path('twc_onde_homepage')}}\">{{\"footer.copyright.second\"|trans}}.</a> - {{\"footer.copyright.third\"|trans}}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> #}
\t<div class=\"xs-back-to-top-wraper\">
\t\t<a href=\"#\" class=\"xs-back-to-top\"><i class=\"fa fa-angle-up\"></i></a>
\t</div>
</footer>", "TWCOndeBundle:Default:footer.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Default/footer.html.twig");
    }
}
