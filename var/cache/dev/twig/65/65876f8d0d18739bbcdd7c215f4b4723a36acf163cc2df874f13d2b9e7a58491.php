<?php

/* TWCOndeBundle::ondelayout.html.twig */
class __TwigTemplate_baaece479bc9f4bc4df438296dc01696bc8eaa8cceb762e143893dea785496ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'Style' => [$this, 'block_Style'],
            'body' => [$this, 'block_body'],
            'custom_js' => [$this, 'block_custom_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle::ondelayout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle::ondelayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html  dir=\"Bidi\" lang=\"ar\"  xml:lang=\"ar\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\"/>
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title> ";
        // line 6
        $this->displayBlock('Title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t";
        // line 9
        $this->displayBlock('Style', $context, $blocks);
        // line 99
        echo "\t</head>
\t
\t<body class=\"stretched\">
\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "notice"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 103
            echo "\t\t    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "type", []), "html", null, true);
            echo "\">
\t\t        <strong>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "title", []), "html", null, true);
            echo "</strong><br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "message", []), "html", null, true);
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t";
        // line 113
        echo "\t\t
\t\t<div id=\"wrapper\" class=\"clearfix\">
\t\t\t";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "\t\t</div>
\t\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/spectragram.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k\"></script>
\t\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t";
        // line 130
        $this->displayBlock('custom_js', $context, $blocks);
        // line 132
        echo "\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_Title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        echo " - ONDE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_Style($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 10
        echo "\t\t\t<style type=\"text/css\">
\t\t\t\t.xs-event-content a:not(.btn){
\t\t\t\t\tfont-size: 15px !important;
\t\t\t\t    font-weight: 500 !important;
\t\t\t\t    color: #87ae81 !important;
\t\t\t\t    margin-bottom: 0px !important;
\t\t\t\t    line-height: 25px !important;
\t\t\t\t    display: block !important;
\t\t\t\t}
\t\t\t\t.breadcrumb{
\t\t\t\t\tbackground-color: transparent !important;
\t\t\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t\t\t}
\t\t\t\t@media only screen and (max-width: 992px){
\t\t\t\t\t.breadcrumb{
\t\t\t\t\t\tmargin-top:15px;position: initial;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 29
            echo "\t\t\t\t\t.xs-main {
\t\t\t\t\t    direction: ltr !important;
\t\t\t\t\t}
\t\t\t\t\t.xs-footer-top-layer{
\t\t\t\t\t\ttext-align: initial;
\t\t\t\t\t}
\t\t\t\t\t.breadcrumb{
\t\t\t\t\t\tbackground-color: transparent !important;
\t\t\t\t\t\tmargin-top:15px;
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\tright: 15px;
\t\t\t\t\t\tdirection: rtl;
\t\t\t\t\t}
\t\t\t\t\t@media only screen and (max-width: 992px){
\t\t\t\t\t\t.breadcrumb{
\t\t\t\t\t\t\tmargin-top:15px;
\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\tleft: 15px;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t.xs-social-list-v2 li:last-child{
\t\t\t\t\t\tmargin: 0 10px 0 0 !important;
\t\t\t\t\t}
\t\t\t\t\t.xs-social-list-v2 li:first-child{
\t\t\t\t\t\tmargin: 0 !important;
\t\t\t\t\t}
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t
\t\t\t</style>
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700\" rel=\"stylesheet\">

\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\">
\t\t\t<!-- Place favicon.ico in the root directory -->
\t\t\t<link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">

\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/xsIcon.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/isotope.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/magnific-popup.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\">
\t\t\t

\t\t\t<!--For Plugins external css-->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/plugins.css"), "html", null, true);
        echo "\" />

\t\t\t<!--Theme custom css -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/mystyle.scss"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/mystyle2.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/responsive/responsive.css"), "html", null, true);
        echo "\">
\t\t\t";
        // line 83
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0c3e62c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0c3e62c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/front/css/mystyle_mystyle_1.css");
            // line 85
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "0c3e62c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0c3e62c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/front/css/mystyle.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 87
        echo "
\t\t\t<!--Theme Responsive css-->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\" />
\t\t\t
\t\t\t<link rel='stylesheet alternate' title='color-1' type='text/css' href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/colors/color-1.css"), "html", null, true);
        echo "\">
\t\t\t<link rel='stylesheet alternate' title='color-2' type='text/css' href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/colors/color-2.css"), "html", null, true);
        echo "\">
\t\t\t<link rel='stylesheet alternate' title='color-3' type='text/css' href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/colors/color-3.css"), "html", null, true);
        echo "\">
\t\t\t<link rel='stylesheet alternate' title='color-4' type='text/css' href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/colors/color-4.css"), "html", null, true);
        echo "\">
\t\t\t<link rel='stylesheet alternate' title='color-5' type='text/css' href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/colors/color-5.css"), "html", null, true);
        echo "\">
\t\t\t<link rel='stylesheet alternate' title='color-6' type='text/css' href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/colors/color-6.css"), "html", null, true);
        echo "\">
\t        <link rel='stylesheet alternate' title='color-7' type='text/css' href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/colors/color-7.css"), "html", null, true);
        echo "\">
\t    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 116
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 131
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle::ondelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 131,  360 => 130,  350 => 116,  341 => 115,  329 => 97,  325 => 96,  321 => 95,  317 => 94,  313 => 93,  309 => 92,  305 => 91,  300 => 89,  296 => 87,  282 => 85,  278 => 83,  274 => 82,  270 => 81,  266 => 80,  262 => 79,  256 => 76,  249 => 72,  245 => 71,  241 => 70,  237 => 69,  233 => 68,  229 => 67,  225 => 66,  213 => 56,  184 => 29,  182 => 28,  162 => 10,  153 => 9,  135 => 6,  124 => 132,  122 => 130,  117 => 128,  112 => 126,  108 => 125,  104 => 124,  100 => 123,  96 => 122,  92 => 121,  88 => 120,  84 => 119,  80 => 118,  77 => 117,  75 => 115,  71 => 113,  69 => 107,  58 => 104,  53 => 103,  49 => 102,  44 => 99,  42 => 9,  36 => 6,  29 => 1,);
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
<html  dir=\"Bidi\" lang=\"ar\"  xml:lang=\"ar\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\"/>
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title> {% block Title %} - ONDE{% endblock %}</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t{% block Style %}
\t\t\t<style type=\"text/css\">
\t\t\t\t.xs-event-content a:not(.btn){
\t\t\t\t\tfont-size: 15px !important;
\t\t\t\t    font-weight: 500 !important;
\t\t\t\t    color: #87ae81 !important;
\t\t\t\t    margin-bottom: 0px !important;
\t\t\t\t    line-height: 25px !important;
\t\t\t\t    display: block !important;
\t\t\t\t}
\t\t\t\t.breadcrumb{
\t\t\t\t\tbackground-color: transparent !important;
\t\t\t\t\tmargin-top:15px;position: absolute;right: 15px;
\t\t\t\t}
\t\t\t\t@media only screen and (max-width: 992px){
\t\t\t\t\t.breadcrumb{
\t\t\t\t\t\tmargin-top:15px;position: initial;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t.xs-main {
\t\t\t\t\t    direction: ltr !important;
\t\t\t\t\t}
\t\t\t\t\t.xs-footer-top-layer{
\t\t\t\t\t\ttext-align: initial;
\t\t\t\t\t}
\t\t\t\t\t.breadcrumb{
\t\t\t\t\t\tbackground-color: transparent !important;
\t\t\t\t\t\tmargin-top:15px;
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\tright: 15px;
\t\t\t\t\t\tdirection: rtl;
\t\t\t\t\t}
\t\t\t\t\t@media only screen and (max-width: 992px){
\t\t\t\t\t\t.breadcrumb{
\t\t\t\t\t\t\tmargin-top:15px;
\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\tleft: 15px;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t.xs-social-list-v2 li:last-child{
\t\t\t\t\t\tmargin: 0 10px 0 0 !important;
\t\t\t\t\t}
\t\t\t\t\t.xs-social-list-v2 li:first-child{
\t\t\t\t\t\tmargin: 0 !important;
\t\t\t\t\t}
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t</style>
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700\" rel=\"stylesheet\">

\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\">
\t\t\t<!-- Place favicon.ico in the root directory -->
\t\t\t<link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">

\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/bootstrap.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/xsIcon.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/isotope.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/magnific-popup.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/owl.carousel.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/owl.theme.default.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/animate.css')}}\">
\t\t\t

\t\t\t<!--For Plugins external css-->
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/plugins.css')}}\" />

\t\t\t<!--Theme custom css -->
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/style.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/mystyle.scss')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/mystyle2.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/responsive/responsive.css')}}\">
\t\t\t{% stylesheets filter=\"compass\"
            \"front/css/mystyle.scss\" output = 'front/css/mystyle.css' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\">
            {% endstylesheets %}

\t\t\t<!--Theme Responsive css-->
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('front/css/responsive.css')}}\" />
\t\t\t
\t\t\t<link rel='stylesheet alternate' title='color-1' type='text/css' href=\"{{asset('front/css/colors/color-1.css')}}\">
\t\t\t<link rel='stylesheet alternate' title='color-2' type='text/css' href=\"{{asset('front/css/colors/color-2.css')}}\">
\t\t\t<link rel='stylesheet alternate' title='color-3' type='text/css' href=\"{{asset('front/css/colors/color-3.css')}}\">
\t\t\t<link rel='stylesheet alternate' title='color-4' type='text/css' href=\"{{asset('front/css/colors/color-4.css')}}\">
\t\t\t<link rel='stylesheet alternate' title='color-5' type='text/css' href=\"{{asset('front/css/colors/color-5.css')}}\">
\t\t\t<link rel='stylesheet alternate' title='color-6' type='text/css' href=\"{{asset('front/css/colors/color-6.css')}}\">
\t        <link rel='stylesheet alternate' title='color-7' type='text/css' href=\"{{asset('front/css/colors/color-7.css')}}\">
\t    {% endblock %}
\t</head>
\t
\t<body class=\"stretched\">
\t\t{% for msg in app.session.flashbag.get('notice') %}
\t\t    <div class=\"alert alert-{{ msg.type }}\">
\t\t        <strong>{{ msg.title }}</strong><br/>{{ msg.message }}
\t\t    </div>
\t\t{% endfor %}
\t\t{# <div id=\"preloader\">
\t\t\t<div class=\"spinner\">
\t\t\t\t<div class=\"double-bounce1\"></div>
\t\t\t\t<div class=\"double-bounce2\"></div>
\t\t\t</div>
\t\t</div> #}
\t\t
\t\t<div id=\"wrapper\" class=\"clearfix\">
\t\t\t{% block body %}
\t\t\t{% endblock %}
\t\t</div>
\t\t<script src=\"{{asset('front/js/jquery-3.2.1.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/plugins.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/bootstrap.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/isotope.pkgd.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/jquery.magnific-popup.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/owl.carousel.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/jquery.waypoints.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/jquery.countdown.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/js/spectragram.min.js')}}\"></script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k\"></script>
\t\t<script src=\"{{asset('front/js/main.js')}}\"></script>
\t\t
\t\t{% block custom_js %}
        {% endblock %}
\t</body>
</html>", "TWCOndeBundle::ondelayout.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/ondelayout.html.twig");
    }
}
