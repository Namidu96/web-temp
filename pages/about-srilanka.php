<?php
include_once(dirname(__FILE__) . '/../class/include.php');
$PLACE_OBJ = new Place(null);
$PLACES_OBJ = new Place(5);
$HOTEL_OBJ = new Hotel(null);
?>


<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>About Sri Lanka</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="../css/theme.css" rel="stylesheet">
<style>
.container {
  max: width 1200px;
  margin:auto;
  background:white;
  overflow:auto;
}

.gallery {
 
    margin:10px;
    border:1px;
    float:left;
    width:280px;
    

}

.gallery img {

  width: 300px;
  height:auto;
  

}

</style>


</head>
<body id="top">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<?php include './header.php'; ?>

<!-- End Top Background Image Wrapper -->
<div class="container">

<!-- main body -->
                                    <?php
                                          $PLACE = $PLACE_OBJ->all();
                                          foreach ($PLACE as $key => $places) {
                                
                                    ?>
                            
                                            <div class="gallery">
                                                 <div class="gallery img">
                                                    <img src="../upload/place/<?php echo $places["image_name"]; ?>" alt="<?php echo $places["title"]; ?>">

                                                    <h5><?php echo $places["title"]; ?></h5>
                                                   
                                                </div>
                                            </div>
                                
                                    <?php
                                
                              }
                                    ?>
                                  
                                  
 </div>

    
<div class="wrapper row3">
  
     <h1>SRI LANKAN ABOUT</h1>

     
     <p>Sri Lanka is an amazing travel destination offering a wide range of places to visit. This island, located in the Indian Ocean off the coast of India, presents visitors with an incredible array of environments to enjoy and experience.</p>
      <p>The capital combines modern urban amenities with the country's colorful indigenous and colonial history. As a key stop on the world spice trade routes, Sri Lanka has long held strategic importance for European trading powers. The country has been a colony of Portugal,
       the Netherlands, and most recently the British, and all these cultures blend with the native culture to form a wonderful hybrid. You can taste these influences in food, see them in architecture and the arts, and you can really feel them in Colombo.</p>
      <img class="imgl borderedbox inspace-5" src="../images/demo/imgl.gif" alt="">
      <p>The city is also filled with museums and other things to see and do that can help connect you with Sri Lankan culture. Colombo sits on the coast, and there's a large green space and beach area right in the heart of the city separating an area called Fort from the Indian Ocean.
       It's the city's public playground and a fun place to visit, especially on Friday and Saturday nights.</a>.</p>
      <p>Located in central Sri Lanka, Kandy is the former capital city of the Sri Lankan royal dynasty, the country's main capital before the colonial period. The high point of what's called the "Kandian Era" was between the 15th and 18th centuries, when the area remained independent while most of the coastal regions were colonized by European powers.</p>
      <p>Be sure to visit the city's National Museum of Kandy, as it illustrates the story of the region and its people via exhibits and artifacts. Nearby, the Temple of the Sacred Tooth Relic is a very holy Buddhist shrine, part of the royal palace complex.</p>
  <P>Sri Lanka is an amazing travel destination offering a wide range of places to visit. This island, located in the Indian Ocean off the coast of India, presents visitors with an incredible array of environments to enjoy and experience.
     Travelers can trace the island's fascinating history, from ancient times through the colonial period to the present, in cities like Colombo and Kandy. This relatively compact island boasts eight UNESCO World Heritage Sites where that history is preserved.</P>

  <P>Incredible outdoor landscapes and safari experiences can be found in the country's large elephant-filled national parks, like Yala and Udawalawe. Sri Lanka is also a beach-lover's paradise, ringed by some of the world's most beautiful beaches.
     When planning a Sri Lankan adventure, keep in mind that the country experiences its rainy season from May through August, making December through April usually the best time to visit. The shoulder season, September, October, and November, is a good time to visit as well.</P>

  <P>Plan your travel itinerary with our list of the best places to visit in Sri Lanka.</P>
    
</div>
<div class="container">

<!-- main body -->
                                    <?php
                                          $HOTEL = $HOTEL_OBJ->all();
                                          foreach ($HOTEL as $key => $hotel) {
                                
                                    ?>
                            
                                            <div class="gallery">
                                                 <div class="gallery img">
                                                    <img src="../upload/hotel/<?php echo $hotel["image_name"]; ?>" alt="<?php echo $hotel["title"]; ?>">
                                               
                                        
                                            
                                                    <h5><?php echo $hotel["title"]; ?></h5>
                                                    <p><?php echo $hotel["description"]; ?></p>
                                                </div>
                                            </div>
                                
                                    <?php
                                
                              }
                                    ?>
                                  
                                  
 </div>

<?php include '../footer.php'; ?>
</body>
</html>