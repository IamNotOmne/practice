<?php
/*Agenda to break the code 
1. Create a function spellMyname() the 
*and return each letter of the $str
2. Make sure that the function can be return 
*where x is the number of letters
*/
//returning and display is different 

function spellMyName($str) {
        return $str; 
    
}       
$str = "Omne Jean";
$arr = [];
 //initialize;condition;iterator
for($j=0;$j<strlen($str);$j++) {
    $arr[$j] = spellMyName($str[$j]);
}



// $j =0;
// while($j<strlen($str))
// {
//     ++$j;
//     echo "The value of j index is $j.<br/>";
//     $arr[$j] = spellMyName($str[$j]);
// }


//for debug
print_r($arr); // doing something outside
?>