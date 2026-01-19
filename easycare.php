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
      <h1>Easy Care Plants</h1>
      <p>Our curated selection of Houseplants that we've found are both easy to care for or are relatively low maintenance, making them perfect for beginners or those looking for something less challenging to add to their collection.</p>
      <p>Choose from our wide variety of Easy Care on-trend foliage houseplants perfect for Hanging, Tabletop, and Floor Standing displays, for both the home and office.</p>
      <p>View our Entire Collection of Plants and Plant Pots for other Indoor Greenery Decor choices. For extra Plant Care Support checkout our Plant Care Tab, for detailed Care Instructions.</p>
      <p>Enjoy quick, safe and affordable shipping anywhere in South Africa!</p>
    </div>
<hr>
    <div class="container">
      <h1 style="text-align: center;">Easy Care Indoor Plants</h1>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/baby-rubber-plant.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="baby-rubber-plant"
       data-item-price="32.00"
       data-item-description=""
       data-item-image="easycareplantimages/baby-rubber-plant.jpg"
       data-item-name="baby-rubber-plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Baby Rubber Plant</p>
    <p style="margin-top: -20px;">R32.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/peacockplant.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Peacock Plant"
       data-item-price="45.99"
       data-item-description=""
       data-item-image="easycareplantimages/peacockplant.jpg"
       data-item-name="Peacock Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peacock Plant</p>
    <p style="margin-top: -20px;">R45.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/felborg.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="felborg"
       data-item-price="25.99"
       data-item-description=""
       data-item-image="easycareplantimages/felborg.jpg"
       data-item-name="felborg">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Felborg Plant</p>
    <p style="margin-top: -20px;">R25.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Chinese-Money-Plant.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Chinese-Money-Plant"
       data-item-price="55.00"
       data-item-description=""
       data-item-image="easycareplantimages/baby-rubber-plant.jpg"
       data-item-name="Chinese-Money-Plant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Chinese Money Plant</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/PontytailPalm.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="PontytailPalm"
       data-item-price="125.00"
       data-item-description=""
       data-item-image="easycareplantimages/PontytailPalm.jpg"
       data-item-name="PontytailPalm">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Pontytail Palm</p>
    <p style="margin-top: -20px;">R125.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Aglaonema.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Aglaonema"
       data-item-price="20.00"
       data-item-description=""
       data-item-image="easycareplantimages/Aglaonema.webp"
       data-item-name="Aglaonema">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Aglaonema Plant</p>
    <p style="margin-top: -20px;">R20.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Cordyline.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Cordyline"
       data-item-price="55.00"
       data-item-description=""
       data-item-image="easycareplantimages/Cordyline.webp"
       data-item-name="Cordyline">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Cordyline Plant</p>
    <p style="margin-top: -20px;">R55.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/RavenZZPlant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="RavenZZ"
       data-item-price="45.99"
       data-item-description=""
       data-item-image="easycareplantimages/RavenZZPlant.webp"
       data-item-name="RavenZZ">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>RavenZZ Plant</p>
    <p style="margin-top: -20px;">R45.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/HeartleafPhilodendron.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="HeartleafPhilodendron"
       data-item-price="44.00"
       data-item-description=""
       data-item-image="easycareplantimages/HeartleafPhilodendron.webp"
       data-item-name="HeartleafPhilodendron">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Heart leaf Philodendron</p>
    <p style="margin-top: -20px;">R44.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/ElephantBush.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="ElephantBush"
       data-item-price="14.99"
       data-item-description=""
       data-item-image="easycareplantimages/ElephantBush.webp"
       data-item-name="ElephantBush">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Elephant Plant</p>
    <p style="margin-top: -20px;">R14.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/StringofPearls.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="StringofPearls"
       data-item-price="65.00"
       data-item-description=""
       data-item-image="easycareplantimages/StringofPearls.webp"
       data-item-name="StringofPearls">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Stringof Pearls</p>
    <p style="margin-top: -20px;">R65.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Pothos.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Pothos"
       data-item-price="9.99"
       data-item-description=""
       data-item-image="easycareplantimages/Pothos.webp"
       data-item-name="Pothos">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Pothos Plant</p>
    <p style="margin-top: -20px;">R9.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Gynuraaurantiaca.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Gynuraaurantiaca"
       data-item-price="45.99"
       data-item-description=""
       data-item-image="easycareplantimages/Gynuraaurantiaca.webp"
       data-item-name="Gynuraaurantiaca">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Gynuraaurantiaca Plant</p>
    <p style="margin-top: -20px;">R45.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/BlackRoseAeonium.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="BlackRoseAeonium"
       data-item-price="38.99"
       data-item-description=""
       data-item-image="easycareplantimages/BlackRoseAeonium.webp"
       data-item-name="BlackRoseAeonium">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>BlackRoseAeonium Plant</p>
    <p style="margin-top: -20px;">R38.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/SnakePlant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="SnakePlant"
       data-item-price="22.00"
       data-item-description=""
       data-item-image="easycareplantimages/SnakePlant.webp"
       data-item-name="SnakePlant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Snake Plant</p>
    <p style="margin-top: -20px;">R22.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/AloeVera.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="AloeVera"
       data-item-price="15.99"
       data-item-description=""
       data-item-image="easycareplantimages/AloeVera.webp"
       data-item-name="AloeVera">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>AloeVera Plant</p>
    <p style="margin-top: -20px;">R15.99</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Euphorbiatrigona.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Euphorbiatrigona"
       data-item-price="76.00"
       data-item-description=""
       data-item-image="easycareplantimages/Euphorbiatrigona.webp"
       data-item-name="Euphorbiatrigona">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Euphorbiatrigona Plant</p>
    <p style="margin-top: -20px;">R76.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Gasteria.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Gasteria"
       data-item-price="136.00"
       data-item-description=""
       data-item-image="easycareplantimages/Gasteria.webp"
       data-item-name="Gasteria">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Gasteria Plant</p>
    <p style="margin-top: -20px;">R136.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/JadePlant.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="JadePlant"
       data-item-price="55.99"
       data-item-description=""
       data-item-image="easycareplantimages/JadePlant.webp"
       data-item-name="JadePlant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Jade Plant</p>
    <p style="margin-top: -20px;">R55.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/WaxBegonia.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="WaxBegonia"
       data-item-price="45.99"
       data-item-description=""
       data-item-image="easycareplantimages/WaxBegonia.webp"
       data-item-name="WaxBegonia">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>WaxBegonia Plant</p>
    <p style="margin-top: -20px;">R45.99</p>
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
      <div style="background-image: url(easycareplantimages/Canna\ Lily.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Canna Lily"
       data-item-price="25.99"
       data-item-description=""
       data-item-image="easycareplantimages//Canna\ Lily.webp.jpg"
       data-item-name="Canna Lily">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Canna Lil Plant</p>
    <p style="margin-top: -20px;">R25.99</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Catmint.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Catmint"
       data-item-price="44.99"
       data-item-description=""
       data-item-image="easycareplantimages/Catmint.webp"
       data-item-name="Catmint">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Catmint Plant</p>
    <p style="margin-top: -20px;">R44.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Coral\ Bells.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Coral Bells"
       data-item-price="15.99"
       data-item-description=""
       data-item-image="easycareplantimages/Coral\ Bells.webp"
       data-item-name="Coral Bells">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Coral Bells Plant</p>
    <p style="margin-top: -20px;">R16.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Coneflower.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Coneflower"
       data-item-price="15.99"
       data-item-description=""
       data-item-image="easycareplantimages/Coneflower.webp"
       data-item-name="Coneflower">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Cone Flower</p>
    <p style="margin-top: -20px;">R16.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Butterfly\ Bush.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Butterfly Bush"
       data-item-price="45.99"
       data-item-description=""
       data-item-image="easycareplantimages/Butterfly\ Bush.webp"
       data-item-name="Butterfly Bush">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Butterfly Bush</p>
    <p style="margin-top: -20px;">R46.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Daffodils.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Daffodils"
       data-item-price="28.99"
       data-item-description=""
       data-item-image="easycareplantimages/Daffodils.webp"
       data-item-name="Daffodils">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Daffodils Plant</p>
    <p style="margin-top: -20px;">R29.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Daylily.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Daylily"
       data-item-price="78.99"
       data-item-description=""
       data-item-image="easycareplantimages/Daylily.webp"
       data-item-name="Daylily">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Daylily Plant</p>
    <p style="margin-top: -20px;">R79.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Feather\ Reed\ Grass.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Feather Reed Grass"
       data-item-price="35.99"
       data-item-description=""
       data-item-image="easycareplantimages/Feather\ Reed\ Grass.webp"
       data-item-name="Feather Reed Grass">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Feather Reed Grass</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Hydrangea.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Hydrangea"
       data-item-price="12.99"
       data-item-description=""
       data-item-image="easycareplantimages/Hydrangea.webp"
       data-item-name="Hydrangea">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Hydrangea Plant</p>
    <p style="margin-top: -20px;">R13.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/IrinaKosheleva.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="IrinaKosheleva"
       data-item-price="80.99"
       data-item-description=""
       data-item-image="easycareplantimages/IrinaKosheleva.webp"
       data-item-name="IrinaKosheleva">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>IrinaKosheleva Plant</p>
    <p style="margin-top: -20px;">R81.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Juniper.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Juniper"
       data-item-price="65.99"
       data-item-description=""
       data-item-image="easycareplantimages/Juniper.webp"
       data-item-name="Juniper">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Juniper Plant</p>
    <p style="margin-top: -20px;">R66.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Knock\ Out\ Roses.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Knock Out Roses"
       data-item-price="35.99"
       data-item-description=""
       data-item-image="easycareplantimages/Knock\ Out\ Roses.webp"
       data-item-name="Knock Out Roses">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Knock Out Roses</p>
    <p style="margin-top: -20px;">R36.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/False\ Indigo.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="False Indigo"
       data-item-price="45.99"
       data-item-description=""
       data-item-image="easycareplantimages/False\ Indigo.webp"
       data-item-name="False Indigo">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>False Indigo Plant</p>
    <p style="margin-top: -20px;">R46.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/peacockplant.jpg); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="peacockplant"
       data-item-price="55.99"
       data-item-description=""
       data-item-image="easycareplantimages/peacockplant.jpg"
       data-item-name="peacockplant">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Peacock Plant</p>
    <p style="margin-top: -20px;">R56.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/RussianSage.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="RussianSage"
       data-item-price="15.99"
       data-item-description=""
       data-item-image="easycareplantimages/RussianSage.webp"
       data-item-name="RussianSage">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>RussianSage Plant</p>
    <p style="margin-top: -20px;">R16.00</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Sedum.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Sedum"
       data-item-price="61.99"
       data-item-description=""
       data-item-image="easycareplantimages/Sedum.webp"
       data-item-name="Sedum">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Sedum Plant</p>
    <p style="margin-top: -20px;">R62.00</p>
    </div>  
      </div>
    </div>
    <div class="row justify-content-center">
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Daylily.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Daylily"
       data-item-price="25.99"
       data-item-description=""
       data-item-image="easycareplantimages/Daylily.webp"
       data-item-name="Daylily">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Daylily Plant</p>
    <p style="margin-top: -20px;">R26.00</p>
    </div>  
       
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Rose\ of\ Sharon.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Rose of Sharon"
       data-item-price="66.99"
       data-item-description=""
       data-item-image="easycareplantimages/Rose\ of\ Sharon.webp"
       data-item-name="Rose of Sharon">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Rose of Sharon</p>
    <p style="margin-top: -20px;">R66.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/Arborvitae.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="Arborvitae"
       data-item-price="120.99"
       data-item-description=""
       data-item-image="easycareplantimages/Arborvitae.webp"
       data-item-name="Arborvitae">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>Arborvitae Plant</p>
    <p style="margin-top: -20px;">R120.99</p>
    </div>  
      </div>
      <div
        class="col-4 col-sm-4 col-md-4 col-lg-2 block-item"
      >
      <div style="background-image: url(easycareplantimages/IrinaKosheleva.webp); width: 100%; height: 80%; background-repeat: no-repeat;
      background-size: cover;
      background-position-x: center;
      background-position-y: center;">
       <div class="button-position">
      <button class="snipcart-add-item add_to_cart"
       data-item-id="IrinaKosheleva"
       data-item-price="40.42"
       data-item-description=""
       data-item-image="easycareplantimages/IrinaKosheleva.webp"
       data-item-name="IrinaKosheleva">
       Add to cart
     </button></div>
    </div>
    <div class="category"><p>IrinaKosheleva Plant</p>
    <p style="margin-top: -20px;">R40.42</p>
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
