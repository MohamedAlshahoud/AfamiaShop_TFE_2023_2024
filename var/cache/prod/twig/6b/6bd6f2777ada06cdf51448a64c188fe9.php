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

/* partials/pagination_search.html.twig */
class __TwigTemplate_15e153b4b01fb4f1ef4d7c608775ebf7 extends Template
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
        if ((($context["pages"] ?? null) > 1)) {
            // line 2
            yield "    <nav\">
        <ul class=\"pagination-product\">
            ";
            // line 4
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 5
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 6
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["path"] ?? null), ["page" => (($context["currentPage"] ?? null) - 1)]), "html", null, true);
                yield "\" class=\"page-link\">&lt;</a>
                </li>
            ";
            } else {
                // line 9
                yield "                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&lt;</a>    
                </li>
            ";
            }
            // line 13
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                    <a href=\"";
                // line 15
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["path"] ?? null), ["page" => $context["page"]]), "html", null, true);
                yield "\" class=\"page-link\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "            ";
            if ((($context["currentPage"] ?? null) < ($context["pages"] ?? null))) {
                // line 19
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 20
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["path"] ?? null), ["page" => (($context["currentPage"] ?? null) + 1)]), "html", null, true);
                yield "\" class=\"page-link\">&gt;</a>
                </li>
            ";
            } else {
                // line 23
                yield "                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&gt;</a>    
                </li>
            ";
            }
            // line 27
            yield "        </ul>
    </nav>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/pagination_search.html.twig";
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
        return array (  100 => 27,  94 => 23,  88 => 20,  85 => 19,  82 => 18,  71 => 15,  66 => 14,  61 => 13,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/pagination_search.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\partials\\pagination_search.html.twig");
    }
}
