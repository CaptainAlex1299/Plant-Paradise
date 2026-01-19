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
      <h1>Outdoor Plants</h1>
      <p>In the spring and summer, it's hard not to admire the yards and gardens around town that are filled with greenery and colorful blooms. 
        If you've always assumed that your yard was too dry, too shady, or that the soil was too sandy to support such beautiful plants—guess again. 
        In fact, these common problems may just inspire you to get more creative with your plant picks.</p>
      <p>These hard-to-kill plants are often readily available at nurseries and garden centers, so there's no reason to let a dry, low-light space stop you from creating a showstopping backyard.</p>
    </div>
<hr>
    <div class="container">
      <h1 style="text-align: center;">Impossible-to-Kill Outdoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/agave-plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Avage Plant"
       data-item-price="34.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/agave-plant.webp"
       data-item-name="Avage Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Agave Plant</p>
    <p style="margin-top: -20px;">R34.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/ajuga.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="ajuga"
       data-item-price="80.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/ajuga.webp"
       data-item-name="ajuga">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Ajuga Plant</p>
    <p style="margin-top: -20px;">R80.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/armeria.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="armeria"
       data-item-price="25.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/armeria.webp"
       data-item-name="armeria">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Armeria Plant</p>
    <p style="margin-top: -20px;">R25.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Begonia.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Begonia"
       data-item-price="40.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Begonia.webp"
       data-item-name="Begonia">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Begonia</p>
    <p style="margin-top: -20px;">R40.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/butterfly-weed.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="butterfly-weed"
       data-item-price="36.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/butterfly-weed.webp"
       data-item-name="butterfly-weed">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>butterfly weed</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/caladium.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Caladium"
       data-item-price="41.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/caladium.webp"
       data-item-name="Caladium">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Caladium Plant</p>
    <p style="margin-top: -20px;">R41.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Cranesbill.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Cranesbill"
       data-item-price="22.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Cranesbill.webp"
       data-item-name="Cranesbill">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Cranesbill Plant</p>
    <p style="margin-top: -20px;">R22.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/desert-rose.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Desert Rose"
       data-item-price="39.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/desert-rose.webp"
       data-item-name="Desert Rose">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Desert Rose</p>
    <p style="margin-top: -20px;">R39.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/dianthus.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="dianthus"
       data-item-price="45.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/dianthus.webp"
       data-item-name="dianthus">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Dianthus Plant</p>
    <p style="margin-top: -20px;">R45.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/GettyImages.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Getty Plant"
       data-item-price="30.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/GettyImages.webp"
       data-item-name="Getty Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Getty Plant</p>
    <p style="margin-top: -20px;">R30.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/hosta.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="hosta"
       data-item-price="20.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/hosta.webp"
       data-item-name="hosta">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Hosta Plant</p>
    <p style="margin-top: -20px;">R20.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Japanese-Forest-Grass.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Japanese-Forest-Grass"
       data-item-price="14.45"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Japanese-Forest-Grass.webp"
       data-item-name="Japanese-Forest-Grass">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Japanese Forest Grass</p>
    <p style="margin-top: -20px;">R14.45</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Lenten-Rose.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Lenten-Rose"
       data-item-price="16.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Lenten-Rose.webp"
       data-item-name="Lenten-Rose">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Lenten Rose</p>
    <p style="margin-top: -20px;">R16.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/lilac-sage.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="lilac-sage"
       data-item-price="22.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/lilac-sage.webp"
       data-item-name="lilac-sage">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Lilac Sage</p>
    <p style="margin-top: -20px;">R22.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/oakleaf-hydrangea.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="oakleaf-hydrangea"
       data-item-price="85.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/oakleaf-hydrangea.webp"
       data-item-name="oakleaf-hydrangea">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Oakleaf Hydrangea</p>
    <p style="margin-top: -20px;">R85.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/oak-sedge.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="oak-sedge"
       data-item-price="120.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/oak-sedge.webp"
       data-item-name="oak-sedge">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Oak Sedge</p>
    <p style="margin-top: -20px;">R120.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/persian-shield.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="persian-shield"
       data-item-price="19.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/persian-shield.webp"
       data-item-name="persian-shield">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Persian Shield</p>
    <p style="margin-top: -20px;">R19.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/primrose-beauty.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="primrose-beauty"
       data-item-price="14.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/primrose-beauty.webp"
       data-item-name="primrose-beauty">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Primrose Beauty</p>
    <p style="margin-top: -20px;">R14.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/tickseed.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="tickseed"
       data-item-price="145.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/tickseed.webp"
       data-item-name="tickseed">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Tickseed</p>
    <p style="margin-top: -20px;">R145.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/varioussedum.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="varioussedum"
       data-item-price="26.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/varioussedum.webp"
       data-item-name="varioussedum">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Varioussedum</p>
    <p style="margin-top: -20px;">R26.00</p>
    </div>  
      </div>
    </div>
    </div>
    <hr style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
      <h1 style="text-align: center;">Easy Care Outdoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/desert-rose.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="desert-rose"
       data-item-price="35.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/desert-rose.webp"
       data-item-name="desert-rose">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Desert Rose</p>
    <p style="margin-top: -20px;">R35.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Lenten-Rose.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Lenten-Rose"
       data-item-price="31.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Lenten-Rose.webp"
       data-item-name="Lenten-Rose">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Lenten Rose</p>
    <p style="margin-top: -20px;">R31.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/ajuga.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="ajuga"
       data-item-price="39.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/ajuga.webp"
       data-item-name="ajuga">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Ajuga Plant</p>
    <p style="margin-top: -20px;">R39.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/agave-plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="agave"
       data-item-price="15.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/agave-plant.webp"
       data-item-name="agave">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Agave Plant</p>
    <p style="margin-top: -20px;">R15.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/hosta.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="hosta"
       data-item-price="60.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/hosta.webp"
       data-item-name="hosta">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Hosta Plant</p>
    <p style="margin-top: -20px;">R60.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Begonia.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Begonia"
       data-item-price="11.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Begonia.webp"
       data-item-name="Begonia">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Begonia Plant</p>
    <p style="margin-top: -20px;">R11.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/butterfly-weed.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="butterfly-weed"
       data-item-price="70.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/butterfly-weed.webp"
       data-item-name="butterfly-weed">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Butterfly Weed</p>
    <p style="margin-top: -20px;">R70.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/oak-sedge.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="oak-sedge"
       data-item-price="45.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/oak-sedge.webp"
       data-item-name="oak-sedge">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Oak Sedge</p>
    <p style="margin-top: -20px;">R45.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Cranesbill.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Cranesbill"
       data-item-price="58.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Cranesbill.webp"
       data-item-name="Cranesbill">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Cranesbill Plant</p>
    <p style="margin-top: -20px;">R58.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/tickseed.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="tickseed"
       data-item-price="55.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/tickseed.webp"
       data-item-name="tickseed">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Tickseed</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Winter-Seedlings-PansyPetunia-Viola-1-300x190.png); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="PansyPetunia-Viola"
       data-item-price="71.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Winter-Seedlings-PansyPetunia-Viola-1-300x190.png"
       data-item-name="PansyPetunia-Viola">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>PansyPetuniaViola</p>
    <p style="margin-top: -20px;">R71.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Lenten-Rose.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Lenten-Rose"
       data-item-price="60.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Lenten-Rose.webp"
       data-item-name="Lenten-Rose">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Lenten Rose</p>
    <p style="margin-top: -20px;">R60.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/hosta.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="hosta"
       data-item-price="66.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/hosta.webp"
       data-item-name="hosta">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Hosta Plant</p>
    <p style="margin-top: -20px;">R66.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/GROUNDCOVERS-20-PACK.png); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="GROUNDCOVERS-20-PACK"
       data-item-price="19.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/GROUNDCOVERS-20-PACK.png"
       data-item-name="GROUNDCOVERS-20-PACK">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>GROUNDCOVERS</p>
    <p style="margin-top: -20px;">R19.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/Begonia.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Begonia"
       data-item-price="44.00"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/Begonia.webp"
       data-item-name="Begonia">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Begonia</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/agave-plant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Agave-Plant"
       data-item-price="77.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/agave-plant.webp"
       data-item-name="Agave-Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Agave Plant</p>
    <p style="margin-top: -20px;">R77.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/4-PACKS-300x201.png); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="4-PACKS-300x201"
       data-item-price="66.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/4-PACKS-300x201.png"
       data-item-name="4-PACKS-300x201">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>4-PACKS-300x201</p>
    <p style="margin-top: -20px;">R66.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/GettyImages.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Getty Plant"
       data-item-price="26.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/GettyImages.webp"
       data-item-name="Getty Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Getty Plant</p>
    <p style="margin-top: -20px;">R26.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/persian-shield.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="persian-shield"
       data-item-price="44.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/persian-shield.webp"
       data-item-name="persian-shield">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Persian Shield</p>
    <p style="margin-top: -20px;">R44.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(outdoorplantimages/lilac-sage.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="lilac-sage"
       data-item-price="125.99"
       data-item-description="Affordable ground cover seedlings."
       data-item-image="outdoorplantimages/lilac-sage.webp"
       data-item-name="lilac-sage">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Lilac Sage</p>
    <p style="margin-top: -20px;">R125.99</p>
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
