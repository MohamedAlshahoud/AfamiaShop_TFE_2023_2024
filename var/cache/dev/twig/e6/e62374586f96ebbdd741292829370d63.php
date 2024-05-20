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

/* cart/index.html.twig */
class __TwigTemplate_7b559ee7b98b1eb5cc32ad6718b35ea1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart", [], "messages");
        
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
        yield "<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            yield "                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div  class=\"table-responsive shop_cart_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th  class=\"product-thumbnail\">";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Picture", [], "messages");
            yield "</th>
                                        <th  class=\"product-name\">";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "messages");
            yield "</th>
                                        <th  class=\"product-price\">";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", [], "messages");
            yield "</th>
                                        <th  class=\"product-quantity\">";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "messages");
            yield "</th>
                                        <th  class=\"product-subtotal\">";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages");
            yield "</th>
                                        <th  class=\"product-remove\">";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", [], "messages");
            yield "</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr >
                                        <td class=\"product-thumbnail\"><a><img  width=\"50\" alt=\"product1\"
                                            src=\"/assets/images/products/";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "imageUrls", [], "any", false, false, false, 27), 0, [], "array", false, false, false, 27), "html", null, true);
            yield "\"></a>
                                        </td>
                                        <td data-title=\"Product\" class=\"product-name\"><a>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29)), "html", null, true);
            yield "</a></td>
                                        <td data-title=\"Price\" class=\"product-price\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "price", [], "any", false, false, false, 30) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        <td data-title=\"Quantity\" class=\"product-quantity\">
                                            <div  class=\"quantity\">
                                                <a href=\"/cart/remove/";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
            yield "/1\">
                                                    <input type=\"button\" value=\"-\" class=\"minus\">
                                                </a>
                                                <input  type=\"text\" name=\"quantity\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            yield "\" title=\"Qty\" size=\"4\" class=\"qty\">
                                                <a href=\"/cart/add/";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
            yield "/1\">
                                                    <input type=\"button\" value=\"+\" class=\"plus\">
                                                </a>
                                            </div>
                                        </td>
                                        <td data-title=\"Total\" class=\"product-subtotal\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sub_total", [], "any", false, false, false, 42) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        <td data-title=\"Remove\" class=\"product-remove\"><a href=\"/cart/remove/";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            yield "\"\"><i class=\"fa fa-trash\"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div  class=\"medium_divider\"></div>
                        <div  class=\"divider center_icon\"></div>
                        <div  class=\"medium_divider\"></div>
                    </div>
                </div>
                <div class=\"row\">
                    <div  class=\"col-md-6\">
                        <div  class=\"border p-3 p-md-4\">
                            <div  class=\"table-responsive\">
                                <table  class=\"table\">
                                <tbody >
                                        <tr >
                                            <td  class=\"cart_total_htva\">";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart Subtotal Htva", [], "messages");
            yield "</td>
                                            <td  class=\"cart_sub_total_amount_htva\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 65, $this->source); })()), "sub_total_htva", [], "any", false, false, false, 65) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        </tr>
                                        <tr >
                                            <td  class=\"cart_tva\">";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TVA", [], "messages");
            yield "</td>
                                            <td  class=\"cart_tva\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 69, $this->source); })()), "tva", [], "any", false, false, false, 69) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        </tr>
                                    </tbody>
                                    <tbody >
                                        <tr >
                                            <td  class=\"cart_total_label\">";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart Subtotal", [], "messages");
            yield "</td>
                                            <td  class=\"cart_sub_total_amount\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 75, $this->source); })()), "sub_total", [], "any", false, false, false, 75) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"btns-group\">
                                <a href=\"";
            // line 81
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-fill-out\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continue Shopping", [], "messages");
            yield "</a>
                                <a  routerlink=\"/order/create\" class=\"btn btn-fill-out\" ng-reflect-router-link=\"/order/create\" href=\"/order/create\">";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Proceed To CheckOut", [], "messages");
            yield "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            yield "                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8\">
                        <div class=\"text-center order_complete\">
                            <div class=\"heading_s1\">
                  \t            <h3>";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your AfamiaShop Cart is empty", [], "messages");
            yield "</h3>
                            </div>
                  \t        <p>";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Press the button and discover our products", [], "messages");
            yield "</p>
                            <a href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            yield "\" class=\"btn btn-fill-out \">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover our products", [], "messages");
            yield "</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "        </div>
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
        return "cart/index.html.twig";
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
        return array (  281 => 100,  268 => 95,  264 => 94,  259 => 92,  253 => 88,  242 => 82,  236 => 81,  227 => 75,  223 => 74,  215 => 69,  211 => 68,  205 => 65,  201 => 64,  175 => 43,  171 => 42,  163 => 37,  159 => 36,  153 => 33,  147 => 30,  143 => 29,  138 => 27,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  101 => 10,  96 => 9,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}Cart{% endtrans %}{% endblock %}

{% block body %}
<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            {% for item in cart.items%}
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div  class=\"table-responsive shop_cart_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th  class=\"product-thumbnail\">{% trans %}Picture{% endtrans %}</th>
                                        <th  class=\"product-name\">{% trans %}Product{% endtrans %}</th>
                                        <th  class=\"product-price\">{% trans %}Price{% endtrans %}</th>
                                        <th  class=\"product-quantity\">{% trans %}Quantity{% endtrans %}</th>
                                        <th  class=\"product-subtotal\">{% trans %}Total{% endtrans %}</th>
                                        <th  class=\"product-remove\">{% trans %}Remove{% endtrans %}</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr >
                                        <td class=\"product-thumbnail\"><a><img  width=\"50\" alt=\"product1\"
                                            src=\"/assets/images/products/{{ item.product.imageUrls[0]}}\"></a>
                                        </td>
                                        <td data-title=\"Product\" class=\"product-name\"><a>{{item.product.name | trans}}</a></td>
                                        <td data-title=\"Price\" class=\"product-price\">{{(item.product.price/100) | format_currency('EUR')}}</td>
                                        <td data-title=\"Quantity\" class=\"product-quantity\">
                                            <div  class=\"quantity\">
                                                <a href=\"/cart/remove/{{item.product.id}}/1\">
                                                    <input type=\"button\" value=\"-\" class=\"minus\">
                                                </a>
                                                <input  type=\"text\" name=\"quantity\" value=\"{{ item.quantity }}\" title=\"Qty\" size=\"4\" class=\"qty\">
                                                <a href=\"/cart/add/{{item.product.id}}/1\">
                                                    <input type=\"button\" value=\"+\" class=\"plus\">
                                                </a>
                                            </div>
                                        </td>
                                        <td data-title=\"Total\" class=\"product-subtotal\">{{ (item.sub_total/100) | format_currency('EUR') }}</td>
                                        <td data-title=\"Remove\" class=\"product-remove\"><a href=\"/cart/remove/{{item.product.id}}/{{item.quantity}}\"\"><i class=\"fa fa-trash\"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div  class=\"medium_divider\"></div>
                        <div  class=\"divider center_icon\"></div>
                        <div  class=\"medium_divider\"></div>
                    </div>
                </div>
                <div class=\"row\">
                    <div  class=\"col-md-6\">
                        <div  class=\"border p-3 p-md-4\">
                            <div  class=\"table-responsive\">
                                <table  class=\"table\">
                                <tbody >
                                        <tr >
                                            <td  class=\"cart_total_htva\">{% trans %}Cart Subtotal Htva{% endtrans %}</td>
                                            <td  class=\"cart_sub_total_amount_htva\">{{ (cart.sub_total_htva/100) | format_currency('EUR')}}</td>
                                        </tr>
                                        <tr >
                                            <td  class=\"cart_tva\">{% trans %}TVA{% endtrans %}</td>
                                            <td  class=\"cart_tva\">{{ (cart.tva/100) | format_currency('EUR')}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody >
                                        <tr >
                                            <td  class=\"cart_total_label\">{% trans %}Cart Subtotal {% endtrans %}</td>
                                            <td  class=\"cart_sub_total_amount\">{{ (cart.sub_total/100) | format_currency('EUR')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"btns-group\">
                                <a href=\"{{ path('app_home') }}\" class=\"btn btn-fill-out\">{% trans %}Continue Shopping{% endtrans %}</a>
                                <a  routerlink=\"/order/create\" class=\"btn btn-fill-out\" ng-reflect-router-link=\"/order/create\" href=\"/order/create\">{% trans %}Proceed To CheckOut{% endtrans %}</a>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8\">
                        <div class=\"text-center order_complete\">
                            <div class=\"heading_s1\">
                  \t            <h3>{% trans %}Your AfamiaShop Cart is empty {% endtrans %}</h3>
                            </div>
                  \t        <p>{% trans %}Press the button and discover our products{% endtrans %}</p>
                            <a href=\"{{ path('app_shop') }}\" class=\"btn btn-fill-out \">{% trans %}Discover our products{% endtrans %}</a>
                        </div>
                    </div>
                </div>
            {% endfor%}
        </div>
    </div>
</div>
{% endblock %}
", "cart/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\cart\\index.html.twig");
    }
}
