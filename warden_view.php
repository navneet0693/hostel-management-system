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

            .btn-toolbar{
                border: 3px solid aqua;
                margin:15px;
                padding:5px;
                border-radius:10px;
                box-shadow: 0 0 30px ;
                background:beige;
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

    <h2 align="center">WELCOME <?php echo $_SESSION["name"]?>!!</h2>

    <p align="center">
        <br><br>
        <div class="btn-toolbar">
            <div class="ip">
                <button type="button" class="btn btn-default btn-lg "><a href="emp_view.php">View My Info</a></button>
            </div>
            <br>
            <div>
                <button type="button" class="btn btn-default btn-lg "><a href="warden_add_late_night.php">Add late night</a></button>
                <button type="button" class="btn btn-default btn-lg "><a href="warden_add_leave.php">Add leave</a></button>
            </div>
            <br>
            <div>
                <button type="button" class="btn btn-default btn-lg "><a href="vacancy_find.php">Room Vacancy List</a></button>
                <button type="button" class="btn btn-default btn-lg "><a href="warden_late_all.php">Late Nights List</a></button>
                <button type="button" class="btn btn-default btn-lg "><a href="warden_leave_all.php">Leave List</a></button>

                <br><br>
                <button type="button" class="btn btn-default btn-lg "><a href="hostel_view.php">View Hostelwise Students</a></button>
                <button type="button" class="btn btn-default btn-lg "><a href="warden_state.php">View Statewise</a></button>
                <button type="button" class="btn btn-default btn-lg "><a href="warden_blood.php">View Bloodgroup</a></button>
            </div>
        </div>
    </p>
    <br>
    </body>
</html>

	
