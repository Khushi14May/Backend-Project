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
  <title>Admin Dashboard</title>
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
</head>

<body>
  <nav class="navbar navbar-dark bg-primary"  style="margin-top:-3px; ">
    <div class="container-fluid">

      <ul class="nav nav-pills">
        <li class="nav-item " >
          <a class="nav-link text-light" href="home1.php">Home </a>
        </li>
         <li class="nav-item">
         <a class="nav-link text-light" href="#" onclick="p('patient')">Patient Record</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="Admit.php">Admit Patient</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="#"  onclick="d('apdoc')">Approve Patient</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="#" onclick="db('mainframe')">Discharge Patient</a>
        </li>
    </ul>
        <div class="mx-2">
          <a href="_logout.php" class="btn btn-light ">Logout</a>
        </div>
        
    </div>
  </nav>

  <div class="col-md-6 patient">
    <table class="table table-hover table-bordered " style="width: 600px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="7" style="text-align: center;">Patient Record</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Mobile No.</th>
            <th>Address</th>
            <th>EmailId</th>
            <th colspan="2">operation</th>
        </tr>
    <?php

        include '_dbconnect.php';
        $selectquery="select * from patient_records where Status='ADMIT'";
        $query=mysqli_query($conn,$selectquery);
        $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Symptoms'];?></td>
        <td><?php echo $result['Mobile'];?></td>
        <td><?php echo $result['Address'];?></td>
        <td><?php echo $result['email_id'];?></td>
        <td ><a href="updatepatient.php?name=<?php echo $result['Name'];?> & symptoms=<?php echo $result['Symptoms'];?>&num=<?php echo $result['Mobile'];?>&addr=<?php echo $result['Address'];?>&email=<?php echo $result['email_id'];?>" data-toogle="tooltip" data-placement="bottom" title="UPDATE"> 
        <i class="fa fa-edit" aria-hidden="true"></i></a></td>
        <td><a href="deletePatient.php?email=<?php echo $result['email_id'];?>" data-toogle="tooltip" data-placement="bottom" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
    <?php
        }
       ?>
    </table>
  </div>
  <div class="col-md-6 docter" style="display:none">
    <table class="table table-hover table-bordered " style="width: 700px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="7" style="text-align: center;">Patient Wants to Admit</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Mobile No.</th>
            <th>Address</th>
            <th>EmailId</th>
            <th>Approve</th>
            <th>Reject</th>
        </tr>
    <?php

        include '_dbconnect.php';
        $selectquery="select * from patient_records where Status='On Hold'";
        $query=mysqli_query($conn,$selectquery);
        $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Symptoms'];?></td>
        <td><?php echo $result['Mobile'];?></td>
        <td><?php echo $result['Address'];?></td>
        <td><?php echo $result['email_id'];?></td>
        <td><a href="ApprovePatient.php?email1=<?php echo $result['email_id'];?>" data-toogle="tooltip" data-placement="bottom" title="approve"><i class="fa fa-check" aria-hidden="true"></i></a></td>
        <td><a href="ApprovePatient.php?email2=<?php echo $result['email_id'];?>" data-toogle="tooltip" data-placement="bottom" title="rejected"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
    <?php
        }
       ?>
    </table>
  </div> 
  <div class="col-md-6 mainframe" style="display:none">
    <table class="table table-hover table-bordered " style="width: 700px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="4" style="text-align: center;"> Discharge Patient</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Mobile No.</th>
            <th>Discharge</th>
        </tr>
    <?php

        include '_dbconnect.php';
        $selectquery="select * from patient_records where Status='TREATED'";
        $query=mysqli_query($conn,$selectquery);
        $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Symptoms'];?></td>
        <td><?php echo $result['Mobile'];?></td>
        <td><a href="dischargePatient.php?discharge=<?php echo $result['email_id'];?>" data-toogle="tooltip" data-placement="bottom" title="dicharge"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
    <?php
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
   