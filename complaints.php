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
        font-size:300%;
    }
</style>
<body margin="25px" bgcolor="#dcdcdc">
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
    <h2 align="center"><u><b>COMPLAINTS</b></u></h2>

    <div>
        <form class="form-horizontal" role="form" action="complaint_listing.php" method="POST">
            <fieldset class="flborder">
                <p align="center">
                    <label class="radio-inline">
                        <input type="radio" name="checkcomp" id="Reviewed" value="1" checked><i class="glyphicon glyphicon-ok"></i> Reviewed Complaints
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="checkcomp" id="Pending" value="2" checked><i class="glyphicon glyphicon-time"></i> Pending Complaints
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="checkcomp" id="edit" value="3"><i class="glyphicon glyphicon-pencil"></i> Edit your complaints
                    </label>
                </p>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
