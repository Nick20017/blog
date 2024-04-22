<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/login-check' => [[['_route' => 'app_login_check', '_controller' => 'App\\Controller\\LoginController::loginCheck'], null, null, null, false, false, null]],
        '/lista' => [[['_route' => 'app_post', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/posts' => [[['_route' => 'app_post_getposts', '_controller' => 'App\\Controller\\PostController::getPosts'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/post/delete(?:/([^/]++))?(*:33)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [
            [['_route' => 'app_post_deletepost', 'id' => null, '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
