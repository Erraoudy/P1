<?php

/* TWCOndeBundle:Default:header.html.twig */
class __TwigTemplate_10789401ed62cbaaffd1c846297cabe07743db5faf88a5fc0acb255d706848c7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:header.html.twig"));

        // line 1
        echo "<style type=\"text/css\" media=\"screen\">
\t.active{
\t\tcolor: #5cb37c !important;
\t}
\t.search:avtive{
\t\toutline: 0 !important;
\t}
\t#content {
\t  \tposition: absolute;
\t    height: 50px;
\t    /*width: 300px;*/
        margin-left: 20px;
    \tmargin-top: 30px;
\t}

\t#content.on {
\t  -webkit-animation-name: in-out;
\t  animation-name: in-out;
\t  -webkit-animation-duration: 0.7s;
\t  animation-duration: 0.7s;
\t  -webkit-animation-timing-function: linear;
\t  animation-timing-function: linear;
\t  -webkit-animation-iteration-count: 1;
\t  animation-iteration-count: 1;
\t}

\tinput {
\t  box-sizing: border-box;
\t  width: 30px;
\t  height: 30px;
\t  border: 4px solid #ffffff;
\t  border-radius: 50%;
\t  background: none;
\t  color: #fff;
\t  font-size: 16px;
\t  font-weight: 400;
\t  font-family: Roboto;
\t  outline: 0;
\t  -webkit-transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
\t    padding 0.2s;
\t  transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
\t    padding 0.2s;
\t  -webkit-transition-delay: 0.4s;
\t  transition-delay: 0.4s;
\t  -webkit-transform: translate(-15%, -50%);
\t  -ms-transform: translate(-15%, -50%);
\t  transform: translate(-0%, -50%);
\t}

\t.search {
\t  background: none;
\t  position: absolute;
\t  top: 0px;
\t  left: 0;
\t  height: 50px;
\t  width: 50px;
\t  padding: 0;
\t  border-radius: 100%;
\t  outline: 0;
\t  border: 0;
\t  color: inherit;
\t  cursor: pointer;
\t  -webkit-transition: 0.2s ease-in-out;
\t  transition: 0.2s ease-in-out;
\t  -webkit-transform: translate(-15%, -50%);
\t  -ms-transform: translate(-15%, -50%);
\t  transform: translate(-15%, -50%);

\t}

\t.search:before {
\t      content: \"\";
\t    position: absolute;
\t    width: 20px;
\t    height: 4px;
\t    background-color: #fff;
\t    -webkit-transform: rotate(55deg);
\t    -ms-transform: rotate(55deg);
\t    transform: rotate(55deg);
\t    margin-top: 18px;
\t    margin-left: 0px;
\t    -webkit-transition: 0.2s ease-in-out;
\t    transition: 0.2s ease-in-out;
\t}

\t.close1 {
\t  -webkit-transition: 0.4s ease-in-out;
\t  transition: 0.4s ease-in-out;
\t  -webkit-transition-delay: 0.4s;
\t  transition-delay: 0.4s;
\t}

\t.close1:before {
\t  content: \"\";
\t  position: absolute;
\t  width: 27px;
\t  height: 4px;
\t  margin-top: -1px;
\t  margin-left: -13px;
\t  background-color: #fff;
\t  -webkit-transform: rotate(45deg);
\t  -ms-transform: rotate(45deg);
\t  transform: rotate(45deg);
\t  -webkit-transition: 0.2s ease-in-out;
\t  transition: 0.2s ease-in-out;
\t}

\t.close1:after {
\t  content: \"\";
\t  position: absolute;
\t  width: 27px;
\t  height: 4px;
\t  background-color: #fff;
\t  margin-top: -1px;
\t  margin-left: -13px;
\t  cursor: pointer;
\t  -webkit-transform: rotate(-45deg);
\t  -ms-transform: rotate(-45deg);
\t  transform: rotate(-45deg);
\t}

\t.square {
\t  box-sizing: border-box;
\t  padding: 0 00px 0 10px;
\t  height: 50px;
\t  border: 4px solid #ffffff;
\t  border-radius: 0;
\t  background: rgba(211, 211, 211, 0.8);
\t  color: #fff;
\t  font-family: Roboto;
\t  font-size: 16px;
\t  font-weight: 400;
\t  outline: 0;
\t  -webkit-transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out,
\t    padding 0.1s;
\t  transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out,
\t    padding 0.1s;
\t  -webkit-transition-delay: 0.1s, 0s, 0.1s;
\t  transition-delay: 0.1s, 0s, 0.1s;
\t  -webkit-transform: translate(-15%, -50%);
\t  -ms-transform: translate(-15%, -50%);
\t  transform: translate(-15%, -50%);
\t  position: absolute;
\t  right: 80px;
\t  width: 200px;
\t  padding-left: 40px;
\t}

\t#content2 {
\t  \tposition: absolute;
\t    height: 50px;
\t    /*width: 300px;*/
        margin-left: 20px;
    \tmargin-top: 30px;
\t}

\t#content2.on {
\t  -webkit-animation-name: in-out;
\t  animation-name: in-out;
\t  -webkit-animation-duration: 0.7s;
\t  animation-duration: 0.7s;
\t  -webkit-animation-timing-function: linear;
\t  animation-timing-function: linear;
\t  -webkit-animation-iteration-count: 1;
\t  animation-iteration-count: 1;
\t}

\t.in2 {
\t     box-sizing: border-box;
\t    width: 20px;
\t    height: 20px;
\t    border: 4px solid #5cb37c;
\t    border-radius: 50%;
\t    background: none;
\t    color: #5cb37c;
\t    font-size: 16px;
\t    font-weight: 400;
\t    font-family: Roboto;
\t    outline: 0;
\t    -webkit-transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out, padding 0.2s;
\t    transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out, padding 0.2s;
\t    -webkit-transition-delay: 0.4s;
\t    transition-delay: 0.4s;
\t    -webkit-transform: translate(-15%, -50%);
\t    -ms-transform: translate(-15%, -50%);
\t    transform: translate(12%, -45%);
\t}

\t.in2:focus {
\t    outline: none !important;
\t}

\t.search2 {
\t  background: none;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 20px;
    width: 20px;
    padding: 0;
    border-radius: 100%;
    outline: 0;
    border: 0;
    color: inherit;
    cursor: pointer;
    -webkit-transition: 0.2s ease-in-out;
    transition: 0.2s ease-in-out;
    -webkit-transform: translate(-15%, -50%);
    -ms-transform: translate(-15%, -50%);
    transform: translate(30%, -84%);

\t}
\t.search2:focus {
\t    outline: none !important;
\t}

\t.search2:before {
\t    content: \"\";
\t    position: absolute;
\t    width: 12px;
\t    height: 4px;
\t    background-color: #5cb37c;
\t    -webkit-transform: rotate(55deg);
\t    -ms-transform: rotate(55deg);
\t    transform: rotate(55deg);
\t    margin-top: 18px;
\t    margin-left: 0px;
\t    -webkit-transition: 0.2s ease-in-out;
\t    transition: 0.2s ease-in-out;
\t}

\t.close2 {
\t  -webkit-transition: 0.4s ease-in-out;
\t  transition: 0.4s ease-in-out;
\t  -webkit-transition-delay: 0.4s;
\t  transition-delay: 0.4s;
\t}

\t.close2:before {
\t  content: \"\";
\t    position: absolute;
\t    width: 18px;
\t    height: 4px;
\t    margin-top: 4px;
\t    margin-left: -13px;
\t    background-color: #5cb37c;
\t    -webkit-transform: rotate(45deg);
\t    -ms-transform: rotate(45deg);
\t    transform: rotate(45deg);
\t    -webkit-transition: 0.2s ease-in-out;
\t    transition: 0.2s ease-in-out;
\t}

\t.close2:after {
\t  content: \"\";
\t    position: absolute;
\t    width: 18px;
\t    height: 4px;
\t    background-color: #5cb37c;
\t    margin-top: 4px;
\t    margin-left: -13px;
\t    cursor: pointer;
\t    -webkit-transform: rotate(-45deg);
\t    -ms-transform: rotate(-45deg);
\t    transform: rotate(-45deg);
\t}

\t.square2 {
\t      box-sizing: border-box;
\t    padding: 0 00px 0 10px;
\t    height: 30px;
\t    border: 4px solid #5cb37c;
\t    border-radius: 0;
\t    background: none;
\t    color: #5cb37c;
\t    font-family: Roboto;
\t    font-size: 16px;
\t    font-weight: 400;
\t    outline: 0;
\t    -webkit-transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out, padding 0.1s;
\t    transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out, padding 0.1s;
\t    -webkit-transition-delay: 0.1s, 0s, 0.1s;
\t    transition-delay: 0.1s, 0s, 0.1s;
\t    -webkit-transform: translate(-15%, -50%);
\t    -ms-transform: translate(-15%, -50%);
\t    transform: translate(-15%, -50%);
\t    position: absolute;
\t    right: 128px;
\t    width: 156px;
\t    padding-left: 32px;
\t    margin-top: -1px;
\t}
\t.in2:active {
\t    outline: none;
\t}
\t

\t@media (min-width: 992px) and (max-width: 992px){
\t\t.nav-logo img{
\t\t\tdisplay: none;
\t\t}
\t}
\t@media (min-width: 992px) and (max-width: 1200px){
\t\t.appel-doffre{
\t\t\tdisplay: none;
\t\t}
\t\t.nav-menus-wrapper.row{
\t\t\tfloat: right;
    \t\tmargin-right: 25px;
\t\t}
\t\t.xs-header .nav-menu li a{
\t\t\tfont-size: 11px;
\t\t}
\t}
\t
\t@media only screen and (max-width: 991px){
\t\t.nav-logo{
\t\t\tdisplay: block;
\t\t    position: relative;
\t\t    z-index: 1;
\t\t    background-image: url(\"";
        // line 321
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
<header class=\"xs-header header-transparent white-header\">
\t<div class=\"container\">
\t\t<div class=\"xs-logo-wraper container-logo xs-padding-0 d-sm-none d-lg-block\">
\t\t\t<a class=\"nav-brand\" href=\"";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">
\t\t\t\t<img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo white-logo\">
\t\t\t</a>
\t\t</div><!-- .xs-logo-wraper END -->
\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t<div class=\"nav-header\">
\t\t\t\t<div class=\"nav-toggle white-nav-toggle\"></div>
\t\t\t\t<a href=\"";
        // line 349
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\" class=\"nav-logo\">
\t\t\t\t\t<img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div><!-- .nav-header END -->
\t\t\t<div class=\"nav-menus-wrapper row\">

\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"nav-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"selected-it\">
\t\t\t\t\t\t\t\t\t<div class=\"\">";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.title"), "html", null, true);
        echo "</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron white-indicator\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 362
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.ONDEenBref"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.historique"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 370
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.mission"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("realisations");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.realisations"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 378
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plaidoyer");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.PLAIDOYER"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 387
        echo "\t\t\t\t\t\t\t\t\t";
        // line 391
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"list-header selected-pr\">
\t\t\t\t\t\t\t\t\t<div class=\"\">";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.title"), "html", null, true);
        echo "</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 398
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("protection");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.protection"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 402
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.participation"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.sante"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 410
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("observatoire");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.veille_suivi"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 414
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campagne");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.campagneVillesAfricaines"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 420
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_actualite");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"selected-act\">";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.actualites"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header selected-pubb\">
\t\t\t\t\t\t\t\t\t<div class=\"\">";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.title"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 428
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_etudes");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.etudes_Rapports"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 432
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_photos_videos");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.photos_Videotheques"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 438
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentation");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div>";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.espacePresse"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 442
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_enfants_homepage");
        echo "\"  target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"\">";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.portailEnfant"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 450
        echo "\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulaire");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"selected-con\">";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.contact"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 457
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
            // line 458
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 459
($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
            // line 460
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 461
($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 462
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-maroc.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> Ar
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 464
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "fr"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "ar"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-maroc.jpg"), "html", null, true);
        echo "\" class=\"drapeau\">Ar</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "en"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
        echo "\" class=\"drapeau\">En</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<form id=\"content\">
\t\t\t\t\t\t\t\t  \t<input type=\"text\" name=\"input\" class=\"input\" id=\"search-input\">
\t\t\t\t\t\t\t\t  \t<button type=\"reset\" class=\"search\" id=\"search-btn\"></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"kids-zone-btn white-kids-zone-btn\">
\t\t\t\t";
        // line 498
        echo "\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t</nav>
\t</div>
</header>

<header class=\"xs-header header-transparent blue-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"xs-logo-wraper container-logo xs-padding-0\">
\t\t\t\t<a class=\"nav-brand\" href=\"";
        // line 508
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo white-logo\">
\t\t\t\t</a>
\t\t\t</div><!-- .xs-logo-wraper END -->
\t\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t\t<div class=\"nav-header\">
\t\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t\t</div><!-- .nav-header END -->
\t\t\t\t<div class=\"nav-menus-wrapper row\">

\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<ul class=\"nav-menu list-header-ma\">
\t\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-it\">";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.title"), "html", null, true);
        echo "</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 525
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.ONDEenBref"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 529
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.historique"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 533
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.mission"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 537
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("realisations");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.realisations"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 541
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plaidoyer");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.aProposONDE.PLAIDOYER"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 550
        echo "\t\t\t\t\t\t\t\t\t";
        // line 554
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"list-header selected-pr\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav\">";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.title"), "html", null, true);
        echo "</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 561
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("protection");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.protection"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 565
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.participation"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 569
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 570
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.sante"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 573
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("observatoire");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.veille_suivi"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 580
        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campagne");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.projets.campagneVillesAfricaines"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 586
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_actualite");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-act\">";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.actualites"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-pubb\">";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.title"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 594
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_etudes");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.etudes_Rapports"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 598
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_photos_videos");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.publications.photos_Videotheques"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 604
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentation");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-pub\">";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.espacePresse"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 619
        echo "\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_parlement_homepage");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-con\">";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.portailEnfant"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 627
        echo "\t\t\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulaire");
        echo "\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-con\">";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.contact"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 635
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
            // line 636
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 637
($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
            // line 638
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
            echo "\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t\t\t";
            // line 641
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 642
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "fr"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-france.jpg"), "html", null, true);
        echo "\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        // line 654
        echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route_params"], "method"), ["_locale" => "en"])), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/drapeau-angleterre.jpg"), "html", null, true);
        echo "\" class=\"drapeau\">En</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<form id=\"content2\">
\t\t\t\t\t\t\t\t  \t<input type=\"text\" name=\"input2\" class=\"in2 input2\" id=\"search-input2\">
\t\t\t\t\t\t\t\t  \t<button type=\"reset\" class=\"search2\" id=\"search-btn2\"></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"kids-zone-btn\">
\t\t\t\t\t";
        // line 674
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t\t</nav>
\t\t</div>
</header>
<script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script>
//     \$(document).ready(function() {
//         \$(\"[href]\").each(function() {
//             if (this.href == window.location.href) {
//                 \$(this).addClass(\"active\");
//             }
//         });
// \t});
// updated 2019
\tconst input = document.getElementById(\"search-input\");
\tconst searchBtn = document.getElementById(\"search-btn\");

\tconst expand = () => {
\t  searchBtn.classList.toggle(\"close1\");
\t  input.classList.toggle(\"square\");
\t  input.focus();
\t};

\tsearchBtn.addEventListener(\"click\", expand);

\tconst input2 = document.getElementById(\"search-input2\");
\tconst searchBtn2 = document.getElementById(\"search-btn2\");

\tconst expand2 = () => {
\t  searchBtn2.classList.toggle(\"close2\");
\t  input2.classList.toggle(\"square2\");
\t  input2.focus();
\t};

\tsearchBtn2.addEventListener(\"click\", expand2);
</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TWCOndeBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  965 => 680,  957 => 674,  938 => 655,  933 => 654,  927 => 647,  923 => 646,  917 => 642,  914 => 641,  909 => 638,  907 => 637,  902 => 636,  900 => 635,  890 => 628,  885 => 627,  879 => 620,  874 => 619,  868 => 605,  864 => 604,  856 => 599,  852 => 598,  846 => 595,  842 => 594,  836 => 591,  829 => 587,  825 => 586,  817 => 581,  812 => 580,  806 => 574,  802 => 573,  796 => 570,  792 => 569,  786 => 566,  782 => 565,  776 => 562,  772 => 561,  765 => 557,  760 => 554,  758 => 550,  751 => 542,  747 => 541,  741 => 538,  737 => 537,  731 => 534,  727 => 533,  721 => 530,  717 => 529,  711 => 526,  707 => 525,  700 => 521,  685 => 509,  681 => 508,  669 => 498,  648 => 477,  644 => 476,  638 => 473,  634 => 472,  628 => 469,  624 => 468,  618 => 464,  612 => 462,  610 => 461,  605 => 460,  603 => 459,  598 => 458,  596 => 457,  587 => 451,  582 => 450,  576 => 443,  572 => 442,  566 => 439,  562 => 438,  554 => 433,  550 => 432,  544 => 429,  540 => 428,  534 => 425,  527 => 421,  523 => 420,  515 => 415,  511 => 414,  505 => 411,  501 => 410,  495 => 407,  491 => 406,  485 => 403,  481 => 402,  475 => 399,  471 => 398,  464 => 394,  459 => 391,  457 => 387,  450 => 379,  446 => 378,  440 => 375,  436 => 374,  430 => 371,  426 => 370,  420 => 367,  416 => 366,  410 => 363,  406 => 362,  399 => 358,  388 => 350,  384 => 349,  375 => 343,  371 => 342,  347 => 321,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\" media=\"screen\">
\t.active{
\t\tcolor: #5cb37c !important;
\t}
\t.search:avtive{
\t\toutline: 0 !important;
\t}
\t#content {
\t  \tposition: absolute;
\t    height: 50px;
\t    /*width: 300px;*/
        margin-left: 20px;
    \tmargin-top: 30px;
\t}

\t#content.on {
\t  -webkit-animation-name: in-out;
\t  animation-name: in-out;
\t  -webkit-animation-duration: 0.7s;
\t  animation-duration: 0.7s;
\t  -webkit-animation-timing-function: linear;
\t  animation-timing-function: linear;
\t  -webkit-animation-iteration-count: 1;
\t  animation-iteration-count: 1;
\t}

\tinput {
\t  box-sizing: border-box;
\t  width: 30px;
\t  height: 30px;
\t  border: 4px solid #ffffff;
\t  border-radius: 50%;
\t  background: none;
\t  color: #fff;
\t  font-size: 16px;
\t  font-weight: 400;
\t  font-family: Roboto;
\t  outline: 0;
\t  -webkit-transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
\t    padding 0.2s;
\t  transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
\t    padding 0.2s;
\t  -webkit-transition-delay: 0.4s;
\t  transition-delay: 0.4s;
\t  -webkit-transform: translate(-15%, -50%);
\t  -ms-transform: translate(-15%, -50%);
\t  transform: translate(-0%, -50%);
\t}

\t.search {
\t  background: none;
\t  position: absolute;
\t  top: 0px;
\t  left: 0;
\t  height: 50px;
\t  width: 50px;
\t  padding: 0;
\t  border-radius: 100%;
\t  outline: 0;
\t  border: 0;
\t  color: inherit;
\t  cursor: pointer;
\t  -webkit-transition: 0.2s ease-in-out;
\t  transition: 0.2s ease-in-out;
\t  -webkit-transform: translate(-15%, -50%);
\t  -ms-transform: translate(-15%, -50%);
\t  transform: translate(-15%, -50%);

\t}

\t.search:before {
\t      content: \"\";
\t    position: absolute;
\t    width: 20px;
\t    height: 4px;
\t    background-color: #fff;
\t    -webkit-transform: rotate(55deg);
\t    -ms-transform: rotate(55deg);
\t    transform: rotate(55deg);
\t    margin-top: 18px;
\t    margin-left: 0px;
\t    -webkit-transition: 0.2s ease-in-out;
\t    transition: 0.2s ease-in-out;
\t}

\t.close1 {
\t  -webkit-transition: 0.4s ease-in-out;
\t  transition: 0.4s ease-in-out;
\t  -webkit-transition-delay: 0.4s;
\t  transition-delay: 0.4s;
\t}

\t.close1:before {
\t  content: \"\";
\t  position: absolute;
\t  width: 27px;
\t  height: 4px;
\t  margin-top: -1px;
\t  margin-left: -13px;
\t  background-color: #fff;
\t  -webkit-transform: rotate(45deg);
\t  -ms-transform: rotate(45deg);
\t  transform: rotate(45deg);
\t  -webkit-transition: 0.2s ease-in-out;
\t  transition: 0.2s ease-in-out;
\t}

\t.close1:after {
\t  content: \"\";
\t  position: absolute;
\t  width: 27px;
\t  height: 4px;
\t  background-color: #fff;
\t  margin-top: -1px;
\t  margin-left: -13px;
\t  cursor: pointer;
\t  -webkit-transform: rotate(-45deg);
\t  -ms-transform: rotate(-45deg);
\t  transform: rotate(-45deg);
\t}

\t.square {
\t  box-sizing: border-box;
\t  padding: 0 00px 0 10px;
\t  height: 50px;
\t  border: 4px solid #ffffff;
\t  border-radius: 0;
\t  background: rgba(211, 211, 211, 0.8);
\t  color: #fff;
\t  font-family: Roboto;
\t  font-size: 16px;
\t  font-weight: 400;
\t  outline: 0;
\t  -webkit-transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out,
\t    padding 0.1s;
\t  transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out,
\t    padding 0.1s;
\t  -webkit-transition-delay: 0.1s, 0s, 0.1s;
\t  transition-delay: 0.1s, 0s, 0.1s;
\t  -webkit-transform: translate(-15%, -50%);
\t  -ms-transform: translate(-15%, -50%);
\t  transform: translate(-15%, -50%);
\t  position: absolute;
\t  right: 80px;
\t  width: 200px;
\t  padding-left: 40px;
\t}

\t#content2 {
\t  \tposition: absolute;
\t    height: 50px;
\t    /*width: 300px;*/
        margin-left: 20px;
    \tmargin-top: 30px;
\t}

\t#content2.on {
\t  -webkit-animation-name: in-out;
\t  animation-name: in-out;
\t  -webkit-animation-duration: 0.7s;
\t  animation-duration: 0.7s;
\t  -webkit-animation-timing-function: linear;
\t  animation-timing-function: linear;
\t  -webkit-animation-iteration-count: 1;
\t  animation-iteration-count: 1;
\t}

\t.in2 {
\t     box-sizing: border-box;
\t    width: 20px;
\t    height: 20px;
\t    border: 4px solid #5cb37c;
\t    border-radius: 50%;
\t    background: none;
\t    color: #5cb37c;
\t    font-size: 16px;
\t    font-weight: 400;
\t    font-family: Roboto;
\t    outline: 0;
\t    -webkit-transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out, padding 0.2s;
\t    transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out, padding 0.2s;
\t    -webkit-transition-delay: 0.4s;
\t    transition-delay: 0.4s;
\t    -webkit-transform: translate(-15%, -50%);
\t    -ms-transform: translate(-15%, -50%);
\t    transform: translate(12%, -45%);
\t}

\t.in2:focus {
\t    outline: none !important;
\t}

\t.search2 {
\t  background: none;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 20px;
    width: 20px;
    padding: 0;
    border-radius: 100%;
    outline: 0;
    border: 0;
    color: inherit;
    cursor: pointer;
    -webkit-transition: 0.2s ease-in-out;
    transition: 0.2s ease-in-out;
    -webkit-transform: translate(-15%, -50%);
    -ms-transform: translate(-15%, -50%);
    transform: translate(30%, -84%);

\t}
\t.search2:focus {
\t    outline: none !important;
\t}

\t.search2:before {
\t    content: \"\";
\t    position: absolute;
\t    width: 12px;
\t    height: 4px;
\t    background-color: #5cb37c;
\t    -webkit-transform: rotate(55deg);
\t    -ms-transform: rotate(55deg);
\t    transform: rotate(55deg);
\t    margin-top: 18px;
\t    margin-left: 0px;
\t    -webkit-transition: 0.2s ease-in-out;
\t    transition: 0.2s ease-in-out;
\t}

\t.close2 {
\t  -webkit-transition: 0.4s ease-in-out;
\t  transition: 0.4s ease-in-out;
\t  -webkit-transition-delay: 0.4s;
\t  transition-delay: 0.4s;
\t}

\t.close2:before {
\t  content: \"\";
\t    position: absolute;
\t    width: 18px;
\t    height: 4px;
\t    margin-top: 4px;
\t    margin-left: -13px;
\t    background-color: #5cb37c;
\t    -webkit-transform: rotate(45deg);
\t    -ms-transform: rotate(45deg);
\t    transform: rotate(45deg);
\t    -webkit-transition: 0.2s ease-in-out;
\t    transition: 0.2s ease-in-out;
\t}

\t.close2:after {
\t  content: \"\";
\t    position: absolute;
\t    width: 18px;
\t    height: 4px;
\t    background-color: #5cb37c;
\t    margin-top: 4px;
\t    margin-left: -13px;
\t    cursor: pointer;
\t    -webkit-transform: rotate(-45deg);
\t    -ms-transform: rotate(-45deg);
\t    transform: rotate(-45deg);
\t}

\t.square2 {
\t      box-sizing: border-box;
\t    padding: 0 00px 0 10px;
\t    height: 30px;
\t    border: 4px solid #5cb37c;
\t    border-radius: 0;
\t    background: none;
\t    color: #5cb37c;
\t    font-family: Roboto;
\t    font-size: 16px;
\t    font-weight: 400;
\t    outline: 0;
\t    -webkit-transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out, padding 0.1s;
\t    transition: width 0.1s ease-in-out, border-radius 0.1s ease-in-out, padding 0.1s;
\t    -webkit-transition-delay: 0.1s, 0s, 0.1s;
\t    transition-delay: 0.1s, 0s, 0.1s;
\t    -webkit-transform: translate(-15%, -50%);
\t    -ms-transform: translate(-15%, -50%);
\t    transform: translate(-15%, -50%);
\t    position: absolute;
\t    right: 128px;
\t    width: 156px;
\t    padding-left: 32px;
\t    margin-top: -1px;
\t}
\t.in2:active {
\t    outline: none;
\t}
\t

\t@media (min-width: 992px) and (max-width: 992px){
\t\t.nav-logo img{
\t\t\tdisplay: none;
\t\t}
\t}
\t@media (min-width: 992px) and (max-width: 1200px){
\t\t.appel-doffre{
\t\t\tdisplay: none;
\t\t}
\t\t.nav-menus-wrapper.row{
\t\t\tfloat: right;
    \t\tmargin-right: 25px;
\t\t}
\t\t.xs-header .nav-menu li a{
\t\t\tfont-size: 11px;
\t\t}
\t}
\t
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
<header class=\"xs-header header-transparent white-header\">
\t<div class=\"container\">
\t\t<div class=\"xs-logo-wraper container-logo xs-padding-0 d-sm-none d-lg-block\">
\t\t\t<a class=\"nav-brand\" href=\"{{path('twc_onde_homepage')}}\">
\t\t\t\t<img src=\"{{asset('front/images/logo_onde.png')}}\" alt=\"\" class=\"logo white-logo\">
\t\t\t</a>
\t\t</div><!-- .xs-logo-wraper END -->
\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t<div class=\"nav-header\">
\t\t\t\t<div class=\"nav-toggle white-nav-toggle\"></div>
\t\t\t\t<a href=\"{{path('twc_onde_homepage')}}\" class=\"nav-logo\">
\t\t\t\t\t<img src=\"{{asset('front/images/logo_onde.png')}}\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div><!-- .nav-header END -->
\t\t\t<div class=\"nav-menus-wrapper row\">

\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"nav-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"selected-it\">
\t\t\t\t\t\t\t\t\t<div class=\"\">{{\"header.aProposONDE.title\"|trans}}</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron white-indicator\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('presentation')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.ONDEenBref\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('historique')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.historique\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('missions')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.mission\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('realisations')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.realisations\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('plaidoyer')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.PLAIDOYER\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{# <li><a href=\"{{path('organigramme')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.organigramme\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t\t\t{# <li><a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div>chiffres clés</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"list-header selected-pr\">
\t\t\t\t\t\t\t\t\t<div class=\"\">{{\"header.projets.title\"|trans}}</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('protection')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.protection\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('participation')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.participation\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('sante')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.sante\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('observatoire')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.veille_suivi\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('campagne')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.campagneVillesAfricaines\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('index_actualite')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"selected-act\">{{\"header.actualites\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header selected-pubb\">
\t\t\t\t\t\t\t\t\t<div class=\"\">{{\"header.publications.title\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('twc_onde_etudes')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.publications.etudes_Rapports\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('twc_onde_photos_videos')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.publications.photos_Videotheques\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('documentation')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div>{{\"header.espacePresse\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('twc_enfants_homepage')}}\"  target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"\">{{\"header.portailEnfant\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{# <li class=\"appel-doffre\"><a href=\"{{asset('assets/telechargements/appel_offre.pdf')}}\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"\">{{\"header.appeldOffre\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('formulaire')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"selected-con\">{{\"header.contact\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t\t\t{% elseif app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t\t\t{% elseif app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau \"> Ar
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'ar'})) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau\">Ar</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau\">En</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<form id=\"content\">
\t\t\t\t\t\t\t\t  \t<input type=\"text\" name=\"input\" class=\"input\" id=\"search-input\">
\t\t\t\t\t\t\t\t  \t<button type=\"reset\" class=\"search\" id=\"search-btn\"></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"kids-zone-btn white-kids-zone-btn\">
\t\t\t\t{# <a href=\"donate-now.html\" class=\"btn donateNow\">
\t\t\t\t\t<img class=\"white-kids-zone\" src=\"{{asset('assets/images/kids-zone.png')}}\" alt=\"\">
\t\t\t\t</a> #}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t</nav>
\t</div>
</header>

<header class=\"xs-header header-transparent blue-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"xs-logo-wraper container-logo xs-padding-0\">
\t\t\t\t<a class=\"nav-brand\" href=\"{{path('twc_onde_homepage')}}\">
\t\t\t\t\t<img src=\"{{asset('front/images/logo_onde.png')}}\" alt=\"\" class=\"logo white-logo\">
\t\t\t\t</a>
\t\t\t</div><!-- .xs-logo-wraper END -->
\t\t\t<nav class=\"xs-menus xs_nav-landscape\">
\t\t\t\t<div class=\"nav-header\">
\t\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t\t</div><!-- .nav-header END -->
\t\t\t\t<div class=\"nav-menus-wrapper row\">

\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<ul class=\"nav-menu list-header-ma\">
\t\t\t\t\t\t\t<li><a href=\"\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-it\">{{\"header.aProposONDE.title\"|trans}}</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('presentation')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.ONDEenBref\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('historique')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.historique\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('missions')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.mission\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('realisations')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.realisations\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('plaidoyer')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.PLAIDOYER\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{# <li><a href=\"{{path('organigramme')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.aProposONDE.organigramme\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t\t\t{# <li><a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>chiffres clés</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"list-header selected-pr\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav\">{{\"header.projets.title\"|trans}}</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('protection')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.protection\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('participation')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.participation\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('sante')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.sante\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('observatoire')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.veille_suivi\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{# <li><a href=\"{{path('cnde')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>Congrès National des droits de l'enfant</div>
\t\t\t\t\t\t\t\t\t\t</a></li> #}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('campagne')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.projets.campagneVillesAfricaines\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('index_actualite')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-act\">{{\"header.actualites\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-pubb\">{{\"header.publications.title\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('twc_onde_etudes')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.publications.etudes_Rapports\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('twc_onde_photos_videos')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{\"header.publications.photos_Videotheques\"|trans}}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{path('documentation')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-pub\">{{\"header.espacePresse\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{# <li class=\"\"><a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-ep\">Espace presse</div><span class=\"submenu-indicator\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('documentation')}}\">
\t\t\t\t\t\t\t\t\t\t\t<div>Documentation</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('twc_parlement_homepage')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-con\">{{\"header.portailEnfant\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{# <li class=\"\"><a href=\"{{asset('assets/telechargements/appel_offre.pdf')}}\" target=\"_blank\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav portail-en\">{{\"header.appeldOffre\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('formulaire')}}\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t<div class=\"blue-nav selected-con\">{{\"header.contact\"|trans}}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"#\" class=\"list-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau \"> Fr
\t\t\t\t\t\t\t\t\t\t\t{% elseif app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau \"> En
\t\t\t\t\t\t\t\t\t\t\t{# {% elseif app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau \"> Ar #}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"submenu-indicator\"><span class=\"submenu-indicator-chevron\"></span></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-dropdown nav-submenu\" style=\"right: auto; display: none;\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-france.jpg')}}\" class=\"drapeau\"> Fr</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{# <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'ar'})) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-maroc.jpg')}}\" class=\"drapeau\">Ar</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{asset('assets/images/drapeau-angleterre.jpg')}}\" class=\"drapeau\">En</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<form id=\"content2\">
\t\t\t\t\t\t\t\t  \t<input type=\"text\" name=\"input2\" class=\"in2 input2\" id=\"search-input2\">
\t\t\t\t\t\t\t\t  \t<button type=\"reset\" class=\"search2\" id=\"search-btn2\"></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"kids-zone-btn\">
\t\t\t\t\t{# <a href=\"donate-now.html\" class=\"btn donateNow\">
\t\t\t\t\t\t<img class=\"kids-logo-header\" src=\"{{asset('assets/images/kids-zone.png')}}\" alt=\"\">
\t\t\t\t\t</a> #}

\t\t\t\t</div>
\t\t\t\t<div class=\"nav-overlay-panel\"></div>
\t\t\t</nav>
\t\t</div>
</header>
<script src=\"{{asset('front/js/jquery-3.2.1.min.js')}}\"></script>
<script>
//     \$(document).ready(function() {
//         \$(\"[href]\").each(function() {
//             if (this.href == window.location.href) {
//                 \$(this).addClass(\"active\");
//             }
//         });
// \t});
// updated 2019
\tconst input = document.getElementById(\"search-input\");
\tconst searchBtn = document.getElementById(\"search-btn\");

\tconst expand = () => {
\t  searchBtn.classList.toggle(\"close1\");
\t  input.classList.toggle(\"square\");
\t  input.focus();
\t};

\tsearchBtn.addEventListener(\"click\", expand);

\tconst input2 = document.getElementById(\"search-input2\");
\tconst searchBtn2 = document.getElementById(\"search-btn2\");

\tconst expand2 = () => {
\t  searchBtn2.classList.toggle(\"close2\");
\t  input2.classList.toggle(\"square2\");
\t  input2.focus();
\t};

\tsearchBtn2.addEventListener(\"click\", expand2);
</script>

", "TWCOndeBundle:Default:header.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Default/header.html.twig");
    }
}
