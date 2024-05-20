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

/* home/index.html.twig */
class __TwigTemplate_2b5eebec94314ac096e5e6108cbe9b58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div  class=\"main_content\">
        <div  class=\"section small_pt pb_70\">
            <div  class=\"container\">
                <div  class=\"row\">
                    <div class=\"col-12\">
                        <div  class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
                            <div  id=\"carouselExampleControls\" data-bs-ride=\"carousel\"
                                class=\"carousel slide carousel-fade light_arrow\">
                                <div  class=\"carousel-inner\">
                                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 15, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 16
            yield "                                        <div class=\"carousel-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) < 2)) ? ("active") : (""));
            yield " background_bg\"
                                        data-img-src=\"/assets/images/slider/";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 17), "html", null, true);
            yield "\"
                                        style=\"background-image: url(/assets/images/slider/";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 18), "html", null, true);
            yield ");\"> 
                                            <div  class=\"banner_slide_content\">
                                                <div  class=\"container\">
                                                    <div  class=\"row\">
                                                        <div  class=\"col-lg-7 col-9\">
                                                            <div  class=\"banner_content overflow-hidden\">
                                                                <h3>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 24)), "html", null, true);
            yield "</h3>
                                                                <h4  data-animation=\"slideInLeft\"
                                                                    data-animation-delay=\"0.5s\"
                                                                    class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                                                    style=\"animation-delay: 0.5s; opacity: 1;\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 28)), "html", null, true);
            yield "
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                                </div><a  href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\"
                                    class=\"carousel-control-prev\"><i  class=\"ion-chevron-left\"></i></a><a
                                    href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\"
                                    class=\"carousel-control-next\"><i  class=\"ion-chevron-right\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div  class=\"col-12\">
                        <div  class=\"heading_s1\">
                            <h1 >";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The last four categories added", [], "messages");
        yield "</h1>
                        </div>
                        <div  class=\"tab-content\">
                            <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                                class=\"tab-pane fade show active\">
                                <div  class=\"row shop_container\">
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 52, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            yield " 
                                        ";
            // line 53
            yield Twig\Extension\CoreExtension::include($this->env, $context, "category/partials/_intro_single.html.twig");
            yield "
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "  
                                </div>
                            </div>
                        </div>
                        <div class=\"btn-discover\">
                            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category");
        yield "\" class=\"btn btn-fill-out \">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover all our categories", [], "messages");
        yield "</a>
                        </div>
                    </div>
                    <div  class=\"col-12\">
                        <div  class=\"heading_s1\">
                            <h1 >";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Products", [], "messages");
        yield "</h1>
                        </div>
                        <div  class=\"tab-content\">
                            <div class=\"tab-pane fade show active\" id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\">
                                <div  class=\"row shop_container\">
                                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["newProduct"]) || array_key_exists("newProduct", $context) ? $context["newProduct"] : (function () { throw new RuntimeError('Variable "newProduct" does not exist.', 69, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            yield " 
                                        ";
            // line 70
            yield from             $this->loadTemplate("product/display_product.html.twig", "home/index.html.twig", 70)->unwrap()->yield($context);
            // line 71
            yield "                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "  
                                </div>
                            </div>
                        </div>
                        <div class=\"btn-discover\">
                            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"btn btn-fill-out \">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover all our products", [], "messages");
        yield "</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  289 => 76,  269 => 71,  267 => 70,  248 => 69,  240 => 64,  230 => 59,  223 => 54,  207 => 53,  188 => 52,  179 => 46,  168 => 37,  145 => 28,  138 => 24,  129 => 18,  125 => 17,  120 => 16,  103 => 15,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}Home {% endtrans %} {% endblock %}

{% block body %}
    <div  class=\"main_content\">
        <div  class=\"section small_pt pb_70\">
            <div  class=\"container\">
                <div  class=\"row\">
                    <div class=\"col-12\">
                        <div  class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
                            <div  id=\"carouselExampleControls\" data-bs-ride=\"carousel\"
                                class=\"carousel slide carousel-fade light_arrow\">
                                <div  class=\"carousel-inner\">
                                    {% for slide in slider %}
                                        <div class=\"carousel-item {{loop.index < 2 ? 'active' : ''}} background_bg\"
                                        data-img-src=\"/assets/images/slider/{{slide.image}}\"
                                        style=\"background-image: url(/assets/images/slider/{{slide.image}});\"> 
                                            <div  class=\"banner_slide_content\">
                                                <div  class=\"container\">
                                                    <div  class=\"row\">
                                                        <div  class=\"col-lg-7 col-9\">
                                                            <div  class=\"banner_content overflow-hidden\">
                                                                <h3>{{slide.title | trans}}</h3>
                                                                <h4  data-animation=\"slideInLeft\"
                                                                    data-animation-delay=\"0.5s\"
                                                                    class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                                                    style=\"animation-delay: 0.5s; opacity: 1;\">{{slide.description | trans}}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor%}
                                </div><a  href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\"
                                    class=\"carousel-control-prev\"><i  class=\"ion-chevron-left\"></i></a><a
                                    href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\"
                                    class=\"carousel-control-next\"><i  class=\"ion-chevron-right\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div  class=\"col-12\">
                        <div  class=\"heading_s1\">
                            <h1 >{% trans %}The last four categories added{% endtrans %}</h1>
                        </div>
                        <div  class=\"tab-content\">
                            <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                                class=\"tab-pane fade show active\">
                                <div  class=\"row shop_container\">
                                    {% for categorie in categories%} 
                                        {{include('category/partials/_intro_single.html.twig')}}
                                    {% endfor %}  
                                </div>
                            </div>
                        </div>
                        <div class=\"btn-discover\">
                            <a href=\"{{ path('app_category') }}\" class=\"btn btn-fill-out \">{% trans %}Discover all our categories{% endtrans %}</a>
                        </div>
                    </div>
                    <div  class=\"col-12\">
                        <div  class=\"heading_s1\">
                            <h1 >{% trans %}New Products{% endtrans %}</h1>
                        </div>
                        <div  class=\"tab-content\">
                            <div class=\"tab-pane fade show active\" id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\">
                                <div  class=\"row shop_container\">
                                    {% for product in newProduct%} 
                                        {% include \"product/display_product.html.twig\" %}
                                    {% endfor %}  
                                </div>
                            </div>
                        </div>
                        <div class=\"btn-discover\">
                            <a href=\"{{ path('app_shop') }}\" class=\"btn btn-fill-out \">{% trans %}Discover all our products{% endtrans %}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "home/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\home\\index.html.twig");
    }
}
