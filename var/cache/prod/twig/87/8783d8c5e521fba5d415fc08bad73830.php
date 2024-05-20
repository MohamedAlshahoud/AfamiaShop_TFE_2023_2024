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

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_bd3ab507c3753df2c959075092650119 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 7
        yield "
";
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 18
        yield "
";
        // line 19
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 22
        yield "
";
        // line 24
        yield "
";
        // line 25
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 39
        yield "
";
        // line 40
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 48
        yield "
";
        // line 49
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        return; yield '';
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")) . " form-horizontal"))]);
        // line 5
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        return; yield '';
    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .             $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            // line 15
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        return; yield '';
    }

    // line 19
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "col-sm-2";
        return; yield '';
    }

    // line 25
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["widget_attr"] = [];
        // line 27
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 28
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 30
        yield "<div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 30), "")) : ("")) . " form-group") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 30, $this->getSourceContext());
        }
        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        yield ">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 32
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 36
        yield "</div>
";
        // line 37
        yield "</div>";
        return; yield '';
    }

    // line 40
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "<div";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 41), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 41, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">";
        // line 42
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 43
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 45
        yield "</div>";
        // line 46
        yield "</div>";
        return; yield '';
    }

    // line 49
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 50), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 50, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 51
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 52
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 54
        yield "</div>";
        // line 55
        yield "</div>";
        return; yield '';
    }

    // line 58
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "col-sm-10";
        return; yield '';
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 63), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 63, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 64
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 65
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 69
        yield "</div>";
        // line 70
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  294 => 70,  292 => 69,  290 => 68,  288 => 67,  286 => 66,  282 => 65,  278 => 64,  266 => 63,  262 => 62,  254 => 58,  249 => 55,  247 => 54,  245 => 53,  241 => 52,  237 => 51,  225 => 50,  221 => 49,  216 => 46,  214 => 45,  212 => 44,  208 => 43,  204 => 42,  192 => 41,  188 => 40,  183 => 37,  180 => 36,  178 => 35,  176 => 34,  174 => 33,  170 => 32,  168 => 31,  156 => 30,  153 => 28,  151 => 27,  149 => 26,  145 => 25,  137 => 19,  131 => 15,  129 => 14,  124 => 12,  122 => 11,  118 => 10,  113 => 5,  111 => 4,  107 => 3,  102 => 62,  99 => 61,  97 => 58,  94 => 57,  92 => 49,  89 => 48,  87 => 40,  84 => 39,  82 => 25,  79 => 24,  76 => 22,  74 => 19,  71 => 18,  69 => 10,  66 => 9,  63 => 7,  61 => 3,  58 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_horizontal_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
