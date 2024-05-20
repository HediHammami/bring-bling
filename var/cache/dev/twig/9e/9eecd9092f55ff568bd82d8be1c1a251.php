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

/* @Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig */
class __TwigTemplate_5798d40bb3964c6a3c6faf2b9958bb15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig"));

        // line 25
        echo "
<div class=\"col-12 col-lg-8\">
    <div class=\"card panel\">
        <header>
            <nav>
                <ul class=\"nav nav-pills\" role=\"tablist\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["font_category"]) || array_key_exists("font_category", $context) ? $context["font_category"] : (function () { throw new RuntimeError('Variable "font_category" does not exist.', 31, $this->source); })()), "fonts", [], "any", false, false, false, 31));
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
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 32
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 33
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33) == 1)) ? ("active") : (""));
            echo "\" href=\"#";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["font_category"]) || array_key_exists("font_category", $context) ? $context["font_category"] : (function () { throw new RuntimeError('Variable "font_category" does not exist.', 33, $this->source); })()), "key", [], "any", false, false, false, 33) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33)), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["font"], "label", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
                    </li>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </ul>
            </nav>
        </header>
        <div class=\"tab-content panel\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["font_category"]) || array_key_exists("font_category", $context) ? $context["font_category"] : (function () { throw new RuntimeError('Variable "font_category" does not exist.', 40, $this->source); })()), "fonts", [], "any", false, false, false, 40));
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
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 41
            echo "                <div class=\"tab-pane ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41) == 1)) ? ("active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["font_category"]) || array_key_exists("font_category", $context) ? $context["font_category"] : (function () { throw new RuntimeError('Variable "font_category" does not exist.', 41, $this->source); })()), "key", [], "any", false, false, false, 41) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41)), "html", null, true);
            echo "\">
                    ";
            // line 42
            $this->loadTemplate("@Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig", 42)->display(twig_array_merge($context, ["form_index" => ((            // line 43
(isset($context["category_index"]) || array_key_exists("category_index", $context) ? $context["category_index"] : (function () { throw new RuntimeError('Variable "category_index" does not exist.', 43, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43)), "data" =>             // line 44
$context["font"], "disabled" =>             // line 45
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 45, $this->source); })())]));
            // line 47
            echo "                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  127 => 47,  125 => 45,  124 => 44,  123 => 43,  122 => 42,  115 => 41,  98 => 40,  92 => 36,  71 => 33,  68 => 32,  51 => 31,  43 => 25,);
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

<div class=\"col-12 col-lg-8\">
    <div class=\"card panel\">
        <header>
            <nav>
                <ul class=\"nav nav-pills\" role=\"tablist\">
                    {% for font in font_category.fonts %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ loop.index == 1 ? 'active' : '' }}\" href=\"#{{ font_category.key ~ '-' ~ loop.index }}\" role=\"tab\" data-toggle=\"tab\">{{ font.label }}</a>
                    </li>
                    {% endfor %}
                </ul>
            </nav>
        </header>
        <div class=\"tab-content panel\">
            {% for font in font_category.fonts %}
                <div class=\"tab-pane {{ loop.index == 1 ? 'active' : '' }}\" id=\"{{ font_category.key ~ '-' ~ loop.index }}\">
                    {% include '@Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig' with {
                        form_index: category_index ~ '-' ~ loop.index,
                        data: font,
                        disabled: disabled
                    } %}
                </div>
            {% endfor %}
        </div>
    </div>
</div>
", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig", "/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/admin/fonts/Blocks/FontCustomization/font_customization_content.html.twig");
    }
}
