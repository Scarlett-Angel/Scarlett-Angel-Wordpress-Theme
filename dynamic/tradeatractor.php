<?php
    include ('sa_3.php');
    include ('sa_2.php');
    include ('sa_1.php');
    include ('sa_0.php');
  //  include('sitemap-builder.php');
 add_shortcode('scarlett-angel-supercharged-dynamic-page', function(){
    ob_start();
    echo "<style>
        .linksers {
            text-align:center;
        }
        .hvr-grow {
            padding: 20px;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: transform;
            transition-property: transform;
      }
      .hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
      }
    </style>";
     
    $county = isset($_GET['county']) ? $_GET['county'] : '';
    $county     = urldecode($county);
    $country = isset($_GET['country']) ? $_GET['country'] : '';
    $country = urldecode($country);
    $type = isset($_GET['type']) ? $_GET['type'] : 'farm machinery';
    $type = urldecode($type);
    if($country == ''){
        global $wpdb;
        $countries = array(  
        "England",
        "Scotland",
        "Wales",
        "Northern Ireland"
        );
    
    echo "<h2>Area's We cover</h2>";
    ?>
   
    <p class="linksers">
    <?php
    foreach ($countries as $countrie){
        echo "<strong><a class='hvr-grow' href='?country=" . urlencode($countrie) . "'>$countrie</a></strong>";
    }
    echo "</p>";
 }
 elseif($county == ''){
    global $wpdb;
    $counties = $wpdb->get_col("SELECT DISTINCT County from uk_towns where Country='$country' order by County");
    ?><p class="linksers"><?php
     foreach ($counties as $countie){
        echo "<strong><a class='hvr-grow' href='?country=" . urlencode($country) . "&county=" . urlencode($countie) . "&='>$countie</a></strong>";
 }
 ?></p><?php
 }
 else{
    echo "<div align='center'>";
   echo "<p>";
   echo "Trade a Tractor is more than just a place to ";
   saw1_buy();
   echo " and sell new and used farm machinery. ";
   $rand = rand(1,2);
   if ($rand = 1){
    echo "At Trade a Tractor you can ";
    saw1_Advertise();
    echo " your farm machinery, trucks and lorries for ";
   saw2_noCost();
   echo ". ";
   }
   switch (rand(1,2)){
    case 1:
        switch(rand(1,2)){
            case 1:
                echo "You will ";
                saw1_reach();
                echo " new potential ";
                saw2_salesProspects();
                echo " across the UK today. ";
                break;
            case 2:
                echo "All across the UK you can ";
                saw1_reach();
                echo " new potential ";
                saw2_salesProspects();
                echo ". ";
                break;
          }
          break;
        case 2:
          echo "Advertising farm machinery could not be ";
          saw1_easier();
          echo ". ";
   }
  switch (rand(1,2)){
    case 1:
        switch (rand(1,2)){
            case 1:
                saw1_Advertise();
                echo " your ";
                saw1_car();
                echo ", tractor or farm machinery today. ";
                break;
            case 2:
                echo "Don't hesitate today to ";
                saw1_promote();
                echo " your tractor, farm machiney or ";
                saw1_car();
                echo ". ";
                break;
        }
        break;
    case 2:
        echo "Sign up for a free membership today. ";
        break;
        }
        echo "<h3>";
        switch(rand(1,4)){
            case 1:
                echo "So why not sign up today for a free account and start to ";
                saw1_promote();
                echo " and ";
                saw1_buy();
                echo " farm machinery ";
                saw2_rightnow();
                echo ". ";
                break;
            case 2:
                saw2_rightnow();
                echo " you can ";
                saw1_buy();
                echo " and ";
                saw1_promote();
                echo " farm mchinery when you sign up today";
                break;
            case 3:
                echo "What are you waiting for? ........ Sign up ";
                saw2_rightNow();
                echo " and give us a try";
                break;
            case 4:
                echo "Sign up ";
                saw2_rightNow();
                echo " what are you waiting for?";
        }
        echo "</h3>";

 echo "<p>";
 switch(rand(1,3)){
    case 1:
        echo "Using our website will allow you to ";
        saw1_Advertise();
        echo " your " . $type . " for ";
        saw2_noCost();
        echo " in " . $county . ". ";
        break;
    case 2:
        echo "Using our website will allow you to find " . $type . " in " . $county . ". ";
        break;
    case 3:
        echo "When you search our website you can ";
        saw1_buy();
        echo " ". $type . " in " . $county . ". ";       
 }
 echo "Are you a professional trader? ";
 switch (rand(1,3)){
    case 1:
        echo "We ";
        saw1_accept();
        echo " all kinds of traders on our website. ";
        switch (rand(1,2)){
            case 1:
                echo " To help your business we have created a";
                saw1_nEasy();
                echo " signup process for all dealers. ";
                break;
            case 2:
                echo "Our website can allow you to advertise multiple items with no limit for ";
                saw2_noCost();
                echo ". ";
                break;
            }
            break;
    case 2:
        echo " To help your business we have created a";
        saw1_nEasy();
        echo " signup process for all dealers. ";
        switch(rand(1,2)){
            case 1:
                echo "Our website is optimised for crawling from all major search engines. ";
                break;
        }
        break;
    case 3:
        echo "Our website can allow you to advertise multiple items with no limit for ";
        saw2_noCost();
        echo ". ";
 }
 echo "</p>";
 echo "</div>";
 
 
 }
So whether your looking to sell a one off vehicle or machinery
or you need to sell multplie items daily
 we have everything you need
 and best of all you can sell for FREE.
 Trade a tractor is run by cogmans-farm-machinery
/*



 opopopo



<p>, ,, </p>So whether your looking to sell a one off vehicle or machinery, or you need to sell multplie items daily, we have everything you need, and best of all you can sell for FREE.



 



<p>What are you waiting for ........ Sign up today and give us a try</p>





<p>Tradeatractor is to be your ultimate online solution for buying and selling Tractors, Farm Machinery, Trucks, Plant and Machinery. Our site is designed to give you more control of the buying process and make finding farm machinery easier than ever before.</p>



<p>Whether you're shopping for new or used farm machinery our website offers you these benefits: The largest selection of farm machinery inventory from dealers and private sellers The most comprehensive selection of buying and selling tips The most complete research and compare tools, including reviews, photos, videos and more farm machinery pricing, including seller specials and dealer discounts Safety information and vehicle history reports Help with finance, insurance and warranty program. Here at Tradeatractor the ads are free for the initial months but our aim is to provide a value for money advertising program</p>
    
 }

      */
    return ob_get_clean();
});
?>