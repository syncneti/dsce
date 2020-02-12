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

/* themes/drupal8_parallax_theme-8.x-1.8/drupal8_parallax_theme/templates/layout/page.html.twig */
class __TwigTemplate_cbe904d73e3302bf4ec6f3bb32b38f5a520ffe21b0ee644233517ad3bfb7e62f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62, "for" => 125];
        $filters = ["escape" => 70, "raw" => 126];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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

";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", []) || $this->getAttribute(($context["page"] ?? null), "top_menu", []))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", [])) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact_email", [])), "html", null, true);
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          ";
            // line 77
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", [])) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_menu", [])), "html", null, true);
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-4\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 103
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 105
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          ";
        }
        // line 113
        echo "        </div>

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 122
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 123
            echo "    <div class=\"flexslider wow \">
      <ul class=\"slides\">
        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 126
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "      </ul>
    </div>
  ";
        }
        // line 131
        echo "<!-- End: Slider -->


<!-- Start: Home page message -->
  ";
        // line 135
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) || $this->getAttribute(($context["page"] ?? null), "homepagemessage", [])))) {
            // line 136
            echo "    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow \">

          <!-- Start: Home page message -->
          ";
            // line 141
            if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", []))) {
                // line 142
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepagemessage", [])), "html", null, true);
                echo "
          ";
            }
            // line 144
            echo "          <!--End: Home page message -->

          ";
            // line 146
            if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])))) {
                // line 147
                echo "            <div class=\"row topwidget\">

              <!-- Start: Top wid
              get first -->          
              ";
                // line 151
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                    // line 152
                    echo "                <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                    echo "</div>
              ";
                }
                // line 153
                echo "          
              <!-- End: Top widget first --> 

              <!-- Start: Top widget second -->          
              ";
                // line 157
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                    // line 158
                    echo "                <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                    echo "</div>
              ";
                }
                // line 159
                echo "          
              <!-- End: Top widget second --> 
              
              <!-- Start: Top widget third -->         
              ";
                // line 163
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                    // line 164
                    echo "                <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                    echo "</div>
              ";
                }
                // line 165
                echo "          
              <!-- End: Top widget third -->

            </div>
          ";
            }
            // line 170
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 175
        echo "<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\">
  <div class=\"parallax-region- wow \">
    
    ";
        // line 182
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 183
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 186
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 193
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 198
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 205
        echo "
    <div class=\"container\">
      <div class=\"parallax-region\">

  ";
        // line 216
        echo "        <div class=\"row layout\">

          ";
        // line 218
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 219
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 220
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 223
        echo "

          ";
        // line 225
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 226
            echo "            <div class=\"content_layout toprightimage\">
              <div> ";
            // line 227
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 230
        echo "
          ";
        // line 231
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 232
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 233
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 236
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: xxx -->

<!-- Start: Home page message -->
  ";
        // line 245
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "courses", []))) {
            // line 246
            echo "    <div class=\"parallax-widget two\" id=\"courses\">
      <div class=\"container\">
        <div class=\"parallax-region wow \">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 251
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "courses", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 258
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
  ";
        // line 262
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "peoples", []))) {
            // line 263
            echo "    <div class=\"parallax-widget two\" id=\"peoples\">
      <div class=\"container\">
        <div class=\"parallax-region wow \">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 268
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "peoples", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 275
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
  ";
        // line 279
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "clients", []))) {
            // line 280
            echo "    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow \">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 285
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 292
        echo "<!--End: Home page message -->

<!-- Start: Home page message -->
  ";
        // line 295
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "programes", []))) {
            // line 296
            echo "    <div class=\"parallax-widget two\" id=\"programmes\">
      <div class=\"container\">
        <div class=\"parallax-region wow \">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 301
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "programes", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 308
        echo "<!--End: Home page message -->

<!-- Start: Home page message -->
  ";
        // line 311
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "startups", []))) {
            // line 312
            echo "    <div class=\"parallax-widget two\" id=\"startups\">
      <div class=\"container\">
        <div class=\"parallax-region wow \">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 317
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "startups", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 324
        echo "<!--End: Home page message -->

<!-- Start: Home page message -->
  ";
        // line 327
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", []))) {
            // line 328
            echo "    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow \">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 333
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 340
        echo "<!--End: Home page message -->



<!-- Start: Home page message -->
";
        // line 345
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", [])))) {
            // line 346
            echo "  <div class=\"parallax-widget four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow \">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 352
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 353
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 354
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 356
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 360
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 361
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 362
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 364
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 368
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 369
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 370
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 372
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 376
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 377
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 378
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 381
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 388
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 392
        if (((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", [])) && $this->getAttribute(($context["page"] ?? null), "address", []))) {
            // line 393
            echo "  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow \">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <!-- Start: Google map -->
            ";
            // line 399
            if ($this->getAttribute(($context["page"] ?? null), "google_map", [])) {
                // line 400
                echo "              <div class=\"google_map\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
                echo "</div>
            ";
            }
            // line 402
            echo "            <!-- End: Google map -->
          </div>
          <div class=\"col-md-6\">
            <!-- Start: Address -->
            ";
            // line 406
            if ($this->getAttribute(($context["page"] ?? null), "address", [])) {
                // line 407
                echo "              <div class=\"address-wrap\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "address", [])), "html", null, true);
                echo "</div>
            ";
            }
            // line 409
            echo "          <!--End: Address -->
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 416
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 420
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])))) {
            // line 421
            echo "  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow \">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 427
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 428
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 429
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 432
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 435
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 436
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 437
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 440
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 443
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 444
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 445
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 448
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 455
        echo "<!--End: Home page message -->



<!-- Start: Footer Menu -->
";
        // line 460
        if ($this->getAttribute(($context["page"] ?? null), "quotes", [])) {
            // line 461
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
          
              ";
            // line 469
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "quotes", [])), "html", null, true);
            echo "
           </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 478
        echo "<!-- End: Footer Menu -->




<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

     <!-- Start: Footer Left Block -->
      ";
        // line 489
        if ($this->getAttribute(($context["page"] ?? null), "footer_left_block", [])) {
            // line 490
            echo "        <div class=\"col-xs-12 col-sm-12 col-md-4\" style=\"margin-top:10px;\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_left_block", [])), "html", null, true);
            echo "</div>
      ";
        }
        // line 492
        echo "      <!-- End: Footer Left Block -->



 ";
        // line 496
        if (($context["show_social_icon"] ?? null)) {
            // line 497
            echo "

<div class=\"col-xs-12 col-sm-12 col-md-4\">


          <div class=\"social-media\">
            ";
            // line 503
            if (($context["facebook_url"] ?? null)) {
                // line 504
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 506
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 507
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 509
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 510
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 512
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 513
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 515
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 516
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 518
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 519
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 521
            echo "          </div>
        </div>

";
        }
        // line 525
        echo "     
     
<!-- Start: Footer Right Block -->
      ";
        // line 528
        if ($this->getAttribute(($context["page"] ?? null), "footer_right_block", [])) {
            echo " 
           <div class=\"col-xs-12 col-sm-12 col-md-4\" style=\"margin-top:10px; text-align:right;\">
        ";
            // line 530
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_right_block", [])), "html", null, true);
            echo "

      </div>
   ";
        }
        // line 534
        echo "      <!-- End: Footer Right Block -->


    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_parallax_theme-8.x-1.8/drupal8_parallax_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  880 => 534,  873 => 530,  868 => 528,  863 => 525,  857 => 521,  851 => 519,  848 => 518,  842 => 516,  839 => 515,  833 => 513,  830 => 512,  824 => 510,  821 => 509,  815 => 507,  812 => 506,  806 => 504,  804 => 503,  796 => 497,  794 => 496,  788 => 492,  782 => 490,  780 => 489,  767 => 478,  755 => 469,  745 => 461,  743 => 460,  736 => 455,  727 => 448,  721 => 445,  716 => 444,  714 => 443,  709 => 440,  703 => 437,  698 => 436,  696 => 435,  691 => 432,  685 => 429,  680 => 428,  678 => 427,  670 => 421,  668 => 420,  662 => 416,  653 => 409,  647 => 407,  645 => 406,  639 => 402,  633 => 400,  631 => 399,  623 => 393,  621 => 392,  615 => 388,  606 => 381,  600 => 378,  595 => 377,  593 => 376,  587 => 372,  581 => 370,  576 => 369,  574 => 368,  568 => 364,  562 => 362,  557 => 361,  555 => 360,  549 => 356,  543 => 354,  538 => 353,  536 => 352,  528 => 346,  526 => 345,  519 => 340,  509 => 333,  502 => 328,  500 => 327,  495 => 324,  485 => 317,  478 => 312,  476 => 311,  471 => 308,  461 => 301,  454 => 296,  452 => 295,  447 => 292,  437 => 285,  430 => 280,  428 => 279,  422 => 275,  412 => 268,  405 => 263,  403 => 262,  397 => 258,  387 => 251,  380 => 246,  378 => 245,  367 => 236,  359 => 233,  356 => 232,  354 => 231,  351 => 230,  345 => 227,  342 => 226,  340 => 225,  336 => 223,  328 => 220,  325 => 219,  323 => 218,  319 => 216,  313 => 205,  303 => 198,  296 => 193,  294 => 192,  291 => 191,  283 => 186,  278 => 183,  276 => 182,  267 => 175,  260 => 170,  253 => 165,  245 => 164,  243 => 163,  237 => 159,  229 => 158,  227 => 157,  221 => 153,  213 => 152,  211 => 151,  205 => 147,  203 => 146,  199 => 144,  193 => 142,  191 => 141,  184 => 136,  182 => 135,  176 => 131,  171 => 128,  162 => 126,  158 => 125,  154 => 123,  152 => 122,  141 => 113,  135 => 111,  133 => 110,  126 => 105,  120 => 103,  118 => 102,  101 => 87,  92 => 80,  86 => 78,  84 => 77,  77 => 72,  71 => 70,  69 => 69,  61 => 63,  59 => 62,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupal8_parallax_theme-8.x-1.8/drupal8_parallax_theme/templates/layout/page.html.twig", "/var/www/html/testdrupal/themes/drupal8_parallax_theme-8.x-1.8/drupal8_parallax_theme/templates/layout/page.html.twig");
    }
}
