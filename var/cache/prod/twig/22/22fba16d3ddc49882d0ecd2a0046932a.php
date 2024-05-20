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

/* delivery_address/index.html.twig */
class __TwigTemplate_7b5e4611aae187750806577501bc0a4e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "delivery_address/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Recapitulation commande";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
   <div class=\"section checkout\">
        <div class=\"container\">
            ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["checkout"] ?? null), 'form_start');
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"heading_s1\">
                                <h4>Vos adresses de livraison</h4>
                                <div class=\"content\">
                                    ";
        // line 15
        yield Twig\Extension\CoreExtension::replaceFilter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout"] ?? null), "address", [], "any", false, false, false, 15), 'widget'), ["[spr]" => "<br>"]);
        yield "
                                </div>
                                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_new");
        yield "\" class=\"btn btn-fill-out  btn-block mt-1\">Nouvelle adresse</a>
                                <a  routerlink=\"/checkout/confirm\" class=\"btn btn-fill-out \" ng-reflect-router-link=\"/checkout/confirm\" href=\"/checkout/confirm\">Proceed To CheckOut</a>
                        </div>
                    </div>
                </div>
           ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["checkout"] ?? null), 'form_end');
        yield "
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
        return "delivery_address/index.html.twig";
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
        return array (  87 => 22,  79 => 17,  74 => 15,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "delivery_address/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\delivery_address\\index.html.twig");
    }
}
