<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('define_keywords.php');

if (!isset($_SESSION)) {
    //$some_name = session_name(KEY);
    //session_set_cookie_params(0, '/', DOMAIN);
    session_start();
}

if (ENV == "DEV") {
    define('DB_HOST', "fazendamysql.mysql.database.azure.com");
    define('DB_USER', "felipe");
    define('DB_PASSWORD', "P@ssw0rd");
    define('DB_DATABASE', "chat");

} else {
    define('DB_HOST', "localhost");
    define('DB_USER', "****");
    define('DB_PASSWORD', "****");
    define('DB_DATABASE', "***");
    //echo 'local server connected';
}
