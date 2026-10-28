<?php
/**
 * Blutube – configuration
 * InfinityFree MySQL credentials
 */
declare(strict_types=1);

// Database (InfinityFree)
define('DB_HOST', 'sql307.infinityfree.com');
define('DB_PORT', 3306);
define('DB_NAME', 'if0_43009643_blutube');
define('DB_USER', 'if0_43009643');
define('DB_PASS', 'WPjBFCNSSO');
define('DB_CHARSET', 'utf8mb4');

// App
define('APP_NAME', 'Blutube');
define('APP_URL', ''); // leave empty for auto-detect, or set e.g. https://yoursite.infinityfreeapp.com
define('SESSION_NAME', 'blutube_sess');
define('CSRF_TOKEN_KEY', '_csrf');

// Security
define('PASSWORD_ALGO', PASSWORD_DEFAULT);
define('SESSION_LIFETIME', 60 * 60 * 24 * 14); // 14 days

// Defaults
define('DEFAULT_AVATAR', 'https://ui-avatars.com/api/?background=5b8cff&color=fff&name=');
define('ITEMS_PER_PAGE', 24);

// Timezone
date_default_timezone_set('UTC');

// Error reporting (turn off on production if you want)
error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');
