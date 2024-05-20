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

/* @Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig */
class __TwigTemplate_d58ce6f245b52a2b22d5df2c69fb084b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig"));

        // line 25
        echo "
<div>
    <p class=\"mb-3\">
        ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "
    </p>
    <input type=\"hidden\" name=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "[variable_name]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "variableName", [], "any", false, false, false, 30), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "[variable_type]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "variableType", [], "any", false, false, false, 31), "html", null, true);
        echo "\"/>
    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)))) {
            // line 33
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "[id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"/>
    ";
        }
        // line 35
        echo "    ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/text_editor.html.twig", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig", 35)->display(twig_array_merge($context, ["disabled" =>         // line 36
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 36, $this->source); })()), "fontList" =>         // line 37
(isset($context["fonts"]) || array_key_exists("fonts", $context) ? $context["fonts"] : (function () { throw new RuntimeError('Variable "fonts" does not exist.', 37, $this->source); })()), "fontVariants" =>         // line 38
(isset($context["fontVariants"]) || array_key_exists("fontVariants", $context) ? $context["fontVariants"] : (function () { throw new RuntimeError('Variable "fontVariants" does not exist.', 38, $this->source); })()), "fontFamily" => ["id" => (        // line 40
(isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 40, $this->source); })()) . "_font_family"), "name" => (        // line 41
(isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 41, $this->source); })()) . "[font]"), "value" => twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "font", [], "any", false, false, false, 42)], "fontStyle" => ["id" => (        // line 45
(isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 45, $this->source); })()) . "_font_style"), "name" => (        // line 46
(isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 46, $this->source); })()) . "[style]"), "value" => twig_get_attribute($this->env, $this->source,         // line 47
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "style", [], "any", false, false, false, 47)], "fontSize" => ["id" => (        // line 50
(isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 50, $this->source); })()) . "_font_size"), "name" => (        // line 51
(isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 51, $this->source); })()) . "[size]"), "min" => 10, "max" => 100, "value" => twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "size", [], "any", false, false, false, 54)], "textArea" => ["id" => (        // line 57
(isset($context["form_index"]) || array_key_exists("form_index", $context) ? $context["form_index"] : (function () { throw new RuntimeError('Variable "form_index" does not exist.', 57, $this->source); })()) . "_textarea"), "ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try your font", [], "Modules.Psxdesign.Admin"), "value" => (((twig_get_attribute($this->env, $this->source,         // line 59
($context["data"] ?? null), "placeholder", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "placeholder", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "placeholder", [], "any", false, false, false, 59)) : (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()), "label", [], "any", false, false, false, 59))), "multiline" => false, "readonly" => true]]));
        // line 64
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 64,  90 => 59,  89 => 57,  88 => 54,  87 => 51,  86 => 50,  85 => 47,  84 => 46,  83 => 45,  82 => 42,  81 => 41,  80 => 40,  79 => 38,  78 => 37,  77 => 36,  75 => 35,  67 => 33,  65 => 32,  59 => 31,  53 => 30,  48 => 28,  43 => 25,);
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

<div>
    <p class=\"mb-3\">
        {{ data.description }}
    </p>
    <input type=\"hidden\" name=\"{{ form_index }}[variable_name]\" value=\"{{ data.variableName }}\"/>
    <input type=\"hidden\" name=\"{{ form_index }}[variable_type]\" value=\"{{ data.variableType }}\"/>
    {% if data.id is defined and data.id is not null %}
        <input type=\"hidden\" name=\"{{ form_index }}[id]\" value=\"{{ data.id }}\"/>
    {% endif %}
    {% include '@Modules/psxdesign/views/templates/components/text_editor.html.twig' with {
        disabled: disabled,
        fontList: fonts,
        fontVariants: fontVariants,
        fontFamily: {
            id: form_index ~ '_font_family',
            name: form_index ~ \"[font]\",
            value: data.font,
        },
        fontStyle: {
            id: form_index ~ '_font_style',
            name: form_index ~ \"[style]\",
            value: data.style,
        },
        fontSize: {
            id: form_index ~ '_font_size',
            name: form_index ~ \"[size]\",
            min: 10,
            max: 100,
            value: data.size,
        },
        textArea: {
            id: form_index ~ '_textarea',
            ariaLabel: 'Try your font'|trans({}, 'Modules.Psxdesign.Admin'),
            value: data.placeholder ?? data.label,
            multiline: false,
            readonly: true,
        }
    } %}
</div>
", "@Modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig", "/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/admin/fonts/Blocks/Partials/fonts_form.html.twig");
    }
}
