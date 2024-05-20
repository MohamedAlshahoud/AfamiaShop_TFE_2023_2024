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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_a2b3a588ba84e02cab9951b320115cee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'importmap' => [$this, 'block_importmap'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_a25cae81fc173b14eed5a08e7f8d8aa3e23cf9a540c7df347ebba031a018e26f"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        yield "\" dir=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        yield "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('head_metas', $context, $blocks);
        // line 14
        yield "
    ";
        // line 15
        $context["page_title_block_output"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "    <title>";
        yield Twig\Extension\CoreExtension::striptags(($context["page_title_block_output"] ?? null));
        yield "</title>

    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('head_stylesheets', $context, $blocks);
        // line 21
        yield "
    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('configured_stylesheets', $context, $blocks);
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('head_favicon', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('head_javascript', $context, $blocks);
        // line 38
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('configured_javascripts', $context, $blocks);
        // line 43
        yield "
    ";
        // line 44
        if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 44), "textDirection", [], "any", false, false, false, 44))) {
            // line 45
            yield "        <link rel=\"stylesheet\" href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.rtl.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 45), "defaultAssetPackageName", [], "any", false, false, false, 45)), "html", null, true);
            yield "\">
    ";
        }
        // line 47
        yield "
    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('configured_head_contents', $context, $blocks);
        // line 53
        yield "</head>

";
        // line 55
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 387
        yield "</html>
";
        return; yield '';
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
        return; yield '';
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("content_title", $context, $blocks);
        return; yield '';
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "        <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 19), "defaultAssetPackageName", [], "any", false, false, false, 19)), "html", null, true);
        yield "\">
    ";
        return; yield '';
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        yield "
        ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        yield "
    ";
        return; yield '';
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        yield "\">
    ";
        return; yield '';
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "        <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 32), "defaultAssetPackageName", [], "any", false, false, false, 32)), "html", null, true);
        yield "\"></script>

        ";
        // line 34
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 37
        yield "    ";
        return; yield '';
    }

    // line 34
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)) : ([]))], false);
        yield "
        ";
        return; yield '';
    }

    // line 39
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", false, false, false, 40)) : ([]))], false);
        yield "
        ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)) : ([]))], false);
        yield "
    ";
        return; yield '';
    }

    // line 48
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", false, false, false, 49)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", false, false, false, 49)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 50
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    ";
        return; yield '';
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        yield "    <body ";
        yield from $this->unwrap()->yieldBlock('body_attr', $context, $blocks);
        // line 57
        yield "        id=\"";
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\"
        class=\"ea ";
        // line 58
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\"
        data-ea-content-width=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", false, false, false, 59)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 59)) : ("normal")))), "html", null, true);
        yield "\"
        data-ea-sidebar-width=\"";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", false, false, false, 60)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", false, false, false, 60)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 60)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 60)) : ("normal")))), "html", null, true);
        yield "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 61)) ? ("true") : ("false"));
        yield "\"
    >
    ";
        // line 63
        yield from $this->unwrap()->yieldBlock('javascript_page_layout', $context, $blocks);
        // line 66
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascript_page_color_scheme', $context, $blocks);
        // line 69
        yield "
    ";
        // line 70
        yield from $this->unwrap()->yieldBlock('wrapper_wrapper', $context, $blocks);
        // line 377
        yield "
    ";
        // line 378
        yield from $this->unwrap()->yieldBlock('body_javascript', $context, $blocks);
        // line 379
        yield "
    ";
        // line 380
        yield from $this->unwrap()->yieldBlock('configured_body_contents', $context, $blocks);
        // line 385
        yield "    </body>
";
        return; yield '';
    }

    // line 56
    public function block_body_attr($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 57
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 58
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 63
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        yield "        <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 64), "defaultAssetPackageName", [], "any", false, false, false, 64)), "html", null, true);
        yield "\"></script>
    ";
        return; yield '';
    }

    // line 66
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        yield "        <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 67), "defaultAssetPackageName", [], "any", false, false, false, 67)), "html", null, true);
        yield "\"></script>
    ";
        return; yield '';
    }

    // line 70
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        yield "        ";
        yield from $this->unwrap()->yieldBlock('flash_messages', $context, $blocks);
        // line 74
        yield "
        ";
        // line 75
        $context["user_menu_avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 76
            yield "            ";
            if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 76), "avatarUrl", [], "any", false, false, false, 76))) {
                // line 77
                yield "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
                // line 80
                yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 80))) ? ("fa fa-user") : ("fas fa-user-slash"));
                yield " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
            } else {
                // line 84
                yield "                <img class=\"user-avatar\" src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 84), "avatarUrl", [], "any", false, false, false, 84), "html", null, true);
                yield "\" />
            ";
            }
            // line 86
            yield "        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "
        ";
        // line 88
        $context["impersonator_permission"] = ((Twig\Extension\CoreExtension::constantIsDefined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 89
        yield "
        ";
        // line 90
        $context["user_menu_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 91
            yield "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            yield "</div>
                    <div>
                        <span class=\"user-label\">";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
            yield "</span>
                        <span class=\"user-name\">";
            // line 96
            yield Twig\Extension\EscaperExtension::escape($this->env, (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 96))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96))), "html", null, true);
            yield "</span>
                    </div>
                </li>

                ";
            // line 100
            yield from $this->unwrap()->yieldBlock('user_menu', $context, $blocks);
            // line 119
            yield "            </ul>
        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        yield "
        ";
        // line 122
        $context["settings_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 123
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 123) || CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 123))) {
                // line 124
                yield "                <div class=\"dropdown dropdown-settings\">
                    <a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                        <i class=\"fas fa-gear\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-end\">
                        ";
                // line 130
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 130)) {
                    // line 131
                    yield "                            <li class=\"dropdown-header dropdown-locales-label\">
                                ";
                    // line 132
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                            </li>

                            ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
                        // line 136
                        yield "                                <li>
                                    <a href=\"";
                        // line 137
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137)], "method", false, false, false, 137), "html", null, true);
                        yield "\" class=\"dropdown-item";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 137), "locale", [], "any", false, false, false, 137) == CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137))) {
                            yield " active";
                        }
                        yield "\">
                                        ";
                        // line 138
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 138)) {
                            // line 139
                            yield "                                            <i class=\"";
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 139), "html", null, true);
                            yield "\"></i>
                                        ";
                        }
                        // line 141
                        yield "                                        ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 141), "html", null, true);
                        yield "
                                    </a>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeDto'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    yield "                        ";
                }
                // line 146
                yield "
                        ";
                // line 147
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 147)) {
                    // line 148
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 148)) {
                        // line 149
                        yield "                                <div class=\"dropdown-divider\"></div>
                            ";
                    }
                    // line 151
                    yield "
                            <li class=\"dropdown-header dropdown-appearance-label\">
                                ";
                    // line 153
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
                                    <i class=\"far fa-sun fa-fw\"></i>
                                    ";
                    // line 158
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
                                    <i class=\"far fa-moon fa-fw\"></i>
                                    ";
                    // line 164
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
                                    <i class=\"fas fa-desktop fa-fw\"></i>
                                    ";
                    // line 170
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                                </a>
                            </li>
                        ";
                }
                // line 174
                yield "                    </ul>
                </div>
            ";
            }
            // line 177
            yield "        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        yield "
        <div class=\"wrapper\">
            ";
        // line 180
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 375
        yield "        </div>
    ";
        return; yield '';
    }

    // line 71
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["flash_messages"], "method", false, false, false, 72));
        yield "
        ";
        return; yield '';
    }

    // line 100
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        yield "                    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 101), "items", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            yield "                        <li><hr class=\"dropdown-divider\"></li>
                        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 103), "items", [], "any", false, false, false, 103));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 104
                yield "                            <li>
                                ";
                // line 105
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 105) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 105))) {
                    // line 106
                    yield "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !CoreExtension::getAttribute($this->env, $this->source,                 // line 107
$context["item"], "isMenuSection", [], "any", false, false, false, 107)) {
                    // line 108
                    yield "                                    <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 108), "html", null, true);
                    yield "\" class=\"dropdown-item user-action ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 108), "html", null, true);
                    yield "\"
                                       target=\"";
                    // line 109
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 109), "html", null, true);
                    yield "\" rel=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 109), "html", null, true);
                    yield "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 111
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 111))) {
                        yield "<i class=\"fa fa-fw ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 111), "html", null, true);
                        yield "\"></i>";
                    }
                    // line 112
                    yield "                                        ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 112), [],                     // line 2
($context["__internal_a25cae81fc173b14eed5a08e7f8d8aa3e23cf9a540c7df347ebba031a018e26f"] ?? null)), "html", null, true);
                    // line 112
                    yield "
                                    </a>
                                ";
                }
                // line 115
                yield "                            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "                    ";
        }
        // line 118
        yield "                ";
        return; yield '';
    }

    // line 180
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        yield "                <div class=\"responsive-header\">
                    ";
        // line 182
        yield from $this->unwrap()->yieldBlock('responsive_header', $context, $blocks);
        // line 211
        yield "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 215
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 237
        yield "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 243
        $context["has_search"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 243)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 243), "isSearchEnabled", [], "any", false, false, false, 243));
        // line 244
        yield "                    <aside class=\"content-top ";
        yield ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        yield "\">
                        ";
        // line 245
        yield from $this->unwrap()->yieldBlock('content_top_header', $context, $blocks);
        // line 326
        yield "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 329
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 370
        yield "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
        return; yield '';
    }

    // line 182
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        yield "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 188
        yield from $this->unwrap()->yieldBlock('responsive_header_logo', $context, $blocks);
        // line 193
        yield "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 195
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        yield " ms-auto\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 199
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 199), "avatarDisplayed", [], "any", false, false, false, 199)) {
            // line 200
            yield "                                    ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            yield "
                                ";
        } else {
            // line 202
            yield "                                    <i class=\"user-avatar fa fa-fw ";
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 202))) ? ("fa-user") : ("fa-user-times"));
            yield "\"></i>
                                ";
        }
        // line 204
        yield "                            </a>

                            ";
        // line 206
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        yield "
                        </div>

                        ";
        // line 209
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["settings_dropdown"] ?? null), "html", null, true);
        yield "
                    ";
        return; yield '';
    }

    // line 188
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        yield "                                <a class=\"responsive-logo\" title=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 189)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 189));
        yield "\">
                                    ";
        // line 190
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 190);
        yield "
                                </a>
                            ";
        return; yield '';
    }

    // line 215
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        yield "                            <header class=\"main-header\">
                                ";
        // line 217
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 231
        yield "                            </header>

                            ";
        // line 233
        yield from $this->unwrap()->yieldBlock('main_menu_wrapper', $context, $blocks);
        // line 236
        yield "                        ";
        return; yield '';
    }

    // line 217
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        yield "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 219
        yield from $this->unwrap()->yieldBlock('header_navbar', $context, $blocks);
        // line 229
        yield "                                </nav>
                                ";
        return; yield '';
    }

    // line 219
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        yield "                                        <div id=\"header-logo\">
                                            ";
        // line 221
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 227
        yield "                                        </div>
                                    ";
        return; yield '';
    }

    // line 221
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        yield "                                                <a class=\"logo\" title=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 222)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 222));
        yield "\">
                                                    <span class=\"logo-custom\">";
        // line 223
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 223);
        yield "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
        return; yield '';
    }

    // line 233
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        yield "                                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["main_menu"], "method", false, false, false, 234));
        yield "
                            ";
        return; yield '';
    }

    // line 245
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('search_wrapper', $context, $blocks);
        // line 304
        yield "
                            ";
        // line 305
        yield from $this->unwrap()->yieldBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 321
        yield "
                            ";
        // line 322
        yield from $this->unwrap()->yieldBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 325
        yield "                        ";
        return; yield '';
    }

    // line 246
    public function block_search_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        yield "                            <div class=\"content-search\">
                                ";
        // line 248
        if (($context["has_search"] ?? null)) {
            // line 249
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
            // line 301
            yield "                                ";
        }
        // line 302
        yield "                            </div>
                            ";
        return; yield '';
    }

    // line 249
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        yield "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 252
        yield from $this->unwrap()->yieldBlock('search_form', $context, $blocks);
        // line 299
        yield "                                        </form>
                                    ";
        return; yield '';
    }

    // line 252
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('search_form_filters', $context, $blocks);
        // line 278
        yield "
                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 280
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 280), "query", [], "any", false, false, false, 280), "get", ["crudControllerFqcn"], "method", false, false, false, 280), "html", null, true);
        yield "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 287
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 287), "get", ["query"], "method", false, false, false, 287), "html", null, true);
        yield "\">
                                                            <input class=\"form-control ";
        // line 288
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 288), "get", ["query"], "method", false, false, false, 288))) ? ("is-blank") : (""));
        yield "\" type=\"search\" name=\"query\" value=\"";
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", true, true, false, 288) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", false, false, false, 288)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", false, false, false, 288), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 288), "translationParameters", [], "any", false, false, false, 288), "EasyAdminBundle"), [],         // line 2
($context["__internal_a25cae81fc173b14eed5a08e7f8d8aa3e23cf9a540c7df347ebba031a018e26f"] ?? null)), "html", null, true);
        // line 288
        yield "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 288), "currentAction", [], "any", false, false, false, 288) == "index") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 288), "autofocusSearch", [], "any", false, false, false, 288) == true))) {
            yield " autofocus=\"autofocus\"";
        }
        yield ">
                                                        </label>

                                                        ";
        // line 291
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 291), "get", ["query"], "method", false, false, false, 291)) {
            // line 292
            yield "                                                            <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 292), "html", null, true);
            yield "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 296
        yield "                                                    </div>
                                                </div>
                                            ";
        return; yield '';
    }

    // line 253
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 254), "appliedFilters", [], "any", false, false, false, 254));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 255
            yield "                                                        ";
            if (is_iterable($context["fieldValue"])) {
                // line 256
                yield "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 257
                    yield "                                                                ";
                    // line 258
                    yield "                                                                ";
                    if (is_iterable($context["value"])) {
                        // line 259
                        yield "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 260
                            yield "                                                                        ";
                            // line 261
                            yield "                                                                        ";
                            if (is_iterable($context["iterValue"])) {
                                // line 262
                                yield "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 263
                                    yield "                                                                                <input type=\"hidden\" name=\"filters[";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                                    yield "][";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
                                    yield "][";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["index"], "html", null, true);
                                    yield "][";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["subIndex"], "html", null, true);
                                    yield "]\" value=\"";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["subIterValue"], "html", null, true);
                                    yield "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 265
                                yield "                                                                        ";
                            } else {
                                // line 266
                                yield "                                                                            <input type=\"hidden\" name=\"filters[";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                                yield "][";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
                                yield "][";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["index"], "html", null, true);
                                yield "]\" value=\"";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["iterValue"], "html", null, true);
                                yield "\">
                                                                        ";
                            }
                            // line 268
                            yield "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 269
                        yield "                                                                ";
                    } else {
                        // line 270
                        yield "                                                                    <input type=\"hidden\" name=\"filters[";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                        yield "][";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
                        yield "]\" value=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html", null, true);
                        yield "\">
                                                                ";
                    }
                    // line 272
                    yield "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                yield "                                                        ";
            } else {
                // line 274
                yield "                                                            <input type=\"hidden\" name=\"filters[";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                yield "]\" value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["fieldValue"], "html", null, true);
                yield "\">
                                                        ";
            }
            // line 276
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        yield "                                                ";
        return; yield '';
    }

    // line 305
    public function block_header_custom_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 306
        yield "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 307
        yield from $this->unwrap()->yieldBlock('header_custom_menu', $context, $blocks);
        // line 319
        yield "                            </div>
                            ";
        return; yield '';
    }

    // line 307
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 308
        yield "                                    <div class=\"dropdown user-menu-wrapper ";
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        yield "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 310
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        yield "
                                            ";
        // line 311
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 311), "isNameDisplayed", [], "any", false, false, false, 311)) {
            // line 312
            yield "                                                <span class=\"user-name\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 312), "name", [], "any", false, false, false, 312), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 314
        yield "                                        </a>

                                        ";
        // line 316
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        yield "
                                    </div>
                                ";
        return; yield '';
    }

    // line 322
    public function block_settings_dropdown_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 323
        yield "                                ";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["settings_dropdown"] ?? null), "html", null, true);
        yield "
                            ";
        return; yield '';
    }

    // line 329
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        yield "                            <article class=\"content\">
                                ";
        // line 331
        yield from $this->unwrap()->yieldBlock('content_header_wrapper', $context, $blocks);
        // line 355
        yield "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 357
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 358
        yield "                                </section>

                                ";
        // line 360
        yield from $this->unwrap()->yieldBlock('content_footer_wrapper', $context, $blocks);
        // line 368
        yield "                            </article>
                        ";
        return; yield '';
    }

    // line 331
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 332
        yield "                                    ";
        $context["has_help_message"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", true, true, false, 332) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", false, false, false, 332)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", false, false, false, 332)) : ("")));
        // line 333
        yield "                                    <section class=\"content-header\">
                                        ";
        // line 334
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 353
        yield "                                    </section>
                                ";
        return; yield '';
    }

    // line 334
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 335
        yield "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 337
        yield from $this->unwrap()->yieldBlock('content_title', $context, $blocks);
        // line 338
        yield "
                                                    ";
        // line 339
        yield from $this->unwrap()->yieldBlock('content_help', $context, $blocks);
        // line 346
        yield "                                                </h1>
                                            </div>

                                            ";
        // line 349
        yield from $this->unwrap()->yieldBlock('page_actions_wrapper', $context, $blocks);
        // line 352
        yield "                                        ";
        return; yield '';
    }

    // line 337
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 339
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 340
        yield "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 341
            yield "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 341), "helpMessage", [], "any", false, false, false, 341), [],             // line 2
($context["__internal_a25cae81fc173b14eed5a08e7f8d8aa3e23cf9a540c7df347ebba031a018e26f"] ?? null)), "html_attr");
            // line 341
            yield "\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        ";
        }
        // line 345
        yield "                                                    ";
        return; yield '';
    }

    // line 349
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 350
        yield "                                                <div class=\"page-actions\">";
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        yield "</div>
                                            ";
        return; yield '';
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 357
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 360
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 361
        yield "                                    ";
        $context["content_footer"] = ((        $this->unwrap()->hasBlock("content_footer", $context, $blocks)) ? (        $this->unwrap()->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 362
        yield "                                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["content_footer"] ?? null))) {
            // line 363
            yield "                                        <section class=\"content-footer\">
                                            ";
            // line 364
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["content_footer"] ?? null), "html", null, true);
            yield "
                                        </section>
                                    ";
        }
        // line 367
        yield "                                ";
        return; yield '';
    }

    // line 378
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 380
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 381
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", true, true, false, 381) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", false, false, false, 381)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", false, false, false, 381)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 382
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1370 => 384,  1361 => 382,  1356 => 381,  1352 => 380,  1345 => 378,  1340 => 367,  1334 => 364,  1331 => 363,  1328 => 362,  1325 => 361,  1321 => 360,  1314 => 357,  1300 => 350,  1296 => 349,  1291 => 345,  1285 => 341,  1283 => 2,  1281 => 341,  1278 => 340,  1274 => 339,  1267 => 337,  1262 => 352,  1260 => 349,  1255 => 346,  1253 => 339,  1250 => 338,  1248 => 337,  1244 => 335,  1240 => 334,  1234 => 353,  1232 => 334,  1229 => 333,  1226 => 332,  1222 => 331,  1216 => 368,  1214 => 360,  1210 => 358,  1208 => 357,  1204 => 355,  1202 => 331,  1199 => 330,  1195 => 329,  1187 => 323,  1183 => 322,  1175 => 316,  1171 => 314,  1165 => 312,  1163 => 311,  1159 => 310,  1153 => 308,  1149 => 307,  1143 => 319,  1141 => 307,  1138 => 306,  1134 => 305,  1129 => 277,  1123 => 276,  1115 => 274,  1112 => 273,  1106 => 272,  1096 => 270,  1093 => 269,  1087 => 268,  1075 => 266,  1072 => 265,  1055 => 263,  1050 => 262,  1047 => 261,  1045 => 260,  1040 => 259,  1037 => 258,  1035 => 257,  1030 => 256,  1027 => 255,  1022 => 254,  1018 => 253,  1011 => 296,  1003 => 292,  1001 => 291,  992 => 288,  990 => 2,  985 => 288,  981 => 287,  971 => 280,  967 => 278,  964 => 253,  960 => 252,  954 => 299,  952 => 252,  948 => 250,  944 => 249,  938 => 302,  935 => 301,  932 => 249,  930 => 248,  927 => 247,  923 => 246,  918 => 325,  916 => 322,  913 => 321,  911 => 305,  908 => 304,  905 => 246,  901 => 245,  893 => 234,  889 => 233,  880 => 223,  873 => 222,  869 => 221,  863 => 227,  861 => 221,  858 => 220,  854 => 219,  848 => 229,  846 => 219,  843 => 218,  839 => 217,  834 => 236,  832 => 233,  828 => 231,  826 => 217,  823 => 216,  819 => 215,  811 => 190,  804 => 189,  800 => 188,  793 => 209,  787 => 206,  783 => 204,  777 => 202,  771 => 200,  768 => 199,  763 => 195,  759 => 193,  757 => 188,  750 => 183,  746 => 182,  737 => 370,  735 => 329,  730 => 326,  728 => 245,  723 => 244,  721 => 243,  713 => 237,  711 => 215,  705 => 211,  703 => 182,  700 => 181,  696 => 180,  691 => 118,  688 => 117,  673 => 115,  668 => 112,  666 => 2,  664 => 112,  658 => 111,  651 => 109,  644 => 108,  642 => 107,  639 => 106,  637 => 105,  634 => 104,  617 => 103,  614 => 102,  611 => 101,  607 => 100,  599 => 72,  595 => 71,  589 => 375,  587 => 180,  583 => 178,  580 => 177,  575 => 174,  568 => 170,  559 => 164,  550 => 158,  542 => 153,  538 => 151,  534 => 149,  531 => 148,  529 => 147,  526 => 146,  523 => 145,  512 => 141,  506 => 139,  504 => 138,  496 => 137,  493 => 136,  489 => 135,  483 => 132,  480 => 131,  478 => 130,  470 => 124,  467 => 123,  465 => 122,  462 => 121,  458 => 119,  456 => 100,  449 => 96,  445 => 95,  440 => 93,  436 => 91,  434 => 90,  431 => 89,  429 => 88,  426 => 87,  423 => 86,  417 => 84,  410 => 80,  405 => 77,  402 => 76,  400 => 75,  397 => 74,  394 => 71,  390 => 70,  382 => 67,  378 => 66,  370 => 64,  366 => 63,  359 => 58,  352 => 57,  345 => 56,  339 => 385,  337 => 380,  334 => 379,  332 => 378,  329 => 377,  327 => 70,  324 => 69,  321 => 66,  319 => 63,  314 => 61,  310 => 60,  306 => 59,  302 => 58,  297 => 57,  294 => 56,  290 => 55,  285 => 52,  276 => 50,  271 => 49,  267 => 48,  260 => 41,  255 => 40,  251 => 39,  243 => 35,  239 => 34,  234 => 37,  232 => 34,  226 => 32,  222 => 31,  214 => 28,  210 => 27,  203 => 24,  198 => 23,  194 => 22,  186 => 19,  182 => 18,  174 => 15,  161 => 7,  155 => 387,  153 => 55,  149 => 53,  147 => 48,  144 => 47,  138 => 45,  136 => 44,  133 => 43,  131 => 39,  128 => 38,  126 => 31,  123 => 30,  121 => 27,  118 => 26,  116 => 22,  113 => 21,  111 => 18,  105 => 16,  101 => 15,  98 => 14,  96 => 7,  89 => 5,  85 => 3,  83 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
