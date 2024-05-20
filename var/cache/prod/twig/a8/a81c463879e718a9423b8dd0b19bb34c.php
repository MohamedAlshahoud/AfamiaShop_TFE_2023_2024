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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_6ca4e5e06e6b35f424d1e9c968107469 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "<nav id=\"main-menu\">
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('main_menu_before', $context, $blocks);
        // line 4
        yield "
    <ul class=\"menu\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('main_menu', $context, $blocks);
        // line 33
        yield "    </ul>

    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('main_menu_after', $context, $blocks);
        // line 36
        yield "</nav>

";
        // line 43
        yield "
";
        return; yield '';
    }

    // line 3
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 6
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            yield "                ";
            yield from $this->unwrap()->yieldBlock('menu_item', $context, $blocks);
            // line 31
            yield "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        ";
        return; yield '';
    }

    // line 8
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "                    ";
        $context["is_submenu_item_with_no_items"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "type", [], "any", false, false, false, 9) == Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto::TYPE_SUBMENU")) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 9));
        // line 10
        yield "                    ";
        if (($context["is_submenu_item_with_no_items"] ?? null)) {
            // line 11
            yield "                                            ";
        } else {
            // line 14
            yield "                        <li class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 14)) ? ("menu-header") : ("menu-item"));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 14)) ? ("has-submenu") : (""));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "isSelected", [], "any", false, false, false, 14)) ? ("active") : (""));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "isExpanded", [], "any", false, false, false, 14)) ? ("expanded") : (""));
            yield "\">
                            ";
            // line 15
            yield CoreExtension::callMacro($macros["_self"], "macro_render_menu_item", [($context["menuItem"] ?? null)], 15, $context, $this->getSourceContext());
            yield "

                            ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 17)) {
                // line 18
                yield "                                <ul class=\"submenu\">
                                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 19));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                    // line 20
                    yield "                                        ";
                    yield from $this->unwrap()->yieldBlock('menu_subitem', $context, $blocks);
                    // line 25
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "                                </ul>
                            ";
            }
            // line 28
            yield "                        </li>
                    ";
        }
        // line 30
        yield "                ";
        return; yield '';
    }

    // line 20
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "                                            <li class=\"";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isMenuSection", [], "any", false, false, false, 21)) ? ("menu-header") : ("menu-item"));
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isSelected", [], "any", false, false, false, 21)) ? ("active") : (""));
        yield "\">
                                                ";
        // line 22
        yield CoreExtension::callMacro($macros["_self"], "macro_render_menu_item", [($context["menuSubItem"] ?? null)], 22, $context, $this->getSourceContext());
        yield "
                                            </li>
                                        ";
        return; yield '';
    }

    // line 35
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 38
    public function macro_render_html_attributes($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "htmlAttributes", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                // line 40
                yield "        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["attribute_name"], "html", null, true);
                yield "=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["attribute_value"], "html_attr");
                yield "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute_name'], $context['attribute_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 45
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isMenuSection", [], "any", false, false, false, 45)) {
                // line 46
                yield "        <span class=\"menu-header-contents\" ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [($context["item"] ?? null)], 46, $context, $this->getSourceContext());
                yield ">
            ";
                // line 47
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 47))) {
                    yield "<i class=\"menu-icon fa-fw ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 47), "html", null, true);
                    yield "\"></i>";
                }
                // line 48
                yield "            <span class=\"menu-item-label position-relative ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 48), "html", null, true);
                yield "\">
                ";
                // line 49
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 49));
                yield "
            </span>
            ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51)) {
                    // line 52
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "cssClass", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
                    yield " style=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "htmlStyle", [], "any", false, false, false, 52), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "content", [], "any", false, false, false, 52), "html", null, true);
                    yield "</span>
            ";
                }
                // line 54
                yield "        </span>
    ";
            } else {
                // line 56
                yield "        <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 56), "html", null, true);
                yield "\" class=\"menu-item-contents ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 56)) ? ("submenu-toggle") : (""));
                yield " ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 56), "html", null, true);
                yield "\" target=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 56), "html", null, true);
                yield "\" rel=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 56), "html", null, true);
                yield "\" referrerpolicy=\"origin-when-cross-origin\" ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [($context["item"] ?? null)], 56, $context, $this->getSourceContext());
                yield ">
            ";
                // line 57
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 57))) {
                    yield "<i class=\"menu-icon fa-fw ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 57), "html", null, true);
                    yield "\"></i>";
                }
                // line 58
                yield "            <span class=\"menu-item-label position-relative\">
                ";
                // line 59
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 59));
                yield "
            </span>
            ";
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 61)) {
                    yield "<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>";
                }
                // line 62
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 62)) {
                    // line 63
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "cssClass", [], "any", false, false, false, 63), "html", null, true);
                    yield "\" ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
                    yield " style=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "htmlStyle", [], "any", false, false, false, 63), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "content", [], "any", false, false, false, 63), "html", null, true);
                    yield "</span>
            ";
                }
                // line 65
                yield "        </a>
    ";
            }
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
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
        return array (  362 => 65,  350 => 63,  347 => 62,  343 => 61,  338 => 59,  335 => 58,  329 => 57,  314 => 56,  310 => 54,  298 => 52,  296 => 51,  291 => 49,  286 => 48,  280 => 47,  275 => 46,  272 => 45,  260 => 44,  246 => 40,  241 => 39,  229 => 38,  222 => 35,  214 => 22,  207 => 21,  203 => 20,  198 => 30,  194 => 28,  190 => 26,  176 => 25,  173 => 20,  156 => 19,  153 => 18,  151 => 17,  146 => 15,  135 => 14,  132 => 11,  129 => 10,  126 => 9,  122 => 8,  117 => 32,  103 => 31,  100 => 8,  82 => 7,  78 => 6,  71 => 3,  65 => 43,  61 => 36,  59 => 35,  55 => 33,  53 => 6,  49 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\menu.html.twig");
    }
}
