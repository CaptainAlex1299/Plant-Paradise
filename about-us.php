<?php
 session_start();
 require "checksession.php";
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
    <link rel="stylesheet" type="text/css" href="plantcare/PlantCare.css"/>
    <title>WinterPlantCare</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
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
              class="navbar-brand-img navimage d-none d-sm-block"
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
                    <ul style="margin-top: 10px;"><a href="contact-us.php" class="nav-list">Contact-Us</a></ul>
                  </div>
                </li>
              </ul>
          </div>
        </div>
        <div class="navbarend">
          <img
            src="images/shoppingcartplant-removebg-preview.png"
            class="navimage"
            style="margin-right: 10px; width: 65px; height: 50px"
          />
      
          <?php
          echo $profileimg;
          ?>
          
        </div>
      </div>
      </nav>

      <div class="container mt-4" style="max-width: 800px; margin-bottom: 100px;">
        <h1 class="text-center" style="margin-bottom: 50px;">About Us</h1>
        <p>
          <h1>Indoor Plants for City Folks</h1>
          PlantParadise started from humble beginnings in April 2016, from a spare bedroom in Gardens, Cape Town. Fast forward to today, 
          <p>PlantParadise has a thriving online, physical retail and corporate business, with two Cape Town stores that send 10,000s of plants to all corners of South Africa annually.</p>
        We're big and small: Our Corporate Services Team supports large clients with short to long terms projects. But we're still the charming little plant shop around the corner that remembers its customers by name.
        </p>

      <div class="my-4"><img src="images/CURRENT_BLOG_-_Body_Stitched_Images_30.webp" style="max-width: 100%;"></div>

      <h1>Our Day-to-Day In Store Offerings:</h1>
      <ul>
      <li>Our Wide Selection of Plants come from SA's best growers - we know who grows certain varieties best.</li>
      <li>We're especially proud of our wide range of affordable, locally made Planters to suit every interior.</li>
      <li>Plantify Mossballs are freshly made to order - you'll find them hanging in many restaurants in town.</li>
      <li>We welcome our clients and their plants with our free In-Store Repotting Service.</li>
      <li>Our monthly in-store Lunchtime Workshops continue to train and educate our growing plant community on levelling up their plant parenting journey.</li>
      </ul>

      <h1>Plantify’s Corporate Offerings:</h1>
      <ul>
        <li>Our Plant Rental Business in Cape Town supplies Events, Decorators, Stylist and Conferences with on-trend, well priced rental plants.</li>
        <li>We offer bespoke botanically themed Corporate Gifting solutions nationwide for large SA businesses.</li>
        <li>Our Home and Business Plant Consults continue to green South African businesses. We visit in person or conduct remote virtual consults.</li>
        <li>Our Plant Sourcing service helps large and small businesses meet the exact plant or planter required for their projects. </li>
      </ul>
      <div class="my-4"><img src="images/CURRENT_BLOG_-_Body_Stitched_Images_31.webp" style="max-width: 100%;"></div>
      </div>

      <div class="container">
        <hr>
        <footer class="py-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5>CONTACT US</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont"
                    >12 Jan Van Riebeeck Street,</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">Oudtshoorn, 8001 </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont"
                    >Mon - Fri: 09h00 - 17h00</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont mt-4"
                    >Sat - Sun: 09h30 - 13h30</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">+27 21 330 5075</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont"
                    >somethingg@gmail.com</a
                  >
                </li>
              </ul>
            </div>
  
            <div class="col-6 col-md-2 offset-md-1 mb-3">
              <h5>Browse</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">Shop</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">Blog</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont"
                    >Pot & Basket Sizing Guide</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">FAQs</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">Plant Care</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">About Us</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">Contact Us</a>
                </li>
              </ul>
            </div>
  
            <div class="col-6 col-md-2 offset-md-1 mb-3">
              <h5>Services</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont"
                    >Plant Rental Oudtshoorn</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont"
                    >On Site Plant Consults</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont">Plant Repotting</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 smallfont"
                    >Corporate Gifting
                  </a>
                </li>
              </ul>
            </div>
  
  
            <div class="col-md-4 offset-md mb-3">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden"
                    >Email address</label
                  >
                  <input
                    id="newsletter1"
                    type="text"
                    class="form-control"
                    placeholder="Email address"
                    style="max-width: 350px;"
                  />
                  <button class="" type="button" style="max-width: 60px;"><img src="images/mail.png" style="width: 40px; height: 40px;max-width: 40px;"></button>
                </div>
              
                  
                </button>
              </form>
            </div>
          </div>
  
          <div
            class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top"
          >
            <p>© 2022 Company, Inc. All rights reserved.</p>
          </div>
        </footer>

        <div id="root"></div>

    <script type="module" src="dist/assets/main-C2szXpye.js"></script>
    <link rel="stylesheet" type="text/css" href="dropdown.css" />
    <script src="toggle.js"></script>
    <script type="text/javascript"></script>
</body>
</html>