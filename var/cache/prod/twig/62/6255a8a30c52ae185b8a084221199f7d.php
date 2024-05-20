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
class __TwigTemplate_fc7c9d1808060be587e276f84ac8d669 extends Template
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
        return; yield '';
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  68 => 19,  61 => 40,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/index.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\partials\\index.html.twig");
    }
}
