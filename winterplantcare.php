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
    
    <title>Winter Plant Care</title>
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

      <div class="container mt-4" style="max-width: 800px">
        <h1>Winter Care: What to Consider?</h1>
        <p>
          Winter is probably the easiest time of year to kill a houseplant. Grueling growing conditions like lower light levels, dry air, shorter days and chilly temperatures put houseplants through the paces.
          The secret to helping plants survive winter is adjusting care routines to suit seasonal growing conditions. Review the basics to give your houseplants top-notch care this winter.
        </p>
      </div>

      <div class="waterimg-block mt-4">
      <div>
        <img class="waterimg"
        src="images/wateringindoorplants.jpg">
      </div>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>1. Light</h1>
       <p>
        In winter, the sun slips lower in the sky and light levels near windows drop up to 50%. 
        Houseplants that grow near a sunny eastern or northern window in summer may need a southern or western exposure in winter. 
        Likewise, plants near western or southern windows that need filtered light in summer may be able to withstand direct sun in winter.
       </p>
       <p>To help plants cope with changing light levels:</p>
       <ul>
        <li class="my-1">Move plants closer to windows, if possible.</li>
        <li class="my-1">Clean windows to allow maximum light transmission.</li>
        <li class="my-1">Shift plants to new locations near brighter windows for winter.</li>
        <li class="my-1">Wash dust off plants so leaves can make maximum use of available light.</li>
        <li class="my-1">Add artificial light. Fluorescent bulbs provide adequate light. They're cheaper than traditional grow lights and produce less heat. 
          Position bulbs 4-12 inches away from plants for effective results.</li>
      </ul>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>2. Temperature</h1>
        <p>Most houseplants are tropicals and prefer temperatures between 65-75°F during the day and about 10 degrees cooler at night. For many plants, temperatures below 50°F can cause problems.</p>
        <p>Adjust thermostats to cater to your comfort, but remember your plants need some consideration.</p>
        <ul>
          <li class="my-1">Avoid placing plants near cold drafts or heat sources.</li>
          <li class="my-1">Keep plants several inches away from exterior windows.</li>
          <li class="my-1">In cold regions, if windows frost overnight, move plants away from windows at dusk. You can also slip a heavy shade or other insulating material between plants and glass.</li>
        </ul>
        <img class="my-4" src="images/Plant-Perfect-Garden-Center-Bismarck-How-to-Choose-a-Container-for-Your-Houseplant-assorted-houseplants-on-shelf.jpg" style="width: 100%; max-height: 350px;">
        
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>3. Humidity</h1>
        <p>Homes may offer only 5-10% relative humidity in winter. Houseplants like 40-50%. 
          Signs of low humidity stress on plants include brown leaf tips and appearance of pests like Spider Mites. Learn simple ways to improve humidity around plants. </p>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>4. Water</h1>
        <p>The most common problem houseplants suffer from in winter is overwatering. About 95% of houseplants need soil to dry out almost completely before watering. How can you tell if plants need water?</p>
        <ul>
          <li class="my-1">Don't just spot test the soil surface. Plants need water when the root zone is dry. Poke your finger into soil up to 2 inches. If the soil is dry, water.</li>
          <li class="my-1">Lift the pot. Soil is lighter when it's dry. Learn how wet soil feels by lifting pots immediately after watering.</li>
          <li class="my-1">If you humidify winter rooms, plants won't need water as often. Dry air means watering.</li>
          <li class="my-1">Exceptions to drying out between watering: Potted citrus and ferns require consistently moist soil. Always research plant moisture needs if you're unsure.</li>
        </ul>
        
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h4>5. Fertilizer</h4>
        <p>In mild climates, continue to fertilize plants through winter. 
          In coldest climates where natural light levels are low, do not fertilize houseplants in winter. Resume fertilizing when outdoor plants wake up in spring.</p>
        <h4>6. Prune</h4>
        <p>Winter growth can be leggy. Pinch plants to promote branching and bushiness.</p>
        <h4>7. Repot</h4>
        <p>The right time to repot most houseplants is during periods of active growth – in spring and summer. 
          The exception is potted woody plants that go completely dormant in winter. Transplant those prior to bud break in early spring.</p>
       
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