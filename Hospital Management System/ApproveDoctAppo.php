<?php
 include '_dbconnect.php';
 $Name1=$_GET['Name'];
 if(isset($Name1)){
   
    $query="UPDATE `patientappoitments` SET  `Status`='DELETED' WHERE `Name`='$Name1'";
    $data=mysqli_query($conn,$query);
 if($data){
     header("Location:AppoitmentDocter.php?updatesuccess=true");
         exit();
        }        
}?>