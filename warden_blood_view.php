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
        <a href="warden_view.php" class ="navbar-brand">Home</a>
    </div>

    <div id=navbarCollapse class="collapse navbar-collapse">
        <ul class ="nav navbar-nav">
            <li class="active"><a href="www.jietjodhpur.com/JGI/index.php">About Us</a></li>
            <li><a href="www.jietjodhpur.com/JGI/index.php" target="blank">Notifications</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right"><li><img src="logo.jpg"></li><li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>
<?php

include 'connections.php';

$v1=(int)$_POST['ch1'];
$v2=(int)$_POST['ch2'];
$v3=(int)$_POST['ch3'];
$v4=(int)$_POST['ch4'];
$v5=(int)$_POST['ch5'];
$v6=(int)$_POST['ch6'];
$v7=(int)$_POST['ch7'];
$v8=(int)$_POST['ch8'];
$sum=0;
if($v1==1)
{
    //echo "hello1";
    $sql= "SELECT * FROM student WHERE stublood='A+'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b><u>A+ BLOOD LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
if($v2==2)
{
    //echo "hello1";
    $sql= "SELECT * FROM student WHERE stublood='A-'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b><u>A- BLOOD LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
if($v3==3)
{
    //echo "hello1";
    $sql= "SELECT * FROM student WHERE stublood='B+'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b><u>B+ BLOOD LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
if($v4==4)
{
    //echo "hello1";
    $sql= "SELECT * FROM student WHERE stublood='B-'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b><u>B- BLOOD LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
if($v5==5)
{

    $sql= "SELECT * FROM student WHERE stublood='O+'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b>O+ BLOOD LIST</b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
if($v6==6)
{
    //echo "hello1";
    $sql= "SELECT * FROM student WHERE stublood='O-'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b><u>O- BLOOD LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
if($v7==7)
{

    $sql= "SELECT * FROM student WHERE stublood='AB+'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b><u>AB+ BLOOD LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
if($v8==1)
{
    //echo "hello1";
    $sql= "SELECT * FROM student WHERE stublood='AB-'";
    $res=mysql_query($sql);
    if(!res)
    {
        die('sql error'.mysql_error());
    }
    $sn=1;
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><h1><b><u>AB- BLOOD LIST</u></b></h1></h2>
        </div>
        <table class="table">
            <th>SerialNo.</th><th>StudentID</th><th>Name</th>

            <?php
            while($row = mysql_fetch_array($res))
            {

                echo "<tr><td>".$sn."</td><td>" . $row['stuid'] . "</td><td>" . $row['stuna'] . "</td></tr>";
                $sn++;
            }
            echo "</br>";
            echo "<tr><td>".TOTAL."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
            $sum+=$sn;
            ?>
        </table>
    </div>
<?php
}
?>
<h2 align="center" >GRAND TOTAL:=:<?php echo $sum?></h2>

</body>
</html>
