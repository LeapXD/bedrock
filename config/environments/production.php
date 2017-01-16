<?php
/** Production */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
/** Disable all file modifications including updates and update notifications */
define('DISALLOW_FILE_MODS', false);

/**
 * Mailgun settings
 */
define('MAILGUN_USEAPI', true);
define('MAILGUN_APIKEY', 'key-fae041203f6618ee3655bcd940da2e0f');
define('MAILGUN_DOMAIN', 'mg.leapxd.com');
