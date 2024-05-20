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

/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_71fde8c27a20a9a14f353ebd47154320 extends Template
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
        // line 5
        $context["__internal_67836084d344f50a12935c1b9d0ef6661ff882ee3a044615de060a89aae2e8ef"] = ((array_key_exists("ea", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 6
        yield "
";
        // line 7
        $context["flash_messages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 7);
        // line 8
        yield "
";
        // line 9
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["flash_messages"] ?? null)) > 0)) {
            // line 10
            yield "    <div id=\"flash-messages\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["flash_messages"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 12
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 13
                    yield "                <div class=\"alert alert-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["label"], "html", null, true);
                    yield " alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ";
                    // line 15
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [],                     // line 5
($context["__internal_67836084d344f50a12935c1b9d0ef6661ff882ee3a044615de060a89aae2e8ef"] ?? null));
                    // line 15
                    yield "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/flash_messages.html.twig";
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
        return array (  85 => 19,  79 => 18,  71 => 15,  69 => 5,  68 => 15,  62 => 13,  57 => 12,  53 => 11,  50 => 10,  48 => 9,  45 => 8,  43 => 7,  40 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/flash_messages.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\flash_messages.html.twig");
    }
}
