<?php
function powerofTow($num){
    if(!($num & ($num-1)))
    echo "$num is power of 2";
    else
    echo "$num is not power of 2";
}
?>