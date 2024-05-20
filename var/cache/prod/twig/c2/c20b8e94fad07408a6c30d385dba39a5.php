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

/* @EasyAdmin/crud/field/code_editor.html.twig */
class __TwigTemplate_71aa36c37c747a490610c17dd4b59276 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "detail")) {
            // line 5
            yield "    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_render_code_editor", [($context["field"] ?? null)], 5, $context, $this->getSourceContext());
            yield "
";
        } else {
            // line 7
            yield "    ";
            $context["html_id"] = ("ea-code-editor-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 7));
            // line 8
            yield "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["html_id"] ?? null), "html", null, true);
            yield "\">
        <i class=\"fa fa-code\"></i> ";
            // line 9
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.code_editor.view_code", [], "EasyAdminBundle"), "html", null, true);
            yield "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 12
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["html_id"] ?? null), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 16)), "html", null, true);
            yield "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 21
            yield CoreExtension::callMacro($macros["_self"], "macro_render_code_editor", [($context["field"] ?? null)], 21, $context, $this->getSourceContext());
            yield "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 27
        yield "
";
        return; yield '';
    }

    // line 28
    public function macro_render_code_editor($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 29
            yield "    ";
            $context["configuredHeight"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 29), "get", ["height"], "method", false, false, false, 29);
            // line 30
            yield "    <textarea
            readonly
            style=\"";
            // line 32
            (((null === ($context["configuredHeight"] ?? null))) ? (yield "max-height: 500px;") : (yield Twig\Extension\EscaperExtension::escape($this->env, (("max-height: unset; height: " . ($context["configuredHeight"] ?? null)) . "px"), "html", null, true)));
            yield "\"
            data-ea-code-editor-field=\"true\"
            data-language=\"";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 34), "get", ["language"], "method", false, false, false, 34), "html_attr");
            yield "\"
            data-tab-size=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 35), "get", ["tabSize"], "method", false, false, false, 35), "html_attr");
            yield "\"
            data-indent-with-tabs=\"";
            // line 36
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 36), "get", ["indentWithTabs"], "method", false, false, false, 36)) ? ("true") : ("false"));
            yield "\"
            data-show-line-numbers=\"";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 37), "get", ["showLineNumbers"], "method", false, false, false, 37)) ? ("true") : ("false"));
            yield "\"
            data-number-of-rows=\"";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 38), "get", ["numOfRows"], "method", false, false, false, 38), "html_attr");
            yield "\"
    >";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 40));
            // line 41
            yield "</textarea>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/code_editor.html.twig";
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
        return array (  140 => 41,  138 => 40,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  113 => 32,  109 => 30,  106 => 29,  94 => 28,  88 => 27,  79 => 21,  72 => 17,  68 => 16,  61 => 12,  55 => 9,  50 => 8,  47 => 7,  41 => 5,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/code_editor.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\code_editor.html.twig");
    }
}
