<?php
     $url='localhost';
     $username='root';
     $password='';
     $db='talli';
     $conn=mysqli_connect($url,$username,$password,$db);
     if(!$conn){
         die('Could not Connect My Sql:' .mysql_error());
     }
    $con=mysqli_connect("localhost","root","","talli");

?>