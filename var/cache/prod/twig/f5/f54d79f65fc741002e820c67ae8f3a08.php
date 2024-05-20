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

/* bootstrap_5_horizontal_layout.html.twig */
class __TwigTemplate_9a2b011518cf4b8a233b208d54f826d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_5_layout.html.twig", "bootstrap_5_horizontal_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'button_row' => [$this, 'block_button_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
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
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 19
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 23
        yield "
";
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 72
        yield "
";
        // line 73
        yield from $this->unwrap()->yieldBlock('fieldset_form_row', $context, $blocks);
        // line 89
        yield "
";
        // line 90
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 98
        yield "
";
        // line 99
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 116
        yield "
";
        // line 117
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 127
        yield "
";
        // line 128
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        return; yield '';
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 9
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : (""))));
            // line 10
            if ((!CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null)) && !CoreExtension::inFilter("input-group", ($context["row_class"] ?? null)))) {
                // line 11
                if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                    // line 12
                    $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " col-form-label"))]);
                }
                // line 14
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            }
            // line 16
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        return; yield '';
    }

    // line 20
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "col-sm-2";
        return; yield '';
    }

    // line 26
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 28
            yield from             $this->unwrap()->yieldBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 30
            $context["widget_attr"] = [];
            // line 31
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
                // line 32
                $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
            }
            // line 34
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3"))));
            // line 35
            $context["is_form_floating"] = ((array_key_exists("is_form_floating", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["is_form_floating"] ?? null), CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null)))) : (CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null))));
            // line 36
            $context["is_input_group"] = ((array_key_exists("is_input_group", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["is_input_group"] ?? null), CoreExtension::inFilter("input-group", ($context["row_class"] ?? null)))) : (CoreExtension::inFilter("input-group", ($context["row_class"] ?? null))));
            // line 38
            $context["row_class"] = Twig\Extension\CoreExtension::replaceFilter(($context["row_class"] ?? null), ["form-floating" => "", "input-group" => ""]);
            // line 39
            yield "<div";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((($context["row_class"] ?? null) . " row") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 39, $this->getSourceContext());
            }
            $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_0;
            yield ">";
            // line 40
            if ((($context["is_form_floating"] ?? null) || ($context["is_input_group"] ?? null))) {
                // line 41
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
                <div class=\"";
                // line 42
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 43
                if (($context["is_form_floating"] ?? null)) {
                    // line 44
                    yield "<div class=\"form-floating\">";
                    // line 45
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 46
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 47
                    yield "</div>";
                } elseif (                // line 48
($context["is_input_group"] ?? null)) {
                    // line 49
                    yield "<div class=\"input-group\">";
                    // line 50
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 51
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 53
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                    // line 54
                    yield "</div>";
                }
                // line 56
                if ( !($context["is_input_group"] ?? null)) {
                    // line 57
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                }
                // line 59
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 60
                yield "</div>";
            } else {
                // line 62
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                // line 63
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 64
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                // line 65
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                // line 66
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 67
                yield "</div>";
            }
            // line 69
            yield "</div>";
        }
        return; yield '';
    }

    // line 73
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        $context["widget_attr"] = [];
        // line 75
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 76
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 78
        yield "<fieldset";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 78), "mb-3")) : ("mb-3")))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 78, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">
        <div class=\"row";
        // line 79
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " is-invalid";
        }
        yield "\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 81
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 85
        yield "</div>
        </div>
    </fieldset>";
        return; yield '';
    }

    // line 90
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 91), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 91, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 92
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 93
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 95
        yield "</div>";
        // line 96
        yield "</div>";
        return; yield '';
    }

    // line 99
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 100), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 100, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 101
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 102
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 104
        yield "</div>";
        // line 105
        yield "</div>";
        return; yield '';
    }

    // line 108
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        yield "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 109), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 109, $this->getSourceContext());
        }
        $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        yield ">";
        // line 110
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 111
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 113
        yield "</div>";
        // line 114
        yield "</div>";
        return; yield '';
    }

    // line 117
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        yield "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 118), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 118, $this->getSourceContext());
        }
        $__internal_compile_11 = CoreExtension::toArray($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        yield ">";
        // line 119
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 120
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 124
        yield "</div>";
        // line 125
        yield "</div>";
        return; yield '';
    }

    // line 128
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "col-sm-10";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_5_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  434 => 128,  429 => 125,  427 => 124,  425 => 123,  423 => 122,  421 => 121,  417 => 120,  413 => 119,  401 => 118,  397 => 117,  392 => 114,  390 => 113,  388 => 112,  384 => 111,  380 => 110,  368 => 109,  364 => 108,  359 => 105,  357 => 104,  355 => 103,  351 => 102,  347 => 101,  335 => 100,  331 => 99,  326 => 96,  324 => 95,  322 => 94,  318 => 93,  314 => 92,  302 => 91,  298 => 90,  291 => 85,  289 => 84,  287 => 83,  285 => 82,  281 => 81,  279 => 80,  274 => 79,  261 => 78,  258 => 76,  256 => 75,  254 => 74,  250 => 73,  244 => 69,  241 => 67,  239 => 66,  237 => 65,  235 => 64,  231 => 63,  229 => 62,  226 => 60,  224 => 59,  221 => 57,  219 => 56,  216 => 54,  214 => 53,  212 => 51,  210 => 50,  208 => 49,  206 => 48,  204 => 47,  202 => 46,  200 => 45,  198 => 44,  196 => 43,  193 => 42,  188 => 41,  186 => 40,  174 => 39,  172 => 38,  170 => 36,  168 => 35,  166 => 34,  163 => 32,  161 => 31,  159 => 30,  156 => 28,  154 => 27,  150 => 26,  142 => 20,  136 => 16,  133 => 14,  130 => 12,  128 => 11,  126 => 10,  124 => 9,  119 => 7,  117 => 6,  113 => 5,  108 => 128,  105 => 127,  103 => 117,  100 => 116,  98 => 108,  95 => 107,  93 => 99,  90 => 98,  88 => 90,  85 => 89,  83 => 73,  80 => 72,  78 => 26,  75 => 25,  72 => 23,  70 => 20,  67 => 19,  65 => 5,  62 => 4,  59 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_5_horizontal_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_5_horizontal_layout.html.twig");
    }
}
