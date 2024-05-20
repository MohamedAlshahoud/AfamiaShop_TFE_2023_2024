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

/* facebook/index.html.twig */
class __TwigTemplate_b257f1c8e7aaa3a930ea5cec974ff8a7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "facebook/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Hello HomeController!";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<style>
    .container
    {
        position: relative;
        height: 900px;

        background: #FFFFFF;
    }

    .imagebc
    {
        position: absolute;
        width: 720px;
        height: 899.82px;
    }
    .name
    {
        position: absolute;
        width: 500px;
        height: 19px;
        left: 913px;
        top: 200px;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        /* identical to box height */

        /* 800 */
        color: #2D3748;
    }
    .image-user
    {
        position: absolute;
        width: 292px;
        height: 318px;
        left: 913px;
        top: 253px;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        line-height: 35px;

        /* 900 */
        color: #1A202C;
    }

  
</style>

<div class=\"container\">
    <img src=\"";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/imagebc.png"), "html", null, true);
        yield "\" alt=\"\" class=\"imagebc\">

    <div>
       <span class=\"lastname\">";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["lastname"] ?? null), "html", null, true);
        yield "</span>
       <span class=\"firstname\">";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["firstname"] ?? null), "html", null, true);
        yield "</span>
       
       <img src=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["picture"] ?? null), "html", null, true);
        yield "\" alt=\"\" class=\"image-user\">

      
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
        return "facebook/index.html.twig";
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
        return array (  132 => 67,  127 => 65,  123 => 64,  117 => 61,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "facebook/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\facebook\\index.html.twig");
    }
}
