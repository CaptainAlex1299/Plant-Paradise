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
      <h1>Small Plants</h1>
      <p>Add a pop of green to your life! Choose from our standard range of small indoor and outdoor plants to brighten up any space. Get FREE Care Instructions & Quick Delivery.</p>
    </div>
<hr>
    <div class="container">
      <h1 style="text-align: center;">Small Outdoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Calamondin\ Citrus.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Calamondin Citrus"
       data-item-price="45.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Calamondin\ Citrus.avif"
       data-item-name="Calamondin Citrus">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Calamondin Citrus</p>
    <p style="margin-top: -20px;">R45.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Alyssum.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Alyssum"
       data-item-price="19.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Alyssum.avif"
       data-item-name="Alyssum">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Alyssum Plant</p>
    <p style="margin-top: -20px;">R19.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Cuphea\ Hyssopifoliaot.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Cuphea Hyssopifoliaot"
       data-item-price="18.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Cuphea\ Hyssopifoliaot.avif"
       data-item-name="Cuphea Hyssopifoliaot">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Cuphea Hyssopifoliaot</p>
    <p style="margin-top: -20px;">R18.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Marigold\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Marigold Plant"
       data-item-price="36.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Marigold\ Plant.avif"
       data-item-name="Marigold Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Marigold Plant</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Mandevilla\ Trellis.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Mandevilla Trellis"
       data-item-price="9.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Mandevilla\ Trellis.avif"
       data-item-name="Mandevilla Trellis">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Mandevilla Trellis</p>
    <p style="margin-top: -20px;">R9.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Wishbone\ Flower.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Wishbone Flower"
       data-item-price="34.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Wishbone\ Flower.avif"
       data-item-name="Wishbone Flower">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Wishbone Flower</p>
    <p style="margin-top: -20px;">R34.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Wishbone\ Flower.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Wishbone Flower"
       data-item-price="55.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Wishbone\ Flower.avif"
       data-item-name="Wishbone Flower">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Wishbone Flower</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Susan\ Vine.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Susan Vine"
       data-item-price="95.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Susan\ Vine.avif"
       data-item-name="Susan Vine">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Susan Vine</p>
    <p style="margin-top: -20px;">R95.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/BubbleBlooms\ Rex\ Begonia.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="BubbleBlooms Rex Begonia"
       data-item-price="84.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/BubbleBlooms\ Rex\ Begonia.avif"
       data-item-name="BubbleBlooms Rex Begonia">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>BubbleBlooms Rex</p>
    <p style="margin-top: -20px;">R84.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Superbells.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Superbells"
       data-item-price="40.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Superbells.avif"
       data-item-name="Superbells">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Superbells Plant</p>
    <p style="margin-top: -20px;">R40.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Boston\ Fern.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Boston Fern"
       data-item-price="36.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Boston\ Fern.avif"
       data-item-name="Boston Fern">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Boston Fern</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Caladium\ Strap\ Leaf.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Caladium Strap Leaf"
       data-item-price="77.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Caladium\ Strap\ Leaf.avif"
       data-item-name="Caladium Strap Leaf">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Caladium Strap Leaf</p>
    <p style="margin-top: -20px;">R77.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Jasmine\ Potted\ Plant.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Jasmine Potted Plant"
       data-item-price="50.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Jasmine\ Potted\ Plant.avif"
       data-item-name="Jasmine Potted Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Jasmine Potted Plant</p>
    <p style="margin-top: -20px;">R50.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Red\ Petunia.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Red Petunia"
       data-item-price="28.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Red\ Petunia.avif"
       data-item-name="Red Petunia">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Red Petunia</p>
    <p style="margin-top: -20px;">R28.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/English\ Ivy.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="English Ivy"
       data-item-price="18.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/English\ Ivy.avif"
       data-item-name="English Ivy">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>English Ivy</p>
    <p style="margin-top: -20px;">R18.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Pink\ Lantana.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Pink Lantana"
       data-item-price="70.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Pink\ Lantana.avif"
       data-item-name="Pink Lantana">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Pink Lantana</p>
    <p style="margin-top: -20px;">R70.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/erbena\ Bonariensis.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="erbena Bonariensis"
       data-item-price="79.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/erbena\ Bonariensis.avif"
       data-item-name="erbena Bonariensis">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Erbena Bonariensis</p>
    <p style="margin-top: -20px;">R79.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Violet\ Butterfly\ Bush.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Violet Butterfly Bush"
       data-item-price="19.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Violet\ Butterfly\ Bush.avif"
       data-item-name="Violet Butterfly Bush">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Violet Butterfly Bush</p>
    <p style="margin-top: -20px;">R19.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/English\ Lavender.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="English Lavender"
       data-item-price="20.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/English\ Lavender.avif"
       data-item-name="English Lavender">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>English Lavender</p>
    <p style="margin-top: -20px;">R20.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/The\ Sill\ Star\ Jasmine.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Sill Star Jasmine"
       data-item-price="22.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/The\ Sill\ Star\ Jasmine.avif"
       data-item-name="Sill Star Jasmine">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Sill Star Jasmine</p>
    <p style="margin-top: -20px;">R22.00</p>
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
      <div style="background-image: url(smallplantimages/Boston\ Fern.avif); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Boston Fern"
       data-item-price="30.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Boston\ Fern.avif"
       data-item-name="Boston Fern">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Boston Fern</p>
    <p style="margin-top: -20px;">R30.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Buddha\ Palm.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Buddha Palm"
       data-item-price="65.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Buddha\ Palm.webp"
       data-item-name="Buddha Palm">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Buddha Palm</p>
    <p style="margin-top: -20px;">R65.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Nerve\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Nerve Plant"
       data-item-price="70.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Nerve\ Plant.webp"
       data-item-name="Nerve Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Nerve Plant</p>
    <p style="margin-top: -20px;">R70.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/White\ Bird\ of\ Paradise.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="White Bird of Paradise"
       data-item-price="28.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/White\ Bird\ of\ Paradise.webp"
       data-item-name="White Bird of Paradise">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>White Bird of Paradise</p>
    <p style="margin-top: -20px;">R28.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Prayer\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Prayer Plant"
       data-item-price="18.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Prayer\ Plant.webp"
       data-item-name="Prayer Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Prayer Plant</p>
    <p style="margin-top: -20px;">R18.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Zebra\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Zebra Plant"
       data-item-price="100.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Zebra\ Plant.webp"
       data-item-name="Zebra Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Polka Plant</p>
    <p style="margin-top: -20px;">R100.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Peace\ Lily.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peace Lily"
       data-item-price="14.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Peace\ Lily.webp"
       data-item-name="Peace Lily">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peace Lily</p>
    <p style="margin-top: -20px;">R14.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Air\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Air Plant"
       data-item-price="31.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Air\ Plant.webp"
       data-item-name="Air Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Air Plant</p>
    <p style="margin-top: -20px;">R31.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/String\ of\ Pearls\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="String of Pearls Plant"
       data-item-price="22.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/String\ of\ Pearls\ Plant.webp"
       data-item-name="String of Pearls Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>String of Pearls Plant</p>
    <p style="margin-top: -20px;">R22.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Paddle\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Paddle Plant"
       data-item-price="66.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Paddle\ Plant.webp"
       data-item-name="Paddle Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Paddle Plant</p>
    <p style="margin-top: -20px;">R66.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Jade\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Jade Plant"
       data-item-price="55.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Jade\ Plant.webp"
       data-item-name="Jade Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Jade Plant</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Spider\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Spider Plant"
       data-item-price="27.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Spider\ Plant.webp"
       data-item-name="Spider Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Spider Plant</p>
    <p style="margin-top: -20px;">R27.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Rubber\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Rubber Plant"
       data-item-price="18.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Rubber\ Plant.webp"
       data-item-name="Rubber Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Rubber Plant</p>
    <p style="margin-top: -20px;">R18.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Chinese\ Money\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Chinese Money Plant"
       data-item-price="44.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Chinese\ Money\ Plant.webp"
       data-item-name="Chinese Money Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Chinese Money Plant</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Dracaena.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Dracaena"
       data-item-price="80.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Dracaena.webp"
       data-item-name="Dracaena">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Dracaena Plant</p>
    <p style="margin-top: -20px;">R80.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Aloe\ Vera\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Aloe Vera Plant"
       data-item-price="44.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Aloe\ Vera\ Plant.webp"
       data-item-name="Aloe Vera Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Aloe Vera Plant</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Golden\ Pothos.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Golden Pothos"
       data-item-price="19.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Golden\ Pothos.webp"
       data-item-name="Golden Pothos">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Golden Pothos Plant</p>
    <p style="margin-top: -20px;">R19.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Snake\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Snake Plant"
       data-item-price="39.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Snake\ Plant.webp"
       data-item-name="Snake Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Snake Plant</p>
    <p style="margin-top: -20px;">R39.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/ZZ\ Plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="ZZ Plant"
       data-item-price="22.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/ZZ\ Plant.webp"
       data-item-name="ZZ Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Polka Plant</p>
    <p style="margin-top: -20px;">R22.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(smallplantimages/Peace\ Lily.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peace Lily"
       data-item-price="36.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="smallplantimages/Peace\ Lily.webp"
       data-item-name="Peace Lily">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peace Lily</p>
    <p style="margin-top: -20px;">R36.00</p>
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
