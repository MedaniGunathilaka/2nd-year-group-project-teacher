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
    <title>Marks</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/register2.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/class.css">
    <link rel="stylesheet" href="../css/view.css " type="text/css">
</head>

<body name=top>

    <body>
        <div id="nav1"></div>
        <div class="content">
            <h2>CLASS A-MARKS</h2>
            <div class="card">
                <hr>
                <form class="search" action="Tcr_marks.php">
                    <button type="submit">Calculate Total Marks</button>
                    <br>
                    <table>
                        <tr>

                            <th>Admission Number</th>
                            <th>Student Name</th>
                            <th>Subject 1</th>
                            <th>Subject 2</th>
                            <th>Subject 3</th>
                            <th>Subject 4</th>
                            <th>Subject 5</th>
                            <th>Subject 6</th>
                            <th>Group Subject 1</th>
                            <th>Group Subject 2</th>
                            <th>Group Subject 3</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>ST200001</td>
                            <td>Medani</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>678</td>

                            </td>
                        </tr>

                        <tr>
                            <td>St200002</td>
                            <td>Medani</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>76</td>
                            <td>865</td>

                        </tr>
                    </table>
            </div>
            <br>
            <br>

            <form class="search" action="Tcr_position.php">
                <button type="submit" formaction="Tcr_position.php">Calculate the position and average</button>
                <br>
                <button type="submit" formaction="Tcr_class.php">Cancel</button>
            </form>

    </body>

</html>

<?php 
     }
?>