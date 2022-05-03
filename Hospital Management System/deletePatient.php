<?php
 include '_dbconnect.php';
 $email=$_GET['email'];
 $query="DELETE FROM `patient_records` WHERE `email_id`='$email'";
 $data=mysqli_query($conn,$query);
 if($data){

  header("Location:Patientinfo.php?updatesuccess=true");
  exit();
        }
    else{
      header("Location:Patientinfo.php?updatesuccess=false");
      exit();
     }
?>