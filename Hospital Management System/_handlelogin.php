<?php
// $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    // $signRadio = $_POST["Radio"];
     
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
        $check="select * from docter_records where role='PENDING'";
        $checkre=mysqli_query($conn, $check);
       
       
    if ($num == 1){
        $row=mysqli_fetch_assoc($result);
        
        if(password_verify($password,$row['Password'])){
            $row1=mysqli_fetch_assoc($checkre);
            if($row['Username']==$row1['Name']){
                echo 'you can not login untill Admin Does not approves u';
            }
            else{
         session_start();
         $_SESSION['loggednin']=true;
         $_SESSION['username']=$username;
         $_SESSION['signRadio']=$row['Userrole'];
        //   echo 'loogen in'.$username;
        //  echo '<script>alert("you are successfully loggedIn" .$username )</script>';
         header("Location:home1.php?loginsuccess=true");
         exit();}
         }
        else{
            echo 'unable to login';
            }
    } 
    else{
        $showError = "Invalid Credentials";
    }
}

    ?>