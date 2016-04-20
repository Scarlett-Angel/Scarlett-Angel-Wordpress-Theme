<?php
    include ('sa_3.php');
    include ('sa_2.php');
    include ('sa_1.php');
    include ('sa_0.php');
    include('sitemap-builder.php');
 add_shortcode('scarlett-angel-supercharged-dynamic-page', function(){
    ob_start();
    ?>
     <style>
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
    </style><?php
    $county = isset($_GET['county']) ? $_GET['county'] : '';
    $county     = urldecode($county);
    $town = isset($_GET['town']) ? $_GET['town'] : '';
    $town     = urldecode($town);
    if($county == ''){
        global $wpdb;
        $countys = array(  
        "Barking & Dagenham, Greater London",
        "Barnet, Greater London",
        "Bexley, Greater London", 
        "Brent, Greater London", 
        "Bromley, Greater London",
        "Camden, Greater London", 
        "City of London, Greater London", 
        "Croydon, Greater London", 
        "Ealing, Greater London", 
        "Enfield, Greater London",
        "Essex",
        "Greenwich, Greater London", 
        "Hackney, Greater London", 
        "Hammersmith & Fulham, Greater London", 
        "Haringey, Greater London", 
        "Harrow, Greater London", 
        "Havering, Greater London", 
        "Hillingdon, Greater London", 
        "Hounslow, Greater London", 
        "Islington, Greater London", 
        "Kensington & Chelsea, Greater London",
        "Kent",
        "Kingston upon Thames, Greater London", 
        "Lambeth, Greater London", 
        "Lewisham, Greater London", 
        "Merton, Greater London", 
        "Newham, Greater London"
        );
    
    echo "<h2>Area's We cover</h2>";
    ?>
   
    <p class="linksers">
    <?php
    foreach ($countys as $county){
        echo "<strong><a class='hvr-grow' href='?county=" . urlencode($county) . "'>$county</a></strong>";
    }
    echo "</p>";
 }
 elseif($town == ''){
    global $wpdb;
    $towns = $wpdb->get_col("SELECT Town from uk_towns where county='$county' order by Town");
    ?><p class="linksers"><?php
     foreach ($towns as $town){
        echo "<strong><a class='hvr-grow' href='?county=" . urlencode($county) . "&town=" . urlencode($town) . "'>$town</a></strong>";
 }
 ?></p><?php
 }
 else{
    echo "<p>";
    
    function phrase_1a($county){
            //The process of buying an Ex-Motability vehicle could not be simpler
            saw1_method();
            echo " of ";
            saw1_buying();
            echo " a second hand ";
            saw1_car();
            echo " in $county Ex-Motability ";
            saw2_couldNot();
            echo " be ";
            saw3_anyLessHassle();
    }
       function phrase_1b(){
        //Your able to choose the make, model, colour, transmission and more
            saw1_choose();
            echo " the ";
            saw1_make();
            echo ", ";
            saw1_model();
            echo ", colour, transmission & more";
    }
       function phrase_1c(){
        //Each ex-motability vehicle is meticulously inspected inside and out by experienced staff
            saw1_each();
            echo " ex-motability ";
            saw1_car();
            echo " is ";
            saw1_meticulously();
            echo " ";
            saw1_tested();
            echo " inside and out by ";
            saw1_experienced();
            echo " ";
            saw1_staff();
    }
       function phrase_1d(){
        //ensure they are supplied to us in as perfect condition as possible,
            saw2_makeCertain();
            echo " that ";
            saw1_each();
            echo " ";
            saw1_car();
            echo " is ";
            saw1_supplied();
            echo " to you in as ";
            saw1_perfect();
            Echo " condition as possible";
    }
            echo "The ";
            phrase_1a($county);
            switch(rand(1,3)){
                case 1:
                    echo ". You can ";
                    phrase_1b();
                    switch(rand(1,2)){
                        case 1:
                            echo ". We want you to know ";
                            phrase_1c();
                            echo " to ";
                            phrase_1d();
                            break;
                        case 2:
                            echo ". We always ";
                            phrase_1d();
                            echo " by making sure ";
                            phrase_1c();
                            break;
                    }
                    break;
                case 2:
                    echo " because ";
                    phrase_1c();
                    switch(rand(1,2)){
                        case 1:
                            echo ". You can ";
                            phrase_1b();
                            echo " and we will always ";
                            phrase_1d();
                            break;
                        case 2:
                            echo ". We always ";
                            phrase_1d();
                            echo " by making sure ";
                            phrase_1c();
                            break;
                    }
                    break;
                case 3:
                    echo " because we ";
                    phrase_1d();
                    switch(rand(1,1)){
                        case 1:
                            echo ". You can ";
                            phrase_1b();
                            echo " and ";
                            phrase_1c();
                            break;
                        case 2:
                            echo ". We always ";
                            phrase_1c();
                            echo " by making sure ";
                            phrase_1b();
                            break;
                    }
            }
            echo ".</p><h2>There are ";
            saw1_many();
            echo " reasons to ";
            saw1_buying();
            echo " a second hand ";
            saw1_car();
            echo " in $town Ex-Motability.</h2> <ul><li>All ";
            saw1_car();
            echo "s are 3 years old or younger.</li><li>All have had just a single owner.</li><li>Full main dealer service history.</li><li>Many have covered less than 15,000 miles</li><li>All ";
            saw1_car();
            echo "s are standard with no adaptions.</li><li>All ";
            saw1_car();
            echo " ";
            saw1_meticulously();
            echo " ";
            saw1_tested();
            echo ".</li><li>First class after sales service.</li></ul>";
            switch (rand(1,2)){
                case 1:
                    echo "<p>At Ex-Motability London we have ";
                    saw1_many();
                    echo " ";
                    saw1_make();
                    echo "s of ";
                    saw1_car();
                    echo "s to suit ";
                    saw1_everybody();
                    echo ", from ";
                    saw1_small();
                    echo " economical ";
                    saw1_car();
                    echo "s to ";
                    saw1_larger();
                    echo " family MPV's, in fact we supply from 39 manufacturers offering 240 models with 4000 derivatives. ";
                    break;
                case 2:
                    echo "At Ex-Motability London we supply from 39 manufacturers offering 240 models with 4000 derivatives. ";
                    echo "We have ";
                    saw1_many();
                    echo " ";
                    saw1_make();
                    echo "s of ";
                    saw1_car();
                    echo "s to suit ";
                    saw1_everybody();
                    echo ", from ";
                    saw1_small();
                    echo " economical ";
                    saw1_car();
                    echo "s to ";
                    saw1_larger();
                    echo " family MPV's.";
                    break;
            }
 }
    
            


  
    return ob_get_clean();
});
?>