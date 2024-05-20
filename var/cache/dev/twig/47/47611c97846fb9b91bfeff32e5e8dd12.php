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

/* account/address_list.html.twig */
class __TwigTemplate_64192e65e830c177e53aafd218886885 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address_list.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Account", [], "messages");
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
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"dashboard_menu\">
                        <ul class=\"nav nav-tabs flex-column\" role=\"\">
                            <li  class=\"nav-item\"><a  routerlink=\"/\"
                                class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\"><i class=\"ti-id-badge\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account details", [], "messages");
        yield "</a>
                            </li>
                            <li  class=\"nav-item\"><a  routerlink=\"/\"
                                class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_orders");
        yield "\"><i class=\"ti-shopping-cart-full\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Orders", [], "messages");
        yield "</a>
                            </li>
                            <li  class=\"nav-item\"><a  routerlink=\"/\"
                                class=\"nav-link active \" ng-reflect-router-link=\"/\" href=\"";
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
                        <div class=\"tab-pane fade active show\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["address_message"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_new");
        yield "\" class=\"btn btn-fill-out mb-3\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a new address", [], "messages");
        yield "</a>
                                </div>
                            </div>
                            <div class=\"row\">
                                ";
        // line 41
        $context["index"] = 0;
        // line 42
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "addresses", [], "any", false, false, false, 42));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 43
            yield "                                    ";
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 43, $this->source); })()) + 1);
            // line 44
            yield "                                    <div class=\"col-lg-6\">
                                        <div class=\"card mb-3 mb-lg-0\">
                                            <div class=\"card-header\">
                                                <h4> ";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Address n°", [], "messages");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "</h4>
                                            </div>
                                            <div class=\"card-body\">
                                                <address>
                                                    ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstName", [], "any", false, false, false, 51), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastName", [], "any", false, false, false, 51), "html", null, true);
            yield "<br>
                                                    ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 52), "html", null, true);
            yield " <br>
                                                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "codePostal", [], "any", false, false, false, 53), "html", null, true);
            yield " <br>
                                                    ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 54), "html", null, true);
            yield " <br>
                                                    ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 55), "html", null, true);
            yield "<br>
                                                    ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "phone", [], "any", false, false, false, 56), "html", null, true);
            yield "
                                                </address>
                                                <div class=\"btns-group\">
                                                    <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"btn btn-fill-out \">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "messages");
            yield "</a>
                                                    <div class=\"btn-remove\">
                                                        ";
            // line 61
            yield Twig\Extension\CoreExtension::include($this->env, $context, "address/_delete_form.html.twig");
            yield " 
                                                    </div>            
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                            </div>
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
        return "account/address_list.html.twig";
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
        return array (  254 => 68,  233 => 61,  226 => 59,  220 => 56,  216 => 55,  212 => 54,  208 => 53,  204 => 52,  198 => 51,  189 => 47,  184 => 44,  181 => 43,  163 => 42,  161 => 41,  152 => 37,  148 => 35,  135 => 29,  131 => 28,  118 => 20,  110 => 17,  102 => 14,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}Your Account{% endtrans %}  {% endblock %}

{% block body %}
<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"dashboard_menu\">
                        <ul class=\"nav nav-tabs flex-column\" role=\"\">
                            <li  class=\"nav-item\"><a  routerlink=\"/\"
                                class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"{{path('app_account')}}\"><i class=\"ti-id-badge\"></i>{% trans %}Account details{% endtrans %}</a>
                            </li>
                            <li  class=\"nav-item\"><a  routerlink=\"/\"
                                class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"{{path('app_account_orders')}}\"><i class=\"ti-shopping-cart-full\"></i>{% trans %}Your Orders{% endtrans %}</a>
                            </li>
                            <li  class=\"nav-item\"><a  routerlink=\"/\"
                                class=\"nav-link active \" ng-reflect-router-link=\"/\" href=\"{{path('app_account_address')}}\"><i class=\"ti-location-pin\"></i>{% trans %}Your Addresses{% endtrans %}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                        {% for message in app.flashes('address_message') %}
                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        {% endfor %}
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <a href=\"{{ path('address_new')}}\" class=\"btn btn-fill-out mb-3\">{% trans %}Add a new address {% endtrans %}</a>
                                </div>
                            </div>
                            <div class=\"row\">
                                {% set index = 0 %}
                                {% for address in app.user.addresses %}
                                    {% set index = index +1 %}
                                    <div class=\"col-lg-6\">
                                        <div class=\"card mb-3 mb-lg-0\">
                                            <div class=\"card-header\">
                                                <h4> {% trans %}Your Address n°{% endtrans %} {{ index }}</h4>
                                            </div>
                                            <div class=\"card-body\">
                                                <address>
                                                    {{ address.firstName}} {{ address.lastName}}<br>
                                                    {{ address.address}} <br>
                                                    {{ address.codePostal }} <br>
                                                    {{ address.city}} <br>
                                                    {{ address.country}}<br>
                                                    {{ address.phone }}
                                                </address>
                                                <div class=\"btns-group\">
                                                    <a href=\"{{ path('address_edit', {'id':address.id})}}\" class=\"btn btn-fill-out \">{% trans %}Edit{% endtrans %}</a>
                                                    <div class=\"btn-remove\">
                                                        {{ include('address/_delete_form.html.twig') }} 
                                                    </div>            
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "account/address_list.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\account\\address_list.html.twig");
    }
}
