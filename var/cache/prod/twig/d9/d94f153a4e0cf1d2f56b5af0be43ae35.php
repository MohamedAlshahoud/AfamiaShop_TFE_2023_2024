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
class __TwigTemplate_bb9cba31790cd03eabc1918e93a6554c extends Template
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
        $this->parent = $this->loadTemplate("baseCheckout.html.twig", "checkout/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Afamia | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Checkout", [], "messages");
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
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_prepare")]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 23), 'row');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "transporter", [], "any", false, false, false, 46), 'row');
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            yield "                                    <tr >
                                        <td >
                                            ";
            // line 73
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73)), "html", null, true);
            yield " 
                                            <span class=\"product-qty\"> ";
            // line 74
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 74), "html", null, true);
            yield "</span>
                                            <span class=\"product-price\">x ";
            // line 75
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 75), "price", [], "any", false, false, false, 75) / 100), "EUR"), "html", null, true);
            yield "</span>
                                        </td>
                                        <td >
                                            ";
            // line 78
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 78)) / 100), "EUR"), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total_htva", [], "any", false, false, false, 86) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tva", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal\">";
        // line 90
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "tva", [], "any", false, false, false, 90) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SubTotal", [], "messages");
        yield "</th>
                                        <td  class=\"product-subtotal\">";
        // line 94
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 94) / 100), "EUR"), "html", null, true);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  236 => 107,  231 => 105,  223 => 100,  214 => 94,  210 => 93,  204 => 90,  200 => 89,  194 => 86,  190 => 85,  185 => 82,  175 => 78,  169 => 75,  165 => 74,  161 => 73,  157 => 71,  153 => 70,  145 => 65,  136 => 59,  120 => 46,  110 => 39,  96 => 30,  86 => 23,  76 => 16,  68 => 11,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\checkout\\index.html.twig");
    }
}
