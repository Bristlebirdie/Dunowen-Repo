<?php
    define('PERCH_LICENSE_KEY', 'P21405-PNW662-UBK801-FVL828-KVE029');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'bristlebird');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "dunowenh_db");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'lucie@bristlebird.com');
    define('PERCH_EMAIL_FROM_NAME', 'Lucie Green');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
 	define('PERCH_PRODUCTION_MODE', PERCH_DEVELOPMENT);
 	//    define('PERCH_PRODUCTION_MODE', PERCH_PRODUCTION);
 	//    define('PERCH_PRODUCTION_MODE', PERCH_STAGING);
 	
 	define('PERCH_RWD', true);
?>