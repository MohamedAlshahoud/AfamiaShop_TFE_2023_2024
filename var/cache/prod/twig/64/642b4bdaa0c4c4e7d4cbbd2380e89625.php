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

/* @EasyAdmin/crud/filters.html.twig */
class __TwigTemplate_6403bd4eda9e07913a118b4edaa3113a extends Template
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
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["filters_form"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 3), "formThemes", [], "any", false, false, false, 3), false);
        // line 4
        yield "
";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["filters_form"] ?? null), 'form_start', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["filters_form"] ?? null), "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "data-ea-filters-form-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["filters_form"] ?? null), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]]);
        // line 8
        yield "
    ";
        // line 11
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray(($context["form_action_query_string_as_array"] ?? null)));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 12
            yield "        <input type=\"hidden\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["paramName"], "html", null, true);
            yield "\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["paramValue"], "html", null, true);
            yield "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["filters_form"] ?? null), 'widget');
        yield "
";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["filters_form"] ?? null), 'form_end');
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/filters.html.twig";
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
        return array (  73 => 16,  69 => 15,  66 => 14,  55 => 12,  50 => 11,  47 => 8,  45 => 7,  44 => 6,  43 => 5,  40 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/filters.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\filters.html.twig");
    }
}
