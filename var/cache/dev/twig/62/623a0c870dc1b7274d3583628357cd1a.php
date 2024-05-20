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

/* contact/_form.html.twig */
class __TwigTemplate_c840b12071a244147f00e0fbed96b299 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        // line 1
        yield "<div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "messages");
        yield "</span>
                        <a href=\"#\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "get", ["siteInformation"], "method", false, false, false, 11), "street", [], "any", false, false, false, 11), "html", null, true);
        yield ",";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "get", ["siteInformation"], "method", false, false, false, 11), "codePostal", [], "any", false, false, false, 11), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "get", ["siteInformation"], "method", false, false, false, 11), "city", [], "any", false, false, false, 11), "html", null, true);
        yield "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-envelope-open\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email Address", [], "messages");
        yield "</span>
                        <a href=\"#\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", [], "any", false, false, false, 22), "get", ["siteInformation"], "method", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
        yield "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone", [], "messages");
        yield "</span>
                        <a href=\"#\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "get", ["siteInformation"], "method", false, false, false, 33), "phone", [], "any", false, false, false, 33), "html", null, true);
        yield "</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-xl-6 col-md-10\">
                <div class=\"border_form\">
                <div class=\"padding_eight_all bg-white\">
                        <div class=\"heading_s1\">
                            <h2>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
        yield "</h2>
                        </div>
                        <p class=\"leads\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A question, a remark, a suggestion?
                        We will be happy to respond to you as soon as possible.", [], "messages");
        // line 50
        yield "</p>
                        <div class=\"field_form\">
                            ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start');
        yield "
                                <div class=\"row\">
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["contact_success"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "                                        <div class=\" col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div> 
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", ["contact_error"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            yield "                                        <div class=\" col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div> 
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "phone", [], "any", false, false, false, 75), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "subject", [], "any", false, false, false, 78), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "message", [], "any", false, false, false, 81), 'row');
        yield "
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"register\">";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send Message", [], "messages");
        yield "</button> 
                                </div>
                            ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
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
        return "contact/_form.html.twig";
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
        return array (  202 => 85,  197 => 83,  192 => 81,  186 => 78,  180 => 75,  174 => 72,  168 => 69,  165 => 68,  152 => 62,  147 => 61,  134 => 55,  130 => 54,  125 => 52,  121 => 50,  118 => 49,  113 => 47,  96 => 33,  92 => 32,  79 => 22,  75 => 21,  59 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>{% trans %}Address{% endtrans %}</span>
                        <a href=\"#\">{{app.session.get('siteInformation').street}},{{app.session.get('siteInformation').codePostal}}{{app.session.get('siteInformation').city}}</a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-envelope-open\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>{% trans %}Email Address{% endtrans %}</span>
                        <a href=\"#\">{{app.session.get('siteInformation').email}}</a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>{% trans %}Phone{% endtrans %}</span>
                        <a href=\"#\">{{app.session.get('siteInformation').phone}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-xl-6 col-md-10\">
                <div class=\"border_form\">
                <div class=\"padding_eight_all bg-white\">
                        <div class=\"heading_s1\">
                            <h2>{% trans %}Contact Us{% endtrans %}</h2>
                        </div>
                        <p class=\"leads\">{% trans %}A question, a remark, a suggestion?
                        We will be happy to respond to you as soon as possible.{% endtrans %}</p>
                        <div class=\"field_form\">
                            {{ form_start(form)}}
                                <div class=\"row\">
                                    {% for message in app.flashes('contact_success') %}
                                        <div class=\" col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">{{message}}
                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div> 
                                    {% endfor %}
                                    {% for message in app.flashes('contact_error') %}
                                        <div class=\" col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\">{{message}}
                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div> 
                                    {% endfor %}
                                    <div class=\"form-group col-md-6\">
                                        {{ form_row(form.name)}}
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        {{ form_row(form.email)}}
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        {{ form_row(form.phone)}}
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        {{ form_row(form.subject)}}
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        {{ form_row(form.message) }}
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"register\">{% trans %}Send Message{% endtrans %}</button> 
                                </div>
                            {{ form_end(form)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "contact/_form.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\contact\\_form.html.twig");
    }
}
