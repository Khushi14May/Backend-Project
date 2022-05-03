<?php
include '_dbconnect.php';
$symptoms=$_GET['symptoms'];
$name=$_GET['name'];
$num=$_GET['num'];
$addr=$_GET['addr'];
$email=$_GET['email'];
if(isset($_POST['Update'])){  
    $name1=$_POST['name'];
    $Symptoms=$_POST['symptoms'];
    $number=$_POST['number'];
    $emailId=$_POST['email'];
    $Address=$_POST['Address'];
    // $sql="INSERT INTO `docter_records`( `Name`, `Mobile`, `Address`, `Department`) VALUES ('$name','$number','$Address','$department')";
    $sql="UPDATE `patient_records` SET `Name`='$name1',`Symptoms`='$Symptoms',`Mobile`='$number',`Address`='$Address',`email_id`='$emailId',`Status`='ADMIT' WHERE `email_id`='$email' ";

    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:Patientinfo.php?updatesuccess=true");
        exit();

        }
    else{
        header("Location:Patientinfo.php?updatesuccess=false");
        exit();
     }

   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Docter </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="BookAppoitment.css">
<script src="home.js"></script>
</head>
<body>
 
<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>Update</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="./book-img.svg" alt="">
        </div>

        <form action="" method="post">
            <h3>Update Patient Details</h3>
            <input type="text" placeholder="name" class="box" name="name" value="<?php echo "$name";?>">
            <input type="number" placeholder="number" class="box" name="number" value="<?php echo "$num";?>">
            <input type="text" placeholder="symptoms" class="box" name="symptoms" value="<?php echo "$symptoms";?>">
            <input type="text" placeholder="emailid" class="box" name="email" value="<?php echo "$email";?>">
            <input type="text" placeholder="your Address" class="box" name="Address" value="<?php echo "$addr";?>">
            <input type="submit" placeholder="Update" class="box" name="Update">
        </form>

    </div>

</section>

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