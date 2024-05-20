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

/* @EasyAdmin/page/login_minimal.html.twig */
class __TwigTemplate_c101a52520da5165bc27436f363f82f7 extends Template
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
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_f4abb656aeb6629dabe4eaba5803f81c3c48ac1ac81d08b34e1c801d59a660a5"] = (($context["translation_domain"]) ?? ("messages"));
        // line 4
        yield "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('head_metas', $context, $blocks);
        // line 14
        yield "
        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('head_favicon', $context, $blocks);
        // line 18
        yield "
        <title>";
        // line 19
        yield Twig\Extension\CoreExtension::striptags(        $this->unwrap()->renderBlock("page_title", $context, $blocks));
        yield "</title>

        ";
        // line 21
        yield from $this->unwrap()->yieldBlock('head_stylesheets', $context, $blocks);
        // line 24
        yield "
        ";
        // line 25
        yield from $this->unwrap()->yieldBlock('head_javascript', $context, $blocks);
        // line 28
        yield "    </head>

    <body id=\"";
        // line 30
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\" class=\"ea ";
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\">
        ";
        // line 31
        yield from $this->unwrap()->yieldBlock('wrapper_wrapper', $context, $blocks);
        // line 32
        yield "    </body>
</html>

";
        return; yield '';
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
            <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
            <meta name=\"generator\" content=\"EasyAdmin\" />
        ";
        return; yield '';
    }

    // line 15
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            <link rel=\"shortcut icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⬛</text></svg>\">
        ";
        return; yield '';
    }

    // line 21
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "            <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\">
        ";
        return; yield '';
    }

    // line 25
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "            <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\"></script>
        ";
        return; yield '';
    }

    // line 30
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 31
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/page/login_minimal.html.twig";
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
        return array (  153 => 31,  140 => 30,  132 => 26,  128 => 25,  120 => 22,  116 => 21,  107 => 15,  94 => 7,  86 => 32,  84 => 31,  78 => 30,  74 => 28,  72 => 25,  69 => 24,  67 => 21,  62 => 19,  59 => 18,  57 => 15,  54 => 14,  52 => 7,  47 => 4,  45 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login_minimal.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\login_minimal.html.twig");
    }
}
