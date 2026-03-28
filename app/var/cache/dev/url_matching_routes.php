<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\AuthController::forgotPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/circular' => [[['_route' => 'app_circular_index', '_controller' => 'App\\Controller\\CircularController::index'], null, ['GET' => 0], null, false, false, null]],
        '/circular/export' => [[['_route' => 'app_circular_export', '_controller' => 'App\\Controller\\CircularController::export'], null, ['GET' => 0], null, false, false, null]],
        '/circular/new' => [[['_route' => 'app_circular_new', '_controller' => 'App\\Controller\\CircularController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/correspondence' => [[['_route' => 'app_correspondence_index', '_controller' => 'App\\Controller\\CorrespondenceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/correspondence/export' => [[['_route' => 'app_correspondence_export', '_controller' => 'App\\Controller\\CorrespondenceController::export'], null, ['GET' => 0], null, false, false, null]],
        '/correspondence/new' => [[['_route' => 'app_correspondence_new', '_controller' => 'App\\Controller\\CorrespondenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\MainController::dashboard'], null, null, null, false, false, null]],
        '/oficio' => [[['_route' => 'app_oficio_index', '_controller' => 'App\\Controller\\OficioController::index'], null, ['GET' => 0], null, false, false, null]],
        '/oficio/template' => [[['_route' => 'app_oficio_template', '_controller' => 'App\\Controller\\OficioController::template'], null, ['GET' => 0], null, false, false, null]],
        '/oficio/import' => [[['_route' => 'app_oficio_import', '_controller' => 'App\\Controller\\OficioController::import'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oficio/export' => [[['_route' => 'app_oficio_export', '_controller' => 'App\\Controller\\OficioController::export'], null, ['GET' => 0], null, false, false, null]],
        '/oficio/new' => [[['_route' => 'app_oficio_new', '_controller' => 'App\\Controller\\OficioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/role' => [[['_route' => 'app_role_index', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/role/new' => [[['_route' => 'app_role_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/scanner' => [[['_route' => 'app_scanner_index', '_controller' => 'App\\Controller\\ScannerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/scanner/export' => [[['_route' => 'app_scanner_export', '_controller' => 'App\\Controller\\ScannerController::export'], null, ['GET' => 0], null, false, false, null]],
        '/scanner/new' => [[['_route' => 'app_scanner_new', '_controller' => 'App\\Controller\\ScannerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|ircular/([^/]++)(?'
                        .'|(*:66)'
                        .'|/edit(*:78)'
                        .'|(*:85)'
                    .')'
                    .'|orrespondence/([^/]++)(?'
                        .'|(*:118)'
                        .'|/edit(*:131)'
                        .'|(*:139)'
                    .')'
                .')'
                .'|/oficio/([^/]++)(?'
                    .'|(*:168)'
                    .'|/edit(*:181)'
                    .'|(*:189)'
                .')'
                .'|/role/([^/]++)(?'
                    .'|(*:215)'
                    .'|/edit(*:228)'
                    .'|(*:236)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:262)'
                    .'|/edit(*:275)'
                    .'|(*:283)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'app_circular_show', '_controller' => 'App\\Controller\\CircularController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        78 => [[['_route' => 'app_circular_edit', '_controller' => 'App\\Controller\\CircularController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        85 => [[['_route' => 'app_circular_delete', '_controller' => 'App\\Controller\\CircularController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        118 => [[['_route' => 'app_correspondence_show', '_controller' => 'App\\Controller\\CorrespondenceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_correspondence_edit', '_controller' => 'App\\Controller\\CorrespondenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [[['_route' => 'app_correspondence_delete', '_controller' => 'App\\Controller\\CorrespondenceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        168 => [[['_route' => 'app_oficio_show', '_controller' => 'App\\Controller\\OficioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'app_oficio_edit', '_controller' => 'App\\Controller\\OficioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'app_oficio_delete', '_controller' => 'App\\Controller\\OficioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        215 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        236 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        262 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        283 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
