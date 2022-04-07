<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/permission/index' => [[['_route' => 'permissionapp_permission_index', '_controller' => 'App\\Controller\\PermissionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/permission/new' => [[['_route' => 'permissionpermission_add', '_controller' => 'App\\Controller\\PermissionController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/profile/index' => [[['_route' => 'profilsapp_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/profile/new' => [[['_route' => 'profilsProfile_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/Users/index' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Users/new' => [[['_route' => 'User_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['PUT' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|p(?'
                        .'|ermission/(?'
                            .'|show/([^/]++)(*:45)'
                            .'|edit/([^/]++)(*:65)'
                            .'|delete/([^/]++)(*:87)'
                        .')'
                        .'|rofile/(?'
                            .'|show/([^/]++)(*:118)'
                            .'|edit/([^/]++)(*:139)'
                            .'|delete/([^/]++)(*:162)'
                        .')'
                    .')'
                    .'|Users/(?'
                        .'|show/([^/]++)(*:194)'
                        .'|([^/]++)/edit(*:215)'
                        .'|delete/([^/]++)(*:238)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:279)'
                    .'|wdt/([^/]++)(*:299)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:345)'
                            .'|router(*:359)'
                            .'|exception(?'
                                .'|(*:379)'
                                .'|\\.css(*:392)'
                            .')'
                        .')'
                        .'|(*:402)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'permissionPermission_show', '_controller' => 'App\\Controller\\PermissionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        65 => [[['_route' => 'permissionPermission_edit', '_controller' => 'App\\Controller\\PermissionController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        87 => [[['_route' => 'permissionPermission_delete', '_controller' => 'App\\Controller\\PermissionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        118 => [[['_route' => 'profilsprofil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'profilsprofil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        162 => [[['_route' => 'profilsprofil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        194 => [[['_route' => 'User_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        215 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        279 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        299 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        345 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        359 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        379 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        392 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        402 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
