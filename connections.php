<?php
/**
 * Created by PhpStorm.
 * User: Navneet Singh
 * Date: 08-04-2015
 * Time: 10:51
 */

    $dbdata = 'dbms_pro';
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    $link = mysql_connect($dbhost, $dbuser, $dbpass);
    if(!$link )
    {
        die('Could not connect: ' . mysql_error());
    }

    $conc = mysql_select_db($dbdata,$link);
    if(!$conc )
    {
        die('Could not connect to db: ' . mysql_error());
    }

?>