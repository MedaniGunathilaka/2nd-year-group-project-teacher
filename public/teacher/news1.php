<?php
session_start();

if (!isset($_SESSION['userType']) && !isset($_SESSION['userID'])) {
    $error = "Please Login!";
    header('Location: ../common/loginFile.php?error=' . $error);
} else if ($_SESSION['userType'] != 'teacher') {
    header('Location: ../common/error.html');
} else {

    $userID = $_SESSION['userID'];


?>


    <!DOCTYPE html>
    <html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News</title>
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/nav.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/pop.css">
        <link type="text/css" rel="stylesheet" href="../css/button.css">
        <link type="text/css" rel="stylesheet" href="../css/register.css">
        <link type="text/css" rel="stylesheet" href="../css/main.css">

    </head>
    <?php

    if (isset($_POST['view_news'])) {


        require_once '../../config/conn.php';

        $newsID = $_POST['newsID'];

        $sql = "SELECT * FROM newsfeed WHERE newsID='$newsID'";

        $res = mysqli_query($conn, $sql);

        if ($res) {
            //echo "Sucessfull";
        } else {
            echo "failed";
        }
    }
    ?>

    </head>

    <body>

        <div id="nav1"></div>
        <div class="content" style="width:120%;margin-left:250px;">
            <br>
            <div class="container news">


                <?php
                while ($row = mysqli_fetch_assoc($res)) {

                ?>
                    <p class="da" style="float:right;"> <?php echo $row['newsDate'] . " || " .  $row['newsTime'] ?></p>
                    <br>
                    <br>
                    <hr>
                    <h2><?php echo $row['title']; ?></h2>
                    <p><?php echo $row['news']; ?></p>
                    <?php
                    if ($row['image'] == TRUE) { ?>
                        <div class="image">
                            <?php echo "<img src='../../images/" . $row['image'] . "'>"; ?>
                        </div>
                <?php }
                }
                ?>
                <hr>
                <button class="view-btn"><a href="newsfeed.php">Back</a></button>



            </div>
        </div>


    </body>

    </html>

<?php } ?>