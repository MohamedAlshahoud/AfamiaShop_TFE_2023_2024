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

/* product/display_product.html.twig */
class __TwigTemplate_6aea3d9a5255b29ae10a42075a2321b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div  class=\"col-lg-3 col-md-4 col-6\">
    <div  class=\"product\">
        <div  class=\"product_img\"><a href=\"#\"><img alt=\"product_img1\" src=\"/assets/images/products/";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageUrls", [], "any", false, false, false, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        yield "\"></a>
        </div>
        <div  class=\"product_info\">
            <h6 class=\"product_title\"><a href=\"/product/";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "\"> ";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6)), "html", null, true);
        yield "</a></h6>
            <div  class=\"product_price\"><span class=\"price\">";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 7) / 100), "EUR"), "html", null, true);
        yield "</span></div>
            <hr>
            <a href=\"/product/";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "\" class=\"btn btn-fill-out  btn-block\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See", [], "messages");
        yield "</a>
        </div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/display_product.html.twig";
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
        return array (  59 => 9,  54 => 7,  48 => 6,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/display_product.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\product\\display_product.html.twig");
    }
}
