<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width",initial-scale=1">
    <title>Girls Hostel System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/assets/css/font-awesome.min.css>
		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body{
            background-color:#CCFFFF;
        }
        .form-horizontal{
            border: 2px solid darkblue;
            margin:7px;
            padding:10px;
            border-radius:4px;
            box-shadow: 0 0 30px ;
            background:#009999;
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
        <a href="tryly2/home.phtml" class ="navbar-brand">Home</a>
    </div>

    <div id=navbarCollapse class="collapse navbar-collapse">
        <ul class ="nav navbar-nav">
            <li class="active"><a href="http://jmi.ac.in/upload/hostel/hgr_manual_2014.pdf">About Us</a></li>
            <li><a href="http://jmi.ac.in/studyatjamia/hostel/latest/2" target="blank">Notifications</a></li>
            <li><a href="logging.php">LogOut</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><img src="logo.jpg"></li>
            <li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>

<p align="center"><u>Add you grivences against the students or the hostel facilities and services.</u></p>

<div class= "jumbotron vertical center">
    <form class="form-horizontal" role="form" action="stu_submit_complaint.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-4" for="studentID">Student ID:</label>
            <div class="col-sm-4">
                <input type="text" name="comstuid" class="form-control" id="studentID" value="<?php echo $_SESSION["id"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="com">Complaint:</label>
            <div class="col-sm-4">
                <textarea rows="7" name="complaint" placeholder="Describe the issue"></textarea>
            </div>
        </div>

        <div class="form-group">

            <input type="hidden" name="compID">
            <input type="hidden" name="compstatus" value="NO">
            <div class="col-sm-offset-4 col-sm-5">
                <button type="submit" class="btn btn-danger">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>	
