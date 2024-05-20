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

/* product/show.html.twig */
class __TwigTemplate_c337c662d093d79686fbd8b1e95facc3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show Product", [], "messages");
        
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
        yield "<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
                    <div class=\"product-image\">
                        <div class=\"product_img_box\"><img id=\"product_img\" alt=\"product_img1\"
                                src=\"/assets/images/products/";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "imageUrls", [], "any", false, false, false, 13), 0, [], "array", false, false, false, 13), "html", null, true);
        yield "\"><a><span class=\"\"></span></a>
                        </div>
                        <div id=\"pr_item_gallery\" data-slides-to-show=\"4\" data-slides-to-scroll=\"1\"
                            data-infinite=\"false\"
                            class=\"product_gallery_item slick_slider slick-initialized slick-slider\">
                            <div aria-live=\"polite\" class=\"slick-list draggable\">
                                <div class=\"slick-track\" role=\"listbox\" style=\"opacity: 1; width: 556px; left: 0px;\">
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "imageUrls", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
            // line 21
            yield "                                        <div class=\"item slick-slide slick-current slick-active\" data-slick-index=\"0\"
                                            aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide20\"
                                            style=\"width: 129px;\"><a href=\"#\" class=\"product_gallery_item active\"
                                                data-image=\"/assets/images/products/";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["imageUrl"], "html", null, true);
            yield "\"
                                                data-zoom-image=\"/assets/images/products/";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["imageUrl"], "html", null, true);
            yield "\"
                                                tabindex=\"0\"><img alt=\"product_small_img1\"
                                                    src=\"/assets/images/products/";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["imageUrl"], "html", null, true);
            yield "\"></a>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageUrl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"pr_detail\">
                        <div class=\"product_description\">
                            <h4 class=\"product_title\"><a href=\"#\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38)), "html", null, true);
        yield "</a></h4>
                            <div class=\"product_price\">
                                <span class=\"price_description\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40) / 100), "EUR"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"pr_desc\">
                            <p>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44)), "html", null, true);
        yield " </p>
                            <ul class=\"product-meta\">
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "categories", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
            yield "                                    <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category :", [], "messages");
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47)), "html", null, true);
            yield "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                            </ul>
                            <ul class=\"product-meta\">
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 51, $this->source); })()), "colors", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 52
            yield "                                     <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Color :", [], "messages");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 52)), "html", null, true);
            yield "</li> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                            </ul>
                            <ul class=\"product-meta\">
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "genders", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 57
            yield "                                     <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gender :", [], "messages");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "name", [], "any", false, false, false, 57)), "html", null, true);
            yield "</li> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                            </ul>
                        </div>
                        <div class=\"cart_extra\">
                            ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 62, $this->source); })()), "quantity", [], "any", false, false, false, 62) > 0)) {
            // line 63
            yield "                                <div class=\"cart_btn\">
                                    <a href=\"/cart/add/";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
            yield "/1\" class=\"btn btn-fill-out btn-addtocart\" type=\"button\">
                                        <i class=\"icon-basket-loaded\"></i> 
                                        ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add to cart", [], "messages");
            // line 67
            yield "                                    </a>
                                </div>
                            ";
        } else {
            // line 70
            yield "                                <p class=\"text-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Temporarily out of stock", [], "messages");
            yield "</p>
                            ";
        }
        // line 72
        yield "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"large_divider clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-style3\">
                        <ul role=\"tablist\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\"><a id=\"Additional-info-tab\" data-bs-toggle=\"tab\"
                                href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\"
                                aria-selected=\"true\" class=\"nav-link active\">";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More Informations", [], "messages");
        yield "</a>
                            </li>
                            <li class=\"nav-item\"><a id=\"list-comments-tab\" data-bs-toggle=\"tab\"
                                href=\"#List-comments\" role=\"tab\" aria-controls=\"List-comments\"
                                aria-selected=\"false\" class=\"nav-link\">";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of comments", [], "messages");
        yield "</a>
                            </li>
                            <li class=\"nav-item\"><a id=\"add-comment-tab\" data-bs-toggle=\"tab\"
                                href=\"#Add-comment\" role=\"tab\" aria-controls=\"Add-comment\"
                                aria-selected=\"false\" class=\"nav-link\">";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a comment", [], "messages");
        yield "</a>
                            </li>
                        </ul>
                        <div class=\"tab-content shop_info_tab\">
                            <div id=\"Additional-info\" role=\"tabpanel\" aria-labelledby=\"Additional-info-tab\"
                                class=\"tab-pane fade show active\"> ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 100, $this->source); })()), "moreInformation", [], "any", false, false, false, 100)), "html", null, true);
        yield "
                            </div>
                            <div id=\"List-comments\" role=\"tabpanel\" aria-labelledby=\"List-comments-tab\"
                                class=\"tab-pane fade\">
                                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 104, $this->source); })()), "comments", [], "any", false, false, false, 104));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 105
            yield "                                   <div class=\"border_form list_comments\">
                                        <div class=\"content_infos\">
                                            <h5>";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), "html", null, true);
            yield " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("by", [], "messages");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "username", [], "any", false, false, false, 107), "html", null, true);
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(", the", [], "messages");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
            yield "</h5>
                                        </div>
                                        <div class=\"content_infos\">";
            // line 109
            yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 109);
            yield "</div>
                                   </div>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 112
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("----------No comments----------", [], "messages");
            yield "</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                            </div>
                            <div id=\"Add-comment\" role=\"tabpanel\" aria-labelledby=\"Add-comment-tab\"
                                class=\"tab-pane fade\"> 
                                <div class=\"row\">
                                    <div class=\"col-xl-6 col-md-10\">
                                        <div class=\"border_form\">
                                            <div class=\"padding_eight_all bg-white\">
                                                <div class=\"heading_s1\">
                                                    <h3>";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a comment", [], "messages");
        yield "</h3>
                                                </div>
                                                <div class=\"row\">
                                                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "flashes", ["comment_success"], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 128
            yield "                                                        <div class=\" col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div> 
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "flashes", ["comment_error"], "method", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 135
            yield "                                                        <div class=\" col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div> 
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                                                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 141, $this->source); })()), 'form');
        yield "  
                                                </div>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"small_divider\"></div>
                    <div class=\"divider\"></div>
                    <div class=\"medium_divider\"></div>
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
        return "product/show.html.twig";
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
        return array (  405 => 141,  392 => 135,  387 => 134,  374 => 128,  370 => 127,  364 => 124,  354 => 116,  345 => 113,  342 => 112,  326 => 109,  312 => 107,  308 => 105,  290 => 104,  283 => 100,  275 => 95,  268 => 91,  261 => 87,  244 => 72,  238 => 70,  233 => 67,  231 => 66,  226 => 64,  223 => 63,  221 => 62,  216 => 59,  205 => 57,  201 => 56,  197 => 54,  186 => 52,  182 => 51,  178 => 49,  168 => 47,  164 => 46,  159 => 44,  152 => 40,  147 => 38,  137 => 30,  128 => 27,  123 => 25,  119 => 24,  114 => 21,  110 => 20,  100 => 13,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}Show Product  {% endtrans %}{% endblock %}

{% block body %}
<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
                    <div class=\"product-image\">
                        <div class=\"product_img_box\"><img id=\"product_img\" alt=\"product_img1\"
                                src=\"/assets/images/products/{{ product.imageUrls[0] }}\"><a><span class=\"\"></span></a>
                        </div>
                        <div id=\"pr_item_gallery\" data-slides-to-show=\"4\" data-slides-to-scroll=\"1\"
                            data-infinite=\"false\"
                            class=\"product_gallery_item slick_slider slick-initialized slick-slider\">
                            <div aria-live=\"polite\" class=\"slick-list draggable\">
                                <div class=\"slick-track\" role=\"listbox\" style=\"opacity: 1; width: 556px; left: 0px;\">
                                    {% for imageUrl in product.imageUrls%}
                                        <div class=\"item slick-slide slick-current slick-active\" data-slick-index=\"0\"
                                            aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide20\"
                                            style=\"width: 129px;\"><a href=\"#\" class=\"product_gallery_item active\"
                                                data-image=\"/assets/images/products/{{ imageUrl }}\"
                                                data-zoom-image=\"/assets/images/products/{{ imageUrl }}\"
                                                tabindex=\"0\"><img alt=\"product_small_img1\"
                                                    src=\"/assets/images/products/{{ imageUrl }}\"></a>
                                        </div>
                                    {% endfor%}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"pr_detail\">
                        <div class=\"product_description\">
                            <h4 class=\"product_title\"><a href=\"#\">{{product.name | trans}}</a></h4>
                            <div class=\"product_price\">
                                <span class=\"price_description\">{{(product.price/100) | format_currency('EUR')}}</span>
                            </div>
                        </div>
                        <div class=\"pr_desc\">
                            <p>{{product.description | trans}} </p>
                            <ul class=\"product-meta\">
                                {% for category in product.categories %}
                                    <li>{% trans %}Category : {% endtrans %}{{category.name | trans}}</a></li>
                                {% endfor %}
                            </ul>
                            <ul class=\"product-meta\">
                                {% for color in product.colors %}
                                     <li>{% trans %}Color : {% endtrans %} {{color.name | trans}}</li> 
                                {% endfor %}
                            </ul>
                            <ul class=\"product-meta\">
                                {% for gender in product.genders %}
                                     <li>{% trans %}Gender : {% endtrans %} {{gender.name | trans}}</li> 
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"cart_extra\">
                            {% if product.quantity > 0 %}
                                <div class=\"cart_btn\">
                                    <a href=\"/cart/add/{{ product.id }}/1\" class=\"btn btn-fill-out btn-addtocart\" type=\"button\">
                                        <i class=\"icon-basket-loaded\"></i> 
                                        {% trans %}Add to cart{% endtrans %}
                                    </a>
                                </div>
                            {% else %}
                                <p class=\"text-danger\">{% trans %}Temporarily out of stock{% endtrans %}</p>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"large_divider clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-style3\">
                        <ul role=\"tablist\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\"><a id=\"Additional-info-tab\" data-bs-toggle=\"tab\"
                                href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\"
                                aria-selected=\"true\" class=\"nav-link active\">{% trans %}More Informations{% endtrans %}</a>
                            </li>
                            <li class=\"nav-item\"><a id=\"list-comments-tab\" data-bs-toggle=\"tab\"
                                href=\"#List-comments\" role=\"tab\" aria-controls=\"List-comments\"
                                aria-selected=\"false\" class=\"nav-link\">{% trans %}List of comments{% endtrans %}</a>
                            </li>
                            <li class=\"nav-item\"><a id=\"add-comment-tab\" data-bs-toggle=\"tab\"
                                href=\"#Add-comment\" role=\"tab\" aria-controls=\"Add-comment\"
                                aria-selected=\"false\" class=\"nav-link\">{% trans %}Add a comment{% endtrans %}</a>
                            </li>
                        </ul>
                        <div class=\"tab-content shop_info_tab\">
                            <div id=\"Additional-info\" role=\"tabpanel\" aria-labelledby=\"Additional-info-tab\"
                                class=\"tab-pane fade show active\"> {{ product.moreInformation | trans}}
                            </div>
                            <div id=\"List-comments\" role=\"tabpanel\" aria-labelledby=\"List-comments-tab\"
                                class=\"tab-pane fade\">
                                {% for comment in product.comments %}
                                   <div class=\"border_form list_comments\">
                                        <div class=\"content_infos\">
                                            <h5>{% trans %}Comment{% endtrans %} {{loop.index}} {% trans %}by {% endtrans %} {{comment.username}}{% trans %} , the {% endtrans %} {{comment.createdAt|date(\"d/m/Y\")}}</h5>
                                        </div>
                                        <div class=\"content_infos\">{{comment.content|raw}}</div>
                                   </div>
                                {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">{% trans %}----------No comments----------{% endtrans %}</td>
                                </tr>
                                {% endfor %}
                            </div>
                            <div id=\"Add-comment\" role=\"tabpanel\" aria-labelledby=\"Add-comment-tab\"
                                class=\"tab-pane fade\"> 
                                <div class=\"row\">
                                    <div class=\"col-xl-6 col-md-10\">
                                        <div class=\"border_form\">
                                            <div class=\"padding_eight_all bg-white\">
                                                <div class=\"heading_s1\">
                                                    <h3>{% trans %}Add a comment{% endtrans %}</h3>
                                                </div>
                                                <div class=\"row\">
                                                    {% for message in app.flashes('comment_success') %}
                                                        <div class=\" col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">{{message}}
                                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div> 
                                                    {% endfor %}
                                                    {% for message in app.flashes('comment_error') %}
                                                        <div class=\" col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\">{{message}}
                                                            <button type=\"button\" class=\"close\" date-dismiss=\"alert\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div> 
                                                    {% endfor %}
                                                    {{form(commentForm)}}  
                                                </div>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"small_divider\"></div>
                    <div class=\"divider\"></div>
                    <div class=\"medium_divider\"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>
{% endblock %}", "product/show.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\product\\show.html.twig");
    }
}
