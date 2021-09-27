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
            'settings' => 'i,c,s,sh,e,u,d',
            'file_directories' => 'i,c,s,sh,e,u,d,ser',
            'employees' => 'i,c,s,sh,e,u,d,im,re,m,f',
            // 'employee_action_sheets' => 'i,c,s,sh,e,u,d',
            // 'employee_addresses' => 'i,c,s,sh,e,u,d',
            // 'employee_censures' => 'i,c,s,sh,e,u,d',
            // 'employee_certificates' => 'i,c,s,sh,e,u,d',
            // 'employee_children' => 'i,c,s,sh,e,u,d',
            // 'employee_educations' => 'i,c,s,sh,e,u,d',
            // 'employee_force_services' => 'i,c,s,sh,e,u,d',
            // 'employee_foreign_tours' => 'i,c,s,sh,e,u,d',
            // 'employee_gratuities' => 'i,c,s,sh,e,u,d',
            // 'employee_languages' => 'i,c,s,sh,e,u,d',
            // 'employee_local_leaves' => 'i,c,s,sh,e,u,d',
            // 'employee_public_services' => 'i,c,s,sh,e,u,d',
            // 'employee_qualifications' => 'i,c,s,sh,e,u,d',
            // 'employee_record_trackers' => 'i,c,s,sh,e,u,d',
            // 'employee_terminations' => 'i,c,s,sh,e,u,d',
            // 'employee_spouse' => 'i,c,s,sh,e,u,d',
            // 'employee_rank' => 'i,c,s,sh,e,u,d',
            // 'employee_services' => 'i,c,s,sh,e,u,d',
        ],
    ],

    'permissions_map' => [
        'i' => 'index',
        'c' => 'create',
        's' => 'store',
        'sh' => 'show',
        'e' => 'edit',
        'u' => 'update',
        'd' => 'destroy',
        'f' => 'filter',
        'ser' => 'search',
        'im' => 'import',
        're' => 'report',
        'm' => 'manage',
    ]
];
