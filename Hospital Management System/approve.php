<?php
 include '_dbconnect.php';
 if(isset($_GET['id1'])){
    $id1=$_GET['id1'];
    $query="UPDATE `docter_records` set `role`='APPROVE' WHERE `DocId`='$id1'";
    $data=mysqli_query($conn,$query);
 if($data){
   header("Location:docterInfo.php?updatesuccess=true");
   exit();

        }        
}
 else{
    $id2=$_GET['id2'];
    $query="UPDATE `docter_records` set `role`='REJECTED' WHERE `DocId`='$id2'";
    $data=mysqli_query($conn,$query);
    if($data){
      header("Location:docterInfo.php?updatesuccess=true");
      exit();
           }
 }
?>