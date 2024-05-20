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

/* @email/zurb_2/notification/body.txt.twig */
class __TwigTemplate_dbabe3b0b20129044df2c2e316847b44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('lead', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('action', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('exception', $context, $blocks);
        return; yield '';
    }

    // line 1
    public function block_lead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 2);
        yield "
";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield ($context["content"] ?? null);
        yield "
";
        return; yield '';
    }

    // line 9
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (($context["action_url"] ?? null)) {
            // line 11
            yield ($context["action_text"] ?? null);
            yield ": ";
            yield ($context["action_url"] ?? null);
            yield "
";
        }
        return; yield '';
    }

    // line 15
    public function block_exception($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        if (($context["exception"] ?? null)) {
            // line 17
            yield "Exception stack trace attached.
";
            // line 18
            yield ($context["exception"] ?? null);
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@email/zurb_2/notification/body.txt.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  109 => 18,  106 => 17,  104 => 16,  100 => 15,  90 => 11,  88 => 10,  84 => 9,  77 => 6,  73 => 5,  66 => 2,  62 => 1,  57 => 15,  54 => 14,  52 => 9,  49 => 8,  47 => 5,  44 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/zurb_2/notification/body.txt.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\body.txt.twig");
    }
}
