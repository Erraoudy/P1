<?php

/* TWCOndeBundle:Publications:Etudes.html.twig */
class __TwigTemplate_109e158f1d4b79545d49e2cbbd688320530805fdfbc18b8eb07df96431babdc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:Publications:Etudes.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Publications:Etudes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Publications:Etudes.html.twig"));

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

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.etudes_Rapports"), "html", null, true);
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
\t\t\t/*display: -webkit-box;
\t\t    -webkit-line-clamp: 3;
\t\t    -webkit-box-orient: vertical;
\t\t    overflow: hidden;
\t\t    text-overflow: ellipsis;*/
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
\t</style>
\t";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 39
            echo "
\t";
        }
        
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
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:Publications:Etudes.html.twig", 44)->display($context);
            echo " 
\t";
        }
        // line 46
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 47
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:Publications:Etudes.html.twig", 47)->display($context);
            echo " 
\t";
        }
        // line 49
        echo "\t
\t<section class=\"xs-banner-inner-section parallax-window\" style=\"background-image:url('";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/backgrounds/parralax_3.jpg"), "html", null, true);
        echo "');\">
\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t<div class=\"container\">

\t\t\t</div>
\t\t</section>
\t</section>

\t<main class=\"xs-main\">
\t<!-- blog section -->
\t<section class=\"xs-content-section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-sm-2 order-lg-first\">
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t\t<h2 class=\"color-title-b\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.etudes_Rapports"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-sm-first order-lg-2 \">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.accueil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.etudes_Rapports"), "html", null, true);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row xs-mb-50\" style=\"margin-top: 50px;\">
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t";
        // line 82
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/publications/30ans.pdf"), "html", null, true);
            echo "\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/publications/30ans-va.pdf"), "html", null, true);
            echo "\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("etudes_Rapports.bilanMaroc"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/publications/Contribution.pdf"), "html", null, true);
        echo "\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("etudes_Rapports.contributionONDE"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/publications/Observations1.pdf"), "html", null, true);
        echo "\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("etudes_Rapports.observationsONDE"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/publications/Observations2.pdf"), "html", null, true);
        echo "\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("etudes_Rapports.observationsRecommandation"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t</div><!-- .row end -->\t
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
\t\t    \$(\".selected-pubb\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-pub .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
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
        return "TWCOndeBundle:Publications:Etudes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 189,  355 => 182,  343 => 172,  334 => 171,  322 => 169,  309 => 159,  297 => 150,  282 => 138,  270 => 129,  255 => 117,  243 => 108,  228 => 96,  218 => 88,  212 => 86,  209 => 85,  203 => 83,  201 => 82,  187 => 71,  181 => 70,  173 => 65,  155 => 50,  152 => 49,  146 => 47,  143 => 46,  137 => 44,  134 => 43,  125 => 42,  113 => 39,  111 => 38,  74 => 4,  63 => 3,  43 => 2,  11 => 1,);
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
{% block Title %}{{\"header.publications.etudes_Rapports\"|trans}} {{parent()}}{% endblock %}
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
\t\t\t/*display: -webkit-box;
\t\t    -webkit-line-clamp: 3;
\t\t    -webkit-box-orient: vertical;
\t\t    overflow: hidden;
\t\t    text-overflow: ellipsis;*/
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

\t\t\t</div>
\t\t</section>
\t</section>

\t<main class=\"xs-main\">
\t<!-- blog section -->
\t<section class=\"xs-content-section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 offset-lg-3 order-md-2 order-sm-2 order-lg-first\">
\t\t\t\t\t<div class=\" xs-inner-banner-content pb-3\">
\t\t\t\t\t\t<h2 class=\"color-title-b\">{{\"header.publications.etudes_Rapports\"|trans}}</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-12 text-lg-right order-md-first order-sm-first order-lg-2 \">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('twc_onde_homepage')}}\">{{\"header.accueil\"|trans}}</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{\"header.publications.etudes_Rapports\"|trans}}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row xs-mb-50\" style=\"margin-top: 50px;\">
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t{% if app.request.locale != \"ar\" %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset(\"assets/publications/30ans.pdf\") }}\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset(\"assets/publications/30ans-va.pdf\") }}\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t{{\"etudes_Rapports.bilanMaroc\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset(\"assets/publications/Contribution.pdf\") }}\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t{{\"etudes_Rapports.contributionONDE\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset(\"assets/publications/Observations1.pdf\") }}\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t{{\"etudes_Rapports.observationsONDE\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\" >
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\" style=\"min-height: 195px;\">
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t<span class=\"date\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset(\"assets/publications/Observations2.pdf\") }}\" target=\"_blank\" class=\"entry-date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\" style=\"color: #5cb37c;    font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title title-media\">
\t\t\t\t\t\t\t\t{{\"etudes_Rapports.observationsRecommandation\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t</div><!-- .row end -->\t
\t\t</div>
\t</section>\t
</main>
\t{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script type=\"text/javascript\">
\t\t\$( document ).ready(function() {
\t\t    \$(\".blue-header\").css('display','none');
\t\t    \$(\".selected-pubb\").addClass(\"active\");
\t\t    \$(\".header-transparent .nav-menu li .selected-pub .submenu-indicator-chevron\").css(\"border-color\",\"transparent #5cb37c #5cb37c transparent\");
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
{% endblock %}", "TWCOndeBundle:Publications:Etudes.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Publications/Etudes.html.twig");
    }
}
