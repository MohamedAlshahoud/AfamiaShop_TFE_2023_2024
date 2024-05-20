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

/* foundation_6_layout.html.twig */
class __TwigTemplate_80df5174de1623ef82dbd6f042976fa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'button_widget' => [$this, 'block_button_widget'],
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
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_6_layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["parent_class"] = ((array_key_exists("parent_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["parent_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : (""))));
        // line 5
        if (CoreExtension::inFilter("switch-input", ($context["parent_class"] ?? null))) {
            // line 6
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 7
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 7), "")) : ("")) . " switch-input"))]);
            // line 8
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            // line 9
            yield "<label class=\"switch-paddle\" for=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
            yield "\"></label>";
            // line 10
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        } else {
            // line 12
            yield from             $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        }
        return; yield '';
    }

    // line 16
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 18
        yield "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 19
        yield "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 20
            yield "        <div class=\"input-group\">
            ";
            // line 21
            if (($context["prepend"] ?? null)) {
                // line 22
                yield "                <span class=\"input-group-label\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 24
            yield "            ";
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 24), "")) : ("")) . " input-group-field"))]);
            // line 25
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                yield "                <span class=\"input-group-label\">";
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
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if (($context["symbol"] ?? null)) {
            // line 37
            yield "<div class=\"input-group\">
            ";
            // line 38
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 38), "")) : ("")) . " input-group-field"))]);
            // line 39
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 40
            yield "<span class=\"input-group-label\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
        </div>";
        } else {
            // line 43
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 47
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " button"))]);
        // line 49
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "foundation_6_layout.html.twig";
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
        return array (  154 => 49,  152 => 48,  148 => 47,  142 => 43,  136 => 40,  134 => 39,  132 => 38,  129 => 37,  127 => 36,  123 => 35,  117 => 31,  113 => 29,  107 => 27,  105 => 26,  103 => 25,  100 => 24,  94 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  77 => 16,  71 => 12,  68 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "foundation_6_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_6_layout.html.twig");
    }
}
