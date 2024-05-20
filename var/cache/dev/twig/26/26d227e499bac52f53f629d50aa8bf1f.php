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

/* checkout/index.html.twig */
class __TwigTemplate_1a2bab7ec78e0d4a8fba23169b56c101 extends Template
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
        return "baseCheckout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $this->parent = $this->loadTemplate("baseCheckout.html.twig", "checkout/index.html.twig", 1);
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

        yield "Afamia | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Checkout", [], "messages");
        
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
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_prepare")]);
        yield "
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery Address", [], "messages");
        yield "</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <tbody>
                                                <tr>
                                                    <td>";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "address", [], "any", false, false, false, 23), 'row');
        yield "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"btn-add-address\">
                                    <a class=\"btn btn-fill-out  mt-1\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_new");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new address", [], "messages");
        yield "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                            <div class=\"card transporter\">
                                <div class=\"card-header\">
                                    <h3>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transporter", [], "messages");
        yield "</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <tbody>
                                                <tr>
                                                    <td>";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "transporter", [], "any", false, false, false, 46), 'row');
        yield "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div  class=\"order_review\">
                        <div  class=\"heading_s1\">
                            <h4 >";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Order", [], "messages");
        yield "</h4>
                        </div>
                        <div  class=\"table-responsive order_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th >";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "messages");
        yield "</th>
                                        <th >Total</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 70, $this->source); })()), "items", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            yield "                                    <tr >
                                        <td >
                                            ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73)), "html", null, true);
            yield " 
                                            <span class=\"product-qty\"> ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 74), "html", null, true);
            yield "</span>
                                            <span class=\"product-price\">x ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 75), "price", [], "any", false, false, false, 75) / 100), "EUR"), "html", null, true);
            yield "</span>
                                        </td>
                                        <td >
                                            ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 78)) / 100), "EUR"), "html", null, true);
            yield "
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                                </tbody>
                                <tfoot >
                                    <tr >
                                        <th >";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SubTotal Htva", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 86, $this->source); })()), "sub_total_htva", [], "any", false, false, false, 86) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tva", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 90, $this->source); })()), "tva", [], "any", false, false, false, 90) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SubTotal", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 94, $this->source); })()), "sub_total", [], "any", false, false, false, 94) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"mt-5 text-center\">
                            <button class=\"btn btn-fill-out  btn-block type=\"submit\" style=\"...\">";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validate my order", [], "messages");
        yield "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        yield "
        <div class=\"different_login\">
            <span><a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "messages");
        yield "</a></span>
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
        return "checkout/index.html.twig";
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
        return array (  266 => 107,  261 => 105,  253 => 100,  244 => 94,  240 => 93,  234 => 90,  230 => 89,  224 => 86,  220 => 85,  215 => 82,  205 => 78,  199 => 75,  195 => 74,  191 => 73,  187 => 71,  183 => 70,  175 => 65,  166 => 59,  150 => 46,  140 => 39,  126 => 30,  116 => 23,  106 => 16,  98 => 11,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseCheckout.html.twig' %}

{% block title %}Afamia | {% trans %} Checkout {% endtrans %}{% endblock %}

{% block body %}
<div class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                {{ form_start(form, {action:path('order_prepare')})}}
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3>{% trans %}Delivery Address{% endtrans %}</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <tbody>
                                                <tr>
                                                    <td>{{ form_row(form.address)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"btn-add-address\">
                                    <a class=\"btn btn-fill-out  mt-1\" href=\"{{ path('address_new') }}\">{% trans %}Add new address{% endtrans %}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                            <div class=\"card transporter\">
                                <div class=\"card-header\">
                                    <h3>{% trans %}Transporter{% endtrans %}</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <tbody>
                                                <tr>
                                                    <td>{{ form_row(form.transporter) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div  class=\"order_review\">
                        <div  class=\"heading_s1\">
                            <h4 >{% trans %}Your Order{% endtrans %}</h4>
                        </div>
                        <div  class=\"table-responsive order_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th >{% trans %}Product{% endtrans %}</th>
                                        <th >Total</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    {% for item in cart.items %}
                                    <tr >
                                        <td >
                                            {{ item.product.name | trans}} 
                                            <span class=\"product-qty\"> {{item.quantity}}</span>
                                            <span class=\"product-price\">x {{(item.product.price/100) |format_currency('EUR')}}</span>
                                        </td>
                                        <td >
                                            {{(item.product.price*item.quantity/100) |format_currency('EUR')}}
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot >
                                    <tr >
                                        <th >{% trans %}SubTotal Htva{% endtrans %}</th>
                                        <td  class=\"product-subtotal\">{{(cart.sub_total_htva/100) |format_currency('EUR')}}</td>
                                    </tr>
                                    <tr >
                                        <th >{% trans %}Tva{% endtrans %}</th>
                                        <td  class=\"product-subtotal\">{{(cart.tva/100) |format_currency('EUR')}}</td>
                                    </tr>
                                    <tr >
                                        <th >{% trans %}SubTotal{% endtrans %}</th>
                                        <td  class=\"product-subtotal\">{{(cart.sub_total/100) |format_currency('EUR')}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"mt-5 text-center\">
                            <button class=\"btn btn-fill-out  btn-block type=\"submit\" style=\"...\">{% trans %}Validate my order{% endtrans %}</button>
                        </div>
                    </div>
                </div>
            </div>
        {{ form_end(form)}}
        <div class=\"different_login\">
            <span><a href=\"{{path('app_home')}}\">{% trans %}Cancel{% endtrans %}</a></span>
        </div>
        </div>
        
    </div>
</div>
{% endblock %}
", "checkout/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\checkout\\index.html.twig");
    }
}
