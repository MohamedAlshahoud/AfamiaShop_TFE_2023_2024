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
class __TwigTemplate_ec59acfa452c2ea559a49347d6c7f194 extends Template
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
        yield "<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2 >";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 8), "get", ["siteInformation"], "method", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</h2>
                            </a></div>
                        <p >";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 10), "get", ["siteInformation"], "method", false, false, false, 10), "description", [], "any", false, false, false, 10)), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "get", ["siteInformation"], "method", false, false, false, 15), "nameCategory", [], "any", false, false, false, 15)), "html", null, true);
        yield "</h6>
                        <ul  class=\"widget_links\">
                            <li><a href=\"";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 17), "get", ["siteInformation"], "method", false, false, false, 17), "categoryLinkOne", [], "any", false, false, false, 17), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 17), "get", ["siteInformation"], "method", false, false, false, 17), "categoryOne", [], "any", false, false, false, 17)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 18), "get", ["siteInformation"], "method", false, false, false, 18), "categoryLinkTwo", [], "any", false, false, false, 18), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 18), "get", ["siteInformation"], "method", false, false, false, 18), "categoryTwo", [], "any", false, false, false, 18)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 19), "get", ["siteInformation"], "method", false, false, false, 19), "categoryLinkThree", [], "any", false, false, false, 19), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 19), "get", ["siteInformation"], "method", false, false, false, 19), "categoryThree", [], "any", false, false, false, 19)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 20), "get", ["siteInformation"], "method", false, false, false, 20), "categoryLinkFour", [], "any", false, false, false, 20), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 20), "get", ["siteInformation"], "method", false, false, false, 20), "categoryFour", [], "any", false, false, false, 20)), "html", null, true);
        yield "</a></li>
                            <li><a href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 21), "get", ["siteInformation"], "method", false, false, false, 21), "categoryLinkFive", [], "any", false, false, false, 21), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 21), "get", ["siteInformation"], "method", false, false, false, 21), "categoryFive", [], "any", false, false, false, 21)), "html", null, true);
        yield "</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 27), "get", ["siteInformation"], "method", false, false, false, 27), "nameAddress", [], "any", false, false, false, 27)), "html", null, true);
        yield "</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p>";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 31), "get", ["siteInformation"], "method", false, false, false, 31), "street", [], "any", false, false, false, 31), "html", null, true);
        yield ",";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 31), "get", ["siteInformation"], "method", false, false, false, 31), "codePostal", [], "any", false, false, false, 31), "html", null, true);
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 31), "get", ["siteInformation"], "method", false, false, false, 31), "city", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"#\">";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 34), "get", ["siteInformation"], "method", false, false, false, 34), "email", [], "any", false, false, false, 34), "html", null, true);
        yield "</a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p >";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 37), "get", ["siteInformation"], "method", false, false, false, 37), "phone", [], "any", false, false, false, 37), "html", null, true);
        yield "</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6 class=\"widget_title\">";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 44), "get", ["siteInformation"], "method", false, false, false, 44), "question", [], "any", false, false, false, 44)), "html", null, true);
        yield "</h6>
                        <p>";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 45), "get", ["siteInformation"], "method", false, false, false, 45), "descrrptionQuestion", [], "any", false, false, false, 45)), "html", null, true);
        yield "</p   >
                        <form class=\"widget_links\">
                            <a href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 47), "get", ["siteInformation"], "method", false, false, false, 47), "questionLink", [], "any", false, false, false, 47), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 53), "get", ["siteInformation"], "method", false, false, false, 53), "nameSubscribe", [], "any", false, false, false, 53)), "html", null, true);
        yield "</h6>
                        <p>";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 54), "get", ["siteInformation"], "method", false, false, false, 54), "descriptionSubscribe", [], "any", false, false, false, 54)), "html", null, true);
        yield "</p>
                            <form class=\"widget_links\">
                            <a href=\"";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 56), "get", ["siteInformation"], "method", false, false, false, 56), "subscribeLink", [], "any", false, false, false, 56), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 67), "get", ["siteInformation"], "method", false, false, false, 67), "copyright", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
                </div>
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"text-center text-md-start\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 73
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 73), "get", ["siteInformation"], "method", false, false, false, 73), "facebookLink", [], "any", false, false, false, 73), "html", null, true);
        yield "\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 78), "get", ["siteInformation"], "method", false, false, false, 78), "youtube", [], "any", false, false, false, 78), "html", null, true);
        yield "\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 82
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 82), "get", ["siteInformation"], "method", false, false, false, 82), "instagram", [], "any", false, false, false, 82), "html", null, true);
        yield "\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <a  href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy-policy-facebook");
        yield "\"> 
                        <p  class=\"mb-md-0 text-center text-md-start\">";
        // line 90
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 90), "get", ["siteInformation"], "method", false, false, false, 90), "termsConditions", [], "any", false, false, false, 90), "html", null, true);
        yield "</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>";
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
        return array (  215 => 90,  211 => 89,  201 => 82,  194 => 78,  186 => 73,  177 => 67,  161 => 56,  156 => 54,  152 => 53,  141 => 47,  136 => 45,  132 => 44,  122 => 37,  116 => 34,  107 => 31,  100 => 27,  89 => 21,  83 => 20,  77 => 19,  71 => 18,  65 => 17,  60 => 15,  52 => 10,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\footer\\index.html.twig");
    }
}
