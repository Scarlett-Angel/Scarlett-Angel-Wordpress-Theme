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
		echo "<p><img src='http://www.tradeatractor.org.uk/wp-content/uploads/2016/02/harvest-803479_960_720.jpg' width='50%'/></p>";
	echo "<h2>";
    saw1_Advertise();
    echo " your $type ";
    saw2_noCost();
    echo " in " . urldecode($county);
    echo "</h2><p>";
   echo "<p>";
   echo "Trade a Tractor is more than just a place to ";
   saw1_buy();
   echo " and sell new and used $type. ";
   $rand = rand(1,2);
   if ($rand = 1){
    echo "At Trade a Tractor you can ";
    saw1_Advertise();
    echo " your $type, trucks and lorries for ";
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
          echo "Advertising $type could not be ";
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
                echo ", tractor or $type today. ";
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
		echo "<p><img src='http://www.tradeatractor.org.uk/wp-content/uploads/2016/02/baling-901583_960_720.jpg' width='50%'/></p>";
        echo "<h3>";
        switch(rand(1,4)){
            case 1:
                echo "So why not sign up today for a free account and start to ";
                saw1_promote();
                echo " and ";
                saw1_buy();
                echo " $type ";
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
 switch (rand(1,4)){
	 case 1:
	 echo "So whether ";
	 break;
	 case 2:
	 echo "Even if ";
	 break;
	 case 3:
	 echo "No matter ";
	 break;
	 case 4:
	 echo "It doesn't matter if ";
	 break;
	 
 }
 echo "you are ";
 saw2_planningTo();
 echo " ";
 saw1_Advertise();
 echo " ";
 switch(rand(1,2)){
	 case 1:
	 echo "a one off ";
	 saw1_car();
	 echo " or item of $type";
	 switch (rand(1,2)){
		 case 1:
		 echo ", or you ";
		 saw1_have();
		 echo " to ";
		 saw1_Advertise();
		 echo " multiple items daily, ";
		 break;
		 case 2:
		 echo", ";
		 break;
	 }
	 break;
	 case 2:
	 echo "multiple ";
	 saw1_car();
	 echo "s or items of $type daily";
	 switch (rand(1,2)){
		 case 1:
		 echo ", or you ";
		 saw1_have();
		 echo " to ";
		 saw1_Advertise();
		 echo " something on a one off, ";
		 break;
		 case 2:
		 echo", ";
		 break;
	 }
 }
 echo "we have everything you need and best of all you can do everything for ";
 saw2_noCost();
 echo ". ";
 echo "</p><p>";
echo "Trade a Tractor is a ";
      switch(rand(1,2)){
        case 1:
          echo "brand new";
          break;
        case 2:
          echo "contemporary";
          break;
      }
      echo " $type ";
      switch(rand(1,3)){
        case 1:
         echo "classifieds";
         break;
        case 2:
          echo "personal ad";
          break;
        case 3:
          echo "advertisement";
          break;
      }
      echo " website that ";
      switch (rand(1,4)){
        case 1:
          echo "lets you";
          break;
        case 2:
          echo "allows you";
          break;
        case 3:
          echo "enables you";
          case 4:
            echo "gives you the ability to";
            break;
      }
    echo " buy $type, sell $type and advertise $type ";
    saw2_noCost();
    echo " in $county, $country and ";
    switch(rand(1,4)){
      case 1:
        echo "even all across the United Kingdom";
        break;
      case 2:
        echo "everywhere else in the United Kingdom";
        break;
      case 3:
        echo "every other area in the United Kingdom";
        break;
      case 4:
        echo "all areas in the United Kingdom";
        break;
    }
    echo ". ";
	echo "All ";
switch(rand(1,5)){
  case 1:
    echo "kinds of";
    break;
  case 2:
    echo "types of";
    break;
  case 3:
    echo "makes of";
    break;
  case 4:
    echo "manufacturers of";
    break;
  case 5:
    echo "brands of";
    break;
}
echo " $type are traded here. ";
 


    switch (rand(1,6)) {
        case 1:
            echo " All $type are considered and we also deal with all kinds of vehicles and machinery related to your business.";
            break;
        case 2:
            echo " All $type are able to be bought and sold and we also deal with all kinds of vehicles and machinery related to your company.";
            break;
        case 3:
            echo " All $type are displayed here and we also deal with all kinds of vehicles and machinery related to your interests.";
            break;
        case 4:
            echo " All $type are available here and we also deal with all kinds of vehicles and machinery related to your search.";
            break;
			
    } //rand(4)
    switch (rand(1,6)) {
        case 1:
            echo " With such a wide selection of new and used $type to choose from, advertising your $type could not be easier.";
            break;
        case 2:
            echo " With such an immense choice of new and used $type to take from, broadcasting your $type could not be any more effortless.";
            break;
        case 3:
            echo " With such a large collection of new and used $type to wish for, exhibiting your $type could not be simplier.";
            break;
        case 4:
            echo " With such a vast amount of options of new and used $type to single out, promoting your $type could not be any more straightforward.";
            break;
    } //rand(4)
	echo "</p><p>";
    switch (rand(1,6)) {
        case 1:
            echo "If you are looking for a low cost advertising solution to make sure you get your $type sold then why not visit our site and display your $type today.";
            break;
        case 2:
            echo "If you are searching for an economical exhibiting solution to confirm you get your $type sold then why not explore our site and promote your $type now.";
            break;
        case 3:
            echo "If you are hunting for an inexpensive promoting solution to verify you get your $type sold then why not take a look around our site and exhibit your $type right now.";
            break;
        case 4:
            echo "If you are considering a cheap displaying solution to determine whether you get your $type sold then why not use our site and advertise your $type immediatly.";
            break;
    } //rand(4)
    switch (rand(1,6)) {
        case 1:
            echo " Whatever kinds of $type you require to buy or sell Trade a Tractor has a selection of big or small items for you to look at.";
            break;
        case 2:
            echo " It doesn't matter the kinds of $type you want to buy or sell Trade a Tractor has a variety of big or small items for you to view.";
            break;
        case 3:
            echo " No matter what kinds of $type you need to buy or sell Trade a Tractor has a wide range of big or small items for you to peruse.";
            break;
        case 4:
            echo " We accept all kinds of $type you would love to buy or sell Trade a Tractor has plethora of big or small items for you to discover.";
            break;
    } //rand(4)
    switch (rand(1,6)) {
        case 1:
            echo " So if you are considering a free $type classifieds exhibit in $county then look no further.";
            break;
        case 2:
            echo " So if you are hunting for a costless $type classifieds platform in $county then you have found it.";
            break;
        case 3:
            echo " So if you are searching for a chargeless $type classifieds site in $county then rest easy you have succeeded.";
            break;
        case 4:
            echo " So if you are looking for an unpaid $type classifieds website in $county then this is what you are looking for.";
            break;
    } //rand(4)
	echo "</p><p>";
    switch (rand(1,6)) {
        case 1:
            echo "Are you a dealer in $county , then look no further as we are constantly adding dealers to our database offering our customers more $type to choose from. ";
            break;
        case 2:
            echo "Are you a merchant in $county , then stop searching as we are continually adding merchants to our database offering our clients more $type to select from. ";
            break;
        case 3:
            echo "Are you a trader in $county , then we are suitable for your needs as we are regularly adding traders to our database offering our patrons more $type to decide from. ";
            break;
        case 4:
            echo "Are you a vendor in $county , then we are your best bet as we are steadily adding vendors to our database offering our clientele more $type to pick from. ";
            break;
    } //rand(4)
    switch (rand(1,6)) {
        case 1:
            echo "We sell second hand $type in $county at low competitive prices that will ensure you make your sale. ";
            break;
        case 2:
            echo "You can sell second hand $type in $county at reasonable prices that will give you products the highest consideration. ";
            break;
        case 3:
            echo "We provide a service to sell second hand $type in $county at competitive prices that will ensure your item is sold. ";
            break;
        case 4:
            echo "We want you to sell second hand $type in $county at desireable prices that our visitors won't be able to refuse. ";
            break;
    } //rand(4)
    switch (rand(1,6)) {
        case 1:
            echo "We only ask that you advertise your $type with us for free with a promise that we will never charge you a great deal in the future. ";
            break;
        case 2:
            echo "We exclusively require that you exhibit your $type with us for no cost with an agreement that we will never bill you a lot of money down the road. ";
            break;
        case 3:
            echo "We merely request that you promote your $type with us free of charge with a guarantee that we will never charge you a lot in the coming days. ";
            break;
        case 4:
            echo "We only inquire that you display your $type with us without cost with a pledge that we will never bill you a fortune from here on. ";
            break;
    } //rand(4)
    switch (rand(1,6)) {
        case 1:
            echo "We only ask that you advertise your $type for free with us today and build your profile, to help your business get the maximum exposure it needs.";
            break;
        case 2:
            echo "We only want that you promote your $type free of charge with us today and construct your account, to promote your company to get the best exposure it requires.";
            break;
        case 3:
            echo "We only need that you exhibit your $type without cost with us today and expand your profile, to help your organisation get the ultimate exposure you want.";
            break;
        case 4:
            echo "We only require that you diplay your $type with no cost with us today and build your account, to boost yours sales and get the greatest exposure you desire.";
            break;
    } //rand(4)
	echo "<p><img src='http://www.tradeatractor.org.uk/wp-content/uploads/2016/02/tractor-385681_960_720.jpg' width='50%'/></p>";
	echo "</p><p><h3><a href='http://www.tradeatractor.org.uk/my-account/profile/?action=add-directory&uid=1'>";
    switch (rand(1,4)) {
        case 1:
            echo "To view our latest range of $type for sale in $county please explore the rest of our website or alternatively post a free ad today!</a>";
            break;
        case 2:
            echo "To see our latest selection of $type for sale in $county you can take a look around the rest of our website or you can simply post a free classified ad today!</a>";
            break;
        case 3:
            echo "To look at our latest choice of $type for sale in $county don't be afraid to explore the rest of our website or just post a listing free of charge today!</a>";
            break;
        case 4:
            echo "To peruse our latest range of $type for sale in $county please be obliged to take a look at the rest of our website or click this link to submit a free $type listing today!</a>";
            break;
    } //rand(4)
 echo "</h3></p></div>";
 }

    return ob_get_clean();
});
?>