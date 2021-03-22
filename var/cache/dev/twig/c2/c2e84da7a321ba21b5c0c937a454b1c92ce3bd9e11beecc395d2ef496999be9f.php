<?php

/* TWCEnfantsBundle:Default:header.html.twig */
class __TwigTemplate_c177c34b249da578ee4c91390b8ca21260f76f1debc836393adb994783d6de83 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCEnfantsBundle:Default:header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCEnfantsBundle:Default:header.html.twig"));

        // line 245
        echo "
<style type=\"text/css\" media=\"screen\">
\t.navbar-brand {
\t    white-space: nowrap;
\t    display: block;
\t    position: relative;
\t    z-index: 1;
\t    text-align: center;
\t    width: 95px;
\t    min-height: 144px;
\t    max-height: 140px;
\t    line-height: 38px;
\t    text-align: center;
\t    top: -45px;
\t}
\t@media (max-width: 767px) {
        .logo_header{
\t\t    max-width: 65px !important;
\t\t}
\t\t.navbar-brand {
\t\t\ttop: -30px !important;
\t\t    min-height: 80px !important;
    \t\tmax-height: 80px !important;
\t\t}
    }
\t
</style>
<header class=\"header\" id=\"pageTop\" style=\"height: auto;\">
\t<!-- Navbar -->

  \t<nav class=\"navbar navbar-expand-md\" style=\"opacity: 1;box-shadow: none;background-color: #BFE0DC;\">
\t    <div class=\"container\">
\t    \t<a class=\"navbar-brand\" href=\"";
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">
\t          <img class=\"d-inline-block logo_header\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Kidz School\">
\t        </a>
\t        <!-- cart-dropdown -->
\t        <button class=\"navbar-toggler py-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t          \t<i class=\"fa fa-bars\"></i>
\t        </button>

\t        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
\t          \t<ul class=\"navbar-nav ml-lg-auto\" style=\"margin-left: auto!important;margin-right: auto!important;\">
\t          \t\t<a href=\"\" title=\"\" style=\"width: 120px;border-radius: 50%;height: 120px;margin-right: 50px;\">
\t          \t\t\t<div style=\"border-radius: 50%;background: #d2bedd;margin-right: 50px;position: relative;width: 120px;height: 120px;\">
\t\t          \t\t\t<li class=\"nav-item dropdown bg-warning\" style=\"padding:25px 0px 0px 35px;\">
\t\t\t\t              \t<img class=\"d-inline-block\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jeux.png"), "html", null, true);
        echo "\" alt=\"Kidz School\" style=\"max-width: 50px;\">
\t\t\t\t              \t
\t\t\t\t            </li>
\t\t\t\t            <div style=\"position:absolute;bottom: 38px;width: 100%;text-align: center;\">
\t\t\t\t            \t<span style=\"font-weight: 700;color: #605F5F !important\">";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("espaceEnfant.jeuxLudiques"), "html", null, true);
        echo "</span>
\t\t\t\t            </div>
\t\t          \t\t</div>
\t          \t\t</a>
\t          \t\t
\t          \t\t<a href=\"\" title=\"\" style=\"width: 120px;border-radius: 50%;height: 120px;margin-right: 50px;\">
\t          \t\t\t<div style=\"border-radius: 50%;background: #d2bedd;margin-right: 50px;position: relative;width: 120px;height: 120px;\">
\t\t          \t\t\t<li class=\"nav-item dropdown bg-warning\" style=\"padding:8px 0px 0px 38px\">
\t\t\t\t              \t<img class=\"d-inline-block\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/coloriage.png"), "html", null, true);
        echo "\" alt=\"Kidz School\" style=\"max-width: 40px;\">
\t\t\t\t              \t
\t\t\t\t            </li>
\t\t\t\t            <div style=\"position: absolute;bottom: 19px;width: 100%;text-align: center;\">
\t\t\t\t            \t<span style=\"font-weight: 700;color: #605F5F !important\">";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("espaceEnfant.jeuxDivertissement"), "html", null, true);
        echo "</span>
\t\t\t\t            </div>
\t\t          \t\t</div>
\t          \t\t</a>
\t          \t\t<a href=\"\" title=\"\" style=\"width: 120px;border-radius: 50%;height: 120px;margin-right: 50px;\">
\t          \t\t\t<div style=\"border-radius: 50%;background: #d2bedd;margin-right: 50px;position: relative;width: 120px;height: 120px;\">
\t\t          \t\t\t<li class=\"nav-item dropdown bg-warning\" style=\"padding:20px 0px 0px 30px;\">
\t\t\t\t              \t<img class=\"d-inline-block\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bande_dessine.png"), "html", null, true);
        echo "\" alt=\"Kidz School\" style=\"max-width: 45px;\">
\t\t\t\t              \t
\t\t\t\t            </li>
\t\t\t\t            <div style=\"position:absolute;bottom: 16px;width: 100%;text-align: center;\">
\t\t\t\t            \t<span style=\"font-weight: 700;color: #605F5F !important\">";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("espaceEnfant.bandesDessinées"), "html", null, true);
        echo "</span>
\t\t\t\t            </div>
\t\t          \t\t</div>
\t          \t\t</a>
\t          \t\t";
        // line 332
        echo "\t          \t\t
\t\t           
\t          \t</ul>
\t        </div>
      \t</div>
    </nav>
</header>

\t  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TWCEnfantsBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 332,  120 => 317,  113 => 313,  103 => 306,  96 => 302,  85 => 294,  78 => 290,  63 => 278,  59 => 277,  25 => 245,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# <header class=\"header\" id=\"pageTop\" style=\"height: auto;\">
\t<div class=\"color-bars\">
  \t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t          \t<div class=\"col color-bar bg-warning d-none d-md-block\"></div>
\t          \t<div class=\"col color-bar bg-success d-none d-md-block\"></div>
\t          \t<div class=\"col color-bar bg-danger d-none d-md-block\"></div>
\t          \t<div class=\"col color-bar bg-info d-none d-md-block\"></div>
\t          \t<div class=\"col color-bar bg-purple d-none d-md-block\"></div>
\t          \t<div class=\"col color-bar bg-pink d-none d-md-block\"></div>
\t          \t<div class=\"col color-bar bg-warning\"></div>
\t          \t<div class=\"col color-bar bg-success\"></div>
\t          \t<div class=\"col color-bar bg-danger\"></div>
\t          \t<div class=\"col color-bar bg-info\"></div>
\t          \t<div class=\"col color-bar bg-purple\"></div>
\t          \t<div class=\"col color-bar bg-pink\"></div>
\t\t\t</div>
  \t\t</div>
\t</div>
\t<!-- Navbar -->

  \t<nav class=\"navbar navbar-expand-md navbar-white\" style=\"opacity: 1;\">
\t    <div class=\"container\">
\t        <a class=\"navbar-brand\" href=\"index.html\">
\t          <img class=\"d-inline-block\" src=\"{{asset('front/img/logo-school.png')}}\" alt=\"Kidz School\">
\t        </a>
\t        <!-- cart-dropdown -->
\t        <div class=\"dropdown cart-dropdown ml-auto mr-5 d-md-none\">
\t          \t<div data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t            \t<a href=\"javascript:void(0)\">
\t              \t\t<span class=\"rounded-sm bg-pink icon-small icon-badge d-none\">
\t                \t\t<i class=\"fa fa-close text-white\" aria-hidden=\"true\"></i>
\t              \t\t</span>
\t\t              \t<span class=\"rounded-sm bg-pink icon-small icon-badge \">
\t\t                \t<i class=\"fa fa-shopping-basket text-white\" aria-hidden=\"true\"></i>
\t\t                \t<span class=\"badge bg-warning\">3</span>
\t\t              \t</span>
\t            \t</a>
\t          \t</div>
\t          \t<div class=\"dropdown-menu dropdown-menu-right\">
\t            \t<ul class=\"bg-white list-unstyled\">
\t              \t\t<li class=\"d-flex align-items-center\">
\t                \t\t<i class=\"fa fa-shopping-basket font-size-20 mr-3\" aria-hidden=\"true\"></i>
\t                \t\t<h3 class=\"text-capitalize font-weight-bold mb-0\">3 items in your cart</h3>
\t              \t\t</li>
\t              \t\t<hr>
\t              \t\t<li>
\t\t\t                <a href=\"product-single.html\">
\t\t\t                  \t<div class=\"media\">
\t\t\t                    \t<div class=\"image\">
\t\t\t                      \t\t<img class=\"bg-light rounded-sm px-5 py-3 mr-4\" src=\"{{asset('front/img/products/product-sm.png')}}\" alt=\"cart-Image\">
\t\t\t                    \t</div>
\t\t\t                    \t<div class=\"media-body\">
\t\t\t\t                      \t<div class=\"d-flex justify-content-between\">
\t\t\t\t                        \t<h4 class=\"text-dark\">Barbie Racing Car</h4>
\t\t\t\t                        \t<span class=\"cancel\">
\t\t\t\t                          \t\t<i class=\"fa fa-close text-muted\" aria-hidden=\"true\"></i>
\t\t\t\t                        \t</span>
\t\t\t\t                      \t</div>
\t\t\t\t                      \t<div class=\"price\">
\t\t\t\t                        \t<span class=\"text-warning font-weight-medium\">\$50</span>
\t\t\t\t                      \t</div>
\t\t\t\t                      \t<span class=\"text-muted font-weight-medium text-muted\">Qnt: 1</span>
\t\t\t                    \t</div>
\t\t\t                  \t</div>
\t\t\t                </a>
\t\t\t                <hr>
\t\t\t            </li>
\t             \t\t<li>
\t\t\t                <a href=\"product-single.html\">
\t\t\t                  \t<div class=\"media\">
\t\t\t\t                    <div class=\"image\">
\t\t\t\t                      \t<img class=\"bg-light rounded-sm px-5 py-3 mr-4\" src=\"{{asset('front/img/products/product-sm.png')}}\" alt=\"cart-Image\">
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"media-body\">
\t\t\t\t                      \t<div class=\"d-flex justify-content-between\">
\t\t\t\t                        \t<h4 class=\"text-dark\">Barbie Racing Car</h4>
\t\t\t\t                        \t<span class=\"cancel\">
\t\t\t\t                          \t\t<i class=\"fa fa-close text-muted\" aria-hidden=\"true\"></i>
\t\t\t\t                        \t</span>
\t\t\t\t                      \t</div>
\t\t\t\t                      \t<div class=\"price\">
\t\t\t\t                        \t<span class=\"text-warning font-weight-medium\">\$50</span>
\t\t\t\t                      \t</div>
\t\t\t\t                      \t<span class=\"text-muted font-weight-medium\">Qnt: 1</span>
\t\t\t\t                    </div>
\t\t\t\t                 </div>
\t\t\t                </a>
\t\t\t                <hr>
\t\t\t            </li>
\t              \t\t<li>
\t\t\t                <a href=\"product-single.html\">
\t\t\t                  \t<div class=\"media\">
\t\t\t\t                    <div class=\"image\">
\t\t\t\t                      \t<img class=\"bg-light rounded-sm px-5 py-3 mr-4t\" src=\"{{asset('front/img/products/product-sm.png')}}\" alt=\"cart-Image\">
\t\t\t\t                    </div>
\t\t\t                    \t<div class=\"media-body\">
\t\t\t                      \t\t<div class=\"d-flex justify-content-between\">
\t\t\t                        \t\t<h4 class=\"text-dark font-weight-bold\">Barbie Racing Car</h4>
\t\t\t                        \t\t<span class=\"cancel\">
\t\t\t                          \t\t\t<i class=\"fa fa-close text-muted\" aria-hidden=\"true\"></i>
\t\t\t                        \t\t</span>
\t\t\t                      \t\t</div>
\t\t\t                      \t\t<div class=\"price\">
\t\t\t                        \t\t<span class=\"text-warning font-weight-medium\">\$50</span>
\t\t\t                      \t\t</div>
\t\t\t                      \t\t<span class=\"text-muted font-weight-medium\">Qnt: 1</span>
\t\t\t                    \t</div>
\t\t\t                  \t</div>
\t\t\t                </a>
\t\t\t                <hr>
\t\t\t            </li>
\t\t\t            <li>
\t\t\t                <div class=\"d-flex justify-content-between mb-3\">
\t\t\t                  \t<h3 class=\"cart-total font-weight-bold\">Subtotal</h3>
\t\t\t                  \t<h3 class=\"cart-price font-weight-bold\">\$150</h3>
\t\t\t                </div>
\t\t\t                <div class=\"cart-button d-flex justify-content-between\">
\t\t\t                  \t<button type=\"button\" class=\"btn btn-danger text-uppercase px-4 shadow-sm mr-3\" onclick=\"location.href='product-checkout-step-1.html';\">Checkout</button>
\t\t\t                  \t<button type=\"button\" class=\"btn btn-danger text-uppercase px-4 shadow-sm\" onclick=\"location.href='product-cart.html';\">View Cart</button>
\t\t\t                </div>
\t\t\t            </li>
\t            \t</ul>
\t          \t</div>
\t        </div>
\t        <button class=\"navbar-toggler py-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t          \t<i class=\"fa fa-bars\"></i>
\t        </button>

\t        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
\t          \t<ul class=\"navbar-nav ml-lg-auto\">
\t\t            <li class=\"nav-item dropdown bg-warning\">
\t\t              \t<a class=\"nav-link dropdown-toggle  active \" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t                \t<i class=\"fa fa-home nav-icon\" aria-hidden=\"true\"></i>
\t\t                \t<span>Parlement de l'enfant</span>
\t\t              \t</a>
\t\t              \t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
\t\t                \t<li>
\t\t                  \t\t<a class=\"dropdown-item  active \" href=\"index.html\">Présentation</a>
\t\t                \t</li>
\t\t\t                <li>
\t\t\t                  \t<a class=\"dropdown-item \" href=\"index-v2.html\">Rôle</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  \t<a class=\"dropdown-item \" href=\"index-v3.html\">Composition</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  \t<a class=\"dropdown-item \" href=\"index-v4.html\">Commissions</a>
\t\t\t                </li>
\t\t              \t</ul>
\t\t            </li>
\t\t            <li class=\"nav-item dropdown bg-danger\">
\t\t              \t<a class=\"nav-link dropdown-toggle \" href=\"javascript:void(0)\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t                \t<i class=\"fa fa-list-ul nav-icon\" aria-hidden=\"true\"></i>
\t\t                \t<span>Sessions parlementaires</span>
\t\t              \t</a>
\t\t              \t<ul class=\"dropdown-menu\">
\t\t                \t<li>
\t\t                  \t\t<a class=\"dropdown-item\" href=\"about-us.html\">Régional</a>
\t\t                  \t\t<ul class=\"sub-menu\">
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Présentation</a></li>
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Activités</a></li>
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Sessions</a></li>
\t\t                  \t\t</ul>
\t\t                \t</li>
\t\t                \t<li>
\t\t                  \t\t<a class=\"dropdown-item\" href=\"about-us.html\">National</a>
\t\t                  \t\t<ul class=\"sub-menu\">
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Présentation</a></li>
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Activités</a></li>
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Sessions</a></li>
\t\t                  \t\t</ul>
\t\t                \t</li>
\t\t              \t</ul>
\t\t            </li>
\t\t            <li class=\"nav-item dropdown bg-success\">
\t\t              \t<a class=\"nav-link dropdown-toggle \" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t                \t<i class=\"fa fa-file-text-o nav-icon\" aria-hidden=\"true\"></i>
\t\t                \t<span>Agenda de l'enfant parlementaire</span>
\t\t              \t</a>
\t\t              \t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
\t\t                \t<li>
\t\t                  \t\t<a class=\"dropdown-item  active \" href=\"index.html\">Présentation</a>
\t\t                \t</li>
\t\t\t                <li>
\t\t\t                  \t<a class=\"dropdown-item \" href=\"index-v2.html\">Priorités par région</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  \t<a class=\"dropdown-item \" href=\"index-v3.html\">Agenda de l'EP</a>
\t\t\t                </li>
\t\t              \t</ul>
\t\t            </li>
\t\t            <li class=\"nav-item dropdown bg-info\">
\t\t              \t<a class=\"nav-link dropdown-toggle \" href=\"javascript:void(0)\" id=\"stores\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t                \t<i class=\"fa fa-pencil-square-o nav-icon\" aria-hidden=\"true\"></i>
\t\t                \t<span>Activités des parlementaires</span>
\t\t              \t</a>
\t\t              \t<ul class=\"dropdown-menu\">
\t\t                \t<li>
\t\t                  \t\t<a class=\"dropdown-item\" href=\"about-us.html\">Session 2017-2019</a>
\t\t                  \t\t<ul class=\"sub-menu\">
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Présentation</a></li>
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Membres</a></li>
\t\t                  \t\t\t<li><a class=\"\" href=\"teachers.html\">Carte des commissions</a></li>
\t\t                  \t\t</ul>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t\t            <li class=\"nav-item dropdown bg-purple\">
\t\t              \t<a class=\"nav-link dropdown-toggle \" href=\"javascript:void(0)\" id=\"stores\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t                \t<i class=\"fa fa-calendar nav-icon\" aria-hidden=\"true\"></i>
\t\t                \t<span>C.A.P.E</span>
\t\t              \t</a>
\t\t              \t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
\t\t                \t<li>
\t\t                  \t\t<a class=\"dropdown-item  active \" href=\"index.html\">Présentation</a>
\t\t                \t</li>
\t\t\t                <li>
\t\t\t                  \t<a class=\"dropdown-item \" href=\"index-v2.html\">Réseau des CAPE</a>
\t\t\t                </li>
\t\t              \t</ul>
\t\t            </li>
\t\t            <li class=\"nav-item dropdown bg-danger\">
\t\t              \t<a class=\"nav-link dropdown-toggle \" href=\"component-default.html\">
\t\t                \t<i class=\"fa fa-home nav-icon\" aria-hidden=\"true\"></i>
\t\t                \t<span>Mediathèque</span>
\t\t              \t</a>
\t\t            </li>
\t\t            <li class=\"nav-item dropdown bg-success\">
\t\t              \t<a class=\"nav-link dropdown-toggle \" href=\"component-default.html\">
\t\t                \t<i class=\"fa fa-home nav-icon\" aria-hidden=\"true\"></i>
\t\t                \t<span>Contact</span>
\t\t              \t</a>
\t\t              \t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
\t\t                \t<li>
\t\t                  \t\t<a class=\"dropdown-item  active \" href=\"index.html\">Tel/Fax</a>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t          \t</ul>
\t        </div>
      \t</div>
    </nav>
</header> #}

<style type=\"text/css\" media=\"screen\">
\t.navbar-brand {
\t    white-space: nowrap;
\t    display: block;
\t    position: relative;
\t    z-index: 1;
\t    text-align: center;
\t    width: 95px;
\t    min-height: 144px;
\t    max-height: 140px;
\t    line-height: 38px;
\t    text-align: center;
\t    top: -45px;
\t}
\t@media (max-width: 767px) {
        .logo_header{
\t\t    max-width: 65px !important;
\t\t}
\t\t.navbar-brand {
\t\t\ttop: -30px !important;
\t\t    min-height: 80px !important;
    \t\tmax-height: 80px !important;
\t\t}
    }
\t
</style>
<header class=\"header\" id=\"pageTop\" style=\"height: auto;\">
\t<!-- Navbar -->

  \t<nav class=\"navbar navbar-expand-md\" style=\"opacity: 1;box-shadow: none;background-color: #BFE0DC;\">
\t    <div class=\"container\">
\t    \t<a class=\"navbar-brand\" href=\"{{path('twc_onde_homepage')}}\">
\t          <img class=\"d-inline-block logo_header\" src=\"{{asset('assets/images/logo.png')}}\" alt=\"Kidz School\">
\t        </a>
\t        <!-- cart-dropdown -->
\t        <button class=\"navbar-toggler py-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t          \t<i class=\"fa fa-bars\"></i>
\t        </button>

\t        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
\t          \t<ul class=\"navbar-nav ml-lg-auto\" style=\"margin-left: auto!important;margin-right: auto!important;\">
\t          \t\t<a href=\"\" title=\"\" style=\"width: 120px;border-radius: 50%;height: 120px;margin-right: 50px;\">
\t          \t\t\t<div style=\"border-radius: 50%;background: #d2bedd;margin-right: 50px;position: relative;width: 120px;height: 120px;\">
\t\t          \t\t\t<li class=\"nav-item dropdown bg-warning\" style=\"padding:25px 0px 0px 35px;\">
\t\t\t\t              \t<img class=\"d-inline-block\" src=\"{{asset('assets/images/jeux.png')}}\" alt=\"Kidz School\" style=\"max-width: 50px;\">
\t\t\t\t              \t
\t\t\t\t            </li>
\t\t\t\t            <div style=\"position:absolute;bottom: 38px;width: 100%;text-align: center;\">
\t\t\t\t            \t<span style=\"font-weight: 700;color: #605F5F !important\">{{\"espaceEnfant.jeuxLudiques\"|trans}}</span>
\t\t\t\t            </div>
\t\t          \t\t</div>
\t          \t\t</a>
\t          \t\t
\t          \t\t<a href=\"\" title=\"\" style=\"width: 120px;border-radius: 50%;height: 120px;margin-right: 50px;\">
\t          \t\t\t<div style=\"border-radius: 50%;background: #d2bedd;margin-right: 50px;position: relative;width: 120px;height: 120px;\">
\t\t          \t\t\t<li class=\"nav-item dropdown bg-warning\" style=\"padding:8px 0px 0px 38px\">
\t\t\t\t              \t<img class=\"d-inline-block\" src=\"{{asset('assets/images/coloriage.png')}}\" alt=\"Kidz School\" style=\"max-width: 40px;\">
\t\t\t\t              \t
\t\t\t\t            </li>
\t\t\t\t            <div style=\"position: absolute;bottom: 19px;width: 100%;text-align: center;\">
\t\t\t\t            \t<span style=\"font-weight: 700;color: #605F5F !important\">{{\"espaceEnfant.jeuxDivertissement\"|trans}}</span>
\t\t\t\t            </div>
\t\t          \t\t</div>
\t          \t\t</a>
\t          \t\t<a href=\"\" title=\"\" style=\"width: 120px;border-radius: 50%;height: 120px;margin-right: 50px;\">
\t          \t\t\t<div style=\"border-radius: 50%;background: #d2bedd;margin-right: 50px;position: relative;width: 120px;height: 120px;\">
\t\t          \t\t\t<li class=\"nav-item dropdown bg-warning\" style=\"padding:20px 0px 0px 30px;\">
\t\t\t\t              \t<img class=\"d-inline-block\" src=\"{{asset('assets/images/bande_dessine.png')}}\" alt=\"Kidz School\" style=\"max-width: 45px;\">
\t\t\t\t              \t
\t\t\t\t            </li>
\t\t\t\t            <div style=\"position:absolute;bottom: 16px;width: 100%;text-align: center;\">
\t\t\t\t            \t<span style=\"font-weight: 700;color: #605F5F !important\">{{\"espaceEnfant.bandesDessinées\"|trans}}</span>
\t\t\t\t            </div>
\t\t          \t\t</div>
\t          \t\t</a>
\t          \t\t{# <a href=\"\" title=\"\" style=\"width: 110px;border-radius: 50%;height: 110px;margin-right: 50px;\">
\t          \t\t\t<div style=\"border-radius: 50%;background: #d2bedd;margin-right: 50px;position: relative;width: 110px;height: 110px;\">
\t\t          \t\t\t<li class=\"nav-item dropdown bg-warning\" style=\"padding:16px 0px 0px 35px;\">
\t\t\t\t              \t<img class=\"d-inline-block\" src=\"{{asset('assets/images/video_photo.png')}}\" alt=\"Kidz School\" style=\"max-width: 45px;\">
\t\t\t\t              \t
\t\t\t\t            </li>
\t\t\t\t            <div style=\"position: absolute;bottom: 28px;white-space: nowrap;width: 100%;text-align: center;\">
\t\t\t\t            \t<span style=\"font-weight: 700;color: #605F5F !important\">Videos Photos</span>
\t\t\t\t            </div>
\t\t          \t\t</div>
\t          \t\t</a> #}
\t          \t\t
\t\t           
\t          \t</ul>
\t        </div>
      \t</div>
    </nav>
</header>

\t  ", "TWCEnfantsBundle:Default:header.html.twig", "/var/www/onde/src/TWC/EnfantsBundle/Resources/views/Default/header.html.twig");
    }
}
