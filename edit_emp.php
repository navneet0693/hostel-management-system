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
        .container{
            border: 3px solid darkblue;
            margin:15px;
            padding:5px;
            border-radius:4px;
            box-shadow: 0 0 30px ;
            background:grey;
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
            <li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>


<p align="center"><b>View/Edit Employee</b></p><br>
<div class="jumbotron vertical-center">
    <div class= "container">

        <form class="form-horizontal" role="form" action="emp_display.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Employee ID:</label>
                <div class="col-sm-4">
                    <input type="text" name="empID" class="form-control" id="employeeID" placeholder="Enter Employee's JIET ID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>	
