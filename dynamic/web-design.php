<?php

    add_shortcode('scarlett-angel-supercharged-dynamic-page', function(){
    include ('sa_3.php');
    include ('sa_2.php');
    include ('sa_1.php');
    include ('sa_0.php');
    ob_start();
    echo "<p>";
    function paragraph_1a(){
            saw1_optimised();
            echo " the <strong>";
            saw1_method();
            echo "</strong> of ";
            saw1_getting();
            echo " a";
            saw1n_appraisal();
    }
       function paragraph_1b(){
            saw1_ensure();
            echo " that you ";
            saw3_areNotCharged();
            echo " for something that you ";
            saw1_dont();
            echo " need";
    }
       function paragraph_1c(){
            saw4_makesUsStandOut();
            echo " from other <strong>web design ";
            saw1_businesses();
            echo "</strong>";
    }
       function paragraph_1d(){
            saw1_will();
            echo " ";
            saw3_proveToYou();
            echo " <strong>";
            saw1_excellent();
            Echo " websites</strong> ";
            saw4_asAMatterOfFact();
            echo " ";
            saw1_dont();
            echo " allways ";
            saw1_have();
            echo " to ";
            saw4_costYouAFortune();
    }
    switch(rand(1,2)){
        case 1:
            //first
            echo "We want to know we ";
            paragraph_1d();
            echo ". ";
            switch (rand(1,3)){
                case 1:
                    //second
                    echo "We have ";
                    paragraph_1a();
                    echo " for your website";
                    switch (rand(1,2)){
                        case 1:
                            //to ensure you don't pay for something you don't need
                            echo " to ";
                            paragraph_1b();
                            echo " for something that you ";
                            saw1_dont();
                            echo " need. This is what ";
                            paragraph_1c();
                            break;
                        case 2:
                            //what makes is different from other web design companies
                            echo ". What ";
                            paragraph_1c();
                            echo " is we ";
                            paragraph_1b();
                            break;
                    }
                    break;
                case 2:
                    //second
                    echo "To ";
                    paragraph_1b();
                    echo " ";
                    switch (rand(1,2)){
                        case 1:
                            //we have streamlined the process of getting a website
                            echo " we have ";
                            paragraph_1a();
                            echo " for your website. To ";
                            saw1_ensure();
                            echo ", <strong>this</strong> is what ";
                            paragraph_1c();
                            break;
                        case 2:
                            echo " and to do something that ";
                            paragraph_1c();
                            echo " we have ";
                            paragraph_1a();
                            echo " for your website";
                            break;
                    }
                    break;
                case 3:
                    //second
                    echo "What ";
                    paragraph_1c();
                    echo " is ";
                    switch (rand(1,2)){
                        case 1:
                            echo " we have ";
                            paragraph_1a();
                            echo " for your website to ";
                            paragraph_1b();
                            break;
                        case 2:
                            echo " that we ";
                            paragraph_1b();
                            echo " so we ";
                            paragraph_1a(); 
                            echo " for your website";
                            break;
                    }
                    break;
            }
            break;
        case 2:
            //first
            echo "We have ";
            paragraph_1a();
            echo " for your website";
            switch (rand(1,2)){
                case 1:
                    //second
                    echo " so that we ";
                    paragraph_1b();
                    echo " ";
                    switch(rand(1,2)){
                        case 1:
                            echo " and to do something that ";
                            paragraph_1c();
                            echo ".  This way we ";
                            paragraph_1d();
                            echo ". ";
                            break;
                        case 2:
                            echo ", we want this to be something that ";
                            paragraph_1c();
                            echo ", this way we ";
                            paragraph_1d();
                            echo ". ";
                            break;
                    }
                    break;
                case 2:
                    //second
                    echo ", so that we can do something that ";
                    paragraph_1c();
                    switch(rand(2,2)){
                        case 1:
                            echo ", makes sure that we ";
                            paragraph_1d();
                            echo " and ";
                            paragraph_1b();
                            break;
                        case 2:
                            echo ". We will make sure that we ";
                            paragraph_1b();
                            echo " and ";
                            paragraph_1d();
                            break;
                    }
                    break;
            }

    }
    
    
    



    return ob_get_clean();
});
?>