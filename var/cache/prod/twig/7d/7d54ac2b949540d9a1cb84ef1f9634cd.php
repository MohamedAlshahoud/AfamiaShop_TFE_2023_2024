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

/* @EasyAdmin/inspector/data_collector.html.twig */
class __TwigTemplate_285290d78a84cf2995694ffbafb77a21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/inspector/data_collector.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <span class=\"label ";
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 4)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("@EasyAdmin/inspector/icon-v3.svg.twig") : ("@EasyAdmin/inspector/icon.svg.twig")));
        yield "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        return; yield '';
    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "    <h2>EasyAdmin <small>(";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        yield ")</small></h2>

    ";
        // line 13
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 13)) {
            // line 14
            yield "        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>
    ";
        } else {
            // line 18
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 18)], false);
            yield "
    ";
        }
        // line 20
        yield "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/inspector/data_collector.html.twig";
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
        return array (  90 => 20,  84 => 18,  78 => 14,  76 => 13,  70 => 11,  66 => 10,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/inspector/data_collector.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\inspector\\data_collector.html.twig");
    }
}
