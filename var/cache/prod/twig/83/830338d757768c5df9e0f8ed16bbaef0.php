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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_8ae19fc1014ed8e52733afcd54d0f268 extends Template
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
            'page_content' => [$this, 'block_page_content'],
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_0223757f9ce321ae3c26fefc0d92e4999c9d3ae1b23c83c3416118387ae1c7c5"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "page-content";
        return; yield '';
    }

    // line 8
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 12
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 15
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("page_title", $context, $blocks);
        return; yield '';
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("page_content", $context, $blocks);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
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
        return array (  83 => 17,  75 => 15,  68 => 12,  61 => 8,  53 => 5,  49 => 2,  47 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/content.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\content.html.twig");
    }
}
