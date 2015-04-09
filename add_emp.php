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
            margin:20px;
            padding:15px;
            font-family:serif;
            font-size:12px;
        }
        .flborder {
            border: 2px solid #990099!important;
            padding: 0 1.4px 1.4px 1.4px !important;
            margin: 0 0 1.5em 0 !important;
            border-radius:4px;

        }

        .leborder {
            width:inherit;
            padding:0 10px;
            border-bottom:none;
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
        <ul class="nav navbar-nav navbar-right">
            <li><img src="logo.jpg"></li>
            <li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>

<p align="center"><u>Fill in the information to add a new employee into the Hall of Residence</u></p>

<div class= "container">

    <form class="form-horizontal" role="form" action="add_emp_db.php" method="POST">
        <fieldset class="flborder">
            <legend class="leborder">Hostel Information</legend>
            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Employee ID:</label>
                <div class="col-sm-4">
                    <input type="text" name="empid" class="form-control" id="employeeID" placeholder="Enter Employee's JIET ID" autofocus required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Employee Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="empna" class="form-control" id="employeeID" placeholder="Employee's Name" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Employee Occupation:</label>
                <div class="col-sm-4">
                    <input type="text" name="empoccu" class="form-control" id="employeeID" placeholder="Post in Hostel" autofocus required>
                </div>
            </div>



            <div class="form-group">
                <label class="control-label col-sm-6" for="employeeID">Employeed Since(Date Of joining post):</label>
                <div class="col-sm-6">
                    <input type="date" name="empDOE" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6" for="employeeID">Employeed Until (Expected Date of tensure):</label>
                <div class="col-sm-6">
                    <input type="date" name="empDOR" autofocus required>
                </div>
            </div>
        </fieldset>
        <fieldset class="flborder">
            <legend class="leborder">Personal Information</legend>
            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Date Of Birth: </label>
                <div class="col-sm-6">
                    <input type="date" name="empdob" autofocus required">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Email:</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="employeeID" name="empemail" placeholder="example@example.com" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Contact:</label>
                <div class="col-sm-4">
                    <input type="text" name="empcon" placeholder="Employess's Personal"class="form-control" id="employeeID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Emergency Contact:</label>
                <div class="col-sm-4">
                    <input type="text" name="empcone1" placeholder="Emergency Contact"class="form-control" id="employeeID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="employeeID">Employee Address:</label>
                <div class="col-sm-4">
                    <input type="text" name="empadd" class="form-control" id="employeeID" placeholder="Permanent Residence" autofocus required>
                </div>
            </div>
        </fieldset>
        <fieldset class="flborder">
            <br>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</body>
</html>
