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

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_95fc478be5d3e355ee9d083a4d121f0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
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
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 27
        yield "
";
        // line 28
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 38
        yield "
";
        // line 39
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 89
        yield "
";
        // line 90
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 108
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 146
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 165
        yield "
";
        // line 167
        yield "
";
        // line 168
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 173
        yield "
";
        // line 174
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 177
        yield "
";
        // line 178
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 181
        yield "
";
        // line 183
        yield "
";
        // line 184
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 189
        yield "
";
        // line 190
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 194
        yield "
";
        // line 195
        yield from $this->unwrap()->yieldBlock('date_row', $context, $blocks);
        // line 199
        yield "
";
        // line 200
        yield from $this->unwrap()->yieldBlock('time_row', $context, $blocks);
        // line 204
        yield "
";
        // line 205
        yield from $this->unwrap()->yieldBlock('datetime_row', $context, $blocks);
        return; yield '';
    }

    // line 5
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")) . " form-control"))]);
        // line 7
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        return; yield '';
    }

    // line 10
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 12
        yield "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 13
        yield "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            yield "        <div class=\"input-group ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("group_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\">
            ";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                yield "                <span class=\"input-group-addon\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 18
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                yield "                <span class=\"input-group-addon\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 22
            yield "        </div>
    ";
        } else {
            // line 24
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 28
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        if (($context["symbol"] ?? null)) {
            // line 30
            yield "<div class=\"input-group\">";
            // line 31
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 32
            yield "<span class=\"input-group-addon\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
        </div>";
        } else {
            // line 35
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 39
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 41
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 43
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 43), "")) : ("")) . " form-inline"))]);
            // line 44
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 45), 'errors');
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 46), 'errors');
            // line 48
            yield "<div class=\"sr-only\">";
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 49), "year", [], "any", true, true, false, 49)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 49), "year", [], "any", false, false, false, 49), 'label');
            }
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 50), "month", [], "any", true, true, false, 50)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 50), "month", [], "any", false, false, false, 50), 'label');
            }
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 51), "day", [], "any", true, true, false, 51)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 51), "day", [], "any", false, false, false, 51), 'label');
            }
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 52), "hour", [], "any", true, true, false, 52)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 52), "hour", [], "any", false, false, false, 52), 'label');
            }
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 53), "minute", [], "any", true, true, false, 53)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 53), "minute", [], "any", false, false, false, 53), 'label');
            }
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 54), "second", [], "any", true, true, false, 54)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'label');
            }
            // line 55
            yield "</div>";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 57), 'widget', ["datetime" => true]);
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 58), 'widget', ["datetime" => true]);
            // line 59
            yield "</div>";
        }
        return; yield '';
    }

    // line 63
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 65
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 67), "")) : ("")) . " form-inline"))]);
            // line 68
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 69
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 71
            if ( !(($context["label"] ?? null) === false)) {
                // line 72
                yield "<div class=\"sr-only\">
                ";
                // line 73
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 73), 'label');
                yield "
                ";
                // line 74
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 74), 'label');
                yield "
                ";
                // line 75
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 75), 'label');
                yield "
            </div>";
            }
            // line 79
            yield Twig\Extension\CoreExtension::replaceFilter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 80), 'widget'), "{{ month }}" =>             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 81), 'widget'), "{{ day }}" =>             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 82), 'widget')]);
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 85
                yield "</div>";
            }
        }
        return; yield '';
    }

    // line 90
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 92
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 94), "")) : ("")) . " form-inline"))]);
            // line 95
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 96
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 98
            if ( !(($context["label"] ?? null) === false)) {
                yield "<div class=\"sr-only\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 98), 'label');
                yield "</div>";
            }
            // line 99
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 99), 'widget');
            // line 100
            if (($context["with_minutes"] ?? null)) {
                yield ":";
                if ( !(($context["label"] ?? null) === false)) {
                    yield "<div class=\"sr-only\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 100), 'label');
                    yield "</div>";
                }
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 100), 'widget');
            }
            // line 101
            if (($context["with_seconds"] ?? null)) {
                yield ":";
                if ( !(($context["label"] ?? null) === false)) {
                    yield "<div class=\"sr-only\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 101), 'label');
                    yield "</div>";
                }
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 101), 'widget');
            }
            // line 102
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 103
                yield "</div>";
            }
        }
        return; yield '';
    }

    // line 108
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 110
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 112), "")) : ("")) . " form-inline"))]);
            // line 113
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 114
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 115
            yield "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 116
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("table_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            yield "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 119
            if (($context["with_years"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 119), 'label');
                yield "</th>";
            }
            // line 120
            if (($context["with_months"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 120), 'label');
                yield "</th>";
            }
            // line 121
            if (($context["with_weeks"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 121), 'label');
                yield "</th>";
            }
            // line 122
            if (($context["with_days"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 122), 'label');
                yield "</th>";
            }
            // line 123
            if (($context["with_hours"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 123), 'label');
                yield "</th>";
            }
            // line 124
            if (($context["with_minutes"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 124), 'label');
                yield "</th>";
            }
            // line 125
            if (($context["with_seconds"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 125), 'label');
                yield "</th>";
            }
            // line 126
            yield "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 130
            if (($context["with_years"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 130), 'widget');
                yield "</td>";
            }
            // line 131
            if (($context["with_months"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 131), 'widget');
                yield "</td>";
            }
            // line 132
            if (($context["with_weeks"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 132), 'widget');
                yield "</td>";
            }
            // line 133
            if (($context["with_days"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 133), 'widget');
                yield "</td>";
            }
            // line 134
            if (($context["with_hours"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 134), 'widget');
                yield "</td>";
            }
            // line 135
            if (($context["with_minutes"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 135), 'widget');
                yield "</td>";
            }
            // line 136
            if (($context["with_seconds"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 136), 'widget');
                yield "</td>";
            }
            // line 137
            yield "</tr>
                    </tbody>
                </table>
            </div>";
            // line 141
            if (($context["with_invert"] ?? null)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 141), 'widget');
            }
            // line 142
            yield "</div>";
        }
        return; yield '';
    }

    // line 146
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 147), "")) : ("")))) {
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 150
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 150), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 155
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 157
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 158
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 158), "")) : ("")), "translation_domain" =>                 // line 159
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "</div>";
        }
        return; yield '';
    }

    // line 168
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(Twig\Extension\CoreExtension::replaceFilter(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 170)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 170), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "", "switch-custom" => ""]))]);
        // line 171
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        return; yield '';
    }

    // line 174
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield '';
    }

    // line 178
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield '';
    }

    // line 184
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 185), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 185, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 187
        yield "</div>";
        return; yield '';
    }

    // line 190
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        $context["force_error"] = true;
        // line 192
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 195
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        $context["force_error"] = true;
        // line 197
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 200
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        $context["force_error"] = true;
        // line 202
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 205
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        $context["force_error"] = true;
        // line 207
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  653 => 207,  651 => 206,  647 => 205,  642 => 202,  640 => 201,  636 => 200,  631 => 197,  629 => 196,  625 => 195,  620 => 192,  618 => 191,  614 => 190,  609 => 187,  607 => 186,  595 => 185,  591 => 184,  586 => 179,  582 => 178,  577 => 175,  573 => 174,  568 => 171,  566 => 170,  562 => 168,  556 => 162,  550 => 159,  549 => 158,  548 => 157,  544 => 156,  540 => 155,  533 => 151,  532 => 150,  531 => 149,  527 => 148,  525 => 147,  521 => 146,  515 => 142,  511 => 141,  506 => 137,  500 => 136,  494 => 135,  488 => 134,  482 => 133,  476 => 132,  470 => 131,  464 => 130,  459 => 126,  453 => 125,  447 => 124,  441 => 123,  435 => 122,  429 => 121,  423 => 120,  417 => 119,  412 => 116,  409 => 115,  407 => 114,  403 => 113,  401 => 112,  398 => 110,  396 => 109,  392 => 108,  385 => 103,  383 => 102,  373 => 101,  363 => 100,  361 => 99,  355 => 98,  350 => 96,  348 => 95,  346 => 94,  343 => 92,  341 => 91,  337 => 90,  330 => 85,  328 => 84,  326 => 82,  325 => 81,  324 => 80,  323 => 79,  318 => 75,  314 => 74,  310 => 73,  307 => 72,  305 => 71,  300 => 69,  298 => 68,  296 => 67,  293 => 65,  291 => 64,  287 => 63,  281 => 59,  279 => 58,  277 => 57,  275 => 55,  271 => 54,  267 => 53,  263 => 52,  259 => 51,  255 => 50,  251 => 49,  249 => 48,  247 => 46,  245 => 45,  241 => 44,  239 => 43,  236 => 41,  234 => 40,  230 => 39,  224 => 35,  218 => 32,  216 => 31,  214 => 30,  212 => 29,  208 => 28,  202 => 24,  198 => 22,  192 => 20,  190 => 19,  188 => 18,  182 => 16,  180 => 15,  175 => 14,  172 => 13,  169 => 12,  167 => 11,  163 => 10,  158 => 7,  156 => 6,  152 => 5,  147 => 205,  144 => 204,  142 => 200,  139 => 199,  137 => 195,  134 => 194,  132 => 190,  129 => 189,  127 => 184,  124 => 183,  121 => 181,  119 => 178,  116 => 177,  114 => 174,  111 => 173,  109 => 168,  106 => 167,  103 => 165,  101 => 146,  99 => 108,  97 => 90,  94 => 89,  92 => 63,  89 => 62,  87 => 39,  84 => 38,  82 => 28,  79 => 27,  77 => 10,  74 => 9,  72 => 5,  69 => 4,  66 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_base_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
