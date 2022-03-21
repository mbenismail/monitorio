<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'profilsapp_profil_index' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/api/profile/index']], [], [], []],
    'profilsprofil_new' => [[], ['_controller' => 'App\\Controller\\ProfilController::new'], [], [['text', '/api/profile/new']], [], [], []],
    'profilsprofil_show' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/profile']], [], [], []],
    'profilsprofil_edit' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/profile/edit']], [], [], []],
    'profilsprofil_delete' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/profile/delete']], [], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/api/Users/index']], [], [], []],
    'User_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/api/Users/new']], [], [], []],
    'User_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/Users/show']], [], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/Users']], [], [], []],
    'users_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/Users/delete']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app.swagger_ui' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
