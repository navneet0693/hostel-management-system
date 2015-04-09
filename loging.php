<?php
session_start();
include 'connections.php';

    $user_id=(int)$_POST['user_id'];
    $user_pswd=$_POST['user_pswd'];
    $sql="SELECT view_per FROM log_in WHERE user_id=$user_id and pass='$user_pswd'";
    $res=mysql_result(mysql_query($sql),0);
    $name;
    if(!$res)
    {
        header("location:home.php");
    }
    if($res==1)
    {
        header("location:admin.php");
        $_SESSION["id"]=$user_id;
        $_SESSION["name"]='ADMIN';

    }
    else if($res==2)
    {
        header("location:warden_view.php");
        $_SESSION["id"]=$user_id;
        $sql="Select emp_name from employee where employee_id=$user_id";
        $res=mysql_query($sql);
        $row=mysql_fetch_row($res);
        $_SESSION["name"]=$row[0];

    }
    else if($res==3)
    {
        header("location:student_view.php");
        $_SESSION["id"]=$user_id;
        $sql="Select stuna from student where stuid=$user_id";
        $res=mysql_query($sql);
        $row=mysql_fetch_row($res);
        $_SESSION["name"]=$row[0];
    }
    else
    {

        header("location:index.php");
    }

mysql_close($li);

?>
