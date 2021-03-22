<?php

/* TWCOndeBundle:Default:index.html.twig */
class __TwigTemplate_531f32b3ead3bb6ba29c31509a6602f4393473694c8ec2343a312f44f66d52c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCOndeBundle::ondelayout.html.twig", "TWCOndeBundle:Default:index.html.twig", 1);
        $this->blocks = [
            'Style' => [$this, 'block_Style'],
            'Title' => [$this, 'block_Title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCOndeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Style($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 3
        echo "\t";
        $this->displayParentBlock("Style", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/bootstrap.css"), "html", null, true);
        echo "\">
\t";
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/carouselIndex.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/magnific-popup.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/nonprofit.css"), "html", null, true);
        echo "\">

\t
\t<style>
\t\t.tit-caroussel{
\t\t\tcolor: #fff !important;
\t\t}
\t\t.tit-caroussel:hover{
\t\t\tcolor: #fff !important;
\t\t}
\t\t.title-carousel{
\t\t\tpadding: 35px 80px 0px 80px; font-size: 2.28571em !important;    margin-top: -30px;
\t\t}
\t\t.entry-title {
\t\t    display: -webkit-box;
\t\t    -webkit-line-clamp: 3;
\t\t    -webkit-box-orient: vertical;
\t\t    overflow: hidden;
\t\t    text-overflow: ellipsis;
\t\t    color: #1e1e1e !important;
\t\t}
\t\t.owl-next:focus{
\t\t\toutline: none !important
\t\t}
\t\t.owl-prev:focus{
\t\t\toutline: none !important
\t\t}
\t\t.owl-prev,
\t\t.owl-next {
\t\t  position: absolute;
\t\t  top: 48%;
\t\t  transform: translateY(-50%);
\t\t}

\t\t.owl-prev {
\t\t  left: 2rem;
\t\t}

\t\t.owl-next {
\t\t  right: 2rem;
\t\t}
\t\t.owl-nav > button {
\t\t\tbackground: transparent !important;
\t\t}
\t\t
\t\ta:hover{
\t\t\ttext-decoration: none !important;
\t\t}
\t\t.link-sec > h2{
\t\t\tcolor: #1e1e1e;
    \t\tfont-weight: 600;
\t\t}
\t\t.bord-sect{
\t\t\tborder-left: solid 2px #555;
\t\t    height: 240px;
\t\t    border-right: solid 2px #555;
\t\t}
\t\t.xs-welcome-content{
\t\t\tmin-height: 100vh !important;
\t\t}
\t    .xs-event-image{
\t    \tcursor: pointer !important;
\t    }
\t    .box-color{
\t    \theight: 235px !important;
\t    }
\t    .rel-slid{
\t    \tposition: relative !important;
\t    }
\t    .fixed-con{
\t    \tposition: absolute !important;
\t\t    top: 50% !important;
\t\t    left: 50% !important;
\t\t    transform: translate(-50%, -50%) !important;
\t\t    z-index: 99 !important;
\t    }
\t    .bottom-con{
\t    \tbackground-color: #fff !important;
\t    \tmargin-left: auto;
\t    \tmargin-right: auto;
\t    \t-webkit-box-shadow: 0px 0px 14px 8px rgba(0, 0, 0, 0.2);
    \t    box-shadow: 0px 0px 14px 8px rgba(0, 0, 0, 0.2);
\t    }
\t    .section-home-bo{
\t    \tmargin-top: calc(0% - 13rem) !important;
\t\t    z-index: 99 !important;
\t\t    position: relative !important;
\t\t    margin-bottom: 60px !important;
\t    }
\t    .descr-block{
    \t    border-left: solid 1px #DADADA !important;
\t\t    height: 80px !important;
\t\t    text-align: left !important;
\t\t    padding-left: 20px !important;
\t    }
\t    .sec-descr{
    \t    text-align: left !important;
\t\t    /* padding-left: 2px !important; */
\t\t    font-size: 14px;
\t\t    font-style: italic;
\t\t    font-weight: 600;
\t    }
\t    #search-btn:focus{
\t    \toutline: 0 !important;
\t    }

\t\t.share-buttons {
\t\t  \tposition: absolute;
\t\t    width: auto;
\t\t    height: 212px;
\t\t    padding-left: 175px;
\t\t    right: 0;
\t\t    top: 25vh;
\t\t    z-index: 99;
\t\t    margin-right: 20px;
\t\t}
\t\t.share-buttons .share-button {
\t\t  \tmargin-top: 15px;
\t\t}
\t\t.share-buttons .share-button:first-child {
\t\t  \tmargin-top: 0;
\t\t}
\t\t.share-buttons .share-button:after {
\t\t\tclear: both;
\t\t\tdisplay: table;
\t\t}

\t\t.share-button {
\t\t  display: block;
\t\t  position: relative;
\t\t  height: 50px;
\t\t}
\t\t.share-button:hover {
\t\t  cursor: pointer;
\t\t}
\t\t.share-button:hover .share-button-primary {
\t\t  box-shadow: 1px 0 0 0 rgba(0, 0, 0, 0.1);
\t\t}
\t\t.share-button:hover .share-button-secondary-content {
\t\t  -webkit-transform: translate3d(0, 0, 0);
\t\t          transform: translate3d(0, 0, 0);
\t\t}

\t\t.share-button-primary {
\t\t  position: absolute;
\t\t  background: #fff;
\t\t  width: 50px;
\t\t  height: 50px;
\t\t  border-radius: 25px;
\t\t  right: 0;
\t\t  top: 50%;
\t\t  margin-top: -25px;
\t\t  text-align: center;
\t\t}

\t\t.share-button-icon {
\t\t  display: block;
\t\t  color: #fff;
\t\t  position: absolute;
\t\t  width: 50px;
\t\t  line-height: 50px;
\t\t  font-size: 25px;
\t\t  margin-top: 1px;
\t\t}

\t\t.share-button-secondary {
\t\t  overflow: hidden;
\t\t  margin-left: 25px;
\t\t  height: 50px;
\t\t}

\t\t.share-button-secondary-content {
\t\t  font-family: sans-serif;
\t\t  font-size: 1em;
\t\t  display: block;
\t\t  height: 50px;
\t\t  text-align: left;
\t\t  padding-left: 20px;
\t\t  padding-right: 50px;
\t\t  line-height: 50px;
\t\t  color: #fff;
\t\t  font-weight: 600;
\t\t  border-radius: 25px 25px 25px 25px;
\t\t  -webkit-transform: translate3d(100%, 0, 0);
\t\t          transform: translate3d(100%, 0, 0);
\t\t  transition: -webkit-transform 175ms ease;
\t\t  transition: transform 175ms ease;
\t\t  transition: transform 175ms ease, -webkit-transform 175ms ease;
\t\t}
\t\t.first{
\t\t    background: #50C998 !important;
\t\t}
\t\t.second{
\t\t\tbackground: #F1525F !important;
\t\t}
\t\t.third{
\t\t\tbackground: #f7c453 !important;
\t\t}

\t\t.forth{
\t\t\tbackground: #be4bdb !important;
\t\t}
\t\t.first-share{
\t\t\tbackground: #50C998 !important;
\t\t}
\t\t.second-share{
\t\t\tbackground: #F1525F !important;
\t\t}
\t\t.third-share{
\t\t\tbackground: #f7c453 !important;
\t\t}
\t\t.forth-share{
\t\t\tbackground: #be4bdb !important;
\t\t}
\t\t.owl-dots{
\t\t\tdisplay: none;
\t\t}
\t\t.entry-header{
\t\t\tmin-height: 160px;
\t\t}
\t\t";
        // line 228
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 229
            echo "\t\t\t@media screen and (min-width: 1023px) {
\t\t\t\t.res-first{
\t\t\t\t\tpadding-left: 0;
\t\t\t\t}
\t\t\t}
\t\t";
        }
        // line 235
        echo "\t\t@media (max-width: 1023px) {
\t\t  .row.reorder-xs {
\t\t    -webkit-transform: rotate(180deg);
\t\t    -moz-transform: rotate(180deg);
\t\t    -ms-transform: rotate(180deg);
\t\t    -o-transform: rotate(180deg);
\t\t    transform: rotate(180deg);
\t\t    direction: rtl;
\t\t  }
\t\t 
\t\t  .row.reorder-xs > [class*=\"col-\"] {
\t\t    -webkit-transform: rotate(-180deg);
\t\t    -moz-transform: rotate(-180deg);
\t\t    -ms-transform: rotate(-180deg);
\t\t    -o-transform: rotate(-180deg);
\t\t    transform: rotate(-180deg);
\t\t    direction: ltr;
\t\t  }
\t\t}
\t\t@media only screen and (max-width: 768px){
\t\t\t.share-button {
\t\t\t  height: 40px;
\t\t\t  top: 22%;
\t\t\t}

\t\t\t.share-button-primary {
\t\t\t  width: 40px;
\t\t\t  height: 40px;
\t\t\t}

\t\t\t.share-button-icon {
\t\t\t  width: 40px;
\t\t\t  line-height: 40px;
\t\t\t}

\t\t\t.share-button-secondary {
\t\t\t  height: 40px;
\t\t\t}

\t\t\t.share-button-secondary-content {
\t\t\t  height: 40px;
\t\t\t}
\t\t}

\t\t@media only screen and (max-width: 992px){
\t\t\t.rel-slid, #first-ca{
\t\t    \theight: 80vh;
\t\t    }
\t\t    .owl-stage-outer{
\t\t    \theight: inherit;
\t\t    }
\t\t    .section-home-bo {
\t\t\t    margin-top: calc(0% - 6rem) !important;
\t\t\t}
\t\t\t.descr-block{
\t\t\t\tborder: none !important;
\t\t\t    padding: 0 !important;
\t\t\t    height: auto !important;
\t\t\t}
\t\t\t.title-carousel {
\t\t\t    padding: 0px 20px 0px 20px;
\t\t\t    margin-top: -60px;
\t\t\t}
\t\t\t.blockq-img{
\t\t\t\tmargin: 4rem 0 4rem;
\t\t\t}
\t\t\t
\t\t}
\t";
        // line 303
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 304
            echo "\t\tblockquote:before{
\t\t\tleft: auto !important;
\t\t\tright: 0px !important;
\t\t}
\t\t.section-home-bo{
\t\t\tdirection: rtl;
\t\t}
\t\t.descr-block{
\t\t\tborder-right: solid 1px #DADADA !important;
\t\t\tborder-left: none !important;
\t\t}
\t\t.descr-block{
\t\t\ttext-align: right !important;
\t\t\tpadding-right: 20px !important;
\t\t    height: 50px !important;
\t\t}
\t\t.sec-descr{
\t\t\ttext-align: right !important;
\t\t\tpadding-right: 20px !important;
\t\t}
\t\t.second-quote{
\t\t\tmargin-left: 40px !important;
\t\t}
\t\t.entry-header{
\t\t\tmin-height: auto;
\t\t}
\t\t.xs-content-section-padding{
\t\t\tdirection: rtl;
\t\t}
\t\t@media (max-width: 480px) {
\t\t\t.descr-block{
\t\t\t\theight: auto !important;
\t\t\t}
\t\t\t.second-quote{
\t\t\t\tmargin-left: 20px !important;
\t\t\t}
\t\t}
\t";
        }
        // line 342
        echo "\t</style>
\t";
        // line 344
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/featureBoxCss.css"), "html", null, true);
        echo "\">
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 347
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

    // line 348
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 349
        echo "\t</div>
\t";
        // line 350
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 351
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:header.html.twig", "TWCOndeBundle:Default:index.html.twig", 351)->display($context);
            echo " 

\t
\t\t\t<section class=\"xs-welcome-slider rel-slid\">
\t\t\t\t
\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t\t  \t<a href=\"http://2511.ma/\" title=\"\" target=\"_blank\">
\t\t\t\t\t\t    <div class=\"share-button-secondary\">
\t\t\t\t\t\t      <div class=\"share-button-secondary-content first-share\">
\t\t\t\t\t\t        ";
            // line 362
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.numeroVert2511"), "html", null, true);
            echo "
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"share-button-primary first\">
\t\t\t\t\t\t      <i class=\"share-button-icon fa fa-phone\"></i>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t \t\t<a href=\"http://rabatprotection.ma/\" target=\"_blank\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content forth-share\">
\t\t\t\t\t        ";
            // line 375
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.enfantsSituationRue"), "html", null, true);
            echo "
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary forth\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-street-view\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t  \t<div class=\"share-button\">
\t\t\t\t  \t\t<a href=\"";
            // line 385
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "en")) ? ("http://www.youtube.com/watch?v=yBYHW-xa9oo") : ("http://www.youtube.com/watch?v=3qTLTuq7vJo"));
            echo "\" data-lightbox=\"iframe\" data-lightbox-type=\"video\" class=\"\" style=\"\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content second-share\">
\t\t\t\t\t        ";
            // line 388
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.parlementdeEnfant"), "html", null, true);
            echo "
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary second\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-child\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t \t<div class=\"share-button\" onclick=\"window.location.href = '";
            // line 397
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_enfants_homepage");
            echo "';\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content third\">
\t\t\t\t\t        ";
            // line 400
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.kidsZone"), "html", null, true);
            echo "
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary third\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-smile-o\"></i>
\t\t\t\t\t    </div>
\t\t\t\t \t</div>
\t\t\t\t  
\t\t\t\t</div>

\t\t\t\t<div class=\"owl-carousel\" id=\"first-ca\">
\t\t\t\t\t";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 412
                echo "\t\t\t\t\t\t<div class=\"xs-welcome-content\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["article"], "image", [])) > 0)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(twig_first($this->env, $this->getAttribute($context["article"], "image", [])), "Objectkey", []))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/noimage.png"))), "html", null, true);
                echo ");\">
\t\t\t\t\t\t\t<div class=\"xs-welcome-wraper color-white\" style=\"width:75%;margin:auto\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 414
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
                echo "\" class=\"tit-caroussel\">
\t\t\t\t\t\t\t\t\t";
                // line 415
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
                    // line 416
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", []), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 418
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
                    // line 419
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titreEn", []), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 421
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 426
            echo "\t\t\t\t</div>
\t\t\t</section>
\t\t\t<div class=\"section section-home-bo\">
\t\t\t\t<div class=\"col-md-8 col-sm-8 bottom-con\">
\t\t\t\t\t<div class=\"row reorder-xs\">
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-12 col-sm-push-12\">
\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t";
            // line 435
            echo "\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img\">
\t\t\t\t\t\t\t\t\t\t<p class=\"descr-block\"><bdi>";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.extraitDiscoursLalaMaryam.body"), "html", null, true);
            echo "</bdi></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"sec-descr\">\"";
            // line 437
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.extraitDiscoursLalaMaryam.signature"), "html", null, true);
            echo "\"</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img second-quote\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t\t\t\t";
            // line 444
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-lg-4 col-sm-12 res-first col-sm-pull-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div style=\"background-image: url(";
            // line 452
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/lallameryem1-1.png"), "html", null, true);
            echo ");height: 248px;background-size: cover;background-repeat: no-repeat;background-position: center;margin-top: 15px;margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t<!-- End journal section -->
\t";
        }
        // line 467
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 468
            echo "\t\t";
            $this->loadTemplate("TWCOndeBundle:Default:headerAr.html.twig", "TWCOndeBundle:Default:index.html.twig", 468)->display($context);
            echo " 

\t\t\t<section class=\"xs-welcome-slider rel-slid\">
\t\t\t\t";
            // line 510
            echo "
\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t\t  \t<a href=\"http://2511.ma/\" title=\"\" target=\"_blank\">
\t\t\t\t\t\t    <div class=\"share-button-secondary\">
\t\t\t\t\t\t      <div class=\"share-button-secondary-content first-share\">
\t\t\t\t\t\t        ";
            // line 517
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.numeroVert2511"), "html", null, true);
            echo "
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"share-button-primary first\">
\t\t\t\t\t\t      <i class=\"share-button-icon fa fa-phone\"></i>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t \t\t<a href=\"http://rabatprotection.ma/\" title=\"\" target=\"_blank\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content forth-share\">
\t\t\t\t\t        ";
            // line 530
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.enfantsSituationRue"), "html", null, true);
            echo "
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary forth\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-street-view\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t  \t<div class=\"share-button\">
\t\t\t\t  \t\t<a href=\"";
            // line 540
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "en")) ? ("http://www.youtube.com/watch?v=yBYHW-xa9oo") : ("http://www.youtube.com/watch?v=3qTLTuq7vJo"));
            echo "\" data-lightbox=\"iframe\" data-lightbox-type=\"video\" class=\"\" style=\"\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content second-share\">
\t\t\t\t\t        ";
            // line 543
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.parlementdeEnfant"), "html", null, true);
            echo "
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary second\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-child\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t \t<div class=\"share-button\" onclick=\"window.location.href = '";
            // line 552
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_enfants_homepage");
            echo "';\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content third\">
\t\t\t\t\t        ";
            // line 555
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.shareButtons.kidsZone"), "html", null, true);
            echo "
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary third\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-smile-o\"></i>
\t\t\t\t\t    </div>
\t\t\t\t \t</div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel\" id=\"first-ca\">
\t\t\t\t\t";
            // line 565
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 566
                echo "\t\t\t\t\t\t<div class=\"xs-welcome-content\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["article"], "image", [])) > 0)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(twig_first($this->env, $this->getAttribute($context["article"], "image", [])), "Objectkey", []))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/noimage.png"))), "html", null, true);
                echo ");\">
\t\t\t\t\t\t\t<div class=\"xs-welcome-wraper color-white\" style=\"width:75%;margin:auto\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 568
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
                echo "\" class=\"tit-caroussel\">
\t\t\t\t\t\t\t\t\t";
                // line 569
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "fr")) {
                    // line 570
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", []), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 572
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "en")) {
                    // line 573
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titreEn", []), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 575
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
                    // line 576
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titreAr", []), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 578
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 583
            echo "\t\t\t\t</div>
\t\t\t</section>
\t\t\t<div class=\"section section-home-bo\">
\t\t\t\t<div class=\"col-md-8 col-sm-8 bottom-con\">
\t\t\t\t\t<div class=\"row reorder-xs\">
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-12 col-sm-push-12\">
\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t";
            // line 592
            echo "\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img\">
\t\t\t\t\t\t\t\t\t\t<p class=\"descr-block\">
\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 595
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.extraitDiscoursLalaMaryam.body"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</bdi>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"sec-descr\">\"";
            // line 598
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.extraitDiscoursLalaMaryam.signature"), "html", null, true);
            echo "\"</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img second-quote\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t\t\t\t";
            // line 605
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-lg-4 col-sm-12 res-first col-sm-pull-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div style=\"background-image: url(";
            // line 613
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/lallameryem1-1.png"), "html", null, true);
            echo ");height: 248px;background-size: cover;background-repeat: no-repeat;background-position: center;margin-top: 15px;margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t";
        }
        // line 625
        echo "
\t<div class=\"container-fluid my-5 clearfix\">
\t\t\t\t<div class=\"d-flex flex-column align-items-center justify-content-center center counter-section position-relative py-5\" style=\"background: url(";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/world-map.png"), "html", null, true);
        echo ") no-repeat center center/ contain\">

\t\t\t\t\t<div class=\"row align-items-stretch m-0 w-100 clearfix\">

\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-4 center mt-5\">
\t\t\t\t\t\t\t<a href=\"http://2511.ma/\" title=\"\" class=\"link-sec\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/phone.png"), "html", null, true);
        echo "\" alt=\"Counter Icon\" width=\"90\" class=\"mb-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 class=\"xs-title\">2511</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-4 center mt-5 bord-sect\">
\t\t\t\t\t\t\t<a href=\"";
        // line 640
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cnde");
        echo "\" title=\"\" class=\"link-sec\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/ci2.png"), "html", null, true);
        echo "\" alt=\"Counter Icon\" width=\"160\" class=\"mb-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 class=\"xs-title\">";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.congres"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-4 center mt-5\">
\t\t\t\t\t\t\t<a href=\"";
        // line 648
        echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "en")) ? ("http://www.youtube.com/watch?v=yBYHW-xa9oo") : ("http://www.youtube.com/watch?v=3qTLTuq7vJo"));
        echo "\"  data-lightbox=\"iframe\" class=\"link-sec\" style=\"\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/ci1.png"), "html", null, true);
        echo "\" alt=\"Counter Icon\" width=\"160\" class=\"mb-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 class=\"xs-title\">";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.parlementEnfant"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t</div>
\t<section class=\"xs-content-section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row xs-mb-50\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/5.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 664
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t";
        // line 665
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 666
            echo "\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=kSRZd3zsmlc\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t";
        }
        // line 668
        echo "\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 669
            echo "\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=8L5SnWX2TrU\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t";
        }
        // line 671
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.enfantsTousEgaux"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 685
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/2.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 687
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t";
        // line 688
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) != "ar")) {
            // line 689
            echo "\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=uaWydqooLt0\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t";
        }
        // line 691
        echo "\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 692
            echo "\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=os3r6Ev5a_I\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t";
        }
        // line 694
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.ONDEenBref"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/4.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 710
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=Bh23eZMxyd4\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.ceremonieOfficielleCNDE"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 726
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/3.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 728
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=31s4wCM5eJI\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.la16èmeEditionCNDE"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/1.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 746
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=xp_55e9Kt2E\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.enfantsEtoilesBrillantes"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/7.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 764
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=QUvwE4vnnMw\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.lacherBallonsCIDE"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 780
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/6.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 782
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=Xllc2Z-VbTg\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 790
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.lesEnfantsParlementairesAction"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 799
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/8.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 801
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=DT8cgckYvMg\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 809
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.jeNeSuisPasInvisible"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url(";
        // line 818
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/9.png"), "html", null, true);
        echo ");height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t";
        // line 820
        echo "\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://player.vimeo.com/video/401633726?byline=0&portrait=0\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t";
        // line 828
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.videosBasPage.regardezMoi"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>

\t\t\t</div><!-- .row end -->
\t\t</div>
\t</section>
\t";
        // line 838
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCOndeBundle:Default:footer"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 840
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 841
        echo "\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/embed-js/5.0.3/embed.js\"></script>
\t<script src=\"";
        // line 842
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 843
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/plugins.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/jquery.calendario.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/events.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/index/functions.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">
 \t\t\towl = \$(\"#first-ca\");
\t\t\towl.owlCarousel({
\t\t\t    // autoplaySpeed:1000,
\t\t\t    // items:1,
\t\t\t    // autoplay:true
\t\t\t    items:1,
\t\t\t    loop:true,
\t\t\t    autoplay:true,
\t\t\t    autoplayTimeout:3000,
\t\t\t    autoplayHoverPause:true,
\t\t\t    nav    : true,
\t     \t\tnavText : [\"<img src='";
        // line 859
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/fa-chevron-left.png"), "html", null, true);
        echo "' alt='' class='chevron-carousel'>\",\"<img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/fa-chevron-right.png"), "html", null, true);
        echo "' alt='' class='chevron-carousel'>\"]
\t\t\t});
\t\t</script>
\t<script type=\"text/javascript\">
\t \t\$(\".blue-header\").css('display','none');
\t</script>
\t<script>
        \$('.articles-details').on('click',function(e){
            var id = \$(this).attr(\"data-id\");
            path = '";
        // line 868
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => "1"]);
        echo "';
            path = path.replace('1',id);
            \$.ajax({
                type: 'POST',
                url: path,
                data : {'id' : id},
                success: function(data) {
                   \tvar path = '";
        // line 875
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_details", ["id" => 1]);
        echo "';

                   \twindow.location.href = path.replace(\"1\", id);

                },
                error: function(data) {
                },
            });
        });      
    </script>
    <script>
        \$('.event-details').on('click',function(e){
            var id = \$(this).attr(\"data-id\");
            path = '";
        // line 888
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_detailsPress", ["id" => "1"]);
        echo "';
            path = path.replace('1',id);
            \$.ajax({
                type: 'POST',
                url: path,
                data : {'id' : id},
                success: function(data) {
                   \tvar path = '";
        // line 895
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
        return "TWCOndeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1256 => 895,  1246 => 888,  1230 => 875,  1220 => 868,  1206 => 859,  1190 => 846,  1186 => 845,  1182 => 844,  1178 => 843,  1174 => 842,  1171 => 841,  1162 => 840,  1150 => 838,  1137 => 828,  1127 => 820,  1123 => 818,  1111 => 809,  1101 => 801,  1097 => 799,  1085 => 790,  1075 => 782,  1071 => 780,  1060 => 772,  1050 => 764,  1046 => 762,  1035 => 754,  1025 => 746,  1021 => 744,  1010 => 736,  1000 => 728,  996 => 726,  985 => 718,  975 => 710,  971 => 708,  960 => 700,  952 => 694,  948 => 692,  945 => 691,  941 => 689,  939 => 688,  936 => 687,  932 => 685,  921 => 677,  913 => 671,  909 => 669,  906 => 668,  902 => 666,  900 => 665,  897 => 664,  893 => 662,  879 => 651,  874 => 649,  870 => 648,  862 => 643,  857 => 641,  853 => 640,  843 => 633,  834 => 627,  830 => 625,  815 => 613,  805 => 605,  797 => 598,  791 => 595,  786 => 592,  776 => 583,  766 => 578,  760 => 576,  757 => 575,  751 => 573,  748 => 572,  742 => 570,  740 => 569,  736 => 568,  730 => 566,  726 => 565,  713 => 555,  707 => 552,  695 => 543,  689 => 540,  676 => 530,  660 => 517,  651 => 510,  644 => 468,  641 => 467,  623 => 452,  613 => 444,  605 => 437,  601 => 436,  598 => 435,  588 => 426,  578 => 421,  572 => 419,  569 => 418,  563 => 416,  561 => 415,  557 => 414,  551 => 412,  547 => 411,  533 => 400,  527 => 397,  515 => 388,  509 => 385,  496 => 375,  480 => 362,  465 => 351,  463 => 350,  460 => 349,  451 => 348,  432 => 347,  418 => 344,  415 => 342,  375 => 304,  373 => 303,  303 => 235,  295 => 229,  293 => 228,  70 => 8,  66 => 7,  61 => 6,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
{% block Style %}
\t{{parent()}}
\t<link rel=\"stylesheet\" href=\"{{asset('assets/index/bootstrap.css')}}\">
\t{# <link rel=\"stylesheet\" href=\"{{asset('assets/index/style.css')}}\"> #}
\t<link rel=\"stylesheet\" href=\"{{asset('assets/index/carouselIndex.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/index/magnific-popup.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('assets/index/nonprofit.css')}}\">

\t
\t<style>
\t\t.tit-caroussel{
\t\t\tcolor: #fff !important;
\t\t}
\t\t.tit-caroussel:hover{
\t\t\tcolor: #fff !important;
\t\t}
\t\t.title-carousel{
\t\t\tpadding: 35px 80px 0px 80px; font-size: 2.28571em !important;    margin-top: -30px;
\t\t}
\t\t.entry-title {
\t\t    display: -webkit-box;
\t\t    -webkit-line-clamp: 3;
\t\t    -webkit-box-orient: vertical;
\t\t    overflow: hidden;
\t\t    text-overflow: ellipsis;
\t\t    color: #1e1e1e !important;
\t\t}
\t\t.owl-next:focus{
\t\t\toutline: none !important
\t\t}
\t\t.owl-prev:focus{
\t\t\toutline: none !important
\t\t}
\t\t.owl-prev,
\t\t.owl-next {
\t\t  position: absolute;
\t\t  top: 48%;
\t\t  transform: translateY(-50%);
\t\t}

\t\t.owl-prev {
\t\t  left: 2rem;
\t\t}

\t\t.owl-next {
\t\t  right: 2rem;
\t\t}
\t\t.owl-nav > button {
\t\t\tbackground: transparent !important;
\t\t}
\t\t
\t\ta:hover{
\t\t\ttext-decoration: none !important;
\t\t}
\t\t.link-sec > h2{
\t\t\tcolor: #1e1e1e;
    \t\tfont-weight: 600;
\t\t}
\t\t.bord-sect{
\t\t\tborder-left: solid 2px #555;
\t\t    height: 240px;
\t\t    border-right: solid 2px #555;
\t\t}
\t\t.xs-welcome-content{
\t\t\tmin-height: 100vh !important;
\t\t}
\t    .xs-event-image{
\t    \tcursor: pointer !important;
\t    }
\t    .box-color{
\t    \theight: 235px !important;
\t    }
\t    .rel-slid{
\t    \tposition: relative !important;
\t    }
\t    .fixed-con{
\t    \tposition: absolute !important;
\t\t    top: 50% !important;
\t\t    left: 50% !important;
\t\t    transform: translate(-50%, -50%) !important;
\t\t    z-index: 99 !important;
\t    }
\t    .bottom-con{
\t    \tbackground-color: #fff !important;
\t    \tmargin-left: auto;
\t    \tmargin-right: auto;
\t    \t-webkit-box-shadow: 0px 0px 14px 8px rgba(0, 0, 0, 0.2);
    \t    box-shadow: 0px 0px 14px 8px rgba(0, 0, 0, 0.2);
\t    }
\t    .section-home-bo{
\t    \tmargin-top: calc(0% - 13rem) !important;
\t\t    z-index: 99 !important;
\t\t    position: relative !important;
\t\t    margin-bottom: 60px !important;
\t    }
\t    .descr-block{
    \t    border-left: solid 1px #DADADA !important;
\t\t    height: 80px !important;
\t\t    text-align: left !important;
\t\t    padding-left: 20px !important;
\t    }
\t    .sec-descr{
    \t    text-align: left !important;
\t\t    /* padding-left: 2px !important; */
\t\t    font-size: 14px;
\t\t    font-style: italic;
\t\t    font-weight: 600;
\t    }
\t    #search-btn:focus{
\t    \toutline: 0 !important;
\t    }

\t\t.share-buttons {
\t\t  \tposition: absolute;
\t\t    width: auto;
\t\t    height: 212px;
\t\t    padding-left: 175px;
\t\t    right: 0;
\t\t    top: 25vh;
\t\t    z-index: 99;
\t\t    margin-right: 20px;
\t\t}
\t\t.share-buttons .share-button {
\t\t  \tmargin-top: 15px;
\t\t}
\t\t.share-buttons .share-button:first-child {
\t\t  \tmargin-top: 0;
\t\t}
\t\t.share-buttons .share-button:after {
\t\t\tclear: both;
\t\t\tdisplay: table;
\t\t}

\t\t.share-button {
\t\t  display: block;
\t\t  position: relative;
\t\t  height: 50px;
\t\t}
\t\t.share-button:hover {
\t\t  cursor: pointer;
\t\t}
\t\t.share-button:hover .share-button-primary {
\t\t  box-shadow: 1px 0 0 0 rgba(0, 0, 0, 0.1);
\t\t}
\t\t.share-button:hover .share-button-secondary-content {
\t\t  -webkit-transform: translate3d(0, 0, 0);
\t\t          transform: translate3d(0, 0, 0);
\t\t}

\t\t.share-button-primary {
\t\t  position: absolute;
\t\t  background: #fff;
\t\t  width: 50px;
\t\t  height: 50px;
\t\t  border-radius: 25px;
\t\t  right: 0;
\t\t  top: 50%;
\t\t  margin-top: -25px;
\t\t  text-align: center;
\t\t}

\t\t.share-button-icon {
\t\t  display: block;
\t\t  color: #fff;
\t\t  position: absolute;
\t\t  width: 50px;
\t\t  line-height: 50px;
\t\t  font-size: 25px;
\t\t  margin-top: 1px;
\t\t}

\t\t.share-button-secondary {
\t\t  overflow: hidden;
\t\t  margin-left: 25px;
\t\t  height: 50px;
\t\t}

\t\t.share-button-secondary-content {
\t\t  font-family: sans-serif;
\t\t  font-size: 1em;
\t\t  display: block;
\t\t  height: 50px;
\t\t  text-align: left;
\t\t  padding-left: 20px;
\t\t  padding-right: 50px;
\t\t  line-height: 50px;
\t\t  color: #fff;
\t\t  font-weight: 600;
\t\t  border-radius: 25px 25px 25px 25px;
\t\t  -webkit-transform: translate3d(100%, 0, 0);
\t\t          transform: translate3d(100%, 0, 0);
\t\t  transition: -webkit-transform 175ms ease;
\t\t  transition: transform 175ms ease;
\t\t  transition: transform 175ms ease, -webkit-transform 175ms ease;
\t\t}
\t\t.first{
\t\t    background: #50C998 !important;
\t\t}
\t\t.second{
\t\t\tbackground: #F1525F !important;
\t\t}
\t\t.third{
\t\t\tbackground: #f7c453 !important;
\t\t}

\t\t.forth{
\t\t\tbackground: #be4bdb !important;
\t\t}
\t\t.first-share{
\t\t\tbackground: #50C998 !important;
\t\t}
\t\t.second-share{
\t\t\tbackground: #F1525F !important;
\t\t}
\t\t.third-share{
\t\t\tbackground: #f7c453 !important;
\t\t}
\t\t.forth-share{
\t\t\tbackground: #be4bdb !important;
\t\t}
\t\t.owl-dots{
\t\t\tdisplay: none;
\t\t}
\t\t.entry-header{
\t\t\tmin-height: 160px;
\t\t}
\t\t{% if app.request.locale != \"ar\" %}
\t\t\t@media screen and (min-width: 1023px) {
\t\t\t\t.res-first{
\t\t\t\t\tpadding-left: 0;
\t\t\t\t}
\t\t\t}
\t\t{% endif %}
\t\t@media (max-width: 1023px) {
\t\t  .row.reorder-xs {
\t\t    -webkit-transform: rotate(180deg);
\t\t    -moz-transform: rotate(180deg);
\t\t    -ms-transform: rotate(180deg);
\t\t    -o-transform: rotate(180deg);
\t\t    transform: rotate(180deg);
\t\t    direction: rtl;
\t\t  }
\t\t 
\t\t  .row.reorder-xs > [class*=\"col-\"] {
\t\t    -webkit-transform: rotate(-180deg);
\t\t    -moz-transform: rotate(-180deg);
\t\t    -ms-transform: rotate(-180deg);
\t\t    -o-transform: rotate(-180deg);
\t\t    transform: rotate(-180deg);
\t\t    direction: ltr;
\t\t  }
\t\t}
\t\t@media only screen and (max-width: 768px){
\t\t\t.share-button {
\t\t\t  height: 40px;
\t\t\t  top: 22%;
\t\t\t}

\t\t\t.share-button-primary {
\t\t\t  width: 40px;
\t\t\t  height: 40px;
\t\t\t}

\t\t\t.share-button-icon {
\t\t\t  width: 40px;
\t\t\t  line-height: 40px;
\t\t\t}

\t\t\t.share-button-secondary {
\t\t\t  height: 40px;
\t\t\t}

\t\t\t.share-button-secondary-content {
\t\t\t  height: 40px;
\t\t\t}
\t\t}

\t\t@media only screen and (max-width: 992px){
\t\t\t.rel-slid, #first-ca{
\t\t    \theight: 80vh;
\t\t    }
\t\t    .owl-stage-outer{
\t\t    \theight: inherit;
\t\t    }
\t\t    .section-home-bo {
\t\t\t    margin-top: calc(0% - 6rem) !important;
\t\t\t}
\t\t\t.descr-block{
\t\t\t\tborder: none !important;
\t\t\t    padding: 0 !important;
\t\t\t    height: auto !important;
\t\t\t}
\t\t\t.title-carousel {
\t\t\t    padding: 0px 20px 0px 20px;
\t\t\t    margin-top: -60px;
\t\t\t}
\t\t\t.blockq-img{
\t\t\t\tmargin: 4rem 0 4rem;
\t\t\t}
\t\t\t
\t\t}
\t{% if app.request.locale == \"ar\" %}
\t\tblockquote:before{
\t\t\tleft: auto !important;
\t\t\tright: 0px !important;
\t\t}
\t\t.section-home-bo{
\t\t\tdirection: rtl;
\t\t}
\t\t.descr-block{
\t\t\tborder-right: solid 1px #DADADA !important;
\t\t\tborder-left: none !important;
\t\t}
\t\t.descr-block{
\t\t\ttext-align: right !important;
\t\t\tpadding-right: 20px !important;
\t\t    height: 50px !important;
\t\t}
\t\t.sec-descr{
\t\t\ttext-align: right !important;
\t\t\tpadding-right: 20px !important;
\t\t}
\t\t.second-quote{
\t\t\tmargin-left: 40px !important;
\t\t}
\t\t.entry-header{
\t\t\tmin-height: auto;
\t\t}
\t\t.xs-content-section-padding{
\t\t\tdirection: rtl;
\t\t}
\t\t@media (max-width: 480px) {
\t\t\t.descr-block{
\t\t\t\theight: auto !important;
\t\t\t}
\t\t\t.second-quote{
\t\t\t\tmargin-left: 20px !important;
\t\t\t}
\t\t}
\t{% endif %}
\t</style>
\t{# <link rel=\"stylesheet\" href=\"{{asset('front/css/lightslider.css')}}\"> #}
\t<link rel=\"stylesheet\" href=\"{{asset('front/css/featureBoxCss.css')}}\">
\t
{% endblock %}
{% block Title %}Homepage {{parent()}}{% endblock %}
{% block body %}
\t</div>
\t{% if app.request.locale != \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:header.html.twig\" %} 

\t
\t\t\t<section class=\"xs-welcome-slider rel-slid\">
\t\t\t\t
\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t\t  \t<a href=\"http://2511.ma/\" title=\"\" target=\"_blank\">
\t\t\t\t\t\t    <div class=\"share-button-secondary\">
\t\t\t\t\t\t      <div class=\"share-button-secondary-content first-share\">
\t\t\t\t\t\t        {{\"homepage.shareButtons.numeroVert2511\"|trans}}
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"share-button-primary first\">
\t\t\t\t\t\t      <i class=\"share-button-icon fa fa-phone\"></i>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t \t\t<a href=\"http://rabatprotection.ma/\" target=\"_blank\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content forth-share\">
\t\t\t\t\t        {{\"homepage.shareButtons.enfantsSituationRue\"|trans}}
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary forth\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-street-view\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t  \t<div class=\"share-button\">
\t\t\t\t  \t\t<a href=\"{{ app.request.locale != \"en\" ? 'http://www.youtube.com/watch?v=yBYHW-xa9oo': 'http://www.youtube.com/watch?v=3qTLTuq7vJo'}}\" data-lightbox=\"iframe\" data-lightbox-type=\"video\" class=\"\" style=\"\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content second-share\">
\t\t\t\t\t        {{\"homepage.shareButtons.parlementdeEnfant\"|trans}}
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary second\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-child\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t \t<div class=\"share-button\" onclick=\"window.location.href = '{{path('twc_enfants_homepage')}}';\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content third\">
\t\t\t\t\t        {{\"homepage.shareButtons.kidsZone\"|trans}}
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary third\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-smile-o\"></i>
\t\t\t\t\t    </div>
\t\t\t\t \t</div>
\t\t\t\t  
\t\t\t\t</div>

\t\t\t\t<div class=\"owl-carousel\" id=\"first-ca\">
\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t<div class=\"xs-welcome-content\" style=\"background-image: url({{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }});\">
\t\t\t\t\t\t\t<div class=\"xs-welcome-wraper color-white\" style=\"width:75%;margin:auto\">
\t\t\t\t\t\t\t\t<a href=\"{{ path(\"index_details\", {id: article.id}) }}\" class=\"tit-caroussel\">
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">{{article.titre}}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">{{article.titreEn}}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<div class=\"section section-home-bo\">
\t\t\t\t<div class=\"col-md-8 col-sm-8 bottom-con\">
\t\t\t\t\t<div class=\"row reorder-xs\">
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-12 col-sm-push-12\">
\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t{# <img src=\"{{asset('assets/images/lallameryem1-1.jpg')}}\" alt=\"\" class=\"image--cover\" /></center> #}
\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img\">
\t\t\t\t\t\t\t\t\t\t<p class=\"descr-block\"><bdi>{{\"homepage.extraitDiscoursLalaMaryam.body\"|trans}}</bdi></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"sec-descr\">\"{{\"homepage.extraitDiscoursLalaMaryam.signature\"|trans}}\"</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img second-quote\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t\t\t\t{# <p class=\"des-round-photo text-right\" style=\"margin-right: 36px;\">S.A.R la Princesse Lalla Meryem</p>
\t\t\t\t\t\t\t\t\t<p class=\"des-round-photo sec-par-sar\">Mars1999</p> #}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-lg-4 col-sm-12 res-first col-sm-pull-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div style=\"background-image: url({{asset('assets/images/lallameryem1-1.png')}});height: 248px;background-size: cover;background-repeat: no-repeat;background-position: center;margin-top: 15px;margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t<!-- End journal section -->
\t{% endif %}
\t{% if app.request.locale == \"ar\" %}
\t\t{% include \"TWCOndeBundle:Default:headerAr.html.twig\" %} 

\t\t\t<section class=\"xs-welcome-slider rel-slid\">
\t\t\t\t{# <div class=\"share-buttons\">
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t\t    <div class=\"share-button-secondary\">
\t\t\t\t\t      <div class=\"share-button-secondary-content first-share\">
\t\t\t\t\t        2511 الرقم أخضر 
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary first\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-phone\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t</div>



\t\t\t\t  \t<div class=\"share-button\">
\t\t\t\t  \t\t<a href=\"https://player.vimeo.com/video/377751403?byline=0&portrait=0\"  data-lightbox=\"iframe\" class=\"\" style=\"\">
\t\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t\t      <div class=\"share-button-secondary-content second-share\">
\t\t\t\t\t\t        برلمان الطفل
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"share-button-primary second\">
\t\t\t\t\t\t      <i class=\"share-button-icon fa fa-child\"></i>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</a>
\t\t\t\t \t</div>
\t\t\t\t \t
\t\t\t\t \t<div class=\"share-button\" onclick=\"window.location.href = '{{path('twc_parlement_homepage')}}';\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content third\">
\t\t\t\t\t        Kids Zone
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary third\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-smile-o\"></i>
\t\t\t\t\t    </div>
\t\t\t\t \t</div>
\t\t\t\t  
\t\t\t\t</div> #}

\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t\t  \t<a href=\"http://2511.ma/\" title=\"\" target=\"_blank\">
\t\t\t\t\t\t    <div class=\"share-button-secondary\">
\t\t\t\t\t\t      <div class=\"share-button-secondary-content first-share\">
\t\t\t\t\t\t        {{\"homepage.shareButtons.numeroVert2511\"|trans}}
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"share-button-primary first\">
\t\t\t\t\t\t      <i class=\"share-button-icon fa fa-phone\"></i>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"share-button\">
\t\t\t\t \t\t<a href=\"http://rabatprotection.ma/\" title=\"\" target=\"_blank\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content forth-share\">
\t\t\t\t\t        {{\"homepage.shareButtons.enfantsSituationRue\"|trans}}
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary forth\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-street-view\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t  \t<div class=\"share-button\">
\t\t\t\t  \t\t<a href=\"{{ app.request.locale != \"en\" ? 'http://www.youtube.com/watch?v=yBYHW-xa9oo': 'http://www.youtube.com/watch?v=3qTLTuq7vJo'}}\" data-lightbox=\"iframe\" data-lightbox-type=\"video\" class=\"\" style=\"\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content second-share\">
\t\t\t\t\t        {{\"homepage.shareButtons.parlementdeEnfant\"|trans}}
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary second\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-child\"></i>
\t\t\t\t\t    </div>
\t\t\t\t\t    </a>
\t\t\t\t \t</div>

\t\t\t\t \t<div class=\"share-button\" onclick=\"window.location.href = '{{path('twc_enfants_homepage')}}';\">
\t\t\t\t\t    <div class=\"share-button-secondary \">
\t\t\t\t\t      <div class=\"share-button-secondary-content third\">
\t\t\t\t\t        {{\"homepage.shareButtons.kidsZone\"|trans}}
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"share-button-primary third\">
\t\t\t\t\t      <i class=\"share-button-icon fa fa-smile-o\"></i>
\t\t\t\t\t    </div>
\t\t\t\t \t</div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel\" id=\"first-ca\">
\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t<div class=\"xs-welcome-content\" style=\"background-image: url({{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }});\">
\t\t\t\t\t\t\t<div class=\"xs-welcome-wraper color-white\" style=\"width:75%;margin:auto\">
\t\t\t\t\t\t\t\t<a href=\"{{ path(\"index_details\", {id: article.id}) }}\" class=\"tit-caroussel\">
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}
\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">{{article.titre}}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"en\" %}
\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">{{article.titreEn}}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t\t\t<p class=\"title-carousel\">{{article.titreAr}}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"xs-black-overlay\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<div class=\"section section-home-bo\">
\t\t\t\t<div class=\"col-md-8 col-sm-8 bottom-con\">
\t\t\t\t\t<div class=\"row reorder-xs\">
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-12 col-sm-push-12\">
\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t{# <img src=\"{{asset('assets/images/lallameryem1-1.jpg')}}\" alt=\"\" class=\"image--cover\" /></center> #}
\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img\">
\t\t\t\t\t\t\t\t\t\t<p class=\"descr-block\">
\t\t\t\t\t\t\t\t\t\t\t<bdi>
\t\t\t\t\t\t\t\t\t\t\t\t{{\"homepage.extraitDiscoursLalaMaryam.body\"|trans}}
\t\t\t\t\t\t\t\t\t\t\t</bdi>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"sec-descr\">\"{{\"homepage.extraitDiscoursLalaMaryam.signature\"|trans}}\"</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<blockquote class=\"blockq-img second-quote\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t\t\t\t{# <p class=\"des-round-photo text-right\" style=\"margin-right: 36px;\">S.A.R la Princesse Lalla Meryem</p>
\t\t\t\t\t\t\t\t\t<p class=\"des-round-photo sec-par-sar\">Mars1999</p> #}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-lg-4 col-sm-12 res-first col-sm-pull-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div style=\"background-image: url({{asset('assets/images/lallameryem1-1.png')}});height: 248px;background-size: cover;background-repeat: no-repeat;background-position: center;margin-top: 15px;margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t{% endif %}

\t<div class=\"container-fluid my-5 clearfix\">
\t\t\t\t<div class=\"d-flex flex-column align-items-center justify-content-center center counter-section position-relative py-5\" style=\"background: url({{asset('assets/images/world-map.png')}}) no-repeat center center/ contain\">

\t\t\t\t\t<div class=\"row align-items-stretch m-0 w-100 clearfix\">

\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-4 center mt-5\">
\t\t\t\t\t\t\t<a href=\"http://2511.ma/\" title=\"\" class=\"link-sec\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/phone.png')}}\" alt=\"Counter Icon\" width=\"90\" class=\"mb-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 class=\"xs-title\">2511</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-4 center mt-5 bord-sect\">
\t\t\t\t\t\t\t<a href=\"{{path('cnde')}}\" title=\"\" class=\"link-sec\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/ci2.png')}}\" alt=\"Counter Icon\" width=\"160\" class=\"mb-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 class=\"xs-title\">{{\"homepage.congres\"|trans}}</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-4 center mt-5\">
\t\t\t\t\t\t\t<a href=\"{{ app.request.locale != \"en\" ? 'http://www.youtube.com/watch?v=yBYHW-xa9oo': 'http://www.youtube.com/watch?v=3qTLTuq7vJo'}}\"  data-lightbox=\"iframe\" class=\"link-sec\" style=\"\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/ci1.png')}}\" alt=\"Counter Icon\" width=\"160\" class=\"mb-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 class=\"xs-title\">{{\"homepage.parlementEnfant\"|trans}}</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t</div>
\t<section class=\"xs-content-section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row xs-mb-50\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/5.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t{% if app.request.locale != \"ar\" %}
\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=kSRZd3zsmlc\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=8L5SnWX2TrU\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.enfantsTousEgaux\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/2.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t{% if app.request.locale != \"ar\" %}
\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=uaWydqooLt0\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.request.locale == \"ar\" %}
\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=os3r6Ev5a_I\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.ONDEenBref\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/4.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=Bh23eZMxyd4\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.ceremonieOfficielleCNDE\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/3.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=31s4wCM5eJI\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.la16èmeEditionCNDE\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/1.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=xp_55e9Kt2E\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.enfantsEtoilesBrillantes\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/7.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=QUvwE4vnnMw\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.lacherBallonsCIDE\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/6.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=Xllc2Z-VbTg\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.lesEnfantsParlementairesAction\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/8.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=DT8cgckYvMg\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.jeNeSuisPasInvisible\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"xs-box-shadow xs-single-journal xs-mb-30\">
\t\t\t\t\t\t<div class=\"entry-thumbnail\" style=\"background-image: url({{asset('assets/images/9.png')}});height: 220px;background-repeat:no-repeat;background-size: cover;background-position: center;\">
\t\t\t\t\t\t\t{# <img src=\"{{ article.image|length > 0 ? asset(article.image|first.Objectkey) : asset('assets/images/noimage.png') }}\" alt=\"\"> #}
\t\t\t\t\t\t<div class=\"oc-desc d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<a href=\"https://player.vimeo.com/video/401633726?byline=0&portrait=0\" data-lightbox=\"iframe\" class=\" d-flex align-items-center justify-content-center play-video rounded position-relative  mt-3 clearfix\" style=\"\"><i class=\"fa fa-play\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- .xs-item-header END -->
\t\t\t\t\t\t<div class=\"entry-header\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4 class=\"entry-title\">
\t\t\t\t\t\t\t\t{{\"homepage.videosBasPage.regardezMoi\"|trans}}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div><!-- .xs-entry-header END -->
\t\t\t\t\t\t<span class=\"xs-separetor\"></span>
\t\t\t\t\t</div><!-- .xs-from-journal END -->
\t\t\t\t</div>

\t\t\t</div><!-- .row end -->
\t\t</div>
\t</section>
\t{{ render(controller(\"TWCOndeBundle:Default:footer\")) }}
{% endblock %}
{% block custom_js %}
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/embed-js/5.0.3/embed.js\"></script>
\t<script src=\"{{asset('assets/index/jquery.js')}}\"></script>
\t<script src=\"{{asset('assets/index/plugins.js')}}\"></script>
\t<script src=\"{{asset('assets/index/jquery.calendario.js')}}\"></script>
\t<script src=\"{{asset('assets/index/events.js')}}\"></script>
\t<script src=\"{{asset('assets/index/functions.js')}}\"></script>
\t\t<script type=\"text/javascript\">
 \t\t\towl = \$(\"#first-ca\");
\t\t\towl.owlCarousel({
\t\t\t    // autoplaySpeed:1000,
\t\t\t    // items:1,
\t\t\t    // autoplay:true
\t\t\t    items:1,
\t\t\t    loop:true,
\t\t\t    autoplay:true,
\t\t\t    autoplayTimeout:3000,
\t\t\t    autoplayHoverPause:true,
\t\t\t    nav    : true,
\t     \t\tnavText : [\"<img src='{{asset('front/images/fa-chevron-left.png')}}' alt='' class='chevron-carousel'>\",\"<img src='{{asset('front/images/fa-chevron-right.png')}}' alt='' class='chevron-carousel'>\"]
\t\t\t});
\t\t</script>
\t<script type=\"text/javascript\">
\t \t\$(\".blue-header\").css('display','none');
\t</script>
\t<script>
        \$('.articles-details').on('click',function(e){
            var id = \$(this).attr(\"data-id\");
            path = '{{ path('index_details', {id: '1' }) }}';
            path = path.replace('1',id);
            \$.ajax({
                type: 'POST',
                url: path,
                data : {'id' : id},
                success: function(data) {
                   \tvar path = '{{ path(\"index_details\", {id: 1}) }}';

                   \twindow.location.href = path.replace(\"1\", id);

                },
                error: function(data) {
                },
            });
        });      
    </script>
    <script>
        \$('.event-details').on('click',function(e){
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
{% endblock %}", "TWCOndeBundle:Default:index.html.twig", "/var/www/onde/src/TWC/OndeBundle/Resources/views/Default/index.html.twig");
    }
}
