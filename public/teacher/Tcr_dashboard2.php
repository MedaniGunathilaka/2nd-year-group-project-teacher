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
    <title>Dashboard 2</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/dashboard.css">
    <link type="text/css" rel="stylesheet" href="../css/button.css">
    <link type="text/css" rel="stylesheet" href="../css/category.css">
</head>

<body name=top>

    <body>
        <div id="nav"></div>
        <div class="content">
            <h1 style="color: #6a7480;">TEACHER INCHARGE </h1>
            <br>
            <hr>
            <table  style="width:90%;margin-left:2%">
                <tr>
                <td style="width:28%">
                        <a href="Tcr_achievement.php">
                            <div class="container">

                                <br>
                                <br>
                                <h2><b>Cricket</b></h2>

                                <img src="../../images/11.jpg" width="110" height="100">
                            </div>
                        </a>
                    </td>
                    <td style="width:28%">
                        <a href="Tcr_achievement.php">
                            <div class="container">

                                <br>
                                <br>
                                <h2><b>Volley ball</b></h2>

                                <img src="../../images/13.jpg" width="110" height="100">
                            </div>
                        </a>
                    </td>

                    <td style="width:28%">
                        <a href="Tcr_Achievement.php">
                            <div class="container">

                                <br>
                                <br>
                                <h2><b>Tamil society</b></h2>

                                <img src="../../images/12.png" width="110" height="100">
                            </div>
                        </a>
                    </td>
                </tr>
            </table>


            <table  style="width:90%;margin-left:2%">
                <tr>
                <td style="width:28%">
                        <a href="Tcr_Achievement.php">
                            <div class="container">

                                <br>
                                <br>
                                <h2><b>Music society</b></h2>

                                <img src="../../images/9.jpg" width="110" height="100">
                            </div>
                        </a>
                    </td>
                    <td style="width:28%">
                        <a href="Tcr_profile.php">
                            <div class="container">

                                <br>
                                <br>
                                <h2><b>Profile</b></h2>

                                <img src="../../images/office.png" width="110" height="100">
                            </div>
                        </a>
                    </td>

                    <td style="width:28%">
                        <a href="newsfeed2.php">
                            <div class="container">

                                <br>
                                <br>
                                <h2><b>News Feed</b></h2>

                                <img src="../../images/6.jpg" width="110" height="100">
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