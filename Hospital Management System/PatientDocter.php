<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Docter Dashboard</title>
  <script src="home.js"></script>
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
</head>

<body>
    <nav class="navbar navbar-dark "  style="margin-top:-3px; background-color: #1783ad; ">
    <div class="container-fluid">
    
      <ul class="nav nav-pills">
        <li class="nav-item " >
          <a class="nav-link text-light" href="home1.php">Home </a>
        </li>
        <!-- Appoitment -->
        <li class="nav-item ">
          <a class="nav-link text-light" href="#" onclick="p('patient')">Your Patient Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#" onclick="d('docter')">Your Discharged Patient</a>
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
  </nav>';}
  ?>
 <?php 
  include 'login.php';
    include 'signup.php';?>
 <div class="col-md-6 patient">
    <table class="table table-hover table-bordered " style="width: 600px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="4" style="text-align: center;">Your Patient list</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Mobile No.</th>
            <th>Date</th>
        </tr>
    <?php
        include '_dbconnect.php';
        $username=$_SESSION['username'];
        $selectquery="select * from patientappoitments where Docter='$username'";
        $query=mysqli_query($conn,$selectquery);
        // $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Symptoms'];?></td>
        <td><?php echo $result['Number'];?></td>
        <td><?php echo $result['Date'];?></td>
        </tr>
    <?php
        }
       ?>
    </table>
  </div>
  <div class="col-md-6 docter" style="display:none">
    <table class="table table-hover table-bordered " style="width: 700px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="3" style="text-align: center;"> Discharge Patient</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Mobile No.</th>
        </tr>
    <?php

        include '_dbconnect.php';
        $username=$_SESSION['username'];
        $selectquery="select * from patient_records where Docter='$username'";
        $query=mysqli_query($conn,$selectquery);
        while($result=mysqli_fetch_array($query)){
            if($result['Status']=='Discharge'){
        ?>
        <tr>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Symptoms'];?></td>
        <td><?php echo $result['Mobile'];?></td>
    </tr>
    <?php
            }
        }
       ?>
    </table>
  </div> 
  <footer class="bg-primary" style="margin-top: 14.5%;">
    <p class="text-footer">
        Copyright @-All rights are reserved by AyuRythm
    </p>

</footer>
<script>
  $(document).ready(function(){
    $('[data-toogle="tooltip"]').tooltip();
  });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>   