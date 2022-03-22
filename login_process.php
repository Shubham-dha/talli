<?php
include 'connection.inc.php';
#error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

if(isset($_POST['sublogin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from users where (email='$email')";
    $res=mysqli_query($con,$query);
    $numRows=mysqli_num_rows($res);
    if($numRows==1){
        $row=mysqli_fetch_assoc($res);
        if(password_verify($password,$row['password'])){
            $_SESSION["login_sess"]="1";
            $_SESSION["login_email"]=$row['email'];
            header("location:index.php");
        }
        else{
            header("location:login.php?loginerror=".$email);

        }
    }
        else{
            header("location:login.php?loginerror=".$email);
            
        }
        
    

}
?>