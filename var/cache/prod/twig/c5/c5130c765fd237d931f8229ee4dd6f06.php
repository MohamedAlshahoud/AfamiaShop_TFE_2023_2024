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

/* @KnpPaginator/Pagination/tailwindcss_pagination.html.twig */
class __TwigTemplate_7310e3e17ab18ecadf59760abf2bbb29 extends Template
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
        // line 2
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 3
            yield "    <div class=\"inline-block\">
        <div class=\"flex items-baseline flex-row border border-gray-400 rounded-sm w-auto\">
        ";
            // line 5
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 6
                yield "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400 font-bold\">
                <a href=\"";
                // line 7
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                yield "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 10
            yield "
        ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                yield "            <span class=\"bg-white text-blue-600 px-3 text-lg py-2 border-r border-gray-400\">
                <a rel=\"prev\" href=\"";
                // line 13
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">&lt;</a>
            </span>
        ";
            }
            // line 16
            yield "
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 19
                    yield "                <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r  border-gray-400\">
                    <a href=\"";
                    // line 20
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</a>
                </span>
            ";
                } else {
                    // line 23
                    yield "                <span class=\"bg-blue-600 text-white px-3 py-2 text-lg font-bold\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</span>
            ";
                }
                // line 25
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "
        ";
            // line 27
            if (array_key_exists("next", $context)) {
                // line 28
                yield "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400\">
                <a rel=\"next\" href=\"";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">&gt;</a>
            </span>
        ";
            }
            // line 32
            yield "
        ";
            // line 33
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 34
                yield "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-gray-400 font-bold\">
                <a href=\"";
                // line 35
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                yield "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 38
            yield "        </div>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig";
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
        return array (  130 => 38,  124 => 35,  121 => 34,  119 => 33,  116 => 32,  110 => 29,  107 => 28,  105 => 27,  102 => 26,  96 => 25,  90 => 23,  82 => 20,  79 => 19,  76 => 18,  72 => 17,  69 => 16,  63 => 13,  60 => 12,  58 => 11,  55 => 10,  49 => 7,  46 => 6,  44 => 5,  40 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\tailwindcss_pagination.html.twig");
    }
}
