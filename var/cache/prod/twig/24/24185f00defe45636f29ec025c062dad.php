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

/* reset_password/request.html.twig */
class __TwigTemplate_1690b987fa45873fe825e38acc118217 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset your password", [], "messages");
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"login_register_wrap section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-md-10\">
                <div class=\"border_form\">
                    <div class=\"padding_eight_all bg-white\">
                        <div class=\"heading_s1\">
                            <h3>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset Password", [], "messages");
        yield "</h3>
                        </div>
                        <div class=\"content\">
                        <div class=\"message-flash\">
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["reset_password_error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 18
            yield "                                <div class=\"alert alert-danger\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_error"], "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "                        </div>
                            ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_start');
        yield "
                                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 22), 'row');
        yield "
                                <div>
                                    <small>
                                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter your email address and we will send you a
                                        link to reset your password.", [], "messages");
        // line 27
        yield "                                    </small>
                                </div>

                                <button class=\"btn btn-fill-out btn-block\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send password reset email", [], "messages");
        yield "</button>
                            ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_end');
        yield "
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
        return "reset_password/request.html.twig";
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
        return array (  115 => 31,  111 => 30,  106 => 27,  103 => 25,  97 => 22,  93 => 21,  90 => 20,  81 => 18,  77 => 17,  70 => 13,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/request.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\reset_password\\request.html.twig");
    }
}
