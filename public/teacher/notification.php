
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
  <title>Notification 1</title>
  	<script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
  	<link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/pop.css">
    <link type="text/css" rel="stylesheet" href="../css/button.css">
	
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body >


<div id="nav1"></div>

<div class= "content">
        <br>
			<div class="container ">
                <hr>
                

                    <h2>About Character Certficate Application</h2>
                    <hr>
                    <p>More than 2,000 inmates in New Jersey were released Wednesday in an attempt to mitigate the spread of the coronavirus in the state’s prison system — almost a month after the state passed one of the first bills in the U.S. to reduce sentences because of the pandemic.

Liz Velez, a New Jersey Department of Corrections spokesperson, told NBC News in an email that 2,261 adults nearing the end of their prison sentences were released early Wednesday amid rising coronavirus cases in some state prisons.

As of Wednesday morning, the department recorded at least 51 inmate deaths and 4,111 cases, including employees and inmates, since the beginning of April, according to department Covid-19 data.

According to the Marshall Project, which is tracking state and federal prison Covid-19 data, the numbers represent one of the highest coronavirus death rates in the nation.

The move came less than a month after Gov. Phil Murphy signed the bill to reduce sentences for inmates to curb the spread of Covid-19 in the state’s prison system.

Under the S2519 bill, prisoners in New Jersey can get their sentences reduced by as many as eight months for every month spent behind bars during the pandemic. People serving time for murder or sexual assault, sex offenders and inmates in federal prisons and county jails are not eligible.

Velez said the law requires prisons to release inmates regardless of whether they tested positive for coronavirus. Eleven Covid-19 positive individuals will receive “personalized transportation plans” in which they will be “medically isolated,” Velez said in an email</p>
					
        <button class="btn editbtn">Accept</button>		
        <button class="btn viewbtn" onclick="open()" id="request">Request Edit</button>	
        
        <div id="edit-form" class="model">
      

            <div class="modal-content">
                <span class="close1">&times;</span>
                <h2>Edit Request Form</h2>
                    <form>
                        <hr>
                             <label for="edit"><b>Requested Edits</b></label>
                            <textarea id="edit" name="edit" rows="4" cols="50"></textarea>
                            <label for="reason"><b>Reason for request</b></label>
                            <textarea id="reason" name="reason" rows="4" cols="50"></textarea>
                            <br>
                            <label for="prrof"><b>Proof Document</b></label>
                            <input type="file"  name="proof" required>
                        
                            <button type="submit" class="registerbtn">Request</button>
                        <hr>
                    </form>
            </div>
    
        </div>
					
	
			</div>
	</div>

<script>
    
var form1 = document.getElementById("edit-form");

var formbtn = document.getElementById("request");

var close1 = document.getElementsByClassName("close1")[0];


formbtn.onclick = function() {
  form1.style.display = "block";
}

close1.onclick = function() {
  form1.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
</body>
</html>


<?php } ?>