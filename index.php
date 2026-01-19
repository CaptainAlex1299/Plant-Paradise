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
    <title>Plant Paradise</title>
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

    <div class="homepageblock">
      <div class="homepageblockimg">
        <div class="center">
          <h1 class="daymode">Upgrade your garden with PlantParadise today!</h1>
        </div>
      </div>
    </div>

    <div class="dirtborder d-none d-sm-block">
    </div>
    <div class="container-fluid backgrimage">
      <div class="">
        <div
          class="text-center" style="height: 200px;"><div class="shopheader"><h1>SHOP BY CATEGORY</h1></div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="
            background-image: url(images/Male_Indoor_Plants_1296x728-header-1296x729.webp);
          "
        >
        <a href="myshop.php" style="text-decoration: none;"><div class="category"><p>All Plants</p></div></a>
        </div>
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="background-image: url(images/outdoorplant.avif)"

        >
        <a href="outdoor.php" style="text-decoration: none;"><div class="category"><p>Outdoor Plants</p></div></a>
        </div>
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="background-image: url(images/indoorplant1.jpg)"
        >
        <a href="indoor.php" style="text-decoration: none;"><div class="category"><p>Indoor Plants</p></div></a>
        </div>
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="background-image: url(images/indoorplant.jpg)"
        >
        <a href="easycare.php" style="text-decoration: none;"><div class="category"><p>Easy Care Plants</p></div></a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="background-image: url(images/largePlant.jpg)"
        >
        <a href="largeplants.php" style="text-decoration: none;"><div class="category"><p>Large Plants</p></div></a>
        </div>
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="background-image: url(images/smallplant.webp)"
        >
        <a href="smallplants.php" style="text-decoration: none;"><div class="category"><p>Small Plants</p></div></a>
        </div>
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="background-image: url(images/pots\ and\ baskets.webp)"
        >
        <a href="potsandbaskets.php" style="text-decoration: none;"><div class="category"><p>Pots &amp; Baskets</p></div></a>
        </div>
        <div
          class="col-4 col-sm-4 col-md-4 col-lg-2 blockcolor1"
          style="background-image: url(images/homeware.jpg)"
        >
          <div class="category"><p>HomeWare</p></div>
        </div>

        <div class=" d-none d-sm-block" style="height: 200px">
        
        </div>
      </div>
    </div>

    <div class="container-fluid" style="margin-top: 80px;min-height: 250px; background-color: rgb(5, 36, 10);">
      <div class="row justify-content-center nightmode">
        <div class="blockcolor col-sm-12 col-md-3 text-center mt-3">
          <img src="images/delivery.png" style="width: 100px; height: 100px" />
          <h4>NATIONWIDE SHIPPING</h4>
          <p>
            No size limit. We ship everywhere in South Africa.
          </p>
        </div>
        <div class="blockcolor col-sm-12 col-md-3 text-center mt-3">
          <img src="images/plantcare-removebg-preview.png" style="width: 60px; height: 60px;margin-top: 20px;" />
          <h4 style="margin-top: 20px;">NEXT LEVEL SERVICE</h4>
          <p>
            Quick, efficient, helpful. In store and remote support. Let's get it
            done.
          </p>
        </div>
        <div class="blockcolor col-sm-12 col-md-3 text-center mt-3">
          <img src="images/plantshovel-removebg-preview.png" style="width: 100px; height: 100px" />
          <h4>FREE CARE INSTRUCTIONS</h4>
          <p>Extensive Plant Care Library. And Knowledge Resources.</p>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top: 80px;">
      <div class="clearfix" style="
      max-width: 800px;
      border: 3px solid green;
      padding-left: 15px;
      padding-top: 15px;
      padding-bottom: 15px;
      background-color: rgb(19, 70, 23);
      margin: auto;
      ">
      <div class="">
      <img src="images/predaplant.jpeg" 
      class="col-md-6 float-md-start mb-3 mx-md-3" style="max-width: 100%; min-height: 280px; padding-right: 15px;"/>
      </div>
      <div>
        <h2>Carnivore Plants</h2>
        <p class="">
          Shop our Affordable Range of carnivore plants.
          From the famous Venus flytrap to the classic Cape sundew.
          Delivered anywhere in SA from just R95.
        </p>
        <a href="predaplants.php" class="buttonPlant">View Collection >></a>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 80px;">
    <div class="clearfix" style="
    max-width: 800px;
    border: 3px solid green;
  padding-left: 15px;
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: rgb(19, 70, 23);
  margin: auto;
    ">
    <div class="">
    <img src="images/plantknowledge.jpg" 
    class="col-md-6 float-md-start mb-3 mx-md-3" alt="..." style="max-width: 100%; min-height: 280px; padding-right: 15px;"/>
    </div>
    <div >
      <h2>Plant Knowledge</h2>
      <p class="" style="padding-right: 10px;">
        Plant care is an essential aspect of gardening and maintaining healthy indoor and outdoor plants. 
        Proper plant care ensures optimal growth, increased productivity, and vibrant foliage. 
        To achieve this, gardeners must consider various factors, such as soil, watering, light, 
        temperature, and pest management.
        Make sure to check on our Extensive Plant Care Library!
      </p>
      
  <div class="dropdown" style=" position: relative; display: inline-block;">
  <button class="buttonPlant" onclick="togglelibrary()">View Library >></button>
  <div id="library" class="dropdown-library">
    <div style="font-size: 20px; position: absolute; background-color: green; text-decoration: none; width: 240px;">
    <p class="px-4 pt-2"><a href="winterplantcare.php" style="text-decoration: none; color: white;">Winter Plant Care</a></p>
    <p class="px-4"><a href="summerplantcare.php" style="text-decoration: none; color: white;">Summer Plant Care</a></p>
    <p class="px-4"><a href="watering-plants.php" style="text-decoration: none; color: white;">Watering Plants 101</a></p>
</div>
  </div>
</div>
</ul>
  </div>
    </div>
  </div>
</div>

    <div style="width: 100%; height: 200px;"></div>
    
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
    </div>

    <div id="root"></div>
    <script type="module" src="dist/assets/main-D5AoRglv.js"></script>
    <link rel="stylesheet" type="text/css" href="dropdown.css" />
    <link rel="stylesheet" type="text/css" href="homepage.css" />
    <script src="toggle.js"></script>
  </body>
</html>
