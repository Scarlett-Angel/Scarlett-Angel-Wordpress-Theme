<?php
function saw_quote(){
    switch(rand(1,2)){
        case 1:
            echo " cost";
            break;
        case 2;
            echo " quote";
            break;
    }
}

function saw_getting(){
    switch (rand(1,2)){
        case 1;
            echo "getting";
            break;
        case 2:
            echo "acquiring";
            break;
        case 3:
            echo "obtaining";
            break;
    }
}

function saw_method(){
    switch (rand(1,3)){
        case 1;
            echo "process";
            break;
        case 2:
            echo "method";
            break;
        case 3:
            echo "way";
            break;
    }
}
function saw_optimised(){
    switch (rand(1,4)){
        case 1;
            echo "streamlined";
            break;
        case 2:
            echo "simplified";
            break;
        case 3:
            echo "optimised";
            break;
        case 4:
            echo "innovated";
            break;
    }
}
?>