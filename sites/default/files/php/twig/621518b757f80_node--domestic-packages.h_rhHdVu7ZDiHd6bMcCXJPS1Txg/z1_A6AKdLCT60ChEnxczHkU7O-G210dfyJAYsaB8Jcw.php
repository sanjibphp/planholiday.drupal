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

/* themes/custom/plan_holidays/templates/node/node--domestic-packages.html.twig */
class __TwigTemplate_e27b59a64cc60b0f53c0c6b9ddb93887e34f59e6828a2cf1b941be835b1440a0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 69, "if" => 81, "trans" => 92];
        $filters = ["clean_class" => 70, "escape" => 78, "raw" => 116];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'raw'],
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
        // line 69
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 70
($context["node"] ?? null), "bundle", []))), 1 => (($this->getAttribute(        // line 71
($context["node"] ?? null), "isPromoted", [], "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isSticky", [], "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 73
($context["node"] ?? null), "isPublished", [], "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 74
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)))) : ("")), 5 => "clearfix"];
        // line 78
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 81
        if ( !($context["page"] ?? null)) {
            // line 82
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">
      <a href=\"";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 86
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 88
        if (($context["display_submitted"] ?? null)) {
            // line 89
            echo "    <footer>
      ";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
      <div";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "author"], "method")), "html", null, true);
            echo ">
        ";
            // line 92
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 93
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 97
        echo "
  <div";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method")), "html", null, true);
        echo "> 
    ";
        // line 103
        echo "
    
    ";
        // line 106
        echo "    <div class=\"package_details_banner\">
      ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_package_banner", []), 0, [])), "html", null, true);
        echo "
      ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_type", []), 0, []), "entity", []), "name", []), "value", [])), "html", null, true);
        echo "
    </div>
    <div class=\"container clearfix\">
    <div class=\"ootb-tabcordion\">
      <div class=\"ootb-tabcordion--tabs\" role=\"tablist\" aria-label=\"TabCordion\">
        <button class=\"tab is-active\" role=\"tab\" aria-selected=\"true\" aria-controls=\"tab1-tab\" id=\"tab1\">Overview</button>
        <button class=\"tab\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab2-tab\" id=\"tab2\" tabindex=\"-1\">Programme</button>
        <button class=\"tab\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab3-tab\" id=\"tab3\" tabindex=\"-1\">
          ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_type", []), 0, []), "value", [])) == "Luxury Train")) ? ("Schedule") : ("Hotels")));
        echo "
        </button>
        <button class=\"tab\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab4-tab\" id=\"tab4\" tabindex=\"-1\">Send Query</button>
      </div>
      <section id=\"tab1-tab\" class=\"ootb-tabcordion--entry is-active\" data-title=\"Overview\" tabindex=\"0\" role=\"tabpanel\" aria-labelledby=\"tab1\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              ";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", []), 0, []), "value", [])));
        echo "
              ";
        // line 124
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_inclusions", []), 0, []), "value", [])) {
            // line 125
            echo "              <div class=\"package-inclusions\">
                <h6>";
            // line 126
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_inclusions", []), "fieldDefinition", []), "label", [])), "html", null, true);
            echo "</h6>
                  ";
            // line 127
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_inclusions", []), 0, []), "value", [])));
            echo "
              </div>
              ";
        }
        // line 130
        echo "              ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_exclusions", []), 0, []), "value", [])) {
            // line 131
            echo "              <div class=\"package-exclusions\">
                <h6>";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_exclusions", []), "fieldDefinition", []), "label", [])), "html", null, true);
            echo "</h6>
                ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_package_exclusions", []), 0, []), "value", [])));
            echo "
              </div>
              ";
        }
        // line 136
        echo "            </div>
        </div>
      </section>
      <section id=\"tab2-tab\" class=\"ootb-tabcordion--entry\" data-title=\"Programme\" tabindex=\"-1\" role=\"tabpanel\" aria-labelledby=\"tab2\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              ";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_programme", []), 0, []), "value", [])));
        echo "
            </div>
        </div>
      </section>
      <section id=\"tab3-tab\" class=\"ootb-tabcordion--entry\" data-title=\"Hotels\" tabindex=\"-1\" role=\"tabpanel\" aria-labelledby=\"tab3\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              ";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_hotels", []), 0, []), "value", [])));
        echo "
            </div>
        </div>
      </section>
      <section id=\"tab4-tab\" class=\"ootb-tabcordion--entry\" data-title=\"Send Query\" tabindex=\"-1\" role=\"tabpanel\" aria-labelledby=\"tab4\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              ";
        // line 157
        echo "              ";
        // line 158
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_enquiry_form", []), 0, [])), "html", null, true);
        echo "
            </div>
        </div>
      </section>
    </div>
    </div>


  </div>

</article>




<style>

    .package_details_banner img{
      width: 100%;
      padding: 0;
      margin: 0;
      border: 0;
    }
    .ootb-tabcordion {
    /*background: #fff;
    box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.2);*/
    
    padding: 1rem;
    margin: 1rem auto 4rem auto;
    border-radius: 3px;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--tabs {
    opacity: 1;
    height: auto;
    visibility: visible;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry {
    min-height: 0;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry::before {
    display: none;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry.is-active .ootb-tabcordion--entry-content {
    opacity: 1;
    transition: opacity 400ms ease-in-out;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry .ootb-tabcordion--entry-content {
    opacity: 0;
    transition: opacity 400ms ease-in-out;
    }
    .ootb-tabcordion--tabs {
    opacity: 0;
    height: 0;
    visibility: hidden;
    display: flex;
    flex-flow: wrap;
    margin: 0;
    list-style: none;
    padding: 0;
    }
    .ootb-tabcordion--tabs .tab {
    display: block;
    background: #444;
    color: #fff;
    padding: 1rem 3rem;
    border-radius: 3px;
    font-size: 16px;
    font-weight: 300;
    font-family: 'Roboto', sans-serif;
    margin: 0 15px 1px 0;
    border: none;
    border-right: 1px solid #fff;
    cursor: pointer;
    }
    .ootb-tabcordion--tabs .tab:hover, .ootb-tabcordion--tabs .tab:focus {
    background: #535353;
    outline: none;
    }
    .ootb-tabcordion--tabs .tab.is-active {
    background: #3bacff;
    }
    .ootb-tabcordion--tabs .tab.is-active:hover, .ootb-tabcordion--tabs .tab.is-active:focus {
    background: #1c9fff;
    }
    .ootb-tabcordion--entry {
    overflow: hidden;
    }
    .ootb-tabcordion--entry::before {
    position: relative;
    content: attr(data-title);
    cursor: pointer;
    z-index: 1;
    background: #444;
    color: #fff;
    padding: 0.5rem 1rem;
    display: block;
    border-radius: 3px;
    }
    .ootb-tabcordion--entry:hover, .ootb-tabcordion--entry:focus {
    outline: none;
    }
    .ootb-tabcordion--entry:hover::before, .ootb-tabcordion--entry:focus::before {
    background: #535353;
    }
    .ootb-tabcordion--entry.is-active .ootb-tabcordion--entry-content {
    margin-top: 0;
    height: auto;
    opacity: 1;
    transition: margin 400ms eas: attr(data-title);
    cursor: pointer;
    z-index: e-out -100ms;
    }
    .ootb-tabcordion--entry.is-active::before {
    background: #3bacff;
    }
    .ootb-tabcordion--entry.is-active:hover::before, .ootb-tabcordion--entry.is-active:focus::before {
    background: #1c9fff;
    }
    .ootb-tabcordion--entry-container {
    overflow: hidden;
    margin-bottom: 1px;
    }
    .ootb-tabcordion--entry-content {
    position: relative;
    margin-top: -100%;
    height: 0;
    opacity: 0;
    transition: margin 500ms ease-in;
    padding: 1rem;
    }
    .ootb-tabcordion--entry-content a.more {
    color: #444;
    }
    .ootb-tabcordion--entry-content a.more:hover {
    color: #3bacff;
    }
 </style>
 <script>
    (function () {
    'use strict';
    
    const keyboardSupport = function(container, hasTabs) {
    const tablist = container.querySelectorAll('[role=\"tablist\"]')[0];
    let tabs;
    let panels;
    
    const generateArrays = function() {
      panels = container.querySelectorAll('[role=\"tabpanel\"]');
      tabs = container.querySelectorAll('[role=\"tab\"]');
    };
    
    generateArrays();
    
    // For easy reference
    const keys = {
      end: 35,
      home: 36,
      left: 37,
      up: 38,
      right: 39,
      down: 40,
      delete: 46,
      enter: 13,
      space: 32
    };
    
    // Add or subtract depending on key pressed
    const direction = {
      37: -1,
      38: -1,
      39: 1,
      40: 1
    };
    
    // Deactivate all tabs and tab panels
    const deactivateTabs = function() {
      for (let t = 0; t < tabs.length; t++) {
        tabs[t].setAttribute('tabindex', '-1');
        tabs[t].setAttribute('aria-selected', 'false');
      }
    };
    
    // Activates any given tab panel
    const activateTab = function(tab, setFocus) {
      setFocus = setFocus || true;
      // Deactivate all other tabs
      deactivateTabs();
    
      // Remove tabindex attribute
      tab.removeAttribute('tabindex');
    
      // Set the tab as selected
      tab.setAttribute('aria-selected', 'true');
    
      // Set focus when required
      if (setFocus) {
        tab.focus();
      }
    };
    
    const triggerTabClick = function(e) {
      const clickedId = e.target.getAttribute('id');
      if(clickedId) {
        const clickedTab = container.querySelector('[aria-controls=\"' + clickedId + '\"]');
        clickedTab.click();
         document.getElementById(clickedId).scrollIntoView({
          behavior: 'smooth'
        });
      }
    };
    
    const accordionClickEventListener = function(event) {
      triggerTabClick(event);
    };
    
    // When a tab is clicked, activateTab is fired to activate it
    const clickEventListener = function(event) {
       const tab = event.target;
        activateTab(tab, false);
    };
    
    // Make a guess
    const focusFirstTab = function() {
      const target = hasTabs ? tabs : panels;
      target[0].focus();
    };
    
    // Make a guess
    const focusLastTab = function() {
      const target = hasTabs ? tabs : panels;
      target[target.length - 1].focus();
    };
    
    // Either focus the next, previous, first, or last tab
    // depending on key pressed
    const switchTabOnArrowPress = function(event) {
      const pressed = event.keyCode;
    
      if (direction[pressed]) {
        const target = event.target;
        const targetElems = hasTabs ? tabs : panels;
        if (target.index !== undefined) {
          if (targetElems[target.index + direction[pressed]]) {
            targetElems[target.index + direction[pressed]].focus();
          }
          else if (pressed === keys.left || pressed === keys.up) {
            focusLastTab();
          }
          else if (pressed === keys.right || pressed == keys.down) {
            focusFirstTab();
          }
        }
      }
    };
    
    // When a tablist's aria-orientation is set to vertical,
    // only up and down arrow should function.
    // In all other cases only left and right arrow function.
    const determineOrientation = function(event) {
      const key = event.keyCode;
      const vertical = tablist ? tablist.getAttribute('aria-orientation') === 'vertical' : null;
      let proceed = false;
    
      if (vertical || !hasTabs) {
        if (key === keys.up || key === keys.down) {
          event.preventDefault();
          proceed = true;
        }
      }
      else {
        if (key === keys.left || key === keys.right) {
          proceed = true;
        }
      }
    
      if (proceed) {
        switchTabOnArrowPress(event);
      }
    };
    
    // Handle keydown on tabs
    const keydownEventListener = function(event) {
      const key = event.keyCode;
      switch (key) {
        case keys.end:
          event.preventDefault();
          // Activate last tab
          focusLastTab();
          break;
        case keys.home:
          event.preventDefault();
          // Activate first tab
          focusFirstTab();
          break;
    
          // Up and down are in keydown
          // because we need to prevent page scroll >:)
          case keys.up:
          case keys.down:
          determineOrientation(event);
          break;
      }
    };
    
    // Handle keyup on tabs
    const keyupEventListener = function(event) {
      const key = event.keyCode;
      switch (key) {
        case keys.left:
        case keys.right:
          determineOrientation(event);
          break;
        case keys.enter:
        case keys.space:
          if(hasTabs) {
            activateTab(event.target);
          } else {
            triggerTabClick(event);
          }
          break;
      }
    };
    
    const addListeners = function(index) {
      const target = hasTabs ? tabs[index] : panels[index];
      tabs[index].addEventListener('click', clickEventListener);
      if(target) {
         if(!hasTabs) {
          target.addEventListener('click', accordionClickEventListener);
        }
        target.addEventListener('keydown', keydownEventListener);
        target.addEventListener('keyup', keyupEventListener);
        // Build an array with all tabs (<button>s) in it
        target.index = index;
      }    
    };
    
    // Bind listeners
    for (let i = 0; i < tabs.length; ++i) {
      addListeners(i);
    }
    
    // Accordion mode
    if(!hasTabs) {
      for (const panel of panels) {
        panel.onclick = function(e) {
          triggerTabClick(e);
        };
      }
    }   
    };
    
    const toggleClass = function (otherElems, thisELem, className = 'is-active') {
    for (const otherElem of otherElems) {
    otherElem.classList.remove(className);
    }
    thisELem.classList.add(className);
    };
    
    const toggleVerticalTabs = function (tabContainer, tabs, items, item) {
    item.onclick = function (e) {
    const currId = item.getAttribute('id');
    const tab = tabContainer.querySelector('.ootb-tabcordion--tabs [aria-controls=\"' + currId + '\"]');
    toggleClass(tabs, tab);
    toggleClass(items, item);
    };
    };
    
    const toggleTabs = function (tabContainer) {
    const tabs = tabContainer.querySelectorAll('.ootb-tabcordion--tabs .tab');
    const items = tabContainer.querySelectorAll('.ootb-tabcordion--entry');
    for (const tab of tabs) {
      tab.onclick = function() {
        const target = tab.getAttribute('aria-controls');
        const content = document.getElementById(target);
        toggleClass(tabs, tab);
        toggleClass(items, content);
      };
    }
    for (const item of items) {
    toggleVerticalTabs(tabContainer, tabs, items, item);
    }
    };
    
    const hasTabs = function(container) {
    return container.classList.contains('has-tabs');
    };
    
    const modeSwitcher = function (tabContainer, containerWidth) {
    const tabs = tabContainer.querySelectorAll('.tab');
    const container = tabs[0].closest('.ootb-tabcordion');
    let totalW = 0;
    for (const tab of tabs) {
    totalW += tab.offsetWidth;
    }
    if (totalW >= containerWidth) {
    container.classList.remove('has-tabs');
    } else {
    container.classList.add('has-tabs');
    }
    keyboardSupport(tabContainer, hasTabs(container));
    };
    
    const resizeObserver = new ResizeObserver(entries => {
    for (let entry of entries) {
    modeSwitcher(entry.target, entry.contentRect.width);
    }
    });
    
    const tabContainers = document.querySelectorAll('.ootb-tabcordion');
    for (const tabContainer of tabContainers) {
    const tabList = tabContainer.querySelector('.ootb-tabcordion--tabs');
    resizeObserver.observe(tabList);
    toggleTabs(tabContainer);
    keyboardSupport(tabContainer, hasTabs(tabContainer));
    }
    })();
 </script>";
    }

    public function getTemplateName()
    {
        return "themes/custom/plan_holidays/templates/node/node--domestic-packages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 158,  218 => 157,  208 => 149,  198 => 142,  190 => 136,  184 => 133,  180 => 132,  177 => 131,  174 => 130,  168 => 127,  164 => 126,  161 => 125,  159 => 124,  155 => 123,  145 => 116,  134 => 108,  130 => 107,  127 => 106,  123 => 103,  119 => 98,  116 => 97,  108 => 93,  106 => 92,  102 => 91,  98 => 90,  95 => 89,  93 => 88,  87 => 86,  79 => 83,  74 => 82,  72 => 81,  68 => 80,  62 => 78,  60 => 74,  59 => 73,  58 => 72,  57 => 71,  56 => 70,  55 => 69,);
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
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    node.bundle|clean_class,
    node.isPromoted() ? 'is-promoted',
    node.isSticky() ? 'is-sticky',
    not node.isPublished() ? 'is-unpublished',
    view_mode ? view_mode|clean_class,
    'clearfix',
  ]
%}
<article{{ attributes.addClass(classes) }}>

  {{ title_prefix }}
  {% if not page %}
    <h2{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <footer>
      {{ author_picture }}
      <div{{ author_attributes.addClass('author') }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}

  <div{{ content_attributes.addClass('content') }}> 
    {# {{ node.field_hotels.0.value|raw }}
    {{ node.field_programme.0.value|raw }}
    {{ node.field_package_banner.0.value|raw }}
    {{ node.body.0.value|raw }} #}

    
    {# {{ content }} #}
    <div class=\"package_details_banner\">
      {{ content.field_package_banner.0 }}
      {{ node.field_package_type.0.entity.name.value  }}
    </div>
    <div class=\"container clearfix\">
    <div class=\"ootb-tabcordion\">
      <div class=\"ootb-tabcordion--tabs\" role=\"tablist\" aria-label=\"TabCordion\">
        <button class=\"tab is-active\" role=\"tab\" aria-selected=\"true\" aria-controls=\"tab1-tab\" id=\"tab1\">Overview</button>
        <button class=\"tab\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab2-tab\" id=\"tab2\" tabindex=\"-1\">Programme</button>
        <button class=\"tab\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab3-tab\" id=\"tab3\" tabindex=\"-1\">
          {{ node.field_package_type.0.value|raw == 'Luxury Train' ? 'Schedule' : 'Hotels'}}
        </button>
        <button class=\"tab\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab4-tab\" id=\"tab4\" tabindex=\"-1\">Send Query</button>
      </div>
      <section id=\"tab1-tab\" class=\"ootb-tabcordion--entry is-active\" data-title=\"Overview\" tabindex=\"0\" role=\"tabpanel\" aria-labelledby=\"tab1\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              {{ node.body.0.value|raw }}
              {% if node.field_package_inclusions.0.value %}
              <div class=\"package-inclusions\">
                <h6>{{ node.field_package_inclusions.fieldDefinition.label }}</h6>
                  {{ node.field_package_inclusions.0.value|raw }}
              </div>
              {% endif %}
              {% if node.field_package_exclusions.0.value %}
              <div class=\"package-exclusions\">
                <h6>{{ node.field_package_exclusions.fieldDefinition.label }}</h6>
                {{ node.field_package_exclusions.0.value|raw }}
              </div>
              {% endif %}
            </div>
        </div>
      </section>
      <section id=\"tab2-tab\" class=\"ootb-tabcordion--entry\" data-title=\"Programme\" tabindex=\"-1\" role=\"tabpanel\" aria-labelledby=\"tab2\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              {{ node.field_programme.0.value|raw }}
            </div>
        </div>
      </section>
      <section id=\"tab3-tab\" class=\"ootb-tabcordion--entry\" data-title=\"Hotels\" tabindex=\"-1\" role=\"tabpanel\" aria-labelledby=\"tab3\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              {{ node.field_hotels.0.value|raw }}
            </div>
        </div>
      </section>
      <section id=\"tab4-tab\" class=\"ootb-tabcordion--entry\" data-title=\"Send Query\" tabindex=\"-1\" role=\"tabpanel\" aria-labelledby=\"tab4\">
        <div class=\"ootb-tabcordion--entry-container\">
            <div class=\"ootb-tabcordion--entry-content\">
              {# {{ my_form }} #}
              {# {{ drupal_entity('contact_form', 'contact_message_enquiry_form') }} #}
              {{ content.field_enquiry_form.0 }}
            </div>
        </div>
      </section>
    </div>
    </div>


  </div>

</article>




<style>

    .package_details_banner img{
      width: 100%;
      padding: 0;
      margin: 0;
      border: 0;
    }
    .ootb-tabcordion {
    /*background: #fff;
    box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.2);*/
    
    padding: 1rem;
    margin: 1rem auto 4rem auto;
    border-radius: 3px;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--tabs {
    opacity: 1;
    height: auto;
    visibility: visible;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry {
    min-height: 0;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry::before {
    display: none;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry.is-active .ootb-tabcordion--entry-content {
    opacity: 1;
    transition: opacity 400ms ease-in-out;
    }
    .ootb-tabcordion.has-tabs .ootb-tabcordion--entry .ootb-tabcordion--entry-content {
    opacity: 0;
    transition: opacity 400ms ease-in-out;
    }
    .ootb-tabcordion--tabs {
    opacity: 0;
    height: 0;
    visibility: hidden;
    display: flex;
    flex-flow: wrap;
    margin: 0;
    list-style: none;
    padding: 0;
    }
    .ootb-tabcordion--tabs .tab {
    display: block;
    background: #444;
    color: #fff;
    padding: 1rem 3rem;
    border-radius: 3px;
    font-size: 16px;
    font-weight: 300;
    font-family: 'Roboto', sans-serif;
    margin: 0 15px 1px 0;
    border: none;
    border-right: 1px solid #fff;
    cursor: pointer;
    }
    .ootb-tabcordion--tabs .tab:hover, .ootb-tabcordion--tabs .tab:focus {
    background: #535353;
    outline: none;
    }
    .ootb-tabcordion--tabs .tab.is-active {
    background: #3bacff;
    }
    .ootb-tabcordion--tabs .tab.is-active:hover, .ootb-tabcordion--tabs .tab.is-active:focus {
    background: #1c9fff;
    }
    .ootb-tabcordion--entry {
    overflow: hidden;
    }
    .ootb-tabcordion--entry::before {
    position: relative;
    content: attr(data-title);
    cursor: pointer;
    z-index: 1;
    background: #444;
    color: #fff;
    padding: 0.5rem 1rem;
    display: block;
    border-radius: 3px;
    }
    .ootb-tabcordion--entry:hover, .ootb-tabcordion--entry:focus {
    outline: none;
    }
    .ootb-tabcordion--entry:hover::before, .ootb-tabcordion--entry:focus::before {
    background: #535353;
    }
    .ootb-tabcordion--entry.is-active .ootb-tabcordion--entry-content {
    margin-top: 0;
    height: auto;
    opacity: 1;
    transition: margin 400ms eas: attr(data-title);
    cursor: pointer;
    z-index: e-out -100ms;
    }
    .ootb-tabcordion--entry.is-active::before {
    background: #3bacff;
    }
    .ootb-tabcordion--entry.is-active:hover::before, .ootb-tabcordion--entry.is-active:focus::before {
    background: #1c9fff;
    }
    .ootb-tabcordion--entry-container {
    overflow: hidden;
    margin-bottom: 1px;
    }
    .ootb-tabcordion--entry-content {
    position: relative;
    margin-top: -100%;
    height: 0;
    opacity: 0;
    transition: margin 500ms ease-in;
    padding: 1rem;
    }
    .ootb-tabcordion--entry-content a.more {
    color: #444;
    }
    .ootb-tabcordion--entry-content a.more:hover {
    color: #3bacff;
    }
 </style>
 <script>
    (function () {
    'use strict';
    
    const keyboardSupport = function(container, hasTabs) {
    const tablist = container.querySelectorAll('[role=\"tablist\"]')[0];
    let tabs;
    let panels;
    
    const generateArrays = function() {
      panels = container.querySelectorAll('[role=\"tabpanel\"]');
      tabs = container.querySelectorAll('[role=\"tab\"]');
    };
    
    generateArrays();
    
    // For easy reference
    const keys = {
      end: 35,
      home: 36,
      left: 37,
      up: 38,
      right: 39,
      down: 40,
      delete: 46,
      enter: 13,
      space: 32
    };
    
    // Add or subtract depending on key pressed
    const direction = {
      37: -1,
      38: -1,
      39: 1,
      40: 1
    };
    
    // Deactivate all tabs and tab panels
    const deactivateTabs = function() {
      for (let t = 0; t < tabs.length; t++) {
        tabs[t].setAttribute('tabindex', '-1');
        tabs[t].setAttribute('aria-selected', 'false');
      }
    };
    
    // Activates any given tab panel
    const activateTab = function(tab, setFocus) {
      setFocus = setFocus || true;
      // Deactivate all other tabs
      deactivateTabs();
    
      // Remove tabindex attribute
      tab.removeAttribute('tabindex');
    
      // Set the tab as selected
      tab.setAttribute('aria-selected', 'true');
    
      // Set focus when required
      if (setFocus) {
        tab.focus();
      }
    };
    
    const triggerTabClick = function(e) {
      const clickedId = e.target.getAttribute('id');
      if(clickedId) {
        const clickedTab = container.querySelector('[aria-controls=\"' + clickedId + '\"]');
        clickedTab.click();
         document.getElementById(clickedId).scrollIntoView({
          behavior: 'smooth'
        });
      }
    };
    
    const accordionClickEventListener = function(event) {
      triggerTabClick(event);
    };
    
    // When a tab is clicked, activateTab is fired to activate it
    const clickEventListener = function(event) {
       const tab = event.target;
        activateTab(tab, false);
    };
    
    // Make a guess
    const focusFirstTab = function() {
      const target = hasTabs ? tabs : panels;
      target[0].focus();
    };
    
    // Make a guess
    const focusLastTab = function() {
      const target = hasTabs ? tabs : panels;
      target[target.length - 1].focus();
    };
    
    // Either focus the next, previous, first, or last tab
    // depending on key pressed
    const switchTabOnArrowPress = function(event) {
      const pressed = event.keyCode;
    
      if (direction[pressed]) {
        const target = event.target;
        const targetElems = hasTabs ? tabs : panels;
        if (target.index !== undefined) {
          if (targetElems[target.index + direction[pressed]]) {
            targetElems[target.index + direction[pressed]].focus();
          }
          else if (pressed === keys.left || pressed === keys.up) {
            focusLastTab();
          }
          else if (pressed === keys.right || pressed == keys.down) {
            focusFirstTab();
          }
        }
      }
    };
    
    // When a tablist's aria-orientation is set to vertical,
    // only up and down arrow should function.
    // In all other cases only left and right arrow function.
    const determineOrientation = function(event) {
      const key = event.keyCode;
      const vertical = tablist ? tablist.getAttribute('aria-orientation') === 'vertical' : null;
      let proceed = false;
    
      if (vertical || !hasTabs) {
        if (key === keys.up || key === keys.down) {
          event.preventDefault();
          proceed = true;
        }
      }
      else {
        if (key === keys.left || key === keys.right) {
          proceed = true;
        }
      }
    
      if (proceed) {
        switchTabOnArrowPress(event);
      }
    };
    
    // Handle keydown on tabs
    const keydownEventListener = function(event) {
      const key = event.keyCode;
      switch (key) {
        case keys.end:
          event.preventDefault();
          // Activate last tab
          focusLastTab();
          break;
        case keys.home:
          event.preventDefault();
          // Activate first tab
          focusFirstTab();
          break;
    
          // Up and down are in keydown
          // because we need to prevent page scroll >:)
          case keys.up:
          case keys.down:
          determineOrientation(event);
          break;
      }
    };
    
    // Handle keyup on tabs
    const keyupEventListener = function(event) {
      const key = event.keyCode;
      switch (key) {
        case keys.left:
        case keys.right:
          determineOrientation(event);
          break;
        case keys.enter:
        case keys.space:
          if(hasTabs) {
            activateTab(event.target);
          } else {
            triggerTabClick(event);
          }
          break;
      }
    };
    
    const addListeners = function(index) {
      const target = hasTabs ? tabs[index] : panels[index];
      tabs[index].addEventListener('click', clickEventListener);
      if(target) {
         if(!hasTabs) {
          target.addEventListener('click', accordionClickEventListener);
        }
        target.addEventListener('keydown', keydownEventListener);
        target.addEventListener('keyup', keyupEventListener);
        // Build an array with all tabs (<button>s) in it
        target.index = index;
      }    
    };
    
    // Bind listeners
    for (let i = 0; i < tabs.length; ++i) {
      addListeners(i);
    }
    
    // Accordion mode
    if(!hasTabs) {
      for (const panel of panels) {
        panel.onclick = function(e) {
          triggerTabClick(e);
        };
      }
    }   
    };
    
    const toggleClass = function (otherElems, thisELem, className = 'is-active') {
    for (const otherElem of otherElems) {
    otherElem.classList.remove(className);
    }
    thisELem.classList.add(className);
    };
    
    const toggleVerticalTabs = function (tabContainer, tabs, items, item) {
    item.onclick = function (e) {
    const currId = item.getAttribute('id');
    const tab = tabContainer.querySelector('.ootb-tabcordion--tabs [aria-controls=\"' + currId + '\"]');
    toggleClass(tabs, tab);
    toggleClass(items, item);
    };
    };
    
    const toggleTabs = function (tabContainer) {
    const tabs = tabContainer.querySelectorAll('.ootb-tabcordion--tabs .tab');
    const items = tabContainer.querySelectorAll('.ootb-tabcordion--entry');
    for (const tab of tabs) {
      tab.onclick = function() {
        const target = tab.getAttribute('aria-controls');
        const content = document.getElementById(target);
        toggleClass(tabs, tab);
        toggleClass(items, content);
      };
    }
    for (const item of items) {
    toggleVerticalTabs(tabContainer, tabs, items, item);
    }
    };
    
    const hasTabs = function(container) {
    return container.classList.contains('has-tabs');
    };
    
    const modeSwitcher = function (tabContainer, containerWidth) {
    const tabs = tabContainer.querySelectorAll('.tab');
    const container = tabs[0].closest('.ootb-tabcordion');
    let totalW = 0;
    for (const tab of tabs) {
    totalW += tab.offsetWidth;
    }
    if (totalW >= containerWidth) {
    container.classList.remove('has-tabs');
    } else {
    container.classList.add('has-tabs');
    }
    keyboardSupport(tabContainer, hasTabs(container));
    };
    
    const resizeObserver = new ResizeObserver(entries => {
    for (let entry of entries) {
    modeSwitcher(entry.target, entry.contentRect.width);
    }
    });
    
    const tabContainers = document.querySelectorAll('.ootb-tabcordion');
    for (const tabContainer of tabContainers) {
    const tabList = tabContainer.querySelector('.ootb-tabcordion--tabs');
    resizeObserver.observe(tabList);
    toggleTabs(tabContainer);
    keyboardSupport(tabContainer, hasTabs(tabContainer));
    }
    })();
 </script>", "themes/custom/plan_holidays/templates/node/node--domestic-packages.html.twig", "C:\\xampp\\htdocs\\planholidays.drupal\\themes\\custom\\plan_holidays\\templates\\node\\node--domestic-packages.html.twig");
    }
}
