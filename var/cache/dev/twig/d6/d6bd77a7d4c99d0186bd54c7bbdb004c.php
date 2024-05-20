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
class __TwigTemplate_890ebe17d97186e0443cc7aed23a4a70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms_conditions/term_condition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms_conditions/term_condition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "terms_conditions/term_condition.html.twig", 1);
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

        yield "AfamiaShop | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("terms and conditions", [], "messages");
        
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
        yield "    <div  class=\"main_content\">
        <div  class=\"section small_pt pb_70\">
            <div  class=\"container\">
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 1 - Identity of the seller", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AfamiaShop België trades under the name: AfamiaShop.be", [], "messages");
        yield "</p>
                            </div>
                            <div>
                                <p>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registered address :", [], "messages");
        yield "</p>
                                <p>_ AfamiaShop</p>
                                <p>_ Rue des Rivageois 7 , 4000 Liège</td>
                                <p>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_ Belgium", [], "messages");
        yield "</p>
                            </div>
                        </div>
                         <div  class=\"tab-content\">
                            <div>
                                <p>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Availibility :", [], "messages");
        yield "</p>
                                <p>";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_ Monday to Friday from 8:00 until 19:59", [], "messages");
        yield "</p>
                                <p>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_ Telephone number 0489 47 08 53", [], "messages");
        yield "</td>
                                <p>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_ Email address: ay1665ay@gmail.com", [], "messages");
        yield "</p>
                                <p>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_ Company number: BE 0000 222 444", [], "messages");
        yield "</p>
                                <p>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_ Bank account number: BE00000000000000<", [], "messages");
        yield "/p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 2 - Applicability", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our Terms and Conditions apply to all offers by us as Online Retailer, 
                                to you as Consumer (any natural person who, for non-professional purposes only, acquires or uses products or services on the market)", [], "messages");
        // line 45
        yield ".</p>
                                <p>2-";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We only deliver in Belgium. If you select a shipping address in a different country, we can refuse your order", [], "messages");
        yield ".</p>
                                <p>3-";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to be at least 18 years of age to place an order. If you're not 18 yet, we'd like to ask you to have your parents or a legal guardian place the order. 
                                If we notice that an order has been placed by a minor, we can refuse this order", [], "messages");
        // line 48
        yield ".</p>
                                <p>4-";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Placing an order on the website counts as explicit acceptance of our Terms and Conditions, which can be accessed at all times through our website", [], "messages");
        yield ".</p>
                                <p>5-";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you order online, we will attach a copy of these Terms and Conditions in a format that can be saved or printed to your order confirmation or, at the latest, to your delivery. 
                                We urge you to always save or print the Terms and Conditions", [], "messages");
        // line 51
        yield ".</p>
                                <p>6-";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In the event that, in addition to these general Terms and Conditions, specific product or service conditions also apply, the above also applies to those special conditions. In the event of conflicting conditions, 
                                the consumer can always invoke the applicable condition that is most favorable to them", [], "messages");
        // line 53
        yield ".</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 3 - Our assortment and your order", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If an offer has a limited validity period, or is made under conditions, this will be explicitly stated in the offer", [], "messages");
        yield ".</p>
                                <p>2-";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We'll describe what we sell and how the order process will proceed as fully and accurately as possible. The description will 
                                be sufficiently detailed to enable a good evaluation of the offer by the consumer. If we use images, these will be a true representation 
                                of the offered products, digital content, and/or services. Oversights happen, and if we've clearly made a mistake, we're not 
                                required to deliver afterwards", [], "messages");
        // line 69
        yield ".</p>
                                <p>3-";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you order from us, you'll receive a confirmation by email. Your order will be complete and the agreement between us will be definitive 
                                as soon as we've received approval from the card company for your transaction with debit or credit cards. We accept Visa, 
                                MasterCard and cash. If the card company does not approve of your payment to us, we cannot be held responsible for delays in 
                                shipping and/or non-delivery of your order. Orders without a valid payment in the name of the registered cardholder will not be accepted or processed", [], "messages");
        // line 73
        yield ".</p>
                                <p>4-";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To purchase a product, you add the product to your shopping cart. Afterwards, you provide your contact information and invoice information. Next, you 
                                choose your delivery method: delivery on your chosen address, send to a chosen pickup point, or pickup in one of our AfamiaShop store. During the last step, you'll 
                                see an overview page where you can accept our Terms and Conditions and where you can confirm the payment by clicking the order button ¿I'm going to order¿. 
                                Once you've completed these steps, your purchase is final", [], "messages");
        // line 77
        yield ".</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 4 - The price", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("During the period we mention in our offer, our prices do not change, with the exception of price changes due to changes in VAT rates", [], "messages");
        yield ".</p>
                                <p>2-";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our prices include all taxes, VAT, taxes and services. You will never face surprises here. Shipping is free. If you choose time slot delivery 
                                we will charge shipping costs. In that case, we always let you know before you place your order", [], "messages");
        // line 91
        yield ".</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 5 - Payment", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We can only accept payment via the payment modules on our website for online orders", [], "messages");
        yield ".</p>
                                <p>2-";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In order to guarantee secure online payments and the security of your personal data, 
                                the transaction data is transmitted via the internet, encrypted with SSL technology. To pay with SSL, 
                                you do not need special software. You can recognize a secure SSL connection by the \"lock\" in your browser's status bar", [], "messages");
        // line 106
        yield ".</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 6 - Conformity and warranty", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We guarantee that our goods are in accordance with your order and meet the normal expectations that you may have, taking into account 
                                the specifications of the product. We also guarantee that our goods comply with all laws existing at the time of your order.", [], "messages");
        // line 119
        yield "</p>
                                <p>2-";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In addition, with regard to the delivery of goods, we also apply the statutory minimum warranty period of two years if the good is 
                                not in conformity with the order placed. This means that, in case of defects or defects to the good, this good will be repaired free of 
                                charge or replaced for up to 2 years after delivery.", [], "messages");
        // line 123
        yield "                                </p>
                                <p>3-";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sometimes AfamiaShop or its supplier offers a longer or more extensive warranty than the legal minimum warranty of 2 years; this is a 
                                commercial warranty. The commercial warranty does not affect the statutory minimum warranty. Whether a commercial warranty is offered differs per product. 
                                The characteristics of the commercial warranty are stated on the product web page and the proof of warranty. AfamiaShop is responsible for handling the commercial warranty, 
                                unless stated otherwise on the product's web page. Commercial warranties apply in Belgium and for the period stated on the product's web page.", [], "messages");
        // line 127
        yield "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 7 - Delivery and implementation", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All goods and services are delivered on the address you supplied in your order", [], "messages");
        yield ".</p>
                                <p>2-";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We will take the greatest possible care when receiving and implementing product orders, 
                                and when assessing applications for the provision of services", [], "messages");
        // line 141
        yield ".</p>
                                <p>3-";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We will execute accepted orders expeditiously but no later than 30 days, unless another delivery period has been agreed upon. If the delivery
                                is delayed, or if an order cannot or only partially be executed, we will always inform you before the expiration of the planned delivery period. If we 
                                do not, you can cancel your order, free of charge. In that case, we will refund you within 30 days after termination", [], "messages");
        // line 144
        yield ".</p>
                                <p>4-";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our shipments are always at our risk until the time of delivery to you or a representative appointed by you. You do not have to worry about goods 
                                that are lost in the mail. However, if you return us goods within 30 days of purchase because you would rather not keep them, you 
                                are responsible for transportation.", [], "messages");
        // line 147
        yield "</p>
                                <p>5-";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If the goods delivered by us during the transport were damaged, do not correspond with the items stated on the delivery note, or do not correspond to the 
                                items you ordered, you must report this as soon as possible and return the items to us", [], "messages");
        // line 149
        yield ".</p>
                                <p>6-";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We can not be held responsible for any consequential damages due to late delivery or non-delivery by the carrier that the company has appointed. Our liability 
                                in such cases is limited to the value of the items that are shown not to have been received by the customer", [], "messages");
        // line 151
        yield ".</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 8 - Force majeure", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In the event of force majeure, we are not required to carry out our obligations. In the case of force majeure, we can either postpone our 
                                obligations for the duration of the force majeure, or terminate the agreement permanently.", [], "messages");
        // line 164
        yield "</p>
                                <p>2-";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force majeure includes any situation outside of our will and control which prevents us from fulfilling our promises to you. This includes strikes, 
                                fire, malfunctions, power failures, network failures in, for instance, telecommunication networks, connections, or used systems of communication, or the unavailability of our website at any time, non-timely delivery by suppliers or other third parties", [], "messages");
        // line 166
        yield ".</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 9 -  Intellectual property", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our website, logos, texts, photos, names, and all our communication in general are protected by intellectual property rights known to us, or to our suppliers or other beneficiaries.", [], "messages");
        yield "</p>
                                <p>2-";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It is prohibited to use and/or make changes to the intellectual property rights as described in this article. For example, you may not copy or reproduce drawings, photographs, texts, logos, 
                                color combinations, etc ... without our prior written consent.", [], "messages");
        // line 180
        yield "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article 10 -  Complaints procedure and disputes", [], "messages");
        yield "</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We hope that our customers are 100% satisfied. If you do have a complaint, please let us know as soon as possible via ay1665ay@gmail.com, phone number 0489 47 08 53, or via a letter 
                                addressed to: AfamiaShop Belgium , Rue des Rivageois 7 , 4000 Liège . We'll do everything we can to help you within 5 working days.", [], "messages");
        // line 193
        yield "</p>
                                <p>2-";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All agreements that we conclude with our clients, regardless of their place of residence, are governed exclusively by Belgian law, and in case of a dispute, only the competent Belgian courts 
                                are competent. If, for reasons of international law, another law applies, Book VI of the Belgian Economic Law Code will be referenced when interpreting the current Terms and Conditions.", [], "messages");
        // line 195
        yield "</p>
                                <p>3-";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The Consumer Mediation Service of the FOD Economie is qualified to process any request to settle extrajudicial consumer disputes. They will, in turn, process the request themselves or send it to a 
                                qualified entity. You can reach the Consumer Mediation Service via this link: https://www.consumentenombudsdienst.be/en", [], "messages");
        // line 197
        yield "</p>
                                <p>4-";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If there is a cross-border dispute, the consumer can rely on the Online Dispute Resolution platform of the European Union via this link: https://ec.europa.eu/odr.", [], "messages");
        yield "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        return array (  454 => 198,  451 => 197,  448 => 196,  445 => 195,  442 => 194,  439 => 193,  436 => 192,  429 => 188,  419 => 180,  416 => 179,  412 => 178,  405 => 174,  395 => 166,  392 => 165,  389 => 164,  386 => 163,  379 => 159,  369 => 151,  366 => 150,  363 => 149,  360 => 148,  357 => 147,  353 => 145,  350 => 144,  346 => 142,  343 => 141,  340 => 140,  336 => 139,  329 => 135,  319 => 127,  314 => 124,  311 => 123,  307 => 120,  304 => 119,  301 => 118,  294 => 114,  284 => 106,  280 => 104,  276 => 103,  269 => 99,  259 => 91,  256 => 90,  252 => 89,  245 => 85,  235 => 77,  230 => 74,  227 => 73,  222 => 70,  219 => 69,  214 => 66,  210 => 65,  203 => 61,  193 => 53,  190 => 52,  187 => 51,  184 => 50,  180 => 49,  177 => 48,  174 => 47,  170 => 46,  167 => 45,  164 => 44,  157 => 40,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  118 => 22,  112 => 19,  106 => 16,  99 => 12,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AfamiaShop | {% trans %}terms and conditions{% endtrans %}{% endblock %}

{% block body %}
    <div  class=\"main_content\">
        <div  class=\"section small_pt pb_70\">
            <div  class=\"container\">
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 1 - Identity of the seller{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>{% trans %}AfamiaShop België trades under the name: AfamiaShop.be {% endtrans %}</p>
                            </div>
                            <div>
                                <p>{% trans %}Registered address :{% endtrans %}</p>
                                <p>_ AfamiaShop</p>
                                <p>_ Rue des Rivageois 7 , 4000 Liège</td>
                                <p>{% trans %}_ Belgium{% endtrans %}</p>
                            </div>
                        </div>
                         <div  class=\"tab-content\">
                            <div>
                                <p>{% trans %}Availibility :{% endtrans %}</p>
                                <p>{% trans %}_ Monday to Friday from 8:00 until 19:59{% endtrans %}</p>
                                <p>{% trans %}_ Telephone number 0489 47 08 53{% endtrans %}</td>
                                <p>{% trans %}_ Email address: ay1665ay@gmail.com{% endtrans %}</p>
                                <p>{% trans %}_ Company number: BE 0000 222 444{% endtrans %}</p>
                                <p>{% trans %}_ Bank account number: BE00000000000000<{% endtrans %}/p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 2 - Applicability{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}Our Terms and Conditions apply to all offers by us as Online Retailer, 
                                to you as Consumer (any natural person who, for non-professional purposes only, acquires or uses products or services on the market){% endtrans %}.</p>
                                <p>2-{% trans %}We only deliver in Belgium. If you select a shipping address in a different country, we can refuse your order{% endtrans %}.</p>
                                <p>3-{% trans %}You need to be at least 18 years of age to place an order. If you're not 18 yet, we'd like to ask you to have your parents or a legal guardian place the order. 
                                If we notice that an order has been placed by a minor, we can refuse this order{% endtrans %}.</p>
                                <p>4-{% trans %}Placing an order on the website counts as explicit acceptance of our Terms and Conditions, which can be accessed at all times through our website{% endtrans %}.</p>
                                <p>5-{% trans %}If you order online, we will attach a copy of these Terms and Conditions in a format that can be saved or printed to your order confirmation or, at the latest, to your delivery. 
                                We urge you to always save or print the Terms and Conditions{% endtrans %}.</p>
                                <p>6-{% trans %}In the event that, in addition to these general Terms and Conditions, specific product or service conditions also apply, the above also applies to those special conditions. In the event of conflicting conditions, 
                                the consumer can always invoke the applicable condition that is most favorable to them{% endtrans %}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 3 - Our assortment and your order{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}If an offer has a limited validity period, or is made under conditions, this will be explicitly stated in the offer{% endtrans %}.</p>
                                <p>2-{% trans %}We'll describe what we sell and how the order process will proceed as fully and accurately as possible. The description will 
                                be sufficiently detailed to enable a good evaluation of the offer by the consumer. If we use images, these will be a true representation 
                                of the offered products, digital content, and/or services. Oversights happen, and if we've clearly made a mistake, we're not 
                                required to deliver afterwards {% endtrans %}.</p>
                                <p>3-{% trans %}If you order from us, you'll receive a confirmation by email. Your order will be complete and the agreement between us will be definitive 
                                as soon as we've received approval from the card company for your transaction with debit or credit cards. We accept Visa, 
                                MasterCard and cash. If the card company does not approve of your payment to us, we cannot be held responsible for delays in 
                                shipping and/or non-delivery of your order. Orders without a valid payment in the name of the registered cardholder will not be accepted or processed{% endtrans %}.</p>
                                <p>4-{% trans %}To purchase a product, you add the product to your shopping cart. Afterwards, you provide your contact information and invoice information. Next, you 
                                choose your delivery method: delivery on your chosen address, send to a chosen pickup point, or pickup in one of our AfamiaShop store. During the last step, you'll 
                                see an overview page where you can accept our Terms and Conditions and where you can confirm the payment by clicking the order button ¿I'm going to order¿. 
                                Once you've completed these steps, your purchase is final{% endtrans %}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 4 - The price{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}During the period we mention in our offer, our prices do not change, with the exception of price changes due to changes in VAT rates{% endtrans %}.</p>
                                <p>2-{% trans %}Our prices include all taxes, VAT, taxes and services. You will never face surprises here. Shipping is free. If you choose time slot delivery 
                                we will charge shipping costs. In that case, we always let you know before you place your order{% endtrans %}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 5 - Payment{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}We can only accept payment via the payment modules on our website for online orders{% endtrans %}.</p>
                                <p>2-{% trans %}In order to guarantee secure online payments and the security of your personal data, 
                                the transaction data is transmitted via the internet, encrypted with SSL technology. To pay with SSL, 
                                you do not need special software. You can recognize a secure SSL connection by the \"lock\" in your browser's status bar{% endtrans %}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 6 - Conformity and warranty{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}We guarantee that our goods are in accordance with your order and meet the normal expectations that you may have, taking into account 
                                the specifications of the product. We also guarantee that our goods comply with all laws existing at the time of your order.{% endtrans %}</p>
                                <p>2-{% trans %}In addition, with regard to the delivery of goods, we also apply the statutory minimum warranty period of two years if the good is 
                                not in conformity with the order placed. This means that, in case of defects or defects to the good, this good will be repaired free of 
                                charge or replaced for up to 2 years after delivery.{% endtrans %}
                                </p>
                                <p>3-{% trans %}Sometimes AfamiaShop or its supplier offers a longer or more extensive warranty than the legal minimum warranty of 2 years; this is a 
                                commercial warranty. The commercial warranty does not affect the statutory minimum warranty. Whether a commercial warranty is offered differs per product. 
                                The characteristics of the commercial warranty are stated on the product web page and the proof of warranty. AfamiaShop is responsible for handling the commercial warranty, 
                                unless stated otherwise on the product's web page. Commercial warranties apply in Belgium and for the period stated on the product's web page.{% endtrans %}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 7 - Delivery and implementation{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}All goods and services are delivered on the address you supplied in your order{% endtrans %}.</p>
                                <p>2-{% trans %}We will take the greatest possible care when receiving and implementing product orders, 
                                and when assessing applications for the provision of services{% endtrans %}.</p>
                                <p>3-{% trans %}We will execute accepted orders expeditiously but no later than 30 days, unless another delivery period has been agreed upon. If the delivery
                                is delayed, or if an order cannot or only partially be executed, we will always inform you before the expiration of the planned delivery period. If we 
                                do not, you can cancel your order, free of charge. In that case, we will refund you within 30 days after termination{% endtrans %}.</p>
                                <p>4-{% trans %}Our shipments are always at our risk until the time of delivery to you or a representative appointed by you. You do not have to worry about goods 
                                that are lost in the mail. However, if you return us goods within 30 days of purchase because you would rather not keep them, you 
                                are responsible for transportation.{% endtrans %}</p>
                                <p>5-{% trans %}If the goods delivered by us during the transport were damaged, do not correspond with the items stated on the delivery note, or do not correspond to the 
                                items you ordered, you must report this as soon as possible and return the items to us{% endtrans %}.</p>
                                <p>6-{% trans %}We can not be held responsible for any consequential damages due to late delivery or non-delivery by the carrier that the company has appointed. Our liability 
                                in such cases is limited to the value of the items that are shown not to have been received by the customer{% endtrans %}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 8 - Force majeure{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}In the event of force majeure, we are not required to carry out our obligations. In the case of force majeure, we can either postpone our 
                                obligations for the duration of the force majeure, or terminate the agreement permanently.{% endtrans %}</p>
                                <p>2-{% trans %}Force majeure includes any situation outside of our will and control which prevents us from fulfilling our promises to you. This includes strikes, 
                                fire, malfunctions, power failures, network failures in, for instance, telecommunication networks, connections, or used systems of communication, or the unavailability of our website at any time, non-timely delivery by suppliers or other third parties{% endtrans %}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 9 -  Intellectual property{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}Our website, logos, texts, photos, names, and all our communication in general are protected by intellectual property rights known to us, or to our suppliers or other beneficiaries.{% endtrans %}</p>
                                <p>2-{% trans %}It is prohibited to use and/or make changes to the intellectual property rights as described in this article. For example, you may not copy or reproduce drawings, photographs, texts, logos, 
                                color combinations, etc ... without our prior written consent.{% endtrans %}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class=\"row\">
                    <div  class=\"col-12\">
                        <div>
                            <h2>{% trans %}Article 10 -  Complaints procedure and disputes{% endtrans %}</h2>
                        </div>
                        <div  class=\"tab-content\">
                            <div>
                                <p>1-{% trans %}We hope that our customers are 100% satisfied. If you do have a complaint, please let us know as soon as possible via ay1665ay@gmail.com, phone number 0489 47 08 53, or via a letter 
                                addressed to: AfamiaShop Belgium , Rue des Rivageois 7 , 4000 Liège . We'll do everything we can to help you within 5 working days.{% endtrans %}</p>
                                <p>2-{% trans %}All agreements that we conclude with our clients, regardless of their place of residence, are governed exclusively by Belgian law, and in case of a dispute, only the competent Belgian courts 
                                are competent. If, for reasons of international law, another law applies, Book VI of the Belgian Economic Law Code will be referenced when interpreting the current Terms and Conditions.{% endtrans %}</p>
                                <p>3-{% trans %}The Consumer Mediation Service of the FOD Economie is qualified to process any request to settle extrajudicial consumer disputes. They will, in turn, process the request themselves or send it to a 
                                qualified entity. You can reach the Consumer Mediation Service via this link: https://www.consumentenombudsdienst.be/en {% endtrans %}</p>
                                <p>4-{% trans %}If there is a cross-border dispute, the consumer can rely on the Online Dispute Resolution platform of the European Union via this link: https://ec.europa.eu/odr.{% endtrans %}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "terms_conditions/term_condition.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\templates\\terms_conditions\\term_condition.html.twig");
    }
}
