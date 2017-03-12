<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute skal accepteres.',
    'active_url'           => ':attribute er ikke en gyldig adresse.',
    'after'                => ':attribute skal være en dato efter :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':attribute må kun indeholde bogstaver.',
    'alpha_dash'           => ':attribute må kun indeholde bogstaver, tal og mellemstreger.',
    'alpha_num'            => ':attribute må kun indeholde bogstaver og tal.',
    'array'                => ':attribute skal være en liste.',
    'before'               => ':attribute skal være en dato før :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ':attribute skal være mellem :min og :max.',
        'file'    => ':attribute skal være mellem :min og :max kilobytes.',
        'string'  => ':attribute skal være mellem :min og :max tegn.',
        'array'   => ':attribute skal have mellem :min og :max elementer.',
    ],
    'boolean'              => ':attribute skal være sandt eller falsk.',
    'confirmed'            => ':attribute bekræftelse passer ikke sammen.',
    'date'                 => ':attribute er ikke en gyldig dato.',
    'date_format'          => ':attribute passer ikke til formatet :format.',
    'different'            => ':attribute og :other skal være forskellige.',
    'digits'               => ':attribute skal være på :digits cifre.',
    'digits_between'       => ':attribute skal være mellem :min og :max cifre.',
    'dimensions'           => ':attribute har ugyldige dimensioner.',
    'distinct'             => ':attribute skal være unik.',
    'email'                => ':attribute skal være en gyldig e-mailaddresse.',
    'exists'               => ':attribute findes ikke.',
    'file'                 => ':attribute skal være en fil.',
    'filled'               => ':attribute skal udfyldes.',
    'image'                => ':attribute skal være et billed.',
    'in'                   => ':attribute er ikke gyldig.',
    'in_array'             => ':attribute findes ikke i :other.',
    'integer'              => ':attribute skal være et heltal.',
    'ip'                   => ':attribute skal være en gyldig IP-adresse.',
    'json'                 => ':attribute skal være gyldig JSON format.',
    'max'                  => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file'    => ':attribute må ikke være større end :max kilobytes.',
        'string'  => ':attribute må ikke være længere end :max tegn.',
        'array'   => ':attribute må ikke have flere end :max elementer.',
    ],
    'mimes'                => ':attribute skal være filtypen: :values.',
    'min'                  => [
        'numeric' => ':attribute skal være mindst :min.',
        'file'    => ':attribute skal være mindst :min kilobytes.',
        'string'  => ':attribute skal mindts være :min tegn.',
        'array'   => ':attribute skal have mindst :min elementer.',
    ],
    'not_in'               => ':attribute er ikke gyldig.',
    'numeric'              => ':attribute skal være et tal.',
    'present'              => 'Feltet :attribute mangler.',
    'regex'                => ':attribute er ikke et gyldigt format.',
    'required'             => ':attribute er påkrævet.',
    'required_if'          => ':attribute er påkrævet når :other er :value.',
    'required_unless'      => ':attribute er påkrævet med mindre :other er :values.',
    'required_with'        => ':attribute er påkrævet når :values er tilgængelig.',
    'required_with_all'    => ':attribute er påkrævet når :values er tilgængelig.',
    'required_without'     => ':attribute er påkrævet når :values ikke er tilgængelig.',
    'required_without_all' => ':attribute er påkrævet når ingen af værdierne :values er tilgængelig.',
    'same'                 => ':attribute og :other skal være ens.',
    'size'                 => [
        'numeric' => ':attribute skal være :size.',
        'file'    => ':attribute skal være :size kilobytes.',
        'string'  => ':attribute skal have :size tegn.',
        'array'   => ':attribute skal indeholde :size elementer.',
    ],
    'string'               => ':attribute skal være tekst.',
    'timezone'             => ':attribute skal være en gyldig tidszone.',
    'unique'               => ':attribute er allerede i brug.',
    'url'                  => ':attribute er ikke i det rigtige format.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Tilknyttede Roller',
                    'dependencies'     => 'Afhængigheder',
                    'display_name'     => 'Visningsnavn',
                    'group'            => 'Gruppe',
                    'group_sort'       => 'Gruppesortering',

                    'groups' => [
                        'name' => 'Gruppenavn',
                    ],

                    'name'   => 'Navn',
                    'system' => 'System?',
                ],

                'roles' => [
                    'associated_permissions' => 'Tilknyttede Rettigheder',
                    'name'                   => 'Navn',
                    'sort'                   => 'Sortér',
                ],

                'users' => [
                    'active'                  => 'Aktiv',
                    'associated_roles'        => 'Tilknyttede Roller',
                    'confirmed'               => 'Bekræftet',
                    'email'                   => 'E-mailadresse',
                    'name'                    => 'Navn',
                    'other_permissions'       => 'Andre Rettigheder',
                    'password'                => 'Adgangskode',
                    'password_confirmation'   => 'Bekræft adgangskode',
                    'send_confirmation_email' => 'Send bekræfelsesmail',
                ],
            ],
        ],

        'frontend' => [
            'email'                     => 'E-mailadresse',
            'name'                      => 'Navn',
            'password'                  => 'Adgangskode',
            'password_confirmation'     => 'Bekræft adgangskode',
            'old_password'              => 'Gammel adgangskode',
            'new_password'              => 'Ny adgangskode',
            'new_password_confirmation' => 'Bekræft ny adgangskode',
        ],
    ],
];
