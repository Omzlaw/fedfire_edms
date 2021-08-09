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
            'users' => 'c,r,u,d',
            'settings' => 'c,r,u,d',
            'file_directories' => 'c,r,u,d',
            'employees' => 'c,r,u,d',
            'employee_action_sheets' => 'c,r,u,d',
            'employee_addresses' => 'c,r,u,d',
            'employee_censures' => 'c,r,u,d',
            'employee_certificates' => 'c,r,u,d',
            'employee_children' => 'c,r,u,d',
            'employee_educations' => 'c,r,u,d',
            'employee_force_services' => 'c,r,u,d',
            'employee_foreign_tours' => 'c,r,u,d',
            'employee_gratuities' => 'c,r,u,d',
            'employee_languages' => 'c,r,u,d',
            'employee_local_leaves' => 'c,r,u,d',
            'employee_public_services' => 'c,r,u,d',
            'employee_qualifications' => 'c,r,u,d',
            'employee_record_trackers' => 'c,r,u,d',
            'employee_terminations' => 'c,r,u,d',
            'employee_spouse' => 'c,r,u,d',
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'file_directories' => 'c,r,u,d',
            'employees' => 'c,r,u,d',
            'employee_action_sheets' => 'c,r,u,d',
            'employee_addresses' => 'c,r,u,d',
            'employee_censures' => 'c,r,u,d',
            'employee_certificates' => 'c,r,u,d',
            'employee_children' => 'c,r,u,d',
            'employee_educations' => 'c,r,u,d',
            'employee_force_services' => 'c,r,u,d',
            'employee_foreign_tours' => 'c,r,u,d',
            'employee_gratuities' => 'c,r,u,d',
            'employee_languages' => 'c,r,u,d',
            'employee_local_leaves' => 'c,r,u,d',
            'employee_public_services' => 'c,r,u,d',
            'employee_qualifications' => 'c,r,u,d',
            'employee_record_trackers' => 'c,r,u,d',
            'employee_terminations' => 'c,r,u,d',
            'employee_spouse' => 'c,r,u,d',

        ],
        'user' => [

        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
