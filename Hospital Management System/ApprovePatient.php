<?php
 include '_dbconnect.php';
 if(isset($_GET['email1'])){
    $email1=$_GET['email1'];
    $query="UPDATE `patient_records` set `Status`='ADMIT' WHERE `email_id`='$email1'";
    $data=mysqli_query($conn,$query);
 if($data){
   header("Location:Patientinfo.php?updatesuccess=true");
   exit();

        }        
}
 else{
    $id2=$_GET['email2'];
    $query="UPDATE `patient_records` set `Status`='REJECTED' WHERE `email_id`='$email2'";
    $data=mysqli_query($conn,$query);
    if($data){
      header("Location:Patientinfo.php?updatesuccess=true");
      exit();
   
           }
 }
?>