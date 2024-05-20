<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_13cec7548ed2de8efe9f99f1d16d3d83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 11
        yield "
";
        // line 12
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 16
        yield "
";
        // line 17
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 34
        yield "
";
        // line 35
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 45
        yield "
";
        // line 46
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 56
        yield "
";
        // line 57
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 61
        yield "
";
        // line 63
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 68
        yield "
";
        // line 69
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 74
        yield "
";
        // line 75
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 80
        yield "
";
        // line 81
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 86
        yield "
";
        // line 87
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 123
        yield "
";
        // line 125
        yield "
";
        // line 126
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 138
        yield "
";
        // line 139
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 144
        yield "
";
        // line 145
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 149
        yield "
";
        // line 150
        yield from $this->unwrap()->yieldBlock('date_row', $context, $blocks);
        // line 154
        yield "
";
        // line 155
        yield from $this->unwrap()->yieldBlock('time_row', $context, $blocks);
        // line 159
        yield "
";
        // line 160
        yield from $this->unwrap()->yieldBlock('datetime_row', $context, $blocks);
        // line 164
        yield "
";
        // line 165
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 172
        yield "
";
        // line 173
        yield from $this->unwrap()->yieldBlock('radio_row', $context, $blocks);
        // line 180
        yield "
";
        // line 182
        yield "
";
        // line 183
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 194
        yield "
";
        // line 196
        yield "
";
        // line 197
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        return; yield '';
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 7
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 7), "")) : ("")) . " form-control"))]);
        }
        // line 9
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 13), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 19
        yield "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 20
        yield "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 21
            yield "        <div class=\"input-group\">
            ";
            // line 22
            if (($context["prepend"] ?? null)) {
                // line 23
                yield "                <span class=\"input-group-addon\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 25
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                yield "                <span class=\"input-group-addon\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 29
            yield "        </div>
    ";
        } else {
            // line 31
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 35
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : (""))));
        // line 37
        if (CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            yield "<div class=\"checkbox\">";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            yield "</div>";
        }
        return; yield '';
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : (""))));
        // line 48
        if (CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            yield "<div class=\"radio\">";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            yield "</div>";
        }
        return; yield '';
    }

    // line 57
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 58), "")) : ("")) . " form-control"))]);
        // line 59
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        return; yield '';
    }

    // line 64
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")) . " control-label"))]);
        // line 66
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        return; yield '';
    }

    // line 69
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(Twig\Extension\CoreExtension::replaceFilter(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 71), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 72
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        return; yield '';
    }

    // line 75
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 78
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield '';
    }

    // line 81
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 84
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield '';
    }

    // line 87
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        if (array_key_exists("widget", $context)) {
            // line 90
            if (($context["required"] ?? null)) {
                // line 91
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 91), "")) : ("")) . " required"))]);
            }
            // line 93
            if (( !(($context["label"] ?? null) === false) && Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)))) {
                // line 94
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 95
                    $context["label"] = Twig\Extension\CoreExtension::replaceFilter(($context["label_format"] ?? null), ["%name%" =>                     // line 96
($context["name"] ?? null), "%id%" =>                     // line 97
($context["id"] ?? null)]);
                } else {
                    // line 100
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 103
            yield "<label";
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 103, $this->getSourceContext());
            }
            $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            yield ">";
            // line 105
            yield ($context["widget"] ?? null);
            yield " ";
            if ( !(($context["label"] ?? null) === false)) {
                // line 106
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 107
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 108
                        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label"] ?? null), "html", null, true);
                    } else {
                        // line 110
                        yield ($context["label"] ?? null);
                    }
                } else {
                    // line 113
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 114
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 116
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                    }
                }
            }
            // line 120
            yield "</label>";
        }
        return; yield '';
    }

    // line 126
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        $context["widget_attr"] = [];
        // line 128
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 129
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 131
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 131)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 131), "")) : ("")) . " form-group") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 131, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        yield " ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        yield " ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield " ";
        // line 136
        yield "</div> ";
        return; yield '';
    }

    // line 139
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        yield "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 140), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 140, $this->getSourceContext());
        }
        $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        yield ">";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 142
        yield "</div>";
        return; yield '';
    }

    // line 145
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        $context["force_error"] = true;
        // line 147
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 150
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        $context["force_error"] = true;
        // line 152
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 155
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        $context["force_error"] = true;
        // line 157
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 160
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        $context["force_error"] = true;
        // line 162
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 165
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        yield "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 166, $this->getSourceContext());
        }
        $__internal_compile_11 = CoreExtension::toArray($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        yield ">";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 170
        yield "</div>";
        return; yield '';
    }

    // line 173
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        yield "<div";
        $__internal_compile_12 = $context;
        $__internal_compile_13 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 174), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_13)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 174, $this->getSourceContext());
        }
        $__internal_compile_13 = CoreExtension::toArray($__internal_compile_13);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_13));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_12;
        yield ">";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 178
        yield "</div>";
        return; yield '';
    }

    // line 183
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 185
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "<span class=\"help-block\">";
            } else {
                yield "<div class=\"alert alert-danger\">";
            }
            // line 186
            yield "    <ul class=\"list-unstyled\">";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 188
                yield "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 188), "html", null, true);
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            yield "</ul>
    ";
            // line 191
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "</span>";
            } else {
                yield "</div>";
            }
        }
        return; yield '';
    }

    // line 197
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 199
            $context["help_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 199), "")) : ("")) . " help-block"))]);
            // line 200
            yield "<span id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $__internal_compile_14 = $context;
            $__internal_compile_15 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_15)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 200, $this->getSourceContext());
            }
            $__internal_compile_15 = CoreExtension::toArray($__internal_compile_15);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_15));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_14;
            yield ">";
            // line 201
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 202
                if ((($context["help_html"] ?? null) === false)) {
                    // line 203
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["help"] ?? null), "html", null, true);
                } else {
                    // line 205
                    yield ($context["help"] ?? null);
                }
            } else {
                // line 208
                if ((($context["help_html"] ?? null) === false)) {
                    // line 209
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 211
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 214
            yield "</span>";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  667 => 214,  663 => 211,  660 => 209,  658 => 208,  654 => 205,  651 => 203,  649 => 202,  647 => 201,  633 => 200,  631 => 199,  629 => 198,  625 => 197,  615 => 191,  612 => 190,  604 => 188,  600 => 187,  598 => 186,  592 => 185,  590 => 184,  586 => 183,  581 => 178,  579 => 177,  577 => 176,  575 => 175,  563 => 174,  559 => 173,  554 => 170,  552 => 169,  550 => 168,  548 => 167,  536 => 166,  532 => 165,  527 => 162,  525 => 161,  521 => 160,  516 => 157,  514 => 156,  510 => 155,  505 => 152,  503 => 151,  499 => 150,  494 => 147,  492 => 146,  488 => 145,  483 => 142,  481 => 141,  469 => 140,  465 => 139,  460 => 136,  457 => 135,  455 => 134,  452 => 133,  449 => 132,  437 => 131,  434 => 129,  432 => 128,  430 => 127,  426 => 126,  420 => 120,  415 => 116,  412 => 114,  410 => 113,  406 => 110,  403 => 108,  401 => 107,  399 => 106,  395 => 105,  383 => 103,  379 => 100,  376 => 97,  375 => 96,  374 => 95,  372 => 94,  370 => 93,  367 => 91,  365 => 90,  363 => 89,  359 => 87,  354 => 84,  352 => 82,  348 => 81,  343 => 78,  341 => 76,  337 => 75,  332 => 72,  330 => 71,  326 => 69,  321 => 66,  319 => 65,  315 => 64,  310 => 59,  308 => 58,  304 => 57,  298 => 53,  296 => 52,  294 => 51,  291 => 49,  289 => 48,  287 => 47,  283 => 46,  277 => 42,  275 => 41,  273 => 40,  270 => 38,  268 => 37,  266 => 36,  262 => 35,  256 => 31,  252 => 29,  246 => 27,  244 => 26,  242 => 25,  236 => 23,  234 => 22,  231 => 21,  228 => 20,  225 => 19,  223 => 18,  219 => 17,  214 => 14,  212 => 13,  208 => 12,  203 => 9,  200 => 7,  198 => 6,  194 => 5,  189 => 197,  186 => 196,  183 => 194,  181 => 183,  178 => 182,  175 => 180,  173 => 173,  170 => 172,  168 => 165,  165 => 164,  163 => 160,  160 => 159,  158 => 155,  155 => 154,  153 => 150,  150 => 149,  148 => 145,  145 => 144,  143 => 139,  140 => 138,  138 => 126,  135 => 125,  132 => 123,  130 => 87,  127 => 86,  125 => 81,  122 => 80,  120 => 75,  117 => 74,  115 => 69,  112 => 68,  110 => 64,  107 => 63,  104 => 61,  102 => 57,  99 => 56,  97 => 46,  94 => 45,  92 => 35,  89 => 34,  87 => 17,  84 => 16,  82 => 12,  79 => 11,  77 => 5,  74 => 4,  71 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
