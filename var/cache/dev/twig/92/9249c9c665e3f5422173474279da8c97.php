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

/* emails/newsletter.html.twig */
class __TwigTemplate_4687902fce07d76b6898fc0ba97ab9b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/newsletter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/newsletter.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our newsletters", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "<div  class=\"main_content\" style=\"background-color: #f5f5f5; text-align: center;\">
    <div  class=\"section small_pt pb_70\">
        <div  class=\"container\">
            <div  class=\"row\">
                
                <div class=\"col-12\">
                    <h1 style=\"color: #0090e3; font-size: 40px;\">AfamiaShop</h1>
                </div>
                <br>
                <div class=\"col-12\">
                    <div  class=\"content-newsletters>
                        <br><br><br><br>
                        <h3 style=\"color: #333;\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Novelty alert", [], "messages");
        yield "</h3>
                        <h2>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)), "html", null, true);
        yield "</h2>
                        <h3 style=\"color: #333;\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dear subscribers, The wait is over!", [], "messages");
        yield "</h3>
                        <h4 style=\"color: #333;\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18)), "html", null, true);
        yield " <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        yield "\" style=\"text-decoration: none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AfamiaShop", [], "messages");
        yield "</a>
                        <br><br><br><br>
                    </div>
                </div>
                <div  class=\"col-12\">
                    <div  class=\"widget-newsletters\">
                        <br><br>
                        <h5  class=\"widget_title\" style=\"color: #333;\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "nameAddress", [], "any", false, false, false, 25)), "html", null, true);
        yield " : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "street", [], "any", false, false, false, 25), "html", null, true);
        yield ",";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "codePostal", [], "any", false, false, false, 25), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "city", [], "any", false, false, false, 25), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "phone", [], "any", false, false, false, 25), "html", null, true);
        yield "</h5>
                        <h5 class=\"widget_title\" style=\"color: #333;\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Any question ? Click here to contact us", [], "messages");
        yield " <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact")), "html", null, true);
        yield "\" style=\"text-decoration: none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
        yield "</a> | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To unsubscribe, click on this link", [], "messages");
        yield " <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_unsubscribe", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "newsletter" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "validationToken", [], "any", false, false, false, 26)])), "html", null, true);
        yield "\" style=\"text-decoration: none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unsubscribe", [], "messages");
        yield "</a></h5>
                        <h5 class=\"widget_title\" style=\"color: #333;\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The team of", [], "messages");
        yield " <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        yield "\" style=\"text-decoration: none;\">AfamiaShop</a></h5>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
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
        return "emails/newsletter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  157 => 27,  143 => 26,  130 => 25,  116 => 18,  112 => 17,  108 => 16,  104 => 15,  90 => 3,  80 => 2,  59 => 1,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}AfamiaShop | {% trans %}Our newsletters{% endtrans %}{% endblock %}
{% block body %}
<div  class=\"main_content\" style=\"background-color: #f5f5f5; text-align: center;\">
    <div  class=\"section small_pt pb_70\">
        <div  class=\"container\">
            <div  class=\"row\">
                
                <div class=\"col-12\">
                    <h1 style=\"color: #0090e3; font-size: 40px;\">AfamiaShop</h1>
                </div>
                <br>
                <div class=\"col-12\">
                    <div  class=\"content-newsletters>
                        <br><br><br><br>
                        <h3 style=\"color: #333;\">{% trans %}Novelty alert{% endtrans %}</h3>
                        <h2>{{newsletter.name | trans}}</h2>
                        <h3 style=\"color: #333;\">{% trans %}Dear subscribers, The wait is over!{% endtrans %}</h3>
                        <h4 style=\"color: #333;\">{{newsletter.content | trans}} <a href=\"{{ absolute_url(path('app_home'))}}\" style=\"text-decoration: none;\">{% trans %}AfamiaShop{% endtrans %}</a>
                        <br><br><br><br>
                    </div>
                </div>
                <div  class=\"col-12\">
                    <div  class=\"widget-newsletters\">
                        <br><br>
                        <h5  class=\"widget_title\" style=\"color: #333;\">{{app.session.get('siteInformation').nameAddress | trans}} : {{app.session.get('siteInformation').street}},{{app.session.get('siteInformation').codePostal}}{{app.session.get('siteInformation').city}} | {{app.session.get('siteInformation').email}} | {{app.session.get('siteInformation').phone}}</h5>
                        <h5 class=\"widget_title\" style=\"color: #333;\">{% trans %}Any question ? Click here to contact us {% endtrans %} <a href=\"{{ absolute_url(path('app_contact'))}}\" style=\"text-decoration: none;\">{% trans %}Contact Us{% endtrans %}</a> | {% trans %}To unsubscribe, click on this link {% endtrans %} <a href=\"{{ absolute_url(path('newsletters_unsubscribe', {id: user.id, newsletter:newsletter.id, token: user.validationToken})) }}\" style=\"text-decoration: none;\">{% trans %}Unsubscribe{% endtrans %}</a></h5>
                        <h5 class=\"widget_title\" style=\"color: #333;\">{% trans %}The team of {% endtrans %} <a href=\"{{ absolute_url(path('app_home'))}}\" style=\"text-decoration: none;\">AfamiaShop</a></h5>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "emails/newsletter.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\emails\\newsletter.html.twig");
    }
}
