<?php

/* TWCEnfantsBundle::enfantlayout.html.twig */
class __TwigTemplate_2d17749bcb1a74d04fb2b503f3bb9767ca8c476464c2f1c52810a00439cc843a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'Style' => [$this, 'block_Style'],
            'Title' => [$this, 'block_Title'],
            'body' => [$this, 'block_body'],
            'custom_js' => [$this, 'block_custom_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCEnfantsBundle::enfantlayout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCEnfantsBundle::enfantlayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t  \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t  \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        // line 7
        $this->displayBlock('Style', $context, $blocks);
        // line 64
        echo "\t\t<title>";
        $this->displayBlock('Title', $context, $blocks);
        echo "| Enfant</title>
\t</head>
\t
\t<body class=\"stretched\">
\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "notice"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 69
            echo "\t\t    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "type", []), "html", null, true);
            echo "\">
\t\t        <strong>";
            // line 70
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
        // line 73
        echo "\t\t<body id=\"body\" class=\"\">
\t\t\t";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "\t\t</div>
\t\t<script async=\"\" src=\"//widgets.getsitecontrol.com/46851/script.js\"></script><script async=\"\" src=\"https://www.google-analytics.com/analytics.js\"></script><script src=\"https://themes.iamabdus.com/kidz/2.0/assets/plugins/jquery/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/fancybox/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/isotope/isotope.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/smoothscroll/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/syotimer/jquery.syotimer.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/select2/js/select2.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/no-ui-slider/nouislider.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/lazyestload/lazyestload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/velocity/velocity.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 95
        echo "\t\t
\t\t";
        // line 96
        $this->displayBlock('custom_js', $context, $blocks);
        // line 98
        echo "\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_Style($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 8
        echo "
\t\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/no-ui-slider/nouislider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t\t  \t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/owl-carousel/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t\t  \t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/fancybox/jquery.fancybox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/isotope/isotope.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/animate/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t";
        // line 18
        echo "\t\t\t  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css\" rel=\"stylesheet\">
\t\t\t  
\t\t  \t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/revolution/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/revolution/css/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/plugins/revolution/css/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t  \t<link href=\"https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Open+Sans:300,400,600,700\" rel=\"stylesheet\">
  \t\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/kidz.css"), "html", null, true);
        echo "\" id=\"option_style\" rel=\"stylesheet\">
  \t\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/options/optionswitch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  \t\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/favicon.png"), "html", null, true);
        echo "\" rel=\"shortcut icon\">
\t\t  \t<style type=\"text/css\">
\t\t\t\t/*.slider{
\t\t\t\t\theight: 500px;
\t\t\t\t}
\t\t\t\t.demo {
\t\t\t\t    width:450px;
\t\t\t\t    margin-left: 32%;
\t\t\t\t    margin-bottom: 20%;
\t\t\t\t    margin-top: 5%;
\t\t\t\t}*/
\t\t\t\t/* .demo {
\t\t\t\t    width:80%;
\t\t\t\t    margin-left: 10%;
\t\t\t\t    margin-bottom: 20%;
\t\t\t\t} */
\t\t\t\tul {
\t\t\t\t    list-style: none outside none;
\t\t\t\t    padding-left: 0;
\t\t\t\t    margin-bottom:0;
\t\t\t\t}
\t\t\t\tli {
\t\t\t\t    display: block;
\t\t\t\t    float: left;
\t\t\t\t    margin-right: 6px;
\t\t\t\t    cursor:pointer;
\t\t\t\t}
\t\t\t\timg {
\t\t\t\t    display: block;
\t\t\t\t    height: auto;
\t\t\t\t    max-width: 100%;
\t\t\t\t}
\t\t\t\t.navbar-sticky{
\t\t\t\t\twidth: 70% !important;
\t\t\t\t\tmargin-left: 15% !important;
\t\t\t\t}
\t\t  \t</style>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_Title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 97
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCEnfantsBundle::enfantlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 97,  298 => 96,  288 => 75,  279 => 74,  262 => 64,  214 => 26,  210 => 25,  206 => 24,  201 => 22,  197 => 21,  193 => 20,  189 => 18,  185 => 16,  181 => 15,  177 => 14,  173 => 13,  169 => 12,  165 => 11,  161 => 10,  157 => 9,  154 => 8,  145 => 7,  134 => 98,  132 => 96,  129 => 95,  125 => 91,  120 => 89,  116 => 88,  112 => 87,  108 => 86,  104 => 85,  100 => 84,  96 => 83,  92 => 82,  88 => 81,  84 => 80,  80 => 79,  76 => 78,  72 => 76,  70 => 74,  67 => 73,  56 => 70,  51 => 69,  47 => 68,  39 => 64,  37 => 7,  29 => 1,);
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
<html dir=\"ltr\" lang=\"en-US\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t  \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t  \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t{% block Style %}

\t\t\t<link href=\"{{asset('front/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"{{asset('front/plugins/no-ui-slider/nouislider.min.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"{{asset('front/plugins/owl-carousel/owl.carousel.min.css')}}\" rel=\"stylesheet\" media=\"screen\">
\t\t  \t<link href=\"{{asset('front/plugins/owl-carousel/owl.theme.default.min.css')}}\" rel=\"stylesheet\" media=\"screen\">
\t\t  \t<link href=\"{{asset('front/plugins/fancybox/jquery.fancybox.min.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"{{asset('front/plugins/isotope/isotope.min.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"{{asset('front/plugins/animate/animate.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"{{asset('front/plugins/select2/css/select2.min.css')}}\" rel=\"stylesheet\">
\t\t  \t{# <link href=\"{{asset('front/css/lightslider.css')}}\" rel=\"stylesheet\"> #}
\t\t\t  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css\" rel=\"stylesheet\">
\t\t\t  
\t\t  \t<link href=\"{{asset('front/plugins/revolution/css/settings.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"{{asset('front/plugins/revolution/css/layers.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"{{asset('front/plugins/revolution/css/navigation.css')}}\" rel=\"stylesheet\">
\t\t  \t<link href=\"https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Open+Sans:300,400,600,700\" rel=\"stylesheet\">
  \t\t\t<link href=\"{{asset('front/css/kidz.css')}}\" id=\"option_style\" rel=\"stylesheet\">
  \t\t\t<link href=\"{{asset('front/options/optionswitch.css')}}\" rel=\"stylesheet\">
  \t\t\t<link href=\"{{asset('front/img/favicon.png')}}\" rel=\"shortcut icon\">
\t\t  \t<style type=\"text/css\">
\t\t\t\t/*.slider{
\t\t\t\t\theight: 500px;
\t\t\t\t}
\t\t\t\t.demo {
\t\t\t\t    width:450px;
\t\t\t\t    margin-left: 32%;
\t\t\t\t    margin-bottom: 20%;
\t\t\t\t    margin-top: 5%;
\t\t\t\t}*/
\t\t\t\t/* .demo {
\t\t\t\t    width:80%;
\t\t\t\t    margin-left: 10%;
\t\t\t\t    margin-bottom: 20%;
\t\t\t\t} */
\t\t\t\tul {
\t\t\t\t    list-style: none outside none;
\t\t\t\t    padding-left: 0;
\t\t\t\t    margin-bottom:0;
\t\t\t\t}
\t\t\t\tli {
\t\t\t\t    display: block;
\t\t\t\t    float: left;
\t\t\t\t    margin-right: 6px;
\t\t\t\t    cursor:pointer;
\t\t\t\t}
\t\t\t\timg {
\t\t\t\t    display: block;
\t\t\t\t    height: auto;
\t\t\t\t    max-width: 100%;
\t\t\t\t}
\t\t\t\t.navbar-sticky{
\t\t\t\t\twidth: 70% !important;
\t\t\t\t\tmargin-left: 15% !important;
\t\t\t\t}
\t\t  \t</style>
\t\t{% endblock %}
\t\t<title>{% block Title %}{% endblock %}| Enfant</title>
\t</head>
\t
\t<body class=\"stretched\">
\t\t{% for msg in app.session.flashbag.get('notice') %}
\t\t    <div class=\"alert alert-{{ msg.type }}\">
\t\t        <strong>{{ msg.title }}</strong><br/>{{ msg.message }}
\t\t    </div>
\t\t{% endfor %}
\t\t<body id=\"body\" class=\"\">
\t\t\t{% block body %}
\t\t\t{% endblock %}
\t\t</div>
\t\t<script async=\"\" src=\"//widgets.getsitecontrol.com/46851/script.js\"></script><script async=\"\" src=\"https://www.google-analytics.com/analytics.js\"></script><script src=\"https://themes.iamabdus.com/kidz/2.0/assets/plugins/jquery/jquery.min.js\"></script>
\t\t<script src=\"{{asset('front/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/owl-carousel/owl.carousel.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/fancybox/jquery.fancybox.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/isotope/isotope.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/smoothscroll/SmoothScroll.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/syotimer/jquery.syotimer.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/select2/js/select2.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/no-ui-slider/nouislider.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/lazyestload/lazyestload.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/velocity/velocity.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/revolution/js/jquery.themepunch.tools.min.js')}}\"></script>
\t\t<script src=\"{{asset('front/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}\"></script>

\t\t<script src=\"{{asset('front/plugins/wow/wow.min.js')}}\"></script>
\t\t{# <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY\"></script> 

\t\t<script src=\"{{asset('front/js/kidz.js')}}\"></script>#}
\t\t
\t\t{% block custom_js %}
        {% endblock %}
\t</body>
</html>", "TWCEnfantsBundle::enfantlayout.html.twig", "/var/www/onde/src/TWC/EnfantsBundle/Resources/views/enfantlayout.html.twig");
    }
}
