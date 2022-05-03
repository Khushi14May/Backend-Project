<?php
 include '_dbconnect.php';

 if(isset($_GET['Name1'])){
    $Name1=$_GET['Name1'];
    $query="UPDATE `patientappoitments` set `Status`='APPROVE' WHERE `Name`='$Name1'";
    $data=mysqli_query($conn,$query);
 if($data){
   header("Location:Appoitment.php?updatesuccess=true");
   exit();

        }        
}
 else{
    $Name2=$_GET['Name2'];
    $query="UPDATE `patientappoitments` set `Status`='REJECTED' WHERE `Name`='$Name2'";
    $data=mysqli_query($conn,$query);
    if($data){
      header("Location:Appoitment.php?updatesuccess=true");
      exit();
   
           }
 }
?>