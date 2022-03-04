
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Your square</title>
</head>
<body>
    <div class="title">
        <h1>Your square !</h1>
    </div>

    <div class="square">
    <?php

$_GET['lenght'];
$_GET['height'];


for($_height = 1; $_height <= $_GET['height']; $_height++){
    if($_height == 1 || $_height == $_GET['height']){
        for($_long = 1; $_long <= $_GET['lenght']; $_long++){
            print '*';
        }
    }
    else if($_height > 1  && $_height < $_GET['height']){
        for($_l = 1; $_l <= $_GET['lenght']; $_l++){
            if($_l == 1 || $_l == $_GET['lenght']){
                print '*';
            }
            else if($_l > 1 && $_l < $_GET['lenght']){
                print  "&nbsp&nbsp";
            }
            else{
                print '0';
            }
        }
    }
    print '<br>';
}

?>
    </div>
</body>
</html>