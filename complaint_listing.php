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
<body margin="25px">
<nav role="navigation" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="admin.php" class ="navbar-brand">Home</a>
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
$v1=(int)$_POST["checkcomp"];
if($v1==1)
{
    $sql="Select * from complaint where solved=1";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b> RESOLVED: LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.<th>Complaint ID</th></th><th>Complaint decription</th>
            <?php
            while($row = mysql_fetch_array($res))
            {
                echo "<tr><td>".$sn."</td><td>" .$row['comp_id']. "</td><td>" .$row['problem'] ."</td></tr>";
                $sn++;
            }
            ?>
        </table>
    </div>
    <h2 align="center" >TOTAL:=:<?php echo --$sn?></h2>
<?php
}
if($v1==2)
{
    $sql="Select * from complaint where solved=0";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b> PENDING: LIST</b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.<th>Complaint ID</th></th><th>Complaint description</th>
            <?php
            while($row = mysql_fetch_array($res))
            {
                echo "<tr><td>".$sn."</td><td>" .$row['comp_id']. "</td><td>" .$row['problem'] ."</td></tr>";
                $sn++;
            }
            ?>
        </table>
    </div>
    <h2 align="center" >TOTAL:=:<?php echo --$sn?></h2>
<?php

}
if($v1==3)
{
    header("location:edit_complaint.php");
}
?>
</body>
</html>
