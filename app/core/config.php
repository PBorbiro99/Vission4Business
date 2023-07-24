<?php

if ($_SERVER['SERVER_NAME'] == 'localhost'){

    /** database config **/
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');


    define('ROOT', 'http://localhost/Vission4Business/public');
}else{

    /** database config **/
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'http://www.vission4business.com');

}

define('APP_NAME', 'Vission4Business');
define('APP_DESC', 'Vission4Business');

/** true means show errors */
define('DEBUG', true);
