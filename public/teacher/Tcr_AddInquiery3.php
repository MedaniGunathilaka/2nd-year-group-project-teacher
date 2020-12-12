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
    <title>Inquieries 3</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/register2.css">
    <link type="text/css" rel="stylesheet" href="../css/view.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/messages.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <div id="nav3"></div>

    <div class=content>

        <div class="container">
            <hr>
            <form action="../../src/add_inquiry.php" method="POST">
            <h1 style="color: #6a7480;">INQUIERY FORM</h1>
                <label for="title"><b> Inquiry Title</b></label>
                <input type="text" id="title" name="title" placeholder="Type Inquiry ID.." required>

                <label for="reciever"><b>Reciever's ID</b></label>
                <input type="text" id="reciever" name="reciever" placeholder="Type Reciever's ID.." required>

                <label for="inq"><b> Message </b></label>
                <textarea id="msge" name="msge" placeholder="Write something.." style="height:200px" required></textarea>

                <button type="submit" class="registerbtn" name="add_inq">Save</button>
                <a href="Tcr_ReplyInquiery3.php" class="cancel-btn">Cancel</a>
                <hr>
            </form>
        </div>
    </div>

</body>

</html>

<?php 
	 }
?>