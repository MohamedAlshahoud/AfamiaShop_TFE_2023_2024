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

/* @EasyAdmin/crud/edit.html.twig */
class __TwigTemplate_debb7458ba458025bb9dae680388024f extends Template
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
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'edit_form' => [$this, 'block_edit_form'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 3), "@EasyAdmin/crud/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "formThemes", [], "any", false, false, false, 4), false);
        // line 6
        $context["__internal_b2a87d7eb89bb9a210226724acc05718b596459baabf6fdac494d644f1bcca7f"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 11
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 11), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_EDIT")], "method", false, false, false, 11);
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, ((("ea-edit-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 8)), "html", null, true);
        return; yield '';
    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, ("ea-edit ea-edit-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 9)), "html", null, true);
        return; yield '';
    }

    // line 13
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        yield from $this->yieldParentBlock("head_javascript", $context, $blocks);
        yield "
    <script src=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 15), "defaultAssetPackageName", [], "any", false, false, false, 15)), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    // line 18
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 21
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

    // line 25
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 28
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

    // line 32
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 34)], false);
        yield "
    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 35)], false);
        yield "
";
        return; yield '';
    }

    // line 38
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 40)], false);
        yield "
    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 41)], false);
        yield "
";
        return; yield '';
    }

    // line 44
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 46
            $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 46), "customPageTitle", [($context["pageName"] ?? null), ((($context["entity"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 46)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 46), "translationParameters", [], "any", false, false, false, 46)], "method", false, false, false, 46);
            // line 47
            yield "        ";
            yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 48
($context["ea"] ?? null), "crud", [], "any", false, false, false, 48), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 48), "translationParameters", [], "any", false, false, false, 48)], "method", false, false, false, 48), [],             // line 6
($context["__internal_b2a87d7eb89bb9a210226724acc05718b596459baabf6fdac494d644f1bcca7f"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 49
($context["custom_page_title"] ?? null), [],             // line 6
($context["__internal_b2a87d7eb89bb9a210226724acc05718b596459baabf6fdac494d644f1bcca7f"] ?? null))));
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_1_);
        return; yield '';
    }

    // line 53
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 55
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 55), ["action" => $context["action"]], false);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 59
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        yield "    ";
        yield from $this->unwrap()->yieldBlock('edit_form', $context, $blocks);
        // line 63
        yield "
    ";
        // line 64
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        return; yield '';
    }

    // line 60
    public function block_edit_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form');
        yield "
    ";
        return; yield '';
    }

    // line 64
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 65)], false);
        yield "
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/edit.html.twig";
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
        return array (  259 => 65,  255 => 64,  247 => 61,  243 => 60,  238 => 64,  235 => 63,  232 => 60,  228 => 59,  216 => 55,  211 => 54,  207 => 53,  202 => 45,  199 => 6,  198 => 49,  197 => 6,  196 => 48,  194 => 47,  192 => 46,  190 => 45,  186 => 44,  179 => 41,  175 => 40,  170 => 39,  166 => 38,  159 => 35,  155 => 34,  150 => 33,  146 => 32,  134 => 28,  130 => 27,  125 => 26,  121 => 25,  109 => 21,  105 => 20,  100 => 19,  96 => 18,  89 => 15,  84 => 14,  80 => 13,  72 => 9,  64 => 8,  60 => 3,  58 => 11,  56 => 6,  54 => 4,  47 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/edit.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\edit.html.twig");
    }
}
