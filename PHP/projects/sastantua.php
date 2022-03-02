<html>
    <body>
<div class="pyramid">
    <div class="form">
            <?php
                $max_height = 20;

                for($j = 1; $j <= $max_height; $j++){
                    for($i = 1; $i < $j; $i++){
                        print '*';
                    }
                    print '<br>';
                }
            ?>
        </div>

        <div class="mirror">
            <?php
                for($j = 0; $j <= $max_height - 1; $j++){
                    for($i = 1; $i < $j; $i++){
                        print '*';
                    }
                    print '<br>';
                }
            ?>
        </div>
</div>
    </body>
</html>


<style>
    body {
        background-color: #000;
    }

    .pyramid {
        display:  flex;
    }

    .form {
        display: flex;
        justify-content: center;
        color: #fff;
        transform: rotateY(180deg);
    }

    .mirror {
        color: #fff;
    }
</style>