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
        color:blue;
        font-family:verdana;
        font-size:100%;
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
<div class="jumbotron vertical-center">
    
        <div class="btn-toolbar">
            <h2 align="center">Select Blood Group</h2>

            <form role="form" action="warden_blood_view.php" method="POST">
                <div class="form-group">
                    <p align="center">
                        <label class="checkbox">
                            <input type="checkbox" name="ch1" id="Checkbox1" value="1"> A+
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"  name="ch2"id="Checkbox2" value="2"> A-
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"  name="ch3"id="Checkbox3" value="3"> B+ </label>
                        <label class="checkbox">
                            <input type="checkbox"  name="ch4"id="Checkbox4" value="4"> B-
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"  name="ch5"id="Checkbox4" value="5"> O+
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="ch6" id="Checkbox4" value="6"> O-
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"  name="ch7"id="Checkbox4" value="7">AB+
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"  name="ch8"id="Checkbox4" value="8">AB-
                        </label>


                    </p>
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
