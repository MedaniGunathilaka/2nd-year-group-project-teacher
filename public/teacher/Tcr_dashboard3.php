<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
        }else if($_SESSION['userType'] != 'teacher'){
            header('Location: ../common/error.html');
     }else if(($_SESSION['userType'] == 'teacher') && ($_SESSION['teacherType'] == 'both')){

         $userID = $_SESSION['userID'];
   
         ?>
     

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard 3</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/dashboard.css">
    <link type="text/css" rel="stylesheet" href="../css/button.css">
    <link type="text/css" rel="stylesheet" href="../css/category.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div id="nav3"></div>
    <div class="content">
        <hr>
        <table  style="width:90%;margin-left:2%">
            <tr>
            <td style="width:28%">
                    <a href="Tcr_class2.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Upload Marks</b></h2>

                            <img src="../../images/chart2.png" width="110" height="100">
                        </div>
                    </a>
                </td>
                <td style="width:28%">
                    <a href="Tcr_position2.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Generate Positions</b></h2>

                            <img src="../../images/sport.png" width="110" height="100">
                        </div>
                    </a>
                </td>

                <td style="width:28%">
                    <a href="Tcr_AddInquiery3.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Inquiries and Replies</b></h2>

                            <img src="../../images/lms.png" width="110" height="100">
                        </div>
                    </a>
                </td>
            </tr>
        </table>


        <table  style="width:90%;margin-left:2%">
            <tr>
            <td style="width:28%">
                    <a href="Tcr_fees4.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Fees and Fines</b></h2>

                            <img src="../../images/4.jpg" width="110" height="100">
                        </div>
                    </a>
                </td>
                <td style="width:28%">
                    <a href="Tcr_achievement2.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Cricket</b></h2>

                            <img src="../../images/11.jpg" width="110" height="100">
                        </div>
                    </a>
                </td>

                <td style="width:28%">
                    <a href="Tcr_achievement2.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Volleyball</b></h2>

                            <img src="../../images/13.jpg" width="110" height="100">
                        </div>
                    </a>
                </td>


            </tr>
        </table>

        <table  style="width:90%;margin-left:2%">
            <tr>
            <td style="width:28%">
                    <a href="Tcr_achievement2.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Tamil society</b></h2>

                            <img src="../../images/society.png" width="110" height="100">
                        </div>
                    </a>
                </td>
                <td style="width:28%">
                    <a href="Tcr_profile3.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>Profile</b></h2>

                            <img src="../../images/teacher.png" width="110" height="100">
                        </div>
                    </a>
                </td>
                </td>
                <td style="width:28%">
                    <a href="newsfeed3.php">
                        <div class="container">

                            <br>
                            <br>
                            <h2><b>NewsFeed</b></h2>

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