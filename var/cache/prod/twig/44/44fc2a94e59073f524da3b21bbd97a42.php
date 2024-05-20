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

/* newsletters/list.html.twig */
class __TwigTemplate_f9381c7fdcc3c0165321ca0204c1a051 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "newsletters/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of Newsletters", [], "messages");
        yield "  ";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"main_content\">
    <div class=\"section small_pt pb_70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-content dashboard_content\">
                        <div class=\"tab-pane fade active show\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                            <div class=\"card\">
                                <div class=\"heading_s1\">
                                    <h1>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of Newsletters", [], "messages");
        yield "</h1>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead>
                                                <tr>
                                                    <th>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "messages");
        yield "</th>
                                                    <th>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre", [], "messages");
        yield "</th>
                                                    <th>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "messages");
        yield "</th>
                                                    <th>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", [], "messages");
        yield "</th>
                                                    <th>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registered", [], "messages");
        yield "</th>
                                                    <th>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        yield "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["newsletters"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 32
            yield "                                                    <tr>
                                                        <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "name", [], "any", false, false, false, 34)), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "categories", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36)), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "categories", [], "any", false, false, false, 37), "users", [], "any", false, false, false, 37)), "html", null, true);
            yield "</td>
                                                        <td>
                                                            ";
            // line 39
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "isSent", [], "any", false, false, false, 39) == false)) {
                // line 40
                yield "                                                                <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_send", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["newsletter"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send", [], "messages");
                yield "</a>
                                                            ";
            }
            // line 42
            yield "                                                        </td>
                                                    </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            yield "                                                    <tr>
                                                        <td colspan=\"6\" class=\"text-center\">";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You haven't created a newsletter yet!", [], "messages");
            yield "</td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        return "newsletters/list.html.twig";
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
        return array (  168 => 49,  159 => 46,  156 => 45,  149 => 42,  141 => 40,  139 => 39,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  115 => 32,  110 => 31,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  73 => 15,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletters/list.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\newsletters\\list.html.twig");
    }
}
