<?php

function word_showYou(){
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
    }
}
function word_designers(){
    switch (rand(1,7)){
        case 1;
            echo "companies";
            break;
        case 2:
            echo "studios";
            break;
        case 3:
            echo "businesses";
            break;
        case 4;
            echo "professionals";
            break;
        case 5:
            echo "experts";
            break;
        case 6:
            echo "consultants";
            break;
        case 7:
            echo "organisations";
            break;
    }
}
function word_setsUsApart(){
    switch (rand(1,3)){
        case 1;
            echo "sets us apart";
            break;
        case 2:
            echo "makes us different";
            break;
        case 3:
            echo "makes us stand out";
            break;
    }
}
function word_dontPay(){
    switch (rand(1,2)){
        case 1;
            echo "don't pay";
            break;
        case 2:
            echo "are not charged";
            break;
    }
}
function word_ensure(){
    switch (rand(1,4)){
        case 1;
            echo "ensure";
            break;
        case 2:
            echo "make sure";
            break;
        case 3:
            echo "certify";
            break;
        case 4:
            echo "make certain";
            break;
        case 5:
            echo "guarantee";
            break;
    }
}
function word_n_appraisal(){
    switch (rand(1,3)){
        case 1:
            echo "n appraisal";
            break;
        case 2:
            word_quote();
            break;
    }
}
function word_quote(){
    switch(rand(1,2)){
        case 1:
            echo " cost";
            break;
        case 2;
            echo " quote";
            break;
    }
}



function word_yourWallet(){
    switch (rand(1,3)){
        case 1:
            echo "your wallet";
            break;
        case 2:
            echo "the bank";
            break;
        case 3:
            echo "your heart when you see the";
            word_quote();
            break;     
    }
}
function word_costAFortune(){
    switch(rand(1,2)){
        case 1:
            echo "cost ";
            word_thousandsOfPounds();
            break;
        case 2:
            echo "break ";
            word_yourWallet();
            break;
    }
}
function word_thousandsOfPounds(){
    switch (rand(1,4)){
        case 1;
            echo "thousands of pounds";
            break;
        case 2:
            echo "a fortune";
            break;
        case 3:
            echo "a pretty penny";
            break;
        case 4:
            echo "an arm and a leg";
            break;
        case 5:
            echo "bundles of cash";
            break;
        case 6:
            echo "hundreds pounds";
            break;
    }
}
function word_need(){
    switch (rand(1,2)){
        case 1;
            echo "have";
            break;
        case 2:
            echo "need";
            break;
    }
}
function word_really(){
    switch (rand(1,27)){
        case 1:
            echo "absolutely";
            break;
        case 2:
            echo "really";
            break;
        case 3:
            echo "actually";
            break;
        case 4:
            echo "genuinely";
            break;
        case 5:
            echo "literally";
            break;
        case 6:
            echo "admittedly";
            break;
        case 7:
            echo "as a matter of fact";
            break;
        case 8:
            echo "assuredly";
            break;
        case 9:
            echo "beyond doubt";
            break;
        case 10:
            echo "categorically";
            break;
        case 11:
            echo "certainly";
            break;
        case 12:
            echo "honestly";
            break;
        case 13:
            echo "in actuality";
            break;
        case 14:
            echo "in effect";
            break;
        case 15:
            echo "in fact";
            break;
        case 16:
            echo "in point of fact";
            break;
        case 17:
            echo "in reality";
            break;
        case 18:
            echo "indeed";
            break;
        case 19:
            echo "indubitably";
            break;
        case 20:
            echo "legitimately";
            break;
        case 21:
            echo "of course";
            break;
        case 22:
            echo "positively";
            break;
        case 23:
            echo "precisely";
            break;
        case 24:
            echo "surely";
            break;
        case 25:
            echo "truly";
            break;
        case 26:
            echo "undoubtedly";
            break;
        case 27:
            echo "unquestionably";
            break;
    }
}
function word_great(){
    switch (rand(1,14)){
        case 1:
            echo "great";
            break;
        case 2:
            echo "stupendous";
            break;
        case 3:
            echo "terrific";
            break;
        case 4:
            echo "extravagant";
            break;
        case 5:
            echo "immense";
            break;
        case 6:
            echo "tremendous";
            break;
        case 7:
            echo "dazzling";
            break;
        case 8:
            echo "excellent";
            break;
        case 9:
            echo "exquisite";
            break;
        case 10:
            echo "fascinating";
            break;
        case 11:
            echo "grand";
            break;
        case 12:
            echo "magnificent";
            break;
        case 13:
            echo "marvelous";
            break;
        case 14:
            echo "wonderful";
            break;
    }
}
function word_will(){
    switch (rand(1,2)){
        case 1:
            echo "will";
            break;
        case 2:
            echo "can";
            break;
    }
}
function word_allYear(){
    switch (rand(1,3)){
    case 1:
        echo "all year around";
        break;
    case 2:
        echo "all the time";
        break;
    case 3:
        word_rightNow();
        break;
}
}
function word_wishing(){
    switch (rand(1,3)){
    case 1:
        echo "wishing";
        break;
    case 2:
        echo "wanting";
        break;
    case 3:
        echo "needing";
        break;
}
}
function wordcap_perhaps(){
    switch (rand(1,3)){
    case 1:
        echo "Perhaps";
        break;
    case 2:
        echo "If";
        break;
    case 3:
        echo "Maybe";
        break;
}
}
function word_wanted(){
    switch (rand(1,3)){
    case 1:
        echo "wanted";
        break;
    case 2:
        echo "desired";
        break;
    case 3:
        echo "requested";
        break;
}
}
function word_accept(){
     switch(rand(1,3)){
    case 1:
      echo "accept";
      break;
    case 2:
      echo "like";
      break;
    case 3:
      echo "agree with";
      break;
  }
}
function word_offer(){
     switch(rand(1,3)){
    case 1:
      echo "offer";
      break;
    case 2:
      echo "pitch";
      break;
    case 3:
      echo "proposition";
      break;
  }
}
function word_can(){
     switch(rand(1,2)){
    case 1:
      echo "can";
      break;
    case 2:
      echo "will";
      break;
  }
}
function word_offOf(){
     switch(rand(1,2)){
    case 1:
      echo "from";
      break;
    case 2:
      echo "off of";
      break;
  }
}
function word_best(){
    switch(rand(1,5)){
    case 1:
      echo "best";
      break;
    case 2:
      echo "greatest";
      break;
  case 3:
      echo "finest";
      break;
  case 4:
      echo "most first-rate";
      break;
  case 5:
      echo "most first-class";
      break;
  }
}
function word_asap(){
    switch(rand(1,2)){
    case 1:
      echo "as soon as possible";
      break;
    case 2:
      echo "without any delay";
      break;
  }
}
function word_makingSure(){
    switch(rand(1,3)){
    case 1:
      echo "making sure";
      break;
    case 2:
      echo "ensuring";
      break;
  case 3:
      echo "taking care";
      break;
  }
}
function word_remainder(){
    switch(rand(1,2)){
        case 1:
            echo "remainder";
            break;
        case 2:
            echo "rest";
            break;
    }
}
function word_do(){
    switch(rand(1,2)){
        case 1:
            echo "do";
            break;
        case 2:
            echo "take care";
            break;
    }
}
function word_information(){
    switch(rand(1,2)){
        case 1:
            echo "information";
            break;
        case 2:
            echo "details";
            break;
    }
}
function word_allOfWhich(){
    switch(rand(1,2)){
        case 1:
            echo "all of which";
            break;
        case 2:
            echo "which are all";
            break;
    }
}
function word_asWellAs(){
    switch(rand(1,3)){
        case 1:
          echo "also";
          break;
        case 2:
          echo "even";
          break;
          case 3:
          echo "as well as";
          break;
      }
}
function word_cars(){
    switch (rand(1,2)){
        case 1:
            echo "cars";
            break;
        case 2:
            echo "vehicles";
            break;
    }
}
function word_larger(){
    switch(rand(1,2)){
    case 1:
      echo "larger";
      break;
    case 2:
      echo "bigger";
      break;
  }
}
function word_small(){
    switch(rand(1,2)){
    case 1:
      echo "small";
      break;
    case 2:
      echo "little";
      break;
  }
}
function word_kindsOf(){
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
}
function word_buy(){
    switch (rand(1,2)){
        case 1:
            echo "buy";
            break;
        case 2:
            echo "purchase";
            break;
    }
}
function word_apply_using(){
    switch (rand(1,3)){
        case 1:
            echo "complete";
            break;
        case 2:
            echo "fill in";
            break;
        case 3:
            echo "apply using";
            break;
    }
}
function word_call(){
    switch (rand(1,2)){
        case 1:
            echo "phone";
            break;
        case 2:
            echo "call";
            break;
    }
}
function word_rightNow(){
    switch(rand(1,9)){
        case 1:
            echo "now";
            break;
        case 2:
            echo "immediately";
            break;
        case 3:
            echo "today";
            break;
        case 4:
            echo "right now";
            break;
        case 5:
            echo "instantly";
            break;
        case 6:
            echo "straightaway";
            break;
        case 7:
            echo "at this moment";
            break;
        case 8:
            echo "this instant";
            break;
        case 9:
            echo "here and now";
            break;
    }
}
function word_not(){
    switch (rand(1,4)){
        case 1;
            echo "don't you";
            break;
        case 2:
            echo "not";
            break;
        case 3:
            echo "should you not";
            break;
        case 4:
            echo "shouldn't you";
    }
}
function word_hassle(){
    switch (rand(1,4)){
        case 1:
            echo "hassle";
            break;
        case 2:
            echo "bother";
            break;
        case 3:
            echo "inconvenience";
            break;
        case 4:
            echo "trouble";
            break;
    }
}
function word_nEasy(){
    switch (rand(1,17)){
        case 1;
            echo "n easy";
            break;
        case 2:
            echo "n accessible";
            break;
        case 3:
            echo " simple";
            break;
        case 4:
            echo " straightforward";
            break;
        case 5:
            echo "n uncomplicated";
            break;
        case 6:
            echo " painless";
            break;
        case 7:
            echo " manageable";
            break;
        case 8:
            echo "n easily done";
            break;
        case 9:
            echo " no problem";
            break;
        case 10:
            echo " no bother";
            break;
        case 11:
            echo " no problem";
            break;
        case 12:
            echo " no sweat";
            break;
        case 13:
            echo " no trouble";
            break;
        case 14:
            echo " piece of cake";
            break;
        case 15:
            echo "n undemanding";
            break;
        case 16:
            echo "n uninvolved";
            break;
        case 17:
            echo "n untroublesome";
            break;
    }
}
function word_looking(){
    switch (rand(1,4)){
        case 1:
            echo "looking";
            break;
        case 2:
            echo "searching";
            break;
        case 3:
            echo "hunting";
            break;
        case 4:
            echo "seeking";
            break;
    }
}
function word_live(){
    switch(rand(1,2)){
        case 1:
            echo "live";
            break;
        case 2:
            echo "are";
            break;
    }
}
function word_important(){
    switch (rand(1,6)){
        case 1:
            echo "important";
            break;
        case 2:
            echo "crucial";
            break;
        case 3:
            echo "essential";
            break;
        case 4:
            echo "imperative";
            break;
        case 5:
            echo "urgent";
            break;
        case 6:
            echo "vital";
            break;
    }
}
function word_very(){
    switch (rand(1,5)){
        case 1:
            echo "very";
            break;
        case 2:
            echo "really";
            break;
        case 3:
            echo "actually";
            break;
        case 4:
            echo "genuinely";
            break;
        case 5:
            echo "literally";
            break;
    }
}
function word_cash(){
    switch(rand(1,2)){
        case 1:
            echo "cash";
            break;
        case 2:
            echo "money";
            break;
    }
}
function wordcap_cash(){
    switch(rand(1,2)){
        case 1:
            echo "Cash";
            break;
        case 2:
            echo "Money";
            break;
    }
}
function wordcap_sell(){
    switch (rand(1,4)){
        case 1:
            echo "Sell";
            break;
        case 2:
            echo "Dispose Of";
            break;
        case 3:
            echo "Scrap";
            break;
        case 4:
            echo "Get Rid Of";
            break;
    }
}
function word_quickly() {
    switch (rand(1,12)){
        case 1;
            echo "urgently";
            break;
        case 2:
            echo "quickly";
            break;
        case 3:
            echo "rapidly";
            break;
        case 4:
            echo "immediately";
            break;
        case 5:
            echo "instantly";
            break;
        case 6:
            echo "promptly";
            break;
        case 7:
            echo "swiftly";
            break;
        case 8:
            echo "hastily";
            break;
        case 9:
            echo "instantaneously";
            break;
        case 10:
            echo "in haste";
            break;
        case 11:
            echo "in short order";
            break;
        case 12:
            echo "pronto";
            break;
    }
}
function word_have(){
    switch (rand(1,3)){
        case 1;
            echo "have";
            break;
        case 2:
            echo "need";
            break;
        case 3:
            echo "want";
            break;
    }
}
function word_advert(){
    switch (rand(1,2)){
        case 1;
            echo "advert";
            break;
        case 2:
            echo "notice";
            break;
    }
}
function word_answers(){
    switch (rand(1,3)){
        case 1;
            echo "answers";
            break;
        case 2:
            echo "replies to";
            break;
        case 3:
            echo "responds to";
            break;
    }
}
function word_answer(){
    switch (rand(1,3)){
        case 1;
            echo "answer";
            break;
        case 2:
            echo "reply to";
            break;
        case 3:
            echo "respond to";
            break;
    }
}
function word_nobody(){
    switch (rand(1,2)){
        case 1;
            echo "no-one";
            break;
        case 2:
            echo "nobody";
            break;
    }
}
function wordcap_Nobody(){
    switch (rand(1,2)){
        case 1;
            echo "No-one";
            break;
        case 2:
            echo "Nobody";
            break;
    }
}
function word_thinkAbout(){
    switch (rand(1,2)){
        case 1:
            echo "think about";
            break;
        case 2:
            echo "consider";
            break;
    }
}
function word_ever(){
    switch (rand(1,2)){
        case 1:
            echo "ever";
            break;
        case 2:
            echo "happen to";
            break;
    }
}
function word_damages(){
    switch (rand(1,2)){
        case 1:
            echo "damages";
            break;
        case 2:
            echo "breaks";
            break;
    }
}
function word_buyer(){
    switch (rand(1,4)){
        case 1;
            echo "buyer";
            break;
        case 2:
            echo "customer";
            break;
        case 3:
            echo "purchaser";
            break;
        case 4:
            echo "prospector";
            break;
    }
}
function word_car(){
    switch (rand(1,2)){
        case 1:
            echo "car";
            break;
        case 2:
            echo "vehicle";
            break;
    }
}
function wordcap_car(){
    switch (rand(1,2)){
        case 1:
            echo "Car";
            break;
        case 2:
            echo "Vehicle";
            break;
    }
}
function word_timewasters(){
    switch (rand(1,2)){
        case 1:
            echo "time wasters";
            break;
        case 2:
            echo "wastes of time";
            break;
    }
}
function word_tiredOf(){
    switch (rand(1,5)){
        case 1:
            echo "tired of";
            break;
        case 2:
            echo "sick of";
            break;
        case 3:
            echo "annoyed by";
            break;
        case 4:
            echo "a bit miffed by";
            break;
        case 5:
            echo "pulling your hair out because of";
            break;
    }
}
function word_stressful(){
    switch(rand(1,10)){
        case 1:
            echo "stressful";
            break;
        case 2:
            echo "aggravating";
            break;
        case 3:
            echo "disquieting";
            break;
        case 4:
            echo "exasperating";
            break;
        case 5:
            echo "irksome";
            break;
        case 6:
            echo"irritating";
            break;
        case 7:
            echo "maddening";
            break;
        case 8:
            echo "taxing";
            break;
        case 9:
            echo "tense";
            break;
        case 10:
            echo "upsetting";
            break;
    }
}
function word_job(){
    switch (rand(1,6)){
        case 1:
            echo "job";
            break;
        case 2:
            echo "experience";
            break;
        case 3:
            echo "task";
            break;
        case 4:
            echo "activity";
            break;
        case 5:
            echo "situation";
            break;
        case 6:
            echo "grind";
            break;
    }
}
function word_expensive(){
    switch (rand(1,4)){
        case 1:
            echo "expensive";
            break;
        case 2:
            echo "costly";
            break;
        case 3:
            echo "overpriced";
            break;
        case 4:
            echo "pricey";
            break;
    }
}

function word_advertising(){
    switch (rand(1,3)){
        case 1:
            echo "advertising";
            break;
        case 2:
            echo "exhibiting";
            break;
        case 3:
            echo "promoting";
            break;
    }
}
function word_attracts(){
    switch (rand(1,5)){
        case 1:
            echo "attracts";
            break;
        case 2:
            echo "draws";
            break;
        case 3:
            echo "invites";
            break;
        case 4:
            echo "beckons";
            break;
        case 5:
            echo "tempts";
            break;
    }
}
?>