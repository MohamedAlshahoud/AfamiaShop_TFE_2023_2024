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

/* @KnpPaginator/Pagination/bulma_pagination.html.twig */
class __TwigTemplate_1ceedcaf965772e51aa3a7c73e32f04e extends Template
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
        yield "
";
        // line 3
        $context["position"] = ((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["position"] ?? null), "left")) : ("left"));
        // line 4
        $context["rounded"] = ((array_key_exists("rounded", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["rounded"] ?? null), false)) : (false));
        // line 5
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["size"] ?? null), null)) : (null));
        // line 6
        yield "
";
        // line 7
        $context["classes"] = ["pagination"];
        // line 8
        yield "
";
        // line 9
        if ((($context["position"] ?? null) != "left")) {
            $context["classes"] = Twig\Extension\CoreExtension::arrayMerge(($context["classes"] ?? null), [("is-" . ($context["position"] ?? null))]);
        }
        // line 10
        if (($context["rounded"] ?? null)) {
            $context["classes"] = Twig\Extension\CoreExtension::arrayMerge(($context["classes"] ?? null), ["is-rounded"]);
        }
        // line 11
        if ((($context["size"] ?? null) != null)) {
            $context["classes"] = Twig\Extension\CoreExtension::arrayMerge(($context["classes"] ?? null), [("is-" . ($context["size"] ?? null))]);
        }
        // line 12
        yield "
";
        // line 13
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 14
            yield "    <nav class=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(($context["classes"] ?? null), " "), "html", null, true);
            yield "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                yield "            <a rel=\"prev\" class=\"pagination-previous\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 18
                yield "            <a class=\"pagination-previous\" disabled>";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 20
            yield "
        ";
            // line 21
            if (array_key_exists("next", $context)) {
                // line 22
                yield "            <a rel=\"next\" class=\"pagination-next\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 24
                yield "            <a class=\"pagination-next\" disabled>";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 26
            yield "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if ((($context["current"] ?? null) == ($context["first"] ?? null))) {
                // line 30
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["current"] ?? null), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                yield "\">1</a>
                ";
            } else {
                // line 32
                yield "                    <a class=\"pagination-link\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                yield "\">1</a>
                ";
            }
            // line 34
            yield "            </li>

            ";
            // line 36
            if ((((($__internal_compile_0 = ($context["pagesInRange"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) - ($context["first"] ?? null)) >= 2)) {
                // line 37
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            yield "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                yield "                ";
                if (((($context["first"] ?? null) != $context["page"]) && ($context["page"] != ($context["last"] ?? null)))) {
                    // line 44
                    yield "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == ($context["current"] ?? null))) {
                        // line 46
                        yield "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["current"] ?? null), "html", null, true);
                        yield "\" aria-current=\"page\" href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                        yield "</a>
                        ";
                    } else {
                        // line 48
                        yield "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                        yield "\" href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                        yield "</a>
                        ";
                    }
                    // line 50
                    yield "                    </li>
                ";
                }
                // line 52
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "
            ";
            // line 54
            if (((($context["last"] ?? null) - (($__internal_compile_1 = ($context["pagesInRange"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagesInRange"] ?? null)) - 1)] ?? null) : null)) >= 2)) {
                // line 55
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            yield "
            <li>
                ";
            // line 61
            if ((($context["current"] ?? null) == ($context["last"] ?? null))) {
                // line 62
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["current"] ?? null), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last"] ?? null), "html", null, true);
                yield "</a>
                ";
            } else {
                // line 64
                yield "                    <a class=\"pagination-link\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last"] ?? null), "html", null, true);
                yield "</a>
                ";
            }
            // line 66
            yield "            </li>
        </ul>
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
        return "@KnpPaginator/Pagination/bulma_pagination.html.twig";
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
        return array (  225 => 66,  217 => 64,  207 => 62,  205 => 61,  201 => 59,  195 => 55,  193 => 54,  190 => 53,  184 => 52,  180 => 50,  170 => 48,  160 => 46,  158 => 45,  155 => 44,  152 => 43,  148 => 42,  145 => 41,  139 => 37,  137 => 36,  133 => 34,  127 => 32,  119 => 30,  117 => 29,  112 => 26,  106 => 24,  98 => 22,  96 => 21,  93 => 20,  87 => 18,  79 => 16,  77 => 15,  72 => 14,  70 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bulma_pagination.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bulma_pagination.html.twig");
    }
}
