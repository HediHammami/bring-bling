<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/psxdesign/views/templates/admin/fonts/index.html.twig */
class __TwigTemplate_cea7ad0d0d5c9b2568837a72a3a62191 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'font_customization' => [$this, 'block_font_customization'],
            'font_customization_description' => [$this, 'block_font_customization_description'],
            'font_customization_content' => [$this, 'block_font_customization_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "    <div class=\"container position-relative\">
        ";
        // line 30
        if ( !(isset($context["fontFeatureAvailability"]) || array_key_exists("fontFeatureAvailability", $context) ? $context["fontFeatureAvailability"] : (function () { throw new RuntimeError('Variable "fontFeatureAvailability" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "            ";
            $this->loadTemplate("@Modules/psxdesign/views/templates/admin/fonts/Blocks/Gateway/font_feature_disabled_gateway.html.twig", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig", 31)->display($context);
            // line 32
            echo "        ";
        }
        // line 33
        echo "        ";
        $context["formId"] = "font_customization";
        // line 34
        echo "        ";
        $context["fontsByCategories"] = (((isset($context["fontFeatureAvailability"]) || array_key_exists("fontFeatureAvailability", $context) ? $context["fontFeatureAvailability"] : (function () { throw new RuntimeError('Variable "fontFeatureAvailability" does not exist.', 34, $this->source); })())) ? ((isset($context["themeFontsDataByCategories"]) || array_key_exists("themeFontsDataByCategories", $context) ? $context["themeFontsDataByCategories"] : (function () { throw new RuntimeError('Variable "themeFontsDataByCategories" does not exist.', 34, $this->source); })())) : ((isset($context["fontsByCategoriesPlaceholder"]) || array_key_exists("fontsByCategoriesPlaceholder", $context) ? $context["fontsByCategoriesPlaceholder"] : (function () { throw new RuntimeError('Variable "fontsByCategoriesPlaceholder" does not exist.', 34, $this->source); })())));
        // line 35
        echo "        ";
        $this->displayBlock('font_customization', $context, $blocks);
        // line 57
        echo "        ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/save_banner.html.twig", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig", 57)->display(twig_array_merge($context, ["form" =>         // line 58
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 58, $this->source); })())]));
        // line 60
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_font_customization($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "font_customization"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "font_customization"));

        // line 36
        echo "            <form id=\"";
        echo twig_escape_filter($this->env, (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" name=\"font_customization\" method=\"post\" action=\" ";
        echo (( !(isset($context["fontFeatureAvailability"]) || array_key_exists("fontFeatureAvailability", $context) ? $context["fontFeatureAvailability"] : (function () { throw new RuntimeError('Variable "fontFeatureAvailability" does not exist.', 36, $this->source); })())) ? ("") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_upsert_font_action")));
        echo "\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fontsByCategories"]) || array_key_exists("fontsByCategories", $context) ? $context["fontsByCategories"] : (function () { throw new RuntimeError('Variable "fontsByCategories" does not exist.', 37, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fontsCategory"]) {
            // line 38
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["fontsCategory"], "fonts", [], "any", false, false, false, 38))) {
                // line 39
                echo "                            <div class=\"row\">
                                ";
                // line 40
                $this->displayBlock('font_customization_description', $context, $blocks);
                // line 45
                echo "                                ";
                $this->displayBlock('font_customization_content', $context, $blocks);
                // line 52
                echo "                            </div>
                    ";
            }
            // line 54
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fontsCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </form>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_font_customization_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "font_customization_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "font_customization_description"));

        // line 41
        echo "                                    ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_description.html.twig", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig", 41)->display(twig_array_merge($context, ["font_category" =>         // line 42
(isset($context["fontsCategory"]) || array_key_exists("fontsCategory", $context) ? $context["fontsCategory"] : (function () { throw new RuntimeError('Variable "fontsCategory" does not exist.', 42, $this->source); })())]));
        // line 44
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_font_customization_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "font_customization_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "font_customization_content"));

        // line 46
        echo "                                    ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig", 46)->display(twig_array_merge($context, ["disabled" =>  !        // line 47
(isset($context["fontFeatureAvailability"]) || array_key_exists("fontFeatureAvailability", $context) ? $context["fontFeatureAvailability"] : (function () { throw new RuntimeError('Variable "fontFeatureAvailability" does not exist.', 47, $this->source); })()), "font_category" =>         // line 48
(isset($context["fontsCategory"]) || array_key_exists("fontsCategory", $context) ? $context["fontsCategory"] : (function () { throw new RuntimeError('Variable "fontsCategory" does not exist.', 48, $this->source); })()), "category_index" => twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 49, $this->source); })()), "index", [], "any", false, false, false, 49)]));
        // line 51
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 51,  218 => 49,  217 => 48,  216 => 47,  214 => 46,  204 => 45,  194 => 44,  192 => 42,  190 => 41,  180 => 40,  169 => 55,  155 => 54,  151 => 52,  148 => 45,  146 => 40,  143 => 39,  140 => 38,  123 => 37,  116 => 36,  106 => 35,  95 => 60,  93 => 58,  91 => 57,  88 => 35,  85 => 34,  82 => 33,  79 => 32,  76 => 31,  74 => 30,  71 => 29,  61 => 28,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
    <div class=\"container position-relative\">
        {% if not fontFeatureAvailability %}
            {% include '@Modules/psxdesign/views/templates/admin/fonts/Blocks/Gateway/font_feature_disabled_gateway.html.twig' %}
        {% endif %}
        {% set formId = 'font_customization' %}
        {% set fontsByCategories = fontFeatureAvailability ? themeFontsDataByCategories : fontsByCategoriesPlaceholder %}
        {% block font_customization %}
            <form id=\"{{ formId }}\" name=\"font_customization\" method=\"post\" action=\" {{ not fontFeatureAvailability ? '' : path('admin_psxdesign_upsert_font_action') }}\">
                {% for fontsCategory in fontsByCategories %}
                    {% if fontsCategory.fonts is not empty %}
                            <div class=\"row\">
                                {% block font_customization_description %}
                                    {% include '@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_description.html.twig' with {
                                        font_category: fontsCategory
                                    } %}
                                {% endblock %}
                                {% block font_customization_content %}
                                    {% include '@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig' with {
                                        disabled: not fontFeatureAvailability,
                                        font_category: fontsCategory,
                                        category_index: loop.index
                                    } %}
                                {% endblock %}
                            </div>
                    {% endif %}
                {% endfor %}
            </form>
        {% endblock %}
        {% include '@Modules/psxdesign/views/templates/components/save_banner.html.twig' with {
            form: formId
        } %}
    </div>
{% endblock %}
", "@Modules/psxdesign/views/templates/admin/fonts/index.html.twig", "/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/admin/fonts/index.html.twig");
    }
}
