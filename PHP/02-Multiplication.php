<?php

?>

<html>
    <body>
        <table>
            <div class="array">
            <?php
                for($j = 1; $j <= 9; $j++){
                    for($i = 1; $i <=9; $i++){
                        print '<td>'.$i * $j.'</td>';
                    }
                    print '<tr></tr>';
                } 
            ?>
            </div>
        </table>
    </body>
</html>

<style>
    
    body {
        background-color: #000;
    }
    
    table {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    td {
        text-align: center;
        border: 1px solid #fff;
        padding: 5px;
        color: #fff;
    }

    
</style>