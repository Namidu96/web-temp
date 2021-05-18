<?php
include_once(dirname(__FILE__) . '/../class/include.php');
$PHOTO_ALBUMS = new PhotoAlbum(null);
$PHOTO_ALBUM = $PHOTO_ALBUMS->all();

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
<title>Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/theme.css" rel="stylesheet">
<style type="text/css">

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

  width: 350px;
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
      
      <div id="gallery">
        <figure>
          <header class="heading">Sri lankan tours gallery</header>
          <ul class="nospace clear">
            <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/1.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/2.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/3.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/4.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/5.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/6.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/7.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/8.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/9.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/10.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/11.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/12.png" alt=""></a></li>
          </ul>
          
        </figure>
      </div>
  
                                <div class="container">
                                    <?php
                                    $ALBUM_PHOTOS = new AlbumPhoto(null);
                                    $ALBUM_PHOTO = $ALBUM_PHOTOS->all();
                                    foreach ($ALBUM_PHOTO as $key => $photo) {
                                        ?>   
                                        <div class="gallery">
                                        <div class="gallery img">                                   
                                            <div class="gallery-megic-blog">
                                                <a href="../upload/photo-album/gallery/<?php echo $photo["image_name"]; ?>" data-lightbox="roadtrip" data-title="">
                                                    <img src="../upload/photo-album/gallery/thumb/<?php echo $photo["image_name"]; ?>" alt="">
                                                    <div class="gallery-megic-inner">
                                                                <h3>Sri Lankan Tours</h3>
                                                                <span><?php echo $photo["caption"]; ?></span>
                                                    </div>
                                                    </div>
                                                    </div>
                                                </a>

                                            </div>
                                       
                                        <?php
                                    }
                                    ?>
                 </div>
                    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php include '../footer.php'; ?>
</body>
</html>