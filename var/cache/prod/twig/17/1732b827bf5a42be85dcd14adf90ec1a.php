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

/* @EasyAdmin/exception.html.twig */
class __TwigTemplate_b12b499a6e2b40077c4b5faf3dc9e081 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["layout_template_path"] ?? null), "@EasyAdmin/exception.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "error";
        return; yield '';
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page_title.exception", ["%count%" => 1], "EasyAdminBundle"), "html", null, true);
        return; yield '';
    }

    // line 6
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "";
        return; yield '';
    }

    // line 7
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "";
        return; yield '';
    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "    <div class=\"error-message\">
        <h1><i class=\"fa fa-fw fa-exclamation-circle\"></i> ";
        // line 10
        yield from         $this->unwrap()->yieldBlock("page_title", $context, $blocks);
        yield "</h1>
        ";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "publicMessage", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "translationParameters", [], "any", false, false, false, 11), "EasyAdminBundle"), "html", null, true);
        yield "
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/exception.html.twig";
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
        return array (  93 => 11,  89 => 10,  86 => 9,  82 => 8,  74 => 7,  66 => 6,  58 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/exception.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\exception.html.twig");
    }
}
