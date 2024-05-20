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

/* account/order_details.html.twig */
class __TwigTemplate_6106b799468be296c282bfeb0333a2e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_details.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order Details", [], "messages");
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
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"\">
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link \" ng-reflect-router-link=\"/\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\"><i class=\"ti-id-badge\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account details", [], "messages");
        yield "</a>
                        </li>
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link active\" ng-reflect-router-link=\"/\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_orders");
        yield "\"><i class=\"ti-shopping-cart-full\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Orders", [], "messages");
        yield "</a>
                        </li>
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link \" ng-reflect-router-link=\"/\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address");
        yield "\"><i class=\"ti-location-pin\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Addresses", [], "messages");
        yield "</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">
                <div class=\"tab-content dashboard_content\">
                  \t<div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h4>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order number", [], "messages");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 30, $this->source); })()), "reference", [], "any", false, false, false, 30), "html", null, true);
        yield "</h4>
                            </div>
                            <div class=\"card-body\">
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transporter Name", [], "messages");
        yield " <span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 39, $this->source); })()), "transporterName", [], "any", false, false, false, 39), "html", null, true);
        yield "
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transporter Price", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 46, $this->source); })()), "transporterPrice", [], "any", false, false, false, 46) / 100), "html", null, true);
        yield "
                                        </div>
                                        
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery Address", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 53, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 53), "html", null, true);
        yield "
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 60, $this->source); })()), "quantity", [], "any", false, false, false, 60), "html", null, true);
        yield "
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SubTotal Htva", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 67, $this->source); })()), "orderCost", [], "any", false, false, false, 67) / 100), "html", null, true);
        yield "
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tva", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 74, $this->source); })()), "tva", [], "any", false, false, false, 74) / 100), "html", null, true);
        yield "
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 81, $this->source); })()), "orderCostTtc", [], "any", false, false, false, 81) / 100), "html", null, true);
        yield "
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 87, $this->source); })()), "createdAt", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true);
        yield "
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_orders");
        yield "\" class=\"btn btn-fill-out\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retour page orders", [], "messages");
        yield "</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "account/order_details.html.twig";
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
        return array (  246 => 90,  240 => 87,  234 => 84,  228 => 81,  222 => 78,  215 => 74,  209 => 71,  202 => 67,  196 => 64,  189 => 60,  183 => 57,  176 => 53,  170 => 50,  163 => 46,  157 => 43,  150 => 39,  144 => 36,  133 => 30,  118 => 20,  110 => 17,  102 => 14,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}Order Details{% endtrans %}  {% endblock %}

{% block body %}
<div class=\"main_content\">
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"\">
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link \" ng-reflect-router-link=\"/\" href=\"{{path('app_account')}}\"><i class=\"ti-id-badge\"></i>{% trans %}Account details{% endtrans %}</a>
                        </li>
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link active\" ng-reflect-router-link=\"/\" href=\"{{path('app_account_orders')}}\"><i class=\"ti-shopping-cart-full\"></i>{% trans %}Your Orders{% endtrans %}</a>
                        </li>
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link \" ng-reflect-router-link=\"/\" href=\"{{path('app_account_address')}}\"><i class=\"ti-location-pin\"></i>{% trans %}Your Addresses{% endtrans %}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">
                <div class=\"tab-content dashboard_content\">
                  \t<div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h4>{%trans %}Order number {%endtrans %} {{orderDetails.reference}}</h4>
                            </div>
                            <div class=\"card-body\">
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{% trans %}Transporter Name{%endtrans %} <span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.transporterName}}
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{%trans %}Transporter Price {%endtrans %}<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.transporterPrice/100}}
                                        </div>
                                        
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{%trans %}Delivery Address {%endtrans %}<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.deliveryAddress}}
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{%trans %}Quantity {%endtrans %}<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.quantity}}
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{%trans %}SubTotal Htva {%endtrans %}<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.orderCost/100}}
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{%trans %}Tva {%endtrans %}<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.tva/100}}
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{%trans %}Total {%endtrans %}<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.orderCostTtc/100}}
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>{%trans %}Date {%endtrans %}<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            {{orderDetails.createdAt | date('d/m/Y')}}
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a href=\"{{ path('app_account_orders') }}\" class=\"btn btn-fill-out\">{% trans %}Retour page orders{%endtrans %}</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

</div>
{% endblock %}", "account/order_details.html.twig", "/Users/modeste/Documents/Projets/Fiveer/AFAMIA_SHOP/templates/account/order_details.html.twig");
    }
}
