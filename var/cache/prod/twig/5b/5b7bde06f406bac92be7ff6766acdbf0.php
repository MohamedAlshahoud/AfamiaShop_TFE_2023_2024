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

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_c2eebd5e26bb5e93b4594db8c1ed48e5 extends Template
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
        // line 5
        yield "
";
        // line 6
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6) == "detail") ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", ["renderAsSwitch"], "method", false, false, false, 6))) {
            // line 7
            yield "    ";
            $context["badge_is_hidden"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 7), "currentAction", [], "any", false, false, false, 7) == "index") && (((CoreExtension::getAttribute($this->env, $this->source,             // line 9
($context["field"] ?? null), "value", [], "any", false, false, false, 9) == true) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 9), "get", ["hideValueWhenTrue"], "method", false, false, false, 9) == true)) || ((CoreExtension::getAttribute($this->env, $this->source,             // line 11
($context["field"] ?? null), "value", [], "any", false, false, false, 11) == false) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 11), "get", ["hideValueWhenFalse"], "method", false, false, false, 11) == true))));
            // line 13
            yield "
    ";
            // line 14
            if ( !($context["badge_is_hidden"] ?? null)) {
                // line 15
                yield "        <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 15) == true)) ? ("badge-boolean-true") : ("badge-boolean-false"));
                yield "\">
            ";
                // line 16
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 16) == true)) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
                yield "
        </span>
    ";
            }
        } else {
            // line 20
            yield "    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 21), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 21) == true)) ? ("checked") : (""));
            yield "
            data-toggle-url=\"";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 22), "get", ["toggleUrl"], "method", false, false, false, 22), "html", null, true);
            yield "\"
            ";
            // line 23
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formTypeOption", ["disabled"], "method", false, false, false, 23) == true)) ? ("disabled") : (""));
            yield " autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 24), "html", null, true);
            yield "\"></label>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
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
        return array (  82 => 24,  78 => 23,  74 => 22,  68 => 21,  65 => 20,  58 => 16,  53 => 15,  51 => 14,  48 => 13,  46 => 11,  45 => 9,  43 => 7,  41 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/boolean.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\boolean.html.twig");
    }
}
