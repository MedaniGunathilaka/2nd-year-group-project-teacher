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
<title>Position</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/register2.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/class.css">
<link rel="stylesheet" href="../css/view.css " type="text/css">


</head>

<body name = top>
<body>


<div id="nav1"></div>	
<div class="content">
			<h2 style="color: #6a7480;">CALCULATE THE POSITION</h2>
				<div class="card">
                    <hr>
                    

                    
                    <form class="search" action="Tcr_position.php">
                <button type="submit" >Calculate Avarage</button>
                <br>
                <hr>
                <button type="submit" >Calculate Position</button>

                </form>
                        <table>
                            <tr>

                                <th>Admission Number</th>
                                <th>Student Name</th>
                                <th>Total Marks</th>
                                <th>Average</th>
                                <th>Position</th>
                            </tr>
                            <tr>
                                <td>ST200001</td>
                                <td>Medani</td>
                                <td>800</td>
                                <td>88.7%</td>
                                <td>3</td>

                            </td>
                                
                            </tr>
                            <tr><td>ST200002</td>
                                <td>Hansika</td>
                                <td>900</td>
                                <td>87.1%</td>
                                <td>6</td>
                                
                                
                            </tr>
                        </table>
                        </div>

                        <br>
						
                        <form class="search" action="Tcr_marks.php">
                <button type="submit" >View Marks</button>
                </form>

                        </body>
        </html>
<?php 
     }
?>