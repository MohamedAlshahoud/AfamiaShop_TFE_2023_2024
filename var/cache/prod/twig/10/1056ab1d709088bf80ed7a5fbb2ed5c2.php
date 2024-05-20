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
class __TwigTemplate_42d37b49efe9442bdd5c2b658b4f2281 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart", [], "messages");
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 9));
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
            yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "imageUrls", [], "any", false, false, false, 27)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            yield "\"></a>
                                        </td>
                                        <td data-title=\"Product\" class=\"product-name\"><a>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29)), "html", null, true);
            yield "</a></td>
                                        <td data-title=\"Price\" class=\"product-price\">";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "price", [], "any", false, false, false, 30) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        <td data-title=\"Quantity\" class=\"product-quantity\">
                                            <div  class=\"quantity\">
                                                <a href=\"/cart/remove/";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
            yield "/1\">
                                                    <input type=\"button\" value=\"-\" class=\"minus\">
                                                </a>
                                                <input  type=\"text\" name=\"quantity\" value=\"";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            yield "\" title=\"Qty\" size=\"4\" class=\"qty\">
                                                <a href=\"/cart/add/";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
            yield "/1\">
                                                    <input type=\"button\" value=\"+\" class=\"plus\">
                                                </a>
                                            </div>
                                        </td>
                                        <td data-title=\"Total\" class=\"product-subtotal\">";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sub_total", [], "any", false, false, false, 42) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        <td data-title=\"Remove\" class=\"product-remove\"><a href=\"/cart/remove/";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            yield "/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43), "html", null, true);
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
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total_htva", [], "any", false, false, false, 65) / 100), "EUR"), "html", null, true);
            yield "</td>
                                        </tr>
                                        <tr >
                                            <td  class=\"cart_tva\">";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TVA", [], "messages");
            yield "</td>
                                            <td  class=\"cart_tva\">";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "tva", [], "any", false, false, false, 69) / 100), "EUR"), "html", null, true);
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
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 75) / 100), "EUR"), "html", null, true);
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
        return array (  251 => 100,  238 => 95,  234 => 94,  229 => 92,  223 => 88,  212 => 82,  206 => 81,  197 => 75,  193 => 74,  185 => 69,  181 => 68,  175 => 65,  171 => 64,  145 => 43,  141 => 42,  133 => 37,  129 => 36,  123 => 33,  117 => 30,  113 => 29,  108 => 27,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  71 => 10,  66 => 9,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\cart\\index.html.twig");
    }
}
