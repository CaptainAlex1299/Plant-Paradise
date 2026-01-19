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
            style="margin-left: 20px; width: 65px; height: 50px"
          />
          <img
            src="images/whiteusericon-removebg-preview.png"
            class="navimage"
            style="margin-left: 30px; width: 60px; height: 60px"
          />
        </div>
      </div>
    </nav>

    <div class="container text-start" style="width: 100%; max-width: 900px; margin-top: 50px; margin-bottom: 50px;">
      <h1>Indoor Plants</h1>
      <p>More time indoors during the winter season is a chance to slow down, 
        decompress, and maybe even kick into a bit of a mid-year mental reset. Make it something to look forward to.</p>
    </div>
<hr>
    <div class="container">
      <h1 style="text-align: center;">Large Indoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Norfolk\ Island\ Pine.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Norfolk Island Pine"
       data-item-price="145.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Norfolk\ Island\ Pine.avif"
       data-item-name="Norfolk Island Pine">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Norfolk Island Pine</p>
    <p style="margin-top: -20px;">R146.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Bird-of-Paradise.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Bird-of-Paradise"
       data-item-price="115.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Bird-of-Paradise.avif"
       data-item-name="Bird-of-Paradise">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Bird of Paradise</p>
    <p style="margin-top: -20px;">R116.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Olive\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Olive Tree"
       data-item-price="245.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Olive\ Tree.avif"
       data-item-name="Olive Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Olive Tree</p>
    <p style="margin-top: -20px;">R246.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Money\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Money Tree"
       data-item-price="155.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Money\ Tree.avif"
       data-item-name="Money Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Money Tree</p>
    <p style="margin-top: -20px;">155.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Madagascar\ Dragon\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Madagascar Dragon"
       data-item-price="85.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Madagascar\ Dragon\ Tree.avif"
       data-item-name="Madagascar Dragon">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Madagascar Dragon Tree</p>
    <p style="margin-top: -20px;">R85.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Ficus\ Audrey\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Ficus Audrey Tree"
       data-item-price="99.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Ficus\ Audrey\ Tree.avif"
       data-item-name="Ficus Audrey Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Ficus Audrey Tree</p>
    <p style="margin-top: -20px;">R99.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Peace\ Lily.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peace Lily"
       data-item-price="25.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Peace\ Lily.avif"
       data-item-name="Peace Lily">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peace Lily</p>
    <p style="margin-top: -20px;">R26.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Fiddle-Leaf\ Fig\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Fiddle Leaf Fig Tree"
       data-item-price="300.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Fiddle-Leaf\ Fig\ Tree.avif"
       data-item-name="Fiddle Leaf Fig Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Fiddle Leaf Fig Tree</p>
    <p style="margin-top: -20px;">R300.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Parlor\ Palm.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Parlor Palm"
       data-item-price="66.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Parlor\ Palm.avif"
       data-item-name="Parlor Palm">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Parlor Palm</p>
    <p style="margin-top: -20px;">R66.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Monstera\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Monstera Plant"
       data-item-price="45.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Monstera\ Plant.avif"
       data-item-name="Monstera Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Monstera Plant</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Burgundy\ Rubber\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Burgundy Rubber Plant"
       data-item-price="12.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Burgundy\ Rubber\ Plant.avif"
       data-item-name="Burgundy Rubber Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Burgundy Rubber Plant</p>
    <p style="margin-top: -20px;">R12.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/ZZ\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="ZZ Plant"
       data-item-price="21.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/ZZ\ Plant.avif"
       data-item-name="ZZ Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>ZZ Plant</p>
    <p style="margin-top: -20px;">R21.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Snake\ Plant\ Zeylanica.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Snake Plant"
       data-item-price="41.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Snake\ Plant\ Zeylanica.avif"
       data-item-name="Snake Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Snake Plant</p>
    <p style="margin-top: -20px;">R41.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Meyer\ Lemon\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Meyer Lemon Tree"
       data-item-price="550.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Meyer\ Lemon\ Tree.avif"
       data-item-name="Meyer Lemon Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Meyer Lemon Tree</p>
    <p style="margin-top: -20px;">R550.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Alocasia\ Regal\ Shield.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Alocasia Regal Shield"
       data-item-price="150.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Alocasia\ Regal\ Shield.avif"
       data-item-name="Alocasia Regal Shield">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Alocasia Regal Shield</p>
    <p style="margin-top: -20px;">R150.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Mass\ Cane\ Floor\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Mass Cane Floor Plant"
       data-item-price="96.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Mass\ Cane\ Floor\ Plant.avif"
       data-item-name="Mass Cane Floor Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Mass Cane Floor Plant</p>
    <p style="margin-top: -20px;">R96.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Peruvian\ Apple\ Cactus.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peruvian Apple Cactus"
       data-item-price="99.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Peruvian\ Apple\ Cactus.avif"
       data-item-name="Peruvian Apple Cactus">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peruvian Apple Cactus</p>
    <p style="margin-top: -20px;">R99.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Australian\ Umbrella\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Australian Umbrella Tree"
       data-item-price="245.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Australian\ Umbrella\ Tree.avif"
       data-item-name="Australian Umbrella Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Australian Umbrella Tree</p>
    <p style="margin-top: -20px;">R246.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Ficus\ Audrey\ Tree.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Ficus Audrey Tree"
       data-item-price="336.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Ficus\ Audrey\ Tree.avif"
       data-item-name="Ficus Audrey Tree">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Ficus Audrey Tree</p>
    <p style="margin-top: -20px;">R336.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Philodendron-Lickety\ Splitz.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Philodendron Lickety Splitz"
       data-item-price="236.19"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Philodendron-Lickety\ Splitz.avif"
       data-item-name="Philodendron Lickety Splitz">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Lickety Splitz Plant</p>
    <p style="margin-top: -20px;">R236.19</p>
    </div>  
      </div>
    </div>
    </div>
    <hr style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
      <h1 style="text-align: center;">Small Indoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Buddha\ Palm.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Buddha Palm"
       data-item-price="245.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Buddha\ Palm.webp"
       data-item-name="Buddha Palm">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Buddha Palm</p>
    <p style="margin-top: -20px;">R245.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Nerve\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Nerve\ Plant.webp"
       data-item-price="46.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Nerve\ Plant.webp"
       data-item-name="Nerve\ Plant.webp">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Nerve Plant</p>
    <p style="margin-top: -20px;">R46.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/White\ Bird\ of\ Paradise.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="White Bird of Paradise"
       data-item-price="16.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/White\ Bird\ of\ Paradise.webp"
       data-item-name="White Bird of Paradise">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>White Bird of Paradise</p>
    <p style="margin-top: -20px;">R16.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Bird’s\ Nest\ Fern.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Bird Nest"
       data-item-price="55.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Bird’s\ Nest\ Fern.webp"
       data-item-name="Bird Nest">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Bird’s Nest Fern</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Prayer\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Prayer\ Plant.webp"
       data-item-price="32.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Prayer\ Plant.webp"
       data-item-name="Prayer\ Plant.webp">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Prayer Plant</p>
    <p style="margin-top: -20px;">R32.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Zebra\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Zebra\ Plant.webp"
       data-item-price="44.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Zebra\ Plant.webp"
       data-item-name="Zebra\ Plant.webp">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Zebra Plant</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Peace\ Lily.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peace\ Lily.avif"
       data-item-price="45.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Peace\ Lily.avif"
       data-item-name="Peace\ Lily.avif">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peace Lily</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Air\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Air Plant"
       data-item-price="45.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Air\ Plant.webp"
       data-item-name="Air Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Air Plant</p>
    <p style="margin-top: -20px;">R45.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/String\ of\ Pearls\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="String of Pearls"
       data-item-price="25.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/String\ of\ Pearls\ Plant.webp"
       data-item-name="String of Pearls">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>String of Pearls</p>
    <p style="margin-top: -20px;">R25.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Paddle\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Paddle Plant"
       data-item-price="20.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Paddle\ Plant.webp"
       data-item-name="Paddle Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Paddle Plant</p>
    <p style="margin-top: -20px;">R20.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Jade\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Jade Plant"
       data-item-price="35.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Jade\ Plant.webp"
       data-item-name="Jade Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Jade Plant</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Spider\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Spider Plant"
       data-item-price="20.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Spider\ Plant.webp"
       data-item-name="Spider Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Polka Plant</p>
    <p style="margin-top: -20px;">R21.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Rubber\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Rubber Plant"
       data-item-price="25.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Rubber\ Plant.webp"
       data-item-name="Rubber Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Rubber Plant</p>
    <p style="margin-top: -20px;">R25.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Chinese\ Money\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Chinese Money Plant"
       data-item-price="79.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Chinese\ Money\ Plant.webp"
       data-item-name="Chinese Money Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Chinese Money Plant</p>
    <p style="margin-top: -20px;">R79.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Dracaena.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Dracaena"
       data-item-price="15.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Dracaena.webp"
       data-item-name="Dracaena">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Dracaena Plant</p>
    <p style="margin-top: -20px;">R15.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Aloe\ Vera\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Aloe Vera"
       data-item-price="50.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Aloe\ Vera\ Plant.webp"
       data-item-name="Aloe Vera">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Aloe Vera Plant</p>
    <p style="margin-top: -20px;">R50.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Golden\ Pothos.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Golden Pothos"
       data-item-price="65.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Golden\ Pothos.webp"
       data-item-name="Golden Pothos">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Golden Pothos</p>
    <p style="margin-top: -20px;">R66.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Snake\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Snake Plant"
       data-item-price="35.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Snake\ Plant.webp"
       data-item-name="Snake Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Snake Plant</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/ZPlant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="ZPlant"
       data-item-price="9.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/ZPlant.webp"
       data-item-name="ZPlant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>ZPlant</p>
    <p style="margin-top: -20px;">R10.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(indoorplantimages/Boston\ Fern.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Boston Fern"
       data-item-price="45.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="indoorplantimages/Boston\ Fern.webp"
       data-item-name="Boston Fern">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Boston Fern</p>
    <p style="margin-top: -20px;">R45.00</p>
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
