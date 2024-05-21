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

/* security/login.html.twig */
class __TwigTemplate_214671070438b61d7dc55259ec5b8e39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", [], "messages");
        
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
        yield "<div class=\"main_content\">
    <div class=\"login_register_wrap section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-6 col-md-10\">
                    <div class=\"border_form\">
                        <div class=\"padding_eight_all bg-white\">
                            <div class=\"heading_s1\">
                                <h3>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", [], "messages");
        yield "</h3>
                            </div>
                            <form method=\"post\" class=\"ng-untouched ng-pristine ng-invalid\">
                                ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            yield "                                    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            yield "</div>
                                ";
        }
        // line 20
        yield "
                                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            yield "                                    <div class=\"mb-3\">
                                        ";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are logged in as", [], "messages");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "userIdentifier", [], "any", false, false, false, 23), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout", [], "messages");
            yield "</a>
                                    </div>
                                ";
        }
        // line 26
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", ["loginError"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            yield "                                    <div class=\"alert alert-danger\">
                                        ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                                <div class=\"form-group mb-3\"><input type=\"text\" required=\"\" name=\"email\"
                                        formcontrolname=\"email\" placeholder=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Email", [], "messages");
        yield "\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"email\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\" required autofocus>
                                </div>
                                <div class=\"form-group mb-3\"><input required=\"\" type=\"password\"
                                        formcontrolname=\"password\" name=\"password\" placeholder=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "messages");
        yield "\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"current-password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                                <div class=\"form-group mb-3\"><button type=\"submit\" name=\"login\"
                                    class=\"btn btn-fill-out btn-block\">";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", [], "messages");
        yield "</button>
                                </div>
                                <ul class=\"btn btn-fill btn-block list_none\">
                                    <li><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oauth_login", ["service" => "google"]);
        yield "\" class=\"btn btn-google\"><i class=\"ion-social-google\"></i>Google</a></li>
                                </ul>
                                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot password?", [], "messages");
        yield "</a>
                            </form>
                            <div class=\"different_login\">
                                <span>";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "messages");
        yield "</span>
                            </div>
                            
                            <div class=\"form-note text-center\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Don't Have an Account?", [], "messages");
        yield " <a href=\"/register\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign up now", [], "messages");
        yield "</a></div>
                        </div>
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
        return "security/login.html.twig";
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
        return array (  201 => 52,  195 => 49,  187 => 46,  182 => 44,  176 => 41,  171 => 39,  165 => 36,  159 => 33,  155 => 32,  152 => 31,  143 => 28,  140 => 27,  135 => 26,  123 => 23,  120 => 22,  118 => 21,  115 => 20,  109 => 18,  107 => 17,  101 => 14,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}Log in{% endtrans %}{% endblock %}

{% block body %}
<div class=\"main_content\">
    <div class=\"login_register_wrap section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-6 col-md-10\">
                    <div class=\"border_form\">
                        <div class=\"padding_eight_all bg-white\">
                            <div class=\"heading_s1\">
                                <h3>{% trans %}Log in{% endtrans %}</h3>
                            </div>
                            <form method=\"post\" class=\"ng-untouched ng-pristine ng-invalid\">
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}

                                {% if app.user %}
                                    <div class=\"mb-3\">
                                        {% trans %}You are logged in as{% endtrans %} {{ app.user.userIdentifier}}, <a href=\"{{ path('app_logout') }}\">{% trans %}Logout{% endtrans %}</a>
                                    </div>
                                {% endif %}
                                {% for message in app.flashes('loginError') %}
                                    <div class=\"alert alert-danger\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                                <div class=\"form-group mb-3\"><input type=\"text\" required=\"\" name=\"email\"
                                        formcontrolname=\"email\" placeholder=\"{% trans %}Your Email{% endtrans %}\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"email\" value=\"{{ last_username}}\" required autofocus>
                                </div>
                                <div class=\"form-group mb-3\"><input required=\"\" type=\"password\"
                                        formcontrolname=\"password\" name=\"password\" placeholder=\"{% trans %}Password{% endtrans %}\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"current-password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                <div class=\"form-group mb-3\"><button type=\"submit\" name=\"login\"
                                    class=\"btn btn-fill-out btn-block\">{% trans %}Log in{% endtrans %}</button>
                                </div>
                                <ul class=\"btn btn-fill btn-block list_none\">
                                    <li><a href=\"{{ path('app_oauth_login', {service: 'google'}) }}\" class=\"btn btn-google\"><i class=\"ion-social-google\"></i>Google</a></li>
                                </ul>
                                <a href=\"{{ path('app_forgot_password_request')}}\">{% trans %}Forgot password?{% endtrans %}</a>
                            </form>
                            <div class=\"different_login\">
                                <span>{% trans %}or{% endtrans %}</span>
                            </div>
                            
                            <div class=\"form-note text-center\">{% trans %}Don't Have an Account?{% endtrans %} <a href=\"/register\">{% trans %}Sign up now{% endtrans %}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\security\\login.html.twig");
    }
}
