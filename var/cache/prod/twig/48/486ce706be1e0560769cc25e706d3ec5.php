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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_4aa2069daf2dde2ebfcc5aa905139403 extends Template
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
        // line 4
        yield "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        if (((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) {
            // line 8
            yield "            ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "numResults", [], "any", false, false, false, 8))], "EasyAdminBundle");
            yield "
        ";
        }
        // line 10
        yield "    </div>
    ";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 11) || CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 11))) {
            // line 12
            yield "        <nav class=\"pager list-pagination-paginator ";
            yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("first-page") : (""));
            yield " ";
            yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 12)) ? ("last-page") : (""));
            yield "\">
            <ul class=\"pagination\">
                <li class=\"page-item ";
            // line 14
            yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 14)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 15
            (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 15)) ? (yield "#") : (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 15)], "method", false, false, false, 15), "html", null, true)));
            yield "\">
                        <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </a>
                </li>
    
                ";
            // line 20
            if (((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) {
                // line 21
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "pageRange", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 22
                    yield "                        <li class=\"page-item ";
                    yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 22))) ? ("active") : (""));
                    yield " ";
                    yield (((null === $context["page"])) ? ("disabled") : (""));
                    yield "\">
                            ";
                    // line 23
                    if ((null === $context["page"])) {
                        // line 24
                        yield "                                <span class=\"page-link\">&hellip;</span>
                            ";
                    } else {
                        // line 26
                        yield "                                <a class=\"page-link\" href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [$context["page"]], "method", false, false, false, 26), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                        yield "</a>
                            ";
                    }
                    // line 28
                    yield "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "                ";
            } else {
                // line 31
                yield "                    <li class=\"page-item active ";
                yield (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 31))) ? ("disabled") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 32), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 35
            yield "    
                <li class=\"page-item ";
            // line 36
            yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 36)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 37
            (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 37)) ? (yield "#") : (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true)));
            yield "\">
                        <span class=\"btn-label\">";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
            yield "</span> <i class=\"fa fa-angle-right mx-1\"></i>
                    </a>
                </li>
            </ul>
        </nav>
    ";
        }
        // line 44
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/paginator.html.twig";
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
        return array (  150 => 44,  141 => 38,  137 => 37,  133 => 36,  130 => 35,  122 => 32,  117 => 31,  114 => 30,  107 => 28,  99 => 26,  95 => 24,  93 => 23,  86 => 22,  81 => 21,  79 => 20,  72 => 16,  68 => 15,  64 => 14,  56 => 12,  54 => 11,  51 => 10,  45 => 8,  43 => 7,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/paginator.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\paginator.html.twig");
    }
}
