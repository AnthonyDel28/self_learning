<?php

$a = 50;
$b = 20;

check_valid_values($a, $b);

function check_valid_values($a, $b){
    if($a > 0 & $b > 0){
        print_square_body($a, $b);
    }    
    else{
        print "Les valeurs ne sont pas correctes!";
    }
}

function print_square_body($a, $b){
    for($j = 1; $j <= $b; $j++){
        for($i = 1; $i <= $a; $i++){
            print "*";
        }
        print "<br>";
    }
}


?>

<!DOCTYPE html>
<html>
	<style>
		body {
			background-color: #000000;
			color: #fff;
            text-align: center;
		}
	</style>