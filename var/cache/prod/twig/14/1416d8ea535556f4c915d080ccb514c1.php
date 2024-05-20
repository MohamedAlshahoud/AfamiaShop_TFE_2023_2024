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

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_98c5844647214af64cfd6e780dfd1ec0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'money_widget' => [$this, 'block_money_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_errors' => [$this, 'block_form_label_errors'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
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
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 34
        yield "
";
        // line 35
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 50
        yield "
";
        // line 51
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 136
        yield "
";
        // line 137
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 153
        yield "
";
        // line 154
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 160
        yield "
";
        // line 161
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 165
        yield "
";
        // line 166
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 170
        yield "
";
        // line 171
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 190
        yield "
";
        // line 191
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 205
        yield "
";
        // line 206
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 210
        yield "
";
        // line 211
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 222
        yield "
";
        // line 224
        yield "
";
        // line 225
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 269
        yield "
";
        // line 270
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 318
        yield "
";
        // line 320
        yield "
";
        // line 321
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 335
        yield "
";
        // line 337
        yield "
";
        // line 338
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 349
        yield "
";
        // line 351
        yield "
";
        // line 352
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        return; yield '';
    }

    // line 5
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 7
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 8
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 9
            yield "<div class=\"input-group ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("group_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\">";
            // line 10
            if (($context["prepend"] ?? null)) {
                // line 11
                yield "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
                </div>";
            }
            // line 15
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 16
            if (($context["append"] ?? null)) {
                // line 17
                yield "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
                </div>";
            }
            // line 21
            yield "</div>";
        } else {
            // line 23
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 27
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 29
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 29), "")) : ("")) . " form-control is-invalid"))]);
            // line 30
            $context["valid"] = true;
        }
        // line 32
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        return; yield '';
    }

    // line 35
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 37
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 37), "")) : ("")) . " form-control is-invalid"))]);
            // line 38
            $context["valid"] = true;
        }
        // line 40
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        return; yield '';
    }

    // line 43
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 45
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-control is-invalid"))]);
            // line 46
            $context["valid"] = true;
        }
        // line 48
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        return; yield '';
    }

    // line 51
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 53
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 53), "")) : ("")) . " form-control is-invalid"))]);
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59), "")) : ("")) . " form-inline"))]);
            // line 60
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 61
            if (($context["with_years"] ?? null)) {
                // line 62
                yield "<div class=\"col-auto\">
                ";
                // line 63
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 63), 'label');
                yield "
                ";
                // line 64
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 64), 'widget');
                yield "
            </div>";
            }
            // line 67
            if (($context["with_months"] ?? null)) {
                // line 68
                yield "<div class=\"col-auto\">
                ";
                // line 69
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 69), 'label');
                yield "
                ";
                // line 70
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 70), 'widget');
                yield "
            </div>";
            }
            // line 73
            if (($context["with_weeks"] ?? null)) {
                // line 74
                yield "<div class=\"col-auto\">
                ";
                // line 75
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 75), 'label');
                yield "
                ";
                // line 76
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 76), 'widget');
                yield "
            </div>";
            }
            // line 79
            if (($context["with_days"] ?? null)) {
                // line 80
                yield "<div class=\"col-auto\">
                ";
                // line 81
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 81), 'label');
                yield "
                ";
                // line 82
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 82), 'widget');
                yield "
            </div>";
            }
            // line 85
            if (($context["with_hours"] ?? null)) {
                // line 86
                yield "<div class=\"col-auto\">
                ";
                // line 87
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 87), 'label');
                yield "
                ";
                // line 88
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 88), 'widget');
                yield "
            </div>";
            }
            // line 91
            if (($context["with_minutes"] ?? null)) {
                // line 92
                yield "<div class=\"col-auto\">
                ";
                // line 93
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 93), 'label');
                yield "
                ";
                // line 94
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 94), 'widget');
                yield "
            </div>";
            }
            // line 97
            if (($context["with_seconds"] ?? null)) {
                // line 98
                yield "<div class=\"col-auto\">
                ";
                // line 99
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 99), 'label');
                yield "
                ";
                // line 100
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 100), 'widget');
                yield "
            </div>";
            }
            // line 103
            if (($context["with_invert"] ?? null)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 103), 'widget');
            }
            // line 104
            yield "</div>";
        }
        return; yield '';
    }

    // line 108
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        if (($context["symbol"] ?? null)) {
            // line 110
            yield "<div class=\"input-group\">";
            // line 111
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 112
            yield "<div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 113
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
            </div>
        </div>";
        } else {
            // line 117
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 121
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        yield "<";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        yield " class=\"custom-file\">";
        // line 123
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "file")) : ("file"));
        // line 124
        $context["input_lang"] = "en";
        // line 125
        if ((array_key_exists("app", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", true, true, false, 125))) {
            $context["input_lang"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 125), "locale", [], "any", false, false, false, 125);
        }
        // line 126
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(["lang" => ($context["input_lang"] ?? null)], ($context["attr"] ?? null));
        // line 127
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 128
        $context["label_attr"] = Twig\Extension\CoreExtension::arrayFilter($this->env, Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 128), "")) : ("")) . " custom-file-label"))]), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return (($context["key"] ?? null) != "id"); });
        // line 129
        yield "<label for=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "\" ";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 129, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 130
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 130) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 130)))) {
            // line 131
            yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["translation_domain"] ?? null) === false)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 131)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 131), [], ($context["translation_domain"] ?? null)))), "html", null, true);
        }
        // line 133
        yield "</label>
    </";
        // line 134
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        yield ">
";
        return; yield '';
    }

    // line 137
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        if (( !array_key_exists("type", $context) || (($context["type"] ?? null) != "hidden"))) {
            // line 139
            $context["className"] = " form-control";
            // line 140
            if ((((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "")) : ("")) == "file")) {
                // line 141
                $context["className"] = " custom-file-input";
            } elseif ((((            // line 142
array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "")) : ("")) == "range")) {
                // line 143
                $context["className"] = " form-control-range";
            }
            // line 145
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 145), "")) : ("")) . ($context["className"] ?? null)))]);
        }
        // line 147
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 148
            yield "        ";
            // line 149
            $context["required"] = false;
        }
        // line 151
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 154
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        if ( !($context["valid"] ?? null)) {
            // line 156
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 156), "")) : ("")) . " is-invalid"))]);
        }
        // line 158
        yield from $this->yieldParentBlock("widget_attributes", $context, $blocks);
        return; yield '';
    }

    // line 161
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 162), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        // line 163
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    // line 166
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 167), "btn-primary")) : ("btn-primary")))]);
        // line 168
        yield from $this->yieldParentBlock("submit_widget", $context, $blocks);
        return; yield '';
    }

    // line 171
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 172)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 172), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 172)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 172), "")) : (""))));
        // line 173
        if (CoreExtension::inFilter("checkbox-custom", ($context["parent_label_class"] ?? null))) {
            // line 174
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 174), "")) : ("")) . " custom-control-input"))]);
            // line 175
            yield "<div class=\"custom-control custom-checkbox";
            yield ((CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 176
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 177
            yield "</div>";
        } elseif (CoreExtension::inFilter("switch-custom",         // line 178
($context["parent_label_class"] ?? null))) {
            // line 179
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 179), "")) : ("")) . " custom-control-input"))]);
            // line 180
            yield "<div class=\"custom-control custom-switch";
            yield ((CoreExtension::inFilter("switch-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 181
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 182
            yield "</div>";
        } else {
            // line 184
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 184)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 184), "")) : ("")) . " form-check-input"))]);
            // line 185
            yield "<div class=\"form-check";
            yield ((CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            yield "\">";
            // line 186
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 187
            yield "</div>";
        }
        return; yield '';
    }

    // line 191
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 192), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 192), "")) : (""))));
        // line 193
        if (CoreExtension::inFilter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 194
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 194), "")) : ("")) . " custom-control-input"))]);
            // line 195
            yield "<div class=\"custom-control custom-radio";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 196
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 197
            yield "</div>";
        } else {
            // line 199
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 199), "")) : ("")) . " form-check-input"))]);
            // line 200
            yield "<div class=\"form-check";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            yield "\">";
            // line 201
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 202
            yield "</div>";
        }
        return; yield '';
    }

    // line 206
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 207), "")) : ("")) . " form-control"))]);
        // line 208
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        return; yield '';
    }

    // line 211
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 215
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 215), "")) : ("")), "translation_domain" =>             // line 216
($context["choice_translation_domain"] ?? null), "valid" =>             // line 217
($context["valid"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "</div>";
        return; yield '';
    }

    // line 225
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        if ( !(($context["label"] ?? null) === false)) {
            // line 227
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 228
                $context["element"] = "legend";
                // line 229
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 229)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 229), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 231
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 233
            if (($context["required"] ?? null)) {
                // line 234
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 234)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 234), "")) : ("")) . " required"))]);
            }
            // line 236
            if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 237
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 238
                    $context["label"] = Twig\Extension\CoreExtension::replaceFilter(($context["label_format"] ?? null), ["%name%" =>                     // line 239
($context["name"] ?? null), "%id%" =>                     // line 240
($context["id"] ?? null)]);
                } else {
                    // line 243
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 246
            yield "<";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_6 = $context;
                $__internal_compile_7 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($__internal_compile_7)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 246, $this->getSourceContext());
                }
                $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $__internal_compile_6;
            }
            yield ">";
            // line 247
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 248
                if ((($context["label_html"] ?? null) === false)) {
                    // line 249
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 251
                    yield ($context["label"] ?? null);
                }
            } else {
                // line 254
                if ((($context["label_html"] ?? null) === false)) {
                    // line 255
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 257
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 260
            yield from $this->unwrap()->yieldBlock('form_label_errors', $context, $blocks);
            yield "</";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        } else {
            // line 262
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 263
                yield "<div id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
                yield "_errors\" class=\"mb-2\">";
                // line 264
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 265
                yield "</div>";
            }
        }
        return; yield '';
    }

    // line 260
    public function block_form_label_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        return; yield '';
    }

    // line 270
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 272
        if (array_key_exists("widget", $context)) {
            // line 273
            $context["is_parent_custom"] = (array_key_exists("parent_label_class", $context) && ((CoreExtension::inFilter("checkbox-custom", ($context["parent_label_class"] ?? null)) || CoreExtension::inFilter("radio-custom", ($context["parent_label_class"] ?? null))) || CoreExtension::inFilter("switch-custom", ($context["parent_label_class"] ?? null))));
            // line 274
            yield "        ";
            $context["is_custom"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 274) && ((CoreExtension::inFilter("checkbox-custom", CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 274)) || CoreExtension::inFilter("radio-custom", CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 274))) || CoreExtension::inFilter("switch-custom", CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 274))));
            // line 275
            if ((($context["is_parent_custom"] ?? null) || ($context["is_custom"] ?? null))) {
                // line 276
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 276)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 276), "")) : ("")) . " custom-control-label"))]);
            } else {
                // line 278
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 278)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 278), "")) : ("")) . " form-check-label"))]);
            }
            // line 280
            if ( !($context["compound"] ?? null)) {
                // line 281
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 283
            if (($context["required"] ?? null)) {
                // line 284
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 284)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 284), "")) : ("")) . " required"))]);
            }
            // line 286
            if (( !(($context["label"] ?? null) === false) && Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)))) {
                // line 287
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 288
                    $context["label"] = Twig\Extension\CoreExtension::replaceFilter(($context["label_format"] ?? null), ["%name%" =>                     // line 289
($context["name"] ?? null), "%id%" =>                     // line 290
($context["id"] ?? null)]);
                } else {
                    // line 293
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 297
            yield ($context["widget"] ?? null);
            yield "
        <label";
            // line 298
            $__internal_compile_8 = $context;
            $__internal_compile_9 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($__internal_compile_9)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 298, $this->getSourceContext());
            }
            $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_8;
            yield ">";
            // line 299
            if ( !(($context["label"] ?? null) === false)) {
                // line 300
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 301
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 302
                        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label"] ?? null), "html", null, true);
                    } else {
                        // line 304
                        yield ($context["label"] ?? null);
                    }
                } else {
                    // line 307
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 308
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 310
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                    }
                }
            }
            // line 314
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 315
            yield "</label>";
        }
        return; yield '';
    }

    // line 321
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 322
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
            // line 323
            $context["element"] = "fieldset";
        }
        // line 325
        $context["widget_attr"] = [];
        // line 326
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 327
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 329
        yield "<";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 329)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 329), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 329, $this->getSourceContext());
        }
        $__internal_compile_11 = CoreExtension::toArray($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        yield ">";
        // line 330
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 331
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 333
        yield "</";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        yield ">";
        return; yield '';
    }

    // line 338
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 339
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 340
            yield "<span class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "invalid-feedback";
            } else {
                yield "alert alert-danger";
            }
            yield " d-block\">";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 342
                yield "<span class=\"d-block\">
                    <span class=\"form-error-icon badge badge-danger text-uppercase\">";
                // line 343
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
                yield "</span> <span class=\"form-error-message\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 343), "html", null, true);
                yield "</span>
                </span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            yield "</span>";
        }
        return; yield '';
    }

    // line 352
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 354
            $context["help_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 354)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 354), "")) : ("")) . " form-text text-muted"))]);
            // line 355
            yield "<small id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $__internal_compile_12 = $context;
            $__internal_compile_13 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_13)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 355, $this->getSourceContext());
            }
            $__internal_compile_13 = CoreExtension::toArray($__internal_compile_13);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_13));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_12;
            yield ">";
            // line 356
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 357
                if ((($context["help_html"] ?? null) === false)) {
                    // line 358
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["help"] ?? null), "html", null, true);
                } else {
                    // line 360
                    yield ($context["help"] ?? null);
                }
            } else {
                // line 363
                if ((($context["help_html"] ?? null) === false)) {
                    // line 364
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 366
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 369
            yield "</small>";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  978 => 369,  974 => 366,  971 => 364,  969 => 363,  965 => 360,  962 => 358,  960 => 357,  958 => 356,  944 => 355,  942 => 354,  940 => 353,  936 => 352,  930 => 346,  920 => 343,  917 => 342,  913 => 341,  905 => 340,  903 => 339,  899 => 338,  892 => 333,  890 => 332,  888 => 331,  886 => 330,  873 => 329,  870 => 327,  868 => 326,  866 => 325,  863 => 323,  861 => 322,  857 => 321,  851 => 315,  849 => 314,  844 => 310,  841 => 308,  839 => 307,  835 => 304,  832 => 302,  830 => 301,  828 => 300,  826 => 299,  815 => 298,  811 => 297,  807 => 293,  804 => 290,  803 => 289,  802 => 288,  800 => 287,  798 => 286,  795 => 284,  793 => 283,  790 => 281,  788 => 280,  785 => 278,  782 => 276,  780 => 275,  777 => 274,  775 => 273,  773 => 272,  769 => 270,  761 => 260,  754 => 265,  752 => 264,  748 => 263,  746 => 262,  740 => 260,  736 => 257,  733 => 255,  731 => 254,  727 => 251,  724 => 249,  722 => 248,  720 => 247,  705 => 246,  701 => 243,  698 => 240,  697 => 239,  696 => 238,  694 => 237,  692 => 236,  689 => 234,  687 => 233,  684 => 231,  681 => 229,  679 => 228,  677 => 227,  675 => 226,  671 => 225,  666 => 220,  660 => 217,  659 => 216,  658 => 215,  657 => 214,  653 => 213,  649 => 212,  645 => 211,  640 => 208,  638 => 207,  634 => 206,  628 => 202,  626 => 201,  622 => 200,  620 => 199,  617 => 197,  615 => 196,  611 => 195,  609 => 194,  607 => 193,  605 => 192,  601 => 191,  595 => 187,  593 => 186,  589 => 185,  587 => 184,  584 => 182,  582 => 181,  578 => 180,  576 => 179,  574 => 178,  572 => 177,  570 => 176,  566 => 175,  564 => 174,  562 => 173,  560 => 172,  556 => 171,  551 => 168,  549 => 167,  545 => 166,  540 => 163,  538 => 162,  534 => 161,  529 => 158,  526 => 156,  524 => 155,  520 => 154,  515 => 151,  512 => 149,  510 => 148,  508 => 147,  505 => 145,  502 => 143,  500 => 142,  498 => 141,  496 => 140,  494 => 139,  492 => 138,  488 => 137,  481 => 134,  478 => 133,  475 => 131,  473 => 130,  459 => 129,  457 => 128,  455 => 127,  453 => 126,  449 => 125,  447 => 124,  445 => 123,  441 => 122,  437 => 121,  431 => 117,  425 => 113,  422 => 112,  420 => 111,  418 => 110,  416 => 109,  412 => 108,  406 => 104,  402 => 103,  397 => 100,  393 => 99,  390 => 98,  388 => 97,  383 => 94,  379 => 93,  376 => 92,  374 => 91,  369 => 88,  365 => 87,  362 => 86,  360 => 85,  355 => 82,  351 => 81,  348 => 80,  346 => 79,  341 => 76,  337 => 75,  334 => 74,  332 => 73,  327 => 70,  323 => 69,  320 => 68,  318 => 67,  313 => 64,  309 => 63,  306 => 62,  304 => 61,  300 => 60,  298 => 59,  295 => 57,  293 => 56,  290 => 54,  288 => 53,  286 => 52,  282 => 51,  277 => 48,  274 => 46,  272 => 45,  270 => 44,  266 => 43,  261 => 40,  258 => 38,  256 => 37,  254 => 36,  250 => 35,  245 => 32,  242 => 30,  240 => 29,  238 => 28,  234 => 27,  228 => 23,  225 => 21,  220 => 18,  217 => 17,  215 => 16,  213 => 15,  208 => 12,  205 => 11,  203 => 10,  199 => 9,  197 => 8,  195 => 7,  193 => 6,  189 => 5,  184 => 352,  181 => 351,  178 => 349,  176 => 338,  173 => 337,  170 => 335,  168 => 321,  165 => 320,  162 => 318,  160 => 270,  157 => 269,  155 => 225,  152 => 224,  149 => 222,  147 => 211,  144 => 210,  142 => 206,  139 => 205,  137 => 191,  134 => 190,  132 => 171,  129 => 170,  127 => 166,  124 => 165,  122 => 161,  119 => 160,  117 => 154,  114 => 153,  112 => 137,  109 => 136,  107 => 121,  104 => 120,  102 => 108,  99 => 107,  97 => 51,  94 => 50,  92 => 43,  89 => 42,  87 => 35,  84 => 34,  82 => 27,  79 => 26,  77 => 5,  74 => 4,  71 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_4_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
