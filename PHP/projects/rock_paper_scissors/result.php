<?php

if(isset($_GET['play'])){
    if($_GET['play'] == 'rock' || $_GET['play'] == 'paper' || $_GET['play'] == 'scissors'){
        $pick = $_GET['play'];
    }
    else {
        header('Location: ./index.php');
    }
}
else {
    header('Location: ./index.php');
}

$tab[] = ['rock', 'paper', 'scissors'];





?>