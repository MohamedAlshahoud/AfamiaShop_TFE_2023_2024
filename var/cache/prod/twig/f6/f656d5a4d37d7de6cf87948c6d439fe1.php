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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_27e780d3300b3bc7381eb29004a729ce extends Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            yield "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . ($context["align"] ?? null))) : (""));
            // line 4
            yield "        <ul class=\"pagination";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["classAlign"] ?? null), "html", null, true);
            yield "\">

            ";
            // line 6
            if (array_key_exists("previous", $context)) {
                // line 7
                yield "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 8
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">
                        ";
                // line 9
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 13
                yield "                <li class=\"pagination-previous disabled\">
                    ";
                // line 14
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 17
            yield "
            ";
            // line 18
            if ((($context["startPage"] ?? null) > 1)) {
                // line 19
                yield "                <li>
                    <a href=\"";
                // line 20
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 22
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 23
                    yield "                    <li>
                        <a href=\"";
                    // line 24
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    yield "\">2</a>
                    </li>
                ";
                } elseif ((                // line 26
($context["startPage"] ?? null) != 2)) {
                    // line 27
                    yield "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 29
                yield "            ";
            }
            // line 30
            yield "
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                yield "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 33
                    yield "                    <li>
                        <a href=\"";
                    // line 34
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">
                            ";
                    // line 35
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "
                        </a>
                    </li>
                ";
                } else {
                    // line 39
                    yield "                    <li class=\"current\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</li>
                ";
                }
                // line 41
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "
            ";
            // line 43
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 44
                yield "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 45
                    yield "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 46
                        yield "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 48
                        yield "                        <li>
                            <a href=\"";
                        // line 49
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        yield "\">
                                ";
                        // line 50
                        yield Twig\Extension\EscaperExtension::escape($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "
                            </a>
                        </li>
                    ";
                    }
                    // line 54
                    yield "                ";
                }
                // line 55
                yield "                <li>
                    <a href=\"";
                // line 56
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 59
            yield "
            ";
            // line 60
            if (array_key_exists("next", $context)) {
                // line 61
                yield "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 62
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">
                        ";
                // line 63
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 67
                yield "                <li class=\"pagination-next disabled\">
                    ";
                // line 68
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 71
            yield "
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
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
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
        return array (  215 => 71,  209 => 68,  206 => 67,  199 => 63,  195 => 62,  192 => 61,  190 => 60,  187 => 59,  179 => 56,  176 => 55,  173 => 54,  166 => 50,  162 => 49,  159 => 48,  155 => 46,  152 => 45,  149 => 44,  147 => 43,  144 => 42,  138 => 41,  132 => 39,  125 => 35,  121 => 34,  118 => 33,  115 => 32,  111 => 31,  108 => 30,  105 => 29,  101 => 27,  99 => 26,  94 => 24,  91 => 23,  89 => 22,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  70 => 14,  67 => 13,  60 => 9,  56 => 8,  53 => 7,  51 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\foundation_v6_pagination.html.twig");
    }
}
