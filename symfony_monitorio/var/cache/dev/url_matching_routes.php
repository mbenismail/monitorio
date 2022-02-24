<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/profils' => [[['_route' => 'profilsprofil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/profil/new' => [[['_route' => 'profilsprofil_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/Users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Users/new' => [[['_route' => 'User_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|profils/([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|Users/([^/]++)(?'
                        .'|(*:78)'
                        .'|/edit(*:90)'
                        .'|(*:97)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:137)'
                    .'|wdt/([^/]++)(*:157)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:203)'
                            .'|router(*:217)'
                            .'|exception(?'
                                .'|(*:237)'
                                .'|\\.css(*:250)'
                            .')'
                        .')'
                        .'|(*:260)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'profilsprofil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'profilsprofil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'profilsprofil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        78 => [[['_route' => 'User_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        97 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        137 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        157 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        237 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        250 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        260 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
