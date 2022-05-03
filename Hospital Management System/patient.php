<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Patient Dashboard</title>
    <script src="./home.js"></script>
    <style>
    body {
      background-color: rgba(117, 127, 134, 0.2);
    }
     .text-footer {
          text-align: center;
         padding: 10px 0;
         font-family: "Ubuntu", sans-serif;
         display: flex;
         justify-content: center;
        }
  </style>
    </style>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    `
    <nav class="navbar navbar-dark  " style="margin-top:-23px;background-color: #1783ad; ">
        <div class="container-fluid">

            <ul class="nav nav-pills">
               
                <li class="nav-item ">
                    <a class="nav-link text-light" href="home1.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">View Appoitments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="BookApoitment.php">Book Appoitments</a>
                </li>
             </ul>
            <?php session_start();
                    if(isset($_SESSION['loggednin']) && $_SESSION['loggednin']==true){
            echo' <div class="mx-2">
                         <p class="text-light my-0 mx-2"> welcome: '. $_SESSION['username'].  '!!</p></div>
        <div>
            <a href="_logout.php" class="btn btn-light ">Logout</a>
        </div>
        </div>
        </nav>';}?>
        <?php 
  include 'login.php';
    include 'signup.php';?>
    <div class="col-md-6 ">
    <table class="table table-hover table-bordered " style="width: 600px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="4" style="text-align: center;">Your Appoitments</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Docter</th>
            <th>Status</th>
        </tr>
    <?php
        include '_dbconnect.php';
        $username=$_SESSION['username'];
        $selectquery="select * from patientappoitments where Name='$username'";
        $query=mysqli_query($conn,$selectquery);
        // $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
            if($result['Status']!='DELETED'){
        ?>
        <tr>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Symptoms'];?></td>
        <td><?php echo $result['Docter'];?></td>
        <td><?php echo $result['Status'];?></td>
        </tr>
    <?php
        }
    }
       ?>
    </table>
  </div>
  <?php
   if(isset($_GET['updatesuccess']) && ($_GET['updatesuccess']=="true"))
   {
     echo '<script> alert("Your request is fullfilled properly")</script>';
     
   }
   if(isset($_GET['updatesuccess']) && ($_GET['updatesuccess']=="false"))
   {
     echo '<script> alert("Your request is not fullfilled properly")</script>';
   }
?>
    <footer style="background-color:#16a3db; margin-top: 7%;">
        <p class="text-footer">
            Copyright @-All rights are reserved by AyuRythm
        </p>
    
    </footer>

</body>

</html>