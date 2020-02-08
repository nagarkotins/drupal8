<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/paxton/templates/page.html.twig */
class __TwigTemplate_df1a1a17840e65a7d348d8785cccc2e0ca1f7f8d8c6e380f56c6a0f6878f97df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 77, "for" => 114];
        $filters = ["escape" => 78, "raw" => 115, "t" => 272];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "

<!--start: Header and Navbar -->

<nav class=\"navbar navbar-default\" role=\"navigation\">
  <!--start: Container -->
  <div class=\"container\">
    <div class=\"row\">
     <!--- Start : Header -->
    <!-- Sitename and toggle get grouped for better mobile display -->
    <div class=\"navbar-header col-md-3\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 78
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
      ";
        }
        // line 80
        echo "    </div>
    <!--- End :Header -->

    <!--- Start: Navigation -->
    <div class=\"col-md-9\">
    ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 86
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
    ";
        }
        // line 88
        echo "    <!---End: Navigation -->
    </div>
    </div>
  </div>
  <!--/.container-->
</nav>
<!--end: Header and Navbar -->

<!--- Start: Page Title -->
";
        // line 97
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 98
            echo "
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 108
        echo "<!--- End:Page Title -->

<!-- start: Slider -->
";
        // line 111
        if (($context["is_front"] ?? null)) {
            // line 112
            echo "  <div class=\"slider-wrapper\">
    <div id=\"da-slider\" class=\"da-slider\">
      ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 115
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      <nav class=\"da-arrows\">
        <span class=\"da-arrows-prev\"></span>
        <span class=\"da-arrows-next\"></span>
      </nav>
    </div>
  </div>
";
        }
        // line 124
        echo "<!-- end: Slider -->

<!--- Start:layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    <!---Start:highlighted -->
      ";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 132
            echo "        <div class=\"jumbotron\">
          ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 136
        echo "    <!---End:highlighted -->

    <!---Start:content top -->
      ";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 140
            echo "        <div class=\"row\">
          ";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 144
        echo "    <!---End:Content top -->
    <!-- start: Row -->
    <!--start:content -->
    <div class=\"row layout\">
      <!-- Start:Left SideBar -->
      ";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 150
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 151
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
            ";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 156
        echo "      <!-- End:Right SideBar -->

      <!-- Start:content -->
      ";
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 160
            echo "        <div class = \" content_layout \">
          <div class= ";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
            ";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 167
        echo "      <!-- End:content -->

      <!-- Start:Right SideBar -->
      ";
        // line 170
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 171
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 172
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 177
        echo "      <!-- End:Right SideBar -->
    </div>
    <!---End:Content -->
    <!---Start:content bottom -->
    ";
        // line 181
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 182
            echo "      <div class=\"row\">
        ";
            // line 183
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 186
        echo "    <!-- End:Content Bottom -->
  </div>
</div>
<!--- End:layout -->

<!-- start: Footer Menu -->
";
        // line 192
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 193
            echo "  <div id=\"footer-menu\" class=\"hidden-sm hidden-xs\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!-- start: Footer Menu Logo -->
        <div class=\"col-sm-2\">
          <div id=\"footer-menu-logo\">
            <a class=\"brand\" href=";
            // line 201
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo " > ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo ". </a>
          </div>
        </div>
        <!-- end: Footer Menu Logo -->
        <!-- start: Footer Menu Links-->
        <div class=\"col-sm-9\">
          <div id=\"footer-menu-links\">
            ";
            // line 208
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
          </div>
        </div>
        <!-- end: Footer Menu Links-->
        <!-- start: Footer Menu Back To Top -->
        <div class=\"col-sm-1\">
          <div id=\"footer-menu-back-to-top\">
            <a href=\"#\"></a>
          </div>
        </div>
        <!-- end: Footer Menu Back To Top -->
      </div>
      <!-- end: Row -->
    </div>
    <!-- end: Container  -->
  </div>
";
        }
        // line 225
        echo "  <!-- end: Footer Menu -->

<!-- start: Footer -->
";
        // line 228
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 229
            echo "  <div id=\"footer\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!--- Start:Footer First Region -->
        <div class = ";
            // line 235
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 236
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 237
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 239
            echo "        </div>
        <!--- End :Footer First Region -->
        <!--- Start:Footer Second Region -->
        <div class = ";
            // line 242
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 243
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 244
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 246
            echo "        </div>
        <!--- End:Footer Second Region -->
        <!--- Start:Footer third Region -->
        <div class = ";
            // line 249
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 250
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 251
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 253
            echo "        </div>
        <!--- End:Footer Third Region -->
      </div>
    </div>
  </div>

";
        }
        // line 260
        echo "
<!---End :Footer -->

<!--- Start:Footer Botoom -->
<div id=\"copyright\">
  <!-- start: Container -->
  <div class=\"container\">
    <div class=\"col-sm-12\">
      ";
        // line 268
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 269
            echo "\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
      ";
        }
        // line 271
        echo "      <div class=\"clearfix\"></div>
      <div class=\"credited pull-left\"><p class=\"text-center\">";
        // line 272
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Paxton ported to drupal by"));
        echo " <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p></div>
      ";
        // line 273
        if (($context["show_social_icons"] ?? null)) {
            // line 274
            echo "\t<div class=\"social pull-right\">
\t  <a href=\"";
            // line 275
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t  <a href=\"";
            // line 276
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t  <a href=\"";
            // line 277
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t  <a href=\"";
            // line 278
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t  <a href=\"";
            // line 279
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
            echo "\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t  <a href=\"";
            // line 280
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
            echo "\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t</div>
      ";
        }
        // line 283
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/paxton/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 283,  452 => 280,  448 => 279,  444 => 278,  440 => 277,  436 => 276,  432 => 275,  429 => 274,  427 => 273,  423 => 272,  420 => 271,  414 => 269,  412 => 268,  402 => 260,  393 => 253,  387 => 251,  385 => 250,  381 => 249,  376 => 246,  370 => 244,  368 => 243,  364 => 242,  359 => 239,  353 => 237,  351 => 236,  347 => 235,  339 => 229,  337 => 228,  332 => 225,  312 => 208,  300 => 201,  290 => 193,  288 => 192,  280 => 186,  274 => 183,  271 => 182,  269 => 181,  263 => 177,  256 => 173,  252 => 172,  249 => 171,  247 => 170,  242 => 167,  235 => 163,  231 => 162,  227 => 161,  224 => 160,  222 => 159,  217 => 156,  210 => 152,  206 => 151,  203 => 150,  201 => 149,  194 => 144,  188 => 141,  185 => 140,  183 => 139,  178 => 136,  172 => 133,  169 => 132,  167 => 131,  158 => 124,  149 => 117,  140 => 115,  136 => 114,  132 => 112,  130 => 111,  125 => 108,  117 => 103,  110 => 98,  108 => 97,  97 => 88,  91 => 86,  89 => 85,  82 => 80,  76 => 78,  74 => 77,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/paxton/templates/page.html.twig", "D:\\xampp\\htdocs\\drupal-8.7.3\\drupal-8.7.3\\themes\\paxton\\templates\\page.html.twig");
    }
}
