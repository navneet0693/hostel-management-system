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
        color:black;
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
        <ul class="nav navbar-nav navbar-right">
            <li><img src="logo.jpg"></li>
            <li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>
<p align="center">Fill in the information to add a late night</p>
<div class= "jumbotron vertical center">
    <form class="form-horizontal" role="form" action="warden_add_late_night_db.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-4" for="studentID">Student ID:</label>
            <div class="col-sm-4">
                <input type="text" name="stuid" class="form-control" id="studentID" placeholder="Student's JMI ID" autofocus required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="studentID">Date:</label>
            <div class="col-sm-4">
                <input type="date" name="since" autofocus required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="com">Reason:</label>
            <div class="col-sm-4">
                <textarea rows="7" name="complaint" placeholder="Describe the issue"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </div>
    </form>
</div>
</div>


</body>
</html>
				
