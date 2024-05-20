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
class __TwigTemplate_1f50544aaad9a5fb7496be343875c286 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show Product", [], "messages");
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageUrls", [], "any", false, false, false, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageUrls", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
            // line 21
            yield "                                        <div class=\"item slick-slide slick-current slick-active\" data-slick-index=\"0\"
                                            aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide20\"
                                            style=\"width: 129px;\"><a href=\"#\" class=\"product_gallery_item active\"
                                                data-image=\"/assets/images/products/";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["imageUrl"], "html", null, true);
            yield "\"
                                                data-zoom-image=\"/assets/images/products/";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["imageUrl"], "html", null, true);
            yield "\"
                                                tabindex=\"0\"><img alt=\"product_small_img1\"
                                                    src=\"/assets/images/products/";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["imageUrl"], "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 38)), "html", null, true);
        yield "</a></h4>
                            <div class=\"product_price\">
                                <span class=\"price_description\">";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 40) / 100), "EUR"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"pr_desc\">
                            <p>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 44)), "html", null, true);
        yield " </p>
                            <ul class=\"product-meta\">
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "categories", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
            yield "                                    <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category :", [], "messages");
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 52
            yield "                                     <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Color :", [], "messages");
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 52)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "genders", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 57
            yield "                                     <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gender :", [], "messages");
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "name", [], "any", false, false, false, 57)), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 62) > 0)) {
            // line 63
            yield "                                <div class=\"cart_btn\">
                                    <a href=\"/cart/add/";
            // line 64
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 64), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "moreInformation", [], "any", false, false, false, 100)), "html", null, true);
        yield "
                            </div>
                            <div id=\"List-comments\" role=\"tabpanel\" aria-labelledby=\"List-comments-tab\"
                                class=\"tab-pane fade\">
                                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "comments", [], "any", false, false, false, 104));
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), "html", null, true);
            yield " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("by", [], "messages");
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "username", [], "any", false, false, false, 107), "html", null, true);
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(", the", [], "messages");
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["comment_success"], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 128
            yield "                                                        <div class=\" col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["comment_error"], "method", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 135
            yield "                                                        <div class=\" col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form');
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
        return array (  375 => 141,  362 => 135,  357 => 134,  344 => 128,  340 => 127,  334 => 124,  324 => 116,  315 => 113,  312 => 112,  296 => 109,  282 => 107,  278 => 105,  260 => 104,  253 => 100,  245 => 95,  238 => 91,  231 => 87,  214 => 72,  208 => 70,  203 => 67,  201 => 66,  196 => 64,  193 => 63,  191 => 62,  186 => 59,  175 => 57,  171 => 56,  167 => 54,  156 => 52,  152 => 51,  148 => 49,  138 => 47,  134 => 46,  129 => 44,  122 => 40,  117 => 38,  107 => 30,  98 => 27,  93 => 25,  89 => 24,  84 => 21,  80 => 20,  70 => 13,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/show.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\product\\show.html.twig");
    }
}
