<?php
session_start();
$_SESSION["status"] = $_SESSION["status"] + 1;

if($_SESSION["status"] == 2){
    if(isset($_GET['play'])){
        if($_GET['play'] == 'Rock' || $_GET['play'] == 'Paper' || $_GET['play'] == 'Scissors'){
            $pick = $_GET['play'];
        }
        else {
            header('Location: ./index.php');
        }
    }
    else {
        header('Location: ./index.php');
    }
    
    
    $choices = array("Rock", "Paper", "Scissors");
    $adverse_choice = array_rand($choices);
    
    ?>
    
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/icofont/icofont.min.css">
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
            <p class="title-play">Result</p>
            <div class="play-zone">
                    <div class="card">
                        <p class="card-title"><? print $_GET['play']; ?></p>
                        <img src="./img/<? print $_GET['play'] ?>.png" width="100px">
                    </div>   
                <p class="vs">vs</p>
                    <div class="card">
                        <p class="card-title"><? print $choices[$adverse_choice] ?></p>
                        <img src="./img/<? print $choices[$adverse_choice] ?>.png" width="100px">
                    </div>
            </div>
            <div class="result-text">
                <? 
                    if($pick == $choices[$adverse_choice]){
                        print "<p class='draw'>DRAW !</p>";
    
                    }
                    else if(($pick == 'Rock' && $choices[$adverse_choice] == 'Scissors') || ($pick == 'Scissors' && $choices[$adverse_choice] == 'Paper') || ($pick == 'Paper' && $choices[$adverse_choice] == 'Rock')){
                        print "<p class='win'>YOU WIN !</p>";
    
                    }
                    else {
                        print "<p class='loose'>YOU LOST !</p>";
                    }
                ?>
            </div>
            <div class="try-again">
                <a href="./play.php"><div class="try-again-button">
                    <p class="try-again-text"><i class="icofont-loop"></i>Try again</p>
                </div></a>
            </div>
        </section>
        <footer>
            <div>
                <p class="rights">Created by Anthony.D (Sudent Web Developer) 2021-2022</p>
            </div>
        </footer>
    </body>
    </html>
    <?php
}

else {
    header('Location: ./index.php');
}

