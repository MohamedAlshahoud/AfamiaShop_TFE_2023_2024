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

/* @EasyAdmin/crud/field/country.html.twig */
class __TwigTemplate_28893a9e745b506eab4e8f4a212dd111 extends Template
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
        // line 6
        $context["show_flag"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", ["showFlag"], "method", false, false, false, 6);
        // line 7
        $context["show_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 7), "get", ["showName"], "method", false, false, false, 7);
        // line 8
        yield "
";
        // line 9
        if ((($context["show_flag"] ?? null) &&  !($context["show_name"] ?? null))) {
            // line 10
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 11
                yield "        ";
                if ( !(null === $context["flag_code"])) {
                    // line 12
                    yield "            ";
                    // line 13
                    yield "            <img class=\"country-flag\" height=\"17\" alt=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                    yield "\" title=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                    yield "\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 13), "defaultAssetPackageName", [], "any", false, false, false, 13)), "html", null, true);
                    yield "\">
        ";
                }
                // line 15
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 16
($context["show_name"] ?? null) &&  !($context["show_flag"] ?? null))) {
            // line 17
            yield "    ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 17), ", "), "html", null, true);
            yield "
";
        } else {
            // line 19
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 20
                yield "        <span>";
                // line 21
                if (($context["show_flag"] ?? null)) {
                    // line 22
                    if ( !(null === $context["flag_code"])) {
                        // line 24
                        yield "                    <img class=\"country-flag\" height=\"17\" alt=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                        yield "\" title=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                        yield "\" src=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 24), "defaultAssetPackageName", [], "any", false, false, false, 24)), "html", null, true);
                        yield "\">";
                    }
                }
                // line 28
                if (($context["show_name"] ?? null)) {
                    // line 29
                    (((array_key_exists("country_name", $context) &&  !(null === $context["country_name"]))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true)) : (yield ""));
                }
                // line 31
                yield "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/country.html.twig";
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
        return array (  107 => 31,  104 => 29,  102 => 28,  92 => 24,  90 => 22,  88 => 21,  86 => 20,  81 => 19,  75 => 17,  73 => 16,  67 => 15,  57 => 13,  55 => 12,  52 => 11,  47 => 10,  45 => 9,  42 => 8,  40 => 7,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/country.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\country.html.twig");
    }
}
