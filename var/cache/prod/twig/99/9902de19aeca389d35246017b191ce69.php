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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_24fe2d8c8e9177bd3aa2e755e5f82b53 extends Template
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
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 8);
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, ((("ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 5)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 5)), "html", null, true);
        return; yield '';
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, ("ea-detail ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)), "html", null, true);
        return; yield '';
    }

    // line 10
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 13
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

    // line 17
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 20
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

    // line 24
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 26)], false);
        yield "
    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 27)], false);
        yield "
";
        return; yield '';
    }

    // line 30
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 32)], false);
        yield "
    ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 33)], false);
        yield "
";
        return; yield '';
    }

    // line 36
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 38), "customPageTitle", [($context["pageName"] ?? null), ((($context["entity"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 38)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38)], "method", false, false, false, 38);
            // line 39
            yield "        ";
            yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 41
($context["custom_page_title"] ?? null))));
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        return; yield '';
    }

    // line 45
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 47
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 47), ["action" => $context["action"]], false);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 51
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "    ";
        yield from $this->unwrap()->yieldBlock('detail_fields', $context, $blocks);
        // line 61
        yield "
    ";
        // line 62
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        return; yield '';
    }

    // line 52
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 54
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isFormLayoutField", [], "any", false, false, false, 54)) {
                // line 55
                yield "                ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_layout_field", [$context["field"]], 55, $context, $this->getSourceContext());
                yield "
            ";
            } else {
                // line 57
                yield "                ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_field_contents", [($context["entity"] ?? null), $context["field"]], 57, $context, $this->getSourceContext());
                yield "
            ";
            }
            // line 59
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "    ";
        return; yield '';
    }

    // line 62
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 63)], false);
        yield "
    ";
        return; yield '';
    }

    // line 321
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 322
        yield "            ";
        if ( !($context["is_form_fieldset"] ?? null)) {
            // line 323
            yield "                ";
            yield CoreExtension::callMacro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null)], 323, $context, $this->getSourceContext());
            yield "
            ";
        }
        // line 325
        yield "        ";
        return; yield '';
    }

    // line 67
    public function macro_render_field_contents($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 68
            yield "    <div class=\"field-group ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 68), "html", null, true);
            yield "\">
        ";
            // line 69
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 69) === false)) {
                // line 70
                yield "                    ";
            } else {
                // line 73
                yield "            <div class=\"field-label\">";
                // line 74
                $context["label_html_attributes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 75
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 75))) {
                        // line 76
                        yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"";
                        // line 78
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 78)), "html_attr");
                        yield "\"";
                    }
                })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 82
                yield "<div ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label_html_attributes"] ?? null), "html", null, true);
                yield ">
                    ";
                // line 83
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 83));
                yield "
                </div>
            </div>
        ";
            }
            // line 87
            yield "
        <div class=\"field-value\">
            ";
            // line 89
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 89), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </div>
    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 94
    public function macro_render_layout_field($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 95
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formType", [], "any", false, false, false, 95) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabListType")) {
                // line 96
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_tab_list", [($context["field"] ?? null)], 96, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["field"] ?? null), "formType", [], "any", false, false, false, 97) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupOpenType")) {
                // line 98
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_tab_group_open", [($context["field"] ?? null)], 98, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["field"] ?? null), "formType", [], "any", false, false, false, 99) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupCloseType")) {
                // line 100
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_tab_group_close", [($context["field"] ?? null)], 100, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["field"] ?? null), "formType", [], "any", false, false, false, 101) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneOpenType")) {
                // line 102
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_tab_open", [($context["field"] ?? null)], 102, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["field"] ?? null), "formType", [], "any", false, false, false, 103) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneCloseType")) {
                // line 104
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_tab_close", [($context["field"] ?? null)], 104, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 105
($context["field"] ?? null), "formType", [], "any", false, false, false, 105) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupOpenType")) {
                // line 106
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_column_group_open", [($context["field"] ?? null)], 106, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["field"] ?? null), "formType", [], "any", false, false, false, 107) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupCloseType")) {
                // line 108
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_column_group_close", [($context["field"] ?? null)], 108, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 109
($context["field"] ?? null), "formType", [], "any", false, false, false, 109) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnOpenType")) {
                // line 110
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_column_open", [($context["field"] ?? null)], 110, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 111
($context["field"] ?? null), "formType", [], "any", false, false, false, 111) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnCloseType")) {
                // line 112
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_column_close", [($context["field"] ?? null)], 112, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 113
($context["field"] ?? null), "formType", [], "any", false, false, false, 113) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetOpenType")) {
                // line 114
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_fieldset_open", [($context["field"] ?? null)], 114, $context, $this->getSourceContext());
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 115
($context["field"] ?? null), "formType", [], "any", false, false, false, 115) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetCloseType")) {
                // line 116
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_fieldset_close", [($context["field"] ?? null)], 116, $context, $this->getSourceContext());
                yield "
    ";
            }
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function macro_render_tab_list($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 121
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 122
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 123
            yield "    ";
            $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
            // line 124
            yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 128
                yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 129
                if (CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 129)) {
                    yield "active";
                }
                yield "\" href=\"#";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 129), "html", null, true);
                yield "\" id=\"tablist-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 129), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 130
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 130)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 130), false)) : (false))) {
                    // line 131
                    yield "<i class=\"tab-nav-item-icon fa-fw ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 131), "html", null, true);
                    yield "\"></i>";
                }
                // line 133
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 133), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 133), "translationDomain", [], "any", false, false, false, 133));
                yield "

                        ";
                // line 135
                $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 135);
                // line 136
                if ((($context["tab_error_count"] ?? null) > 0)) {
                    // line 137
                    yield "<span class=\"badge badge-danger\" title=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                    yield "\">";
                    // line 138
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["tab_error_count"] ?? null), "html", null, true);
                    // line 139
                    yield "</span>";
                }
                // line 141
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "        </ul>
    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 148
    public function macro_render_tab_group_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 0
            yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 153
    public function macro_render_tab_group_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 0
            yield "        </div>
    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 158
    public function macro_render_tab_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 159
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 160
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 161
            yield "
    <div id=\"";
            // line 162
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 162), "html", null, true);
            yield "\" class=\"tab-pane ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 162)) {
                yield "active";
            }
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 162), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["attr"], "method", false, false, false, 162));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html_attr");
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 163
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 163)) {
                // line 164
                yield "            <div class=\"content-header-help tab-help\">
                ";
                // line 165
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 165), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 165), "translationDomain", [], "any", false, false, false, 165));
                yield "
            </div>
        ";
            }
            // line 168
            yield "
        <div class=\"row\">
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 172
    public function macro_render_tab_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 0
            yield "        </div>
    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 177
    public function macro_render_column_group_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 178
            yield "    ";
            // line 179
            yield "    ";
            if ( !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 179)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 179), false)) : (false))) {
                // line 180
                yield "        <div class=\"row\">
    ";
            }
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 184
    public function macro_render_column_group_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 185
            yield "    ";
            // line 186
            yield "    ";
            if ( !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 186)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 186), false)) : (false))) {
                // line 187
                yield "        </div>
    ";
            }
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 191
    public function macro_render_column_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 192
            yield "    ";
            $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 192);
            // line 193
            yield "    ";
            $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 193) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 193) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 193) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 193) != null));
            // line 194
            yield "
    <div class=\"form-column ";
            // line 195
            yield (( !($context["column_has_title"] ?? null)) ? ("form-column-no-header") : (""));
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 195), "html", null, true);
            yield "\">
        ";
            // line 196
            if (($context["column_has_title"] ?? null)) {
                // line 197
                yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
                // line 199
                if (($context["field_icon"] ?? null)) {
                    yield "<i class=\"form-column-icon fa fa-fw fa-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["field_icon"] ?? null), "html", null, true);
                    yield "\"></i>";
                }
                // line 200
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 200)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 200), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 200), "translationDomain", [], "any", false, false, false, 200));
                }
                // line 201
                yield "                </div>

                ";
                // line 203
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 203)) {
                    // line 204
                    yield "                    <div class=\"form-column-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 204), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 204), "translationDomain", [], "any", false, false, false, 204));
                    yield "</div>
                ";
                }
                // line 206
                yield "            </div>
        ";
            }
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 210
    public function macro_render_column_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 0
            yield "    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 214
    public function macro_render_fieldset_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 215
            yield "    ";
            $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 215) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 215)) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 215));
            // line 216
            yield "    ";
            $context["is_collapsible_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSIBLE");
            // line 217
            yield "    ";
            $context["is_collapsed_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
            // line 218
            yield "    ";
            $context["is_collapsible"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsible_option_name"] ?? null)], "method", false, false, false, 218);
            // line 219
            yield "    ";
            $context["is_collapsed"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsed_option_name"] ?? null)], "method", false, false, false, 219);
            // line 220
            yield "
    <div class=\"form-fieldset ";
            // line 221
            yield (( !($context["fieldset_has_header"] ?? null)) ? ("form-fieldset-no-header") : (""));
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 221), "html", null, true);
            yield "\">
        <fieldset>
            ";
            // line 223
            if (($context["fieldset_has_header"] ?? null)) {
                // line 224
                yield "                <div class=\"form-fieldset-header ";
                yield ((($context["is_collapsible"] ?? null)) ? ("collapsible") : (""));
                yield " ";
                yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 224))) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        ";
                // line 226
                $context["fieldset_title_contents"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 227
                    yield "                            ";
                    if (($context["is_collapsible"] ?? null)) {
                        // line 228
                        yield "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
                    }
                    // line 230
                    yield "
                            ";
                    // line 231
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 231)) {
                        // line 232
                        yield "                                <i class=\"form-fieldset-icon ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 232), "html", null, true);
                        yield "\"></i>
                            ";
                    }
                    // line 234
                    yield "
                            ";
                    // line 235
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 235));
                    yield "
                        ";
                })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 237
                yield "
                        ";
                // line 238
                if (($context["is_collapsible"] ?? null)) {
                    // line 239
                    yield "                            <a href=\"#content-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "property", [], "any", false, false, false, 239), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                    // line 240
                    yield ((($context["is_collapsed"] ?? null)) ? ("collapsed") : (""));
                    yield "\"
                               aria-expanded=\"";
                    // line 241
                    yield ((($context["is_collapsed"] ?? null)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "property", [], "any", false, false, false, 241), "html", null, true);
                    yield "\">
                                ";
                    // line 242
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </a>
                        ";
                } else {
                    // line 245
                    yield "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                    // line 246
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </span>
                        ";
                }
                // line 249
                yield "
                        ";
                // line 250
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 250)) {
                    // line 251
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 251));
                    yield "</div>
                        ";
                }
                // line 253
                yield "                    </div>
                </div>
            ";
            }
            // line 256
            yield "
            <div id=\"content-";
            // line 257
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "property", [], "any", false, false, false, 257), "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
            yield " ";
            yield ((($context["is_collapsible"] ?? null)) ? ("collapse") : (""));
            yield " ";
            yield (( !($context["is_collapsed"] ?? null)) ? ("show") : (""));
            yield "\">
                <div class=\"row\">
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 261
    public function macro_render_fieldset_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 0
            yield "                </div>
            </div>
        </fieldset>
    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 269
    public function macro_render_detail_fields_with_tabs($__entity__ = null, $__field_layout__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field_layout" => $__field_layout__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 270
            yield "    ";
            @trigger_error("The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 270).", E_USER_DEPRECATED);
            // line 271
            yield "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 275));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 276
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 277
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 277)) {
                    yield "active";
                }
                yield "\" href=\"#tab-pane-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 277), "html", null, true);
                yield "\" id=\"tab-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 277), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 278
                if (CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 278)) {
                    // line 279
                    yield "<i class=\"fa-fw ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 279), "html", null, true);
                    yield "\"></i>";
                }
                // line 281
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 281), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 281), "translationDomain", [], "any", false, false, false, 281));
                yield "
                        </a>
                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            yield "            </ul>
            <div class=\"tab-content\">
                ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 287));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 288
                yield "                    <div id=\"tab-pane-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 288), "html", null, true);
                yield "\" class=\"tab-pane ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 288)) {
                    yield "active";
                }
                yield " ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 288)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 288), "")) : ("")), "html", null, true);
                yield "\">
                        ";
                // line 289
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 289)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 289), false)) : (false))) {
                    // line 290
                    yield "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 291
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 291), array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 291), "translationDomain", [], "any", false, false, false, 291));
                    yield "
                            </div>
                        ";
                }
                // line 294
                yield "                        <div class=\"row\">
                            ";
                // line 295
                yield CoreExtension::callMacro($macros["_self"], "macro_render_detail_fields", [($context["entity"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "fieldsInTab", [CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 295)], "method", false, false, false, 295)], 295, $context, $this->getSourceContext());
                yield "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            yield "            </div>
        </div>
    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 304
    public function macro_render_detail_fields($__entity__ = null, $__fields__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "fields" => $__fields__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 305
            yield "    ";
            @trigger_error("The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 305).", E_USER_DEPRECATED);
            // line 306
            yield "
    ";
            // line 307
            $context["form_fieldset_is_already_open"] = false;
            // line 308
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
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
                // line 309
                yield "        ";
                $context["is_form_fieldset"] = CoreExtension::inFilter("field-form_fieldset", CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 309));
                // line 310
                yield "
        ";
                // line 311
                if ((($context["is_form_fieldset"] ?? null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 311) &&  !($context["is_form_fieldset"] ?? null)))) {
                    // line 312
                    yield "            ";
                    if (($context["form_fieldset_is_already_open"] ?? null)) {
                        // line 313
                        yield "                ";
                        yield CoreExtension::callMacro($macros["_self"], "macro_close_form_fieldset", [], 313, $context, $this->getSourceContext());
                        yield "
                ";
                        // line 314
                        $context["form_fieldset_is_already_open"] = false;
                        // line 315
                        yield "            ";
                    }
                    // line 316
                    yield "
            ";
                    // line 317
                    yield CoreExtension::callMacro($macros["_self"], "macro_open_form_fieldset", [((($context["is_form_fieldset"] ?? null)) ? ($context["field"]) : (null))], 317, $context, $this->getSourceContext());
                    yield "
            ";
                    // line 318
                    $context["form_fieldset_is_already_open"] = true;
                    // line 319
                    yield "        ";
                }
                // line 320
                yield "
        ";
                // line 321
                yield from $this->unwrap()->yieldBlock('detail_field', $context, $blocks);
                // line 326
                yield "    ";
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
            // line 327
            yield "
    ";
            // line 328
            if (($context["form_fieldset_is_already_open"] ?? null)) {
                // line 329
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_close_form_fieldset", [], 329, $context, $this->getSourceContext());
                yield "
        ";
                // line 330
                $context["form_fieldset_is_already_open"] = false;
                // line 331
                yield "    ";
            }
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 334
    public function macro_open_form_fieldset($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 335
            yield "    ";
            @trigger_error("The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 335).", E_USER_DEPRECATED);
            // line 336
            yield "
    ";
            // line 337
            $context["fieldset_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 337))));
            // line 338
            yield "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsible"], "method", false, false, false, 338)));
            // line 339
            yield "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsed"], "method", false, false, false, 339)));
            // line 340
            yield "    ";
            $context["fieldset_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 340), "get", ["icon"], "method", true, true, false, 340)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 340), "get", ["icon"], "method", false, false, false, 340), false)) : (false))));
            // line 341
            yield "    ";
            $context["fieldset_label"] = (((null === ($context["field"] ?? null))) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 341)));
            // line 342
            yield "    ";
            $context["fieldset_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 342)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 342), false)) : (false))));
            // line 343
            yield "    ";
            $context["fieldset_has_header"] = (((($context["collapsible"] ?? null) || ($context["fieldset_icon"] ?? null)) || ($context["fieldset_label"] ?? null)) || ($context["fieldset_help"] ?? null));
            // line 344
            yield "
    <div class=\"";
            // line 345
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 345) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 345)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 345), "html", null, true)) : (yield ""));
            yield "\">
        <div class=\"form-fieldset\">
            ";
            // line 347
            if (($context["fieldset_has_header"] ?? null)) {
                // line 348
                yield "                <div class=\"form-fieldset-header ";
                yield ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                yield " ";
                yield (( !Twig\Extension\CoreExtension::testEmpty(($context["fieldset_help"] ?? null))) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 350
                if ( !($context["collapsible"] ?? null)) {
                    // line 351
                    yield "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 353
                    yield "                            href=\"#";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 354
                    yield ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    yield "\"
                            aria-expanded=\"";
                    // line 355
                    yield ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\"
                        ";
                }
                // line 357
                yield "                        >
                            ";
                // line 358
                if (($context["collapsible"] ?? null)) {
                    // line 359
                    yield "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
                }
                // line 361
                yield "
                            ";
                // line 362
                if (($context["fieldset_icon"] ?? null)) {
                    // line 363
                    yield "                                <i class=\"form-fieldset-icon ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["fieldset_icon"] ?? null), "html", null, true);
                    yield "\"></i>
                            ";
                }
                // line 365
                yield "                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_label"] ?? null));
                yield "
                        </a>

                        ";
                // line 368
                if (($context["fieldset_help"] ?? null)) {
                    // line 369
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_help"] ?? null));
                    yield "</div>
                        ";
                }
                // line 371
                yield "                    </div>
                </div>
            ";
            }
            // line 374
            yield "
            <div ";
            // line 375
            if (($context["fieldset_name"] ?? null)) {
                yield "id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["fieldset_name"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-fieldset-body ";
            yield ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            yield " ";
            yield (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            yield "\">
                <dl class=\"datalist\">
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 379
    public function macro_close_form_fieldset(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 380
            yield "    ";
            @trigger_error("The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 380).", E_USER_DEPRECATED);
            // line 381
            yield "
            </dl>
        </div>
    </div>
</div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 388
    public function macro_render_field($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 389
            yield "    ";
            @trigger_error("The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 389).", E_USER_DEPRECATED);
            // line 390
            yield "
    <div class=\"data-row ";
            // line 391
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 391), "html", null, true);
            yield "\">
        <dt>
            ";
            // line 393
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 393));
            yield "

            ";
            // line 395
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 395))) {
                // line 396
                yield "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 396)), "html_attr");
                yield "\">
                    <i class=\"far fa-question-circle\"></i>
                </a>
            ";
            }
            // line 400
            yield "        </dt>
        <dd>
            ";
            // line 402
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 402), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </dd>
    </div>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
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
        return array (  1398 => 402,  1394 => 400,  1386 => 396,  1384 => 395,  1379 => 393,  1374 => 391,  1371 => 390,  1368 => 389,  1355 => 388,  1345 => 381,  1342 => 380,  1331 => 379,  1315 => 375,  1312 => 374,  1307 => 371,  1301 => 369,  1299 => 368,  1292 => 365,  1286 => 363,  1284 => 362,  1281 => 361,  1277 => 359,  1275 => 358,  1272 => 357,  1265 => 355,  1261 => 354,  1256 => 353,  1252 => 351,  1250 => 350,  1242 => 348,  1240 => 347,  1235 => 345,  1232 => 344,  1229 => 343,  1226 => 342,  1223 => 341,  1220 => 340,  1217 => 339,  1214 => 338,  1212 => 337,  1209 => 336,  1206 => 335,  1194 => 334,  1188 => 331,  1186 => 330,  1181 => 329,  1179 => 328,  1176 => 327,  1162 => 326,  1160 => 321,  1157 => 320,  1154 => 319,  1152 => 318,  1148 => 317,  1145 => 316,  1142 => 315,  1140 => 314,  1135 => 313,  1132 => 312,  1130 => 311,  1127 => 310,  1124 => 309,  1106 => 308,  1104 => 307,  1101 => 306,  1098 => 305,  1085 => 304,  1077 => 299,  1059 => 295,  1056 => 294,  1050 => 291,  1047 => 290,  1045 => 289,  1034 => 288,  1017 => 287,  1013 => 285,  995 => 281,  990 => 279,  988 => 278,  979 => 277,  976 => 276,  959 => 275,  953 => 271,  950 => 270,  937 => 269,  928 => 0,  916 => 261,  902 => 257,  899 => 256,  894 => 253,  888 => 251,  886 => 250,  883 => 249,  877 => 246,  874 => 245,  868 => 242,  862 => 241,  858 => 240,  853 => 239,  851 => 238,  848 => 237,  843 => 235,  840 => 234,  834 => 232,  832 => 231,  829 => 230,  825 => 228,  822 => 227,  820 => 226,  812 => 224,  810 => 223,  803 => 221,  800 => 220,  797 => 219,  794 => 218,  791 => 217,  788 => 216,  785 => 215,  773 => 214,  767 => 0,  755 => 210,  748 => 206,  742 => 204,  740 => 203,  736 => 201,  731 => 200,  725 => 199,  721 => 197,  719 => 196,  713 => 195,  710 => 194,  707 => 193,  704 => 192,  692 => 191,  685 => 187,  682 => 186,  680 => 185,  668 => 184,  661 => 180,  658 => 179,  656 => 178,  644 => 177,  637 => 0,  625 => 172,  618 => 168,  612 => 165,  609 => 164,  607 => 163,  585 => 162,  582 => 161,  579 => 160,  576 => 159,  564 => 158,  557 => 0,  545 => 153,  538 => 0,  526 => 148,  519 => 144,  511 => 141,  508 => 139,  506 => 138,  502 => 137,  500 => 136,  498 => 135,  493 => 133,  488 => 131,  486 => 130,  477 => 129,  474 => 128,  470 => 127,  465 => 124,  462 => 123,  459 => 122,  456 => 121,  444 => 120,  435 => 116,  433 => 115,  428 => 114,  426 => 113,  421 => 112,  419 => 111,  414 => 110,  412 => 109,  407 => 108,  405 => 107,  400 => 106,  398 => 105,  393 => 104,  391 => 103,  386 => 102,  384 => 101,  379 => 100,  377 => 99,  372 => 98,  370 => 97,  365 => 96,  362 => 95,  350 => 94,  341 => 89,  337 => 87,  330 => 83,  325 => 82,  320 => 78,  316 => 76,  314 => 75,  312 => 74,  310 => 73,  307 => 70,  305 => 69,  300 => 68,  287 => 67,  282 => 325,  276 => 323,  273 => 322,  269 => 321,  261 => 63,  257 => 62,  252 => 60,  246 => 59,  240 => 57,  234 => 55,  231 => 54,  226 => 53,  222 => 52,  217 => 62,  214 => 61,  211 => 52,  207 => 51,  195 => 47,  190 => 46,  186 => 45,  181 => 37,  178 => 41,  177 => 40,  175 => 39,  173 => 38,  171 => 37,  167 => 36,  160 => 33,  156 => 32,  151 => 31,  147 => 30,  140 => 27,  136 => 26,  131 => 25,  127 => 24,  115 => 20,  111 => 19,  106 => 18,  102 => 17,  90 => 13,  86 => 12,  81 => 11,  77 => 10,  69 => 6,  61 => 5,  57 => 3,  55 => 8,  48 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\detail.html.twig");
    }
}
