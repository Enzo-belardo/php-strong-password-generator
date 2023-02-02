<?php
function getRandomPass($lenghtPass){
    $caratteri = '0123456789abcdefghijEFGHIJKLMVW123456789.?,):#|*';
    $newPass = '';
    for ($i = 0; $i < $lenghtPass; $i++) {
        $newPass .= $caratteri[rand(0, strlen($caratteri) -1)];
    }
    return $newPass;
}
?>
