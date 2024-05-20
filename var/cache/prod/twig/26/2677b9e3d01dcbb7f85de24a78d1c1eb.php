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

/* @KnpPaginator/Pagination/uikit_v3_sortable.html.twig */
class __TwigTemplate_0a9d6669cfd4615d37de2e952c5b38e1 extends Template
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
        yield "<a";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["attr"], "html", null, true);
            yield "=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " style=\"color: #000;\">
<span class=\"pull-right\">
        ";
        // line 11
        if (($context["sorted"] ?? null)) {
            // line 12
            yield "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 13
                yield "                <i data-uk-icon=\"triangle-down\"></i>
            ";
            } else {
                // line 15
                yield "                <i data-uk-icon=\"triangle-up\"></i>
            ";
            }
            // line 17
            yield "        ";
        } else {
            // line 18
            yield "            <i></i>
        ";
        }
        // line 20
        yield "    </span>
";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["title"] ?? null), "html", null, true);
        yield "
</a>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/uikit_v3_sortable.html.twig";
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
        return array (  78 => 21,  75 => 20,  71 => 18,  68 => 17,  64 => 15,  60 => 13,  57 => 12,  55 => 11,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/uikit_v3_sortable.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\uikit_v3_sortable.html.twig");
    }
}
