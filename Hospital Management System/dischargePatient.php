<?php
 include '_dbconnect.php';
 $discharge=$_GET['discharge'];
 if(isset($discharge)){
   
    $query="UPDATE `patient_records` set `Status`='Discharge' WHERE `email_id`='$discharge'";
    $data=mysqli_query($conn,$query);
 if($data){
   header("Location:Patientinfo.php?updatesuccess=true");
        exit();
        }        
}?>