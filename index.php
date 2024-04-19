<?php
require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/db.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/TvSerie.php';

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
                    <p><?php echo $american_sniper->titolo ?></p>
                    <p><?php echo $american_sniper->lingua ?></p>
                    <p><?php echo $american_sniper->voto ?></p>
                    <p><?php echo $american_sniper->profitti ?></p>
                    <p><?php echo $american_sniper->durata ?></p>

                </div>

            </div>
            <div class="col">
                <div class="card">
                    <p> <?php echo $matrix->titolo ?></p>
                    <p> <?php echo $matrix->lingua ?><br></p>
                    <p> <?php echo $matrix->voto ?></p>
                    <p> <?php echo $matrix->profitti ?></p>
                    <p><?php echo $matrix->durata ?></p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <p> <?php echo $avatar->titolo ?></p>
                    <p> <?php echo $avatar->titolo ?></p>
                    <p> <?php echo $avatar->lingua ?></p>
                    <p> <?php echo $avatar->voto ?></p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <p> <?php echo $Gold->titolo ?> </p>
                    <p> <?php echo $Gold->lingua ?></p>
                    <p> <?php echo $Gold->voto ?></p>
                    <p> <?php echo $Gold->profitti ?></p>
                    <p> <?php echo $Gold->durata ?></p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <p> <?php echo $Shake->titolo ?> </p>
                    <p> <?php echo $Shake->lingua ?></p>
                    <p> <?php echo $Shake->voto ?></p>
                    <p> <?php echo $Shake->numerostagioni ?> </p>
                </div>
            </div>
        </div>
    </div>


    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li>
                            <a href="">about</a>
                        </li>
                        <li>
                            <a href="">about</a>
                        </li>
                        <li>
                            <a href="">about</a>
                        </li>
                        <li>
                            <a href="">about</a>
                        </li>
                        <li>
                            <a href="">about</a>
                        </li>
                        <li>
                            <a href="">about</a>
                        </li>
                        <li>
                            <a href="">about</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </footer> -->


</body>

</html>