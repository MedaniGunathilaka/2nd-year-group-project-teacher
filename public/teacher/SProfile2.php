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

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>

    <link rel="stylesheet" href="../css/register.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/news.css">
    <link type="text/css" rel="stylesheet" href="../css/profile.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div id="nav3"></div>
    <div class="content">

        <div class="feed">
            <div class="btn-box">


                <button id="button1" onclick="GENERAL()">General</button>
                <button id="button2" onclick="EXAMS()">Exam Resuts</button>
                <button id="button3" onclick="ACHIEVEMENTS()">Achievements</button>
                <button id="button4" onclick="PARENT()">Guardian</button>
            </div>

            <!-- General Page 1 -->
            <div id="page1" class="page stu">
                <div class="container">


                    <h2><b>User Information</b></h2>
                    <hr>
                    <div class="card">
                        <form>
                            <div class="photo">
                                <img src="../../images/student.png" width="160px" height="160px">

                            </div>
                            <div class="first">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="input-username">First name</label>
                                            <input type="text" id="fname" class="inputs" placeholder="First name"
                                                value="Katy">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="label" for="input-address">Middle name</label>
                                            <input type="text" id="mname" class="inputs" placeholder="Middle name"
                                                value="Laura">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="input-username">Last name</label>
                                            <input type="text" id="lname" class="inputs" placeholder="Last name"
                                                value="Maxwell">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Admission Number</label>
                                            <input type="text" id="adNo" class="inputs" placeholder="Admission Number"
                                                value="18020275">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="input-username">Entered Date</label>
                                            <input type="text" id="Edate" class="inputs" placeholder="Entered Date"
                                                value="2003.02.02">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="label" for="input-username">Entered Grade</label>
                                            <input type="text" id="Egrade" class="inputs" placeholder="Entered Grade"
                                                value="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3><b>Contact Information</b></h3>
                            <div class="first">
                                <h4><b>Address</b></h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">

                                            <label class="label" for="street">Street</label>
                                            <input id="street" class="inputs" placeholder="Home Address"
                                                value="65/A, R. Silva road" type="text">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="label" for="city">City</label>
                                            <input id="city" class="inputs" placeholder="Home Address" value="Kelaniya"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="label" for="district">District</label>
                                            <input id="district" class="inputs" placeholder="Home Address"
                                                value="Colombo" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="ContactNumber">Contact Number</label>
                                            <input type="text" id="ContactNumber" class="inputs"
                                                placeholder="Contact Number" value="0112356987">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Email</label>
                                            <input type="text" id="email" class="inputs" placeholder="Email"
                                                value="hansikamedani@gmail.com">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="first">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="input-username">First name</label>
                                            <input type="text" id="input-username" class="inputs" placeholder="Username"
                                                value="lucky">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="label" for="input-address">Middle name</label>
                                            <input id="input-address" class="inputs" placeholder="Home Address"
                                                value="Bld " type="text">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="input-username">Last name</label>
                                            <input type="text" id="input-username" class="inputs" placeholder="Username"
                                                value="Deron">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>

            </div>

            <!-- /General Page 1 -->

            <div id="page2" class="page stu">

                <div class="container">
                    <h2><b>GCE Ordinary Level Results</b></h2>
                    <br>
                    <div class="first">
                        <div class="row">
                            <div class="col">
                                <div class="form-group ">
                                    <label class="label" for="index">Index Number</label>
                                    <input type="text" id="index" class="inputs" placeholder="First name"
                                        value="1234567">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label" for="year">Year</label>
                                    <input type="text" id="year" class="inputs" placeholder="Middle name" value="2014">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group ">
                                    <label class="label" for="sub1">Sinhala</label>
                                    <input type="text" id="sub1" class="inputs" placeholder="First name" value="A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label" for="sub2">English</label>
                                    <input type="text" id="mname" class="inputs" placeholder="Middle name" value="A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group ">
                                    <label class="label" for="sub3">Maths</label>
                                    <input type="text" id="lname" class="inputs" placeholder="Last name" value="A">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group ">
                                    <label class="label" for="sub4">Science</label>
                                    <input type="text" id="fname" class="inputs" placeholder="First name" value="A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label" for="sub5">History</label>
                                    <input type="text" id="mname" class="inputs" placeholder="Middle name" value="A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group ">
                                    <label class="label" for="sub6">Religion</label>
                                    <input type="text" id="lname" class="inputs" placeholder="Last name" value="A">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group ">
                                    <label class="label" for="sub7">ICT</label>
                                    <input type="text" id="fname" class="inputs" placeholder="First name" value="A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label" for="sub8">Literature</label>
                                    <input type="text" id="mname" class="inputs" placeholder="Middle name" value="A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group ">
                                    <label class="label" for="sub9">Commerce</label>
                                    <input type="text" id="lname" class="inputs" placeholder="Last name" value="A">
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                    <hr>
                    <div class="first">
                        <h2><b>gce advanced level results</b></h2>
                        <div class="first">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group ">
                                        <label class="label" for="index">Index Number</label>
                                        <input type="text" id="index" class="inputs" placeholder="First name"
                                            value="1234567">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="label" for="year">Year</label>
                                        <input type="text" id="year" class="inputs" placeholder="Middle name"
                                            value="2017">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group ">
                                        <label class="label" for="Asub1">Maths</label>
                                        <input type="text" id="Asub1" class="inputs" placeholder="First name" value="A">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="label" for="Asub2">Physics</label>
                                        <input type="text" id="Asub2" class="inputs" placeholder="Middle name"
                                            value="A">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="label" for="Asub3">Chemistry</label>
                                        <input type="text" id="Asub2" class="inputs" placeholder="Middle name"
                                            value="A">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group ">
                                        <label class="label" for="Asub4">General English</label>
                                        <input type="text" id="Asub1" class="inputs" placeholder="First name" value="A">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="label" for="Asub5">Common General</label>
                                        <input type="text" id="Asub2" class="inputs" placeholder="Middle name"
                                            value="A">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div id="page3" class="page stu">
                <div class="container">

                    <h2><b>SPORT CATEGORY</b></h2>
                    <div class="first">
                        <div class="first">
                            <div class="first">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">

                                            <input type="text" id="fname" class="inputs" placeholder="First name"
                                                value="Karate">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">

                                            <input type="text" id="mname" class="inputs" placeholder="Middle name"
                                                value="Foot ball">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">

                                            <input type="text" id="lname" class="inputs" placeholder="Last name"
                                                value="Cricket">
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">

                                            <input type="text" id="fname" class="inputs" placeholder="First name"
                                                value="Volleyball">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">

                                            <input type="text" id="mname" class="inputs" placeholder="Middle name"
                                                value="Netball">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">

                                            <input type="text" id="lname" class="inputs" placeholder="Last name"
                                                value="Sumo">
                                        </div>
                                    </div>
                                </div>


                                <h2><b>Achievements</b></h2>
                                <hr>
                                <div class="card">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="adNo">ID-01</label>
                                                    <input type="text" id="adNo" class="inputs"
                                                        placeholder="Admission Number"
                                                        value="Obtained first place in all island foot ball competition.">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="adNo">ID-02</label>
                                                    <input type="text" id="adNo" class="inputs"
                                                        placeholder="Admission Number"
                                                        value="Obtained first place in all island cricket competition.">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="adNo">ID-03</label>
                                                    <input type="text" id="adNo" class="inputs"
                                                        placeholder="Admission Number"
                                                        value="Obtained first place in all island sumo competition.">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="label" for="adNo">ID-04</label>
                                                    <input type="text" id="adNo" class="inputs"
                                                        placeholder="Admission Number"
                                                        value="Obtained first place in all island sumo competition.">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>


                    <div class="container">
                        <h2><b>CLUBS AND SOCIETY CATEGORY</b></h2>
                        <div class="first">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group ">

                                        <input type="text" id="fname" class="inputs" placeholder="First name"
                                            value="Music society">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">

                                        <input type="text" id="mname" class="inputs" placeholder="Middle name"
                                            value="Girl Guide">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group ">

                                        <input type="text" id="lname" class="inputs" placeholder="Last name"
                                            value="Drama">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group ">

                                        <input type="text" id="fname" class="inputs" placeholder="First name"
                                            value="Sinhala Literature society">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">

                                        <input type="text" id="mname" class="inputs" placeholder="Middle name"
                                            value="Scrabble">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group ">

                                        <input type="text" id="lname" class="inputs" placeholder="Last name"
                                            value="Science">
                                    </div>
                                </div>
                            </div>




                            <h2><b>Achievements</b></h2>
                            <hr>
                            <div class="card">

                                <form>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group ">
                                                <label class="label" for="adNo">ID-01</label>
                                                <input type="text" id="adNo" class="inputs"
                                                    placeholder="Admission Number"
                                                    value="Obtained first place in all island balley dance competition.">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group ">
                                                <label class="label" for="adNo">ID-02</label>
                                                <input type="text" id="adNo" class="inputs"
                                                    placeholder="Admission Number"
                                                    value="Obtained first place in all island wild life competition.">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group ">
                                                <label class="label" for="adNo">ID-03</label>
                                                <input type="text" id="adNo" class="inputs"
                                                    placeholder="Admission Number"
                                                    value="Obtained first place in all island media competition.">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group ">
                                                <label class="label" for="adNo">ID-04</label>
                                                <input type="text" id="adNo" class="inputs"
                                                    placeholder="Admission Number"
                                                    value="Obtained first place in all island music competition.">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>


            </div>

            <!-- /Education Page 2 -->



            <!-- Aesthetic Page 5 -->
            <div id="page4" class="page stu">


                <div class="container">


                    <h2><b>Mother's Information</b></h2>
                    <hr>
                    <div class="card">

                        <form>
                            <div class="first">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="input-username">Name</label>
                                            <input type="text" id="fname" class="inputs" placeholder="First name"
                                                value="Katy">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="label" for="input-address">NIC</label>
                                            <input type="text" id="mname" class="inputs" placeholder="Middle name"
                                                value="Laura">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Occupation</label>
                                            <input type="text" id="adNo" class="inputs" placeholder="Admission Number"
                                                value="18020275">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Contact Number</label>
                                            <input type="text" id="adNo" class="inputs" placeholder="Contact Number"
                                                value="071-8152927">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Email</label>
                                            <input type="text" id="email" class="inputs" placeholder="Email"
                                                value="hansikamedani@gmail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <br>
                    <h2><b>Father's Information</b></h2>
                    <hr>
                    <div class="card">

                        <form>
                            <div class="first">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="input-username">Name</label>
                                            <input type="text" id="fname" class="inputs" placeholder="First name"
                                                value="Katy">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="label" for="input-address">NIC</label>
                                            <input type="text" id="mname" class="inputs" placeholder="Middle name"
                                                value="Laura">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Occupation</label>
                                            <input type="text" id="adNo" class="inputs" placeholder="Admission Number"
                                                value="Teacher">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Contact Number</label>
                                            <input type="text" id="adNo" class="inputs" placeholder="Contact Number"
                                                value="071-6712321">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="label" for="adNo">Email</label>
                                            <input type="text" id="email" class="inputs" placeholder="Email"
                                                value="hansikamedani@gmail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /Aesthetic Page 5 -->
            </div>


        </div>
        <script>
        var page1 = document.getElementById("page1");
        var page2 = document.getElementById("page2");
        var page3 = document.getElementById("page3");
        var page4 = document.getElementById("page4");
        var button1 = document.getElementById("button1");
        var button2 = document.getElementById("button2");
        var button3 = document.getElementById("button3");
        var button4 = document.getElementById("button4");

        let url = window.location.href;
        if (url == window.location.href) {
            page1.style.display = "block";
            page2.style.display = "none";
            page3.style.display = "none";
            page4.style.display = "none";
            button1.style.color = "#000";
            button2.style.color = "#008080";
            button3.style.color = "#008080";
            button4.style.color = "#008080";
        } else if (url == "http://localhost/CL-GEN/html/admin/newsfeedphp?loggedin") {
            page1.style.display = "block";
            page2.style.display = "none";
            page3.style.display = "none";
            page4.style.display = "none";
            button1.style.color = "#000";
            button2.style.color = "#008080";
            button3.style.color = "#008080";
            button4.style.color = "#008080";
        }

        function GENERAL() {

            page1.style.display = "block";
            page2.style.display = "none";
            page3.style.display = "none";
            page4.style.display = "none";
            button1.style.color = "#000";
            button2.style.color = "#008080";
            button3.style.color = "#008080";
            button4.style.color = "#008080";


        }

        function EXAMS() {
            page1.style.display = "none";
            page2.style.display = "block";
            page3.style.display = "none";
            page4.style.display = "none";
            button1.style.color = "#008080";
            button2.style.color = "#000";
            button3.style.color = "#008080";
            button4.style.color = "#008080";

        }

        function ACHIEVEMENTS() {

            page1.style.display = "none";
            page2.style.display = "none";
            page3.style.display = "block";
            page4.style.display = "none";
            button1.style.color = "#008080";
            button2.style.color = "#008080";
            button3.style.color = "#000";
            button4.style.color = "#008080";
        }


        function PARENT() {

            page1.style.display = "none";
            page2.style.display = "none";
            page3.style.display = "none";
            page4.style.display = "block";
            button1.style.color = "#008080";
            button2.style.color = "#008080";
            button3.style.color = "#008080";
            button4.style.color = "#000";
        }
        </script>

</body>

</html>

<?php 
}
?>