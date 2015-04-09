<?php

include 'connections.php';
$v1=$_POST["stuid"];
$v2=$_POST["since"];
$v3=$_POST["complaint"];
//echo date($v2);
$sql="Insert into late_table(stuid,on_day,reason) values($v1,'$v2','$v3')";
if(!mysql_query($sql))
{
    die('sql error'.mysql_error());
}
header("location:wardview.phtml");
mysql_close($link);
?>
	
