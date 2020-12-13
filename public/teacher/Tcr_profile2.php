<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
        }else if($_SESSION['userType'] != 'teacher'){
            header('Location: ../common/error.html');
     }else if(($_SESSION['userType'] == 'teacher') && ($_SESSION['teacherType'] == 'classTcr')){

         $userID = $_SESSION['userID'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile 2</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/register2.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/tabs.css">
    <link type="text/css" rel="stylesheet" href="../css/profile4.css">
</head>

<body name=top>

    <body>
        <div id="nav1"></div>
        <div class="content">
            <div class="feed">
                <div class="container">


                    <h2><b>User Information</b></h2>
                    <hr>
                    <div class="card">
                        <form>
                            <div class="photo">
                                <img src="../../images/5.jpg" width="160px" height="160px">
                            </div>
                            <div class="first">
                                <div class="first">
                                    <div class="first">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="input-username">First name</label>
                                                    <input type="text" id="fname" class="inputs"
                                                        placeholder="First name" value="Hansika">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="label" for="input-address">Middle name</label>
                                                    <input type="text" id="mname" class="inputs"
                                                        placeholder="Middle name" value="Medani">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="input-username">Last name</label>
                                                    <input type="text" id="lname" class="inputs" placeholder="Last name"
                                                        value="Gunathilaka">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="adNo">NIC</label>
                                                    <input type="text" id="adNo" class="inputs"
                                                        placeholder="Admission Number" value="966601744V">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="input-username">ID</label>
                                                    <input type="text" id="Edate" class="inputs"
                                                        placeholder="Entered Date" value="TC20/0001">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="label" for="input-username">Date of Birth</label>
                                                    <input type="text" id="Egrade" class="inputs"
                                                        placeholder="Entered Grade" value="1996.06.08">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3><b>Contact Information</b></h3>
                                    <div class="first">
                                        <h4><b>Address</b></h4>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">

                                                    <label class="label" for="street">Street</label>
                                                    <input id="street" class="inputs" placeholder="Home Address"
                                                        value="65/A, R. Silva road" type="text">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="label" for="city">City</label>
                                                    <input id="city" class="inputs" placeholder="Home Address"
                                                        value="Kelaniya" type="text">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="label" for="district">District</label>
                                                    <input id="district" class="inputs" placeholder="Home Address"
                                                        value="Colombo" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="ContactNumber">Contact Number</label>
                                                    <input type="text" id="ContactNumber" class="inputs"
                                                        placeholder="Contact Number" value="0112345698">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="adNo">Email</label>
                                                    <input type="text" id="email" class="inputs" placeholder="Email"
                                                        value="hansikamedani@gmail.com">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<?php 
	 }
?>