<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tiphealth');

// Site configuration
define('SITE_URL', 'http://localhost/Tiphealth');
define('SITE_NAME', 'TIP Healthtech');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session start
session_start();

// Time zone
date_default_timezone_set('UTC');

// Database connection 
/*
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
*/ 