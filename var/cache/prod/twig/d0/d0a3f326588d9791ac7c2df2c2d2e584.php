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

/* baseCheckout.html.twig */
class __TwigTemplate_00691a4fce1b73cbe558b0aef9df406f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        
        <link rel=\"stylesheet\" href=\"/assets/css/animate.css\">
        <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/all.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/ionicons.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/themify-icons.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/linearicons.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/flaticon.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/simple-line-icons.css\" />
        <link rel=\"stylesheet\" href=\"/assets/owlcarousel/css/owl.carousel.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/owlcarousel/css/owl.theme.css\" />
        <link rel=\"stylesheet\" href=\"/assets/owlcarousel/css/owl.theme.default.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/magnific-popup.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/slick.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/slick-theme.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/style.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/responsive.css\" />
        ";
        // line 24
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 26
        yield "
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 29
        yield "    </head>
    <body>
        ";
        // line 31
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 32
        yield "
        <script src=\"/assets/js/jquery-3.6.0.min.js\"></script>
        <script src=\"/assets/js/popper.min.js\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/assets/owlcarousel/js/owl.carousel.min.js\"></script>
        <script src=\"/assets/js/magnific-popup.min.js\"></script>
        <script src=\"/assets/js/waypoints.min.js\"></script>
        <script src=\"/assets/js/parallax.js\"></script>
        <script src=\"/assets/js/jquery.countdown.min.js\"></script>
        <script src=\"/assets/js/imagesloaded.pkgd.min.js\"></script>
        <script src=\"/assets/js/isotope.min.js\"></script>
        <script src=\"/assets/js/jquery.dd.min.js\"></script>
        <script src=\"/assets/js/slick.min.js\"></script>
        <script src=\"/assets/js/jquery.elevatezoom.js\"></script>
        <script src=\"/assets/js/scripts.js\"></script>
    </body>
</html>
";
        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Afamia";
        return; yield '';
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseCheckout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 31,  121 => 27,  113 => 24,  105 => 5,  83 => 32,  81 => 31,  77 => 29,  75 => 27,  72 => 26,  70 => 24,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseCheckout.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\baseCheckout.html.twig");
    }
}
