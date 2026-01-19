<?php
session_start();
require "functions.php";
$id = $_SESSION['user_id'];
$userid = "$_SESSION[user]";
echo $id;

if(isset($_POST['submit'])){
        
    
    $newsurname = $_POST['newsurname'];
    if($newsurname != ""){
        $query = "SELECT * FROM users WHERE email = '$userid'";
        $result = mysqli_query($conn, $query);
        
        
        if(mysqli_num_rows($result) > 0) {
        $sql1 = "UPDATE users SET surname='$newsurname' WHERE id='$id'";
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
