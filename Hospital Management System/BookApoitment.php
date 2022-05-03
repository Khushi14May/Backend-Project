
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="BookAppoitment.css">
<script src="home.js"></script>
</head>
<body>
 
<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="./book-img.svg" alt="">
        </div>

        <form action="" method="post">
            <h3>book appointment</h3>
            <input type="text" placeholder="your name" class="box" name="username">
            <input type="number" placeholder="your number" class="box" name="number">
            <input type="email" placeholder="your email" class="box" name="email">
            <input type="text" placeholder="symptoms" class="box" name="symptoms">
            <select name="docter" placeholder="docter" class="box">
                <!-- <option value="Select"></option> -->
                <option value="Dr. Bindu Shah">Dr. Bindu Shah(Heart Surgeon)</option>
                <option value="Dr. Hetvi Mehta">Dr. Hetvi Mehta(ENT)</option>
                <option value="Dr. Isha Parmar">Dr. Isha Parmar (Physiotharapist)</option>
                <option value="Dr. Hinesha Rawal">Dr. Hinesha Rawal(Dentist)</option>
                <option value="Dr. Naval Agarwal">Dr. Naval Agarwal(Eye Specialist)</option>
            </select> 
            <input type="submit" placeholder="Book Now" class="box" name="BookNow">
        </form>

    </div>

</section>
<?php
 include '_dbconnect.php';
 if(isset($_POST['BookNow'])){
    $username=$_POST['username'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $symptoms=$_POST['symptoms'];
    $docter=$_POST['docter'];
    $sql = "INSERT INTO `patientappoitments`(`Name`, `Number`, `Email_id`, `Symptoms`,`Docter`,`Status`) VALUES ('$username','$number','$email','$symptoms','$docter','PENDING')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:patient.php?updatesuccess=true");
            exit();

    }
    else{
        header("Location:patient.php?updatesuccess=false");
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