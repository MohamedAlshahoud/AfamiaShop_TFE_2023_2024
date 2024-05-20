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

/* form_div_layout.html.twig */
class __TwigTemplate_d3dd8cd7380caa7fef2abec1d30d2410 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 11
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 20
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 30
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 37
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 41
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 49
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 80
        yield from $this->unwrap()->yieldBlock('choice_widget_options', $context, $blocks);
        // line 93
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 97
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 101
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 114
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 128
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 139
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 174
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 180
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 185
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 189
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 194
        yield from $this->unwrap()->yieldBlock('search_widget', $context, $blocks);
        // line 199
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 204
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 209
        yield from $this->unwrap()->yieldBlock('hidden_widget', $context, $blocks);
        // line 214
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 219
        yield from $this->unwrap()->yieldBlock('range_widget', $context, $blocks);
        // line 224
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 252
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 257
        yield from $this->unwrap()->yieldBlock('reset_widget', $context, $blocks);
        // line 262
        yield from $this->unwrap()->yieldBlock('tel_widget', $context, $blocks);
        // line 267
        yield from $this->unwrap()->yieldBlock('color_widget', $context, $blocks);
        // line 272
        yield from $this->unwrap()->yieldBlock('week_widget', $context, $blocks);
        // line 285
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 321
        yield from $this->unwrap()->yieldBlock('button_label', $context, $blocks);
        // line 324
        yield "
";
        // line 325
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 345
        yield "
";
        // line 348
        yield from $this->unwrap()->yieldBlock('repeated_row', $context, $blocks);
        // line 356
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 369
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 375
        yield from $this->unwrap()->yieldBlock('hidden_row', $context, $blocks);
        // line 381
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 387
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 401
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 408
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 418
        yield from $this->unwrap()->yieldBlock('form_rest', $context, $blocks);
        // line 439
        yield "
";
        // line 442
        yield from $this->unwrap()->yieldBlock('form_rows', $context, $blocks);
        // line 448
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 455
        yield from $this->unwrap()->yieldBlock('widget_container_attributes', $context, $blocks);
        // line 460
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 465
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        return; yield '';
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        yield "<input type=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["type"] ?? null), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
            yield "value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["value"] ?? null), "html", null, true);
            yield "\" ";
        }
        yield "/>";
        return; yield '';
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        yield "</div>";
        return; yield '';
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 31))) {
            // line 32
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        return; yield '';
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "<textarea ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["value"] ?? null), "html", null, true);
        yield "</textarea>";
        return; yield '';
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            yield from             $this->unwrap()->yieldBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            yield from             $this->unwrap()->yieldBlock("choice_widget_collapsed", $context, $blocks);
        }
        return; yield '';
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "</div>";
        return; yield '';
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 59) || (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        yield "<select ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            yield " multiple=\"multiple\"";
        }
        yield ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            yield "<option value=\"\"";
            if ((($context["required"] ?? null) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null)))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            (((($context["placeholder"] ?? null) != "")) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true)) : (yield ""));
            yield "</option>";
        }
        // line 66
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            yield "            ";
            $context["render_preferred_choices"] = true;
            // line 69
            yield from             $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 71
                yield "<option disabled=\"disabled\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["separator"] ?? null), "html", null, true);
                yield "</option>";
            }
        }
        // line 74
        $context["options"] = ($context["choices"] ?? null);
        // line 75
        $context["render_preferred_choices"] = false;
        // line 76
        yield from         $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
        // line 77
        yield "</select>";
        return; yield '';
    }

    // line 80
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 82
            if (is_iterable($context["choice"])) {
                // line 83
                yield "<optgroup label=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                yield "\">
                ";
                // line 84
                $context["options"] = $context["choice"];
                // line 85
                yield from                 $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
                // line 86
                yield "</optgroup>";
            } else {
                // line 88
                yield "<option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 88), "html", null, true);
                yield "\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)) {
                    $__internal_compile_0 = $context;
                    $__internal_compile_1 = ["attr" => CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)];
                    if (!is_iterable($__internal_compile_1)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 88, $this->getSourceContext());
                    }
                    $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                    yield from                     $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_0;
                }
                if (( !((array_key_exists("render_preferred_choices", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["render_preferred_choices"] ?? null), false)) : (false)) && Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null)))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "labelTranslationParameters", [], "any", false, false, false, 88), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                yield "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 93
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        yield "<input type=\"checkbox\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if (($context["checked"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield " />";
        return; yield '';
    }

    // line 97
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        yield "<input type=\"radio\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if (($context["checked"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield " />";
        return; yield '';
    }

    // line 101
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 103
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 106
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 106), 'errors');
            // line 107
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 107), 'errors');
            // line 108
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 108), 'widget');
            // line 109
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 109), 'widget');
            // line 110
            yield "</div>";
        }
        return; yield '';
    }

    // line 114
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 116
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 119
            yield Twig\Extension\CoreExtension::replaceFilter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 120), 'widget'), "{{ month }}" =>             // line 121
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 121), 'widget'), "{{ day }}" =>             // line 122
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 122), 'widget')]);
            // line 124
            yield "</div>";
        }
        return; yield '';
    }

    // line 128
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 130
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 133
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 134
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            // line 135
            yield "        </div>";
        }
        return; yield '';
    }

    // line 139
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 141
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 143
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 144
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 145
            yield "<table class=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("table_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 148
            if (($context["with_years"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 148), 'label');
                yield "</th>";
            }
            // line 149
            if (($context["with_months"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 149), 'label');
                yield "</th>";
            }
            // line 150
            if (($context["with_weeks"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 150), 'label');
                yield "</th>";
            }
            // line 151
            if (($context["with_days"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 151), 'label');
                yield "</th>";
            }
            // line 152
            if (($context["with_hours"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 152), 'label');
                yield "</th>";
            }
            // line 153
            if (($context["with_minutes"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 153), 'label');
                yield "</th>";
            }
            // line 154
            if (($context["with_seconds"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 154), 'label');
                yield "</th>";
            }
            // line 155
            yield "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 159
            if (($context["with_years"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 159), 'widget');
                yield "</td>";
            }
            // line 160
            if (($context["with_months"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 160), 'widget');
                yield "</td>";
            }
            // line 161
            if (($context["with_weeks"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 161), 'widget');
                yield "</td>";
            }
            // line 162
            if (($context["with_days"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 162), 'widget');
                yield "</td>";
            }
            // line 163
            if (($context["with_hours"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 163), 'widget');
                yield "</td>";
            }
            // line 164
            if (($context["with_minutes"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 164), 'widget');
                yield "</td>";
            }
            // line 165
            if (($context["with_seconds"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 165), 'widget');
                yield "</td>";
            }
            // line 166
            yield "</tr>
                </tbody>
            </table>";
            // line 169
            if (($context["with_invert"] ?? null)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 169), 'widget');
            }
            // line 170
            yield "</div>";
        }
        return; yield '';
    }

    // line 174
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "text")) : ("text"));
        // line 177
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 180
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "number")) : ("number"));
        // line 182
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 185
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->unwrap()->renderBlock("form_widget_simple", $context, $blocks));
        return; yield '';
    }

    // line 189
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "url")) : ("url"));
        // line 191
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 194
    public function block_search_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "search")) : ("search"));
        // line 196
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 199
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "text")) : ("text"));
        // line 201
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        if (($context["symbol"] ?? null)) {
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
        }
        return; yield '';
    }

    // line 204
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "password")) : ("password"));
        // line 206
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 209
    public function block_hidden_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 211
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 214
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "email")) : ("email"));
        // line 216
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 219
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "range")) : ("range"));
        // line 221
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 224
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
            // line 226
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                // line 227
                $context["label"] = Twig\Extension\CoreExtension::replaceFilter(($context["label_format"] ?? null), ["%name%" =>                 // line 228
($context["name"] ?? null), "%id%" =>                 // line 229
($context["id"] ?? null)]);
            } elseif ( !(            // line 231
($context["label"] ?? null) === false)) {
                // line 232
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 235
        yield "<button type=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">";
        // line 236
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 237
            if ((($context["label_html"] ?? null) === false)) {
                // line 238
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 240
                yield ($context["label"] ?? null);
            }
        } else {
            // line 243
            if ((($context["label_html"] ?? null) === false)) {
                // line 244
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 246
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        // line 249
        yield "</button>";
        return; yield '';
    }

    // line 252
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 254
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    // line 257
    public function block_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 259
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    // line 262
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "tel")) : ("tel"));
        // line 264
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 267
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "color")) : ("color"));
        // line 269
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 272
    public function block_week_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 274
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 276
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 277
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 278
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            yield "-";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            yield "
        </div>";
        }
        return; yield '';
    }

    // line 285
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        if ( !(($context["label"] ?? null) === false)) {
            // line 287
            if ( !($context["compound"] ?? null)) {
                // line 288
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 290
            if (($context["required"] ?? null)) {
                // line 291
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 291)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 291), "")) : ("")) . " required"))]);
            }
            // line 293
            if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 294
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 295
                    $context["label"] = Twig\Extension\CoreExtension::replaceFilter(($context["label_format"] ?? null), ["%name%" =>                     // line 296
($context["name"] ?? null), "%id%" =>                     // line 297
($context["id"] ?? null)]);
                } else {
                    // line 300
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 303
            yield "<";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_2 = $context;
                $__internal_compile_3 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($__internal_compile_3)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 303, $this->getSourceContext());
                }
                $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $__internal_compile_2;
            }
            yield ">";
            // line 304
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 305
                if ((($context["label_html"] ?? null) === false)) {
                    // line 306
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 308
                    yield ($context["label"] ?? null);
                }
            } else {
                // line 311
                if ((($context["label_html"] ?? null) === false)) {
                    // line 312
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 314
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 317
            yield "</";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        return; yield '';
    }

    // line 321
    public function block_button_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 325
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 327
            $context["help_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 327)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 327), "")) : ("")) . " help-text"))]);
            // line 328
            yield "<div id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 328, $this->getSourceContext());
            }
            $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            yield ">";
            // line 329
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 330
                if ((($context["help_html"] ?? null) === false)) {
                    // line 331
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["help"] ?? null), "html", null, true);
                } else {
                    // line 333
                    yield ($context["help"] ?? null);
                }
            } else {
                // line 336
                if ((($context["help_html"] ?? null) === false)) {
                    // line 337
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 339
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 342
            yield "</div>";
        }
        return; yield '';
    }

    // line 348
    public function block_repeated_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        return; yield '';
    }

    // line 356
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 357
        $context["widget_attr"] = [];
        // line 358
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 359
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 361
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 361, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 365
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 366
        yield "</div>";
        return; yield '';
    }

    // line 369
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 370
        yield "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 370, $this->getSourceContext());
        }
        $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        yield ">";
        // line 371
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 372
        yield "</div>";
        return; yield '';
    }

    // line 375
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        return; yield '';
    }

    // line 381
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 382
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 384
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        return; yield '';
    }

    // line 387
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 388
        CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 388);
        // line 389
        $context["method"] = Twig\Extension\CoreExtension::upperFilter($this->env, ($context["method"] ?? null));
        // line 390
        if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
            // line 391
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 393
            $context["form_method"] = "POST";
        }
        // line 395
        yield "<form";
        if ((($context["name"] ?? null) != "")) {
            yield " name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["name"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " method=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        yield "\"";
        if ((($context["action"] ?? null) != "")) {
            yield " action=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["action"] ?? null), "html", null, true);
            yield "\"";
        }
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            yield " enctype=\"multipart/form-data\"";
        }
        yield ">";
        // line 396
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 397
            yield "<input type=\"hidden\" name=\"_method\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["method"] ?? null), "html", null, true);
            yield "\" />";
        }
        return; yield '';
    }

    // line 401
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 402
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 403
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 405
        yield "</form>";
        return; yield '';
    }

    // line 408
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 409
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 410
            yield "<ul>";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 412
                yield "<li>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 412), "html", null, true);
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            yield "</ul>";
        }
        return; yield '';
    }

    // line 418
    public function block_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 420
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 420)) {
                // line 421
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, false, 425) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 426
            CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 426);
            // line 427
            $context["method"] = Twig\Extension\CoreExtension::upperFilter($this->env, ($context["method"] ?? null));
            // line 428
            if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
                // line 429
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 431
                $context["form_method"] = "POST";
            }
            // line 434
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 435
                yield "<input type=\"hidden\" name=\"_method\" value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["method"] ?? null), "html", null, true);
                yield "\" />";
            }
        }
        return; yield '';
    }

    // line 442
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 443); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 444
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 448
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 449
        yield "id=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        // line 450
        if (($context["disabled"] ?? null)) {
            yield " disabled=\"disabled\"";
        }
        // line 451
        if (($context["required"] ?? null)) {
            yield " required=\"required\"";
        }
        // line 452
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield '';
    }

    // line 455
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 456
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["id"] ?? null))) {
            yield "id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 457
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield '';
    }

    // line 460
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 461
        yield "id=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        if (($context["disabled"] ?? null)) {
            yield " disabled=\"disabled\"";
        }
        // line 462
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield '';
    }

    // line 465
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 467
            yield " ";
            // line 468
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 469
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrname"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((((($context["translation_domain"] ?? null) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], ($context["attr_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
                yield "\"";
            } elseif ((            // line 470
$context["attrvalue"] === true)) {
                // line 471
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrname"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 472
$context["attrvalue"] === false)) {
                // line 473
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrname"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1371 => 473,  1369 => 472,  1364 => 471,  1362 => 470,  1357 => 469,  1355 => 468,  1353 => 467,  1349 => 466,  1345 => 465,  1340 => 462,  1331 => 461,  1327 => 460,  1322 => 457,  1316 => 456,  1312 => 455,  1307 => 452,  1303 => 451,  1299 => 450,  1293 => 449,  1289 => 448,  1280 => 444,  1276 => 443,  1272 => 442,  1263 => 435,  1261 => 434,  1258 => 431,  1255 => 429,  1253 => 428,  1251 => 427,  1249 => 426,  1247 => 425,  1240 => 421,  1238 => 420,  1234 => 419,  1230 => 418,  1224 => 414,  1216 => 412,  1212 => 411,  1210 => 410,  1208 => 409,  1204 => 408,  1199 => 405,  1196 => 403,  1194 => 402,  1190 => 401,  1182 => 397,  1180 => 396,  1160 => 395,  1157 => 393,  1154 => 391,  1152 => 390,  1150 => 389,  1148 => 388,  1144 => 387,  1139 => 384,  1137 => 383,  1135 => 382,  1131 => 381,  1126 => 376,  1122 => 375,  1117 => 372,  1115 => 371,  1103 => 370,  1099 => 369,  1094 => 366,  1092 => 365,  1090 => 364,  1088 => 363,  1086 => 362,  1074 => 361,  1071 => 359,  1069 => 358,  1067 => 357,  1063 => 356,  1058 => 353,  1054 => 348,  1048 => 342,  1044 => 339,  1041 => 337,  1039 => 336,  1035 => 333,  1032 => 331,  1030 => 330,  1028 => 329,  1014 => 328,  1012 => 327,  1010 => 326,  1006 => 325,  999 => 321,  991 => 317,  987 => 314,  984 => 312,  982 => 311,  978 => 308,  975 => 306,  973 => 305,  971 => 304,  956 => 303,  952 => 300,  949 => 297,  948 => 296,  947 => 295,  945 => 294,  943 => 293,  940 => 291,  938 => 290,  935 => 288,  933 => 287,  931 => 286,  927 => 285,  917 => 278,  912 => 277,  910 => 276,  907 => 274,  905 => 273,  901 => 272,  896 => 269,  894 => 268,  890 => 267,  885 => 264,  883 => 263,  879 => 262,  874 => 259,  872 => 258,  868 => 257,  863 => 254,  861 => 253,  857 => 252,  852 => 249,  848 => 246,  845 => 244,  843 => 243,  839 => 240,  836 => 238,  834 => 237,  832 => 236,  826 => 235,  822 => 232,  820 => 231,  818 => 229,  817 => 228,  816 => 227,  814 => 226,  812 => 225,  808 => 224,  803 => 221,  801 => 220,  797 => 219,  792 => 216,  790 => 215,  786 => 214,  781 => 211,  779 => 210,  775 => 209,  770 => 206,  768 => 205,  764 => 204,  755 => 201,  753 => 200,  749 => 199,  744 => 196,  742 => 195,  738 => 194,  733 => 191,  731 => 190,  727 => 189,  722 => 186,  718 => 185,  713 => 182,  711 => 181,  707 => 180,  702 => 177,  700 => 176,  696 => 174,  690 => 170,  686 => 169,  682 => 166,  676 => 165,  670 => 164,  664 => 163,  658 => 162,  652 => 161,  646 => 160,  640 => 159,  635 => 155,  629 => 154,  623 => 153,  617 => 152,  611 => 151,  605 => 150,  599 => 149,  593 => 148,  587 => 145,  585 => 144,  581 => 143,  578 => 141,  576 => 140,  572 => 139,  566 => 135,  556 => 134,  551 => 133,  549 => 132,  546 => 130,  544 => 129,  540 => 128,  534 => 124,  532 => 122,  531 => 121,  530 => 120,  529 => 119,  525 => 118,  522 => 116,  520 => 115,  516 => 114,  510 => 110,  508 => 109,  506 => 108,  504 => 107,  502 => 106,  498 => 105,  495 => 103,  493 => 102,  489 => 101,  474 => 98,  470 => 97,  455 => 94,  451 => 93,  414 => 88,  411 => 86,  409 => 85,  407 => 84,  402 => 83,  400 => 82,  383 => 81,  379 => 80,  374 => 77,  372 => 76,  370 => 75,  368 => 74,  362 => 71,  360 => 70,  358 => 69,  355 => 68,  353 => 67,  351 => 66,  342 => 64,  340 => 63,  333 => 62,  330 => 60,  328 => 59,  324 => 58,  319 => 55,  313 => 53,  311 => 52,  307 => 51,  303 => 50,  299 => 49,  293 => 45,  290 => 43,  288 => 42,  284 => 41,  275 => 38,  271 => 37,  266 => 34,  263 => 32,  261 => 31,  257 => 30,  252 => 27,  250 => 26,  248 => 25,  245 => 23,  243 => 22,  239 => 21,  235 => 20,  220 => 17,  217 => 15,  215 => 13,  213 => 12,  209 => 11,  203 => 7,  200 => 5,  198 => 4,  194 => 3,  189 => 465,  187 => 460,  185 => 455,  183 => 448,  181 => 442,  178 => 439,  176 => 418,  174 => 408,  172 => 401,  170 => 387,  168 => 381,  166 => 375,  164 => 369,  162 => 356,  160 => 348,  157 => 345,  155 => 325,  152 => 324,  150 => 321,  148 => 285,  146 => 272,  144 => 267,  142 => 262,  140 => 257,  138 => 252,  136 => 224,  134 => 219,  132 => 214,  130 => 209,  128 => 204,  126 => 199,  124 => 194,  122 => 189,  120 => 185,  118 => 180,  116 => 174,  114 => 139,  112 => 128,  110 => 114,  108 => 101,  106 => 97,  104 => 93,  102 => 80,  100 => 58,  98 => 49,  96 => 41,  94 => 37,  92 => 30,  90 => 20,  88 => 11,  86 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
