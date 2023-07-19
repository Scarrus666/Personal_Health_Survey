<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="./progressbar.js" defer></script> -->
    <link rel="stylesheet" href="style.css">
    <title>Health Survey</title>
</head>
<body>

    <?php
        // Start or resume the session
        session_start();

        // Retrieve the saved responses from the session
        $responses = $_SESSION['responses'];

        //include './data-collector.php';
        include './questions.php';
        include './header.php';
        include './progressbar.php';
    ?>

    <?php

        foreach ($responses as $questionIndex => $response) 
            {
                $question = $questions[$questionIndex];
                $questionText = $question['question-text'];
            
                echo "Question: $questionText<br>";
                echo "Answer: $response<br>";
                echo "<br>";
            }

    ?>

    <?php
        include './footer.php';
    ?>
</body>