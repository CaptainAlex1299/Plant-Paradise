<?php
session_start();
require "functions.php";
$id = $_SESSION['user_id'];
$userid = "$_SESSION[user]";
echo $id;

if(isset($_POST['submit'])){
        
    
    $newaddress = $_POST['newaddress'];
    if($newaddress != ""){
        $query = "SELECT * FROM users WHERE email = '$userid'";
        $result = mysqli_query($conn, $query);
        
        
        if(mysqli_num_rows($result) > 0) {
        $sql1 = "UPDATE users SET address='$newaddress' WHERE id='$id'";
        mysqli_query($conn,$sql1);
        header("Location: logedin.php");
        }
     else{
        echo "<p> error! </p>";
    }
    }
    header("Location: logedin.php");
      }

?>
