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

<p align="center">Fill in the information receive list of a State.</p>

<div class="jumbotron vertical-center">
    <div class= "container">

        <form class="form-horizontal" role="form" action="warden_state_view.php" method="POST">
            <label class="col-sm-1 control-label" for="states">State:</label>
            <div class="col-sm-4">
                <select class="form-control" name="states" required>
                    <option></option>
                    <optgroup label="States:">
                        <option>	Andhra Pradesh</option>
                        <option>	Arunachal Pradesh</option>
                        <option>	Assam</option>
                        <option>	Bihar</option>
                        <option>	Chattisgarh</option>
                        <option>	Goa</option>
                        <option>	Gujarat</option>
                        <option>	Haryana </option>
                        <option>	Himachal Pradesh</option>
                        <option>	Jammu and Kashmir</option>
                        <option>	Jharkhand</option>
                        <option>	Karnataka</option>
                        <option>	Kerala</option>
                        <option>	Madhya Pradesh</option>
                        <option>	Maharashtra</option>
                        <option>	Manipur</option>
                        <option>	Meghalaya</option>
                        <option>	Mizoram</option>
                        <option>	Nagaland</option>
                        <option>	Odisha</option>
                        <option>	Punjab</option>
                        <option>	Rajasthan</option>
                        <option>	Sikkim</option>
                        <option>	Tamil Nadu</option>
                        <option>	Telangana</option>
                        <option>	Tripura</option>
                        <option>	Uttar Pradesh</option>
                        <option>	Uttarakhand</option>
                        <option>	West Bengal</option>
                    </optgroup>
                    <option></option>
                    <optgroup label="Union Territories">
                        <option>	Andaman And Nicobar Islands</option>
                        <option>	Chandigarh</option>
                        <option>	Dadra And Nagar Haveli</option>
                        <option>	Daman And Diu</option>
                        <option>	National Capital Territory of Delhi</option>
                        <option>	Lakshadweep</option>
                        <option>	Puducherry</option>
                    </optgroup>
            </div>
            </select>
        </form>
    </div>
    <div class="form-group">
        <p align="right">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button class="btn btn-danger" type="reset">Reset</button>
        <p>
    </div>

</div>
</body>
</html>
