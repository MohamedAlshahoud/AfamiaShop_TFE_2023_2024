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

/* partials/index.html.twig */
class __TwigTemplate_06ecdf5d32699a02fbbbe94000698e65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/index.html.twig"));

        // line 1
        yield "
<html>
    <head>
        <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
        <meta charset=\"utf-8\">
        <title> Simple marker</title>
        <style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        </style>
    </head>
    <body>
        ";
        // line 19
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 40
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        yield "        <div id=\"map\"></div>
        <script>
            function initMap(){
                var mayLatLng = {lat: 36.8064948, lng: 10.181531599999971};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: mayLatLng
                });
                var marker = new google.maps.Marker({
                    position: mayLatLng,
                    map: map,
                    title: 'Hello word'
                });
            }
        </script>
        <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDTBrEPbkUDzARZT2yBwQAjS-SN5x8L13k&callback=initMap\">
        </script>
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
        return "partials/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 20,  80 => 19,  67 => 40,  65 => 19,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
    <head>
        <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
        <meta charset=\"utf-8\">
        <title> Simple marker</title>
        <style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        </style>
    </head>
    <body>
        {% block body %}
        <div id=\"map\"></div>
        <script>
            function initMap(){
                var mayLatLng = {lat: 36.8064948, lng: 10.181531599999971};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: mayLatLng
                });
                var marker = new google.maps.Marker({
                    position: mayLatLng,
                    map: map,
                    title: 'Hello word'
                });
            }
        </script>
        <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDTBrEPbkUDzARZT2yBwQAjS-SN5x8L13k&callback=initMap\">
        </script>
        {% endblock %}
    </body>
</html>
", "partials/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AfamiaShop_TFE_2023_2024\\templates\\partials\\index.html.twig");
    }
}
