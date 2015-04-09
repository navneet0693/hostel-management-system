<?php
include 'connections.php';
$v1=$_POST['comstuid'];
$v2=$_POST['complaint'];

$sql="INSERT INTO complaint (stuid,problem) VALUES($v1,'$v2')";
if(!mysql_query($sql))
{
    die("sql error :".mysql_error());
}
header("location:stview1.phtml");
session_start();
mysql_close($link);
?>
