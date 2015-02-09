<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $pageTitle; ?></title> 

  <!--BOOTSTRAP STYLESHEETS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  	<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

  <!-- MY STYLESHEETS AND FONT LINKS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


 <!--LOGO & NAME -->
    <div>
      <div id="logo_gif">
        <a href= "index.php"><img src="img/closeknit_portland.gif" alt="CloseKnit"></a>
      </div>

  
 <!--SOCIAL --> 

      <div id="social">
        <ul class="social-icons">
          <a href="https://www.facebook.com/pages/closeknit-pdx/122838281079484" target="_blank">
          <img src="img/social media pngs/facebook grey.png" alt="Facebook"></a>
          <a href="https://twitter.com/closeknitportland" target="_blank"><img src="img/social media pngs/twitter grey.png" alt="Twitter"></a>
          <a href="http://instagram.com/closeknitpdx" target="_blank"><img src="img/social media pngs/instagram grey.png" alt="Instagram"></a>
          <a href="http://www.pinterest.com/closeknitpdx/" target="_blank"><img src="img/social media pngs/pinterest grey.png" alt="Pinterest"></a></ul>
          <!--(Flicker and Ravelry links need to be added) -->      
          <!--  <a href="http://www.ravelry.com/groups/close-knit-neighborhood-yarn-shop" target="_blank"><img src="img/social media pngs/fake ravelry.png" alt="Ravelry"></a>
                <a href="https://www.flickr.com/groups/1346747@N21/" target="_blank"><img src="img/social media pngs/fake flickr.png" alt="Flickr"></a>-->
        </ul>
      </div>

<!--MENU/HEADER -->


          <div>
            <ul class="header">
              <li class=" <?php if ($section == "about") {echo "on"; } ?>"><a href="about.php">ABOUT</a></li>
              <li class=" <?php if ($section == "classes") {echo "on"; } ?>"><a href="classes.php">CLASSES</a></li>
              <li class=" <?php if ($section == "products") {echo "on"; } ?>"><a href="products.php">PRODUCTS</a></li>
              <li class=" <?php if ($section == "patterns") {echo "on"; } ?>"><a href="patterns.php">PATTERNS</a></li>
              <li class=" <?php if ($section == "blog") {echo "on"; } ?>"><a href="blog.php">BLOG</a></li>
            </ul>
          </div>


 







