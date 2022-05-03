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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="javascript://" onclick="db()">Dashboard</a></li>
            <li><a class="dropdown-item" href="javascript://" onclick="p('patient')">Patient</a></li>
            <li><a class="dropdown-item" href="javascript://" onclick="d('docter')">Appoitment</a></li>
         
          </ul>
        </li>
        <!-- admin -->
        <li class="nav-item " >
          <a class="nav-link text-light" href="home1.php">Home </a>
        </li>
        <!-- Appoitment -->
        <li class="nav-item docter" style="display: none;" >
          <a class="nav-link text-light" href="#">view Appoitments</a>
        </li>
        <li class="nav-item docter" style="display: none;" >
          <a class="nav-link text-light" href="#">Delete Appoitments</a>
        </li>
      
        <!-- patient -->
        <li class="nav-item patient" style="display: none;" >
          <a class="nav-link text-light" href="javascript://" onclick="p('patientre')">Patient Record</a>
        </li>
        <li class="nav-item patient" style="display: none;" >
          <a class="nav-link text-light" href="#">Discharged Patient</a>
        </li>      
      </ul>
    </div>
  </nav>
  <table border="2px" class="patientre" style="display: none;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Email_id</th>
            <th colspan="2">operation</th>
        </tr>
    </thead> 
    <tbody>
    <?php

        include '_dbconnect.php';
        $selectquery="select * from patient_records";
        $query=mysqli_query($conn,$selectquery);
        $nums=mysqli_num_rows($query);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['Name']?></td>
        <td><?php echo $result['Symptoms']?></td>
        <td><?php echo $result['Mobile']?></td>
        <td><?php echo $result['Address']?></td>
        <td><?php echo $result['email_id']?></td>
        <td ><i class="fa fa-edit" aria-hidden="true"></i></td>
        <td><i class="fa fa-trash" aria-hidden="true"></i></td>
    </tr>
    <?php
        }
       ?>
    </tbody>

</table>






  <footer style="background-color:#16a3db; margin-top: 23%;" class="mainframe"> 
    <p class="text-footer">
        Copyright @-All rights are reserved by AyuRythm
    </p>

</footer>
</body>

</html>