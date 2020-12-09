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
    <title>Inquiries1</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/tabs.css">

</head>

<body>
    <?php

require_once '../../config/conn.php';

$count = "SELECT COUNT(*) FROM inquiry";
    $sql = "SELECT * FROM inquiry WHERE reciever = '$userID' ORDER BY inquiryID DESC";
   

    $res= mysqli_query($conn,$sql);
    $res1= mysqli_query($conn,$count);

    if($res){
    //echo "Sucessfull";
    }
    else{
    echo"failed";	
    }


?>

    <div id="nav"></div>


    <div class="content">

        <!-- <div class="front">
		<h1>WELCOME!</h1>
	
		</div> -->


        <div class="feed">
<br>
            <div class="btn-box">
                <button id="button1" onclick="RECIEVED()">Recieved Inquiries</button>
                <button id="button2" onclick="SENT()">Sent Inquiries</button>
            </div>
            <div id="page4" class="page">


                <div class="card">
                    <?php
    if(mysqli_num_rows($res) == 0){ 
         ?>
                    <h2><b>No Recieved Inquiries</b></h2>
                    <img src="../../images/message.png">
                    <?php
           } else{
		while($row=mysqli_fetch_assoc($res)){
			?>
                    <div class="container">

                        <h2><b><?php echo "From :" .$row['sender']?></b></h2>
                        <h2><b><?php echo "Title :" . $row['title'] ?></b></h2>
                        <p> <?php echo $row['message'] ?></p>
                    </div>
                    <?php }}
        ?>


                </div>

            </div>


        </div>
        <div id="page2" class="page">
            <div class="card">
                <div class="container">
                    <h2><b>To Reciever : Inquiry 1</b></h2>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum</p>
                </div>
                <div class="container">
                    <h2><b>To Reciever : Inquiry 2</b></h2>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum</p>
                </div>
                <div class="container">
                    <h2><b>To Reciever : Inquiry 33</b></h2>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum</p>
                </div>
                <div class="container">
                    <h2><b>To Reciever : Inquiry 4</b></h2>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum</p>
                </div>
                <div class="container">
                    <h2><b>To Reciever : Inquiry 5</b></h2>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum</p>
                </div>
            </div>
        </div>

    </div>
    </div>

    </div>
    </div>


    </div>
    <script>
    var page1 = document.getElementById("page4");
    var page2 = document.getElementById("page2");
    var button1 = document.getElementById("button1");
    var button2 = document.getElementById("button2");

    let url = window.location.href;
    if (url == "http://localhost/CL-GEN/public/teacher/inquiries2.php") {
        page1.style.display = "block";
        page2.style.display = "none";
        button1.style.color = "#008080";
        button2.style.color = "#000";

    } else if (url == "http://localhost/CL-GEN/public/admin/newsfeed.php?loggedin") {
        page1.style.display = "block";
        page2.style.display = "none";
        button1.style.color = "#008080";
        button2.style.color = "#000";
    }

    function RECIEVED() {
        page1.style.display = "block";
        page2.style.display = "none";
        button1.style.color = "#008080";
        button2.style.color = "#000";

    }

    function SENT() {
        page1.style.display = "none";
        page2.style.display = "block";
        button1.style.color = "#000";
        button2.style.color = "#008080";
    }
    </script>





</body>

</html>

<?php 
	}
?>