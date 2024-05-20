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

/* @EasyAdmin/includes/_encore_link_tags.html.twig */
class __TwigTemplate_b81e1fbfc49a16aee540dc21b4ff5c41 extends Template
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
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["assets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["encore_asset"]) {
            // line 3
            yield "    ";
            yield $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_link_tags", CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "value", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "webpackPackageName", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "webpackEntrypointName", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "htmlAttributes", [], "any", false, false, false, 3));
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encore_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_encore_link_tags.html.twig";
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
        return array (  42 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/includes/_encore_link_tags.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\includes\\_encore_link_tags.html.twig");
    }
}
