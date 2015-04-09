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
        <a href="#" class ="navbar-brand">Home</a>
    </div>

    <div id=navbarCollapse class="collapse navbar-collapse">
        <ul class ="nav navbar-nav">
            <li class="active"><a href="www.jietjodhpur.com/JGI/index.php">About Us</a></li>
            <li><a href="www.jietjodhpur.com/JGI/index.php" target="blank">Notifications</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><img src="logo.jpg"></li>
            <li ><a href="contact.php" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>
<?php

include 'connections.php';

if($_POST['check_box'])
    $v1=(int)$_POST['check_box'];

$sum=0;
    if($v1==1)
    {

        $sql= "SELECT DISTINCT(room_no) FROM rooms WHERE avail=0 AND hostel_id=1";
        $res=mysql_query($sql);
        if(!$res)
        {
            die('sql error'.mysql_error());
        }
        $sn=1;
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title"><h1><b>HOSTEL 1: LIST</b></h1></h2>
            </div>
            <table class="table">
                <th>SerialNo.</th><th>Room No.</th>

                <?php
                while($row = mysql_fetch_array($res))
                {

                    echo "<tr><td>".$sn."</td><td>" . $row['room_no'] . "</td></tr>";
                    $sn++;
                }
                echo "</br>";
                echo "<tr><td>".'TOTAL'."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
                $sum+=$sn;
                ?>
            </table>
        </div>
    <?php
    }
    if($v1==2)
    {

        $sql= "SELECT DISTINCT(room_no) FROM rooms WHERE avail=0 AND hostel_id=2";
        $res=mysql_query($sql);
        if(!$res)
        {
            die('sql error'.mysql_error());
        }
        $sn=1;
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title"><h1><b>HOSTEL 2: LIST</b></h1></h2>
            </div>
            <table class="table">
                <th>SerialNo.</th><th>Room No</th>
                <?php
                while($row = mysql_fetch_array($res))
                {

                    echo "<tr><td>".$sn."</td><td>" . $row['room_no'] . "</td></tr>";
                    $sn++;
                }
                echo "</br>";
                echo "<tr><td>".'TOTAL'."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
                $sum+=$sn;
                ?>
            </table>
        </div>
    <?php
    }
    if($v1==3)
    {

        $sql="SELECT DISTINCT(room_no) FROM rooms WHERE avail=0 AND hostel_id=3";
        $res=mysql_query($sql);
        if(!$res)
        {
            die('sql error'.mysql_error());
        }
        $sn=1;
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title"><h1><b>HOSTEL 3: LIST</b></h1></h2>
            </div>
            <table class="table">
                <th>SerialNo.</th><th>Room No</th>
                <?php
                while($row = mysql_fetch_array($res))
                {
                    echo "<tr><td>".$sn."</td><td>" . $row['room_no'] . "</td></tr>";
                    $sn++;
                }
                echo "</br>";
                echo "<tr><td>".'TOTAL'."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
                $sum+=$sn;
                ?>
            </table>
        </div>
    <?php
    }
    if($v1==4)

    { $sql= "SELECT DISTINCT(room_no) FROM rooms WHERE avail=0 AND hostel_id=4";
        $res=mysql_query($sql);
        if(!$res)
        {
            die('sql error'.mysql_error());
        }
        $sn=1;
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title"><h1><b>HOSTEL 4: LIST</b></h1></h2>
            </div>
            <table class="table">
                <th>SerialNo.</th><th>Room No</th>
                <?php
                while($row = mysql_fetch_array($res))
                {

                    echo "<tr><td>".$sn."</td><td>" . $row['room_no'] . "</td></tr>";
                    $sn++;
                }
                echo "</br>";
                echo "<tr><td>".'TOTAL'."</td><td>" . "==". "</td><td>" . --$sn . "</td></tr>";
                $sum+=$sn;
                ?>
            </table>
        </div>

<?php    }
?>
<h2 align="center" >GRAND TOTAL:=:<?php echo $sum?></h2>
</body>
</html>
	
