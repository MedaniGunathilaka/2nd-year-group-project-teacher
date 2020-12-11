<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
     }else if(($_SESSION['userType'] == 'teacher') && ($_SESSION['teacherType'] == 'TcrinCharge')){

         $userID = $_SESSION['userID'];
?> 


<?php
            
			include ('../../src/newsfeed.php');
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News Feed</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../../images/font-awesome-4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/news.css">
</head>

<body>
<div id="nav"></div>


		<div class="content">
			


	<div class="feed">
	
		
		<div class="btn-box">

			<button id="button2" onclick="NEWS()">News and Events</button>
			<button id="button1" onclick="ABOUT()">Notifications</button>
		</div>

		<div id="page2" class="page">
			<div class="banner">
			</div>
			<table>

<?php
$size = mysqli_fetch_assoc($res1);
$c = $size['COUNT(*)'];
$i = 1;
$n=1;



for($i;$i <= $c;$i++){
    ?>
        <tr>
            <?php
    for($j=1;$j<4 && $j < $c;$j++){
        ?>
        <td>	
            <?php
            $n++;
                    $row=mysqli_fetch_array($res);?>
                    
                                        <table class="inner">
                                            <tr>
											
								<td class= "time">
									<p class="d"> <?php echo $row['newsDate']?> <span><?php echo  $row['newsTime']?></span></p>
								</td>
								
							</tr>
							<tr>
                                                <th>
                                    <h2><b><?php echo $row['title'] ?></b></h2>
                                    <hr>
                                </th></tr>
                                        <tr>
                                <td>
                                    <p> <?php echo substr($row['news'], 0, 200) . "..."?></p>
                                </td>
                                    </tr>
									<tr>
                                <td>
								<form method="POST" action="news2.php">
									<input type="hidden" name="newsID" value="<?php echo $row['newsID']; ?>" />
									<button class="view-btn" style="width:100px;" type="submit"  id="view_news" name="view_news"><b>View More</b></button>
								</form>
                                </td>
							</tr>
							
                                </table>
                                </td>
                                
                            <?php if($n>$c ){
                                break;
                            } } ?>
                                </tr>
            <?php
            if($n>$c ){
            break;
        }			

    } ?>

</table>
		
	</div>


		<div id="page1" class="page">
		
		<a name="new"></a>
		<table class="none" >
			<tr class="none">
				<td class="none" >
				</td>
				<td  class="none">
					<button class="view-btn old"><span><a href= "#old"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span></button>
				</td>
			</tr>
		</table>
		
		<table >
			<h2>New Notifications</h2>
			<hr>
			<tr>
				<td class="message">
					
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification2.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				</td>
			</tr>

		</table>
		<a name="old"></a>
		<table class="none" >
			<tr class="none">
				<td class="none" >
				</td>
				<td  class="none">
					<button class="view-btn old"><span><a href= "#new"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></span></button>
				</td>
			</tr>
		</table>
		
		<table >
			<h2>Old Notifications</h2>
			<hr>
			<tr>
			
				<td class="message">
					
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>
			<tr>
				<td class="message">
						<h2>FIRST NOTIFICATION</h2>
					
						<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
					
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
				
				</td>
			</tr>

		</table>
	</div>
</div>
</div>
		 
	
	</div>	
	<script>
		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");
		var button1 = document.getElementById("button1");
		var button2 = document.getElementById("button2");
		
		let url = window.location.href;
		if(url ==  window.location.href){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}else if(url == "http://localhost/CL-GEN/public/admin/newsfeed.php?loggedin"){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
		}else if(url == "http://localhost/CL-GEN/public/teacher/newsfeed3.php#old"){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}else if(url == "http://localhost/CL-GEN/public/teacher/newsfeed3.php#new"){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}

		function ABOUT(){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#000";
			button2.style.color= "#008080";
			
		}

		function NEWS(){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
		}
	</script>	
			

		
</body>
</html>

<?php 
	 }
?>