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

/* @KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig */
class __TwigTemplate_e4640d6c00f811358b8567158e3d9eee extends Template
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
        // line 9
        yield "<form method=\"get\" action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["action"] ?? null), "html", null, true);
        yield "\" enctype=\"application/x-www-form-urlencoded\">
    <div class=\"input-group mb-3\">
        ";
        // line 11
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["fields"] ?? null)) > 1)) {
            // line 12
            yield "            <select class=\"form-select\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 14
                yield "                    <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                yield "\"";
                if ((($context["selectedField"] ?? null) == $context["field"])) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["label"], "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "            </select>
        ";
        } else {
            // line 18
            yield "            <input type=\"hidden\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::getArrayKeysFilter(($context["fields"] ?? null))), "html", null, true);
            yield "\"/>
        ";
        }
        // line 20
        yield "        <input class=\"form-control\" type=\"search\" value=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["selectedValue"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterValueName"] ?? null), "html", null, true);
        yield "\"
               placeholder=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter_searchword", [], "KnpPaginatorBundle"), "html", null, true);
        yield "\"/>
        <button class=\"btn btn-primary\">";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "button", [], "any", false, false, false, 22), "html", null, true);
        yield "</button>
    </div>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig";
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
        return array (  93 => 22,  89 => 21,  82 => 20,  74 => 18,  70 => 16,  55 => 14,  51 => 13,  46 => 12,  44 => 11,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_filtration.html.twig");
    }
}
