<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/account-address' => [[['_route' => 'app_account_address', '_controller' => 'App\\Controller\\AccountController::indexAddress'], null, null, null, false, false, null]],
        '/orders' => [[['_route' => 'app_account_orders', '_controller' => 'App\\Controller\\AccountController::accountOrders'], null, null, null, false, false, null]],
        '/account/profile/change' => [[['_route' => 'change_profile', '_controller' => 'App\\Controller\\AccountController::changeProfile'], null, null, null, false, false, null]],
        '/account/password/change' => [[['_route' => 'change_password', '_controller' => 'App\\Controller\\AccountController::changePassword'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\Account\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\Account\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/address' => [[['_route' => 'address_index', '_controller' => 'App\\Controller\\AddressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/address/new' => [[['_route' => 'address_new', '_controller' => 'App\\Controller\\AddressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin-m' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/order' => [[['_route' => 'app_api_api_order', '_controller' => 'App\\Controller\\Api\\ApiOrderController::update'], null, ['POST' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/get' => [[['_route' => 'app_get_cart', '_controller' => 'App\\Controller\\CartController::getCart'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/order/create' => [[['_route' => 'order_create', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/order/verify' => [[['_route' => 'order_prepare', '_controller' => 'App\\Controller\\CheckoutController::prepareOrder'], null, ['POST' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkoutttt' => [[['_route' => 'checkouttttt', '_controller' => 'App\\Controller\\DeliveryAddressController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/fcb-login' => [[['_route' => 'fcb_login', '_controller' => 'App\\Controller\\HomeController::fcbLogin'], null, null, null, false, false, null]],
        '/fcb-callback' => [[['_route' => 'fcb_callback', '_controller' => 'App\\Controller\\HomeController::fcbCallback'], null, null, null, false, false, null]],
        '/privacy-policy-facebook' => [[['_route' => 'privacy-policy-facebook', '_controller' => 'App\\Controller\\HomeController::privacy'], null, null, null, false, false, null]],
        '/newsletters' => [[['_route' => 'app_newsletters', '_controller' => 'App\\Controller\\NewslettersController::index'], null, null, null, false, false, null]],
        '/newsletters/prepare' => [[['_route' => 'newsletters_prepare', '_controller' => 'App\\Controller\\NewslettersController::prepare'], null, null, null, false, false, null]],
        '/newsletters/list' => [[['_route' => 'newsletters_list', '_controller' => 'App\\Controller\\NewslettersController::list'], null, null, null, false, false, null]],
        '/check-email' => [[['_route' => 'check_email', '_controller' => 'App\\Controller\\NewslettersController::checkEmail'], null, null, null, false, false, null]],
        '/subscription_confirm' => [[['_route' => 'newsletter_subscription_confirm', '_controller' => 'App\\Controller\\NewslettersController::subscriptionConfirm'], null, null, null, false, false, null]],
        '/unsubscribe_newsletters' => [[['_route' => 'unsubscribe_newsletters', '_controller' => 'App\\Controller\\NewslettersController::unsubscribeNewsletters'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/send_email' => [[['_route' => 'send_email_register', '_controller' => 'App\\Controller\\RegistrationController::unsubscribeNewsletters'], null, null, null, false, false, null]],
        '/confirm_after_email' => [[['_route' => 'confirm_after_email', '_controller' => 'App\\Controller\\RegistrationController::confirmUserAfterEmail'], null, null, null, false, false, null]],
        '/search' => [
            [['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null],
            [['_route' => 'search'], null, null, null, false, false, null],
        ],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/send' => [[['_route' => 'app_send_email', '_controller' => 'App\\Controller\\SendEmailController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'app_shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/order/(?'
                    .'|details/([^/]++)(*:33)'
                    .'|create\\-session\\-stripe/([^/]++)(*:72)'
                    .'|success/([^/]++)(*:95)'
                    .'|error/([^/]++)(*:116)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:161)'
                .'|/a(?'
                    .'|ddress/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|pi/stripe/payment\\-intent/([^/]++)(*:256)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(?:/([^/]++))?(*:306)'
                            .'|remove/([^/]++)(?:/([^/]++))?(*:343)'
                        .')'
                        .'|tegory/([^/]++)(*:367)'
                    .')'
                    .'|hange\\-locale/([^/]++)(*:398)'
                .')'
                .'|/search/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:450)'
                .'|/produ(?'
                    .'|ct/([^/]++)(*:478)'
                    .'|it/([^/]++)(*:497)'
                .')'
                .'|/newsletters/(?'
                    .'|confirm/([^/]++)/([^/]++)(*:547)'
                    .'|send/([^/]++)(*:568)'
                    .'|unsubscribe/([^/]++)/([^/]++)/([^/]++)(*:614)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'order_details', '_controller' => 'App\\Controller\\AccountController::detailsOrder'], ['reference'], null, null, false, true, null]],
        72 => [[['_route' => 'payment_stripe', '_controller' => 'App\\Controller\\PaymentController::index'], ['reference'], null, null, false, true, null]],
        95 => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::stripeSuccess'], ['reference'], null, null, false, true, null]],
        116 => [[['_route' => 'payment_error', '_controller' => 'App\\Controller\\PaymentController::paymentcancel'], ['reference'], null, null, false, true, null]],
        161 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\Account\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'address_show', '_controller' => 'App\\Controller\\AddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'address_edit', '_controller' => 'App\\Controller\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_stripe_payment-intent', '_controller' => 'App\\Controller\\Api\\ApiStripeController::index'], ['orderId'], ['POST' => 0], null, false, true, null]],
        306 => [[['_route' => 'app_add_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::addToCart'], ['productId', 'count'], null, null, false, true, null]],
        343 => [[['_route' => 'app_remove_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::removeToCart'], ['productId', 'count'], null, null, false, true, null]],
        367 => [[['_route' => 'show_category', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\HomeController::changeLocale'], ['locale'], null, null, false, true, null]],
        450 => [[['_route' => 'app_search_result', '_controller' => 'App\\Controller\\HomeController::search_result'], ['name', 'categorie', 'gendre', 'color'], null, null, false, true, null]],
        478 => [[['_route' => 'show', '_controller' => 'App\\Controller\\HomeController::show'], ['name'], null, null, false, true, null]],
        497 => [[['_route' => 'produit_detail', '_controller' => 'App\\Controller\\HomeController::detail'], ['id'], null, null, false, true, null]],
        547 => [[['_route' => 'newsletters_confirm', '_controller' => 'App\\Controller\\NewslettersController::confirm'], ['id', 'token'], null, null, false, true, null]],
        568 => [[['_route' => 'newsletters_send', '_controller' => 'App\\Controller\\NewslettersController::send'], ['id'], null, null, false, true, null]],
        614 => [
            [['_route' => 'newsletters_unsubscribe', '_controller' => 'App\\Controller\\NewslettersController::unsubscribe'], ['id', 'newsletter', 'token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
