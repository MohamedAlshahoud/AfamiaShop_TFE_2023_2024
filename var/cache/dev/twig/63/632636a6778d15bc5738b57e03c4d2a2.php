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

/* address/_form.html.twig */
class __TwigTemplate_62c970e3083aeecd277eddd49ff298cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "address/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "address/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
<div class=\"row\">
    <div class=\"form-group col-md-6\">
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4), 'row');
        yield "
    </div>
    <div class=\"form-group col-md-6\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "lastName", [], "any", false, false, false, 7), 'row');
        yield "
    </div>
    <div class=\"form-group col-md-12\">
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "address", [], "any", false, false, false, 10), 'row');
        yield "
    </div>
    <div class=\"form-group col-md-6\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "codePostal", [], "any", false, false, false, 13), 'row');
        yield "
    </div>
    <div class=\"form-group col-md-6\">
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "city", [], "any", false, false, false, 16), 'row');
        yield "
    </div>
    <div class=\"form-group col-md-6\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "country", [], "any", false, false, false, 19), 'row');
        yield "
    </div>
    <div class=\"form-group col-md-6\">
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "phone", [], "any", false, false, false, 22), 'row');
        yield "
    </div>
    <div class=\"form-group col-md-12\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), 'row');
        yield "
    </div>
    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"register\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "messages");
        yield "</button>
    <div class=\"different_login\">
        <span><a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "messages");
        yield "</a></span>
    </div>
</div>
";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "address/_form.html.twig";
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
        return array (  110 => 32,  102 => 29,  97 => 27,  92 => 25,  86 => 22,  80 => 19,  74 => 16,  68 => 13,  62 => 10,  56 => 7,  50 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"row\">
    <div class=\"form-group col-md-6\">
        {{ form_row(form.firstName)}}
    </div>
    <div class=\"form-group col-md-6\">
        {{ form_row(form.lastName)}}
    </div>
    <div class=\"form-group col-md-12\">
        {{ form_row(form.address)}}
    </div>
    <div class=\"form-group col-md-6\">
        {{ form_row(form.codePostal)}}
    </div>
    <div class=\"form-group col-md-6\">
        {{ form_row(form.city)}}
    </div>
    <div class=\"form-group col-md-6\">
        {{ form_row(form.country)}}
    </div>
    <div class=\"form-group col-md-6\">
        {{ form_row(form.phone)}}
    </div>
    <div class=\"form-group col-md-12\">
        {{ form_row(form.user)}}
    </div>
    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"register\">{% trans %}Save{% endtrans %}</button>
    <div class=\"different_login\">
        <span><a href=\"{{path('app_account_address')}}\">{% trans %}Cancel{% endtrans %}</a></span>
    </div>
</div>
{{ form_end(form) }}", "address/_form.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\address\\_form.html.twig");
    }
}
