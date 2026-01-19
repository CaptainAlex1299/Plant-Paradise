<?php
 require "functions.php";
   //$id = "SELECT id FROM users WHERE email = '$userid'";
   
   if(isset($_SESSION['user'])){
    $useremal1 = $_SESSION['user'];
    $sql = "SELECT * FROM users where email = '$useremal1'";
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $username = $row['username'];
      $sqlImg = "SELECT * FROM profileimg WHERE userid= '$id'";
      $resultImg = mysqli_query($conn, $sqlImg);
      while($rowImg = mysqli_fetch_assoc($resultImg)){
        $divbtn = '<a href="login.php">';
        $divend= "</a>";
          if($rowImg['status'] == 0) {
            $loginlink = "";
            $profileimg = "<a href='logedin.php'><img src='uploads/profile". $id . "." .$rowImg['imgtype']."?". mt_rand(). "'" . "style='margin-left: 30px; width: 60px; height: 60px; object-fit: cover;'
            class='navimage'" . ">" . "</a>";
          } else{
            $loginlink =  "";
            $profileimg = "<img src='images/whiteusericon-removebg-preview.png" . "'" ."style='margin-left: 30px; width: 60px; height: 60px;'" .">";
          }
      }
    }
  }
  else{
    $divbtn = "";
    $divend= "";
    $loginlink = "<a class='nav-link' href='https://plumcafe.host/Kelloks1288/bcpl/login.php'>" . "<p style='position: relative; top: 10px;'>" . "Login" . "</p>" ."</a>";
    $profileimg = "<a href='login.php'><img src='images/whiteusericon-removebg-preview.png" . "'" ."style='width: 50px; height: 50px;'" .">" . "</a>";
    $username = "stoppit";
  }
  $conn->close();
} else{
  $divbtn = "";
  $divend= "";
  $loginlink = "<a class='nav-link' href='https://plumcafe.host/Kelloks1288/bcpl/login.php'>" . "<p style='position: relative; top: 10px;'>" . "Login" . "</p>" ."</a>";
  $profileimg = "<a href='login.php'><img src='images/whiteusericon-removebg-preview.png" . "'" ."style='width: 50px; height: 50px;'" .">" . "</a>";
  $username = "stoppit";
}
?>