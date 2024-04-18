<?php
require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/db.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<style>
    header {
        background-color: #1D2D3C;
        color: white;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>

    <header>
        <div>
            The Film
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <?php echo $american_sniper->titolo ?><br>
                    <?php echo $american_sniper->lingua ?><br>
                    <?php echo $american_sniper->voto ?>
                </div>



            </div>
            <div class="col">
                <div class="card">
                    <?php echo $matrix->titolo ?><br>
                    <?php echo $matrix->lingua ?><br>
                    <?php echo $matrix->voto ?>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <?php echo $avatar->titolo ?><br>
                    <?php echo $avatar->lingua ?><br>
                    <?php echo $avatar->voto ?>
                </div>
            </div>
        </div>
    </div>




</body>

</html>