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
class __TwigTemplate_805008b17c4f7d70ad4ba3be7ba93867 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_head/page_head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_head/page_head.html.twig"));

        // line 1
        yield "<div class=\"breadcrumb_section bg_gray page-title-mini\">
    <div class=\"container\"><!-- STRART CONTAINER -->
        <div class=\"row align-items-center\">
        \t<div class=\"col-md-6\">
                <div class=\"page-title\">
            \t\t<h1>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</h1>
                </div>
            </div>
            <div class=\"col-md-6\">
                <ol class=\"breadcrumb justify-content-md-end\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"/cart\">Cart</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
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
        return array (  61 => 13,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumb_section bg_gray page-title-mini\">
    <div class=\"container\"><!-- STRART CONTAINER -->
        <div class=\"row align-items-center\">
        \t<div class=\"col-md-6\">
                <div class=\"page-title\">
            \t\t<h1>{{ page_name }}</h1>
                </div>
            </div>
            <div class=\"col-md-6\">
                <ol class=\"breadcrumb justify-content-md-end\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"/cart\">Cart</a></li>
                    <li class=\"breadcrumb-item active\">{{page_name}}</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>", "page_head/page_head.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\page_head\\page_head.html.twig");
    }
}
