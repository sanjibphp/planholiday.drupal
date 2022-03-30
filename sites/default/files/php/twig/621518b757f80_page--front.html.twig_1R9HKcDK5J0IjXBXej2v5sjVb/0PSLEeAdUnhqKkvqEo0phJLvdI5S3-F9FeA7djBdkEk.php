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

/* themes/custom/plan_holidays/templates/page--front.html.twig */
class __TwigTemplate_94c23b5e69c6356bafe2933adef3b7d23e6247b56f530f8293c6865fb5dc691c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'homepage_section1' => [$this, 'block_homepage_section1'],
            'homepage_section2' => [$this, 'block_homepage_section2'],
            'homepage_section2_left' => [$this, 'block_homepage_section2_left'],
            'homepage_section2_right' => [$this, 'block_homepage_section2_right'],
            'homepage_section2_bottom_left' => [$this, 'block_homepage_section2_bottom_left'],
            'homepage_section2_bottom_right' => [$this, 'block_homepage_section2_bottom_right'],
            'homepage_section3' => [$this, 'block_homepage_section3'],
            'homepage_section4' => [$this, 'block_homepage_section4'],
            'homepage_section5' => [$this, 'block_homepage_section5'],
            'homepage_section6_left' => [$this, 'block_homepage_section6_left'],
            'homepage_section6_right' => [$this, 'block_homepage_section6_right'],
            'homepage_section6' => [$this, 'block_homepage_section6'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer_col_one' => [$this, 'block_footer_col_one'],
            'footer_col_two' => [$this, 'block_footer_col_two'],
            'footer_col_three' => [$this, 'block_footer_col_three'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["escape" => 347, "clean_class" => 62];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class'],
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 99
        echo "
";
        // line 101
        $this->displayBlock('main', $context, $blocks);
        // line 345
        echo " 

<footer  class=\"footer ";
        // line 347
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
    <div class=\"container clearfix\">
        <div class=\"row\">        
            <div class=\"col-lg-4\">
              ";
        // line 351
        if ($this->getAttribute(($context["page"] ?? null), "footer_col_one", [])) {
            // line 352
            echo "                ";
            $this->displayBlock('footer_col_one', $context, $blocks);
            // line 355
            echo "              ";
        }
        // line 356
        echo "            </div>
            <div class=\"col-lg-4\">
              ";
        // line 358
        if ($this->getAttribute(($context["page"] ?? null), "footer_col_two", [])) {
            // line 359
            echo "                ";
            $this->displayBlock('footer_col_two', $context, $blocks);
            // line 362
            echo "              ";
        }
        // line 363
        echo "            </div>
            <div class=\"col-lg-4\">
              ";
        // line 365
        if ($this->getAttribute(($context["page"] ?? null), "footer_col_three", [])) {
            // line 366
            echo "                ";
            $this->displayBlock('footer_col_three', $context, $blocks);
            // line 369
            echo "              ";
        }
        // line 370
        echo "            </div>
            ";
        // line 378
        echo "        </div>
    </div>

    <div class=\"clearfix footer-bottom\">
      <div class=\"col-lg-12 \">  ";
        // line 382
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo " </div>
    </div>
</footer>
";
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "      <div id=\"logo\">
         ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "site_branding", [])), "html", null, true);
        echo "
      </div>
      <div class=\"navbar-header pull-right\">
        ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 75
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 76
            echo "          ";
            // line 82
            echo "          <button id=\"nav-button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\"> <span class=\"nav-bar\"></span> <span class=\"nav-bar\"></span> <span class=\"nav-bar\"></span>
          </button>
        ";
        }
        // line 85
        echo "      </div>

      ";
        // line 88
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 89
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 93
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 94
            echo "        </div>
      ";
        }
        // line 96
        echo "    </header>
  ";
    }

    // line 101
    public function block_main($context, array $blocks = [])
    {
        // line 102
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 106
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 107
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 112
            echo "      ";
        }
        // line 113
        echo "
    ";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_basic_page_banner", []), "value", [])), "html", null, true);
        echo "
      ";
        // line 116
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section1", [])) {
            // line 117
            echo "        ";
            $this->displayBlock('homepage_section1', $context, $blocks);
            // line 126
            echo "      ";
        }
        // line 127
        echo "
      ";
        // line 129
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section2", [])) {
            // line 130
            echo "        ";
            $this->displayBlock('homepage_section2', $context, $blocks);
            // line 180
            echo "      ";
        }
        // line 181
        echo "



      ";
        // line 186
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section3", [])) {
            // line 187
            echo "        ";
            $this->displayBlock('homepage_section3', $context, $blocks);
            // line 198
            echo "      ";
        }
        // line 199
        echo "

      ";
        // line 202
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section4", [])) {
            // line 203
            echo "        ";
            $this->displayBlock('homepage_section4', $context, $blocks);
            // line 222
            echo "      ";
        }
        // line 223
        echo "

      ";
        // line 226
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section5", [])) {
            // line 227
            echo "        ";
            $this->displayBlock('homepage_section5', $context, $blocks);
            // line 242
            echo "      ";
        }
        // line 243
        echo "
    ";
        // line 244
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section6_left", [])) {
            // line 245
            echo "    <section class=\"col-sm-12 section\" id=\"section6\">       
      <div class=\"container clearfix\">
      \t
\t\t\t  <div id=\"ancor6\"></div>       
        <div class=\"nautical-6\"></div>
                <div class=\"col-lg-12 centered header-wrapper\">
                    <h2>Contact Us</h2>
                    <p class=\"large\">If you have any questions, feedback or would like to book a trip, please contact
                        us.
                        We'll get back to you asap!</p>
                </div>
        
\t\t\t    
        <div class=\"col-lg-12\">
\t\t\t    ";
            // line 259
            if ($this->getAttribute(($context["page"] ?? null), "homepage_section6_left", [])) {
                // line 260
                echo "\t\t\t      ";
                $this->displayBlock('homepage_section6_left', $context, $blocks);
                // line 265
                echo "\t\t\t    ";
            }
            // line 266
            echo "        
\t\t\t    ";
            // line 267
            if ($this->getAttribute(($context["page"] ?? null), "homepage_section6_right", [])) {
                // line 268
                echo "\t\t\t      ";
                $this->displayBlock('homepage_section6_right', $context, $blocks);
                // line 273
                echo "\t\t\t    ";
            }
            // line 274
            echo "\t\t    </div>
\t    </div>
    </section>
    ";
        }
        // line 278
        echo "
    ";
        // line 279
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section6", [])) {
            // line 280
            echo "        ";
            $this->displayBlock('homepage_section6', $context, $blocks);
            // line 288
            echo "        ";
        }
        // line 289
        echo "     
      ";
        // line 291
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 292
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 297
            echo "      ";
        }
        // line 298
        echo "
      ";
        // line 300
        echo "      ";
        // line 301
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 302
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 303
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 304
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 305
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 308
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 311
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 312
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 315
            echo "        ";
        }
        // line 316
        echo "
        ";
        // line 318
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 319
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 322
            echo "        ";
        }
        // line 323
        echo "
        ";
        // line 325
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 333
        echo "      </section>

      ";
        // line 336
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 337
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 342
            echo "      ";
        }
        // line 343
        echo "    </div>
  </div>
";
    }

    // line 107
    public function block_header($context, array $blocks = [])
    {
        // line 108
        echo "          <section class=\"col-sm-12 section\" role=\"heading\">
            ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </section>
        ";
    }

    // line 117
    public function block_homepage_section1($context, array $blocks = [])
    {
        // line 118
        echo "          <section class=\"col-sm-12 section\" id=\"section1\">
            <div id=\"bx-wrapper\" class=\"bx-wrapper\">
            
              ";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section1", [])), "html", null, true);
        echo "
             
            </div>
          </section>
        ";
    }

    // line 130
    public function block_homepage_section2($context, array $blocks = [])
    {
        // line 131
        echo "          <section class=\"col-sm-12 section white-bg\" id=\"section2\" >
            <div class=\"container clearfix\">
              <div class=\"nautical-1\"></div>
              <div class=\"col-lg-12 centered header-wrapper\">
                ";
        // line 135
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section2", [])), "html", null, true);
        echo "
                <div class=\"with-bg\">
                  <div class=\"margin-wrapper\">
                    ";
        // line 138
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section2_left", [])) {
            // line 139
            echo "                      ";
            $this->displayBlock('homepage_section2_left', $context, $blocks);
            // line 144
            echo "                    ";
        }
        // line 145
        echo "                    ";
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section2_right", [])) {
            // line 146
            echo "                      ";
            $this->displayBlock('homepage_section2_right', $context, $blocks);
            // line 151
            echo "                    ";
        }
        // line 152
        echo "                  </div>
                </div>
                <section class=\"col-sm-12\">
                ";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section2_bottom", [])), "html", null, true);
        echo "
                </section>

                <div class=\"with-bg\">
                  <div class=\"margin-wrapper\">
                    ";
        // line 160
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section2_bottom_left", [])) {
            // line 161
            echo "                      ";
            $this->displayBlock('homepage_section2_bottom_left', $context, $blocks);
            // line 166
            echo "                    ";
        }
        // line 167
        echo "                    ";
        if ($this->getAttribute(($context["page"] ?? null), "homepage_section2_bottom_right", [])) {
            // line 168
            echo "                      ";
            $this->displayBlock('homepage_section2_bottom_right', $context, $blocks);
            // line 173
            echo "                    ";
        }
        // line 174
        echo "                  </div>
                </div>
              </div>                 
            </div>            
          </section>
        ";
    }

    // line 139
    public function block_homepage_section2_left($context, array $blocks = [])
    {
        // line 140
        echo "                        <section class=\"col-sm-12 col-md-6\">
                          ";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section2_left", [])), "html", null, true);
        echo "
                        </section>          
                      ";
    }

    // line 146
    public function block_homepage_section2_right($context, array $blocks = [])
    {
        // line 147
        echo "                        <section class=\"col-sm-12 col-md-6\">
                          ";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section2_right", [])), "html", null, true);
        echo "
                        </section>          
                      ";
    }

    // line 161
    public function block_homepage_section2_bottom_left($context, array $blocks = [])
    {
        // line 162
        echo "                        <section class=\"col-sm-12 col-md-6\">
                          ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section2_bottom_left", [])), "html", null, true);
        echo "
                        </section>          
                      ";
    }

    // line 168
    public function block_homepage_section2_bottom_right($context, array $blocks = [])
    {
        // line 169
        echo "                        <section class=\"col-sm-12 col-md-6\">
                          ";
        // line 170
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section2_bottom_right", [])), "html", null, true);
        echo "
                        </section>          
                      ";
    }

    // line 187
    public function block_homepage_section3($context, array $blocks = [])
    {
        // line 188
        echo "          <section class=\"col-sm-12 section\" id=\"section3\">
            <div id=\"ancor4\"></div>
            <div class=\"container clearfix\">
                <div class=\"nautical-3\"></div>
                <div class=\"col-lg-12 centered header-wrapper\">
                ";
        // line 193
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section3", [])), "html", null, true);
        echo "
                </div>
            </div>
          </section>
        ";
    }

    // line 203
    public function block_homepage_section4($context, array $blocks = [])
    {
        echo " 
        <section class=\"col-sm-12  section white-bg\" id=\"section4\">
            <div id=\"ancor3\"></div>
            <div class=\"container clearfix\">
                <div class=\"nautical-2\"></div>
                <div class=\"col-lg-12 centered header-wrapper no-plarge\">
                    <h2>Testimonials</h2>
                </div>
            </div>         
        </section>
          <section class=\"col-sm-12 section with-bg bg-image-1 parallax parallax2\" >
            <div class=\"overlay\"></div>
            <div class=\"container clearfix centered\">
              <div class=\"col-lg-12 centered\"> 
                ";
        // line 217
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section4", [])), "html", null, true);
        echo "
              </div>
            </div> 
          </section>
        ";
    }

    // line 227
    public function block_homepage_section5($context, array $blocks = [])
    {
        // line 228
        echo "          <section class=\"col-sm-12 section\" id=\"section5\">
            <div id=\"ancor5\"></div>
            <div class=\"container clearfix\">
              <div class=\"nautical-5\"></div>
              <div class=\"col-lg-12 centered header-wrapper\">
                <div class=\"container clearfix\">
                  <div id=\"container\">
                    ";
        // line 235
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section5", [])), "html", null, true);
        echo "
                  </div>
                </div>
              </div>
            </div>
          </section>
        ";
    }

    // line 260
    public function block_homepage_section6_left($context, array $blocks = [])
    {
        // line 261
        echo "\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        ";
        // line 262
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section6_left", [])), "html", null, true);
        echo "
\t\t\t\t      </div>          
\t\t\t      ";
    }

    // line 268
    public function block_homepage_section6_right($context, array $blocks = [])
    {
        // line 269
        echo "\t\t\t\t      <div class=\"col-lg-6 address-box\">
\t\t\t\t        ";
        // line 270
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section6_right", [])), "html", null, true);
        echo "
\t\t\t\t      </div>          
\t\t\t      ";
    }

    // line 280
    public function block_homepage_section6($context, array $blocks = [])
    {
        echo " 
    <section class=\"col-sm-12 section\" id=\"map-section\">
        <div id=\"map\">
          ";
        // line 283
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepage_section6", [])), "html", null, true);
        echo "
        </div>
        <div class=\"overlay contact-map-overlay\"></div>
    </section>
    ";
    }

    // line 292
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 293
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 294
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 312
    public function block_highlighted($context, array $blocks = [])
    {
        // line 313
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 319
    public function block_help($context, array $blocks = [])
    {
        // line 320
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 325
    public function block_content($context, array $blocks = [])
    {
        // line 326
        echo "        <section class=\"col-sm-12 section\" id=\"main-section\">       
      <div class=\"clearfix\">
          <a id=\"main-content\"></a>
          ";
        // line 329
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>
          </section>
        ";
    }

    // line 337
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 338
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 339
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 352
    public function block_footer_col_one($context, array $blocks = [])
    {
        // line 353
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_one", [])), "html", null, true);
        echo "
                ";
    }

    // line 359
    public function block_footer_col_two($context, array $blocks = [])
    {
        // line 360
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_two", [])), "html", null, true);
        echo "
                ";
    }

    // line 366
    public function block_footer_col_three($context, array $blocks = [])
    {
        // line 367
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_three", [])), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "themes/custom/plan_holidays/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 367,  790 => 366,  783 => 360,  780 => 359,  773 => 353,  770 => 352,  763 => 339,  760 => 338,  757 => 337,  749 => 329,  744 => 326,  741 => 325,  734 => 320,  731 => 319,  724 => 313,  721 => 312,  714 => 294,  711 => 293,  708 => 292,  699 => 283,  692 => 280,  685 => 270,  682 => 269,  679 => 268,  672 => 262,  669 => 261,  666 => 260,  655 => 235,  646 => 228,  643 => 227,  634 => 217,  616 => 203,  607 => 193,  600 => 188,  597 => 187,  590 => 170,  587 => 169,  584 => 168,  577 => 163,  574 => 162,  571 => 161,  564 => 148,  561 => 147,  558 => 146,  551 => 141,  548 => 140,  545 => 139,  536 => 174,  533 => 173,  530 => 168,  527 => 167,  524 => 166,  521 => 161,  519 => 160,  511 => 155,  506 => 152,  503 => 151,  500 => 146,  497 => 145,  494 => 144,  491 => 139,  489 => 138,  483 => 135,  477 => 131,  474 => 130,  465 => 121,  460 => 118,  457 => 117,  450 => 109,  447 => 108,  444 => 107,  438 => 343,  435 => 342,  432 => 337,  429 => 336,  425 => 333,  422 => 325,  419 => 323,  416 => 322,  413 => 319,  410 => 318,  407 => 316,  404 => 315,  401 => 312,  398 => 311,  392 => 308,  390 => 305,  389 => 304,  388 => 303,  387 => 302,  386 => 301,  384 => 300,  381 => 298,  378 => 297,  375 => 292,  372 => 291,  369 => 289,  366 => 288,  363 => 280,  361 => 279,  358 => 278,  352 => 274,  349 => 273,  346 => 268,  344 => 267,  341 => 266,  338 => 265,  335 => 260,  333 => 259,  317 => 245,  315 => 244,  312 => 243,  309 => 242,  306 => 227,  303 => 226,  299 => 223,  296 => 222,  293 => 203,  290 => 202,  286 => 199,  283 => 198,  280 => 187,  277 => 186,  271 => 181,  268 => 180,  265 => 130,  262 => 129,  259 => 127,  256 => 126,  253 => 117,  250 => 116,  246 => 114,  243 => 113,  240 => 112,  237 => 107,  234 => 106,  227 => 102,  224 => 101,  219 => 96,  215 => 94,  212 => 93,  206 => 90,  203 => 89,  200 => 88,  196 => 85,  191 => 82,  189 => 76,  186 => 75,  182 => 73,  176 => 70,  173 => 69,  167 => 67,  165 => 66,  160 => 65,  158 => 62,  157 => 61,  156 => 59,  154 => 58,  151 => 57,  143 => 382,  137 => 378,  134 => 370,  131 => 369,  128 => 366,  126 => 365,  122 => 363,  119 => 362,  116 => 359,  114 => 358,  110 => 356,  107 => 355,  104 => 352,  102 => 351,  95 => 347,  91 => 345,  89 => 101,  86 => 99,  82 => 57,  80 => 56,  78 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div id=\"logo\">
         {{ page.site_branding }}
      </div>
      <div class=\"navbar-header pull-right\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          {# <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button> #}
          <button id=\"nav-button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\"> <span class=\"nav-bar\"></span> <span class=\"nav-bar\"></span> <span class=\"nav-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <section class=\"col-sm-12 section\" role=\"heading\">
            {{ page.header }}
          </section>
        {% endblock %}
      {% endif %}

    {{ node.field_basic_page_banner.value }}
      {# section1 #}
      {% if page.homepage_section1 %}
        {% block homepage_section1 %}
          <section class=\"col-sm-12 section\" id=\"section1\">
            <div id=\"bx-wrapper\" class=\"bx-wrapper\">
            
              {{ page.homepage_section1 }}
             
            </div>
          </section>
        {% endblock %}
      {% endif %}

      {# section2 #}
      {% if page.homepage_section2 %}
        {% block homepage_section2 %}
          <section class=\"col-sm-12 section white-bg\" id=\"section2\" >
            <div class=\"container clearfix\">
              <div class=\"nautical-1\"></div>
              <div class=\"col-lg-12 centered header-wrapper\">
                {{ page.homepage_section2 }}
                <div class=\"with-bg\">
                  <div class=\"margin-wrapper\">
                    {% if page.homepage_section2_left %}
                      {% block homepage_section2_left %}
                        <section class=\"col-sm-12 col-md-6\">
                          {{ page.homepage_section2_left }}
                        </section>          
                      {% endblock %}
                    {% endif %}
                    {% if page.homepage_section2_right %}
                      {% block homepage_section2_right %}
                        <section class=\"col-sm-12 col-md-6\">
                          {{ page.homepage_section2_right }}
                        </section>          
                      {% endblock %}
                    {% endif %}
                  </div>
                </div>
                <section class=\"col-sm-12\">
                {{ page.homepage_section2_bottom }}
                </section>

                <div class=\"with-bg\">
                  <div class=\"margin-wrapper\">
                    {% if page.homepage_section2_bottom_left %}
                      {% block homepage_section2_bottom_left %}
                        <section class=\"col-sm-12 col-md-6\">
                          {{ page.homepage_section2_bottom_left }}
                        </section>          
                      {% endblock %}
                    {% endif %}
                    {% if page.homepage_section2_bottom_right %}
                      {% block homepage_section2_bottom_right %}
                        <section class=\"col-sm-12 col-md-6\">
                          {{ page.homepage_section2_bottom_right }}
                        </section>          
                      {% endblock %}
                    {% endif %}
                  </div>
                </div>
              </div>                 
            </div>            
          </section>
        {% endblock %}
      {% endif %}




      {# section3 #}
      {% if page.homepage_section3 %}
        {% block homepage_section3 %}
          <section class=\"col-sm-12 section\" id=\"section3\">
            <div id=\"ancor4\"></div>
            <div class=\"container clearfix\">
                <div class=\"nautical-3\"></div>
                <div class=\"col-lg-12 centered header-wrapper\">
                {{ page.homepage_section3 }}
                </div>
            </div>
          </section>
        {% endblock %}
      {% endif %}


      {# section4 #}
      {% if page.homepage_section4 %}
        {% block homepage_section4 %} 
        <section class=\"col-sm-12  section white-bg\" id=\"section4\">
            <div id=\"ancor3\"></div>
            <div class=\"container clearfix\">
                <div class=\"nautical-2\"></div>
                <div class=\"col-lg-12 centered header-wrapper no-plarge\">
                    <h2>Testimonials</h2>
                </div>
            </div>         
        </section>
          <section class=\"col-sm-12 section with-bg bg-image-1 parallax parallax2\" >
            <div class=\"overlay\"></div>
            <div class=\"container clearfix centered\">
              <div class=\"col-lg-12 centered\"> 
                {{ page.homepage_section4 }}
              </div>
            </div> 
          </section>
        {% endblock %}
      {% endif %}


      {# section5 #}
      {% if page.homepage_section5 %}
        {% block homepage_section5 %}
          <section class=\"col-sm-12 section\" id=\"section5\">
            <div id=\"ancor5\"></div>
            <div class=\"container clearfix\">
              <div class=\"nautical-5\"></div>
              <div class=\"col-lg-12 centered header-wrapper\">
                <div class=\"container clearfix\">
                  <div id=\"container\">
                    {{ page.homepage_section5 }}
                  </div>
                </div>
              </div>
            </div>
          </section>
        {% endblock %}
      {% endif %}

    {% if page.homepage_section6_left %}
    <section class=\"col-sm-12 section\" id=\"section6\">       
      <div class=\"container clearfix\">
      \t
\t\t\t  <div id=\"ancor6\"></div>       
        <div class=\"nautical-6\"></div>
                <div class=\"col-lg-12 centered header-wrapper\">
                    <h2>Contact Us</h2>
                    <p class=\"large\">If you have any questions, feedback or would like to book a trip, please contact
                        us.
                        We'll get back to you asap!</p>
                </div>
        
\t\t\t    
        <div class=\"col-lg-12\">
\t\t\t    {% if page.homepage_section6_left %}
\t\t\t      {% block homepage_section6_left %}
\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        {{ page.homepage_section6_left }}
\t\t\t\t      </div>          
\t\t\t      {% endblock %}
\t\t\t    {% endif %}
        
\t\t\t    {% if page.homepage_section6_right %}
\t\t\t      {% block homepage_section6_right %}
\t\t\t\t      <div class=\"col-lg-6 address-box\">
\t\t\t\t        {{ page.homepage_section6_right }}
\t\t\t\t      </div>          
\t\t\t      {% endblock %}
\t\t\t    {% endif %}
\t\t    </div>
\t    </div>
    </section>
    {% endif %}

    {% if page.homepage_section6 %}
        {% block homepage_section6 %} 
    <section class=\"col-sm-12 section\" id=\"map-section\">
        <div id=\"map\">
          {{ page.homepage_section6 }}
        </div>
        <div class=\"overlay contact-map-overlay\"></div>
    </section>
    {% endblock %}
        {% endif %}
     
      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
        <section class=\"col-sm-12 section\" id=\"main-section\">       
      <div class=\"clearfix\">
          <a id=\"main-content\"></a>
          {{ page.content }}
          </div>
          </section>
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %} 

<footer  class=\"footer {{ container }}\" role=\"contentinfo\">
    <div class=\"container clearfix\">
        <div class=\"row\">        
            <div class=\"col-lg-4\">
              {% if page.footer_col_one %}
                {% block footer_col_one %}
                  {{ page.footer_col_one}}
                {% endblock %}
              {% endif %}
            </div>
            <div class=\"col-lg-4\">
              {% if page.footer_col_two %}
                {% block footer_col_two %}
                  {{ page.footer_col_two}}
                {% endblock %}
              {% endif %}
            </div>
            <div class=\"col-lg-4\">
              {% if page.footer_col_three %}
                {% block footer_col_three %}
                  {{ page.footer_col_three}}
                {% endblock %}
              {% endif %}
            </div>
            {# <div class=\"col-lg-3\">
              {% if page.footer_col_four %}
                {% block footer_col_four %}
                  {{ page.footer_col_four}}
                {% endblock %}
              {% endif %}
            </div> #}
        </div>
    </div>

    <div class=\"clearfix footer-bottom\">
      <div class=\"col-lg-12 \">  {{ page.footer}} </div>
    </div>
</footer>
", "themes/custom/plan_holidays/templates/page--front.html.twig", "C:\\xampp\\htdocs\\planholidays.drupal\\themes\\custom\\plan_holidays\\templates\\page--front.html.twig");
    }
}
