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
class __TwigTemplate_e56a6795a4f309e824c1896a90ce6924 extends Template
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
        $this->parent = $this->loadTemplate("baseCheckout.html.twig", "checkout/confirm.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Afamia | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Checkout Confirmation", [], "messages");
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["delivery"] ?? null), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transporter"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                                        <span class=\"text-body\">";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transporter"] ?? null), "description", [], "any", false, false, false, 30), "html", null, true);
        yield "</span>
                                    </span>
                                    <span class=\"fs-base text-dark fw-semibold\">";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (CoreExtension::getAttribute($this->env, $this->source, ($context["transporter"] ?? null), "price", [], "any", false, false, false, 32) / 100), 2, ",", "."), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            yield "                                    <tr >
                                        <td >
                                            ";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55)), "html", null, true);
            yield " 
                                            <span class=\"product-qty\"> ";
            // line 56
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                                            <span class=\"product-price\">x ";
            // line 57
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 57), "price", [], "any", false, false, false, 57) / 100), "EUR"), "html", null, true);
            yield "</span>
                                        </td>
                                        <td >
                                            ";
            // line 60
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 60), "price", [], "any", false, false, false, 60) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 60)) / 100), "EUR"), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total_htva", [], "any", false, false, false, 68) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tva", [], "messages");
        yield "</th>
                                        <td  class=\"product-tva\">";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "tva", [], "any", false, false, false, 72) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "messages");
        yield "</th>
                                        <td >";
        // line 76
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["transporter"] ?? null), "price", [], "any", false, false, false, 76) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal\">";
        // line 80
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((($context["subTotalWithTransporter"] ?? null) / 100), "EUR"), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_stripe", ["reference" => ($context["reference"] ?? null)]), "html", null, true);
        yield "\" class=\"btn btn-fill-out btn-block\">
                                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pay now", [], "messages");
        yield " (";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((($context["subTotalWithTransporter"] ?? null) / 100), "EUR"), "html", null, true);
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
        return array (  235 => 97,  223 => 90,  219 => 89,  207 => 80,  203 => 79,  197 => 76,  193 => 75,  187 => 72,  183 => 71,  177 => 68,  173 => 67,  168 => 64,  158 => 60,  152 => 57,  148 => 56,  144 => 55,  140 => 53,  136 => 52,  129 => 48,  125 => 47,  116 => 41,  104 => 32,  99 => 30,  95 => 29,  87 => 24,  77 => 17,  70 => 13,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/confirm.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\checkout\\confirm.html.twig");
    }
}
