<?php session_start();?>
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
            <a href="admin.php" class ="navbar-brand">Home</a>
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
    <div>
        <div class="btn-toolbar">
            <p align="center">Students Section
                <br><br>
                <button type="button" class="btn btn-default"><a href="add_stu.php">Add Student</a></button>
                <button type="button" class="btn btn-danger"><a href="remove_stu.php">Remove Student</a></button>
                <button type="button" class="btn btn-default"><a href="edit_stu.php">View/Edit Student</a></button>
            </P>
            <br>
        </div>
        <div class="btn-toolbar">
            <p align="center">Employee Section
                <br><br>
                <button type="button" class="btn btn-default"><a href="add_emp.php">Add Employee</a></button>
                <button type="button" class="btn btn-danger"><a href="remove_emp.php">Remove Employee</a></button>
                <button type="button" class="btn btn-default"><a href="edit_emp.php">View/Edit Employee</a></button>
            </p>
            <br>
        </div>
        <div class="btn-toolbar">
            <p align="center">Hostel Section
                <br><br>
                <button type="button" class="btn btn-default"><a href="hostel_view.php">View Hostels</button>
                <button type="button" class="btn btn-default"><a href="complaints.php">View/Edit Complaints</a></button>
                <button type="button" class="btn btn-default"><a href="vacancy_find.php">View vacancy</a></button>
            </p>
            <br>
        </div>
    
    </div>
</body>
</html>		
		
