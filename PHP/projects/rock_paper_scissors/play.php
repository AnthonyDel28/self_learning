<?php
session_start();

$_SESSION["status"] = 1;

if($_SESSION["round"] <= 10){?>
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
    <section>
        <p class="title-play">Round <?php print $_SESSION["round"]; ?></p>
        <div class="play-zone">
            <a href="result.php?play=Rock">
                <div class="card">
                    <p class="card-title">Rock</p>
                    <img src="./img/rock.png" width="100px">
                </div>
            </a>
            <a href="result.php?play=Paper">
                <div class="card">
                    <p class="card-title">Paper</p>
                    <img src="./img/paper.png" width="100px">
                </div>
            </a>
            <a href="result.php?play=Scissors">
                <div class="card">
                    <p class="card-title">Scissors</p>
                    <img src="./img/scissors.png" width="100px">
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="play-stats">
            <div class="play-stats-life">
                <p class="play-stats-text">Life points :</p>
                <?php
                    $_life_points = $_SESSION["life"];
                    for($i = $_life_points; $i >= 1; $i--){
                        print '<img src="./img/hearth.png" alt="">';
                    }
                    
                ?>
            </div>
            <div class="play-stats-score">
                <div class="play-stats-score-title">
                    <img src="./img/medail.png" alt=""><p class="play-stats-text">Score :</p>
                </div>
                <p class="play-stats-score-text"><?php print $_SESSION["score"] ?> points</p>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <p class="rights">Created by Anthony.D (Sudent Web Developer) 2021-2022</p>
        </div>
    </footer>
</body>
</html><?php
}
elseif($_SESSION["round"] = 11) {
    header('Location: ./end_game.php');
}

?>

