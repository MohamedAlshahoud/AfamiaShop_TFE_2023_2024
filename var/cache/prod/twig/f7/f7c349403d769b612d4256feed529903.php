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

/* @KnpPaginator/Pagination/uikit_v3_pagination.html.twig */
class __TwigTemplate_f148298a5d07c5e345bde5509d11ae94 extends Template
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
        // line 14
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 15
            yield "    <ul class=\"uk-pagination uk-flex-center uk-margin-medium-top\">

            ";
            // line 17
            if (array_key_exists("previous", $context)) {
                // line 18
                yield "                <li>
                    <a rel=\"prev\" href=\"";
                // line 19
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">&laquo;&nbsp;";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
                </li>
            ";
            } else {
                // line 22
                yield "                <li class=\"uk-disabled\">
                    <span>&laquo;&nbsp;";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</span>
                </li>
            ";
            }
            // line 26
            yield "
            ";
            // line 27
            if ((($context["startPage"] ?? null) > 1)) {
                // line 28
                yield "                <li>
                    <a href=\"";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 31
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 32
                    yield "                    <li>
                        <a href=\"";
                    // line 33
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    yield "\">2</a>
                    </li>
                ";
                } elseif ((                // line 35
($context["startPage"] ?? null) != 2)) {
                    // line 36
                    yield "                    <li class=\"uk-disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                }
                // line 40
                yield "            ";
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
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 44
                    yield "                    <li>
                        <a href=\"";
                    // line 45
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } else {
                    // line 48
                    yield "                    <li class=\"uk-active\">
                        <span>";
                    // line 49
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</span>
                    </li>
                ";
                }
                // line 52
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "
            ";
            // line 55
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 56
                yield "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 57
                    yield "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 58
                        yield "                        <li class=\"uk-disabled\">
                            <span>&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 62
                        yield "                        <li>
                            <a href=\"";
                        // line 63
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "</a>
                        </li>
                    ";
                    }
                    // line 66
                    yield "                ";
                }
                // line 67
                yield "                <li>
                    <a href=\"";
                // line 68
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 71
            yield "
            ";
            // line 72
            if (array_key_exists("next", $context)) {
                // line 73
                yield "                <li>
                    <a rel=\"next\" href=\"";
                // line 74
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 77
                yield "                <li class=\"uk-disabled\">
                    <span>";
                // line 78
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 81
            yield "        </ul>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig";
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
        return array (  204 => 81,  198 => 78,  195 => 77,  187 => 74,  184 => 73,  182 => 72,  179 => 71,  171 => 68,  168 => 67,  165 => 66,  157 => 63,  154 => 62,  148 => 58,  145 => 57,  142 => 56,  140 => 55,  137 => 54,  130 => 52,  124 => 49,  121 => 48,  113 => 45,  110 => 44,  107 => 43,  103 => 42,  100 => 41,  97 => 40,  91 => 36,  89 => 35,  84 => 33,  81 => 32,  79 => 31,  74 => 29,  71 => 28,  69 => 27,  66 => 26,  60 => 23,  57 => 22,  49 => 19,  46 => 18,  44 => 17,  40 => 15,  38 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\uikit_v3_pagination.html.twig");
    }
}
