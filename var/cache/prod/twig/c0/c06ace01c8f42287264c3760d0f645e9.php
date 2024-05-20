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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_c7162855b250affb97fafb3e81b18a07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_crud_widget_fieldsets' => [$this, 'block_ea_crud_widget_fieldsets'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_form_column_group_open_row' => [$this, 'block_ea_form_column_group_open_row'],
                'ea_form_column_group_close_row' => [$this, 'block_ea_form_column_group_close_row'],
                'ea_form_column_open_row' => [$this, 'block_ea_form_column_open_row'],
                'ea_form_column_close_row' => [$this, 'block_ea_form_column_close_row'],
                'ea_form_fieldset_open_row' => [$this, 'block_ea_form_fieldset_open_row'],
                'ea_form_fieldset_close_row' => [$this, 'block_ea_form_fieldset_close_row'],
                'ea_form_tablist_row' => [$this, 'block_ea_form_tablist_row'],
                'ea_form_tabpane_group_open_row' => [$this, 'block_ea_form_tabpane_group_open_row'],
                'ea_form_tabpane_group_close_row' => [$this, 'block_ea_form_tabpane_group_close_row'],
                'ea_form_tabpane_open_row' => [$this, 'block_ea_form_tabpane_open_row'],
                'ea_form_tabpane_close_row' => [$this, 'block_ea_form_tabpane_close_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
        // line 0
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 29
        yield "
";
        // line 31
        yield "
";
        // line 32
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 49
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 55
        yield "
";
        // line 56
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 70
        yield "
";
        // line 72
        yield "
";
        // line 73
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 117
        yield "
";
        // line 118
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 129
        yield "
";
        // line 130
        yield from $this->unwrap()->yieldBlock('collection_row', $context, $blocks);
        // line 146
        yield "
";
        // line 147
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 176
        yield "
";
        // line 177
        yield from $this->unwrap()->yieldBlock('collection_entry_row', $context, $blocks);
        // line 219
        yield "
";
        // line 220
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 237
        yield "
";
        // line 238
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 243
        yield "
";
        // line 245
        yield "
";
        // line 246
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 290
        yield "
";
        // line 292
        yield "
";
        // line 293
        yield from $this->unwrap()->yieldBlock('empty_collection', $context, $blocks);
        // line 298
        yield "
";
        // line 299
        yield from $this->unwrap()->yieldBlock('vich_file_row', $context, $blocks);
        // line 303
        yield "
";
        // line 304
        yield from $this->unwrap()->yieldBlock('vich_file_widget', $context, $blocks);
        // line 346
        yield "
";
        // line 347
        yield from $this->unwrap()->yieldBlock('vich_image_row', $context, $blocks);
        // line 351
        yield "
";
        // line 352
        yield from $this->unwrap()->yieldBlock('vich_image_widget', $context, $blocks);
        // line 406
        yield "
";
        // line 407
        yield from $this->unwrap()->yieldBlock('ea_crud_rest', $context, $blocks);
        // line 410
        yield "
";
        // line 412
        yield from $this->unwrap()->yieldBlock('ea_crud_widget', $context, $blocks);
        // line 417
        yield "
";
        // line 419
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_panels', $context, $blocks);
        // line 424
        yield "
";
        // line 425
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 490
        yield "
";
        // line 492
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_widget', $context, $blocks);
        // line 495
        yield "
";
        // line 496
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 500
        yield "
";
        // line 502
        yield from $this->unwrap()->yieldBlock('ea_code_editor_widget', $context, $blocks);
        // line 512
        yield "
";
        // line 514
        yield from $this->unwrap()->yieldBlock('ea_text_editor_widget', $context, $blocks);
        // line 525
        yield "
";
        // line 527
        yield from $this->unwrap()->yieldBlock('ea_form_row_row', $context, $blocks);
        // line 530
        yield "
";
        // line 531
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 537
        yield "
";
        // line 538
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 545
        yield "
";
        // line 546
        yield from $this->unwrap()->yieldBlock('ea_form_column_open_row', $context, $blocks);
        // line 565
        yield "
";
        // line 566
        yield from $this->unwrap()->yieldBlock('ea_form_column_close_row', $context, $blocks);
        // line 569
        yield "
";
        // line 570
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 612
        yield "
";
        // line 613
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 619
        yield "
";
        // line 620
        yield from $this->unwrap()->yieldBlock('ea_form_tablist_row', $context, $blocks);
        // line 648
        yield "
";
        // line 649
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 653
        yield "
";
        // line 654
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 658
        yield "
";
        // line 659
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 672
        yield "
";
        // line 673
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 677
        yield "
";
        // line 679
        yield from $this->unwrap()->yieldBlock('ea_filters_widget', $context, $blocks);
        // line 701
        yield "
";
        // line 702
        yield from $this->unwrap()->yieldBlock('comparison_widget', $context, $blocks);
        // line 705
        yield "
";
        // line 706
        yield from $this->unwrap()->yieldBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 716
        yield "
";
        // line 717
        yield from $this->unwrap()->yieldBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 720
        yield "
";
        // line 721
        yield from $this->unwrap()->yieldBlock('ea_fileupload_widget', $context, $blocks);
        // line 783
        yield "
";
        // line 784
        yield from $this->unwrap()->yieldBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 851
        yield "
";
        // line 852
        yield from $this->unwrap()->yieldBlock('ea_slug_widget', $context, $blocks);
        return; yield '';
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        if (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && CoreExtension::inFilter("ea_crud", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            yield "
    ";
        }
        // line 8
        yield "
    ";
        // line 9
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
    ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", ["referrer"], "method", false, false, false, 10)) {
            // line 11
            yield "        <input type=\"hidden\" name=\"referrer\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11), "html", null, true);
            yield "\">
    ";
        }
        return; yield '';
    }

    // line 15
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 17
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            yield "
        ";
        }
        // line 19
        yield "    </form>
";
        return; yield '';
    }

    // line 22
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 24
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 25
                yield "            <div class=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
                yield " invalid-feedback d-block\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 25), "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    ";
        }
        return; yield '';
    }

    // line 32
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 34
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")))]);
        }
        // line 36
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 37
            yield "        ";
            // line 38
            $context["required"] = false;
        }
        // line 40
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 43
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 44), "")) : ("")) . " form-inline"))]);
        // line 45
        yield "    <div class=\"datetime-widget datetime-widget-datetime\">";
        // line 46
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        // line 47
        yield "</div>
";
        return; yield '';
    }

    // line 50
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        yield "<div class=\"datetime-widget datetime-widget-date\">";
        // line 52
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        // line 53
        yield "</div>";
        return; yield '';
    }

    // line 56
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        yield "<div class=\"datetime-widget datetime-widget-time\">";
        // line 58
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        // line 59
        yield "</div>";
        return; yield '';
    }

    // line 62
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        if (((array_key_exists("vich", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["vich"] ?? null), false)) : (false))) {
            // line 64
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["type"] ?? null), "file")) : ("file"));
            // line 65
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 73
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        yield "    ";
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 75), "")) : ("")) . " form-group")]);
        // line 77
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 77), "ea_vars", [], "any", false, false, false, 77), "field", [], "any", false, false, false, 77);
        // line 78
        yield "
    <div class=\"";
        // line 79
        yield Twig\Extension\EscaperExtension::escape($this->env, (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 79)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 79)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 79)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 79)) : ("")))), "html", null, true);
        yield "\">
        <div ";
        // line 80
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 80, $this->getSourceContext());
        }
        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        yield ">";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 82
        yield "<div class=\"form-widget\">
                ";
        // line 83
        $context["has_prepend_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 83), null)) : (null)));
        // line 84
        yield "                ";
        $context["has_append_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 84), null)) : (null)));
        // line 85
        yield "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 86
        yield "
                ";
        // line 87
        if (($context["has_input_groups"] ?? null)) {
            yield "<div class=\"input-group\">";
        }
        // line 88
        yield "                    ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 89
            yield "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 90);
            yield "</span>
                        </div>
                    ";
        }
        // line 93
        yield "
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "

                    ";
        // line 96
        if (($context["has_append_html"] ?? null)) {
            // line 97
            yield "                        <span class=\"input-group-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 97);
            yield "</span>
                    ";
        }
        // line 99
        yield "                ";
        if (($context["has_input_groups"] ?? null)) {
            yield "</div>";
        }
        // line 100
        yield "
                ";
        // line 101
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 101) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 101)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 101)) : (false))) {
            // line 102
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 102), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            yield "</small>
                ";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 103
($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", true, true, false, 103) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", false, false, false, 103)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", false, false, false, 103)) : (false))) {
            // line 104
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "help", [], "any", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "help_translation_parameters", [], "any", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "translation_domain", [], "any", false, false, false, 104));
            yield "</small>
                ";
        }
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 108
        yield "</div>
        </div>
    </div>

    ";
        // line 113
        yield "    ";
        if ((null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 113), null)) : (null)))) {
            // line 114
            yield "        <div class=\"flex-fill\"></div>
    ";
        }
        return; yield '';
    }

    // line 118
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        yield "    ";
        if (("ea-autocomplete" == ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 119)) ? (Twig\Extension\CoreExtension::defaultFilter((($__internal_compile_2 = ($context["attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 120
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 125
            yield "    ";
        }
        // line 126
        yield "
    ";
        // line 127
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 130
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        yield "    ";
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 131))) {
            // line 132
            yield "        ";
            $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 133
            yield "    ";
        }
        // line 134
        yield "
    ";
        // line 135
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 137
($context["form"] ?? null), "vars", [], "any", false, false, false, 137), "ea_vars", [], "any", false, false, false, 137), "field", [], "any", false, false, false, 137) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 137), "ea_vars", [], "any", false, false, false, 137), "field", [], "any", false, false, false, 137), "customOptions", [], "any", false, false, false, 137), "get", ["entryIsComplex"], "method", false, false, false, 137))) ? ("true") : ("false")), "data-allow-add" => ((        // line 138
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 139
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 140
($context["form"] ?? null), "children", [], "any", false, false, false, 140))) ? (0) : ((max(Twig\Extension\CoreExtension::getArrayKeysFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 140))) + 1))), "data-form-type-name-placeholder" => ((        // line 141
array_key_exists("prototype", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141)) : (""))]);
        // line 143
        yield "
    ";
        // line 144
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 147
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        yield "    ";
        // line 150
        yield "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
        // line 151
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_vars", [], "any", false, true, false, 151), "field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_vars", [], "any", false, true, false, 151), "field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_vars", [], "any", false, true, false, 151), "field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)) : (false)));
        // line 152
        yield "
    <div class=\"ea-form-collection-items\">
        ";
        // line 154
        if (($context["isEmptyCollection"] ?? null)) {
            // line 155
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
            yield "
        ";
        } elseif (        // line 156
($context["is_array_field"] ?? null)) {
            // line 157
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
        ";
        } else {
            // line 159
            yield "            <div class=\"accordion\">
                ";
            // line 160
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
            </div>
        ";
        }
        // line 163
        yield "    </div>

    ";
        // line 165
        if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "prototype", [], "any", true, true, false, 165))) {
            // line 166
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
            // line 167
            yield "    ";
        }
        // line 168
        yield "
    ";
        // line 169
        if ((((array_key_exists("allow_add", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["allow_add"] ?? null), false)) : (false)) &&  !($context["disabled"] ?? null))) {
            // line 170
            yield "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 172
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            yield "
        </button>
    ";
        }
        return; yield '';
    }

    // line 177
    public function block_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", true, true, false, 178) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)) : (false)));
        // line 179
        yield "    ";
        $context["is_complex"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_vars", [], "any", false, true, false, 179), "field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", ["entryIsComplex"], "method", true, true, false, 179) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_vars", [], "any", false, true, false, 179), "field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", ["entryIsComplex"], "method", false, false, false, 179)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_vars", [], "any", false, true, false, 179), "field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", ["entryIsComplex"], "method", false, false, false, 179)) : (false));
        // line 180
        yield "    ";
        $context["allows_deleting_items"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", false, false, false, 180), false)) : (false));
        // line 181
        yield "    ";
        $context["render_expanded"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_vars", [], "any", false, true, false, 181), "field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", ["renderExpanded"], "method", true, true, false, 181) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_vars", [], "any", false, true, false, 181), "field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", ["renderExpanded"], "method", false, false, false, 181)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_vars", [], "any", false, true, false, 181), "field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", ["renderExpanded"], "method", false, false, false, 181)) : (false));
        // line 182
        yield "    ";
        $context["delete_item_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 183
            yield "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
            // line 184
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "
    <div class=\"field-collection-item ";
        // line 189
        yield ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        yield " ";
        yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 189), "valid", [], "any", false, false, false, 189)) ? ("is-invalid") : (""));
        yield "\">
        ";
        // line 190
        if (((array_key_exists("is_array_field", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["is_array_field"] ?? null), false)) : (false))) {
            // line 191
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
            // line 192
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
            ";
            // line 193
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 194
                yield "                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 196
            yield "        ";
        } else {
            // line 197
            yield "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 199
            yield ((($context["render_expanded"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
            yield "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 201
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null)), "html", null, true);
            yield "
                    </button>

                    ";
            // line 204
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 205
                yield "                        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                yield "
                    ";
            }
            // line 207
            yield "                </h2>
                <div id=\"";
            // line 208
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
            yield "-contents\" class=\"accordion-collapse collapse ";
            yield ((($context["render_expanded"] ?? null)) ? ("show") : (""));
            yield "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 211
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 217
        yield "    </div>
";
        return; yield '';
    }

    // line 220
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 222
        if (CoreExtension::inFilter("collection", ($context["block_prefixes"] ?? null))) {
            // line 223
            yield "            ";
            // line 225
            yield "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
            // line 226
            yield "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 227
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
                yield "
            ";
            }
            // line 229
            yield "            ";
            if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 229), "prototype", [], "any", true, true, false, 229))) {
                // line 230
                yield "                ";
                $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
                // line 231
                yield "            ";
            }
            // line 232
            yield "        ";
        }
        // line 233
        yield "
        ";
        // line 234
        yield from $this->yieldParentBlock("form_widget_compound", $context, $blocks);
        yield "
    </div>
";
        return; yield '';
    }

    // line 238
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 239
        yield "<div class=\"form-group field-";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 239), "css_class", [], "any", true, true, false, 239)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 239), "css_class", [], "any", false, false, false, 239), "")) : ("")), "html", null, true);
        yield "\">";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 241
        yield "</div>";
        return; yield '';
    }

    // line 246
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        if ((($context["label"] ?? null) === false)) {
        } else {
            // line 251
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 252
                $context["element"] = "legend";
                // line 253
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 253), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 255
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 255), "")) : ("")) . " form-control-label"))]);
            }
            // line 257
            if (($context["required"] ?? null)) {
                // line 258
                $context["label_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 258)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 258), "")) : ("")) . " required"))]);
            }
            // line 260
            if ((($context["label"] ?? null) === "")) {
            } elseif ((null ===             // line 263
($context["label"] ?? null))) {
                // line 264
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 265
                    $context["label"] = Twig\Extension\CoreExtension::replaceFilter(($context["label_format"] ?? null), ["%name%" =>                     // line 266
($context["name"] ?? null), "%id%" =>                     // line 267
($context["id"] ?? null)]);
                } else {
                    // line 270
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 273
            yield "<";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_3 = $context;
                $__internal_compile_4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($__internal_compile_4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 273, $this->getSourceContext());
                }
                $__internal_compile_4 = CoreExtension::toArray($__internal_compile_4);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $__internal_compile_3;
            }
            yield ">";
            // line 274
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 275
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 276
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 278
                    yield ($context["label"] ?? null);
                }
            } else {
                // line 281
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 282
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 284
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 287
            yield "</";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        return; yield '';
    }

    // line 293
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 294
        yield "    <div class=\"empty collection-empty\">
        ";
        // line 295
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["label/empty"], "method", false, false, false, 295));
        yield "
    </div>
";
        return; yield '';
    }

    // line 299
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 300
        yield "    ";
        $context["force_error"] = true;
        // line 301
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 304
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 305
        yield "    <div class=\"ea-vich-file\">
        ";
        // line 306
        if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 307
            yield "            ";
            $context["file_extension"] = Twig\Extension\CoreExtension::last($this->env, Twig\Extension\CoreExtension::splitFilter($this->env, ($context["download_uri"] ?? null), "."));
            // line 308
            yield "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 315
            yield "            <a class=\"ea-vich-file-name\" href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            yield "\">
                <i class=\"fa fa-fw ";
            // line 316
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 316) &&  !(null === (($__internal_compile_5 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["file_extension"] ?? null)] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_6 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true)) : (yield "fa-file-o"));
            yield "\"></i>";
            // line 317
            if (((array_key_exists("download_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["download_label"] ?? null), false)) : (false))) {
                // line 318
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 320
                yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::last($this->env, Twig\Extension\CoreExtension::splitFilter($this->env, ($context["download_uri"] ?? null), "/"))) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"))), "html", null, true);
            }
            // line 322
            yield "</a>
        ";
        }
        // line 324
        yield "
        ";
        // line 325
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 326
            yield "            var newFile = document.getElementById('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 326), "vars", [], "any", false, false, false, 326), "id", [], "any", false, false, false, 326), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 329
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 329), "vars", [], "any", false, false, false, 329), "id", [], "any", false, false, false, 329), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 331
        yield "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 334
        yield "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 335
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 336
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 336), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 339
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 339)) {
            // line 340
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 340), 'row');
            yield "
            ";
        }
        // line 342
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 343
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "id", [], "any", false, false, false, 343), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        return; yield '';
    }

    // line 347
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 348
        yield "    ";
        $context["force_error"] = true;
        // line 349
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 352
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        yield "    ";
        $context["formTypeOptions"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 353), "formTypeOptions", [], "any", true, true, false, 353)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 353), "formTypeOptions", [], "any", false, false, false, 353), "")) : (""));
        // line 354
        yield "    <div class=\"ea-vich-image\">
        ";
        // line 355
        if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("image_uri", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 356
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 357
                yield "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 358
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 358) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 358)))) {
                    // line 359
                    yield "                        <img style=\"cursor: initial\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 359)), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 361
                    yield "                        <img style=\"cursor: initial\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    yield "\">
                    ";
                }
                // line 363
                yield "                </div>
            ";
            } else {
                // line 365
                yield "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 366
                yield "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 367
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\">
                    ";
                // line 368
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 368) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 368)))) {
                    // line 369
                    yield "                        <img src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 369)), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 371
                    yield "                        <img src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    yield "\">
                    ";
                }
                // line 373
                yield "                </a>

                <div id=\"";
                // line 375
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\" class=\"ea-lightbox\">
                    ";
                // line 376
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 376) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 376)))) {
                    // line 377
                    yield "                        <img src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 377)), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 379
                    yield "                        <img src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    yield "\">
                    ";
                }
                // line 381
                yield "                </div>
            ";
            }
            // line 383
            yield "        ";
        }
        // line 384
        yield "
        ";
        // line 385
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 386
            yield "            var newFile = document.getElementById('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 386), "vars", [], "any", false, false, false, 386), "id", [], "any", false, false, false, 386), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 389
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 389), "vars", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 391
        yield "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 394
        yield "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 395
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 396
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 396), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 399
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 399)) {
            // line 400
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 400), 'row');
            yield "
            ";
        }
        // line 402
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 403
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 403), "vars", [], "any", false, false, false, 403), "id", [], "any", false, false, false, 403), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        return; yield '';
    }

    // line 407
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 408
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
";
        return; yield '';
    }

    // line 412
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 413
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 414
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 419
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 420
        yield "    ";
        @trigger_error("The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." (\"@EasyAdmin/crud/form_theme.html.twig\" at line 420).", E_USER_DEPRECATED);
        // line 421
        yield "
    ";
        // line 422
        yield from         $this->unwrap()->yieldBlock("ea_crud_widget_fieldsets", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 425
    public function block_ea_crud_widget_fieldsets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 426
        yield "    ";
        @trigger_error("The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." (\"@EasyAdmin/crud/form_theme.html.twig\" at line 426).", E_USER_DEPRECATED);
        // line 427
        yield "
    ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 428), "ea_crud_form", [], "any", false, false, false, 428), "form_fieldsets", [], "any", false, false, false, 428), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 428) || (CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 428) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 429
            yield "        ";
            $context["fieldset_has_header"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 429)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 429), false)) : (false)) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 429)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 429), false)) : (false))) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 429)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 429), false)) : (false)));
            // line 430
            yield "
        ";
            // line 431
            $context["collapsible"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 431);
            // line 432
            yield "        ";
            $context["collapsed"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 432);
            // line 433
            yield "
        <div class=\"";
            // line 434
            (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 434) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 434)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 434), "html", null, true)) : (yield ""));
            yield "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 436
            if (($context["fieldset_has_header"] ?? null)) {
                // line 437
                yield "                    <div class=\"form-fieldset-header ";
                yield ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                yield " ";
                yield (( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 437)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 437), false)) : (false)))) ? ("with-help") : (""));
                yield "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 439
                if ( !($context["collapsible"] ?? null)) {
                    // line 440
                    yield "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 442
                    yield "                                href=\"#content-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["fieldset_name"], "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 443
                    yield ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    yield "\"
                                aria-expanded=\"";
                    // line 444
                    yield ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["fieldset_name"], "html", null, true);
                    yield "\"
                            ";
                }
                // line 446
                yield "                            >
                                ";
                // line 447
                if (($context["collapsible"] ?? null)) {
                    // line 448
                    yield "                                    <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                                ";
                }
                // line 450
                yield "
                                ";
                // line 451
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 451)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 451), false)) : (false))) {
                    // line 452
                    yield "                                    <i class=\"form-fieldset-icon ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 452), "html", null, true);
                    yield "\"></i>
                                ";
                }
                // line 454
                yield "                                ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 454));
                yield "
                            </a>

                            ";
                // line 457
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 457)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 457), false)) : (false))) {
                    // line 458
                    yield "                                <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 458));
                    yield "</div>
                            ";
                }
                // line 460
                yield "                        </div>
                    </div>
                ";
            }
            // line 463
            yield "
                <div id=\"content-";
            // line 464
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["fieldset_name"], "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
            yield " ";
            yield ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            yield " ";
            yield (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            yield "\">
                    <div class=\"row\">
                        ";
            // line 466
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "block_prefixes", [], "any", false, false, false, 466)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "ea_crud_form", [], "any", false, false, false, 466), "form_fieldset", [], "any", false, false, false, 466) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 467
                yield "                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 467), "ea_crud_form", [], "any", false, false, false, 467), "form_tab", [], "any", false, false, false, 467) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 467), "ea_crud_form", [], "any", false, false, false, 467), "form_tab", [], "any", false, false, false, 467) == ($context["tab_name"] ?? null)))) {
                    // line 468
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                            ";
                }
                // line 470
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 471
            yield "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 476
            yield "        ";
            // line 487
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_recursiveFieldsetForm", [($context["form"] ?? null)], 487, $context, $this->getSourceContext());
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 492
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 493
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 493), 'widget', ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        yield "
";
        return; yield '';
    }

    // line 496
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 497
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 497), "name", [], "any", false, false, false, 497);
        // line 498
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 502
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 503
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 505
($context["form"] ?? null), "vars", [], "any", false, false, false, 505), "ea_vars", [], "any", false, false, false, 505), "field", [], "any", false, false, false, 505), "customOptions", [], "any", false, false, false, 505), "get", ["language"], "method", false, false, false, 505), "data-tab-size" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 506
($context["form"] ?? null), "vars", [], "any", false, false, false, 506), "ea_vars", [], "any", false, false, false, 506), "field", [], "any", false, false, false, 506), "customOptions", [], "any", false, false, false, 506), "get", ["tabSize"], "method", false, false, false, 506), "data-indent-with-tabs" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 507
($context["form"] ?? null), "vars", [], "any", false, false, false, 507), "ea_vars", [], "any", false, false, false, 507), "field", [], "any", false, false, false, 507), "customOptions", [], "any", false, false, false, 507), "get", ["indentWithTabs"], "method", false, false, false, 507)) ? ("true") : ("false")), "data-show-line-numbers" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 508
($context["form"] ?? null), "vars", [], "any", false, false, false, 508), "ea_vars", [], "any", false, false, false, 508), "field", [], "any", false, false, false, 508), "customOptions", [], "any", false, false, false, 508), "get", ["showLineNumbers"], "method", false, false, false, 508)) ? ("true") : ("false")), "data-number-of-rows" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 509
($context["form"] ?? null), "vars", [], "any", false, false, false, 509), "ea_vars", [], "any", false, false, false, 509), "field", [], "any", false, false, false, 509), "customOptions", [], "any", false, false, false, 509), "get", ["numOfRows"], "method", false, false, false, 509)])]);
        // line 510
        yield "
";
        return; yield '';
    }

    // line 514
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 515
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 517
($context["form"] ?? null), "vars", [], "any", false, true, false, 517), "ea_vars", [], "any", false, true, false, 517), "field", [], "any", false, true, false, 517), "customOptions", [], "any", false, true, false, 517), "get", ["numOfRows"], "method", true, true, false, 517)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 517), "ea_vars", [], "any", false, true, false, 517), "field", [], "any", false, true, false, 517), "customOptions", [], "any", false, true, false, 517), "get", ["numOfRows"], "method", false, false, false, 517), 5)) : (5)), "data-trix-editor-config" => json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 518
($context["form"] ?? null), "vars", [], "any", false, true, false, 518), "ea_vars", [], "any", false, true, false, 518), "field", [], "any", false, true, false, 518), "customOptions", [], "any", false, true, false, 518), "get", ["trixEditorConfig"], "method", true, true, false, 518)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 518), "ea_vars", [], "any", false, true, false, 518), "field", [], "any", false, true, false, 518), "customOptions", [], "any", false, true, false, 518), "get", ["trixEditorConfig"], "method", false, false, false, 518), null)) : (null)))])]);
        // line 519
        yield "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 522
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
        yield "\" class=\"trix-content\"></trix-editor>
    </div>
";
        return; yield '';
    }

    // line 527
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 528
        yield "    <div class=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 528), "row_attr", [], "any", false, false, false, 528), "class", [], "any", false, false, false, 528), "html", null, true);
        yield "\"></div>
";
        return; yield '';
    }

    // line 531
    public function block_ea_form_column_group_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 532
        yield "    ";
        // line 533
        yield "    ";
        if ( !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 533), "ea_is_inside_tab", [], "any", true, true, false, 533)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 533), "ea_is_inside_tab", [], "any", false, false, false, 533), false)) : (false))) {
            // line 534
            yield "        <div class=\"row\">
    ";
        }
        return; yield '';
    }

    // line 538
    public function block_ea_form_column_group_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 539
        yield "    ";
        // line 541
        yield "    ";
        if ( !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 541), "ea_is_inside_tab", [], "any", true, true, false, 541)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 541), "ea_is_inside_tab", [], "any", false, false, false, 541), false)) : (false))) {
            // line 542
            yield "        </div>
    ";
        }
        return; yield '';
    }

    // line 546
    public function block_ea_form_column_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 547
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 547), "ea_vars", [], "any", false, false, false, 547), "field", [], "any", false, false, false, 547);
        // line 548
        yield "    ";
        $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 548);
        // line 549
        yield "    ";
        $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 549) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 549) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 549) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 549) != null));
        // line 550
        yield "
    <div class=\"form-column ";
        // line 551
        yield (( !($context["column_has_title"] ?? null)) ? ("form-column-no-header") : (""));
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 551), "html", null, true);
        yield "\">
        ";
        // line 552
        if (($context["column_has_title"] ?? null)) {
            // line 553
            yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 555
            if (($context["field_icon"] ?? null)) {
                yield "<i class=\"form-column-icon fa fa-fw fa-";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["field_icon"] ?? null), "html", null, true);
                yield "\"></i>";
            }
            // line 556
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 556)) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", true, true, false, 556)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 556), "")) : ("")), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 556), "translationDomain", [], "any", false, false, false, 556));
            }
            // line 557
            yield "                </div>

                ";
            // line 559
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 559)) {
                // line 560
                yield "                    <div class=\"form-column-help\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 560), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 560), "translationDomain", [], "any", false, false, false, 560));
                yield "</div>
                ";
            }
            // line 562
            yield "            </div>
        ";
        }
        return; yield '';
    }

    // line 566
    public function block_ea_form_column_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    </div>
";
        return; yield '';
    }

    // line 570
    public function block_ea_form_fieldset_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 571
        yield "    ";
        $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 571), "label", [], "any", false, false, false, 571) || ($context["ea_icon"] ?? null)) || ($context["ea_help"] ?? null));
        // line 572
        yield "
    <div class=\"form-fieldset ";
        // line 573
        yield (( !($context["fieldset_has_header"] ?? null)) ? ("form-fieldset-no-header") : (""));
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["ea_css_class"] ?? null), "html", null, true);
        yield "\">
        <fieldset>
            ";
        // line 575
        if (($context["fieldset_has_header"] ?? null)) {
            // line 576
            yield "                <div class=\"form-fieldset-header ";
            yield ((($context["ea_is_collapsible"] ?? null)) ? ("collapsible") : (""));
            yield " ";
            yield (( !Twig\Extension\CoreExtension::testEmpty(($context["ea_help"] ?? null))) ? ("with-help") : (""));
            yield "\">
                    <div class=\"form-fieldset-title\">
                        ";
            // line 578
            $context["fieldset_title_contents"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 579
                yield "                            ";
                if (($context["ea_is_collapsible"] ?? null)) {
                    // line 580
                    yield "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
                }
                // line 582
                yield "
                            ";
                // line 583
                if (($context["ea_icon"] ?? null)) {
                    // line 584
                    yield "                                <i class=\"form-fieldset-icon ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["ea_icon"] ?? null), "html", null, true);
                    yield "\"></i>
                            ";
                }
                // line 586
                yield "
                            ";
                // line 587
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 587), "label", [], "any", false, false, false, 587));
                yield "
                        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 589
            yield "
                        ";
            // line 590
            if (($context["ea_is_collapsible"] ?? null)) {
                // line 591
                yield "                            <a href=\"#content-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 591), "name", [], "any", false, false, false, 591), "html", null, true);
                yield "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                // line 592
                yield ((($context["ea_is_collapsed"] ?? null)) ? ("collapsed") : (""));
                yield "\"
                               aria-expanded=\"";
                // line 593
                yield ((($context["ea_is_collapsed"] ?? null)) ? ("false") : ("true"));
                yield "\" aria-controls=\"content-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 593), "name", [], "any", false, false, false, 593), "html", null, true);
                yield "\">
                                ";
                // line 594
                yield ($context["fieldset_title_contents"] ?? null);
                yield "
                            </a>
                        ";
            } else {
                // line 597
                yield "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                // line 598
                yield ($context["fieldset_title_contents"] ?? null);
                yield "
                            </span>
                        ";
            }
            // line 601
            yield "
                        ";
            // line 602
            if (($context["ea_help"] ?? null)) {
                // line 603
                yield "                            <div class=\"form-fieldset-help\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null));
                yield "</div>
                        ";
            }
            // line 605
            yield "                    </div>
                </div>
            ";
        }
        // line 608
        yield "
            <div id=\"content-";
        // line 609
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 609), "name", [], "any", false, false, false, 609), "html", null, true);
        yield "\" class=\"form-fieldset-body ";
        yield (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
        yield " ";
        yield ((($context["ea_is_collapsible"] ?? null)) ? ("collapse") : (""));
        yield " ";
        yield (( !($context["ea_is_collapsed"] ?? null)) ? ("show") : (""));
        yield "\">
                <div class=\"row\">
";
        return; yield '';
    }

    // line 613
    public function block_ea_form_fieldset_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                </div>
            </div>
        </fieldset>
    </div>
";
        return; yield '';
    }

    // line 620
    public function block_ea_form_tablist_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 621
        yield "    ";
        $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 622
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 623
        yield "    ";
        $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 624
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 624), "ea_vars", [], "any", false, false, false, 624), "field", [], "any", false, false, false, 624);
        // line 625
        yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 628
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 628));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 629
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 630
            if (CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 630)) {
                yield "active";
            }
            yield "\" href=\"#";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 630), "html", null, true);
            yield "\" id=\"tablist-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 630), "html", null, true);
            yield "\" data-bs-toggle=\"tab\">";
            // line 631
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 631)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 631), false)) : (false))) {
                // line 632
                yield "<i class=\"tab-nav-item-icon fa-fw ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 632), "html", null, true);
                yield "\"></i>";
            }
            // line 634
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 634), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 634), "translationDomain", [], "any", false, false, false, 634));
            yield "

                        ";
            // line 636
            $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 636);
            // line 637
            if ((($context["tab_error_count"] ?? null) > 0)) {
                // line 638
                yield "<span class=\"badge badge-danger\" title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 639
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["tab_error_count"] ?? null), "html", null, true);
                // line 640
                yield "</span>";
            }
            // line 642
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 645
        yield "        </ul>
    </div>
";
        return; yield '';
    }

    // line 649
    public function block_ea_form_tabpane_group_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
        return; yield '';
    }

    // line 654
    public function block_ea_form_tabpane_group_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        </div>
    </div>
";
        return; yield '';
    }

    // line 659
    public function block_ea_form_tabpane_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 660
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 661
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 661), "ea_vars", [], "any", false, false, false, 661), "field", [], "any", false, false, false, 661);
        // line 662
        yield "
    <div id=\"";
        // line 663
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["ea_tab_id"] ?? null), "html", null, true);
        yield "\" class=\"tab-pane ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 663)) {
            yield "active";
        }
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["ea_css_class"] ?? null), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 663), "attr", [], "any", false, false, false, 663));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
            yield "=";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html_attr");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
        ";
        // line 664
        if (($context["ea_help"] ?? null)) {
            // line 665
            yield "            <div class=\"content-header-help tab-help\">
                ";
            // line 666
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 666), "translationDomain", [], "any", false, false, false, 666));
            yield "
            </div>
        ";
        }
        // line 669
        yield "
        <div class=\"row\">
";
        return; yield '';
    }

    // line 673
    public function block_ea_form_tabpane_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        </div>
    </div>
";
        return; yield '';
    }

    // line 679
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 680
        yield "    ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::getArrayKeysFilter(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 680), "query", [], "any", false, true, false, 680), "all", [], "method", false, true, false, 680), "filters", [], "array", true, true, false, 680)) ? (Twig\Extension\CoreExtension::defaultFilter((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 680), "query", [], "any", false, true, false, 680), "all", [], "method", false, true, false, 680)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["filters"] ?? null) : null), [])) : ([])));
        // line 681
        yield "
    ";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 683
            yield "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 684
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 684), "name", [], "any", false, false, false, 684), "html", null, true);
            yield "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 685
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 685), "html", null, true);
            yield "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 686
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 686), "name", [], "any", false, false, false, 686), ($context["applied_filters"] ?? null))) {
                yield "checked";
            }
            yield ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 687
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 687), "html", null, true);
            yield "\" aria-expanded=\"";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 687), "name", [], "any", false, false, false, 687), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            yield "\" aria-controls=\"filter-content-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 687), "html", null, true);
            yield "\"
                        ";
            // line 688
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 688), "label_attr", [], "any", true, true, false, 688)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 688), "label_attr", [], "any", false, false, false, 688), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["name"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html_attr");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
                        ";
            // line 689
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 689), "label", [], "any", true, true, false, 689)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 689), "label", [], "any", false, false, false, 689), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 689), "name", [], "any", false, false, false, 689)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 689), "name", [], "any", false, false, false, 689)))), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 689), "translationDomain", [], "any", false, false, false, 689)), "html", null, true);
            yield "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 692
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 692), "html", null, true);
            yield "\" class=\"filter-content collapse ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 692), "name", [], "any", false, false, false, 692), ($context["applied_filters"] ?? null))) {
                yield "show";
            }
            yield "\" aria-labelledby=\"filter-heading-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 692), "html", null, true);
            yield "\">
                    <div class=\"form-widget\">
                        ";
            // line 694
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            yield "
                    </div>
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 702
    public function block_comparison_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 703
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::arrayMerge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 703), "attr", [], "any", false, false, false, 703), ["data-ea-comparison-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 703), "id", [], "any", false, false, false, 703)])]);
        yield "
";
        return; yield '';
    }

    // line 706
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 707
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 708
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 708), 'row');
        yield "
        ";
        // line 709
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 709), 'row');
        yield "
        <div data-ea-value2-of-comparison-id=\"";
        // line 710
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 710), "vars", [], "any", false, false, false, 710), "id", [], "any", false, false, false, 710), "html", null, true);
        yield "\" class=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 710), "vars", [], "any", false, false, false, 710), "value", [], "any", false, false, false, 710) != "between")) ? ("d-none") : (""));
        yield "\">
            ";
        // line 711
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 711), 'row');
        yield "
        </div>
    </div>";
        // line 714
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        return; yield '';
    }

    // line 717
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 718
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("ea_numeric_filter_widget", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 721
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 722
        yield "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 724
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 725
        yield "            ";
        $context["title"] = "";
        // line 726
        yield "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 727
        yield "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 728
            yield "                ";
            if (($context["multiple"] ?? null)) {
                // line 729
                yield "                    ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 730
                yield "                ";
            } else {
                // line 731
                yield "                    ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 731);
                // line 732
                yield "                    ";
                $context["title"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 732));
                // line 733
                yield "                ";
            }
            // line 734
            yield "            ";
        }
        // line 735
        yield "            <div class=\"custom-file\">
                ";
        // line 736
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), 'widget', ["attr" => Twig\Extension\CoreExtension::arrayMerge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), "vars", [], "any", false, false, false, 736), "attr", [], "any", false, false, false, 736), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "d-none"])]);
        yield "
                ";
        // line 737
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 737), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        yield "
            </div>
            <div class=\"input-group-text\">";
        // line 740
        if (($context["currentFiles"] ?? null)) {
            // line 741
            if (($context["multiple"] ?? null)) {
                // line 742
                yield "                        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::arrayReduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 742)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 744
                yield "                        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 744)), "html", null, true);
                yield "
                    ";
            }
        }
        // line 747
        if (($context["allow_delete"] ?? null)) {
            // line 748
            yield "                    <label class=\"btn ea-fileupload-delete-btn ";
            yield ((Twig\Extension\CoreExtension::testEmpty(($context["currentFiles"] ?? null))) ? ("d-none") : (""));
            yield "\" for=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 748), "vars", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
            yield "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 752
        yield "                <label class=\"btn\" for=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 752), "vars", [], "any", false, false, false, 752), "id", [], "any", false, false, false, 752), "html", null, true);
        yield "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 757
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 758
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 761
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 762
                yield "                        <tr>
                            <td>
                                ";
                // line 764
                if (($context["download_path"] ?? null)) {
                    yield "<a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 764))), "html", null, true);
                    yield "\">";
                }
                // line 765
                yield "                                    <span title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 765)), "html", null, true);
                yield "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 766
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 766), "html", null, true);
                yield "
                                    </span>
                                ";
                // line 768
                if (($context["download_path"] ?? null)) {
                    yield "</a>";
                }
                // line 769
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 770
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 770)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 773
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 777
        yield "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 778
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 778), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 780
        yield "    </div>
    ";
        // line 781
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 781), 'errors');
        yield "
";
        return; yield '';
    }

    // line 784
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 785
        yield "    ";
        $context["placeholder"] = "";
        // line 786
        yield "    ";
        $context["title"] = "";
        // line 787
        yield "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 788
        yield "    ";
        if (($context["currentFiles"] ?? null)) {
            // line 789
            yield "        ";
            if (($context["multiple"] ?? null)) {
                // line 790
                yield "            ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 791
                yield "        ";
            } else {
                // line 792
                yield "            ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 792);
                // line 793
                yield "            ";
                $context["title"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 793));
                // line 794
                yield "        ";
            }
            // line 795
            yield "    ";
        }
        // line 796
        yield "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 799
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 799), 'widget', ["attr" => Twig\Extension\CoreExtension::arrayMerge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 799), "vars", [], "any", false, false, false, 799), "attr", [], "any", false, false, false, 799), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        yield "

            ";
        // line 801
        if (($context["currentFiles"] ?? null)) {
            // line 802
            yield "                <span class=\"input-group-text\">
                    ";
            // line 803
            if (($context["multiple"] ?? null)) {
                // line 804
                yield "                        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::arrayReduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 804)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 806
                yield "                        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 806)), "html", null, true);
                yield "
                    ";
            }
            // line 808
            yield "                </span>
            ";
        }
        // line 810
        yield "
            ";
        // line 811
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 812
            yield "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 816
        yield "
            ";
        // line 817
        if (($context["currentFiles"] ?? null)) {
            // line 818
            yield "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 822
        yield "        </div>

        ";
        // line 824
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 825
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 828
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 829
                yield "                        <tr>
                            <td>
                                ";
                // line 831
                if (($context["download_path"] ?? null)) {
                    yield "<a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 831))), "html", null, true);
                    yield "\">";
                }
                // line 832
                yield "                                    <span title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 832)), "html", null, true);
                yield "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 833
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 833), "html", null, true);
                yield "
                                    </span>
                                    ";
                // line 835
                if (($context["download_path"] ?? null)) {
                    yield "</a>";
                }
                // line 836
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 837
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 837)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 840
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 844
        yield "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 845
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 845), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 847
        yield "    </div>

    ";
        // line 849
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 849), 'errors');
        yield "
";
        return; yield '';
    }

    // line 852
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 853
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => json_encode(Twig\Extension\CoreExtension::arrayMap($this->env, Twig\Extension\CoreExtension::splitFilter($this->env,         // line 855
($context["target"] ?? null), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 855), "children", [], "any", false, false, false, 855)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["name"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 855), "id", [], "any", false, false, false, 855); }))]);
        // line 857
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 857)) {
            // line 858
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_9 =             // line 859
($context["attr"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["data-confirm-text"] ?? null) : null))]);
            // line 861
            yield "    ";
        }
        // line 862
        yield "
    <div class=\"input-group\">
        ";
        // line 864
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
        return; yield '';
    }

    // line 476
    public function macro_recursiveFieldsetForm($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 477
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 477), "block_prefixes", [], "any", false, false, false, 477)) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "ea_crud_form", [], "any", false, true, false, 477), "form_tab", [], "any", true, true, false, 477) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 477), "ea_crud_form", [], "any", false, false, false, 477), "form_tab", [], "any", false, false, false, 477)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "ea_crud_form", [], "any", false, true, false, 477), "form_tabs", [], "any", true, true, false, 477))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 478
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 478), "ea_crud_form", [], "any", false, true, false, 478), "form_tabs", [], "any", true, true, false, 478)) {
                    // line 479
                    yield "                    ";
                    // line 480
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_recursiveFieldsetForm", [$context["field"]], 480, $context, $this->getSourceContext());
                    yield "
                ";
                } else {
                    // line 482
                    yield "                    ";
                    // line 483
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                ";
                }
                // line 485
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            yield "        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
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
        return array (  2539 => 486,  2533 => 485,  2527 => 483,  2525 => 482,  2519 => 480,  2517 => 479,  2514 => 478,  2509 => 477,  2497 => 476,  2486 => 864,  2482 => 862,  2479 => 861,  2477 => 859,  2475 => 858,  2472 => 857,  2470 => 855,  2468 => 853,  2464 => 852,  2457 => 849,  2453 => 847,  2447 => 845,  2444 => 844,  2438 => 840,  2429 => 837,  2426 => 836,  2422 => 835,  2417 => 833,  2412 => 832,  2406 => 831,  2402 => 829,  2398 => 828,  2393 => 825,  2391 => 824,  2387 => 822,  2381 => 818,  2379 => 817,  2376 => 816,  2370 => 812,  2368 => 811,  2365 => 810,  2361 => 808,  2355 => 806,  2349 => 804,  2347 => 803,  2344 => 802,  2342 => 801,  2337 => 799,  2332 => 796,  2329 => 795,  2326 => 794,  2323 => 793,  2320 => 792,  2317 => 791,  2314 => 790,  2311 => 789,  2308 => 788,  2305 => 787,  2302 => 786,  2299 => 785,  2295 => 784,  2288 => 781,  2285 => 780,  2279 => 778,  2276 => 777,  2270 => 773,  2261 => 770,  2258 => 769,  2254 => 768,  2249 => 766,  2244 => 765,  2238 => 764,  2234 => 762,  2230 => 761,  2225 => 758,  2223 => 757,  2214 => 752,  2204 => 748,  2202 => 747,  2195 => 744,  2189 => 742,  2187 => 741,  2185 => 740,  2180 => 737,  2176 => 736,  2173 => 735,  2170 => 734,  2167 => 733,  2164 => 732,  2161 => 731,  2158 => 730,  2155 => 729,  2152 => 728,  2149 => 727,  2146 => 726,  2143 => 725,  2141 => 724,  2137 => 722,  2133 => 721,  2125 => 718,  2121 => 717,  2116 => 714,  2111 => 711,  2105 => 710,  2101 => 709,  2097 => 708,  2094 => 707,  2090 => 706,  2082 => 703,  2078 => 702,  2055 => 694,  2044 => 692,  2038 => 689,  2024 => 688,  2016 => 687,  2010 => 686,  2006 => 685,  2002 => 684,  1999 => 683,  1982 => 682,  1979 => 681,  1976 => 680,  1972 => 679,  1962 => 673,  1955 => 669,  1949 => 666,  1946 => 665,  1944 => 664,  1923 => 663,  1920 => 662,  1917 => 661,  1914 => 660,  1910 => 659,  1900 => 654,  1890 => 649,  1883 => 645,  1875 => 642,  1872 => 640,  1870 => 639,  1866 => 638,  1864 => 637,  1862 => 636,  1857 => 634,  1852 => 632,  1850 => 631,  1841 => 630,  1838 => 629,  1834 => 628,  1829 => 625,  1826 => 624,  1823 => 623,  1820 => 622,  1817 => 621,  1813 => 620,  1801 => 613,  1787 => 609,  1784 => 608,  1779 => 605,  1773 => 603,  1771 => 602,  1768 => 601,  1762 => 598,  1759 => 597,  1753 => 594,  1747 => 593,  1743 => 592,  1738 => 591,  1736 => 590,  1733 => 589,  1728 => 587,  1725 => 586,  1719 => 584,  1717 => 583,  1714 => 582,  1710 => 580,  1707 => 579,  1705 => 578,  1697 => 576,  1695 => 575,  1688 => 573,  1685 => 572,  1682 => 571,  1678 => 570,  1669 => 566,  1662 => 562,  1656 => 560,  1654 => 559,  1650 => 557,  1645 => 556,  1639 => 555,  1635 => 553,  1633 => 552,  1627 => 551,  1624 => 550,  1621 => 549,  1618 => 548,  1615 => 547,  1611 => 546,  1604 => 542,  1601 => 541,  1599 => 539,  1595 => 538,  1588 => 534,  1585 => 533,  1583 => 532,  1579 => 531,  1571 => 528,  1567 => 527,  1559 => 522,  1554 => 519,  1552 => 518,  1551 => 517,  1549 => 515,  1545 => 514,  1539 => 510,  1537 => 509,  1536 => 508,  1535 => 507,  1534 => 506,  1533 => 505,  1531 => 503,  1527 => 502,  1519 => 498,  1516 => 497,  1512 => 496,  1504 => 493,  1500 => 492,  1488 => 487,  1486 => 476,  1477 => 471,  1471 => 470,  1465 => 468,  1462 => 467,  1458 => 466,  1447 => 464,  1444 => 463,  1439 => 460,  1433 => 458,  1431 => 457,  1424 => 454,  1418 => 452,  1416 => 451,  1413 => 450,  1409 => 448,  1407 => 447,  1404 => 446,  1397 => 444,  1393 => 443,  1388 => 442,  1384 => 440,  1382 => 439,  1374 => 437,  1372 => 436,  1367 => 434,  1364 => 433,  1361 => 432,  1359 => 431,  1356 => 430,  1353 => 429,  1348 => 428,  1345 => 427,  1342 => 426,  1338 => 425,  1331 => 422,  1328 => 421,  1325 => 420,  1321 => 419,  1309 => 414,  1304 => 413,  1300 => 412,  1292 => 408,  1288 => 407,  1280 => 403,  1277 => 402,  1271 => 400,  1269 => 399,  1263 => 396,  1259 => 395,  1256 => 394,  1252 => 391,  1247 => 389,  1240 => 386,  1238 => 385,  1235 => 384,  1232 => 383,  1228 => 381,  1222 => 379,  1216 => 377,  1214 => 376,  1210 => 375,  1206 => 373,  1200 => 371,  1194 => 369,  1192 => 368,  1188 => 367,  1185 => 366,  1182 => 365,  1178 => 363,  1172 => 361,  1166 => 359,  1164 => 358,  1161 => 357,  1158 => 356,  1156 => 355,  1153 => 354,  1150 => 353,  1146 => 352,  1138 => 349,  1135 => 348,  1131 => 347,  1123 => 343,  1120 => 342,  1114 => 340,  1112 => 339,  1106 => 336,  1102 => 335,  1099 => 334,  1095 => 331,  1090 => 329,  1083 => 326,  1081 => 325,  1078 => 324,  1074 => 322,  1071 => 320,  1068 => 318,  1066 => 317,  1063 => 316,  1058 => 315,  1055 => 308,  1052 => 307,  1050 => 306,  1047 => 305,  1043 => 304,  1035 => 301,  1032 => 300,  1028 => 299,  1020 => 295,  1017 => 294,  1013 => 293,  1005 => 287,  1001 => 284,  998 => 282,  996 => 281,  992 => 278,  989 => 276,  987 => 275,  985 => 274,  970 => 273,  966 => 270,  963 => 267,  962 => 266,  961 => 265,  959 => 264,  957 => 263,  955 => 260,  952 => 258,  950 => 257,  947 => 255,  944 => 253,  942 => 252,  940 => 251,  937 => 247,  933 => 246,  928 => 241,  926 => 240,  920 => 239,  916 => 238,  908 => 234,  905 => 233,  902 => 232,  899 => 231,  896 => 230,  893 => 229,  887 => 227,  884 => 226,  881 => 225,  879 => 223,  877 => 222,  874 => 221,  870 => 220,  864 => 217,  855 => 211,  847 => 208,  844 => 207,  838 => 205,  836 => 204,  830 => 201,  823 => 199,  819 => 197,  816 => 196,  810 => 194,  808 => 193,  804 => 192,  799 => 191,  797 => 190,  791 => 189,  788 => 188,  781 => 184,  778 => 183,  775 => 182,  772 => 181,  769 => 180,  766 => 179,  763 => 178,  759 => 177,  750 => 172,  746 => 170,  744 => 169,  741 => 168,  738 => 167,  735 => 166,  733 => 165,  729 => 163,  723 => 160,  720 => 159,  714 => 157,  712 => 156,  707 => 155,  705 => 154,  701 => 152,  698 => 151,  695 => 150,  693 => 148,  689 => 147,  682 => 144,  679 => 143,  677 => 141,  676 => 140,  675 => 139,  674 => 138,  673 => 137,  672 => 135,  669 => 134,  666 => 133,  663 => 132,  660 => 131,  656 => 130,  649 => 127,  646 => 126,  643 => 125,  640 => 120,  637 => 119,  633 => 118,  626 => 114,  623 => 113,  617 => 108,  615 => 107,  609 => 104,  607 => 103,  602 => 102,  600 => 101,  597 => 100,  592 => 99,  586 => 97,  584 => 96,  579 => 94,  576 => 93,  570 => 90,  567 => 89,  564 => 88,  560 => 87,  557 => 86,  554 => 85,  551 => 84,  549 => 83,  546 => 82,  544 => 81,  533 => 80,  529 => 79,  526 => 78,  523 => 77,  521 => 75,  519 => 74,  515 => 73,  509 => 67,  506 => 65,  504 => 64,  502 => 63,  498 => 62,  493 => 59,  491 => 58,  489 => 57,  485 => 56,  480 => 53,  478 => 52,  476 => 51,  472 => 50,  466 => 47,  464 => 46,  462 => 45,  459 => 44,  455 => 43,  450 => 40,  447 => 38,  445 => 37,  443 => 36,  440 => 34,  438 => 33,  434 => 32,  428 => 27,  417 => 25,  412 => 24,  409 => 23,  405 => 22,  399 => 19,  393 => 17,  390 => 16,  386 => 15,  377 => 11,  375 => 10,  371 => 9,  368 => 8,  362 => 6,  359 => 5,  355 => 4,  350 => 852,  347 => 851,  345 => 784,  342 => 783,  340 => 721,  337 => 720,  335 => 717,  332 => 716,  330 => 706,  327 => 705,  325 => 702,  322 => 701,  320 => 679,  317 => 677,  315 => 673,  312 => 672,  310 => 659,  307 => 658,  305 => 654,  302 => 653,  300 => 649,  297 => 648,  295 => 620,  292 => 619,  290 => 613,  287 => 612,  285 => 570,  282 => 569,  280 => 566,  277 => 565,  275 => 546,  272 => 545,  270 => 538,  267 => 537,  265 => 531,  262 => 530,  260 => 527,  257 => 525,  255 => 514,  252 => 512,  250 => 502,  247 => 500,  245 => 496,  242 => 495,  240 => 492,  237 => 490,  235 => 425,  232 => 424,  230 => 419,  227 => 417,  225 => 412,  222 => 410,  220 => 407,  217 => 406,  215 => 352,  212 => 351,  210 => 347,  207 => 346,  205 => 304,  202 => 303,  200 => 299,  197 => 298,  195 => 293,  192 => 292,  189 => 290,  187 => 246,  184 => 245,  181 => 243,  179 => 238,  176 => 237,  174 => 220,  171 => 219,  169 => 177,  166 => 176,  164 => 147,  161 => 146,  159 => 130,  156 => 129,  154 => 118,  151 => 117,  149 => 73,  146 => 72,  143 => 70,  141 => 62,  138 => 61,  136 => 56,  133 => 55,  131 => 50,  128 => 49,  126 => 43,  123 => 42,  121 => 32,  118 => 31,  115 => 29,  113 => 22,  110 => 21,  108 => 15,  105 => 14,  103 => 4,  100 => 3,  93 => 0,  31 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\form_theme.html.twig");
    }
}
