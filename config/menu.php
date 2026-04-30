<?php

return [
    'sidebar' => [
        [
            'name' => 'Dashboard',
            'route' => 'order-pengambilan',
            'roles' => ['user', 'admin', 'kurir'],
            'icon' => 'assets/icon/dashboard.svg'
        ],
        [
            'name' => 'Penjemputan Sampah',
            'route' => 'order-pengambilan',
            'roles' => ['user'],
            'icon' => 'assets/icon/truck.svg'
        ],
        [
            'name' => 'Marketplace',
            'route' => 'order-pengambilan',
            'roles' => ['user'],
            'icon' => 'assets/icon/market.svg'
        ],
        [
            'name' => 'Tukar Poin',
            'route' => 'order-pengambilan',
            'roles' => ['user'],
            'icon' => 'assets/logo-ep.png'
        ],
        [
            'name' => 'Tugas Penjemputan',
            'route' => 'order-pengambilan',
            'roles' => ['admin'],
            'icon' => ''
        ],
        [
            'name' => 'Penugasan Kurir',
            'route' => 'order-pengambilan',
            'roles' => ['kurir'],
            'icon' => ''
        ],
        [
            'name' => 'Manajemen Sampah',
            'route' => 'order-pengambilan',
            'roles' => ['kurir'],
            'icon' => ''
        ],
        [
            'name' => 'Manajemen Pengguna',
            'route' => 'order-pengambilan',
            'roles' => ['kurir'],
            'icon' => ''
        ],
        [
            'name' => 'Ops Marketplace',
            'route' => 'order-pengambilan',
            'roles' => ['kurir'],
            'icon' => ''
        ],
        [
            'name' => 'Log Aktivitas',
            'route' => 'order-pengambilan',
            'roles' => ['kurir'],
            'icon' => ''
        ],
        [
            'name' => 'Riwayat',
            'route' => 'order-pengambilan',
            'roles' => ['user', 'admin'],
            'icon' => 'assets/icon/history.svg'
        ],
        [
            'name' => 'Profil',
            'route' => 'order-pengambilan',
            'roles' => ['user', 'admin', 'kurir'],
            'icon' => 'assets/icon/user.svg'
        ],
    ]
];
