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

/* checkout/confirm.html.twig */
class __TwigTemplate_b05a3a1892e0aa7fe22fb7822805166d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirm.html.twig"));

        $this->parent = $this->loadTemplate("baseCheckout.html.twig", "checkout/confirm.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Checkout Confirmation", [], "messages");
        
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
                   <div  class=\"order_review\">
                        <div class=\"heading_s1\">
                            <h4>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery Address", [], "messages");
        yield "</h4>
                            <div class=\"content\" id=\"address\">
                                <input class=\"form-check-input\" type=\"radio\" Checked>
                                <label class=\"form-check-label d-flex justify-content-between\">
                                    <span class=\"d-block fs-base text-dark fw-medium mb-1\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div  class=\"order_review\">
                        <div class=\"heading_s1\">
                            <h4>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transporter", [], "messages");
        yield "</h4>
                            <div class=\"content\" id=\"transporter\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"shipping\" Checked>
                                <label class=\"form-check-label d-flex justify-content-between\">
                                    <span>
                                        <span class=\"d-block fs-base text-dark fw-medium mb-1\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                                        <span class=\"text-body\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        yield "</span>
                                    </span>
                                    <span class=\"fs-base text-dark fw-semibold\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32) / 100), 2, ",", "."), "html", null, true);
        yield " €</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div  class=\"order_review\">
                        <div  class=\"heading_s1\">
                            <h4 >";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Order", [], "messages");
        yield "</h4>
                        </div>
                        <div  class=\"table-responsive order_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th >";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "messages");
        yield "</th>
                                        <th >";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages");
        yield "</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 52, $this->source); })()), "items", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            yield "                                    <tr >
                                        <td >
                                            ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55)), "html", null, true);
            yield " 
                                            <span class=\"product-qty\"> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                                            <span class=\"product-price\">x ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 57), "price", [], "any", false, false, false, 57) / 100), "EUR"), "html", null, true);
            yield "</span>
                                        </td>
                                        <td >
                                            ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 60), "price", [], "any", false, false, false, 60) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 60)) / 100), "EUR"), "html", null, true);
            yield "
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                                </tbody>
                                <tfoot >
                                    <tr >
                                        <th >";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SubTotal Htva", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal-htva\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 68, $this->source); })()), "sub_total_htva", [], "any", false, false, false, 68) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tva", [], "messages");
        yield "</th>
                                        <td  class=\"product-tva\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 72, $this->source); })()), "tva", [], "any", false, false, false, 72) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "messages");
        yield "</th>
                                        <td >";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 76, $this->source); })()), "price", [], "any", false, false, false, 76) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((isset($context["subTotalWithTransporter"]) || array_key_exists("subTotalWithTransporter", $context) ? $context["subTotalWithTransporter"] : (function () { throw new RuntimeError('Variable "subTotalWithTransporter" does not exist.', 80, $this->source); })()) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div  class=\"payment_method\">
                           
                        </div>
                        <div class=\"payment-button\">
                            <a href=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_stripe", ["reference" => (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 89, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-fill-out btn-block\">
                                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pay now", [], "messages");
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((isset($context["subTotalWithTransporter"]) || array_key_exists("subTotalWithTransporter", $context) ? $context["subTotalWithTransporter"] : (function () { throw new RuntimeError('Variable "subTotalWithTransporter" does not exist.', 90, $this->source); })()) / 100), "EUR"), "html", null, true);
        yield ")
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"different_login\">
                <span><a href=\"";
        // line 97
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
        return "checkout/confirm.html.twig";
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
        return array (  265 => 97,  253 => 90,  249 => 89,  237 => 80,  233 => 79,  227 => 76,  223 => 75,  217 => 72,  213 => 71,  207 => 68,  203 => 67,  198 => 64,  188 => 60,  182 => 57,  178 => 56,  174 => 55,  170 => 53,  166 => 52,  159 => 48,  155 => 47,  146 => 41,  134 => 32,  129 => 30,  125 => 29,  117 => 24,  107 => 17,  100 => 13,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseCheckout.html.twig' %}

{% block title %}Afamia | {% trans %}Checkout Confirmation {% endtrans %}{% endblock %}

{% block body %}
<div class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                   <div  class=\"order_review\">
                        <div class=\"heading_s1\">
                            <h4>{% trans %}Delivery Address{% endtrans %}</h4>
                            <div class=\"content\" id=\"address\">
                                <input class=\"form-check-input\" type=\"radio\" Checked>
                                <label class=\"form-check-label d-flex justify-content-between\">
                                    <span class=\"d-block fs-base text-dark fw-medium mb-1\">{{ delivery}}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div  class=\"order_review\">
                        <div class=\"heading_s1\">
                            <h4>{% trans %}Transporter{% endtrans %}</h4>
                            <div class=\"content\" id=\"transporter\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"shipping\" Checked>
                                <label class=\"form-check-label d-flex justify-content-between\">
                                    <span>
                                        <span class=\"d-block fs-base text-dark fw-medium mb-1\">{{ transporter.name }}</span>
                                        <span class=\"text-body\">{{ transporter.description}}</span>
                                    </span>
                                    <span class=\"fs-base text-dark fw-semibold\">{{ (transporter.price/100)|number_format(2, ',', '.') }} €</span>
                                </label>
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
                                        <th >{% trans %}Total{% endtrans %}</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    {% for item in cart.items %}
                                    <tr >
                                        <td >
                                            {{ item.product.name | trans }} 
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
                                        <td  class=\"product-subtotal-htva\">{{(cart.sub_total_htva/100) |format_currency('EUR')}}</td>
                                    </tr>
                                    <tr >
                                        <th >{% trans %}Tva{% endtrans %}</th>
                                        <td  class=\"product-tva\">{{(cart.tva/100) |format_currency('EUR')}}</td>
                                    </tr>
                                    <tr >
                                        <th >{% trans %}Shipping{% endtrans %}</th>
                                        <td >{{(transporter.price/100) |format_currency('EUR')}}</td>
                                    </tr>
                                    <tr >
                                        <th >{% trans %}Total{% endtrans %}</th>
                                        <td  class=\"product-subtotal\">{{(subTotalWithTransporter/100)|format_currency('EUR') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div  class=\"payment_method\">
                           
                        </div>
                        <div class=\"payment-button\">
                            <a href=\"{{ path('payment_stripe', {reference: reference})}}\" class=\"btn btn-fill-out btn-block\">
                                {% trans %}Pay now {% endtrans %} ({{ (subTotalWithTransporter/100) |format_currency('EUR') }})
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"different_login\">
                <span><a href=\"{{path('app_home')}}\">{% trans %}Cancel{% endtrans %}</a></span>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "checkout/confirm.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\checkout\\confirm.html.twig");
    }
}
