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

/* @KnpPaginator/Pagination/filtration.html.twig */
class __TwigTemplate_d5926676cdb609b1933b7d2ac1b9a46a extends Template
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
        yield "<form method=\"get\" action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["action"] ?? null), "html", null, true);
        yield "\" enctype=\"application/x-www-form-urlencoded\">

    ";
        // line 3
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["fields"] ?? null)) > 1)) {
            // line 4
            yield "        <select name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 6
                yield "                <option value=\"";
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
            // line 8
            yield "        </select>
    ";
        } else {
            // line 10
            yield "        <input type=\"hidden\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::getArrayKeysFilter(($context["fields"] ?? null))), "html", null, true);
            yield "\" />
    ";
        }
        // line 12
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["params"] ?? null)) > 0)) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["params"] ?? null));
            foreach ($context['_seq'] as $context["param"] => $context["value"]) {
                // line 14
                yield "            <input type=\"hidden\" name=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["param"], "html", null, true);
                yield "\" value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html", null, true);
                yield "\"/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "    ";
        }
        // line 17
        yield "    <input type=\"text\" value=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["selectedValue"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterValueName"] ?? null), "html", null, true);
        yield "\" />

    <button>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "button", [], "any", false, false, false, 19), "html", null, true);
        yield "</button>

</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/filtration.html.twig";
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
        return array (  112 => 19,  104 => 17,  101 => 16,  90 => 14,  85 => 13,  82 => 12,  74 => 10,  70 => 8,  55 => 6,  51 => 5,  46 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/filtration.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\filtration.html.twig");
    }
}
