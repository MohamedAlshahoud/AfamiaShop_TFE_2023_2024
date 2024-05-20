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

/* @DoctrineMigrations/Collector/icon-v3.svg */
class __TwigTemplate_47106a43096ff341c5f2a0fda550ec89 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-versions\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <rect x=\"10\" y=\"5\" width=\"10\" height=\"14\" rx=\"2\"></rect>
    <line x1=\"7\" y1=\"7\" x2=\"7\" y2=\"17\"></line>
    <line x1=\"4\" y1=\"8\" x2=\"4\" y2=\"16\"></line>
</svg>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/icon-v3.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/icon-v3.svg", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\doctrine\\doctrine-migrations-bundle\\Resources\\views\\Collector\\icon-v3.svg");
    }
}
