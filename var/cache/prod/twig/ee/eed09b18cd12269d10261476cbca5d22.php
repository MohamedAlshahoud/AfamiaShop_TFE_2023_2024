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
class __TwigTemplate_ddb0e558ce999d77a7022b11e6d2dc9d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", [], "messages");
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (($context["error"] ?? null)) {
            // line 18
            yield "                                    <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            yield "</div>
                                ";
        }
        // line 20
        yield "
                                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21)) {
            // line 22
            yield "                                    <div class=\"mb-3\">
                                        ";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are logged in as", [], "messages");
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "userIdentifier", [], "any", false, false, false, 23), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout", [], "messages");
            yield "</a>
                                    </div>
                                ";
        }
        // line 26
        yield "                                <div class=\"form-group mb-3\"><input type=\"text\" required=\"\" name=\"email\"
                                        formcontrolname=\"email\" placeholder=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Email", [], "messages");
        yield "\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"email\" value=\"";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last_username"] ?? null), "html", null, true);
        yield "\" required autofocus>
                                </div>
                                <div class=\"form-group mb-3\"><input required=\"\" type=\"password\"
                                        formcontrolname=\"password\" name=\"password\" placeholder=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "messages");
        yield "\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"current-password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                                <div class=\"form-group mb-3\"><button type=\"submit\" name=\"login\"
                                        class=\"btn btn-fill-out btn-block\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", [], "messages");
        yield "</button></div>
                                <ul class=\"btn-login list_none text-center\">
                                    <li><a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fcb_login");
        yield "\" class=\"btn btn-facebook\"><i class=\"ion-social-facebook\"></i>Facebook</a></li>
                                    <li><a href=\"#\" class=\"btn btn-google\"><i class=\"ion-social-google\"></i>Google</a></li>
                                </ul>
                                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot password?", [], "messages");
        yield "</a>
                            </form>
                            <div class=\"different_login\"><span>
                                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "messages");
        yield "</span></div>
                            
                            <div class=\"form-note text-center\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Don't Have an Account?", [], "messages");
        yield " <a href=\"/register\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign up
                                    now", [], "messages");
        // line 47
        yield "</a></div>
                        </div>
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
        return array (  158 => 47,  153 => 46,  148 => 44,  140 => 41,  134 => 38,  129 => 36,  124 => 34,  118 => 31,  112 => 28,  108 => 27,  105 => 26,  93 => 23,  90 => 22,  88 => 21,  85 => 20,  79 => 18,  77 => 17,  71 => 14,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\security\\login.html.twig");
    }
}
