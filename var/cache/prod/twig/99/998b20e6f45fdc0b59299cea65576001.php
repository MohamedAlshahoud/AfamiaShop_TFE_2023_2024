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

/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_bc5d8fcdd055e7221cc9bcf7171c8751 extends Template
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
        yield "<div id=\"modal-filters\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> ";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.clear", array(), "EasyAdminBundle"), "html", null, true);
        yield "
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", array(), "EasyAdminBundle"), "html", null, true);
        yield "
                </h5>
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> ";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.apply", array(), "EasyAdminBundle"), "html", null, true);
        yield "
                </button>
            </div>
            <div class=\"modal-body p-0\">
                ";
        // line 17
        yield "                ";
        // line 18
        yield "            </div>
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
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
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
        return array (  66 => 18,  64 => 17,  57 => 12,  51 => 9,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\includes\\_filters_modal.html.twig");
    }
}
