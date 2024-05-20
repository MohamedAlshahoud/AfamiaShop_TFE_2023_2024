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
class __TwigTemplate_3afbb0bf4b617705df49f1adb4c44276 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/uikit_v3_sortable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/uikit_v3_sortable.html.twig"));

        // line 9
        yield "<a";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " style=\"color: #000;\">
<span class=\"pull-right\">
        ";
        // line 11
        if ((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "            ";
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 12, $this->source); })()) == "desc")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "
</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  84 => 21,  81 => 20,  77 => 18,  74 => 17,  70 => 15,  66 => 13,  63 => 12,  61 => 11,  44 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * UIKit 3.0 Sorting control implementation.
 *
 * @author KULDIP PIPALIYA <kuldipem@gmail.com>
 */
#}
<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %} style=\"color: #000;\">
<span class=\"pull-right\">
        {% if sorted %}
            {% if direction == 'desc' %}
                <i data-uk-icon=\"triangle-down\"></i>
            {% else %}
                <i data-uk-icon=\"triangle-up\"></i>
            {% endif %}
        {% else %}
            <i></i>
        {% endif %}
    </span>
{{ title }}
</a>
", "@KnpPaginator/Pagination/uikit_v3_sortable.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\uikit_v3_sortable.html.twig");
    }
}
