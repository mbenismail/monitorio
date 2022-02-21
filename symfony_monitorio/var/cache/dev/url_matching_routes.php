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
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/profils/([^/]++)(?'
                    .'|(*:31)'
                    .'|/edit(*:43)'
                    .'|(*:50)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:89)'
                    .'|wdt/([^/]++)(*:108)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:154)'
                            .'|router(*:168)'
                            .'|exception(?'
                                .'|(*:188)'
                                .'|\\.css(*:201)'
                            .')'
                        .')'
                        .'|(*:211)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'profilsprofil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'profilsprofil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'profilsprofil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        89 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        108 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        154 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        188 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        201 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        211 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
