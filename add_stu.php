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

<body >
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

<p align="center">Fill in the information to add a new entry into the Hall of Residence</p>

<div class= "container">

    <form class="form-horizontal" role="form" action="add_stu_to_room.php" method="POST">
        <fieldset class="flborder">
            <legend class="leborder">College Information</legend>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Student ID:</label>
                <div class="col-sm-4">
                    <input type="text" name="stuid" class="form-control" id="studentID" placeholder="Enter Student's JIET ID" autofocus required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Student Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="stuna" class="form-control" id="StudentID" placeholder="Student's Name" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="studentID">Course:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="stucourse" required>

                        <optgroup label="Masters Programmes">
                            <option>	M.Tech. (Digital Communication)</option>
                            <option>	M.Tech. in Computer Engineering</option>
                            <option>	M.Tech. in Thermal Engineering)</option>
                            <option>	M.Tech.(Power System)</option>
                            <option>	MBA (Marketing)</option>
                            <option>	MBA (Finance)</option>
                            <option>	MBA (Human Resources)</option>
                        </optgroup>
                        <option></option>

                        <optgroup label="Undergraduate Programmes">

                            <option>	B.Tech.(Computer Science Engineering I - Shift)</option>
                            <option>	B.Tech.(Computer Science Engineering II - Shift)</option>
                            <option>	B.Tech.(Information Technology)</option>
                            <option>	B.Tech.(Electronics & Communication Engg I - Shift)</option>
                            <option>	B.Tech.(Electronics & Communication Engg II - Shift)</option>
                            <option>	B.Tech.(Electrical Engineering)</option>

                        </optgroup>


                    </select>
                </div>
            </div></fieldset>

        <fieldset class="flborder">
            <legend class="leborder">Personal Information</legend>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Email:</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="studentID" name="stuemail" placeholder="example@example.com" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Date-Of-Birth:</label>
                <div class="col-sm-4">
                    <input type="date" name="studob" autofocus required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Contact:</label>
                <div class="col-sm-4">
                    <input type="text" name="stucon" placeholder="Student's contact"class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Nationality:</label>
                <div class="col-sm-4">
                    <input type="text" name="stunation" placeholder="As on passport" class="form-control" id="studentID" autofocus required>
                </div>
            </div>




            <div class="form-group">
                <label class="col-sm-4 control-label" for="studentID">Blood Group:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="stublood" autofocus required>
                        <option></option>
                        <option>A-</option>
                        <option>A+</option>
                        <option>AB-</option>
                        <option>AB+</option>
                        <option>B-</option>
                        <option>B+</option>
                        <option>O-</option>
                        <option>O+</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Father's Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="stufanm" class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Mother's Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="stumanm" class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Home Town:</label>
                <div class="col-sm-4">
                    <input type="text" name="stucity" class="form-control" id="studentID" placeholder="As on permanent address" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">State:</label>
                <div class="col-sm-4">
                    <input type="text" name="stustate" class="form-control" id="studentID" autofocus required placeholder="As on permanent address">
                </div>
            </div></fieldset>

        <fieldset class="flborder">
            <legend class="leborder">Hostel Information</legend>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="studentID">Hostel:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="stuhost" required>
                        <option></option>
                        <option>AAA</option>
                        <option>BAK</option>
                        <option>BMA</option>
                        <option>GP</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">LocalGaurdian's Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="log1na" class="form-control" id="studentID" placeholder="First L.G's name" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Gaurdian_1Contact:</label>
                <div class="col-sm-4">
                    <input type="text" name="log1con" placeholder="First L.G's contact"class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Relation:</label>
                <div class="col-sm-4">
                    <input type="text" name="log1rel"  class="form-control" id="studentID" autofocus required placeholder="First L.G's relation with student">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">LocalGaurdian's Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="log2na" class="form-control" id="studentID" placeholder="Second L.G's name" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Gaurdian_2Contact:</label>
                <div class="col-sm-4">
                    <input type="text" name="log2con" placeholder="Second L.G's contact"class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Relation:</label>
                <div class="col-sm-4">
                    <input type="text" name="log2rel"  class="form-control" id="studentID" autofocus required placeholder="Second L.G's relation with student">
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
			
