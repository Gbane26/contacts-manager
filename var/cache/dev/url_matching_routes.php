<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles.css' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact/new' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/group' => [[['_route' => 'app_group_index', '_controller' => 'App\\Controller\\GroupController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contact_list', '_controller' => 'App\\Controller\\ContactController::listContacts'], null, null, null, false, false, null]],
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
                .'|/contact/(?'
                    .'|([^/]++)(?'
                        .'|(*:225)'
                        .'|/(?'
                            .'|edit(*:241)'
                            .'|delete(*:255)'
                        .')'
                    .')'
                    .'|(\\d+)(*:270)'
                    .'|create(*:284)'
                    .'|(\\d+)/edit(*:302)'
                    .'|(\\d+)/delete(*:322)'
                .')'
                .'|/group/([^/]++)(?'
                    .'|(*:349)'
                    .'|/edit(*:362)'
                    .'|(*:370)'
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
        225 => [[['_route' => 'app_contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        241 => [[['_route' => 'app_contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        270 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::showContact'], ['id'], null, null, false, true, null]],
        284 => [[['_route' => 'contact_create', '_controller' => 'App\\Controller\\ContactController::createContact'], [], null, null, false, false, null]],
        302 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::editContact'], ['id'], null, null, false, false, null]],
        322 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::deleteContact'], ['id'], null, null, false, false, null]],
        349 => [[['_route' => 'app_group_show', '_controller' => 'App\\Controller\\GroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [
            [['_route' => 'app_group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
