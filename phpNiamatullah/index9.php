<?php

// What are logical operators

// When we have two conditions it is called logical operators

// if Condition 1, Condition 2

// Different Type of Logical operators

// Operator               Name

//    &&                Logical AND

//    ||                Logical OR

//     !                Logical NOT

//    AND               Logical AND

//    OR                Logical OR

//    XOR               Exclusive OR

// ::::::::::::::::::::::::::::::::::::::::::::::

// if (Condition1 && Condition2){
//     Statement
// }

// ::::::::::::::::::::::::::::::::::::::::::::::

// Run only when both conditions must be TRUE

// if (Condition1 || Condition2){
//     Statement
// }

// Run only when both conditions must be TRUE

// ::::::::::::::::::::::::::::::::::::::::::::::

// if !(Condition){
//     Statement
// }

// if the condition is true return false
// if the condition is false return true

// if (Condition1 XOR Condition2){
//     Statement
// }

// if two Conditions are true return false
// if two Conditions are false return false
// if one condition true return true


// => AND && :::::::::::::::::::::::::::::::::::::

// $age = 30;

// if($age >= 18 && $age <= 26){
//     echo "You are eligible";
// }

// echo "You are not eligible";

// => OR || :::::::::::::::::::::::::::::::::::::

// $age = 30;

// if($age >= 18 || $age <= 26){
//     echo "You are eligible";
// }

// => ! :::::::::::::::::::::::::::::::::::::

// $age = 30;

// if (!($age >= 18)){
//     echo "You are eligible";
// }

// echo "You are not eligible";

// => XOR || :::::::::::::::::::::::::::::::::::::

$age = 27;

if($age >= 1 XOR $age <= 26){ // L'un est vrai mais l'autre est faux
    echo "You are eligible";
}

// echo "You are not eligible";



?>