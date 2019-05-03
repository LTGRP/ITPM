<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once("user_status.php");

include('db/dbcon.php');
?>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Q & A</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Owl Carousel -->
  <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
  <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

  <!-- Magnific Popup -->
  <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
  <!-- Favicon -->
  <link rel="icon" href="img/favicon.ico">

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <!--    hover stylesheet-->
  <link type="text/css" rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>

<body>
  <!-- Header -->
  <header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./img/background1.jpg');">
      <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a href="index.html">
              <img class="logo" src="img/favicon.ico" alt="logo">
              <img class="logo-alt" src="img/logo.png" alt="logo">
            </a>
          </div>
          <!-- /Logo -->

          <!-- Collapse nav button -->
          <div class="nav-collapse">
            <span></span>
          </div>
          <!-- /Collapse nav button -->
        </div>

        <?php if (logged_in()==true) {
          $user = $_SESSION['username'];
        }
        $u = "select * from student where username = '$user'";
        $result = $db->query($u); ?>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
          <li><a href="main.php">Home</a></li>
          <li><a href="#ref">Q & A</a></li>
          <?php while ($d = mysqli_fetch_assoc($result)) { ?>
            <li class="has-dropdown"><a href="#">Hello, &nbsp;<?= $d['fname'].' '.' '.$d['lname']; ?></a>
              <ul class="dropdown">
                <li><a href="userprofile.php">User Profile</a></li>
                <li>
                  <a href="https://mail.google.com" target="_blank">
                    Student Email</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                  </ul>
                </li>
              <?php } ?>
            </ul>
            <!-- /Main navigation -->

          </div>
        </nav>
        <!-- /Nav -->

        <!-- home wrapper -->
        <div class="home-wrapper">
          <div class="container">
            <div class="row">

              <!-- home content -->
              <div class="col-md-10 col-md-offset-1">
                <div class="home-content">
                  <h1 class="white-text">Q&A</h1>
                </div>
              </div>
              <!-- /home content -->

            </div>
          </div>
        </div>
        <!-- /home wrapper -->

      </header>

      <div id="ref" class="section md-padding">

        <!-- Container -->
        <div class="container">

          <h3><B><pre>  1. What is WebUni?</B></h3>

            <p><pre>          WebUni is a Learning Content Management System that enables distance<br>
              learning courses to be conducted over the Internet. WebUni has a built in content <br>
              management system, online submission system, discussion forums, and user management<br>
              controls, among other things.<br></pre>
            </p>
            <br>
            <br>

            <h3><B><pre>  2. If an unregistered user can view course materials? </B></h3>

              <p><pre>           To view coursers first a user neeed to log into the System. Otherwise<br>
                the might be able to see course materials.<br><br></pre>
              </p>

              <br>
              <br>

              <h3><B><pre>  3. Why are you register with our learning managment system?</B></h3>

                <p><pre>          If you are a unregistered user you can't see any content in our system.<br>
                  so at the begining you have to sign up for the system.then you need to log<br>
                  into the system.After that you can see the course materials,download them etc.<br>
                  If you want to comment about any question you can comment as much as you need<br>
                  then anyone can sent a replycomment that.so that u can find many more answers<br>
                  from the many users.It is a good opportunity to shareyour knowledge with others<br>
                  and see others responses for your question.<br></pre>
                </p>
                <br>
                <br>

                <h3><pre><B>  4. If a user can directly see the content of a course?</B></h3>

                  <p><pre>          To see the available content including lectures and assignment,<br>
                    First you want to enroll for that course by giving the enrollment key. When ever a <br>
                    lecture is added to the system notification will be send to all the students.<br>
                    That notification include all the information of the course with the enrollment key <br>
                    <br></pre>
                  </p>
                  <br>
                  <br>



                  <h3><pre><B>  5. How can you submit your assignment to the system?</B></h3>

                    <p><pre>          if you are a registerd user can submit your assignment easily<br>
                      through the upload assignment section.so you can easily<br>
                      manage your works in  any location.</pre></p>

                      <br>
                      <br>
                      <h3><pre><B>  6. What is the purpose of our system?</B></h3>

                        <p><pre>          Our purpose is get a good learning experience to the students<br>
                          through the internet .</pre></p>
                          <br>
                          <br>

                          <h3><pre><B>  7. Why users get an error messages when uploading the assignments? </B></h3>

                            <p><pre>          User always concern about the file type and the uploading file size when uploading<br>
                              the assignmentfile.when the user upload incorrect file format or invalid file size<br>
                              he/she can see the error messageand can't upload the assignment.</pre></p>

                              <br>
                              <br>
                              <h3> <pre><B>  8. How can user  download the coursematerials?</B></h3>

                                <p> <pre>          First user have to the log into the system go to the course material section.<br>
                                  Then choosethe relevant subject you want to download.After that you can<br>
                                  download any lecture or tutorial.</pre></p>

                                  <br>
                                  <br>
                                  <h3> <pre><B>  9. What type of actions that a user can perform?</B></h3>

                                    <p> <pre>          In our system student can download lecture materials, view lectures, download<br>
                                      assignment, submit assignment for a link, download past papers and can read references<br>
                                      download any lecture or tutorial.</pre></p>
                                      <br>
                                      <br>

                                      <h3> <pre><B>  10. If user have an problem regarding a lecture is there a way to clear that?</B></h3>

                                        <p> <pre>          In our system there ia a comment section, In here user can comment any questions<br>
                                          that are need to clarify.<br></pre></p>

                                          <br>
                                          <br>

                                        </div>
                                        <!-- /Container -->

                                      </div>
                                      <!-- /Contact -->
                                      <footer id="footer" class="sm-padding bg-dark">

                                        <!-- Container -->
                                        <div class="container">

                                          <!-- Row -->
                                          <div class="row">

                                            <div class="col-md-12">

                                              <!-- footer copyright -->
                                              <div class="footer-copyright">
                                                <p>Copyright © 2019. All Rights Reserved.</p>
                                              </div>
                                              <!-- /footer copyright -->

                                            </div>

                                          </div>
                                          <!-- /Row -->

                                        </div>
                                        <!-- /Container -->

                                      </footer>
                                      <!-- /Footer -->

                                      <!-- Back to top -->
                                      <div id="back-to-top"></div>
                                      <!-- /Back to top -->

                                      <!-- Preloader -->
                                      <div id="preloader">
                                        <div class="preloader">
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                        </div>
                                      </div>
                                      <!-- /Preloader -->

                                      <!-- jQuery Plugins -->
                                      <script type="text/javascript" src="js/jquery.min.js"></script>
                                      <script type="text/javascript" src="js/bootstrap.min.js"></script>
                                      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
                                      <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
                                      <script type="text/javascript" src="js/main.js"></script>


                                    </body>





                                    </html>
