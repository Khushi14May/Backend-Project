
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Docter </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="BookAppoitment.css">
<script src="home.js"></script>
</head>
<body>
 
<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>Register</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="./book-img.svg" alt="">
        </div>

        <form action="" method="post">
            <h3>Register Docter</h3>
            <input type="text" placeholder="your name" class="box" name="name">
            <input type="number" placeholder="your number" class="box" name="number">
            <input type="text" placeholder="your department" class="box" name="department">
            <input type="text" placeholder="your Address" class="box" name="Address">
            <input type="submit" placeholder="Register" class="box" name="Register" >
        </form>

    </div>

</section>
<?php
 include '_dbconnect.php';
 if(isset($_POST['Register'])){
    //  PHP $_POST is a PHP  super global variable which is used to collect form data
    //  after submitting an HTML form with method="post"
    $name=$_POST['name'];
    $number=$_POST['number'];
    $department=$_POST['department'];
    $Address=$_POST['Address'];
    $sql="INSERT INTO `docter_records`( `Name`, `Mobile`, `Address`, `Department`,`role`) VALUES ('$name','$number','$Address','$department','APPROVE')";
    $result=mysqli_query($conn,$sql);
    if($result){
    
         
             header("Location:docterInfo.php?updatesuccess=true");
                    exit();
         
    
            }
        else{
          
           header("Location:docterInfo.php?updatesuccess=false");
                    exit();
        
         }
    
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