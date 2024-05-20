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

/* account/orders.html.twig */
class __TwigTemplate_9cdc68857fd4325fb9e5f0858115c1e3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/orders.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Account", [], "messages");
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
                        \t<div class=\"heading_s1\">
                                <h1>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "messages");
        yield "</h1>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "messages");
        yield "</th>
                                                <th>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "messages");
        yield "</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 45
            yield "                                                <tr>
                                                    <td>";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "quantity", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 48
            yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderCostTtc", [], "any", false, false, false, 48) / 100), "html", null, true);
            yield "</td> 
                                                    <td><a href=\"";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_details", ["reference" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-fill-out\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See", [], "messages");
            yield "</a></td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            yield "                                                <tr>
                                                    <td colspan=\"6\" class=\"text-center\">";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You haven't placed an order yet!", [], "messages");
            yield "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                                        </tbody>
                                    </table>
                                </div>
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
        return "account/orders.html.twig";
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
        return array (  168 => 56,  159 => 53,  156 => 52,  146 => 49,  142 => 48,  138 => 47,  134 => 46,  131 => 45,  126 => 44,  117 => 38,  113 => 37,  103 => 30,  88 => 20,  80 => 17,  72 => 14,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/orders.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\account\\orders.html.twig");
    }
}
