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
  <title>Admin Dashboard</title>
  <script src="./home.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <nav class="navbar navbar-dark bg-primary"  style="margin-top:-3px;">
    <div class="container-fluid">

      <ul class="nav nav-pills">
        <li class="nav-item " >
          <a class="nav-link text-light" href="home1.php">Home </a>
          <li class="nav-item" >
            <a class="nav-link text-light" href="#" onclick="p('patient')">Docter Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="registerdocter.php">Register Docter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#"  onclick="d('apdoc')">Approve Docter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#" onclick="db('mainframe')">Docter Specification</a>
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
        <td scope="col" colspan="7" style="text-align: center;">Docter Record</td>
      </tr>
      <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Department</th>
            <th colspan="2">operation</th>
        </tr>
    <?php

        include '_dbconnect.php';
        $selectquery="select * from docter_records where role='APPROVE'";
        $query=mysqli_query($conn,$selectquery);
        $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['DocId'];?></td>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Mobile'];?></td>
        <td><?php echo $result['Address'];?></td>
        <td><?php echo $result['Department'];?></td>
        <td ><a href="update.php?id=<?php echo $result['DocId'];?> & name=<?php echo $result['Name'];?>&num=<?php echo $result['Mobile'];?>&addr=<?php echo $result['Address'];?>&dep=<?php echo $result['Department'];?>" data-toogle="tooltip" data-placement="bottom" title="UPDATE"> 
        <i class="fa fa-edit" aria-hidden="true"></i></a></td>
        <td><a href="delete.php?id=<?php echo $result['DocId'];?>" data-toogle="tooltip" data-placement="bottom" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
    <?php
        }
       ?>
    </table>
  </div>
  <div class="col-md-6 docter" style="display:none">
    <table class="table table-hover table-bordered " style="width: 700px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="6" style="text-align: center;">Docters Applied For Registeration</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Department</th>
            <th>Approve</th>
            <th>Reject</th>
        </tr>
    <?php

        include '_dbconnect.php';
        $selectquery="select * from docter_records where role='PENDING'";
        $query=mysqli_query($conn,$selectquery);
        $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['Name']?></td>
        <td><?php echo $result['Mobile']?></td>
        <td><?php echo $result['Address']?></td>
        <td><?php echo $result['Department']?></td>
        <td><a href="approve.php?id1=<?php echo $result['DocId'];?>" data-toogle="tooltip" data-placement="bottom" title="approve"><i class="fa fa-check" aria-hidden="true"></i></a></td>
        <td><a href="approve.php?id2=<?php echo $result['DocId'];?>" data-toogle="tooltip" data-placement="bottom" title="rejected"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
    <?php
        }
       ?>
    </table>
  </div> 
  <div class="col-md-6 mainframe" style="display:none">
    <table class="table table-hover table-bordered " style="width: 700px; margin: 15% 50%; border: 2px;">

      <tr class="bg-primary">
        <td scope="col" colspan="6" style="text-align: center;"> Docter Specification</td>
      </tr>
      <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Department</th>
        </tr>
    <?php

        include '_dbconnect.php';
        $selectquery="select * from docter_records where role='APPROVE'";
        $query=mysqli_query($conn,$selectquery);
        $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['Name']?></td>
        <td><?php echo $result['Mobile']?></td>
        <td><?php echo $result['Department']?></td>
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
   