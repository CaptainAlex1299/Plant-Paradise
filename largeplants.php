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
    <title>Plant Paradise /Shop</title>
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

    <div class="container text-start" style="width: 100%; max-width: 900px; margin-top: 50px; margin-bottom: 50px;">
      <h1>Large Plants</h1>
      <p>We stock a range of larger plants which make wonderful statement pieces in the interior space. Our Large Range comes with custom shipping calculations.</p>
    </div>
<hr>
    <div class="container">
      <h1 style="text-align: center;">Large Indoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Bird-of-Paradise.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Bird-of-Paradise"
       data-item-price="15.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Bird-of-Paradise.avif"
       data-item-name="Bird-of-Paradise">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Bird of Paradise</p>
    <p style="margin-top: -20px;">R16.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Olive\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Olive Tree"
       data-item-price="122.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Olive\ Tree.avif"
       data-item-name="Olive Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Olive Tree</p>
    <p style="margin-top: -20px;">R122.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Money\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Money Tree"
       data-item-price="95.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Money\ Tree.avif"
       data-item-name="Money Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Money Tree</p>
    <p style="margin-top: -20px;">R96.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Madagascar\ Dragon\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Madagascar Dragon Tree"
       data-item-price="85.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Madagascar\ Dragon\ Tree.avif"
       data-item-name="Madagascar Dragon Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Madagascar Dragon Tree</p>
    <p style="margin-top: -20px;">R86.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Ficus\ Audrey.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Ficus Audrey"
       data-item-price="22.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Ficus\ Audrey.avif"
       data-item-name="Ficus Audrey">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Ficus Audrey</p>
    <p style="margin-top: -20px;">R22.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Peace\ Lily.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peace Lily"
       data-item-price="55.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Peace\ Lily.avif"
       data-item-name="Peace Lily">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peace Lily</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Fiddle-Leaf\ Fig\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Fiddle-Leaf Fig Tree"
       data-item-price="200.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Fiddle-Leaf\ Fig\ Tree.avif"
       data-item-name="Fiddle-Leaf Fig Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Fiddle Leaf Fig Tree</p>
    <p style="margin-top: -20px;">R200.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Parlor\ Palm.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Parlor Palm"
       data-item-price="159.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Parlor\ Palm.avif"
       data-item-name="Parlor Palm">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Parlor Palm</p>
    <p style="margin-top: -20px;">R159.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Monstera\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Monstera Plant"
       data-item-price="15.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Monstera\ Plant.avif"
       data-item-name="Monstera Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Monstera Plant</p>
    <p style="margin-top: -20px;">R15.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Burgundy\ Rubber\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Burgundy Rubber Plant"
       data-item-price="00.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Burgundy\ Rubber\ Plant.avif"
       data-item-name="Burgundy Rubber Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Burgundy Rubber Plant</p>
    <p style="margin-top: -20px;">R46.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/ZZ\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="ZZ Plant"
       data-item-price="22.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/ZZ\ Plant.avif"
       data-item-name="ZZ Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>ZZ Plant</p>
    <p style="margin-top: -20px;">R22.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Snake\ Plant\ \'Zeylanica\'.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Snake Plant Zeylanica"
       data-item-price="44.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Snake\ Plant\ \'Zeylanica\'.avif"
       data-item-name="Snake Plant Zeylanica">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Snake Plant</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Meyer\ Lemon\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Meyer Lemon Tree"
       data-item-price="336.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Meyer\ Lemon\ Tree.avif"
       data-item-name="Meyer Lemon Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Meyer Lemon Tree</p>
    <p style="margin-top: -20px;">R336.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Alocasia\ Regal\ Shield.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Alocasia Regal Shield"
       data-item-price="55.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Alocasia\ Regal\ Shield.avif"
       data-item-name="Alocasia Regal Shield">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Alocasia Regal Shield</p>
    <p style="margin-top: -20px;">R56.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Mass\ Cane\ Floor\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Mass Cane Floor Plant"
       data-item-price="100.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Mass\ Cane\ Floor\ Plant.avif"
       data-item-name="Mass Cane Floor Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Mass Cane Floor Plant</p>
    <p style="margin-top: -20px;">R100.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Peruvian\ Apple\ Cactus.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peruvian Apple Cactus"
       data-item-price="41.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Peruvian\ Apple\ Cactus.avif"
       data-item-name="Peruvian Apple Cactus">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peruvian Apple Cactus</p>
    <p style="margin-top: -20px;">R42.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Australian\ Umbrella\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Australian Umbrella Tree"
       data-item-price="99.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Australian\ Umbrella\ Tree.avif"
       data-item-name="Australian Umbrella Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Australian Umbrella Tree</p>
    <p style="margin-top: -20px;">R99.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Ficus\ Audrey.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Ficus\ Audrey.avif"
       data-item-price="36.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Ficus\ Audrey.avif"
       data-item-name="Ficus\ Audrey.avif">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Ficus Audrey</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Lickety\ Splitz.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Lickety Splitz"
       data-item-price="55.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Lickety\ Splitz.avif"
       data-item-name="Lickety Splitz">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Lickety Splitz</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Norfolk\ Island\ Pine.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Norfolk Island Pine"
       data-item-price="136.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Norfolk\ Island\ Pine.avif"
       data-item-name="Norfolk Island Pine">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Norfolk Island Pin</p>
    <p style="margin-top: -20px;">R136.00</p>
    </div>  
      </div>
    </div>
    </div>
    <hr style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
      <h1 style="text-align: center;">Large Outdoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Buddleia-lindleyana.i-88.s-66249.r-1_5599dd9a-46e0-48a1-ae6a-59fd363fb504.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Buddleia lindleyana"
       data-item-price="226.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Buddleia-lindleyana.i-88.s-66249.r-1_5599dd9a-46e0-48a1-ae6a-59fd363fb504.webp"
       data-item-name="Buddleia lindleyana">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Buddleia lindleyana</p>
    <p style="margin-top: -20px;">R226.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Baptisia-Yellow-Towers.i-3954.s-64817.r-1_7149746d-8f9f-4105-919b-a40527eaa7b7.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Baptisia Yellow Towers"
       data-item-price="11.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Baptisia-Yellow-Towers.i-3954.s-64817.r-1_7149746d-8f9f-4105-919b-a40527eaa7b7.webp"
       data-item-name="Baptisia Yellow Towers">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baptisia Yellow Towers</p>
    <p style="margin-top: -20px;">R11.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Baptisia-Lavender-Candles.i-8340.s-67370.r-1.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Baptisia Lavender Candles"
       data-item-price="100.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Baptisia-Lavender-Candles.i-8340.s-67370.r-1.webp"
       data-item-name="Baptisia Lavender Candles">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baptisia Lavender Candles</p>
    <p style="margin-top: -20px;">R100.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Baptisia-Ivory-Towers-PP-26827.i-8738.s-64814.r-1_79b4617a-0933-4691-8fa3-2fe4f756c958.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Baptisia Ivory Towers"
       data-item-price="44.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Baptisia-Ivory-Towers-PP-26827.i-8738.s-64814.r-1_79b4617a-0933-4691-8fa3-2fe4f756c958.webp"
       data-item-name="Baptisia Ivory Towers">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baptisia Ivory Towers</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Baptisia-Blue-Towers-PP-27088.i-8338.s-64995.r-1.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Baptisia Blue Towers"
       data-item-price="65.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Baptisia-Blue-Towers-PP-27088.i-8338.s-64995.r-1.webp"
       data-item-name="Baptisia Blue Towers">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baptisia Blue Towers</p>
    <p style="margin-top: -20px;">R65.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Baptisia-Blue-Bunchkin.i-11848.s-66290.r-1_4d05633f-ce32-421c-9506-0f53136806d7.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Baptisia-Blue-Bunchkin"
       data-item-price="41.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Baptisia-Blue-Bunchkin.i-11848.s-66290.r-1_4d05633f-ce32-421c-9506-0f53136806d7.webp"
       data-item-name="Baptisia-Blue-Bunchkin">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baptisia Blue Bunchkin</p>
    <p style="margin-top: -20px;">R41.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Baptisia-Angelina.i-12686.s-65944.r-1.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Baptisia-Angelina"
       data-item-price="35.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Baptisia-Angelina.i-12686.s-65944.r-1.webp"
       data-item-name="Baptisia-Angelina">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baptisia Angelina</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Asarum-nobilissimum-King-Kong.i-9568.s-66576.r-1.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Asarum nobilissimum King Kong"
       data-item-price="100.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Asarum-nobilissimum-King-Kong.i-9568.s-66576.r-1.jpg"
       data-item-name="Asarum nobilissimum King Kong">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Asarum nobilissimum</p>
    <p style="margin-top: -20px;">R100.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Baptisia-Angelina.i-12686.s-65944.r-1.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Baptisia Angelina"
       data-item-price="150.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Baptisia-Angelina.i-12686.s-65944.r-1.webp"
       data-item-name="Baptisia Angelina">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baptisia Angelina</p>
    <p style="margin-top: -20px;">R150.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Bambusa-multiplex-Green-Giant.i-9026.s-67847.r-1.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Bambusa multiplex Green-Giant"
       data-item-price="16.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Bambusa-multiplex-Green-Giant.i-9026.s-67847.r-1.jpg"
       data-item-name="Bambusa multiplex Green-Giant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Bambusa Green-Giant</p>
    <p style="margin-top: -20px;">R16.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Amorphophallus-titanum.i-1775.s-65616.r-1.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Amorphophallus titanum"
       data-item-price="100.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Amorphophallus-titanum.i-1775.s-65616.r-1.jpg"
       data-item-name="Amorphophallus titanum">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Amorphophallus titanum</p>
    <p style="margin-top: -20px;">R100.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Aloysia-gratissima-Punky-Brewster.i-17483.s-67236.r-1_e1693ce6-4d47-491c-bf11-90b7afddb9fe.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Aloysia-gratissima Punky Brewster"
       data-item-price="36.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Aloysia-gratissima-Punky-Brewster.i-17483.s-67236.r-1_e1693ce6-4d47-491c-bf11-90b7afddb9fe.webp"
       data-item-name="Aloysia gratissima Punky Brewster">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Aloysia gratissima</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Aloysia-virgata.i-7587.s-61235.r-1.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Aloysia virgata"
       data-item-price="15.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Aloysia-virgata.i-7587.s-61235.r-1.jpg"
       data-item-name="Aloysia virgata">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Aloysia virgata</p>
    <p style="margin-top: -20px;">R15.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Alocasia-Portodora.i-3654.s-20243.r-1.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Alocasia Portodora"
       data-item-price="25.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Alocasia-Portodora.i-3654.s-20243.r-1.jpg"
       data-item-name="Alocasia Portodora">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Alocasia Portodora</p>
    <p style="margin-top: -20px;">R25.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Alocasia-macrorrhizos.i-1160.s-67578.r-1.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Alocasia macrorrhizos"
       data-item-price="19.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Alocasia-macrorrhizos.i-1160.s-67578.r-1.webp"
       data-item-name="Alocasia macrorrhizos">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Alocasia macrorrhizos</p>
    <p style="margin-top: -20px;">R19.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Alocasia-Portodora.i-3654.s-20243.r-1.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Alocasia Portodora"
       data-item-price="99.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Alocasia-Portodora.i-3654.s-20243.r-1.jpg"
       data-item-name="Alocasia Portodora">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Alocasia Portodor</p>
    <p style="margin-top: -20px;">R99.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Alcea-rugosa.i-4469.s-17185.r-1_eaee9ac9-6d57-49fd-a022-18086df11ef7.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Alcea rugosa"
       data-item-price="150.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Alcea-rugosa.i-4469.s-17185.r-1_eaee9ac9-6d57-49fd-a022-18086df11ef7.webp"
       data-item-name="Alcea rugosa">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Alcea rugosa</p>
    <p style="margin-top: -20px;">R150.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Agave-americana.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Agave americana"
       data-item-price="44.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Agave-americana.webp"
       data-item-name="Agave americana">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Agave americana</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Agave-chrysantha.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Agave chrysantha"
       data-item-price="66.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Agave-chrysantha.webp"
       data-item-name="Agave chrysantha">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Agave chrysantha</p>
    <p style="margin-top: -20px;">R66.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(largeplantimages/Agave-pseudoferox-Bellville.i-7979.s-65771.r-1.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Agave pseudoferox Bellville"
       data-item-price="85.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="largeplantimages/Agave-pseudoferox-Bellville.i-7979.s-65771.r-1.webp"
       data-item-name="Agave pseudoferox Bellville">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Agave Bellville</p>
    <p style="margin-top: -20px;">R85.00</p>
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
    <script type="module" src="dist/assets/main-CJ8ojy8N.js"></script>

    <script type="module" src="dist/assets/second-CzA1jxVb.js"></script>

    <script>
  window.SnipcartSettings = {
    publicApiKey: 'NWFmODMzZDEtNWRlNC00NGIyLWE0MWUtN2VmMDQ1MWQwMjg4NjM4NjQ2NjcxMjA2NDcxMjI0',
    loadStrategy: "on-user-interaction",
    modalStyle: "side",
    version: "3.7.1"
  };

  (function(){var c,d;(d=(c=window.SnipcartSettings).version)!=null||(c.version="3.0");var s,S;(S=(s=window.SnipcartSettings).timeoutDuration)!=null||(s.timeoutDuration=2750);var l,p;
  (p=(l=window.SnipcartSettings).domain)!=null||(l.domain="cdn.snipcart.com");var w,u;(u=(w=window.SnipcartSettings).protocol)!=null||(w.protocol="https");
  var m,g;(g=(m=window.SnipcartSettings).loadCSS)!=null||(m.loadCSS=!0);
  var y=window.SnipcartSettings.version.includes("v3.0.0-ci")||window.SnipcartSettings.version!="3.0"&&window.SnipcartSettings.version.localeCompare("3.4.0",void 0,{numeric:!0,sensitivity:"base"})===-1,f=["focus","mouseover","touchmove","scroll","keydown"];window.LoadSnipcart=o;
  document.readyState==="loading"?document.addEventListener("DOMContentLoaded",r):r();
  function r(){window.SnipcartSettings.loadStrategy?window.SnipcartSettings.loadStrategy==="on-user-interaction"&&(f.forEach(function(t){return document.addEventListener(t,o)}),setTimeout(o,window.SnipcartSettings.timeoutDuration)):o()}var a=!1;function o(){if(a)return;a=!0;
  let t=document.getElementsByTagName("head")[0],n=document.querySelector("#snipcart"),i=document.querySelector('src[src^="'.concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,'"][src$="snipcart.js"]')),e=document.querySelector('link[href^="'.concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,'"][href$="snipcart.css"]'));
  n||(n=document.createElement("div"),n.id="snipcart",n.setAttribute("hidden","true"),document.body.appendChild(n)),h(n),i||(i=document.createElement("script"),i.src="".concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,"/themes/v").concat(window.SnipcartSettings.version,"/default/snipcart.js"),i.async=!0,t.appendChild(i)),!e&&window.SnipcartSettings.loadCSS&&(e=document.createElement("link"),e.rel="stylesheet",e.type="text/css",e.href="".concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,"/themes/v").concat(window.SnipcartSettings.version,"/default/snipcart.css"),t.prepend(e)),f.forEach(function(v){return document.removeEventListener(v,o)})}function h(t){!y||(t.dataset.apiKey=window.SnipcartSettings.publicApiKey,window.SnipcartSettings.addProductBehavior&&(t.dataset.configAddProductBehavior=window.SnipcartSettings.addProductBehavior),window.SnipcartSettings.modalStyle&&(t.dataset.configModalStyle=window.SnipcartSettings.modalStyle),window.SnipcartSettings.currency&&(t.dataset.currency=window.SnipcartSettings.currency),window.SnipcartSettings.templatesUrl&&(t.dataset.templatesUrl=window.SnipcartSettings.templatesUrl))}})();
</script>
    <link rel="stylesheet" type="text/css" href="dropdown.css" />
    <link rel="stylesheet" type="text/css" href="shopalt.css" />
    <script src="toggle.js"></script>
  </body>
</html>
