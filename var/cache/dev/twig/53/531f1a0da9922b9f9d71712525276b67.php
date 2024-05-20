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
class __TwigTemplate_943e53ad75bf206c1edfc127234491f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "delivery_address/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "delivery_address/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "delivery_address/index.html.twig", 1);
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

        yield "Recapitulation commande";
        
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
        yield "
   <div class=\"section checkout\">
        <div class=\"container\">
            ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 9, $this->source); })()), 'form_start');
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"heading_s1\">
                                <h4>Vos adresses de livraison</h4>
                                <div class=\"content\">
                                    ";
        // line 15
        yield Twig\Extension\CoreExtension::replace($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 15, $this->source); })()), "address", [], "any", false, false, false, 15), 'widget'), ["[spr]" => "<br>"]);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 22, $this->source); })()), 'form_end');
        yield "
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
        return array (  117 => 22,  109 => 17,  104 => 15,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recapitulation commande{% endblock %}

{% block body %}

   <div class=\"section checkout\">
        <div class=\"container\">
            {{ form_start(checkout)}}
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"heading_s1\">
                                <h4>Vos adresses de livraison</h4>
                                <div class=\"content\">
                                    {{ form_widget(checkout.address) | replace({'[spr]' : '<br>'}) | raw}}
                                </div>
                                <a href=\"{{ path('address_new')}}\" class=\"btn btn-fill-out  btn-block mt-1\">Nouvelle adresse</a>
                                <a  routerlink=\"/checkout/confirm\" class=\"btn btn-fill-out \" ng-reflect-router-link=\"/checkout/confirm\" href=\"/checkout/confirm\">Proceed To CheckOut</a>
                        </div>
                    </div>
                </div>
           {{ form_end(checkout) }}
        </div>
    </div>

{% endblock %}", "delivery_address/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\delivery_address\\index.html.twig");
    }
}
