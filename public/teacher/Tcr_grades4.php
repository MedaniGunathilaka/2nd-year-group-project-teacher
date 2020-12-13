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
    <title>Grades 4</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register2.css">
    <link rel="stylesheet" href="../css/button.css">
</head>

<body>

    <div id="nav3"></div>
    <div class="content-area">

        <div class="button-area">
            <h3>SELECT YOUR CLASS HERE</h3>
            <button class="btn"><a href="Tcr_class2.php">A</a></button>
            <button class="btn"><a href="Tcr_class2.php">B</a></button>
            <button class="btn"><a href="Tcr_class2.php">C</a></button>
            <button class="btn"><a href="Tcr_class2.php">D</a></button>

        </div>
    </div>

</body>

</html>
<?php 
     }
?>