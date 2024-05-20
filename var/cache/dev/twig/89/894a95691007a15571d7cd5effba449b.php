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

/* partials/pagination.html.twig */
class __TwigTemplate_ebf1495d1a5b5d4ccc2f81d5e3e81073 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/pagination.html.twig"));

        // line 1
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            yield "    <nav\">
        <ul class=\"pagination\">
            ";
            // line 4
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 4, $this->source); })()) > 1)) {
                // line 5
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 6, $this->source); })()) - 1)]), "html", null, true);
                yield "\" class=\"page-link\">&lt;</a>
                </li>
            ";
            } else {
                // line 9
                yield "                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&lt;</a>    
                </li>
            ";
            }
            // line 13
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 13, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 14, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a href=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 15, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "page" => $context["page"]]), "html", null, true);
                yield "\" class=\"page-link\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "            ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 18, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 18, $this->source); })()))) {
                // line 19
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 20, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 20, $this->source); })()) + 1)]), "html", null, true);
                yield "\" class=\"page-link\">&gt;</a>
                </li>
            ";
            } else {
                // line 23
                yield "                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&gt;</a>    
                </li>
            ";
            }
            // line 27
            yield "        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
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
        return array (  106 => 27,  100 => 23,  94 => 20,  91 => 19,  88 => 18,  77 => 15,  72 => 14,  67 => 13,  61 => 9,  55 => 6,  52 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pages > 1 %}
    <nav\">
        <ul class=\"pagination\">
            {% if currentPage > 1 %}
                <li class=\"page-item\">
                    <a href=\"{{ path(path, {id: id, page: currentPage - 1}) }}\" class=\"page-link\">&lt;</a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&lt;</a>    
                </li>
            {% endif %}
            {% for page in 1..pages %}
                <li class=\"page-item {{ (page == currentPage) ? 'active' : '' }}\">
                    <a href=\"{{ path(path, {id: id, page: page}) }}\" class=\"page-link\">{{ page }}</a>
                </li>
            {% endfor %}
            {% if currentPage < pages %}
                <li class=\"page-item\">
                    <a href=\"{{ path(path, {id: id, page: currentPage + 1}) }}\" class=\"page-link\">&gt;</a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&gt;</a>    
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}", "partials/pagination.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\partials\\pagination.html.twig");
    }
}
