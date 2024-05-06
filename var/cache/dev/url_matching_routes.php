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
        '/emargement/api' => [[['_route' => 'app_emargement_api', '_controller' => 'App\\Controller\\EmargementApiController::index'], null, null, null, false, false, null]],
        '/api/formation' => [[['_route' => 'api_formation_list', '_controller' => 'App\\Controller\\EmargementApiController::getFormationList'], null, ['GET' => 0], null, false, false, null]],
        '/emarger' => [[['_route' => 'app_emarger_index', '_controller' => 'App\\Controller\\EmargerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/emarger/new' => [[['_route' => 'app_emarger_new', '_controller' => 'App\\Controller\\EmargerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/matiere/api' => [[['_route' => 'app_matiere_api', '_controller' => 'App\\Controller\\MatiereApiController::index'], null, null, null, false, false, null]],
        '/api/matiere' => [
            [['_route' => 'api_matiere_list', '_controller' => 'App\\Controller\\MatiereApiController::getMatiereList'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_album_new', '_controller' => 'App\\Controller\\MatiereApiController::newAlbum'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/profil' => [[['_route' => 'api_profil', '_controller' => 'App\\Controller\\MatiereApiController::getProfil'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, false, false, null]],
        '/eleve' => [[['_route' => 'app_eleve', '_controller' => 'App\\Controller\\EleveController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formateur' => [[['_route' => 'app_formateur', '_controller' => 'App\\Controller\\FormateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/formation' => [[['_route' => 'app_formation_index', '_controller' => 'App\\Controller\\FormationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/formation/new' => [[['_route' => 'app_formation_new', '_controller' => 'App\\Controller\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/promotion' => [[['_route' => 'app_promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/promotion/new' => [[['_route' => 'app_promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/inscription' => [[['_route' => 'app_inscription_index', '_controller' => 'App\\Controller\\InscriptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/inscription/new' => [[['_route' => 'app_inscription_new', '_controller' => 'App\\Controller\\InscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/session' => [[['_route' => 'app_session_index', '_controller' => 'App\\Controller\\SessionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/session/new' => [[['_route' => 'app_session_new', '_controller' => 'App\\Controller\\SessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/emploi' => [[['_route' => 'app_emploi_admin', '_controller' => 'App\\Controller\\EmploiTempsController::adminIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formateur/emploi' => [[['_route' => 'app_emploi_formateur', '_controller' => 'App\\Controller\\EmploiTempsController::formateurIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eleve/emploi' => [[['_route' => 'app_emploi_eleve', '_controller' => 'App\\Controller\\EmploiTempsController::eleveIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eleve/mes-emargement' => [[['_route' => 'app_emargement_eleve', '_controller' => 'App\\Controller\\EmargementController::emargementEleve'], null, ['GET' => 0], null, true, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
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
                .'|/emarger/([^/]++)(?'
                    .'|(*:222)'
                    .'|/edit(*:235)'
                    .'|(*:243)'
                .')'
                .'|/a(?'
                    .'|pi/matiere/([^/]++)(*:276)'
                    .'|dmin/(?'
                        .'|utilisateur/([^/]++)(?'
                            .'|(*:315)'
                            .'|/edit(*:328)'
                            .'|(*:336)'
                        .')'
                        .'|formation/([^/]++)(?'
                            .'|(*:366)'
                            .'|/edit(*:379)'
                            .'|(*:387)'
                        .')'
                        .'|promotion/([^/]++)(?'
                            .'|(*:417)'
                            .'|/edit(*:430)'
                            .'|(*:438)'
                        .')'
                        .'|inscription/([^/]++)(?'
                            .'|/edit(*:475)'
                            .'|(*:483)'
                        .')'
                        .'|session/([^/]++)(?'
                            .'|(*:511)'
                            .'|/edit(*:524)'
                            .'|(*:532)'
                        .')'
                        .'|emargement/show/([^/]++)(*:565)'
                    .')'
                .')'
                .'|/formateur/emargement/(?'
                    .'|([^/]++)(*:608)'
                    .'|show/([^/]++)(*:629)'
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
        222 => [[['_route' => 'app_emarger_show', '_controller' => 'App\\Controller\\EmargerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_emarger_edit', '_controller' => 'App\\Controller\\EmargerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'app_emarger_delete', '_controller' => 'App\\Controller\\EmargerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        276 => [[['_route' => 'api_album_get', '_controller' => 'App\\Controller\\MatiereApiController::getMatiere'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        328 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        336 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_formation_show', '_controller' => 'App\\Controller\\FormationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'app_formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'app_promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        475 => [[['_route' => 'app_inscription_edit', '_controller' => 'App\\Controller\\InscriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'app_inscription_delete', '_controller' => 'App\\Controller\\InscriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_session_show', '_controller' => 'App\\Controller\\SessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        524 => [[['_route' => 'app_session_edit', '_controller' => 'App\\Controller\\SessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        532 => [[['_route' => 'app_session_delete', '_controller' => 'App\\Controller\\SessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_emargement_show_admin', '_controller' => 'App\\Controller\\EmargementController::emargementShow'], ['id'], ['GET' => 0], null, false, true, null]],
        608 => [[['_route' => 'app_emargement_edit', '_controller' => 'App\\Controller\\EmargementController::emargementEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        629 => [
            [['_route' => 'app_emargement_show', '_controller' => 'App\\Controller\\EmargementController::emargementShow'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
