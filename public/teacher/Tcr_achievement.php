<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
        }else if($_SESSION['userType'] != 'teacher'){
            header('Location: ../common/error.html');
     }else if(($_SESSION['userType'] == 'teacher') && ($_SESSION['teacherType'] == 'TcrinCharge')){

         $userID = $_SESSION['userID'];
?> 

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Achievements</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/register2.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
</head>

<body name=top>

    <body>


        <div id="nav"></div>
        <div class="content">
            <div class="container">
                <form action="../php/register.php" method="POST">
                    <h1>Achievements</h1>
                    <hr>

                    <label for="name"><b>Student Admission Number</b></label>
                    <input type="text" placeholder="Enter admission number" name="anumber" required>

                    <label for="name"><b>Achievement ID</b></label>
                    <input type="text" placeholder="Enter achievement ID" name="aID" required>

                    <label for="nic"><b>Category ID</b></label>
                    <input type="text" placeholder="Enter category ID" name="cID" required>

                    <label for="email"><b>Achievement Date</b></label>
                    <input type="text" placeholder="Enter achievement date" name="aDate" required>

                    <label for="dob"><b>Date of Enter</b></label>
                    <input type="text" placeholder="Enter date of enter" name="dateofenter" required>

                    <label for="position"><b>Achievement Name</b></label>
                    <input type="text" placeholder="Achievement name" name="aname" required>

                    <label for="position"><b>Position</b></label>
                    <input type="text" placeholder="Enter position" name="position" required>

                    <label for="position"><b>Description</b></label>
                    <input type="text" placeholder="Enter description" name="description" required>

                    <label><b>Important Value:</b></label>
                    <label> <input type="radio" name="Ivalue" value="1">1</label>

                    <label> <input type="radio" name="Ivalue" value="2">2</label>
                    <label><input type="radio" name="Ivalue" value="3">3</label>

                    <br>
                    </br><br>
                    </br>
                    <hr>

                    <button type="submit" class="registerbtn">ADD</button>
                    <hr>

                </form>
                <hr>
                <a href="Tcr_dashboard2.php" class="cancel-btn">Cancel</a>
                <hr>
            </div>
        </div>
        </div>
    </body>

</html>

<?php 
	 }
?>