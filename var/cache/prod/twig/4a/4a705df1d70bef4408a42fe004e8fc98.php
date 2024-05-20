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

/* @KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig */
class __TwigTemplate_a3ab1b00e746cf5c363a3ada55b65241 extends Template
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
        // line 10
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
        yield ">
    <span class=\"float-end\">
        ";
        // line 12
        if (($context["sorted"] ?? null)) {
            // line 13
            yield "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 14
                yield "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 16
                yield "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 18
            yield "        ";
        } else {
            // line 19
            yield "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 21
        yield "    </span>
    ";
        // line 22
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
        return "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig";
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
        return array (  78 => 22,  75 => 21,  71 => 19,  68 => 18,  64 => 16,  60 => 14,  57 => 13,  55 => 12,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_md_sortable_link.html.twig");
    }
}
