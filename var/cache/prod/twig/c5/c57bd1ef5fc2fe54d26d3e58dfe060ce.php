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

/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_8efd662140fa982ff63d495c0a7fa07d extends Template
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
        if (("a" == CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 4))) {
            // line 5
            yield "    <a class=\"";
            yield ((((array_key_exists("isIncludedInDropdown", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["isIncludedInDropdown"] ?? null), false)) : (false))) ? ("dropdown-item") : (""));
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 5), "html", null, true);
            yield "\"
       href=\"";
            // line 6
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 6), "html", null, true);
            yield "\"
       ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["name"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 7)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html_attr");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 8)) {
                yield "<i class=\"action-icon ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 8), "html", null, true);
                yield "\"></i> ";
            }
            // line 9
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 9))) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 9));
                yield "</span>";
            }
            // line 10
            yield "</a>
";
        } elseif (("button" == CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 11))) {
            // line 12
            yield "    <button class=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 12), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["name"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 12)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html_attr");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        <span class=\"btn-label\">";
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 14)) {
                yield "<i class=\"action-icon ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 14), "html", null, true);
                yield "\"></i> ";
            }
            // line 15
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 15))) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 15));
                yield "</span>";
            }
            // line 16
            yield "</span>
    </button>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/action.html.twig";
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
        return array (  110 => 16,  104 => 15,  98 => 14,  81 => 12,  79 => 11,  76 => 10,  70 => 9,  64 => 8,  51 => 7,  47 => 6,  40 => 5,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/action.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\action.html.twig");
    }
}
