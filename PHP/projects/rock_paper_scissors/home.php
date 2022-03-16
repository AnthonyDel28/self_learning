<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["life"] = 4;
$_SESSION["round"] = 1;
$_SESSION["max_rounds"] = 4;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./img/rock.png">
    <title>Rock Paper Scissors Game</title>
</head>
<body>
    <header>
        <div class="top-logo">
            <img src="./img/logo.png" alt="">
        </div>
    </header>
    <section class="button-area">
        <a href="./play.php">
            <div class="play-button">
                <p class="text-button">Play Now !</p>
            </div>
        </a>
    </section>
    <footer>
        <div>
            <p class="rights">Created by Anthony.D (Sudent Web Developer) 2021-2022</p>
        </div>
    </footer>
</body>
</html>