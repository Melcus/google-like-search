<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Gestion des accès',

            'roles' => [
                'all'        => 'Tous les rôles',
                'create'     => 'Créer un rôle',
                'edit'       => 'Éditer un rôle',
                'management' => 'Gestion des rôles',
                'main'       => 'Rôles',
            ],

            'users' => [
                'all'             => 'Tous les utilisateurs',
                'change-password' => 'Changer le mot de passe',
                'create'          => 'Créer un utilisateur',
                'deactivated'     => 'Utilisateurs désactivés',
                'deleted'         => 'Utilisateurs supprimés',
                'edit'            => 'Éditer un utilisateur',
                'main'            => 'Utilisateurs',
                'view'            => "Voir l'utilisateur",
            ],
        ],

        'log-viewer' => [
            'main'      => 'Consulter les logs',
            'dashboard' => 'Tableau de bord',
            'logs'      => 'Logs',
        ],

        'sidebar' => [
            'dashboard' => 'Tableau de bord',
            'general'   => 'Général',
            'system'    => 'Système',
        ],
    ],

    'language-picker' => [
        'language' => 'Langue',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar'    => 'العربية (Arabic)',
            'da'    => 'Danois (Danish)',
            'de'    => 'Allemand (German)',
            'el'    => 'Grec (Greek)',
            'en'    => 'Anglais (English)',
            'es'    => 'Espagnol  (Spanish)',
            'fr'    => 'Français (French)',
            'id'    => 'Indonésien (Indonesian)',
            'it'    => 'Italien (Italian)',
            'nl'    => 'Hollandais (Dutch)',
            'pt_BR' => 'Portugais (Brazilian Portuguese)',
            'ru'    => 'Russe (Russian)',
            'sv'    => 'Suédois (Swedish)',
            'th'    => 'Thaïlandais (Thai)',
        ],
    ],
];
