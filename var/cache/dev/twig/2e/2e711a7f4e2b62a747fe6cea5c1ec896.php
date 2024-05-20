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
class __TwigTemplate_d077f1389b2ce095cb03b3c9dde71f10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facebook/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facebook/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facebook/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/imagebc.png"), "html", null, true);
        yield "\" alt=\"\" class=\"imagebc\">

    <div>
       <span class=\"lastname\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "</span>
       <span class=\"firstname\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "</span>
       
       <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "\" alt=\"\" class=\"image-user\">

      
    </div>

</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  162 => 67,  157 => 65,  153 => 64,  147 => 61,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
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
    <img src=\"{{asset('/image/imagebc.png')}}\" alt=\"\" class=\"imagebc\">

    <div>
       <span class=\"lastname\">{{lastname}}</span>
       <span class=\"firstname\">{{firstname}}</span>
       
       <img src=\"{{picture}}\" alt=\"\" class=\"image-user\">

      
    </div>

</div>



{% endblock %}", "facebook/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\facebook\\index.html.twig");
    }
}
