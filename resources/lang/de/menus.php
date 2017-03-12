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
            'title' => 'Zugriffsverwaltung',

            'roles' => [
                'all'        => 'Alle Rollen',
                'create'     => 'Rolle erstellen',
                'edit'       => 'Rolle bearbeiten',
                'management' => 'Rollen Verwalten',
                'main'       => 'Rollen',
            ],

            'users' => [
                'all'             => 'Alle Benutzer',
                'change-password' => 'Passwort ändern',
                'create'          => 'Benutzer erstellen',
                'deactivated'     => 'Deaktivierte Benutzer',
                'deleted'         => 'Gelöschte Benutzer',
                'edit'            => 'Benutzer bearbeiten',
                'main'            => 'Benutzer',
                'view'            => 'View User',
            ],
        ],

        'log-viewer' => [
            'main'      => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs'      => 'Logs',
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general'   => 'Allgemein',
            'system'    => 'System',
        ],
    ],

    'language-picker' => [
        'language' => 'Sprache',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar'    => 'العربية (Arabic)',
            'da'    => 'Danish (Danish)',
            'de'    => 'Deutsch (German)',
            'el'    => '(Greek)',
            'en'    => 'Englisch (English)',
            'es'    => 'Spanisch (Spanish)',
            'fr'    => 'Französisch (French)',
            'id'    => 'Indonesisch (Indonesian)',
            'it'    => 'Italienisch (Italian)',
            'nl'    => 'Niederlandisch (Dutch)',
            'pt_BR' => 'Brasilianisches Portugiesisch (Brazilian Portuguese)',
            'ru'    => 'Russisch (Russian)',
            'sv'    => 'Schwedisch (Swedish)',
            'th'    => 'Thai',
        ],
    ],
];
