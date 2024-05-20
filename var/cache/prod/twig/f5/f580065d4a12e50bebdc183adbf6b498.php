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
class __TwigTemplate_28cb537ea49b1973b169cc9895843c8a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        yield " ";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["slider"] ?? null));
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 17), "html", null, true);
            yield "\"
                                        style=\"background-image: url(/assets/images/slider/";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 18), "html", null, true);
            yield ");\"> 
                                            <div  class=\"banner_slide_content\">
                                                <div  class=\"container\">
                                                    <div  class=\"row\">
                                                        <div  class=\"col-lg-7 col-9\">
                                                            <div  class=\"banner_content overflow-hidden\">
                                                                <h3>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 24)), "html", null, true);
            yield "</h3>
                                                                <h4  data-animation=\"slideInLeft\"
                                                                    data-animation-delay=\"0.5s\"
                                                                    class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                                                    style=\"animation-delay: 0.5s; opacity: 1;\">";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 28)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["newProduct"] ?? null));
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
        return array (  259 => 76,  239 => 71,  237 => 70,  218 => 69,  210 => 64,  200 => 59,  193 => 54,  177 => 53,  158 => 52,  149 => 46,  138 => 37,  115 => 28,  108 => 24,  99 => 18,  95 => 17,  90 => 16,  73 => 15,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\home\\index.html.twig");
    }
}
