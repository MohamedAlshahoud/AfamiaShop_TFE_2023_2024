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

/* partials/title_section.html.twig */
class __TwigTemplate_ccffb6775cd618a903a6b60455d0534f extends Template
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
        // line 1
        yield "<div class=\"breadcrumb_section bg_gray page-title-mini\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <div class=\"page-title\">
                    <h1>";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["name"] ?? null), "html", null, true);
        yield "</h1>
                </div>
            </div>
            <div class=\"col-md-6\">
                <ol class=\"breadcrumb justify-content-md-end\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["name"] ?? null), "html", null, true);
        yield "</li>
                </ol>
            </div>
        </div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/title_section.html.twig";
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
        return array (  57 => 12,  53 => 11,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/title_section.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\partials\\title_section.html.twig");
    }
}
