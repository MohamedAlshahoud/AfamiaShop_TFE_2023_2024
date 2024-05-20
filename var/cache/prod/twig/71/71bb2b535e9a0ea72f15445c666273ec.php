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

/* page_head/page_head.html.twig */
class __TwigTemplate_ff0fa7ec9419b0caf39b15e9dcdfe0c2 extends Template
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
    <div class=\"container\"><!-- STRART CONTAINER -->
        <div class=\"row align-items-center\">
        \t<div class=\"col-md-6\">
                <div class=\"page-title\">
            \t\t<h1>";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_name"] ?? null), "html", null, true);
        yield "</h1>
                </div>
            </div>
            <div class=\"col-md-6\">
                <ol class=\"breadcrumb justify-content-md-end\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"/cart\">Cart</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_name"] ?? null), "html", null, true);
        yield "</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "page_head/page_head.html.twig";
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
        return array (  55 => 13,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page_head/page_head.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\page_head\\page_head.html.twig");
    }
}
