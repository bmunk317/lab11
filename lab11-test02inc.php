<?php
define("DOLLARTOEURO", "0.87");

define("DOLLARTOPOUND", "0.76");

function calculateEuro($dollar){
    $total = $dollar * DOLLARTOEURO;
    return number_format($total, 0);
}
function calculatePound($dollar){
    $total = $dollar * DOLLARTOPOUND;
    return number_format($total,0);
}

function generateBox($name, $numberOfUsers) {
    $storage;
    $email;
    if($numberOfUsers == 1){ 
    $storage = 5;
    $email = 0;
    }
    if($numberOfUsers == 3){ 
    $storage = 15;
    $email = 0;
    }
    if($numberOfUsers == 10){ 
    $storage = 100;
    $email = 50;
    }
    if($numberOfUsers == 50){ 
    $storage = 500;
    $email = 500;
    }
    $cost = $numberOfUsers * 10;
    if ($numberOfUsers == 10){
        $cost = $cost * 0.90;
    }
    else if ($numberOfUsers == 50){
        $cost = $cost * 0.80;
    }
    ?>
    <div class="box">
    <header><?=$name?></header>
            <div>
                <p><span><?=$numberOfUsers?></span> users</p>
                <p><span><?=$storage?></span> GB storage</p>
                <p><span><?=$email?></span> email accounts</p>
            </div>
            <footer><?='$' . "$cost" . ' • €' . calculateEuro($cost) . ' • £' . calculatePound($cost)?></footer> 
            </div>
    <?php
    }

?>