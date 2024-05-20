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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_ab5d85d6673598eabe50b0e8143f7332 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["__internal_83203545a9c20f582bae4bee2175f75fd1e65ed4373090330f1a3608d7b9d9f3"] = ((array_key_exists("ea", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "page-login";
        return; yield '';
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : (((array_key_exists("ea", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
        return; yield '';
    }

    // line 11
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        if (((array_key_exists("favicon_path", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["favicon_path"] ?? null), false)) : (false))) {
            // line 13
            yield "        <link rel=\"shortcut icon\" href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["favicon_path"] ?? null), "html", null, true);
            yield "\">
    ";
        } else {
            // line 15
            yield "        ";
            yield from $this->yieldParentBlock("head_favicon", $context, $blocks);
            yield "
    ";
        }
        return; yield '';
    }

    // line 19
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        $context["page_title"] =         $this->unwrap()->renderBlock("page_title", $context, $blocks);
        // line 21
        yield "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 6
($context["__internal_83203545a9c20f582bae4bee2175f75fd1e65ed4373090330f1a3608d7b9d9f3"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 22
        yield "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 6
($context["__internal_83203545a9c20f582bae4bee2175f75fd1e65ed4373090330f1a3608d7b9d9f3"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 23
        yield "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["forgot_password_label"] ?? null), [],         // line 6
($context["__internal_83203545a9c20f582bae4bee2175f75fd1e65ed4373090330f1a3608d7b9d9f3"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 24
        yield "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["remember_me_label"] ?? null), [],         // line 6
($context["__internal_83203545a9c20f582bae4bee2175f75fd1e65ed4373090330f1a3608d7b9d9f3"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 25
        yield "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 6
($context["__internal_83203545a9c20f582bae4bee2175f75fd1e65ed4373090330f1a3608d7b9d9f3"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 26
        yield "
    ";
        // line 27
        yield from         $this->loadTemplate("@EasyAdmin/flash_messages.html.twig", "@EasyAdmin/page/login.html.twig", 27)->unwrap()->yield($context);
        // line 28
        yield "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 32
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 45
        yield "            </div>
        </header>

        <section class=\"content\">

            ";
        // line 50
        if (((array_key_exists("error", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["error"] ?? null), false)) : (false))) {
            // line 51
            yield "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    ";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 56
        yield "
            <form method=\"post\" action=\"";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["action"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
                ";
        // line 58
        if (((array_key_exists("csrf_token_intention", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["csrf_token_intention"] ?? null), false)) : (false))) {
            // line 59
            yield "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            yield "\">
                ";
        }
        // line 61
        yield "
                <input type=\"hidden\" name=\"";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("target_path_parameter", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        yield "\" value=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("target_path", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["target_path"] ?? null), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))), "html", null, true);
        yield "\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"username\">";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["_username_label"] ?? null), "html", null, true);
        yield "</label>
                    <div class=\"form-widget\">
                        <input type=\"text\" id=\"username\" name=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("username_parameter", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        yield "\" class=\"form-control\" value=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        yield "\" required autofocus autocomplete=\"username\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["_password_label"] ?? null), "html", null, true);
        yield "</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"";
        // line 74
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("password_parameter", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        yield "\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    ";
        // line 77
        if (((array_key_exists("forgot_password_enabled", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["forgot_password_enabled"] ?? null), false)) : (false))) {
            // line 78
            yield "                        <div class=\"form-text\">
                            <a href=\"";
            // line 79
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("forgot_password_path", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["forgot_password_path"] ?? null), "#")) : ("#")), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["_forgot_password_label"] ?? null), "html", null, true);
            yield "</a>
                        </div>
                    ";
        }
        // line 82
        yield "                </div>

                ";
        // line 84
        if (((array_key_exists("remember_me_enabled", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["remember_me_enabled"] ?? null), false)) : (false))) {
            // line 85
            yield "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 86
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("remember_me_parameter", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["remember_me_parameter"] ?? null), "_remember_me")) : ("_remember_me")), "html", null, true);
            yield "\" ";
            yield ((((array_key_exists("remember_me_checked", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["remember_me_checked"] ?? null), false)) : (false))) ? ("checked") : (""));
            yield ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 88
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["_remember_me_label"] ?? null), "html", null, true);
            yield "
                        </label>
                    </div>
                ";
        }
        // line 92
        yield "
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 93
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["_sign_in_label"] ?? null), "html", null, true);
        yield "</button>
            </form>

            <script src=\"";
        // line 96
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\"></script>
        </section>
    </div>
";
        return; yield '';
    }

    // line 32
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "                    ";
        if (($context["page_title"] ?? null)) {
            // line 34
            yield "                        ";
            if (array_key_exists("ea", $context)) {
                // line 35
                yield "                            <a class=\"logo ";
                yield (((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\" title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::striptags(($context["page_title"] ?? null)), "html", null, true);
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 35));
                yield "\">
                                ";
                // line 36
                yield ($context["page_title"] ?? null);
                yield "
                            </a>
                        ";
            } else {
                // line 39
                yield "                            <div class=\"logo ";
                yield (((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\">
                                ";
                // line 40
                yield ($context["page_title"] ?? null);
                yield "
                            </div>
                        ";
            }
            // line 43
            yield "                    ";
        }
        // line 44
        yield "                ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
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
        return array (  295 => 44,  292 => 43,  286 => 40,  281 => 39,  275 => 36,  266 => 35,  263 => 34,  260 => 33,  256 => 32,  247 => 96,  241 => 93,  238 => 92,  231 => 88,  224 => 86,  221 => 85,  219 => 84,  215 => 82,  207 => 79,  204 => 78,  202 => 77,  196 => 74,  191 => 72,  181 => 67,  176 => 65,  168 => 62,  165 => 61,  159 => 59,  157 => 58,  153 => 57,  150 => 56,  144 => 53,  140 => 51,  138 => 50,  131 => 45,  129 => 32,  123 => 28,  121 => 27,  118 => 26,  116 => 6,  114 => 25,  112 => 6,  110 => 24,  108 => 6,  106 => 23,  104 => 6,  102 => 22,  100 => 6,  98 => 21,  95 => 20,  91 => 19,  82 => 15,  76 => 13,  73 => 12,  69 => 11,  61 => 9,  53 => 8,  49 => 5,  47 => 6,  40 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\login.html.twig");
    }
}
