<?php
add_shortcode('scarlett-angel-supercharged-dynamic-page', function(){
    ob_start();
    
     include ('sa_3.php');
    include ('sa_2.php');
    include ('sa_1.php');
    include ('sa_0.php');
    ?>
    <img src="http://shiningbeauty.co.uk/wp-content/uploads/2015/05/cosmedico-1024x349.png" alt="cosmedico" width="785" height="268" class="aligncenter size-large wp-image-281" />
   <?php
    switch(rand(1,2)){
        case 1:
            echo "<h2>Shaving be " . saw2_canBe(); . " " .saw1_ . " a " . saw1_a and waxing can be a pain.</h2>";
            
            break;
        case 2:
            echo "<h2>Removing hair can be dangerous and uncomfortable</h2>";
            break;
    }
    



<p><strong>S</strong>uper <strong>H</strong>air <strong>R</strong>emoval <strong>SHR</strong> uses pulses to remove the hair. SHR is better and faster than IPL. It can save you time and give you peace of mind with long lasting hair removal. Super hair removal is the latest technology for the removal of unwanted hair. It can make removing hair easier and give you the confidence to show your skin this summer. We can personalise your service in order to allow it suit exactly what you need with a comprehensive menu of treatments. Have any of your friends ever tried SHR after feeling unhappy with an slow and uncomfortable hair removal procedure? Safe and pain free, an SHR treatment gently heats up the target hair follicle to cause terminal damage and prevent hair regrowth. Super fast and efficient. Our booking form can be accessed from the link right on our homepage or you can click to <a href="https://shining-beauty.appointedd.com/" target="_blank"><span style="color: #669999;"><strong>book Super Hair Removal</strong></span></a></p>
    
    <?php
        return ob_get_clean();
});
?>