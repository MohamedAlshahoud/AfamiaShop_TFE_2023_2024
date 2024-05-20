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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig */
class __TwigTemplate_e33e4242af08419ac0c8ffea595f6370 extends Template
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
        // line 12
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
    <span class=\"float-right\">
        ";
        // line 14
        if (($context["sorted"] ?? null)) {
            // line 15
            yield "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 16
                yield "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 18
                yield "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 20
            yield "        ";
        } else {
            // line 21
            yield "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 23
        yield "    </span>
    ";
        // line 24
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
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig";
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
        return array (  78 => 24,  75 => 23,  71 => 21,  68 => 20,  64 => 18,  60 => 16,  57 => 15,  55 => 14,  38 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig");
    }
}
