<?php

/* TWCEnfantsBundle:Default:index.html.twig */
class __TwigTemplate_6e71c2bf8789cfa30506738eac0446a7d6c4ff4011e79f0224e5f293481333f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TWCEnfantsBundle::enfantlayout.html.twig", "TWCEnfantsBundle:Default:index.html.twig", 1);
        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'Style' => [$this, 'block_Style'],
            'body' => [$this, 'block_body'],
            'custom_js' => [$this, 'block_custom_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "TWCEnfantsBundle::enfantlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCEnfantsBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TWCEnfantsBundle:Default:index.html.twig"));

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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css\">
\t<style type=\"text/css\">
\t\t/*.languagesButton{
\t\t\tfloat: right;
\t\t    right: 4%;
\t\t    position: relative;
\t\t}*/
    .languagesButton{
      float: right;
      right: 0%;
      top: -40px;
      z-index: 100;
      position: relative;
    }
\t\t.nav-icon{
\t\t\twidth: 15px;
\t\t    height: 15px;
\t\t    line-height: 15px;
\t\t    font-size: 10px;
\t\t}
    body{
      background-color: #D2BEDD;
    }
    .demo{
      background-color: #BFE0DC;
      margin-bottom: 0px !important;
    }
    /*.lSSlideOuter {
      width: 100%;
    }*/
    .left-image{
      position: absolute;
      top: 40%;
      left: 20px;
    }
    .left-image > img{
      max-width: 160px;
      min-width: 160px;
    }
    .right-image{
      position: absolute;
      top: 100%;
      right: 20px;
    }
    .right-image > img{
      max-width: 160px;
      min-width: 160px;
    }
    .fixie{
      text-align: center;
      position: relative
    }
    .footList{
      display: inline-block;
    }
    .separator{
      padding-left: 10px;
      padding-right: 10px;
    }
    .slider1 > .demo{
      width: 70% !important;margin-left: 15% !important;margin-bottom: 0%;
    }
    .slider2 > .demo{
      width: 70% !important;margin-left: 15% !important;
    padding: 80px 50px;
    }
    .footer_img{
      width: 70% !important;
      margin-left: 15% !important;
      margin-bottom: 0%;
      background-color: #d2bedd;
      margin-bottom: 0px !important;
      position: absolute;
      bottom: 120px;
    }
    .jeu_content{
      background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;
    }
    .cadre_content{
      background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;
    }
    @media (max-width: 767px) {
        .left-image{

          left: 0px;
          z-index: 99 !important;
        }
        .left-image > img{
          max-width: 80px;
          min-width: 80px;
          
        }
        .right-image{

          right: 0px;
          z-index: 99 !important;
        }
        .right-image > img{
          max-width: 80px;
            min-width: 80px;
            
        }
        .slider1 > .demo{
          width: 100% !important;
          margin-left: 0% !important;
        }
        .slider2 > .demo{
          padding: 30px 0px !important;
          width: 80% !important;
          margin-left: 10% !important;
        }
        .section-title > h2 {
          font-size: 20px !important;
          margin-left: auto !important;
          margin-right: auto !important;
        }
        .footer_img{
          bottom: 56px !important;
          width: 80% !important;
          margin-left: 10% !important;
        }
        .jeu_content{
          min-height: 175px !important;
          margin: 8px !important;
        }
    }
    
    ";
        // line 132
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []) == "ar")) {
            // line 133
            echo "      .section-title{
        direction: rtl;
      }
    ";
        }
        // line 137
        echo "\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 140
        echo "
<!--====================================
——— BEGIN MAIN SLIDE LIST
===================================== -->
<section class=\"slider1\">
\t<div class=\"demo\" style=\"\">
    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TWCEnfantsBundle:Default:topMenu"));
        echo "
\t    
\t</div>
</section>
<section class=\"slider2\">
  <div class=\"demo\" style=\"\">
    <div class=\"left-image\">

        <img class=\"d-inline-block\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fille.png"), "html", null, true);
        echo "\" alt=\"Kidz School\" >

    </div>

    <div class=\"right-image\">
      <img class=\"d-inline-block\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/garcon.png"), "html", null, true);
        echo "\" alt=\"Kidz School\" >
    </div>
    
    
    <div class=\"section-title align-items-baseline mb-4\">
      <h2 class=\"px-0 mb-0\" style=\"color: #605F5F !important\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("espaceEnfant.jeuxLudiques"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"games\">
        <div class=\"row py-4 align-items-center\">
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" style=\"position:relative\">
          <a href=\"http://game3.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jeux11.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');\">
              
            </div>
          </a>  
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"http://game1.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jeux12.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');\">
              
            </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"http://game2.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jeux13.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');\">
              
            </div>
          </a>
          </div>
        </div>
    </div>

    <div class=\"section-title align-items-baseline mb-4\">
      <h2 class=\"px-0 mb-0\" style=\"color: #605F5F !important\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("espaceEnfant.jeuxDivertissement"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"games\">
        <div class=\"row py-4 align-items-center\">
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" style=\"position:relative\">
          <a href=\"http://game4.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jeu3.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');\">
              
            </div>
          </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"https://td2tl.com/dont-crash-preview/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jeu2.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');\">
              
            </div>
          </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"https://showcase.codethislab.com/games/snake_attack/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jeu1.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');\">
              
            </div>
          </a>
          </div>
        </div>
    </div>

    <div class=\"section-title align-items-baseline mb-4\">
      <h2 class=\"px-0 mb-0\" style=\"color: #605F5F !important\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("espaceEnfant.bandesDessinées"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"games\">
        <div class=\" py-4 align-items-center\" >
          <div class=\"row\" id=\"lightgallery\">
            <a class=\"offset-lg-2 offset-md-2 col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-exthumbimage=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bd1-min.jpg"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bd1-min.jpg"), "html", null, true);
        echo "\">
              <div>
                <div style=\"background-image: url('";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bd1-min.jpg"), "html", null, true);
        echo "');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
                </div>
                <div style=\"background-image: url('";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
                </div>
              </div>
            </a>
         
          
            <a class=\" col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-exthumbimage=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bd2-min.jpg"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bd2-min.jpg"), "html", null, true);
        echo "\">
              <div >
                <div style=\"background-image: url('";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bd2-min.jpg"), "html", null, true);
        echo "');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
                </div>
                <div style=\"background-image: url('";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/nuage.png"), "html", null, true);
        echo "');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
                </div>
              </div>
            </a>
          </div>
          ";
        // line 265
        echo "        </div>
    </div>

   ";
        // line 297
        echo "      
  </div>
  <div class=\"demo\" style=\"\">
    <div class=\"pt-8 pb-7\" style=\"background-image: url('";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fille.png"), "html", null, true);
        echo "');background-position: center;background-repeat: no-repeat;background-size: 160px;min-height:300px\">
    </div>
  </div>
</section>



</div> <!-- element wrapper ends -->

<!-- ====================================
      ———\tFOOTER
      ===================================== -->
<footer class=\"footer-bg-img\" style=\"position:relative\">

  <div class=\"footer_img pt-3\" style=\"\">

    <!-- Copy Right -->
    <div class=\"\">
      <div class=\"\">
        ";
        // line 350
        echo "        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3\">
            <div class=\"fixie\">
              <div class=\"footList\">
                ©2020 ";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.copyright.first"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twc_onde_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.copyright.second"), "html", null, true);
        echo ".
                <img class=\"ml-3 d-inline-block\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo_onde.png"), "html", null, true);
        echo "\" alt=\"Kidz School\" style=\"max-width: 40px;\">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>



<!--scrolling-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 371
    public function block_custom_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_js"));

        // line 372
        echo "  <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js\"></script>

    <!-- lightgallery plugins -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.1.0/lg-fullscreen.min.js\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#lightgallery\").lightGallery({
            download: false,
            thumbnail: true,
            exThumbImage: 'data-exthumbimage',
            counter: false
        }); 
        \$(\"#lightgallery2\").lightGallery({
            download: false,
            thumbnail: true,
            exThumbImage: 'data-exthumbimage',
            counter: false
        }); 
    });
    </script>
\t<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/lightslider.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$('#lightSlider').lightSlider({
\t\t    gallery: true,
\t\t    item: 1,
\t\t    loop:true,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        slideMove: 1,
\t\t    slideMargin: 0,
\t\t    thumbItem: 3
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TWCEnfantsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 396,  508 => 372,  499 => 371,  473 => 355,  465 => 354,  459 => 350,  437 => 300,  432 => 297,  427 => 265,  419 => 253,  414 => 251,  407 => 249,  398 => 243,  393 => 241,  386 => 239,  378 => 234,  366 => 225,  361 => 223,  351 => 216,  346 => 214,  336 => 207,  331 => 205,  322 => 199,  310 => 190,  305 => 188,  295 => 181,  290 => 179,  280 => 172,  275 => 170,  266 => 164,  258 => 159,  250 => 154,  239 => 146,  231 => 140,  222 => 139,  211 => 137,  205 => 133,  203 => 132,  71 => 4,  62 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TWCEnfantsBundle::enfantlayout.html.twig' %}
{% block Title %}Homepage {{parent()}}{% endblock %}
{% block Style %}
\t{{parent()}}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css\">
\t<style type=\"text/css\">
\t\t/*.languagesButton{
\t\t\tfloat: right;
\t\t    right: 4%;
\t\t    position: relative;
\t\t}*/
    .languagesButton{
      float: right;
      right: 0%;
      top: -40px;
      z-index: 100;
      position: relative;
    }
\t\t.nav-icon{
\t\t\twidth: 15px;
\t\t    height: 15px;
\t\t    line-height: 15px;
\t\t    font-size: 10px;
\t\t}
    body{
      background-color: #D2BEDD;
    }
    .demo{
      background-color: #BFE0DC;
      margin-bottom: 0px !important;
    }
    /*.lSSlideOuter {
      width: 100%;
    }*/
    .left-image{
      position: absolute;
      top: 40%;
      left: 20px;
    }
    .left-image > img{
      max-width: 160px;
      min-width: 160px;
    }
    .right-image{
      position: absolute;
      top: 100%;
      right: 20px;
    }
    .right-image > img{
      max-width: 160px;
      min-width: 160px;
    }
    .fixie{
      text-align: center;
      position: relative
    }
    .footList{
      display: inline-block;
    }
    .separator{
      padding-left: 10px;
      padding-right: 10px;
    }
    .slider1 > .demo{
      width: 70% !important;margin-left: 15% !important;margin-bottom: 0%;
    }
    .slider2 > .demo{
      width: 70% !important;margin-left: 15% !important;
    padding: 80px 50px;
    }
    .footer_img{
      width: 70% !important;
      margin-left: 15% !important;
      margin-bottom: 0%;
      background-color: #d2bedd;
      margin-bottom: 0px !important;
      position: absolute;
      bottom: 120px;
    }
    .jeu_content{
      background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;
    }
    .cadre_content{
      background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;
    }
    @media (max-width: 767px) {
        .left-image{

          left: 0px;
          z-index: 99 !important;
        }
        .left-image > img{
          max-width: 80px;
          min-width: 80px;
          
        }
        .right-image{

          right: 0px;
          z-index: 99 !important;
        }
        .right-image > img{
          max-width: 80px;
            min-width: 80px;
            
        }
        .slider1 > .demo{
          width: 100% !important;
          margin-left: 0% !important;
        }
        .slider2 > .demo{
          padding: 30px 0px !important;
          width: 80% !important;
          margin-left: 10% !important;
        }
        .section-title > h2 {
          font-size: 20px !important;
          margin-left: auto !important;
          margin-right: auto !important;
        }
        .footer_img{
          bottom: 56px !important;
          width: 80% !important;
          margin-left: 10% !important;
        }
        .jeu_content{
          min-height: 175px !important;
          margin: 8px !important;
        }
    }
    
    {% if app.request.locale == \"ar\" %}
      .section-title{
        direction: rtl;
      }
    {% endif %}
\t</style>
{% endblock %}
{% block body %}

<!--====================================
——— BEGIN MAIN SLIDE LIST
===================================== -->
<section class=\"slider1\">
\t<div class=\"demo\" style=\"\">
    {{ render(controller(\"TWCEnfantsBundle:Default:topMenu\")) }}
\t    
\t</div>
</section>
<section class=\"slider2\">
  <div class=\"demo\" style=\"\">
    <div class=\"left-image\">

        <img class=\"d-inline-block\" src=\"{{asset('assets/images/fille.png')}}\" alt=\"Kidz School\" >

    </div>

    <div class=\"right-image\">
      <img class=\"d-inline-block\" src=\"{{asset('assets/images/garcon.png')}}\" alt=\"Kidz School\" >
    </div>
    
    
    <div class=\"section-title align-items-baseline mb-4\">
      <h2 class=\"px-0 mb-0\" style=\"color: #605F5F !important\">{{\"espaceEnfant.jeuxLudiques\"|trans}}</h2>
    </div>
    <div class=\"games\">
        <div class=\"row py-4 align-items-center\">
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" style=\"position:relative\">
          <a href=\"http://game3.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('{{asset('assets/images/jeux11.png')}}');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('{{asset('assets/images/nuage.png')}}');\">
              
            </div>
          </a>  
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"http://game1.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('{{asset('assets/images/jeux12.png')}}');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('{{asset('assets/images/nuage.png')}}');\">
              
            </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"http://game2.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('{{asset('assets/images/jeux13.png')}}');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('{{asset('assets/images/nuage.png')}}');\">
              
            </div>
          </a>
          </div>
        </div>
    </div>

    <div class=\"section-title align-items-baseline mb-4\">
      <h2 class=\"px-0 mb-0\" style=\"color: #605F5F !important\">{{\"espaceEnfant.jeuxDivertissement\"|trans}}</h2>
    </div>
    <div class=\"games\">
        <div class=\"row py-4 align-items-center\">
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" style=\"position:relative\">
          <a href=\"http://game4.thewebcake.com/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('{{asset('assets/images/jeu3.png')}}');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('{{asset('assets/images/nuage.png')}}');\">
              
            </div>
          </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"https://td2tl.com/dont-crash-preview/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('{{asset('assets/images/jeu2.png')}}');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('{{asset('assets/images/nuage.png')}}');\">
              
            </div>
          </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          <a href=\"https://showcase.codethislab.com/games/snake_attack/\" target=\"_blank\">
            <div class=\"jeu_content\" style=\"background-image: url('{{asset('assets/images/jeu1.png')}}');\">
            </div>
            <div class=\"cadre_content\" style=\"background-image: url('{{asset('assets/images/nuage.png')}}');\">
              
            </div>
          </a>
          </div>
        </div>
    </div>

    <div class=\"section-title align-items-baseline mb-4\">
      <h2 class=\"px-0 mb-0\" style=\"color: #605F5F !important\">{{\"espaceEnfant.bandesDessinées\"|trans}}</h2>
    </div>
    <div class=\"games\">
        <div class=\" py-4 align-items-center\" >
          <div class=\"row\" id=\"lightgallery\">
            <a class=\"offset-lg-2 offset-md-2 col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-exthumbimage=\"{{asset('assets/images/bd1-min.jpg')}}\" href=\"{{asset('assets/images/bd1-min.jpg')}}\">
              <div>
                <div style=\"background-image: url('{{asset('assets/images/bd1-min.jpg')}}');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
                </div>
                <div style=\"background-image: url('{{asset('assets/images/nuage.png')}}');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
                </div>
              </div>
            </a>
         
          
            <a class=\" col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-exthumbimage=\"{{asset('assets/images/bd2-min.jpg')}}\" href=\"{{asset('assets/images/bd2-min.jpg')}}\">
              <div >
                <div style=\"background-image: url('{{asset('assets/images/bd2-min.jpg')}}');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
                </div>
                <div style=\"background-image: url('{{asset('assets/images/nuage.png')}}');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
                </div>
              </div>
            </a>
          </div>
          {# <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
            <div style=\"background-image: url('{{asset('assets/images/jeu7.png')}}');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
            </div>
            <div style=\"background-image: url('{{asset('assets/images/nuage.png')}}');background-size: cover;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
              
            </div>
          </div> #}
        </div>
    </div>

   {#  <div class=\"section-title align-items-baseline mb-4\">
      <h2 class=\"px-0 mb-0\" style=\"color: #605F5F !important\">Meilleurs photo et videos</h2>
    </div>
    <div class=\"games\">
        <div class=\"row py-4 align-items-center\">
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" style=\"position:relative\">
            <div style=\"background-image: url('{{asset('assets/images/2.png')}}');background-size: contain;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
            </div>
            <div style=\"background-image: url('{{asset('assets/images/nuage.png')}}');background-size: contain;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
              
            </div>
            
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
            <div style=\"background-image: url('{{asset('assets/images/2.png')}}');background-size: contain;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
            </div>
            <div style=\"background-image: url('{{asset('assets/images/nuage.png')}}');background-size: contain;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
              
            </div>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
            <div style=\"background-image: url('{{asset('assets/images/2.png')}}');background-size: contain;background-repeat: no-repeat;background-position: center;min-height: 180px;margin:5px;\">
            </div>
            <div style=\"background-image: url('{{asset('assets/images/nuage.png')}}');background-size: contain;background-repeat: no-repeat;background-position: center;min-height: 180px;position:absolute;width: calc(100% - 30px);top: 5px;\">
              
            </div>
          </div>
        </div>
    </div> #}
      
  </div>
  <div class=\"demo\" style=\"\">
    <div class=\"pt-8 pb-7\" style=\"background-image: url('{{asset('assets/images/fille.png')}}');background-position: center;background-repeat: no-repeat;background-size: 160px;min-height:300px\">
    </div>
  </div>
</section>



</div> <!-- element wrapper ends -->

<!-- ====================================
      ———\tFOOTER
      ===================================== -->
<footer class=\"footer-bg-img\" style=\"position:relative\">

  <div class=\"footer_img pt-3\" style=\"\">

    <!-- Copy Right -->
    <div class=\"\">
      <div class=\"\">
        {# <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"fixie\">
              <div class=\"footList\">
                About
                <span class=\"separator\">|</span>
              </div>
              <div class=\"footList\">
                Advertising
                <span class=\"separator\">|</span>
              </div>
              <div class=\"footList\">
                Contact
                <span class=\"separator\">|</span>
              </div>
              <div class=\"footList\">
                Conditions
                <span class=\"separator\">|</span>
              </div>
              <div class=\"footList\">
                Cookies
                <span class=\"separator\">|</span>
              </div>
              <div class=\"footList\">
                Paramètres de confidentialité
                <span class=\"separator\">|</span>
              </div>
            </div>
          </div>

        </div> #}
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3\">
            <div class=\"fixie\">
              <div class=\"footList\">
                ©2020 {{\"footer.copyright.first\"|trans}} <a href=\"{{path('twc_onde_homepage')}}\">{{\"footer.copyright.second\"|trans}}.
                <img class=\"ml-3 d-inline-block\" src=\"{{asset('front/images/logo_onde.png')}}\" alt=\"Kidz School\" style=\"max-width: 40px;\">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>



<!--scrolling-->

{% endblock %}
{% block custom_js %}
  <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js\"></script>

    <!-- lightgallery plugins -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.1.0/lg-fullscreen.min.js\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#lightgallery\").lightGallery({
            download: false,
            thumbnail: true,
            exThumbImage: 'data-exthumbimage',
            counter: false
        }); 
        \$(\"#lightgallery2\").lightGallery({
            download: false,
            thumbnail: true,
            exThumbImage: 'data-exthumbimage',
            counter: false
        }); 
    });
    </script>
\t<script src=\"{{asset('front/js/lightslider.js')}}\"></script>
\t<script type=\"text/javascript\">
\t\t\$('#lightSlider').lightSlider({
\t\t    gallery: true,
\t\t    item: 1,
\t\t    loop:true,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        slideMove: 1,
\t\t    slideMargin: 0,
\t\t    thumbItem: 3
\t\t});
\t</script>
{% endblock %}", "TWCEnfantsBundle:Default:index.html.twig", "/var/www/onde/src/TWC/EnfantsBundle/Resources/views/Default/index.html.twig");
    }
}
