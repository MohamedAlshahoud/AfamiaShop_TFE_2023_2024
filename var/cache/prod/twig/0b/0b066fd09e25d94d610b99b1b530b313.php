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

/* foundation_5_layout.html.twig */
class __TwigTemplate_54e19b0a37a8a54364c0f38865053940 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'choice_label' => [$this, 'block_choice_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'form_row' => [$this, 'block_form_row'],
            'choice_row' => [$this, 'block_choice_row'],
            'date_row' => [$this, 'block_date_row'],
            'time_row' => [$this, 'block_time_row'],
            'datetime_row' => [$this, 'block_datetime_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'form_errors' => [$this, 'block_form_errors'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 8
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 8), "")) : ("")) . " error"))]);
            // line 9
            yield "    ";
        }
        // line 10
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 13
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 15
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 15), "")) : ("")) . " error"))]);
            // line 16
            yield "    ";
        }
        // line 17
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        return; yield '';
    }

    // line 20
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 21), "")) : ("")) . " button"))]);
        // line 22
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    // line 25
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 28
        yield "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 29
            yield "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
            yield "</span>
            </div>
        ";
        }
        // line 33
        yield "        <div class=\"small-9 large-10 columns\">";
        // line 34
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 35
        yield "</div>
        ";
        // line 36
        if (($context["prepend"] ?? null)) {
            // line 37
            yield "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
            yield "</span>
            </div>
        ";
        }
        // line 41
        yield "    </div>";
        return; yield '';
    }

    // line 44
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        yield "<div class=\"row collapse\">";
        // line 46
        if (($context["symbol"] ?? null)) {
            // line 47
            yield "<div class=\"small-9 large-10 columns\">";
            // line 48
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 49
            yield "</div>
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
            </div>";
        } else {
            // line 54
            yield "<div class=\"small-12 large-12 columns\">";
            // line 55
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 56
            yield "</div>";
        }
        // line 58
        yield "</div>";
        return; yield '';
    }

    // line 61
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 63
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")) . " row"))]);
            // line 66
            yield "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 67), 'errors');
            yield "</div>
            <div class=\"large-5 columns\">";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 68), 'errors');
            yield "</div>
        </div>
        <div ";
            // line 70
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            <div class=\"large-7 columns\">";
            // line 71
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 71), 'widget', ["datetime" => true]);
            yield "</div>
            <div class=\"large-5 columns\">";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 72), 'widget', ["datetime" => true]);
            yield "</div>
        </div>
    ";
        }
        return; yield '';
    }

    // line 77
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 79
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 81
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 81), "")) : ("")) . " row"))]);
            // line 82
            yield "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 83
                yield "            <div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">
        ";
            }
            // line 85
            yield Twig\Extension\CoreExtension::replaceFilter(($context["date_pattern"] ?? null), ["{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 86
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 86), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 87
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 87), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 88
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 88), 'widget')) . "</div>")]);
            // line 90
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 91
                yield "            </div>
        ";
            }
            // line 93
            yield "    ";
        }
        return; yield '';
    }

    // line 96
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 98
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 100), "")) : ("")) . " row"))]);
            // line 101
            yield "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 102
                yield "            <div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">
        ";
            }
            // line 104
            yield "        ";
            if (($context["with_seconds"] ?? null)) {
                // line 105
                yield "            <div class=\"large-4 columns\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 105), 'widget');
                yield "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 112
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 112), 'widget');
                yield "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 122
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 122), 'widget');
                yield "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 127
                yield "            <div class=\"large-6 columns\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 127), 'widget');
                yield "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 134
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 134), 'widget');
                yield "
                    </div>
                </div>
            </div>
        ";
            }
            // line 139
            yield "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 140
                yield "            </div>
        ";
            }
            // line 142
            yield "    ";
        }
        return; yield '';
    }

    // line 145
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 147
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 147), "")) : ("")) . " error"))]);
            // line 148
            yield "    ";
        }
        // line 149
        yield "
    ";
        // line 150
        if (($context["multiple"] ?? null)) {
            // line 151
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["style" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "style", [], "any", true, true, false, 151)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "style", [], "any", false, false, false, 151), "")) : ("")) . " height: auto; background-image: none;"))]);
            // line 152
            yield "    ";
        }
        // line 153
        yield "
    ";
        // line 154
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 155
            $context["required"] = false;
        }
        // line 157
        yield "<select ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            yield " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        yield ">
        ";
        // line 158
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 159
            yield "<option value=\"\"";
            if ((($context["required"] ?? null) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null)))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            yield "</option>";
        }
        // line 161
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 162
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 163
            yield "            ";
            $context["render_preferred_choices"] = true;
            // line 164
            yield from             $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
            // line 165
            if (((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 166
                yield "<option disabled=\"disabled\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["separator"] ?? null), "html", null, true);
                yield "</option>";
            }
        }
        // line 169
        $context["options"] = ($context["choices"] ?? null);
        // line 170
        $context["render_preferred_choices"] = false;
        // line 171
        yield from         $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
        // line 172
        yield "</select>";
        return; yield '';
    }

    // line 175
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 176)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 176), "")) : ("")))) {
            // line 177
            yield "        <ul class=\"inline-list\">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                yield "                <li>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 180
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 180), "")) : (""))]);
                // line 181
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "        </ul>
    ";
        } else {
            // line 185
            yield "        <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 187
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 188
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 188)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 188), "")) : (""))]);
                // line 189
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            yield "        </div>
    ";
        }
        return; yield '';
    }

    // line 195
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 197
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 198
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 198), "")) : ("")) . " error"))]);
            // line 199
            yield "    ";
        }
        // line 200
        yield "    ";
        if (CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 201
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            yield "
    ";
        } else {
            // line 203
            yield "        <div class=\"checkbox\">
            ";
            // line 204
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            yield "
        </div>
    ";
        }
        return; yield '';
    }

    // line 209
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 211
        yield "    ";
        if (CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 212
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            yield "
    ";
        } else {
            // line 214
            yield "        ";
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 215
                $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 215), "")) : ("")) . " error"))]);
                // line 216
                yield "        ";
            }
            // line 217
            yield "        <div class=\"radio\">
            ";
            // line 218
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            yield "
        </div>
    ";
        }
        return; yield '';
    }

    // line 225
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 227
            $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 227)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 227), "")) : ("")) . " error"))]);
            // line 228
            yield "    ";
        }
        // line 229
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        return; yield '';
    }

    // line 232
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 234
            $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 234)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 234), "")) : ("")) . " error"))]);
            // line 235
            yield "    ";
        }
        // line 236
        yield "    ";
        // line 237
        yield "    ";
        $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(Twig\Extension\CoreExtension::replaceFilter(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 237)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 237), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 238
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        return; yield '';
    }

    // line 241
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield '';
    }

    // line 245
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield '';
    }

    // line 249
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        if (($context["required"] ?? null)) {
            // line 251
            yield "        ";
            $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 251), "")) : ("")) . " required"))]);
            // line 252
            yield "    ";
        }
        // line 253
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 254
            $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 254)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 254), "")) : ("")) . " error"))]);
            // line 255
            yield "    ";
        }
        // line 256
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
            // line 257
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                // line 258
                $context["label"] = Twig\Extension\CoreExtension::replaceFilter(($context["label_format"] ?? null), ["%name%" =>                 // line 259
($context["name"] ?? null), "%id%" =>                 // line 260
($context["id"] ?? null)]);
            } else {
                // line 263
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 266
        yield "    <label";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["label_attr"] ?? null)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 266, $this->getSourceContext());
        }
        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        yield ">
        ";
        // line 267
        yield ($context["widget"] ?? null);
        yield "
        ";
        // line 268
        yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
        yield "
    </label>";
        return; yield '';
    }

    // line 274
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 275
        $context["widget_attr"] = [];
        // line 276
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 277
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 279
        yield "<div";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 279)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 279), "")) : ("")) . " row"))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 279, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">
        <div class=\"large-12 columns";
        // line 280
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " error";
        }
        yield "\">";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 282
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 283
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 285
        yield "</div>
    </div>";
        return; yield '';
    }

    // line 289
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 290
        $context["force_error"] = true;
        // line 291
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 294
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        $context["force_error"] = true;
        // line 296
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 299
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 300
        $context["force_error"] = true;
        // line 301
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 304
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 305
        $context["force_error"] = true;
        // line 306
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 309
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 310), "")) : ("")) . " row"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 310, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">
        <div class=\"large-12 columns";
        // line 311
        if ( !($context["valid"] ?? null)) {
            yield " error";
        }
        yield "\">
            ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 313
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
        </div>
    </div>";
        return; yield '';
    }

    // line 319
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 320
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 320)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 320), "")) : ("")) . " row"))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 320, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">
        <div class=\"large-12 columns";
        // line 321
        if ( !($context["valid"] ?? null)) {
            yield " error";
        }
        yield "\">
            ";
        // line 322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 323
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 324
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
        </div>
    </div>";
        return; yield '';
    }

    // line 331
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 332
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 333
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "<small class=\"error\">";
            } else {
                yield "<div data-alert class=\"alert-box alert\">";
            }
            // line 334
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 335
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 335), "html", null, true);
                yield "
            ";
                // line 336
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 336)) {
                    yield ", ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "</small>";
            } else {
                yield "</div>";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  882 => 338,  866 => 336,  862 => 335,  845 => 334,  839 => 333,  837 => 332,  833 => 331,  825 => 324,  823 => 323,  821 => 322,  815 => 321,  802 => 320,  798 => 319,  790 => 314,  788 => 313,  786 => 312,  780 => 311,  767 => 310,  763 => 309,  757 => 306,  755 => 305,  751 => 304,  745 => 301,  743 => 300,  739 => 299,  733 => 296,  731 => 295,  727 => 294,  721 => 291,  719 => 290,  715 => 289,  709 => 285,  707 => 284,  705 => 283,  703 => 282,  701 => 281,  696 => 280,  683 => 279,  680 => 277,  678 => 276,  676 => 275,  672 => 274,  665 => 268,  661 => 267,  648 => 266,  644 => 263,  641 => 260,  640 => 259,  639 => 258,  637 => 257,  634 => 256,  631 => 255,  629 => 254,  626 => 253,  623 => 252,  620 => 251,  618 => 250,  614 => 249,  609 => 246,  605 => 245,  600 => 242,  596 => 241,  591 => 238,  588 => 237,  586 => 236,  583 => 235,  581 => 234,  579 => 233,  575 => 232,  570 => 229,  567 => 228,  565 => 227,  563 => 226,  559 => 225,  550 => 218,  547 => 217,  544 => 216,  542 => 215,  539 => 214,  533 => 212,  530 => 211,  528 => 210,  524 => 209,  515 => 204,  512 => 203,  506 => 201,  503 => 200,  500 => 199,  498 => 198,  495 => 197,  493 => 196,  489 => 195,  482 => 191,  475 => 189,  473 => 188,  471 => 187,  467 => 186,  462 => 185,  458 => 183,  451 => 181,  449 => 180,  447 => 179,  443 => 178,  440 => 177,  438 => 176,  434 => 175,  429 => 172,  427 => 171,  425 => 170,  423 => 169,  417 => 166,  415 => 165,  413 => 164,  410 => 163,  408 => 162,  406 => 161,  397 => 159,  395 => 158,  387 => 157,  384 => 155,  382 => 154,  379 => 153,  376 => 152,  374 => 151,  372 => 150,  369 => 149,  366 => 148,  364 => 147,  362 => 146,  358 => 145,  352 => 142,  348 => 140,  345 => 139,  337 => 134,  326 => 127,  318 => 122,  305 => 112,  294 => 105,  291 => 104,  285 => 102,  282 => 101,  279 => 100,  276 => 98,  274 => 97,  270 => 96,  264 => 93,  260 => 91,  258 => 90,  256 => 88,  255 => 87,  254 => 86,  253 => 85,  247 => 83,  244 => 82,  241 => 81,  238 => 79,  236 => 78,  232 => 77,  223 => 72,  219 => 71,  215 => 70,  210 => 68,  206 => 67,  203 => 66,  200 => 65,  197 => 63,  195 => 62,  191 => 61,  186 => 58,  183 => 56,  181 => 55,  179 => 54,  174 => 51,  170 => 49,  168 => 48,  166 => 47,  164 => 46,  162 => 45,  158 => 44,  153 => 41,  147 => 38,  144 => 37,  142 => 36,  139 => 35,  137 => 34,  135 => 33,  129 => 30,  126 => 29,  123 => 28,  121 => 27,  118 => 26,  114 => 25,  109 => 22,  107 => 21,  103 => 20,  98 => 17,  95 => 16,  93 => 15,  91 => 14,  87 => 13,  82 => 10,  79 => 9,  77 => 8,  75 => 7,  71 => 6,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "foundation_5_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
