<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/2fa' => [[['_route' => '2fa_login', '_controller' => 'scheb_two_factor.form_controller::form'], null, null, null, false, false, null]],
        '/2fa_check' => [[['_route' => '2fa_login_check'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
        '/terms-conditions' => [[['_route' => 'terms_conditions', '_controller' => 'App\\Controller\\HomeController::terms'], null, null, null, false, false, null]],
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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/o(?'
                    .'|rder/(?'
                        .'|details/([^/]++)(*:198)'
                        .'|create\\-session\\-stripe/([^/]++)(*:238)'
                        .'|success/([^/]++)(*:262)'
                        .'|error/([^/]++)(*:284)'
                    .')'
                    .'|auth/(?'
                        .'|login/([^/]++)(*:315)'
                        .'|check/([^/]++)(*:337)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:383)'
                .'|/a(?'
                    .'|ddress/([^/]++)(?'
                        .'|(*:414)'
                        .'|/edit(*:427)'
                        .'|(*:435)'
                    .')'
                    .'|pi/stripe/payment\\-intent/([^/]++)(*:478)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(?:/([^/]++))?(*:528)'
                            .'|remove/([^/]++)(?:/([^/]++))?(*:565)'
                        .')'
                        .'|tegory/([^/]++)(*:589)'
                    .')'
                    .'|hange\\-locale/([^/]++)(*:620)'
                .')'
                .'|/search/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:672)'
                .'|/produ(?'
                    .'|ct/([^/]++)(*:700)'
                    .'|it/([^/]++)(*:719)'
                .')'
                .'|/newsletters/(?'
                    .'|confirm/([^/]++)/([^/]++)(*:769)'
                    .'|send/([^/]++)(*:790)'
                    .'|unsubscribe/([^/]++)/([^/]++)/([^/]++)(*:836)'
                .')'
                .'|/user/([^/]++)(*:859)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'order_details', '_controller' => 'App\\Controller\\AccountController::detailsOrder'], ['reference'], null, null, false, true, null]],
        238 => [[['_route' => 'payment_stripe', '_controller' => 'App\\Controller\\PaymentController::index'], ['reference'], null, null, false, true, null]],
        262 => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::stripeSuccess'], ['reference'], null, null, false, true, null]],
        284 => [[['_route' => 'payment_error', '_controller' => 'App\\Controller\\PaymentController::paymentcancel'], ['reference'], null, null, false, true, null]],
        315 => [[['_route' => 'app_oauth_login', '_controller' => 'App\\Controller\\SecurityController::connect'], ['service'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'auth_oauth_check', '_controller' => 'App\\Controller\\SecurityController::check'], ['service'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        383 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\Account\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        414 => [[['_route' => 'address_show', '_controller' => 'App\\Controller\\AddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        427 => [[['_route' => 'address_edit', '_controller' => 'App\\Controller\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        435 => [[['_route' => 'address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        478 => [[['_route' => 'app_stripe_payment-intent', '_controller' => 'App\\Controller\\Api\\ApiStripeController::index'], ['orderId'], ['POST' => 0], null, false, true, null]],
        528 => [[['_route' => 'app_add_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::addToCart'], ['productId', 'count'], null, null, false, true, null]],
        565 => [[['_route' => 'app_remove_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::removeToCart'], ['productId', 'count'], null, null, false, true, null]],
        589 => [[['_route' => 'show_category', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], null, null, false, true, null]],
        620 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\HomeController::changeLocale'], ['locale'], null, null, false, true, null]],
        672 => [[['_route' => 'app_search_result', '_controller' => 'App\\Controller\\HomeController::search_result'], ['name', 'categorie', 'gendre', 'color'], null, null, false, true, null]],
        700 => [[['_route' => 'show', '_controller' => 'App\\Controller\\HomeController::show'], ['name'], null, null, false, true, null]],
        719 => [[['_route' => 'produit_detail', '_controller' => 'App\\Controller\\HomeController::detail'], ['id'], null, null, false, true, null]],
        769 => [[['_route' => 'newsletters_confirm', '_controller' => 'App\\Controller\\NewslettersController::confirm'], ['id', 'token'], null, null, false, true, null]],
        790 => [[['_route' => 'newsletters_send', '_controller' => 'App\\Controller\\NewslettersController::send'], ['id'], null, null, false, true, null]],
        836 => [[['_route' => 'newsletters_unsubscribe', '_controller' => 'App\\Controller\\NewslettersController::unsubscribe'], ['id', 'newsletter', 'token'], null, null, false, true, null]],
        859 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
