<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'file_directories' => 'v,c,e,d,ser',
            'policy_documents' => 'v,c,e,d,ser',
            'employees' => 'v,c,e,d,im,re,f',
        ],
    ],

    'permissions_map' => [
        'v' => 'view',
        'c' => 'create',
        'e' => 'edit',
        'd' => 'destroy',
        'f' => 'filter',
        'ser' => 'search',
        'im' => 'import',
        're' => 'report',
    ]
];
