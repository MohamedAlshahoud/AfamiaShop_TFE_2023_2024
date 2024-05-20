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
class __TwigTemplate_d5fe133d27274b137a05c25e96e899ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display_product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display_product.html.twig"));

        // line 1
        yield "<div  class=\"col-lg-3 col-md-4 col-6\">
    <div  class=\"product\">
        <div  class=\"product_img\"><a href=\"#\"><img alt=\"product_img1\" src=\"/assets/images/products/";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "imageUrls", [], "any", false, false, false, 3), 0, [], "array", false, false, false, 3), "html", null, true);
        yield "\"></a>
        </div>
        <div  class=\"product_info\">
            <h6 class=\"product_title\"><a href=\"/product/";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "\"> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)), "html", null, true);
        yield "</a></h6>
            <div  class=\"product_price\"><span class=\"price\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "price", [], "any", false, false, false, 7) / 100), "EUR"), "html", null, true);
        yield "</span></div>
            <hr>
            <a href=\"/product/";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "\" class=\"btn btn-fill-out  btn-block\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See", [], "messages");
        yield "</a>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  65 => 9,  60 => 7,  54 => 6,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div  class=\"col-lg-3 col-md-4 col-6\">
    <div  class=\"product\">
        <div  class=\"product_img\"><a href=\"#\"><img alt=\"product_img1\" src=\"/assets/images/products/{{ product.imageUrls[0] }}\"></a>
        </div>
        <div  class=\"product_info\">
            <h6 class=\"product_title\"><a href=\"/product/{{ product.name}}\"> {{ product.name | trans }}</a></h6>
            <div  class=\"product_price\"><span class=\"price\">{{ (product.price/100) | format_currency('EUR')}}</span></div>
            <hr>
            <a href=\"/product/{{product.name}}\" class=\"btn btn-fill-out  btn-block\">{% trans %}See{% endtrans %}</a>
        </div>
    </div>
</div>", "product/display_product.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\product\\display_product.html.twig");
    }
}
