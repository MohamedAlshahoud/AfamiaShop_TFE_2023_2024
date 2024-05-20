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

/* newsletters/list.html.twig */
class __TwigTemplate_a76a7f3675d1b33a7911df91caeefdbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletters/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletters/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "newsletters/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of Newsletters", [], "messages");
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"main_content\">
    <div class=\"section small_pt pb_70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                            <div class=\"card\">
                                <div class=\"heading_s1\">
                                    <h1>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of Newsletters", [], "messages");
        yield "</h1>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead>
                                                <tr>
                                                    <th>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "messages");
        yield "</th>
                                                    <th>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre", [], "messages");
        yield "</th>
                                                    <th>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "messages");
        yield "</th>
                                                    <th>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", [], "messages");
        yield "</th>
                                                    <th>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registered", [], "messages");
        yield "</th>
                                                    <th>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        yield "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["newsletters"]) || array_key_exists("newsletters", $context) ? $context["newsletters"] : (function () { throw new RuntimeError('Variable "newsletters" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 32
            yield "                                                    <tr>
                                                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "name", [], "any", false, false, false, 34)), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "categories", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36)), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "categories", [], "any", false, false, false, 37), "users", [], "any", false, false, false, 37)), "html", null, true);
            yield "</td>
                                                        <td>
                                                            ";
            // line 39
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "isSent", [], "any", false, false, false, 39) == false)) {
                // line 40
                yield "                                                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_send", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send", [], "messages");
                yield "</a>
                                                            ";
            }
            // line 42
            yield "                                                        </td>
                                                    </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            yield "                                                    <tr>
                                                        <td colspan=\"6\" class=\"text-center\">";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You haven't created a newsletter yet!", [], "messages");
            yield "</td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "newsletters/list.html.twig";
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
        return array (  198 => 49,  189 => 46,  186 => 45,  179 => 42,  171 => 40,  169 => 39,  164 => 37,  160 => 36,  156 => 35,  152 => 34,  148 => 33,  145 => 32,  140 => 31,  133 => 27,  129 => 26,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  103 => 15,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}List of Newsletters{% endtrans %}  {% endblock %}

{% block body %}
<div class=\"main_content\">
    <div class=\"section small_pt pb_70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                            <div class=\"card\">
                                <div class=\"heading_s1\">
                                    <h1>{% trans %}List of Newsletters{% endtrans %}</h1>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead>
                                                <tr>
                                                    <th>{% trans %} ID {% endtrans %}</th>
                                                    <th>{% trans %} Titre {% endtrans %}</th>
                                                    <th>{% trans %} Date {% endtrans %}</th>
                                                    <th>{% trans %} Category {% endtrans %}</th>
                                                    <th>{% trans %} Registered {% endtrans %}</th>
                                                    <th>{% trans %} Actions {% endtrans %}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for newsletter in newsletters %}
                                                    <tr>
                                                        <td>{{newsletter.id}}</td>
                                                        <td>{{newsletter.name | trans}}</td>
                                                        <td>{{newsletter.createdAt|date(\"d/m/Y\")}}</td>
                                                        <td>{{newsletter.categories.name | trans}}</td>
                                                        <td>{{newsletter.categories.users|length}}</td>
                                                        <td>
                                                            {% if newsletter.isSent == false %}
                                                                <a href=\"{{ path('newsletters_send', {id: newsletter.id}) }}\">{% trans %}Send{% endtrans %}</a>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                {% else %}
                                                    <tr>
                                                        <td colspan=\"6\" class=\"text-center\">{% trans %}You haven't created a newsletter yet!{% endtrans %}</td>
                                                    </tr>
                                                {% endfor%}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "newsletters/list.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\newsletters\\list.html.twig");
    }
}
