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

/* header/index.html.twig */
class __TwigTemplate_261a611a770a1cf1f5e79484e35cbc13 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        // line 1
        yield "<header  class=\"header_wrap fixed-top header_with_topbar active\">
    <div  class=\"top-header\" style=\"\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-6 col-md-6 col-sm-12\">
                    <ul  class=\"header_list\">
                        <li ><i class=\"ti-time\"></i><span>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Monday - Friday : 8:00 - 20:00", [], "messages");
        yield "</span></li>
                    </ul>
                </div>
                <div  class=\"col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"d-flex\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 13
            yield "                            <div class=\"lng_dropdown mr-2\">
                                <a class=\"";
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "locale", [], "any", false, false, false, 14) == $context["locale"])) {
                yield "active";
            }
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => $context["locale"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
            yield "</a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                        <ul  class=\"contact_detail\">
                            <li ><i  class=\"ti-mobile\"></i><span>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "get", ["siteInformation"], "method", false, false, false, 18), "phone", [], "any", false, false, false, 18), "html", null, true);
        yield "</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_header dark_skin main_menu_uppercase\">
        <div  class=\"container\">
            <nav  class=\"navbar navbar-expand-lg\"><a 
                    routerlink=\"/\" class=\"navbar-brand\" ng-reflect-router-link=\"/\" href=\"/\">
                    <h1 class=\"name\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", ["siteInformation"], "method", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        yield "</h1>
                </a><button  type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-expanded=\"false\"
                    class=\"navbar-toggler collapsed\"><span 
                        class=\"ion-android-menu\"></span></button>
                <div  id=\"navbarSupportedContent\"
                    class=\"navbar-collapse justify-content-end collapse\" style=\"\">
                    <ul  class=\"navbar-nav\">
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                            class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"/\">";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        yield "</a></li>
                        <li  class=\"dropdown\">
                            ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 41
            yield "                                <a  routerlink=\"/\" class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", [], "messages");
            yield "</a></li>
                            ";
        }
        // line 43
        yield "                        <li  class=\"dropdown\">
                            ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 45
            yield "                                <a  routerlink=\"/\" class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_list");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Newsletters", [], "messages");
            yield "</a></li>
                            ";
        }
        // line 47
        yield "                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                            class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories", [], "messages");
        yield "</a></li>
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                            class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "messages");
        yield "</a></li>
                        <li ><a  routerlink=\"/contact\"
                            class=\"nav-link nav_item\" ng-reflect-router-link=\"/contact\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
        yield "</a></li>
                        ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            yield "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "username", [], "any", false, false, false, 56), "html", null, true);
            yield "
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Account", [], "messages");
            yield "</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log out", [], "messages");
            yield "</a></li>
                                </ul>
                            </li> 
                        ";
        } else {
            // line 64
            yield "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
            // line 67
            yield "                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", [], "messages");
            yield "</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register", [], "messages");
            yield "</a></li>
                                </ul>
                            </li> 
                        ";
        }
        // line 74
        yield "                    </ul>
                    <ul class=\"navbar-nav attr-nav align-items-center\">          
                        <li><a href=\"javascript:void(0);\" class=\"nav-link search_trigger\"><i class=\"linearicons-magnifier\"></i></a>
                            <div class=\"search_wrap\"><span class=\"close-search\"><i class=\"ion-ios-close-empty\"></i></span>
                                <div class=\"click-closed\"></div>
                                    <div class=\"box-collapse\">
                                        <div class=\"title-box-d\">
                                            <h3 class=\"title-d\">";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced search ...", [], "messages");
        yield "</h3>
                                        </div>
                                        <span class=\"close-box-collapse right-boxed bi bi-x\"></span>
                                        <div class=\"box-collapse-wrap form\">
                                            <div class=\"row\">
                                                ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 86, $this->source); })()), 'form');
        yield "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                        </li>
                        <a class=\"nav-link\" href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\"><span><i class=\"linearicons-cart\"></i></a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header/index.html.twig";
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
        return array (  266 => 118,  231 => 86,  223 => 81,  214 => 74,  205 => 70,  199 => 69,  195 => 67,  193 => 66,  189 => 64,  180 => 60,  174 => 59,  168 => 56,  164 => 54,  162 => 53,  156 => 52,  149 => 50,  142 => 48,  139 => 47,  131 => 45,  129 => 44,  126 => 43,  118 => 41,  116 => 40,  111 => 38,  99 => 29,  85 => 18,  82 => 17,  67 => 14,  64 => 13,  60 => 12,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header  class=\"header_wrap fixed-top header_with_topbar active\">
    <div  class=\"top-header\" style=\"\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-6 col-md-6 col-sm-12\">
                    <ul  class=\"header_list\">
                        <li ><i class=\"ti-time\"></i><span>{% trans %} Monday - Friday : 8:00 - 20:00{% endtrans %}</span></li>
                    </ul>
                </div>
                <div  class=\"col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"d-flex\">
                        {% for locale in locales %}
                            <div class=\"lng_dropdown mr-2\">
                                <a class=\"{% if app.request.locale == locale %}active{% endif %}\" href=\"{{ path('change_locale', {'locale': locale})}}\">{{locale}}</a>
                            </div>
                        {% endfor %}
                        <ul  class=\"contact_detail\">
                            <li ><i  class=\"ti-mobile\"></i><span>{{app.session.get('siteInformation').phone}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_header dark_skin main_menu_uppercase\">
        <div  class=\"container\">
            <nav  class=\"navbar navbar-expand-lg\"><a 
                    routerlink=\"/\" class=\"navbar-brand\" ng-reflect-router-link=\"/\" href=\"/\">
                    <h1 class=\"name\">{{app.session.get('siteInformation').name}}</h1>
                </a><button  type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-expanded=\"false\"
                    class=\"navbar-toggler collapsed\"><span 
                        class=\"ion-android-menu\"></span></button>
                <div  id=\"navbarSupportedContent\"
                    class=\"navbar-collapse justify-content-end collapse\" style=\"\">
                    <ul  class=\"navbar-nav\">
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                            class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"/\">{% trans %}Home{% endtrans %}</a></li>
                        <li  class=\"dropdown\">
                            {% if is_granted(\"ROLE_ADMIN\")%}
                                <a  routerlink=\"/\" class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"{{path('admin')}}\">{% trans %}Admin{% endtrans %}</a></li>
                            {% endif %}
                        <li  class=\"dropdown\">
                            {% if is_granted(\"ROLE_ADMIN\")%}
                                <a  routerlink=\"/\" class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"{{path('newsletters_list')}}\">{% trans %}Newsletters{% endtrans %}</a></li>
                            {% endif %}
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                            class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"{{path('app_category')}}\">{% trans %}Categories{% endtrans %}</a></li>
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                            class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"{{path('app_shop')}}\">{% trans %}Shop{% endtrans %}</a></li>
                        <li ><a  routerlink=\"/contact\"
                            class=\"nav-link nav_item\" ng-reflect-router-link=\"/contact\" href=\"{{path('app_contact')}}\">{% trans %}Contact Us{% endtrans %}</a></li>
                        {% if app.user %}
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                {{app.user.username}}
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('app_account')}}\">{% trans %}Your Account{% endtrans %}</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">{% trans %}Log out{% endtrans %}</a></li>
                                </ul>
                            </li> 
                        {% else %}
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                {% trans %}Account{% endtrans %}
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('app_login')}}\">{% trans %}Log in{% endtrans %}</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('app_register')}}\">{% trans %}Register{% endtrans %}</a></li>
                                </ul>
                            </li> 
                        {% endif %}
                    </ul>
                    <ul class=\"navbar-nav attr-nav align-items-center\">          
                        <li><a href=\"javascript:void(0);\" class=\"nav-link search_trigger\"><i class=\"linearicons-magnifier\"></i></a>
                            <div class=\"search_wrap\"><span class=\"close-search\"><i class=\"ion-ios-close-empty\"></i></span>
                                <div class=\"click-closed\"></div>
                                    <div class=\"box-collapse\">
                                        <div class=\"title-box-d\">
                                            <h3 class=\"title-d\">{% trans %}Advanced search ...{% endtrans %}</h3>
                                        </div>
                                        <span class=\"close-box-collapse right-boxed bi bi-x\"></span>
                                        <div class=\"box-collapse-wrap form\">
                                            <div class=\"row\">
                                                {{form(search)}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                            <div class=\"search_overlay\"></div>
                        </li>
                        <a class=\"nav-link\" href=\"{{ path('app_cart')}}\"><span><i class=\"linearicons-cart\"></i></a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>", "header/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\header\\index.html.twig");
    }
}
