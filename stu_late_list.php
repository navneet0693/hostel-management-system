<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width",initial-scale=1">
    <title>Hostel System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/assets/css/font-awesome.min.css>
		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body{
            background-color:#CCFFFF;
        }
    </style>

</head>
<style>
    h1{
        font-family: "Times New Roman", Times, serif
    font-size:100%
    }
</style>
<body margin="25px" bgcolor="#dcdcdc" ">
<nav role="navigation" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="student_view.php" class ="navbar-brand">Home</a>
    </div>

    <div id=navbarCollapse class="collapse navbar-collapse">
        <ul class ="nav navbar-nav">
            <li class="active"><a href="www.jietjodhpur.com/JGI/index.php">About Us</a></li>
            <li><a href="www.jietjodhpur.com/JGI/index.php" target="blank">Notifications</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><img src="logo.jpg"></li>
            <li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>
<?php

include 'connections.php';

$sn=1;
$v1=$_SESSION["id"];
$sql="Select * from late_table where late_table.stuid=$v1";
$res=mysql_query($sql);
if(!res)
{
    die('sql error'.mysql_error());
}
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title"><h1><b><u>LATE NIGHT: LIST</u></b></h1></h2>
    </div>
    <table class="table">
        <th>SerialNo.</th><th>Day</th><th>Reason</th>
        <?php
        while($row = mysql_fetch_array($res))
        {
            echo "<tr><td>".$sn."</td><td>" . $row['on_day'] ."</td><td>".$row['reason']. "</td></tr>";?>
            <?php
            $sn++;
        }
        ?>
    </table>
</div>
<h2 align="center" >TOTAL:=:<?php echo --$sn?></h2>
<?php
mysql_close($link);
?>
