<?php
$lang = [
    'en' => [
        'nav_home' => 'Home',
        'nav_services' => 'Services',
        'nav_about' => 'About',
        'nav_contact' => 'Contact',
        // Add more translations
    ],
    'sw' => [
        'nav_home' => 'Nyumbani',
        'nav_services' => 'Huduma',
        'nav_about' => 'Kuhusu',
        'nav_contact' => 'Wasiliana',
        // Add more translations
    ]
];

$_SESSION['lang'] = $_SESSION['lang'] ?? 'en';
$currentLang = $lang[$_SESSION['lang']]; 