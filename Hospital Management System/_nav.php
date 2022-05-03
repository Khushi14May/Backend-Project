<?php
 
echo'<nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background-color: #1783ad; ">
        <a class="navbar-brand" href="#">आयुRythm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./About us.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./Review.html">Review</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="./Services.html">Services</a>
                </li>';
                session_start();
                if(isset($_SESSION['loggednin']) && $_SESSION['loggednin']==true){    
                    if($_SESSION['signRadio']=='Docter'){   
                        echo ' <li class="nav-item ">
                        <a class="nav-link text-light" href="PatientDocter.php">PatientInfo</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link text-light" href="AppoitmentDocter.php">AppoitmentInfo</a>
                      </li>';
                            }
                if($_SESSION['signRadio']=='Admin'){
                    echo '   <li class="nav-item ">
                    <a class="nav-link text-light" href="docterInfo.php">DocterInfo</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-light" href="Patientinfo.php">PatientInfo</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-light" href="Appoitment.php">AppoitmentInfo</a>
                  </li>';}
                if($_SESSION['signRadio']=='User'){
                echo '<li class="nav-item ">
                      <a class="nav-link text-light" href="patient.php">Patient</a>
                      </li>
                     ';}

                echo '</ul>
                    <div class="mx-2">
                         <p class="text-light my-0 mx-2"> welcome: '. $_SESSION['username'].  '!!</p></div>
                    <div>
                      <a href="_logout.php" class="btn btn-light ">Logout</a>
                    </div>';
         }
else{?>
      <div class="mx-2" style="margin-left:100px">
                <button class="btn btn-light" data-toggle="modal" data-target="#loginModal">Login</button>
            </div>
          <div>
                <button class="btn btn-light " data-toggle="modal" data-target="#signupModal">SignUp</button>
          </div>
  <?php }?>
          
        </div>
    </nav>
    <?php
    include 'login.php';
    include 'signup.php';
    if(isset($_GET['signupsuccess']) && ($_GET['signupsuccess']=="true"))
    {
      echo '<script>alert("you are successfully created your account")</script>';
    }
    if(isset($_GET['loginsuccess']) && ($_GET['loginsuccess']=="true"))
    {
      echo '<script>alert("you are successfully loggedin")</script>';
    }
    // include '_dbconnect.php';
 ?>



