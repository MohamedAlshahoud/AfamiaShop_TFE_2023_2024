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

/* shop/index.html.twig */
class __TwigTemplate_7dbd14725fbd202fdcaff8391c9bad7a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "messages");
        yield " ";
        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 9
        if (($context["products"] ?? null)) {
            // line 10
            yield "                    <div class=\"col-lg-9\"> 
                        <div  class=\"tab-content\">
                            <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                                class=\"tab-pane fade show active\">
                                <div  class=\"row shop_container\">
                                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
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
                // line 16
                yield from                 $this->loadTemplate("product/display_product.html.twig", "shop/index.html.twig", 16)->unwrap()->yield($context);
                // line 17
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
                            <div class=\"row\">
                                <div class=\"pagination\">
                                    ";
            // line 22
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["products"] ?? null));
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 28
            yield "                    <div class=\"col-lg-9 text-center\"> 
                        <p>";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No result found.", [], "messages");
            yield "</p>
                    </div>
                ";
        }
        // line 32
        yield "                <div class=\"col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0\">
                    <div class=\"sidebar\">
                        <div class=\"widget\">
                            <div>
                            <h3>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter our products...", [], "messages");
        yield "</h3>
                            </div>
                            ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["filterForm"] ?? null), 'form');
        yield "
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
        return "shop/index.html.twig";
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
        return array (  147 => 38,  142 => 36,  136 => 32,  130 => 29,  127 => 28,  118 => 22,  98 => 17,  96 => 16,  77 => 15,  70 => 10,  68 => 9,  62 => 5,  58 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\shop\\index.html.twig");
    }
}
