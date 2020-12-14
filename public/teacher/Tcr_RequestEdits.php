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
    <title>Request Edits 1</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/register2.css">
    <link type="text/css" rel="stylesheet" href="../css/view.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/messages.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div id="nav1"></div>
    <div class=content>
        <div class="container">
            <form action="../php/register.php" method="POST">
                <h3 align="center">Request Edit Form</h3>

                    <label for="fname">ID Number</label>
                    <input type="text" id="iNumber" name="IDNumber" placeholder="Type the ID number here" required>

                    <label for="fname">Name</label>
                    <input type="text" id="name" name="Name" placeholder="Type the name here" required>

                    <label for="Request"><b>Request</b></label>
                    <textarea rows="5" cols="5" name="inquiery" placeholder="Enter the text" required></textarea>

                
                <label for="filename"><b>Upload a proof if available</b></label>
                <input type="file" id="myFile" name="filename" required></br>
                </br>
                </br>
                <button type="submit" class="registerbtn" form action="Tcr_RequestEdits.php">Save</button>
                <a href="Tcr_dashboard1.php" class="cancel-btn">Cancel</a>
                
            </form>
         
        </div>
    </div>
</body>

</html>
<?php 
	 }
?>