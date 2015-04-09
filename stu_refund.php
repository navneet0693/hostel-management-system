<?php session_start();?>
<html>
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
            background-color:lavender;
        }
        .btn-toolbar{
            border: 3px solid darkblue;
            margin:15px;
            padding:5px;
            border-radius:4px;
            box-shadow: 0 0 30px ;
        }
        .btn-danger{
            font-color:black;
        }
        .container
        {
            position:absolute;
            left :20%;
            width:600;
            border: 3px solid black;
            margin:15px;
            padding:5px;
            border-radius:4px;
            box-shadow: 0 0 30px ;
            background-color:#ffffff;
        }
        .table-respnsive{
            width:500;
        }
    </style>

</head>

<body margin="25px">
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

        <ul class="nav navbar-nav navbar-right"><li><img src="logo.jpg"></li><li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>
<?php
include 'connections.php';
$v1=(int)$_POST['value1'];
$v3=(int)$_POST['day'];
$v4=(int)$_POST['month'];
$res;$days=0;
if($v1==1)
{
    if(($v4>5)||($v3<7&&$v4==1))
        $res="Out of Range.Total amount due,Rs=0/-";
    else if($v4==5&&$v3>20)
        $res="Out of Range.Total amount due,Rs=0/-";
    else if($v4==5)
    {
        $days=20-$v3;
        $total=$days*45;
        $res="Total amount due,Rs= ".$total."/-";
    }
    else
    {
        switch($v4)
        {
            case 1:$days+=31-$v3;break;
            case 2:$days+=28-$v3;break;
            case 3:$days+=31-$v3;break;
            case 4:$days+=30-$v3;break;
            case 5:$days+=31-$v3;break;
            case 6:$days+=30-$v3;break;
            case 7:$days+=31-$v3;break;
            case 8:$days+=31-$v3;break;
            case 9:$days+=30-$v3;break;
            case 10:$days+=31-$v3;break;
            case 11:$days+=30-$v3;break;
            case 12:$days+=31-$v3;break;

        }
        $days++;
        $v4++;
        while($v4!=5)
        {
            switch($v4)
            {
                case 1:$days+=31;break;
                case 2:$days+=28;break;
                case 3:$days+=31;break;
                case 4:$days+=30;break;
                case 6:$days+=30;break;
                case 7:$days+=31;break;
                case 8:$days+=31;break;
                case 9:$days+=30;break;
                case 10:$days+=31;break;
                case 11:$days+=30;break;
                case 12:$days+=31;break;

            }
            $v4++;
        }
        $days+=19;
        $total=$days*45;
        $res="Total amount due,Rs= ".$total."/-";

    }
}
else if($v1==2)
{
    if($v4<7||$v4==12||($v4==7&&$v3<=16))
        $res="Out of Range.Total amount due,Rs=0/-";
    else
    {
        $days=0;
        switch($v4)
        {

            case 7:$days+=31-$v3;break;
            case 8:$days+=31-$v3;break;
            case 9:$days+=30-$v3;break;
            case 10:$days+=31-$v3;break;
            case 11:$days+=30-$v3;break;

        }
        $days++;
        $v4++;
        while($v4<12)
        {
            switch($v4)
            {
                case 8:$days+=31;break;
                case 9:$days+=30;break;
                case 10:$days+=31;break;
                case 11:$days+=30;break;
            }
            $v4++;
        }
        $total=$days*45;
        $res="Total amount due,Rs= ".$total."/-";
    }
}
else
{
    header("location:stu_refund_val.php");
}
?>

<div class= "container">

    <h2 align="center">REFUND SLIP</h2>
    <h4 align="center"><i>
            <?php
            if($v1)
                echo "SUMMER VACATIONS";
            else
                echo "SUMMER VACATIONS";
            ?></i>
    </h4>
    <div class="table-respnsive">
        <table class="table table-bordered">
            <tr>
                <td>NAME:</td>
                <td><?php echo $_SESSION["name"];?></td>
            </tr>
            <tr>
                <td>STUDENT ID:</td>
                <td><?php echo $_SESSION["id"]?></td>
            </tr>
            <tr>
                <td>LEAVE DATE:</td>
                <td><?php echo $v3 ;echo "/"; echo $v4; echo"/2014." ?></td>
            </tr>
            <tr>
                <td>AMOUNT:</td>
                <td><?php echo $res?></td>
            </tr>
        </table>
    </div>
    <p align="center">PRINT <i class="glyphicon glyphicon-print"></i></p>
</div>

</body>
</html>	
