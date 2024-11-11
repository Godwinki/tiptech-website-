<?php
session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
    
    // Store the current URL without the lang parameter
    $redirect = preg_replace('/(&?lang=[^&]*)/', '', $_SERVER['REQUEST_URI']);
    header("Location: $redirect");
    exit;
}

// Set default language if not set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Load language file
$langFile = "languages/{$_SESSION['lang']}.php";
if (file_exists($langFile)) {
    require_once $langFile;
} else {
    require_once "languages/en.php";
}
?> 