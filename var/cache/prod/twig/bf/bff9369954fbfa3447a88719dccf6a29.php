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
class __TwigTemplate_6b9d203a97b4ae09178d8d65536b2822 extends Template
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
        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        return; yield '';
    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our newsletters", [], "messages");
        return; yield '';
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["newsletter"] ?? null), "name", [], "any", false, false, false, 16)), "html", null, true);
        yield "</h2>
                        <h3 style=\"color: #333;\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dear subscribers, The wait is over!", [], "messages");
        yield "</h3>
                        <h4 style=\"color: #333;\">";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["newsletter"] ?? null), "content", [], "any", false, false, false, 18)), "html", null, true);
        yield " <a href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "nameAddress", [], "any", false, false, false, 25)), "html", null, true);
        yield " : ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "street", [], "any", false, false, false, 25), "html", null, true);
        yield ",";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "codePostal", [], "any", false, false, false, 25), "html", null, true);
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "city", [], "any", false, false, false, 25), "html", null, true);
        yield " | ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
        yield " | ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 25), "get", ["siteInformation"], "method", false, false, false, 25), "phone", [], "any", false, false, false, 25), "html", null, true);
        yield "</h5>
                        <h5 class=\"widget_title\" style=\"color: #333;\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Any question ? Click here to contact us", [], "messages");
        yield " <a href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact")), "html", null, true);
        yield "\" style=\"text-decoration: none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
        yield "</a> | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To unsubscribe, click on this link", [], "messages");
        yield " <a href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_unsubscribe", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 26), "newsletter" => CoreExtension::getAttribute($this->env, $this->source, ($context["newsletter"] ?? null), "id", [], "any", false, false, false, 26), "token" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "validationToken", [], "any", false, false, false, 26)])), "html", null, true);
        yield "\" style=\"text-decoration: none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unsubscribe", [], "messages");
        yield "</a></h5>
                        <h5 class=\"widget_title\" style=\"color: #333;\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The team of", [], "messages");
        yield " <a href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        yield "\" style=\"text-decoration: none;\">AfamiaShop</a></h5>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
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
        return "emails/newsletter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  127 => 27,  113 => 26,  100 => 25,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  60 => 3,  56 => 2,  47 => 1,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/newsletter.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\emails\\newsletter.html.twig");
    }
}
