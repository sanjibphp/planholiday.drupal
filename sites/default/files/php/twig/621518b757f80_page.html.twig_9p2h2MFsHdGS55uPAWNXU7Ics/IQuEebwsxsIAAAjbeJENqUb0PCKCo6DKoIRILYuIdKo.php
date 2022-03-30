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

/* themes/custom/plan_holidays/templates/page.html.twig */
class __TwigTemplate_f57d8a07ec8b8e75a323f1e7afc2fe03134dc5e2d5f4a716cf994ca6a4654f4e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer_col_one' => [$this, 'block_footer_col_one'],
            'footer_col_two' => [$this, 'block_footer_col_two'],
            'footer_col_three' => [$this, 'block_footer_col_three'],
            'footer_col_four' => [$this, 'block_footer_col_four'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["escape" => 205, "clean_class" => 62, "t" => 77];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
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
        // line 97
        echo "
";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 203
        echo " 

<footer  class=\"footer ";
        // line 205
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
    <div class=\"container clearfix\">
        <div class=\"row\">        
            <div class=\"col-lg-3\">
              ";
        // line 209
        if ($this->getAttribute(($context["page"] ?? null), "footer_col_one", [])) {
            // line 210
            echo "                ";
            $this->displayBlock('footer_col_one', $context, $blocks);
            // line 213
            echo "              ";
        }
        // line 214
        echo "            </div>
            <div class=\"col-lg-3\">
              ";
        // line 216
        if ($this->getAttribute(($context["page"] ?? null), "footer_col_two", [])) {
            // line 217
            echo "                ";
            $this->displayBlock('footer_col_two', $context, $blocks);
            // line 220
            echo "              ";
        }
        // line 221
        echo "            </div>
            <div class=\"col-lg-3\">
              ";
        // line 223
        if ($this->getAttribute(($context["page"] ?? null), "footer_col_three", [])) {
            // line 224
            echo "                ";
            $this->displayBlock('footer_col_three', $context, $blocks);
            // line 227
            echo "              ";
        }
        // line 228
        echo "            </div>
            <div class=\"col-lg-3\">
              ";
        // line 230
        if ($this->getAttribute(($context["page"] ?? null), "footer_col_four", [])) {
            // line 231
            echo "                ";
            $this->displayBlock('footer_col_four', $context, $blocks);
            // line 234
            echo "              ";
        }
        // line 235
        echo "            </div>
        </div>
    </div>

    <div class=\"clearfix footer-bottom\">
      <div class=\"col-lg-12 \">  ";
        // line 240
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
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 83
        echo "      </div>

      ";
        // line 86
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 87
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 91
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 92
            echo "        </div>
      ";
        }
        // line 94
        echo "    </header>
  ";
    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        // line 100
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content inner-pages\">
    <div class=\"row\">

      ";
        // line 104
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 105
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 110
            echo "      ";
        }
        echo " 

      ";
        // line 113
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_basic_page_banner", []), 0, [], "array"), "entity", []), "uri", []), "value", [])) {
            echo " 
          <section class=\"col-sm-12 \" >
            ";
            // line 116
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "basic_page_banner", "#uri" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 119
($context["node"] ?? null), "field_basic_page_banner", []), 0, [], "array"), "entity", []), "uri", []), "value", []), "#alt" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 120
($context["node"] ?? null), "field_basic_page_banner", []), 0, [], "array"), "alt", []), "#attributes" => ["class" => "responsive"]];
            // line 124
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null)), "html", null, true);
            echo "
          </section>
        
      ";
        }
        // line 128
        echo "
      
      ";
        // line 131
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_banner", []), 0, [], "array"), "entity", []), "uri", []), "value", [])) {
            // line 132
            echo "       
          <section class=\"col-sm-12 \" >
            ";
            // line 135
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "basic_page_banner", "#uri" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 138
($context["node"] ?? null), "field_package_banner", []), 0, [], "array"), "entity", []), "uri", []), "value", []), "#alt" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 139
($context["node"] ?? null), "field_package_banner", []), 0, [], "array"), "alt", []), "#attributes" => ["class" => "responsive"]];
            // line 143
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null)), "html", null, true);
            echo "
          </section>
        
      ";
        }
        // line 146
        echo " 

      ";
        // line 149
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 150
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 155
            echo "      ";
        }
        // line 156
        echo "
      ";
        // line 158
        echo "      ";
        // line 159
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 160
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 161
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 162
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 163
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 166
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 169
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 170
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 173
            echo "        ";
        }
        // line 174
        echo "
        ";
        // line 176
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 177
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 180
            echo "        ";
        }
        // line 181
        echo "
        ";
        // line 183
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 191
        echo "      </section>

      ";
        // line 194
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 195
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 200
            echo "      ";
        }
        // line 201
        echo "    </div>
  </div>
";
    }

    // line 105
    public function block_header($context, array $blocks = [])
    {
        // line 106
        echo "          <section class=\"col-sm-12 section\" role=\"heading\">
            ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </section>
        ";
    }

    // line 150
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 151
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 170
    public function block_highlighted($context, array $blocks = [])
    {
        // line 171
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 177
    public function block_help($context, array $blocks = [])
    {
        // line 178
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 183
    public function block_content($context, array $blocks = [])
    {
        // line 184
        echo "        <section class=\"col-sm-12 section\" id=\"main-section\">       
      <div class=\"clearfix container\">
          <a id=\"main-content\"></a>
          ";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>
          </section>
        ";
    }

    // line 195
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 196
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 197
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 210
    public function block_footer_col_one($context, array $blocks = [])
    {
        // line 211
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_one", [])), "html", null, true);
        echo "
                ";
    }

    // line 217
    public function block_footer_col_two($context, array $blocks = [])
    {
        // line 218
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_two", [])), "html", null, true);
        echo "
                ";
    }

    // line 224
    public function block_footer_col_three($context, array $blocks = [])
    {
        // line 225
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_three", [])), "html", null, true);
        echo "
                ";
    }

    // line 231
    public function block_footer_col_four($context, array $blocks = [])
    {
        // line 232
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_four", [])), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "themes/custom/plan_holidays/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 232,  472 => 231,  465 => 225,  462 => 224,  455 => 218,  452 => 217,  445 => 211,  442 => 210,  435 => 197,  432 => 196,  429 => 195,  421 => 187,  416 => 184,  413 => 183,  406 => 178,  403 => 177,  396 => 171,  393 => 170,  386 => 152,  383 => 151,  380 => 150,  373 => 107,  370 => 106,  367 => 105,  361 => 201,  358 => 200,  355 => 195,  352 => 194,  348 => 191,  345 => 183,  342 => 181,  339 => 180,  336 => 177,  333 => 176,  330 => 174,  327 => 173,  324 => 170,  321 => 169,  315 => 166,  313 => 163,  312 => 162,  311 => 161,  310 => 160,  309 => 159,  307 => 158,  304 => 156,  301 => 155,  298 => 150,  295 => 149,  291 => 146,  283 => 143,  281 => 139,  280 => 138,  279 => 135,  275 => 132,  272 => 131,  268 => 128,  260 => 124,  258 => 120,  257 => 119,  256 => 116,  250 => 113,  244 => 110,  241 => 105,  238 => 104,  231 => 100,  228 => 99,  223 => 94,  219 => 92,  216 => 91,  210 => 88,  207 => 87,  204 => 86,  200 => 83,  191 => 77,  188 => 76,  185 => 75,  181 => 73,  175 => 70,  172 => 69,  166 => 67,  164 => 66,  159 => 65,  157 => 62,  156 => 61,  155 => 59,  153 => 58,  150 => 57,  142 => 240,  135 => 235,  132 => 234,  129 => 231,  127 => 230,  123 => 228,  120 => 227,  117 => 224,  115 => 223,  111 => 221,  108 => 220,  105 => 217,  103 => 216,  99 => 214,  96 => 213,  93 => 210,  91 => 209,  84 => 205,  80 => 203,  78 => 99,  75 => 97,  71 => 57,  69 => 56,  67 => 54,);
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
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
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
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content inner-pages\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <section class=\"col-sm-12 section\" role=\"heading\">
            {{ page.header }}
          </section>
        {% endblock %}
      {% endif %} 

      {# Page Banner #}
      {% if node.field_basic_page_banner[0].entity.uri.value %} 
          <section class=\"col-sm-12 \" >
            {% 
              set imagestyle = {
                '#theme':      'image_style',
                '#style_name': 'basic_page_banner',
                '#uri':        node.field_basic_page_banner[0].entity.uri.value,
                '#alt':        node.field_basic_page_banner[0].alt,
                '#attributes': { class: 'responsive' },
              } 
            %}
            {{ imagestyle }}
          </section>
        
      {% endif %}

      
      {# Tour Page Banner #}
      {% if node.field_package_banner[0].entity.uri.value %}
       
          <section class=\"col-sm-12 \" >
            {% 
              set imagestyle = {
                '#theme':      'image_style',
                '#style_name': 'basic_page_banner',
                '#uri':        node.field_package_banner[0].entity.uri.value,
                '#alt':        node.field_package_banner[0].alt,
                '#attributes': { class: 'responsive' },
              } 
            %}
            {{ imagestyle }}
          </section>
        
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
      <div class=\"clearfix container\">
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
            <div class=\"col-lg-3\">
              {% if page.footer_col_one %}
                {% block footer_col_one %}
                  {{ page.footer_col_one}}
                {% endblock %}
              {% endif %}
            </div>
            <div class=\"col-lg-3\">
              {% if page.footer_col_two %}
                {% block footer_col_two %}
                  {{ page.footer_col_two}}
                {% endblock %}
              {% endif %}
            </div>
            <div class=\"col-lg-3\">
              {% if page.footer_col_three %}
                {% block footer_col_three %}
                  {{ page.footer_col_three}}
                {% endblock %}
              {% endif %}
            </div>
            <div class=\"col-lg-3\">
              {% if page.footer_col_four %}
                {% block footer_col_four %}
                  {{ page.footer_col_four}}
                {% endblock %}
              {% endif %}
            </div>
        </div>
    </div>

    <div class=\"clearfix footer-bottom\">
      <div class=\"col-lg-12 \">  {{ page.footer}} </div>
    </div>
</footer>
", "themes/custom/plan_holidays/templates/page.html.twig", "C:\\xampp\\htdocs\\planholidays.drupal\\themes\\custom\\plan_holidays\\templates\\page.html.twig");
    }
}
