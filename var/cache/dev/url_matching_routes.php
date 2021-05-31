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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
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
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/APIUser/a/p/i/user(*:262)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/APIUser/login/([^/]++)(*:367)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/APIUser/Kids/([^/]++)(*:471)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/APIUser/KidsPost/([^/]++)(*:579)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/APIUser/KidsTag/([^/]++)(*:686)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post(?'
                    .'|(*:782)'
                .')'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/new(*:880)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/(\\d+)(*:979)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/(\\d+)/edit(*:1083)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/([^/]++)/delete(*:1193)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog(*:1281)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/rss\\.xml(*:1378)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/page/([1-9]\\d*)(*:1482)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/posts/([^/]++)(*:1585)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/comment/([^/]++)/new(*:1694)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/search(*:1789)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/login(*:1878)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/logout(*:1968)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/edit(*:2064)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/change\\-password(*:2172)'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:2216)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:2248)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:2285)'
                        .'|media_objects(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:2328)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:2364)'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:2400)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:2439)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)?(*:2527)'
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
        262 => [[['_route' => 'a_p_i_user', '_controller' => 'App\\Controller\\APIUserController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        367 => [[['_route' => 'getlogin', '_controller' => 'App\\Controller\\APIUserController::getlogin', '_locale' => 'en'], ['_locale', 'username'], null, null, false, true, null]],
        471 => [[['_route' => 'getUserById', '_controller' => 'App\\Controller\\APIUserController::getKidsById', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        579 => [[['_route' => 'getPostsByKidId', '_controller' => 'App\\Controller\\APIUserController::getPostsByKidId', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        686 => [[['_route' => 'getkidBytag', '_controller' => 'App\\Controller\\APIUserController::getKidsBytag', '_locale' => 'en'], ['_locale', 'tag'], null, null, false, true, null]],
        782 => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
        ],
        880 => [[['_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        979 => [[['_route' => 'admin_post_show', '_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        1083 => [[['_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1193 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1281 => [[['_route' => 'blog_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1378 => [[['_route' => 'blog_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1482 => [[['_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        1585 => [[['_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        1694 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['_locale', 'postSlug'], ['POST' => 0], null, false, false, null]],
        1789 => [[['_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1878 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1968 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2064 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2172 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2216 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        2248 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        2285 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        2328 => [
            [['_route' => 'api_media_objects_post_collection', '_controller' => 'App\\Controller\\CreateMediaObjectAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_media_objects_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        2364 => [[['_route' => 'api_media_objects_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2400 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2439 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2527 => [
            [['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
