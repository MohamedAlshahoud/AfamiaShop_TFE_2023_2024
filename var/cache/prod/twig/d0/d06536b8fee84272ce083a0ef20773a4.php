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

/* category/partials/_intro_single.html.twig */
class __TwigTemplate_447a2efd174925cb74f9bdd3f63217ee extends Template
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
        // line 1
        yield "<div  class=\"col-lg-3 col-md-4 col-6\">
    <div  class=\"product category\">
        <div  class=\"product_img category\">
            <a href=\"";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "id", [], "any", false, false, false, 4)]), "html", null, true);
        yield "\" class=\"btn-fill-out\">
                <img alt=\"product_img1\" src=\"/assets/images/categories/";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "image", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
            </a>
        </div>
        <div  class=\"product_info category_name\">
            <h4 class=\"category_title\"><a href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "name", [], "any", false, false, false, 9)), "html", null, true);
        yield "</a></h4>
        </div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "category/partials/_intro_single.html.twig";
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
        return array (  54 => 9,  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "category/partials/_intro_single.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\category\\partials\\_intro_single.html.twig");
    }
}
