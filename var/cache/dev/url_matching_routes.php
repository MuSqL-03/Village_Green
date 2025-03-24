<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories_index', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\MainAdminController::index'], null, null, null, true, false, null]],
        '/admin/produits' => [[['_route' => 'admin_products_index', '_controller' => 'App\\Controller\\Admin\\ProduitsController::index'], null, null, null, true, false, null]],
        '/admin/produits/ajout' => [[['_route' => 'admin_products_app_produits_new', '_controller' => 'App\\Controller\\Admin\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\Admin\\UsersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\Admin\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/empty' => [[['_route' => 'cart_empty', '_controller' => 'App\\Controller\\CartController::empty'], null, null, null, false, false, null]],
        '/cart/checkout' => [[['_route' => 'cart_checkout', '_controller' => 'App\\Controller\\CartController::checkout'], null, null, null, false, false, null]],
        '/cart/create-checkout-session' => [[['_route' => 'cart_stripe_checkout', '_controller' => 'App\\Controller\\CartController::createCheckoutSession'], null, null, null, false, false, null]],
        '/cart/order' => [[['_route' => 'cart_order', '_controller' => 'App\\Controller\\CartController::createOrder'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'products_index', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, true, false, null]],
        '/produits/search' => [[['_route' => 'products_search', '_controller' => 'App\\Controller\\ProductsController::search'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profil/commandes' => [[['_route' => 'profile_orders', '_controller' => 'App\\Controller\\ProfileController::orders'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|\\.well\\-known/genid/([^/]++)(*:49)'
                            .'|validation_errors/([^/]++)(*:82)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:118)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:149)'
                            .'|c(?'
                                .'|o(?'
                                    .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:194)'
                                    .'|mmandes(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:238)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:264)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:302)'
                                        .')'
                                    .')'
                                .')'
                                .'|ategories(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:351)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:377)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:415)'
                                    .')'
                                .')'
                            .')'
                            .'|errors/(\\d+)(?:\\.([^/]++))?(*:453)'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:490)'
                            .')'
                            .'|products(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:536)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:562)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:600)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:644)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:670)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:708)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/produits/(?'
                        .'|([^/]++)(*:745)'
                        .'|edition/([^/]++)(*:769)'
                        .'|suppression/([^/]++)(*:797)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:838)'
                    .'|wdt/([^/]++)(*:858)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:900)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:937)'
                                .'|router(*:951)'
                                .'|exception(?'
                                    .'|(*:971)'
                                    .'|\\.css(*:984)'
                                .')'
                            .')'
                            .'|(*:994)'
                        .')'
                    .')'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:1023)'
                    .'|/edit(*:1037)'
                    .'|(*:1046)'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:1080)'
                        .'|remove/([^/]++)(*:1104)'
                        .'|delete/([^/]++)(*:1128)'
                    .')'
                    .'|tegories/([^/]++)(*:1155)'
                .')'
                .'|/produits/slug/([^/]++)(*:1188)'
                .'|/sous/([^/]++)(*:1211)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        82 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        118 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        149 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        194 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        238 => [[['_route' => '_api_/commandes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        264 => [
            [['_route' => '_api_/commandes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commandes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        302 => [
            [['_route' => '_api_/commandes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commandes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        351 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        377 => [
            [['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categories{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categories{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        415 => [
            [['_route' => '_api_/categories/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        453 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors'], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        490 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        536 => [[['_route' => '_api_/products/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        562 => [
            [['_route' => '_api_/products{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/products{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        600 => [
            [['_route' => '_api_/products/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/products/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        644 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        670 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        708 => [
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        745 => [[['_route' => 'admin_products_app_produits_show', '_controller' => 'App\\Controller\\Admin\\ProduitsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        769 => [[['_route' => 'admin_products_app_produits_edit', '_controller' => 'App\\Controller\\Admin\\ProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        797 => [[['_route' => 'admin_products_app_produits_delete', '_controller' => 'App\\Controller\\Admin\\ProduitsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        838 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        858 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        900 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        937 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        951 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        971 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        984 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        994 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1023 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\Admin\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1037 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\Admin\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1046 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\Admin\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1080 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        1104 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        1128 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        1155 => [[['_route' => 'categories_list', '_controller' => 'App\\Controller\\CategoriesController::list'], ['slug'], null, null, false, true, null]],
        1188 => [[['_route' => 'products_details', '_controller' => 'App\\Controller\\ProductsController::details'], ['slug'], null, null, false, true, null]],
        1211 => [
            [['_route' => 'sous_categories', '_controller' => 'App\\Controller\\SousCategoriesController::list'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
