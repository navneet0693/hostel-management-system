<?php

include 'connections.php';

    $v=(int)$_POST['empID'];
    $sql="Select *from employee where employee_id=$v";
    if(!mysql_query($sql))
    {
        die('sql error'.mysql_error());
    }
    $row=mysql_fetch_row(mysql_query($sql));
    if(!$row)
    {
        header("location:remove_emp_db.php");
    }
    else
    {
        $sql ="DELETE FROM employee WHERE employee_id = $v";
        if(!mysql_query($sql))
        {
            die('sql error'.mysql_error());
        }
        $sql="Delete from log_in where user_id=$v";
        if(!mysql_query($sql))
        {
            die('sql error'.mysql_error());
        }
        header("location:admin.php");
        mysql_close($li);
    }
?>

