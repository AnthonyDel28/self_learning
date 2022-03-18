<?php 

session_start();

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
    <section class="scoreboard">
            <div class="scoreboard-box">
                <div class="scoreboard-box-sub">
                <p class="scoreboard-box-title">Congratulations !</p>
                <div class="scoreboard-box-content">
                    <img src="./img/gnome.png" width="170px" class="gnome">
                    <p class="scoreboard-box-content-text"> <img src="./img/medail.png" width="40px" >Your score: </p>
                    <p class="score"><?php print $_SESSION["score"]; ?> points</p>
                </div>
                </div>
            </div>
    </section>
    <section>
        <div class="three-buttons">
            <a href="./home.php">
                <div class="try-again-button">
                    <p class="try-again-button-text">New Game</p>
                </div>
            </a>
            <a href="">
                <div class="try-again-button">
                    <p class="try-again-button-text">Ladder</p>
                </div>
            </a>
            <a href="https://github.com/AnthonyDel28" target="_blank">
                <div class="try-again-button">
                    <p class="try-again-button-text">Github</p>
                </div>
            </a>
        </div>
    </section>
    <footer>
        <div>
            <p class="rights">Created by Anthony.D (Sudent Web Developer) 2021-2022</p>
        </div>
    </footer>
</body>
</html>
