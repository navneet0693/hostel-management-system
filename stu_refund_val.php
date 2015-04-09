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
            background-color:#CCFFFF;
        }
    </style>

</head>

<body margin="25px"  bgcolor="#dcdcdc" ">
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
        <ul class="nav navbar-nav navbar-right"><li><img src="logo.jpg"></li><li ><a href="contact.html" ><i class="glyphicon glyphicon-phone-alt"></i>Contact Us</a></li></ul>
    </div>
</nav>
<style>
    h1{
        font-size:50%
    color: Black
    }
</style>
<div class="panel panel-success">

    <form class="form-inline" role="form" action="stu_refund.php" method="POST">
        <div class="panel-body">

            <h1 align="center"><u>Choose any one</u></h1>
            <div class="container">
                <label class="radio-inline">
                    <input type="radio" name="value1" value="1">Summer Vacation
                </label>
                <label class="radio-inline">
                    <input type="radio" name="value1" value="2">Winter Vacation</label>
            </div>
            <div class="form-group">
                <p align="center">DATE OF YOUR LEAVING.</p>
                <p align="center" style="white-space: pre;">
                    <label class="col-sm-4 control-label">Day:</label>
                    <select class="form-control" name="day" autofocus required>
                        <option><option>
                            <optgroup label="Date">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </optgroup>

                    </select>
                    <label class="col-sm-4 control-label">Month:</label>
                    <select class="form-control" name="month" autofocus required>
                        <option></option>
                        <optgroup label="Month">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </optgroup>
                    </select>
                </p>
            </div>
            <div class="btn-toolbar">
                <p align="center">
                    <button type="submit" class="btn btn-success btn-sm ">SUBMIT</button>
                    <button type="reset" class="btn btn-success btn-sm ">RESET</button></p>
                </p>
            </div>
    </form>


</div>
</body>
</html>
