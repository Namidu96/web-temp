<?php
include_once(dirname(__FILE__) . '/../class/include.php');
$VEHICLE_OBJ = new Vehicle(null);

?>


<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>vehicles</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/theme.css" rel="stylesheet">
<style>
.container {
  max: width 1200px;
  margin:auto;
  background:white;
  overflow:auto;
}

.gallery {
 
    margin:5px;
    border:1px;
    float:left;
    width:230px;
    

}

.gallery img {

  width: 400px;
  height:auto;
  

}
</style>

</head>
<body id="top">

<?php include './header.php'; ?>

<!-- End Top Background Image Wrapper -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="sidebar one_quarter first"> 
      
      <h6>TRANCEPORTS</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Airport Tranceport</a></li>
          <li><a href="#">Safary Tours</a>
            <ul>
              <li><a href="#">Small journy</a></li>
              <li><a href="#">Self Driving Vehicles</a></li>
            </ul>
          </li>
          <li><a href="#">Colombo Tour Vehicles</a></li>
      </ul>
      </nav>
      <div class="sdb_holder">
        <h6>DETAILS ABOUT sRI LANKAN TOURS</h6>
        <address>
        Sri Lankan Tours<br>
        Colombo 07<br>
        Galle Road<br>
        442/10<br>
        <br>
        Tel: 091-4225912<br>
        Email: <a href="#">srilankantours@gmail.com</a>
        </address>
      </div>
      <div class="sdb_holder">
        <article>
          <h6>ABOUT VEHICLES</h6>
          <p>Yatours highly recommend car and driver service for our valued clients to make your travelling experience in Sri Lanka a memorable one.</p>
        </article>
      </div>
      
    </div>
    
    <div class="content three_quarter"> 
      
      <h1>LUXURY VEHICLES SRI LANKAN TOURS</h1>
      <img class="imgr borderedbox inspace-5" src="../images/demo/backgrounds/vehicles/bens.jpg" alt="">
      <p>Yatours highly recommend car and driver service for our valued clients to make your travelling experience in Sri Lanka a memorable one. When you do self-driving in another country it is very important to be aware of their road rules, regulations and the conditions of the roads. Nevertheless, when driving in Sri Lanka you must have local driving experience since Sri Lankan road culture is really shocking for an amateur driver – cyclists swaying across rush-hour traffic, tuk-tuk weaving between lanes, pedestrian, dogs & cows ruminating in the middle of the main road.</p>
      <p>Yatours are committed to providing you with outstanding service to assist you in making your car and driver tour a memorable one.</p>
      <img class="imgl borderedbox inspace-5" src="../images/demo/backgrounds/vehicles/vehi.png" alt="">
      <p>What is your next summer destination?? Why not choose Sri Lanka, which has plenty of everything for every kind of traveler. Simply because Sri Lanka is an island which is not to be seen, but to be experienced, why not choose YaTours, the most preferred group for offering the most ideal travel solutions. Recommended by a number of travelers from around the world, we can offer you the most specific travel experience since we understand the subtle details of every traveler and deliver the best service accordingly. Contact us and let us design the best tour package for you.</a>.</p>
      <p>Yatours car with driver service will allow you to enjoy your holiday in full spirit without any hustle & bustle. The entire driver’s from Yatours are well- experienced, knowledgeable, friendly & familiar, who capable of maintaining a better client- driver relationship while ensuring a safe driving.</p>
      <h1>CHOOSE YOUR  VEHICLE</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>VEHICLE</th>
              <th>TOUR</th>
              <th>PER TOUR</th>
              <th>CONDITION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">AXIO CAR</a></td>
              <td>Airport</td>
              <td>$ 80</td>
              <td>GOOD</td>
            </tr>
            <tr>
              <td><a href="#">TOYOTA BUS</a></td>
              <td>Transport</td>
              <td>$ 90</td>
              <td>GOOD</td>
            </tr>
            <tr>
              <td><a href="#">SAFARY JEEP</a></td>
              <td>Safary</td>
              <td>$ 100</td>
              <td>GOOD</td>
            </tr>
            <tr>
              <td><a href="#">TOYOTA HILAX VAN</a></td>
              <td>Tours</td>
              <td>$ 100</td>
              <td>GOOD</td>
            </tr>
          </tbody>
        </table>
      </div>

           
      <div class="container">

<!-- main body -->
                                    <?php
                                          $VEHICLE = $VEHICLE_OBJ->all();
                                          foreach ($VEHICLE as $key => $vehicle) {
                                
                                    ?>
                            
                                            <div class="gallery">
                                                 <div class="gallery img">
                                                    <img src="../upload/vehicle/<?php echo $vehicle["image_name"]; ?>" alt="<?php echo $vehicle["title"]; ?>">
                                               
                                        
                                            
                                                    <h5><?php echo $vehicle["title"]; ?></h5>
                                                    <p><?php echo $vehicle["description"]; ?></p>
                                                </div>
                                            </div>
                                
                                    <?php
                                
                              }
                                    ?>
                                  
                                  
 </div>

      <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">LION GERMAIN</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Tursday, 9<sup>th</sup> March 2020 @10:17:00</time>
              </header>
              <div class="comcont">
                <p>“Tour guide was fantastic. He went out of his way to make sure everyone was happy and had what they needed. He was very informative and interesting. He was accomdating and made sure everyone was informed and comfortable with the elephant orphanage decision.
                   Highlights of the tour were the safaris, sigiriya, and polonnaruwa. ” </p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">MICHEL USA</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Wensday, 10<sup>th</sup> JULY 2020 @10:45:00</time>
              </header>
              <div class="comcont">
                <p>“Has been absolutely an amazing trip. Everything has been superb from day one till last day ,selections of the hotel tour itinerary and comfortable AC bus was amazing ” </p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">MICUL ENGLAND</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 7<sup>th</sup> March 2019 @09:18:00</time>
              </header>
              <div class="comcont">
                <p>“Great experience - Brilliant tour of Sri Lanka, taking in national parks, UNESCO treasures, tea plantation and packing/sorting factory, mountain climbing, ocean picnic, boat, superbly organised by guide Manoj - oh and wonderful hotels! ” </p>
              </div>
            </article>
          </li>
        </ul>
        <h2>BOOK YOUR VEHICLE NOW</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="text">Vehicle<span>*</span></label>
            <input type="text" name="vehicle" id="vehicle" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      
    </div>
    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php include '../footer.php'; ?>
</body>
</html>