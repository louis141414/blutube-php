<?php
/**
 * Blutube – configuration (InfinityFree)
 */
declare(strict_types=1);

define('DB_HOST', 'sql307.infinityfree.com');
define('DB_PORT', 3306);
define('DB_NAME', 'if0_43009643_blutube');
define('DB_USER', 'if0_43009643');
define('DB_PASS', 'WPjBFCNSSO');
define('DB_CHARSET', 'utf8mb4');

define('APP_NAME', 'Blutube');
define('APP_URL', '');
define('SESSION_NAME', 'blutube_sess');
define('CSRF_TOKEN_KEY', '_csrf');
define('PASSWORD_ALGO', PASSWORD_DEFAULT);
define('SESSION_LIFETIME', 60 * 60 * 24 * 14);
define('DEFAULT_AVATAR', 'https://ui-avatars.com/api/?background=5b8cff&color=fff&name=');
define('ITEMS_PER_PAGE', 24);

date_default_timezone_set('UTC');

// Show errors while debugging (set to 0 after site works)
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
