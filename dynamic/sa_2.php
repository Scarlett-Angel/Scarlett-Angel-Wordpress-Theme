<?php
function saw3_anyLessHassle(){
    switch(rand(1,2)){
        case 1:
            echo "any less ";
            saw1_hassle();
            break;
        case 2:
            saw1_easier();
            break;
    }
}
function saw3_areNotCharged(){
    switch(rand(1,2)){
        case 1;
            echo "don't pay";
            break;
        case 2:
            echo "are not charged";
            break;
    }
}
function saw3_proveToYou(){
    switch(rand(1,4)){
        case 1:
            echo "show you";
            break;
        case 2:
            echo "prove";
            break;
        case 3:
            echo "prove to you";
            break;
        case 4:
            echo "show the world";
            break;
    }
}
?>