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

/* account/index.html.twig */
class __TwigTemplate_fdb07ee292be8f425b3ed25d50cbddf4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Account", [], "messages");
        yield "  ";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"main_content\">
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"\">
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link active \" ng-reflect-router-link=\"/\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\"><i class=\"ti-id-badge\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account details", [], "messages");
        yield "</a>
                        </li>
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_orders");
        yield "\"><i class=\"ti-shopping-cart-full\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Orders", [], "messages");
        yield "</a>
                        </li>
                        <li  class=\"nav-item\"><a  routerlink=\"/\"
                            class=\"nav-link \" ng-reflect-router-link=\"/\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address");
        yield "\"><i class=\"ti-location-pin\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Addresses", [], "messages");
        yield "</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">
                <div class=\"tab-content dashboard_content\">
                  \t<div class=\"tab-pane fade active show\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["address_message"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "\t\t\t\t\t\t<div class=\"card\">
                        \t<div class=\"heading_s1\">
                                <h1>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile of", [], "messages");
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "firstname", [], "any", false, false, false, 37), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "lastname", [], "any", false, false, false, 37), "html", null, true);
        yield " </h1>
                            </div>
                            <div class=\"card-body\">
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User Name", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "html", null, true);
        yield "
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First Name", [], "messages");
        yield " <span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "firstname", [], "any", false, false, false, 53), "html", null, true);
        yield "
                                        </div>

                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Name", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 60), "lastname", [], "any", false, false, false, 60), "html", null, true);
        yield "
                                        </div>
                                        
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email Address", [], "messages");
        yield "<span class=\"required\"></span></label>
                                        </div>
                                        <div class=\"form-group col-md-6 mb-3\">
                                            ";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 67), "email", [], "any", false, false, false, 67), "html", null, true);
        yield "
                                        </div>
                                        <div class=\"btns-group\">
                                            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_profile");
        yield "\" class=\"btn btn-fill-out\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit your profile", [], "messages");
        yield "</a>
                                            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_password");
        yield "\" class=\"btn btn-fill-out\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit your password", [], "messages");
        yield "</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "account/index.html.twig";
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
        return array (  192 => 71,  186 => 70,  180 => 67,  174 => 64,  167 => 60,  161 => 57,  154 => 53,  148 => 50,  141 => 46,  135 => 43,  122 => 37,  118 => 35,  105 => 29,  101 => 28,  88 => 20,  80 => 17,  72 => 14,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\account\\index.html.twig");
    }
}
