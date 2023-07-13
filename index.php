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
        include './title_frame.php';
    ?>

        <h1>Please take a Quiz</h1>

    <?php
        include './title_frame_end.php';
        include './img_frame.php';
    ?>

        <img src="./images/health.png" alt="health.png">

    <?php
        include './img_frame_end.php';
        include './question_frame.php';
    ?>

        <h4 class="px-3">Please take the time to take our short Quiz.</h4>
        <p class="px-3">It will help you evaluate your current and future health condition.</p>

        <br><br>

        <p class="px-3">How healthy are you physically</p>

    <?php
        include './question_frame_end.php';
        include './answer_frame.php';
    ?>

        <p>slider</p>

    <?php
        include './answer_frame_end.php';
        include './frame_end.php';
        include './footer.php';
    ?>
    
</body>
</html>