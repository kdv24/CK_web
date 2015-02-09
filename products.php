<?php 

//can specify key inside[] to use for SKU number of whatever for later reference. 
//Can also be strings.


$yarns = array();
$yarns[0] = array(
    "name" => "Art Yarns",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/artyarns.png"
);
$yarns[1] = array(
    "name" => "Brambleberry",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/brambleberry.png"    
);
$yarns[2] = array(
    "name" => "Crafty Hedgehog",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/craftyhedgehog.png"
);
$yarns[3] = array(
    "name" => "Darn Good Yarn",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/darngoodyarn.png"
);
$yarns[4] = array(
    "name" => "Edgewood Garden Studio",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/edgewoodgardenstudio.png"
);
$yarns[5] = array(
    "name" => "Fyberspates",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/fyberspates.png"
);
$yarns[6] = array(
    "name" => "Gingko Leaf",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/gingkoleaf.png"
);
$yarns[7] = array(
    "name" => "Hogg Wild Fibers",
    "weight" => "DK",
    "fiber" => "wool",
    "price" => 9.00,
    "img" => "img/ckyarns/hoggwildfibers.png"
);

?><?php 
$pageTitle = "View our Products";
$section = "products";
include('inc/header.php'); ?>

    <div class="about">
        <p>
        Close Knit offers wonderful products. Blah blah blah.... ya da ya da. lotsa text. lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>

    <div>
        <h4>Our selection as of <?php echo date('m/d/y'); ?></h4>
          <ul class="products">
            <?php foreach($yarns as $yarn) {
                echo '<li class="row col-xs-6 col-sm-4 col-md-3">';
                echo '<a href="#">';
                echo '<img src="' . $yarn["img"] . '" alt="' . $yarn["name"] . '">';
                echo '<p>' . $yarn["name"] . '</p>';
                echo "</li>";
              } 
            ?>
          </ul>
    </div> 

    <div class="order-form">
    <?php include('inc/order-form'); ?>
    </div>
  
<?php include('inc/footer.php'); ?>
  
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.1.js"></script>
</html>