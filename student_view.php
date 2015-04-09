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
<body margin="25px" bgcolor="#dcdcdc" ">
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
        <ul class="nav navbar-nav navbar-right">
            <li><img src="logo.jpg"></li>
            <li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>
<div class="jumbotron vertical-center">
    <!<div class="container">
        <div>
            <div class="btn-toolbar">
                <h2 align="center"><u>WELCOME <?php echo $_SESSION["name"]?>!!</u></h2>
                <p align="center">
                    <br><br>
                    <button type="button" class="btn btn-success btn-lg "><a href="stu_my_info.php" >View My Info</a></button>
                    <button type="button" class="btn btn-success btn-lg "><a href="vacancy_find.php">Room Vacancy List</a></button>
                    <button type="button" class="btn btn-success btn-lg "><a href="stu_late_list.php" >Late Night List</a></button>
                    <button type="button" class="btn btn-success btn-lg "><a href="stu_refund_val.php">Refund Calculator</a></button>
                    <button type="button" class="btn btn-success btn-lg "><a href="stu_leave_listing.php" >Leave list</a></button>
                    <button type="button" class="btn btn-success btn-lg "><a href="stu_complaint.php">Add complaint</a></button>
                </P>
                <br>
            </div>
            <!<img src="/home/sarah/Pictures/RINAjamia-girls-hostel.jpg" alt="Mountain View" style="width:1000px;height:600px">
        </div>
    </div>
    <!</div>
<!</div>
</body>
</html>



