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

/* footer/index.html.twig */
class __TwigTemplate_ad4f159eed5426e34d164091f44096fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        // line 1
        yield "<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2 >";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "get", ["siteInformation"], "method", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</h2>
                            </a></div>
                        <p >";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "get", ["siteInformation"], "method", false, false, false, 10), "description", [], "any", false, false, false, 10)), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", ["siteInformation"], "method", false, false, false, 15), "nameCategory", [], "any", false, false, false, 15)), "html", null, true);
        yield "</h6>
                        <ul  class=\"widget_links\">
                            <li><a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "get", ["siteInformation"], "method", false, false, false, 17), "categoryLinkOne", [], "any", false, false, false, 17), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "get", ["siteInformation"], "method", false, false, false, 17), "categoryOne", [], "any", false, false, false, 17)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "get", ["siteInformation"], "method", false, false, false, 18), "categoryLinkTwo", [], "any", false, false, false, 18), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "get", ["siteInformation"], "method", false, false, false, 18), "categoryTwo", [], "any", false, false, false, 18)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", ["siteInformation"], "method", false, false, false, 19), "categoryLinkThree", [], "any", false, false, false, 19), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", ["siteInformation"], "method", false, false, false, 19), "categoryThree", [], "any", false, false, false, 19)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "session", [], "any", false, false, false, 20), "get", ["siteInformation"], "method", false, false, false, 20), "categoryLinkFour", [], "any", false, false, false, 20), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "session", [], "any", false, false, false, 20), "get", ["siteInformation"], "method", false, false, false, 20), "categoryFour", [], "any", false, false, false, 20)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "get", ["siteInformation"], "method", false, false, false, 21), "categoryLinkFive", [], "any", false, false, false, 21), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "get", ["siteInformation"], "method", false, false, false, 21), "categoryFive", [], "any", false, false, false, 21)), "html", null, true);
        yield "</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "get", ["siteInformation"], "method", false, false, false, 27), "nameAddress", [], "any", false, false, false, 27)), "html", null, true);
        yield "</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "get", ["siteInformation"], "method", false, false, false, 31), "street", [], "any", false, false, false, 31), "html", null, true);
        yield ",";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "get", ["siteInformation"], "method", false, false, false, 31), "codePostal", [], "any", false, false, false, 31), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "get", ["siteInformation"], "method", false, false, false, 31), "city", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"#\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "session", [], "any", false, false, false, 34), "get", ["siteInformation"], "method", false, false, false, 34), "email", [], "any", false, false, false, 34), "html", null, true);
        yield "</a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p >";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", ["siteInformation"], "method", false, false, false, 37), "phone", [], "any", false, false, false, 37), "html", null, true);
        yield "</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6 class=\"widget_title\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", ["siteInformation"], "method", false, false, false, 44), "question", [], "any", false, false, false, 44)), "html", null, true);
        yield "</h6>
                        <p>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "session", [], "any", false, false, false, 45), "get", ["siteInformation"], "method", false, false, false, 45), "descrrptionQuestion", [], "any", false, false, false, 45)), "html", null, true);
        yield "</p   >
                        <form class=\"widget_links\">
                            <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", ["siteInformation"], "method", false, false, false, 47), "questionLink", [], "any", false, false, false, 47), "html", null, true);
        yield "\" class=\"btn btn-fill-out-footer\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
        yield "</a>
                        </form>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", ["siteInformation"], "method", false, false, false, 53), "nameSubscribe", [], "any", false, false, false, 53)), "html", null, true);
        yield "</h6>
                        <p>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "get", ["siteInformation"], "method", false, false, false, 54), "descriptionSubscribe", [], "any", false, false, false, 54)), "html", null, true);
        yield "</p>
                            <form class=\"widget_links\">
                            <a href=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", ["siteInformation"], "method", false, false, false, 56), "subscribeLink", [], "any", false, false, false, 56), "html", null, true);
        yield "\" class=\"btn btn-fill-out-footer\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subscribe", [], "messages");
        yield "</a> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_footer border-top-tran\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <p  class=\"mb-md-0 text-center text-md-start\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "session", [], "any", false, false, false, 67), "get", ["siteInformation"], "method", false, false, false, 67), "copyright", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
                </div>
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"text-center text-md-start\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "get", ["siteInformation"], "method", false, false, false, 73), "facebookLink", [], "any", false, false, false, 73), "html", null, true);
        yield "\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "session", [], "any", false, false, false, 78), "get", ["siteInformation"], "method", false, false, false, 78), "youtube", [], "any", false, false, false, 78), "html", null, true);
        yield "\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "get", ["siteInformation"], "method", false, false, false, 82), "instagram", [], "any", false, false, false, 82), "html", null, true);
        yield "\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <a  href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_conditions");
        yield "\"> 
                        <p  class=\"mb-md-0 text-center text-md-start\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "get", ["siteInformation"], "method", false, false, false, 90), "termsConditions", [], "any", false, false, false, 90), "html", null, true);
        yield "</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer/index.html.twig";
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
        return array (  221 => 90,  217 => 89,  207 => 82,  200 => 78,  192 => 73,  183 => 67,  167 => 56,  162 => 54,  158 => 53,  147 => 47,  142 => 45,  138 => 44,  128 => 37,  122 => 34,  113 => 31,  106 => 27,  95 => 21,  89 => 20,  83 => 19,  77 => 18,  71 => 17,  66 => 15,  58 => 10,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2 >{{app.session.get('siteInformation').name}}</h2>
                            </a></div>
                        <p >{{app.session.get('siteInformation').description | trans}}</p>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">{{app.session.get('siteInformation').nameCategory | trans}}</h6>
                        <ul  class=\"widget_links\">
                            <li><a href=\"{{app.session.get('siteInformation').categoryLinkOne}}\">{{app.session.get('siteInformation').categoryOne | trans}}</a></li>
                            <li><a href=\"{{app.session.get('siteInformation').categoryLinkTwo}}\">{{app.session.get('siteInformation').categoryTwo | trans}}</a></li>
                            <li><a href=\"{{app.session.get('siteInformation').categoryLinkThree}}\">{{app.session.get('siteInformation').categoryThree | trans}}</a></li>
                            <li><a href=\"{{app.session.get('siteInformation').categoryLinkFour}}\">{{app.session.get('siteInformation').categoryFour | trans}}</a></li>
                            <li><a href=\"{{app.session.get('siteInformation').categoryLinkFive}}\">{{app.session.get('siteInformation').categoryFive | trans}}</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">{{app.session.get('siteInformation').nameAddress | trans}}</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p>{{app.session.get('siteInformation').street}},{{app.session.get('siteInformation').codePostal}}{{app.session.get('siteInformation').city}}</p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"#\">{{app.session.get('siteInformation').email}}</a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p >{{app.session.get('siteInformation').phone}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6 class=\"widget_title\">{{app.session.get('siteInformation').question | trans}}</h6>
                        <p>{{app.session.get('siteInformation').descrrptionQuestion | trans}}</p   >
                        <form class=\"widget_links\">
                            <a href=\"{{app.session.get('siteInformation').questionLink}}\" class=\"btn btn-fill-out-footer\">{% trans %}Contact Us {% endtrans %}</a>
                        </form>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">{{app.session.get('siteInformation').nameSubscribe | trans}}</h6>
                        <p>{{app.session.get('siteInformation').descriptionSubscribe | trans}}</p>
                            <form class=\"widget_links\">
                            <a href=\"{{app.session.get('siteInformation').subscribeLink}}\" class=\"btn btn-fill-out-footer\">{% trans %}Subscribe{% endtrans %}</a> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_footer border-top-tran\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <p  class=\"mb-md-0 text-center text-md-start\">{{app.session.get('siteInformation').copyright}}</p>
                </div>
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"text-center text-md-start\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"{{app.session.get('siteInformation').facebookLink}}\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            
                            <li ><a  target=\"_blank\"
                                    href=\"{{app.session.get('siteInformation').youtube}}\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"{{app.session.get('siteInformation').instagram}}\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <a  href=\"{{ path('terms_conditions')}}\"> 
                        <p  class=\"mb-md-0 text-center text-md-start\">{{app.session.get('siteInformation').termsConditions}}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>", "footer/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\footer\\index.html.twig");
    }
}
