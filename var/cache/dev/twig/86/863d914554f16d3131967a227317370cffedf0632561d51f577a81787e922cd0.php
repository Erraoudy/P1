<?php

/* TWCOndeBundle:espacePress:documentation.html.twig */
class __TwigTemplate_78b5e969c4863afbd66b0e834eacd604090999b87b1b889bd684af48311daa8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:espacePress:documentation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:espacePress:documentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:espacePress:documentation.html.twig"));

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

        echo " 
\t";
        // line 4
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
\t\t\t\tfloat: right;
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 56
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:espacePress:documentation.html.twig", 56)->display($context);
            echo " 
\t";
        }
        // line 58
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 59
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:espacePress:documentation.html.twig", 59)->display($context);
            echo " 
\t";
        }
        // line 61
        echo "\t
\t<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/backgrounds/parralax_3.jpg"), "html", null, true);
        echo "');\">
\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 70
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
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3 \">
\t\t\t\t\t\t<h2 class=\"color-title-b\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.espacePresse"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.accueil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.espacePresse"), "html", null, true);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 95
        echo "\t\t\t<div class=\"row xs-mb-50 list-articles\">
\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medias"] ?? $this->getContext($context, "medias")));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 97
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["media"], "status", []) != "draft")) {
                // line 98
                echo "\t\t\t\t\t\t<a href=\"\" title=\"\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 articles-details\" data-id=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
                // line 102
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["media"], "image", [])) > 0)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["media"], "image", []))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/noimage.png"))), "html", null, true);
                echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-header\" style=\"min-height: 190px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 108
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["media"], "creationDate", []), "d M Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 114
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "title", []), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "titleEn", []), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "titleAr", []), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 162
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t\t\t</div><!-- .row end -->\t\t
\t\t</div>
\t</section>\t
</main>
\t";
        // line 169
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCOndeBundle:Default:footer"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 172
        echo "\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-ep\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-ep .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
\t\t});
\t</script>
\t<script>
        \$('.articles-details').on('click',function(e){
            var id = \$(this).attr(\"data-id\");
            path = '";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_detailsPress", ["id" => "1"]);
        echo "';
            path = path.replace('1',id);
            \$.ajax({
                type: 'POST',
                url: path,
                data : {'id' : id},
                success: function(data) {
                   \tvar path = '";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_detailsPress", ["id" => 1]);
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
        return "TWCOndeBundle:espacePress:documentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 189,  329 => 182,  317 => 172,  308 => 171,  296 => 169,  290 => 165,  284 => 164,  280 => 162,  272 => 123,  266 => 121,  263 => 120,  257 => 118,  254 => 117,  248 => 115,  246 => 114,  237 => 108,  228 => 102,  222 => 99,  219 => 98,  216 => 97,  212 => 96,  209 => 95,  202 => 88,  196 => 87,  188 => 82,  174 => 70,  168 => 62,  165 => 61,  159 => 59,  156 => 58,  150 => 56,  147 => 55,  138 => 54,  127 => 52,  111 => 38,  109 => 37,  73 => 4,  62 => 3,  43 => 2,  11 => 1,);
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
\t\t\t\tfloat: right;
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
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3 \">
\t\t\t\t\t\t<h2 class=\"color-title-b\">{{\"header.espacePresse\"|trans}}</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-lg-2\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('twc_onde_homepage')}}\">{{\"header.accueil\"|trans}}</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{\"header.espacePresse\"|trans}}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# <div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t<h2 class=\"color-title-b\">Espace presse</h2>
\t\t\t</div> #}
\t\t\t<div class=\"row xs-mb-50 list-articles\">
\t\t\t\t{% for media in medias %}
\t\t\t\t\t{% if media.status != \"draft\" %}
\t\t\t\t\t\t<a href=\"\" title=\"\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 articles-details\" data-id=\"{{media.id}}\">
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{ media.image|length > 0 ? asset(media.image) : asset('assets/images/noimage.png') }});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-header\" style=\"min-height: 190px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{media.creationDate|date(\"d M Y\")}}
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{media.title}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{media.titleEn}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{media.titleAr}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{# <div class=\"col-lg-4 col-md-6 articles-details\" data-id=\"{{media.id}}\">
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-thumbnail  \" >
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ media.image|length > 0 ? asset(media.image) : asset('assets/images/noimage.png') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"  rel=\"bookmark\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{media.creationDate|date(\"d/m/Y\")}}
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{media.title}}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{media.titleEn}}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{media.titleAr}}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div><!-- .row end -->\t\t
\t\t</div>
\t</section>\t
</main>
\t{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-ep\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-ep .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
\t\t});
\t</script>
\t<script>
        \$('.articles-details').on('click',function(e){
            var id = \$(this).attr(\"data-id\");
            path = '{{ path('index_detailsPress', {id: '1' }) }}';
            path = path.replace('1',id);
            \$.ajax({
                type: 'POST',
                url: path,
                data : {'id' : id},
                success: function(data) {
                   \tvar path = '{{ path(\"index_detailsPress\", {id: 1}) }}';

                   \twindow.location.href = path.replace(\"1\", id);

                },
                error: function(data) {
                },
            });
        });      
    </script>
{% endblock %}", "TWCOndeBundle:espacePress:documentation.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/espacePress/documentation.html.twig");
    }
}
