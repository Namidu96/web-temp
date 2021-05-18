<?php
include_once(dirname(__FILE__) . '/../class/include.php');
$HOTEL_OBJ = new Hotel(null);

?>

<!DOCTYPE html>
<!--
Template Name: Gogopo
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>hotels</title>
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
    
    <div class="content"> 
      
      <h1>Best Hotels in Sri Lanka</h1>
      <img class="imgr borderedbox inspace-5" src="../images/demo/backgrounds/hotels/11.jpg" alt="">
      <p>Sri Lanka offers a wide range of beach hotels, and mountain top villas surrounded by tea plantations. There’s also a variety of apartments, B&Bs and independent homestays available.</p>
      <div class="gallery img">
      <img class="imgl borderedbox inspace-5" src="../images/demo/backgrounds/hotels/11.jpg" alt="">
      </div>
      <p>Sri Lanka’s ancient kingdoms date back over 2,500 years, giving its wildlife, waterfalls, ruins and reams of tea plantations an aura of enlightenment. As an island nation, the country benefits from a wonderful feeling of remoteness, making it easy to lose yourself amidst the tropical rainforests, immaculate white-sand beaches and age-old towns.</a>.</p>
      <p> The southern Hill Country is home to Ella, with its rumbling Ravana Falls and the 1,300-metre-high cliff or Ella’s Rock - reachable via a scenic two-hour trek along a tea-house-laden railway track. Some of Sri Lanka’s best beaches can be found in Tangalla, Kalpitiya and Hikkaduwa, with some offering water sports, dolphin and whale watching, and snorkeling.</p>
      <p> For safari adventures, the country boasts a wealth of stunning national parks. Yala is the best spot for leopards, while Udawalawe and Wasgamuwa are home to parades of wild elephants. If you’re in search of ancient ruins, head for the sites of Anuradhapura and Polonnaruwa to discover architectural gems such as huge dagobas (dome-shaped structures containing relics). </p>
     
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
     
   
      <h1>FIVE STAR HOTELS</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>HOTEL NAME</th>
              <th>DESCRIPTION</th>
              <th>STARS</th>
              <th>DATE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">Hiton</a></td>
              <td>Linked by a walkway to Colombo's World Trade Center,<br>
                 this modern hotel is a 9-minute walk from Fort railway <br>station and a 12-minute walk from the beach.</td>
              <td>FIVE STAR</td>
              <td>04/04/1958</td>
            </tr>
            <tr>
              <td><a href="#">Shangrila</a></td>
              <td>Our luxury Shangri-La Hotel, Colombo,<br>
               Colombo provides comfortably appointed rooms,<br>
                suites and restaurants as well as excellent amenities.</td>
              <td>SEVEN STAR</td>
              <td>06/05/1900</td>
            </tr>
            <tr>
              <td><a href="#">Mount Laveniya</a></td>
              <td>With a history spanning over 210 years,<br>
               Mount Lavinia Hotel Colombo is one of the oldest hotels in Sri Lanka.</td>
              <td>FIVE STAR</td>
              <td>06/07/1921</td>
            </tr>
            <tr>
              <td><a href="#">Light Hous</a></td>
              <td>Iconic Heritage Luxury In The Tropical South<br>
                   Ayubowan! (May you live long)<br>
                   Over the centuries, the seas below us brought the world to these very shores.</td>
              <td>SEVEN STAR</td>
              <td>07/07/1899</td>
            </tr>
          </tbody>
        </table>
      </div>
<br>
      <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">JESIKA</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Tursday, 7<sup>th</sup> April 2020 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>House owners were amazing people.Everything was clean and new. Wifi was super. I recommend you definitely to stay there.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">VAIRA LATVIA</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Wensday, 16<sup>th</sup> January 2021 @05:25:00</time>
              </header>
              <div class="comcont">
                <p>Very private property. Only two bungalows, big and beautiful garden and riverfront, lot of birds and animals around property. Host arranged for us really great safari for a very good price. Very welcoming owner. Thank you!</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">JACK MARTIN</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 21<sup>th</sup> January 2019 @10:35:00</time>
              </header>
              <div class="comcont">
                <p>Everything was perfect. I had such a wonderful stay at this lovely family. They treated me as I was there own family. The food was delicious. They helped me with my travels. Also had a great tour with the brother of the owner. An english teacher. I want to thank the family for everything. We really became Friends.</p>
              </div>
            </article>
          </li>
        </ul>
        <h2>BOOK NOW YOUR DREAM HOTEL</h2>
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
            <label for="text">Hotel<span>*</span</label>
            <input type="text" name="hotel" value="" size="22">
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