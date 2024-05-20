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

/* @KnpPaginator/Pagination/materialize_pagination.html.twig */
class __TwigTemplate_3467d059f58723080d17f8fd928719ae extends Template
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
        // line 13
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 14
            yield "    <ul class=\"pagination\">
        ";
            // line 15
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 16
                yield "            <li class=\"waves-effect\">
                <a href=\"";
                // line 17
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                yield "\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            } else {
                // line 22
                yield "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            }
            // line 28
            yield "
        ";
            // line 29
            if (array_key_exists("previous", $context)) {
                // line 30
                yield "            <li class=\"waves-effect\">
                <a rel=\"prev\" href=\"";
                // line 31
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            } else {
                // line 36
                yield "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            }
            // line 42
            yield "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 45
                    yield "                <li class=\"waves-effect\">
                    <a href=\"";
                    // line 46
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                } else {
                    // line 49
                    yield "                <li class=\"active\">
                    <a href=\"#!\">";
                    // line 50
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                }
                // line 53
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "
        ";
            // line 55
            if (array_key_exists("next", $context)) {
                // line 56
                yield "            <li class=\"waves-effect\">
                <a rel=\"next\" href=\"";
                // line 57
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            } else {
                // line 62
                yield "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            }
            // line 68
            yield "
        ";
            // line 69
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 70
                yield "            <li class=\"waves-effect\">
                <a href=\"";
                // line 71
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                yield "\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            } else {
                // line 76
                yield "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            }
            // line 82
            yield "    </ul>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/materialize_pagination.html.twig";
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
        return array (  172 => 82,  164 => 76,  156 => 71,  153 => 70,  151 => 69,  148 => 68,  140 => 62,  132 => 57,  129 => 56,  127 => 55,  124 => 54,  118 => 53,  112 => 50,  109 => 49,  101 => 46,  98 => 45,  95 => 44,  91 => 43,  88 => 42,  80 => 36,  72 => 31,  69 => 30,  67 => 29,  64 => 28,  56 => 22,  48 => 17,  45 => 16,  43 => 15,  40 => 14,  38 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/materialize_pagination.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\materialize_pagination.html.twig");
    }
}
