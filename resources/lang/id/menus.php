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
            'title' => 'Manajemen Akses',

            'roles' => [
                'all'        => 'Semua Peran',
                'create'     => 'Buat Peran',
                'edit'       => 'Edit Peran',
                'management' => 'Manajemen Peran',
                'main'       => 'Peran',
            ],

            'users' => [
                'all'             => 'Semua Pengguna',
                'change-password' => 'Ubah Sandi',
                'create'          => 'Buat Pengguna',
                'deactivated'     => 'Pengguna Dinonaktifkan',
                'deleted'         => 'Pengguna Dihapus',
                'edit'            => 'Edit Pengguna',
                'main'            => 'Pengguna',
                'view'            => 'Lihat Pengguna',
            ],
        ],

        'log-viewer' => [
            'main'      => 'Pengamat Catatan',
            'dashboard' => 'Dasbor',
            'logs'      => 'Catatan',
        ],

        'sidebar' => [
            'dashboard' => 'Dasbor',
            'general'   => 'Umum',
            'system'    => 'Sistem',
        ],
    ],

    'language-picker' => [
        'language' => 'Bahasa',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar'    => 'Arab',
            'da'    => 'Denmark',
            'de'    => 'Jerman',
            'el'    => 'Yunani',
            'en'    => 'Inggris',
            'es'    => 'Spanyol',
            'fr'    => 'Perancis',
            'id'    => 'Bahasa Indonesia',
            'it'    => 'Italia',
            'nl'    => 'Belanda',
            'pt_BR' => 'Bahasa Portugis Brasil',
            'ru'    => 'Rusia',
            'sv'    => 'Swedia',
            'th'    => 'Bahasa Thai',
        ],
    ],
];
