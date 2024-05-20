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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_6b19d4bfe708f13243ca7cd9d7bd1189 extends Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi! Please confirm your email!", [], "messages");
        yield "</h1>

<p>
   ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please confirm your email address by clicking the following link:", [], "messages");
        yield "<br><br>
    <a href=\"";
        // line 5
        yield ($context["signedUrl"] ?? null);
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm my Email", [], "messages");
        yield "</a>.
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This link will expire in", [], "messages");
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["expiresAtMessageKey"] ?? null), ($context["expiresAtMessageData"] ?? null), "VerifyEmailBundle"), "html", null, true);
        yield ".
</p>

<p>
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cheers!", [], "messages");
        // line 11
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
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
        return array (  66 => 11,  64 => 10,  55 => 6,  49 => 5,  45 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/confirmation_email.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\registration\\confirmation_email.html.twig");
    }
}
