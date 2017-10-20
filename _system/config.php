<?php
/* >_ Developed by Vy Nghĩa */

//default config
define('PAGEID', 'XXXXXXXXXXXXXXXXX');
define('WEBURL', 'http://domain.com');

//mysql info
$dbhost = 'localhost';
$dbuser = 'username';
$dbpass = 'password';
$dbname = 'database_name';

//Facebook App
$FacebookAppID = 'XXXXXXXXXXXXXXXXX';
$FacebookAppSecret = 'XXXXXXXXXXXXXXXXXXXX';

//Google Api
$GoogleApiKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXX';

//connect mysql
$con = @mysql_connect($dbhost, $dbuser, $dbpass);
if (mysql_error()) {
    echo 'Không thể kết nối với SQL';
}
@mysql_select_db($dbname, $con);
