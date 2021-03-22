<?php

/* TWCOndeBundle:Default:headerAr.html.twig */
class __TwigTemplate_f3beab35375f95b15ad85c56d4896e87341bc831e9b36e7d7bd095921e55d296 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:headerAr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:headerAr.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 2
            echo "<style type=\"text/css\" media=\"screen\">
\t.xs-header .nav-menu li a {
    \tfont-size: 18px;
\t}
\t@media only screen and (max-width: 600px ){
\t\t.nav-menu>li {
\t\t    text-align: right !important;
\t\t    
\t\t}
\t\t.blue-nav{
\t\t\tcolor: #333333 !important;
\t\t}
\t\t.header-transparent .nav-menu li a, .xs-box .nav-menu li a{
\t\t\tpadding: 30px 40px !important;
\t\t}
\t}
\t@media only screen and (min-width: 600px ) and (max-width: 768px) {
\t\t.nav-menu>li {
\t\t    text-align: right !important;
\t\t    
\t\t}
\t\t.blue-nav{
\t\t\tcolor: #333333 !important;
\t\t}
\t\t.header-transparent .nav-menu li a, .xs-box .nav-menu li a{
\t\t\tpadding: 30px 40px !important;
\t\t}
\t\t.header-transparent .nav-menu li a .submenu-indicator-chevron{
\t\t\tborder-color: transparent #333333 #333333 transparent !important;
\t\t}
\t}
\t.xs-menus .nav-menu li .nav-submenu {
\t    top: 65px;
\t}
\t@media (min-width: 992px) and (max-width: 992px){
\t\t.nav-logo img{
\t\t\tdisplay: none;
\t\t}
\t}
\t@media (min-width: 992px) and (max-width: 1220px){
\t\t.nav-menus-wrapper .glob{
\t\t\tdirection: ltr;
\t\t}
\t\t.nav-menus-wrapper .glob .nav-menu-ar{
\t\t\tdirection: rtl;
\t\t    float: left;
\t\t}
\t}
\t@media only screen and (max-width: 991px){
\t\t.nav-logo{
\t\t\tdisplay: block;
\t\t    position: relative;
\t\t    z-index: 1;
\t\t    background-image: url(\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo-bg-co2.png"), "html", null, true);
            echo "\");
\t\t    background-size: cover;
\t\t    background-repeat: no-repeat;
\t\t    background-position: center center;
\t\t    -webkit-filter: drop-shadow(8px 0px 16px rgba(0, 0, 0, 0.2));
\t\t    filter: drop-shadow(2px 0px 0px rgba(0, 0, 0, 0.2));
\t\t    min-height: 90px;
\t\t    max-height: 140px;
\t\t    line-height: 110px;
\t\t    text-align: center;
\t\t}
\t\t.nav-logo img{
\t\t\theight: 70px !important;
\t\t    position: initial !important;
\t\t    margin: 5px 12px 5px 12px !important;
\t\t}
\t}
</style>
";
        }
        // line 74
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/mystyle_mystyle_1.css"), "html", null, true);
        echo "\">
<!-- End header section -->
<header class=\"xs-header header-transparent white-header\">
\t";
        // line 82
        echo "\t<div class=\"container\">
\t\t
\t\t<!-- .xs-logo-wraper END -->
\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t<div class=\"nav-header\">
\t\t\t\t<div class=\"nav-toggle white-nav-toggle\"></div>
\t\t\t\t<a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\" class=\"nav-logo\">
\t\t\t\t\t<img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde_ar.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div><!-- .nav-header END -->
\t\t\t<div class=\"nav-menus-wrapper row\" style=\"margin-right: 80px;\">

\t\t\t\t<div class=\"col-lg-12 glob\">
\t\t\t\t\t<ul class=\"nav-menu nav-menu-ar nav-menu-ar list-header-ma\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المرصد</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>تقديم</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>لمحة تاريخية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>المهام</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("realisations");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الإنجازات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plaidoyer");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الترافع</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 126
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المشاريع</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("protection");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الحماية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>المشاركة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الصحة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("observatoire");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الرصد و التتبع</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 152
        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campagne");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>حملة \"مدن أفريقية بدون أطفال في أوضاع الشوارع\"</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_actualite");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المستجدات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 166
        echo "\t\t\t\t\t\t<li class=\"\"><a class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المنشورات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_etudes");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>دراسات وتقارير</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_photos_videos");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>صور وفيديوهات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentation");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">فضاء الصحافة</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_enfants_homepage");
        echo "\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">بوابة الطفل</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 192
        echo "\t\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulaire");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">التواصل معنا</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 199
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
            // line 200
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 201
($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
            // line 202
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 203
($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-maroc.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> Ar
\t\t\t\t\t\t\t\t\t";
        }
        // line 206
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "fr"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "ar"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-maroc.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> Ar</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "en"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> En</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t</nav>
\t\t<div class=\"xs-logo-wraper container-logo container-logo-ar xs-padding-0 d-sm-none d-none d-lg-block\">
\t\t\t<a class=\"nav-brand\" href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde_ar.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo white-logo\">
\t\t\t\t</a>
\t\t</div>
\t</div>
</header>

<header class=\"xs-header header-transparent blue-header\">
\t";
        // line 244
        echo "\t<div class=\"container\">
\t\t
\t\t<!-- .xs-logo-wraper END -->
\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t<div class=\"nav-header\">
\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t</div><!-- .nav-header END -->
\t\t\t<div class=\"nav-menus-wrapper row\" style=\"margin-right: 80px;\">

\t\t\t\t<div class=\"col-lg-12 glob\">
\t\t\t\t\t<ul class=\"nav-menu nav-menu-ar nav-menu-ar list-header-ma\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المرصد</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>تقديم</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>لمحة تاريخية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>المهام</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("realisations");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الإنجازات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 276
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plaidoyer");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الدعوة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 285
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المشاريع</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("protection");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الحماية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>المشاركة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 300
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الصحة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 304
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("observatoire");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>الرصد و التتبع</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 311
        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campagne");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>حملة \"مدن أفريقية بدون أطفال في أوضاع الشوارع\"</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 317
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_actualite");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المستجدات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 325
        echo "\t\t\t\t\t\t<li class=\"\"><a class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المنشورات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_etudes");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>دراسات وتقارير</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_photos_videos");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div>صور وفيديوهات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 339
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentation");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">فضاء الصحافة</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_enfants_homepage");
        echo "\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">بوابة الطفل</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 351
        echo "\t\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulaire");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">التواصل معنا</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 358
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
            // line 359
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 360
($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
            // line 361
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 362
($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 363
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-maroc.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> Ar
\t\t\t\t\t\t\t\t\t";
        }
        // line 365
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "fr"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "ar"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-maroc.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> Ar</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "en"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> En</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t</nav>
\t\t<div class=\"xs-logo-wraper container-logo container-logo-ar  xs-padding-0\">
\t\t\t<a class=\"nav-brand\" href=\"";
        // line 389
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">
\t\t\t\t<img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde_ar.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo white-logo\">
\t\t\t</a>
\t\t</div>
\t</div>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Default:headerAr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 390,  577 => 389,  563 => 378,  559 => 377,  553 => 374,  549 => 373,  543 => 370,  539 => 369,  533 => 365,  527 => 363,  525 => 362,  520 => 361,  518 => 360,  513 => 359,  511 => 358,  500 => 351,  493 => 343,  486 => 339,  477 => 333,  470 => 329,  464 => 325,  457 => 317,  447 => 311,  440 => 304,  433 => 300,  426 => 296,  419 => 292,  410 => 285,  402 => 276,  395 => 272,  388 => 268,  381 => 264,  374 => 260,  356 => 244,  346 => 232,  342 => 231,  327 => 219,  323 => 218,  317 => 215,  313 => 214,  307 => 211,  303 => 210,  297 => 206,  291 => 204,  289 => 203,  284 => 202,  282 => 201,  277 => 200,  275 => 199,  264 => 192,  257 => 184,  250 => 180,  241 => 174,  234 => 170,  228 => 166,  221 => 158,  211 => 152,  204 => 145,  197 => 141,  190 => 137,  183 => 133,  174 => 126,  166 => 117,  159 => 113,  152 => 109,  145 => 105,  138 => 101,  123 => 89,  119 => 88,  111 => 82,  104 => 74,  82 => 55,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.request.locale == \"ar\" %}
<style type=\"text/css\" media=\"screen\">
\t.xs-header .nav-menu li a {
    \tfont-size: 18px;
\t}
\t@media only screen and (max-width: 600px ){
\t\t.nav-menu>li {
\t\t    text-align: right !important;
\t\t    
\t\t}
\t\t.blue-nav{
\t\t\tcolor: #333333 !important;
\t\t}
\t\t.header-transparent .nav-menu li a, .xs-box .nav-menu li a{
\t\t\tpadding: 30px 40px !important;
\t\t}
\t}
\t@media only screen and (min-width: 600px ) and (max-width: 768px) {
\t\t.nav-menu>li {
\t\t    text-align: right !important;
\t\t    
\t\t}
\t\t.blue-nav{
\t\t\tcolor: #333333 !important;
\t\t}
\t\t.header-transparent .nav-menu li a, .xs-box .nav-menu li a{
\t\t\tpadding: 30px 40px !important;
\t\t}
\t\t.header-transparent .nav-menu li a .submenu-indicator-chevron{
\t\t\tborder-color: transparent #333333 #333333 transparent !important;
\t\t}
\t}
\t.xs-menus .nav-menu li .nav-submenu {
\t    top: 65px;
\t}
\t@media (min-width: 992px) and (max-width: 992px){
\t\t.nav-logo img{
\t\t\tdisplay: none;
\t\t}
\t}
\t@media (min-width: 992px) and (max-width: 1220px){
\t\t.nav-menus-wrapper .glob{
\t\t\tdirection: ltr;
\t\t}
\t\t.nav-menus-wrapper .glob .nav-menu-ar{
\t\t\tdirection: rtl;
\t\t    float: left;
\t\t}
\t}
\t@media only screen and (max-width: 991px){
\t\t.nav-logo{
\t\t\tdisplay: block;
\t\t    position: relative;
\t\t    z-index: 1;
\t\t    background-image: url(\"{{asset('front/images/logo-bg-co2.png')}}\");
\t\t    background-size: cover;
\t\t    background-repeat: no-repeat;
\t\t    background-position: center center;
\t\t    -webkit-filter: drop-shadow(8px 0px 16px rgba(0, 0, 0, 0.2));
\t\t    filter: drop-shadow(2px 0px 0px rgba(0, 0, 0, 0.2));
\t\t    min-height: 90px;
\t\t    max-height: 140px;
\t\t    line-height: 110px;
\t\t    text-align: center;
\t\t}
\t\t.nav-logo img{
\t\t\theight: 70px !important;
\t\t    position: initial !important;
\t\t    margin: 5px 12px 5px 12px !important;
\t\t}
\t}
</style>
{% endif %}
<link rel=\"stylesheet\" href=\"{{asset('front/css/mystyle_mystyle_1.css')}}\">
<!-- End header section -->
<header class=\"xs-header header-transparent white-header\">
\t{# <div class=\"kids-zone-btn kids-zone-btn-ar\">
\t\t<a href=\"donate-now.html\" class=\"btn donateNow\">
\t\t\t<img class=\"kids-logo-header\" src=\"{{asset('assets/images/kids-zone.png')}}\" alt=\"\">
\t\t</a>
\t</div> #}
\t<div class=\"container\">
\t\t
\t\t<!-- .xs-logo-wraper END -->
\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t<div class=\"nav-header\">
\t\t\t\t<div class=\"nav-toggle white-nav-toggle\"></div>
\t\t\t\t<a href=\"{{path('twc_onde_homepage')}}\" class=\"nav-logo\">
\t\t\t\t\t<img src=\"{{asset('front/images/logo_onde_ar.png')}}\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div><!-- .nav-header END -->
\t\t\t<div class=\"nav-menus-wrapper row\" style=\"margin-right: 80px;\">

\t\t\t\t<div class=\"col-lg-12 glob\">
\t\t\t\t\t<ul class=\"nav-menu nav-menu-ar nav-menu-ar list-header-ma\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المرصد</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('presentation')}}\">
\t\t\t\t\t\t\t\t\t\t<div>تقديم</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('historique')}}\">
\t\t\t\t\t\t\t\t\t\t<div>لمحة تاريخية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('missions')}}\">
\t\t\t\t\t\t\t\t\t\t<div>المهام</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('realisations')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الإنجازات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('plaidoyer')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الترافع</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{# <li><a href=\"{{path('organigramme')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الهيكل التنظيمي</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المشاريع</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('protection')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الحماية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('participation')}}\">
\t\t\t\t\t\t\t\t\t\t<div>المشاركة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('sante')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الصحة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('observatoire')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الرصد و التتبع</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{#<li><a  href=\"{{path('cnde')}}\">
\t\t\t\t\t\t\t\t\t\t<div>المؤتمر الوطني لحقوق الطفل</div>
\t\t\t\t\t\t\t\t\t</a></li> #}
\t\t\t\t\t\t\t\t<li><a href=\"{{path('campagne')}}\">
\t\t\t\t\t\t\t\t\t\t<div>حملة \"مدن أفريقية بدون أطفال في أوضاع الشوارع\"</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('index_actualite')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المستجدات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{# <li class=\"\"><a href=\"{{path('publications')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">الفضاء الوثائقي</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t<li class=\"\"><a class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">المنشورات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('twc_onde_etudes')}}\">
\t\t\t\t\t\t\t\t\t\t<div>دراسات وتقارير</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('twc_onde_photos_videos')}}\">
\t\t\t\t\t\t\t\t\t\t<div>صور وفيديوهات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('documentation')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">فضاء الصحافة</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('twc_enfants_homepage')}}\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">بوابة الطفل</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{# <li class=\"\"><a href=\"{{asset('assets/telechargements/appel_offre.pdf')}}\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">طلب عروض</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('formulaire')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">التواصل معنا</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t{% elseif app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t{% elseif app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau \"> Ar
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'ar'})) }}\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau\"> Ar</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau\"> En</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t</nav>
\t\t<div class=\"xs-logo-wraper container-logo container-logo-ar xs-padding-0 d-sm-none d-none d-lg-block\">
\t\t\t<a class=\"nav-brand\" href=\"{{path('twc_onde_homepage')}}\">
\t\t\t\t\t<img src=\"{{asset('front/images/logo_onde_ar.png')}}\" alt=\"\" class=\"logo white-logo\">
\t\t\t\t</a>
\t\t</div>
\t</div>
</header>

<header class=\"xs-header header-transparent blue-header\">
\t{# <div class=\"kids-zone-btn kids-zone-btn-ar\">
\t\t<a href=\"donate-now.html\" class=\"btn donateNow\">
\t\t\t<img class=\"kids-logo-header\" src=\"{{asset('assets/images/kids-zone.png')}}\" alt=\"\">
\t\t</a>
\t</div> #}
\t<div class=\"container\">
\t\t
\t\t<!-- .xs-logo-wraper END -->
\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t<div class=\"nav-header\">
\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t</div><!-- .nav-header END -->
\t\t\t<div class=\"nav-menus-wrapper row\" style=\"margin-right: 80px;\">

\t\t\t\t<div class=\"col-lg-12 glob\">
\t\t\t\t\t<ul class=\"nav-menu nav-menu-ar nav-menu-ar list-header-ma\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المرصد</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('presentation')}}\">
\t\t\t\t\t\t\t\t\t\t<div>تقديم</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('historique')}}\">
\t\t\t\t\t\t\t\t\t\t<div>لمحة تاريخية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('missions')}}\">
\t\t\t\t\t\t\t\t\t\t<div>المهام</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('realisations')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الإنجازات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('plaidoyer')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الدعوة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{# <li><a href=\"{{path('organigramme')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الهيكل التنظيمي</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المشاريع</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('protection')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الحماية</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('participation')}}\">
\t\t\t\t\t\t\t\t\t\t<div>المشاركة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('sante')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الصحة</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('observatoire')}}\">
\t\t\t\t\t\t\t\t\t\t<div>الرصد و التتبع</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{#<li><a href=\"{{path('cnde')}}\">
\t\t\t\t\t\t\t\t\t\t<div>المؤتمر الوطني لحقوق الطفل</div>
\t\t\t\t\t\t\t\t\t</a></li> #}
\t\t\t\t\t\t\t\t<li><a href=\"{{path('campagne')}}\">
\t\t\t\t\t\t\t\t\t\t<div>حملة \"مدن أفريقية بدون أطفال في أوضاع الشوارع\"</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('index_actualite')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المستجدات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{# <li class=\"\"><a href=\"{{path('publications')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">الفضاء الوثائقي</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t<li class=\"\"><a class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">المنشورات</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('twc_onde_etudes')}}\">
\t\t\t\t\t\t\t\t\t\t<div>دراسات وتقارير</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('twc_onde_photos_videos')}}\">
\t\t\t\t\t\t\t\t\t\t<div>صور وفيديوهات</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('documentation')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">فضاء الصحافة</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('twc_enfants_homepage')}}\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">بوابة الطفل</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{# <li class=\"\"><a href=\"{{asset('assets/telechargements/appel_offre.pdf')}}\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">طلب عروض</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('formulaire')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"blue-nav\">التواصل معنا</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t{% elseif app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t{% elseif app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau \"> Ar
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'ar'})) }}\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau\"> Ar</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau\"> En</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t</nav>
\t\t<div class=\"xs-logo-wraper container-logo container-logo-ar  xs-padding-0\">
\t\t\t<a class=\"nav-brand\" href=\"{{path('twc_onde_homepage')}}\">
\t\t\t\t<img src=\"{{asset('front/images/logo_onde_ar.png')}}\" alt=\"\" class=\"logo white-logo\">
\t\t\t</a>
\t\t</div>
\t</div>
</header>
", "TWCOndeBundle:Default:headerAr.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Default/headerAr.html.twig");
    }
}
