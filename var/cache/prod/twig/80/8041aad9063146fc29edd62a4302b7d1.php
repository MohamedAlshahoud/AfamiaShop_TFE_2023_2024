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

/* form_table_layout.html.twig */
class __TwigTemplate_623abad18ff0ca8ed8e88bfd29ba0ed1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'hidden_row' => [$this, 'block_hidden_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 20
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 29
        yield from $this->unwrap()->yieldBlock('hidden_row', $context, $blocks);
        // line 38
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        return; yield '';
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["widget_attr"] = [];
        // line 5
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 6
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 8
        yield "<tr";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 8, $this->getSourceContext());
        }
        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        yield ">
        <td>";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 11
        yield "</td>
        <td>";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 16
        yield "</td>
    </tr>";
        return; yield '';
    }

    // line 20
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "<tr";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 21, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">
        <td></td>
        <td>";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 25
        yield "</td>
    </tr>";
        return; yield '';
    }

    // line 29
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $context["style"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", true, true, false, 30)) ? ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", false, false, false, 30) . (((Twig\Extension\CoreExtension::last($this->env, Twig\Extension\CoreExtension::trimFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", false, false, false, 30))) != ";")) ? ("; ") : ("")))) : (""));
        // line 31
        yield "<tr";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["style" => Twig\Extension\CoreExtension::trimFilter((($context["style"] ?? null) . " display: none"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 31, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">
        <td colspan=\"2\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 34
        yield "</td>
    </tr>";
        return; yield '';
    }

    // line 38
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "<table ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 40
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)) && (Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 41
            yield "<tr>
            <td colspan=\"2\">";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 44
            yield "</td>
        </tr>";
        }
        // line 47
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 49
        yield "</table>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  182 => 49,  180 => 48,  178 => 47,  174 => 44,  172 => 43,  169 => 41,  167 => 40,  163 => 39,  159 => 38,  153 => 34,  151 => 33,  138 => 31,  136 => 30,  132 => 29,  126 => 25,  124 => 24,  110 => 21,  106 => 20,  100 => 16,  98 => 15,  96 => 14,  94 => 13,  91 => 11,  89 => 10,  76 => 8,  73 => 6,  71 => 5,  69 => 4,  65 => 3,  60 => 38,  58 => 29,  56 => 20,  54 => 3,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_table_layout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
