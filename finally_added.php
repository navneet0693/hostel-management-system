<?php
session_start();
include 'connections.php';

    $v1=$_POST["stuid"];
    $v2=$_POST["stuhost"];
    $v3=$_POST["roomselect"];

    $sql="select (hostel_id) from hostel_table where hostel_name='$v2'";

    if(!mysql_query($sql))
    {	echo "h7";
        die('sql error'.mysql_error());
    }

    $row=mysql_fetch_row(mysql_query($sql));
    $sql="select (seat_no) from rooms where hostel_id=$row[0] AND room_no=$v3 AND avail=0";

    if(!mysql_query($sql))
    {
        die('sql error'.mysql_error());
    }

    $row1=mysql_fetch_row(mysql_query($sql));
    $sql="Update rooms set stuid=$v1,avail=1 where hostel_id=$row[0] AND seat_no=$row1[0] AND room_no=$v3 AND avail=0";

    if(!mysql_query($sql))
    {
        die('sql error'.mysql_error());
    }

    header("location:admin.php");
mysql_close($link);
?>
