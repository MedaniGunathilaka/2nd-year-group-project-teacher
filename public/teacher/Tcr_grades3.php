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
    <title>Grades 3</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/register4.css">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body name=top>

    <body>
        <div id="nav3"></div>
        <div class="content">
            <div class="welcome">
                <div class="dash-content">
                    <h2>Primary Section</h2>

                </div>
            </div>

            <table class="statis one">
                <tr>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 1</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 2</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>


                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 3</a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>


            <table class="statis one">
                <tr>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 4</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 5</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>


                </tr>
            </table>


            <div class="welcome">
                <div class="dash-content">
                    <h2>Oridinary Level Section</h2>

                </div>
            </div>

            <table class="statis one">
                <tr>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 6</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 7</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>


                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 8</a></button>

                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
            </table>


            <table class="statis one">
                <tr>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 9</a></button>

                                    </div>
                                </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 10</a></button>

                                    </div>
                                </div>
                            </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 11</a></button>

                                    </div>
                                </div>
                    </td>
                    <td>


                </tr>
            </table>

            <div class="welcome">
                <div class="dash-content">
                    <h2>Advanced Level Section1</h2>

                </div>
            </div>

            <table class="statis one">
                <tr>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 12-Bio</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 12-Maths</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>


                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 12-Arts</a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 12-Com</a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>


            <div class="welcome">
                <div class="dash-content">
                    <h2>Advanced Level Section2</h2>

                </div>
            </div>

            <table class="statis one">
                <tr>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade13-Bio</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 13-Maths</a></button>

                                    </div>

                                </div>
                            </div>
                    </td>


                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 13-Arts</a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="box">
                            <i class="fa fa-users "></i>
                            <div class="info">
                                <div class="info"><br>
                                    <div class="button-area">

                                        <button class="btn"><a href="Tcr_grades2.php">Grade 13-Com</a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
</body>

</html>
<?php
      }     
   ?>