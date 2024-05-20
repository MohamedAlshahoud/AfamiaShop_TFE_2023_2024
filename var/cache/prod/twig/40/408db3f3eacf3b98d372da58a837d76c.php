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

/* terms_conditions/term_condition.html.twig */
class __TwigTemplate_5c8e0bde782cdf218f3191040c3b388a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "terms_conditions/term_condition.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Privacy Policy Facebook", [], "messages");
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <div  class=\"main_content\">
        <div  class=\"section small_pt pb_70\">
            <div  class=\"container\">
                <div  class=\"row\">
                    <div class=\"col-12\">
                    
                            <h2>Privacy Policy Facebook</h2>
                        
                        Privacy Policy Facebook
                        This Privacy Policy is prepared by Afamiashop and whose registered address is quai de rome 99 , 4000 Liège (“We”) are committed to protecting and preserving the privacy of our visitors when visiting our site or communicating electronically with us.
                        This policy sets out how we process any personal data we collect from you or that you provide to us through our website and social media sites. We confirm that we will keep your information secure and comply fully with all applicable Belgium Data Protection legislation and regulations. Please read the following carefully to understand what happens to personal data that you choose to provide to us, or that we collect from you when you visit our sites. By submitting information you are accepting and consenting to the practices described in this policy.
                        Types of information we may collect from you
                        We may collect, store and use the following kinds of personal information about individuals who visit and use our website and social media sites:
                        Information you supply to us. You may supply us with information about you by filling in forms on our website or social media. This includes information you provide when you submit a contact/inquiry form. The information you give us may include but is not limited to, your name, address, e-mail address, and phone number.
                        How we may use the information we collect
                        We use the information in the following ways:
                        Information you supply to us. We will use this information:
                        to provide you with information and/or services that you request from us;
                        To contact you to provide the information requested.
                        Disclosure of your information
                        Any information you provide to us will either be emailed directly to us or may be stored on a secure server.
                        We do not rent, sell or share personal information about you with other people or non-affiliated companies.
                        We will use all reasonable efforts to ensure that your personal data is not disclosed to regional/national institutions and authorities unless required by law or other regulations.
                        Unfortunately, the transmission of information via the internet is not completely secure. Although we will do our best to protect your personal data, we cannot guarantee the security of your data transmitted to our site; any transmission is at your own risk. Once we have received your information, we will use strict procedures and security features to try to prevent unauthorized access.
                        Your rights – access to your personal data
                        You have the right to ensure that your personal data is being processed lawfully (“Subject Access Right”). Your subject access right can be exercised in accordance with data protection laws and regulations. Any subject access request must be made in writing to afamiashop a quai de rome 99 , 4000 Liège , contact@afamiashop.be. We will provide your personal data to you within the statutory time frames. To enable us to trace any of your personal data that we may be holding, we may need to request further information from you. If you complain about how we have used your information, you have the right to complain to the Information Commissioner’s Office (ICO).
                        Changes to our privacy policy
                        Any changes we may make to our privacy policy in the future will be posted on this page and, where appropriate, notified to you by e-mail. Please check back frequently to see any updates or changes to our privacy policy.
                        Contact
                        Questions, comments, and requests regarding this privacy policy are welcomed and should be addressed to afamiashop , contact@afamiashop.be.
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
        return "terms_conditions/term_condition.html.twig";
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
        return array (  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "terms_conditions/term_condition.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\terms_conditions\\term_condition.html.twig");
    }
}
