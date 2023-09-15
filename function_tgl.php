<?php

function Inputtgl($tanggal){
    $pisah = explode('/', $tanggal);
    $run = array($pisah[2],$pisah[0],$pisah[1]);
    $satukan = implode("-", $run);

    return $satukan;
}

?>