<?php
function isArmstrong($num){
    $sum = 0;
    $var = $num;
    while ($var != 0){
        $digit=$var%10;
        $sum = $sum + ($digit ** 3);
        $var = $var / 10;
    }

    if($sum == $num){
        return $num . " is Armstrong number";
    }
    else{
        return $num . " is not Armstrong number";
    }
}

echo isArmstrong(153);
?>