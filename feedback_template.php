<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="./progressbar.js" defer></script> -->
    <link rel="stylesheet" href="style.css">
    <title>You're done!</title>
</head>
<body>

    <script>
        session_start();
        session_destroy();
    </script>

    <?php
        //include './data-collector.php';
        include './tools.php';
        include './header.php';
        include './questions.php';
        include './progressbar.php';
    ?>

    <?php
        // Hole die Daten aus der Hauptliste ($questions array)
        // prettyPrint ($data); // DEVONLY
    ?>

<div class="container">
    <!-- Rest of the website content comes next -->

    <h1>Please take a Quiz</h1>

    <img class="image" src="./images/health.jpg" alt="health.jpg">

    <div class="question">

        <br><br>

        <?php prettyPrint($questions); ?>

        <div class="bar">
            <!--
            <div class="progress">
                <div class="progress-bar bartext text-center" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                </div>
            </div>
            -->
            <canvas id="progressCanvas"></canvas>
        </div>

        <h3>Feedback</h3>

    </div>

</div>


    <?php
        include './footer.php';
    ?>

</body>