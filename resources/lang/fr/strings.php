<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm'  => "Êtes-vous sûr de vouloir supprimer cet utilisateur de façon permanente ? Toutes  les références à cet utilisateur dans l'application peuvent provoquer des erreurs et cette opération ne peut être annullée.",
                'if_confirmed_off'     => '(pour le mode sans confirmation)',
                'restore_user_confirm' => 'Restaurer cet utilisateur à son statut original ?',
            ],
        ],

        'dashboard' => [
            'title'   => 'Tableau de bord administrateur',
            'welcome' => 'Bienvenue',
        ],

        'general' => [
            'all_rights_reserved' => 'Tous droits réservés.',
            'are_you_sure'        => 'Etes-vous sûr?',
            'boilerplate_link'    => 'Laravel 5 Boilerplate',
            'continue'            => 'Continuer',
            'member_since'        => 'Membre depuis',
            'minutes'             => ' minutes',
            'search_placeholder'  => 'Rechercher...',
            'timeout'             => 'Vous avez été automatiquement déconnecté pour cause d\'inactivité pendant ',

            'see_all' => [
                'messages'      => 'Voir tous les messages',
                'notifications' => 'Voir toutes les notifications',
                'tasks'         => 'Voir les nouvelles tâches',
            ],

            'status' => [
                'online'  => 'En ligne',
                'offline' => 'Hors ligne',
            ],

            'you_have' => [
                'messages'      => "{0} Vous n'avez pas de message|{1} Vous avez 1 message|[2,Inf] Vous avez :number messages",
                'notifications' => "{0} Vous n'avez pas de notification|{1} Vous avez 1 notification|[2,Inf] Vous avez :number notifications",
                'tasks'         => "{0} Vous n'avez pas de tâche affectée|{1} Vous avez 1 tâche affectée|[2,Inf] Vous avez :number tâches affectées",
            ],
        ],

        'search' => [
            'empty'      => 'Veuillez entrer un terme de recherche.',
            'incomplete' => 'Vous devez mettre en place votre propre logique pour ce système.',
            'title'      => 'Résultats de recherche',
            'results'    => 'Résultats de la recherche :query',
        ],

        'welcome' => '<p>Le thème AdminLTE est créé par <a href="https://almsaeedstudio.com/" target="_blank">https://almsaeedstudio.com/</a>. Ceci est une version allégée avec seulement les styles et les scripts nécessaires pour le faire fonctionner. Téléchargez la version complète pour commencer à ajouter des composants à votre tableau de bord.</p>
<p>Toutes les fonctionnalités sont dédiées à l\'affichage, à l\'exception de la <strong>Gestion des utilisateurs</strong> à gauche. Ce projet boilerplate est livré avec une bibliothèque de contrôle d\'accès entièrement fonctionnelle pour gérer les utilisateurs / rôles / permmissions.</p>
<p>Gardez à l\'esprit que c\'est un travail en cours et qu\'il peut subsister quelques anomalies ou bugs qui n\'ont pas été corrigés. Je ferai de mon mieux pour y remédier.</p>
<p>J\'espère que vous apprécierez le travail que j\'ai mis dans ce projet. Visitez la page <a href="https://github.com/rappasoft/laravel-5-boilerplate" target="_blank">GitHub</a> pour plus d\'informations et enregistrez les <a href="https://github.com/rappasoft/Laravel-5-Boilerplate/issues" target="_blank">anomalies ici</a>.</p>
<p><strong>Ce projet demande beaucoup d\'efforts au vu du rythme soutenu des changements apportés à la branche master de Laravel, toute aide est bienvenue.</strong></p>
<p>- Anthony Rappa</p>',
    ],

    'emails' => [
        'auth' => [
            'error'                   => 'Oups!',
            'greeting'                => 'Bonjour!',
            'regards'                 => 'Salutations,',
            'trouble_clicking_button' => "Si vous ne pouvez pas cliquer sur le bouton ':action_text', copiez et collez l'URL ci-dessous dans un navigateur:",
            'thank_you_for_using_app' => "Merci d'utiliser notre application!",

            'password_reset_subject'    => 'Votre lien de réinitialisation',
            'password_cause_of_email'   => 'Vous recevez cet email car nous avons reçu une demande de réinitialisation de mot de passe pour ce compte.',
            'password_if_not_requested' => "Si vous n'avez pas effectué cette demande, aucune autre action n'est requise.",
            'reset_password'            => 'Cliquez ici pour réinitialiser votre mot de passe',

            'click_to_confirm' => 'Cliquez ici pour confirmer votre compte :',
        ],
    ],

    'frontend' => [
        'test' => 'Test',

        'tests' => [
            'based_on' => [
                'permission' => 'Helper sur la base de la permissions : ',
                'role'       => 'Helper sur la base du rôle : ',
            ],

            'js_injected_from_controller' => 'Javascript injecté depuis un contrôleur',

            'using_blade_extensions' => 'Utilisation des extensions Blade',

            'using_access_helper' => [
                'array_permissions'     => "L'utilisateur doit disposer de toutes les permissions d'un tableau, identifiées soit par leur ID, soit par leur nom.",
                'array_permissions_not' => "L'utilisateur doit disposer d'au moins une des permissions d'un tableau, identifiées soit par leur ID, soit par leur nom.",
                'array_roles'           => "L'utilisateur doit disposer de tous les rôles d'un tableau, identifiés soit par leur ID, soit par leur nom.",
                'array_roles_not'       => "L'utilisateur doit disposer d'au moins un des rôles d'un tableau, identifiés soit par leur ID, soit par leur nom.",
                'permission_id'         => "L'utilisateur doit disposer d'une permission identifiée par son ID",
                'permission_name'       => "L'utilisateur doit disposer d'une permission identifiée par son nom",
                'role_id'               => "L'utilisateur doit disposer d'un rôle identifié par son ID",
                'role_name'             => "L'utilisateur doit disposer d'un rôle identifié par son nom",
            ],

            'view_console_it_works'          => 'Sur la console du navigateur, vous devriez voir  \'it works!\', ce qui est produit depuis le FrontendController@index',
            'you_can_see_because'            => 'Vous voyez ce message car vous disposez du rôle \':role\'!',
            'you_can_see_because_permission' => 'Vous voyez ce message car vous disposez de la permission \':permission\'!',
        ],

        'user' => [
            'change_email_notice' => 'If you change your e-mail you will be logged out until you confirm your new e-mail address.',
            'email_changed_notice' => 'You must confirm your new e-mail address before you can log in again.',
            'profile_updated'  => 'Profil modifié avec succès.',
            'password_updated' => 'Mot de passe modifié avec succès.',
        ],

        'welcome_to' => 'Bienvenue sur :place',
    ],
];
