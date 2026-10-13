<?php
/**
 * Configuration Template for Reyal Solutions / Booking Application
 *
 * To customize your local or production environment:
 * 1. Copy this file to 'config.local.php'
 * 2. Update your database and environment settings below
 * 3. Never commit 'config.local.php' to version control
 */

// Determine Environment
$httpHost = $_SERVER['HTTP_HOST'] ?? 'localhost';
$hostOnly = strtolower(explode(':', $httpHost)[0]);
$isLocal  = in_array($hostOnly, ['localhost', '127.0.0.1', '::1'])
            || (substr($hostOnly, -5) === '.test')
            || (substr($hostOnly, -6) === '.local')
            || (php_sapi_name() === 'cli' && (!isset($_SERVER['HTTP_HOST']) || $_SERVER['HTTP_HOST'] === 'localhost'));

// Check for local server overrides if config.local.php exists
$localConfigFile = __DIR__ . '/config.local.php';
if (file_exists($localConfigFile)) {
    require_once $localConfigFile;
}

// Environment defaults
if ($isLocal) {
    if (!defined('APP_ENV')) define('APP_ENV', 'development');
    if (!defined('APP_DEBUG')) define('APP_DEBUG', true);
    if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
    if (!defined('DB_USER')) define('DB_USER', 'root');
    if (!defined('DB_PASS')) define('DB_PASS', '');
    if (!defined('DB_NAME')) define('DB_NAME', 'booking');
    if (!defined('DB_PORT')) define('DB_PORT', 3306);
} else {
    // Production defaults (InfinityFree values should be set in config.local.php on server)
    if (!defined('APP_ENV')) define('APP_ENV', 'production');
    if (!defined('APP_DEBUG')) define('APP_DEBUG', false);
    if (!defined('DB_HOST')) define('DB_HOST', 'sqlXXX.infinityfree.com');
    if (!defined('DB_USER')) define('DB_USER', 'if0_XXXXXXXX');
    if (!defined('DB_PASS')) define('DB_PASS', 'your_password');
    if (!defined('DB_NAME')) define('DB_NAME', 'if0_XXXXXXXX_booking');
    if (!defined('DB_PORT')) define('DB_PORT', 3306);
}

// Error reporting based on environment
if (defined('APP_DEBUG') && APP_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
}
