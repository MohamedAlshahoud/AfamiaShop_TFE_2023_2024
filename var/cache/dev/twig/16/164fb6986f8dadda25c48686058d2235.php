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
class __TwigTemplate_82fdc571c710b83e4cb5a85c3ed9c6ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/title_section.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/title_section.html.twig"));

        // line 1
        yield "<div class=\"breadcrumb_section bg_gray page-title-mini\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <div class=\"page-title\">
                    <h1>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</li>
                </ol>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  63 => 12,  59 => 11,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumb_section bg_gray page-title-mini\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <div class=\"page-title\">
                    <h1>{{ name }}</h1>
                </div>
            </div>
            <div class=\"col-md-6\">
                <ol class=\"breadcrumb justify-content-md-end\">
                    <li class=\"breadcrumb-item\"><a href=\"{{path('app_home')}}\">Home</a></li>
                    <li class=\"breadcrumb-item active\">{{ name }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>", "partials/title_section.html.twig", "/Users/modeste/Documents/Projets/Fiveer/AFAMIA_SHOP/templates/partials/title_section.html.twig");
    }
}
