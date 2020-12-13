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
    <title>Grades 2</title>
    <script src="../js/jquery-1.9.1.min.js">
    <link rel="stylesheet" href="../../images/font-awesome-4.7.0/css/font-awesome.min.css">
        </script>
        <script src="../js/nav.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/register2.css">
        <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <div id="nav1"></div>

    <div class="content">
        <div class="welcome">
            <div class="dash-content">
                <h2>Select Your Class Here!</h2>

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

                                    <button class="btn"><a href="Tcr_class.php">A</a></button>

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

                                    <button class="btn"><a href="Tcr_class.php">B</a></button>

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

                                    <button class="btn"><a href="Tcr_class.php">C</a></button>

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

                                    <button class="btn"><a href="Tcr_class.php">D</a></button>

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