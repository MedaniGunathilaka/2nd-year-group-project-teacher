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
    <title>Inquieries 1</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/view.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/inquiry.css">
</head>

<body>
    <div id="nav"></div>
    <div class="content">
        <h1 style="color: #6a7480;">Reply Inquieries</h1>
        <div class="card">
            <form>
                <button type="submit" formaction="Tcr_AddInquiery.php">Add Inquiery</button>
            </form>
            <br>
            <br>
        </div>
        <div class="card">
            <hr>
            <table>
                <tr>
                    <th>Inquiry</th>
                    <th>Sender</th>
                    <th>Date</th>
                    <th>Reply</th>

                </tr>
                <tr>
                    <td>Regarding para 2</td>
                    <td>Medani</td>
                    <td>02/03/2020</td>
                    <td>
                        <form class="search" action="">
                            <button type="submit" formaction="Tcr_Reply2.php" align="center">Reply</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        
    </div>
</body>

<?php 
	 }
?>