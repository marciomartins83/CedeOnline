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
        '/admin/audit' => [[['_route' => 'admin_audit_index', '_controller' => 'App\\Controller\\Admin\\AuditController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/modulos' => [[['_route' => 'admin_modulo_index', '_controller' => 'App\\Controller\\Admin\\ModuloController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/modulos/new' => [[['_route' => 'admin_modulo_new', '_controller' => 'App\\Controller\\Admin\\ModuloController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/permissoes' => [[['_route' => 'admin_permissao_index', '_controller' => 'App\\Controller\\Admin\\PermissaoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/permissoes/new' => [[['_route' => 'admin_permissao_new', '_controller' => 'App\\Controller\\Admin\\PermissaoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/caixa' => [[['_route' => 'caixa_index', '_controller' => 'App\\Controller\\Caixa\\CaixaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/caixa/new' => [[['_route' => 'caixa_new', '_controller' => 'App\\Controller\\Caixa\\CaixaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|audit/(?'
                        .'|user/([^/]++)(*:234)'
                        .'|entity/([^/]++)(*:257)'
                        .'|module/([^/]++)(*:280)'
                    .')'
                    .'|modulos/([^/]++)(?'
                        .'|(*:308)'
                        .'|/edit(*:321)'
                        .'|(*:329)'
                    .')'
                    .'|permissoes/(?'
                        .'|([^/]++)(?'
                            .'|(*:363)'
                            .'|/edit(*:376)'
                            .'|(*:384)'
                        .')'
                        .'|usuario/([^/]++)(*:409)'
                    .')'
                    .'|users/([^/]++)(?'
                        .'|(*:435)'
                        .'|/edit(*:448)'
                        .'|(*:456)'
                    .')'
                .')'
                .'|/caixa/([^/]++)(?'
                    .'|(*:484)'
                    .'|/edit(*:497)'
                    .'|(*:505)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        234 => [[['_route' => 'admin_audit_user', '_controller' => 'App\\Controller\\Admin\\AuditController::userActivity'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'admin_audit_entity', '_controller' => 'App\\Controller\\Admin\\AuditController::entityActivity'], ['entidade'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'admin_audit_module', '_controller' => 'App\\Controller\\Admin\\AuditController::moduleActivity'], ['modulo'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'admin_modulo_show', '_controller' => 'App\\Controller\\Admin\\ModuloController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'admin_modulo_edit', '_controller' => 'App\\Controller\\Admin\\ModuloController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'admin_modulo_delete', '_controller' => 'App\\Controller\\Admin\\ModuloController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        363 => [[['_route' => 'admin_permissao_show', '_controller' => 'App\\Controller\\Admin\\PermissaoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        376 => [[['_route' => 'admin_permissao_edit', '_controller' => 'App\\Controller\\Admin\\PermissaoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        384 => [[['_route' => 'admin_permissao_delete', '_controller' => 'App\\Controller\\Admin\\PermissaoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        409 => [[['_route' => 'admin_permissao_usuario', '_controller' => 'App\\Controller\\Admin\\PermissaoController::permissoesUsuario'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        435 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        448 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        456 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        484 => [[['_route' => 'caixa_show', '_controller' => 'App\\Controller\\Caixa\\CaixaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'caixa_edit', '_controller' => 'App\\Controller\\Caixa\\CaixaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [
            [['_route' => 'caixa_delete', '_controller' => 'App\\Controller\\Caixa\\CaixaController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
