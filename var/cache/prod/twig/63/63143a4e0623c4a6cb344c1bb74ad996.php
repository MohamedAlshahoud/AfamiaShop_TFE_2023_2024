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

/* search/index.html.twig */
class __TwigTemplate_5dfb95277a7607e2bf10a54f13e3b1e3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
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
                    <div class=\"col-lg-12\"> 
                        ";
        // line 11
        if (($context["products"] ?? null)) {
            // line 12
            yield "                            <div  class=\"row\">
                                <div  class=\"col-12\">
                                    <div  class=\"heading_s1\">
                                        <h2 >";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("products found", [], "messages");
            yield "</h2>
                                    </div>
                                </div>
                            </div>
                            <div  class=\"tab-content\">
                                <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                                    class=\"tab-pane fade show active\">
                                    <div  class=\"row shop_container\">
                                        ";
            // line 23
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
                // line 24
                yield from                 $this->loadTemplate("product/display_product.html.twig", "search/index.html.twig", 24)->unwrap()->yield($context);
                // line 25
                yield "                                        ";
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
                        ";
        } else {
            // line 30
            yield "                            <div class=\"col-lg-12 text-center\"> 
                                <p>";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results for your search.", [], "messages");
            yield "</p>
                            </div>
                        ";
        }
        // line 34
        yield "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"pagination\">
                    ";
        // line 39
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["products"] ?? null));
        yield "
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
        return "search/index.html.twig";
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
        return array (  143 => 39,  136 => 34,  130 => 31,  127 => 30,  107 => 25,  105 => 24,  86 => 23,  75 => 15,  70 => 12,  68 => 11,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\search\\index.html.twig");
    }
}
