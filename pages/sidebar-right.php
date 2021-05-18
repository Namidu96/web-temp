<?php
include_once(dirname(__FILE__) . '/../class/include.php');
$PLACE_OBJ = new Place(null);

?>

<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Places</title>
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
                                          foreach ($PLACE as $key => $place) {
                                
                                    ?>
                            
                                            <div class="gallery">
                                                 <div class="gallery img">
                                                    <img src="../upload/place/<?php echo $place["image_name"]; ?>" alt="<?php echo $place["title"]; ?>">

                                                    <h5><?php echo $place["title"]; ?></h5>
                                                   
                                                </div>
                                            </div>
                                
                                    <?php
                                
                              }
                                    ?>
                                  
                                  
 </div>

<div class="wrapper row3">
   
    <!-- main body -->
    
    <div class="content three_quarter first"> 
     
      <h1>ATTRACTION PLACES IN SRI LANKA</h1>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="d-block w-100" alt="..." src="../upload/place/<?php echo $place["image_name"]; ?>">
    </div>
    <div class="carousel-item">
    <img  class="d-block w-100" alt="..." src="../upload/place/<?php echo $place["image_name"]; ?>">
    </div>
    <div class="carousel-item">
    <img  class="d-block w-100" alt="..." src="../upload/place/<?php echo $place["image_name"]; ?>">
    </div>
  </div>
</div>
      
      <p>Sri Lanka is an amazing travel destination offering a wide range of places to visit. This island, located in the Indian Ocean off the coast of India, presents visitors with an incredible array of environments to enjoy and experience.</p>
      <p>The capital combines modern urban amenities with the country's colorful indigenous and colonial history. As a key stop on the world spice trade routes, Sri Lanka has long held strategic importance for European trading powers. The country has been a colony of Portugal,
       the Netherlands, and most recently the British, and all these cultures blend with the native culture to form a wonderful hybrid. You can taste these influences in food, see them in architecture and the arts, and you can really feel them in Colombo.</p>
      <img class="imgl borderedbox inspace-5" src="../images/demo/imgl.gif" alt="">
      <p>The city is also filled with museums and other things to see and do that can help connect you with Sri Lankan culture. Colombo sits on the coast, and there's a large green space and beach area right in the heart of the city separating an area called Fort from the Indian Ocean.
       It's the city's public playground and a fun place to visit, especially on Friday and Saturday nights.</a>.</p>
      <p>Located in central Sri Lanka, Kandy is the former capital city of the Sri Lankan royal dynasty, the country's main capital before the colonial period. The high point of what's called the "Kandian Era" was between the 15th and 18th centuries, when the area remained independent while most of the coastal regions were colonized by European powers.</p>
      <p>Be sure to visit the city's National Museum of Kandy, as it illustrates the story of the region and its people via exhibits and artifacts. Nearby, the Temple of the Sacred Tooth Relic is a very holy Buddhist shrine, part of the royal palace complex.</p>
     <br>
     <br>
     <br>
     <br>
      <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">Malfoi German</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Tursday, 7<sup>th</sup> July 2020 @09:12:00</time>
              </header>
              <div class="comcont">
                <p>“The tour was great. It was a really varied itinerary which included all of the highlights I was hoping to see. Akhtar was a fantastic guide, great fun and organised everything superbly. It would not have been nearly as good without him ” </p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">MIchel Mariyo USA</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 8<sup>th</sup> March 2019 @06:15:00</time>
              </header>
              <div class="comcont">
                <p>“
Aktar is a very good tour leader. He is very helpful and knowledgeable, as well as being a very nice person. If he does have a fault it is that sometimes he talks a bit too much. As a result, sometimes people 'turn off; and may miss a significant announcement. But overall he is one of the best tour leaders that I have encountered.”</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">Jack Vilson England</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Tursday, 10<sup>th</sup> April 2018 @12:45:00</time>
              </header>
              <div class="comcont">
                <p>“Great experience - Brilliant tour of Sri Lanka, taking in national parks, UNESCO treasures, tea plantation and packing/sorting factory, mountain climbing, ocean picnic, boat, superbly organised by guide Manoj - oh and wonderful hotels! ” </p>
              </div>
            </article>
          </li>
        </ul>
        <h2>Write A Comment</h2>
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
            <label for="text">Tour<span>*</span></label>
            <input type="text" name="tour" id="text" value="" size="22">
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
   
    <div class="sidebar one_quarter"> 
      
    <div class="container">

<!-- main body -->
                                    <?php
                                          $PLACE = $PLACE_OBJ->all();
                                          foreach ($PLACE as $key => $place) {
                                
                                    ?>
                            
                                            <div class="gallery img">
                                                 
                                                    <img src="../upload/place/<?php echo $place["image_name"]; ?>" alt="<?php echo $place["title"]; ?>">
                                               
                                        
                                            
                                                    <h5><?php echo $place["title"]; ?></h5>
                                                    <p><?php echo $place["description"]; ?></p>
                                                
                                            </div>
                                
                                    <?php
                                
                              }
                                    ?>
                                  
                                  
 </div>
      
    </div>
    
    <!-- / main body -->
    <div class="clear"></div>
  
</div>

<?php include '../footer.php'; ?>
</body>
</html>