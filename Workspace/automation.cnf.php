<?php

/* 
 * Server configuration file
 */


/*
 * Browser setup
 *
 */
 
define('SELENIUM_HOST', 'localhost');
//define('SELENIUM_HOST', 'selenium010.avangate.local');
define('SELENIUM_PORT', 4444);
define('MY_BROWSER', 'chrome'); //firefox internetExplorer microsoftEdge chrome

/* 
 * Testing sandbox 
 */
define('MY_HOST_NAME', 'sandbox14');
define('BASE_URL', 'http://' . 'sandbox83'. '.avangate.local');
//define('BASE_URL', 'http://' . 'www.facebook.com');
define('BASE_URL_INDEPENDENT', 'http://sandbox14.avangate.local');
define('API_CART_URL', 'http://sandbox83.avangate.local');

/*
 * Host and port for send mail function
 */

define ('SMTP_HOST', 'EXCHANGE.avangate.local');
define ('SMTP_PORT', '25');

/*
 * Cron running configuration
 */
define('CRON_HOST', MY_HOST_NAME . ".avangate.local");//sandbox31.avangate.local
define('CRON_PATH', '/var/www/vhosts/' . MY_HOST_NAME . '.avangate.local/htdocs/cron/');
define('CRON_USER', 'www-data');


define('USER', 'raghuc');
//define('PUBLIC_KEY', 'C:\Users\Sticsoft\.ssh\open-ssh-keys\new_public_key');
//define('PRIVATE_KEY',  'C:\Users\Sticsoft\.ssh\open-ssh-keys\private_key');

define('PUBLIC_KEY', 'C:\Users\MQDQN SAMUDRALLA\.ssh\Private_key');
define('PRIVATE_KEY','C:\Users\MQDQN SAMUDRALLA\.ssh\Public_key');




/*
 *  Results path
 */

define('RESULTS_FOLDER', 'C:/git/tmp');

/*
 * Screenshot settings
 */

define('SCREENSHOTPATH', 'C:/git/tmp');
define('SCREENSHOTURL' , 'C:/git/tmp');
define('CAPTURESCREENSHOTONFAILURE', TRUE);

/*
 * DB connection settings
 */

global $db;
$db = array(

    'automation' => array(
        'HOST' => 'mysqldev.avangate.local',
        'USER' => 'automation',
        'PASS' => 'withc--',
        'DB' => 'automation'
    ),

    'locking01' => array(
        'HOST' => 'dblockdev01.avangate.local',
        'USER' => 'lockuser',
        'PASS' => 'withc--',
        'DB' => 'locking'
    ),

    'locking02' => array(
        'HOST' => 'dblockdev02.avangate.local',
        'USER' => 'lockuser',
        'PASS' => 'withc--',
        'DB' => 'locking'
    ),

    'avangate' => array(
        'HOST' => 'mysqldev.avangate.local',
        'USER' => 'devel',
        'PASS' => 'withc--',
        'DB' => 'avangate'
    ),

    'epay_logs' => array(
        'HOST' => 'dbdev01.avangate.local',
        'USER' => 'devel',
        'PASS' => 'withc--',
        'DB' => 'epay_logs'
    )
);