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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_b0bf9de9b7055c96b0bf177c52ee5793 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 10
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 10), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 10);
        // line 47
        $context["has_batch_actions"] = (Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["batch_actions"] ?? null)) > 0);
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["entities"] ?? null)) > 0)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ("ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true)) : (yield ""));
        return; yield '';
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, ("ea-index" . (((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
        return; yield '';
    }

    // line 12
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 15
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 19
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 22
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 26
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 28)], false);
        yield "
    ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 29)], false);
        yield "
";
        return; yield '';
    }

    // line 32
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 34)], false);
        yield "
    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 35)], false);
        yield "
";
        return; yield '';
    }

    // line 38
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "customPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40);
            // line 41
            yield "        ";
            yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42)], "method", false, false, false, 42), [],             // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 43
($context["custom_page_title"] ?? null), [],             // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null))));
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_2_);
        return; yield '';
    }

    // line 48
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["filters"] ?? null)) > 0)) {
            // line 50
            yield "        <div class=\"datagrid-filters\">
            ";
            // line 51
            yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
            // line 64
            yield "        </div>
    ";
        }
        // line 66
        yield "
    ";
        // line 67
        yield from $this->unwrap()->yieldBlock('global_actions', $context, $blocks);
        // line 74
        yield "    ";
        yield from $this->unwrap()->yieldBlock('batch_actions', $context, $blocks);
        return; yield '';
    }

    // line 51
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "                ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::getArrayKeysFilter(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52), "filters", [], "array", true, true, false, 52)) ? (Twig\Extension\CoreExtension::defaultFilter((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["filters"] ?? null) : null), [])) : ([])));
        // line 53
        yield "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", ["renderFilters"], "method", false, false, false, 54), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        yield ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("filter.title", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 55), "translationParameters", [], "any", false, false, false, 55), "EasyAdminBundle"), [],         // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null)), "html", null, true);
        // line 55
        if (($context["applied_filters"] ?? null)) {
            yield " <span class=\"action-filters-button-count\">(";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
            yield ")</span>";
        }
        // line 56
        yield "                    </a>
                    ";
        // line 57
        if (($context["applied_filters"] ?? null)) {
            // line 58
            yield "                        <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["filters"], "method", false, false, false, 58), "html", null, true);
            yield "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 62
        yield "                </div>
            ";
        return; yield '';
    }

    // line 67
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        yield "        <div class=\"global-actions\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 70
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 70), ["action" => $context["action"]], false);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "        </div>
    ";
        return; yield '';
    }

    // line 74
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        yield "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 76
            yield "            <div class=\"batch-actions d-none\">
                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 78
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 78), ["action" => $context["action"]], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "            </div>
        ";
        }
        // line 82
        yield "    ";
        return; yield '';
    }

    // line 85
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        yield "    ";
        // line 87
        yield "    ";
        $context["sort_field_name"] = Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::getArrayKeysFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 87), "get", ["sort"], "method", false, false, false, 87)));
        // line 88
        yield "    ";
        $context["sort_order"] = Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "get", ["sort"], "method", false, false, false, 88));
        // line 89
        yield "    ";
        $context["some_results_are_hidden"] = Twig\Extension\CoreExtension::arrayReduce($this->env, ($context["entities"] ?? null), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return (($context["some_results_are_hidden"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 89)); }, false);
        // line 90
        yield "    ";
        $context["has_footer"] = (Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["entities"] ?? null)) != 0);
        // line 91
        yield "    ";
        $context["has_search"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 91), "isSearchEnabled", [], "any", false, false, false, 91);
        // line 92
        yield "    ";
        $context["has_filters"] = (Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["filters"] ?? null)) > 0);
        // line 93
        yield "    ";
        $context["num_results"] = Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["entities"] ?? null));
        // line 94
        yield "
    <table class=\"table datagrid ";
        // line 95
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        yield "\">
        ";
        // line 96
        if ((($context["num_results"] ?? null) > 0)) {
            // line 97
            yield "            <thead>
            ";
            // line 98
            yield from $this->unwrap()->yieldBlock('table_head', $context, $blocks);
            // line 132
            yield "            </thead>
        ";
        }
        // line 134
        yield "
        <tbody>
        ";
        // line 136
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 217
        yield "        </tbody>

        <tfoot>
        ";
        // line 220
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 222
        yield "        </tfoot>
    </table>

    ";
        // line 225
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["entities"] ?? null)) > 0)) {
            // line 226
            yield "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 227
            yield from $this->unwrap()->yieldBlock('paginator', $context, $blocks);
            // line 230
            yield "        </div>
    ";
        }
        // line 232
        yield "
    ";
        // line 233
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        // line 236
        yield "
    ";
        // line 237
        if (($context["has_filters"] ?? null)) {
            // line 238
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            yield "
    ";
        }
        // line 240
        yield "
    ";
        // line 241
        if (($context["has_batch_actions"] ?? null)) {
            // line 242
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            yield "
    ";
        }
        return; yield '';
    }

    // line 98
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        yield "                <tr>
                    ";
        // line 100
        if (($context["has_batch_actions"] ?? null)) {
            // line 101
            yield "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 107
        yield "
                    ";
        // line 108
        $context["ea_sort_asc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 109
        yield "                    ";
        $context["ea_sort_desc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 110
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 110); })), "fields", [], "any", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 110); })), "fields", [], "any", false, false, false, 110)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 110); })), "fields", [], "any", false, false, false, 110)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 111
            yield "                        ";
            $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 111), "searchFields", [], "any", false, false, false, 111)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 111), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 111), "searchFields", [], "any", false, false, false, 111)));
            // line 112
            yield "                        ";
            $context["is_sorting_field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 112), "isSortingField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 112)], "method", false, false, false, 112);
            // line 113
            yield "                        ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 113), "sortDirection", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 113)], "method", false, false, false, 113) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 114
            yield "                        ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 115
            yield "
                        <th data-column=\"";
            // line 116
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 116), "html", null, true);
            yield "\" class=\"";
            yield ((($context["is_searchable"] ?? null)) ? ("searchable") : (""));
            yield " ";
            yield ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 116)) ? ("field-virtual") : (""));
            yield " header-for-";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(Twig\Extension\CoreExtension::arrayFilter($this->env, Twig\Extension\CoreExtension::splitFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 116), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_compile_1 = ($context["class"] ?? null)) && is_string($__internal_compile_2 = "field-") && str_starts_with($__internal_compile_1, $__internal_compile_2)); }), ""), "html", null, true);
            yield " text-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 116), "html", null, true);
            yield "\" dir=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 116), "textDirection", [], "any", false, false, false, 116), "html", null, true);
            yield "\">
                            ";
            // line 117
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 117)) {
                // line 118
                yield "                                <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 118) => ($context["next_sort_direction"] ?? null)]]), "html", null, true);
                yield "\">
                                    ";
                // line 119
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 119), [],                 // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null));
                // line 119
                yield " <i class=\"fa fa-fw ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["column_icon"] ?? null), "html", null, true);
                yield "\"></i>
                                </a>
                            ";
            } else {
                // line 122
                yield "                                <span>";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 122), [],                 // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null));
                // line 122
                yield "</span>
                            ";
            }
            // line 124
            yield "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "
                    <th class=\"";
        // line 127
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 127), "showEntityActionsAsDropdown", [], "any", false, false, false, 127)) ? ("actions-as-dropdown-table-head") : (""));
        yield "\" dir=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 127), "textDirection", [], "any", false, false, false, 127), "html", null, true);
        yield "\">
                        <span class=\"sr-only\">";
        // line 128
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 128), "translationParameters", [], "any", false, false, false, 128), "EasyAdminBundle"), [],         // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null)), "html", null, true);
        // line 128
        yield "</span>
                    </th>
                </tr>
            ";
        return; yield '';
    }

    // line 136
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 138
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 138)) {
                // line 139
                yield "                    <tr data-id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 139), "html", null, true);
                yield "\">
                        ";
                // line 140
                if (($context["has_batch_actions"] ?? null)) {
                    // line 141
                    yield "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-";
                    // line 143
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 143), "html", null, true);
                    yield "\" value=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 143), "html", null, true);
                    yield "\">
                                </div>
                            </td>
                        ";
                }
                // line 147
                yield "
                        ";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 148));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 149
                    yield "                            ";
                    $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 149), "searchFields", [], "any", false, false, false, 149)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 149), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 149), "searchFields", [], "any", false, false, false, 149)));
                    // line 150
                    yield "
                            <td data-column=\"";
                    // line 151
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 151), "html", null, true);
                    yield "\" data-label=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 151), [],                     // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null)), "html_attr");
                    // line 151
                    yield "\" class=\"";
                    yield ((($context["is_searchable"] ?? null)) ? ("searchable") : (""));
                    yield " ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 151) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    yield " text-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 151), "html", null, true);
                    yield " ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 151), "html", null, true);
                    yield "\" dir=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 151), "textDirection", [], "any", false, false, false, 151), "html", null, true);
                    yield "\">
                                ";
                    // line 152
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 152), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    yield "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                yield "
                        ";
                // line 156
                yield from $this->unwrap()->yieldBlock('entity_actions', $context, $blocks);
                // line 183
                yield "                    </tr>

                ";
            }
            // line 186
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 187
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_empty', $context, $blocks);
            // line 207
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "
            ";
        // line 209
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 210
            yield "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 212
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 216
        yield "        ";
        return; yield '';
    }

    // line 156
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        yield "                            <td class=\"actions ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 157), "showEntityActionsAsDropdown", [], "any", false, false, false, 157)) ? ("actions-as-dropdown") : (""));
        yield "\">
                                ";
        // line 158
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 158), "count", [], "any", false, false, false, 158) > 0)) {
            // line 159
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 159), "showEntityActionsAsDropdown", [], "any", false, false, false, 159)) {
                // line 160
                yield "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 163
                yield "                                                ";
                // line 164
                yield "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 171
                    yield "                                                    ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 171), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 171), "showEntityActionsAsDropdown", [], "any", false, false, false, 171)], false);
                    yield "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                yield "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 176
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 176));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 177
                    yield "                                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 177), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 177), "showEntityActionsAsDropdown", [], "any", false, false, false, 177)], false);
                    yield "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                yield "                                    ";
            }
            // line 180
            yield "                                ";
        }
        // line 181
        yield "                            </td>
                        ";
        return; yield '';
    }

    // line 187
    public function block_table_body_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 189
            yield "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 198
            if ((3 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 198))) {
                // line 199
                yield "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 201
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 201), "translationParameters", [], "any", false, false, false, 201), "EasyAdminBundle"), [],                 // line 5
($context["__internal_4bde9b6fd7219dfac3651db3bab469737c5c5836af3883f6cb8c63da6f695e51"] ?? null)), "html", null, true);
                // line 201
                yield "
                                </td>
                            </tr>
                        ";
            }
            // line 205
            yield "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                ";
        return; yield '';
    }

    // line 220
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 227
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 228
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["crud/paginator"], "method", false, false, false, 228), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        yield "
            ";
        return; yield '';
    }

    // line 233
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        yield "
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  846 => 234,  842 => 233,  834 => 228,  830 => 227,  822 => 220,  817 => 206,  803 => 205,  797 => 201,  795 => 5,  794 => 201,  790 => 199,  788 => 198,  777 => 189,  759 => 188,  755 => 187,  749 => 181,  746 => 180,  743 => 179,  734 => 177,  729 => 176,  724 => 173,  715 => 171,  711 => 170,  703 => 164,  701 => 163,  697 => 160,  694 => 159,  692 => 158,  687 => 157,  683 => 156,  678 => 216,  671 => 212,  667 => 210,  665 => 209,  662 => 208,  656 => 207,  653 => 187,  640 => 186,  635 => 183,  633 => 156,  630 => 155,  621 => 152,  608 => 151,  606 => 5,  603 => 151,  600 => 150,  597 => 149,  593 => 148,  590 => 147,  581 => 143,  577 => 141,  575 => 140,  570 => 139,  567 => 138,  548 => 137,  544 => 136,  536 => 128,  534 => 5,  533 => 128,  527 => 127,  524 => 126,  517 => 124,  513 => 122,  511 => 5,  509 => 122,  502 => 119,  500 => 5,  499 => 119,  494 => 118,  492 => 117,  476 => 116,  473 => 115,  470 => 114,  467 => 113,  464 => 112,  461 => 111,  456 => 110,  453 => 109,  451 => 108,  448 => 107,  440 => 101,  438 => 100,  435 => 99,  431 => 98,  422 => 242,  420 => 241,  417 => 240,  411 => 238,  409 => 237,  406 => 236,  404 => 233,  401 => 232,  397 => 230,  395 => 227,  392 => 226,  390 => 225,  385 => 222,  383 => 220,  378 => 217,  376 => 136,  372 => 134,  368 => 132,  366 => 98,  363 => 97,  361 => 96,  357 => 95,  354 => 94,  351 => 93,  348 => 92,  345 => 91,  342 => 90,  339 => 89,  336 => 88,  333 => 87,  331 => 86,  327 => 85,  322 => 82,  318 => 80,  309 => 78,  305 => 77,  302 => 76,  299 => 75,  295 => 74,  289 => 72,  280 => 70,  276 => 69,  273 => 68,  269 => 67,  263 => 62,  255 => 58,  253 => 57,  250 => 56,  244 => 55,  242 => 5,  241 => 55,  235 => 54,  232 => 53,  229 => 52,  225 => 51,  219 => 74,  217 => 67,  214 => 66,  210 => 64,  208 => 51,  205 => 50,  202 => 49,  198 => 48,  193 => 39,  190 => 5,  189 => 43,  188 => 5,  187 => 42,  185 => 41,  183 => 40,  181 => 39,  177 => 38,  170 => 35,  166 => 34,  161 => 33,  157 => 32,  150 => 29,  146 => 28,  141 => 27,  137 => 26,  125 => 22,  121 => 21,  116 => 20,  112 => 19,  100 => 15,  96 => 14,  91 => 13,  87 => 12,  79 => 8,  71 => 7,  67 => 4,  65 => 47,  63 => 10,  61 => 5,  54 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\index.html.twig");
    }
}
