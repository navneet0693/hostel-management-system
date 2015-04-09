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
<body margin="25px" background="blue-backgrounds.png">
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
<div class="jumbotron vertical-center">
    <div>
        <div class="btn-toolbar">
            <h1 align="center">Select Hostels</h1>
            <form role="form" action="hostel_listing.php" method="POST">
                <div class="form-group">
                    <p align="center">
                        <label class="checkbox">
                            <input type="checkbox" name="check_box" id="Checkbox1" value="1"> Hostel 1
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" id="Checkbox2" name="check_box" value="2"> Hostel 2
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" id="Checkbox3" name="check_box" value="3"> Hostel 3
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" id="Checkbox4" name="check_box" value="4">Hostel 4
                        </label>
                    </P>
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
