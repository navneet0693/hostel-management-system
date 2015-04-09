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
            border: 3px solid darkblue;
            margin:15px;
            padding:5px;
            border-radius:4px;
            box-shadow: 0 0 30px ;
            background:grey;
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
<?php
include 'connections.php';
$v1=$_SESSION["id"];
//echo $v1;
$sql="SELECT *from student WHERE stuid=$v1";
if(!mysql_query($sql))
{
    die('sql error'.mysql_error());
}
$row=mysql_fetch_row(mysql_query($sql));
//var_dump($row);
//header("location:studisp.phtml");
$sql="SELECT *from locgs WHERE stuid=$v1";
$res=mysql_query($sql);
if(!res)
{
    die('sql error'.mysql_error());
}
$sn=1;
while($row3=mysql_fetch_array($res))
{
    if($sn==1)
        $row4=$row3;
    else
        $row5=$row3;
    $sn++;
}
//$row2=mysql_fetch_row(mysql_query($sql));
//var_dump($row3);	
mysql_close($link);
?>
<p align="center"><u>VIEW Your Information.</u></p>

<div class= "container">

    <form class="form-horizontal" role="form" action="update_stu.php" method="POST">
        <fieldset class="flborder">
            <legend class="leborder">College Information</legend>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Student ID:</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="stuid" class="form-control" id="studentID" value="<?php echo$row[0]?>"placeholder="Enter Student's JMI ID" readonly autofocus required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Student Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="stuna" readonly class="form-control" id="StudentID" value="<?php echo$row[1]?>"placeholder="Student's Name" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="studentID">Course:</label>
                <div class="col-sm-4">
                    <select class="form-control" readonly name="stucourse"  required>
                        <option selected><?php echo$row[2]?></option>

                    </select>
                </div>
            </div></fieldset>

        <fieldset class="flborder">
            <legend class="leborder">Personal Information</legend>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Email:</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control" value="<?php echo$row[3]?>" id="studentID" name="stuemail" placeholder="example@example.com" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Date-Of-Birth:</label>
                <div class="col-sm-4">
                    <input type="date" readonly name="studob" value="<?php echo$row[4]?>"autofocus required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Contact:</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="stucon" value="<?php echo$row[5]?>" placeholder="Student's contact"class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Nationality:</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="stunation" value="<?php echo$row[6]?>" placeholder="As on passport" class="form-control" id="studentID" autofocus required>
                </div>
            </div>




            <div class="form-group">
                <label class="col-sm-4 control-label" for="studentID">Blood Group:</label>
                <div class="col-sm-4">
                    <select class="form-control" readonly name="stublood" autofocus required>
                        <option><?php echo$row[7]?></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Father's Name:</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="stufanm" value="<?php echo$row[8]?>" class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Mother's Name:</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="stumanm" value="<?php echo$row[9]?>" class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Home Town:</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="stucity" value="<?php echo$row[10]?>" class="form-control" id="studentID" placeholder="As on permanent address" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">State:</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="stustate" value="<?php echo$row[11]?>" class="form-control" id="studentID" autofocus required placeholder="As on permanent address">
                </div>
            </div></fieldset>

        <fieldset class="flborder">
            <legend class="leborder">Hostel Information</legend>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="studentID">Hostel:</label>
                <div class="col-sm-4">
                    <select class="form-control" readonly name="stuhost" required>
                        <option><?php echo $row[12]?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">LocalGaurdian's Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="log1na" readonly value="<?php echo $row4[2]?>"class="form-control" id="studentID" placeholder="First L.G's name" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Gaurdian_1Contact:</label>
                <div class="col-sm-4">
                    <input type="text" name="log1con" readonly value="<?php echo $row4[3]?>"placeholder="First L.G's contact"class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Relation:</label>
                <div class="col-sm-4">
                    <input type="text" name="log1rel"  readonly value="<?php echo $row4[4]?>"class="form-control" id="studentID" autofocus required placeholder="First L.G's relation with student">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">LocalGaurdian's Name:</label>
                <div class="col-sm-4">
                    <input type="text" name="log2na" class="form-control" readonly value="<?php echo $row5[2]?>"id="studentID" placeholder="Second L.G's name" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Gaurdian_2Contact:</label>
                <div class="col-sm-4">
                    <input type="text" name="log2con" placeholder="Second L.G's contact" readonly value="<?php echo $row5[3]?>"class="form-control" id="studentID" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="studentID">Relation:</label>
                <div class="col-sm-4">
                    <input type="text" name="log2rel"  class="form-control" id="studentID" readonly value="<?php echo $row5[4]?>"autofocus required placeholder="Second L.G's relation with student">
                </div>
            </div>
        </fieldset>

        <fieldset class="flborder">
            <br>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button class="btn btn-default"><a href="student_view.php">Back</a></button>
                </div>
            </div>
        </fieldset>

    </form>
</div>



</body>

</html>


