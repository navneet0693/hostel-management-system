<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width",initial-scale=1">
    <title>Welcome to Hostel</title>
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

<body margin="25px">
<nav role="navigation" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="homephp" class ="navbar-brand">Home</a>
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

<br/><br/>
<marquee><b>Welcome To Hostel !</b></marquee><br><br>

<div class="jumbotron vertical-center">
    <div class= "container">

        <form class="form-horizontal" role="form" action="loging.php" method=POST>

            <div class="form-group">
                <label class="control-label col-sm-4" for="uID">User ID:</label>
                <div class="col-sm-4">
                    <input name="user_id" type="text" class="form-control" id="uID" placeholder="Enter Your JIET ID" autofocus required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Password:</label>
                <div class="col-sm-4">
                    <input name="user_pswd" type="password" class="form-control" id="pwd" autofocus required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>

</html>
