<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $signRadio = $_POST["Radio"];
    // if($signRadio==Admin)
    $existsql="select * from 'users' where username='$username'";
    $result = mysqli_query($conn,  $existsql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0)
    {
        $showError="username is already in use";
    }
   
    else{
        if($password == $cpassword ){
            $hash=password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `Username`, `Password`,Userrole, `AccessDate`) VALUES ('$username', '$hash','$signRadio' ,current_timestamp())";
            $result = mysqli_query($conn,  $sql);
            if($result){
                // $showAlert =true;
                header("Location:home1.php?signupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "Passwords do not match";
            
        }
    }
    header("Location:home1.php?signupsuccess=false&error=$showError");
}
   ?>