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
    <title>Dashboard  1</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/dashboard.css">
    <link type="text/css" rel="stylesheet" href="../css/button.css">
    <link type="text/css" rel="stylesheet" href="../css/category.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div id="nav1"></div>
    <div class="content">
        <h1 style="color: #6a7480;">CLASS TEACHER</h1>
        <br>
        <hr>
        <table  style="width:90%;margin-left:2%">
            <tr>
            <td style="width:28%">
                    <a href="Tcr_class.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Upload Marks</b></h2>

                            <img src="../../images/2.png" width="110" height="100">
                        </div>
                    </a>
                </td>
                <td style="width:28%">
                    <a href="Tcr_position.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Generate Positions</b></h2>

                            <img src="../../images/1.png" width="110" height="100">
                        </div>
                    </a>
                </td>

                <td style="width:28%">
                    <a href="Tcr_AddInquiery.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Inquiries and Replies</b></h2>

                            <img src="../../images/3.jpg" width="110" height="100">
                        </div>
                    </a>
                </td>
            </tr>
        </table>


        <table style="width:90%;margin-left:2%">
            <tr>
            <td style="width:28%">
                    <a href="Tcr_fees1.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Fees and Fines</b></h2>

                            <img src="../../images/4.jpg" width="110" height="100">
                        </div>
                    </a>
                </td>
                <td style="width:28%">
                    <a href="Tcr_profile2.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Profile</b></h2>

                            <img src="../../images/user.png" width="110" height="100">
                        </div>
                    </a>
                </td>

                <td style="width:28%">
                    <a href="newsfeed.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>News Feed</b></h2>

                            <img src="../../images/online.png" width="110" height="100">
                        </div>
                    </a>
                </td>
            </tr>
        </table>





    </div>

</body>
</html>


<?php 
	 }
?>