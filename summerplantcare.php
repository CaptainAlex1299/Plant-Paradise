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
    <link rel="stylesheet" type="text/css" href="dropdown.css" />
    <link rel="stylesheet" type="text/css" href="plantcare/PlantCare.css"/>
    <title>Summer Plant Care</title>
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
            <div style="position: relative; top: 11px">
              <a class="nav-link mx-1" href="index.php">PlantParadise</a>
            </div>
            <div class="collapse navbar-collapse" id="">
              <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item">
                  <a href="index.php" class="nav-link mx-1">Home</a>
                </li>
                <li class="nav-item">
                  <div onclick="toggleshoplist()"><a class="nav-link mx-1">Shop <i id="shoparrow" class="shoparrow right"></i></a></div>
                  <div id="dropdownshop" class="dropdownshop">
                    <ul class="ulten"><a href="myshop.php" class="nav-list my-1 p-1">All-Plants</a></ul>
                    <ul class="ulfive"><a href="outdoor.php" class="nav-list my-1 p-1">Outdoor-Plants</a></ul>
                    <ul class="ulfive"><a href="indoor.php" class="nav-list my-1 p-1">Indoor-Plants</a></ul>
                    <ul class="ulfive"><a href="easycare.php" class="nav-list my-1 p-1">Easy-Care-Plants</a></ul>
                    <ul class="ulfive"><a href="largeplants.php" class="nav-list my-1 p-1">Large-Plants</a></ul>
                    <ul class="ulfive"><a href="smallplants.php" class="nav-list my-1 p-1">Small-Plants</a></ul>
                    <ul class="ulfive"><a href="pots-and-baskets.php" class="nav-list my-1 p-1">Pots-and-Baskets</a></ul>
                    <ul class="ulfive"><a href="homeware.php" class="nav-list my-1 p-1">Homeware</a></ul>
                  </div>
                </li>
                <li class="nav-item">
                  <div onclick="toggleplantcarelist()"><a class="nav-link mx-1" >PlantCare <i id="arrow" class="arrow right"></i></a></div>
                  <div id="dropdownplantcare" class="dropdownplantcare">
                    <ul class="ulfive"><a href="watering-plants.php" class="nav-list my-1">Watering-Basics</a></ul>
                    <ul class="ulfive"><a href="watering-plants.php" class="nav-list my-1">Winter-Care</a></ul>
                    <ul class="ulfive"><a href="summerplantcare.php" class="nav-list my-1">Summer-Care</a></ul>
                  </div>
                </li>
                <li class="nav-item">
                  <div onclick="toggleaboutlist()"><a class="nav-link mx-1">About <i id="aboutarrow" class="aboutarrow right"></i></a></div>
                  <div id="dropdownabout" class="dropdownabout">
                    <ul class="ulfive"><a href="" class="nav-list my-1">Contact-Us</a></ul>
                    <ul class="ulfive"><a href="" class="nav-list my-1">About-Us</a></ul>
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

      <div class="container mt-4" style="max-width: 800px">
        <h1>Summer Plant Care:</h1>
        <p>
          In Summer plants are in their most active growth phase and require more attention to keep them growing strong and healthy. 
          Care will need to be taken to accommodate high temperatures and bright light. Follow our simple Summer Plant Care Guide to be in the know…
        </p>
      </div>

      <div class="waterimg-block mt-4">
      <div>
        <img class="waterimg"
        src="images/summercareimg.jpg">
      </div>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>1. CHECK WATERING MORE REGULARLY </h1>
       <p>The biggest plant risk during the Summer months is not watering enough. With increased temperatures, allowing active growth, 
        the requirements of water are at their highest - plants simply drink more! </p>
        <p>Be conscious not to allow your plants to become bone dry or have periods of prolonged dryness. Check watering on a regular schedule. Generally speaking, once a week during the warmer months would be fine. 
          However, every home is different and brighter spaces may require more frequent checking during the peak of summer.</p>
        <p>Let your scheduled check be about checking whether watering is required, rather than sticking to a strict time-based schedule. This is a general rule for all times of the year. 
          In Summer, if watering is required, we recommend soaking each plant to ensure the potting medium is saturated sufficiently. </p>
        <p>Watering is best done in the mornings to allow the foliage of your plants to dry out quickly. 
          Any excess water on the foliage can lead to fungal disease if they haven’t dried out, especially if the evenings are cool in your area. </p>
        <p>TOP TIP: Water keeps your plants hydrated, but is also used by your plant to cool itself. Let your plant do this itself! 
          Avoid using ice cubes or cold water on your plant's roots, as this can lead to shock and a very unhappy plant. Always use room temperature water to water your plants.</p>
       
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>2. MAKE ADJUSTMENTS TO LIGHT</h1>
        <p>Whilst many houseplants will appreciate the brighter conditions that Summer affords, you still need to be mindful of the amount of light that your plants are exposed to. </p>
        <p>Most houseplants are tropical in nature and are often found growing in the understory of canopies in their natural environment. 
          Many suffer from leaf burn if exposed to excessive amounts of direct sunlight during the day, which will cause crisp patches and dull foliage. 
          If you notice this on any of your leafy greens, we suggest relocating them to a less direct-sun position. This will also assist with your watering schedule, 
          as the direct light often will dry the potting medium out faster.</p>

        <p>This applies to succulent plants as well. Even though many of these plants are lovers of direct sun, if kept in indirect light for most of the year, and suddenly exposed to direct sunlight, 
          these plants will most likely dry out faster and get a little sunburnt. 
          If this does occur, relocate your succulent to a position that will receive direct sunlight before 12 pm or after 2 pm to acclimate them better.</p>

        <p>In general, however, be mindful of any sudden and drastic light condition changes. 
          Plants have a certain tolerance for growing happily within a band of light conditions and they will adapt themselves to the exposure in your space. 
          But they most certainly can be unforgiving if changes are made too drastically - and you'll see symptoms such as leaf drop, leaf burn or increased susceptibility to pests.</p>
        <img class="my-4" src="images/Plant-Perfect-Garden-Center-Bismarck-How-to-Choose-a-Container-for-Your-Houseplant-assorted-houseplants-on-shelf.jpg" style="width: 100%; max-height: 350px;">
        
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>3. RAISE HUMIDITY</h1>
        <p>Warmer weather tends to dry air out a little more than usual due to excessive amounts of evaporation taking place. 
          This can be unsettling to your tropical houseplants who generally come from very humid environments.
          Keeping humidity as high as possible in Summer can alleviate any undue stress for your plants.</p>
          <p>Here are some fabulous simple methods to raise the humidity in your environment:</p>
          <ul>
            <li class="my-1">Humidifier: All serious tropical plant collections have humidifiers - the most instant way of raising the humidity in an average-sized room, with minimal effort. 
              When choosing a humidifier we recommend looking for one with a large tank volume and cool mist, such as an ionizing humidifier.</li>
            <li class="my-1">Pebble Tray: A cheap and effective way of raising the immediate humidity around your houseplant. 
              We recommend choosing a deep tray or dish that is at least 1-2cm larger than the circumference of the planter. Fill this to the brim with pebbles and top with water. 
              Pop your houseplant on top. Be sure to make sure that your drainage holes are not submerged in the water, as this can lead to root rot.
            </li>
            <li class="my-1"> Spritzing: This is more of an instant fix on a hot day. Spritzing often only last about an hour and it is a great way to assist plants, when they are transpiring, to help them cool down. 
              Use a spritzer with a fine nozzle spray such as our gorgeous Retro Mister and give your plants a good cooling off at least 3 to 4 times a day.</li>
            
          </ul>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>4. INCREASE AIRFLOW</h1>
        <p>As much as raising the humidity is of utmost importance, not giving your plants good airflow in a hot humid environment can lead to a myriad of other unwanted issues, such as fungal infections.</p>
        <p>The best way to combat these negative effects is to crack open a window and pop on a fan, to allow stale air to escape and fresh air to fill in the space. 
          This will not only lower the risk of disease but also assists your houseplants with cooling themselves down. </p>
        <p>At the same time, be mindful of drafts that are cool or too hot, as a drastic fluctuation in temperature can shock an indoor plant. 
          Too much airflow can also have an adverse effect on humidity, by lowering it and possibly causing leaf edges to get dry and crispy.</p>
        <p>This point is especially relevant to spaces with air conditioners: not only do they dry out the air, but the cold downdraft can cause unnecessary stress, especially if directed at the plant.</p>
        
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h2>5. MAKE SURE YOU ARE FERTILIZING</h2>
        <p>As your plants are now in their active growing phase, regular feeding is required.</p>
        
        <p>Optimal fertilizing is a science in itself and beyond the scope of the generalist plant parent. 
          However, using a good liquid, organic broad spectrum fertilizer will support all of your plant nutritional needs. Make sure this fertilizer is high in nitrogen, 
          the main building blocks for green leafy growth, as well as trace minerals to keep other plant health aspects in balance.</p>
        
        <p>An effective rule of thumb is to feed weekly with your watering, with a weak solution. We recommend looking up the type of houseplants you have and what their feeding requirements may be. 
          For example, Succulents only need a weak solution once a month, whilst Monstera Deliciosa is much faster growing and will need feeding on a weekly basis.</p>

        <p>Fertilizing is best done in the early morning, as this will allow your plants to draw up nutrients throughout the day. 
          Try to avoid feeding on very hot days, as your plant will be less likely able to draw up nutrients when extremely overheated.</p>

        <h2>DON’T FORGET THE PESTS</h2>
        <p>Pests can be especially pesky at the turn of seasons when the weather conditions change. </p>
        <p>Be sure to prune back any dead or diseased leaves to avoid hiding places for pests or fungi. And make sure that no leaf matter sits on the soil, within the grow pot. 
          Some preventative spraying of a good organic pesticide will be a great help too. Be sure to tackle any outbreaks in the ways that have worked best for you in warmer months.</p>

        <h2>RE-POT WHERE NECESSARY </h2>

        <p>Now is a good time to get some repotting done and give your plants a little more space to grow into. 
          Before repotting, check the weather and be sure to choose a day that isn't too hot, as the sudden temperature changes can cause transplant shock, 
          which may cause your plants to take longer to acclimate to their new planter.</p>

        <p>Always make sure to water your plant the night before your repotting day, this will also limit the amount of transplant shock your plant may suffer.</p>

       
        <img class="my-4" src="images/everything-you-should-know-about-deep-watering_800x.png" style="width: 100%; max-height: 400px;">
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>IN SUMMARY...</h1>
       <p>Avoid placing plants near cold drafts or heat sources. Avoid placing plants near cold drafts or heat sources.
        Don't just spot test the soil surface. Plants need water when the root zone is dry. Poke your finger into soil up to 2 inches. If the soil is dry, water.
       </p>
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
          <div id="library" class="dropdown-library"></div>
        </footer>

        <div id="root"></div>

        <script type="module" src="dist/assets/main-CJ8ojy8N.js"></script>

    <script src="toggle.js"></script>
</body>
</html>