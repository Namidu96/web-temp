<?php
include_once(dirname(__FILE__) . '/../class/include.php');
$FACILITY_OBJ = new facility(null);
?>

<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Facility</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="css/theme.css" rel="stylesheet">
<link href="plugin/bootstrap/bootstrap.css" rel="stylesheet">
     

<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}

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
    width:240px;
    

}

.gallery img {

  width: 400px;
  height:auto;
  

}


/* DEMO ONLY */
</style>
</head>
<body id="top">
 
<?php include './header.php'; ?>

<!-- End Top Background Image Wrapper -->

<div class="container">

    <!-- main body -->
                                        <?php
                                              $FACILITY = $FACILITY_OBJ->all();
                                              foreach ($FACILITY as $key => $facility) {
                                    
                                        ?>
                                
                                                <div class="gallery">
                                                     <div class="gallery img">
                                                        <img src="../upload/facility/<?php echo $facility["image_name"]; ?>" alt="<?php echo $facility["title"]; ?>">
                                                   
                                            
                                                
                                                        <h5><?php echo $facility["title"]; ?></h5>
                                                        <p><?php echo $facility["description"]; ?></p>
                                                    </div>
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