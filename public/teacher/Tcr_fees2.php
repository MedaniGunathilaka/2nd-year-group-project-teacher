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
    <title>Fees and Fines 2</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/register2.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/view.css">

</head>

<body name=top>

    <body>

        <div id="nav1"></div>

        <div class="container">
            <div class="content">
                <h2 style="color: #6a7480;">Last Payment History</h2>
                <div class="card">
                    <hr>
                    <table>
                        <tr>
                            <th>Fee Type</th>
                            <th>Amount</th>
                            <th>Month</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td>500</td>
                            <td>January</td>
                            <td>10</td>
                            <td>Paid</td>
                            </td>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td>500</td>
                            <td>February</td>
                            <td>10</td>
                            <td>Paid</td>

                        </tr>
                    </table>
                </div>

                <h2 style="color: #6a7480;">Due Payment</h2>
                <div class="card">


                    <hr>
                    <table>
                        <tr>
                            <th>Fee Type</th>
                            <th>Amount</th>
                            <th>Month</th>
                            <th>Date</th>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td>500</td>
                            <td>January</td>
                            <td>10</td>
                            </td>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td>500</td>
                            <td>February</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
                <form action="/action_page.php">
                    <h2 style="color: #6a7480;">Add Payment</h2>

                    <div class="card">
                        <hr>
                        <div class="container">
                            <label for="fname">Fee Type</label>
                            <input type="text" id="iqID" name="InquierID" placeholder="Type Inquier ID.." required>

                            <label for="fname">Amount</label>
                            <input type="text" id="iqID" name="InquierID" placeholder="Type Inquier ID.." required>

                            <label for="fname">Month</label>
                            <input type="text" id="iqID" name="InquierID" placeholder="Type Inquier ID.." required>

                            <label for="fname">Date</label>
                            <input type="text" id="iqID" name="InquierID" placeholder="Type Inquier ID.." required>

                            <a href="#"><button type="submit" class="searchbtn" formaction="Tcr_fees3.php">add</button>

                                <h1> </h1>
                                <h2 align="center"><a href="Tcr_fees1.php">Cancel</a></h2>

                        </div>

                </form>
                <hr>
                <hr>
    </body>

</html>

<?php 
     }
?>