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
            <li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li>
        </ul>
    </div>
</nav>

<?php
include 'connections.php';
    $v1=$_POST['stuid'];
    $v2=$_POST['stuna'];
    $v3=$_POST['stucourse'];$v4=$_POST['stuemail'];
    $v5=$_POST['studob']; $v6=(int)$_POST['stucon'];
    $v7=$_POST['stunation'];$v8=$_POST['stublood'];
    $v9=$_POST['stufanm'];$v10=$_POST['stumanm'];$v11=$_POST['stucity'];
    $v12=$_POST['stustate'] ;$v13=$_POST['stuhost'];

    $v14=$_POST['log1na'];
    $v15=$_POST['log1con'];
    $v16=$_POST['log1rel'];
    $v17=$_POST['log2na'];
    $v18=$_POST['log2con'];
    $v19=$_POST['log2rel'];

    $sql="INSERT INTO student VALUES($v1,'$v2','$v3','$v4','$v5',$v6,'$v7','$v8','$v9','$v10','$v11','$v12','$v13')";

    if(!mysql_query($sql))
    {	echo "h1";
        die('sql error'.mysql_error());
    }
    $sql="INSERT INTO locgs(stuID,logna,logcon,logrel) VALUES($v1,'$v14',$v15,'$v16')";
    if(!mysql_query($sql))
    {	echo "h2";
        die('sql error'.mysql_error());
    }
    $sql="INSERT INTO locgs(stuID,logna,logcon,logrel) VALUES($v1,'$v17',$v18,'$v19')";

    if(!mysql_query($sql))
    {	echo "h3";
        die('sql error'.mysql_error());
    }
    $sql="select *from countingvalues";
    if(!mysql_query($sql))
    {	echo "h4";
        die('sql error'.mysql_error());
    }
    $res=mysql_query($sql);
    $row=mysql_fetch_row($res);
    $str="stupass".$row[0];
    $sql="Insert into log_in values($v1,'$str',3)";
    if(!mysql_query($sql))
    {	echo "h5";
        die('sql error'.mysql_error());
    }
    $row[0]++;
    $sql="update countingvalues set counter1=$row[0]";
    if(!mysql_query($sql))
    {	echo "h6";
        die('sql error'.mysql_error());
    }
    $sql="select (hostel_id) from hostel_table where hostel_name='$v13'";
    if(!mysql_query($sql))
    {	echo "h7";
        die('sql error'.mysql_error());
    }
    $row=mysql_fetch_row(mysql_query($sql));



?>
    <div class= "container">
        <form class="form-horizontal" role="form" action="finally_added.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-4" for="studentID">Student ID:</label>
            <div class="col-sm-4">
                <input type="text" name="stuid" readonly value="<?php echo $v1 ?>"class="form-control" id="studentID" placeholder="Enter Student's JMI ID" autofocus required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="studentID">Hostel Name:</label>
            <div class="col-sm-4">
                <input type="text" name="stuhost" readonly value="<?php echo $v13 ?>"class="form-control" id="StudentID" placeholder="Student's Name" autofocus required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="studentID">Room Number:</label>
            <div class="col-sm-4">
                <select class="form-control" name="roomselect" required autofocus>
                    <option></option>
                    <?php
                    $sql= "SELECT DISTINCT(room_no) FROM rooms WHERE avail=0 AND hostel_id=$row[0]";
                    $res=mysql_query($sql);
                    if(!res)
                    {
                        die('sql error'.mysql_error());
                    }

                    while($row1 = mysql_fetch_array($res))
                    {

                        echo "<option>" . $row1['room_no'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-5">
                <button class="btn btn-default"><a href="add_stu_to_room.php.php">Back</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </div>

        </form>
    </div>
</body>
</html>
