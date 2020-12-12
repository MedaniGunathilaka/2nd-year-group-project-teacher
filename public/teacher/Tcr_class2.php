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
    <title>Class</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register2.css">
    <link type="text/css" rel="stylesheet" href="../css/class.css">
    <link rel="stylesheet" href="../css/view.css " type="text/css">
</head>

<body>


    <div id="nav3"></div>

    <div class="content">
        <h2 style="color: #6a7480;">Class A</h2>
        <form class="search" action="Tcr_marks2.php">
            <button type="submit">View Marks</button>
        </form>
        <form class="search" action="Tcr_csv_marks2.php">
            <button type="submit">Upload Marks</button>
        </form>

        <div class=l-part>
            <label for="name"><b>Class Name</b></label>
            <input type="text" placeholder="12-A" name="id" required>
        </div>

        <div class=r-part>
            <label for="name"><b>Class Teacher</b></label>
            <input type="text" placeholder="W.H.M.Gunathilaka" name="name" required>
        </div>

        <div class="card">
            <br>
            <br>
            <hr>
            <table>
                <tr>
                    <th>Admission number</th>
                    <th>Student name</th>
                    <th>View Profile</th>
                </tr>
                <tr>
                    <td>AAA</td>
                    <td>BBB</td>
                    <td>
                        <form class="search" action="Sprofile2.php">
                            <button type="submit">View</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>AAA</td>
                    <td>BBB</td>
                    <td>
                        <form class="search" action="SProfile2.php">
                            <button type="submit">View</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
<?php 
}?>