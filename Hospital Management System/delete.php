<?php
 include '_dbconnect.php';
 $id=$_GET['id'];
 $query="DELETE FROM `docter_records` WHERE `DocId`='$id'";
 $data=mysqli_query($conn,$query);
 if($data){

  header("Location:docterInfo.php?updatesuccess=true");
  exit();

        }
    else{
    
    header("Location:docterInfo.php?updatesuccess=false");
                exit();
     }
?>