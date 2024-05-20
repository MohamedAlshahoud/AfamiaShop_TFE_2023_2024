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
class __TwigTemplate_019e8f3468a40b33982a6f1bf8abfbe4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order Details", [], "messages");
        yield "  ";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "reference", [], "any", false, false, false, 30), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "transporterName", [], "any", false, false, false, 39), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "transporterPrice", [], "any", false, false, false, 46) / 100), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "deliveryAddress", [], "any", false, false, false, 53), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "quantity", [], "any", false, false, false, 60), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "orderCost", [], "any", false, false, false, 67) / 100), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "tva", [], "any", false, false, false, 74) / 100), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "orderCostTtc", [], "any", false, false, false, 81) / 100), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["orderDetails"] ?? null), "createdAt", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true);
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
        return array (  216 => 90,  210 => 87,  204 => 84,  198 => 81,  192 => 78,  185 => 74,  179 => 71,  172 => 67,  166 => 64,  159 => 60,  153 => 57,  146 => 53,  140 => 50,  133 => 46,  127 => 43,  120 => 39,  114 => 36,  103 => 30,  88 => 20,  80 => 17,  72 => 14,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_details.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\account\\order_details.html.twig");
    }
}
