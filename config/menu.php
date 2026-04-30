<?php

return [
    'sidebar' => [
        [
            'name' => 'Dashboard',
            'route' => 'getJenisSampah',
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
            'route' => 'getJenisSampah',
            'roles' => ['user'],
            'icon' => 'assets/icon/market.svg'
        ],
        [
            'name' => 'Tukar Poin',
            'route' => 'getJenisSampah',
            'roles' => ['user'],
            'icon' => 'assets/logo-ep.png'
        ],
        [
            'name' => 'Tugas Penjemputan',
            'route' => 'tugas-kurir',
            'roles' => ['kurir'],
            'icon' => 'assets/icon/task.svg'
        ],
        [
            'name' => 'Penugasan Kurir',
            'route' => 'order-pengambilan',
            'roles' => ['admin'],
            'icon' => ''
        ],
        [
            'name' => 'Manajemen Sampah',
            'route' => 'order-pengambilan',
            'roles' => ['admin'],
            'icon' => ''
        ],
        [
            'name' => 'Manajemen Pengguna',
            'route' => 'order-pengambilan',
            'roles' => ['admin'],
            'icon' => ''
        ],
        [
            'name' => 'Ops Marketplace',
            'route' => 'order-pengambilan',
            'roles' => ['admin'],
            'icon' => ''
        ],
        [
            'name' => 'Log Aktivitas',
            'route' => 'order-pengambilan',
            'roles' => ['admin'],
            'icon' => ''
        ],
        [
            'name' => 'Riwayat',
            'route' => 'getJenisSampah',
            'roles' => ['user', 'admin', 'kurir'],
            'icon' => 'assets/icon/history.svg'
        ],
        [
            'name' => 'Profil',
            'route' => 'getJenisSampah',
            'roles' => ['user', 'admin', 'kurir'],
            'icon' => 'assets/icon/user.svg'
        ],
    ]
];
