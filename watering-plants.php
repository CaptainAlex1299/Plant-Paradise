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
    <title>Watering 101</title>
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
                    <ul class="ulten"><a href="myshop.php" class="nav-list my-1 p-1">All-Plants</a></ul>
                    <ul class="ulfive"><a href="outdoor.php" class="nav-list my-1 p-1">Outdoor-Plants</a></ul>
                    <ul class="ulfive"><a href="indoor.php" class="nav-list my-1 p-1">Indoor-Plants</a></ul>
                    <ul class="ulfive"><a href="easycare.php" class="nav-list my-1 p-1">Easy-Care-Plants</a></ul>
                    <ul class="ulfive"><a href="largeplants.php" class="nav-list my-1 p-1">Large-Plants</a></ul>
                    <ul class="ulfive"><a href="smallplants.php" class="nav-list my-1 p-1">Small-Plants</a></ul>
                    <ul class="ulfive"><a href="potsandbaskets.php" class="nav-list my-1 p-1">Pots-and-Baskets</a></ul>
                    <ul class="ulfive"><a href="homeware.php" class="nav-list my-1 p-1">Homeware</a></ul>
                  </div>
                </li>
                <li class="nav-item">
                  <div onclick="toggleplantcarelist()"><a class="nav-link mx-1" >PlantCare <i id="arrow" class="arrow right"></i></a></div>
                  <div id="dropdownplantcare" class="dropdownplantcare">
                    <ul class="ulten"><a href="watering-plants.php" class="nav-list my-1">Watering-Basics</a></ul>
                    <ul class="ulfive"><a href="winterplantcare.php" class="nav-list my-1">Winter-Care</a></ul>
                    <ul class="ulfive"><a href="summerplantcare.php" class="nav-list my-1">Summer-Care</a></ul>
                  </div>
                </li>
                <li class="nav-item">
                  <div onclick="toggleaboutlist()"><a class="nav-link mx-1">About <i id="aboutarrow" class="aboutarrow right"></i></a></div>
                  <div id="dropdownabout" class="dropdownabout">
                  <ul class="ulfive"><a href="about-us.php" class="nav-list">About-Us</a></ul>
                    <ul class="ulfive"><a href="contact-us.php" class="nav-list">Contact-Us</a></ul>
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
        <h1>Watering Plants 101: What to Consider?</h1>
        <p>Our Guest Blogger, Dr Laura Jenkins (HousePlantHouse.com) explores in beautiful long-hand form the various aspects to consider when it comes to watering your houseplants. Lots of very practical golden-nuggets and top tips from a seasoned house plant enthusiast. Enjoy! Over to you Laura...
          ---------------------------------------------</p>
        <p>Today we are taking things back to basics and focusing on how to correctly water your houseplants - a watering 101 if you will.</p>
        <p>There is a well rehearsed myth which you’ve probably heard stating that the most common cause of plant collapse is as a result of overwatering. In my experience, I do think this statement holds some truth!</p>
        <p>Most of us do tend to fall into one of two camps (or perhaps you flit between the two as a corrective strategy)… either being an under-waterer or an over-waterer. This post should help you find a balance and get to grips with the key points to consider when caring for your houseplant collection.</p>
      </div>

      <div class="waterimg-block mt-4">
      <div>
        <img class="waterimg"
        src="images/cartoon-girl-watering-flower-her-yellow-hat-ai-cartoon-girl-watering-flower-her-yellow-hat-336657150-PU9wBg0_6-transformed.png">
      </div>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>1. WHAT PLANTS DO YOU HAVE?</h1>
        <p>First off, it’s important to acknowledge that all plants have their own needs and depending on their type, watering requirements can be quite drastically different. That’s why it’s not ideal to have a set ‘watering schedule’ and water all your plants every week on a Friday, for example.</p>
        <p>Instead I would recommend identifying the different categories of plants you have, and consider grouping similar plants together; this can help you to manage their care more coherently.</p>
        <p>Alternatively, you could tackle one room or zone of your home at a time and carry out a ‘plant inspection’ with a view to check over your plants but not necessarily water everything (this is especially useful if you have a lot of plants… it’s what I do).</p>
        <p>Foliage plants, cacti and succulents are still pretty wide categories but are a good place to start. You really can kill your plants with kindness sometimes, so if you are a serial over-waterer, start by sticking to plants like ferns that are more tolerant to a heavy handed watering! Alternatively, if you often forget to water your plants, cacti or succulents are much more forgiving in that respect so would be a good low-maintenance choice.</p>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>2. WHAT POTS DO YOU HAVE?</h1>
        <img class="my-4" src="images/Plant-Perfect-Garden-Center-Bismarck-How-to-Choose-a-Container-for-Your-Houseplant-assorted-houseplants-on-shelf.jpg" style="width: 100%; max-height: 350px;">
        <p>This isn’t just a decorative decision when you buy your plant; plastic pots, ceramic planters, terracotta, or self-watering options are all considerations that can have a significant impact on your watering regime if you are unsure. But whatever you decide, make sure the pot has drainage! If it doesn’t, drill a hole in the base, or use a nursery pot inside that has holes. It’s quite hard to judge watering needs in a sealed pot otherwise and isn’t recommended.</p>
        <p>Most plants arrive from the nursery in plastic pots (though eco friendly and biodegradable pots are being used more and more which is great) and many people leave them like this, setting on a plate or in a tray. If you have a collection of cache pots, these plant pots will sit happily inside your covers. But a common issue arises when it comes to watering time in that to effectively water your plants, you need to remove the cache pots and water your plants until the water runs through the holes in the bottom.</p>
        <p>Don’t be tempted to water your plants whilst they are still sitting in their decorative pots! This can lead to overwatering that, if sustained, can cause root rot and an unhappy plant.</p>
        <p>Glazed ceramic pots often have their own drainage hole already, and watering in these pots can be treated in a similar way to plastic pots, as discussed above. Water over a sink/outside and wait until the water starts to come out of the drainage hole.</p>
        <p>A classic plant pot choice is always terracotta, which has an unfussy, utilitarian aesthetic that looks great grouped together. It’s popular for houseplant potting as it’s relatively affordable and easy to get hold of. But be aware that if you are new to plants, or have a mixture of plastic pots, glazed ceramic and terracotta, that these pots will ‘wick’ the water away from your plant - that is, they will absorb the water as terracotta is particularly porous. This means you’ll need to up your watering of these plants. Succulents and cacti work well in terracotta, but be careful of potting your thirsty leafy foliage plants such as ferns, calathea in terracotta. If you want to keep a uniform ‘look’ to a cluster of terracotta in your plant display, you can always use these pots as a cover and have a regular nursery pot inside.</p>
        <p>An option that has grown in popularity in recent years are self-watering planters. These are a more costly investment initially but you’ll be able to reap their benefits for years to come… plus they will save you time too. These are a good option if you have a statement plant that you struggle to keep happy, or if you are a little forgetful when it comes to watering. You simply fill the water reservoir and the gauge will show you when it needs refilling and the plants take up the water that they need. A low cost alternative that goes some way to mimicking this process is to use a self watering spike - these have a terracotta wick and usually a glass or plastic water reservoir that you fill up and the water is drawn into the potting mix. It’s not as advanced as a planter but it does the trick!</p>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>3. CONSIDER YOUR POTTING MIX</h1>
        <p>The topic of the different types of potting mix warrants a separate blogpost, however in relation to watering, you’ll want to consider the type of soil ‘blend’ your plant is in and how this relates to its watering needs.</p>
        <p>Composts are heavier mediums that hold water longer than lighter mixes containing coco chips, sand, orchid bark and/or perlite. Different plants have different requirements and the soil mix can be easily adapted to the plant in question. A light potting mix is also often called ‘free draining’ which means it is not as dense, so doesn’t stay as wet for as long. This is something to consider when watering your plants, in conjunction with the type of pot you use.</p>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>4. THE WATERING PROCESS</h1>
        <p>In terms of what type of water you use you have a few options; tap water, distilled water or rain water are things to consider but be mindful of the pH of the water in your area. Some plants have specific needs such as those in the Marantaceae (prayer plant) family, who don’t tolerate tap water very well and carnivorous plants only like rainwater.</p>
        <p>Whichever water you use, room temperature, or tepid water is always best; some of the more tropical plants can get a chill from very cold water which can actually damage their roots! As we’ve already mentioned when watering plants from the top of the pot, you’ll want to water enough so that around 20% of the water runs through the drainage hole/s. Watering from the bottom up is also an option if you have a lot of plants on a tray - they can soak up the water that they need, but be sure they aren’t staying continuously wet - allow them to dry out a little before filling the tray back up. This is also a good tip if you are going on vacation - you can give your plants a little holiday too by placing them in the bath with some water to drink up while you are gone!</p>
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>5. LOCATION AND SEASONAL SHIFTS</h1>
        <p>Aside from finding the perfect spot for your plant at home, its location will also impact on its watering needs. Those in your brightest locations have the potential to dry out the quickest, and so it follows that the plants in your cooler or darker areas will take a longer time before they need watering again.</p>
        <p>This is particularly important in the cooler months of the year - you’ll want to ensure you aren’t watering these plants before they’ve had a chance to dry out a bit.</p>
        <p>TOP TIP : Plants in locations where the humidity is higher such as the bathroom and kitchen might also need watering less as they will absorb a certain level of moisture from the environment.</p>
        <img class="my-4" src="images/everything-you-should-know-about-deep-watering_800x.png" style="width: 100%; max-height: 400px;">
      </div>

      <div class="container mt-4" style="max-width: 800px">
        <h1>IN SUMMARY...</h1>
        <p>With all of the above considered, it’s worth mentioning pot size at this point - generally you don’t want to repot your plant until it has outgrown its current one and has roots circling the bottom of the pot. If you leave it this way for too long, watering will become ineffective and the plant can start to suffer as the roots are not getting the moisture they require.</p>
        <p>Alternately, if you put your plant in a pot that is way too big, all this extra potting mix around the roots can adversely affect the plant and it won’t dry out quick enough when you water (which can lead to root rot over a prolonged time).</p>
        <p>So by choosing the right size pot, the correct type of pot and the most suitable potting mix, the job of watering your plants will become a much easier and more enjoyable task!</p>
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