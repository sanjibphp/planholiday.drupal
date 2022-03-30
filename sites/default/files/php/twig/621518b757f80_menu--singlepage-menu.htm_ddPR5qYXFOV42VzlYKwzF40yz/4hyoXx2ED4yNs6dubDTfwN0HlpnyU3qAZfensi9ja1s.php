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

/* themes/custom/plan_holidays/templates/menu/menu--singlepage-menu.html.twig */
class __TwigTemplate_2a79c91ce08db79c1fbc525febb6c67fa6205e5cb15cbdacb1d2f46d017c003d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 18, "macro" => 26, "if" => 28, "for" => 34, "set" => 36];
        $filters = ["escape" => 30, "replace" => 50];
        $functions = ["link" => 47];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'replace'],
                ['link']
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
        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 29
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "nav", 2 => "navbar-nav", 3 => "ml-auto", 4 => "navbar-right", 5 => "main-menu"], "method")), "html", null, true);
                    echo " id=\"nav\">
    ";
                } else {
                    // line 32
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method")), "html", null, true);
                    echo ">
    ";
                }
                // line 34
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "      ";
                    // line 36
                    $context["item_classes"] = [0 => (($this->getAttribute(                    // line 37
$context["item"], "is_expanded", [])) ? ("expanded") : ("")), 1 => ((($this->getAttribute(                    // line 38
$context["item"], "is_expanded", []) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 39
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                    // line 42
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 43
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 44
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo " <span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 46
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo ">
        ";
                        // line 47
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "
      ";
                    }
                    // line 49
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 50
                        echo "        ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => "nav"], "method"), "addClass", [0 => twig_replace_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), " ", "-")], "method"), (($context["menu_level"] ?? null) + 1)));
                        echo "
      ";
                    }
                    // line 52
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/plan_holidays/templates/menu/menu--singlepage-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  148 => 52,  142 => 50,  139 => 49,  134 => 47,  129 => 46,  122 => 44,  117 => 43,  114 => 42,  112 => 39,  111 => 38,  110 => 37,  109 => 36,  107 => 35,  102 => 34,  96 => 32,  90 => 30,  87 => 29,  84 => 28,  81 => 27,  67 => 26,  60 => 24,  57 => 19,  55 => 18,);
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
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('menu', 'nav', 'navbar-nav',  'ml-auto', 'navbar-right', 'main-menu') }} id=\"nav\">
    {% else %}
      <ul{{ attributes.addClass('dropdown-menu') }}>
    {% endif %}
    {% for item in items %}
      {%
        set item_classes = [
          item.is_expanded? 'expanded',
          item.is_expanded and menu_level == 0 ? 'dropdown',
          item.in_active_trail ? 'active',
        ]
      %}
      {% if menu_level == 0 and item.is_expanded %}
        <li{{ item.attributes.addClass(item_classes) }}>
        <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\">{{ item.title }} <span class=\"caret\"></span></a>
      {% else %}
        <li{{ item.attributes.addClass(item_classes) }}>
        {{ link(item.title, item.url) }}
      {% endif %}
      {% if item.below %}
        {{ menus.menu_links(item.below, attributes.removeClass('nav').addClass(item.title | replace(' ', '-')), menu_level + 1) }}
      {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/custom/plan_holidays/templates/menu/menu--singlepage-menu.html.twig", "C:\\xampp\\htdocs\\planholidays.drupal\\themes\\custom\\plan_holidays\\templates\\menu\\menu--singlepage-menu.html.twig");
    }
}
