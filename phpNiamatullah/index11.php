<?php
// if(condition 1){
//     statement 1
// }elseif{
//     statement 2 .... elseif ... elseif
// }else{
//     default statement
// }

$pv = 63;
if($pv >= 80 &&  $pv <= 100){
    echo "tu peux veincre le boss final";
}elseif($pv >= 60 && $pv < 80){
    echo "tu peux repousser le boss final.";
}elseif($pv >= 45 && $pv < 60){
    echo "tu peux luttée contre le boss final.";
}elseif($pv >= 33 && $pv < 45){
    echo "tu va te faire masacrée par le boss final.";
}elseif($pv < 33) {
    echo "tu est mort";
}else{
    echo "Please enter valid Percentage.";
}