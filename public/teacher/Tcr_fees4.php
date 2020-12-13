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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Fees and Fines 4</title>
		<script src="../js/jquery-1.9.1.min.js"></script>
		<script src="../js/nav.js"></script>
		<link rel="stylesheet" href="../css/register2.css " type="text/css">
		<link type="text/css" rel="stylesheet" href="../css/main.css">
		<link type="text/css" rel="stylesheet" href="../css/view.css">
	</head>

<body name=top>
    <body>
        <div id="nav3"></div>

        <div class="content">
            <div class="container" style="margin-left: 140px;width:75%;">
                <form action="../php/register.php" method="POST">
                    	<h1 style="color: #6a7480;">ADD PAYMENT</h1>
                    	<hr>

                    <div class="alert">
                        <hr>
                        <label for="name"><b>Select Student</b></label>
                        <input type="text" placeholder="Enter ID" name="id" required>
                        <button type="submit" class="searchbtn" formaction="Tcr_fees5.php">Search</button>
                </form>
                <hr>
                <h2 align="center"><a href="Tcr_dashboard3.php">Cancel</a></h2>
                <hr>
            </div>
        </div>
    </body>

</html>
<?php 
	 }
?>