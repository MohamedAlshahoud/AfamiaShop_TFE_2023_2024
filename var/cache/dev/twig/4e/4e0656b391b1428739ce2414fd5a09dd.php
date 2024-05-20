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
class __TwigTemplate_26d42b50f7dcae392fcbf5c8f7171215 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/paginator.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/paginator.html.twig"));

        // line 4
        yield "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        if (((array_key_exists("render_detailed_pagination", $context)) ? ((isset($context["render_detailed_pagination"]) || array_key_exists("render_detailed_pagination", $context) ? $context["render_detailed_pagination"] : (function () { throw new RuntimeError('Variable "render_detailed_pagination" does not exist.', 7, $this->source); })())) : (true))) {
            // line 8
            yield "            ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "numResults", [], "any", false, false, false, 8))], "EasyAdminBundle");
            yield "
        ";
        }
        // line 10
        yield "    </div>
    ";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 11) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "hasNextPage", [], "any", false, false, false, 11))) {
            // line 12
            yield "        <nav class=\"pager list-pagination-paginator ";
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("first-page") : (""));
            yield " ";
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "hasNextPage", [], "any", false, false, false, 12)) ? ("last-page") : (""));
            yield "\">
            <ul class=\"pagination\">
                <li class=\"page-item ";
            // line 14
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 14)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 15
            (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 15)) ? (yield "#") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "previousPage", [], "any", false, false, false, 15)], "method", false, false, false, 15), "html", null, true)));
            yield "\">
                        <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </a>
                </li>
    
                ";
            // line 20
            if (((array_key_exists("render_detailed_pagination", $context)) ? ((isset($context["render_detailed_pagination"]) || array_key_exists("render_detailed_pagination", $context) ? $context["render_detailed_pagination"] : (function () { throw new RuntimeError('Variable "render_detailed_pagination" does not exist.', 20, $this->source); })())) : (true))) {
                // line 21
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 21, $this->source); })()), "pageRange", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 22
                    yield "                        <li class=\"page-item ";
                    yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 22, $this->source); })()), "currentPage", [], "any", false, false, false, 22))) ? ("active") : (""));
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
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 26, $this->source); })()), "generateUrlForPage", [$context["page"]], "method", false, false, false, 26), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
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
                yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 31, $this->source); })()), "currentPage", [], "any", false, false, false, 31))) ? ("disabled") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "currentPage", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "currentPage", [], "any", false, false, false, 32), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 35
            yield "    
                <li class=\"page-item ";
            // line 36
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "hasNextPage", [], "any", false, false, false, 36)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 37
            (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "hasNextPage", [], "any", false, false, false, 37)) ? (yield "#") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "nextPage", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true)));
            yield "\">
                        <span class=\"btn-label\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  156 => 44,  147 => 38,  143 => 37,  139 => 36,  136 => 35,  128 => 32,  123 => 31,  120 => 30,  113 => 28,  105 => 26,  101 => 24,  99 => 23,  92 => 22,  87 => 21,  85 => 20,  78 => 16,  74 => 15,  70 => 14,  62 => 12,  60 => 11,  57 => 10,  51 => 8,  49 => 7,  44 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% trans_default_domain 'EasyAdminBundle' %}

<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        {% if render_detailed_pagination is defined ? render_detailed_pagination : true %}
            {{ 'paginator.results'|trans({'%count%': paginator.numResults|format})|raw }}
        {% endif %}
    </div>
    {% if paginator.hasPreviousPage or paginator.hasNextPage %}
        <nav class=\"pager list-pagination-paginator {{ not paginator.hasPreviousPage ? 'first-page' }} {{ not paginator.hasNextPage ? 'last-page' }}\">
            <ul class=\"pagination\">
                <li class=\"page-item {{ not paginator.hasPreviousPage ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ not paginator.hasPreviousPage ? '#' : paginator.generateUrlForPage(paginator.previousPage) }}\">
                        <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">{{ 'paginator.previous'|trans }}</span>
                    </a>
                </li>
    
                {% if render_detailed_pagination is defined ? render_detailed_pagination : true %}
                    {% for page in paginator.pageRange %}
                        <li class=\"page-item {{ page == paginator.currentPage ? 'active' }} {{ page is null ? 'disabled' }}\">
                            {% if page is null %}
                                <span class=\"page-link\">&hellip;</span>
                            {% else %}
                                <a class=\"page-link\" href=\"{{ paginator.generateUrlForPage(page) }}\">{{ page }}</a>
                            {% endif %}
                        </li>
                    {% endfor %}
                {% else %}
                    <li class=\"page-item active {{ paginator.currentPage is null ? 'disabled' }}\">
                        <a class=\"page-link\" href=\"{{ paginator.generateUrlForPage(paginator.currentPage) }}\">{{ paginator.currentPage }}</a>
                    </li>
                {% endif %}
    
                <li class=\"page-item {{ not paginator.hasNextPage ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ not paginator.hasNextPage ? '#' : paginator.generateUrlForPage(paginator.nextPage) }}\">
                        <span class=\"btn-label\">{{ 'paginator.next'|trans }}</span> <i class=\"fa fa-angle-right mx-1\"></i>
                    </a>
                </li>
            </ul>
        </nav>
    {% endif %}
</div>
", "@EasyAdmin/crud/paginator.html.twig", "/Users/modeste/Documents/Projets/Fiveer/AFAMIA_SHOP/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/paginator.html.twig");
    }
}
