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
class __TwigTemplate_f346201869b72ca417f6558413e62c73 extends Template
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 11), "get", ["siteInformation"], "method", false, false, false, 11), "street", [], "any", false, false, false, 11), "html", null, true);
        yield ",";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 11), "get", ["siteInformation"], "method", false, false, false, 11), "codePostal", [], "any", false, false, false, 11), "html", null, true);
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 11), "get", ["siteInformation"], "method", false, false, false, 11), "city", [], "any", false, false, false, 11), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 22), "get", ["siteInformation"], "method", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 33), "get", ["siteInformation"], "method", false, false, false, 33), "phone", [], "any", false, false, false, 33), "html", null, true);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                                <div class=\"row\">
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["contact_success"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "                                        <div class=\" col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["contact_error"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            yield "                                        <div class=\" col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 69), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 72), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 75), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, false, 78), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 81), 'row');
        yield "
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"register\">";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send Message", [], "messages");
        yield "</button> 
                                </div>
                            ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
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
        return array (  196 => 85,  191 => 83,  186 => 81,  180 => 78,  174 => 75,  168 => 72,  162 => 69,  159 => 68,  146 => 62,  141 => 61,  128 => 55,  124 => 54,  119 => 52,  115 => 50,  112 => 49,  107 => 47,  90 => 33,  86 => 32,  73 => 22,  69 => 21,  53 => 11,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/_form.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\contact\\_form.html.twig");
    }
}
