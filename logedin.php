<?php
 
session_start();
require "functions.php";

$userid = "$_SESSION[user]";
$sql = "SELECT * FROM users WHERE email = '$userid'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
      $user = "SELECT * FROM users WHERE email = '$userid'";
      $userresult = mysqli_query($conn, $user);
  }

  while($row = mysqli_fetch_assoc($userresult)){
    $useremail = $row['email'];
    $username = $row['username'];
    $datecreated = $row['date'];
    $name = $row['name'];
    $surname = $row['surname'];
    $address = $row['address'];
    $contactnumber = $row['contactnumber'];
}
  
} else{
  echo "there was error";
  echo $userid;
        }

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>

    <style type="text/css"></style>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    
    <title>P-Paradise Account</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<nav class="navbar navbar navbar-expand-md" id="navbarbg">
        <div class="container-fluid">
          <button
            id="navbarbtn"
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            aria-expanded="true"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="d-flex mx-auto">
            <div id="logoimg">
              <img
                src="images/Screenshot__223.png"
                class="navbar-brand-img navimage"
                alt="Brand"
              />
            </div>
            <div style="position: relative; top: 11px; justify-content: space-between;">
            <a class="nav-link d-none d-sm-block" href="#">PlantParadise</a>
          </div>
          <div class="collapse navbar-collapse" id="" style="justify-content: space-between;">
          <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item">
                  <a href="index.php" class="nav-link mx-1">Home</a>
                </li>
                <li class="nav-item">
                  <div onclick="toggleshoplist()"><a class="nav-link mx-1">Shop <i id="shoparrow" class="shoparrow right"></i></a></div>
                  <div id="dropdownshop" class="dropdownshop">
                    <ul style="margin-top: 10px;"><a href="myshop.php" class="nav-list my-1 p-1">All-Plants</a></ul>
                    <ul style="margin-top: 5px;"><a href="outdoor.php" class="nav-list my-1 p-1">Outdoor-Plants</a></ul>
                    <ul style="margin-top: 5px;"><a href="indoor.php" class="nav-list my-1 p-1">Indoor-Plants</a></ul>
                    <ul style="margin-top: 5px;"><a href="easycare.php" class="nav-list my-1 p-1">Easy-Care-Plants</a></ul>
                    <ul style="margin-top: 5px;"><a href="largeplants.php" class="nav-list my-1 p-1">Large-Plants</a></ul>
                    <ul style="margin-top: 5px;"><a href="smallplants.php" class="nav-list my-1 p-1">Small-Plants</a></ul>
                    <ul style="margin-top: 5px;"><a href="potsandbaskets.php" class="nav-list my-1 p-1">Pots-and-Baskets</a></ul>
                    <ul style="margin-top: 5px;"><a href="homeware.php" class="nav-list my-1 p-1">Homeware</a></ul>
                  </div>
                </li>
                <li class="nav-item">
                  <div onclick="toggleplantcarelist()"><a class="nav-link mx-1" >PlantCare <i id="arrow" class="arrow right"></i></a></div>
                  <div id="dropdownplantcare" class="dropdownplantcare">
                    <ul style="margin-top: 10px;"><a href="watering-plants.php" class="nav-list my-1">Watering-Basics</a></ul>
                    <ul style="margin-top: 5px;"><a href="winterplantcare.php" class="nav-list my-1">Winter-Care</a></ul>
                    <ul style="margin-top: 5px;"><a href="summerplantcare.php" class="nav-list my-1">Summer-Care</a></ul>
                  </div>
                </li>
                <li class="nav-item">
                  <div onclick="toggleaboutlist()"><a class="nav-link mx-1">About <i id="aboutarrow" class="aboutarrow right"></i></a></div>
                  <div id="dropdownabout" class="dropdownabout">
                  <ul style="margin-top: 5px;"><a href="about-us.php" class="nav-list">About-Us</a></ul>
                    <ul style="margin-top: 5px;"><a href="contact-us.php" class="nav-list">Contact-Us</a></ul>
                  </div>
                </li>
              </ul>
          </div>
          </div>
          <div class="navbarend">
            <img
              src="images/shoppingcartplant-removebg-preview.png"
              class="navimage"
              style="margin-left: 0px; width: 65px; height: 50px"
            />
            <img
              src="images/whiteusericon-removebg-preview.png"
              class="navimage"
              style="margin-left: 5px; width: 60px; height: 60px"
            />
          </div>
        </div>
      </nav>
    <div id="overlay"></div>

    <div id="usernameblock">
      <div class="form-center">
        <h2>Update Username</h2>
        <form action="updateusername.php" id="updateusernameForm" method="post" class="">
          <div style="height: 80px; width: 100%; border-bottom: solid 6px; border-color: rgba(76, 205, 50, 0.678);"></div>
          <div style="width: 100%; height: 50px; ">
            <h4>
              <input style="width: 80%; height: 50px; margin-top: 5px;" class="formstyle" id="usernameupdate" type="text" name="newusername" placeholder="new username" ></h4>
          </div>
            <div class="d-flex" style="position: absolute; bottom:10px; right: 40px; "><input class="formstyle btn mx-1 p-2" type="submit" value="Save" name="submit" id="usernamesubmit">
              <input  class="formstyle btn mx-1 p-2" type="reset" name="cancel" value="Cancel" onclick="toggle1()">
            </div>
            </form>
            
            
            </div>
            </div>

            <div id="nameblock">
              <div class="form-center">
                <h2>Update Name</h2>
                <form action="updatename.php" id="" method="post" class="">
                  <div style="height: 80px; width: 100%; border-bottom: solid 6px; border-color: rgba(76, 205, 50, 0.678);"></div>
                  <div style="width: 100%; height: 50px; ">
                    <h4>
                      <input style="width: 80%; height: 50px; margin-top: 5px;" class="formstyle" id="nameupdate" type="text" name="newname" placeholder="new name"></h4>
                  </div>
                    <div class="d-flex" style="position: absolute; bottom:10px; right: 40px; "><input class="formstyle btn mx-1 p-2" type="submit" value="Save" name="submit" id="namesubmit">
                      <input  class="formstyle btn mx-1 p-2" type="reset" name="cancel" value="Cancel" onclick="toggle2()">
                    </div>
                    </form>
                    
                    
                    </div>
                    </div>

                    <div id="surnameblock">
                      <div class="form-center">
                        <h2>Update Surname</h2>
                        <form action="updatesurname.php" id="" method="post" class="">
                          <div style="height: 80px; width: 100%; border-bottom: solid 6px; border-color: rgba(76, 205, 50, 0.678);"></div>
                          <div style="width: 100%; height: 50px; ">
                            <h4>
                              <input style="width: 80%; height: 50px; margin-top: 5px;" class="formstyle" id="surnameupdate" type="text" name="newsurname" placeholder="new surname"></h4>
                          </div>
                            <div class="d-flex" style="position: absolute; bottom:10px; right: 40px; "><input class="formstyle btn mx-1 p-2" type="submit" value="Save" name="submit" id="surnamesubmit">
                              <input  class="formstyle btn mx-1 p-2" type="reset" name="cancel" value="Cancel" onclick="toggle3()">
                            </div>
                            </form>
                            
                            
                            </div>
                            </div>

                          <div id="contactnumberblock">
                              <div class="form-center">
                                <h2>Update Contact Number</h2>
                                <form action="updatecontactnumber.php" id="" method="post" class="">
                                  <div style="height: 80px; width: 100%; border-bottom: solid 6px; border-color: rgba(76, 205, 50, 0.678);"></div>
                                  <div style="width: 100%; height: 50px; ">
                                    <h4>
                                      <input style="width: 80%; height: 50px; margin-top: 5px;" class="formstyle" id="contactnumberupdate" type="text" name="newcontactnumber" placeholder="new contact number"></h4>
                                  </div>
                                    <div class="d-flex" style="position: absolute; bottom:10px; right: 40px; "><input class="formstyle btn mx-1 p-2" type="submit" value="Save" name="submit" id="contactnumbersubmit">
                                      <input  class="formstyle btn mx-1 p-2" type="reset" name="cancel" value="Cancel" onclick="toggle4()">
                                    </div>
                                    </form>
                                    
                                    
                                    </div>
                                    </div>

                                    <div id="addressblock">
                                      <div class="form-center">
                                        <h2>Update address</h2>
                                        <form action="updateaddress.php" id="" method="post" class="">
                                          <div style="height: 80px; width: 100%; border-bottom: solid 6px; border-color: rgba(76, 205, 50, 0.678);"></div>
                                          <div style="width: 100%; height: 50px; ">
                                            <h4>
                                              <input style="width: 80%; height: 50px; margin-top: 5px;" class="formstyle" id="addressupdate" type="text" name="newaddress" placeholder="new address"></h4>
                                          </div>
                                            <div class="d-flex" style="position: absolute; bottom:10px; right: 40px; "><input class="formstyle btn mx-1 p-2" type="submit" value="Save" name="submit" id="addresssubmit">
                                              <input  class="formstyle btn mx-1 p-2" type="reset" name="cancel" value="Cancel" onclick="toggle5()">
                                            </div>
                                            </form>
                                            
                                            
                                            </div>
                                            </div>
    

    <div class="text-center text-white" style="margin: 12px;"><h1>YOUR ACCOUNT</h1></div>
    
        <div style=" margin-top: 20px; margin-bottom: 40px;" class="container">
      
        
        
    <div class="row">
      <div class="col">
      <hr>
        <?php 
        $sql = "SELECT * FROM users WHERE email = '$userid'";
        //$sql = "SELECT * FROM users"; moet hierdie twee dalk omruil
  //$id = "SELECT id FROM users WHERE email = '$userid'";
  
  $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
  $result = mysqli_query($conn, $sql);

      // Check if a user with the provided email exists
      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid= '$id'";
            $resultImg = mysqli_query($conn, $sqlImg);

            while($rowImg = mysqli_fetch_assoc($resultImg)){
              
                if($rowImg['status'] == 0) {
                  echo "<img src='uploads/profile". $id . "." .$rowImg['imgtype']."?". mt_rand(). "'" . "style='width: 200px; height: 200px;border: solid 2px; object-fit: cover;'" .">";
                } else{
                  echo "<img src='uploads/doby.jpg'>";
                  
                }
              
            }
          }
          
      }
      else{
        echo " there are no users yet!";
        
      } $conn->close(); ?>
        
        <h1>Account Details</h1>
    
        <h4>Email: <?php echo $useremail ?></h4>
        
        <h4>Date Created: <?php echo $datecreated ?></h4>
        <h4>Username: <?php echo $username ?> 
        </h4>
        <h4>Address: <?php echo $address ?></h4>
        <h4>Name: <?php echo $name ?></h4>
        <h4>Surname: <?php echo $surname ?></h4>
        <h4>Contact Number: <?php echo $contactnumber ?></h4>
        
        <hr>
        <h1>Account Security</h1>
        <p><button class="btn-green" onclick="toggle2()"><img src="images/lockgreen.png" style="height: 35px; width: 45px;">Change Name &nbsp;</button></p>
        <p><button class="btn-green" onclick="toggle1()"><img src="images/lockgreen.png" style="height: 35px; width: 45px;">Change Username &nbsp;</button></p>
        <p><button class="btn-green" onclick="toggle3()"><img src="images/lockgreen.png" style="height: 35px; width: 45px;">Change Surname &nbsp;</button></p>
        <p><button class="btn-green" onclick="toggle4()"><img src="images/lockgreen.png" style="height: 35px; width: 45px;">Change Address &nbsp;</button></p>
        <p><button class="btn-green" onclick="toggle5()"><img src="images/lockgreen.png" style="height: 35px; width: 45px;">Change Contact Number &nbsp;</button></p>
        <h4><a href="signout.php" class="">Logout</a></h4>
        <hr class="d-none d-lg-block">
  </div>
  
  <div class="col">
    <hr>
    <h1>Purchase History</h1>
    <table style="border: solid 1px; width: 100%; min-width:330px; font-size: 15px;" class="text-center">
      <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Item</th>
        <th>Total</th>
        <th>Status</th>
      </tr>

      <tr>
        <td>#12345</td>
        <td>Nov 15, 2024</td>
        <td>10x small pot</td>
        <td>R79.99</td>
        <td>Delivered	</td>
      </tr>
      
    </table>
  </div>
  
  </div>
  
  </div>
  <div id="library" class="dropdown-library"></div>
  <div id="root"></div>
            
    
    

    <link rel="stylesheet" type="text/css" href="homepage.css" />
    <link rel="stylesheet" type="text/css" href="logedin.css" />
    <link rel="stylesheet" type="text/css" href="dropdown.css" />
    <script type="module" src="dist/assets/main-CJ8ojy8N.js"></script>
    <script src="toggle.js"></script>

    <script type="text/javascript">
      function toggle() {
        var div = document.getElementById("navbar-list");
        div.classList.toggle("toggled");
      }

      document.getElementById("navbarbtn").onclick = function () {
        toggle();
      };

      function toggle1() {
  let block = document.getElementById("usernameblock");
  let overlay = document.getElementById("overlay");
  
  overlay.classList.toggle("toggled");
  block.classList.toggle("toggled");
}

function toggle2() {
  let block = document.getElementById("nameblock");
  let overlay = document.getElementById("overlay");
  
  overlay.classList.toggle("toggled");
  block.classList.toggle("toggled");
}

function toggle3() {
  let block = document.getElementById("surnameblock");
  let overlay = document.getElementById("overlay");
  
  overlay.classList.toggle("toggled");
  block.classList.toggle("toggled");
}

function toggle4() {
  let block = document.getElementById("addressblock");
  let overlay = document.getElementById("overlay");
  
  overlay.classList.toggle("toggled");
  block.classList.toggle("toggled");
}

function toggle5() {
  let block = document.getElementById("contactnumberblock");
  let overlay = document.getElementById("overlay");
  
  overlay.classList.toggle("toggled");
  block.classList.toggle("toggled");
}

    </script>
</body>
</html>