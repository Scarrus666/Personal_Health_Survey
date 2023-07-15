<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>

    <?php
        include './header.php';
        include './frame_start.php';
    ?>

        <h1>Please take a Quiz</h1>

        <div class="image">
            <img src="./images/health.png" alt="health.png">
        </div>

        <div class="question">
            <h4>Please take the time for our short Quiz.</h4>
            <p>It will help you evaluate your current and future health condition.</p>

            <br><br>

            <!-- This is the old simple progress bar
            <progress id="quiz" value="0" max="10"></progress><br>
            -->
        <div class="bar">
            <div class="progress">
                <div class="progress-bar bartext" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 10%; text-align:center">
                    PROGRESS
                </div>
            </div>
        </div>

            <br>
            <h5>How healthy are you physically?</h5><br>

            <div class="slidecontainer">
                Not at all healthy<input type="range" min="1" max="5" value="3" class="slider" id="myRange">Extremely healthy
            </div>

        </div>



    <?php
        include './frame_end.php';
        include './footer.php';
    ?>
    
</body>
</html>