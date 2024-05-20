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

/* @Modules/psxdesign/views/templates/components/text_editor.html.twig */
class __TwigTemplate_2146c484b2887ec6b4f167198ccc3f58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/components/text_editor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/components/text_editor.html.twig"));

        // line 25
        echo "
";
        // line 58
        echo "
<fieldset
    class=\"text-editor\"
    ";
        // line 61
        if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 61, $this->source); })()) == true))) {
            // line 62
            echo "        disabled
    ";
        }
        // line 64
        echo "    data-font-list=\"";
        echo twig_escape_filter($this->env, json_encode((isset($context["fontList"]) || array_key_exists("fontList", $context) ? $context["fontList"] : (function () { throw new RuntimeError('Variable "fontList" does not exist.', 64, $this->source); })())), "html", null, true);
        echo "\"
    data-font-variants=\"";
        // line 65
        echo twig_escape_filter($this->env, json_encode((isset($context["fontVariants"]) || array_key_exists("fontVariants", $context) ? $context["fontVariants"] : (function () { throw new RuntimeError('Variable "fontVariants" does not exist.', 65, $this->source); })())), "html", null, true);
        echo "\"
>
    <div class=\"text-editor__toolbar\">
        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "id", [], "any", true, true, false, 68)) {
            // line 69
            echo "        <div class=\"form-group\">
            <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontFamily"]) || array_key_exists("fontFamily", $context) ? $context["fontFamily"] : (function () { throw new RuntimeError('Variable "fontFamily" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Font", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
            <div class=\"form-select\">
                <select
                    id=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontFamily"]) || array_key_exists("fontFamily", $context) ? $context["fontFamily"] : (function () { throw new RuntimeError('Variable "fontFamily" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\"
                    name=\"";
            // line 74
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["fontFamily"]) || array_key_exists("fontFamily", $context) ? $context["fontFamily"] : (function () { throw new RuntimeError('Variable "fontFamily" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74)) ? (twig_get_attribute($this->env, $this->source, (isset($context["fontFamily"]) || array_key_exists("fontFamily", $context) ? $context["fontFamily"] : (function () { throw new RuntimeError('Variable "fontFamily" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74)) : (twig_get_attribute($this->env, $this->source, (isset($context["fontFamily"]) || array_key_exists("fontFamily", $context) ? $context["fontFamily"] : (function () { throw new RuntimeError('Variable "fontFamily" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74))), "html", null, true);
            echo "\"
                    class=\"form-control custom-select text-editor__font-family-select\"
                    ";
            // line 76
            if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 76, $this->source); })()) == true))) {
                // line 77
                echo "                        disabled
                    ";
            }
            // line 79
            echo "                    required=\"\"
                >
                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fontList"]) || array_key_exists("fontList", $context) ? $context["fontList"] : (function () { throw new RuntimeError('Variable "fontList" does not exist.', 81, $this->source); })()));
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
                // line 82
                echo "                        <option
                                ";
                // line 83
                if (((twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "value", [], "any", true, true, false, 83)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["fontFamily"]) || array_key_exists("fontFamily", $context) ? $context["fontFamily"] : (function () { throw new RuntimeError('Variable "fontFamily" does not exist.', 83, $this->source); })()), "value", [], "any", false, false, false, 83) == twig_get_attribute($this->env, $this->source, $context["font"], "code", [], "any", false, false, false, 83))) : (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 83)))) {
                    // line 84
                    echo "                                    selected=\"selected\"
                                ";
                }
                // line 86
                echo "                                value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["font"], "code", [], "any", false, false, false, 86), "html", null, true);
                echo "\"
                                style=\"font-family:'";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["font"], "name", [], "any", false, false, false, 87), "html", null, true);
                echo "'\"
                        >
                            ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["font"], "name", [], "any", false, false, false, 89), "html", null, true);
                echo "
                        </option>
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
            // line 92
            echo "                </select>
            </div>
        </div>
        ";
        }
        // line 96
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "id", [], "any", true, true, false, 96) && array_key_exists("fontVariants", $context))) {
            // line 97
            echo "        <div class=\"form-group\">
            <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Style", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
            <div class=\"form-select\">
                <select
                    id=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101)) ? (twig_get_attribute($this->env, $this->source, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101)) : (twig_get_attribute($this->env, $this->source, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101))), "html", null, true);
            echo "\"
                    class=\"form-control custom-select text-editor__font-variant-select\"
                    ";
            // line 103
            if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 103, $this->source); })()) == true))) {
                // line 104
                echo "                        disabled
                    ";
            }
            // line 106
            echo "                    required=\"\"
                >
                    ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_first($this->env, (isset($context["fontVariants"]) || array_key_exists("fontVariants", $context) ? $context["fontVariants"] : (function () { throw new RuntimeError('Variable "fontVariants" does not exist.', 108, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["weightKey"]) {
                // line 109
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["fontVariants"]) || array_key_exists("fontVariants", $context) ? $context["fontVariants"] : (function () { throw new RuntimeError('Variable "fontVariants" does not exist.', 109, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["variantKey"]) {
                    // line 110
                    echo "                        <option
                                ";
                    // line 111
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 111, $this->source); })()), "value", [], "any", false, false, false, 111) == (($context["variantKey"] . "-") . $context["weightKey"]))) {
                        // line 112
                        echo "                                    selected=\"selected\"
                                ";
                    }
                    // line 114
                    echo "                                value=\"";
                    echo twig_escape_filter($this->env, $context["variantKey"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["weightKey"], "html", null, true);
                    echo "\"
                                style=\"font-style:";
                    // line 115
                    echo twig_escape_filter($this->env, $context["variantKey"], "html", null, true);
                    echo "; font-weight: ";
                    echo twig_escape_filter($this->env, $context["weightKey"], "html", null, true);
                    echo "\"
                        >
                            ";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fontVariants"]) || array_key_exists("fontVariants", $context) ? $context["fontVariants"] : (function () { throw new RuntimeError('Variable "fontVariants" does not exist.', 117, $this->source); })()), $context["variantKey"], [], "array", false, false, false, 117), $context["weightKey"], [], "array", false, false, false, 117), "html", null, true);
                    echo "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variantKey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weightKey'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                </select>
            </div>
        </div>
        ";
        }
        // line 125
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "id", [], "any", true, true, false, 125)) {
            // line 126
            echo "            <div class=\"form-group for-group--small\">
                <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Size", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
                <div class=\"ps-number-input-inputs\">
                    <input
                            class=\"form-control text-editor__font-size-input\"
                            type=\"number\"
                            min=\"";
            // line 132
            ((twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "min", [], "any", true, true, false, 132)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 132, $this->source); })()), "min", [], "any", false, false, false, 132), "html", null, true))) : (print (1)));
            echo "\"
                            max=\"";
            // line 133
            ((twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "min", [], "any", true, true, false, 133)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 133, $this->source); })()), "max", [], "any", false, false, false, 133), "html", null, true))) : (print (999)));
            echo "\"
                            value=\"";
            // line 134
            ((twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "value", [], "any", true, true, false, 134)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 134, $this->source); })()), "value", [], "any", false, false, false, 134), "html", null, true))) : (print (16)));
            echo "\"
                            id=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135), "html", null, true);
            echo "\"
                            name=\"";
            // line 136
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 136, $this->source); })()), "name", [], "any", false, false, false, 136)) ? (twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 136, $this->source); })()), "name", [], "any", false, false, false, 136)) : (twig_get_attribute($this->env, $this->source, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136))), "html", null, true);
            echo "\"
                            ";
            // line 137
            if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 137, $this->source); })()) == true))) {
                // line 138
                echo "                                disabled
                            ";
            }
            // line 140
            echo "                            required=\"\"
                    />
                </div>
            </div>
        ";
        }
        // line 145
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "id", [], "any", true, true, false, 145)) {
            // line 146
            echo "            <div class=\"form-group for-group--small\">
                <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontColor"]) || array_key_exists("fontColor", $context) ? $context["fontColor"] : (function () { throw new RuntimeError('Variable "fontColor" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Color", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
                <div class=\"form-select\">
                    <input
                            type=\"color\"
                            value=\"";
            // line 151
            ((twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "value", [], "any", true, true, false, 151)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontColor"]) || array_key_exists("fontColor", $context) ? $context["fontColor"] : (function () { throw new RuntimeError('Variable "fontColor" does not exist.', 151, $this->source); })()), "value", [], "any", false, false, false, 151), "html", null, true))) : (print ("#000000")));
            echo "\"
                            id=\"";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fontColor"]) || array_key_exists("fontColor", $context) ? $context["fontColor"] : (function () { throw new RuntimeError('Variable "fontColor" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152), "html", null, true);
            echo "\"
                            name=\"";
            // line 153
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["fontColor"]) || array_key_exists("fontColor", $context) ? $context["fontColor"] : (function () { throw new RuntimeError('Variable "fontColor" does not exist.', 153, $this->source); })()), "name", [], "any", false, false, false, 153)) ? (twig_get_attribute($this->env, $this->source, (isset($context["fontColor"]) || array_key_exists("fontColor", $context) ? $context["fontColor"] : (function () { throw new RuntimeError('Variable "fontColor" does not exist.', 153, $this->source); })()), "name", [], "any", false, false, false, 153)) : (twig_get_attribute($this->env, $this->source, (isset($context["fontColor"]) || array_key_exists("fontColor", $context) ? $context["fontColor"] : (function () { throw new RuntimeError('Variable "fontColor" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153))), "html", null, true);
            echo "\"
                            class=\"text-editor__font-color-input\"
                            ";
            // line 155
            if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 155, $this->source); })()) == true))) {
                // line 156
                echo "                                disabled
                            ";
            }
            // line 158
            echo "                            required=\"\"
                    />
                </div>
            </div>
        ";
        }
        // line 163
        echo "    </div>
    <textarea
        class=\"text-editor__textarea\"
        ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "id", [], "any", true, true, false, 166)) {
            // line 167
            echo "            id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["textArea"]) || array_key_exists("textArea", $context) ? $context["textArea"] : (function () { throw new RuntimeError('Variable "textArea" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167), "html", null, true);
            echo "\"
        ";
        }
        // line 169
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "name", [], "any", true, true, false, 169)) {
            // line 170
            echo "            name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["textArea"]) || array_key_exists("textArea", $context) ? $context["textArea"] : (function () { throw new RuntimeError('Variable "textArea" does not exist.', 170, $this->source); })()), "name", [], "any", false, false, false, 170), "html", null, true);
            echo "\"
        ";
        }
        // line 172
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "multiline", [], "any", true, true, false, 172) && (twig_get_attribute($this->env, $this->source, (isset($context["textArea"]) || array_key_exists("textArea", $context) ? $context["textArea"] : (function () { throw new RuntimeError('Variable "textArea" does not exist.', 172, $this->source); })()), "multiline", [], "any", false, false, false, 172) == false))) {
            // line 173
            echo "            rows=\"1\"
        ";
        }
        // line 175
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "required", [], "any", true, true, false, 175) && (twig_get_attribute($this->env, $this->source, (isset($context["textArea"]) || array_key_exists("textArea", $context) ? $context["textArea"] : (function () { throw new RuntimeError('Variable "textArea" does not exist.', 175, $this->source); })()), "required", [], "any", false, false, false, 175) == true))) {
            // line 176
            echo "            required=\"\"
        ";
        }
        // line 178
        echo "        ";
        if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 178, $this->source); })()) == true))) {
            // line 179
            echo "            disabled
        ";
        }
        // line 181
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "readonly", [], "any", true, true, false, 181) && (twig_get_attribute($this->env, $this->source, (isset($context["textArea"]) || array_key_exists("textArea", $context) ? $context["textArea"] : (function () { throw new RuntimeError('Variable "textArea" does not exist.', 181, $this->source); })()), "readonly", [], "any", false, false, false, 181) == true))) {
            // line 182
            echo "            readonly
        ";
        }
        // line 184
        echo "        aria-label=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "ariaLabel", [], "any", true, true, false, 184)) ? (twig_get_attribute($this->env, $this->source, (isset($context["textArea"]) || array_key_exists("textArea", $context) ? $context["textArea"] : (function () { throw new RuntimeError('Variable "textArea" does not exist.', 184, $this->source); })()), "ariaLabel", [], "any", false, false, false, 184)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("text", [], "Modules.Psxdesign.Admin"))), "html", null, true);
        echo "\"
    >";
        // line 185
        ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "value", [], "any", true, true, false, 185)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["textArea"]) || array_key_exists("textArea", $context) ? $context["textArea"] : (function () { throw new RuntimeError('Variable "textArea" does not exist.', 185, $this->source); })()), "value", [], "any", false, false, false, 185), "html", null, true))) : (print ("")));
        echo "</textarea>
</fieldset>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/text_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 185,  383 => 184,  379 => 182,  376 => 181,  372 => 179,  369 => 178,  365 => 176,  362 => 175,  358 => 173,  355 => 172,  349 => 170,  346 => 169,  340 => 167,  338 => 166,  333 => 163,  326 => 158,  322 => 156,  320 => 155,  315 => 153,  311 => 152,  307 => 151,  298 => 147,  295 => 146,  292 => 145,  285 => 140,  281 => 138,  279 => 137,  275 => 136,  271 => 135,  267 => 134,  263 => 133,  259 => 132,  249 => 127,  246 => 126,  243 => 125,  237 => 121,  231 => 120,  222 => 117,  215 => 115,  208 => 114,  204 => 112,  202 => 111,  199 => 110,  194 => 109,  190 => 108,  186 => 106,  182 => 104,  180 => 103,  173 => 101,  165 => 98,  162 => 97,  159 => 96,  153 => 92,  136 => 89,  131 => 87,  126 => 86,  122 => 84,  120 => 83,  117 => 82,  100 => 81,  96 => 79,  92 => 77,  90 => 76,  85 => 74,  81 => 73,  73 => 70,  70 => 69,  68 => 68,  62 => 65,  57 => 64,  53 => 62,  51 => 61,  46 => 58,  43 => 25,);
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

{#
    text editors parameters
    - disabled: change the state for all the inputs to disabled / enabled
    - fontList: list of font available (see default_fonts.json for example)
    - fontVariants: list of font variants (see font_variants.json for example)
    - fontFamily: object with
        - id: id of the input
        - name: name of the input
        - value: default value
    - fontStyle: object with
        - id: id of the input
        - name: name of the input
        - value: default value
    - fontSize: object with
        - id: id of the input
        - name: name of the input
        - value: default value
        - min: min value (default 1) can't be less then 1
        - max: max value (default 999)
    - fontColor: object with
        - id: id of the input
        - name: name of the input
        - value: default value
    - textArea: object with
        - id: id of textarea
        - name: name of textarea
        - ariaLabel: aria label of text area
        - value: default value
        - multiline: boolean (by default true)
        - required: boolean (by default false)
        - readonly: boolean (by default false)
#}

<fieldset
    class=\"text-editor\"
    {% if disabled is defined and disabled == true %}
        disabled
    {% endif %}
    data-font-list=\"{{ fontList|json_encode() }}\"
    data-font-variants=\"{{ fontVariants|json_encode() }}\"
>
    <div class=\"text-editor__toolbar\">
        {% if fontFamily.id is defined %}
        <div class=\"form-group\">
            <label class=\"form-control-label font-weight-bold mb-1\" for=\"{{ fontFamily.id }}\">{{ 'Font'|trans({}, 'Modules.Psxdesign.Admin') }}</label>
            <div class=\"form-select\">
                <select
                    id=\"{{ fontFamily.id }}\"
                    name=\"{{ fontFamily.name ? fontFamily.name : fontFamily.id }}\"
                    class=\"form-control custom-select text-editor__font-family-select\"
                    {% if disabled is defined and disabled == true %}
                        disabled
                    {% endif %}
                    required=\"\"
                >
                    {% for font in fontList %}
                        <option
                                {% if fontFamily.value is defined ? fontFamily.value == font.code : loop.first %}
                                    selected=\"selected\"
                                {% endif %}
                                value=\"{{ font.code }}\"
                                style=\"font-family:'{{ font.name }}'\"
                        >
                            {{ font.name }}
                        </option>
                    {% endfor %}
                </select>
            </div>
        </div>
        {% endif %}
        {% if fontStyle.id is defined and fontVariants is defined %}
        <div class=\"form-group\">
            <label class=\"form-control-label font-weight-bold mb-1\" for=\"{{ fontStyle.id }}\">{{ 'Style'|trans({}, 'Modules.Psxdesign.Admin') }}</label>
            <div class=\"form-select\">
                <select
                    id=\"{{ fontStyle.id }}\" name=\"{{ fontStyle.name ? fontStyle.name : fontStyle.id }}\"
                    class=\"form-control custom-select text-editor__font-variant-select\"
                    {% if disabled is defined and disabled == true %}
                        disabled
                    {% endif %}
                    required=\"\"
                >
                    {% for weightKey in fontVariants|first|keys %}
                        {% for variantKey in fontVariants|keys %}
                        <option
                                {% if fontStyle.value == variantKey ~ '-' ~ weightKey %}
                                    selected=\"selected\"
                                {% endif %}
                                value=\"{{ variantKey }}-{{ weightKey }}\"
                                style=\"font-style:{{ variantKey }}; font-weight: {{ weightKey }}\"
                        >
                            {{ fontVariants[variantKey][weightKey] }}
                        </option>
                        {% endfor %}
                    {% endfor %}
                </select>
            </div>
        </div>
        {% endif %}
        {% if fontSize.id is defined %}
            <div class=\"form-group for-group--small\">
                <label class=\"form-control-label font-weight-bold mb-1\" for=\"{{ fontSize.id }}\">{{ 'Size'|trans({}, 'Modules.Psxdesign.Admin') }}</label>
                <div class=\"ps-number-input-inputs\">
                    <input
                            class=\"form-control text-editor__font-size-input\"
                            type=\"number\"
                            min=\"{{ fontSize.min is defined ? fontSize.min : 1 }}\"
                            max=\"{{ fontSize.min is defined ? fontSize.max : 999 }}\"
                            value=\"{{ fontSize.value is defined ? fontSize.value : 16 }}\"
                            id=\"{{ fontSize.id }}\"
                            name=\"{{ fontSize.name ? fontSize.name : fontSize.id }}\"
                            {% if disabled is defined and disabled == true %}
                                disabled
                            {% endif %}
                            required=\"\"
                    />
                </div>
            </div>
        {% endif %}
        {% if fontColor.id is defined %}
            <div class=\"form-group for-group--small\">
                <label class=\"form-control-label font-weight-bold mb-1\" for=\"{{ fontColor.id }}\">{{ 'Color'|trans({}, 'Modules.Psxdesign.Admin') }}</label>
                <div class=\"form-select\">
                    <input
                            type=\"color\"
                            value=\"{{ fontColor.value is defined ? fontColor.value : '#000000' }}\"
                            id=\"{{ fontColor.id }}\"
                            name=\"{{ fontColor.name ? fontColor.name : fontColor.id }}\"
                            class=\"text-editor__font-color-input\"
                            {% if disabled is defined and disabled == true %}
                                disabled
                            {% endif %}
                            required=\"\"
                    />
                </div>
            </div>
        {% endif %}
    </div>
    <textarea
        class=\"text-editor__textarea\"
        {% if textArea.id is defined %}
            id=\"{{ textArea.id }}\"
        {% endif %}
        {% if textArea.name is defined %}
            name=\"{{ textArea.name }}\"
        {% endif %}
        {% if textArea.multiline is defined and textArea.multiline == false %}
            rows=\"1\"
        {% endif %}
        {% if textArea.required is defined and textArea.required == true %}
            required=\"\"
        {% endif %}
        {% if disabled is defined and disabled == true %}
            disabled
        {% endif %}
        {% if textArea.readonly is defined and textArea.readonly == true %}
            readonly
        {% endif %}
        aria-label=\"{{ textArea.ariaLabel is defined ? textArea.ariaLabel : 'text'|trans({}, 'Modules.Psxdesign.Admin') }}\"
    >{{ textArea.value is defined ? textArea.value : '' }}</textarea>
</fieldset>
", "@Modules/psxdesign/views/templates/components/text_editor.html.twig", "/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/components/text_editor.html.twig");
    }
}
