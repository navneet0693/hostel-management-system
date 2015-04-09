<?php
include 'connections.php';

$v1=$_POST["stuID"];
$sql="select room_no,hostel_id,seat_no from rooms where stuid=$v1";
//echo $sql;
$row=mysql_fetch_row(mysql_query($sql));
if(!$row)
{
    header("location:remove_stu.php");
}
else
{
    //var_dump($row);
    $v2=$row[0];
    $v3=$row[1];
    $v4=$row[2];
    //echo $v2;echo $v3;echo $v4;
    $sql="Delete from rooms where stuid=$v1";
    if(!mysql_query($sql))
    {
        die('sql error'.mysql_error());
    }
    $sql="Delete from student where stuid=$v1";
    if(!mysql_query($sql))
    {
        die('sql error'.mysql_error());
    }
    $sql="Insert into rooms values('NULL',$v2,$v3,$v4,0)";
    if(!mysql_query($sql))
    {
        die('sql error'.mysql_error());
    }
    //echo $sql;

    header("location:admin.php");
}
mysql_close($li);
?>
