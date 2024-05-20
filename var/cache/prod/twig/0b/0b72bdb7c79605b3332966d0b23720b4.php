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

/* reset_password/email.html.twig */
class __TwigTemplate_df0b2e3e241e9aa41794bccdd145987e extends Template
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
        yield "<h1>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi!", [], "messages");
        yield "</h1>

<p>";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To reset your password, please visit the following link", [], "messages");
        yield "</p>

<a href=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["resetToken"] ?? null), "token", [], "any", false, false, false, 5)]), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["resetToken"] ?? null), "token", [], "any", false, false, false, 5)]), "html", null, true);
        yield "</a>

<p>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This link will expire in", [], "messages");
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageKey", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageData", [], "any", false, false, false, 7), "ResetPasswordBundle"), "html", null, true);
        yield ".</p>

<p>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cheers!", [], "messages");
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reset_password/email.html.twig";
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
        return array (  63 => 9,  56 => 7,  49 => 5,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/email.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\reset_password\\email.html.twig");
    }
}
