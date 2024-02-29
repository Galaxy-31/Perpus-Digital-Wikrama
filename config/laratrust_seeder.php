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
        'Admin' => [
            'bukus' => 'c,r,u,d',
            'anggotas' => 'c,r,u,d',
            'peminjamans' => 'c,r,u,d',
            'historis' => 'c,r,u,d',
        ],
        'Petugas' => [
            'bukus' => 'c,r,u,d',
            'anggotas' => 'c,r,u,d',
            'peminjamans' => 'c,r,u,d',
            'historis' => 'c,r,u,d',
        ],
        'User' => [
            'peminjamans' => 'c',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
